<?php
  include("function.php");
  
  /*function connectlocal($database)
	{
		$server = 'localhost';
		$username = 'root';
		$password = '';
		$password2 = '';
	
		//$database = 'imesys';

		$sqlconnect = mysql_connect($server, $username, $password);
		if ($sqlconnect)
		{
			mysql_select_db($database, $sqlconnect);
			return $sqlconnect;
		}
		else
		{
			$sqlconnect = mysql_connect($server, $username, $password2);
			if ($sqlconnect)
			{
				mysql_select_db($database, $sqlconnect);
				echo "Gagal";
			}
			else
			return false;
		}
	}*/
	
	function connectrmd()
	{
	mysql_connect('192.168.40.118','develop','aeroasia');
	mysql_select_db("rmd");
	}
  
  $masterac = array("A320-200","A330","B747-400","B737-CL","B737-800-E","B737-800-M","CRJ-1000", "B777-300", "ATR72-600");
  
   $qryinsert = "INSERT INTO relsummary (Subject, Reference, RefNo, ACType, ATA, Deskripsi, Action, `Status`, InsertProblem, DateIssued, RedAlert) VALUES ";
   $insertvalue = "";
  
  for($x=0;$x<9;$x++){
  
  $actype = $masterac[$x];
  
  
  $periode = isset($_REQUEST["periode"]) ? $_REQUEST["periode"] : "";
  //$year = isset($_REQUEST["year"]) ? $_REQUEST["year"] : "";
  //$actype = isset($_REQUEST["actype"]) ? $_REQUEST["actype"] : "";
  //$page = isset($_REQUEST["page"]) ? $_REQUEST["page"] : "";

  //$actype = "A330-200";
  
  $TE = connectimesysTE();
  //$arractype = selectactype();
  //$arrperiode = selectperiode();

  //flag01

	//die(print_r(ATA("2008-01","2008-03","B737-500")));
	$tahun = substr($periode,0,4);
	$bulanalert = substr($periode,-2,2);
	if ($bulanalert <= 06){
		//$tahun = $tahun - 1;
		$timeawal = ($tahun-1)."-01";
		$timeakhir = ($tahun-1)."-12";
		$predetalerlevel = $tahun."-01";
	} else {
		$timeawal = ($tahun - 1)."-07";
		$timeakhir = $tahun."-06";
		$predetalerlevel = $tahun."-07";
	}
	
			if ($periode == "" OR $actype == ""){
			die("Please Select Aircraft Type And Periode");
			}
	$TE = connectimesysTE();
	//die($periode);
	//echo $actype."\n";
	//echo $periode."\n";
	$FH = queryFH($periode,$actype);//
	for ($k=0;$k<12;$k++){
		$yearll = substr($periode,0,4)-1;
		$blnll = substr($periode,-2,2)+1;
		$bln = $k + $blnll;$tahun = $yearll;
		if ($bln >= 13) {
			$bln = ($bln - 12);
			$tahun = ($yearll + 1);
		}
		$bulan[$k] = $tahun."-".substr("0".$bln,-2,2);
	}
	$bulan = array_reverse($bulan);
	//$bulan = array_keys($FH);
	//die(print_r($bulan));
	$FH12bulan = queryFH12($periode,$actype,12);
	$FH12 = array_sum($FH12bulan);
	$keys12bulan = array_keys($FH12bulan);
	$jmlhblnyglalu = count($keys12bulan);
	$keys12bulan[11] = $keys12bulan[$jmlhblnyglalu-1];
	//die(print_r($keys12bulan[11]));

	$FC = queryFC12rev($periode,$actype);
	$FC12 = array_sum(queryFC12rev($periode,$actype,12));//

	$ATAdelay = ATAdelay($bulan[2],$bulan[0],$actype);
	$ATAdelay12bulan = ATAdelay12($keys12bulan[11],$keys12bulan[0],$actype);//die(print_r($ATAdelay12bulan));
	$alertleveldelay = alertdelay($timeawal,$timeakhir,$actype);

	$preselectdelay = preselectalertlevel($predetalerlevel,$actype,"ALD");
	$preselectpirep = preselectalertlevel($predetalerlevel,$actype,"ALP");
	
	foreach ($ATAdelay as $k => $v){
		$newATAdelay[$k]['OT'] = 0;
		foreach ($v as $key => $value){
			if ($key < '21'){
				$newATAdelay[$k]['OT'] += $value;
			} else {
				$newATAdelay[$k][$key] = $value;
			}
		}
	}
	$newATAdelay12bulan['OT'] = 0;
	foreach ($ATAdelay12bulan as $k => $v){
		if ($k < '21'){
			$newATAdelay12bulan['OT'] += $v;
		} else {
			$newATAdelay12bulan[$k] = $v;
		}
	}
	//

	$ATA12bulan = ATA12($keys12bulan[11],$keys12bulan[0],$actype);//die(print_r($ATA12bulan));
	
	$ATApirep = ATA($bulan[2],$bulan[0],$actype);//die(print_r($ATApirep));
		
	
	$alertlevel = alert($timeawal,$timeakhir,$actype);//die(print_r($alertlevel));

	//$connectAMS = connectimesys('mcdr');
	$ATA = ATAdef();
	$ATAdesc = ATAdesc();
	//die(print_r($newATAdelay12bulan));	
	//$ATAforDelay = ATAdefdelay();
	//$ATAdescdelay = ATAdescdelay();die(print_r($ATAforDelay));
	///bagiannya pembuatan delay
	mysql_close($TE);
	
	//die(print_r($alertleveldelay));	
			//die(print_r(ATAdelay($periode2,$actype)));
	
	//flag02 - next title display Pilot Report
	  
  for ($i=0;$i<38;$i++)
  {
	  $ATApirep[$bulan[2]][$ATA[$i]] = isset($ATApirep[$bulan[2]][$ATA[$i]]) ? $ATApirep[$bulan[2]][$ATA[$i]] : 0;
	  $ATApirep[$bulan[1]][$ATA[$i]] = isset($ATApirep[$bulan[1]][$ATA[$i]]) ? $ATApirep[$bulan[1]][$ATA[$i]] : 0;
	  $ATApirep[$bulan[0]][$ATA[$i]] = isset($ATApirep[$bulan[0]][$ATA[$i]]) ? $ATApirep[$bulan[0]][$ATA[$i]] : 0;
	  $ATA12bulan[$ATA[$i]] = isset($ATA12bulan[$ATA[$i]]) ? $ATA12bulan[$ATA[$i]] : 0;

	  $alertlevel[$ATA[$i]] = isset($alertlevel[$ATA[$i]]) ? $alertlevel[$ATA[$i]] : 0;
	  $alertlevel[$ATA[$i]] = isset($preselectpirep[$ATA[$i]]) ? $preselectpirep[$ATA[$i]] : $alertlevel[$ATA[$i]];

	  $alertleveldelay[$ATA[$i]] = isset($alertleveldelay[$ATA[$i]]) ? $alertleveldelay[$ATA[$i]] : 0;
	  $alertleveldelay[$ATA[$i]] = isset($preselectdelay[$ATA[$i]]) ? $preselectdelay[$ATA[$i]] : $alertleveldelay[$ATA[$i]];
	
	//flag03 - next data display Pilot Report
	
	//RMD entry for ALP
	
	$rate[$bulan[2]][$ATA[$i]] = (isset($FH[$bulan[2]]) && ($FH[$bulan[2]] <> 0)) ? round($ATApirep[$bulan[2]][$ATA[$i]]/$FH[$bulan[2]]*1000,2) : 0;
	$rate[$bulan[1]][$ATA[$i]] = (isset($FH[$bulan[1]]) && ($FH[$bulan[1]] <> 0)) ? round($ATApirep[$bulan[1]][$ATA[$i]]/$FH[$bulan[1]]*1000,2) : 0;
	$rate[$bulan[0]][$ATA[$i]] = (isset($FH[$bulan[0]]) && ($FH[$bulan[0]] <> 0)) ? round($ATApirep[$bulan[0]][$ATA[$i]]/$FH[$bulan[0]]*1000,2) : 0;
	
	$alert_status = alertstatus($rate[$bulan[2]][$ATA[$i]],$rate[$bulan[1]][$ATA[$i]],$rate[$bulan[0]][$ATA[$i]],$alertlevel[$ATA[$i]]);
	
	if (($alert_status == "RED-1") || ($alert_status == "RED-2") || ($alert_status == "RED-3")){

		if ($alert_status == "RED-1"){
			$redalert = 1;
		} else if ($alert_status == "RED-2"){
			$redalert = 2;
		} else if ($alert_status == "RED-3"){
			$redalert = 3;
		}
		
		if ($ATApirep[$bulan[0]][$ATA[$i]] > 1){
			$tobe = 'were';
			$nominal = 'pireps';
		}else{
			$tobe = 'was';
			$nominal = 'pirep';
		}
		
		
/*	$TE = connectimesysTE();
	
	if ($actype == "B737-Classic") {
		$qryline = "`tblpirep_swift`.`ACTYPE` IN ('B737-300','B737-400','B737-500','B737-CL')";
	} else if ($actype == "B737-Classic GA") {
		$qryline = "`tblpirep_swift`.`ACTYPE` IN ('B737-300','B737-400','B737-500')";
	} else if ($actype == "B737-800-E") {
		$qryline = "`tblpirep_swift`.`REG` Like 'GE%'";
	} else if ($actype == "B737-800-M") {
		$qryline = "(`tblpirep_swift`.`REG` Like 'GM%' or `tblpirep_swift`.`REG` Like 'GF%' or `tblpirep_swift`.`REG` Like 'GN%')";
	} else {
		$qryline = "`tblpirep_swift`.`ACTYPE` IN ('$actype')";
	}
	$qryFH = "SELECT `tblpirep_swift`.`ID_new` AS `ID`,`tblpirep_swift`.`DATE` AS `date`, `tblpirep_swift`.`REG` AS `reg`, `tblpirep_swift`.`STADEP` AS `Sta`, `tblpirep_swift`.`ATA` AS `ata`, `tblpirep_swift`.`SUBATA` AS `subata`, `tblpirep_swift`.`PROBLEM` AS `problem`, `tblpirep_swift`.`ACTION` AS `action` FROM `tblpirep_swift` WHERE `tblpirep_swift`.`ATA` = '".$ATA[$i]."' AND ".$qryline." AND `tblpirep_swift`.`Month` = '".$periode."' AND (`tblpirep_swift`.`PirepMarep` <> 'Marep' OR `tblpirep_swift`.`PirepMarep` IS NULL) ORDER BY `tblpirep_swift`.`REG`, `tblpirep_swift`.`DATE`  ASC";
	//print_r($qryFH);
	$resultFH = mysql_query($qryFH);
		
	$i = 0;	
	while ($hasilFH = mysql_fetch_array($resultFH))
	{
		$dateP[] = $hasilFH["date"];
		$regP[] = $hasilFH["reg"];
		$ataP[] = $hasilFH["ata"];
		$subataP[] = $hasilFH["subata"];
		$problemP[] = $hasilFH["problem"];
		$actionP[] = $hasilFH["action"];
		//$subatareg[$hasilFH["reg"]] = $hasilFH["subata"];
		$i = $i+1;
	}
	mysql_free_result($resultFH);*/
	//mysql_close($TE);
	
	//$arrjmlhevent = array_count_values($dateP);
	
	//$local = connectlocal('test');
	//echo $dateP;
	//die($dateP);
	
	$sumdeskripsi = "";
	$sumaction = "(X)";
	
/*	$j = 1;
	while($j < ($i+1)){
	//foreach ($arrjmlhevent as $k => $v) {
		$sumdeskripsi = $sumdeskripsi."\n".$j." On ".$dateP[$j-1]." PK-".$regP[$j-1]." experienced ".$problemP[$j-1];
		$sumaction = $sumaction."\n".$j." ".$actionP[$j-1];
		$j = $j+1;
	}*/
	//die($sumdeskripsi);
	//die($sumaction);
		
		if($insertvalue <> ""){
			$qryinsert .= ",";
		}
		
		$qryinsert .= "('$ATAdesc[$i]','ALP','ALP".substr($tahun,2,2).substr($bulan[0],5,2)."',if('$actype'='B737-Classic GA','B737-Classic','$actype'),'$ATA[$i]','There ".$tobe." ".$ATApirep[$bulan[0]][$ATA[$i]]." ".$nominal." during ".bulan($bulan[0])." ".$tahun.". ".$sumdeskripsi."','$sumaction',1,'aryan/','".date('Y-m-d')."','$redalert')";
		
		$insertvalue = "ts";
		
		//$xml .= "<queryinsert>".$qryinsert."</queryinsert>\r\n";
		
		//echo $qryinsert;
		//die($qryinsert);
		//$insertrelsummary = mysql_query($qryinsert);
	
		}
	}
		
	//flag04 - next title display Delay
}	
	
	echo $qryinsert;
	$rmd = connectrmd();
	$insertrelsummary = mysql_query($qryinsert);
	
?>