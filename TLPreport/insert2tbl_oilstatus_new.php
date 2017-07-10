<?php


function connectmysql() {
	$dbname = "mcdr";
	$user = "ter1";
	$password = "reliability";
	$host = "gmfaa-te-01";
	$dbconnection=mysql_connect($host,$user,$password) or die("Gagal melakukan koneksi ke database");
	mysql_select_db($dbname);
	return $dbconnection;
}

//limit normal oil consump
$limitA330 = 0.21;
$limitB747 = 0.25;
$limitB777 = 0.36;
$limitA320v = 0.3;
$limitA320c = 0.6;
$limitB737 = 0.4;

$masuk = connectmysql();

$qrybaru = "SELECT Max(`tbl_oilstatus`.`idxOilConsump`) AS `Max` FROM `tbl_oilstatus`";
$hasilid = mysql_query($qrybaru);
while ($hasillagi = mysql_fetch_array($hasilid)){
	$hasilbaru = $hasillagi["Max"];
}
mysql_free_result($hasilid);

$i = 0;
$hasilbaru = 130387;
//$hasilbaru = $hasilbaru + 1;

	$qrydateoc = "SELECT 
	Max(`tbl_oildata_swift`.`dateAML`) AS `MaxDate`,
	Min(`tbl_oildata_swift`.`dateAML`) AS `MinDate`
	FROM tbl_oildata_swift
	WHERE 
	`tbl_oildata_swift`.`idxOilConsump` > '$hasilbaru'
	";

	$resultdateoc = mysql_query($qrydateoc) or die("gagal date-oil consump");
	if (mysql_num_rows($resultdateoc) == 0){
		die("No New Data");
	}
	
	while ($hasildateoc = mysql_fetch_array($resultdateoc))
	{
		$dateoc_awal = $hasildateoc["MinDate"];
		$dateoc_akhir = $hasildateoc["MaxDate"];
	}
	//print_r($dateoc_awal);
	//mysql_free_result($hasildateoc);
		
	$new = explode("-",$dateoc_awal);
	$dateoc_awal = date("Y-m-d",mktime(0, 0, 0, $new[1], $new[2]-14, $new[0]));
	
	$qryoc = "SELECT 
	
	SEC_TO_TIME(SUM(TIME_TO_SEC(v_dailyfh.FH))) AS `FH`,
	Sum(`tbl_oildata_swift`.`oilRef1`) AS `oil1`, Sum(`tbl_oildata_swift`.`oilRef2`) AS `oil2`,
	tbl_oildata_swift.acReg AS acReg,
	tbl_oildata_swift.dateAML AS dateAML,
	tbl_masterac.ACType
	
	FROM (v_dailyfh JOIN tbl_oildata_swift ON (((v_dailyfh.acReg = tbl_oildata_swift.acReg) AND (v_dailyfh.periode = tbl_oildata_swift.dateAML)))) INNER JOIN tbl_masterac ON tbl_oildata_swift.acReg = tbl_masterac.ACReg
	
	WHERE 
	
	(tbl_oildata_swift.dateAML Between '$dateoc_awal' AND '$dateoc_akhir')
	GROUP BY `tbl_oildata_swift`.`acReg`, `tbl_oildata_swift`.`dateAML`
	
	";
	//die(print_r($qryoc));
	$resultoc = mysql_query($qryoc) or die("gagal oil consump");
	
	while ($hasiloc = mysql_fetch_array($resultoc))
	{
		$oilevent[] = $hasiloc["idxOilConsump"];
		$dateaml[$hasiloc["idxOilConsump"]] = $hasiloc["dateAML"];
		$acreg[$hasiloc["idxOilConsump"]] = $hasiloc["acReg"];
		$actype[$hasiloc["idxOilConsump"]] = $hasiloc["ACType"];
		
		$oil1[$dateaml[$hasiloc["idxOilConsump"]]] = $hasiloc["oil1"];
		$oil2[$dateaml[$hasiloc["idxOilConsump"]]] = $hasiloc["oil2"];
		$hour[$dateaml[$hasiloc["idxOilConsump"]]] = $hasiloc["FH"];
		
		/*$oilevent[] = $hasiloc["idxOilConsump"];
		$dateaml[$hasiloc["idxOilConsump"]] = $hasiloc["dateAML"];
		$acreg[$hasiloc["idxOilConsump"]] = $hasiloc["acReg"];
		$actype[$hasiloc["idxOilConsump"]] = $hasiloc["ACType"];
		$oil1[$hasiloc["idxOilConsump"]] = $hasiloc["oil1"];
		$oil2[$hasiloc["idxOilConsump"]] = $hasiloc["oil2"];
		$hour[$hasiloc["idxOilConsump"]] = $hasiloc["FH"];*/
	}
	die(print_r($oilevent));
	//die(print_r($hasiloc));
	
	$newkey = array_keys($hour);
	$output = array_slice($newkey,13);//mengambil data sesuai dengan pilihan user (bukan dari $stardate-14

	foreach ($output as $key => $value){
		$array[$value] = array_slice($hour,$key,14);//perngambilan FH untuk masing2 14 hari
	}
	
	foreach ($hour as $key => $value){
		$itung[$key] = explode(":",$value);//memecah jam:menit:detik dari hasil perhitungan database
	}
		
	foreach ($itung as $k => $v){
		$menit = 0;$total = 0;
		$menit = $v[0] * 60;
		$total = $menit + $v[1];//jam dan menit diubah kedalam format menit
		$newmenit[$k] = $total;
		$newjam[$k] = round($newmenit[$k]/60,2);//diubah dalam bentuk jam dengan desimal
	}
	unset($hour);
	
	
		foreach ($array as $key => $value){
			foreach ($value as $k => $v){
				$newmenitlagi[$key][$k] = $newmenit[$k];
				$newoil1[$key][$k] = isset($oil1[$k]) ? $oil1[$k] : 0;
				$newoil2[$key][$k] = isset($oil2[$k]) ? $oil2[$k] : 0;
				$newoil3[$key][$k] = isset($oil3[$k]) ? $oil3[$k] : 0;
				$newoil4[$key][$k] = isset($oil4[$k]) ? $oil4[$k] : 0;
			}
			$jamlagi[$key] = round(array_sum($newmenitlagi[$key])/60,2);
			$baruoil1[$key] = array_sum($newoil1[$key]);//menjumlahkan oil1 selama 14 hari terakhir
			$baruoil2[$key] = array_sum($newoil2[$key]);
			$baruoil3[$key] = array_sum($newoil3[$key]);
			$baruoil4[$key] = array_sum($newoil4[$key]);
		}
		foreach ($output as $key => $value){
			$hour[$value] = $jamlagi[$value];//merubah array hour
		}
		//die(print_r($hour));
		unset($oil1);unset($oil2);unset($oil3);unset($oil4);
		foreach ($baruoil1 as $key => $value){
			$oil1[$key] = $value;//merubah array oil1
			$oil2[$key] = $baruoil2[$key];
			$oil3[$key] = $baruoil3[$key];
			$oil4[$key] = $baruoil4[$key];
		}
	
	foreach ($hour as $key => $value){
		$oil1[$key] = isset($oil1[$key]) ? $oil1[$key] : 0;
		$oil2[$key] = isset($oil2[$key]) ? $oil2[$key] : 0;
		$oil3[$key] = isset($oil3[$key]) ? $oil3[$key] : 0;
		$oil4[$key] = isset($oil4[$key]) ? $oil4[$key] : 0;
		
		$rate1[$key] = ($value <> 0) ? (($oil1[$key])/($value/1)) : 0;
		$rate2[$key] = ($value <> 0) ? (($oil2[$key])/($value/1)) : 0;
		$rate3[$key] = ($value <> 0) ? (($oil3[$key])/($value/1)) : 0;
		$rate4[$key] = ($value <> 0) ? (($oil4[$key])/($value/1)) : 0;
		
		$status[$key] = "-";
		if(($rate1[$key] > 0) OR ($rate2[$key] > 0) OR ($rate3[$key] > 0) OR ($rate4[$key] > 0)){
			$status[$key] = "Normal";
		}
		
		$alert = 0;
		if(substr($actype[$key],0,4) == "A330"){
			if ($rate1[$key] > $limitA330){$alert = $alert + 1;}
			if ($rate2[$key] > $limitA330){$alert = $alert + 1;}
			if ($alert > 0){$status[$key] = "High (".$alert.")";}
		} else if(substr($actype[$key],0,4) == "B747"){
			if ($rate1[$key] > $limitB747){$alert = $alert + 1;}
			if ($rate2[$key] > $limitB747){$alert = $alert + 1;}
			if ($rate3[$key] > $limitB747){$alert = $alert + 1;}
			if ($rate4[$key] > $limitB747){$alert = $alert + 1;}
			if ($alert > 0){$status[$key] = "High (".$alert.")";}
		} else if(substr($actype[$key],0,4) == "B777"){
			if ($rate1[$key] > $limitB777){$alert = $alert + 1;}
			if ($rate2[$key] > $limitB777){$alert = $alert + 1;}
			if ($alert > 0){$status[$key] = "High (".$alert.")";}
		} else if(substr($actype[$key],0,4) == "A320"){
			if(($acreg[$key] == "PK-GLA") OR ($acreg[$key] == "PK-GLC") OR ($acreg[$key] == "PK-GLD") OR ($acreg[$key] == "PK-GLE") OR ($acreg[$key] == "PK-GLF") OR ($acreg[$key] == "PK-GLJ")){
				if ($rate1[$key] > $limitA320v){$alert = $alert + 1;}
				if ($rate2[$key] > $limitA320v){$alert = $alert + 1;}
				if ($alert > 0){$status[$key] = "High (".$alert.")";}
			} else {
				if ($rate1[$key] > $limitA320c){$alert = $alert + 1;}
				if ($rate2[$key] > $limitA320c){$alert = $alert + 1;}
				if ($alert > 0){$status[$key] = "High (".$alert.")";}
			}
		} else {
			if ($rate1[$key] > $limitB737){$alert = $alert + 1;}
			if ($rate2[$key] > $limitB737){$alert = $alert + 1;}
			if ($alert > 0){$status[$key] = "High (".$alert.")";}
		}
		
	}

$qryinsert = "INSERT INTO tbl_oilstatus (acreg, actype, date, status, idxOilConsump) VALUES ";

$insertvalue = "";
foreach ($oilevent as $key => $value){
	
	if($insertvalue <> "") {
		$qryinsert .= ",";
		}
	$qryinsert .= "('$acreg[$value]',";
	$qryinsert .= "'$actype[$value]',";
	$qryinsert .= "'$dateaml[$value]',";
	$qryinsert .= "'$status[$dateaml]',";
	$qryinsert .= "'$value')";

	$insertvalue = "ts";
}
mysql_query($qryinsert);
mysql_close($masuk);
die(print_r($qryinsert));
//mssql_close($conn);


die();	
	
?>

