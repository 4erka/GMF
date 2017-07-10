<?php
include ("../connbit.php5");
include ("jpgraph.php");
include ("jpgraph_bar.php");

//$datay=array(12,8,19,3,10,5);

$Query1=mysql_query("SELECT COUNT(b.Nopeg) as 'Jumlah',MONTHNAME(PeriodePbyaran) AS month,YEAR(PeriodePbyaran) AS year
													FROM bit.dbo_tblcuti a INNER JOIN cv.tabpersonel b ON (a.Nopeg = b.Nopeg)
													WHERE (a.PeriodePbyaran IS NOT NULL) GROUP BY MONTH(PeriodePbyaran)");
						
$Count=0;
while($Data=mysql_fetch_array($Query1))
     {		
	  $datay1[$Count]=$Data['Jumlah'];
	  $datax[$Count]=$Data['month'];
	  
	  $Query2=mysql_query("SELECT ( SELECT Count(`a`.`nopeg`) FROM `cv`.`tabpersonel` `a`) - ( SELECT COUNT(`b`.`Nopeg`) FROM `bit`.`dbo_tblcuti` `b` WHERE `b`.`PeriodePbyaran` IS NOT NULL AND MONTHNAME(`b`.`PeriodePbyaran`)='".$Data['month']."')");
	  $dat_semy2=mysql_fetch_array($Query2);
	  $datay2[$Count]=$dat_semy2['0'];
	  
	  $month=$Data['month'];
	  $year=$Data['year'];
	  $Count++;
	 }

// Create the graph. These two calls are always required
$graph = new Graph(400,200);    
$graph->SetScale("textlin");
$graph->yaxis->scale->SetGrace(20);

// Add a drop shadow
$graph->SetShadow();

// Adjust the margin a bit to make more room for titles
$graph->img->SetMargin(40,30,20,40);


// Create a bar pot
$bplot = new BarPlot($datay1);
$bplot2 = new BarPlot($datay2);

// Adjust fill color
$bplot->SetFillColor('orange');
$bplot->value->Show();
$bplot->value->SetFormat('%d');
$bplot2->SetFillColor('navy');
$bplot2->value->Show();
$bplot2->value->SetFormat('%d');
//$bplot->SetWidth(0.3);
//$bplot->SetWidth(0.3);
$gbplot = new GroupBarPlot(array($bplot,$bplot2));
$graph->Add($gbplot);

// Setup the titles
$graph->title->Set("Bar graph");
$graph->xaxis->title->Set("X-title");
$graph->yaxis->title->Set("Y-title");

$graph->title->SetFont(FF_FONT1,FS_BOLD);
$graph->yaxis->title->SetFont(FF_FONT1,FS_BOLD);
$graph->xaxis->title->SetFont(FF_FONT1,FS_BOLD);
$graph->xaxis->SetTickLabels($datax);

// Display the graph
$graph->Stroke();
?>

