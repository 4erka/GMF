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
	  $year=$Data['year'];
	  $Count++;
	 }
  $bplot1 = new BarPlot($datay1);	  

$graph = new Graph(350,350,"auto");	
$graph->SetScale("textlin");
$graph->SetShadow();
$graph->img->SetMargin(40,30,20,40);

$graph->SetBackgroundGradient('lightsteelblue','white');

$titlexaxis="Related Month";
$graph->xaxis->title->Set($titlexaxis);
$graph->xaxis->title->SetFont(FF_FONT1,FS_BOLD);
$graph->xaxis->title->SetColor("teal");
$graph->yaxis->SetColor("teal");
$graph->yaxis->SetWeight(2);
$graph->xaxis->SetColor("teal");
$graph->xaxis->SetWeight(2);


$graph->title->Set("ANNUAL LEAVES LIST ON ".$raey);
$graph->title->SetFont(FF_FONT2,FS_BOLD);
$graph->title->SetColor("teal");

$bplot1 = new BarPlot($datay1);


$graph->yaxis->scale->SetGrace(25);

$bplot1 ->value->Show();
$bplot1 ->value->SetFormat('%d');
//$bplot1 ->SetAbsWidth(20);

$bplot1->SetColor("navy@1.2");
$bplot1->SetFillGradient("navy","white",GRAD_MIDVER);
$bplot1->SetLegend("Total employees leave");

$gbarplot = new GroupBarPlot(array($bplot1));
$gbarplot->SetWidth(0.2);
$graph->Add($gbarplot); 
$graph->xaxis->SetTickLabels($datax);
$graph->legend->SetLayout(LEGEND_HOR); 
$graph->legend->Pos(0.52, 0.08,"center");

$graph->Stroke(); 

?>

