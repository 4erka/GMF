<?php

//include("../../FHC_REPORTS/get_monthly.php");
require('fpdf/fpdf.php');


	$periode = $_REQUEST['periode'];
	$actype = $_REQUEST['actype'];
	$page = $_REQUEST['page'];
	$group = isset($_REQUEST["groupby"]) ? $_REQUEST["groupby"] : "";
	include("function.php");

	if ($_REQUEST["groupby"] == "Engine") {
		$actype = engineaircraft($actype);
	}
	$numberofengine = ($actype == "B747-400") ? 4 : 2;
	$TE = connectimesysTE();
	$FH = queryFH12($periode,$actype,12);
	//$bulan = array_reverse(array_keys($FH));
	$bulan = array_reverse(array_slice(selectperiode(), array_search($periode,selectperiode()), 12));
	$FHrev = queryFH12rev($periode,$actype);
	$FC = queryFC12($periode,$actype,12);
	$FCrev = queryFC12rev($periode,$actype);
	$fleet = fleet($periode,$actype);
	$available = available($bulan[0],$bulan[11],$actype);
	$FH24 = queryFH12($periode,$actype,24);
	$FC24 = queryFC12($periode,$actype,24);
	$bulan12 = array_reverse(array_slice(selectperiode(), array_search($periode,selectperiode()), 24));
	$umurengine = queryFHengine($periode,$actype);

	$periodelastyear = (substr($periode,0,4) - 1)."-12";
	$FHlastyear = queryFH12($periodelastyear,$actype,12);
	$FClastyear = queryFC12($periodelastyear,$actype,12);
	$fleetlastyear = fleet($periodelastyear,$actype);
	//die(print_r($FHlastyear));
	//last year
	
	$engineremovaldata = apuremoval($periode,$actype);
	$engineremovallastyeardata = apuremoval12((substr($periode,0,4) - 1)."-01",$periodelastyear,$actype);
	$shopvisit = apushopvisit($periode,$actype);
	$shopvisitlast = apushopvisit12((substr($periode,0,4) - 1)."-01",$periodelastyear,$actype);
	$TSN = FHengineinitial($actype);$CSN = FCengineinitial($actype);
	$ifsddata = ifsd($periode,$actype);
	$ifsdlastyeardata = ifsdlastyear((substr($periode,0,4) - 1)."-01",$periodelastyear,$actype);
	$rto = rto($periode,$actype);
	$rtolastyear = rtolastyear((substr($periode,0,4) - 1)."-01",$periodelastyear,$actype);

	while ($Fengine = mysql_fetch_array($umurengine)){
		$FHengine[$Fengine["periode"]] = $Fengine["RevFH"] + $Fengine["NoRevFH"] + round(($Fengine["RevFHMin"] + $Fengine["NoRevFHMin"])/60,0);
		$TSN += ($FHengine[$Fengine["periode"]] * $numberofengine);
		$TSNengine[$Fengine["periode"]] = $TSN;
		$FCengine[$Fengine["periode"]] = $Fengine["RevFC"] + $Fengine["NoRevFC"];
		$CSN += ($FCengine[$Fengine["periode"]] * $numberofengine);
		$CSNengine[$Fengine["periode"]] = $CSN;
	}

	while ($engineremovaldata1 = mysql_fetch_array($engineremovaldata)){
		$engineremoval[$engineremovaldata1["Reason"]][$engineremovaldata1["periode"]] = $engineremovaldata1["jumlah"];
	}

	while ($engineremovallastyeardata1 = mysql_fetch_array($engineremovallastyeardata)){
		$engineremovallastyear[$engineremovallastyeardata1["Reason"]][$engineremovallastyeardata1["periode"]] = $engineremovallastyeardata1["jumlah"];
	}

	while ($svdata = mysql_fetch_array($shopvisit))
	{
		$SV[$svdata['periode']] = $svdata['jumlah'];
	}

	while ($svlastdata = mysql_fetch_array($shopvisitlast))
	{
		$SVlast[$svlastdata['periode']] = $svlastdata['jumlah'];
	}

	//die(print_r($rtodata));

	foreach ($bulan12 as $k => $v){
		
		$engineremoval["Basic Planned"][$v] = isset($engineremoval["Basic Planned"][$v]) ? $engineremoval["Basic Planned"][$v] : 0;
		$engineremoval["Basic UnPlanned"][$v] = isset($engineremoval["Basic UnPlanned"][$v]) ? $engineremoval["Basic UnPlanned"][$v] : 0;
		$engineremoval["Non Basic Planned"][$v] = isset($engineremoval["Non Basic Planned"][$v]) ? $engineremoval["Non Basic Planned"][$v] : 0;
		$engineremoval["Non Basic UnPlanned"][$v] = isset($engineremoval["Non Basic UnPlanned"][$v]) ? $engineremoval["Non Basic UnPlanned"][$v] : 0;
		$SV[$v] = isset($SV[$v]) ? $SV[$v] : 0;
		$bulansebelumnya[$k] = isset($bulan[$k-1]) ? $bulan[$k-1] : 0;
		$ifsd[$v] = isset($ifsd[$v]) ? $ifsd[$v] : 0;
		$rtodat[$v] = isset($rto[$v]) ? $rto[$v] : 0;
		//$Convenience[] = $engineremoval["Convenience"][$v];		
	}
		//$satu = $Convenience;

		$engineremovallastyear["Convenience"] = isset($engineremovallastyear["Convenience"]) ? array_sum($engineremovallastyear["Convenience"]) : 0;
		$engineremovallastyear["Campaign"] = isset($engineremovallastyear["Campaign"]) ? array_sum($engineremovallastyear["Campaign"]) : 0;
		$engineremovallastyear["Predefined Basic Planned"] = isset($engineremovallastyear["Predefined Basic Planned"]) ? array_sum($engineremovallastyear["Predefined Basic Planned"]) : 0;
		$engineremovallastyear["Predefined Basic UnPlanned"] = isset($engineremovallastyear["Predefined Basic UnPlanned"]) ? array_sum($engineremovallastyear["Predefined Basic UnPlanned"]) : 0;
		$engineremovallastyear["Predefined NonBasic Planned"] = isset($engineremovallastyear["Predefined NonBasic Planned"]) ? array_sum($engineremovallastyear["Predefined NonBasic Planned"]) : 0;
		$engineremovallastyear["Predefined NonBasic UnPlanned"] = isset($engineremovallastyear["Predefined NonBasic UnPlanned"]) ? array_sum($engineremovallastyear["Predefined NonBasic UnPlanned"]) : 0;
		$engineremovallastyear["Premature Basic Planned"] = isset($engineremovallastyear["Premature Basic Planned"]) ? array_sum($engineremovallastyear["Premature Basic Planned"]) : 0;
		$engineremovallastyear["Premature Basic UnPlanned"] = isset($engineremovallastyear["Premature Basic UnPlanned"]) ? array_sum($engineremovallastyear["Premature Basic UnPlanned"]) : 0;
		$engineremovallastyear["Premature NonBasic Planned"] = isset($engineremovallastyear["Premature NonBasic Planned"]) ? array_sum($engineremovallastyear["Premature NonBasic Planned"]) : 0;
		$engineremovallastyear["Premature NonBasic UnPlanned"] = isset($engineremovallastyear["Premature NonBasic UnPlanned"]) ? array_sum($engineremovallastyear["Premature NonBasic UnPlanned"]) : 0;
		$engineremovallastyear["Basic Planned"] = isset($engineremovallastyear["Basic Planned"]) ? array_sum($engineremovallastyear["Basic Planned"]) : 0;
		$engineremovallastyear["Basic UnPlanned"] = isset($engineremovallastyear["Basic UnPlanned"]) ? array_sum($engineremovallastyear["Basic UnPlanned"]) : 0;
		$engineremovallastyear["Non Basic Planned"] = isset($engineremovallastyear["Non Basic Planned"]) ? array_sum($engineremovallastyear["Non Basic Planned"]) : 0;
		$engineremovallastyear["Non Basic UnPlanned"] = isset($engineremovallastyear["Non Basic UnPlanned"]) ? array_sum($engineremovallastyear["Non Basic UnPlanned"]) : 0;
		$SVlastdata = isset($SVlast) ? array_sum($SVlast) : 0;
		$ifsdlastyear = isset($ifsdlastyear) ? array_sum($ifsdlastyear) : 0;
		$rtolastyeardata = is_array($rtolastyear) ? array_sum($rtolastyear) : 0;

	$enginetype = apuaircraft($actype);
	
	$manufacture = (($actype == "A330-200") || ($actype == "A330-300") ? "AIRBUS" : "BOEING")." ".((strpos($actype,",")) ? "B737-Classic" : $actype);
	//die(print_r($manufacture));
class PDF extends FPDF
{
function Rotate($angle,$x=-1,$y=-1) {

	if($x==-1)
	$x=$this->x;
	if($y==-1)
	$y=$this->y;
//if($this->angle!=0)
//$this->_out('Q');
//$this->angle=$angle;
	if($angle!=0)

	{
		$angle*=M_PI/180;
		$c=cos($angle);
		$s=sin($angle);
		$cx=$x*$this->k;
		$cy=($this->h-$y)*$this->k;

		$this->_out(sprintf('q %.5f %.5f %.5f %.5f %.2f %.2f cm 1 0 0 1 %.2f %.2f cm',$c,$s,-$s,$c,$cx,$cy,-$cx,-$cy));
	}
}


//Page header
function Headercus($actype,$periode,$enginetype,$manufacture)
{
$L = 14;
    //Logo
	$this->SetLeftMargin(25);
	$this->Ln(10);
	$this->SetFont('Arial','B',12);
	
	//Baris ke-1
	$this->SetFillColor(150,150,150);
	$this->SetDrawColor(0,0,0);
	$this->SetLineWidth(0.5);
	$this->Cell($L*13+60,5,'APU OPERATION SUMMARY '.(substr($periode,0,4) - 1).' - '.(substr($periode,0,4)),'TLR',1,'C');
	$this->SetFont('Arial','B',10);
	$this->Cell($L*13+60,4,$enginetype,'LR',1,'C');
	$this->SetFont('Arial','B',8);
		
		$time = $_REQUEST['periode'];
		$actype = $_REQUEST['actype'];
		//$time = $periode."-01";
		//$actype = $actype;
		$bulanEx = explode("-",$time);
		$bln = $bulanEx[1];
		$year = $bulanEx[0];
		$blnName = array("JAN","FEB","MAR","APR","MAY","JUN","JUL","AUG","SEP","OCT","NOV","DEC","JAN","FEB","MAR","APR","MAY","JUN","JUL","AUG","SEP","OCT","NOV","DES");
		$dataArray = array_slice($blnName,$bln,12);
		
	//	$this->Cell(1.7,0.6,$year-1 ,'LBR',0,'C',0);
		

	$this->Cell(60,4,$manufacture,1,0,'C');
	$this->Cell($L,4,'',1,0,'C');
	
	$this->Cell($L*12,4,($year-1).' - '.$year,1,1,'C');

	$this->Cell(60,4,'',1,0,'L');
	$this->Cell($L,4,$year-1,1,0,'C');
	
	for($i=0;$i<12;$i++)
	{
		$this->Cell($L,4,$dataArray[$i],1,0,'C');
	}
	$this->Ln();

}

//Page footer
function Footerpage($page)
{
    //Position at 1.5 cm from bottom
    $this->SetY(-15);
    //Arial italic 8
    $this->SetFont('Arial','',8);
    //Page number
    $this->Cell(0,10,'Page '.$page.'/{nb}',0,0,'C');
}
}

//Instanciation of inherited class
$pdf=new PDF('L');
$pdf->SetMargins(0.5,1,0.5);
$pdf->AliasNbPages();
$pdf->AddPage();
//$pdf->SetAutoPageBreak(true,10);
$pdf->SetFont('arial','b',7);
$pdf->SetLeftMargin(25);

$tinggi = 3.5;
$L = 14;
$getX = $pdf->GetX();
$getY = $pdf->GetY();
$panjang = $tinggi*54-$tinggi/2;
	$pdf->SetFillColor(200);
	$pdf->SetDrawColor(0,0,0);
	$pdf->SetLineWidth(0.5);
	
	$pdf->SetLineWidth(0.3);
	$pdf->Headercus($actype,$periode,$enginetype,$manufacture);
	$pdf->Cell(60,$tinggi,'NUMBER OF APU IN FLEET','TBLR',0,'L');
	$pdf->SetFont('arial','',7);
	$pdf->Cell($L,$tinggi,(isset($FHlastyear)) ? round(array_sum($fleetlastyear)/12,0) : 0,'TBLR',0,'C');
	/*for($i=1;$i<=12;$i++)
	{*/
	foreach($bulan as $key => $value)
	{
		$pdf->Cell($L,$tinggi,($FH[$value] <> 0) ? ($fleet[$value]) : 0,'TBLR',0,'C');
		$xaxis[] = bulan($value);
	}

	$pdf->SetFont('arial','B',7);
	$pdf->Ln();
	$pdf->Cell(60,$tinggi,'','TBLR',0,'L');
	$pdf->SetFont('arial','',7);
	$pdf->Cell($L,$tinggi,'','TBLR',0,'C');
	for($i=1;$i<=12;$i++)
	{
		$pdf->Cell($L,$tinggi,'','TBLR',0,'C');
	}

	$pdf->SetFont('arial','B',7);
	$pdf->Ln();
	$pdf->Cell(60,$tinggi,'APU HOUR','TBLR',0,'L');
	$pdf->SetFont('arial','',7);
	$pdf->Cell($L,$tinggi,(isset($FHlastyear)) ? (round(array_sum($FHlastyear) * 1.2,0)) : 0,'TBLR',0,'C');
	foreach($bulan as $key => $value)
	{
		$pdf->Cell($L,$tinggi,($FH[$value]) ? (round($FH[$value] * 1.2,0)) : 0,'TBLR',0,'C');
	
	}

	$pdf->SetFont('arial','B',7);
	$pdf->Ln();
	$pdf->Cell(60,$tinggi,'APU CYCLE','TBLR',0,'L');
	$pdf->SetFont('arial','',7);
	$pdf->Cell($L,$tinggi,(isset($FClastyear)) ? (array_sum($FClastyear)) : 0,'TBLR',0,'C');
	foreach($bulan as $key => $value)
	{
		$pdf->Cell($L,$tinggi,($FC[$value] <> 0) ? (($FC[$value])) : 0,'TBLR',0,'C');
	
	}

	
	$pdf->SetFont('arial','B',7);
	$pdf->Ln();
	$pdf->Cell(60,$tinggi,'','TBLR',0,'L');
	$pdf->SetFont('arial','',7);
	$pdf->Cell($L,$tinggi,'','TBLR',0,'C');
	for($i=1;$i<=12;$i++)
	{
		$pdf->Cell($L,$tinggi,'','TBLR',0,'C');
	}
	
	$pdf->SetFont('arial','B',7);
	$pdf->Ln();
	//$pdf->Cell(10,$tinggi,'','LR',0,'L');
	$pdf->Cell(60,$tinggi,'BASIC - PLANNED','TBLR',0,'L');
	$pdf->SetFont('arial','',7);
	$pdf->Cell($L,$tinggi, $engineremovallastyear["Basic Planned"],'TBLR',0,'C');
	foreach($bulan as $key => $value)
	{
		$pdf->Cell($L,$tinggi,$engineremoval["Basic Planned"][$value],'TBLR',0,'C');
	}
	//die(print_r($FH24));
	$pdf->SetFont('arial','B',7);
	$pdf->Ln();
	//$pdf->Cell(10,$tinggi,'','LR',0,'L');
	$pdf->Cell(60,$tinggi,'                     - UNPLANNED','TBLR',0,'L');
	$pdf->SetFont('arial','',7);
	$pdf->Cell($L,$tinggi,$engineremovallastyear["Basic UnPlanned"],'TBLR',0,'C');
	foreach($bulan as $key => $value)
	{
		$pdf->Cell($L,$tinggi,$engineremoval["Basic UnPlanned"][$value],'TBLR',0,'C');
	}

	$pdf->SetFont('arial','B',7);
	$pdf->Ln();
	//$pdf->Cell(10,$tinggi,'','LR',0,'L');
	$pdf->Cell(60,$tinggi,'NON BASIC - PLANNED','TBLR',0,'L');
	$pdf->SetFont('arial','',7);
	$pdf->Cell($L,$tinggi, $engineremovallastyear["Non Basic Planned"],'TBLR',0,'C');
	foreach($bulan as $key => $value)
	{
		$pdf->Cell($L,$tinggi,$engineremoval["Non Basic Planned"][$value],'TBLR',0,'C');
	}
	//die(print_r($FH24));
	$pdf->SetFont('arial','B',7);
	$pdf->Ln();
	//$pdf->Cell(10,$tinggi,'','LR',0,'L');
	$pdf->Cell(60,$tinggi,'                     - UNPLANNED','TBLR',0,'L');
	$pdf->SetFont('arial','',7);
	$pdf->Cell($L,$tinggi,$engineremovallastyear["Non Basic UnPlanned"],'TBLR',0,'C');
	foreach($bulan as $key => $value)
	{
		$pdf->Cell($L,$tinggi, $engineremoval["Non Basic UnPlanned"][$value],'TBLR',0,'C');
	}

	

	$pdf->SetFont('arial','B',7);
	$pdf->Ln();
$getRX = $pdf->GetX();
$getRY = $pdf->GetY();
	$pdf->Cell(60,$tinggi,'','TBLR',0,'L');
	$pdf->SetFont('arial','',7);
	$pdf->Cell($L,$tinggi,'','TBLR',0,'C');
	for($i=1;$i<=12;$i++)
	{
		$pdf->Cell($L,$tinggi,'','TBLR',0,'C');
	}

	$pdf->SetFont('arial','B',7);
	$pdf->Ln();
	$pdf->Cell(60,$tinggi,'TOTAL UNPLANNED APU REMOVALS','TBLR',0,'L');
	$pdf->SetFont('arial','',7);
	$pdf->Cell($L,$tinggi, ($engineremovallastyear["Non Basic UnPlanned"] + $engineremovallastyear["Basic UnPlanned"]),'TBLR',0,'C');
	foreach($bulan as $key => $value)
	{
		$pdf->Cell($L,$tinggi,  ($engineremoval["Basic UnPlanned"][$value] + $engineremoval["Non Basic UnPlanned"][$value]),'TBLR',0,'C');
	}

	$pdf->SetFont('arial','B',7);
	$pdf->Ln();
	$pdf->Cell(60,$tinggi,'      - UAR RATE','TBLR',0,'L');
	$pdf->SetFont('arial','',7);
	$pdf->Cell($L,$tinggi, (isset($FHlastyear)) ? round(($engineremovallastyear["Non Basic UnPlanned"] + $engineremovallastyear["Basic UnPlanned"])/(array_sum($FHlastyear) * 1.2)*1000,3) : "",'TBLR',0,'C');
	//die(print_r($FH24));
foreach($bulan as $key => $value)
	{
		$pdf->Cell($L,$tinggi, (!empty($FH[$value]) ? round((($engineremoval["Basic UnPlanned"][$value] + $engineremoval["NonBasic UnPlanned"][$value])/($FH[$value] * 1.2)*1000),3) : 0),'TBLR',0,'C');

		$uer[] =  !empty($FH[$value]) ? round((($engineremoval["Basic UnPlanned"][$value] + $engineremoval["NonBasic UnPlanned"][$value])/($FH[$value] * 1.2)*1000),3) : 0;
	}

	$pdf->SetFont('arial','B',7);
	$pdf->Ln();
	$pdf->Cell(60,$tinggi,'      - 3 MO. RATE','TBLR',0,'L');
	$pdf->SetFont('arial','',7);
	$pdf->Cell($L,$tinggi,'','TBLR',0,'C');
	foreach($bulan as $key => $value)
	{
		$pdf->Cell($L,$tinggi, (!empty($FH24[$bulan12[$key+10]]) ? round((($engineremoval["Basic UnPlanned"][$bulan12[$key+10]] + $engineremoval["Non Basic UnPlanned"][$bulan12[$key+10]] + $engineremoval["Basic UnPlanned"][$bulan12[$key+11]] + $engineremoval["Non Basic UnPlanned"][$bulan12[$key+11]] + $engineremoval["Basic UnPlanned"][$bulan12[$key+12]] + $engineremoval["Non Basic UnPlanned"][$bulan12[$key+12]])/(($FH24[$bulan12[$key+10]] + $FH24[$bulan12[$key+11]] + $FH24[$bulan12[$key+12]]) * 1.2)*1000),3) : 0),'TBLR',0,'C');
	}
	
	$pdf->SetFont('arial','B',7);
	$pdf->Ln();
	$pdf->Cell(60,$tinggi,'','TBLR',0,'L');
	$pdf->SetFont('arial','',7);
	$pdf->Cell($L,$tinggi,'','TBLR',0,'C');
	for($i=1;$i<=12;$i++)
	{
		$pdf->Cell($L,$tinggi,'','TBLR',0,'C');
	}

	$pdf->SetFont('arial','B',7);
	$pdf->Ln();
	$pdf->Cell(60,$tinggi,'TOTAL SHOP VISITS','TBLR',0,'L');
	$pdf->SetFont('arial','',7);
	$pdf->Cell($L,$tinggi,($SVlastdata),'TBLR',0,'C');
	foreach($bulan as $key => $value)
	{
		$pdf->Cell($L,$tinggi, ($SV[$value]),'TBLR',0,'C');
	}

	$pdf->SetFont('arial','B',7);
	$pdf->Ln();
	$pdf->Cell(60,$tinggi,'      - RATE','TBLR',0,'L');
	$pdf->SetFont('arial','',7);
	$pdf->Cell($L,$tinggi, (isset($FHlastyear)) ? round((($SVlastdata)/(array_sum($FHlastyear)*1.2)*1000),3) : "",'TBLR',0,'C');
	foreach($bulan as $key => $value)
	{
		$shopvisitrate[$value] = !empty($FH[$value]) ? round((($SV[$value])/($FH[$value] * 1.2)*1000),3) : 0;
		$pdf->Cell($L,$tinggi, $shopvisitrate[$value],'TBLR',0,'C');
		$shopvisitgraph[] = $shopvisitrate[$value];
	}

	$pdf->SetFont('arial','B',7);
	$pdf->Ln();
	$pdf->Cell(60,$tinggi,'      - 3 MO. RATE','TBLR',0,'L');
	$pdf->SetFont('arial','',7);
	$pdf->Cell($L,$tinggi,'','TBLR',0,'C');
	foreach($bulan as $key => $value)
	{
		$pdf->Cell($L,$tinggi, (!empty($FH24[$bulan12[$key+10]]) ? round((($SV[$bulan12[$key+10]] + $SV[$bulan12[$key+11]] +  $SV[$bulan12[$key+12]])/(($FH24[$bulan12[$key+10]] + $FH24[$bulan12[$key+11]] + $FH24[$bulan12[$key+12]]) * 1.2)*1000),3) : 0),'TBLR',0,'C');
	}

	$pdf->SetFont('arial','B',7);
	$pdf->Ln();
	$pdf->Cell(60,$tinggi,'','TBLR',0,'L');
	$pdf->SetFont('arial','',7);
	$pdf->Cell($L,$tinggi,'','TBLR',0,'C');
	for($i=1;$i<=12;$i++)
	{
		$pdf->Cell($L,$tinggi,'','TBLR',0,'C');
	}

	$pdf->SetFont('arial','B',7);
	$pdf->Ln();
	$pdf->Cell(60,$tinggi,'TOTAL APU REMOVALS','TBLR',0,'L');
	$pdf->SetFont('arial','',7);
	$pdf->Cell($L,$tinggi,($engineremovallastyear["Basic Planned"] + $engineremovallastyear["Basic UnPlanned"] + $engineremovallastyear["Non Basic Planned"] + $engineremovallastyear["Non Basic UnPlanned"]),'TBLR',0,'C');
	foreach($bulan as $key => $value)
	{
		$pdf->Cell($L,$tinggi,($engineremoval["Basic Planned"][$value] + $engineremoval["Basic UnPlanned"][$value] + $engineremoval["Non Basic Planned"][$value] + $engineremoval["Non Basic UnPlanned"][$value]),'TBLR',0,'C');
	}

	$pdf->SetFont('arial','B',7);
	$pdf->Ln();
	$pdf->Cell(60,$tinggi,'      - RATE/1000 APU HOURS','TBLR',0,'L');
	$pdf->SetFont('arial','',7);
	$pdf->Cell($L,$tinggi, (isset($FHlastyear)) ? round((($engineremovallastyear["Basic Planned"] + $engineremovallastyear["Basic UnPlanned"] + $engineremovallastyear["Non Basic Planned"] + $engineremovallastyear["Non Basic UnPlanned"])/(array_sum($FHlastyear)* 1.2)*1000),3) : "",'TBLR',0,'C');
	foreach($bulan as $key => $value)
	{
		$engremovalrate[$value] = !empty($FH[$value]) ? round((($engineremoval["Basic Planned"][$value] + $engineremoval["Basic UnPlanned"][$value] + $engineremoval["Non Basic Planned"][$value] + $engineremoval["Non Basic UnPlanned"][$value])/($FH[$value] * 1.2)*1000),3) : 0;
		$pdf->Cell($L,$tinggi, $engremovalrate[$value],'TBLR',0,'C');
		$engremoval[] = $engremovalrate[$value];
	}

	$pdf->SetFont('arial','B',7);
	$pdf->Ln();
	$pdf->Cell(60,$tinggi,'      - 12 MO. RATE','TBLR',0,'L');
	$pdf->SetFont('arial','',7);
	$pdf->Cell($L,$tinggi,'','TBLR',0,'C');
	foreach ($bulan as $key => $value)
	{
		$convenience = 0;$campaign = 0;$predbasplan = 0;$predbasunplan = 0;$prednonbasplan = 0;$prednonbaseunplan = 0;$prembasplan = 0;$prembasunplan = 0;$premnonbasplan = 0;$premnonbasunplan = 0;$FHengremove = 0;
	for($i=1;$i<13;$i++)
	{
		$predbasplan += $engineremoval["Basic Planned"][$bulan12[$key+$i]];
		$predbasunplan += $engineremoval["Basic UnPlanned"][$bulan12[$key+$i]];
		$prednonbasplan += $engineremoval["Non Basic Planned"][$bulan12[$key+$i]];
		$prednonbaseunplan += $engineremoval["Non Basic UnPlanned"][$bulan12[$key+$i]];
		$FHengremove += $FH24[$bulan12[$key+$i]];
	}
	$rate = !empty($FHengremove) ? round(($predbasplan + $predbasunplan + $prednonbasplan + $prednonbaseunplan)/($FHengremove * 1.2)*1000,3) : 0;
	
		$pdf->Cell($L,$tinggi,$rate,'TBLR',0,'C');
	}
	$pdf->Ln();
	$pdf->Text(260,190,'Page : '.$page);

//$pdf->AddPage();
$enginetitle = "APU";
$ratetitle = "UAR";
include ('EOSgrafik_new.php');
$pdf->Image($fileName2,40,110);
	$pdf->Ln();
$pdf->Text(260,190,'Page : '.$page);
$pdf->Output();
?>