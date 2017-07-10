<?

function connectimesysRPTDB()
	{
		$server = 'RPT-DB-01';
		$username = 'usr-te-imesys';
		$password = 'gmfmr0';
	
		$database = 'db_Imesys';

		$sqlconnect = mssql_pconnect($server, $username, $password);
		if ($sqlconnect)
		{
			mssql_select_db($database, $sqlconnect);
			return $sqlconnect;
		}
		else
		{
			$sqlconnect = mssql_pconnect($server, $username, $password2);
			if ($sqlconnect)
			{
				mssql_select_db($database, $sqlconnect);
				echo "Gagal";
			}
			else
			return false;
		}
	}

	function connectimesysTE($database)
	{
		$server = 'gmfaa-te-01';
		$username = 'ter1';
		$password = 'reliability';
		$password2 = '';
	
		//$database = 'imesys';

		$sqlconnect = mysql_pconnect($server, $username, $password);
		if ($sqlconnect)
		{
			mysql_select_db($database, $sqlconnect);
			return $sqlconnect;
		}
		else
		{
			$sqlconnect = mysql_pconnect($server, $username, $password2);
			if ($sqlconnect)
			{
				mysql_select_db($database, $sqlconnect);
				echo "Gagal";
			}
			else
			return false;
		}
	}

	function reg($actype){
	if ($actype == "B737-800-E"){
		$newqry = "WHERE `tbl_masterac`.`ACReg` like 'PK-GE%'";
	} else if ($actype == "B737-800-M"){
		$newqry = "WHERE (`tbl_masterac`.`ACReg` like 'PK-GM%' OR `tbl_masterac`.`ACReg` like 'PK-GF%')";
	} else if ($actype == "ALL FLEET"){
		$newqry = "";
	} else {
		$newqry = "WHERE ACType = '$actype'";
	}
		$qry = "SELECT ACReg from tbl_masterac ".$newqry;
		$result = mysql_query($qry);$reg = "";//die($qry);
		while ($row = mysql_fetch_array($result)){
			$reg .= ($reg == "") ? "" : ",";
			$reg .= "'".$row["ACReg"]."'";
		}
		return $reg;
	}

	function queryFH($time,$actype)
{
	if ($actype == "B737-800-E"){
		$newqry = "AND `tbl_masterac`.`ACReg` like 'PK-GE%'";
	} else if ($actype == "B737-800-M"){
		$newqry = "AND (`tbl_masterac`.`ACReg` like 'PK-GM%' OR `tbl_masterac`.`ACReg` like 'PK-GF%')";
	} else if ($actype == "ALL FLEET"){
		$newqry = "";
	} else {
		$newqry = "AND `tbl_masterac`.`ACType` IN ('".$actype."')";
	}
	$qryFH = "SELECT  TOP 13 DATENAME(yy,blockOffDate)+'-'+RIGHT('00'+DATENAME(wk,blockOffDate),2)  AS 'week', Convert(varchar(10),sum(DatePart(hh,airTime)))+':'+Convert(varchar(10),sum(DatePart(mi,airTime))) AS 'hours' FROM aircraftflightlog WHERE DATENAME(yy,blockOffDate)+'-'+RIGHT('00'+DATENAME(wk,blockOffDate),2) <= '$time' AND acReg IN ($actype) AND voidStatus = 'false' AND (revenue = 'Revenue' OR revenue = 'Revenue.Revenue') GROUP BY DATENAME(yy,blockOffDate)+'-'+RIGHT('00'+DATENAME(wk,blockOffDate),2) Order by DATENAME(yy,blockOffDate)+'-'+RIGHT('00'+DATENAME(wk,blockOffDate),2) DESC";
	$resultFH = mssql_query($qryFH);
	//die($qryFH);
	while ($hasilFH = mssql_fetch_array($resultFH))
	{
		$hour[$hasilFH["week"]] = explode(":",$hasilFH["hours"]);
		$jam[$hasilFH["week"]] = $hour[$hasilFH["week"]][0] + round(($hour[$hasilFH["week"]][1]/60),0);
	}
	//die(print_r($jam));
	return $jam;
}
	function queryFC($time,$actype='')
{
	if ($actype == "B737-800-E"){
		$newqry = "AND `tbl_masterac`.`ACReg` like 'PK-GE%'";
	} else if ($actype == "B737-800-M"){
		$newqry = "AND (`tbl_masterac`.`ACReg` like 'PK-GM%' OR `tbl_masterac`.`ACReg` like 'PK-GF%')";
	} else if ($actype == "ALL FLEET"){
		$newqry = "";
	} else {
		$newqry = "AND `tbl_masterac`.`ACType` IN ('".$actype."')";
	}
	$qryFC = "SELECT  TOP 13 SUM (aircraftflightlog.landing) AS 'Cycle',DATENAME(yy,blockOffDate)+'-'+RIGHT('00'+DATENAME(wk,blockOffDate),2)  AS 'week' FROM aircraftflightlog WHERE DATENAME(yy,blockOffDate)+'-'+RIGHT('00'+DATENAME(wk,blockOffDate),2) <= '$time' AND acReg IN ($actype) AND voidStatus = 'false' AND (revenue = 'Revenue' OR revenue = 'Revenue.Revenue') GROUP BY DATENAME(yy,blockOffDate)+'-'+RIGHT('00'+DATENAME(wk,blockOffDate),2) Order by DATENAME(yy,blockOffDate)+'-'+RIGHT('00'+DATENAME(wk,blockOffDate),2) DESC";
	$resultFC = mssql_query($qryFC);
	//die($qryFC);
	while ($hasilFC = mssql_fetch_array($resultFC))
	{
		$cycle[$hasilFC["week"]] = $hasilFC["Cycle"];
	}//die(print_r($cycle));
	return $cycle;
}

	function weekkey($time){
		$qry = mssql_query("SELECT  TOP 12 DATENAME(yy,blockOffDate)+'-'+RIGHT('00'+DATENAME(wk,blockOffDate),2)  AS 'week' FROM aircraftflightlog WHERE DATENAME(yy,blockOffDate)+'-'+RIGHT('00'+DATENAME(wk,blockOffDate),2) <= '$time' GROUP BY DATENAME(yy,blockOffDate)+'-'+RIGHT('00'+DATENAME(wk,blockOffDate),2) Order by DATENAME(yy,blockOffDate)+'-'+RIGHT('00'+DATENAME(wk,blockOffDate),2) DESC");
		while ($row = mssql_fetch_array($qry)){
			$week[$row["week"]] = $row["week"];
		}
		return $week;
	}

function querydelay($time,$actype)
{
	if ($actype == "B737-800-E"){
		$newqry = "AND `mcdrnew`.`Reg` like 'PK-GE%'";
	} else if ($actype == "B737-800-M"){
		$newqry = "AND (`mcdrnew`.`Reg` like 'PK-GM%' OR `mcdrnew`.`Reg` like 'PK-GF%')";
	} else if ($actype == "ALL FLEET"){
		$newqry = "";
	} else {
		$newqry = "AND `mcdrnew`.`ACtype` = '".$actype."'";
	}
	$qrydelay = "SELECT DATE_FORMAT(`mcdrnew`.`DateEvent`,'%x-%v') AS `week`, `mcdrnew`.`ACtype`, Count(`mcdrnew`.`DCP`) AS `Jumlah` FROM `mcdrnew` WHERE (DATE_FORMAT(`mcdrnew`.`DateEvent`,'%x-%v') <= '".$time."') AND `mcdrnew`.`DCP`= 'D' ".$newqry." Group by DATE_FORMAT(`mcdrnew`.`DateEvent`,'%x-%v') ORDER BY DATE_FORMAT(`mcdrnew`.`DateEvent`,'%x-%v') DESC";
	//die($qrydelay);
	$resultdelay = mysql_query($qrydelay);
	while ($hasildelay = mysql_fetch_array($resultdelay))
	{
		$delay[$hasildelay["week"]] = $hasildelay["Jumlah"];
	}
	//$delay = isset($delay) ? $delay : "0";
	return $delay;
}

function querycancel($time,$actype)
{
	if ($actype == "B737-800-E"){
		$newqry = "AND `mcdrnew`.`Reg` like 'PK-GE%'";
	} else if ($actype == "B737-800-M"){
		$newqry = "AND (`mcdrnew`.`Reg` like 'PK-GM%' OR `mcdrnew`.`Reg` like 'PK-GF%')";
	} else if ($actype == "ALL FLEET"){
		$newqry = "";
	} else {
		$newqry = "AND `mcdrnew`.`ACtype` = '".$actype."'";
	}
	$qrycancel = "SELECT DATE_FORMAT(`mcdrnew`.`DateEvent`,'%x-%v') AS `week`, `mcdrnew`.`ACtype`, Count(`mcdrnew`.`DCP`) AS `Jumlah` FROM `mcdrnew` WHERE (DATE_FORMAT(`mcdrnew`.`DateEvent`,'%x-%v') <= '".$time."') AND `mcdrnew`.`DCP`= 'C' ".$newqry." Group by DATE_FORMAT(`mcdrnew`.`DateEvent`,'%x-%v') ORDER BY DATE_FORMAT(`mcdrnew`.`DateEvent`,'%x-%v') DESC";
	$resultcancel = mysql_query($qrycancel);//die($qrycancel);
	while ($hasilcancel = mysql_fetch_array($resultcancel))
	{
		$cancel[$hasilcancel["week"]] = $hasilcancel["Jumlah"];
	}
	$cancel = isset($cancel) ? $cancel : "";
	return $cancel;
}

function querystation($time,$actype)
{
	if ($actype == "B737-800-E"){
		$newqry = "AND `mcdrnew`.`Reg` like 'PK-GE%'";
	} else if ($actype == "B737-800-M"){
		$newqry = "AND (`mcdrnew`.`Reg` like 'PK-GM%' OR `mcdrnew`.`Reg` like 'PK-GF%')";
	} else if ($actype == "ALL FLEET"){
		$newqry = "";
	} else {
		$newqry = "AND `mcdrnew`.`ACtype` = '".$actype."'";
	}
	$qrystation = "SELECT DATE_FORMAT(`mcdrnew`.`DateEvent`,'%x-%v') AS `week`, `mcdrnew`.`ACtype`, Count(`mcdrnew`.`DCP`) AS `Jumlah` FROM `mcdrnew` WHERE (DATE_FORMAT(`mcdrnew`.`DateEvent`,'%x-%v') <= '".$time."') AND (`mcdrnew`.`DCP`= 'C' OR `mcdrnew`.`DCP`= 'D') AND `mcdrnew`.`DepSta` = 'CGK' ".$newqry." Group by DATE_FORMAT(`mcdrnew`.`DateEvent`,'%x-%v') ORDER BY DATE_FORMAT(`mcdrnew`.`DateEvent`,'%x-%v') DESC";
	$resultstation = mysql_query($qrystation);
	while ($hasilstation = mysql_fetch_array($resultstation))
	{
		$station[$hasilstation["week"]] = $hasilstation["Jumlah"];
	}
	return $station;
}

function queryavail($time,$actype='')
{
	if ($actype == "B737-800-E"){
		$newqry = "AND `tbl_masterac`.`ACReg` like 'PK-GE%'";
	} else if ($actype == "B737-800-M"){
		$newqry = "AND (`tbl_masterac`.`ACReg` like 'PK-GM%' OR `tbl_masterac`.`ACReg` like 'PK-GF%')";
	} else if ($actype == "ALL FLEET"){
		$newqry = "";
	} else {
		$newqry = "AND `tbl_masterac`.`ACType` IN ('".$actype."')";
	}
	$qryFC = "SELECT  TOP 12 DATENAME(yy,blockOffDate)+'-'+RIGHT('00'+DATENAME(wk,blockOffDate),2)  AS 'week', Count (distinct (Convert(varchar(10),blockOffDate)+acReg)) AS 'avail' FROM aircraftflightlog WHERE     DATENAME(yy,blockOffDate)+'-'+RIGHT('00'+DATENAME(wk,blockOffDate),2) <= '$time' AND acReg IN ($actype) AND voidStatus = 'false' AND (revenue = 'Revenue' OR revenue = 'Revenue.Revenue') GROUP BY DATENAME(yy,blockOffDate)+'-'+RIGHT('00'+DATENAME(wk,blockOffDate),2) Order by DATENAME(yy,blockOffDate)+'-'+RIGHT('00'+DATENAME(wk,blockOffDate),2) DESC";
	$resultFC = mssql_query($qryFC);
	//die($qryFC);
	while ($hasilFC = mssql_fetch_array($resultFC))
	{
		$cycle[$hasilFC["week"]] = round($hasilFC["avail"]/7,2);
	}
	return $cycle;
}


?>