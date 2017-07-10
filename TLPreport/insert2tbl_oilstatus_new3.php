<?php


function connectmysql() {
	$dbname = "mcdr";
	$user = "ter1";
	$password = "reliability";
	$host = "gmfaa-te-01";
	$dbconnection=mysql_connect($host,$user,$password) or die (mysql_error());
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

//$_POST['dateAkhir'] = "01-09-2014";

$tempU = explode("-",$_REQUEST['dateAkhir']);
$tglAkhir = $tempU[2]."-".$tempU[1]."-".$tempU[0];

$masuk = connectmysql();

$new = explode("-",$tglAkhir);
$newtglAkhir = date("Y-m-d",mktime(0, 0, 0, $new[1], $new[2]-14, $new[0]));

set_time_limit (300);

//$actypeoc = ($cmbactype != "") ? " AND tbl_masterac.ACTYPE = '$cmbactype'" : "";

$qryoc = "SELECT 

SEC_TO_TIME(SUM(TIME_TO_SEC(v_dailyfh.FH))) AS `FH`,
Sum(`tbl_oildata_swift`.`oilRef1`) AS `oil1`, Sum(`tbl_oildata_swift`.`oilRef2`) AS `oil2`,
tbl_oildata_swift.idxOilConsump AS idoil,
tbl_oildata_swift.acReg AS acReg,
tbl_masterac.ACType

FROM (v_dailyfh JOIN tbl_oildata_swift ON (((v_dailyfh.acReg = tbl_oildata_swift.acReg) AND (v_dailyfh.periode = tbl_oildata_swift.dateAML)))) INNER JOIN tbl_masterac ON tbl_oildata_swift.acReg = tbl_masterac.ACReg

WHERE 

(tbl_oildata_swift.dateAML Between '$newtglAkhir' AND '$tglAkhir') 

GROUP BY tbl_oildata_swift.acReg";

//die(print_r($qryoc));
$resultoc = mysql_query($qryoc) or die("gagal oil consump");

	while ($hasiloc = mysql_fetch_array($resultoc))
	{
		$acreg[] = $hasiloc["acReg"];
		$actype[$hasiloc["acReg"]] = $hasiloc["ACType"];
		$oil1[$hasiloc["acReg"]] = $hasiloc["oil1"];
		$oil2[$hasiloc["acReg"]] = $hasiloc["oil2"];
		$oil3[$hasiloc["acReg"]] = $hasiloc["oil3"];
		$oil4[$hasiloc["acReg"]] = $hasiloc["oil4"];
		$hour[$hasiloc["acReg"]] = $hasiloc["FH"];
		$idoil[$hasiloc["acReg"]] = $hasiloc["idoil"];
	}
	//die(print_r($hasiloc));	
	//die(print_r($idoil));	
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
	//unset($hour);
	
	foreach ($newjam as $key => $value){
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
foreach ($acreg as $key => $value){
	
	if($insertvalue <> "") {
		$qryinsert .= ",";
		}
	$qryinsert .= "('$value',";
	$qryinsert .= "'$actype[$value]',";
	$qryinsert .= "'$tglAkhir',";
	$qryinsert .= "'$status[$value]',";
	$qryinsert .= "'$idoil[$value]')";

	$insertvalue = "ts";
}
mysql_query($qryinsert);
mysql_close($masuk);
die(print_r($qryinsert));
//mssql_close($conn);


die();	

	
?>

