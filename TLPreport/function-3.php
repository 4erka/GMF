<?
	include ("ConnIMESys.php");
 //$connectAMS = connectimesys('imesys');

function fleet($time,$actype)
{
	//$qryFH = "SELECT Count( DISTINCT(`tbl_masterac`.`acReg`)) AS `jumlah`, `tbl_masterac`.`ACType`, DATE_FORMAT(`aircraftflightlog`.`blockOnDate`,'%Y-%m') AS `periode` FROM `aircraftflightlog` Inner Join `tbl_masterac` ON `aircraftflightlog`.`acReg` = `tbl_masterac`.`ACReg` WHERE DATE_FORMAT(`aircraftflightlog`.`blockOnDate`,'%Y-%m') <= '".$time."' AND `tbl_masterac`.`ACType`= '".$actype."' GROUP BY `tbl_masterac`.`ACType`,DATE_FORMAT(`aircraftflightlog`.`blockOnDate`,'%Y-%m') ORDER BY DATE_FORMAT(`aircraftflightlog`.`blockOnDate`,'%Y-%m') DESC LIMIT 12";
	
	$qryFH = "SELECT DISTINCT Count(`tbl_monthlyfhfc`.`IDReg`) AS `jumlah`, DATE_FORMAT(tbl_monthlyfhfc.MonthEval,'%Y-%m') AS `periode`, `tbl_masterac`.`ACType` AS `ACType` FROM `tbl_masterac` Inner Join `tbl_monthlyfhfc` ON `tbl_masterac`.`IDreg` = `tbl_monthlyfhfc`.`IDReg` WHERE `tbl_masterac`.`ACType` IN ('".$actype."') AND DATE_FORMAT(`tbl_monthlyfhfc`.`MonthEval`,'%Y-%m') <= '".$time."' GROUP BY DATE_FORMAT(tbl_monthlyfhfc.MonthEval,'%Y-%m') ORDER BY  DATE_FORMAT(tbl_monthlyfhfc.MonthEval,'%Y-%m') DESC LIMIT 12";
	$resultFH = mysql_query($qryFH);
	//die($qryFH);
	while ($hasilFH = mysql_fetch_array($resultFH))
	{
		$hour[$hasilFH["periode"]] = $hasilFH["jumlah"];
	}
	mysql_free_result($resultFH);
	return $hour;
}
function available($timeawal,$timeakhir,$actype)
{
	//$qryFH = "SELECT Sum(`tbl_monthlyfhfc`.`AvaiDays`) AS `jumlah`, DATE_FORMAT(tbl_monthlyfhfc.MonthEval,'%Y-%m') AS `periode`, `tbl_masterac`.`ACReg` AS `acReg` FROM `tbl_masterac` Inner Join `tbl_monthlyfhfc` ON `tbl_masterac`.`IDreg` = `tbl_monthlyfhfc`.`IDReg` WHERE `tbl_masterac`.`ACType` = '".$actype."' AND DATE_FORMAT(`tbl_monthlyfhfc`.`MonthEval`,'%Y-%m') BETWEEN '".$timeawal."' AND '".$timeakhir."' GROUP BY `tbl_masterac`.`ACReg`, DATE_FORMAT(`tbl_monthlyfhfc`.`MonthEval`,'%Y-%m') ORDER BY DATE_FORMAT(`tbl_monthlyfhfc`.`MonthEval`,'%Y-%m') DESC";

	$qryFH = "SELECT Sum(`tbl_monthlyfhfc`.`AvaiDays`) AS `jumlah`, DATE_FORMAT(tbl_monthlyfhfc.MonthEval,'%Y-%m') AS `periode`, `tbl_masterac`.`ACType` AS `acType` FROM `tbl_masterac` Inner Join `tbl_monthlyfhfc` ON `tbl_masterac`.`IDreg` = `tbl_monthlyfhfc`.`IDReg` WHERE `tbl_masterac`.`ACType` IN ('".$actype."') AND DATE_FORMAT(`tbl_monthlyfhfc`.`MonthEval`,'%Y-%m') BETWEEN '".$timeawal."' AND '".$timeakhir."' GROUP BY  DATE_FORMAT(`tbl_monthlyfhfc`.`MonthEval`,'%Y-%m') ORDER BY DATE_FORMAT(`tbl_monthlyfhfc`.`MonthEval`,'%Y-%m') DESC";

	$resultFH = mysql_query($qryFH);
	//echo($qryFH);
	while ($hasilFH = mysql_fetch_array($resultFH))
	{
		//$hour[$hasilFH["periode"]][$hasilFH["acReg"]] = $hasilFH["jumlah"];
		$hour[$hasilFH["periode"]] = $hasilFH["jumlah"];
	}
	/*foreach ($hour as $key => $value){
		foreach ($hour[$key] as $k => $v){
			$jumlah[$k] = $v;
		}
		$avail[$key] = array_sum($jumlah);
	}*/
	mysql_free_result($resultFH);
	return $hour;
}

function queryFH($time,$actype)
{
	//$qryFH = "SELECT SEC_TO_TIME( SUM( TIME_TO_SEC( `aircraftflightlog`.`airTime` ) ) ) AS `Jumlah` , Count(`aircraftflightlog`.`landing`) AS `Cycle`, DATE_FORMAT(`blockOnDate`,'%Y-%m') AS `periode` FROM `aircraftflightlog` Inner Join `tbl_masterac` ON `aircraftflightlog`.`acReg` = `tbl_masterac`.`ACReg` WHERE (DATE_FORMAT(`blockOnDate`,'%Y-%m') <= '".$time."') AND `tbl_masterac`.`ACType` = '".$actype."' GROUP BY DATE_FORMAT(`blockOnDate`,'%Y-%m') ORDER BY DATE_FORMAT(`blockOnDate`,'%Y-%m') DESC LIMIT 3";
	//DIE($time);
	$qryFH = "SELECT Sum(`tbl_monthlyfhfc`.`RevFHHours`) AS `RevFH`, Sum(`tbl_monthlyfhfc`.`RevFHMin`) AS `RevFHMin`, Sum(`tbl_monthlyfhfc`.`NoRevFHHours`) AS `NoRevFH`, Sum(`tbl_monthlyfhfc`.`NoRevFHMin`) AS `NoRevFHMin`, DATE_FORMAT(tbl_monthlyfhfc.MonthEval,'%Y-%m') AS `periode` FROM `tbl_masterac` Inner Join `tbl_monthlyfhfc` ON `tbl_masterac`.`IDreg` = `tbl_monthlyfhfc`.`IDReg` WHERE `tbl_masterac`.`ACType` = '".$actype."' AND DATE_FORMAT(`tbl_monthlyfhfc`.`MonthEval`,'%Y-%m') <= '".$time."' GROUP BY`tbl_masterac`.`ACType`, DATE_FORMAT(`tbl_monthlyfhfc`.`MonthEval`,'%Y-%m') ORDER BY DATE_FORMAT(`tbl_monthlyfhfc`.`MonthEval`,'%Y-%m') DESC LIMIT 12";
	$resultFH = mysql_query($qryFH);
	//die($qryFH);
	while ($hasilFH = mysql_fetch_array($resultFH))
	{
		$hour[$hasilFH["periode"]] = $hasilFH["RevFH"] + $hasilFH["NoRevFH"] + round(($hasilFH["RevFHMin"] + $hasilFH["NoRevFHMin"])/60,0);
	}
	mysql_free_result($resultFH);
	//die(print_r($hour));
	return $hour;
}

function queryFC($time,$actype)
{
	//$qryFH = "SELECT Count(`aircraftflightlog`.`landing`) AS `Cycle`, DATE_FORMAT(`blockOnDate`,'%Y-%m') AS `periode` FROM `aircraftflightlog` Inner Join `tbl_masterac` ON `aircraftflightlog`.`acReg` = `tbl_masterac`.`ACReg` WHERE (DATE_FORMAT(`blockOnDate`,'%Y-%m') <= '".$time."') AND `tbl_masterac`.`ACType` = '".$actype."' GROUP BY DATE_FORMAT(`blockOnDate`,'%Y-%m') ORDER BY DATE_FORMAT(`blockOnDate`,'%Y-%m') DESC LIMIT 3";
	$qryFH = "SELECT Sum(`tbl_monthlyfhfc`.`RevFHHours`) AS `RevFH`, Sum(`tbl_monthlyfhfc`.`RevFHMin`) AS `RevFHMin`, Sum(`tbl_monthlyfhfc`.`NoRevFHHours`) AS `NoRevFH`, Sum(`tbl_monthlyfhfc`.`NoRevFHMin`) AS `NoRevFHMin`, Sum(`tbl_monthlyfhfc`.`RevFC`) AS `RevFC`, Sum(`tbl_monthlyfhfc`.`NoRevFC`) AS `NoRevFC`, DATE_FORMAT(tbl_monthlyfhfc.MonthEval,'%Y-%m') AS `periode` FROM `tbl_masterac` Inner Join `tbl_monthlyfhfc` ON `tbl_masterac`.`IDreg` = `tbl_monthlyfhfc`.`IDReg` WHERE `tbl_masterac`.`ACType` = '".$actype."' AND DATE_FORMAT(`tbl_monthlyfhfc`.`MonthEval`,'%Y-%m') <= '".$time."' GROUP BY `tbl_masterac`.`ACType`, DATE_FORMAT(`tbl_monthlyfhfc`.`MonthEval`,'%Y-%m') ORDER BY DATE_FORMAT(`tbl_monthlyfhfc`.`MonthEval`,'%Y-%m') DESC LIMIT 12";
	$resultFH = mysql_query($qryFH);
	//die($qryFH);
	while ($hasilFH = mysql_fetch_array($resultFH))
	{
		$cycle[$hasilFH["periode"]] = $hasilFH["RevFC"] + $hasilFH["NoRevFC"];
	}
	mysql_free_result($resultFH);
	return $cycle;
}

function queryFH12($time,$actype,$limit)
{
	$qryFH = "SELECT Sum(`tbl_monthlyfhfc`.`RevFHHours`) AS `RevFH`, Sum(`tbl_monthlyfhfc`.`RevFHMin`) AS `RevFHMin`, Sum(`tbl_monthlyfhfc`.`NoRevFHHours`) AS `NoRevFH`, Sum(`tbl_monthlyfhfc`.`NoRevFHMin`) AS `NoRevFHMin`, DATE_FORMAT(tbl_monthlyfhfc.MonthEval,'%Y-%m') AS `periode` FROM `tbl_masterac` Inner Join `tbl_monthlyfhfc` ON `tbl_masterac`.`IDreg` = `tbl_monthlyfhfc`.`IDReg` WHERE `tbl_masterac`.`ACType` IN ('".$actype."') AND DATE_FORMAT(`tbl_monthlyfhfc`.`MonthEval`,'%Y-%m') <= '".$time."' GROUP BY DATE_FORMAT(`tbl_monthlyfhfc`.`MonthEval`,'%Y-%m') ORDER BY DATE_FORMAT(`tbl_monthlyfhfc`.`MonthEval`,'%Y-%m') DESC LIMIT ".$limit;
	//$qryFH = "SELECT SEC_TO_TIME( SUM( TIME_TO_SEC( `aircraftflightlog`.`airTime` ) ) ) AS `Jumlah` ,  DATE_FORMAT(`blockOnDate`,'%Y-%m') AS `periode` FROM `aircraftflightlog` Inner Join `tbl_masterac` ON `aircraftflightlog`.`acReg` = `tbl_masterac`.`ACReg` WHERE DATE_FORMAT(`blockOnDate`,'%Y-%m') <= '".$time."' AND `tbl_masterac`.`ACType` = '".$actype."' GROUP BY DATE_FORMAT(`blockOnDate`,'%Y-%m') ORDER BY DATE_FORMAT(`blockOnDate`,'%Y-%m') DESC LIMIT 12";
	$resultFH = mysql_query($qryFH);
	//die($qryFH);
	while ($hasilFH = mysql_fetch_array($resultFH))
	{
		$hour[$hasilFH["periode"]] = $hasilFH["RevFH"] + $hasilFH["NoRevFH"] + round(($hasilFH["RevFHMin"] + $hasilFH["NoRevFHMin"])/60,0);
	}
	mysql_free_result($resultFH);
	return $hour;
}

function queryFH12rev($time,$actype)
{
	$qryFH = "SELECT Sum(`tbl_monthlyfhfc`.`RevFHHours`) AS `RevFH`, Sum(`tbl_monthlyfhfc`.`RevFHMin`) AS `RevFHMin`, Sum(`tbl_monthlyfhfc`.`NoRevFHHours`) AS `NoRevFH`, Sum(`tbl_monthlyfhfc`.`NoRevFHMin`) AS `NoRevFHMin`, DATE_FORMAT(tbl_monthlyfhfc.MonthEval,'%Y-%m') AS `periode` FROM `tbl_masterac` Inner Join `tbl_monthlyfhfc` ON `tbl_masterac`.`IDreg` = `tbl_monthlyfhfc`.`IDReg` WHERE `tbl_masterac`.`ACType` IN ('".$actype."') AND DATE_FORMAT(`tbl_monthlyfhfc`.`MonthEval`,'%Y-%m') <= '".$time."' GROUP BY DATE_FORMAT(`tbl_monthlyfhfc`.`MonthEval`,'%Y-%m') ORDER BY DATE_FORMAT(`tbl_monthlyfhfc`.`MonthEval`,'%Y-%m') DESC LIMIT 12";
	//$qryFH = "SELECT SEC_TO_TIME( SUM( TIME_TO_SEC( `aircraftflightlog`.`airTime` ) ) ) AS `Jumlah` ,  DATE_FORMAT(`blockOnDate`,'%Y-%m') AS `periode` FROM `aircraftflightlog` Inner Join `tbl_masterac` ON `aircraftflightlog`.`acReg` = `tbl_masterac`.`ACReg` WHERE DATE_FORMAT(`blockOnDate`,'%Y-%m') <= '".$time."' AND `tbl_masterac`.`ACType` = '".$actype."' GROUP BY DATE_FORMAT(`blockOnDate`,'%Y-%m') ORDER BY DATE_FORMAT(`blockOnDate`,'%Y-%m') DESC LIMIT 12";
	$resultFH = mysql_query($qryFH);
	//die($qryFH);
	while ($hasilFH = mysql_fetch_array($resultFH))
	{
		$hour[$hasilFH["periode"]] = $hasilFH["RevFH"] + round(($hasilFH["RevFHMin"])/60,0);
	}
	mysql_free_result($resultFH);
	return $hour;
}

function queryFC12($time,$actype,$limit)
{
	$qryFH = "SELECT Sum(`tbl_monthlyfhfc`.`RevFHHours`) AS `RevFH`, Sum(`tbl_monthlyfhfc`.`RevFHMin`) AS `RevFHMin`, Sum(`tbl_monthlyfhfc`.`NoRevFHHours`) AS `NoRevFH`, Sum(`tbl_monthlyfhfc`.`NoRevFHMin`) AS `NoRevFHMin`, Sum(`tbl_monthlyfhfc`.`RevFC`) AS `RevFC`, Sum(`tbl_monthlyfhfc`.`NoRevFC`) AS `NoRevFC`, DATE_FORMAT(tbl_monthlyfhfc.MonthEval,'%Y-%m') AS `periode` FROM `tbl_masterac` Inner Join `tbl_monthlyfhfc` ON `tbl_masterac`.`IDreg` = `tbl_monthlyfhfc`.`IDReg` WHERE `tbl_masterac`.`ACType` IN ('".$actype."') AND DATE_FORMAT(`tbl_monthlyfhfc`.`MonthEval`,'%Y-%m') <= '".$time."' GROUP BY  DATE_FORMAT(`tbl_monthlyfhfc`.`MonthEval`,'%Y-%m') ORDER BY DATE_FORMAT(`tbl_monthlyfhfc`.`MonthEval`,'%Y-%m') DESC LIMIT ".$limit;
	//$qryFH = "SELECT DATE_FORMAT(`blockOnDate`,'%Y-%m') AS `periode`, Count(`aircraftflightlog`.`landing`) AS `Cycle` FROM `aircraftflightlog` Inner Join `tbl_masterac` ON `aircraftflightlog`.`acReg` = `tbl_masterac`.`ACReg` WHERE DATE_FORMAT(`blockOnDate`,'%Y-%m') <= '".$time."' AND `tbl_masterac`.`ACType` = '".$actype."' GROUP BY DATE_FORMAT(`blockOnDate`,'%Y-%m') ORDER BY DATE_FORMAT(`blockOnDate`,'%Y-%m') DESC LIMIT 12";
	$resultFH = mysql_query($qryFH);
	//die($qryFH);
	while ($hasilFH = mysql_fetch_array($resultFH))
	{
		$cycle[$hasilFH["periode"]] = $hasilFH["RevFC"] + $hasilFH["NoRevFC"];
	}
	mysql_free_result($resultFH);
	return $cycle;
}

function queryFC12rev($time,$actype,$limit='12')
{
	$qryFH = "SELECT Sum(`tbl_monthlyfhfc`.`RevFHHours`) AS `RevFH`, Sum(`tbl_monthlyfhfc`.`RevFHMin`) AS `RevFHMin`, Sum(`tbl_monthlyfhfc`.`NoRevFHHours`) AS `NoRevFH`, Sum(`tbl_monthlyfhfc`.`NoRevFHMin`) AS `NoRevFHMin`, Sum(`tbl_monthlyfhfc`.`RevFC`) AS `RevFC`, Sum(`tbl_monthlyfhfc`.`NoRevFC`) AS `NoRevFC`, DATE_FORMAT(tbl_monthlyfhfc.MonthEval,'%Y-%m') AS `periode` FROM `tbl_masterac` Inner Join `tbl_monthlyfhfc` ON `tbl_masterac`.`IDreg` = `tbl_monthlyfhfc`.`IDReg` WHERE `tbl_masterac`.`ACType` IN ('".$actype."') AND DATE_FORMAT(`tbl_monthlyfhfc`.`MonthEval`,'%Y-%m') <= '".$time."' GROUP BY  DATE_FORMAT(`tbl_monthlyfhfc`.`MonthEval`,'%Y-%m') ORDER BY DATE_FORMAT(`tbl_monthlyfhfc`.`MonthEval`,'%Y-%m') DESC LIMIT ".$limit;
	//$qryFH = "SELECT DATE_FORMAT(`blockOnDate`,'%Y-%m') AS `periode`, Count(`aircraftflightlog`.`landing`) AS `Cycle` FROM `aircraftflightlog` Inner Join `tbl_masterac` ON `aircraftflightlog`.`acReg` = `tbl_masterac`.`ACReg` WHERE DATE_FORMAT(`blockOnDate`,'%Y-%m') <= '".$time."' AND `tbl_masterac`.`ACType` = '".$actype."' GROUP BY DATE_FORMAT(`blockOnDate`,'%Y-%m') ORDER BY DATE_FORMAT(`blockOnDate`,'%Y-%m') DESC LIMIT 12";
	$resultFH = mysql_query($qryFH);
	//die($qryFH);
	while ($hasilFH = mysql_fetch_array($resultFH))
	{
		$cycle[$hasilFH["periode"]] = $hasilFH["RevFC"];
	}
	mysql_free_result($resultFH);
	return $cycle;
}

function queryFHengine($time,$actype)
{
	$qryFH = "SELECT Sum(`tbl_monthlyfhfc`.`RevFHHours`) AS `RevFH`, Sum(`tbl_monthlyfhfc`.`RevFHMin`) AS `RevFHMin`, Sum(`tbl_monthlyfhfc`.`NoRevFHHours`) AS `NoRevFH`, Sum(`tbl_monthlyfhfc`.`NoRevFHMin`) AS `NoRevFHMin`, Sum(`tbl_monthlyfhfc`.`RevFC`) AS `RevFC`, Sum(`tbl_monthlyfhfc`.`NoRevFC`) AS `NoRevFC`, DATE_FORMAT(tbl_monthlyfhfc.MonthEval,'%Y-%m') AS `periode` FROM `tbl_masterac` Inner Join `tbl_monthlyfhfc` ON `tbl_masterac`.`IDreg` = `tbl_monthlyfhfc`.`IDReg` WHERE `tbl_masterac`.`ACType` IN ('".$actype."') AND DATE_FORMAT(`tbl_monthlyfhfc`.`MonthEval`,'%Y-%m') <= '".$time."' GROUP BY  DATE_FORMAT(`tbl_monthlyfhfc`.`MonthEval`,'%Y-%m') ORDER BY DATE_FORMAT(`tbl_monthlyfhfc`.`MonthEval`,'%Y-%m') ASC";
	//$qryFH = "SELECT SEC_TO_TIME( SUM( TIME_TO_SEC( `aircraftflightlog`.`airTime` ) ) ) AS `Jumlah` ,  DATE_FORMAT(`blockOnDate`,'%Y-%m') AS `periode` FROM `aircraftflightlog` Inner Join `tbl_masterac` ON `aircraftflightlog`.`acReg` = `tbl_masterac`.`ACReg` WHERE DATE_FORMAT(`blockOnDate`,'%Y-%m') <= '".$time."' AND `tbl_masterac`.`ACType` = '".$actype."' GROUP BY DATE_FORMAT(`blockOnDate`,'%Y-%m') ORDER BY DATE_FORMAT(`blockOnDate`,'%Y-%m') DESC LIMIT 12";
	$resultFH = mysql_query($qryFH);
	//die($qryFH);
	//while ($hasilFH = mysql_fetch_array($resultFH))
	//{
	//	$hour[$hasilFH["periode"]] = $hasilFH["RevFH"] + $hasilFH["NoRevFH"] + round(($hasilFH["RevFHMin"] + $hasilFH["NoRevFHMin"])/60,0);
	//}
	return $resultFH;
}

function FHengineinitial($actype)
{
	if ($actype == "B737-300','B737-400','B737-500','B737-CL") {
		$actype = "B737-Class";
	}
	$qryFH = "SELECT `tbl_enginecumulative`.`ACType`, `tbl_enginecumulative`.`TSN`, `tbl_enginecumulative`.`CSN`FROM `tbl_enginecumulative` WHERE `tbl_enginecumulative`.`ACType` IN ('".$actype."')";
	$resultFH = mysql_query($qryFH);
	//die($qryFH);
	while ($hasilFH = mysql_fetch_array($resultFH))
	{
		$TSN = $hasilFH["TSN"];
	}
	mysql_free_result($resultFH);
	return $TSN;
}

function FCengineinitial($actype)
{
	if ($actype == "B737-300','B737-400','B737-500','B737-CL") {
		$actype = "B737-Class";
	}
	$qryFH = "SELECT `tbl_enginecumulative`.`ACType`, `tbl_enginecumulative`.`TSN`, `tbl_enginecumulative`.`CSN`FROM `tbl_enginecumulative` WHERE `tbl_enginecumulative`.`ACType` = '".$actype."'";
	$resultFH = mysql_query($qryFH);
	//die($qryFH);
	while ($hasilFH = mysql_fetch_array($resultFH))
	{
		$CSN = $hasilFH["CSN"];
	}
	mysql_free_result($resultFH);
	return $CSN;
}

function ATAdef()
{
	$qryFH = "SELECT `tbl_master_ata`.`ATA`, `tbl_master_ata`.`ATA_DESC` FROM `tbl_master_ata` WHERE `tbl_master_ata`.`ATA` > '20' AND `tbl_master_ata`.`ATA` <> '58' AND `tbl_master_ata`.`ATA` <> '70'";
	$resultFH = mysql_query($qryFH);
	//die($qryFH);
	while ($hasilFH = mysql_fetch_array($resultFH))
	{
		$ATA[] = $hasilFH[0];
	}
	mysql_free_result($resultFH);
	return $ATA;
}


function ATAdesc()
{
	$qryFH = "SELECT `tbl_master_ata`.`ATA`, `tbl_master_ata`.`ATA_DESC` FROM `tbl_master_ata` WHERE `tbl_master_ata`.`ATA` > '20' AND `tbl_master_ata`.`ATA` <> '58' AND `tbl_master_ata`.`ATA` <> '70'";
	$resultFH = mysql_query($qryFH);
	//die($resultFH);
	while ($hasilFH = mysql_fetch_array($resultFH))
	{
		//$ATA[] = $hasilFH[0];
		$ATAdesc[] = $hasilFH[1];
	}
	mysql_free_result($resultFH);
	//$ATA = array_count_values($hour);
	return $ATAdesc;
}


function ATA($timeawal,$timeakhir,$actype)//query untuk  Report
{
	$qryFH = "SELECT Count(`tblpirep`.`ATA`) AS `Jumlah`, `tblpirep`.`ATA`  AS `subjectATA`, DATE_FORMAT(`tblpirep`.`DATE`,'%Y-%m') AS `bulan` FROM `tblpirep` WHERE `tblpirep`.`ACTYPE` = '".$actype."' AND DATE_FORMAT(`tblpirep`.`DATE`,'%Y-%m') BETWEEN '".$timeawal."' AND '".$timeakhir."' GROUP BY `tblpirep`.`ATA`,  DATE_FORMAT(`tblpirep`.`DATE`,'%Y-%m') ORDER BY DATE_FORMAT(`tblpirep`.`DATE`,'%Y-%m') DESC";
	$resultFH = mysql_query($qryFH);
	//die($qryFH);
	while ($hasilFH = mysql_fetch_array($resultFH))
	{
		$ATA[$hasilFH["bulan"]][$hasilFH["subjectATA"]] = $hasilFH["Jumlah"];
	}//die(print_r($ATA));
	mysql_free_result($resultFH);
	$ATA = isset($ATA) ? $ATA : "";
	//$ATA = array_count_values($hour);
	return $ATA;
}

function ATA12($timeawal,$timeakhir,$actype)////query untuk ATA 12 Month Pilot Report 
{
	//$qryFH = "SELECT `tbl_aml_detail`.`subjectATA` AS `subjectATA`, Count(`tbl_aml_detail`.`subjectATA`) AS `Jumlah` FROM ((((`tbl_aml` Inner Join `tbl_aml_detail` ON ((`tbl_aml`.`idxAML` = `tbl_aml_detail`.`idxAML`)))))) Inner Join `tbl_masterac` ON `tbl_masterac`.`ACReg` = `tbl_aml`.`acReg` WHERE (DATE_FORMAT(`tbl_aml`.`dateAML`,'%Y-%m') BETWEEN '".$timeawal."' AND '".$timeakhir."') AND `tbl_masterac`.`ACType` = '".$actype."' AND `tbl_aml`.`PirepMarep` = 'PIREP' group by `tbl_aml_detail`.`subjectATA`";
	$qryFH = "SELECT Count(`tblpirep`.`ATA`) AS `Jumlah`, `tblpirep`.`ATA` AS `subjectATA` FROM `tblpirep` WHERE `tblpirep`.`ACTYPE` = '".$actype."' AND DATE_FORMAT(`tblpirep`.`DATE`,'%Y-%m') BETWEEN '".$timeawal."' AND '".$timeakhir."' GROUP BY `tblpirep`.`ATA`";
	$resultFH = mysql_query($qryFH);
	//die($qryFH);
	while ($hasilFH = mysql_fetch_array($resultFH))
	{
		$hour[$hasilFH["subjectATA"]] = $hasilFH["Jumlah"];
	}
	mysql_free_result($resultFH);
	$hour = isset($hour) ? $hour : "";
	return $hour;
}

function alert($timeawal,$timeakhir,$actype)//query untuk Alert Level Pilot Report
{
	$alert = "SELECT Count(`tblpirep`.`ATA`) AS `Jumlah`, `tblpirep`.`ATA`  AS `subjectATA`, DATE_FORMAT(`tblpirep`.`DATE`,'%Y-%m') AS `bulan` FROM `tblpirep` WHERE `tblpirep`.`ACTYPE` = '".$actype."' AND (DATE_FORMAT(`tblpirep`.`DATE`,'%Y-%m') BETWEEN '".$timeawal."' AND '".$timeakhir."') GROUP BY `tblpirep`.`ATA`,  DATE_FORMAT(`tblpirep`.`DATE`,'%Y-%m')";
	$resultalert = mysql_query($alert);
	//die($alert);
	while ($hasilalert = mysql_fetch_array($resultalert))
	{
		//$ATA[] = $hasilalert["subjectATA"];
		$ATAalert[$hasilalert["subjectATA"]][$hasilalert["bulan"]] = $hasilalert["Jumlah"];
		//$periode[] = $hasilalert["periode"];	
	}
	$ATAalert = isset($ATAalert) ? $ATAalert : 0;
	mysql_free_result($resultalert);//die(print_r($ATAalert));
	//die(print_r($bulanan));
	$qryFH = "SELECT Sum(`tbl_monthlyfhfc`.`RevFHHours`) AS `RevFH`, Sum(`tbl_monthlyfhfc`.`RevFHMin`) AS `RevFHMin`, Sum(`tbl_monthlyfhfc`.`NoRevFHHours`) AS `NoRevFH`, Sum(`tbl_monthlyfhfc`.`NoRevFHMin`) AS `NoRevFHMin`, DATE_FORMAT(tbl_monthlyfhfc.MonthEval,'%Y-%m') AS `periode` FROM `tbl_masterac` Inner Join `tbl_monthlyfhfc` ON `tbl_masterac`.`IDreg` = `tbl_monthlyfhfc`.`IDReg` WHERE `tbl_masterac`.`ACType` = '".$actype."' AND (DATE_FORMAT(`tbl_monthlyfhfc`.`MonthEval`,'%Y-%m') BETWEEN '".$timeawal."' AND '".$timeakhir."') GROUP BY`tbl_masterac`.`ACType`, DATE_FORMAT(`tbl_monthlyfhfc`.`MonthEval`,'%Y-%m') LIMIT 12";
	$resultFH = mysql_query($qryFH);
	//die($qryFH);
	while ($hasilFH = mysql_fetch_array($resultFH))
	{
		$hour[$hasilFH["periode"]] = $hasilFH["RevFH"] + $hasilFH["NoRevFH"] + round(($hasilFH["RevFHMin"] + $hasilFH["NoRevFHMin"])/60,0);
		//$bulanan[] = $hasilalert["periode"];
	}
	mysql_free_result($resultFH);//die(print_r($hour));
	$bulanan = array_keys($hour);
	sort($bulanan);
	//die(print_r($hour));
	if (is_array($ATAalert)) {
	foreach ($ATAalert as $key => $value){
		//$mean = 0;
		foreach ($value as $k => $v){
			$rate[$key][$k] = $v/$hour[$k] * 1000;//itung rate untuk setiap bulan ATA
		}
		//die(print_r($rate));
		$mean[$key] = array_sum($rate[$key])/12;//die($mean);
		//$sigma_temp = 0;
		/*foreach ($rate as $keys => $values) {
			$sigma_temp += ($values - $mean) * ($values - $mean);
		}*/
		
		for ($i=0;$i<12;$i++)
		{
			$bulanan[$i] = isset($bulanan[$i]) ? $bulanan[$i] : $i;
			$rate[$key][$bulanan[$i]] = isset($rate[$key][$bulanan[$i]]) ? $rate[$key][$bulanan[$i]] : 0;
			$sigma_temp[$key][$i] = ($rate[$key][$bulanan[$i]] - $mean[$key]) * ($rate[$key][$bulanan[$i]] - $mean[$key]);
			$ksy[] = $i;
		}
		$standard_deviation[$key] = sqrt(array_sum($sigma_temp[$key])/12);
		$alertlevel[$key] = $mean[$key] + (2 * $standard_deviation[$key]);//die(print_r($alertlevel));
	}
	}
	//die(print_r($alertlevel));
	$alertlevel = isset($alertlevel) ? $alertlevel : "";
	return $alertlevel;
}

function ATAdelay($timeawal,$timeakhir,$actype)//query untuk delay 
{
	$qryFH = "SELECT DATE_FORMAT(`mcdrnew`.`DateEvent`,'%Y-%m') AS `periode`, Count(`mcdrnew`.`ATAtdm`) AS `Jumlah`, `mcdrnew`.`ATAtdm` FROM `mcdrnew` WHERE `mcdrnew`.`DCP` = 'D' AND `mcdrnew`.`ACtype` = '".$actype."' AND (DATE_FORMAT(`mcdrnew`.`DateEvent`,'%Y-%m') BETWEEN '".$timeawal."' AND '".$timeakhir."') GROUP BY DATE_FORMAT(`mcdrnew`.`DateEvent`,'%Y-%m'), `mcdrnew`.`ATAtdm`";
	$resultFH = mysql_query($qryFH);
	//die($qryFH);
	while ($hasilFH = mysql_fetch_array($resultFH))
	{
		$hour[$hasilFH["periode"]][$hasilFH["ATAtdm"]] = $hasilFH["Jumlah"];
	}
	mysql_free_result($resultFH);
	$hour = isset($hour) ? $hour : "";
	//$ATA = array_count_values($hour);
	return $hour;
}

function ATAdelay12($timeawal,$timeakhir,$actype)//query untuk delay 12 Month
{
	$qryFH = "SELECT Count(`mcdrnew`.`ATAtdm`) AS `Jumlah`, `mcdrnew`.`ATAtdm` FROM `mcdrnew` WHERE `mcdrnew`.`DCP` = 'D' AND `mcdrnew`.`ACtype` = '".$actype."' AND (DATE_FORMAT(`mcdrnew`.`DateEvent`,'%Y-%m') BETWEEN '".$timeawal."' AND '".$timeakhir."') GROUP BY `mcdrnew`.`ATAtdm`";
	$resultFH = mysql_query($qryFH);
	//die($qryFH);
	while ($hasilFH = mysql_fetch_array($resultFH))
	{
		$hour[$hasilFH["ATAtdm"]] = $hasilFH["Jumlah"];
	}
	mysql_free_result($resultFH);
	//$ATA = array_count_values($hour);
	$hour = isset($hour) ? $hour : "";
	return $hour;
}
//echo (alert("2006-11","2007-10","B737-400"));

function alertdelay($timeawal,$timeakhir,$actype)//query untuk Alert Level Delay Report
{
	$alert = "SELECT DATE_FORMAT(`mcdrnew`.`DateEvent`,'%Y-%m') AS `periode`, Count(`mcdrnew`.`ATAtdm`) AS `Jumlah`, `mcdrnew`.`ATAtdm` FROM `mcdrnew` WHERE `mcdrnew`.`DCP` = 'D' AND `mcdrnew`.`ACtype` = '".$actype."' AND (DATE_FORMAT(`mcdrnew`.`DateEvent`,'%Y-%m') BETWEEN '".$timeawal."' AND '".$timeakhir."') GROUP BY DATE_FORMAT(`mcdrnew`.`DateEvent`,'%Y-%m'), `mcdrnew`.`ATAtdm`";
	$resultalert = mysql_query($alert);
	//die($alert);
	while ($hasilalert = mysql_fetch_array($resultalert))
	{
		//$ATA[] = $hasilalert["subjectATA"];
		$ATAalert[$hasilalert["ATAtdm"]][$hasilalert["periode"]] = $hasilalert["Jumlah"];
		//$periode[] = $hasilalert["periode"];
		//$bulanan[] = $hasilalert["periode"];
	}
	$ATAalert = isset($ATAalert) ? $ATAalert : array(0);
	//die(print_r($ATAalert));
	mysql_free_result($resultalert);
	ksort($ATAalert);
	//die(print_r($ATAalert));	
	$qryFH = "SELECT Sum(`tbl_monthlyfhfc`.`RevFHHours`) AS `RevFH`, Sum(`tbl_monthlyfhfc`.`RevFHMin`) AS `RevFHMin`, Sum(`tbl_monthlyfhfc`.`NoRevFHHours`) AS `NoRevFH`, Sum(`tbl_monthlyfhfc`.`NoRevFHMin`) AS `NoRevFHMin`, Sum(`tbl_monthlyfhfc`.`RevFC`) AS `RevFC`, Sum(`tbl_monthlyfhfc`.`NoRevFC`) AS `NoRevFC`, DATE_FORMAT(tbl_monthlyfhfc.MonthEval,'%Y-%m') AS `periode` FROM `tbl_masterac` Inner Join `tbl_monthlyfhfc` ON `tbl_masterac`.`IDreg` = `tbl_monthlyfhfc`.`IDReg` WHERE `tbl_masterac`.`ACType` = '".$actype."' AND (DATE_FORMAT(`tbl_monthlyfhfc`.`MonthEval`,'%Y-%m') BETWEEN '".$timeawal."' AND '".$timeakhir."') GROUP BY `tbl_masterac`.`ACType`, DATE_FORMAT(`tbl_monthlyfhfc`.`MonthEval`,'%Y-%m') LIMIT 12";
	//$qryFH = "SELECT DATE_FORMAT(`blockOnDate`,'%Y-%m') AS `periode` Count(`aircraftflightlog`.`landing`) AS `Jumlah` FROM `aircraftflightlog` Inner Join `tbl_masterac` ON `aircraftflightlog`.`acReg` = `tbl_masterac`.`ACReg` WHERE (DATE_FORMAT(`blockOnDate`,'%Y-%m') BETWEEN '".$timeawal."' AND '".$timeakhir."') AND `tbl_masterac`.`ACType` = '".$actype."' GROUP BY DATE_FORMAT(`blockOnDate`,'%Y-%m')";
	$resultFH = mysql_query($qryFH);
	//die($qryFH);
	while ($hasilFH = mysql_fetch_array($resultFH))
	{
		$hour[$hasilFH["periode"]] = $hasilFH["RevFC"] + $hasilFH["NoRevFC"];
		//$bulanan[] = $hasilFH["periode"];
	}
	mysql_free_result($resultFH);
	$bulanan = array_keys($hour);
	sort($bulanan);
	//die(print_r($bulanan));
	foreach ($ATAalert as $key => $value){
		if (is_array($value)) {
		foreach ($value as $k => $v){
			$rate[$key][$k] = $v/$hour[$k] * 100;//itung rate untuk setiap bulan ATA
		}
		$mean[$key] = array_sum($rate[$key])/12;//rata2 
		//$sigma_temp = 0;
		/*foreach ($rate as $keys => $values) {
			$sigma_temp += ($values - $mean) * ($values - $mean);
		}*/
		for ($i=0;$i<12;$i++)
		{
			$bulanan[$i] = isset($bulanan[$i]) ? $bulanan[$i] : $i;
			$rate[$key][$bulanan[$i]] = isset($rate[$key][$bulanan[$i]]) ? $rate[$key][$bulanan[$i]] : 0;
			$sigma_temp[$key][$i] = ($rate[$key][$bulanan[$i]] - $mean[$key]) * ($rate[$key][$bulanan[$i]] - $mean[$key]);
			//$kurang[$key][$value[$i]] = ($value[$i] - $mean) * ($value[$i] - $mean);
		}
		$standard_deviation[$key] = sqrt(array_sum($sigma_temp[$key]) / 12);
		$alertlevel[$key] = $mean[$key] + (2 * $standard_deviation[$key]);
		}
	}
	$alertlevel = isset($alertlevel) ? $alertlevel : "";
	//die(print_r($rate));	
	return $alertlevel;
}

function delayduration($timeawal,$timeakhir,$actype)//query untuk delay duration
{
	$qryFH = "SELECT DATE_FORMAT(mcdrnew.DateEvent,'%Y-%m') AS `periode`, Sum(`mcdrnew`.`HoursTek`) AS `Jam`, Sum(`mcdrnew`.`MinTek`) AS `Menit` FROM `mcdrnew` WHERE `mcdrnew`.`DCP` = 'D' AND `mcdrnew`.`ACtype` = '".$actype."' AND (DATE_FORMAT(`mcdrnew`.`DateEvent`,'%Y-%m') BETWEEN '".$timeawal."' AND '".$timeakhir."') GROUP BY DATE_FORMAT(`mcdrnew`.`DateEvent`,'%Y-%m')";
	$resultFH = mysql_query($qryFH);
	//die($qryFH);
	while ($hasilFH = mysql_fetch_array($resultFH))
	{
		$hour[$hasilFH["periode"]] = ($hasilFH["Jam"]*60) + $hasilFH["Menit"];
	}
	mysql_free_result($resultFH);
	$hour = isset($hour) ? $hour : "";
	//$ATA = array_count_values($hour);
	return $hour;
}

function querycancel($timeawal,$timeakhir,$actype)// untuk ambil Cancel
{
	$qrycancel = "SELECT DATE_FORMAT(`mcdrnew`.`DateEvent`,'%Y-%m') AS `periode`, `mcdrnew`.`ACtype`, Count(`mcdrnew`.`DCP`) AS `Jumlah` FROM `mcdrnew` WHERE (DATE_FORMAT(`mcdrnew`.`DateEvent`,'%Y-%m') BETWEEN '".$timeawal."' AND '".$timeakhir."') AND `mcdrnew`.`DCP`= 'C' AND `mcdrnew`.`ACtype` = '".$actype."' Group by DATE_FORMAT(`mcdrnew`.`DateEvent`,'%Y-%m') ORDER BY DATE_FORMAT(`mcdrnew`.`DateEvent`,'%Y-%m') DESC";
	$resultcancel = mysql_query($qrycancel);
	//die($qrycancel);
	while ($hasilcancel = mysql_fetch_array($resultcancel))
	{
		$cancel[$hasilcancel["periode"]] = $hasilcancel["Jumlah"];
	}
	mysql_free_result($resultcancel);
	$cancel = isset($cancel) ? $cancel : "";
	return $cancel;
}

function bulan($time){
	if (substr($time,-2,2) == "01"){
		$bulan = "JAN";
	} else if (substr($time,-2,2) == "02"){
		$bulan = "FEB";
	} else if (substr($time,-2,2) == "03"){
		$bulan = "MAR";
	} else if (substr($time,-2,2) == "04"){
		$bulan = "APR";
	} else if (substr($time,-2,2) == "05"){
		$bulan = "MAY";
	} else if (substr($time,-2,2) == "06"){
		$bulan = "JUN";
	} else if (substr($time,-2,2) == "07"){
		$bulan = "JUL";
	} else if (substr($time,-2,2) == "08"){
		$bulan = "AUG";
	} else if (substr($time,-2,2) == "09"){
		$bulan = "SEP";
	} else if (substr($time,-2,2) == "10"){
		$bulan = "OCT";
	} else if (substr($time,-2,2) == "11"){
		$bulan = "NOV";
	} else if (substr($time,-2,2) == "12"){
		$bulan = "DEC";
	}
	return $bulan;
}

function jumlahbulan($time){
	if (substr($time,-2,2) == "01"){
		$bulan = 31;
	} else if ((substr($time,-2,2) == "02") AND ((substr($time,0,4) % 4) == 0)){
		$bulan = 29;
	} else if ((substr($time,-2,2) == "02") AND ((substr($time,0,4) % 4) != 0)){
		$bulan = 28;
	} else if (substr($time,-2,2) == "03"){
		$bulan = 31;
	} else if (substr($time,-2,2) == "04"){
		$bulan = 30;
	} else if (substr($time,-2,2) == "05"){
		$bulan = 31;
	} else if (substr($time,-2,2) == "06"){
		$bulan = 30;
	} else if (substr($time,-2,2) == "07"){
		$bulan = 31;
	} else if (substr($time,-2,2) == "08"){
		$bulan = 31;
	} else if (substr($time,-2,2) == "09"){
		$bulan = 30;
	} else if (substr($time,-2,2) == "10"){
		$bulan = 31;
	} else if (substr($time,-2,2) == "11"){
		$bulan = 30;
	} else if (substr($time,-2,2) == "12"){
		$bulan = 31;
	}
	return $bulan;
}

function incident($timeawal,$timeakhir,$actype)//query untuk Incident
{
	$qryFH = "SELECT Count(`relsummary`.`ACType`) AS `Jumlah`, DATE_FORMAT(`relsummary`.`DateIssued`,'%Y-%m') AS `periode` FROM `relsummary` WHERE (DATE_FORMAT(relsummary.DateIssued,'%y-%m') BETWEEN '".$timeawal."' AND '".$timeakhir."') AND `relsummary`.`ACType` = '".$actype."' AND `relsummary`.`Reference` = 'SDR' GROUP BY DATE_FORMAT(`relsummary`.`DateIssued`,'%Y-%m') ORDER BY DATE_FORMAT(`relsummary`.`DateIssued`,'%Y-%m') DESC LIMIT 12";
	$resultFH = mysql_query($qryFH);
	//die($qryFH);
	while ($hasilFH = mysql_fetch_array($resultFH))
	{
		$hour[$hasilFH["periode"]] = $hasilFH["Jumlah"];
	}
	mysql_free_result($resultFH);
	//$hour = isset($hour) ? $hour : ($hour[0] = 0);
	return $hour;
}
function incidentlastyear($timeawal,$timeakhir,$actype)//query untuk Incident
{
	$qryFH = "SELECT Count(`relsummary`.`ACType`) AS `Jumlah`, DATE_FORMAT(`relsummary`.`DateIssued`,'%Y-%m') AS `periode` FROM `relsummary` WHERE (DATE_FORMAT(relsummary.DateIssued,'%y-%m') BETWEEN '".$timeawal."' AND '".$timeakhir."') AND `relsummary`.`ACType` = '".$actype."' AND `relsummary`.`Reference` = 'SDR' GROUP BY DATE_FORMAT(`relsummary`.`DateIssued`,'%Y-%m') ORDER BY DATE_FORMAT(`relsummary`.`DateIssued`,'%Y-%m') DESC LIMIT 12";
	$resultFH = mysql_query($qryFH);
	//die($qryFH);
	while ($hasilFH = mysql_fetch_array($resultFH))
	{
		$hour[$hasilFH["periode"]] = $hasilFH["Jumlah"];
	}
	mysql_free_result($resultFH);
	$hour = isset($hour) ? $hour : ($hour[0] = 0);
	return $hour;
}

function cumulativeFH($time,$actype)//query untuk ambil cumulative FH
{
	$qryFH = "SELECT DATE_FORMAT(tbl_monthlyfhfc.MonthEval,'%Y-%m') AS `periode`, `tbl_masterac`.`ACType`, `tbl_masterac`.`ACReg`, `tbl_monthlyfhfc`.`TSN`, `tbl_monthlyfhfc`.`CSN`, `tbl_monthlyfhfc`.`TSNMin` FROM `tbl_masterac` Inner Join `tbl_monthlyfhfc` ON `tbl_masterac`.`IDreg` = `tbl_monthlyfhfc`.`IDReg` WHERE `tbl_masterac`.`ACType` = '".$actype."' AND DATE_FORMAT(tbl_monthlyfhfc.MonthEval,'%Y-%m') <= '".$time."' ORDER BY  DATE_FORMAT(tbl_monthlyfhfc.MonthEval,'%Y-%m') DESC";
	$resultFH = mysql_query($qryFH);
	//die($qryFH);
	while ($hasilFH = mysql_fetch_array($resultFH))
	{
		if ($hasilFH["TSNMin"] > 30){
			$hour[$hasilFH["ACReg"]][$hasilFH["periode"]] = ($hasilFH["TSN"] + 1);
		} else {
			$hour[$hasilFH["ACReg"]][$hasilFH["periode"]] = $hasilFH["TSN"];
		}
	}
	mysql_free_result($resultFH);
	return $hour;
}

function cumulativeFC($time,$actype)//query untuk ambil cumulative FC
{
	$qryFH = "SELECT DATE_FORMAT(tbl_monthlyfhfc.MonthEval,'%Y-%m') AS `periode`, `tbl_masterac`.`ACType`, `tbl_masterac`.`ACReg`, `tbl_monthlyfhfc`.`TSN`, `tbl_monthlyfhfc`.`CSN` FROM `tbl_masterac` Inner Join `tbl_monthlyfhfc` ON `tbl_masterac`.`IDreg` = `tbl_monthlyfhfc`.`IDReg` WHERE `tbl_masterac`.`ACType` = '".$actype."' AND DATE_FORMAT(tbl_monthlyfhfc.MonthEval,'%Y-%m') <= '".$time."' ORDER BY  DATE_FORMAT(tbl_monthlyfhfc.MonthEval,'%Y-%m') DESC";
	$resultFH = mysql_query($qryFH);
	//die($qryFH);
	while ($hasilFH = mysql_fetch_array($resultFH))
	{
		$hour[$hasilFH["ACReg"]][$hasilFH["periode"]] = $hasilFH["CSN"];
	}
	mysql_free_result($resultFH);
	return $hour;
}

function cumulativeFH12($timeawal,$timeakhir,$actype)//query untuk ambil cumulative FH last year
{
	$qryFH = "SELECT DATE_FORMAT(tbl_monthlyfhfc.MonthEval,'%Y-%m') AS `periode`, `tbl_masterac`.`ACType`, `tbl_masterac`.`ACReg`, `tbl_monthlyfhfc`.`TSN`, `tbl_monthlyfhfc`.`CSN`, `tbl_monthlyfhfc`.`RevFHHours`, `tbl_monthlyfhfc`.`RevFHMin`, `tbl_monthlyfhfc`.`RevFC`, `tbl_monthlyfhfc`.`NoRevFHHours`, `tbl_monthlyfhfc`.`NoRevFHMin`, `tbl_monthlyfhfc`.`NoRevFC` FROM `tbl_masterac` Inner Join `tbl_monthlyfhfc` ON `tbl_masterac`.`IDreg` = `tbl_monthlyfhfc`.`IDReg` WHERE `tbl_masterac`.`ACType` = '".$actype."' AND (DATE_FORMAT(tbl_monthlyfhfc.MonthEval,'%Y-%m') BETWEEN '".$timeawal."' AND '".$timeakhir."') ORDER BY  DATE_FORMAT(tbl_monthlyfhfc.MonthEval,'%Y-%m') DESC";
	$resultFH = mysql_query($qryFH);
	//die($qryFH);
	while ($hasilFH = mysql_fetch_array($resultFH))
	{
		$hour[$hasilFH["ACReg"]][$hasilFH["periode"]] =  $hasilFH["RevFHHours"] + $hasilFH["NoRevFHHours"] + round(($hasilFH["RevFHMin"] + $hasilFH["NoRevFHMin"])/60,0);
	}
	//die(print_r($hour));
	mysql_free_result($resultFH);
	foreach ($hour as $k => $v){
		$fh[$k] = array_sum($v);
	}
	return $fh;
}

function cumulativeFC12($timeawal,$timeakhir,$actype)//query untuk ambil cumulative FC last year
{
	$qryFH = "SELECT DATE_FORMAT(tbl_monthlyfhfc.MonthEval,'%Y-%m') AS `periode`, `tbl_masterac`.`ACType`, `tbl_masterac`.`ACReg`, `tbl_monthlyfhfc`.`TSN`, `tbl_monthlyfhfc`.`CSN`, `tbl_monthlyfhfc`.`RevFHHours`, `tbl_monthlyfhfc`.`RevFHMin`, `tbl_monthlyfhfc`.`RevFC`, `tbl_monthlyfhfc`.`NoRevFHHours`, `tbl_monthlyfhfc`.`NoRevFHMin`, `tbl_monthlyfhfc`.`NoRevFC` FROM `tbl_masterac` Inner Join `tbl_monthlyfhfc` ON `tbl_masterac`.`IDreg` = `tbl_monthlyfhfc`.`IDReg` WHERE `tbl_masterac`.`ACType` = '".$actype."' AND (DATE_FORMAT(tbl_monthlyfhfc.MonthEval,'%Y-%m') BETWEEN '".$timeawal."' AND '".$timeakhir."') ORDER BY  DATE_FORMAT(tbl_monthlyfhfc.MonthEval,'%Y-%m') DESC";
	$resultFH = mysql_query($qryFH);
	//die($qryFH);
	while ($hasilFH = mysql_fetch_array($resultFH))
	{
		$hour[$hasilFH["ACReg"]][$hasilFH["periode"]] = $hasilFH["RevFC"] + $hasilFH["NoRevFC"];
	}
	mysql_free_result($resultFH);
	foreach ($hour as $k => $v){
		$fh[$k] = array_sum($v);
	}
	return $fh;
}

function reg($actype)//quer untuk ambil registarsi
{
	$qryFH = "SELECT `tbl_masterac`.`ACReg`, `tbl_masterac`.`ACType` FROM `tbl_masterac` WHERE `tbl_masterac`.`ACType` = '".$actype."' AND `tbl_masterac`.`Active` = 1 ORDER BY `tbl_masterac`.`ACReg` ASC";
	$resultFH = mysql_query($qryFH);
	//die($qryFH);
	while ($hasilFH = mysql_fetch_array($resultFH))
	{
		$hour[] = $hasilFH["ACReg"];
	}
	mysql_free_result($resultFH);
	return $hour;
}

function alertstatus($rate1,$rate2,$rate3,$alertlevel)//query untuk ambil Alert Status
{
	if (($rate3 > $alertlevel) && ($rate2 > $alertlevel) && ($rate1 > $alertlevel)){
			$hasil = "RED-3";
	} else if (($rate3 > $alertlevel) && ($rate2 > $alertlevel)){
			$hasil = "RED-2";
	} else if (($rate3 > $alertlevel)){
			$hasil = "RED-1";
	} else {
		$hasil = "";
	}
	return $hasil;
}

function alerttrend($rate1,$rate2,$rate3)//query untuk Trend
{
	if (($rate3 > $rate2) && ($rate2 > $rate1)){		
			$hasil = "UP";
	} elseif(($rate1 > $rate2) && ($rate2 > $rate3)){
		//if ($rate2 > $rate3){
			$hasil = "DOWN";
		//}
	} else {$hasil = "";}
	return $hasil;
}

function engineremoval($time,$actype)
{
	$qryFH = "SELECT `tbl_removaldesc`.`Reason`, DATE_FORMAT(`tbl_engineremove`.`DateRemove`,'%Y-%m') AS `periode`, Count(`tbl_removaldesc`.`Reason`) AS `jumlah` FROM `tbl_engineremove` Inner Join `tbl_removaldesc` ON `tbl_engineremove`.`ReasonRemoval` = `tbl_removaldesc`.`ID` WHERE `tbl_engineremove`.`AircraftType` IN ('".$actype."') AND DATE_FORMAT(`tbl_engineremove`.`DateRemove`,'%Y-%m') <= '".$time."' GROUP BY `tbl_removaldesc`.`Reason`,DATE_FORMAT(`tbl_engineremove`.`DateRemove`,'%Y-%m') ORDER BY DATE_FORMAT(`tbl_engineremove`.`DateRemove`,'%Y-%m') DESC";
	$resultFH = mysql_query($qryFH);
	//die($qryFH);
	//while ($hasilFH = mysql_fetch_array($resultFH))
	//{
	//	$hour[$hasilFH["Reason"]][$hasilFH["periode"]] = $hasilFH["jumlah"];
	//}
	return $resultFH;
}

function engineremoval12($timeawal,$timeakhir,$actype)
{
	$qryFH = "SELECT `tbl_removaldesc`.`Reason`, DATE_FORMAT(`tbl_engineremove`.`DateRemove`,'%Y-%m') AS `periode`, Count(`tbl_removaldesc`.`Reason`) AS `jumlah` FROM `tbl_engineremove` Inner Join `tbl_removaldesc` ON `tbl_engineremove`.`ReasonRemoval` = `tbl_removaldesc`.`ID` WHERE `tbl_engineremove`.`AircraftType` IN ('".$actype."') AND (DATE_FORMAT(`tbl_engineremove`.`DateRemove`,'%Y-%m') BETWEEN '".$timeawal."' AND '".$timeakhir."') GROUP BY `tbl_removaldesc`.`Reason`,DATE_FORMAT(`tbl_engineremove`.`DateRemove`,'%Y-%m') ORDER BY DATE_FORMAT(`tbl_engineremove`.`DateRemove`,'%Y-%m') DESC";
	$resultFH = mysql_query($qryFH);
	//die($qryFH);
	//while ($hasilFH = mysql_fetch_array($resultFH))
	//{
	//	$hour[$hasilFH["Reason"]][$hasilFH["periode"]] = $hasilFH["jumlah"];
	//}
	return $resultFH;
}

function convinience($status,$SN)
{
	if ($status == "Convenience"){
		$hasil = $SN;
	} else {
		$hasil = "";
	}
	return $hasil;
}

function campaign($status,$SN)
{
	if ($status == "Campaign"){
		$hasil = $SN;
	} else {
		$hasil = "";
	}
	return $hasil;
}

function predbasicplan($status,$SN)
{
	if ($status == "Predefined Basic Planned"){
		$hasil = $SN;
	} else {
		$hasil = "";
	}
	return $hasil;
}

function predbasicunplan($status,$SN)
{
	if ($status == "Predefined Basic UnPlanned"){
		$hasil = $SN;
	} else {
		$hasil = "";
	}
	return $hasil;
}

function prednonbasicplan($status,$SN)
{
	if ($status == "Predefined NonBasic Planned"){
		$hasil = $SN;
	} else {
		$hasil = "";
	}
	return $hasil;
}

function prednonbasicunplan($status,$SN)
{
	if ($status == "Predefined NonBasic UnPlanned"){
		$hasil = $SN;
	} else {
		$hasil = "";
	}
	return $hasil;
}

function prembasicplan($status,$SN)
{
	if ($status == "Premature Basic Planned"){
		$hasil = $SN;
	} else {
		$hasil = "";
	}
	return $hasil;
}

function prembasicunplan($status,$SN)
{
	if ($status == "Premature Basic UnPlanned"){
		$hasil = $SN;
	} else {
		$hasil = "";
	}
	return $hasil;
}

function premnonbasicplan($status,$SN)
{
	if ($status == "Premature NonBasic Planned"){
		$hasil = $SN;
	} else {
		$hasil = "";
	}
	return $hasil;
}

function premnonbasicunplan($status,$SN)
{
	if ($status == "Premature NonBasic UnPlanned"){
		$hasil = $SN;
	} else {
		$hasil = "";
	}
	return $hasil;
}
function ifsd($time,$actype)
{
	$qryFH = "SELECT `tbl_ifsd`.`ACType`, DATE_FORMAT(`tbl_ifsd`.`DateOccur`,'%Y-%m') AS `periode`, COUNT(`tbl_ifsd`.`ID`) AS `jumlah` FROM `tbl_ifsd` WHERE  `tbl_ifsd`.`ACType` IN ('".$actype."') AND DATE_FORMAT(`tbl_ifsd`.`DateOccur`,'%Y-%m') <= '".$time."' AND `tbl_ifsd`.`ifsd` = 'IFSD' GROUP BY `tbl_ifsd`.`ACType`,DATE_FORMAT(`tbl_ifsd`.`DateOccur`,'%Y-%m')";
	$resultFH = mysql_query($qryFH);
	//die($qryFH);
	while ($hasilFH = mysql_fetch_array($resultFH))
	{
		$hour[$hasilFH["periode"]] = $hasilFH["jumlah"];
	}
	mysql_free_result($resultFH);
	$hour = isset($hour) ? $hour : "";//die(print_r($hour));
	return $hour;
}
function ifsdlastyear($timeawal,$timeakhir,$actype)
{
	$qryFH = "SELECT `tbl_ifsd`.`ACType`, DATE_FORMAT(`tbl_ifsd`.`DateOccur`,'%Y-%m') AS `periode`, COUNT(`tbl_ifsd`.`ID`) AS `jumlah` FROM `tbl_ifsd` WHERE  `tbl_ifsd`.`ACType` IN ('".$actype."') AND (DATE_FORMAT(`tbl_ifsd`.`DateOccur`,'%Y-%m') BETWEEN '".$timeawal."' AND '".$timeakhir."') AND `tbl_ifsd`.`ifsd` = 'IFSD' GROUP BY `tbl_ifsd`.`ACType`,DATE_FORMAT(`tbl_ifsd`.`DateOccur`,'%Y-%m')";
	$resultFH = mysql_query($qryFH);
	//die($qryFH);
	//while ($hasilFH = mysql_fetch_array($resultFH))
	//{
	//	$hour[$hasilFH["periode"]] = $hasilFH["jumlah"];
	//}
	return $resultFH;
}
function rto($time,$actype)
{
	$qryFH = "SELECT `tbl_ifsd`.`ACType`, DATE_FORMAT(`tbl_ifsd`.`DateOccur`,'%Y-%m') AS `periode`, COUNT(`tbl_ifsd`.`ID`) AS `jumlah` FROM `tbl_ifsd` WHERE  `tbl_ifsd`.`ACType` IN ('".$actype."') AND DATE_FORMAT(`tbl_ifsd`.`DateOccur`,'%Y-%m') <= '".$time."' AND `tbl_ifsd`.`rto` = 'RTO' GROUP BY `tbl_ifsd`.`ACType`,DATE_FORMAT(`tbl_ifsd`.`DateOccur`,'%Y-%m')";
	$resultFH = mysql_query($qryFH);
	//die($qryFH);
	while ($hasilFH = mysql_fetch_array($resultFH))
	{
		$hour[$hasilFH["periode"]] = $hasilFH["jumlah"];
	}
	$hour = isset($hour) ? $hour : "";
	return $hour;
}
function rtolastyear($timeawal,$timeakhir,$actype)
{
	$qryFH = "SELECT `tbl_ifsd`.`ACType`, DATE_FORMAT(`tbl_ifsd`.`DateOccur`,'%Y-%m') AS `periode`, COUNT(`tbl_ifsd`.`ID`) AS `jumlah` FROM `tbl_ifsd` WHERE  `tbl_ifsd`.`ACType` IN ('".$actype."') AND (DATE_FORMAT(`tbl_ifsd`.`DateOccur`,'%Y-%m') BETWEEN '".$timeawal."' AND '".$timeakhir."') AND `tbl_ifsd`.`rto` = 'RTO' GROUP BY `tbl_ifsd`.`ACType`,DATE_FORMAT(`tbl_ifsd`.`DateOccur`,'%Y-%m')";
	$resultFH = mysql_query($qryFH);
	while ($hasilFH = mysql_fetch_array($resultFH))
	{
		$hour[$hasilFH["periode"]] = $hasilFH["jumlah"];
	}
	$hour = isset($hour) ? $hour : "";
	return $hour;
}

function ATApirepperformance($time,$actype)//query untuk  Report
{
	$qryFH = "SELECT DATE_FORMAT(tblpirep.DATE,'%Y-%m') AS `bulan`, `tblpirep`.`ATA` AS `subjectATA`, Count(`tblpirep`.`ATA`) AS `Jumlah`, `tblpirep`.`REG` FROM `tblpirep` WHERE DATE_FORMAT(`tblpirep`.`DATE`,'%Y-%m') = '".$time."' AND `tblpirep`.`ATA` > '20' AND `tblpirep`.`ACTYPE` = '".$actype."' group by `tblpirep`.`ATA`, DATE_FORMAT(`tblpirep`.`DATE`,'%Y-%m'),`tblpirep`.`REG` ORDER BY DATE_FORMAT(`tblpirep`.`DATE`,'%Y-%m'),`tblpirep`.`ATA` DESC";
	$resultFH = mysql_query($qryFH);
	//echo($qryFH);
	while ($hasilFH = mysql_fetch_array($resultFH))
	{
		$ATA[$hasilFH["subjectATA"]]["PK-".$hasilFH["REG"]] = $hasilFH["Jumlah"];
	}
	mysql_free_result($resultFH);
	//$ATA = array_count_values($hour);
	return $ATA;
}

function ATAdelayperformance($time,$actype)//query untuk delay 
{
	$qryFH = "SELECT DATE_FORMAT(mcdrnew.DateEvent,'%Y-%m') AS `periode`, Count(`mcdrnew`.`ATAtdm`) AS `Jumlah`, `mcdrnew`.`ATAtdm`, `mcdrnew`.`Reg` FROM `mcdrnew` WHERE `mcdrnew`.`DCP` = 'D' AND `mcdrnew`.`ACtype` = '".$actype."' AND DATE_FORMAT(mcdrnew.DateEvent,'%Y-%m') = '".$time."' GROUP BY DATE_FORMAT(mcdrnew.DateEvent,'%Y-%m'), `mcdrnew`.`ATAtdm`, `mcdrnew`.`Reg` ORDER BY DATE_FORMAT(mcdrnew.DateEvent,'%Y-%m') DESC";
	$resultFH = mysql_query($qryFH);
	//die($qryFH);
	while ($hasilFH = mysql_fetch_array($resultFH))
	{
		$hour[$hasilFH["ATAtdm"]][$hasilFH["Reg"]] = $hasilFH["Jumlah"];
	}
	mysql_free_result($resultFH);
	//$ATA = array_count_values($hour);
	return $hour;
}

function compremoval($timeawal,$timeakhir,$actype,$pn)//query untuk component removal
{
	$qryFH = "SELECT `tblcompremoval`.`PartNo`, Count(`tblcompremoval`.`PartNo`) AS `Jumlah`, `tblcompremoval`.`Aircraft` FROM `tblcompremoval` WHERE `tblcompremoval`.`Aircraft` IN (".$actype.") AND (`tblcompremoval`.`DateRem` BETWEEN '".$timeawal."' AND '".$timeakhir."') AND `tblcompremoval`.`PartNo` = '".$pn."' GROUP BY `tblcompremoval`.`Aircraft`, `tblcompremoval`.`PartNo`";
	$resultFH = mysql_query($qryFH);
	//die($qryFH);
	while ($hasilFH = mysql_fetch_array($resultFH))
	{
		$hour[$hasilFH["Aircraft"]] = $hasilFH["Jumlah"];
	}
	mysql_free_result($resultFH);
	//$ATA = array_count_values($hour);
	return $hour;
}

function FHremoval($timeawal,$timeakhir,$actype)//query untuk component removal
{
	$qryFH = "SELECT `tbl_masterac`.`ACType`, SEC_TO_TIME( SUM( TIME_TO_SEC(`aircraftflightlog`.`airtime`))) AS `jam` FROM `aircraftflightlog` Inner Join `tbl_masterac` ON `aircraftflightlog`.`acReg` = `tbl_masterac`.`ACReg` WHERE `tbl_masterac`.`ACType` IN (".$actype.") AND (`aircraftflightlog`.`blockOnDate` BETWEEN '".$timeawal."' AND '".$timeakhir."') AND `aircraftflightlog`.`voidStatus` = 'false' GROUP BY `tbl_masterac`.`ACType`";
	$resultFH = mysql_query($qryFH);
	//die($qryFH);
	while ($hasilFH = mysql_fetch_array($resultFH))
	{
		$hour[$hasilFH["ACType"]] = $hasilFH["jam"]/1;
	}
	mysql_free_result($resultFH);
	//$ATA = array_count_values($hour);
	return $hour;
}

function compremovalqty($timeawal,$timeakhir,$actype,$pn)//query untuk component removal
{
	$qryFH = "SELECT `tblcompremoval`.`PartNo`, `tblcompremoval`.`Qty`, `tblcompremoval`.`Aircraft` FROM `tblcompremoval` WHERE `tblcompremoval`.`Aircraft` IN (".$actype.") AND (`tblcompremoval`.`DateRem` BETWEEN '".$timeawal."' AND '".$timeakhir."') AND `tblcompremoval`.`PartNo` = '".$pn."' GROUP BY `tblcompremoval`.`Aircraft`, `tblcompremoval`.`PartNo`";
	$resultFH = mysql_query($qryFH);
	//die($qryFH);
	while ($hasilFH = mysql_fetch_array($resultFH))
	{
		$hour[$hasilFH["Aircraft"]] = $hasilFH["Qty"];
	}
	mysql_free_result($resultFH);
	//$ATA = array_count_values($hour);
	return $hour;
}

function oilcons($timeawal,$timeakhir,$acreg)//query untuk component removal
{
	$qryoil = "SELECT `tbl_aml`.`acReg`, `tbl_aml`.`dateAML`, Sum(`tbl_aml_depdata`.`oilRef1`) AS `oil1`, Sum(`tbl_aml_depdata`.`oilRef2`) AS `oil2`, Sum(`tbl_aml_depdata`.`oilRef3`) AS `oil3`, Sum(`tbl_aml_depdata`.`oilRef4`) AS `oil4` FROM `tbl_aml` Inner Join `tbl_aml_depdata` ON `tbl_aml`.`idxAML` = `tbl_aml_depdata`.`idxAML` WHERE `tbl_aml`.`acReg` = '".$acreg."' AND `tbl_aml`.`dateAML` BETWEEN '".$timeawal."' AND '".$timeakhir."' GROUP BY `tbl_aml`.`acReg`, `tbl_aml`.`dateAML`";
	$resultoil = mysql_query($qryoil);
	//die($qryFH);
	while ($hasiloil = mysql_fetch_array($resultoil))
	{
		$oil1[$hasiloil["dateAML"]] = $hasiloil["oil1"];
		$oil2[$hasiloil["dateAML"]] = $hasiloil["oil2"];
		$oil3[$hasiloil["dateAML"]] = $hasiloil["oil3"];
		$oil4[$hasiloil["dateAML"]] = $hasiloil["oil4"];
	}

	$qryFH = "SELECT SEC_TO_TIME(SUM(TIME_TO_SEC(aircraftflightlog.airTime))) AS `FH`, `aircraftflightlog`.`acReg`, `aircraftflightlog`.`airborneDate` FROM `aircraftflightlog` WHERE `aircraftflightlog`.`acReg` = '".$acreg."' AND `aircraftflightlog`.`airborneDate` BETWEEN '".$timeawal."' AND '".$timeakhir."' GROUP BY `aircraftflightlog`.`acReg`, `aircraftflightlog`.`airborneDate`";
	$resultFH = mysql_query($qryFH);
	//die($qryFH);
	while ($hasilFH = mysql_fetch_array($resultFH))
	{
		$hour[$hasilFH["airborneDate"]] = $hasilFH["FH"];
	}
	foreach ($hour as $key => $value){
		$rate1 = $oil1[$key]/$value * 1000;
		$rate2 = $oil2[$key]/$value * 1000;
		$rate3 = $oil3[$key]/$value * 1000;
		$rate4 = $oil4[$key]/$value * 1000;
	}
	//$ATA = array_count_values($hour);
	return $hour;
}

function link_detail($kriteria, $text, $ATA, $periode,$type) {
	$kriteria = addslashes($kriteria);
	if ($text > 0 ) {
		//return "<a class=\"a_menu\" href=\"javascript:display_detail('$kriteria','$ATA','$periode','$title')\">$text</a>";
		return "<a href=\"pilot_report_detail3.php?ATA=".$ATA."&periode=".$periode."&type=".$type."&kriteria=".$kriteria."\" target=\"none\">$text</a>";
	} else {
		return $text;
	}
}

function selectactype() {
	$actypequery = "SELECT `tbl_masterac`.`ACType` AS `value` FROM `tbl_masterac` WHERE `tbl_masterac`.`ACType` <> '' GROUP BY `tbl_masterac`.`ACType`";
	$resultactyep = mysql_query($actypequery);
	//die($actypequery);
	while ($hasilactype = mysql_fetch_array($resultactyep))
	{
		$arractype[] = $hasilactype[0];
	}//die(print_r($arractype));
	return $arractype;
}

function selectperiode() {
	$actypequery = "SELECT DISTINCT DATE_FORMAT(tbl_monthlyfhfc.MonthEval,'%Y-%m') AS `value` FROM `tbl_monthlyfhfc` WHERE `tbl_monthlyfhfc`.`MonthEval`IS NOT NULL ORDER BY `tbl_monthlyfhfc`.`MonthEval` DESC";
	$resultactyep = mysql_query($actypequery);
	//die($actypequery);
	while ($hasilactype = mysql_fetch_array($resultactyep))
	{
		$arractype[] = $hasilactype[0];
	}
	//die(print_r($arractype));
	return $arractype;
}

function selectengine() {
	$arrengine = array(
		"Trent 772" => "Trent 772",
		"Trent 768" => "Trent 768",
		"CFM56-3" => "CFM56-3",
		"CFM56-7" => "CFM56-7",
		"CF680" => "CF6-80C2"
		);
	return $arrengine;
}

function cmbbox($name, $arr_item, $value='', $onchange='', $add_opt=1) {
	$html = "<select name='$name' id='$name' onchange=\"$onchange\">result</select>";
	$opt = ($add_opt == 1) ? "<option value=''>-- Please Select --</option>" : "" ;
	foreach ($arr_item as $data) {
		$selected = $data == $value ? " selected" : "";
		$text = isset($data['text']) ? $data['text'] : $data['value'] ;
		$opt .= "<option value='{$data}'$selected>{$data}</option>";
	}
	echo str_replace('result', $opt, $html);
}

function engineaircraft($engine) {
	if ($engine == "Trent 772"){
		$type = "A330-200";
	} else if ($engine == "Trent 768"){
		$type = "A330-300";
	} else if ($engine == "CFM56-3"){
		$type = "B737-300','B737-400','B737-500','B737-CL";
	} else if ($engine == "CFM56-7"){
		$type = "B737-800";
	} else if ($engine == "CF6-80C2"){
		$type = "B747-400";
	}
	return $type;
}
?>
