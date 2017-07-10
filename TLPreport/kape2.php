<?php

require('fpdf/fpdf.php');


class PDF extends FPDF
{
//Page header
function Header()
{
    //Logo
	$this->Ln(3);
		$this->SetFont('Arial','B',10);
		$this->Cell(0,5,'GA A330                         PILOT REPORT','TLBR',1,'C');

	if($this->PageNo()!=1)
	{
		$this->Ln();
	}
}

//Page footer
function Footer()
{
    //Position at 1.5 cm from bottom
    $this->SetY(-45);
    //Arial italic 8
    $this->SetFont('Arial','B',6);
		$this->Cell(0,0,'NOTE :',0,0,'');
		$this->SetFont('Arial','',6);
		//$this->Ln();
    $this->SetY(-40);
		$this->Cell(0,0,'The Alert Level (AL) is based on monthly Technical Delay Rate of last Four Quarters (Average + 2 *STD',0,0,'');
    $this->SetY(-35);
		$this->Cell(0,0,'The Alert Status colomn will show "RED-1" if the last month Delay Rate exceed the AL, "RED-2" if this is true for the last two consecutive months,',0,0,'');
    $this->SetY(-30);
		$this->Cell(0,0,'and "RED-3" if this is true for the last three consecutive months.',0,0,'');
    $this->SetY(-25);
		$this->Cell(0,0,'The TREND colomn show an "UP" or "DOWN" when the rate has increased or decreased for 3 months',0,0,'');
    $this->SetY(-20);
		$this->Cell(0,0,'                         Compiled and Issued by GMF Reliability Service',0,0,'C');		

}
}

//Instanciation of inherited class
$pdf=new PDF('P');
$pdf->AliasNbPages();
$pdf->AddPage();
//$pdf->SetAutoPageBreak(true,10);
$pdf->SetFont('Times','',8);

	//Baris ke-1
  $pdf->Ln();
	$pdf->Cell(45,4,'TOTAL FLIGHT HOURS','TBLR',0,'C');
	$pdf->Cell(9,4,'1503','TBLR',0,'C');
	$pdf->Cell(9,4,'1795','TBLR',0,'C');
	$pdf->Cell(9,4,'1926','TBLR',0,'C');
	$pdf->Cell(11,4,'5224','TBLR',0,'C');
	$pdf->Cell(14,4,'19967','TBLR',0,'C');

	//Baris ke-2
  $pdf->Ln();
	$pdf->Cell(45,8,'','BTLR',0,'C');
	$pdf->Cell(9,4,'OCT','TBLR',0,'C');
	$pdf->Cell(9,4,'NOV','TBLR',0,'C');
	$pdf->Cell(9,4,'DEC','TBLR',0,'C');
	$pdf->Cell(11,4,'LAST 3','TBLR',0,'C');
	$pdf->Cell(14,4,'12 Months','TBLR',0,'C');
	$pdf->Cell(9,4,'OCT','TBLR',0,'C');
	$pdf->Cell(9,4,'NOV','TBLR',0,'C');
	$pdf->Cell(9,4,'DEC','TBLR',0,'C');
	$pdf->Cell(14,4,'3 Months','TBLR',0,'C');
	$pdf->Cell(14,4,'12 Months','TBLR',0,'C');
	$pdf->Cell(11,4,'ALERT','TBLR',0,'C');
	$pdf->Cell(12,4,'ALERT','TBLR',0,'C');
	$pdf->Cell(12,4,'TREND','TBLR',0,'C');

	//Baris ke-3
  $pdf->Ln();
	$pdf->Cell(45,-1,'ATA CHAPTER','LR',0,'C');
	$pdf->Cell(9,4,'','TBLR',0,'C');
	$pdf->Cell(9,4,'','TBLR',0,'C');
	$pdf->Cell(9,4,'','TBLR',0,'C');
	$pdf->Cell(11,4,'Months','TBLR',0,'C');
	$pdf->Cell(14,4,'2008','TBLR',0,'C');
	$pdf->Cell(9,4,'RATE','TBLR',0,'C');
	$pdf->Cell(9,4,'RATE','TBLR',0,'C');
	$pdf->Cell(9,4,'RATE','TBLR',0,'C');
	$pdf->Cell(14,4,'RATE','TBLR',0,'C');
	$pdf->Cell(14,4,'RATE','TBLR',0,'C');
	$pdf->Cell(11,4,'LEVEL','TBLR',0,'C');
	$pdf->Cell(12,4,'STATUS','TBLR',0,'C');
	$pdf->Cell(12,4,'','TBLR',0,'C');


for($i=1;$i<=15;$i++)
{
	$pdf->Ln();	
	$pdf->Cell(7,4,'','TBLR',0,'C');
	$pdf->Cell(38,4,'','TBLR',0,'C');
	$pdf->Cell(9,4,'','TBLR',0,'C');
	$pdf->Cell(9,4,'','TBLR',0,'C');
	$pdf->Cell(9,4,'','TBLR',0,'C');
	$pdf->Cell(11,4,'','TBLR',0,'C');
	$pdf->Cell(14,4,'','TBLR',0,'C');
	$pdf->Cell(9,4,'','TBLR',0,'C');
	$pdf->Cell(9,4,'','TBLR',0,'C');
	$pdf->Cell(9,4,'','TBLR',0,'C');
	$pdf->Cell(14,4,'','TBLR',0,'C');
	$pdf->Cell(14,4,'','TBLR',0,'C');
	$pdf->Cell(11,4,'','TBLR',0,'C');
	$pdf->Cell(12,4,'','TBLR',0,'C');
	$pdf->Cell(12,4,'','TBLR',0,'C');


}

//Baris Footer

$pdf->Output();
?>