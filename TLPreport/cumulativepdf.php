<?php
require('fpdf/fpdf.php');
include 'function.php';

class PDF extends FPDF
{


//Simple table
function BasicTable($header,$actype,$periode,$tinggi,$reghal)
{
    //Header
    //foreach($header as $col)
    //    $this->Cell(40,17,$col,10);
		//$this->SetX(40);
		$this->SetY($reghal);
	    $this->Cell(272,7,$header,'LRT',0,'C');
		$this->Ln();
		$this->Cell(272,7,((substr($actype,0,1) == "A") || ($actype == "A330-200") ? "AIRBUS" : (($actype == "CRJ-1000") ? "BOMBARDIER" : "BOEING"))." ".$actype,'LRB',0,'C');
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
function bln($bulan,$periode,$tinggi){
	$this->SetFont('Arial','',9);
	$this->Cell(30,$tinggi,'A/C REG','LBRT',0,'C',0);
	$this->Cell(20,$tinggi,'YEAR','LBR',0,'C',0);
	foreach ($bulan as $k => $v){
		$this->Cell(18.5,$tinggi,bulan($v),'TLRB',0,'C');
	}
	//$this->Cell(27,6,'LAST 12 MTHS','LBR',0,'C');
	$this->Ln();
}
function fleet($bulan,$periode,$tinggi){
	$this->Cell(30,$tinggi,'','LBRT',0,'L',0);
	$this->Cell(20,$tinggi,(substr($periode,0,4)-1),'LBR',0,'C',0);
	foreach ($bulan as $k => $v){
		$this->Cell(18.5,$tinggi,'','TLRB',0,'C');
	}
	//$this->Cell(27,6,'','LBR',0,'C');
	$this->Ln();
}
}
  $periode = isset($_REQUEST["periode"]) ? $_REQUEST["periode"] : "";
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
	$FC = queryFC12($periode,$actype,12);
	$fleet = fleet($periode,$actype);
	$fleet = $fleet[$periode];
	$reg = reg($actype);//die(print_r($reg));
	$jumlahfleet = count($reg);
	//$FHlastyear = queryFH12((substr($periode,0,4)-1)."-12",$actype);die(print_r($FHlastyear));
	//$FClastyear = queryFC12((substr($periode,0,4)-1)."-12",$actype);
	
	//$connectAMS = connectimesys('mcdr');
	$cumulativeFH = cumulativeFH($periode,$actype);
	$cumulativeFH12 = cumulativeFH12((substr($periode,0,4)-1)."-01",(substr($periode,0,4)-1)."-12",$actype);
	//die(print_r($cumulativeFH));
	$cumulativeFC = cumulativeFC($periode,$actype);
	$cumulativeFC12 = cumulativeFC12((substr($periode,0,4)-1)."-01",(substr($periode,0,4)-1)."-12",$actype);//die($cumulativeFC12);
	
	$jumlahhal = ($jumlahfleet > 14) ? ($jumlahfleet-($jumlahfleet%14))/14 + 1 : 1;//die(print_r($jumlahhal));
	//for ($a=1;$a<=$jumlahhal;$a++){
		$reghal = array_chunk($reg,14);
	//}

	//die(print_r($jumlahhal));

$pdf=new PDF('L','mm','A4');

for ($gh=0;$gh<$jumlahhal;$gh++){

//Column titles
$header='CUMULATIVE FLIGHT HOURS AND TAKE OFF '.(substr($periode,0,4) - 1).' - '.(substr($periode,0,4));
//Data loading
$tinggi = 4.5;
//$data=$pdf->LoadData('countries.txt');
if (count($reghal[$gh]) < 7){
	$margin = 50;	
} else {
	$margin = 13;
}
$pdf->SetFont('Arial','B',14);
$pdf->AddPage();
$pdf->BasicTable($header,$actype,$periode,$tinggi,$margin);
$pdf->bln($bulan,$periode,$tinggi);
$pdf->fleet($bulan,$periode,$tinggi);
$pdf->SetFillColor(200);
//die(print_r($reghal));
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
$pdf->Text(260,195,'Page : '.$page.$halaman);

}
$pdf->SetLineWidth(0.5);
//$pdf->Line();

$pdf->Output();
?> 