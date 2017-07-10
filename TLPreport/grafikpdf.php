<?php
require('fpdf/fpdf.php');
include 'function.php';

function targetdispatch($type){
	if ($type == "A330-300"){
		$target = 98.12;
	} else if ($type == "B737-300"){
		$target = 99.46;
	} else if ($type == "B737-400"){
		$target = 99.25;
	} else if ($type == "B737-500"){
		$target = 99.54;
	} else if ($type == "B737-800"){
		$target = 99.25;
	} else if ($type == "B747-400"){
		$target = 98.50;
	} else if ($type == "B737-CL"){
		$target = 99.46;
	}
	return $target;
}

class PDF extends FPDF
{


//Simple table
function BasicTable($header,$actype,$periode)
{
    //Header
    //foreach($header as $col)
    //    $this->Cell(40,17,$col,10);
		$this->SetY(10);$this->SetX(50);
	    $this->Cell(100,7,$header,'LRT',0,'C');
		$this->Ln();
		//$this->Cell(275,7,(($actype == "A330-300") ? "AIRBUS" : "BOEING")." ".$actype,'LRB',0,'C');
		//$this->Ln();
		//$this->Cell(68,7,'','LB',0,'C');
		//$this->SetFont('Arial','B',8);
		$this->SetX(50);
		$judul = (substr($periode,5,2) == 12) ? substr($periode,0,4) : (substr($periode,0,4)-1)." - ".(substr($periode,0,4));
		$this->Cell(100,7,$judul,'LRB',0,'C');
		$this->Ln();
    //Data
    /*foreach($data as $row)
    {
        foreach($row as $col)
            $this->Cell(40,6,$col,1);
        $this->Ln();
    }*/
}

}
  $periode = isset($_REQUEST["periode"]) ? substr($_REQUEST["periode"],0,7) : "";
  $actype = isset($_REQUEST["actype"]) ? $_REQUEST["actype"] : "";

	$TE = connectimesysTE();
	$FH = queryFH12($periode,$actype,12);
	$bulan = array_reverse(array_keys($FH));
	$FHrev = queryFH12rev($periode,$actype);
	$FCrev = queryFC12rev($periode,$actype);
	$FH24 = queryFH12($periode,$actype,24);

	$awallastyear = (substr($periode,0,4) - 1)."-01";
	$akhirlastyear = (substr($periode,0,4) - 1)."-12";
	$ATApireplastyear = ATA($awallastyear,$akhirlastyear,$actype);//die(print_r($ATApireplastyear));
	foreach ($ATApireplastyear as $k => $v){
		$pilotreportratelast[] = round(array_sum($v)/$FH24[$k] * 1000,0);
		$jumlahpirep[$k] = array_sum($v);
	}
	$pilotreportratelast = array_reverse($pilotreportratelast);
	//die(print_r($pilotreportratelast));
	$ATApirep = ATA((substr($periode,0,4))."-01",$periode,$actype);//die(print_r($ATApirep));
	foreach ($ATApirep as $k => $v){
		$pirepcurrentrate[] = round(array_sum($v)/$FH24[$k] * 1000,2);
		$axispirep[] = round(array_sum($v),0);
	}
	$axispirep = array_reverse($axispirep);
	array_push($axispirep,"","","","","","","","","","","","");
	//die(print_r($axispirep));
	$pirepcurrentrate = array_reverse($pirepcurrentrate);
	//die(print_r($pirepcurrentrate));

	$delay = ATAdelay($bulan[0],$bulan[11],$actype);//die(print_r($delay));
	foreach($delay as $k => $v){
		foreach($v as $key => $value){
			$ATA[$key] = $value;
		}
		$jumlah = array_sum($v);
		$techdelay[$k] = $jumlah;
	}
	//die(print_r($techdelay));
	
	$cancel = querycancel($bulan[0],$bulan[11],$actype);	
	
	$qryincident = "SELECT Count(`tbl_sdr`.`ACTYPE`) AS `jumlah`, DATE_FORMAT(`tbl_sdr`.`DateOccur`,'%Y-%m') AS `bulan` FROM `tbl_sdr` WHERE `tbl_sdr`.`ACTYPE` = '".$actype."' AND (DATE_FORMAT(`tbl_sdr`.`DateOccur`,'%Y-%m') BETWEEN '".$bulan[0]."' AND '".$bulan[11]."') GROUP BY DATE_FORMAT(`tbl_sdr`.`DateOccur`,'%Y-%m')";
	$resultincident = mysql_query($qryincident);
	//die($qryincident);
	while ($hasilincident = mysql_fetch_array($resultincident))
	{
		$incident[$hasilincident["bulan"]] = $hasilincident["jumlah"];
	}

	$qryrtb = "SELECT Count(`tbl_ifsd`.`ACTYPE`) AS `jumlah`, DATE_FORMAT(`tbl_ifsd`.`DateOccur`,'%Y-%m') AS `bulan`  FROM `tbl_ifsd`  WHERE `tbl_ifsd`.`ACTYPE` = '".$actype."' AND `tbl_ifsd`.`rtb` = 'RTB' AND (DATE_FORMAT(`tbl_ifsd`.`DateOccur`,'%Y-%m') BETWEEN '".$bulan[0]."' AND '".$bulan[11]."') GROUP BY DATE_FORMAT(`tbl_ifsd`.`DateOccur`,'%Y-%m')";
	$resultrtb = mysql_query($qryrtb);
	//die($qryrtb);
	while ($hasilrtb = mysql_fetch_array($resultrtb))
	{
		$rtb[$hasilrtb["bulan"]] = $hasilrtb["jumlah"];
	}
	//die(print_r($bulan));	
	foreach ($bulan as $k => $v){
		$incident[$v] = isset($incident[$v]) ? $incident[$v] : 0;
		$incidentrate[] = (isset($incident[$v]) && ($FH[$v]) != 0) ? round($incident[$v]/$FH[$v]*1000,3) : 0;
		$rtbrate[] = isset($rtb[$v]) ? round($rtb[$v]/$FH[$v]*1000,3) : 0;
	//	$incidentlastyear[$v] = isset($incidentlastyear[$v]) ? $incidentlastyear[$v] : 0;
	//	$avgduration[$v] = isset($delaydurationmenit[$v]) ? round($delaydurationmenit[$v] / $techdelay[$v],0) : 0;
	
		$cancel[$v] = isset($cancel[$v]) ? $cancel[$v] : 0;
		$dispathcrel[] = (isset($FCrev[$v]) && isset($techdelay[$v])) ? round(($FCrev[$v] - $techdelay[$v] - $cancel[$v])/$FCrev[$v] * 100,2) : 100;
		$dispathcrel2[] = targetdispatch($actype);
		$xaxis[] = bulan($v);
	}
	$juduldispatch = (substr($periode,5,2) == 12) ? "Dispatch ".substr($periode,0,4) : "Dispatch ".(substr($periode,0,4)-1)." - ".(substr($periode,0,4));
	//die(print_r(substr($periode,5,2)));
	$jumlahincident = array_sum($incident);
	//$jumlahincidentlastyear = array_sum($incidentlastyear);

	//buat halaman
	if ($actype == "A330-200"){
		$page = "A";
	} else if ($actype == "A330-300"){
		$page = "B";
	} else if ($actype == "B737-300"){
		$page = "C";
	} else if ($actype == "B737-400"){
		$page = "D";
	} else if ($actype == "B737-500"){
		$page = "E";
	} else if ($actype == "B747-400"){
		$page = "F";
	} else if ($actype == "B737-800"){
		$page = "G";
	} else {
		$page = "H";
	}

$pdf=new PDF('P','mm','A4');
//Column titles
$header=$actype.' Reliability Graph';
//Data loading

//$data=$pdf->LoadData('countries.txt');
$pdf->SetFont('Arial','B',12);
$pdf->AddPage();
$pdf->BasicTable($header,$actype,$periode);
include('DRgrafik.php');
$pdf->Image($fileName,30,40);
//include('Incidentgrafik.php');
$pdf->Image($fileName2,30,200);

$pdf->Image($fileName3,30,120);
$pdf->SetFont('Arial','B',9);
$pdf->Text(180,280,'Page : '.$page.'5');

$pdf->Output();
?> 