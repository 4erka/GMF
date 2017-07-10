<?
  include ("src/jpgraph.php");
  include ("src/jpgraph_line.php");
  include("function.php");
  $periode = isset($_REQUEST["periode"]) ? $_REQUEST["periode"] : "";
 // $atachapter = isset($_REQUEST["atachapter"]) ? $_REQUEST["atachapter"] : '21';
  $actype = isset($_REQUEST["actp"]) ? $_REQUEST["actp"] : "";

  $TE = connectimesys('mcdr');
  $arractype = selectactype();
  $arrperiode = selectperiode();

	$tahunawal = substr($periode,0,4) - 1;
	$bulanawal = "01";

	$FH = queryFH12($periode,$actype,12);
	$bulan = array_reverse(array_keys($FH));
	
	//$FCrev = queryFC12rev($periode,$actype);
	
	$ATApirep = ATA($tahunawal."-".$bulanawal,$periode,$actype);//die(print_r($ATApirep));
	foreach ($ATApirep as $k => $v){
		$pirep[$k] = array_sum($v);
		$blnpirep[] = $k;
	}
die(print_r($pirep));
for ($i=0;$i<12;$i++){
	$pirepcurrent[$i] = isset($pirep[$blnpirep[$i+12]]) ? $pirep[$blnpirep[$i+12]] : 0;

	$bln[] = $pirep[$blnpirep[$i]];
	$pirepnow[] = $pirepcurrent[$i];
	$lastpirep[] = bulan($blnpirep[$i]);
}

	//print_r($hour);
//die(print_r($pirep));
	//$xaxisVal = substr(array_keys($DR),-2);
	//die(print_r($a));
$data1 = $incidentrate;
$data2 = $rtb;
//$datay = array(28,19,18,23,12,11,40,89,78,48,11,78);
//$data2y = array(14,18,33,29,39,55,11,45,48);

// A nice graph with anti-aliasing
$graph = new Graph(900,400,"auto");
$graph->img->SetMargin(40,50,40,60);	
//$graph->SetBackgroundImage("tiger_bkg.png",BGIMG_FILLFRAME);

$graph->img->SetAntiAliasing("white");
$graph->SetScale("textlin");
//$graph->yscale->ticks->Set(1,1);
//$graph->SetShadow();
$graph->title->Set(" Technical Incident ");

// Use built in font
$graph->title->SetFont(FF_VERDANA,FS_NORMAL,16);
$graph->legend->SetFont(FF_VERDANA,FS_BOLD,9);
$graph->xaxis->SetFont(FF_VERDANA,FS_NORMAL,9);
$graph->yaxis->SetFont(FF_VERDANA,FS_NORMAL,9);

// Slightly adjust the legend from it's default position in the
// top right corner. 
$graph->legend->Pos(0.5,0.98,"center","bottom");

// Create the first line

$graph->SetColor("white");
//$graph->SetScale('textlin',0,100);
$graph->xaxis->SetTickLabels($xaxis);
$p1 = new LinePlot($data1);
$p1->mark->SetType(MARK_SQUARE);
//$p1->value->Show();
$p1->mark->SetFillColor("blue");
$p1->mark->SetWidth(4);
$p1->SetColor("blue");
$p1->SetCenter();
$p1->SetLegend("Rate Incident");
//$graph ->legend->Pos(0.5,0.9999,"right" ,"bottom");

$graph->Add($p1);

// ... and the second
$p2 = new LinePlot($data2);
$p2->mark->SetType(MARK_STAR);
$p2->mark->SetFillColor("red");
$p2->mark->SetWidth(4);
$p2->SetColor("red");
$p2->SetCenter();
$p2->SetLegend("Rate RTB");
$graph->Add($p2);
$graph->legend->SetLayout(LEGEND_HOR);
// Output line
$graph->Stroke();
?>