<?
require_once('Connections/msi_connect.php'); 
include "ebscript.php";
include "function_db.php";
//include "wrap.php";
define('FPDF_FONTPATH','pdf/fpdf/font/');
require('pdf/fpdf/fpdf.php');
//require('fpdf.php');

// SHORT VARIABLE
//$aircraft = $_GET['aircraft'];
$rev_id   = $_GET['rev_id'];
$msi_rvcd   = $_GET['rvcd'];
$rev_num      = $_GET['rev_num'];
$ac_type = $_GET['ac_type'];
$ms_num   = $_GET['ms_num'];
$start    = '2006-01-01';
$end      = '2008-11-10';

//echo $ac_type;
//echo $ms_num;
/*$condition = stripslashes($_GET['condition']);

if (isset($_GET['ms_num']) {
  $condition = "AND msi_data.ms_num = '$ms_num'";
}*/

// QUERY AIRCRAFT DETAIL
//$ac_detail = mysql_query ("select ac_type from msi_aircraft where ac_code = '$aircraft'", "root", "doddy") or die ("failed query aircraft detail");
//while ($ac_d = mysql_fetch_array ($ac_detail)) {
  //$ac_name = $ac_d[0];
//}


// QUERY ALL REQUIRED DATA
$query_revision = "SELECT msi_revision.ms_num, msi_data.task_title, msi_data.task_desc, msi_data.task_subdesc, msi_data.task_code, msi_revision.reason, msi_revision.detail_reason, msi_revision.rev_num, msi_eff.ac_eff, 
msi_ref.ref_man, msi_data.resp, msi_data.effdate, msi_data.qtyac, msi_data.cat,
msi_revision.prepBy, msi_revision.prepUnit, msi_revision.appBy, msi_revision.appUnit,
group_concat(distinct concat(msi_sg.sg_code,' ', msi_sg.sg_num) SEPARATOR '\n') as msisg, 
concat(msi_interval.code_int,' ', msi_interval.int_num,' ', msi_interval.int_dim) as msi_intval FROM msi_revision
left join msi_data on msi_data.ms_num = msi_revision.ms_num  AND msi_data.ac_type = msi_revision.aircraft
left join msi_eff on msi_eff.ms_num = msi_data.ms_num AND msi_eff.ac_type = msi_data.ac_type
left join msi_interval on msi_interval.ms_num = msi_data.ms_num AND msi_interval.ac_type = msi_data.ac_type
left join msi_ref on msi_ref.ms_num = msi_data.ms_num AND msi_data.ac_type = msi_ref.ac_type
left join msi_sg on msi_sg.ms_num = msi_data.ms_num AND msi_sg.ac_type = msi_data.ac_type
WHERE msi_revision.ms_num = '$ms_num' AND msi_revision.aircraft = '$ac_type' AND msi_revision.rvcd = '$msi_rvcd' AND msi_revision.id = '$rev_id' group by msi_data.ms_num";

$r_revision = query_data($query_revision);

$revision = mysql_query($query_revision, $msi_connect) or die(mysql_error());
$row_revision = mysql_fetch_assoc($revision);
$totalRows_revision = mysql_num_rows($revision);

//echo $row_revision['ms_num'];

// PDF REPORTING
class PDF extends FPDF
{
//Page header
function Header()
{
    global $ms_num;
    global $rev_num;
    global $ac_type;
    //$this->SetX((210-$w)/2);

    //Logo
    $this->SetY(20);
	//$this->SetX(105);
    $this->Image('logo_garuda.jpg',110,5,55,15);
    $this->SetFont('Arial','B',10);
	//$this->SetX(0);
    $this->cell(0,5,'CAMP ITEM CHANGE / COMPONENT DATA CHANGE',0,1,'C');
	//$this->Ln();
	$this->SetFont('Arial','B',9);
	$this->cell(23,5,'Change No :',0,0,'L');
	$this->cell(210,5,$rev_num,0,0,'L');
	$this->cell(20,5,'A/C Type :',0,0,'L');
	$this->cell(30,5,$ac_type,0,1,'L');
	$this->cell(28,5,'CAMP Item No :',0,0,'L');
	$this->cell(15,5,$ms_num,0,0,'L');
	//$this->Ln();
	//$this->Ln();
}

//Page footer
function Footer()
{
    //$this->SetY(-28);
    //$this->cell(0,3,"",'B','0','C');
    //$this->Ln();
    $this->SetY(-20);
    $this->SetFont('Arial','',9);
    $this->Cell(100,5,'Form : MZ 3-13',0,0,'L');
    $this->Ln();
    $this->Cell(0,5,'Printed on : '.date('d M Y'),0,0,'L');

    //Arial italic 8
    $this->SetXY(-150,-18);
    $this->SetFont('Arial','',9);
    //Page number
    $this->Cell(0,5,'Page '.$this->PageNo().' of {nb}',0,0,'R');
}
function WordWrap(&$text, $maxwidth)
{
    $text = trim($text);
    if ($text==='')
        return 0;
    $space = $this->GetStringWidth(' ');
    $lines = explode("\n", $text);
    $text = '';
    $count = 0;

    foreach ($lines as $line)
    {
        $words = preg_split('/ +/', $line);
        $width = 0;

        foreach ($words as $word)
        {
            $wordwidth = $this->GetStringWidth($word);
            if ($width + $wordwidth <= $maxwidth)
            {
                $width += $wordwidth + $space;
                $text .= $word.' ';
            }
            else
            {
                $width = $wordwidth + $space;
                $text = rtrim($text)."\n".$word.' ';
                $count++;
            }
        }
        $text = rtrim($text)."\n";
        $count++;
    }
    $text = rtrim($text);
    return $count;
}
}

//Instanciation of inherited class
define('FPDF_FONTPATH','pdf/fpdf/font/');
$pdf=new PDF('L','mm','A4');
$pdf->AliasNbPages();
$pdf->AddPage();

$pdf->SetAutoPageBreak(true,30);
$pdf->SetFont('Arial','B',9);

// Kembali ke posisi start
$pdf->setXY(10,35);
$pdf->Cell(65,5,'CAMP ITEM TITLE','TLR',0,'C');
$pdf->Cell(15,5,'TASK','TLR',0,'C');
$pdf->Cell(18,5,'A/C EFF','TLR',0,'C');
$pdf->Cell(20,5,'INTV','TLR',0,'C');
$pdf->Cell(40,5,'SIGN CODE / REF NO','TLR',0,'C');
$pdf->Cell(15,5,'MSG-3','TLR',0,'C');
$pdf->Cell(10,5,'RVCD','TLR',0,'C');
$pdf->Cell(20,5,'CAMP','TLR',0,'C');
$pdf->Cell(25,5,'EFFECT','TLR',0,'C');
$pdf->Cell(25,5,'PART','TLR',0,'C');
$pdf->Cell(10,5,'QTY','TLR',0,'C');
$pdf->multiCell(12,5,'COMP','TLR',0,'C');
$pdf->Cell(65,5,'TASK - DESCRIPTION','BLR',0,'C');
$pdf->Cell(15,5,'CODE','BLR',0,'C');
$pdf->Cell(18,5,'ENG./EFF','BLR',0,'C');
$pdf->Cell(20,5,'','BLR',0,'C');
$pdf->Cell(40,5,'','BLR',0,'C');
$pdf->Cell(15,5,'CAT','BLR',0,'C');
$pdf->Cell(10,5,'','BLR',0,'C');
$pdf->Cell(20,5,'RESP','BLR',0,'C');
$pdf->Cell(25,5,'DATE','BLR',0,'C');
$pdf->Cell(25,5,'NUMBER','BLR',0,'C');
$pdf->Cell(10,5,'','BLR',0,'C');
$pdf->Cell(12,5,'CAT','BLR',0,'C');
$pdf->ln();

//ISI OLD

$pdf->SetFont('Arial','BU',9);

$pdf->Cell(65,5,'OLD','LR',0,'L');
$pdf->Cell(15,5,'','LR',0,'C');
$pdf->Cell(18,5,'','LR',0,'C');
$pdf->Cell(20,5,'','LR',0,'C');
$pdf->Cell(40,5,'','LR',0,'C');
$pdf->Cell(15,5,'','LR',0,'C');
$pdf->Cell(10,5,'','LR',0,'C');
$pdf->Cell(20,5,'','LR',0,'C');
$pdf->Cell(25,5,'','LR',0,'C');
$pdf->Cell(25,5,'','LR',0,'C');
$pdf->Cell(10,5,'','LR',0,'C');
$pdf->Cell(12,5,'','LR',0,'C');
//$pdf->ln();
$pdf->SetFont('Arial','',8);

$old = 23;
//Setting text
$reason=$row_revision['reason'];
$title=$row_revision['task_title'];
$desc=$row_revision['task_desc'];
$subdesc=$row_revision['task_subdesc'];
$msisg=$row_revision['msisg'];
//Wrapping section
//$pdf->WordWrap($reason, 65);
$pdf->WordWrap($title, 65);
$nb=$pdf->WordWrap($desc, 65);
$pdf->WordWrap($subdesc, 65);
$pdf->SetFont('Arial','B',8);
$pdf->Write(5, $title);
$Y0=$pdf->GetY();
$pdf->ln();
$pdf->SetFont('Arial','',8);
$pdf->Write(5, $desc);
$pdf->ln();
$Y=$pdf->GetY();
$pdf->Write(5, $subdesc);
$pdf->ln();
$Y100=$pdf->GetY();

//Drawing table isi
$pdf->SetXY(10,$Y0);
$pdf->Cell(65,5,'','LR',0,'L');
$pdf->Cell(15,5,$row_revision['task_code'],'LR',0,'C');
$pdf->Cell(18,5,$row_revision['ac_eff'],'LR',0,'C');
$pdf->Cell(20,5,$row_revision['msi_intval'],'LR',0,'C');
$Y7=$pdf->GetY();
$X7=$pdf->GetX();
$pdf->WordWrap($msisg, 65);

$pdf->Cell(40,5,'','LR',0,'C');
$pdf->Cell(15,5,'','LR',0,'C');
$pdf->Cell(10,5,$msi_rvcd,'LR',0,'C');
$pdf->Cell(20,5,$row_revision['resp'],'LR',0,'C');
$pdf->Cell(25,5,$row_revision['effdate'],'LR',0,'C');
$pdf->Cell(25,5,'','LR',0,'C');
$pdf->Cell(10,5,$row_revision['qtyac'],'LR',0,'C');
$pdf->Cell(12,5,$row_revision['cat'],'LR',0,'C');
$Y9=$pdf->GetY();

$pdf->SetXY($X7,$Y7);
$pdf->Multicell(40,5,$msisg,0,'C');
//$pdf->ln();

$Y8=$pdf->GetY();

//$pdf->SetXY(10,$Y7+40);

// Drawing table border perpanjangan
if($Y8>$Y100){
$pdf->SetXY(10,$Y9);
$ext=$Y8-$Y0;$Cek='O';$Ymax=$Y8;
}
else {
$pdf->SetXY(10,$Y0);
$ext=$Y100-$Y0;$Cek='1';$Ymax=$Y100;
}

$pdf->Cell(65,$ext,'','LR',0,'L');
$pdf->Cell(15,$ext,'','LR',0,'C');
$pdf->Cell(18,$ext,'','LR',0,'C');
$pdf->Cell(20,$ext,'','LR',0,'C');
$pdf->Cell(40,$ext,'','LR',0,'C');
$pdf->Cell(15,$ext,'','LR',0,'C');
$pdf->Cell(10,$ext,'','LR',0,'C');
$pdf->Cell(20,$ext,'','LR',0,'C');
$pdf->Cell(25,$ext,'','LR',0,'C');
$pdf->Cell(25,$ext,'','LR',0,'C');
$pdf->Cell(10,$ext,'','LR',0,'C');
$pdf->Cell(12,$ext,'','LR',0,'C');
//$pdf->ln();

// Drawing table border
//$pdf->SetXY(10,$Y);
//$Y2=$pdf->GetY();


//ISI NEW
$pdf->SetXY(10,$Ymax);
$pdf->SetFont('Arial','BU',9);

$pdf->Cell(65,5,'NEW','TLR',0,'L');
$pdf->Cell(15,5,'','TLR',0,'C');
$pdf->Cell(18,5,'','TLR',0,'C');
$pdf->Cell(20,5,'','TLR',0,'C');
$pdf->Cell(40,5,'','TLR',0,'C');
$pdf->Cell(15,5,'','TLR',0,'C');
$pdf->Cell(10,5,'','TLR',0,'C');
$pdf->Cell(20,5,'','TLR',0,'C');
$pdf->Cell(25,5,'','TLR',0,'C');
$pdf->Cell(25,5,'','TLR',0,'C');
$pdf->Cell(10,5,'','TLR',0,'C');
$pdf->Cell(12,5,'','TLR',0,'C');
$pdf->ln();

$pdf->SetFont('Arial','B',8);
$pdf->Write(5, $title);
$Y3=$pdf->GetY();

$pdf->ln();
$pdf->SetFont('Arial','',8);
$pdf->Write(5, $desc);
//$Y3=$pdf->GetY();
$pdf->ln();
$pdf->Write(5, $subdesc);
$pdf->ln();
$Y4=$pdf->GetY();
$pdf->SetXY(10,$Y3);

//Drawing table isi
$pdf->SetXY(10,$Y3);

$pdf->Cell(65,5,'','LR',0,'L');
$pdf->Cell(15,5,$row_revision['task_code'],'LR',0,'C');
$pdf->Cell(18,5,$row_revision['ac_eff'],'LR',0,'C');
$pdf->Cell(20,5,$row_revision['msi_intval'],'LR',0,'C');

$Y10=$pdf->GetY();
$X10=$pdf->GetX();

$pdf->Cell(40,5,'','LR',0,'C');
$pdf->Cell(15,5,'','LR',0,'C');
$pdf->Cell(10,5,$msi_rvcd,'LR',0,'C');
$pdf->Cell(20,5,$row_revision['resp'],'LR',0,'C');
$pdf->Cell(25,5,$row_revision['effdate'],'LR',0,'C');
$pdf->Cell(25,5,'','LR',0,'C');
$pdf->Cell(10,5,$row_revision['qtyac'],'LR',0,'C');
$pdf->Cell(12,5,$row_revision['cat'],'LR',0,'C');
$pdf->ln();

$Y99=$pdf->GetY();

$pdf->SetXY($X10,$Y10);
$pdf->Multicell(40,5,$msisg,0,'C');
//$pdf->ln();

$Y88=$pdf->GetY();

// Drawing table border perpanjangan

if($Y88>$Y4){
$pdf->SetXY(10,$Y99);
$ext2=$Y88-$Y3;$Cek2='O';$Ymax2=$Y88;
}
else {
$pdf->SetXY(10,$Y3);
$ext2=$Y4-$Y3;$Cek2='1';$Ymax2=$Y4;
}

//$pdf->SetXY(10,$Y3);
//$ext2=$Y4-$Y3;


$pdf->Cell(65,$ext2,'','LR',0,'L');
$pdf->Cell(15,$ext2,'','LR',0,'C');
$pdf->Cell(18,$ext2,'','LR',0,'C');
$pdf->Cell(20,$ext2,'','LR',0,'C');
$pdf->Cell(40,$ext2,'','LR',0,'C');
$pdf->Cell(15,$ext2,'','LR',0,'C');
$pdf->Cell(10,$ext2,'','LR',0,'C');
$pdf->Cell(20,$ext2,'','LR',0,'C');
$pdf->Cell(25,$ext2,'','LR',0,'C');
$pdf->Cell(25,$ext2,'','LR',0,'C');
$pdf->Cell(10,$ext2,'','LR',0,'C');
$pdf->Cell(12,$ext2,'','LR','','C');

$pdf->SetXY(10,$Ymax2);
//REASON FOR CHANGE
$pdf->SetFont('Arial','B',9);
$pdf->Cell(275,5,'REASON FOR CHANGE :','TLR',0,'L');
$pdf->ln();
$Y5=$pdf->GetY();

$pdf->SetFont('Arial','',8);
//$pdf->Cell(275,10,$row_revision['reason'],'BLR',0,'L');
//$pdf->ln();

$pdf->WordWrap($reason, 273);
$pdf->Write(5, $reason);
$pdf->ln();

$Y6=$pdf->GetY();
//Perpanjangan
$pdf->SetXY(10,$Y5);
$pdf->Cell(275,$Y6-$Y5,'','BLR',0,'L');
$pdf->ln();

//SUPPORTING DOCUMENT LIST
$pdf->SetFont('Arial','B',9);
$pdf->Cell(275,5,'SUPPORTING DOCUMENT LIST :','LR',0,'L');
$pdf->ln();
$pdf->SetFont('Arial','',8);
$pdf->Cell(275,5,'','BLR',0,'L');
$pdf->ln();

//CHANGE ACCEPTED
//row kosong atas
$pdf->SetFont('Arial','B',8);
$pdf->Cell(135,2,'','LR',0,'L');
$pdf->Cell(35,2,'','LR',0,'L');
$pdf->Cell(35,2,'','LR',0,'L');
$pdf->Cell(35,2,'','R',0,'L');
$pdf->Cell(35,2,'','R',0,'L');
$pdf->ln();

$pdf->SetFont('Arial','',8);
$pdf->Cell(40,5,'CHANGE ACCEPTED :','LR',0,'L');
$pdf->Cell(5,5,'','TBLR',0,'L');
$pdf->Cell(30,5,'NOT ACCEPTED :','LR',0,'L');
$pdf->Cell(5,5,'','TBLR',0,'L');
$pdf->Cell(55,5,'','L',0,'L');
$pdf->Cell(35,5,'','L',0,'L');
$pdf->SetFont('Arial','B',8);
$pdf->Cell(35,5,'PREPARED BY :','LR',0,'L');
$pdf->Cell(35,5,'APPROVED BY :','R',0,'L');
$pdf->Cell(35,5,'ACCEPTED BY :','R',0,'L');
$pdf->ln();

$pdf->Cell(135,2,'','LR',0,'L');
$pdf->Cell(35,2,'','BLR',0,'L');
$pdf->Cell(35,2,'','BLR',0,'L');
$pdf->Cell(35,2,'','BR',0,'L');
$pdf->Cell(35,2,'','BR',0,'L');
$pdf->ln();

//DUA
$pdf->SetFont('Arial','B',8);
$pdf->Cell(135,2,'JUSTIFICATION :','LR',0,'L');
$pdf->Cell(35,2,'','LT',0,'L');
$pdf->Cell(35,2,'','LR',0,'L');
$pdf->Cell(35,2,'','R',0,'L');
$pdf->Cell(35,2,'','R',0,'L');

$pdf->ln();

$pdf->Cell(45,5,'','L',0,'L');
$pdf->Cell(90,5,'','',0,'L');
$pdf->Cell(35,5,'SECTION','L',0,'L');
$pdf->SetFont('Arial','',8);
$pdf->Cell(35,5,$row_revision['prepUnit'],'LR',0,'L');
$pdf->Cell(35,5,$row_revision['appUnit'],'R',0,'L');
$pdf->Cell(35,5,'TER-2','R',0,'L');
$pdf->ln();

$pdf->Cell(135,2,'','LR',0,'L');
$pdf->Cell(35,2,'','BLR',0,'L');
$pdf->Cell(35,2,'','BLR',0,'L');
$pdf->Cell(35,2,'','BR',0,'L');
$pdf->Cell(35,2,'','BR',0,'L');
$pdf->ln();

//TIGA
$pdf->SetFont('Arial','B',8);
$pdf->Cell(135,2,'','LR',0,'L');
$pdf->Cell(35,2,'','LT',0,'L');
$pdf->Cell(35,2,'','LR',0,'L');
$pdf->Cell(35,2,'','R',0,'L');
$pdf->Cell(35,2,'','R',0,'L');

$pdf->ln();

$pdf->Cell(45,5,'','L',0,'L');
$pdf->Cell(90,5,'','',0,'L');
$pdf->Cell(35,5,'NAME & SIGN','L',0,'L');
$pdf->SetFont('Arial','',8);
$pdf->Cell(35,5,$row_revision['prepBy'],'LR',0,'L');
$pdf->Cell(35,5,$row_revision['appBy'],'R',0,'L');
$pdf->Cell(35,5,$row_revision['prepBy'],'R',0,'L');
$pdf->ln();

$pdf->Cell(135,2,'','LR',0,'L');
$pdf->Cell(35,2,'','BLR',0,'L');
$pdf->Cell(35,2,'','BLR',0,'L');
$pdf->Cell(35,2,'','BR',0,'L');
$pdf->Cell(35,2,'','BR',0,'L');
$pdf->ln();
$pdf->SetFont('Arial','B',8);

//EMPAT

$pdf->Cell(135,2,'','LR',0,'L');
$pdf->Cell(35,2,'','LT',0,'L');
$pdf->Cell(35,2,'','LR',0,'L');
$pdf->Cell(35,2,'','R',0,'L');
$pdf->Cell(35,2,'','R',0,'L');

$pdf->ln();

$pdf->Cell(45,5,'','L',0,'L');
$pdf->Cell(90,5,'','',0,'L');
$pdf->Cell(35,5,'DATE','L',0,'L');
$pdf->SetFont('Arial','',8);
$pdf->Cell(35,5,$row_revision['effdate'],'LR',0,'L');
$pdf->Cell(35,5,$row_revision['effdate'],'R',0,'L');
$pdf->Cell(35,5,$row_revision['effdate'],'R',0,'L');
$pdf->ln();

$pdf->Cell(135,2,'','BLR',0,'L');
$pdf->Cell(35,2,'','BLR',0,'L');
$pdf->Cell(35,2,'','BLR',0,'L');
$pdf->Cell(35,2,'','BR',0,'L');
$pdf->Cell(35,2,'','BR',0,'L');
$pdf->ln();

$pdf->setXY(15,40);


// End Content
//$pdf->Output();
$judul='CAMP Change_'.$ac_type.'_Rev_'.$rev_num.'.pdf';
$pdf->Output($judul,'I');


?>