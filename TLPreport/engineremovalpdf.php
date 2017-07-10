<?php

//include("../../FHC_REPORTS/get_monthly.php");
//require('../fpdf/fpdf.php');
//set_time_limit(auto);
define('FPDF_FONTPATH','fpdf/font/');
require('fpdf/fpdf.php');

/*$actype = "A330-300";
$periode = "2008-04-01";*/
$actype = $_REQUEST["actype"];
$periode = $_REQUEST["periode"];

include("function.php");
  /*$periode = isset($_REQUEST["periode"]) ? $_REQUEST["periode"] : "";
  $actype = isset($_REQUEST["actype"]) ? $_REQUEST["actype"] : "";*/
	$TE = connectimesysTE();

class PDF extends FPDF
{


function Rotate($angle,$x=-1,$y=-1) {

if($x==-1)
$x=$this->x;
if($y==-1)
$y=$this->y;
//if($this->angle!=0)
$this->_out('Q');
$this->angle=$angle;
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
function Header()
{
$T = 4;
//15,8,14,8,13
$P1 = 15;
$P2 = 8;
$P3 = 14;
$P4 = 8;
$P5 = 13;
$P6 = 10;
$P7 = 15;
$P8 = 19;
$P9 = 15;
$P10 = 19;
$P11 = 15;
$P12 = 19;
$P13 = 15;
$P14 = 19;
$P15 = 10;
$P16 = 10;
$P17 = 10;
$P18 = 10;
$P19 = 50;    //Logo
	//$this->SetLeftMargin(25);
		$this->Ln(10);
		$this->SetFont('Arial','B',12);
	
	//Baris ke-1
	$this->SetFillColor(150,150,150);
	$this->SetDrawColor(0,0,0);
	$this->SetLineWidth(0);
	$this->Cell(240,6,'ENGINE REMOVAL AND SHUTDOWN','',1,'C');
	$this->Cell(240,6,'TRENT-768','',1,'C');
	$this->Cell(240,6,$_REQUEST["actype"],'',1,'C');
		$this->SetFont('Arial','B',8);
	$this->SetLineWidth(0);
//$this->Rotate(90);


	$this->Cell($P1,$T,'','TLR',0,'C');
	$this->Cell($P2,$T,'','TLR',0,'C');
	$this->Cell($P3,$T,'','TLR',0,'C');
	$this->Cell($P4,$T,'','TLR',0,'C');
	$this->Cell($P5+$P6+$P7+$P8+$P9+$P10+$P11+$P12+$P13+$P14,$T,'ENGINE SERIAL NUMBER',1,0,'C');
	$this->Cell($P15,$T,'','TLR',0,'C');
	$this->Cell($P16,$T,'','TLR',0,'C');
	$this->Cell($P17,$T,'','TLR',0,'C');
	$this->Cell($P18,$T,'','TLR',0,'C');
	$this->Cell($P19,$T,'','TLR',0,'C');
$this->Ln();
	$this->Cell($P1,$T,'','LR',0,'C');
	$this->Cell($P2,$T,'','LR',0,'C');
	$this->Cell($P3,$T,'','LR',0,'C');
	$this->Cell($P4,$T,'','LR',0,'C');
	$this->Cell($P5,$T,'','LR',0,'C');
	$this->Cell($P6+$P7+$P8+$P9+$P10+$P11+$P12+$P13+$P14,$T,'SHOP VISIT',1,0,'C');
	$this->Cell($P15,$T,'','LR',0,'C');
	$this->Cell($P16,$T,'','LR',0,'C');
	$this->Cell($P17,$T,'','LR',0,'C');
	$this->Cell($P18,$T,'','LR',0,'C');
	$this->Cell($P19,$T,'','LR',0,'C');
$this->Ln();
	$this->Cell($P1,$T,'','LR',0,'C');
	$this->Cell($P2,$T,'','LR',0,'C');
	$this->Cell($P3,$T,'','LR',0,'C');
	$this->Cell($P4,$T,'','LR',0,'C');
	$this->Cell($P5,$T,'','LR',0,'C');
	$this->Cell($P6,$T,'','LR',0,'C');
	$this->Cell($P7+$P8+$P9+$P10+$P11+$P12+$P13+$P14,$T,'REFURBISHMENT',1,0,'C');
	$this->Cell($P15,$T,'','LR',0,'C');
	$this->Cell($P16,$T,'','LR',0,'C');
	$this->Cell($P17,$T,'','LR',0,'C');
	$this->Cell($P18,$T,'','LR',0,'C');
	$this->Cell($P19,$T,'','LR',0,'C');
$this->Ln();
	$this->Cell($P1,$T,'','LR',0,'C');
	$this->Cell($P2,$T,'','LR',0,'C');
	$this->Cell($P3,$T,'','LR',0,'C');
	$this->Cell($P4,$T,'','LR',0,'C');
	$this->Cell($P5,$T,'','LR',0,'C');
	$this->Cell($P6,$T,'','LR',0,'C');
	$this->Cell($P7+$P8+$P9+$P10,$T,'PREDEFINE',1,0,'C');
	$this->Cell($P11+$P12+$P13+$P14,$T,'PREMATURE',1,0,'C');
	$this->Cell($P15,$T,'TSI','LR',0,'C');
	$this->Cell($P16,$T,'CSI','LR',0,'C');
	$this->Cell($P17,$T,'TSN','LR',0,'C');
	$this->Cell($P18,$T,'CSN','LR',0,'C');
	$this->Cell($P19,$T,'REMARKS','LR',0,'C');
$this->Ln();
	$this->Cell($P1,$T,'','LR',0,'C');
	$this->Cell($P2,$T,'','LR',0,'C');
	$this->Cell($P3,$T,'','LR',0,'C');
	$this->Cell($P4,$T,'','LR',0,'C');
	$this->Cell($P5,$T,'','LR',0,'C');
	$this->Cell($P6,$T,'','LR',0,'C');
	$this->Cell($P7+$P8,$T,'BASIC',1,0,'C');
	$this->Cell($P9+$P10,$T,'NON BASIC',1,0,'C');
	$this->Cell($P11+$P12,$T,'BASIC',1,0,'C');
	$this->Cell($P13+$P14,$T,'NON BASIC',1,0,'C');
	$this->Cell($P15,$T,'','LR',0,'C');
	$this->Cell($P16,$T,'','LR',0,'C');
	$this->Cell($P17,$T,'','LR',0,'C');
	$this->Cell($P18,$T,'','LR',0,'C');
	$this->Cell($P19,$T,'','LR',0,'C');
$this->Ln();
	$this->Cell($P1,$T+2,'','BLR',0,'C');$getX = $this->GetX();$getY = $this->GetY();
	$this->Cell($P2,$T+2,'','BLR',0,'C');
	$this->Cell($P3,$T+2,'','BLR',0,'C');
	$this->Cell($P4,$T+2,'','BLR',0,'C');
	$this->Cell($P5,$T+2,'','BLR',0,'C');
	$this->Cell($P6,$T+2,'','BLR',0,'C');
	$this->Cell($P7,$T+2,'PLANNED',1,0,'C');
	$this->Cell($P8,$T+2,'UNPLANNED',1,0,'C');
	$this->Cell($P9,$T+2,'PLANNED',1,0,'C');
	$this->Cell($P10,$T+2,'UNPLANNED',1,0,'C');
	$this->Cell($P11,$T+2,'PLANNED',1,0,'C');
	$this->Cell($P12,$T+2,'UNPLANNED',1,0,'C');
	$this->Cell($P13,$T+2,'PLANNED',1,0,'C');
	$this->Cell($P14,$T+2,'UNPLANNED',1,0,'C');
	$this->Cell($P15,$T+2,'','BLR',0,'C');
	$this->Cell($P16,$T+2,'','BLR',0,'C');
	$this->Cell($P17,$T+2,'','BLR',0,'C');
	$this->Cell($P18,$T+2,'','BLR',0,'C');
	$this->Cell($P19,$T+2,'','BLR',0,'C');
$this->SetY($getY+$T+2);
$this->Rotate(90);
$this->Cell($T*6,$P1,'DATE',0,0,'C');
$this->SetY($getY+$P1+$P2/2+2);
$this->Cell($T*6,$P2,'STATION',0,0,'C');
$this->SetY($getY+$P1+$P2+$P3/2+2);
$this->Cell($T*6,9,'AIRCRAFT',0,0,'C');
$this->SetY($getY+$P1+$P2+$P3+$P4/2+2);
$this->Cell($T*6,$P4,'POSITION',0,0,'C');
$this->SetY($getY+$P1+$P2+$P3+$P4+$P5/2+2);
$this->Cell($T*5+1,9,'CONVENIENCE',0,0,'C');
$this->SetY($getY+$P1+$P2+$P3+$P4+$P5+$P6/2+2);
$this->Cell($T*4+2,$P6,'CAMPAIGN',0,0,'C');
//$this->Cell($T*4+2,$P7,'CAMPAIGN',0,0,'C');
//$this->Write($getX+$P1-$P2/4,'STATION');
//$this->SetXY(30,$getY);
//$this->Write(0,'STATION');

	$this->SetY(54);

	if($this->PageNo()!=1)
	{
		$this->Ln();
	}
	$this->Rotate(0);

}

//Page footer
function Footer()
{
    //Position at 1.5 cm from bottom
    $this->SetY(-15);
    //Arial italic 8
    $this->SetFont('Arial','',8);
    //Page number
//    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

//Instanciation of inherited class
$pdf=new PDF('L');
$pdf->SetMargins(0.5,1,0.5);
$pdf->AliasNbPages();
$pdf->AddPage();
//$pdf->SetAutoPageBreak(true,10);
$pdf->SetFont('Times','',8);

//15,8,14,8,13
//$pdf->SetLeftMargin(10);
$tinggi = 3.5;
$P1 = 15;
$P2 = 8;
$P3 = 10;
$P4 = 8;
$P5 = 10;
$P6 = 10;
$P7 = 15;
$P8 = 19;
$P9 = 15;
$P10 = 19;
$P11 = 15;
$P12 = 19;
$P13 = 15;
$P14 = 19;
$P15 = 10;
$P16 = 10;
$P17 = 10;
$P18 = 10;
$P19 = 50;
	$pdf->SetFillColor(180,180,180);
	$pdf->SetDrawColor(0,0,0);
	
	
	$qryFH = "SELECT `tbl_removaldesc`.`Reason`, `tbl_engineremove`.`DateRemove`, `tbl_engineremove`.`Station`, `tbl_engineremove`.`AircraftReg`, `tbl_engineremove`.`Pos`, `tbl_engineremove`.`SNOff`, `tbl_engineremove`.`TSI`,`tbl_engineremove`.`CSI`, `tbl_engineremove`.`TSN`, `tbl_engineremove`.`CSN`, `tbl_engineremove`.`Remark` FROM `tbl_engineremove` Inner Join `tbl_removaldesc` ON `tbl_engineremove`.`ReasonRemoval` = `tbl_removaldesc`.`ID` WHERE `tbl_engineremove`.`AircraftType` = '".$actype."' AND DATE_FORMAT(`tbl_engineremove`.`DateRemove`,'%Y-%m') <= '".$_REQUEST["periode"]."' ORDER BY DATE_FORMAT(`tbl_engineremove`.`DateRemove`,'%Y-%m') DESC";
	$resultFH = mysql_query($qryFH);


//	$xml_remove ="<remove>\r\n";
	while ($hasil = mysql_fetch_array($resultFH))
  {
  	$date = $hasil["DateRemove"];
	$Explode = explode("-",$date);
	$hslDate = $Explode[2]."/".$Explode[1]."/".substr($Explode[0],2,4);
	$sta = $hasil["Station"];
	$acreg = $hasil["AircraftReg"];
	$pos = $hasil["Pos"];
	$convinience = convinience($hasil["Reason"],$hasil["SNOff"]);
	$campaign = campaign($hasil["Reason"],$hasil["SNOff"]);
	$predbasicplan = predbasicplan($hasil["Reason"],$hasil["SNOff"]);
	$predbasicunplan = predbasicunplan($hasil["Reason"],$hasil["SNOff"]);
	$prednonbasicplan = prednonbasicplan($hasil["Reason"],$hasil["SNOff"]);
	$prednonbasicunplan= prednonbasicunplan($hasil["Reason"],$hasil["SNOff"]);
	$prembasicplan=prembasicplan($hasil["Reason"],$hasil["SNOff"]);
	$prembasicunplan=prembasicunplan($hasil["Reason"],$hasil["SNOff"]);
	$premnonbasicplan=premnonbasicplan($hasil["Reason"],$hasil["SNOff"]);
	$premnonbasicunplan=premnonbasicunplan($hasil["Reason"],$hasil["SNOff"]);
	$tsi =$hasil["TSI"];
	$csi=$hasil["CSI"];
	$tsn=$hasil["TSN"];
	$csn=$hasil["CSN"];
  	$remark =$hasil["Remark"];
	
	
	
	
	
		$pdf->Ln();
		$pdf->SetBorders(array("T","T","T","T","T","T","T","T","T","T","T","T","T","T","T","T","T","T","T","T","T","T","T","T"));
		
		$pdf->SetWidths(array(15,8,14,8,13,10,15,19,15,19,15,19,15,19,10,10,10,10,50));
		$pdf->SetHeights(array(3,3,3,3,3,3,3,3,3,3,3,3,3,3,3,3,3,3,3));
		$pdf->SetAligns(array('C','C','C','C','L','C','C','C','C','C','C','C','C','C','C','C','C','L','L'));
		$IsiField = array($hslDate, $sta ,$acreg, $pos, $convinience, $campaign, $predbasicplan ,$predbasicunplan,$prednonbasicplan,$prednonbasicunplan, $prembasicplan,$prembasicunplan,$premnonbasicplan,$premnonbasicunplan,$tsi,$csi,$tsn,$csn,$remark);
		$pdf->Row($IsiField);
	/*	$pdf->Cell($P1,$tinggi,$hslDate,'TBLR',0,'C');
		$pdf->Cell($P2,$tinggi,$sta,'TBLR',0,'C');
		$pdf->Cell($P3,$tinggi,$acreg,'TBLR',0,'C');
		$pdf->Cell($P4,$tinggi,$pos,'TBLR',0,'C');
		$pdf->Cell($P5,$tinggi,$convinience,'TBLR',0,'C');
		$pdf->Cell($P6,$tinggi,$campaign ,'TBLR',0,'C');
		$pdf->Cell($P7,$tinggi,$predbasicplan,'TBLR',0,'C');
		$pdf->Cell($P8,$tinggi,$predbasicunplan,'TBLR',0,'C');
		$pdf->Cell($P9,$tinggi,$prednonbasicplan,'TBLR',0,'C');
		$pdf->Cell($P10,$tinggi,$prednonbasicunplan,'TBLR',0,'C');
		$pdf->Cell($P11,$tinggi,$prembasicplan,'TBLR',0,'C');
		$pdf->Cell($P12,$tinggi,$prembasicunplan,'TBLR',0,'C');
		$pdf->Cell($P13,$tinggi,$premnonbasicplan,'TBLR',0,'C');
		$pdf->Cell($P14,$tinggi,$premnonbasicunplan,'TBLR',0,'C');
		$pdf->Cell($P15,$tinggi,$tsi,'TBLR',0,'C');
		$pdf->Cell($P16,$tinggi,$csi,'TBLR',0,'C');
		$pdf->Cell($P17,$tinggi,$tsn,'TBLR',0,'C');
		$pdf->Cell($P18,$tinggi,$csn,'TBLR',0,'C');
		$pdf->MultiCell($P19,$tinggi,$remark,'TBLR',0,'L');
		$pdf->SetY(100);*/
		
		
	}


$pdf->Output();
?>