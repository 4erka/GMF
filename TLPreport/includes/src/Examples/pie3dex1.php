<?php
include ("../jpgraph.php");
include ("../jpgraph_pie.php");
include ("../jpgraph_pie3d.php");

include ("../connjobcard.php");


$open =$db->Execute("select count(STATUS) as open from tbltaskmech where STATUS ='OPEN'");
$temp_stop =$db->Execute("select count(STATUS) as temp from tbltaskmech where STATUS ='TEMP STOP'");
$close =$db->Execute("select count(STATUS) as close from tbltaskmech where STATUS ='CLOSE'");

$t_open = $open->fields['open'];
$t_temp= $temp_stop->fields['temp'];
$t_close = $close->fields['close'];

//echo $t_open;
//echo $t_temp;
//echo $t_close;

/*
$del="2";
$dua="2";
$tiga="4";
$mpt="2";
$jml="10";
*/
// Some data
//$data = array($del,$dua,$tiga,$mpt,$jml);
$data = array($t_open,$t_temp,$t_close);
/*
// Create the Pie Graph.
$graph = new PieGraph(360,210,"auto");
$graph->SetShadow();

// Set A title for the plot
$graph->title->Set("View JobCard");
$graph->title->SetFont(FF_VERDANA,FS_BOLD,18); 
$graph->title->SetColor("darkblue");
$graph->legend->Pos(0.1,0.6);

// Create pie plot
$p1 = new PiePlot3d($data);
$p1->SetTheme("sand");
$p1->SetCenter(0.3);
$p1->SetAngle(30);
$p1->value->SetFont(FF_ARIAL,FS_NORMAL,12);
$p1->SetLegends(array("Open","Temp Stop","Close"));

$graph->Add($p1);
$graph->Stroke();
*/




?>


