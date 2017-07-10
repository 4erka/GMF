<?php

$yesterday = mktime(0, 0, 0, date("m")  , date("d")-1, date("Y"));


//// CONNECT IMESYS
$connect = mssql_connect("RPT-DB-01", "usr-te-imesys", "gmfmr0");
if ($connect)
	mssql_select_db("Imesys", $connect);
else
	exit;

$query = "SELECT 
  A.acReg, 
  CONVERT(VARCHAR(10), MAX(A.blockOffDate), 120) as LAST_DATE, 
  (SUBSTRING(MAX(fhours),0,CHARINDEX(':',MAX(fhours)))+SUM(DATEPART(hour,A.airTime))+(SUBSTRING(MAX(fhours),CHARINDEX(':',MAX(fhours))+1,2)+SUM(DATEPART(minute,A.airTime)))/60) AS FH_TOTAL_HRS, 
  (SUBSTRING(MAX(fhours),CHARINDEX(':',MAX(fhours))+1,2)+SUM(DATEPART(minute,A.airTime)))%60 AS FH_TOTAL_MNT,
  SUM(A.landing) + MAX(fcycles) AS FC
FROM
  aircraftflightlog A
  INNER JOIN tbl_init_fhours_and_fcycles B ON (B.acreg = A.acReg)
WHERE
  1 = 1 AND 
  A.blockOffDate >= B.date_init AND 
  A.blockOffDate < DATEADD(day, 1, '".date('Y-m-d', $yesterday)."') AND 
  A.voidStatus <> 'true'
GROUP BY
  A.acReg";
$result = mssql_query($query, $connect);
mssql_close($connect);


$insert_query = "INSERT INTO aircraft_age (aircraft_reg, last_update, aircraft_hours, aircraft_cycles, record_date) VALUE ";
$coma = "";
while ($data = mssql_fetch_array($result)) {
	if ($coma)
		$insert_query .= ", ";
	$insert_query .= "('".strtoupper($data[0])."', '".$data[1]."', '".$data[2].":".($data[3]<10?'0'.$data[3]:$data[3]).":00', ".$data[4].", '".date('Y-m-d', $yesterday)."')";
	$coma = "1";
}

//// CONNECT CCM
//$connect_ccm = mysql_connect("192.168.40.101", "ccm", "ccm");
//if ($connect_ccm)
//	mysql_select_db("ccm", $connect_ccm);
//else
//	exit;

//$query_ccm = $insert_query;
//$result_ccm = mysql_query($query_ccm, $connect_ccm);
//mysql_close($connect_ccm);

?>