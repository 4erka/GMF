<?php
// $Id: groupbarex1.php,v 1.2 2002/07/11 23:27:28 aditus Exp $
include "../connbit.php5";
include "jpgraph.php";
include "jpgraph_bar.php";

$raey=$_REQUEST['nuhat'];

$Query1=mysql_query("SELECT COUNT(b.Nopeg) as 'Jumlah',MONTHNAME(a.PeriodePbyaran) AS month,YEAR(a.PeriodePbyaran) AS year
													FROM bit.dbo_tblcuti a INNER JOIN cv.tabpersonel b ON (a.Nopeg = b.Nopeg)
													WHERE (a.PeriodePbyaran IS NOT NULL) AND YEAR(a.PeriodePbyaran)='".$raey."' GROUP BY MONTHNAME(a.PeriodePbyaran) ORDER BY MONTH(a.PeriodePbyaran)");

if(mysql_num_rows($Query1)<=0)
  {
   echo "<script>
         alert('Data not available');
		 location.href='../chartgen_admin.php';
		 </script>";
   exit;		 
  }						
$Count=0;
while($Data=mysql_fetch_array($Query1))
     {		
	  $datay1[$Count]=$Data['Jumlah'];
	  $datax[$Count]=$Data['month'];
	  $month=$Data['month'];
	  
	  $Query2=mysql_query("SELECT (SELECT COUNT(a.nopeg) FROM cv.tabpersonel a)-(SELECT COUNT(b.Nopeg) FROM `bit`.dbo_tblcuti b WHERE b.PeriodePbyaran IS NOT NULL AND MONTHNAME(b.PeriodePbyaran)='".$month."')");
	  $Data2=mysql_fetch_array($Query2);
	  $datay2[$Count]=$Data2['0'];
	  $year=$Data['year'];
	  $Count++;
	 }
  $bplot1 = new BarPlot($datay1);
  $bplot2 = new BarPlot($datay2);

$graph = new Graph(450,400,"auto");	
$graph->SetScale("textlin");
$graph->SetShadow();
$graph->img->SetMargin(40,30,20,40);

$graph->SetBackgroundGradient('steelblue4','lightsteelblue1');

$titlexaxis="Related Month";
$graph->xaxis->title->Set($titlexaxis);
$graph->xaxis->title->SetFont(FF_FONT1,FS_BOLD);
$graph->xaxis->title->SetColor("brown");
$graph->yaxis->SetColor("navy");
$graph->yaxis->SetWeight(2);
$graph->xaxis->SetColor("brown");
$graph->xaxis->SetWeight(2);


$graph->title->Set("ANNUAL LEAVES LIST ON ".$raey);
$graph->title->SetFont(FF_FONT1,FS_BOLD);
$graph->title->SetColor("white");

//$bplot1 = new BarPlot($datay1);


$graph->yaxis->scale->SetGrace(25);

$bplot1 ->value->Show();
$bplot1 ->value->SetFormat('%d');
$bplot1 ->value->SetColor('navy');
$bplot2 ->value->Show();
$bplot2 ->value->SetFormat('%d');
$bplot2 ->value->SetColor('white');
//$bplot1 ->SetAbsWidth(20);

$bplot1->SetColor("lightsteelblue");
$bplot1->SetFillGradient("steelblue3","skyblue1",GRAD_MIDVER);
$bplot1->SetLegend("Total leave employees");

$bplot2->SetColor("lightsteelblue");
$bplot2->SetFillGradient("white","navy",GRAD_MIDVER);
$bplot2->SetLegend("Total unleave employees");

$gbarplot = new GroupBarPlot(array($bplot1,$bplot2));
$gbarplot->SetWidth(0.7);
$graph->Add($gbarplot); 
$graph->xaxis->SetTickLabels($datax);
$graph->legend->SetLayout(LEGEND_VERT); 
$graph->legend->Pos(0.52, 0.08,"center");

$graph->Stroke(); 

?>
