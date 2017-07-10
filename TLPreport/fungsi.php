<? 


	include ("ConnIMESys.php");
 $connectAMS = connectimesys('imesys');

function fleet($time,$actype)
{
	$qryFH = "SELECT Count( DISTINCT(`tbl_masterac`.`acReg`)) AS `jumlah`, `tbl_masterac`.`ACType`, DATE_FORMAT(`aircraftflightlog`.`blockOnDate`,'%Y-%m') AS `periode` FROM `aircraftflightlog` Inner Join `tbl_masterac` ON `aircraftflightlog`.`acReg` = `tbl_masterac`.`ACReg` WHERE DATE_FORMAT(`aircraftflightlog`.`blockOnDate`,'%Y-%m') <= '".$time."' AND `tbl_masterac`.`ACType`= '".$actype."' GROUP BY `tbl_masterac`.`ACType`,DATE_FORMAT(`aircraftflightlog`.`blockOnDate`,'%Y-%m') ORDER BY DATE_FORMAT(`aircraftflightlog`.`blockOnDate`,'%Y-%m') DESC LIMIT 12";
	$resultFH = mysql_query($qryFH);
	//die($qryFH);
	while ($hasilFH = mysql_fetch_array($resultFH))
	{
		$hour[$hasilFH["periode"]] = $hasilFH["jumlah"];
	}
	return $hour;
}
function available($timeawal,$timeakhir,$actype)
{
	$qryFH = "select COUNT( distinct `imesys`.`aircraftflightlog`.`blockOnDate`) AS `jumlah`, `imesys`.`aircraftflightlog`.`acReg` AS `acReg`, `imesys`.`tbl_masterac`.`ACType` AS `ACType`, DATE_FORMAT(`imesys`.`aircraftflightlog`.`blockOnDate`,'%Y-%m') AS `periode` FROM (`imesys`.`aircraftflightlog` join `imesys`.`tbl_masterac` on((`imesys`.`tbl_masterac`.`ACReg` = `imesys`.`aircraftflightlog`.`acReg`))) WHERE (DATE_FORMAT(`aircraftflightlog`.`blockOnDate`,'%Y-%m') BETWEEN '".$timeawal."' AND '".$timeakhir."') AND `tbl_masterac`.`ACType` = '".$actype."' GROUP BY `aircraftflightlog`.`acReg`,DATE_FORMAT(`imesys`.`aircraftflightlog`.`blockOnDate`,'%Y-%m') ORDER BY DATE_FORMAT(`imesys`.`aircraftflightlog`.`blockOnDate`,'%Y-%m') DESC";
	$resultFH = mysql_query($qryFH);
	//die($qryFH);
	while ($hasilFH = mysql_fetch_array($resultFH))
	{
		$hour[$hasilFH["periode"]][$hasilFH["acReg"]] = $hasilFH["jumlah"];
	}
	foreach ($hour as $key => $value){
		foreach ($hour[$key] as $k => $v){
			$jumlah[$k] = $v;
		}
		$avail[$key] = array_sum($jumlah);
	}
	return $avail;
}

function queryFH($time,$actype)
{
	$qryFH = "SELECT SEC_TO_TIME( SUM( TIME_TO_SEC( `aircraftflightlog`.`airTime` ) ) ) AS `Jumlah` , Count(`aircraftflightlog`.`landing`) AS `Cycle`, DATE_FORMAT(`blockOnDate`,'%Y-%m') AS `periode` FROM `aircraftflightlog` Inner Join `tbl_masterac` ON `aircraftflightlog`.`acReg` = `tbl_masterac`.`ACReg` WHERE (DATE_FORMAT(`blockOnDate`,'%Y-%m') <= '".$time."') AND `tbl_masterac`.`ACType` = '".$actype."' GROUP BY DATE_FORMAT(`blockOnDate`,'%Y-%m') ORDER BY DATE_FORMAT(`blockOnDate`,'%Y-%m') DESC LIMIT 3";
	$resultFH = mysql_query($qryFH);
	//die($qryFH);
	while ($hasilFH = mysql_fetch_array($resultFH))
	{
		$hour[$hasilFH["periode"]] = $hasilFH["Jumlah"]/1;
	}
	return $hour;
}

function queryFC($time,$actype)
{
	$qryFH = "SELECT Count(`aircraftflightlog`.`landing`) AS `Cycle`, DATE_FORMAT(`blockOnDate`,'%Y-%m') AS `periode` FROM `aircraftflightlog` Inner Join `tbl_masterac` ON `aircraftflightlog`.`acReg` = `tbl_masterac`.`ACReg` WHERE (DATE_FORMAT(`blockOnDate`,'%Y-%m') <= '".$time."') AND `tbl_masterac`.`ACType` = '".$actype."' GROUP BY DATE_FORMAT(`blockOnDate`,'%Y-%m') ORDER BY DATE_FORMAT(`blockOnDate`,'%Y-%m') DESC LIMIT 3";
	$resultFH = mysql_query($qryFH);
	//die($qryFH);
	while ($hasilFH = mysql_fetch_array($resultFH))
	{
		$cycle[$hasilFH["periode"]] = $hasilFH["Cycle"];
	}
	return $cycle;
}

function queryFH12($time,$actype)
{
	$qryFH = "SELECT SEC_TO_TIME( SUM( TIME_TO_SEC( `aircraftflightlog`.`airTime` ) ) ) AS `Jumlah` ,  DATE_FORMAT(`blockOnDate`,'%Y-%m') AS `periode` FROM `aircraftflightlog` Inner Join `tbl_masterac` ON `aircraftflightlog`.`acReg` = `tbl_masterac`.`ACReg` WHERE DATE_FORMAT(`blockOnDate`,'%Y-%m') <= '".$time."' AND `tbl_masterac`.`ACType` = '".$actype."' GROUP BY DATE_FORMAT(`blockOnDate`,'%Y-%m') ORDER BY DATE_FORMAT(`blockOnDate`,'%Y-%m') DESC LIMIT 12";
	$resultFH = mysql_query($qryFH);
	//die($qryFH);
	while ($hasilFH = mysql_fetch_array($resultFH))
	{
		$hour[$hasilFH["periode"]] = $hasilFH["Jumlah"]/1;
	}
	return $hour;
}

function queryFC12($time,$actype)
{
	$qryFH = "SELECT DATE_FORMAT(`blockOnDate`,'%Y-%m') AS `periode`, Count(`aircraftflightlog`.`landing`) AS `Cycle` FROM `aircraftflightlog` Inner Join `tbl_masterac` ON `aircraftflightlog`.`acReg` = `tbl_masterac`.`ACReg` WHERE DATE_FORMAT(`blockOnDate`,'%Y-%m') <= '".$time."' AND `tbl_masterac`.`ACType` = '".$actype."' GROUP BY DATE_FORMAT(`blockOnDate`,'%Y-%m') ORDER BY DATE_FORMAT(`blockOnDate`,'%Y-%m') DESC LIMIT 12";
	$resultFH = mysql_query($qryFH);
	//die($qryFH);
	while ($hasilFH = mysql_fetch_array($resultFH))
	{
		$hour[$hasilFH["periode"]] = $hasilFH["Cycle"];
	}
	return $hour;
}

function ATAdef()
{
	$qryFH = "SELECT `tbl_master_ata`.`ATA`, `tbl_master_ata`.`ATA_DESC` FROM `tbl_master_ata` WHERE `tbl_master_ata`.`ATA` > '20'";
	$resultFH = mysql_query($qryFH);
	//die($qryFH);
	while ($hasilFH = mysql_fetch_array($resultFH))
	{
		$ATA[] = $hasilFH[0];
	}
	return $ATA;
}

function ATAdesc()
{
	$qryFH = "SELECT `tbl_master_ata`.`ATA`, `tbl_master_ata`.`ATA_DESC` FROM `tbl_master_ata` WHERE `tbl_master_ata`.`ATA` > '20'";
	$resultFH = mysql_query($qryFH);
	//die($resultFH);
	while ($hasilFH = mysql_fetch_array($resultFH))
	{
		//$ATA[] = $hasilFH[0];
		$ATAdesc[] = $hasilFH[1];
	}
	//$ATA = array_count_values($hour);
	return $ATAdesc;
}


function ATA($timeawal,$timeakhir,$actype)
{
	$qryFH = "SELECT DATE_FORMAT(tbl_aml.dateAML,'%Y-%m') AS `bulan`, `tbl_aml_detail`.`subjectATA` AS `subjectATA`, Count(`tbl_aml_detail`.`subjectATA`) AS `Jumlah` FROM ((((`tbl_aml` Inner Join `tbl_aml_detail` ON ((`tbl_aml`.`idxAML` = `tbl_aml_detail`.`idxAML`)))))) Inner Join `tbl_masterac` ON `tbl_masterac`.`ACReg` = `tbl_aml`.`acReg` WHERE (DATE_FORMAT(`tbl_aml`.`dateAML`,'%Y-%m') BETWEEN '".$timeawal."' AND '".$timeakhir."') AND `tbl_masterac`.`ACType` = '".$actype."' AND `tbl_aml`.`PirepMarep` = 'PIREP' group by `tbl_aml_detail`.`subjectATA`, DATE_FORMAT(tbl_aml.dateAML,'%Y-%m')";
	$resultFH = mysql_query($qryFH);
	//die($qryFH);
	while ($hasilFH = mysql_fetch_array($resultFH))
	{
		$ATA[$hasilFH["bulan"]][$hasilFH["subjectATA"]] = $hasilFH["Jumlah"];
	}
	//$ATA = array_count_values($hour);
	return $ATA;
}

function ATA12($timeawal,$timeakhir,$actype)
{
	$qryFH = "SELECT `tbl_aml_detail`.`subjectATA` AS `subjectATA`, Count(`tbl_aml_detail`.`subjectATA`) AS `Jumlah` FROM ((((`tbl_aml` Inner Join `tbl_aml_detail` ON ((`tbl_aml`.`idxAML` = `tbl_aml_detail`.`idxAML`)))))) Inner Join `tbl_masterac` ON `tbl_masterac`.`ACReg` = `tbl_aml`.`acReg` WHERE (DATE_FORMAT(`tbl_aml`.`dateAML`,'%Y-%m') BETWEEN '".$timeawal."' AND '".$timeakhir."') AND `tbl_masterac`.`ACType` = '".$actype."' AND `tbl_aml`.`PirepMarep` = 'PIREP' group by `tbl_aml_detail`.`subjectATA`";
	$resultFH = mysql_query($qryFH);
	//die($qryFH);
	while ($hasilFH = mysql_fetch_array($resultFH))
	{
		$hour[$hasilFH["subjectATA"]] = $hasilFH["Jumlah"];
	}
	
	return $hour;
}

function alert($timeawal,$timeakhir,$actype)
{
	$alert = "SELECT DATE_FORMAT(tbl_aml.dateAML,'%Y-%m') AS `bulan`, `tbl_aml_detail`.`subjectATA` AS `subjectATA`, Count(`tbl_aml_detail`.`subjectATA`) AS `Jumlah` FROM ((((`tbl_aml` Inner Join `tbl_aml_detail` ON ((`tbl_aml`.`idxAML` = `tbl_aml_detail`.`idxAML`)))))) Inner Join `tbl_masterac` ON `tbl_masterac`.`ACReg` = `tbl_aml`.`acReg` WHERE (DATE_FORMAT(`tbl_aml`.`dateAML`,'%Y-%m') BETWEEN '".$timeawal."' AND '".$timeakhir."') AND `tbl_masterac`.`ACType` = '".$actype."' AND `tbl_aml`.`PirepMarep` = 'PIREP' group by `tbl_aml_detail`.`subjectATA`, DATE_FORMAT(tbl_aml.dateAML,'%Y-%m')";
	$resultalert = mysql_query($alert);
	//die($alert);
	while ($hasilalert = mysql_fetch_array($resultalert))
	{
		//$ATA[] = $hasilalert["subjectATA"];
		$ATAalert[$hasilalert["subjectATA"]][$hasilalert["bulan"]] = $hasilalert["Jumlah"];
		//$periode[] = $hasilalert["periode"];
		//$jumlahATA[] = $hasilalert["JumlahATA"];

	}

	$qryFH = "SELECT SEC_TO_TIME( SUM( TIME_TO_SEC( `aircraftflightlog`.`airTime` ) ) ) AS `Jumlah` , DATE_FORMAT(`blockOnDate`,'%Y-%m') AS `periode` FROM `aircraftflightlog` Inner Join `tbl_masterac` ON `aircraftflightlog`.`acReg` = `tbl_masterac`.`ACReg` WHERE (DATE_FORMAT(`blockOnDate`,'%Y-%m') BETWEEN '".$timeawal."' AND '".$timeakhir."') AND `tbl_masterac`.`ACType` = '".$actype."' GROUP BY DATE_FORMAT(`blockOnDate`,'%Y-%m')";
	$resultFH = mysql_query($qryFH);
	//die($qryFH);
	while ($hasilFH = mysql_fetch_array($resultFH))
	{
		$hour[$hasilFH["periode"]] = $hasilFH["Jumlah"]/1;
	}
	//die(print_r($hour));
	foreach ($ATAalert as $key => $value){
		foreach ($value as $k => $v){
			$rate[$k] = $v/$hour[$k] * 1000;//itung rate untuk setiap bulan ATA
		}
		$mean = array_sum($rate)/12;//rata2 
		$sigma_temp = 0;
		foreach ($rate as $keys => $values) {
			$sigma_temp += ($values - $mean) * ($values - $mean);
		}
		$standard_deviation = sqrt($sigma_temp / 12);
		$alertlevel[$key] = $mean + (2.5 * $standard_deviation);
	}

	return $alertlevel;
}

function ATAdelay($timeawal,$timeakhir,$actype)
{
	$qryFH = "SELECT DATE_FORMAT(`mcdrnew`.`DateEvent`,'%Y-%m') AS `periode`, Count(`mcdrnew`.`ATAtdm`) AS `Jumlah`, `mcdrnew`.`ATAtdm` FROM `mcdrnew` WHERE `mcdrnew`.`DCP` = 'D' AND `mcdrnew`.`ACtype` = '".$actype."' AND (DATE_FORMAT(`mcdrnew`.`DateEvent`,'%Y-%m') BETWEEN '".$timeawal."' AND '".$timeakhir."') GROUP BY DATE_FORMAT(`mcdrnew`.`DateEvent`,'%Y-%m'), `mcdrnew`.`ATAtdm`";
	$resultFH = mysql_query($qryFH);
	//die($qryFH);
	while ($hasilFH = mysql_fetch_array($resultFH))
	{
		$hour[$hasilFH["periode"]][$hasilFH["ATAtdm"]] = $hasilFH["Jumlah"];
	}
	//$ATA = array_count_values($hour);
	return $hour;
}

function ATAdelay12($timeawal,$timeakhir,$actype)
{
	$qryFH = "SELECT Count(`mcdrnew`.`ATAtdm`) AS `Jumlah`, `mcdrnew`.`ATAtdm` FROM `mcdrnew` WHERE `mcdrnew`.`DCP` = 'D' AND `mcdrnew`.`ACtype` = '".$actype."' AND (DATE_FORMAT(`mcdrnew`.`DateEvent`,'%Y-%m') BETWEEN '".$timeawal."' AND '".$timeakhir."') GROUP BY `mcdrnew`.`ATAtdm`";
	$resultFH = mysql_query($qryFH);
	//die($qryFH);
	while ($hasilFH = mysql_fetch_array($resultFH))
	{
		$hour[$hasilFH["ATAtdm"]] = $hasilFH["Jumlah"];
	}
	//$ATA = array_count_values($hour);
	return $hour;
}
//echo (alert("2006-11","2007-10","B737-400"));

function alertdelay($timeawal,$timeakhir,$actype)
{
	$alert = "SELECT DATE_FORMAT(`mcdrnew`.`DateEvent`,'%Y-%m') AS `periode`, Count(`mcdrnew`.`ATAtdm`) AS `Jumlah`, `mcdrnew`.`ATAtdm` FROM `mcdrnew` WHERE `mcdrnew`.`DCP` = 'D' AND `mcdrnew`.`ACtype` = '".$actype."' AND (DATE_FORMAT(`mcdrnew`.`DateEvent`,'%Y-%m') BETWEEN '".$timeawal."' AND '".$timeakhir."') GROUP BY DATE_FORMAT(`mcdrnew`.`DateEvent`,'%Y-%m'), `mcdrnew`.`ATAtdm`";
	$resultalert = mysql_query($alert);
	//die($alert);
	while ($hasilalert = mysql_fetch_array($resultalert))
	{
		//$ATA[] = $hasilalert["subjectATA"];
		$ATAalert[$hasilalert["ATAtdm"]][$hasilalert["periode"]] = $hasilalert["Jumlah"];
		//$periode[] = $hasilalert["periode"];
		//$jumlahATA[] = $hasilalert["JumlahATA"];

	}

	$qryFH = "SELECT DATE_FORMAT(`blockOnDate`,'%Y-%m') AS `periode` Count(`aircraftflightlog`.`landing`) AS `Jumlah` FROM `aircraftflightlog` Inner Join `tbl_masterac` ON `aircraftflightlog`.`acReg` = `tbl_masterac`.`ACReg` WHERE (DATE_FORMAT(`blockOnDate`,'%Y-%m') BETWEEN '".$timeawal."' AND '".$timeakhir."') AND `tbl_masterac`.`ACType` = '".$actype."' GROUP BY DATE_FORMAT(`blockOnDate`,'%Y-%m')";
	$resultFH = mysql_query($qryFH);
	//die($qryFH);
	while ($hasilFH = mysql_fetch_array($resultFH))
	{
		$hour[$hasilFH["periode"]] = $hasilFH["Jumlah"]/1;
	}
	//die(print_r($hour));
	foreach ($ATAalert as $key => $value){
		foreach ($value as $k => $v){
			$rate[$k] = $v/$hour[$k] * 100;//itung rate untuk setiap bulan ATA
		}
		$mean = array_sum($rate)/12;//rata2 
		$sigma_temp = 0;
		foreach ($rate as $keys => $values) {
			$sigma_temp += ($values - $mean) * ($values - $mean);
		}
		$standard_deviation = sqrt($sigma_temp / 12);
		$alertlevel[$key] = $mean + (2.5 * $standard_deviation);
	}

	return $alertlevel;
}

function delayduration($timeawal,$timeakhir,$actype)
{
	$qryFH = "SELECT DATE_FORMAT(mcdrnew.DateEvent,'%Y-%m') AS `periode`, Sum(`mcdrnew`.`HoursTek`) AS `Jam`, Sum(`mcdrnew`.`MinTek`) AS `Menit` FROM `mcdrnew` WHERE `mcdrnew`.`DCP` = 'D' AND `mcdrnew`.`ACtype` = '".$actype."' AND (DATE_FORMAT(`mcdrnew`.`DateEvent`,'%Y-%m') BETWEEN '".$timeawal."' AND '".$timeakhir."') GROUP BY DATE_FORMAT(`mcdrnew`.`DateEvent`,'%Y-%m')";
	$resultFH = mysql_query($qryFH);
	//die($qryFH);
	while ($hasilFH = mysql_fetch_array($resultFH))
	{
		$hour[$hasilFH["periode"]] = ($hasilFH["Jam"]*60) + $hasilFH["Menit"];
	}
	//$ATA = array_count_values($hour);
	return $hour;
}

function querycancel($timeawal,$timeakhir,$actype)
{
	$qrycancel = "SELECT DATE_FORMAT(`mcdrnew`.`DateEvent`,'%Y-%m') AS `periode`, `mcdrnew`.`ACtype`, Count(`mcdrnew`.`DCP`) AS `Jumlah` FROM `mcdrnew` WHERE (DATE_FORMAT(`mcdrnew`.`DateEvent`,'%Y-%m') BETWEEN '".$timeawal."' AND '".$timeakhir."') AND `mcdrnew`.`DCP`= 'C' AND `mcdrnew`.`ACtype` = '".$actype."' Group by DATE_FORMAT(`mcdrnew`.`DateEvent`,'%Y-%m') ORDER BY DATE_FORMAT(`mcdrnew`.`DateEvent`,'%Y-%m') DESC";
	$resultcancel = mysql_query($qrycancel);
	//die($qrycancel);
	while ($hasilcancel = mysql_fetch_array($resultcancel))
	{
		$cancel[$hasilcancel["periode"]] = $hasilcancel["Jumlah"];
	}
	$cancel = isset($cancel) ? $cancel : "";
	return $cancel;
}

function bulan($time){
	if (substr($time,-2,2) == "01"){
		$bulan = "Jan";
	} else if (substr($time,-2,2) == "02"){
		$bulan = "Feb";
	} else if (substr($time,-2,2) == "03"){
		$bulan = "Mar";
	} else if (substr($time,-2,2) == "04"){
		$bulan = "Apr";
	} else if (substr($time,-2,2) == "05"){
		$bulan = "May";
	} else if (substr($time,-2,2) == "06"){
		$bulan = "Jun";
	} else if (substr($time,-2,2) == "07"){
		$bulan = "Jul";
	} else if (substr($time,-2,2) == "08"){
		$bulan = "Aug";
	} else if (substr($time,-2,2) == "09"){
		$bulan = "Sep";
	} else if (substr($time,-2,2) == "10"){
		$bulan = "Oct";
	} else if (substr($time,-2,2) == "11"){
		$bulan = "Nov";
	} else if (substr($time,-2,2) == "12"){
		$bulan = "Dec";
	}
	return $bulan;
}

function jumlahbulan($time){
	if (substr($time,-2,2) == "01"){
		$bulan = 31;
	} else if (substr($time,-2,2) == "02"){
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

function incident($time,$actype)
{
	$qryFH = "SELECT Count(`relsummary`.`ACType`) AS `Jumlah`, DATE_FORMAT(`relsummary`.`DateIssued`,'%Y-%m') AS `periode` FROM `relsummary` WHERE DATE_FORMAT(relsummary.DateIssued,'%y-%m') <= '".$time."' AND `relsummary`.`ACType` = '".$actype."' AND `relsummary`.`Reference` = 'SDR' GROUP BY DATE_FORMAT(`relsummary`.`DateIssued`,'%Y-%m') ORDER BY DATE_FORMAT(`relsummary`.`DateIssued`,'%Y-%m') DESC LIMIT 12";
	$resultFH = mysql_query($qryFH);
	//die($qryFH);
	while ($hasilFH = mysql_fetch_array($resultFH))
	{
		$hour[$hasilFH["periode"]] = $hasilFH["Jumlah"]/1;
	}
	return $hour;
}

?>