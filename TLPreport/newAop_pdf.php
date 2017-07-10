<? 
//include "koneksi/conn.php";
include "koneksi/ConnIMESys";

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

//
//$hsldate = $db->Execute($query);
//
//while(!$hsldate->EOF)
//{
//	
//	$blnhsl = $hsldate->fields['bln'];
//	$hsldate->MoveNext();

/*$blnhsl2 = explode("-",$blnhsl);
$blnhsl3 = $blnhsl2[1];
$data = array_slice($blnName,$_REQUEST['bln'],12);
*/
$dataArray = array_slice($blnName,$bln,12);

$pdf->Cell(4.3,0.5,'','LBR',0,'L',0);
	$pdf->Cell(1.7,0.5,$thn-1 ,'LBR',0,'C',0);
foreach($dataArray as $value)
{
		$pdf->Cell(1.7,0.5,$value,'LBR',0,'C',0);
	//return $value;
}
$pdf->Cell(0,0.5,'LAST 12 MTHS','LBR',1,'C',0);
//$hsldate->MoveNext();
//}

// --------------------------------------------------------------------

//$queryDelay ="";
 


$hrquery = "SELECT HIGH_PRIORITY			if(COUNT(DISTINCT  `aircraftflightlog`.`airborneDate`)!='0',COUNT(DISTINCT  `aircraftflightlog`.`airborneDate`),null) as jml,`aircraftflightlog`.`acReg`, `aircraftflightlog`.`airborneDate`,month(`aircraftflightlog`.`airborneDate`)
													FROM 
`aircraftflightlog` Inner Join `tbl_masterac` ON `aircraftflightlog`.`acReg` = `tbl_masterac`.`ACReg` 
WHERE SUBSTRING(`aircraftflightlog` .`airborneDate`,1,7) >=  '".$data5[0]."'   and SUBSTRING(`aircraftflightlog` .`airborneDate`,1,7) <= '".$_REQUEST['thnAkhir']."-".$_REQUEST['bln']."' AND `tbl_masterac`.`ACType` = '".$_REQUEST['acType']."' 
														
GROUP BY 
													
													month(`aircraftflightlog`.`airborneDate`)
										
													ORDER  by `aircraftflightlog`.`airborneDate`";
$hslhr = $db->Execute($hrquery);

while(!$hslhr->EOF)
{	//$monthsq = $hslhr->fields[3];
	$jmlhr = $hslhr->fields[0];
	$counthr[] = $jmlhr;
	if($hslhr->fields[3] =='01')
					{
						$hr1 = $hslhr->fields[0] ;
						
					}
					if($hslhr->fields[3] =='02')
					{
						$hr2 = $hslhr->fields[0] ;
						
					}
					if($hslhr->fields[3] =='03')
					{
						$hr3 = $hslhr->fields[0] ;
						
					}
					if($hslhr->fields[3] =='04')
					{
						$hr4 = $hslhr->fields[0] ;
						
					}if($hslhr->fields[3] =='05')
					{
						$hr5 = $hslhr->fields[0] ;
						
					}if($hslhr->fields[3] =='06')
					{
						$hr6 = $hslhr->fields[0] ;
						
					}
					if($hslhr->fields[3] =='07')
					{
					$hr7 = $hslhr->fields[0] ;
						
					}
					if($hslhr->fields[3] =='08')
					{
						$hr8 = $hslhr->fields[0] ;
						
					}
					if($hslhr->fields[3] =='09')
					{
						$hr9 = $hslhr->fields[0] ;
						
					}
					
					if($hslhr->fields[3] =='10')
					{
						$hr10 = $hslhr->fields[0] ;
						
					}
					
					if($hslhr->fields[3] =='11')
					{
						$hr11 = $hslhr->fields[0] ;
						
					}
					
					if($hslhr->fields[3] =='12')
					{
						$hr12 = $hslhr->fields[0] ;
						
					}
					
					
	
	$hslhr->MoveNext();
}
													

$querydate = "SELECT SEC_TO_TIME( SUM( TIME_TO_SEC( `aircraftflightlog`.`airTime` ) ) ) AS `Jumlah` , Count(`aircraftflightlog`.`landing`) AS `Cycle`, month(`blockOnDate`), year(`blockOnDate`)
FROM `aircraftflightlog` Inner Join `tbl_masterac` ON `aircraftflightlog`.`acReg` = `tbl_masterac`.`ACReg` 
WHERE SUBSTRING(`aircraftflightlog` .`airborneDate`,1,7) >=  '".$data5[0]."'   and SUBSTRING(`aircraftflightlog` .`airborneDate`,1,7) <= '".$_REQUEST['thnAkhir']."-".$_REQUEST['bln']."' AND `tbl_masterac`.`ACType` = '".$_REQUEST['acType']."' and 	(`aircraftflightlog`.`revenue` = 'Revenue,Revenue' OR `aircraftflightlog`.`revenue` = 'Revenue') AND
														(`aircraftflightlog`.`voidStatus` <> 'true')
GROUP BY 
													
													month(`aircraftflightlog`.`airborneDate`)
										
													ORDER  by `aircraftflightlog`.`airborneDate`";
													
$rslQueryDate = $db->Execute($querydate);

while(!$rslQueryDate->EOF)
{
	
		
	$dateHours = $rslQueryDate->fields[0];
	$date1[] = $dateHours;
	
	$rslQueryDate->MoveNext();

}
$byk2=$rslQueryDate->RecordCount();
$hslK2 = $byk2-1;

$querydateN = "SELECT SEC_TO_TIME( SUM( TIME_TO_SEC( `aircraftflightlog`.`airTime` ) ) ) AS `Jumlah` , Count(`aircraftflightlog`.`landing`) AS `Cycle`, month(`blockOnDate`), year(`blockOnDate`)
FROM `aircraftflightlog` Inner Join `tbl_masterac` ON `aircraftflightlog`.`acReg` = `tbl_masterac`.`ACReg` 
WHERE SUBSTRING(`aircraftflightlog` .`airborneDate`,1,7) >=  '".$data5[0]."'   and SUBSTRING(`aircraftflightlog` .`airborneDate`,1,7) <= '".$_REQUEST['thnAkhir']."-".$_REQUEST['bln']."' AND `tbl_masterac`.`ACType` = '".$_REQUEST['acType']."' and (`aircraftflightlog`.`revenue` <> 'Revenue,Revenue' AND `aircraftflightlog`.`revenue` <> 'Revenue') AND
														`aircraftflightlog`.`voidStatus` <> 'true'
GROUP BY 
													
													month(`aircraftflightlog`.`airborneDate`)
										
													ORDER  by `aircraftflightlog`.`airborneDate`
";

$rslquerydaten = $db->Execute($querydateN);

while(!$rslquerydaten->EOF)
{
	$dateHoursN = $rslquerydaten->fields[0];
	$date2[] = $dateHoursN; 
	$rslquerydaten->MoveNext();
}

$byk1=$rslquerydaten->RecordCount();
$hslK = $byk1-1;


$query = "SELECT
					`tbl_master_actype`.`ACType`,
					`tbl_master_acreg`.`acreg`
					FROM
					`tbl_master_actype`
					Inner Join `tbl_master_acreg` ON `tbl_master_actype`.`ACTypeID` = `tbl_master_acreg`.`actypeID`
					where  `tbl_master_actype`.`ACType` = '".$_REQUEST['acType']."'
					";
	$result = $db->Execute($query);
	
	$sum =0;
	$sumNon = 0;
	$sumdate = "00:00:00";
	$dataIsi = array();
	
	$count = $result->RecordCount();
	
	while(!$result->EOF)
	{
				$query2= "SELECT				SEC_TO_TIME(Sum(TIME_TO_SEC(`A`.`flightTime`))) AS 'SUBTOTAL',
														SEC_TO_TIME(Sum(TIME_TO_SEC(`A`.`airTime`))) AS 'SUBTOTALAIRTIME',
														SUM(`A`.`landing`) AS `CYCLES`, month(`A`.`airborneDate`), `A`.`acReg`
														FROM
														`aircraftflightlog` AS `A`
														WHERE
														(`A`.`acReg` =  '".$result->fields[1]."' AND
														(SUBSTRING(`A`.`airborneDate`,1,7)  between  '".$data5[0]."'   and '".$_REQUEST['thnAkhir']."-".$_REQUEST['bln']."' and
														(`A`.`revenue` = 'Revenue,Revenue' OR `A`.`revenue` = 'Revenue') AND
														`A`.`voidStatus` <> 'true') ) 
														
														GROUP BY `A`.`acReg`,
														month(`A`.`airborneDate`)
														ORDER  by `A`.`airborneDate`";
														
														
				$queryNonRev = "SELECT				SEC_TO_TIME(Sum(TIME_TO_SEC(`A`.`flightTime`))) AS 'SUBTOTAL',
															SEC_TO_TIME(Sum(TIME_TO_SEC(`A`.`airTime`))) AS 'SUBTOTALAIRTIME',
															SUM(`A`.`landing`) AS `CYCLES`, month(`A`.`airborneDate`) as bulan, `A`.`acReg`
															FROM
															`aircraftflightlog` AS `A`
															WHERE
															(`A`.`acReg` =  '".$result->fields[1]."' AND
															(SUBSTRING(`A`.`airborneDate`,1,7)  between  '".$data5[0]."'   and '".$_REQUEST['thnAkhir']."-".$_REQUEST['bln']."' and
														(`A`.`revenue` <> 'Revenue,Revenue' AND `A`.`revenue` <> 'Revenue') AND
														`A`.`voidStatus` <> 'true') ) 
														
														GROUP BY `A`.`acReg`,
														month(`A`.`airborneDate`)
														ORDER  by `A`.`airborneDate`";
														
				$query5 = "SELECT HIGH_PRIORITY			if(COUNT(DISTINCT  `A`.`airborneDate`)!='0',COUNT(DISTINCT  `A`.`airborneDate`),0) as jml,`A`.`acReg`, `A`.`airborneDate`,month(`A`.`airborneDate`)
													FROM 		`aircraftflightlog` as A
													WHERE 		`A`.`acReg` =  '".$result->fields[1]."'
													AND 		SUBSTRING(`A`.`airborneDate`,1,7) between  '".$data5[0]."'   and '".$_REQUEST['thnAkhir']."-".$_REQUEST['bln']."'
																						
													GROUP BY 
													`A`.`acReg`,
													month(`A`.`airborneDate`)
										
													ORDER  by `A`.`airborneDate`";
													
													
				$queryJml = $db->Execute($query5);
				
				while(!$queryJml->EOF)
				{
					$day = $queryJml->fields[0];
					$days[] = $day;
					$month = $queryJml->fields[3];
					//$months[] = $month;
					if($month =='01')
					{
						$day1 = $queryJml->fields[0] + $day1;
						
					}
					if($month =='02')
					{
						$day2 = $queryJml->fields[0] + $day2;
						
					}
					if($month =='03')
					{
						$day3 = $day + $day3;
						
					}
					if($month =='04')
					{
						$day4 = $day + $day4;
						
					}if($month =='05')
					{
						$day5 = $day + $day5;
						
					}if($month =='06')
					{
						$day6 = $day + $day6;
						
					}
					if($month =='07')
					{
						$day7 = $day + $day7;
						
					}if($month =='08')
					{
						$day8 = $day + $day8;
						
					}if($month =='09')
					{
						$day9 = $day + $day9;
						
					}if($month =='10')
					{
						$day10 = $day + $day10;
						
					}if($month =='11')
					{
						$day11 = $day + $day11;
						
					}
					if($month =='12')
					{
						$day12 = $day + $day12;
						
					}
					
					
					$queryJml->MoveNext();
					
				
				}
				$dayRecord = $queryJml->RecordCount();
				
														
				$resultNonRev = $db->Execute($queryNonRev);
				$sumNon = 0;
				$k=0;
				
				while(!$resultNonRev->EOF)
				{
					//$data = $result2->fields[2];
				//	echo 'Data ='.$data;
					//echo 'Month ='.$result2->fields[3]." ";
				//	echo 'AcReg ='.$result2->fields[4]."<br>";
					
					
					if($resultNonRev->fields[3] == '01'){
					//for($s=0;$s<$count;$s++)
//					{
						$sum1NonRev = $sum1NonRev  + $resultNonRev->fields['CYCLES'];
				//	}
					//	$airTime1 =  $resultNonRev->fields[1];
						$bln1 = $resultNonRev->fields[3];
					//	$airTime =  $resultNonRev->fields[1];
						if($resultNonRev->fields[1] !="")
						{
								//$airTime1B = $resultNonRev->fields[1];
								$airTime1B  = $resultNonRev->fields[1];
								
						}
						else
						{
								$airTime1B=$strDate;
						}
						
						//echo	$dataNon =  $sum1NonRev;
						
					//echo $sum1NonRev;
					//echo 'sum01= '.$sum;
					//echo $resultNonRev->fields['acReg']." ".$sum1NonRev.'<br>'.'<br>';
					}
					if($resultNonRev->fields[3] == '02'){
					
						$sum2NonRev = $sum1NonRev  + $resultNonRev->fields['CYCLES'];
					//	$airTime12 =  $resultNonRev->fields[1];
						$bln2 = $resultNonRev->fields[3];
						//$airTime =  $resultNonRev->fields[1];
						if($resultNonRev->fields[1] !="")
						{
								$airTime2B = $resultNonRev->fields[1];
						}
						else
						{
								$airTime2B= $strDate;
						}

					}
					
					if($resultNonRev->fields[3] == '03'){
					
						$sum3NonRev = $sum1NonRev  + $resultNonRev->fields['CYCLES'];
						//$airTime3 =  $resultNonRev->fields[1];
						$bln3 = $resultNonRev->fields[3];
						//$airTime =  $resultNonRev->fields[1];
						if($resultNonRev->fields[1] !="")
						{
								$airTime3B = $resultNonRev->fields[1];
						}
						else
						{
								$airTime3B= $strDate;
						}
						
						
			
					}
					if($resultNonRev->fields[3] == '04'){
					
						$sum4NonRev = $sum1NonRev  + $resultNonRev->fields['CYCLES'];
					//	$airTime4 =  $resultNonRev->fields[1];
						$bln4 = $resultNonRev->fields[3];
					//	$airTime =  $resultNonRev->fields[1];
					if($resultNonRev->fields[1] !="")
						{
								$airTime4B = $resultNonRev->fields[1];
						}
						else
						{
								$airTime4B = $strDate;
						}
						
						
				//echo $sum;
					}
					
					if($resultNonRev->fields[3] == '05'){
					
						$sum5NonRev = $sum1NonRev  + $resultNonRev->fields['CYCLES'];
						//$airTime5 =  $resultNonRev->fields[1];
						$bln5 = $resultNonRev->fields[3];
					if($resultNonRev->fields[1] !="")
						{
								$airTime5B = $resultNonRev->fields[1];
						}
						else
						{
								$airTime5B= $strDate;
						}
					}
					if($resultNonRev->fields[3] == '06'){
					
						$sum6NonRev = $sum1NonRev  + $resultNonRev->fields['CYCLES'];
						//$airTime6 =  $resultNonRev->fields[1];
						$bln6 = $resultNonRev->fields[3];
						$airTime =  $resultNonRev->fields[1];
						if($resultNonRev->fields[1] !="")
						{
								$airTime6B = $resultNonRev->fields[1];
						}
						else
						{
								$airTime6B= $strDate;
						}
						
					}
					if($resultNonRev->fields[3] == '07'){
					
						$sum7NonRev = $sum1NonRev  + $resultNonRev->fields['CYCLES'];
					//	$airTime7 =  $resultNonRev->fields[1];
						$airTime =  $resultNonRev->fields[1];
						if($resultNonRev->fields[1] !="")
						{
								$airTime7B = $resultNonRev->fields[1];
						}
						else
						{
								$airTime7B= $strDate;
						}
						
					}
					if($resultNonRev->fields[3] == '08'){
					
						$sum8NonRev = $sum1NonRev  + $resultNonRev->fields['CYCLES'];
					//	$airTime8 =  $resultNonRev->fields[1];
						$airTime =  $resultNonRev->fields[1];
						if($resultNonRev->fields[1] !="")
						{
								$airTime8B = $resultNonRev->fields[1];
						}
						else
						{
								$airTime8B= $strDate;
						}
					}
					if($resultNonRev->fields[3] == '09'){
					
						$sum9NonRev = $sum1NonRev  + $resultNonRev->fields['CYCLES'];
						//$airTime9 =  $resultNonRev->fields[1];
						$airTime =  $resultNonRev->fields[1];
						$airTime =  $resultNonRev->fields[1];
						if($resultNonRev->fields[1] !="")
						{
								$airTime9B = $resultNonRev->fields[1];
						}
						else
						{
								$airTime9B= $strDate;
						}
						
					}if($resultNonRev->fields[3] == '10'){
				
						$sum10NonRev = $sum1NonRev  + $resultNonRev->fields['CYCLES'];
						//$airTime10 =  $resultNonRev->fields[1];
						$airTime =  $resultNonRev->fields[1];
						if($resultNonRev->fields[1] !="")
						{
								$airTime10B = $resultNonRev->fields[1];
						}
						else
						{
								$airTime10B= $strDate;
						}
					}
					if($resultNonRev->fields[3] == '11'){
					
						$sum11NonRev = $sum1NonRev  + $resultNonRev->fields['CYCLES'];
					//	$airTime11 =  $resultNonRev->fields[1];
						$airTime =  $resultNonRev->fields[1];
						if($resultNonRev->fields[1] !="")
						{
								$airTime11B = $resultNonRev->fields[1];
						}
						else
						{
								$airTime11B= $strDate;
						}
						
					}
					if($resultNonRev->fields[3] == '12'){
					
						$sum12NonRev = $sum1NonRev  + $resultNonRev->fields['CYCLES'];
						//$airTime12 =  $resultNonRev->fields[1];
						$airTime =  $resultNonRev->fields[1];
						if($resultNonRev->fields[1] !="")
						{
								$airTime12B = $resultNonRev->fields[1];
						}
						else
						{
								$airTime12B= $strDate;
						}
					}
					//$tstAir[] = $resultNonRev->fields[1];
				//	$bln31[] = $resultNonRev->fields[3];
					
					$resultNonRev->MoveNext();
					
					
				
				}
				
				// $dataIsi[] = $dataNon[$k][$sumNon];
				
				
				$sumJanNon = $sumNon+$sum1NonRev;
				$sumFebNon = $sumNon+$sum2NonRev;
				$sumMarNon = $sumNon+$sum3NonRev;
				$sumAprNon = $sumNon+$sum4NonRev;
				$sumMeiNon = $sumNon+$sum5NonRev;
				$sumJunNon = $sumNon+$sum6NonRev;
				$sumJulNon = $sumNon+$sum7NonRev;
				$sumAguNon = $sumNon+$sum8NonRev;
				$sumSepNon = $sumNon+$sum9NonRev;
				$sumOktNon = $sumNon+$sum10NonRev;
				$sumNovNon = $sumNon+$sum11NonRev;
				$sumDesNon = $sumNon+$sum12NonRev;
				
				$janAir1 = $airTime1B;
				$janAir2 = $airTime2B;
				$janAir3 = $airTime3B;
				$janAir4 = $airTime4B;
				$janAir5 = $airTime5B;
				$janAir6 = $airTime6B;
				$janAir7 = $airTime7B;
				$janAir8 = $airTime8B;
				$janAir9 = $airTime9B;
				$janAir10 = $airTime10B;
				$janAir11 = $airTime11B;
				$janAir12 = $airTime12B;
				
				
				//$dataArray[] = $sumJanNon.",".$sumFebNon.",".$sumMarNon."<br>";
				
				
														
				$result2 = $db->Execute($query2);
				
				
				
				
				
				$sum=0;
				/*$sum2=0;
				$sum3=0;
				$sum4=0;
				$sum5=0;
				$sum6=0;
				$sum7=0;
				$sum8=0;
				$sum9=0;
				$sum10=0;
				$sum11=0;
				$sum12=0;*/
				
				while(!$result2->EOF)
				{
					$data = $result2->fields[2];
				//	echo 'Data ='.$data;
					//echo 'Month ='.$result2->fields[3]." ";
				//	echo 'AcReg ='.$result2->fields[4]."<br>";
					
					
					if($result2->fields[3] == '01'){
					$sum1 = $sum1 + $result2->fields['CYCLES'];
				//	$bln = $result2->fields[3];
					if($result2->fields[1] !="")
						{
								
								$airTime1A1 = $result2->fields[1];
							//	$sumdate1 = $db->Execute("SELECT SEC_TO_TIME(TIME_TO_SEC('".$airTime1A1."') +  TIME_TO_SEC('".$sumdate."') as `trbh`");
								$airTime1A = $result2->fields[1];
						}
						else
						{
								$airTime1A=$strDate;
						}
					
					//echo 'sum01= '.$sum;
					}
					if($result2->fields[3] == '02'){
					$sum2 = $sum2 + $result2->fields['CYCLES'];
					$bln = $result2->fields[3];
					//$sum2 = $sum1;
					//$sum4 = $sum2;
					//echo 'SUM02 = '.$sum4.'<br>';
					if($result2->fields[1] !="")
						{
								$airTime2A = $result2->fields[1];
						}
						else
						{
								$airTime2A=$strDate;
						}

					}
					
					if($result2->fields[3] == '03'){
					$sum3 = $sum3 + $result2->fields['CYCLES'];
					//echo $sum;
					$bln = $result2->fields[3];
					
					if($result2->fields[1] !="")
						{
								$airTime3A = $result2->fields[1];
						}
						else
						{
								$airTime3A=$strDate;
						}
					
					}
					if($result2->fields[3] == '04'){
					$sum4 = $sum4 + $result2->fields['CYCLES'];
				//echo $sum;
					$bln = $result2->fields[3];
					if($result2->fields[1] !="")
						{
								$airTime4A = $result2->fields[1];
						}
						else
						{
								$airTime4A=$strDate;
						}
					
					}
					
					if($result2->fields[3] == '05'){
					$sum5 = $sum5 + $result2->fields['CYCLES'];
					//echo $sum;
					$bln = $result2->fields[3];
					if($result2->fields[1] !="")
						{
								$airTime5A = $result2->fields[1];
						}
						else
						{
								$airTime5A=$strDate;
						}
					
					}
					
					
					if($result2->fields[3] == '06'){
					$sum6 = $sum6 + $result2->fields['CYCLES'];
				//echo $sum;
				$bln = $result2->fields[3];
				
				if($result2->fields[1] !="")
						{
								$airTime6A = $result2->fields[1];
						}
						else
						{
								$airTime6A=$strDate;
						}
					}
					
					if($result2->fields[3] == '07'){
					$sum7 = $sum7 + $result2->fields['CYCLES'];
					//echo $sum;
					$bln = $result2->fields[3];
					if($result2->fields[1] !="")
						{
								$airTime7A = $result2->fields[1];
						}
						else
						{
								$airTime7A=$strDate;
						}
					
					}
					if($result2->fields[3] == '08'){
					$sum8 = $sum8 + $result2->fields['CYCLES'];
					//echo $sum;
					$bln = $result2->fields[3];
					if($result2->fields[1] !="")
						{
								$airTime8A = $result2->fields[1];
						}
						else
						{
								$airTime8A=$strDate;
						}
					
					}
					if($result2->fields[3] == '09'){
					$sum9 = $sum9 + $result2->fields['CYCLES'];
					//echo $sum;
					$bln = $result2->fields[3];
					
					if($result2->fields[1] !="")
						{
								$airTime9A = $result2->fields[1];
						}
						else
						{
								$airTime9A=$strDate;
						}
					}
					
					if($result2->fields[3] == '10'){
					$sum10 = $sum10 + $result2->fields['CYCLES'];
					//echo $sum;
					$bln = $result2->fields[3];
					if($result2->fields[1] !="")
						{
								$airTime10A = $result2->fields[1];
						}
						else
						{
								$airTime10A=$strDate;
						}
					
					}
					if($result2->fields[3] == '11'){
					$sum11 = $sum11 + $result2->fields['CYCLES'];
					//echo $sum;
					$bln = $result2->fields[3];
					if($result2->fields[1] !="")
						{
								$airTime11A = $result2->fields[1];
						}
						else
						{
								$airTime11A=$strDate;
						}
					
					}
					if($result2->fields[3] == '12'){
					$sum12 = $sum12 + $result2->fields['CYCLES'];
					//echo $sum;
					$bln = $result2->fields[3];
					if($result2->fields[1] !="")
						{
								$airTime12A = $result2->fields[1];
						}
						else
						{
								$airTime12A=$strDate;
						}
					
					}
					
					$result2->MoveNext();
				
				}
				//echo 'SUM1= '.$sum1.'<br>';
				//echo $result->fields[1];
				//echo 'sumFeb ='.$sum2;
				//if()
				$sumJan = $sum+$sum1;
				$sumFeb = $sum+$sum2;
				$sumMar = $sum+$sum3;
				$sumApr = $sum+$sum4;
				$sumMei = $sum+$sum5;
				$sumJun = $sum+$sum6;
				$sumJul = $sum+$sum7;
				$sumAgu = $sum+$sum8;
				$sumSep = $sum+$sum9;
				$sumOkt = $sum+$sum10;
				$sumNov = $sum+$sum11;
				$sumDes = $sum+$sum12;
				$janAir1A = $airTime1A;
				$janAir2A = $airTime2A;
				$janAir3A = $airTime3A;
				$janAir4A = $airTime4A;
				$janAir5A = $airTime5A;
				$janAir6A = $airTime6A;
				$janAir7A = $airTime7A;
				$janAir8A = $airTime8A;
				$janAir9A = $airTime9A;
				$janAir10A = $airTime10A;
				$janAir11A = $airTime11A;
				$janAir12A = $airTime12A;
				
				
				
				
		$result->MoveNext();											
	
	}
	
	//echo $sumJanNon;
	$arrayDataNon =  $sumJanNon.",".$sumFebNon.",".$sumMarNon.",".$sumAprNon.",".$sumMeiNon.",".$sumJunNon.",".$sumJulNon.",".$sumAguNon.",".$sumSepNon.",".$sumOktNon.",".$sumNovNon.",".$sumDesNon.",".$sumJanNon.",".$sumFebNon.",".$sumMarNon.",".$sumAprNon.",".$sumMeiNon.",".$sumJunNon.",".$sumJulNon.",".$sumAguNon.",".$sumSepNon.",".$sumOktNon.",".$sumNovNon.",".$sumDesNon;
	
	$arrayData =     $sumJan.",".$sumFeb.",".$sumMar.",".$sumApr.",".$sumMei.",".$sumJun.",".$sumJul.",".$sumAgu.",".$sumSep.",".$sumOkt.",".$sumNov.",".$sumDes.",".$sumJan.",".$sumFeb.",".$sumMar.",".$sumApr.",".$sumMei.",".$sumJun.",".$sumJul.",".$sumAgu.",".$sumSep.",".$sumOkt.",".$sumNov.",".$sumDes;
	
	$daySum = $day1.",".$day2.",".$day3.",".$day4.",".$day5.",".$day6.",".$day7.",".$day8.",".$day9.",".$day10.",".$day11.",".$day12.",".$day1.",".$day2.",".$day3.",".$day4.",".$day5.",".$day6.",".$day7.",".$day8.",".$day9.",".$day10.",".$day11.",".$day12;
	
	$datahr = $hr1.",".$hr2.",".$hr3.",".$hr4.",".$hr5.",".$hr6.",".$hr7.",".$hr8.",".$hr9.",".$hr10.",".$hr11.",".$hr12.",".$hr1.",".$hr2.",".$hr3.",".$hr4.",".$hr5.",".$hr6.",".$hr7.",".$hr8.",".$hr9.",".$hr10.",".$hr11.",".$hr12;
	/*$arrayAirtime = $janAir1.",".$janAir2.",".$janAir3.",".$janAir4.",".$janAir5.",".$janAir6.",".$janAir7.",".$janAir8.",".$janAir9.",".$janAir10.",".$janAir11.",".$janAir12.",".$janAir1.",".$janAir2.",".$janAir3.",".$janAir4.",".$janAir5.",".$janAir6.",".$janAir7.",".$janAir8.",".$janAir9.",".$janAir10.",".$janAir11.",".$janAir12;
	
	$arrayAirtimeA = $janAir1A.",".$janAir2A.",".$janAir3A.",".$janAir4A.",".$janAir5A.",".$janAir6A.",".$janAir7A.",".$janAir8A.",".$janAir9A.",".$janAir10A.",".$janAir11A.",".$janAir12A.",".$janAir1A.",".$janAir2A.",".$janAir3A.",".$janAir4A.",".$janAir5A.",".$janAir6A.",".$janAir7A.",".$janAir8A.",".$janAir9A.",".$janAir10A.",".$janAir11A.",".$janAir12A;
	*/
	
	//
	$hoursArray = $dateHours1.",".$dateHours2.",".$dateHours3.",".$dateHours4.",".$dateHours5.",".$dateHours6.",".$dateHours7.",".$dateHours8.",".$dateHours9.",".$dateHours10.",".$dateHours11.",".$dateHours12;
	$hslAirtimeA = explode(",",$arrayAirtimeA);
	$hslAirtime = explode(",",$arrayAirtime);
	$hsldateHour = explode(",",$hoursArray);
	$hsldays = explode(",",$daySum);
	$hslhr = explode(",",$datahr);
//	$dttakeOffNO = explode(",",$arrayDataNon);
//	$dttakeOff = explode(",",$arrayDataNon);
//	
//	$arrayTakeNon = array();
//	$arraytake = array();
//	$arrayTime = array();
//	$arrayTimeA = array();
//	
//	for()
//	{
//		$
//	
//	}
	
	
	for($p=0;$p<25;$p++)
	{
		
		$okAirTimeA[] = $hslAirtimeA[$p];
		$okdateHour[] = $hsldateHour[$p];
		$okday[] = $hsldays[$p];
		$okhr[] = $hslhr[$p];
			
		
	}
	
	$okAirTime = array();
	for($p=0;$p<25;$p++)
	{
		
		$okAirTime[] = $hslAirtime[$p];
		
			
		
	}
	
	//$dataArray1 = array_slice($data,$bln,3);
	
	$hslEx = explode(",",$arrayDataNon);
	
	$ok = array();
	for($k=0;$k<25;$k++)
	{
		$ok[] = $hslEx[$k];
		
	}
	
	$hslEx1 = explode(",",$arrayData);
	$ok1 = array();
	for($p=0;$p<25;$p++)
	{
		$ok1[] = $hslEx1[$p];
	}
	//$dataArray3 = array_slice(",",$arrayDatt)
	//$hslI = implode("",$hslEx);
//	4

	
	$dataArrayAirtime = array_slice($okAirTime,$_REQUEST['bln'],12);
	$dataArrayAirtimeA = array_slice($okdateHour,$_REQUEST['bln'],12);
	$dataday = array_slice($okday,$_REQUEST['bln'],12);
	$datahrArray = array_slice($okhr,$_REQUEST['bln'],12);
	
	
	$dataArray2 = array_slice($ok,$_REQUEST['bln'],12);
	$dataArray3 = array_slice($ok1,$_REQUEST['bln'],12);
	//for($i=0;$i<12;$i++)
//	{
//		echo $i." =".$dataArray2[$i]."<br>";
//	}
	
	//for($p=0;$p<12;$p++)
//	{
//		echo $ok1[$p]."<br>";
//	
//	}
	
	//for($e=0;$e<12;$e++)
//	{
//	   $tot = $dataArray2[$e] + $ok1[$e] ;
//		echo "SUM =".$tot ;
//	
//	}
	
	
	
	//echo $hsldata[0];
//	echo $sumJan;
	//$arraydata[]= array();
	$sumTotalJan = $sumJan + $sumJanNon;
	$sumTotalFeb = $sumFeb + $sumFebNon;
	$sumTotalMar = $sumMar + $sumMarNon;
	$sumTotalApr = $sumApr + $sumAprNon;
	$sumTotalMei = $sumMei + $sumMeiNon;
	$sumTotalJun = $sumJun + $sumJunNon;
	$sumTotalJul = $sumJul + $sumJulNon;
	$sumTotalAgu = $sumAgu + $sumAguNon;
	$sumTotalSep = $sumSep + $sumSepNon;
	$sumTotalOkt = $sumOkt + $sumOktNon;
	$sumTotalNov = $sumNov + $sumNovNon;
	$sumTotalDes = $sumDes + $sumDesNon;
	$sumTotalNonRev = $sumTotalJan + $sumTotalFeb + $sumTotalMar + $sumTotalApr + $sumTotalMei + $sumTotalJun +  $sumTotalJul + $sumTotalAgu + $sumTotalSep + $sumTotalOkt + $sumTotalNov + $sumTotalDes;
	$sumTotalRev = $sumJan + $sumFeb + $sumMar + $sumApr + $sumMei + $sumJun + $sumJul + $sumAgu + $sumSep + $sumOkt + $sumNov + $sumDes; 
	





$pdf->Cell(4.3,0.5,'A/C In Fleet','LBR',0,'L',0);
$pdf->Cell(1.7,0.5,'2006' ,'LBR',0,'C',0);

for($i=0;$i<12;$i++)
	{
		
		
		$pdf->Cell(1.7,0.5,$flight[0],'LBR',0,'C',0);
	}
		
		
	
	
$pdf->Cell(0,0.5,$flight[0],'LBR',1,'C',0);

///////////////////////-----------------------------------------------------------


$pdf->Cell(4.3,0.5,'A/C In Service (Revenue)','LBR',0,'L',0);
$pdf->Cell(1.7,0.5,'2006' ,'LBR',0,'C',0);
for($i=0;$i<12;$i++)
{
$hslhrs = $dataday[$i]/$datahrArray[$i];

$subhslhrs[] = substr($hslhrs ,0,5);
$subtotAc = $subhslhrs[$i] + $subtotAc;
$totAc[] = $subtotAc/12; 
$pdf->Cell(1.7,0.5,$subhslhrs[$i],'LBR',0,'C',0);
}
$pdf->Cell(0,0.5,substr($totAc[11],0,5),'LBR',1,'C',0);
///////////////////////-----------------------------------------------------------
for($t=0;$t<$dayRecord;$t++)
{
	$sumday1 = $days[$t] + $sumday1;
	$sumdays[] = $sumday1;
}


$pdf->Cell(4.3,0.5,'A/C Days In Service (Revenue)','LBR',0,'L',0);
$pdf->Cell(1.7,0.5,$blnhsl ,'LBR',0,'C',0);
for($i=0;$i<12;$i++)
{
	
//$pdf->Cell(1.7,0.5,$date2[$i],'LBR',0,'C',0);
$sumdayok = $dataday[$i]+ $sumdayok;
$sumdaysok[] = $sumdayok;

$pdf->Cell(1.7,0.5,$dataday[$i],'LBR',0,'C',0);
}
$pdf->Cell(0,0.5,$sumdaysok[11],'LBR',1,'C',0);
///////////////////////-----------------------------------------------------------

$pdf->Cell(4.3,0.5,'Flying Hours (Airbone)-Total','LBR',0,'L',0);
$pdf->Cell(1.7,0.5,'2006' ,'LBR',0,'C',0);
//for($p=1;$p<25;$p++)
//	{
//		
//			$tot = $p." = ".$hslAirtime[$p]."<br>";
//			echo $tot;
//			$get_total1 = $db->Execute("SELECT SEC_TO_TIME(TIME_TO_SEC('".$hslAirtime[$p]."') + TIME_TO_SEC('".$hslAirtimeA[$p]."')) as `trbh`");
//			echo $get_total1->fields[0];
//	}
$hsl_get=array();
$vartime= "00:00:00";

for($i=0;$i<12;$i++)
{
$get_total = $db->Execute("SELECT SEC_TO_TIME(TIME_TO_SEC('".$date2[$i]."') + TIME_TO_SEC('".$date1[$i]."')) as `trbh`");
$sum = $get_total->fields[0];
$jml[] = $sum;


$pdf->Cell(1.7,0.5,substr($jml[$i],0,4),'LBR',0,'C',0);

}
for($j=0;$j<12;$j++)
{
$get_total = $db->Execute("SELECT SEC_TO_TIME(TIME_TO_SEC('".$jml[$j]."') + TIME_TO_SEC('".$sum2."')) as `trbh`");
$sum2 = $get_total->fields[0];
$jml2[] = $sum2;


}



/*$get_total2 = $db->Execute("SELECT SEC_TO_TIME(TIME_TO_SEC('".$isi."') ) as `trbh`");
$hsl_get = $get_total2->fielda[0];*/

$pdf->Cell(0,0.5,substr($jml2[$hslK],0,5) ,'LBR',1,'C',0);
///////////////////////-----------------------------------------------------------

$pdf->Cell(4.3,0.5,'    - Revenue','LBR',0,'L',0);
$pdf->Cell(1.7,0.5,'2006' ,'LBR',0,'C',0);
for($i=0;$i<12;$i++)
{

/*$get_total21 = $db->Execute("SELECT SEC_TO_TIME(TIME_TO_SEC('".$date1[$i]."') + TIME_TO_SEC('".$sum4."')) as `trbh`");
$sum4 = $get_total21->fields[0];
$jumlah[] = $sum4;*/
if($date1[0]!="")
{
	$date3 = $date1[0];
}
else
{
	$date3 = "00:00:00";
}
if($date1[1]!="")
{
	$date3 = $date1[1];
}
else
{
	$date3 = "00:00:00";
}
if($date1[2]!="")
{
	$date3 = $date1[2];
}
else
{
	$date3 = "00:00:00";
}
if($date1[3]!="")
{
	$date3 = $date1[3];
}
else
{
	$date3 = "00:00:00";
}
if($date1[4]!="")
{
	$date3 = $date1[4];
}
else
{
	$date3 = "00:00:00";
}
if($date1[5]!="")
{
	$date3 = $date1[5];
}
else
{
	$date3 = "00:00:00";
}if($date1[6]!="")
{
	$date3 = $date1[6];
}
else
{
	$date3 = "00:00:00";
}
if($date1[7]!="")
{
	$date3 = $date1[7];
}
else
{
	$date3 = "00:00:00";
}
if($date1[8]!="")
{
	$date3 = $date1[8];
}
else
{
	$date3 = "00:00:00";
}if($date1[9]!="")
{
	$date3 = $date1[9];
}
else
{
	$date3 = "00:00:00";
}
if($date1[10]!="")
{
	$date3 = $date1[10];
}
else
{
	$date3 = "00:00:00";
}
if($date1[11]!="")
{
	$date3 = $date1[11];
}
else
{
	$date3 = "00:00:00";
}
$dateArray = array($date3[$i]);


$get_total3 = $db->Execute("SELECT SEC_TO_TIME(TIME_TO_SEC('".$date1[$i]."') + TIME_TO_SEC('".$sum5."')) as `trbh`");
$sum5 = $get_total3->fields[0];
$jumlah[] = $sum5;

	
$pdf->Cell(1.7,0.5,substr($date1[$i],0,4),'LBR',0,'C',0);

}
$pdf->Cell(0,0.5,substr($jumlah[$hslK2],0,4),'LBR',1,'C',0);
///////////////////////-----------------------------------------------------------

$pdf->Cell(4.3,0.5,'Take-Offs - Total','LBR',0,'L',0);
$pdf->Cell(1.7,0.5,'2006' ,'LBR',0,'C',0);

/* ini query take offs revenue --------------------------*/




	for($i=0;$i<12;$i++)
	{
		$tot = $dataArray2[$i] + $dataArray3[$i];
		$pdf->Cell(1.7,0.5,$tot,'LBR',0,'C',0);
		$hsl32[] = $tot;
	}

	
$pdf->Cell(0,0.5,$sumTotalNonRev,'LBR',1,'C',0);


///////////////////////-----------------------------------------------------------

$pdf->Cell(4.3,0.5,'    - Revenue','LBR',0,'L',0);
$pdf->Cell(1.7,0.5,'2006' ,'LBR',0,'C',0);
for($i=0;$i<12;$i++)
{
	$pdf->Cell(1.7,0.5,$dataArray3[$i],'LBR',0,'C',0);
	
	
}
/*foreach($dataArray3 as $valueTake)
{
$pdf->Cell(1.7,0.5,$valueTake,'LBR',0,'C',0);
}*/

$pdf->Cell(0,0.5,$sumTotalRev,'LBR',1,'C',0);
///////////////////////-----------------------------------------------------------

$pdf->Cell(4.3,0.5,'Fly.Hours Per Take Offs-Total(*','LBR',0,'L',0);
$pdf->Cell(1.7,0.5,'2006' ,'LBR',0,'C',0);
for($i=0;$i<12;$i++)
{
$hslpertake21 =$jml[$i]/$hsl32[$i];
$hsltakeSub[] = substr($hslpertake21,0,5);
$hslTakeofffly = $hsltakeSub;
$subtotalTake = $hsltakeSub[$i] + $subtotalTake;
$totTake[] = $subtotalTake/12;
$pdf->Cell(1.7,0.5,$hslTakeofffly[$i],'LBR',0,'C',0);
}
$pdf->Cell(0,0.5,substr($totTake[11],0,5),'LBR',1,'C',0);
///////////////////////-----------------------------------------------------------

$pdf->Cell(4.3,0.5,'   - Revenue (*)','LBR',0,'L',0);
$pdf->Cell(1.7,0.5,'2006' ,'LBR',0,'C',0);
for($i=0;$i<12;$i++)
{
$hslpertakeRev = $date1[$i]/$dataArray3[$i];
$hslsub[] = substr($hslpertakeRev,0,5);

$hslRevTake = $hslsub[$i] + $hslRevTake;
$subTotal[] = $hslRevTake/12;
$pdf->Cell(1.7,0.5,$hslsub[$i],'LBR',0,'C',0);
}
$pdf->Cell(0,0.5,substr($subTotal[11],0,5),'LBR',1,'C',0);
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
$daily[] = $jml[$i]/$subhslhrs[$i];
$subdaily = $subdaily + $daily[$i];
$totdaily[] = $subdaily;
$pdf->Cell(1.7,0.5,substr($daily[$i],0,3) ,'LBR',0,'C',0);
}
$pdf->Cell(0,0.5,substr($totdaily[11],0,3),'LBR',1,'C',0);
///////////////////////-----------------------------------------------------------

$pdf->Cell(4.3,0.5,'    - Rev.Fly.Hours(*)','LBR',0,'L',0);
$pdf->Cell(1.7,0.5,'2006' ,'LBR',0,'C',0);
for($i=0;$i<12;$i++)
{
$flyhours[] = ($date1[$i]/$subhslhrs[$i]);

$pdf->Cell(1.7,0.5,substr($flyhours[$i],0,3),'LBR',0,'C',0);
}
$pdf->Cell(0,0.5,'LAST 12 MTHS','LBR',1,'C',0);
///////////////////////-----------------------------------------------------------

$pdf->Cell(4.3,0.5,'   -Tot.Take Offs','LBR',0,'L',0);
$pdf->Cell(1.7,0.5,'2006' ,'LBR',0,'C',0);
for($i=0;$i<12;$i++)
{
$totTakeOffs[] = $tot/$subhslhrs[$i];
$pdf->Cell(1.7,0.5,substr($totTakeOffs[$i],0,4),'LBR',0,'C',0);
}
$pdf->Cell(0,0.5,'LAST 12 MTHS','LBR',1,'C',0);
///////////////////////-----------------------------------------------------------

$pdf->Cell(4.3,0.5,'   -Rev.Take Offs','LBR',0,'L',0);
$pdf->Cell(1.7,0.5,'2006' ,'LBR',0,'C',0);
for($i=0;$i<12;$i++)
{
$revTakeOff[] = $dataArray3[$i]/$subhslhrs[$i];
$pdf->Cell(1.7,0.5,substr($revTakeOff[$i],0,4),'LBR',0,'C',0);
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