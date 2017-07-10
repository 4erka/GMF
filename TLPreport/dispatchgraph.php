<?
  include ("src/jpgraph.php");
  include ("src/jpgraph_line.php");
  include("function.php");
  $periode = isset($_REQUEST["periode"]) ? $_REQUEST["periode"] : "";
  $atachapter = isset($_REQUEST["atachapter"]) ? $_REQUEST["atachapter"] : '21';
  $actype = isset($_REQUEST["actp"]) ? $_REQUEST["actp"] : "";

  $TE = connectimesys('mcdr');
  $arractype = selectactype();
  $arrperiode = selectperiode();

	$tahunawal = substr($periode,0,4) - 1;
	$bulanawal = "01";

	$FH = queryFH12($periode,$actype,12);
	$bulan = array_reverse(array_keys($FH));
	
	$FCrev = queryFC12rev($periode,$actype);
	
	$delay = ATAdelay($bulan[0],$bulan[11],$actype);//die(print_r($delay));
	foreach($delay as $k => $v){
		//foreach($v as $key => $value){
		//	$ATA[$key] = $value;
		//}
		$jumlah = array_sum($v);
		$techdelay[$k] = $jumlah;
	}

	//die(print_r($bulan));
	foreach ($bulan as $key => $value){
		$techdelay[$value] = isset($techdelay[$value]) ? $techdelay[$value] : 0;
		$cancel[$value] = isset($cancel[$value]) ? $cancel[$value] : 0;

		$dispatch[] = round(($FCrev[$value] - $techdelay[$value] - $cancel[$value])/$FCrev[$value] * 100,2);
		$xaxis[] = bulan($value);
		$target[] = 99.42;
	}

	//print_r($hour);
//die(print_r($dispatch));
	//$xaxisVal = substr(array_keys($DR),-2);
	//die(print_r($a));
$data1 = $dispatch;
$data2 = $target;
//$datay = array(28,19,18,23,12,11,40,89,78,48,11,78);
//$data2y = array(14,18,33,29,39,55,11,45,48);

// A nice graph with anti-aliasing
$graph = new Graph(900,400,"auto");
$graph->img->SetMargin(40,50,40,60);	
//$graph->SetBackgroundImage("tiger_bkg.png",BGIMG_FILLFRAME);

$graph->img->SetAntiAliasing("white");
$graph->SetScale("textlin",90,100);
$graph->yscale->ticks->Set(1,1);
//$graph->SetShadow();
$graph->title->Set(" Dispatch Reliability ");

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
$p1->mark->SetFillColor("black");
$p1->mark->SetWidth(4);
$p1->SetColor("black");
$p1->SetCenter();
$p1->SetLegend("Dispacth 2007 - 2008");
//$graph ->legend->Pos(0.5,0.9999,"right" ,"bottom");

$graph->Add($p1);

// ... and the second
$p2 = new LinePlot($data2);
$p2->mark->SetType(MARK_STAR);
$p2->mark->SetFillColor("red");
$p2->mark->SetWidth(4);
$p2->SetColor("red");
$p2->SetCenter();
$p2->SetLegend("Target");
$graph->Add($p2);
$graph->legend->SetLayout(LEGEND_HOR);
// Output line
$graph->Stroke();
?>