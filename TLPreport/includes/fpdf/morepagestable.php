<?php
define('FPDF_FONTPATH','font/');
require('fpdf.php');
include('');

class PDF extends FPDF {

var $tablewidths;
var $footerset;


function PDF($orientation='P',$unit='cm',$format='A4')
{
	//Call parent constructor
	$this->FPDF($orientation,$unit,$format);
}

function _beginpage($orientation) {
	$this->page++;
	if(!$this->pages[$this->page]) // solved the problem of overwriting a page, if it already exists
		$this->pages[$this->page]='';
	$this->state=2;
	$this->x=$this->lMargin;
	$this->y=$this->tMargin;
	$this->lasth=0;
	$this->FontFamily='';
	//Page orientation
	if(!$orientation)
		$orientation=$this->DefOrientation;
	else
	{
		$orientation=strtoupper($orientation{0});
		if($orientation!=$this->DefOrientation)
			$this->OrientationChanges[$this->page]=true;
	}
	if($orientation!=$this->CurOrientation)
	{
		//Change orientation
		if($orientation=='P')
		{
			$this->wPt=$this->fwPt;
			$this->hPt=$this->fhPt;
			$this->w=$this->fw;
			$this->h=$this->fh;
		}
		else
		{
			$this->wPt=$this->fhPt;
			$this->hPt=$this->fwPt;
			$this->w=$this->fh;
			$this->h=$this->fw;
		}
		$this->PageBreakTrigger=$this->h-$this->bMargin;
		$this->CurOrientation=$orientation;
	}
}
/*
function Footer() {
	// Check if Footer for this page already exists (do the same for Header())
	if(!$this->footerset[$this->page]) {
		$this->SetY(-15);
		//Page number
		$this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
		// set footerset
		$this->footerset[$this->page] = 1;
	}
} 
*/
function morepagestable($datas,$lineheight=8) {
	// some things to set and 'remember'
	$l = $this->lMargin;
	$startheight = $h = $this->GetY();
	$startpage = $currpage = $this->page;

	// calculate the whole width
	foreach($this->tablewidths AS $width) {
		$fullwidth += $width;
	}

	// Now let's start to write the table
	foreach($datas AS $row => $data) {
		$this->page = $currpage;
		// write the horizontal borders
		//$this->Line($l,$h,$fullwidth+$l,$h);
		// write the content and remember the height of the highest col
		foreach($data AS $col => $txt) {
			$this->page = $currpage;
			$this->SetXY($l,$h);
			$this->MultiCell($this->tablewidths[$col],$lineheight,$txt);
			$l += $this->tablewidths[$col];

			if($tmpheight[$row.'-'.$this->page] < $this->GetY()) {
				$tmpheight[$row.'-'.$this->page] = $this->GetY();
			}
			if($this->page > $maxpage)
				$maxpage = $this->page;
		}

		// get the height we were in the last used page
		$h = $tmpheight[$row.'-'.$maxpage];
		// set the "pointer" to the left margin
		$l = $this->lMargin;
		// set the $currpage to the last page
		$currpage = $maxpage;
	}
	// draw the borders
	// we start adding a horizontal line on the last page
	$this->page = $maxpage;
	//$this->Line($l,$h,$fullwidth+$l,$h);
	// now we start at the top of the document and walk down
	for($i = $startpage; $i <= $maxpage; $i++) {
		$this->page = $i;
		$l = $this->lMargin;
		$t  = ($i == $startpage) ? $startheight : $this->tMargin;
		$lh = ($i == $maxpage)   ? $h : $this->h-$this->bMargin;
		//$this->Line($l,$t,$l,$lh);
		foreach($this->tablewidths AS $width) {
			$l += $width;
			//$this->Line($l,$t,$l,$lh);
		}
	}
	// set it to the last page, if not it'll cause some problems
	$this->page = $maxpage;
}

}

function GenerateWord()
{
	//Get a random word
	$nb=rand(3,10);
	$w='';
	for($i=1;$i<=$nb;$i++)
		$w.=chr(rand(ord('a'),ord('z')));
	return $w;
}

function GenerateSentence($words="500")
{
	//Get a random sentence
	$nb=rand(20,$words);
	$s='';
	for($i=1;$i<=$nb;$i++)
		$s.=GenerateWord().' ';
	return substr($s,0,-1);
}

$pdf = new PDF('P','pt');
$pdf->Open();
$pdf->AddPage();
$pdf->AliasNbPages();
$pdf->SetFont('Arial','B',12);
$pdf->MultiCell(0,20,'Example to build Tables over more than one Page.');
// set the tablewidths like this or write an extra function
$pdf->tablewidths = array(90,90,90,90,90,90);

srand(microtime()*1000000);
for($i=0; $i < 4; $i++) {
    $datas[] = array(GenerateSentence(),GenerateSentence(),GenerateSentence(),GenerateSentence(),GenerateSentence(),GenerateSentence());
}

$pdf->SetFont('Arial','',10);
$pdf->morepagestable($datas);
$pdf->Output();

?>
