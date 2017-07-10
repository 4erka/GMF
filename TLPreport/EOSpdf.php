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
function fleet($bulan,$fleet,$fleetlastyear,$numberofengine){
	$this->Cell(53,6,'NUMBER OF ENGINES IN FLEET','LBRT',0,'L',0);
	$this->Cell(15,6,round(array_sum($fleetlastyear)/12*$numberofengine,0),'LBR',0,'C',0);
	foreach ($bulan as $k => $v){
		$this->Cell(15,6,($fleet[$value] * $numberofengine),'TLRB',0,'C');
	}
	//$this->Cell(27,6,round(array_sum($fleet)/12,0),'LBR',0,'C');
	$this->Ln();
}
function kosong($bulan){
	$this->Cell(53,6,'NUMBER OF ENGINES IN FLEET','LBRT',0,'L',0);
	$this->Cell(15,6,round(array_sum($fleetlastyear)/12*$numberofengine,0),'LBR',0,'C',0);
	foreach ($bulan as $k => $v){
		$this->Cell(15,6,($fleet[$value] * $numberofengine),'TLRB',0,'C');
	}
}
function hourscum($bulan,$TSNengine){
	$this->Cell(53,6,'HOURS - CUMULATIVE','LBRT',0,'L',0);
	$this->Cell(15,6,'','LBR',0,'C',0);
	foreach ($bulan as $k => $v){
		$this->Cell(15,6,$TSNengine[$v],'TLRB',0,'C');
	}
	//$this->Cell(27,6,round(array_sum($available)/365,2),'LBR',0,'C');
	$this->Ln();
}
function hoursoperated($bulan,$FHlastyear,$numberofengine,$FH){
	$this->Cell(53,6,'HOURS - OPERATED','LBRT',0,'L',0);
	$this->Cell(15,6,(array_sum($FHlastyear) * $numberofengine),'LBR',0,'C',0);
	foreach ($bulan as $k => $value){
		$this->Cell(15,6,($FH[$value] * $numberofengine),'TLRB',0,'C');
	}
	//$this->Cell(27,6,array_sum($available),'LBR',0,'C');
	$this->Ln();
}

function ifsd($bulan,$ifsdlastyear,$ifsd){
	$this->Cell(53,6,'IN-FLIGHT SHUTDOWN','LBRT',0,'L',0);
	$this->Cell(15,6,$ifsdlastyear,'LBR',0,'C',0);
	foreach ($bulan as $k => $value){
		$this->Cell(15,6,$ifsd[$value],'TLRB',0,'C');
	}
	//$this->Cell(27,6,array_sum($FHrev),'LBR',0,'C');
	$this->Ln();
}
function ifsdrate($bulan,$ifsdlastyear,$ifsd,$numberofengine,$FH,$FHlastyear){
	$this->Cell(53,6,'    - RATE','LBRT',0,'L',0);
	$this->Cell(15,6,round(($ifsdlastyear/(array_sum($FHlastyear)*$numberofengine)*1000),3),'LBR',0,'C',0);
	foreach ($bulan as $k => $value){
		$this->Cell(15,6,round(($ifsd[$value]/($FH[$value]*$numberofengine)*1000),3),'TLRB',0,'C');
	}
	//$this->Cell(27,6,array_sum($FC),'LBR',0,'C');
	$this->Ln();
}
function ifsdrate3mon($bulan,$ifsd,$FH24){
	$this->Cell(53,6,'    - 3 MO. RATE','LBRT',0,'L',0);
	$this->Cell(15,6,'','LBR',0,'C',0);
	foreach ($bulan as $key => $value){
		$this->Cell(15,6,round((($ifsd[$bulan12[$key+10]] + $ifsd[$bulan12[$key+11]] + $ifsd[$bulan12[$key+12]])/($FH24[$bulan12[$key+10]] + $FH24[$bulan12[$key+11]] + $FH24[$bulan12[$key+12]]) * 1000),3),'TLRB',0,'C');
	}
	//$this->Cell(27,6,array_sum($FCrev),'LBR',0,'C');
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
		$this->Cell(15,6,isset($techdelay[$value]) ? round(($FCrev[$value] - $techdelay[$value] - $cancel[$value])/$FCrev[$value] * 100,2) : 0,'TLRB',0,'C');
	}
	$this->Cell(27,6,round((array_sum($FCrev) - array_sum($techdelay) - array_sum($cancel))/array_sum($FCrev) * 100,2),'LBR',0,'C');
	$this->Ln();
}
}
  $periode = isset($_REQUEST["periode"]) ? $_REQUEST["periode"] : "";
  $actype = isset($_REQUEST["actype"]) ? $_REQUEST["actype"] : "";

	$numberofengine = ($actype == "B747-400") ? 4 : 2;
	$TE = connectimesysTE();
	$FH = queryFH12($periode,$actype,12);
	$bulan = array_reverse(array_keys($FH));
	$FHrev = queryFH12rev($periode,$actype);
	$FC = queryFC12($periode,$actype,12);
	$FCrev = queryFC12rev($periode,$actype);
	$fleet = fleet($periode,$actype);
	$available = available($bulan[0],$bulan[11],$actype);
	$FH24 = queryFH12($periode,$actype,24);
	$FC24 = queryFC12($periode,$actype,24);
	$bulan12 = array_reverse(array_keys($FH24));
	$umurengine = queryFHengine($periode,$actype);

	$periodelastyear = (substr($periode,0,4) - 1)."-12";
	$FHlastyear = queryFH12($periodelastyear,$actype,12);
	$FClastyear = queryFC12($periodelastyear,$actype,12);
	$fleetlastyear = fleet($periodelastyear,$actype);
	//die(print_r($bulan12));

	//last year
	
	$engineremovaldata = engineremoval($periode,$actype);
	$engineremovallastyeardata = engineremoval12((substr($periode,0,4) - 1)."-01",$periodelastyear,$actype);
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

	while ($ifsddata1 = mysql_fetch_array($ifsddata)){
		$ifsd[$ifsddata1["periode"]] = $ifsddata1["jumlah"];
	}

	while ($ifsdlastyeardata1 = mysql_fetch_array($ifsdlastyeardata)){
		$ifsdlastyear[$ifsdlastyeardata1["periode"]] = $ifsdlastyeardata1["jumlah"];
	}
	//die(print_r($ifsdlastyear));
	while ($rtoly = mysql_fetch_array($rtolastyear)){
		$rtolastyeardata[$rtoly["periode"]] = $rtoly["jumlah"];
	}

	while ($rtodata = mysql_fetch_array($rto)){
		$rto[$rtodata["periode"]] = $rto["jumlah"];
	}
	//die(print_r($rtodata));	
	
foreach ($bulan12 as $k => $v){
		$engineremoval["Convenience"][$v] = isset($engineremoval["Convenience"][$v]) ? $engineremoval["Convenience"][$v] : 0;
		$engineremoval["Campaign"][$v] = isset($engineremoval["Campaign"][$v]) ? $engineremoval["Campaign"][$v] : 0;
		$engineremoval["Predefined Basic Planned"][$v] = isset($engineremoval["Predefined Basic Planned"][$v]) ? $engineremoval["Predefined Basic Planned"][$v] : 0;
		$engineremoval["Predefined Basic UnPlanned"][$v] = isset($engineremoval["Predefined Basic UnPlanned"][$v]) ? $engineremoval["Predefined Basic UnPlanned"][$v] : 0;
		$engineremoval["Predefined NonBasic Planned"][$v] = isset($engineremoval["Predefined NonBasic Planned"][$v]) ? $engineremoval["Predefined NonBasic Planned"][$v] : 0;
		$engineremoval["Predefined NonBasic UnPlanned"][$v] = isset($engineremoval["Predefined NonBasic UnPlanned"][$v]) ? $engineremoval["Predefined NonBasic UnPlanned"][$v] : 0;
		$engineremoval["Premature Basic Planned"][$v] = isset($engineremoval["Premature Basic Planned"][$v]) ? $engineremoval["Premature Basic Planned"][$v] : 0;
		$engineremoval["Premature Basic UnPlanned"][$v] = isset($engineremoval["Premature Basic UnPlanned"][$v]) ? $engineremoval["Premature Basic UnPlanned"][$v] : 0;
		$engineremoval["Premature NonBasic Planned"][$v] = isset($engineremoval["Premature NonBasic Planned"][$v]) ? $engineremoval["Premature NonBasic Planned"][$v] : 0;
		$engineremoval["Premature NonBasic UnPlanned"][$v] = isset($engineremoval["Premature NonBasic UnPlanned"][$v]) ? $engineremoval["Premature NonBasic UnPlanned"][$v] : 0;
		$bulansebelumnya[$k] = isset($bulan[$k-1]) ? $bulan[$k-1] : 0;
		$ifsd[$v] = isset($ifsd[$v]) ? $ifsd[$v] : 0;
		$rtodat[$v] = isset($rto[$v]) ? $rto[$v] : 0;
	}

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
		$ifsdlastyear = isset($ifsdlastyear) ? array_sum($ifsdlastyear) : 0;
		$rtolastyeardata = isset($rtolastyeardata) ? array_sum($rtolastyeardata) : 0;

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
$header='ENGINE OPERATION SUMMARY';
//Data loading

//$data=$pdf->LoadData('countries.txt');
$pdf->SetFont('Arial','B',14);
$pdf->AddPage();
$pdf->BasicTable($header,$actype,$periode);
$pdf->bln($bulan,$periode);
$pdf->fleet($bulan,$fleet,$fleetlastyear,$numberofengine);
$pdf->kosong($bulan);
$pdf->hourscum($bulan,$TSNengine);
$pdf->hoursoperated($bulan,$FHlastyear,$numberofengine,$FH);
$pdf->kosong($bulan);
$pdf->hourscum($bulan,$CSNengine);
$pdf->hoursoperated($bulan,$FClastyear,$numberofengine,$FC);
$pdf->kosong($bulan);
$pdf->ifsd($bulan,$ifsdlastyear,$ifsd);
$pdf->ifsdrate($bulan,$ifsdlastyear,$ifsd,$numberofengine,$FH,$FHlastyear);
$pdf->ifsdrate3mon($bulan,$ifsd,$FH24);
$pdf->kosong($bulan);
$pdf->ifsd($bulan,$rtolastyeardata,$rtodat);
$pdf->ifsdrate($bulan,$rtolastyeardata,$rtodat,$numberofengine,$FH,$FHlastyear);
$pdf->ifsdrate3mon($bulan,$rtodat,$FH24);
$pdf->kosong($bulan);
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