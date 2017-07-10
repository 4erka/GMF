<?php
require('fpdf/fpdf.php');
include 'function.php';

class PDF extends FPDF
{


//Simple table
function head($actype,$FH,$FH12,$bulan,$textkanan,$textkiri,$tahun)
{
    //Header
    //foreach($header as $col)
    //    $this->Cell(40,17,$col,10);
		$this->SetY(30);
		$this->Cell(45,5,"GA ".$actype,'LBT',0,'C');
		$this->Cell(137,5,$textkiri,'RTB',0,'C');
		$this->Ln();
	    $this->Cell(182,7,'','LRT',0,'C');
		$this->Ln();
		$this->SetFont('Arial','B',6);
		$this->Cell(40,4,$textkanan,'LBT',0,'C');
		$this->Cell(9,4,$FH[$bulan[2]],'LBT',0,'C');
		$this->Cell(9,4,$FH[$bulan[1]],'LBT',0,'C');
		$this->Cell(9,4,$FH[$bulan[0]],'LBT',0,'C');
		$this->Cell(11,4,$FH[$bulan[2]] + $FH[$bulan[1]] + $FH[$bulan[0]],'LBT',0,'C');
		$this->Cell(14,4,$FH12,'LRBT',0,'C');
		$this->Cell(9,4,"",0,0,'C');
		$this->Cell(9,4,"",0,0,'C');
		$this->Cell(9,4,"",0,0,'C');
		$this->Cell(14,4,'',0,0,'C');
		$this->Cell(14,4,'',0,0,'C');
		$this->Cell(11,4,'',0,0,'C');
		$this->Cell(12,4,'',0,0,'C');
		$this->Cell(12,4,'','R',0,'C');
		$this->Ln();
		$this->Cell(40,8,"ATA CHAPTER",'LBRT',0,'C');
		$this->Cell(9,4,bulan($bulan[2]),'LBT',0,'C');
		$this->Cell(9,4,bulan($bulan[1]),'LBT',0,'C');
		$this->Cell(9,4,bulan($bulan[0]),'LBT',0,'C');
		$this->Cell(11,4,"LAST 3",'LBT',0,'C');
		$this->Cell(14,4,"12 Months",'LRBT',0,'C');
		$this->Cell(9,4,bulan($bulan[2]),'LBT',0,'C');
		$this->Cell(9,4,bulan($bulan[1]),'LBT',0,'C');
		$this->Cell(9,4,bulan($bulan[0]),'LBT',0,'C');
		$this->Cell(14,4,'3 Months','TBLR',0,'C');
		$this->Cell(14,4,'12 Months','TBLR',0,'C');
		$this->Cell(11,4,'ALERT','TBLR',0,'C');
		$this->Cell(12,4,'ALERT','TBLR',0,'C');
		$this->Cell(12,4,'TREND','TBLR',0,'C');
		$this->Ln();
		$this->SetX(57);
		$this->Cell(9,4,"",'LBT',0,'C');
		$this->Cell(9,4,"",'LBT',0,'C');
		$this->Cell(9,4,"",'LBT',0,'C');
		$this->Cell(11,4,"Months",'LBT',0,'C');
		$this->Cell(14,4,$tahun-1,'LRBT',0,'C');
		$this->Cell(9,4,"RATE",'LBT',0,'C');
		$this->Cell(9,4,"RATE",'LBT',0,'C');
		$this->Cell(9,4,"RATE",'LBT',0,'C');
		$this->Cell(14,4,'RATE','TBLR',0,'C');
		$this->Cell(14,4,'RATE','TBLR',0,'C');
		$this->Cell(10.9,4,'LEVEL','TBLR',0,'C');
		$this->Cell(12.1,4,'STATUS','TBLR',0,'C');
		$this->Cell(12,4,'','TBLR',0,'C');
		$this->Ln();
}
function bln(){
	//$this->SetY(-45);
    //Arial italic 8
	$this->Ln();
    $this->SetFont('Arial','B',6);
	$this->Cell(185,4,'NOTE :',0,0,'');
	$this->Ln();
    $this->Cell(185,4,'The Alert Level (AL) is based on monthly Technical Delay Rate of last Four Quarters (Average + 2 *STD',0,0,'');
	$this->Ln();
    //$this->SetY(-35);
	$this->Cell(185,4,'The Alert Status colomn will show "RED-1" if the last month Delay Rate exceed the AL, "RED-2" if this is true for the last two consecutive months,',0,0,'');
	$this->Ln();
    //$this->SetY(-30);
	$this->Cell(185,4,'and "RED-3" if this is true for the last three consecutive months.',0,0,'');
    //$this->SetY(-25);
	$this->Ln();
	$this->Cell(185,4,'The TREND colomn show an "UP" or "DOWN" when the rate has increased or decreased for 3 months',0,0,'');
    //$this->SetY(-20);
	$this->Ln();
	$this->Cell(170,10,'Compiled and Issued by GMF Reliability Service',0,0,'R');	
}
function data($bulan,$ATApirep,$ATA12bulan,$alertlevel,$ATA,$ATAdesc,$FH,$FH12,$pembagi,$actype,$preselectpirep){
	$this->SetFont('Arial','',6);
	for ($i=0;$i<35;$i++) {
	  $ATApirep[$bulan[2]][$ATA[$i]] = isset($ATApirep[$bulan[2]][$ATA[$i]]) ? $ATApirep[$bulan[2]][$ATA[$i]] : 0;
	  $ATApirep[$bulan[1]][$ATA[$i]] = isset($ATApirep[$bulan[1]][$ATA[$i]]) ? $ATApirep[$bulan[1]][$ATA[$i]] : 0;
	  $ATApirep[$bulan[0]][$ATA[$i]] = isset($ATApirep[$bulan[0]][$ATA[$i]]) ? $ATApirep[$bulan[0]][$ATA[$i]] : 0;
	  $ATA12bulan[$ATA[$i]] = isset($ATA12bulan[$ATA[$i]]) ? $ATA12bulan[$ATA[$i]] : 0;

	  $alertlevel[$ATA[$i]] = isset($alertlevel[$ATA[$i]]) ? $alertlevel[$ATA[$i]] : 0;
	  $alertlevel[$ATA[$i]] = isset($preselectpirep[$ATA[$i]]) ? $preselectpirep[$ATA[$i]] : $alertlevel[$ATA[$i]];

	  $alertleveldelay[$ATA[$i]] = isset($alertleveldelay[$ATA[$i]]) ? $alertleveldelay[$ATA[$i]] : 0;
	  //$alertleveldelay[$ATA[$i]] = isset($preselectdelay[$ATA[$i]]) ? $preselectdelay[$ATA[$i]] : $alertleveldelay[$ATA[$i]];

	$this->SetFont('Arial','B',6);
	$this->Cell(5,4.5,$ATA[$i],'LBT',0,'C');
	$this->Cell(35,4.5,$ATAdesc[$i],'LBT',0,'C');
	$this->SetFont('Arial','',6);
	$this->Cell(9,4.5,$ATApirep[$bulan[2]][$ATA[$i]],'LBT',0,'C');
	$this->Cell(9,4.5,$ATApirep[$bulan[1]][$ATA[$i]],'LBT',0,'C');
	$this->Cell(9,4.5,$ATApirep[$bulan[0]][$ATA[$i]],'LBT',0,'C');
	$this->Cell(11,4.5,$ATApirep[$bulan[0]][$ATA[$i]] + $ATApirep[$bulan[1]][$ATA[$i]] + $ATApirep[$bulan[2]][$ATA[$i]],'LBT',0,'C');
	$this->Cell(14,4.5,$ATA12bulan[$ATA[$i]],'LRBT',0,'C');
	$ratebulan2 = ($FH[$bulan[2]] <> 0) ? round($ATApirep[$bulan[2]][$ATA[$i]]/$FH[$bulan[2]]*$pembagi,2) : 0;
	$this->Cell(9,4.5,$ratebulan2,'LBT',0,'C');
	$this->Cell(9,4.5,($FH[$bulan[1]] <> 0) ? round($ATApirep[$bulan[1]][$ATA[$i]]/$FH[$bulan[1]]*$pembagi,2) : 0,'LBT',0,'C');
	$this->Cell(9,4.5,($FH[$bulan[0]] <> 0) ? round($ATApirep[$bulan[0]][$ATA[$i]]/$FH[$bulan[0]]*$pembagi,2) : 0,'LBT',0,'C');
	$this->Cell(14,4.5,round(($ATApirep[$bulan[2]][$ATA[$i]] + $ATApirep[$bulan[1]][$ATA[$i]] + $ATApirep[$bulan[0]][$ATA[$i]])/($FH[$bulan[2]] + $FH[$bulan[1]] + $FH[$bulan[0]])*$pembagi,2),'TBLR',0,'C');
	$this->Cell(14,4.5,($FH12 <> 0) ? round($ATA12bulan[$ATA[$i]]/$FH12*$pembagi,2) : 0,'TBLR',0,'C');
	$this->Cell(11,4.5,(($actype != "B737-CL") && ($actype != "A330-200")) ? round($alertlevel[$ATA[$i]],2) : "",'TBLR',0,'C',(($actype != "B737-CL") && ($actype != "A330-200")) ? 0 : 1);
	$this->Cell(12,4.5,(($actype != "B737-CL") && ($FH[$bulan[0]] <> 0) && ($FH[$bulan[1]] <> 0) && ($FH[$bulan[2]] <> 0)) ? alertstatus(round($ATApirep[$bulan[2]][$ATA[$i]]/$FH[$bulan[2]]*$pembagi,2),round($ATApirep[$bulan[1]][$ATA[$i]]/$FH[$bulan[1]]*$pembagi,2),round($ATApirep[$bulan[0]][$ATA[$i]]/$FH[$bulan[0]]*$pembagi,2),$alertlevel[$ATA[$i]]) : "",'TBLR',0,'C',($actype != "B737-CL") ? 0 : 1);
	$this->Cell(12,4.5,(($FH[$bulan[0]] <> 0) && ($FH[$bulan[1]] <> 0) && ($FH[$bulan[2]] <> 0)) ? alerttrend($ATApirep[$bulan[2]][$ATA[$i]]/$FH[$bulan[2]]*$pembagi,$ATApirep[$bulan[1]][$ATA[$i]]/$FH[$bulan[1]]*$pembagi,$ATApirep[$bulan[0]][$ATA[$i]]/$FH[$bulan[0]]*$pembagi) : "",'TBLR',0,'C');
	$this->Ln();
	}
}
function OT($bulan,$ATApirep,$ATA12bulan,$alertlevel,$ATA,$ATAdesc,$FH,$FH12,$pembagi,$actype){

	$ATApirep[$bulan[2]]['OT'] = isset($ATApirep[$bulan[2]]['OT']) ? $ATApirep[$bulan[2]]['OT'] : 0;
	$ATApirep[$bulan[1]]['OT'] = isset($ATApirep[$bulan[1]]['OT']) ? $ATApirep[$bulan[1]]['OT'] : 0;
	$ATApirep[$bulan[0]]['OT'] = isset($ATApirep[$bulan[0]]['OT']) ? $ATApirep[$bulan[0]]['OT'] : 0;
	$ATA12bulan['OT'] = isset($ATA12bulan['OT']) ? $ATA12bulan['OT'] : 0;
	$alertlevel['OT'] = isset($alertlevel['5']) ? $alertlevel['5'] : 0;
	
	$this->SetFont('Arial','B',6);
	$this->Cell(5,4.5,'OT','LBT',0,'C');
	$this->Cell(35,4.5,'OTHER','LBT',0,'C');
	$this->SetFont('Arial','',6);
	$this->Cell(9,4.5,$ATApirep[$bulan[2]]['OT'],'LBT',0,'C');
	$this->Cell(9,4.5,$ATApirep[$bulan[1]]['OT'],'LBT',0,'C');
	$this->Cell(9,4.5,$ATApirep[$bulan[0]]['OT'],'LBT',0,'C');
	$this->Cell(11,4.5,$ATApirep[$bulan[0]]['OT'] + $ATApirep[$bulan[1]]['OT'] + $ATApirep[$bulan[2]]['OT'],'LBT',0,'C');
	$this->Cell(14,4.5,$ATA12bulan['OT'],'LRBT',0,'C');
	$this->Cell(9,4.5,($FH[$bulan[2]] != 0) ? round($ATApirep[$bulan[2]]['OT']/$FH[$bulan[2]]*$pembagi,2) : 0,'LBT',0,'C',($FH[$bulan[2]] =! 0) ? 0 : 1);
	$this->Cell(9,4.5,($FH[$bulan[1]] != 0) ? round($ATApirep[$bulan[1]]['OT']/$FH[$bulan[1]]*$pembagi,2) : 0,'LBT',0,'C',($FH[$bulan[2]] =! 0) ? 0 : 1);
	$this->Cell(9,4.5,($FH[$bulan[0]] != 0) ? round($ATApirep[$bulan[0]]['OT']/$FH[$bulan[0]]*$pembagi,2) : 0,'LBT',0,'C',($FH[$bulan[2]] =! 0) ? 0 : 1);
	$this->Cell(14,4.5,round(($ATApirep[$bulan[2]]['OT'] + $ATApirep[$bulan[1]]['OT'] + $ATApirep[$bulan[0]]['OT'])/($FH[$bulan[2]] + $FH[$bulan[1]] + $FH[$bulan[0]])*$pembagi,2),'TBLR',0,'C');
	$this->Cell(14,4.5,($FH12 != 0) ? round($ATA12bulan['OT']/$FH12*$pembagi,2) : 0,'TBLR',0,'C',($FH12 =! 0) ? 0 : 1);
	$this->Cell(11,4.5,(($actype != "B737-CL") && ($actype != "A330-200")) ? round($alertlevel['OT'],2) : "",'TBLR',0,'C',(($actype != "B737-CL") && ($actype != "A330-200")) ? 0 : 1);
	$this->Cell(12,4.5,(($actype != "B737-CL") && ($FH[$bulan[2]] != 0) && ($FH[$bulan[1]] != 0) && ($FH[$bulan[0]])) ? alertstatus(round($ATApirep[$bulan[2]]['OT']/$FH[$bulan[2]]*$pembagi,2),round($ATApirep[$bulan[1]]['OT']/$FH[$bulan[1]]*$pembagi,2),round($ATApirep[$bulan[0]]['OT']/$FH[$bulan[0]]*$pembagi,2),$alertlevel['OT']) : "",'TBLR',0,'C',($actype != "B737-CL") ? 0 : 1);
	$this->Cell(12,4.5,(($FH[$bulan[0]] != 0) && ($FH[$bulan[1]] != 0) && ($FH[$bulan[2]] != 0)) ? alerttrend($ATApirep[$bulan[2]]['OT']/$FH[$bulan[2]]*$pembagi,$ATApirep[$bulan[1]]['OT']/$FH[$bulan[1]]*$pembagi,$ATApirep[$bulan[0]]['OT']/$FH[$bulan[0]]*$pembagi) : "",'TBLR',0,'C');
	$this->Ln();
}

}
  $periode = isset($_REQUEST["periode"]) ? substr($_REQUEST["periode"],0,7) : "";
  $actype = isset($_REQUEST["actype"]) ? $_REQUEST["actype"] : "";
  $page = isset($_REQUEST["page"]) ? $_REQUEST["page"] : "";

  	$tahun = substr($periode,0,4);
	$bulanalert = substr($periode,-2,2);
	if ($bulanalert <= 06){
		//$tahun = $tahun - 1;
		$timeawal = ($tahun-1)."-01";
		$timeakhir = ($tahun-1)."-12";
		$predetalerlevel = $tahun."-01";
	} else {
		$timeawal = ($tahun - 1)."-07";
		$timeakhir = $tahun."-06";
		$predetalerlevel = $tahun."-07";
	}	
	//die(print_r($periode));
	$TE = connectimesysTE();
	$FH = queryFH($periode,$actype);//
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
	$bulan = array_reverse($bulan);

	
	$FH12bulan = queryFH12(($tahun-1)."-12",$actype,12);
	$FH12 = array_sum($FH12bulan);
	$keys12bulan = array_keys($FH12bulan);
	$jmlhblnyglalu = count($keys12bulan);
	$keys12bulan[11] = $keys12bulan[$jmlhblnyglalu-1];

	$FC = queryFC12rev($periode,$actype);
	$FC12 = array_sum(queryFC12rev(($tahun-1)."-12",$actype,12));//

	$ATAdelay = ATAdelay($bulan[2],$bulan[0],$actype);
	$ATAdelay12bulan = ATAdelay12($keys12bulan[11],$keys12bulan[0],$actype);
	$alertleveldelay = alertdelay($timeawal,$timeakhir,$actype);
	if (is_array($ATAdelay)) {
	foreach ($ATAdelay as $k => $v){
		$newATAdelay[$k]['OT'] = 0;
		foreach ($v as $key => $value){
			if ($key < '21'){
				$newATAdelay[$k]['OT'] += $value;
			} else {
				$newATAdelay[$k][$key] = $value;
			}
		}
	}
	} else {
		$newATAdelay[0][0] = 0;
	}
	$newATAdelay12bulan['OT'] = 0;
	if (is_array($ATAdelay12bulan)) {
	foreach ($ATAdelay12bulan as $k => $v){
		if ($k < '21'){
			$newATAdelay12bulan['OT'] += $v;
		} else {
			$newATAdelay12bulan[$k] = $v;
		}
	}
	}
	//die(print_r($newATAdelay));

	$ATA12bulan = ATA12($keys12bulan[11],$keys12bulan[0],$actype);//die(print_r($ATA12bulan));
	
	$ATApirep = ATA($bulan[2],$bulan[0],$actype);//
		
	$alertlevel = alert($timeawal,$timeakhir,$actype);//die(print_r($alertlevel));

	$preselectdelay = preselectalertlevel($predetalerlevel,$actype,"ALD");
	$preselectpirep = preselectalertlevel($predetalerlevel,$actype,"ALP");
	//die(print_r($preselectdelay));
	//$connectAMS = connectimesys('imesys');
	$ATA = ATAdef();
	$ATAdesc = ATAdesc();
	//die(print_r($ATA));
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

$pdf=new PDF('P','mm','A4');
$pdf->SetLeftMargin(17);
//Column titles
$header='AIRCRAFT OPERATION SUMMARY';
//Data loading

//$data=$pdf->LoadData('countries.txt');
$pdf->SetFont('Arial','B',7);
$pdf->AddPage();
$pdf->head($actype,$FH,$FH12,$bulan,'TOTAL FLIGHT HOURS','PILOT REPORT',$tahun);
$pdf->SetFillColor(200);
$pdf->data($bulan,$ATApirep,$ATA12bulan,$alertlevel,$ATA,$ATAdesc,$FH,$FH12,1000,$actype,$preselectpirep);
$pdf->bln();
$pdf->SetY(265);
$pdf->Cell(187,6,"Page : ".$page,0,0,'R');
$pdf->SetFont('Arial','B',7);

$pdf->SetLineWidth(0.4);
$pdf->Line(17,30,199,30);
$pdf->Line(17,35,199,35);
$pdf->Line(17,42,109,42);
$pdf->Line(17,46,199,46);
$pdf->Line(57,54,199,54);
$pdf->Line(17,211.5,199,211.5);

$pdf->Line(17,30,17,211.5);
$pdf->Line(57,42,57,211.5);
$pdf->Line(109,42,109,211.5);
$pdf->Line(164,46,164,211.5);
$pdf->Line(199,30,199,211.5);

$pdf->SetLineWidth(0);
$pdf->AddPage();
$pdf->head($actype,$FC,$FC12,$bulan,'TOTAL REVENUE TAKE OFF','TECHNICAL DELAY > 15 MINUTES AND CANCELLATION',$tahun);
$pdf->data($bulan,$newATAdelay,$newATAdelay12bulan,$alertleveldelay,$ATA,$ATAdesc,$FC,$FC12,100,$actype,$preselectdelay);
$pdf->OT($bulan,$newATAdelay,$newATAdelay12bulan,$alertleveldelay,$ATA,$ATAdesc,$FC,$FC12,100,$actype);
$pdf->bln();
$pdf->SetY(265);
$pdf->Cell(187,6,"Page : ".substr($page,0,1).(substr($page,1,1) + 1),0,0,'R');

$pdf->SetLineWidth(0.4);
$pdf->Line(17,30,199,30);
$pdf->Line(17,35,199,35);
$pdf->Line(17,42,109,42);
$pdf->Line(17,46,199,46);
$pdf->Line(57,54,199,54);
$pdf->Line(17,216,199,216);

$pdf->Line(17,30,17,216);
$pdf->Line(57,42,57,216);
$pdf->Line(109,42,109,216);
$pdf->Line(164,46,164,216);
$pdf->Line(199,30,199,216);

//$pdf->AddPage();
//$pdf->ImprovedTable($header,$data);
//$pdf->AddPage();
//$pdf->FancyTable($header,$data);
$pdf->Output();
?> 