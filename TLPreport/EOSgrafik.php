<?
  include ("src/jpgraph.php");
  include ("src/jpgraph_line.php");
//  include("function.php");

//$data1 = array(28,19,18,23,12,11,40,89,78);
//$data1 = $dispathcrel;
//$data2 = array(14,18,33,29,39,55,11,45,48);
//$data2 = $dispathcrel2;

// A nice graph with anti-aliasing
$graph = new Graph(600,200,"auto");
$graph->img->SetMargin(25,140,20,20);	
//$graph->SetFrame(false);
$graph->SetMarginColor('white');
//$graph->SetBackgroundImage("tiger_bkg.png",BGIMG_FILLFRAME);

$graph->img->SetAntiAliasing("white");
$graph->SetScale("textlin");
$graph->title->Set(" ENGINE REMOVAL RATE\n".$actype);

// Use built in font
$graph->title->SetFont(FF_VERDANA,FS_BOLD,7);
$graph->title->SetColor('navy');

// Slightly adjust the legend from it's default position in the
// top right corner. 
//$graph->legend->Pos(0.05,0.1,"right","bottom");


$graph->SetColor("white");
//$graph->SetScale('textlin',0,100);
$graph->xaxis->SetTickLabels($xaxis);
$graph->xaxis->SetFont(FF_VERDANA,FS_NORMAL,5);
//$graph->yscale->SetAutoMin(90);
//$graph->yaxis->SetColor("navy");
$graph->yaxis->SetFont(FF_VERDANA,FS_NORMAL,5);

$p1 = new LinePlot($uer);
$p1->mark->SetType(MARK_SQUARE);
//$p1->value->Show();
$p1->mark->SetFillColor("black");
$p1->mark->SetWidth(4);
$p1->SetColor("black");
$p1->SetCenter();
$p1->SetLegend("UER RATE");
//$p1->SetLegend("Dispatch (2008 - 2009)");
//$graph ->legend->Pos(0.5,0.9999,"right" ,"bottom");

$graph->Add($p1);

// ... and the second
$p2 = new LinePlot($premature);
$p2->mark->SetType(MARK_STAR);
$p2->mark->SetFillColor("blue");
$p2->mark->SetWidth(4);
$p2->SetColor("blue");
$p2->SetCenter();
$p2->SetLegend("PREMATURE REMOVAL RATE");
$graph->Add($p2);

// ... and the third
$p3 = new LinePlot($shopvisit);
$p3->mark->SetType(MARK_CIRCLE);
$p3->mark->SetFillColor("red");
$p3->mark->SetWidth(4);
$p3->SetColor("red");
$p3->SetCenter();
$p3->SetLegend("SHOP VISIT RATE");
$graph->Add($p3);

// ... and the forth
$p4 = new LinePlot($engremoval);
$p4->mark->SetType(MARK_STAR);
$p4->mark->SetFillColor("green");
$p4->mark->SetWidth(4);
$p4->SetColor("green");
$p4->SetCenter();
$p4->SetLegend("ENGINE REMOVAL RATE");
$graph->Add($p4);

$graph->legend->SetFont(FF_ARIAL,FS_NORMAL,5);
//$graph->legend->SetLayout(LEGEND_HOR);
$graph->legend->Pos(0.9,0.5,"center" ,"center");
$graph->legend->SetShadow(FALSE);

$gdImgHandler = $graph->Stroke(_IMG_HANDLER);
$fileName2 = "eos.png";
$graph->img->Stream($fileName2);
// Output line
//$graph->Stroke();
?>