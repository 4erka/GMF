<?
  include ("src/jpgraph.php");
  include ("src/jpgraph_line.php");
  include("function.php");
  $periode = isset($_REQUEST["periode"]) ? $_REQUEST["periode"] : "";
  $actype = isset($_REQUEST["actype"]) ? $_REQUEST["actype"] : "";

  $connectAMS = connectimesys('imesys');
	$FH = queryFH12($periode,$actype,12);
	$bulan = array_reverse(array_keys($FH));
	$FHrev = queryFH12rev($periode,$actype);
	$FC = queryFC12($periode,$actype,12);
	$FCrev = queryFC12rev($periode,$actype);
	$fleet = fleet($periode,$actype);
	$available = available($bulan[0],$bulan[11],$actype);
	

	//last year
	$periodelastyear = (substr($periode,0,4) - 1)."-12";
	$FHlastyear = queryFH12($periodelastyear,$actype,12);
	$FHrevlastyear = queryFH12rev($periodelastyear,$actype);
	$FClastyear = queryFC12($periodelastyear,$actype,12);
	$FCrevlastyear = queryFC12rev($periodelastyear,$actype);
	$fleetlastyear = fleet($periodelastyear,$actype);
	$availablelastyear = available((substr($periode,0,4) - 1)."-01",(substr($periode,0,4) - 1)."-12",$actype);
	$connectnih = connectimesys('rmd');
	
	$qryincident = "SELECT Count(`relsummary`.`ACType`) AS `Jumlah`, DATE_FORMAT(`relsummary`.`DateIssued`,'%Y-%m') AS `periode` FROM `relsummary` WHERE (DATE_FORMAT(relsummary.DateIssued,'%y-%m') BETWEEN '".$bulan[0]."' AND '".$bulan[11]."') AND `relsummary`.`ACType` = '".$actype."' AND `relsummary`.`Reference` = 'SDR' GROUP BY DATE_FORMAT(`relsummary`.`DateIssued`,'%Y-%m') ORDER BY DATE_FORMAT(`relsummary`.`DateIssued`,'%Y-%m') DESC LIMIT 12";
	$resultincident = mysql_query($qryincident);
	//die($qryFH);
	while ($hasilincident = mysql_fetch_array($resultincident))
	{
		$incident[$hasilincident["periode"]] = $hasilincident["Jumlah"];
	}

	$qryincidentlastyear = "SELECT Count(`relsummary`.`ACType`) AS `Jumlah`, DATE_FORMAT(`relsummary`.`DateIssued`,'%Y-%m') AS `periode` FROM `relsummary` WHERE (DATE_FORMAT(relsummary.DateIssued,'%y-%m') BETWEEN '".(substr($periode,0,4) - 1)."-01' AND '".(substr($periode,0,4) - 1)."-12') AND `relsummary`.`ACType` = '".$actype."' AND `relsummary`.`Reference` = 'SDR' GROUP BY DATE_FORMAT(`relsummary`.`DateIssued`,'%Y-%m') ORDER BY DATE_FORMAT(`relsummary`.`DateIssued`,'%Y-%m') DESC LIMIT 12";
	$resultincident = mysql_query($qryincidentlastyear);
	//die($qryFH);
	while ($hasilincident = mysql_fetch_array($resultincident))
	{
		$incidentlastyear[$hasilincident["periode"]] = $hasilincident["Jumlah"];
	}
	
	foreach ($bulan as $k => $v){
		$incident[$v] = isset($incident[$v]) ? $incident[$v] : 0;
		$incidentlastyear[$v] = isset($incidentlastyear[$v]) ? $incidentlastyear[$v] : 0;
	}
	$jumlahincident = array_sum($incident);
	$jumlahincidentlastyear = array_sum($incidentlastyear);
	//$incidentlastyear = incidentlastyear((substr($periode,0,4) - 1)."-01",(substr($periode,0,4) - 1)."-12",$actype);
	//$incident = incident($bulan[0],$bulan[11],$actype);

	$TE = connectimesysTE();
	$delay = ATAdelay($bulan[0],$bulan[11],$actype);//die(print_r($delay));
	foreach($delay as $k => $v){
		foreach($v as $key => $value){
			$ATA[$key] = $value;
		}
		$jumlah = array_sum($v);
		$techdelay[$k] = $jumlah;
	}
	//die(print_r($techdelay));
	$delaydurationmenit = delayduration($bulan[0],$bulan[11],$actype);
	foreach ($delaydurationmenit as $key => $value){
		$delayduration[$key] = (($value - ($value % 60))/60)." : ".($value % 60);
	}
	//die(print_r($delayduration));
	$cancel = querycancel($bulan[0],$bulan[11],$actype);
	
	//last year
	$delaylastyear = ATAdelay((substr($periode,0,4) - 1)."-01",(substr($periode,0,4) - 1)."-12",$actype);
	foreach($delaylastyear as $k => $v){
		foreach($v as $key => $value){
			$ATA[$key] = $value;
		}
		$jumlah = array_sum($v);
		$techdelaylastyear[$k] = $jumlah;
	}
	$delaydurationmenitlastyear = delayduration((substr($periode,0,4) - 1)."-01",(substr($periode,0,4) - 1)."-12",$actype);
	foreach ($delaydurationmenitlastyear as $key => $value){
		$delaydurationlastyear[$key] = (($value - ($value % 60))/60)." : ".($value % 60);
	}
	$cancellastyear = querycancel((substr($periode,0,4) - 1)."-01",(substr($periode,0,4) - 1)."-12",$actype);

	//die(print_r($techdelay));
	foreach ($bulan as $k => $v){
		$cancel[$v] = isset($cancel[$v]) ? $cancel[$v] : 0;
		$techdelay[$v] = isset($techdelay[$v]) ? $techdelay[$v] : 0;
		$DR[$v] = ($FC[$v] - $cancel[$v] - $techdelay[$v])/$FC[$v]*100;
		$a[] = bulan($v);
		$t[] =$DR[$v];
	}
	//$xaxisVal = substr(array_keys($DR),-2);
	//die(print_r($a));
$datay = $t;
//$datay = array(28,19,18,23,12,11,40,89,78,48,11,78);

$data2y = array(14,18,33,29,39,55,11,45,48);

// A nice graph with anti-aliasing
$graph = new Graph(900,400,"auto");
$graph->img->SetMargin(40,50,40,40);	
//$graph->SetBackgroundImage("tiger_bkg.png",BGIMG_FILLFRAME);

$graph->img->SetAntiAliasing("white");
$graph->SetScale("textlin");
$graph->SetShadow();
$graph->title->Set(" Reliability Graph ");

// Use built in font
$graph->title->SetFont(FF_FONT1,FS_BOLD);

// Slightly adjust the legend from it's default position in the
// top right corner. 
$graph->legend->Pos(0.05,0.5,"right","center");

// Create the first line

$graph->SetColor("white");
$graph->SetScale('textlin',90,100);
$graph->xaxis->SetTickLabels($a);
$p1 = new LinePlot($datay);
$p1->mark->SetType(MARK_SQUARE);
//$p1->value->Show();
$p1->mark->SetFillColor("black");
$p1->mark->SetWidth(4);
$p1->SetColor("black");
$p1->SetCenter();
$p1->SetLegend("Dispatch Reliability");
//$graph ->legend->Pos(0.5,0.9999,"right" ,"bottom");

$graph->Add($p1);

// ... and the second
$p2 = new LinePlot($data2y);
$p2->mark->SetType(MARK_STAR);
$p2->mark->SetFillColor("red");
$p2->mark->SetWidth(4);
$p2->SetColor("red");
$p2->SetCenter();
$p2->SetLegend("New tiger -99");
$graph->Add($p2);
$graph->legend->SetLayout(LEGEND_HOR);
// Output line
$graph->Stroke();
?>