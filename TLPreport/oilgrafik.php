<?
  include ("src/jpgraph.php");
  include ("src/jpgraph_line.php");
  include("function.php");
  $startdate = isset($_REQUEST["startdate"]) ? $_REQUEST["startdate"] : "";
  $finishdate = isset($_REQUEST["finishdate"]) ? $_REQUEST["finishdate"] : "";
  $acreg = isset($_REQUEST["acreg"]) ? $_REQUEST["acreg"] : "";
  $timebasis = isset($_REQUEST["timebasis"]) ? $_REQUEST["timebasis"] : "";

  if ($timebasis == "Daily"){
	  $dateformat = "%d-%m";
  } elseif ($timebasis == "Weekly"){
	  $dateformat = "%u-%y";
  } else {
	  $dateformat = "%m-%y";
  }
	//die($dateformat);
  $connectAMS = connectimesys('imesys');
	
	$qryoil = "SELECT `tbl_aml`.`acReg`, DATE_FORMAT(`tbl_aml`.`dateAML`,'".$dateformat."') AS `periode`, Sum(`tbl_aml_depdata`.`oilRef1`) AS `oil1`, Sum(`tbl_aml_depdata`.`oilRef2`) AS `oil2` FROM `tbl_aml` Inner Join `tbl_aml_depdata` ON `tbl_aml`.`idxAML` = `tbl_aml_depdata`.`idxAML` WHERE `tbl_aml`.`acReg` = '".$acreg."' AND `tbl_aml`.`dateAML` BETWEEN '".$startdate."' AND '".$finishdate."' GROUP BY `tbl_aml`.`acReg`, DATE_FORMAT(`tbl_aml`.`dateAML`,'".$dateformat."')";
	$resultoil = mysql_query($qryoil);
	//die($qryoil);
	while ($hasiloil = mysql_fetch_array($resultoil))
	{
		$oil1[$hasiloil["periode"]] = $hasiloil["oil1"];
		$oil2[$hasiloil["periode"]] = $hasiloil["oil2"];
		//$oil3[$hasiloil["periode"]] = $hasiloil["oil3"];
		//$oil4[$hasiloil["periode"]] = $hasiloil["oil4"];
	}
	
	$qryFH = "SELECT SEC_TO_TIME(SUM(TIME_TO_SEC(aircraftflightlog.airTime))) AS `FH`, `aircraftflightlog`.`acReg`, DATE_FORMAT(`aircraftflightlog`.`airborneDate`,'".$dateformat."') AS `periode` FROM `aircraftflightlog` WHERE `aircraftflightlog`.`acReg` = '".$acreg."' AND (`aircraftflightlog`.`airborneDate` BETWEEN '".$startdate."' AND '".$finishdate."') AND `aircraftflightlog`.`voidStatus` = 'false' GROUP BY `aircraftflightlog`.`acReg`, DATE_FORMAT(`aircraftflightlog`.`airborneDate`,'".$dateformat."')";
	$resultFH = mysql_query($qryFH);
	//die($qryFH);
	while ($hasilFH = mysql_fetch_array($resultFH))
	{
		$hour[$hasilFH["periode"]] = $hasilFH["FH"]/1;
	}
	//die(print_r($oil1));
	foreach ($hour as $key => $value){
		$oil1[$key] = isset($oil1[$key]) ? $oil1[$key] : 0;
		$oil2[$key] = isset($oil2[$key]) ? $oil2[$key] : 0;
		//$oil3[$key] = isset($oil3[$key]) ? $oil3[$key] : 0;
		//$oil4[$key] = isset($oil4[$key]) ? $oil4[$key] : 0;
		//$tes[$key] = $value;
		$rate1[] = ($value <> 0) ? (($oil1[$key])/$value) : 0;
		$rate2[] = ($value <> 0) ? (($oil2[$key])/$value) : 0;
		//$rate3[] = ($oil3[$key]/1)/$value * 1000;
		//$rate4[] = ($oil4[$key]/1)/$value * 1000;
		$xaxis[] = $key;
	}
	//print_r($hour);
//die(print_r($rate1));
	//$xaxisVal = substr(array_keys($DR),-2);
	//die(print_r($a));
$data1 = $rate1;
$data2 = $rate2;
//$datay = array(28,19,18,23,12,11,40,89,78,48,11,78);
//$data2y = array(14,18,33,29,39,55,11,45,48);

// A nice graph with anti-aliasing
$graph = new Graph(900,400,"auto");
$graph->img->SetMargin(40,50,40,40);	
//$graph->SetBackgroundImage("tiger_bkg.png",BGIMG_FILLFRAME);

$graph->img->SetAntiAliasing("white");
$graph->SetScale("textlin");
$graph->SetShadow();
$graph->title->Set(" Oil Consumption ");

// Use built in font
$graph->title->SetFont(FF_FONT1,FS_BOLD);

// Slightly adjust the legend from it's default position in the
// top right corner. 
$graph->legend->Pos(0.05,0.1,"right","bottom");

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
$p1->SetLegend("Engine 1");
//$graph ->legend->Pos(0.5,0.9999,"right" ,"bottom");

$graph->Add($p1);

// ... and the second
$p2 = new LinePlot($data2);
$p2->mark->SetType(MARK_STAR);
$p2->mark->SetFillColor("red");
$p2->mark->SetWidth(4);
$p2->SetColor("red");
$p2->SetCenter();
$p2->SetLegend("Engine 2");
$graph->Add($p2);
//$graph->legend->SetLayout(LEGEND_HOR);
// Output line
$graph->Stroke();
?>