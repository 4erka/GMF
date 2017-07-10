<?php

function connectmysql() {
	$dbname = "pfr";
	$user = "develop";
	$password = "aeroasia";
	$host = "192.168.40.118";
	$dbconnection=mysql_connect($host,$user,$password) or die("Gagal melakukan koneksi ke database");
	mysql_select_db($dbname);
	return $dbconnection;
}

function connectmcdr() {
	$dbname = "mcdr";
	$user = "ter1";
	$password = "reliability";
	$host = "192.168.40.101";
	$dbconnection=mysql_connect($host,$user,$password) or die("Gagal melakukan koneksi ke database");
	mysql_select_db($dbname);
	return $dbconnection;
}

function connect() {
	$dbname = "AircomSrv";
	$user = "AS_USR_GA";
	$password = "sita2000";
	$host = "192.168.30.237";
	$dbconnection=mssql_connect($host,$user,$password) or die("Gagal melakukan koneksi ke database");
	mssql_select_db($dbname);
	return $dbconnection;
}

function bulan($text)
{	
	$line = "";
	if ($text == "JAN"){
		$line = "01";
	} else if ($text == "FEB"){
		$line = "02";
	} else if ($text == "MAR"){
		$line = "03";
	} else if ($text == "APR"){
		$line = "04";
	} else if ($text == "MAY"){
		$line = "05";
	} else if ($text == "JUN"){
		$line = "06";
	} else if ($text == "JUL"){
		$line = "07";
	} else if ($text == "AUG"){
		$line = "08";
	} else if ($text == "SEP"){
		$line = "09";
	} else if ($text == "OCT"){
		$line = "10";
	} else if ($text == "NOV"){
		$line = "11";
	} else if ($text == "DEC"){
		$line = "12";
	}
	return $line;
}

$connCRJ_LogId = connectmcdr();
$qrybaru = "SELECT Max(`crj1000-a`.`LogId`) AS `Max` FROM `crj1000-a`";
$hasilid = mysql_query($qrybaru);
while ($hasillagi = mysql_fetch_array($hasilid)){
	$hasilbaru = $hasillagi["Max"];
}
mysql_free_result($hasilid);

/*select new data from Aircom*/

$connAircom_newData = connect();

$query = "SELECT Msg, LogtId FROM Logt WHERE (LogtId > '$hasilbaru') AND SMI = 'CFD' AND Source = 'QXSXMXS' AND AircraftId like '.PK-GR%' AND MessageType like '%Current Fault%' AND Msg NOT LIKE '%QTB%'";
//$query = "SELECT Msg, LogtId FROM Logt WHERE (LogtId > 261984051) AND SMI = 'CFD' AND Source = 'QXSXMXS' AND AircraftId like '.PK-GR%' AND MessageType like '%Current Fault%' AND Msg NOT LIKE '%QTB%'";// untuk data mulai 2014

//print_r("flag1");
$result = mssql_query($query) or die("No New Data");

if (mssql_num_rows($result) == 0){
	die("No New Data");
}
//print_r(mssql_num_rows($result));

mssql_close($connAircom_newData);

/*lookup city, cmcmessage and fdemessage*/

//$connA320_lookUp = connectmysql();

/*$qrycity = "SELECT Value, ConvertTo FROM LookupItems WHERE (TableID = '5')";
$resultcity = mysql_query($qrycity);
while ($hasilcity = mysql_fetch_array($resultcity)){
	$city[$hasilcity["Value"]] = $hasilcity["ConvertTo"];
}*/

while ($hasilFH = mssql_fetch_array($result)){
//print_r("test ");
$lines = explode("\n", $hasilFH["Msg"]);
$logid = $hasilFH["LogtId"];

$acreg = substr($lines[3],16,3);
$flightno = substr($lines[3],3,6);

$dateoccur = "20".substr($lines[9],13,2)."-".bulan(substr($lines[9],8,3))."-".substr($lines[9],6,2);
$timeoccur = substr($lines[8],6,2).":".substr($lines[8],9,2).":00";

$linenumber = count($lines);
$linenow = 14;

while($linenow <= $linenumber){
	if(substr($lines[$linenow],0,3) == "ATA"){
		$ata = substr($lines[$linenow],3,2);
		$subata = substr($lines[$linenow],6,2);
		$desc = substr($lines[$linenow],9,strpos($lines[$linenow],"  ")-9);
		
		$lru = substr($lines[$linenow+1],1,strpos($lines[$linenow+1],"  ",1)-1);
		$status = substr($lines[$linenow+2],2,strpos($lines[$linenow+2],"  ",2)-2);
		$message = substr($lines[$linenow+3],2,strpos($lines[$linenow+3],"  ",2)-2);
		
		$connCRJ_insert = connectmcdr();
		$qry = "INSERT INTO `crj1000-a` (`REG`,`FN`,`DATE`,`TIME`,`ATA`,`SUBATA`,`DESCRIPTION`,`LRU`,`STATUS`,`MESSAGE`,LogId) VALUES ('".$acreg."','".$flightno."','".$dateoccur."','".$timeoccur."','".$ata."','".$subata."','".$desc."','".$lru."','".$status."','".$message."','$logid')";
		
		print_r($qry);
		$resultqry = mysql_query($qry, $connCRJ_insert);
		
		$linenow = $linenow + 3;
	}
	$linenow = $linenow + 1;
}

}

mssql_free_result($result);

?>