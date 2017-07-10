<?php
require('fpdf/fpdf.php');
include 'function.php';

class PDF extends FPDF
{


//Simple table
function BasicTable($header,$actype,$periode)
{
    //Header
    //foreach($header as $col)
    //    $this->Cell(40,17,$col,10);
		$this->SetY(10);
	    $this->Cell(275,7,$header,'LRT',0,'C');
		$this->Ln();
		$this->Cell(275,7,(($actype == "A330-300") ? "AIRBUS" : "BOEING")." ".$actype,'LRB',0,'C');
		$this->Ln();
		$this->Cell(68,7,'','LB',0,'C');
		$this->SetFont('Arial','B',8);
		$this->Cell(207,7,(substr($periode,0,4) - 1)." - ".(substr($periode,0,4)),'LRB',0,'C');
		$this->Ln();
    //Data
    /*foreach($data as $row)
    {
        foreach($row as $col)
            $this->Cell(40,6,$col,1);
        $this->Ln();
    }*/
}
function bln($bulan,$periode){
	$this->SetFont('Arial','',8);
	$this->Cell(53,6,'','LBRT',0,'L',0);
	$this->Cell(15,6,(substr($periode,0,4) - 1),'LBR',0,'C',0);
	foreach ($bulan as $k => $v){
		$this->Cell(15,6,bulan($v),'TLRB',0,'C');
	}
	$this->Cell(27,6,'LAST 12 MTHS','LBR',0,'C');
	$this->Ln();
}
function fleet($bulan,$fleet,$fleetlastyear){
	$this->Cell(53,6,'A/C in Fleet','LBRT',0,'L',0);
	$this->Cell(15,6,round(array_sum($fleetlastyear)/12,0),'LBR',0,'C',0);
	foreach ($bulan as $k => $v){
		$this->Cell(15,6,$fleet[$v],'TLRB',0,'C');
	}
	$this->Cell(27,6,round(array_sum($fleet)/12,0),'LBR',0,'C');
	$this->Ln();
}
function avail($bulan,$available,$availablelastyear){
	$this->Cell(53,6,'A/C in Service','LBRT',0,'L',0);
	$this->Cell(15,6,round(array_sum($availablelastyear)/365,2),'LBR',0,'C',0);
	foreach ($bulan as $k => $v){
		$this->Cell(15,6,round($available[$v]/jumlahbulan($v),2),'TLRB',0,'C');
	}
	$this->Cell(27,6,round(array_sum($available)/365,2),'LBR',0,'C');
	$this->Ln();
}
function acinservice($bulan,$available,$availablelastyear){
	$this->Cell(53,6,'A/C Days In Service','LBRT',0,'L',0);
	$this->Cell(15,6,array_sum($availablelastyear),'LBR',0,'C',0);
	foreach ($bulan as $k => $value){
		$this->Cell(15,6,$available[$value],'TLRB',0,'C');
	}
	$this->Cell(27,6,array_sum($available),'LBR',0,'C');
	$this->Ln();
}
function fh($bulan,$FH,$FHlastyear){
	$this->Cell(53,6,'Flying Hours - Total','LBRT',0,'L',0);
	$this->Cell(15,6,array_sum($FHlastyear),'LBR',0,'C',0);
	foreach ($bulan as $k => $value){
		$this->Cell(15,6,$FH[$value],'TLRB',0,'C');
	}
	$this->Cell(27,6,array_sum($FH),'LBR',0,'C');
	$this->Ln();
}
function fhrev($bulan,$FHrev,$FHrevlastyear){
	$this->Cell(53,6,'   - Revenue','LBRT',0,'L',0);
	$this->Cell(15,6,array_sum($FHrevlastyear),'LBR',0,'C',0);
	foreach ($bulan as $k => $value){
		$this->Cell(15,6,$FHrev[$value],'TLRB',0,'C');
	}
	$this->Cell(27,6,array_sum($FHrev),'LBR',0,'C');
	$this->Ln();
}
function fc($bulan,$FC,$FClastyear){
	$this->Cell(53,6,'Take Off - Total','LBRT',0,'L',0);
	$this->Cell(15,6,array_sum($FClastyear),'LBR',0,'C',0);
	foreach ($bulan as $k => $value){
		$this->Cell(15,6,$FC[$value],'TLRB',0,'C');
	}
	$this->Cell(27,6,array_sum($FC),'LBR',0,'C');
	$this->Ln();
}
function fcrev($bulan,$FCrev,$FCrevlastyear){
	$this->Cell(53,6,'   - Revenue','LBRT',0,'L',0);
	$this->Cell(15,6,array_sum($FCrevlastyear),'LBR',0,'C',0);
	foreach ($bulan as $k => $value){
		$this->Cell(15,6,$FCrev[$value],'TLRB',0,'C');
	}
	$this->Cell(27,6,array_sum($FCrev),'LBR',0,'C');
	$this->Ln();
}
function fhperfc($bulan,$FH,$FHlastyear,$FC,$FClastyear,$text){
	$this->Cell(53,6,$text,'LBRT',0,'L',0);
	$this->Cell(15,6,((array_sum($FHlastyear) - (array_sum($FHlastyear) % array_sum($FClastyear)))/array_sum($FClastyear))." : ".(round(((array_sum($FHlastyear) % array_sum($FClastyear))/array_sum($FClastyear)*60),0)),'LBR',0,'C',0);
	foreach ($bulan as $k => $value){
		$this->Cell(15,6,(($FH[$value] - ($FH[$value] % $FC[$value]))/$FC[$value])." : ".round((($FH[$value] % $FC[$value])/$FC[$value]*60),0),'TLRB',0,'C');
	}
	$this->Cell(27,6,(array_sum($FH) - (array_sum($FH) % array_sum($FC)))/array_sum($FC)." : ".round(((array_sum($FH) % array_sum($FC))/array_sum($FC)*60),0),'LBR',0,'C');
	$this->Ln();
}
function dailyfh($bulan,$FHlastyear,$availablelastyear,$FH,$available,$text){
	$this->Cell(53,6,$text,'LBRT',0,'L',0);
	$this->Cell(15,6,((array_sum($FHlastyear)-(array_sum($FHlastyear)%array_sum($availablelastyear)))/array_sum($availablelastyear))." : ".round(((array_sum($FHlastyear)%array_sum($availablelastyear))/array_sum($availablelastyear)*60),0),'LBR',0,'C',0);
	foreach ($bulan as $k => $value){
		$this->Cell(15,6,(($FH[$value]-($FH[$value]%$available[$value]))/$available[$value])." : ".round((($FH[$value]%$available[$value])/$available[$value]*60),0),'TLRB',0,'C');
	}
	$this->Cell(27,6,((array_sum($FH)-(array_sum($FH)%array_sum($available)))/array_sum($available))." : ".round(((array_sum($FH)%array_sum($available))/array_sum($available)*60),0),'LBR',0,'C');
	$this->Ln();
}
function dailyfc($bulan,$FClastyear,$availablelastyear,$FC,$available,$text){
	$this->Cell(53,6,$text,'LBRT',0,'L',0);
	$this->Cell(15,6,round(array_sum($FClastyear)/array_sum($availablelastyear),2),'LBR',0,'C',0);
	foreach ($bulan as $k => $value){
		$this->Cell(15,6,round($FC[$value]/$available[$value],2),'TLRB',0,'C');
	}
	$this->Cell(27,6,round(array_sum($FC)/array_sum($available),2),'LBR',0,'C');
	$this->Ln();
}
function techdelaytot($bulan,$techdelaylastyear,$techdelay){
	$this->Cell(53,6,'Technical Delay - Total','LBRT',0,'L',0);
	$this->Cell(15,6,array_sum($techdelaylastyear),'LBR',0,'C',0);
	foreach ($bulan as $k => $value){

		$this->Cell(15,6,isset($techdelay[$value]) ? $techdelay[$value] : 0,'TLRB',0,'C');
	}
	$this->Cell(27,6,array_sum($techdelay),'LBR',0,'C');
	$this->Ln();
}
function techdelaydur($bulan,$delaydurationmenitlastyear,$delayduration,$delaydurationmenit){
	$this->Cell(53,6,'    - Total Duration','LBRT',0,'L',0);
	$this->Cell(15,6,round(array_sum($delaydurationmenitlastyear)/60,0),'LBR',0,'C',0);
	foreach ($bulan as $k => $value){
		$this->Cell(15,6,isset($delayduration[$value]) ? $delayduration[$value] : 0,'TLRB',0,'C');
	}
	$this->Cell(27,6,round(array_sum($delaydurationmenit)/60,0)." : ".(array_sum($delaydurationmenit) % 60),'LBR',0,'C');
	$this->Ln();
}
function avgdur($bulan,$delaydurationmenitlastyear,$techdelaylastyear,$avgduration,$delaydurationmenit,$techdelay){
	$this->Cell(53,6,'    - Average Duration','LBRT',0,'L',0);
	$this->Cell(15,6,round(array_sum($delaydurationmenitlastyear)/array_sum($techdelaylastyear)/60,0)." : ".((array_sum($delaydurationmenitlastyear)/array_sum($techdelaylastyear)) % 60),'LBR',0,'C',0);
	foreach ($bulan as $k => $value){
		$this->Cell(15,6,$avgduration[$value],'TLRB',0,'C');
	}
	$this->Cell(27,6,round(array_sum($delaydurationmenit)/array_sum($techdelay)/60,0)." : ".((array_sum($delaydurationmenit)/array_sum($techdelay)) % 60)." : ".(array_sum($delaydurationmenit) % 60),'LBR',0,'C');
	$this->Ln();
}
function delayrate($bulan,$delayratelastyear,$delayrate){
	$this->Cell(53,6,'    - Rate / 100 Take Off','LBRT',0,'L',0);
	$this->Cell(15,6,round($delayratelastyear,2),'LBR',0,'C',0);
	foreach ($bulan as $k => $value){
		$this->Cell(15,6,round($delayrate[$value],2),'TLRB',0,'C');
	}
	$this->Cell(27,6,round(array_sum($delayrate),2),'LBR',0,'C');
	$this->Ln();
}
function incident($bulan,$jumlahincidentlastyear,$incident){
	$this->Cell(53,6,'Technical Incident - Total','LBRT',0,'L',0);
	$this->Cell(15,6,$jumlahincidentlastyear,'LBR',0,'C',0);
	foreach ($bulan as $k => $value){
		$this->Cell(15,6,$incident[$value],'TLRB',0,'C');
	}
	$this->Cell(27,6,array_sum($incident),'LBR',0,'C');
	$this->Ln();
}
function incidentrate($bulan,$jumlahincidentlastyear,$incident,$FHlastyear,$FH){
	$this->Cell(53,6,'    - Rate / 1000 FH','LBRT',0,'L',0);
	$this->Cell(15,6,round(($jumlahincidentlastyear)/array_sum($FHlastyear)*1000,2),'LBR',0,'C',0);
	foreach ($bulan as $k => $value){
		$this->Cell(15,6,round($incident[$value]/$FH[$value]*1000,3),'TLRB',0,'C');
	}
	$this->Cell(27,6,round(array_sum($incident)/array_sum($FH)*1000,3),'LBR',0,'C');
	$this->Ln();
}
function cancel($bulan,$cancellastyear,$cancel){
	$this->Cell(53,6,'Technical Cancellation','LBRT',0,'L',0);
	$this->Cell(15,6,$cancellastyear,'LBR',0,'C',0);
	foreach ($bulan as $k => $value){
		$this->Cell(15,6,$cancel[$value],'TLRB',0,'C');
	}
	$this->Cell(27,6,array_sum($cancel),'LBR',0,'C');
	$this->Ln();
}
function dispatch($bulan,$FCrevlastyear,$techdelaylastyear,$cancellastyear,$FCrev,$techdelay,$cancel){
	$this->Cell(53,6,'Dispatch Reliability (%)','LBRT',0,'L',0);
	$this->Cell(15,6,round((array_sum($FCrevlastyear) - array_sum($techdelaylastyear) - $cancellastyear)/array_sum($FCrevlastyear) * 100,2),'LBR',0,'C',0);
	foreach ($bulan as $k => $value){
		$this->Cell(15,6,isset($techdelay[$value]) ? round(($FCrev[$value] - $techdelay[$value] - $cancel[$value])/$FCrev[$value] * 100,2) : 100,'TLRB',0,'C');
	}
	$this->Cell(27,6,round((array_sum($FCrev) - array_sum($techdelay) - array_sum($cancel))/array_sum($FCrev) * 100,2),'LBR',0,'C');
	$this->Ln();
}
}
  $periode = isset($_REQUEST["periode"]) ? $_REQUEST["periode"] : "";
  $actype = isset($_REQUEST["actype"]) ? $_REQUEST["actype"] : "";

	$TE = connectimesysTE();
	$FH = queryFH12($periode,$actype,12);
	$bulan = array_reverse(array_keys($FH));
	$FHrev = queryFH12rev($periode,$actype);
	$FC = queryFC12($periode,$actype,12);
	$FCrev = queryFC12rev($periode,$actype);
	$fleet = fleet($periode,$actype);
	$available = available($bulan[0],$bulan[11],$actype);
	//print_r($available);

	//last year
	$periodelastyear = (substr($periode,0,4) - 1)."-12";
	$FHlastyear = queryFH12($periodelastyear,$actype,12);
	$FHrevlastyear = queryFH12rev($periodelastyear,$actype);
	$FClastyear = queryFC12($periodelastyear,$actype,12);
	$FCrevlastyear = queryFC12rev($periodelastyear,$actype);
	$fleetlastyear = fleet($periodelastyear,$actype);
	$availablelastyear = available((substr($periode,0,4) - 1)."-01",(substr($periode,0,4) - 1)."-12",$actype);

	$delay = ATAdelay($bulan[0],$bulan[11],$actype);//die(print_r($delay));
	foreach($delay as $k => $v){
		foreach($v as $key => $value){
			$ATA[$key] = $value;
		}
		$jumlah = array_sum($v);
		$techdelay[$k] = $jumlah;
	}
	//die(print_r($techdelay));
	$delaydurationmenit = delayduration($bulan[0],$bulan[11],$actype);
	foreach ($delaydurationmenit as $key => $value){
		$delayduration[$key] = (($value - ($value % 60))/60)." : ".($value % 60);
	}
	$cancel = querycancel($bulan[0],$bulan[11],$actype);
	$cancellastyeardata = querycancel((substr($periode,0,4) - 1)."-01",(substr($periode,0,4) - 1)."-12",$actype);
	$cancellastyear = ($cancellastyeardata <> "") ? array_sum($cancellastyeardata) : 0;

	
	//last year
	$delaylastyear = ATAdelay((substr($periode,0,4) - 1)."-01",(substr($periode,0,4) - 1)."-12",$actype);
	foreach($delaylastyear as $k => $v){
		foreach($v as $key => $value){
			$ATA[$key] = $value;
		}
		$jumlah = array_sum($v);
		$techdelaylastyear[$k] = $jumlah;
	}
	$delaydurationmenitlastyear = delayduration((substr($periode,0,4) - 1)."-01",(substr($periode,0,4) - 1)."-12",$actype);
	foreach ($delaydurationmenitlastyear as $key => $value){
		$delaydurationlastyear[$key] = (($value - ($value % 60))/60)." : ".($value % 60);
	}
	
	
	$qryincident = "SELECT Count(`tbl_sdr`.`ACTYPE`) AS `jumlah`, DATE_FORMAT(`tbl_sdr`.`DateOccur`,'%Y-%m') AS `bulan` FROM `tbl_sdr` WHERE `tbl_sdr`.`ACTYPE` = '".$actype."' AND (DATE_FORMAT(`tbl_sdr`.`DateOccur`,'%Y-%m') BETWEEN '".$bulan[0]."' AND '".$bulan[11]."') GROUP BY DATE_FORMAT(`tbl_sdr`.`DateOccur`,'%Y-%m')";
	$resultincident = mysql_query($qryincident);
	//die($qryFH);
	while ($hasilincident = mysql_fetch_array($resultincident))
	{
		$incident[$hasilincident["bulan"]] = $hasilincident["jumlah"];
	}

	$qryincidentlastyear = "SELECT Count(`tbl_sdr`.`ACTYPE`) AS `jumlah`, DATE_FORMAT(`tbl_sdr`.`DateOccur`,'%Y-%m') AS `bulan` FROM `tbl_sdr` WHERE `tbl_sdr`.`ACTYPE` = '".$actype."' AND (DATE_FORMAT(`tbl_sdr`.`DateOccur`,'%Y-%m') BETWEEN '".(substr($periode,0,4) - 1)."-01' AND '".(substr($periode,0,4) - 1)."-12') GROUP BY DATE_FORMAT(`tbl_sdr`.`DateOccur`,'%Y-%m')";
	$resultincident = mysql_query($qryincidentlastyear);
	//die($qryFH);
	while ($hasilincident = mysql_fetch_array($resultincident))
	{
		$incidentlastyear[$hasilincident["bulan"]] = $hasilincident["jumlah"];
	}
	
	
	foreach ($bulan as $k => $v){
		$incident[$v] = isset($incident[$v]) ? $incident[$v] : 0;
		$incidentlastyear[$v] = isset($incidentlastyear[$v]) ? $incidentlastyear[$v] : 0;
		$avgduration[$v] = isset($delaydurationmenit[$v]) ? round($delaydurationmenit[$v] / $techdelay[$v],0) : 0;
		$avgduration[$v] = round(($avgduration[$v] - ($avgduration[$v] % 60))/60)." : ".($avgduration[$v] % 60);
		$avgduration[$v] = isset($avgduration[$v]) ? $avgduration[$v] : 0;
		$delayrate[$v] = isset($techdelay[$v]) ? $techdelay[$v] / $FCrev[$v] * 100 : 0;
		$delayratelastyear = isset($FCrevlastyear) ? (array_sum($techdelaylastyear) / array_sum($FCrevlastyear) * 100) : 0;
		$cancel[$v] = isset($cancel[$v]) ? $cancel[$v] : 0;
	}
	$jumlahincident = array_sum($incident);
	$jumlahincidentlastyear = array_sum($incidentlastyear);

	//buat halaman
	if ($actype == "A330-300"){
		$page = "A";
	} else if ($actype == "B737-300"){
		$page = "B";
	} else if ($actype == "B737-400"){
		$page = "C";
	} else if ($actype == "B737-500"){
		$page = "D";
	} else if ($actype == "B747-400"){
		$page = "E";
	} else {
		$page = "F";
	}

$pdf=new PDF('L','mm','A4');
//Column titles
$header='AIRCRAFT OPERATION SUMMARY';
//Data loading

//$data=$pdf->LoadData('countries.txt');
$pdf->SetFont('Arial','B',14);
$pdf->AddPage();
$pdf->BasicTable($header,$actype,$periode);
$pdf->bln($bulan,$periode);
$pdf->fleet($bulan,$fleet,$fleetlastyear);
$pdf->avail($bulan,$available,$availablelastyear);
$pdf->acinservice($bulan,$available,$availablelastyear);
$pdf->fh($bulan,$FH,$FHlastyear);
$pdf->fhrev($bulan,$FHrev,$FHrevlastyear);
$pdf->fc($bulan,$FC,$FClastyear);
$pdf->fcrev($bulan,$FCrev,$FCrevlastyear);
$pdf->fhperfc($bulan,$FH,$FHlastyear,$FC,$FClastyear,'Flight Hours per Take Off - Total');
$pdf->fhperfc($bulan,$FHrev,$FHrevlastyear,$FCrev,$FCrevlastyear,'   - Total');
$pdf->dailyfh($bulan,$FHlastyear,$availablelastyear,$FH,$available,'Daily Utilization - Fliying Hours Total');
$pdf->dailyfh($bulan,$FHrevlastyear,$availablelastyear,$FHrev,$available,'   - Revenue');
$pdf->dailyfc($bulan,$FClastyear,$availablelastyear,$FC,$available,'    Take Off  Total');
$pdf->dailyfc($bulan,$FCrevlastyear,$availablelastyear,$FCrev,$available,'   - Revenue');
$pdf->techdelaytot($bulan,$techdelaylastyear,$techdelay);
$pdf->techdelaydur($bulan,$delaydurationmenitlastyear,$delayduration,$delaydurationmenit);
$pdf->avgdur($bulan,$delaydurationmenitlastyear,$techdelaylastyear,$avgduration,$delaydurationmenit,$techdelay);
$pdf->delayrate($bulan,$delayratelastyear,$delayrate);
$pdf->incident($bulan,$jumlahincidentlastyear,$incident);
$pdf->incidentrate($bulan,$jumlahincidentlastyear,$incident,$FHlastyear,$FH);
$pdf->cancel($bulan,$cancellastyear,$cancel);
$pdf->dispatch($bulan,$FCrevlastyear,$techdelaylastyear,$cancellastyear,$FCrev,$techdelay,$cancel);
$pdf->Cell(275,6,"Page : ".$page."2",0,0,'R');

//$pdf->AddPage();
//$pdf->ImprovedTable($header,$data);
//$pdf->AddPage();
//$pdf->FancyTable($header,$data);
$pdf->Output();
?> 