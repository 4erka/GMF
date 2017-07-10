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
		$this->SetY(20);
		$this->SetX(10);
	    $this->Cell(275,7,$header,'LRT',0,'C');
		$this->Ln();
		$this->Cell(275,7,((substr($actype,0,1) == "A") || ($actype == "A330-200") ? "AIRBUS" : (($actype == "CRJ-1000") ? "BOMBARDIER" : "BOEING"))." ".$actype,'LRB',0,'C');
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
function fleet($bulan,$fleet,$fleetlastyear,$FH,$availablelastyear){
	$this->Cell(53,6,'A/C in Fleet','LBRT',0,'L',0);
	$this->Cell(15,6,(count($availablelastyear) > 1) ? round(array_sum($fleetlastyear)/12,0) : 0,'LBR',0,'C',0);
	foreach ($bulan as $k => $v){
		$this->Cell(15,6,(($FH[$v] != 0) ? $fleet[$v] : ""),'TLRB',0,'C',(($FH[$v] != 0) ? 0 : 1));
	}
	$this->Cell(27,6,round(array_sum($fleet)/12,0),'LBR',0,'C');
	$this->Ln();
}
function avail($bulan,$available,$availablelastyear,$FH){
	$this->Cell(53,6,'A/C in Service','LBRT',0,'L',0);
	$this->Cell(15,6,isset($availablelastyear) ? round(array_sum($availablelastyear)/365,2) : 0,'LBR',0,'C',0);
	foreach ($bulan as $k => $v){
		$this->Cell(15,6,($FH[$v] != 0) ? round($available[$v]/jumlahbulan($v),2) : "",'TLRB',0,'C',($FH[$v] != 0) ? 0 : 1);
	}
	$this->Cell(27,6,round(array_sum($available)/365,2),'LBR',0,'C');
	$this->Ln();
}
function acinservice($bulan,$available,$availablelastyear,$FH){
	$this->Cell(53,6,'A/C Days In Service','LBRT',0,'L',0);
	$this->Cell(15,6,isset($availablelastyear) ? array_sum($availablelastyear) : 0,'LBR',0,'C',0);
	foreach ($bulan as $k => $value){
		$this->Cell(15,6,($FH[$value] != 0) ? $available[$value] : "",'TLRB',0,'C',($FH[$value] != 0) ? 0 : 1);
	}
	$this->Cell(27,6,array_sum($available),'LBR',0,'C');
	$this->Ln();
}
function fh($bulan,$FH,$FHlastyear){
	$this->Cell(53,6,'Flying Hours - Total','LBRT',0,'L',0);
	$this->Cell(15,6,isset($FHlastyear) ? array_sum($FHlastyear) : 0,'LBR',0,'C',0);
	$FHsum = 0;
	foreach ($bulan as $k => $value){
		$this->Cell(15,6,($FH[$value] != 0) ? $FH[$value] : "",'TLRB',0,'C',($FH[$value] != 0) ? 0 : 1);
		$FHsum += $FH[$value];
	}
	$this->Cell(27,6,$FHsum,'LBR',0,'C');
	$this->Ln();
}
function fhrev($bulan,$FHrev,$FHrevlastyear,$FH){
	$this->Cell(53,6,'   - Revenue','LBRT',0,'L',0);
	$this->Cell(15,6,isset($FHrevlastyear) ? array_sum($FHrevlastyear) : 0,'LBR',0,'C',0);
	$FHsumrev = 0;
	foreach ($bulan as $k => $value){
		$this->Cell(15,6,($FH[$value] != 0) ? $FHrev[$value] : "",'TLRB',0,'C',($FH[$value] != 0) ? 0 : 1);
		$FHsumrev += $FHrev[$value];
	}
	$this->Cell(27,6,$FHsumrev,'LBR',0,'C');
	$this->Ln();
}
function fc($bulan,$FC,$FClastyear){
	$this->Cell(53,6,'Take Off - Total','LBRT',0,'L',0);
	$this->Cell(15,6,isset($FClastyear) ? array_sum($FClastyear) : 0,'LBR',0,'C',0);
	$FCsum = 0;
	foreach ($bulan as $k => $value){
		$this->Cell(15,6,($FC[$value] != 0) ? $FC[$value] : "",'TLRB',0,'C',($FC[$value] != 0) ? 0 : 1);
		$FCsum += $FC[$value];
	}
	$this->Cell(27,6,$FCsum,'LBR',0,'C');
	$this->Ln();
}
function fcrev($bulan,$FCrev,$FCrevlastyear,$FC){
	$this->Cell(53,6,'   - Revenue','LBRT',0,'L',0);
	$this->Cell(15,6,isset($FCrevlastyear) ? array_sum($FCrevlastyear) : 0,'LBR',0,'C',0);
	$FCsumrev = 0;
	foreach ($bulan as $k => $value){
		$this->Cell(15,6,($FC[$value] != 0) ? $FCrev[$value] : "",'TLRB',0,'C',($FC[$value] != 0) ? 0 : 1);
		$FCsumrev += $FCrev[$value];
	}
	$this->Cell(27,6,$FCsumrev,'LBR',0,'C');
	$this->Ln();
}
function fhperfc($bulan,$FH,$FHlastyear,$FC,$FClastyear,$text){
	$this->Cell(53,6,$text,'LBRT',0,'L',0);
	$fhperfclastyear = (count($FClastyear) > 1) ? ((array_sum($FHlastyear) - (array_sum($FHlastyear) % array_sum($FClastyear)))/array_sum($FClastyear))." : ".substr("0".(round(((array_sum($FHlastyear) % array_sum($FClastyear))/array_sum($FClastyear)*60),0)),-2,2) : 0;
	$this->Cell(15,6,$fhperfclastyear,'LBR',0,'C',0);
	foreach ($bulan as $k => $value){
		$fhperfc[$value] = ($FC[$value]) ? (($FH[$value] - ($FH[$value] % $FC[$value]))/$FC[$value])." : ".substr("0".round((($FH[$value] % $FC[$value])/$FC[$value]*60),0),-2,2) : 0;
		$this->Cell(15,6,($FH[$value] != 0) ? $fhperfc[$value] : "",'TLRB',0,'C',($FH[$value] != 0) ? 0 : 1);
	}
	$this->Cell(27,6,(array_sum($FH) - (array_sum($FH) % array_sum($FC)))/array_sum($FC)." : ".substr("0".round(((array_sum($FH) % array_sum($FC))/array_sum($FC)*60),0),-2,2),'LBR',0,'C');
	$this->Ln();
}
function dailyfh($bulan,$FHlastyear,$availablelastyear,$FH,$available,$text){
	$this->Cell(53,6,$text,'LBRT',0,'L',0);
	$dailyfhlastyear = (count($availablelastyear) > 1) ? ((array_sum($FHlastyear)-(array_sum($FHlastyear)%array_sum($availablelastyear)))/array_sum($availablelastyear))." : ".substr("0".round(((array_sum($FHlastyear)%array_sum($availablelastyear))/array_sum($availablelastyear)*60),0),-2,2) : 0;
	$this->Cell(15,6,$dailyfhlastyear,'LBR',0,'C',0);
	foreach ($bulan as $k => $value){
		$daily[$value] = ($available[$value]) ? (($FH[$value]-($FH[$value]%$available[$value]))/$available[$value])." : ".substr("0".round((($FH[$value]%$available[$value])/$available[$value]*60),0),-2,2) : 0;
		$this->Cell(15,6,($FH[$value] != 0) ? $daily[$value] : "",'TLRB',0,'C',($FH[$value] != 0) ? 0 : 1);
	}
	$this->Cell(27,6,((array_sum($FH)-(array_sum($FH)%array_sum($available)))/array_sum($available))." : ".substr("0".round(((array_sum($FH)%array_sum($available))/array_sum($available)*60),0),-2,2),'LBR',0,'C');
	$this->Ln();
}
function dailyfc($bulan,$FClastyear,$availablelastyear,$FC,$available,$text){
	$this->Cell(53,6,$text,'LBRT',0,'L',0);
	//die(print_r($available));
	$dailyfclastyear = (count($availablelastyear) > 1) ? round(array_sum($FClastyear)/array_sum($availablelastyear),2) : 0;
	$this->Cell(15,6,$dailyfclastyear,'LBR',0,'C',0);
	foreach ($bulan as $k => $value){
		$dailyfc[$value] = ($available[$value]) ? round($FC[$value]/$available[$value],2) : 0;
		$this->Cell(15,6,($FC[$value] != 0) ? $dailyfc[$value] : "",'TLRB',0,'C',($FC[$value] != 0) ? 0 : 1);
	}
	$this->Cell(27,6,round(array_sum($FC)/array_sum($available),2),'LBR',0,'C');
	$this->Ln();
}
function techdelaytot($bulan,$techdelaylastyear,$techdelay,$FH){
	$this->Cell(53,6,'Technical Delay - Total','LBRT',0,'L',0);
	$this->Cell(15,6,array_sum($techdelaylastyear),'LBR',0,'C',0);
	foreach ($bulan as $k => $value){

		$this->Cell(15,6,($FH[$value] != 0) ? (isset($techdelay[$value]) ? $techdelay[$value] : 0) : "",'TLRB',0,'C',($FH[$value] != 0) ? 0 : 1);
	}
	$this->Cell(27,6,array_sum($techdelay),'LBR',0,'C');
	$this->Ln();
}
function techdelaydur($bulan,$delaydurationmenitlastyear,$delayduration,$delaydurationmenit,$FH){
	$this->Cell(53,6,'    - Total Duration','LBRT',0,'L',0);
	$delaydurmenit = is_array($delaydurationmenitlastyear) ? round(array_sum($delaydurationmenitlastyear)/60,0)." : ".substr("0".($delaydurationmenitlastyear % 60),-2,2) : 0;
	$this->Cell(15,6,$delaydurmenit,'LBR',0,'C',0);
	foreach ($bulan as $k => $value){
		$this->Cell(15,6,($FH[$value] != 0) ? (isset($delayduration[$value]) ? $delayduration[$value] : 0) : "",'TLRB',0,'C',($FH[$value] != 0) ? 0 : 1);
	}
	$delaydurjumlah = is_array($delaydurationmenit) ? round(array_sum($delaydurationmenit)/60,0)." : ".substr("0".(array_sum($delaydurationmenit) % 60),-2,2) : 0;
	$this->Cell(27,6,$delaydurjumlah,'LBR',0,'C');
	$this->Ln();
}
function avgdur($bulan,$delaydurationmenitlastyear,$techdelaylastyear,$avgduration,$delaydurationmenit,$techdelay,$FH){
	$this->Cell(53,6,'    - Average Duration','LBRT',0,'L',0);
	$avgdurlast = is_array($delaydurationmenitlastyear) ? round(array_sum($delaydurationmenitlastyear)/array_sum($techdelaylastyear)/60,0)." : ".substr("0".((array_sum($delaydurationmenitlastyear)/array_sum($techdelaylastyear)) % 60),-2,2) : 0;
	$this->Cell(15,6,$avgdurlast,'LBR',0,'C',0);
	foreach ($bulan as $k => $value){
		$this->Cell(15,6,($FH[$value] != 0) ? $avgduration[$value] : "",'TLRB',0,'C',($FH[$value] != 0) ? 0 : 1);
	}
	$jumlahdur = is_array($delaydurationmenit) ? round(array_sum($delaydurationmenit)/array_sum($techdelay)/60,0)." : ".substr("0".((array_sum($delaydurationmenit)/array_sum($techdelay)) % 60),-2,2) : 0;
	$this->Cell(27,6,$jumlahdur,'LBR',0,'C');
	$this->Ln();
}
function delayrate($bulan,$delayratelastyear,$delayrate,$FH){
	$this->Cell(53,6,'    - Rate / 100 Take Off','LBRT',0,'L',0);
	$this->Cell(15,6,round($delayratelastyear,2),'LBR',0,'C',0);
	foreach ($bulan as $k => $value){
		$this->Cell(15,6,($FH[$value] != 0) ? round($delayrate[$value],2) : "",'TLRB',0,'C',($FH[$value] != 0) ? 0 : 1);
	}
	$this->Cell(27,6,round(array_sum($delayrate),2),'LBR',0,'C');
	$this->Ln();
}
function incident($bulan,$jumlahincidentlastyear,$incident,$FH){
	$this->Cell(53,6,'Technical Incident - Total','LBRT',0,'L',0);
	$this->Cell(15,6,$jumlahincidentlastyear,'LBR',0,'C',0);
	foreach ($bulan as $k => $value){
		$this->Cell(15,6,($FH[$value] != 0) ? $incident[$value] : "",'TLRB',0,'C',($FH[$value] != 0) ? 0 : 1);
	}
	$this->Cell(27,6,array_sum($incident),'LBR',0,'C');
	$this->Ln();
}
function incidentrate($bulan,$jumlahincidentlastyear,$incident,$FHlastyear,$FH){
	$this->Cell(53,6,'    - Rate / 1000 FH','LBRT',0,'L',0);
	$this->Cell(15,6,(count($FHlastyear) > 1) ? round(($jumlahincidentlastyear)/array_sum($FHlastyear)*1000,2) : 0,'LBR',0,'C',0);
	foreach ($bulan as $k => $value){
		$inci[$value] = ($FH[$value] != 0) ? round($incident[$value]/$FH[$value]*1000,3) : 0;
		$this->Cell(15,6,($FH[$value] != 0) ? $inci[$value] : "",'TLRB',0,'C',($FH[$value] != 0) ? 0 : 1);
	}
	$this->Cell(27,6,round(array_sum($incident)/array_sum($FH)*1000,3),'LBR',0,'C');
	$this->Ln();
}
function cancel($bulan,$cancellastyear,$cancel,$FH){
	$this->Cell(53,6,'Technical Cancellation','LBRT',0,'L',0);
	$this->Cell(15,6,$cancellastyear,'LBR',0,'C',0);
	foreach ($bulan as $k => $value){
		$this->Cell(15,6,($FH[$value] != 0) ? $cancel[$value] : "",'TLRB',0,'C',($FH[$value] != 0) ? 0 : 1);
	}
	$this->Cell(27,6,array_sum($cancel),'LBR',0,'C');
	$this->Ln();
}
function dispatch($bulan,$FCrevlastyear,$techdelaylastyear,$cancellastyear,$FCrev,$techdelay,$cancel,$FH){
	$this->Cell(53,6,'Dispatch Reliability (%)','LBRT',0,'L',0);
	$this->Cell(15,6,(count($FCrevlastyear) > 1) ? round((array_sum($FCrevlastyear) - array_sum($techdelaylastyear) - $cancellastyear)/array_sum($FCrevlastyear) * 100,2) : "100",'LBR',0,'C',0);
	foreach ($bulan as $k => $value){
		$techdelay[$value] = isset($techdelay[$value]) ? $techdelay[$value] : 0;
		//$dr[$value] = () ? 
		$this->Cell(15,6,($FH[$value] != 0) ? (($FCrev[$value] != 0) ? round(($FCrev[$value] - $techdelay[$value] - $cancel[$value])/$FCrev[$value] * 100,2) : 0) : "",'TLRB',0,'C',($FH[$value] != 0) ? 0 : 1);
	}
	//print_r($FCrev);
	$this->Cell(27,6,round((array_sum($FCrev) - array_sum($techdelay) - array_sum($cancel))/array_sum($FCrev) * 100,2),'LBR',0,'C');
	$this->Ln();
}
}
  $periode = isset($_REQUEST["periode"]) ? substr($_REQUEST["periode"],0,7) : "";
  $actype = isset($_REQUEST["actype"]) ? $_REQUEST["actype"] : "";
  $page = isset($_REQUEST["page"]) ? $_REQUEST["page"] : "";

	$TE = connectimesysTE();
	$FH = queryFH12($periode,$actype,12);
	for ($k=0;$k<12;$k++){
		$yearll = substr($periode,0,4)-1;
		$blnll = substr($periode,-2,2)+1;
		$bln = $k + $blnll;$tahun = $yearll;
		if ($bln >= 13) {
			$bln = ($bln - 12);
			$tahun = ($yearll + 1);
		}
		$bulan[$k] = $tahun."-".substr("0".$bln,-2,2);
	}
	//$bulan = array_reverse(array_keys($FH));
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
	//die(print_r($available));
	$delaydurationmenit = delayduration($bulan[0],$bulan[11],$actype);
	if (is_array($delaydurationmenit)) {
	foreach ($delaydurationmenit as $key => $value){
		$delayduration[$key] = (($value - ($value % 60))/60)." : ".substr("0".($value % 60),-2,2);
	}
	} else {
		$delayduration[0] = 0;
	}
	$cancel = querycancel($bulan[0],$bulan[11],$actype);
	$cancellastyeardata = querycancel((substr($periode,0,4) - 1)."-01",(substr($periode,0,4) - 1)."-12",$actype);
	$cancellastyear = ($cancellastyeardata <> "") ? array_sum($cancellastyeardata) : 0;

	
	//last year
	$delaylastyear = ATAdelay((substr($periode,0,4) - 1)."-01",(substr($periode,0,4) - 1)."-12",$actype);
	if (is_array($delaylastyear)) {
	foreach($delaylastyear as $k => $v){
		foreach($v as $key => $value){
			$ATA[$key] = $value;
		}
		$jumlah = array_sum($v);
		$techdelaylastyear[$k] = $jumlah;
	}
	} else {
		$techdelaylastyear[0] = 0;
	}
	$delaydurationmenitlastyear = delayduration((substr($periode,0,4) - 1)."-01",(substr($periode,0,4) - 1)."-12",$actype);
	if (is_array($delaydurationmenitlastyear)) {
	foreach ($delaydurationmenitlastyear as $key => $value){
		$delaydurationlastyear[$key] = (($value - ($value % 60))/60)." : ".substr("0".($value % 60),-2,2);
	}
	}
	
	if ($actype == "B737-Classic") {
		$qryline = "`tbl_sdr`.`ACTYPE` IN ('B737-300','B737-400','B737-500','B737-CL')";
	} else if ($actype == "B737-Classic GA") {
		$qryline = "`tbl_sdr`.`ACTYPE` IN ('B737-300','B737-400','B737-500')";
	} else if ($actype == "B737-800-E") {
		$qryline = "`tbl_sdr`.`Reg` Like 'PK-GE%'";
	} else if ($actype == "B737-800-M") {
		$qryline = "(`tbl_sdr`.`Reg` Like 'PK-GM%' or `tbl_sdr`.`Reg` Like 'PK-GF%')";
	} else {
		$qryline = "`tbl_sdr`.`ACTYPE` IN ('$actype')";
	}
	$qryincident = "SELECT Count(`tbl_sdr`.`ACTYPE`) AS `jumlah`, DATE_FORMAT(`tbl_sdr`.`DateOccur`,'%Y-%m') AS `bulan` FROM `tbl_sdr` WHERE ".$qryline." AND (DATE_FORMAT(`tbl_sdr`.`DateOccur`,'%Y-%m') BETWEEN '".$bulan[0]."' AND '".$bulan[11]."') GROUP BY DATE_FORMAT(`tbl_sdr`.`DateOccur`,'%Y-%m')";
	$resultincident = mysql_query($qryincident);
	//die($qryFH);
	while ($hasilincident = mysql_fetch_array($resultincident))
	{
		$incident[$hasilincident["bulan"]] = $hasilincident["jumlah"];
	}

	$qryincidentlastyear = "SELECT Count(`tbl_sdr`.`ACTYPE`) AS `jumlah`, DATE_FORMAT(`tbl_sdr`.`DateOccur`,'%Y-%m') AS `bulan` FROM `tbl_sdr` WHERE ".$qryline." AND (DATE_FORMAT(`tbl_sdr`.`DateOccur`,'%Y-%m') BETWEEN '".(substr($periode,0,4) - 1)."-01' AND '".(substr($periode,0,4) - 1)."-12') GROUP BY DATE_FORMAT(`tbl_sdr`.`DateOccur`,'%Y-%m')";
	$resultincident = mysql_query($qryincidentlastyear);
	//die($qryFH);
	while ($hasilincident = mysql_fetch_array($resultincident))
	{
		$incidentlastyear[$hasilincident["bulan"]] = $hasilincident["jumlah"];
	}
	//die(print_r($bulan));
	
	foreach ($bulan as $k => $v){
		$incident[$v] = isset($incident[$v]) ? $incident[$v] : 0;
		$incidentlastyear[$v] = isset($incidentlastyear[$v]) ? $incidentlastyear[$v] : 0;
		$avgduration[$v] = isset($delaydurationmenit[$v]) ? round($delaydurationmenit[$v] / $techdelay[$v],0) : 0;
		$avgduration[$v] = round(($avgduration[$v] - ($avgduration[$v] % 60))/60)." : ".substr("0".($avgduration[$v] % 60),-2,2);
		$avgduration[$v] = isset($avgduration[$v]) ? $avgduration[$v] : 0;
		$delayrate[$v] = isset($techdelay[$v]) ? $techdelay[$v] / $FCrev[$v] * 100 : 0;
		$delayratelastyear = (count($FCrevlastyear) > 1) ? (array_sum($techdelaylastyear) / array_sum($FCrevlastyear) * 100) : 0;
		$cancel[$v] = isset($cancel[$v]) ? $cancel[$v] : 0;
	}
	$jumlahincident = array_sum($incident);
	$jumlahincidentlastyear = array_sum($incidentlastyear);

	//buat halaman
	/*if ($actype == "A330-200"){
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
	}*/

$pdf=new PDF('L','mm','A4');
//Column titles
$header='AIRCRAFT OPERATION SUMMARY';
//Data loading
$pdf->SetY(57);
$pdf->SetFillColor(200);
//$data=$pdf->LoadData('countries.txt');
$pdf->SetFont('Arial','B',14);
$pdf->AddPage();
$pdf->BasicTable($header,$actype,$periode);
$pdf->bln($bulan,$periode);//die(print_r($bulan));
$pdf->fleet($bulan,$fleet,$fleetlastyear,$FH,$availablelastyear);
$pdf->avail($bulan,$available,$availablelastyear,$FH);
$pdf->acinservice($bulan,$available,$availablelastyear,$FH);
$pdf->fh($bulan,$FH,$FHlastyear);
$pdf->fhrev($bulan,$FHrev,$FHrevlastyear,$FH);
$pdf->fc($bulan,$FC,$FClastyear,$FC);
$pdf->fcrev($bulan,$FCrev,$FCrevlastyear,$FC);
$pdf->fhperfc($bulan,$FH,$FHlastyear,$FC,$FClastyear,'Flight Hours per Take Off - Total');
$pdf->fhperfc($bulan,$FHrev,$FHrevlastyear,$FCrev,$FCrevlastyear,'   - Revenue',$FH);
$pdf->dailyfh($bulan,$FHlastyear,$availablelastyear,$FH,$available,'Daily Utilization - Fliying Hours Total');
$pdf->dailyfh($bulan,$FHrevlastyear,$availablelastyear,$FHrev,$available,'   - Revenue',$FH);
$pdf->dailyfc($bulan,$FClastyear,$availablelastyear,$FC,$available,'    Take Off  Total');
$pdf->dailyfc($bulan,$FCrevlastyear,$availablelastyear,$FCrev,$available,'   - Revenue',$FC);
$pdf->techdelaytot($bulan,$techdelaylastyear,$techdelay,$FH);
$pdf->techdelaydur($bulan,$delaydurationmenitlastyear,$delayduration,$delaydurationmenit,$FH);
$pdf->avgdur($bulan,$delaydurationmenitlastyear,$techdelaylastyear,$avgduration,$delaydurationmenit,$techdelay,$FH);
$pdf->delayrate($bulan,$delayratelastyear,$delayrate,$FH);
$pdf->incident($bulan,$jumlahincidentlastyear,$incident,$FH);
$pdf->incidentrate($bulan,$jumlahincidentlastyear,$incident,$FHlastyear,$FH);
$pdf->cancel($bulan,$cancellastyear,$cancel,$FH);
$pdf->dispatch($bulan,$FCrevlastyear,$techdelaylastyear,$cancellastyear,$FCrev,$techdelay,$cancel,$FH);
$pdf->Cell(275,6,"Page : ".$page,0,0,'R');

$pdf->SetLineWidth(0.4);
$pdf->Line(10,20,285,20);
$pdf->Line(10,20,10,173);
$pdf->Line(10,173,285,173);
$pdf->Line(285,20,285,173);

$pdf->Line(10,34,285,34);
$pdf->Line(10,41,285,41);
$pdf->Line(63,41,63,173);

//$pdf->AddPage();
//$pdf->ImprovedTable($header,$data);
//$pdf->AddPage();
//$pdf->FancyTable($header,$data);
$pdf->Output();
?> 