<?php
//require('../fpdf/fpdf.php');
//set_time_limit(auto);
//define('FPDF_FONTPATH','fpdf/font/');
//require('fpdf/fpdf.php');

/*$actype = "A330-300";
$periode = "2008-04-01";*/
$actype = $_REQUEST["actype"];
$periode = $_REQUEST["periode"];
$page = $_REQUEST["page"];
 $group = isset($_REQUEST["groupby"]) ? $_REQUEST["groupby"] : "";

//include("function.php");
$TE = connectimesysTE();

if ($_REQUEST["groupby"] == "Engine") {
		$actype = engineaircraft($actype);
	}


//Simple table
function BasicTable($header,$actype,$periode)
{
		$this->SetY(20);
		$this->SetX(10);
	    $this->Cell(275,7,$header,'LRT',0,'C');
		$this->Ln();
		$this->Cell(275,7,(($actype == "A330-300") || ($actype == "A330") ? "AIRBUS" : "BOEING")." ".$actype,'LRB',0,'C');
		$this->Ln();
		$this->Cell(68,7,'','LB',0,'C');
		$this->SetFont('Arial','B',8);
		$this->Cell(207,7,(substr($periode,0,4) - 1)." - ".(substr($periode,0,4)),'LRB',0,'C');
		$this->Ln();
    
}



	$i1 = 14;
    //Logo
	/*$this->SetLeftMargin(25);
	$this->Ln(10);*/
	$this->SetFont('Arial','B',12);

	$actype = $_REQUEST["actype"];
	//engine type
	if ($actype == "A330-300"){
		$enginetype = "TRENT - 768";
	} else if ($actype == "A330-200"){
		$enginetype = "TRENT - 772";
	} else if ($actype == "A330"){
		$enginetype = "TRENT - 772";		
	} else if ($actype == "B737-800"){
		$enginetype = "CFM56-7B-26";
	} else if ($actype == "B747-400"){
		$enginetype = "CF6-80C2B1F";
	} else if ($actype == "B737-CL"){
		$enginetype = "CFM56-3";
	} else if ($actype == "B737-800-E"){
		$enginetype = "CFM56-7B";
	} else if ($actype == "B737-800-M"){
		$enginetype = "CFM56-7B";
	} else if ($actype == "CRJ-1000"){
		$enginetype = "CF34-8";
	} else if ($actype == "B777-300"){
		$enginetype = "GE90-115";
	} else if ($actype == "ATR72-600"){
		$enginetype = "PWC PW127M";
	} 

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
	
	//Judul
	/*$this->SetFillColor(150,150,150);
	$this->SetDrawColor(0,0,0);
	$this->SetLineWidth(0.5);*/
	//$this->SetX(50);
	$this->Cell(264,5,'ENGINE REMOVAL & SHUTDOWN','',1,'C');
	$this->SetFont('Arial','B',10);
	$this->Cell(264,4,$enginetype,'',1,'C');
	$this->Cell(264,4,$actype,'',1,'C');
	
	/*$this->SetFont('Arial','B',8);*/
	$this->Cell(15,26,'','',0,'C');
	//$this->SetXY(30,23);
	$this->SetFont('Arial','',8);
	$this->SetX(50);
	$this->Cell(10,26,'','LRTB',0,'C');
	$this->Cell(15,26,'','LRTB',0,'C');
	$this->Cell(5,26,'','LRTB',0,'C');
	$this->Cell(80,10,'ENGINE SERIAL NUMBER','LRTB',2,'C');
	//$this->Cell(12,22,'','LRTB',0,'C');
	//$this->Cell(112,4,'SHOP VISIT','LRTB',2,'C');
	//$this->Cell(12,18,'','LRTB',0,'C');
	//$this->Cell(100,4,'REFURBISHMENT','LRTB',2,'C');
	//$this->Cell(50,4,'PREDEFINED','LRTB',0,'C');
	//$this->Cell(50,4,'PREMATURE','LRTB',1,'C');
	$this->SetX(80);
	//$this->Cell(25,4,'BASIC','LRTB',0,'C');
	//$this->Cell(25,4,'NON - BASIC','LRTB',0,'C');
	$this->Cell(40,8,'BASIC','LRTB',0,'C');
	$this->Cell(40,8,'NON - BASIC','LRTB',1,'C');

	$this->writeRotie(43.5,40,'DATE',90);//TULISAN MIRING "DATE'
	$this->writeRotie(56,42,'STATION',90);//T'
	$this->writeRotie(69,43,'AIRCRAFT',90);
	$this->writeRotie(78.5,43,'POSITION',90);
	//$this->writeRotie(67,48,'CONVINIENCE',90);
	//$this->writeRotie(79,48,'CAMPAIGN',90);
	$this->SetX(80);
	$this->SetFont('Arial','',5.5);
	$this->Cell(20,8,'PLANNED','LRTB',0,'C');//tulisan tegak lagi
	$this->Cell(20,8,'UNPLANNED','LRTB',0,'C');
	$this->Cell(20,8,'PLANNED','LRTB',0,'C');
	$this->Cell(20,8,'UNPLANNED','LRTB',0,'C');
	//$this->Cell(12,6,'PLANNED','LRTB',0,'C');
	//$this->Cell(13,6,'UNPLANNED','LRTB',0,'C');
	//$this->Cell(12,6,'PLANNED','LRTB',0,'C');
	//$this->Cell(13,6,'UNPLANNED','LRTB',1,'C');
	$this->SetXY(160,23);
	$this->SetFont('Arial','',8);
	$this->Cell(10,26,'TSI','LRTB',0,'C');
	$this->Cell(10,26,'CSI','LRTB',0,'C');
	$this->Cell(10,26,'TSN','LRTB',0,'C');
	$this->Cell(10,26,'CSN','LRTB',0,'C');
	$this->Cell(55,26,'REMARK','LRTB',0,'C');
	//$totalpage = '{nb}';
	//if ($totalpage <> '1'){
		$this->writeRotie(260,-15,'Page : '.$_REQUEST["page"]." - ".$this->PageNo(),0);
	//} else {
	//	$this->writeRotie(23.5,-15,'Page : '.$page."9",0);
	//}
	//$this->Text(240,-15,'Page : 9');
	$this->Ln();

	$this->SetLineWidth(0.5);

	$this->Line(35,23,255,23);
	$this->Line(35,49,255,49);
	
	$this->Line(35,23,35,49);
	$this->Line(255,23,255,49);
	//$pdf->Line(10,173,285,173);
	//$pdf->Line(285,20,285,173);

	


function countline($w,$txt){
    //Computes the number of lines a MultiCell of width w will take
    $cw=&$this->CurrentFont['cw'];
    if($w==0)
        $w=$this->w-$this->rMargin-$this->x;
    $wmax=($w-2*$this->cMargin)*1000/$this->FontSize;
    $s=str_replace("\r",'',$txt);
    $nb=strlen($s);
    if($nb>0 and $s[$nb-1]=="\n")
        $nb--;
    $sep=-1;
    $i=$j=$l=0;
    $nl=1;
    while($i<$nb){
        $c=$s[$i];
        if($c=="\n"){
            $i++;
            $sep=-1;
            $j=$i;
            $l=0;
            $nl++;
            continue;
        }
        if($c==' ')
            $sep=$i;
        $l+=$cw[$c];
        if($l>$wmax){
            if($sep==-1){
                if($i==$j)
                    $i++;
            }
            else
                $i=$sep+1;
            $sep=-1;
            $j=$i;
            $l=0;
            $nl++;
        }
        else
            $i++;
    }
    return $nl;
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

/*function Footer()
{
	$actype = $_REQUEST["actype"];
	//buat halaman
	if ($actype == "A330-200"){
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
	}
    //Position at 1.5 cm from bottom
    $this->SetY(-15);
    //Arial italic 8
    $this->SetFont('Arial','B',8);
    //Page number
    $this->Cell(270,10,'Page : '.$page."9 - ".$this->PageNo(),0,0,'R');
}*/



//lebar masing2 kolom
$i1 = 15;$i2 = 10;$i3 = 15;$i4 = 5;$i5 = 12;$i6 = 12;$i7 = 12;$i8 = 12;$i9 = 12;$i10 = 12;$i11 = 12;$i12 = 12;$i13 = 12;$i14 = 12;$i15 = 10;$i16 = 10;$i17 = 10;$i18 = 10;$i19 = 55;



$pdf=new PDF('L','mm','A4');
$pdf->SetMargins(15,10,0);
$pdf->AliasNbPages();
$pdf->AddPage('L','Y');
$pdf->SetAutoPageBreak(true,20);
$pdf->SetFont('Arial','',7);
//$pdf->SetXY(15,30);
//$pdf->SetX(10);

$x = $pdf->GetX();
$y = $pdf->GetY();
$i = 0;

$year = substr($_REQUEST["periode"],0,4);$bulan = substr($_REQUEST["periode"],5,2);
if ($bulan == 12){
	$lastyear = $year;$lastbulan = "01";
} else {
	$lastyear = $year - 1;$lastbulan = substr("0".($bulan + 1),-2,2);
}
$lastperiode = $lastyear."-".$lastbulan;
//die(print_r($lastperiode));
if ($actype == "B737-Classic") {
		$qryline = "`tbl_engineremove`.`AircraftType` IN ('B737-300','B737-400','B737-500','B737-CL')";
	} else if ($actype == "B737-Classic GA") {
		$qryline = "`tbl_engineremove`.`AircraftType` IN ('B737-300','B737-400','B737-500')";
	} else if ($actype == "A330") {
		$qryline = "`tbl_engineremove`.`AircraftType` IN ('A330-200','A330-300')";		
	} else if ($actype == "B737-800-E") {
		$qryline = "`tbl_engineremove`.`AircraftReg` Like 'PK-GE%'";
	} else if ($actype == "B737-800-M") {
		$qryline = "(`tbl_engineremove`.`AircraftReg` Like 'PK-GM%' or `tbl_engineremove`.`AircraftReg` Like 'PK-GF%')";
	} else {
		$qryline = "`tbl_engineremove`.`AircraftType` IN ('$actype')";
	}
$qryFH = "SELECT `tbl_removaldesc`.`Reason`, `tbl_engineremove`.`DateRemove`, `tbl_engineremove`.`Station`, `tbl_engineremove`.`AircraftReg`, `tbl_engineremove`.`Pos`, `tbl_engineremove`.`SNOff`, `tbl_engineremove`.`TSI`,`tbl_engineremove`.`CSI`, `tbl_engineremove`.`TSN`, `tbl_engineremove`.`CSN`, `tbl_engineremove`.`Remark` FROM `tbl_engineremove` Inner Join `tbl_removaldesc` ON `tbl_engineremove`.`ReasonRemoval` = `tbl_removaldesc`.`ID` WHERE ".$qryline." AND (DATE_FORMAT(`tbl_engineremove`.`DateRemove`,'%Y-%m') BETWEEN '$lastperiode' AND '".$_REQUEST["periode"]."') ORDER BY `tbl_engineremove`.`DateRemove` DESC";//die($qryFH);
	$resultFH = mysql_query($qryFH);

	while ($hasil = mysql_fetch_array($resultFH)){
		
		$date = $hasil["DateRemove"];
		$Explode = explode("-",$date);
		//$hslDate = $Explode[2]."/".$Explode[1]."/".substr($Explode[0],2,4);
		$hasildate = date('d-M-y',strtotime($date));
		$sta = $hasil["Station"];
		$acreg = $hasil["AircraftReg"];
		$pos = $hasil["Pos"];
		//$convinience = convinience($hasil["Reason"],$hasil["SNOff"]);
		//$campaign = campaign($hasil["Reason"],$hasil["SNOff"]);
		$predbasicplan = basicplan($hasil["Reason"],$hasil["SNOff"]);
		$predbasicunplan = basicunplan($hasil["Reason"],$hasil["SNOff"]);
		$prednonbasicplan = nonbasicplan($hasil["Reason"],$hasil["SNOff"]);
		$prednonbasicunplan= nonbasicunplan($hasil["Reason"],$hasil["SNOff"]);
		//$prembasicplan=prembasicplan($hasil["Reason"],$hasil["SNOff"]);
		//$prembasicunplan=prembasicunplan($hasil["Reason"],$hasil["SNOff"]);
		//$premnonbasicplan=premnonbasicplan($hasil["Reason"],$hasil["SNOff"]);
		//$premnonbasicunplan=premnonbasicunplan($hasil["Reason"],$hasil["SNOff"]);
		$tsi =$hasil["TSI"];
		$csi=$hasil["CSI"];
		$tsn=$hasil["TSN"];
		$csn=$hasil["CSN"];
  		$remark =$hasil["Remark"];
		
		//$pdf->SetXY($x,$y);
		/*if ($pdf->GetY() < 30){
			$pdf->SetXY(15,30);
		}*/
		
		$tinggi = $pdf->countline(55,$remark) * 5;

		//$pdf->Ln();
		$pdf->SetX(35);
		$pdf->Cell(15,$tinggi,$hasildate,'TBLR',0,'C');
		$pdf->Cell(10,$tinggi,$sta,'TBLR',0,'C');
		$pdf->Cell(15,$tinggi,$acreg,'TBLR',0,'C');
		$pdf->Cell(5,$tinggi,$pos,'TBLR',0,'C');
		//$pdf->Cell(12,$tinggi,$convinience,'TBLR',0,'C');
		//$pdf->Cell(12,$tinggi,$campaign,'TBLR',0,'C');
		$pdf->Cell(20,$tinggi,$predbasicplan,'TBLR',0,'C');
		$pdf->Cell(20,$tinggi,$predbasicunplan,'TBLR',0,'C');
		$pdf->Cell(20,$tinggi,$prednonbasicplan,'TBLR',0,'C');
		$pdf->Cell(20,$tinggi,$prednonbasicunplan,'TBLR',0,'C');
		//$pdf->Cell(12,$tinggi,$prembasicplan,'TBLR',0,'C');
		//$pdf->Cell(13,$tinggi,$prembasicunplan,'TBLR',0,'C');
		//$pdf->Cell(12,$tinggi,$premnonbasicplan,'TBLR',0,'C');
		//$pdf->Cell(13,$tinggi,$premnonbasicunplan,'TBLR',0,'C');
		$pdf->Cell(10,$tinggi,$tsi,'TBLR',0,'C');
		$pdf->Cell(10,$tinggi,$csi,'TBLR',0,'C');
		$pdf->Cell(10,$tinggi,$tsn,'TBLR',0,'C');
		$pdf->Cell(10,$tinggi,$csn,'TBLR',0,'C');
		//$pdf->WordWrap($remark, 30);
		$pdf->MultiCell(55,5,$remark,'TBLR','L');
		$pdf->SetX(35);
		$pdf->Cell(15,5,'','TBLR',0,'C');
		$pdf->Cell(10,5,'','TBLR',0,'C');
		$pdf->Cell(15,5,'','TBLR',0,'C');
		$pdf->Cell(5,5,'','TBLR',0,'C');
		$pdf->Cell(20,5,'','TBLR',0,'C');
		$pdf->Cell(20,5,'','TBLR',0,'C');
		$pdf->Cell(20,5,'','TBLR',0,'C');
		$pdf->Cell(20,5,'','TBLR',0,'C');
		$pdf->Cell(10,5,'','TBLR',0,'C');
		$pdf->Cell(10,5,'','TBLR',0,'C');
		$pdf->Cell(10,5,'','TBLR',0,'C');
		$pdf->Cell(10,5,'','TBLR',0,'C');
		$pdf->Cell(55,5,'','TBLR',0,'C');
		$pdf->Ln();

		//$x = $pdf->GetX();
		//$y = $pdf->GetY() + 5;
		//$y = $y + 
	}

	if (!mysql_num_rows($resultFH)){
		for($f=0;$f<20;$f++){
			$pdf->SetX(35);
			$pdf->Cell(15,5,'','TBLR',0,'C');
			$pdf->Cell(10,5,'','TBLR',0,'C');
			$pdf->Cell(15,5,'','TBLR',0,'C');
			$pdf->Cell(5,5,'','TBLR',0,'C');
			//$pdf->Cell(12,5,'','TBLR',0,'C');
			//$pdf->Cell(12,5,'','TBLR',0,'C');
			$pdf->Cell(20,5,'','TBLR',0,'C');
			$pdf->Cell(20,5,'','TBLR',0,'C');
			$pdf->Cell(20,5,'','TBLR',0,'C');
			$pdf->Cell(20,5,'','TBLR',0,'C');
			//$pdf->Cell(12,5,'','TBLR',0,'C');
			//$pdf->Cell(13,5,'','TBLR',0,'C');
			//$pdf->Cell(12,5,'','TBLR',0,'C');
			//$pdf->Cell(13,5,'','TBLR',0,'C');
			$pdf->Cell(10,5,'','TBLR',0,'C');
			$pdf->Cell(10,5,'','TBLR',0,'C');
			$pdf->Cell(10,5,'','TBLR',0,'C');
			$pdf->Cell(10,5,'','TBLR',0,'C');
			$pdf->Cell(55,5,'','TBLR',0,'C');
			$pdf->Ln();
		}
	}
//$pdf->AddPage('L','Y');
//$pdf->Text(180,280,'Page : 9');
$pdf->Output();
?>