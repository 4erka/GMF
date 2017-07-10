<?php
// $Id: groupbarex1.php,v 1.2 2002/07/11 23:27:28 aditus Exp $
include '../portal.php5';
include '../connectcv.php5';
include "../connbit.php5";
include "jpgraph.php";
include "jpgraph_bar.php";

$QueryNopeg=mysql_query("SELECT nopeg,bitcode,MID(unit,4,3) FROM cv.tabpersonel WHERE nopeg='".$nopegprtl."'");
$QueryP3=mysql_query("SELECT userid,bitcode,LEFT(unit,3) FROM `bit`.pihak3 WHERE userid='".$nopegprtl."'");
if(mysql_num_rows($QueryNopeg)>0)
  {
   $DataNopeg=mysql_fetch_array($QueryNopeg);
  }
else
  {
   $DataNopeg=mysql_fetch_array($QueryP3);
  }  
  
if($DataNopeg['1']=='*')
  {
   $unit=substr($DataNopeg['2'],0,2);
  }
else
  {
   $unit=substr($DataNopeg['2'],0,3);
  }  

$Query1=mysql_query("SELECT COUNT(b.Nopeg) as 'Jumlah',MONTHNAME(PeriodePbyaran) AS month,YEAR(PeriodePbyaran) AS year,MONTH(PeriodePbyaran) AS Month
													FROM bit.dbo_tblcuti a INNER JOIN cv.tabpersonel b ON (a.Nopeg = b.Nopeg)
													WHERE (a.PeriodePbyaran IS NOT NULL) AND (b.unit LIKE '%".$unit."%')GROUP BY MONTH(PeriodePbyaran)");

if(mysql_num_rows($Query1)<=0)
  {
   echo "<script>
          alert('Data not available.');
		  location.href='../gambar.php5';
		 </script>";
   exit;
  }
						
$Count=0;
while($Data=mysql_fetch_array($Query1))
     {		
	  $datay1[$Count]=$Data['Jumlah'];
	  $datax[$Count]=$Data['month'];
	  $month=$Data['month'];
	  $Query2=mysql_query("SELECT (SELECT COUNT(nopeg) FROM cv.tabpersonel WHERE MID(unit,4,3) LIKE '".$unit."%')-(SELECT COUNT(b.nopeg) FROM bit.dbo_tblcuti a INNER JOIN cv.tabpersonel b ON (a.Nopeg = b.nopeg)
													WHERE MONTH(a.PeriodePbyaran)='".$Data['Month']."' AND MID(b.unit,4,3) LIKE '".$unit."%')");
      $Data2=mysql_fetch_array($Query2);													
	  $datay2[$Count]=$Data2['0'];
	  $year=$Data['year'];
	  $Count++;
	 }
  $bplot1 = new BarPlot($datay1);	  
  $bplot2 = new BarPlot($datay2);
$graph = new Graph(350,350,"auto");	
$graph->SetScale("textlin");
$graph->SetShadow();
$graph->img->SetMargin(40,30,20,95);

$graph->SetBackgroundGradient('lightsteelblue','white');

$titlexaxis="Related Month";
$graph->xaxis->title->Set($titlexaxis);
$graph->xaxis->title->SetFont(FF_FONT1,FS_BOLD);
$graph->xaxis->title->SetColor("teal");
$graph->yaxis->SetColor("teal");
$graph->yaxis->SetWeight(2);
$graph->xaxis->SetColor("teal");
$graph->xaxis->SetWeight(2);


$graph->title->Set("ANNUAL LEAVES LIST FOR ".$unit." ON ".$year);
$graph->title->SetFont(FF_FONT1,FS_BOLD);
$graph->title->SetColor("teal");

//$bplot1 = new BarPlot($datay1);


$graph->yaxis->scale->SetGrace(25);

$bplot1 ->value->Show();
$bplot1 ->value->SetFormat('%d');
//$bplot1 ->SetAbsWidth(20);
$bplot2 ->value->Show();
$bplot2 ->value->SetFormat('%d');

$bplot1->SetColor("navy");
$bplot1->SetFillGradient("navy","white",GRAD_MIDVER);
$bplot1->SetLegend("Total of leave employees");

$bplot2->SetColor("teal");
$bplot2->SetFillGradient("teal","white",GRAD_MIDVER);
$bplot2->SetLegend("Total of unleave employees");

$gbarplot = new GroupBarPlot(array($bplot1,$bplot2));
$gbarplot->SetWidth(0.5);
$graph->Add($gbarplot); 
$graph->xaxis->SetTickLabels($datax);
$graph->legend->SetLayout(LEGEND_VERT); 
$graph->legend->Pos(0.5,0.83,"center");

$graph->Stroke(); 

?>

