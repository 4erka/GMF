<?
  include ("src/jpgraph.php");
  include ("src/jpgraph_line.php");
  include ("src/jpgraph_bar.php");
//  include("function.php");

//$data1 = array(28,19,18,23,12,11,40,89,78);
$data1 = $dispathcrel;
//$data2 = array(14,18,33,29,39,55,11,45,48);
$data2 = $dispathcrel2;
$judul = $juduldispatch;
$judulpirep = (substr($periode,5,2) == 12) ? "Pirep ".substr($periode,0,4) : "Pirep - ".(substr($periode,0,4));
$judulpireppast = (substr($periode,5,2) == 12) ? (substr($periode,0,4)-1) : "Pirep - ".(substr($periode,0,4)-1);
$judulp = $judulpirep;
$judulpp = $judulpireppast;
//JUDUL2AN MAREP START HERE
$judulmarep = (substr($periode,5,2) == 12) ? "Marep ".substr($periode,0,4) : "Marep - ".(substr($periode,0,4));
$judulmareppast = (substr($periode,5,2) == 12) ? (substr($periode,0,4)-1) : "Marep - ".(substr($periode,0,4)-1);
$judulm = $judulmarep;
$judulmp = $judulmareppast;
//JUDUL2AN MAREP END HERE
$target = "Target (" .$data2[1]."%)";
//<--------------------------------------DISPATCH--------------------->
// A nice graph with anti-aliasing
$graph = new Graph(400,200,"auto");
$graph->img->SetMargin(25,10,20,50);	
//$graph->SetFrame(false);
$graph->SetMarginColor('white');
//$graph->SetBackgroundImage("tiger_bkg.png",BGIMG_FILLFRAME);

$graph->img->SetAntiAliasing("white");
$graph->SetScale("textlin");
$graph->title->Set(" Dispatch Reliability ");

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
$graph->yscale->SetAutoMin(87); //KLO MAU CETAK CLASSIC, INI GANTI 89 YA, KALAU 744 87, normalnya 98
$graph->yaxis->SetFont(FF_VERDANA,FS_NORMAL,5);

$p1 = new LinePlot($data1);
$p1->mark->SetType(MARK_SQUARE);
//$p1->value->Show();
$p1->mark->SetFillColor("black");
$p1->mark->SetWidth(4);
$p1->SetColor("black");
$p1->SetCenter();
$p1->SetLegend($judul);
//$p1->SetLegend("Dispatch (2008 - 2009)");
//$graph ->legend->Pos(0.5,0.9999,"right" ,"bottom");

$graph->Add($p1);

// ... and the second
$p2 = new LinePlot($data2);
$p2->mark->SetType(MARK_STAR);
$p2->mark->SetFillColor("red");
$p2->mark->SetWidth(4);
$p2->SetColor("blue");
$p2->SetCenter();
$p2->SetLegend($target);
$graph->Add($p2);

$graph->legend->SetFont(FF_ARIAL,FS_NORMAL,6);
$graph->legend->SetLayout(LEGEND_HOR);
$graph->legend->Pos(0.5,0.99,"center" ,"bottom");
$graph->legend->SetShadow(FALSE);

$gdImgHandler = $graph->Stroke(_IMG_HANDLER);
$fileName = "imagefile.png";
$graph->img->Stream($fileName);

//<--------------------------------------INCIDENT------------------>
$graph = new Graph(400,200,"auto");
$graph->img->SetMargin(25,10,20,50);	
//$graph->SetFrame(false);
$graph->SetMarginColor('white');
//$graph->SetBackgroundImage("tiger_bkg.png",BGIMG_FILLFRAME);

$graph->img->SetAntiAliasing("white");
$graph->SetScale("textlin");
$graph->title->Set(" Technical Incident ");

$graph->title->SetFont(FF_VERDANA,FS_BOLD,7);
$graph->title->SetColor('navy');

$graph->SetColor("white");
$graph->xaxis->SetTickLabels($xaxis);
$graph->xaxis->SetFont(FF_VERDANA,FS_NORMAL,5);
//$graph->yscale->SetAutoMax(1.00);
$graph->yaxis->SetFont(FF_VERDANA,FS_NORMAL,5);

$p1 = new LinePlot($incidentrate);
$p1->mark->SetType(MARK_SQUARE);
$p1->mark->SetFillColor("black");
$p1->mark->SetWidth(4);
$p1->SetColor("black");
$p1->SetCenter();
$p1->SetLegend("Rate Incident");

$graph->Add($p1);

// ... and the second
$p2 = new LinePlot($rtbrate);
//$p2->mark->SetType(MARK_STAR);
$p2->mark->SetFillColor("red");
$p2->mark->SetWidth(4);
$p2->SetColor("blue");
$p2->SetCenter();
//$p2->SetLegend("Rate RTB");
$graph->Add($p2);

$graph->legend->SetFont(FF_ARIAL,FS_NORMAL,6);
$graph->legend->SetLayout(LEGEND_HOR);
$graph->legend->Pos(0.5,0.99,"center" ,"bottom");
$graph->legend->SetShadow(FALSE);

$gdImgHandler = $graph->Stroke(_IMG_HANDLER);
$fileName2 = "imagefile2.png";
$graph->img->Stream($fileName2);
//<------------------------------------PIREP--------------------------->
$graph = new Graph(400,200,"auto");
$graph->img->SetMargin(50,10,20,50);	
//$graph->SetFrame(false);
$graph->SetMarginColor('white');
//$graph->SetBackgroundImage("tiger_bkg.png",BGIMG_FILLFRAME);

$graph->img->SetAntiAliasing("white");
$graph->SetScale("textlin");
$graph->title->Set(" PILOT REPORT ");
//$graph->xaxis->title->Set("X-title");
//$graph->yaxis->title->Set("Y-title");

$graph->title->SetFont(FF_VERDANA,FS_BOLD,7);
$graph->title->SetColor('navy');

$graph->SetColor("white");
$graph->xaxis->SetTickLabels($axispirep);
$graph->xaxis->SetFont(FF_VERDANA,FS_NORMAL,5);
$graph->yaxis->SetFont(FF_VERDANA,FS_NORMAL,5);
$graph->yaxis->title->Set("RATE per 1000 FHRS");
$graph->yaxis->title->SetFont(FF_VERDANA,FS_NORMAL,5);
//$graph->yaxis->title->Set("RATE per 1000 FHRS"); 
//print_r($axispirep);
//die(print_r($pirepcurrentrate));
$b1plot  = new BarPlot($pilotreportratelast);
$b1plot->SetFillColor( "gray");
//$p1->SetCenter();
$b1plot->SetLegend($judulpp);
//die(print_r($pirepcurrentrate));
$b2plot  = new BarPlot($pirepcurrentrate);
$b2plot->SetFillColor( "blue");
//$p1->SetCenter();
$b2plot->SetLegend($judulp);

$gbplot  = new GroupBarPlot (array($b1plot ,$b2plot));

$graph->legend->SetFont(FF_ARIAL,FS_NORMAL,6);
$graph->legend->SetLayout(LEGEND_HOR);
$graph->legend->Pos(0.5,0.99,"center" ,"bottom");
$graph->legend->SetShadow(FALSE);

$graph->Add($gbplot);

$txt=new Text( "JAN       FEB     MAR     APR      MAY     JUN       JUL      AUG      SEP     OCT      NOV     DEC");
$txt->Pos( 57,163);
$txt->SetFont(FF_VERDANA,FS_NORMAL,5);
$txt->SetColor( "black");
$graph->AddText( $txt);

/*$txt=new Text( "No of Pirep");
$txt->Pos( 30,158);
$txt->SetFont(FF_ARIAL,FS_NORMAL,5);
$txt->SetColor( "black");
$graph->AddText( $txt);*/

$gdImgHandler = $graph->Stroke(_IMG_HANDLER);
$fileName3 = "imagefile3.png";
$graph->img->Stream($fileName3);

//<------------------------------------MAREP--------------------------->
$graph = new Graph(400,200,"auto");
$graph->img->SetMargin(50,10,20,50);	
//$graph->SetFrame(false);
$graph->SetMarginColor('white');
//$graph->SetBackgroundImage("tiger_bkg.png",BGIMG_FILLFRAME);

$graph->img->SetAntiAliasing("white");
$graph->SetScale("textlin");
$graph->title->Set(" MAINTENANCE FINDING REPORT ");
//$graph->xaxis->title->Set("X-title");
//$graph->yaxis->title->Set("Y-title");

$graph->title->SetFont(FF_VERDANA,FS_BOLD,7);
$graph->title->SetColor('navy');

$graph->SetColor("white");
$graph->xaxis->SetTickLabels($axismarep);
$graph->xaxis->SetFont(FF_VERDANA,FS_NORMAL,5);
$graph->yaxis->SetFont(FF_VERDANA,FS_NORMAL,5);
$graph->yaxis->title->Set("RATE per 1000 FHRS");
$graph->yaxis->title->SetFont(FF_VERDANA,FS_NORMAL,5);
//$graph->yaxis->title->Set("RATE per 1000 FHRS"); 
//print_r($axispirep);
//die(print_r($marepcurrentrate));
$c1plot  = new BarPlot($maintreportratelast);
$c1plot->SetFillColor( "gray");
//$p1->SetCenter();
$c1plot->SetLegend($judulmp);
//die(print_r($marepcurrentrate));
$c2plot  = new BarPlot($marepcurrentrate);
$c2plot->SetFillColor( "blue");
//$p1->SetCenter();
$c2plot->SetLegend($judulm);

$gbplot  = new GroupBarPlot (array($c1plot ,$c2plot));

$graph->legend->SetFont(FF_ARIAL,FS_NORMAL,6);
$graph->legend->SetLayout(LEGEND_HOR);
$graph->legend->Pos(0.5,0.99,"center" ,"bottom");
$graph->legend->SetShadow(FALSE);

$graph->Add($gbplot);

$txt=new Text( "JAN       FEB     MAR     APR      MAY     JUN       JUL      AUG      SEP     OCT      NOV     DEC");
$txt->Pos( 57,163);
$txt->SetFont(FF_VERDANA,FS_NORMAL,5);
$txt->SetColor( "black");
$graph->AddText( $txt);

/*$txt=new Text( "No of Pirep");
$txt->Pos( 30,158);
$txt->SetFont(FF_ARIAL,FS_NORMAL,5);
$txt->SetColor( "black");
$graph->AddText( $txt);*/

$gdImgHandler = $graph->Stroke(_IMG_HANDLER);
$fileName4 = "imagefile4.png";
$graph->img->Stream($fileName4);

?>