<?php

require('fpdf/fpdf.php');

include "koneksi/conn.php";

//nclude "test/connMysql.php";
set_time_limit(auto);




class PDF extends FPDF
{
//Page header
function Header()
{
    //Logo
	$this->Ln(3);
		
		$this->SetFont('Arial','BU',10);
		$this->Cell(0,5,'GA'.' '.$_REQUEST['acType'].' '.'ETOPS EVENTS','',0,'C');

	$this->SetFont('Arial','',10);
	$this->SetFillColor(150,150,150);
	$this->SetDrawColor(0,0,0);

	//Baris ke-1
  $this->Ln(10);
	$this->Cell(7,5,'NO','TBLR',0,'C',1);
	$this->Cell(15,5,'REG','TBLR',0,'C',1);
	$this->Cell(24,5,'DATE','TBLR',0,'C',1);
	$this->Cell(20,5,'FLT. NO','TBLR',0,'C',1);
	$this->Cell(10,5,'ATA','TBLR',0,'C',1);
	$this->Cell(40,5,'PHASEOF FLIGHT','TBLR',0,'C',1);
	$this->Cell(75,5,'DESCRIPTION OF EVENT','TBLR',0,'C',1);
	$this->Cell(85,5,'ACTION TAKEN','TBLR',0,'C',1);
	
  $this->Ln();
	$this->Cell(7,0.6,'','TBL',0,'C');
	$this->Cell(15,0.6,'','TB',0,'C');
	$this->Cell(24,0.6,'','TB',0,'C');
	$this->Cell(20,0.6,'','TB',0,'C');
	$this->Cell(10,0.6,'','TB',0,'C');
	$this->Cell(40,0.6,'','TB',0,'C');
	$this->Cell(75,0.6,'','TB',0,'C');
	$this->Cell(85,0.6,'','TBR',0,'C');

	
	if($this->PageNo()!=1)
	{
		$this->Ln();
	}
}

//Page footer
function Footer()
{
    //Position at 1.5 cm from bottom
    $this->SetY(-15);
    //Arial italic 8
    $this->SetFont('Arial','B',6);
/*		$this->Cell(0,0,'NOTE :',0,0,'');
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
*/
}
}

//Instanciation of inherited class
$pdf=new PDF('L');
$pdf->AliasNbPages();
$pdf->AddPage();
//$pdf->SetAutoPageBreak(true,10);
$pdf->SetFont('Times','',8);

$Qstops = "SELECT distinct
`tbl_aml`.`dateAML`,
`tbl_aml`.`seqNo`,
`tbl_aml_detail`.`subjectATA`,
`tbl_aml_detail`.`faultCode`,
`tbl_aml_detail`.`problem`,
`tbl_aml_detail`.`action`,
`tbl_aml`.`createBy`,
`tbl_aml`.`unit`,
`tbl_aml`.`acReg`,
`tbl_aml`.`idxAML`,
`tbl_aml_statreffpic`.`actAuthId`,
`tbl_aml_statreffpic`.`actSta`,
`tbl_aml`.`fin`,
`tbl_aml`.`acType`,
`tbl_master_actype`.`ACType`,
`tbl_master_acreg`.`acreg`,
`tbl_aml`.`flightNo`,
`tbl_aml`.`depSta`
FROM
`tbl_aml`
Inner Join `tbl_aml_detail` ON `tbl_aml`.`idxAML` = `tbl_aml_detail`.`idxAML`
Inner Join `tbl_aml_statreffpic` ON `tbl_aml`.`idxAML` = `tbl_aml_statreffpic`.`idxAML`
Inner Join `tbl_master_acreg` ON `tbl_aml`.`acReg` = `tbl_master_acreg`.`acreg`
Inner Join `tbl_master_actype` ON `tbl_master_acreg`.`actypeID` = `tbl_master_actype`.`ACTypeID`
 WHERE  substring(`tbl_aml`.`dateAML`,1,7)= '".$_REQUEST['thnAkhir']."-".$_REQUEST['bln']."'  and `tbl_aml_detail`.`action` like '% etops %' ORDER BY `tbl_aml`.`dateAML` DESC,`tbl_aml`.`seqNo` ASC";


$selEtops = $db->Execute($Qstops);
$f=1;
while(!$selEtops->EOF)
{

$date[] = $selEtops->fields['dateAML'];
$acreg[] = $selEtops->fields['acreg'];
$flightNo[] = $selEtops->fields['flightNo'];
$subjectATA[] = $selEtops->fields['subjectATA'];
$problem[] = $selEtops->fields['problem'];
$action[] = $selEtops->fields['action'];

$f++;
$selEtops->MoveNext();
}
$sumEtops = $selEtops->RecordCount();
	//Baris ke-2
/*  $pdf->Ln();
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
*/

for($i=1;$i<=$sumEtops;$i++)
{
	$pdf->Ln();	
	$pdf->Cell(7,4,$i,'TBLR',0,'C');
	$pdf->Cell(15,4,$acreg[$i],'TBLR',0,'C');
	$pdf->Cell(24,4,$date[$i],'TBLR',0,'C');
	$pdf->Cell(20,4,$flightNo[$i],'TBLR',0,'C');
	$pdf->Cell(10,4,$subjectATA[$i],'TBLR',0,'C');
	$pdf->Cell(40,4,'','TBLR',0,'C');
	$pdf->Cell(75,4,$problem[$i],'TBLR',0,'C');
	
	$pdf->Cell(0,4,$action[$i],'TBLR',0,'C');
}

//Baris Footer

$pdf->Output();
?>