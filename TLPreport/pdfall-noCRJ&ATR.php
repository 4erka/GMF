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
		$this->Cell(275,7,(($actype == "A330-300") || ($actype == "A330-200") || ($actype == "A320-200") ? "AIRBUS" : "BOEING")." ".$actype,'LRB',0,'C');
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
	$this->Cell(15,6,(isset($availablelastyear)) ? round(array_sum($fleetlastyear)/12,0) : 0,'LBR',0,'C',0);
	foreach ($bulan as $k => $v){
		$this->Cell(15,6,(($FH[$v] <> 0) ? $fleet[$v] : ""),'TLRB',0,'C',(($FH[$v] != 0) ? 0 : 1));
	}
	$this->Cell(27,6,round(array_sum($fleet)/12,0),'LBR',0,'C');
	$this->Ln();
}
function avail($bulan,$available,$availablelastyear,$FH){
	$this->Cell(53,6,'A/C in Service','LBRT',0,'L',0);
	$this->Cell(15,6,(isset($availablelastyear)) ? round(array_sum($availablelastyear)/365,2) : 0,'LBR',0,'C',0);
	foreach ($bulan as $k => $v){
		$this->Cell(15,6,($FH[$v] != 0) ? round($available[$v]/jumlahbulan($v),2) : "",'TLRB',0,'C',($FH[$v] != 0) ? 0 : 1);
	}//die(print_r($available));
	$this->Cell(27,6,round(array_sum($available)/365,2),'LBR',0,'C');
	$this->Ln();
}
function acinservice($bulan,$available,$availablelastyear,$FH){
	$this->Cell(53,6,'A/C Days In Service','LBRT',0,'L',0);
	$this->Cell(15,6,(isset($availablelastyear)) ? array_sum($availablelastyear) : 0,'LBR',0,'C',0);
	foreach ($bulan as $k => $value){
		$this->Cell(15,6,($FH[$value] != 0) ? $available[$value] : "",'TLRB',0,'C',($FH[$value] != 0) ? 0 : 1);
	}
	$this->Cell(27,6,array_sum($available),'LBR',0,'C');
	$this->Ln();
}
function fh($bulan,$FH,$FHlastyear){
	$this->Cell(53,6,'Flying Hours - Total','LBRT',0,'L',0);
	$this->Cell(15,6,isset($FHlastyear) ? array_sum($FHlastyear) : 0,'LBR',0,'C',0);
	foreach ($bulan as $k => $value){
		$this->Cell(15,6,($FH[$value] != 0) ? $FH[$value] : "",'TLRB',0,'C',($FH[$value] != 0) ? 0 : 1);
	}
	$this->Cell(27,6,array_sum($FH),'LBR',0,'C');
	$this->Ln();
}
function fhrev($bulan,$FHrev,$FHrevlastyear,$FH){
	$this->Cell(53,6,'   - Revenue','LBRT',0,'L',0);
	$this->Cell(15,6,isset($FHrevlastyear) ? array_sum($FHrevlastyear) : 0,'LBR',0,'C',0);
	foreach ($bulan as $k => $value){
		$this->Cell(15,6,($FH[$value] != 0) ? $FHrev[$value] : "",'TLRB',0,'C',($FH[$value] != 0) ? 0 : 1);
	}//die(print_r($FHrev));
	$this->Cell(27,6,array_sum($FHrev),'LBR',0,'C');
	$this->Ln();
}
function fc($bulan,$FC,$FClastyear){
	$this->Cell(53,6,'Take Off - Total','LBRT',0,'L',0);
	//die(print_r($FC));
	$this->Cell(15,6,isset($FClastyear) ? array_sum($FClastyear) : 0,'LBR',0,'C',0);
	foreach ($bulan as $k => $value){
		$this->Cell(15,6,($FC[$value] != 0) ? $FC[$value] : "",'TLRB',0,'C',($FC[$value] != 0) ? 0 : 1);
	}
	$this->Cell(27,6,array_sum($FC),'LBR',0,'C');
	$this->Ln();
}
function fcrev($bulan,$FCrev,$FCrevlastyear,$FC){
	$this->Cell(53,6,'   - Revenue','LBRT',0,'L',0);
	//die(print_r($FCrev));
	$this->Cell(15,6,isset($FCrevlastyear) ? array_sum($FCrevlastyear) : 0,'LBR',0,'C',0);
	foreach ($bulan as $k => $value){
		$this->Cell(15,6,($FC[$value] != 0) ? $FCrev[$value] : "",'TLRB',0,'C',($FC[$value] != 0) ? 0 : 1);
	}
	$this->Cell(27,6,array_sum($FCrev),'LBR',0,'C');
	$this->Ln();
}
function fhperfc($bulan,$FH,$FHlastyear,$FC,$FClastyear,$text){
	$this->Cell(53,6,$text,'LBRT',0,'L',0);
	$fhperfclastyear = (isset($FClastyear) <> 0) ? ((array_sum($FHlastyear) - (array_sum($FHlastyear) % array_sum($FClastyear)))/array_sum($FClastyear))." : ".substr("0".(round(((array_sum($FHlastyear) % array_sum($FClastyear))/array_sum($FClastyear)*60),0)),-2,2) : 0;
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
	$dailyfhlastyear = (isset($availablelastyear) <> 0) ? ((array_sum($FHlastyear)-(array_sum($FHlastyear)%array_sum($availablelastyear)))/array_sum($availablelastyear))." : ".substr("0".round(((array_sum($FHlastyear)%array_sum($availablelastyear))/array_sum($availablelastyear)*60),0),-2,2) : 0;
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
	$dailyfclastyear = (isset($availablelastyear) <> 0) ? round(array_sum($FClastyear)/array_sum($availablelastyear),2) : 0;
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
	$this->Cell(15,6,(isset($FHlastyear) <> 0) ? round(($jumlahincidentlastyear)/array_sum($FHlastyear)*1000,2) : 0,'LBR',0,'C',0);
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
	$this->Cell(15,6,(isset($FCrevlastyear) <> 0) ? round((array_sum($FCrevlastyear) - array_sum($techdelaylastyear) - $cancellastyear)/array_sum($FCrevlastyear) * 100,2) : "100",'LBR',0,'C',0);
	foreach ($bulan as $k => $value){
		$techdelay[$value] = isset($techdelay[$value]) ? $techdelay[$value] : 0;
		//$dr[$value] = () ? 
		$this->Cell(15,6,($FH[$value] != 0) ? (($FCrev[$value] != 0) ? round(($FCrev[$value] - $techdelay[$value] - $cancel[$value])/$FCrev[$value] * 100,2) : 0) : "",'TLRB',0,'C',($FH[$value] != 0) ? 0 : 1);
	}
	//print_r($FCrev);
	$this->Cell(27,6,round((array_sum($FCrev) - array_sum($techdelay) - array_sum($cancel))/array_sum($FCrev) * 100,2),'LBR',0,'C');
	$this->Ln();
}

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
		$this->Cell(9,4,$FH[$bulan[9]],'LBT',0,'C');
		$this->Cell(9,4,$FH[$bulan[10]],'LBT',0,'C');
		$this->Cell(9,4,$FH[$bulan[11]],'LBT',0,'C');
		$this->Cell(11,4,$FH[$bulan[9]] + $FH[$bulan[10]] + $FH[$bulan[11]],'LBT',0,'C');
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
		$this->Cell(9,4,bulan($bulan[9]),'LBT',0,'C');
		$this->Cell(9,4,bulan($bulan[10]),'LBT',0,'C');
		$this->Cell(9,4,bulan($bulan[11]),'LBT',0,'C');
		$this->Cell(11,4,"LAST 3",'LBT',0,'C');
		$this->Cell(14,4,"LAST 12",'LRBT',0,'C');
		$this->Cell(9,4,bulan($bulan[9]),'LBT',0,'C');
		$this->Cell(9,4,bulan($bulan[10]),'LBT',0,'C');
		$this->Cell(9,4,bulan($bulan[11]),'LBT',0,'C');
		$this->Cell(14,4,'3 Months','TBLR',0,'C');
		$this->Cell(14,4,'12 Months','TBLR',0,'C');
		$this->Cell(11,4,'ALERT','TBLR',0,'C');
		$this->Cell(12,4,'ALERT','TBLR',0,'C');
		$this->Cell(12,4,'TREND','TBLR',0,'C');
		$this->Ln();
		$this->SetX(50);
		$this->Cell(9,4,"",'LBT',0,'C');
		$this->Cell(9,4,"",'LBT',0,'C');
		$this->Cell(9,4,"",'LBT',0,'C');
		$this->Cell(11,4,"Months",'LBT',0,'C');
		$this->Cell(14,4,"Months",'LRBT',0,'C');
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
	
	function note(){
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
		$ATApirep[$bulan[9]][$ATA[$i]] = isset($ATApirep[$bulan[9]][$ATA[$i]]) ? $ATApirep[$bulan[9]][$ATA[$i]] : 0;
		$ATApirep[$bulan[10]][$ATA[$i]] = isset($ATApirep[$bulan[10]][$ATA[$i]]) ? $ATApirep[$bulan[10]][$ATA[$i]] : 0;
		$ATApirep[$bulan[11]][$ATA[$i]] = isset($ATApirep[$bulan[11]][$ATA[$i]]) ?			$ATApirep[$bulan[11]][$ATA[$i]] : 0;
		$ATA12bulan[$ATA[$i]] = isset($ATA12bulan[$ATA[$i]]) ? $ATA12bulan[$ATA[$i]] : 0;

		$alertlevel[$ATA[$i]] = isset($alertlevel[$ATA[$i]]) ? $alertlevel[$ATA[$i]] : 0;
		$alertlevel[$ATA[$i]] = isset($preselectpirep[$ATA[$i]]) ? $preselectpirep[$ATA[$i]] : $alertlevel[$ATA[$i]];

		$alertleveldelay[$ATA[$i]] = isset($alertleveldelay[$ATA[$i]]) ? $alertleveldelay[$ATA[$i]] : 0;
		$this->SetFont('Arial','B',6);
		$this->Cell(5,4.5,$ATA[$i],'LBT',0,'C');
		$this->Cell(35,4.5,$ATAdesc[$i],'LBT',0,'C');
		$this->SetFont('Arial','',6);
		$this->Cell(9,4.5,$ATApirep[$bulan[9]][$ATA[$i]],'LBT',0,'C');
		$this->Cell(9,4.5,$ATApirep[$bulan[10]][$ATA[$i]],'LBT',0,'C');
		$this->Cell(9,4.5,$ATApirep[$bulan[11]][$ATA[$i]],'LBT',0,'C');
		$this->Cell(11,4.5,$ATApirep[$bulan[9]][$ATA[$i]] + $ATApirep[$bulan[10]][$ATA[$i]] + $ATApirep[$bulan[11]][$ATA[$i]],'LBT',0,'C');
		$this->Cell(14,4.5,$ATA12bulan[$ATA[$i]],'LRBT',0,'C');
		$ratebulan2 = ($FH[$bulan[9]] <> 0) ? round($ATApirep[$bulan[9]][$ATA[$i]]/$FH[$bulan[9]]*$pembagi,2) : 0;
		$this->Cell(9,4.5,$ratebulan2,'LBT',0,'C');
		$this->Cell(9,4.5,($FH[$bulan[10]] <> 0) ? round($ATApirep[$bulan[10]][$ATA[$i]]/$FH[$bulan[10]]*$pembagi,2) : 0,'LBT',0,'C');
		$this->Cell(9,4.5,($FH[$bulan[11]] <> 0) ? round($ATApirep[$bulan[11]][$ATA[$i]]/$FH[$bulan[11]]*$pembagi,2) : 0,'LBT',0,'C');
		$this->Cell(14,4.5,round(($ATApirep[$bulan[11]][$ATA[$i]] + $ATApirep[$bulan[10]][$ATA[$i]] + $ATApirep[$bulan[9]][$ATA[$i]])/($FH[$bulan[11]] + $FH[$bulan[10]] + $FH[$bulan[9]])*$pembagi,2),'TBLR',0,'C');
		$this->Cell(14,4.5,($FH12 <> 0) ? round($ATA12bulan[$ATA[$i]]/$FH12*$pembagi,2) : 0,'TBLR',0,'C');
		$this->Cell(11,4.5,round($alertlevel[$ATA[$i]],2),'TBLR',0,'C');
		$this->Cell(12,4.5,(($FH[$bulan[11]] <> 0) && ($FH[$bulan[10]] <> 0) && ($FH[$bulan[9]] <> 0)) ? alertstatus(round($ATApirep[$bulan[9]][$ATA[$i]]/$FH[$bulan[9]]*$pembagi,2),round($ATApirep[$bulan[10]][$ATA[$i]]/$FH[$bulan[10]]*$pembagi,2),round($ATApirep[$bulan[11]][$ATA[$i]]/$FH[$bulan[11]]*$pembagi,2),$alertlevel[$ATA[$i]]) : "",'TBLR',0,'C');
		$this->Cell(12,4.5,(($FH[$bulan[9]] <> 0) && ($FH[$bulan[10]] <> 0) && ($FH[$bulan[11]] <> 0)) ? alerttrend($ATApirep[$bulan[9]][$ATA[$i]]/$FH[$bulan[9]]*$pembagi,$ATApirep[$bulan[10]][$ATA[$i]]/$FH[$bulan[10]]*$pembagi,$ATApirep[$bulan[11]][$ATA[$i]]/$FH[$bulan[11]]*$pembagi) : "",'TBLR',0,'C');
		$this->Ln();
	}
}

function OT($bulan,$ATApirep,$ATA12bulan,$alertlevel,$ATA,$ATAdesc,$FH,$FH12,$pembagi,$actype){
	
	$ATApirep[$bulan[9]]['OT'] = isset($ATApirep[$bulan[9]]['OT']) ? $ATApirep[$bulan[9]]['OT'] : 0;
	$ATApirep[$bulan[10]]['OT'] = isset($ATApirep[$bulan[10]]['OT']) ? $ATApirep[$bulan[10]]['OT'] : 0;
	$ATApirep[$bulan[11]]['OT'] = isset($ATApirep[$bulan[11]]['OT']) ? $ATApirep[$bulan[11]]['OT'] : 0;
	$ATA12bulan['OT'] = isset($ATA12bulan['OT']) ? $ATA12bulan['OT'] : 0;
	$alertlevel['OT'] = isset($alertlevel['5']) ? $alertlevel['5'] : 0;
	
	$this->SetFont('Arial','B',6);
	$this->Cell(5,4.5,'OT','LBT',0,'C');
	$this->Cell(35,4.5,'OTHER','LBT',0,'C');
	$this->SetFont('Arial','',6);
	$this->Cell(9,4.5,$ATApirep[$bulan[9]]['OT'],'LBT',0,'C');
	$this->Cell(9,4.5,$ATApirep[$bulan[10]]['OT'],'LBT',0,'C');
	$this->Cell(9,4.5,$ATApirep[$bulan[11]]['OT'],'LBT',0,'C');
	$this->Cell(11,4.5,$ATApirep[$bulan[9]]['OT'] + $ATApirep[$bulan[10]]['OT'] + $ATApirep[$bulan[11]]['OT'],'LBT',0,'C');
	$this->Cell(14,4.5,$ATA12bulan['OT'],'LRBT',0,'C');
	$color1 = ($FH[$bulan[9]] <> 0) ? 0 : 1;
	$rate1 = ($FH[$bulan[9]] <> 0) ? round($ATApirep[$bulan[9]]['OT']/$FH[$bulan[9]]*$pembagi,2) : 0;
	$this->Cell(9,4.5,$rate1,'LBT',0,'C');
	$color2 = ($FH[$bulan[10]] <> 0) ? 0 : 1;
	$rate2 = ($FH[$bulan[10]] <> 0) ? round($ATApirep[$bulan[10]]['OT']/$FH[$bulan[10]]*$pembagi,2) : 0;
	$this->Cell(9,4.5,$rate2,'LBT',0,'C');
	$color3 = ($FH[$bulan[11]] <> 0) ? 0 : 1;
	$rate3 = ($FH[$bulan[11]] <> 0) ? round($ATApirep[$bulan[11]]['OT']/$FH[$bulan[11]]*$pembagi,2) : 0;
	$this->Cell(9,4.5,$rate3,'LBT',0,'C');
	//die(print_r($FH));
	//Rate 3 bulan
	//print_r($FH);
	//die(print_r($bulan));
	$this->Cell(14,4.5,($FH[$bulan[9]] + $FH[$bulan[10]] + $FH[$bulan[11]]),'TBLR',0,'C');
//	$this->Cell(14,4.5,round(($ATApirep[$bulan[9]]['OT'] + $ATApirep[$bulan[10]]['OT'] + $ATApirep[$bulan[11]]['OT'])/($FH[$bulan[9]] + $FH[$bulan[10]] + $FH[$bulan[11]])*$pembagi,2),'TBLR',0,'C');
	//die(print_r($FH));
	//Rate 12 bulan
	$this->Cell(14,4.5,($FH12 != 0) ? round($ATA12bulan['OT']/$FH12*$pembagi,2) : 0,'TBLR',0,'C',($FH12 =! 0) ? 0 : 1);
	//Alert Level
	$this->Cell(11,4.5,round($alertlevel['OT'],2),'TBLR',0,'C');
	//STATUS
	$this->Cell(12,4.5,(($FH[$bulan[9]] != 0) && ($FH[$bulan[10]] != 0) && ($FH[$bulan[11]])) ? alertstatus(round($ATApirep[$bulan[9]]['OT']/$FH[$bulan[9]]*$pembagi,2),round($ATApirep[$bulan[10]]['OT']/$FH[$bulan[10]]*$pembagi,2),round($ATApirep[$bulan[11]]['OT']/$FH[$bulan[11]]*$pembagi,2),$alertlevel['OT']) : "",'TBLR',0,'C');
	//TREND
	$this->Cell(12,4.5,(($FH[$bulan[9]] != 0) && ($FH[$bulan[10]] != 0) && ($FH[$bulan[11]] != 0)) ? alerttrend($ATApirep[$bulan[9]]['OT']/$FH[$bulan[9]]*$pembagi,$ATApirep[$bulan[10]]['OT']/$FH[$bulan[10]]*$pembagi,$ATApirep[$bulan[11]]['OT']/$FH[$bulan[11]]*$pembagi) : "",'TBLR',0,'C');
	$this->Ln();
}

function JudulGrafik($header,$actype,$periode)
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

function JudulCumulative($header,$actype,$periode,$tinggi,$reghal)
{
    //Header
    //foreach($header as $col)
    //    $this->Cell(40,17,$col,10);
		//$this->SetX(40);
		$this->SetY($reghal);
	    $this->Cell(272,7,$header,'LRT',0,'C');
		$this->Ln();
		$this->Cell(272,7,(($actype == "A330-300") || ($actype == "A330-200") || ($actype == "A320-200") ? "AIRBUS" : "BOEING")." ".$actype,'LRB',0,'C');
		$this->Ln();
		$this->SetFont('Arial','B',9);
		$this->Cell(50,$tinggi,'FLIGHT HOURS','LB',0,'L');
		$this->Cell(222,$tinggi,(substr($periode,0,4) - 1)." - ".(substr($periode,0,4)),'LRB',0,'C');
		$this->Ln();
    //Data
    /*foreach($data as $row)
    {
        foreach($row as $col)
            $this->Cell(40,6,$col,1);
        $this->Ln();
    }*/
}
function blncumulative($bulan,$periode,$tinggi){
	$this->SetFont('Arial','',9);
	$this->Cell(30,$tinggi,'A/C REG','LBRT',0,'C',0);
	$this->Cell(20,$tinggi,'YEAR','LBR',0,'C',0);
	foreach ($bulan as $k => $v){
		$this->Cell(18.5,$tinggi,bulan($v),'TLRB',0,'C');
	}
	//$this->Cell(27,6,'LAST 12 MTHS','LBR',0,'C');
	$this->Ln();
}
function regfleet($bulan,$periode,$tinggi){
	$this->Cell(30,$tinggi,'','LBRT',0,'L',0);
	$this->Cell(20,$tinggi,(substr($periode,0,4)-1),'LBR',0,'C',0);
	foreach ($bulan as $k => $v){
		$this->Cell(18.5,$tinggi,'','TLRB',0,'C');
	}
	//$this->Cell(27,6,'','LBR',0,'C');
	$this->Ln();
}
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
function Headercus($actype,$periode,$enginetype)
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
	$this->Cell($L*13+60,5,'ENGINE OPERATION SUMMARY '.(substr($periode,0,4) - 1).' - '.(substr($periode,0,4)),'TLR',1,'C');
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
		$blnName = array("JAN","FEB","MAR","APR","MAY","JUN","JUL","AUG","SEP","OCT","NOV","DEC","JAN","FEB","MAR","APR","MAY","JUN","JUL","AGU","SEP","OKT","NOV","DES");
		$dataArray = array_slice($blnName,$bln,12);
		
	//	$this->Cell(1.7,0.6,$year-1 ,'LBR',0,'C',0);
		

	$this->Cell(60,4,(($actype == "A330-300") || ($actype == "A330-200") || ($actype == "A320-200") ? "AIRBUS" : "BOEING").' '.$actype,1,0,'C');
	$this->Cell($L,4,'',1,0,'C');
	
	$this->Cell($L*12,4,($year-1).' - '.$year,1,1,'C');

	$this->Cell(60,4,'',1,0,'L');
	$this->Cell($L,4,$year-1,1,0,'C');
	/*$this->Cell($L,4,'JAN',1,0,'C');
	$this->Cell($L,4,'FEB',1,0,'C');
	$this->Cell($L,4,'MAR',1,0,'C');
	$this->Cell($L,4,'APR',1,0,'C');
	$this->Cell($L,4,'MEI',1,0,'C');
	$this->Cell($L,4,'JUN',1,0,'C');
	$this->Cell($L,4,'JUL',1,0,'C');
	$this->Cell($L,4,'AUG',1,0,'C');
	$this->Cell($L,4,'SEP',1,0,'C');
	$this->Cell($L,4,'OCT',1,0,'C');
	$this->Cell($L,4,'NOV',1,0,'C');
	$this->Cell($L,4,'DEC',1,0,'C');*/
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

function writeRotie($x,$y,$txt,$text_angle,$font_angle = 0)
{
if ($x < 0) {
$x += $this->w;
}
if ($y < 0) {
$y += $this->h;
}

/* Escape text. */
$text = $this->_escape($txt);

$font_angle += 90 + $text_angle;
$text_angle *= M_PI / 180;
$font_angle *= M_PI / 180;

$text_dx = cos($text_angle);
$text_dy = sin($text_angle);
$font_dx = cos($font_angle);
$font_dy = sin($font_angle);

$s= sprintf('BT %.2f %.2f %.2f %.2f %.2f %.2f Tm (%s) Tj ET', $text_dx, $text_dy, $font_dx, $font_dy,$x * $this->k, ($this->h-$y) * $this->k, $text);
if($this->underline && $txt!='')
$s.=' '.$this->_dounderline($x,$y,$txt);
if($this->ColorFlag)
$s='q '.$this->TextColor.' '.$s.' Q';
$this->_out($s);
}


}
  $periode = isset($_REQUEST["periode"]) ? substr($_REQUEST["periode"],0,7) : "";
  $actype = isset($_REQUEST["actype"]) ? $_REQUEST["actype"] : "";

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

	$TE = connectimesysTE();
	$numberofengine = ($actype == "B747-400") ? 4 : 2;
	$FH = queryFH12($periode,$actype,12);
	//$bulan = array_reverse(array_keys($FH));
	$bulan =  array_reverse(array_slice(array_slice(selectperiode(), array_search($periode,selectperiode())), 0, 12));
	$FHrev = queryFH12rev($periode,$actype);
	$FC = queryFC12($periode,$actype,12);
	$FCrev = queryFC12rev($periode,$actype);
	$FCrev12 = array_sum($FCrev);
	$fleet = fleet($periode,$actype);//die(print_r($FC));
	$available = available($bulan[0],$bulan[11],$actype);
	//die(print_r($available));
	$FH12bulan = queryFH12($periode,$actype,12);//die(print_r($FH12bulan));
	$FH12 = array_sum($FH12bulan);
	$keys12bulan = array_keys($FH12bulan);
	$jmlhblnyglalu = count($keys12bulan);
	$keys12bulan[11] = $keys12bulan[$jmlhblnyglalu-1];
	$FH24 = queryFH12($periode,$actype,24);
	$bulan12 = array_reverse(array_keys($FH24));
	$umurengine = queryFHengine($periode,$actype);

	$FCsementara = queryFC12rev(($tahun-1)."-12",$actype,12);
	$FC12 = isset($FCsementara) ? array_sum($FCsementara) : 0;//

	$reg = reg($actype);//die(print_r($reg));
	$jumlahfleet = count($reg);//die(print_r($jumlahfleet));

	$cumulativeFH = cumulativeFH($periode,$actype);
	$cumulativeFH12 = cumulativeFH12((substr($periode,0,4)-1)."-01",(substr($periode,0,4)-1)."-12",$actype);
	//die(print_r($cumulativeFH12));
	$cumulativeFC = cumulativeFC($periode,$actype);
	$cumulativeFC12 = cumulativeFC12((substr($periode,0,4)-1)."-01",(substr($periode,0,4)-1)."-12",$actype);//die($cumulativeFC12);

	//last year
	$periodelastyear = (substr($periode,0,4) - 1)."-12";
	$FHlastyear = queryFH12($periodelastyear,$actype,12);
	$FHrevlastyear = queryFH12rev($periodelastyear,$actype);
	$FClastyear = queryFC12($periodelastyear,$actype,12);
	$FCrevlastyear = queryFC12rev($periodelastyear,$actype);
	$fleetlastyear = fleet($periodelastyear,$actype);//die(print_r($fleetlastyear));
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
		$avgduration[$v] = round(($avgduration[$v] - ($avgduration[$v] % 60))/60)." : ".substr("0".($avgduration[$v] % 60),-2,2);
		$avgduration[$v] = isset($avgduration[$v]) ? $avgduration[$v] : 0;
		$delayrate[$v] = isset($techdelay[$v]) ? $techdelay[$v] / $FCrev[$v] * 100 : 0;
		$delayratelastyear = (is_array($FCrevlastyear)) ? (array_sum($techdelaylastyear) / array_sum($FCrevlastyear) * 100) : 0;
		$cancel[$v] = isset($cancel[$v]) ? $cancel[$v] : 0;
	}
	$jumlahincident = array_sum($incident);
	$jumlahincidentlastyear = array_sum($incidentlastyear);

	$ATAdelay = ATAdelay($bulan[9],$bulan[11],$actype);//die(print_r($ATAdelay));
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
	//die(print_r($newATAdelay));
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
	
	$ATApirep = ATA($bulan[9],$bulan[11],$actype);//die(print_r($ATApirep));
		
	
	$alertlevel = alert($timeawal,$timeakhir,$actype);//die(print_r($alertlevel));

	$preselectdelay = preselectalertlevel($predetalerlevel,$actype,"ALD");
	$preselectpirep = preselectalertlevel($predetalerlevel,$actype,"ALP");

	$awallastyear = (substr($periode,0,4) - 1)."-01";
	$akhirlastyear = (substr($periode,0,4) - 1)."-12";
	$ATApireplastyear = ATA($awallastyear,$akhirlastyear,$actype);//print_r($ATApireplastyear);
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
	
	//die(print_r($pilotreportratelast));
	$ATApirep = ATA($bulan[0],$bulan[11],$actype);//die(print_r($ATApirep));
	$ATApirepgraph = ATA(substr($periode,0,4),$periode,$actype);//die(print_r($ATApirepgraph));
	foreach ($ATApirepgraph as $k => $v){
		$pirepcurrentrate[substr($k,-2,2)-1] = round(array_sum($v)/$FH24[$k] * 1000,2);
		$axispirep[substr($k,-2,2)-1] = round(array_sum($v),0);
	}//print_r($axispirep);
	for($i=0;$i<12;$i++){
		$pirepcurrentrate[$i] = isset($pirepcurrentrate[$i]) ? $pirepcurrentrate[$i] : 0;
		$axispirep[$i] = isset($axispirep[$i]) ? $axispirep[$i] : "";
	}
	ksort($pirepcurrentrate);ksort($axispirep);
	//die(print_r($axispirep));
	//$axispirep = array_reverse($axispirep);
	//array_push($axispirep,"","","","","","","","","","","","");
	//die(print_r($pirepcurrentrate));
	//$pirepcurrentrate = array_reverse($pirepcurrentrate);
	//die(print_r($pirepcurrentrate));

	$delay = ATAdelay($bulan[0],$bulan[11],$actype);//die(print_r($delay));
	if (is_array($delay)){
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
	//die(print_r($techdelay));
	
	$cancel = querycancel($bulan[0],$bulan[11],$actype);	
	
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
	//die($qryincident);
	while ($hasilincident = mysql_fetch_array($resultincident))
	{
		$incident[$hasilincident["bulan"]] = $hasilincident["jumlah"];
	}
	
	if ($actype == "B737-Classic") {
		$qryline = "`tbl_ifsd`.`ACType` IN ('B737-300','B737-400','B737-500','B737-CL')";
	} else if ($actype == "B737-Classic GA") {
		$qryline = "`tbl_ifsd`.`ACType` IN ('B737-300','B737-400','B737-500')";
	} else if ($actype == "B737-800-E") {
		$qryline = "`tbl_ifsd`.`ACReg` Like 'PK-GE%'";
	} else if ($actype == "B737-800-M") {
		$qryline = "(`tbl_ifsd`.`ACReg` Like 'PK-GM%' or `tbl_ifsd`.`ACReg` Like 'PK-GF%')";
	} else {
		$qryline = "`tbl_ifsd`.`ACType` IN ('$actype')";
	}
	$qryrtb = "SELECT Count(`tbl_ifsd`.`ACTYPE`) AS `jumlah`, DATE_FORMAT(`tbl_ifsd`.`DateOccur`,'%Y-%m') AS `bulan`  FROM `tbl_ifsd`  WHERE ".$qryline." AND `tbl_ifsd`.`rtb` = 'RTB' AND (DATE_FORMAT(`tbl_ifsd`.`DateOccur`,'%Y-%m') BETWEEN '".$bulan[0]."' AND '".$bulan[11]."') GROUP BY DATE_FORMAT(`tbl_ifsd`.`DateOccur`,'%Y-%m')";
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

	//bagian untuk engine operation summary
	$engineremovaldata = engineremoval($periode,$actype);
	$engineremovallastyeardata = engineremoval12((substr($periode,0,4) - 1)."-01",$periodelastyear,$actype);
	$shopvisit = shopvisit($periode,$actype);
	$shopvisitlast = shopvisit12((substr($periode,0,4) - 1)."-01",$periodelastyear,$actype);
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

	$qryifsd = "SELECT `tbl_ifsd`.`ACType`, DATE_FORMAT(`tbl_ifsd`.`DateOccur`,'%Y-%m') AS `periode`, COUNT(`tbl_ifsd`.`ifsd`) AS `jumlah` FROM `tbl_ifsd` WHERE  `tbl_ifsd`.`ACType` = '".$actype."' AND DATE_FORMAT(`tbl_ifsd`.`DateOccur`,'%Y-%m') <= '".$periode."' AND `tbl_ifsd`.`ifsd` = 'IFSD' GROUP BY `tbl_ifsd`.`ACType`,DATE_FORMAT(`tbl_ifsd`.`DateOccur`,'%Y-%m')";
	$resultifsd = mysql_query($qryifsd);
	//die($qryFH);
	while ($hasilifsd = mysql_fetch_array($resultifsd))
	{
		$ifsd[$hasilifsd["periode"]] = $hasilifsd["jumlah"];
	}
	
	/*while ($ifsddata1 = mysql_fetch_array($ifsddata)){
		$ifsd[$ifsddata1["periode"]] = $ifsddata1["jumlah"];
	}*/

	while ($ifsdlastyeardata1 = mysql_fetch_array($ifsdlastyeardata)){
		$ifsdlastyear[$ifsdlastyeardata1["periode"]] = $ifsdlastyeardata1["jumlah"];
	}
	//die(print_r($ifsdlastyear));
	/*while ($rtoly = mysql_fetch_array($rtolastyear)){
		$rtolastyeardata[$rtoly["periode"]] = $rtoly["jumlah"];
	}*/

	/*while ($rtodata = mysql_fetch_array($rto)){
		$rto[$rtodata["periode"]] = $rto["jumlah"];
	}*/
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


	$connectAMS = connectimesys('mcdr');
	$ATA = ATAdef();
	$ATAdesc = ATAdesc();
	//buat halaman
	if ($actype == "A330-200"){
		$page = "A";
	} else if ($actype == "A330-300"){
		$page = "B";
	} else if ($actype == "B737-300"){
		$page = "C";
	} else if ($actype == "B737-800-M"){
		$page = "F";
	} else if ($actype == "B737-800-E"){
		$page = "E";
	} else if ($actype == "B747-400"){
		$page = "D";
	} else if ($actype == "B737-800"){
		$page = "G";
	} else if ($actype == "A320-200"){
		$page = "A";
	} else if ($actype == "B737-Classic GA"){
		$page = "C";
	} else if ($actype == "B737-CL"){
		$page = "B";
	} else {
		$page = "I";
	}

	$jumlahhal = ($jumlahfleet > 14) ? ($jumlahfleet-($jumlahfleet%14))/14 + 1 : 1;//die(print_r($jumlahhal));
	//for ($a=1;$a<=$jumlahhal;$a++){
		$reghal = array_chunk($reg,14);
	//}
	//$kudunya = ($jumlahfleet-($jumlahfleet%14))/14 + 1;
	//print_r($jumlahfleet);
	//die(print_r($kudunya));
	//engine type
	if ($actype == "A330-300"){
		$enginetype = "TRENT - 768";
	} else if ($actype == "A330-200"){
		$enginetype = "TRENT - 772";
	} else if ($actype == "B737-800"){
		$enginetype = "CFM56-7B";
	} else if ($actype == "B737-800-E"){
		$enginetype = "CFM56-7B";
	} else if ($actype == "B737-800-M"){
		$enginetype = "CFM56-7B";
	} else if ($actype == "B747-400"){
		$enginetype = "CF6-80C2B1F";
	} else if ($actype == "B737-CL"){
		$enginetype = "CFM56-3";
	} else if ($actype == "A320-200"){
		$enginetype = "IAE V2500";
	} else {
		$enginetype = "CFM56-3";
	}
//die(print_r($FCrev));
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
$pdf->bln($bulan,$periode);
//print_r($bulan);
//print_r($fleet);
//print_r($fleetlastyear);
//print_r($FH);
//print_r($availablelastear);
//die(print_r($available));
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
$pdf->Cell(275,6,"Page : ".$page."2",0,0,'R');

$pdf->SetLineWidth(0.4);
$pdf->Line(10,20,285,20);
$pdf->Line(10,20,10,173);
$pdf->Line(10,173,285,173);
$pdf->Line(285,20,285,173);

$pdf->Line(10,34,285,34);
$pdf->Line(10,41,285,41);
$pdf->Line(63,41,63,173);
//print_r($bulan);
//die(print_r($ATApirep));
$pdf->SetLineWidth(0);
$pdf->AddPage('P');
$pdf->head($actype,$FH,$FH12,$bulan,'TOTAL FLIGHT HOURS','PILOT REPORT',$tahun);
$pdf->data($bulan,$ATApirep,$ATA12bulan,$alertlevel,$ATA,$ATAdesc,$FH,$FH12,1000,$actype,$preselectpirep);
$pdf->note();
$pdf->SetY(265);
$pdf->Cell(187,6,"Page : ".$page."3",0,0,'R');
$pdf->SetFont('Arial','B',7);

$pdf->SetLineWidth(0.4);
$pdf->Line(10,30,192,30);//garis mendatar paling atas (no 1)
$pdf->Line(10,35,192,35);//garis mendatar no 2
$pdf->Line(10,42,102,42);//garis mendatar no 3
$pdf->Line(10,46,192,46);//garis mendatar no 4
$pdf->Line(50,54,192,54);//garis mendatar no 5
$pdf->Line(10,211.5,192,211.5);//garis mendatar no 6

$pdf->Line(10,30,10,211.5);//garis vertikal paling kiri (no 1)
$pdf->Line(50,42,50,211.5);//garis vertikal no 2
$pdf->Line(102,42,102,211.5);//garis vertikal no 3
$pdf->Line(157,46,157,211.5);//garis vertikal no 4
$pdf->Line(192,30,192,211.5);//garis vertikal no 5
//die(print_r($FCrev));
$pdf->SetLineWidth(0);
$pdf->AddPage('P');
$pdf->head($actype,$FCrev,$FCrev12,$bulan,'TOTAL REVENUE TAKE OFF','TECHNICAL DELAY > 15 MINUTES AND CANCELLATION',$tahun);
$pdf->data($bulan,$newATAdelay,$newATAdelay12bulan,$alertleveldelay,$ATA,$ATAdesc,$FCrev,$FCrev12,100,$actype,$preselectdelay);
//die(print_r($FC));
$pdf->OT($bulan,$newATAdelay,$newATAdelay12bulan,$alertleveldelay,$ATA,$ATAdesc,$FCrev,$FCrev12,100,$actype);
$pdf->note();
$pdf->SetY(265);
$pdf->Cell(187,6,"Page : ".$page."4",0,0,'R');

$pdf->SetLineWidth(0.4);
$pdf->Line(10,30,192,30);//garis mendatar paling atas (no 1)
$pdf->Line(10,35,192,35);//garis mendatar no 2
$pdf->Line(10,42,102,42);//garis mendatar no 3
$pdf->Line(10,46,192,46);//garis mendatar no 4
$pdf->Line(50,54,192,54);//garis mendatar no 5
$pdf->Line(10,216,192,216);

$pdf->Line(10,30,10,216);
$pdf->Line(50,42,50,216);
$pdf->Line(102,42,102,216);
$pdf->Line(157,46,157,216);
$pdf->Line(192,30,192,216);
//$pdf->AddPage();
//$pdf->ImprovedTable($header,$data);
//$pdf->AddPage();
//$pdf->FancyTable($header,$data);


//Column titles
$header=$actype.' Reliability Graph';
//Data loading

//$data=$pdf->LoadData('countries.txt');
$pdf->SetFont('Arial','B',12);
$pdf->AddPage('P');
$pdf->JudulGrafik($header,$actype,$periode);
include('DRgrafik.php');
$pdf->Image($fileName,30,40);
//include('Incidentgrafik.php');
$pdf->Image($fileName2,30,200);

$pdf->Image($fileName3,30,120);
$pdf->SetFont('Arial','B',9);
$pdf->Text(180,280,'Page : '.$page.'5');

$pdf->SetLineWidth(0.2);

for ($gh=0;$gh<$jumlahhal;$gh++){

	//Column titles
	$header='CUMULATIVE FLIGHT HOURS AND TAKE OFF '.(substr($periode,0,4) - 1).' - '.(substr($periode,0,4));
	//Data loading
	$tinggi = 4.5;
	//$data=$pdf->LoadData('countries.txt');
	//print_r(count($reghal[$gh]));
	if (count($reghal[$gh]) < 7){
		$margin = 50;	
	} else {
		$margin = 13;
	}
	$pdf->SetFont('Arial','B',14);
	$pdf->AddPage();
	$pdf->JudulCumulative($header,$actype,$periode,$tinggi,$margin);
	$pdf->blncumulative($bulan,$periode,$tinggi);
	$pdf->regfleet($bulan,$periode,$tinggi);
	$pdf->SetFillColor(200);

	for ($i=0;$i<(count($reghal[$gh]));$i++){
		if ($i<>0){
			$regtampil[$i] = substr($reghal[$gh][$i],3,3);
		} else {
			$regtampil[$i] = $reghal[$gh][$i];
		}
		$pdf->Cell(30,$tinggi,$regtampil[$i],'LBRT',0,'C',0);
		$pdf->Cell(20,$tinggi,(isset($cumulativeFH12[$reghal[$gh][$i]]) ? $cumulativeFH12[$reghal[$gh][$i]] : ""),'LBRT',0,'C',(isset($cumulativeFH12[$reghal[$gh][$i]]) ? 0 : 1));
		foreach ($bulan as $k => $v){
			$pdf->Cell(18.5,$tinggi,isset($cumulativeFH[$reghal[$gh][$i]][$v]) ? $cumulativeFH[$reghal[$gh][$i]][$v] : "",'TLRB',0,'C',isset($cumulativeFH[$reghal[$gh][$i]][$v]) ? 0 : 1);
		}
		$pdf->Ln();
	}
	$pdf->Cell(30,$tinggi,'','LBRT',0,'C',0);
	$pdf->Cell(20,$tinggi,'','LBR',0,'C',0);
		foreach ($bulan as $k => $v){
			$pdf->Cell(18.5,$tinggi,'','TLRB',0,'C');
		}
	$pdf->Ln();
	$pdf->Cell(50,$tinggi,'FLIGHT CYCLE','LB',0,'L');
	$pdf->Cell(222,$tinggi,'','LRB',0,'C');
	$pdf->Ln();
	$pdf->Cell(30,$tinggi,'','LBRT',0,'C',0);
	$pdf->Cell(20,$tinggi,'','LBR',0,'C',0);
		foreach ($bulan as $k => $v){
			$pdf->Cell(18.5,$tinggi,'','TLRB',0,'C');
		}
	$pdf->Ln();

	for ($i=0;$i<(count($reghal[$gh]));$i++){
		if ($i<>0){
			$regtampil[$i] = substr($reghal[$gh][$i],3,3);
		} else {
			$regtampil[$i] = $reghal[$gh][$i];
		}
		$pdf->Cell(30,$tinggi,$regtampil[$i],'LBRT',0,'C',0);
		$pdf->Cell(20,$tinggi,(isset($cumulativeFC12[$reghal[$gh][$i]]) ? $cumulativeFC12[$reghal[$gh][$i]] : ""),'LBRT',0,'C',(isset($cumulativeFH12[$reghal[$gh][$i]]) ? 0 : 1));
		foreach ($bulan as $k => $v){
			$pdf->Cell(18.5,$tinggi,isset($cumulativeFC[$reghal[$gh][$i]][$v]) ? $cumulativeFC[$reghal[$gh][$i]][$v] : "",'TLRB',0,'C',isset($cumulativeFC[$reghal[$gh][$i]][$v]) ? 0 : 1);
		}
		$pdf->Ln();
	}
	$halaman = ($jumlahhal == 1) ? "" : " - ".($gh+1);
	$pdf->Text(260,195,'Page : '.$page.'6'.$halaman);

}
$pdf->SetLineWidth(0);

$pdf->SetMargins(0.5,1,0.5);
$pdf->AliasNbPages();
$pdf->AddPage();
//$pdf->SetAutoPageBreak(true,10);
$pdf->SetFont('Arial','b',7);
$pdf->SetLeftMargin(25);

$tinggi = 3.5;
$L = 14;
$getX = $pdf->GetX();
$getY = $pdf->GetY();
$panjang = $tinggi*54-$tinggi/2;
	$pdf->SetFillColor(200);
	$pdf->SetDrawColor(0,0,0);
	$pdf->SetLineWidth(0.5);
	/*$pdf->Line($getX,11,$getX,$panjang-5);
	$pdf->Line($getX+60,20,$getX+60,$panjang-5);
	$pdf->Line($getX+60+$L,20,$getX+60+$L,$panjang-5);
	$pdf->Line($getX+60+$L*13,11,$getX+60+$L*13,$panjang-5);
	$pdf->Line($getX,$panjang-5,$getX+60+$L*13,$panjang-5);*/
	$pdf->SetLineWidth(0.3);
	$pdf->Headercus($actype,$periode,$enginetype);
	$pdf->Cell(60,$tinggi,'NUMBER OF ENGINE IN FLEET','TBLR',0,'L');
	$pdf->SetFont('Arial','',7);
	$pdf->Cell($L,$tinggi,(isset($FHlastyear) <> 0) ? round(array_sum($fleetlastyear)/12*$numberofengine,0) : 0,'TBLR',0,'C');
	/*for($i=1;$i<=12;$i++)
	{*/
	foreach($bulan as $key => $value)
	{
		$pdf->Cell($L,$tinggi,($FH[$value] <> 0) ? ($fleet[$value] * $numberofengine) : 0,'TBLR',0,'C');
		$xaxis[] = bulan($value);
	}

	$pdf->SetFont('Arial','B',7);
	$pdf->Ln();
	$pdf->Cell(60,$tinggi,'','TBLR',0,'L');
	$pdf->SetFont('Arial','',7);
	$pdf->Cell($L,$tinggi,'','TBLR',0,'C');
	for($i=1;$i<=12;$i++)
	{
		$pdf->Cell($L,$tinggi,'','TBLR',0,'C');
	}

	$pdf->SetFont('Arial','B',7);
	$pdf->Ln();
	$pdf->Cell(60,$tinggi,'HOURS-COMMULATIVE','TBLR',0,'L');
	$pdf->SetFont('Arial','',7);
	$pdf->Cell($L,$tinggi,'','TBLR',0,'C');
	foreach($bulan as $key => $value)
	{
		$pdf->Cell($L,$tinggi,($TSNengine[$value] <> 0) ? ($TSNengine[$value]) : 0,'TBLR',0,'C');
	
	}

	$pdf->SetFont('Arial','B',7);
	$pdf->Ln();
	$pdf->Cell(60,$tinggi,'HOURS-OPERATED','TBLR',0,'L');
	$pdf->SetFont('Arial','',7);
	$pdf->Cell($L,$tinggi,(isset($FHlastyear) <> 0) ? (array_sum($FHlastyear) * $numberofengine) : 0,'TBLR',0,'C');
	foreach($bulan as $key => $value)
	{
		$pdf->Cell($L,$tinggi,($FH[$value]) ? (($FH[$value] * $numberofengine)) : 0,'TBLR',0,'C');
	
	}

	$pdf->SetFont('Arial','B',7);
	$pdf->Ln();
	$pdf->Cell(60,$tinggi,'','TBLR',0,'L');
	$pdf->SetFont('Arial','',7);
	$pdf->Cell($L,$tinggi,'','TBLR',0,'C');
	for($i=1;$i<=12;$i++)
	{
		$pdf->Cell($L,$tinggi,'','TBLR',0,'C');
	}

	$pdf->SetFont('Arial','B',7);
	$pdf->Ln();
	$pdf->Cell(60,$tinggi,'CYCLES-CUMMULATIVE','TBLR',0,'L');
	$pdf->SetFont('Arial','',7);
	$pdf->Cell($L,$tinggi,'','TBLR',0,'C');
	foreach($bulan as $key => $value)
	{
		$pdf->Cell($L,$tinggi,($CSNengine[$value] <> 0) ? ($CSNengine[$value]) : 0,'TBLR',0,'C');
	
	}

	$pdf->SetFont('Arial','B',7);
	$pdf->Ln();
	$pdf->Cell(60,$tinggi,'CYCLES-OPERATED','TBLR',0,'L');
	$pdf->SetFont('Arial','',7);
	$pdf->Cell($L,$tinggi,(isset($FClastyear) <> 0) ? (array_sum($FClastyear) * $numberofengine) : 0,'TBLR',0,'C');
	foreach($bulan as $key => $value)
	{
		$pdf->Cell($L,$tinggi,($FC[$value] <> 0) ? (($FC[$value] * $numberofengine)) : 0,'TBLR',0,'C');
	
	}
	$pdf->SetFont('Arial','B',7);
	$pdf->Ln();
	$pdf->Cell(60,$tinggi,'','TBLR',0,'L');
	$pdf->SetFont('Arial','',7);
	$pdf->Cell($L,$tinggi,'','TBLR',0,'C');
	for($i=1;$i<=12;$i++)
	{
		$pdf->Cell($L,$tinggi,'','TBLR',0,'C');
	}

	$pdf->SetFont('Arial','B',7);
	$pdf->Ln();
	$pdf->Cell(60,$tinggi,'IN-FLIGHT SHUTDOWN','TBLR',0,'L');
	$pdf->SetFont('Arial','',7);
	$pdf->Cell($L,$tinggi,(isset($FClastyear) <> 0) ? $ifsdlastyear : 0,'TBLR',0,'C');
	foreach($bulan as $key => $value)
	{
		$pdf->Cell($L,$tinggi,($FC[$value] <> 0) ? ($ifsd[$value]) : 0,'TBLR',0,'C');
	
	}

	$pdf->SetFont('Arial','B',7);
	$pdf->Ln();
	$pdf->Cell(60,$tinggi,'      - RATE','TBLR',0,'L');
	$pdf->SetFont('Arial','',7);
	$pdf->Cell($L,$tinggi,(isset($FHlastyear) <> 0) ? round(($ifsdlastyear/(array_sum($FHlastyear)*$numberofengine)*1000),3) : 0,'TBLR',0,'C');
	foreach($bulan as $key => $value)
	{
		$pdf->Cell($L,$tinggi,($FH[$value]) ? round(($ifsd[$value]/($FH[$value]*$numberofengine)*1000),3) : 0,'TBLR',0,'C');
	}
	//die(print_r($FH24));
	$pdf->SetFont('Arial','B',7);
	$pdf->Ln();
	$pdf->Cell(60,$tinggi,'      - 3 MO. RATE','TBLR',0,'L');
	$pdf->SetFont('Arial','',7);
	$pdf->Cell($L,$tinggi,'','TBLR',0,'C');
	foreach($bulan as $key => $value)
	{
		$pdf->Cell($L,$tinggi, (!empty($FH24[$bulan12[$key+10]]) ? round((($ifsd[$bulan12[$key+10]] + $ifsd[$bulan12[$key+11]] + $ifsd[$bulan12[$key+12]])/($FH24[$bulan12[$key+10]] + $FH24[$bulan12[$key+11]] + $FH24[$bulan12[$key+12]]) * 1000),3) : 0),'TBLR',0,'C');
	}
	//die(print_r($FH24));
	$pdf->SetFont('Arial','B',7);
	$pdf->Ln();
	$pdf->Cell(60,$tinggi,'','TBLR',0,'L');
	$pdf->SetFont('Arial','',7);
	$pdf->Cell($L,$tinggi,'','TBLR',0,'C');
	for($i=1;$i<=12;$i++)
	{
		$pdf->Cell($L,$tinggi,'','TBLR',0,'C');
	}

	$pdf->SetFont('Arial','B',7);
	$pdf->Ln();
	$pdf->Cell(60,$tinggi,'ABORTED TAKE-OFF','TBLR',0,'L');
	$pdf->SetFont('Arial','',7);
	$pdf->Cell($L,$tinggi, $rtolastyeardata,'TBLR',0,'C');
	foreach($bulan as $key => $value)
	{
		$pdf->Cell($L,$tinggi,$rtodat[$value],'TBLR',0,'C');
	}
	//die(print_r($FH24));
	$pdf->SetFont('Arial','B',7);
	$pdf->Ln();
	$pdf->Cell(60,$tinggi,'      - RATE','TBLR',0,'L');
	$pdf->SetFont('Arial','',7);
	$pdf->Cell($L,$tinggi, (isset($FHlastyear) <> 0) ? round(($rtolastyeardata/(array_sum($FHlastyear)*$numberofengine)*1000),3) : "",'TBLR',0,'C');
	foreach($bulan as $key => $value)
	{
		$pdf->Cell($L,$tinggi, (!empty($FH[$value]) ? round(($rtodat[$value]/($FH[$value]*$numberofengine)*1000),3) : 0),'TBLR',0,'C');
	}
	//die(print_r($FH24));
	$pdf->SetFont('Arial','B',7);
	$pdf->Ln();
	$pdf->Cell(60,$tinggi,'      - 3 MO. RATE','TBLR',0,'L');
	$pdf->SetFont('Arial','',7);
	$pdf->Cell($L,$tinggi,'','TBLR',0,'C');
	foreach($bulan as $key => $value)
	{
		$pdf->Cell($L,$tinggi, (!empty($FH24[$bulan12[$key+10]]) ? round((($rtodat[$bulan12[$key+10]] + $rtodat[$bulan12[$key+11]] + $rtodat[$bulan12[$key+12]])/($FH24[$bulan12[$key+10]] + $FH24[$bulan12[$key+11]] + $FH24[$bulan12[$key+12]]) * 1000),3) : 0),'TBLR',0,'C');
	}
	//die(print_r($FH24));
	$pdf->SetFont('Arial','B',7);
	$pdf->Ln();
	$pdf->Cell(60,$tinggi,'','TBLR',0,'L');
	$pdf->SetFont('Arial','',7);
	$pdf->Cell($L,$tinggi,'','TBLR',0,'C');
	for($i=1;$i<=12;$i++)
	{
		$pdf->Cell($L,$tinggi,'','TBLR',0,'C');
	}
	//die(print_r($FH24));
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
	//die(print_r($FH24));

	$pdf->SetFont('Arial','B',7);
	$pdf->Ln();
	$getRX = $pdf->GetX();
	$getRY = $pdf->GetY();
	$pdf->Cell(60,$tinggi,'','TBLR',0,'L');
	$pdf->SetFont('Arial','',7);
	$pdf->Cell($L,$tinggi,'','TBLR',0,'C');
	for($i=1;$i<=12;$i++)
	{
		$pdf->Cell($L,$tinggi,'','TBLR',0,'C');
	}

	$pdf->SetFont('arial','B',7);
	$pdf->Ln();
	$pdf->Cell(60,$tinggi,'TOTAL UNPLANNED ENGINE REMOVALS','TBLR',0,'L');
	$pdf->SetFont('arial','',7);
	$pdf->Cell($L,$tinggi, ($engineremovallastyear["Non Basic UnPlanned"] + $engineremovallastyear["Basic UnPlanned"]),'TBLR',0,'C');
	foreach($bulan as $key => $value)
	{
		$pdf->Cell($L,$tinggi,  ($engineremoval["Basic UnPlanned"][$value] + $engineremoval["Non Basic UnPlanned"][$value]),'TBLR',0,'C');
	}

	$pdf->SetFont('arial','B',7);
	$pdf->Ln();
	$pdf->Cell(60,$tinggi,'      - UER RATE','TBLR',0,'L');
	$pdf->SetFont('arial','',7);
	$pdf->Cell($L,$tinggi, (isset($FHlastyear) <> 0) ? round(($engineremovallastyear["Non Basic UnPlanned"] + $engineremovallastyear["Basic UnPlanned"])/(array_sum($FHlastyear) * $numberofengine)*1000,3) : "",'TBLR',0,'C');
	//die(print_r($FH24));
foreach($bulan as $key => $value)
	{
		$pdf->Cell($L,$tinggi, (!empty($FH[$value]) ? round((($engineremoval["Basic UnPlanned"][$value] + $engineremoval["NonBasic UnPlanned"][$value])/($FH[$value] * $numberofengine)*1000),3) : 0),'TBLR',0,'C');

		$uer[] =  !empty($FH[$value]) ? round((($engineremoval["Basic UnPlanned"][$value] + $engineremoval["NonBasic UnPlanned"][$value])/($FH[$value] * $numberofengine)*1000),3) : 0;
	}

	$pdf->SetFont('arial','B',7);
	$pdf->Ln();
	$pdf->Cell(60,$tinggi,'      - 3 MO. RATE','TBLR',0,'L');
	$pdf->SetFont('arial','',7);
	$pdf->Cell($L,$tinggi,'','TBLR',0,'C');
	foreach($bulan as $key => $value)
	{
		$pdf->Cell($L,$tinggi, (!empty($FH24[$bulan12[$key+10]]) ? round((($engineremoval["Basic UnPlanned"][$bulan12[$key+10]] + $engineremoval["Non Basic UnPlanned"][$bulan12[$key+10]] + $engineremoval["Basic UnPlanned"][$bulan12[$key+11]] + $engineremoval["Non Basic UnPlanned"][$bulan12[$key+11]] + $engineremoval["Basic UnPlanned"][$bulan12[$key+12]] + $engineremoval["Non Basic UnPlanned"][$bulan12[$key+12]])/(($FH24[$bulan12[$key+10]] + $FH24[$bulan12[$key+11]] + $FH24[$bulan12[$key+12]]) * $numberofengine)*1000),3) : 0),'TBLR',0,'C');
	}
	
	$pdf->SetFont('Arial','B',7);
	$pdf->Ln();
	$pdf->Cell(60,$tinggi,'','TBLR',0,'L');
	$pdf->SetFont('Arial','',7);
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
	$pdf->Cell($L,$tinggi, (isset($FHlastyear) <> 0) ? round((($SVlastdata)/(array_sum($FHlastyear)*$numberofengine)*1000),3) : "",'TBLR',0,'C');
	foreach($bulan as $key => $value)
	{
		$shopvisitrate[$value] = !empty($FH[$value]) ? round((($SV[$value])/($FH[$value] * $numberofengine)*1000),3) : 0;
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
		$pdf->Cell($L,$tinggi, (!empty($FH24[$bulan12[$key+10]]) ? round((($SV[$bulan12[$key+10]] + $SV[$bulan12[$key+11]] +  $SV[$bulan12[$key+12]])/(($FH24[$bulan12[$key+10]] + $FH24[$bulan12[$key+11]] + $FH24[$bulan12[$key+12]]) * $numberofengine)*1000),3) : 0),'TBLR',0,'C');
	}

	$pdf->SetFont('Arial','B',7);
	$pdf->Ln();
	$pdf->Cell(60,$tinggi,'','TBLR',0,'L');
	$pdf->SetFont('Arial','',7);
	$pdf->Cell($L,$tinggi,'','TBLR',0,'C');
	for($i=1;$i<=12;$i++)
	{
		$pdf->Cell($L,$tinggi,'','TBLR',0,'C');
	}

	$pdf->SetFont('arial','B',7);
	$pdf->Ln();
	$pdf->Cell(60,$tinggi,'TOTAL ENGINE REMOVALS','TBLR',0,'L');
	$pdf->SetFont('arial','',7);
	$pdf->Cell($L,$tinggi,($engineremovallastyear["Basic Planned"] + $engineremovallastyear["Basic UnPlanned"] + $engineremovallastyear["Non Basic Planned"] + $engineremovallastyear["Non Basic UnPlanned"]),'TBLR',0,'C');
	foreach($bulan as $key => $value)
	{
		$pdf->Cell($L,$tinggi,($engineremoval["Basic Planned"][$value] + $engineremoval["Basic UnPlanned"][$value] + $engineremoval["Non Basic Planned"][$value] + $engineremoval["Non Basic UnPlanned"][$value]),'TBLR',0,'C');
	}

	$pdf->SetFont('arial','B',7);
	$pdf->Ln();
	$pdf->Cell(60,$tinggi,'      - RATE/1000 ENG. HOURS','TBLR',0,'L');
	$pdf->SetFont('arial','',7);
	$pdf->Cell($L,$tinggi, (isset($FHlastyear) <> 0) ? round((($engineremovallastyear["Basic Planned"] + $engineremovallastyear["Basic UnPlanned"] + $engineremovallastyear["Non Basic Planned"] + $engineremovallastyear["Non Basic UnPlanned"])/(array_sum($FHlastyear)*$numberofengine)*1000),3) : "",'TBLR',0,'C');
	foreach($bulan as $key => $value)
	{
		$engremovalrate[$value] = !empty($FH[$value]) ? round((($engineremoval["Basic Planned"][$value] + $engineremoval["Basic UnPlanned"][$value] + $engineremoval["Non Basic Planned"][$value] + $engineremoval["Non Basic UnPlanned"][$value])/($FH[$value] * $numberofengine)*1000),3) : 0;
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
	$rate = !empty($FHengremove) ? round(($predbasplan + $predbasunplan + $prednonbasplan + $prednonbaseunplan)/($FHengremove * $numberofengine)*1000,3) : 0;
	//$rate = $FHengremove * $numberofengine;
	
		$pdf->Cell($L,$tinggi,$rate,'TBLR',0,'C');
	}

	$pdf->Ln();
	$pdf->Text(260,190,'Page : '.$page.'7');

	/*$pdf->SetFont('Arial','B',7);
	$pdf->SetXY($getRX,$getRY);
	$pdf->Rotate(90);
	$pdf->Cell($tinggi*10,10,'REFURBISHMENT','TBLR',0,'C');*/

	//$pdf->Footer($page);

$pdf->AddPage();
include ('EOSgrafik_new_all.php');
$pdf->Image($fileName2,30,40);
	$pdf->Ln();
$pdf->Text(260,190,'Page : '.$page.'8');

/*$pdf->AddPage('P');
$pdf->SetFont('Arial','B',20);
$pdf->writeRotie(50,50,"Soup",90,60);
$pdf->writeRotie(50,100,"Oke banget",270,30);*/

$pdf->Output();
?> 