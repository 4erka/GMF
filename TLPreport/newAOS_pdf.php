<? 
include "koneksi/conn.php";

//nclude "test/connMysql.php";
set_time_limit(auto);

$thn = $_REQUEST['thnAkhir'];
$hslthn = $thn - 1;
$bln = $_REQUEST['bln'];

define('FPDF_FONTPATH','fpdf/font/');
require('fpdf/fpdf.php');

//http://localhost/TLP/test/AOP_pdf.php?acType=A330-300&bln=01&thnAkhir=2008&IDType=2
//http://localhost/TLP/AOs_pdf.php1?acType=A330-300&bln=01&thnAkhir=2007&IDType=2



class PDF extends FPDF 
{
	function Header()
	{
		
		
		
		$this->SetFont('Arial','B',12);
		$this->SetFillColor(255,255,255);
		$this->SetTextColor(0);
		//$this->Cell(5,1,"",'0',0,'C',0);
		//$this->Image("image/gmf_logo.jpg",12,0.7,4.5,1,"JPG");
		$this->SetFont('Arial','',8);
		$this->SetFillColor(255,255,255);
		$this->Cell(0.8,0.5,"",'0',1,'C',0);
		$this->Cell(0.8,0.5,"",'0',1,'C',0);
		$this->Cell(3,0.6,"Ridwan Kusuma Putra",'0',0,'C',0);
		
		$this->SetFont('Arial','B',12);
		$this->Cell(0.8,0.6,"",'0',1,'C',0);
		$this->Cell(5,0.6,"",'TL',0,'C',0);
		$this->Cell(4,0.6,"",'T',0,'C',0);
		$this->Cell(7,0.6,"AIRCRAFT OPERATION SUMMARY"." ".($_REQUEST['thnAkhir']-1)."/".$_REQUEST['thnAkhir'],'T',0,'C',0);
		$this->Cell(0,0.6,"",'TR',1,'C',0);
		$this->Cell(5,0.6,"",'LB',0,'C',0);
		$this->Cell(3,0.6,"",'B',0,'C',0);
		$this->Cell(9,0.6,$_REQUEST['acType'],'B',0,'C',0);
		$this->Cell(0,0.6,"",'RB',1,'C',0);
		$this->Cell(4.3,0.25,"",'LR',0,'C',0);
		$this->SetFont('Arial','B',7);
		$this->Cell(1.7,0.25,'','R',0,'C',0);
		$this->Cell(0,0.25,'','R',1,'C',0);
		$this->Cell(4.3,0.25,"",'LBR',0,'C',0);
		$this->Cell(1.7,0.25,'','BR',0,'C',0);
		$this->SetFont('Arial','B',7);
		//$this->Cell(1.7,0.25,'','BR',0,'C',0);
		
	//	$this->Text(18,4.1,$thn );
		$this->Text(18,4.1,'2007' );
		$this->Cell(1.7,0.25,$tglBr,'B',0,'C',0);
		$this->Cell(1.7,0.25,"",'B',0,'C',0);
		$this->Cell(1.7,0.25,$tgllm,'B',0,'C',0);
		$this->Cell(1.7,0.25,"",'B',0,'C',0);
		$this->Cell(1.7,0.25,"",'B',0,'C',0);
		$this->Cell(1.7,0.25,"",'B',0,'C',0);
		$this->Cell(1.7,0.25,"",'B',0,'C',0);
		$this->Cell(1.7,0.25,"",'B',0,'C',0);
		$this->Cell(1.7,0.25,"",'B',0,'C',0);
		$this->Cell(1.7,0.25,"",'B',0,'C',0);
		$this->Cell(1.7,0.25,"",'B',0,'C',0);
		$this->Cell(1.7,0.25,"",'B',0,'C',0);
		$this->Cell(0,0.25,"",'BR',1,'C',0);
		
	
		
		
	
	}
	
	function Footer()
		{
		 $this->SetFont('Arial','',8);
		 $this->SetY(-1);
		 $this->Cell(0,0.5,date('M d, Y H:i'),'T',0,'L',0);	
		 $this->Cell(0,0.5,'Page '.$this->PageNo().' of {nb}','T',1,'R',0);	 
		}
}
	
$pdf=new PDF('L','cm','A4');
$pdf->Open();
$pdf->SetMargins(0.5,1,0.5);
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',8);
$pdf->SetFillColor(255,255,255);
$pdf->SetTextColor(0);


$queryFleet = "SELECT
Count(`tbl_master_acreg`.`acreg`)

FROM
`tbl_master_actype`
Inner Join `tbl_master_acreg` ON `tbl_master_actype`.`ACTypeID` = `tbl_master_acreg`.`actypeID`
WHERE
`tbl_master_actype`.`ACType` =  '".$_REQUEST['acType']."'
GROUP BY
`tbl_master_acreg`.`actypeID`
";
$resultFleet = $db->Execute($queryFleet);

while(!$resultFleet->EOF)
{
	
	$fleet = $resultFleet->fields[0];
	$flight[] = $fleet;
	$resultFleet->MoveNext();
}




$blnName = array("JAN","FEB","MAR","APR","MEI","JUN","JUL","AGU","SEP","OKT","NOV","DES","JAN","FEB","MAR","APR","MEI","JUN","JUL","AGU","SEP","OKT","NOV","DES");

$querytgl = "select subdate('".$_REQUEST['thnAkhir']."-".$_REQUEST['bln']."-"."01"."',  interval 12 month)";


$array25 = array();

//$queryDate = $db->Execute($querytgl);





$queryDate = mysql_query($querytgl);

while($row15 = mysql_fetch_array($queryDate))
{
	$array25[] = $row15[0];
}
$data5 = $array25;


$dataArray = array_slice($blnName,$bln,12);

$pdf->Cell(4.3,0.5,'','LBR',0,'L',0);
	$pdf->Cell(1.7,0.5,$thn-1 ,'LBR',0,'C',0);
foreach($dataArray as $value)
{
		$pdf->Cell(1.7,0.5,$value,'LBR',0,'C',0);
	
}
$pdf->Cell(0,0.5,'LAST 12 MTHS','LBR',1,'C',0);


// --------------------------------------------------------------------


/*$queryFleet = "SELECT HIGH_PRIORITY Count( DISTINCT(`tbl_masterac`.`acReg`)) AS `jumlah`, `tbl_masterac`.`ACType`, 
				DATE_FORMAT(`aircraftflightlog`.`blockOnDate`,'%Y-%m') AS `periode` 
				FROM `aircraftflightlog` Inner Join `tbl_masterac` ON `aircraftflightlog`.`acReg` = `tbl_masterac`.`ACReg` 
				WHERE DATE_FORMAT(`aircraftflightlog`.`blockOnDate`,'%Y-%m') >= '".$data5[0]."' and DATE_FORMAT(`aircraftflightlog`.`blockOnDate`,'%Y-%m') <= '".$_REQUEST['thnAkhir']."-".$_REQUEST['bln']."' AND `tbl_masterac`.`ACType`= '".$_REQUEST['acType']."' 
				GROUP BY `tbl_masterac`.`ACType`, DATE_FORMAT(`aircraftflightlog`.`blockOnDate`,'%Y-%m') 
				ORDER BY DATE_FORMAT(`aircraftflightlog`.`blockOnDate`,'%Y-%m') ASC LIMIT 12";

$ExeFleet = $db->Execute($queryFleet);
while(!$ExeFleet->EOF)
{
$runFleet = $ExeFleet->fields[0];
$rsl[] = $runFleet;


$ExeFleet->MoveNext();
}*/

	

$pdf->Cell(4.3,0.5,'A/C In Fleet','LBR',0,'L',0);
$pdf->Cell(1.7,0.5,'2006' ,'LBR',0,'C',0);

for($i=0;$i<12;$i++)
	{
		
		
		$pdf->Cell(1.7,0.5,'','LBR',0,'C',0);
	}
		
		
	
	
$pdf->Cell(0,0.5,'','LBR',1,'C',0);

///////////////////////-----------------------------------------------------------

/*$queryAC = "select count( distinct `imesys`.`aircraftflightlog`.`blockOnDate`) AS `jumlah`,
 `imesys`.`aircraftflightlog`.`acReg` AS `acReg`, `imesys`.`tbl_masterac`.`ACType` AS `ACType`, 
DATE_FORMAT(`imesys`.`aircraftflightlog`.`blockOnDate`,'%Y-%m') AS `periode`, month(`imesys`.`aircraftflightlog`.`blockOnDate`) as bln
FROM (`imesys`.`aircraftflightlog` join `imesys`.`tbl_masterac` on((`imesys`.`tbl_masterac`.`ACReg` = `imesys`.`aircraftflightlog`.`acReg`)))
 WHERE (DATE_FORMAT(`aircraftflightlog`.`blockOnDate`,'%Y-%m') between '2007-05' and '2008-04') AND `tbl_masterac`.`ACType` = 'A330-300' 
GROUP BY  DATE_FORMAT(`aircraftflightlog`.`blockOnDate`,'%Y-%m'),`aircraftflightlog`.`acReg`
ORDER BY DATE_FORMAT(`imesys`.`aircraftflightlog`.`blockOnDate`,'%Y-%m') ASC";

$ExeAC = $db->Execute($queryAC);
while(!$ExeAC->EOF)
{
$runACJml = $ExeAC->fields[0];
$rslAcJml[] = $runACJml;
$runACPeriode = $ExeAC->fields[0];
$rslAcPeriode[] = $runACPeriode;

$queryAc2 = "";


$ExeAC->MoveNext();
}*/

//------------------------------------------------------------------

/*$queryAc_rev = "SELECT SEC_TO_TIME( SUM( TIME_TO_SEC( `aircraftflightlog`.`airTime` ) ) ) AS `Jumlah` , Count(`aircraftflightlog`.`landing`) AS `Cycle`, DATE_FORMAT(`blockOnDate`,'%Y-%m') AS `periode` FROM `aircraftflightlog` Inner Join `tbl_masterac` ON `aircraftflightlog`.`acReg` = `tbl_masterac`.`ACReg` WHERE (DATE_FORMAT(`aircraftflightlog`.`blockOnDate`,'%Y-%m') BETWEEN '".$data5[0]."' AND '".$_REQUEST['thnAkhir']."-".$_REQUEST['bln']."') AND `tbl_masterac`.`ACType` = '".$_REQUEST['acType']."' GROUP BY DATE_FORMAT(`blockOnDate`,'%Y-%m') ORDER BY DATE_FORMAT(`blockOnDate`,'%Y-%m') ASC LIMIT 12";
$ExeAc_Rev = $db->Execute($queryAc_rev);

while(!$ExeAc_Rev->EOF)
{
$runAc_rev = $ExeAc_Rev->fields[0];
$rslAc_rev[] = $runAc_rev;

$ExeAc_Rev->MoveNext();
}	*/




$pdf->Cell(4.3,0.5,'A/C In Service (Revenue)','LBR',0,'L',0);
$pdf->Cell(1.7,0.5,'2006' ,'LBR',0,'C',0);
for($i=0;$i<12;$i++)
{

$pdf->Cell(1.7,0.5,'','LBR',0,'C',0);
}
$pdf->Cell(0,0.5,'','LBR',1,'C',0);
///////////////////////-----------------------------------------------------------



$pdf->Cell(4.3,0.5,'A/C Days In Service (Revenue)','LBR',0,'L',0);
$pdf->Cell(1.7,0.5,'' ,'LBR',0,'C',0);
for($i=0;$i<12;$i++)
{
	


$pdf->Cell(1.7,0.5,'','LBR',0,'C',0);
}
$pdf->Cell(0,0.5,'','LBR',1,'C',0);
///////////////////////-----------------------------------------------------------

$pdf->Cell(4.3,0.5,'Flying Hours (Airbone)-Total','LBR',0,'L',0);
$pdf->Cell(1.7,0.5,'2006' ,'LBR',0,'C',0);


for($i=0;$i<12;$i++)
{



$pdf->Cell(1.7,0.5,'','LBR',0,'C',0);

}




/*$get_total2 = $db->Execute("SELECT SEC_TO_TIME(TIME_TO_SEC('".$isi."') ) as `trbh`");
$hsl_get = $get_total2->fielda[0];*/

$pdf->Cell(0,0.5,'' ,'LBR',1,'C',0);
///////////////////////-----------------------------------------------------------

$pdf->Cell(4.3,0.5,'    - Revenue','LBR',0,'L',0);
$pdf->Cell(1.7,0.5,'2006' ,'LBR',0,'C',0);
for($i=0;$i<12;$i++)
{



	
$pdf->Cell(1.7,0.5,'','LBR',0,'C',0);

}
$pdf->Cell(0,0.5,'','LBR',1,'C',0);
///////////////////////-----------------------------------------------------------

$pdf->Cell(4.3,0.5,'Take-Offs - Total','LBR',0,'L',0);
$pdf->Cell(1.7,0.5,'2006' ,'LBR',0,'C',0);

/* ini query take offs revenue --------------------------*/




	for($i=0;$i<12;$i++)
	{
		
		$pdf->Cell(1.7,0.5,'','LBR',0,'C',0);
		
	}

	
$pdf->Cell(0,0.5,$sumTotalNonRev,'LBR',1,'C',0);


///////////////////////-----------------------------------------------------------

$pdf->Cell(4.3,0.5,'    - Revenue','LBR',0,'L',0);
$pdf->Cell(1.7,0.5,'2006' ,'LBR',0,'C',0);
for($i=0;$i<12;$i++)
{
	$pdf->Cell(1.7,0.5,'','LBR',0,'C',0);
	
	
}


$pdf->Cell(0,0.5,'','LBR',1,'C',0);
///////////////////////-----------------------------------------------------------

$pdf->Cell(4.3,0.5,'Fly.Hours Per Take Offs-Total(*','LBR',0,'L',0);
$pdf->Cell(1.7,0.5,'2006' ,'LBR',0,'C',0);
for($i=0;$i<12;$i++)
{

$pdf->Cell(1.7,0.5,'','LBR',0,'C',0);
}
$pdf->Cell(0,0.5,'','LBR',1,'C',0);
///////////////////////-----------------------------------------------------------

$pdf->Cell(4.3,0.5,'   - Revenue (*)','LBR',0,'L',0);
$pdf->Cell(1.7,0.5,'2006' ,'LBR',0,'C',0);
for($i=0;$i<12;$i++)
{

$pdf->Cell(1.7,0.5,'','LBR',0,'C',0);
}
$pdf->Cell(0,0.5,'','LBR',1,'C',0);
///////////////////////-----------------------------------------------------------

/*$pdf->Cell(5,0.5,'','LBR',0,'L',0);
$pdf->Cell(1.7,0.5,'2006' ,'LBR',0,'C',0);
for($i=0;$i<12;$i++)
{
$pdf->Cell(1.7,0.5,$value,'LBR',0,'C',0);
}
$pdf->Cell(0,0.5,'LAST 12 MTHS','LBR',1,'C',0);
///////////////////////-----------------------------------------------------------
$pdf->Cell(5,0.5,'','LBR',0,'L',0);
$pdf->Cell(1.7,0.5,'2006' ,'LBR',0,'C',0);
for($i=0;$i<12;$i++)
{
$pdf->Cell(1.7,0.5,$value,'LBR',0,'C',0);
}
$pdf->Cell(0,0.5,'LAST 12 MTHS','LBR',1,'C',0);*/
///////////////////////-----------------------------------------------------------
$pdf->Cell(4.3,0.5,'Daily Utiliz.-Tot.Fly.Hours(*)','LBR',0,'L',0);
$pdf->Cell(1.7,0.5,'2006' ,'LBR',0,'C',0);
for($i=0;$i<12;$i++)
{

$pdf->Cell(1.7,0.5,'' ,'LBR',0,'C',0);
}
$pdf->Cell(0,0.5,'','LBR',1,'C',0);
///////////////////////-----------------------------------------------------------

$pdf->Cell(4.3,0.5,'    - Rev.Fly.Hours(*)','LBR',0,'L',0);
$pdf->Cell(1.7,0.5,'2006' ,'LBR',0,'C',0);
for($i=0;$i<12;$i++)
{


$pdf->Cell(1.7,0.5,'','LBR',0,'C',0);
}
$pdf->Cell(0,0.5,'LAST 12 MTHS','LBR',1,'C',0);
///////////////////////-----------------------------------------------------------

$pdf->Cell(4.3,0.5,'   -Tot.Take Offs','LBR',0,'L',0);
$pdf->Cell(1.7,0.5,'2006' ,'LBR',0,'C',0);
for($i=0;$i<12;$i++)
{

$pdf->Cell(1.7,0.5,'','LBR',0,'C',0);
}
$pdf->Cell(0,0.5,'LAST 12 MTHS','LBR',1,'C',0);
///////////////////////-----------------------------------------------------------

$pdf->Cell(4.3,0.5,'   -Rev.Take Offs','LBR',0,'L',0);
$pdf->Cell(1.7,0.5,'2006' ,'LBR',0,'C',0);
for($i=0;$i<12;$i++)
{

$pdf->Cell(1.7,0.5,'','LBR',0,'C',0);
}
$pdf->Cell(0,0.5,'LAST 12 MTHS','LBR',1,'C',0);
///////////////////////-----------------------------------------------------------
$pdf->Cell(4.3,0.5,'Tech.Delay -Tot Over 15 Min','LBR',0,'L',0);
$pdf->Cell(1.7,0.5,'2006' ,'LBR',0,'C',0);
for($i=0;$i<12;$i++)
{
$pdf->Cell(1.7,0.5,$value,'LBR',0,'C',0);
}
$pdf->Cell(0,0.5,'LAST 12 MTHS','LBR',1,'C',0);
///////////////////////-----------------------------------------------------------

$pdf->Cell(4.3,0.5,'   -Tot.Duration(*)','LBR',0,'L',0);
$pdf->Cell(1.7,0.5,'2006' ,'LBR',0,'C',0);
for($i=0;$i<12;$i++)
{
$pdf->Cell(1.7,0.5,$value,'LBR',0,'C',0);
}
$pdf->Cell(0,0.5,'LAST 12 MTHS','LBR',1,'C',0);
///////////////////////-----------------------------------------------------------

$pdf->Cell(4.3,0.5,'   -Avg.Duration(*)','LBR',0,'L',0);
$pdf->Cell(1.7,0.5,'2006' ,'LBR',0,'C',0);
for($i=0;$i<12;$i++)
{
$pdf->Cell(1.7,0.5,$value,'LBR',0,'C',0);
}
$pdf->Cell(0,0.5,'LAST 12 MTHS','LBR',1,'C',0);
///////////////////////-----------------------------------------------------------

$pdf->Cell(4.3,0.5,'Rate/100 Rev.Take Offs','LBR',0,'L',0);
$pdf->Cell(1.7,0.5,'2006' ,'LBR',0,'C',0);
for($i=0;$i<12;$i++)
{
$pdf->Cell(1.7,0.5,$value,'LBR',0,'C',0);
}
$pdf->Cell(0,0.5,'LAST 12 MTHS','LBR',1,'C',0);
///////////////////////-----------------------------------------------------------
$pdf->Cell(4.3,0.5,'Techinical Incident-Total','LBR',0,'L',0);
$pdf->Cell(1.7,0.5,'2006' ,'LBR',0,'C',0);
for($i=0;$i<12;$i++)
{
$pdf->Cell(1.7,0.5,$value,'LBR',0,'C',0);
}
$pdf->Cell(0,0.5,'LAST 12 MTHS','LBR',1,'C',0);
///////////////////////-----------------------------------------------------------
$pdf->Cell(4.3,0.5,'   - Rate/1000 Tot.fly Hours','LBR',0,'L',0);
$pdf->Cell(1.7,0.5,'2006' ,'LBR',0,'C',0);
for($i=0;$i<12;$i++)
{
$pdf->Cell(1.7,0.5,$value,'LBR',0,'C',0);
}
$pdf->Cell(0,0.5,'LAST 12 MTHS','LBR',1,'C',0);
///////////////////////-----------------------------------------------------------

$pdf->Cell(4.3,0.5,'Technical Cancellations','LBR',0,'L',0);
$pdf->Cell(1.7,0.5,'2006' ,'LBR',0,'C',0);
for($i=0;$i<12;$i++)
{
$pdf->Cell(1.7,0.5,$value,'LBR',0,'C',0);
}
$pdf->Cell(0,0.5,'LAST 12 MTHS','LBR',1,'C',0);
///////////////////////-----------------------------------------------------------

$pdf->Cell(4.3,0.5,'Dispatch Reliability (%)','LBR',0,'L',0);
$pdf->Cell(1.7,0.5,'2006' ,'LBR',0,'C',0);
for($i=0;$i<12;$i++)
{
$pdf->Cell(1.7,0.5,$value,'LBR',0,'C',0);
}
$pdf->Cell(0,0.5,'LAST 12 MTHS','LBR',1,'C',0);
///////////////////////-----------------------------------------------------------

$pdf->Cell(4.3,0.5,'    (*) = (Hours : Minutes)','LBR',0,'L',0);
$pdf->Cell(1.7,0.5,'2006' ,'LBR',0,'C',0);
for($i=0;$i<12;$i++)
{
$pdf->Cell(1.7,0.5,$value,'LBR',0,'C',0);
}
$pdf->Cell(0,0.5,'LAST 12 MTHS','LBR',1,'C',0);
///////////////////////-----------------------------------------------------------
/*$pdf->Cell(5,0.5,'','LBR',0,'L',0);
$pdf->Cell(1.7,0.5,'2006' ,'LBR',0,'C',0);
for($i=0;$i<12;$i++)
{
$pdf->Cell(1.7,0.5,$value,'LBR',0,'C',0);
}
$pdf->Cell(0,0.5,'LAST 12 MTHS','LBR',1,'C',0);
///////////////////////-----------------------------------------------------------
$pdf->Cell(5,0.5,'','LBR',0,'L',0);
$pdf->Cell(1.7,0.5,'2006' ,'LBR',0,'C',0);
for($i=0;$i<12;$i++)
{
$pdf->Cell(1.7,0.5,$value,'LBR',0,'C',0);
}
$pdf->Cell(0,0.5,'LAST 12 MTHS','LBR',1,'C',0);*/
///////////////////////-----------------------------------------------------------



		
		/*$pdf->Cell(1.7,0.5,"2006",'LBR',0,'C',0);
		$pdf->Cell(1.7,0.5,"JAN",'LBR',0,'C',0);
		$pdf->Cell(1.7,0.5,"FEB",'LBR',0,'C',0);
		$pdf->Cell(1.7,0.5,"MAR",'LBR',0,'C',0);
		$pdf->Cell(1.7,0.5,"APR",'LBR',0,'C',0);
		$pdf->Cell(1.7,0.5,"MAY",'LBR',0,'C',0);
		$pdf->Cell(1.7,0.5,"JUN",'LBR',0,'C',0);
		$pdf->Cell(1.7,0.5,"JUL",'LBR',0,'C',0);
		$pdf->Cell(1.7,0.5,"AUG",'LBR',0,'C',0);
		$pdf->Cell(1.7,0.5,"SEP",'LBR',0,'C',0);
		$pdf->Cell(1.7,0.5,"OCT",'LBR',0,'C',0);
		$pdf->Cell(1.7,0.5,"NOV",'LBR',0,'C',0);
		$pdf->Cell(1.7,0.5,"DEC",'LBR',0,'C',0);
		$pdf->Cell(0,0.5,"LAST 12 MTHRS",'LBR',1,'C',0);*/


//echo $result;





$pdf->Output();

?>