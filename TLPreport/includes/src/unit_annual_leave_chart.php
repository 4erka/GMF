<?php
// $Id: groupbarex1.php,v 1.2 2002/07/11 23:27:28 aditus Exp $
include "../connbit.php5";
include "jpgraph.php";
include "jpgraph_bar.php";

$raey=$_REQUEST['raey'];
$htnom=$_REQUEST['htnom'];
$encode=$_REQUEST['encode'];
if($_REQUEST['secode']=='')
  {  
   $Query1=mysql_query("SELECT COUNT(MID(b.Unit,4,3)) as 'Jumlah',MID(b.Unit,4,3) AS Unit,MONTHNAME(a.PeriodePbyaran) AS Month
   FROM bit.dbo_tblcuti a INNER JOIN cv.tabpersonel b ON (a.Nopeg = b.Nopeg)
   WHERE (a.PeriodePbyaran IS NOT NULL) AND YEAR(a.PeriodePbyaran)='".$raey."' AND MONTH(a.PeriodePbyaran)='".$htnom."' AND    (MID(b.Unit,4,2)) LIKE '".$encode."%' GROUP BY MID(b.Unit,4,3) ORDER BY MID(b.Unit,4,3)");
						
$Count=0;
while($Data=mysql_fetch_array($Query1))
     {		
	  $datay1[$Count]=$Data['Jumlah'];
	  $Month=$Data['Month'];
	  if(substr($Data['Unit'],-1)=='-')
	    {
		 $datax[$Count]=substr($Data['Unit'],0,2);
		}
	  else
	    {	
	     $datax[$Count]=$Data['Unit'];
	    }
	  $Count++;
	 }
   } 
else
   {
    $secode=$_REQUEST['secode'];
	
	$Query1=mysql_query("SELECT COUNT(MID(b.Unit,4,3)) as 'Jumlah',MID(b.Unit,4,3) AS Unit,MONTHNAME(a.PeriodePbyaran) AS Month
   FROM bit.dbo_tblcuti a INNER JOIN cv.tabpersonel b ON (a.Nopeg = b.Nopeg)
   WHERE (a.PeriodePbyaran IS NOT NULL) AND YEAR(a.PeriodePbyaran)='".$raey."' AND (MID(b.Unit,4,3)) LIKE '".$secode."%' GROUP BY MONTHNAME(a.PeriodePbyaran) ORDER BY MONTH(a.PeriodePbyaran) ASC");
   
   $Count=0;
while($Data=mysql_fetch_array($Query1))
     {		
	  $datay1[$Count]=$Data['Jumlah'];
	  $Month=$Data['Month'];
	  if(substr($Data['Unit'],-1)=='-')
	    {
		 $Unit=substr($Data['Unit'],0,2);
		}
	  else
	    {	
	     $Unit=$Data['Unit'];
	    }
      $datax[$Count]=$Data['Month'];
	  $Count++;
	 }
   }	

if(mysql_num_rows($Query1)<=0)
  {
   echo "<script>alert('Data not available');
          location.href='../chartgen_admin.php';
		 </script>";
   exit;
  }
$bplot1 = new BarPlot($datay1);	  

$graph = new Graph(350,350);	
$graph->SetScale("textlin");
$graph->SetShadow();
$graph->img->SetMargin(40,30,20,90);

$graph->SetBackgroundGradient('lightsteelblue','white');


$graph->yaxis->SetColor("teal");
$graph->yaxis->SetWeight(2);
$graph->xaxis->SetColor("teal");
$graph->xaxis->SetWeight(2);

if($_REQUEST['secode']=='')
  { 
   $graph->title->Set("ANNUAL LEAVES LIST ON ".strtoupper($Month)." ".$raey);
   $titlexaxis="Related Unit";
  }
else
  {
   $graph->title->Set("ANNUAL LEAVES LIST ON ".$raey);
   $titlexaxis="Related Month";
  }   
$graph->xaxis->title->Set($titlexaxis);
$graph->xaxis->title->SetFont(FF_FONT1,FS_BOLD);
$graph->xaxis->title->SetColor("teal");  
$graph->title->SetFont(FF_FONT1,FS_BOLD);
$graph->title->SetColor("teal");

$bplot1 = new BarPlot($datay1);


$graph->yaxis->scale->SetGrace(5);

$bplot1 ->value->Show();
$bplot1 ->value->SetFormat('%d');
//$bplot1 ->SetAbsWidth(20);

$bplot1->SetColor("navy@1.0");
$bplot1->SetFillGradient("navy","white",GRAD_MIDVER);
if($_REQUEST['secode']=='')
  { 
   $bplot1->SetLegend("Total employees leave");
  }
else
  {
   $bplot1->SetLegend("Total employees leave for all ".$Unit);
  }  
$gbarplot = new GroupBarPlot(array($bplot1));
$gbarplot->SetWidth(0.3);
$graph->Add($gbarplot); 
$graph->xaxis->SetTickLabels($datax);
$graph->legend->SetLayout(LEGEND_HOR); 
$graph->legend->Pos(0.52, 0.85,"center");

$graph->Stroke(); 
?>
