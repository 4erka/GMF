<?php
require('fpdf/fpdf.php');
include 'function.php';

class PDF extends FPDF
{
	function JudulGrafik($header,$actype,$periode)
	{
		$this->SetY(10);$this->SetX(50);
	    $this->Cell(100,7,$header,'LRT',0,'C');
		$this->Ln();

		$this->SetX(50);
		$judul = (substr($periode,5,2) == 12) ? substr($periode,0,4) : (substr($periode,0,4)-1)." - ".(substr($periode,0,4));
		$this->Cell(100,7,$judul,'LRB',0,'C');
		$this->Ln();
  
	}
}
	
	$periode = isset($_REQUEST["periode"]) ? substr($_REQUEST["periode"],0,7) : "";
	$actype = isset($_REQUEST["actype"]) ? $_REQUEST["actype"] : "";
	$page = isset($_REQUEST["page"]) ? $_REQUEST["page"] : "";

	$TE = connectimesysTE();

	$FH = queryFH12($periode,$actype,12);
	$bulan = array_reverse(array_slice(array_slice(selectperiode(), array_search($periode,selectperiode())), 0, 12));
	$FCrev = queryFC12rev($periode,$actype);
	$FH24 = queryFH12($periode,$actype,24);
	$delay = ATAdelay($bulan[0],$bulan[11],$actype);//die(print_r($delay));
	if (is_array($delay)) {
		foreach($delay as $k => $v){
			foreach($v as $key => $value){
				$ATA[$key] = $value;
			}
			$jumlah = array_sum($v);
			$techdelay[$k] = $jumlah;
		}
	} else {
		$techdelay[0] = 0;
	}
	$juduldispatch = (substr($periode,5,2) == 12) ? "Dispatch ".substr($periode,0,4) : "Dispatch ".(substr($periode,0,4)-1)." - ".(substr($periode,0,4));
	$judulpirep = (substr($periode,5,2) == 12) ? "Pirep ".substr($periode,0,4) : "Pirep - ".(substr($periode,0,4));
	$judulpireppast = (substr($periode,5,2) == 12) ? (substr($periode,0,4)-1) : "Pirep - ".(substr($periode,0,4)-1);

	if ($actype == "B737-Classic") {
		$qryline = "`tbl_sdr`.`ACTYPE` IN ('B737-300','B737-400','B737-500','B737-CL')";
	} else if ($actype == "B737-Classic GA") {
		$qryline = "`tbl_sdr`.`ACTYPE` IN ('B737-300','B737-400','B737-500')";
	} else if ($actype == "A330") {
		$qryline = "`tbl_sdr`.`ACTYPE` IN ('A330-200','A330-300')";				
	} else if ($actype == "B737-800-E") {
		$qryline = "`tbl_sdr`.`Reg` Like 'PK-GE%'";
	} else if ($actype == "B737-800-M") {
		$qryline = "(`tbl_sdr`.`Reg` Like 'PK-GM%' or `tbl_sdr`.`Reg` Like 'PK-GF%')";
	} else {
		$qryline = "`tbl_sdr`.`ACTYPE` IN ('$actype')";
	}

	//$actypeall = ($actype == "B737-Classic GA") ? "B737-300','B737-400','B737-500" : $actype;
	$qryincident = "SELECT Count(`tbl_sdr`.`ACTYPE`) AS `jumlah`, DATE_FORMAT(`tbl_sdr`.`DateOccur`,'%Y-%m') AS `bulan` FROM `tbl_sdr` WHERE ".$qryline." AND (DATE_FORMAT(`tbl_sdr`.`DateOccur`,'%Y-%m') BETWEEN '".$bulan[0]."' AND '".$bulan[11]."') GROUP BY DATE_FORMAT(`tbl_sdr`.`DateOccur`,'%Y-%m')";
	$resultincident = mysql_query($qryincident);
	//die($qryincident);
	while ($hasilincident = mysql_fetch_array($resultincident))
	{
		$incident[$hasilincident["bulan"]] = $hasilincident["jumlah"];
	}

	$qryrtb = "SELECT Count(`tbl_ifsd`.`ACTYPE`) AS `jumlah`, DATE_FORMAT(`tbl_ifsd`.`DateOccur`,'%Y-%m') AS `bulan`  FROM `tbl_ifsd`  WHERE `tbl_ifsd`.`ACTYPE` IN ('".$actypeall."') AND `tbl_ifsd`.`rtb` = 'RTB' AND (DATE_FORMAT(`tbl_ifsd`.`DateOccur`,'%Y-%m') BETWEEN '".$bulan[0]."' AND '".$bulan[11]."') GROUP BY DATE_FORMAT(`tbl_ifsd`.`DateOccur`,'%Y-%m')";
	$resultrtb = mysql_query($qryrtb);
	//die($qryrtb);
	while ($hasilrtb = mysql_fetch_array($resultrtb))
	{
		$rtb[$hasilrtb["bulan"]] = $hasilrtb["jumlah"];
	}

	$ATApirepgraph = ATA(substr($periode,0,4)."-01",$periode,$actype);//die(print_r($ATApirepgraph));
	foreach ($ATApirepgraph as $k => $v){
		$pirepcurrentrate[substr($k,-2,2)-1] = round(array_sum($v)/$FH24[$k] * 1000,2);
		$axispirep[substr($k,-2,2)-1] = round(array_sum($v),0);
	}
	array_push($axispirep,"","","","","","","","","","","");
	//die(print_r($axispirep));
	$ATApireplastyear = ATA((substr($periode,0,4)-1)."-01",(substr($periode,0,4)-1)."-12",$actype);//print_r($ATApireplastyear);
	if (is_array($ATApireplastyear)){
	foreach ($ATApireplastyear as $k => $v){
		$pilotreportratelast[substr($k,-2,2)-1] = round(array_sum($v)/$FH24[$k] * 1000,2);
		$jumlahpirep[$k] = array_sum($v);
		//$kuncibaru[substr($k,-2,2)] = 
	}
	$pilotreportratelast = array_reverse($pilotreportratelast,true);
	} else {
		$pilotreportratelast[0] = 0;
	}
	for($i=0;$i<12;$i++){
		$pilotreportratelast[$i] = isset($pilotreportratelast[$i]) ? $pilotreportratelast[$i] : 0;
	}
	ksort($pilotreportratelast);

	foreach($bulan as $key => $v)
	{
		$xaxis[] = bulan($v);
		$dispathcrel[] = (isset($FCrev[$v]) && isset($techdelay[$v])) ? round(($FCrev[$v] - $techdelay[$v] - $cancel[$v])/$FCrev[$v] * 100,2) : 100;
		$dispathcrel2[] = targetdispatch($actype);
		$incidentrate[] = (isset($incident[$v]) && ($FH[$v]) != 0) ? round($incident[$v]/$FH[$v]*1000,3) : 0;
		$rtbrate[] = isset($rtb[$v]) ? round($rtb[$v]/$FH[$v]*1000,3) : 0;
	}

$pdf=new PDF('L','mm','A4');

$header=$actype.' Reliability Graph';

$pdf->SetFont('Arial','B',12);
$pdf->AddPage('P');
$pdf->JudulGrafik($header,$actype,$periode);
include('DRgrafik.php');
$pdf->Image($fileName,30,40);
//include('Incidentgrafik.php');
$pdf->Image($fileName2,30,200);

$pdf->Image($fileName3,30,120);
$pdf->SetFont('Arial','B',9);
$pdf->Text(180,280,'Page : '.$page);

$pdf->Output();
?>