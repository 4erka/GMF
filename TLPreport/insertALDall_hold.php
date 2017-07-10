<?php
  include("function.php");
  
	function connectrmd()
	{
	mysql_connect('192.168.40.118','develop','aeroasia');
	mysql_select_db("rmd");
	}
  
  $masterac = array("A320-200","A330-200","A330-300","B747-400","B737-Classic GA","B737-800-E","B737-800-M");
  
   $qryinsert = "INSERT INTO relsummary (Subject, Reference, RefNo, ACType, ATA, Deskripsi, Action, `Status`, InsertProblem, DateIssued, RedAlert) VALUES ";
   $insertvalue = "";
  
  for($x=0;$x<7;$x++){
  
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
	//$TE = connectimesysTE();
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
	  
  for ($i=0;$i<35;$i++)
  {
	  $newATAdelay[$bulan[2]][$ATA[$i]] = isset($newATAdelay[$bulan[2]][$ATA[$i]]) ? $newATAdelay[$bulan[2]][$ATA[$i]] : 0;
	  $newATAdelay[$bulan[1]][$ATA[$i]] = isset($newATAdelay[$bulan[1]][$ATA[$i]]) ? $newATAdelay[$bulan[1]][$ATA[$i]] : 0;
	  $newATAdelay[$bulan[0]][$ATA[$i]] = isset($newATAdelay[$bulan[0]][$ATA[$i]]) ? $newATAdelay[$bulan[0]][$ATA[$i]] : 0;
	  $newATAdelay12bulan[$ATA[$i]] = isset($newATAdelay12bulan[$ATA[$i]]) ? $newATAdelay12bulan[$ATA[$i]] : 0;

	//flag05 - next data display Delay
	 
	  $ratedel[$bulan[2]][$ATA[$i]] = (isset($FH[$bulan[2]]) && ($FH[$bulan[2]] <> 0)) ? round($newATAdelay[$bulan[2]][$ATA[$i]]/$FC[$bulan[2]]*100,2) : 0;
	  $ratedel[$bulan[1]][$ATA[$i]] = (isset($FH[$bulan[1]]) && ($FH[$bulan[1]] <> 0)) ? round($newATAdelay[$bulan[1]][$ATA[$i]]/$FC[$bulan[1]]*100,2) : 0;
	  $ratedel[$bulan[0]][$ATA[$i]] = (isset($FH[$bulan[0]]) && ($FH[$bulan[0]] <> 0)) ? round($newATAdelay[$bulan[0]][$ATA[$i]]/$FC[$bulan[0]]*100,2) : 0;
	 
	 $alert_status = alertstatus($ratedel[$bulan[2]][$ATA[$i]],$ratedel[$bulan[1]][$ATA[$i]],$ratedel[$bulan[0]][$ATA[$i]],$alertleveldelay[$ATA[$i]]);
	 
	 if (($alert_status == "RED-1") || ($alert_status == "RED-2") || ($alert_status == "RED-3")){

		if ($alert_status == "RED-1"){
			$redalert = 1;
		} else if ($alert_status == "RED-2"){
			$redalert = 2;
		} else if ($alert_status == "RED-3"){
			$redalert = 3;
		}
		
		if ($newATAdelay[$bulan[0]][$ATA[$i]] > 1){
			$tobe = 'were';
			$nominal = 'delays';
		}else{
			$tobe = 'was';
			$nominal = 'delay';
		}
	
	/*
    $TE = connectimesysTE();
	
	if ($actype == "B737-Classic") {
		$qryline = "`mcdrnew`.`Actype` IN ('B737-300','B737-400','B737-500','B737-CL')";
	} else if ($actype == "B737-Classic GA") {
		$qryline = "`mcdrnew`.`Actype` IN ('B737-300','B737-400','B737-500')";
	} else if ($actype == "B737-800-E") {
		$qryline = "`mcdrnew`.`Reg` Like 'PK-GE%'";
	} else if ($actype == "B737-800-M") {
		$qryline = "(`mcdrnew`.`Reg` Like 'PK-GM%' or `mcdrnew`.`Reg` Like 'PK-GF%' or `mcdrnew`.`Reg` Like 'PK-GN%')";
	} else {
		$qryline = "`mcdrnew`.`Actype` IN ('$actype')";
	}
	$qryFH = "SELECT `mcdrnew`.`ID` AS `ID`,`mcdrnew`.`DateEvent` AS `date`, `mcdrnew`.`Reg` AS `reg`, `mcdrnew`.`DepSta` AS `Sta`, `mcdrnew`.`ATAtdm` AS `ata`, `mcdrnew`.`SubATAtdm` AS `subata`, `mcdrnew`.`Problem` AS `problem`, `mcdrnew`.`Rectification` AS `action` FROM `mcdrnew` WHERE `mcdrnew`.`DCP` = 'D' AND `mcdrnew`.`ATAtdm` = '".$ATA[$i]."' AND DATE_FORMAT(mcdrnew.DateEvent,'%Y-%m') = '".$periode."' AND ".$qryline." ORDER BY `mcdrnew`.`Reg`, `mcdrnew`.`DateEvent` ASC";
	$resultFH = mysql_query($qryFH);
	
	$i = 0;	
	while ($hasilFH = mysql_fetch_array($resultFH))
	{
		$dateD[] = $hasilFH["date"];
		$regD[] = $hasilFH["reg"];
		$ataD[] = $hasilFH["ata"];
		$subataD[] = $hasilFH["subata"];
		$problemD[] = $hasilFH["problem"];
		$actionD[] = $hasilFH["action"];
		//$subatareg[$hasilFH["reg"]] = $hasilFH["subata"];
		$i = $i+1;
	}
	mysql_free_result($resultFH);
	mysql_close($TE);*/
		
	$sumdeskripsi = "";
	$sumaction = "(X)";
	/*
	$j = 1;
	while($j < ($i+1)){
	//foreach ($arrjmlhevent as $k => $v) {
		$sumdeskripsi = $sumdeskripsi."\n".$j." On ".$dateD[$j-1]." ".$regD[$j-1]." ".$problemD[$j-1];
		$sumaction = $sumaction."\n".$j." ".$actionD[$j-1];
		$j = $j+1;
	}
	//die($sumdeskripsi);
	//die($sumaction);
	*/

	
		if($insertvalue <> ""){
			$qryinsert .= ",";
		}
		$qryinsert .= "('$ATAdesc[$i]','ALD','ALD".substr($tahun,2,2).substr($bulan[0],5,2)."','$actype','$ATA[$i]','There ".$tobe." ".$newATAdelay[$bulan[0]][$ATA[$i]]." ".$nominal." during ".bulan($bulan[0])." ".$tahun.". ".$sumdeskripsi."','$sumaction',1,'aryan/','".date('Y-m-d')."','$redalert')";
		
		$insertvalue = "ts";
				
	 }
	 	 
	 }
		
}	
	
	echo $qryinsert;
	//$insertrelsummary = mysql_query($qryinsert);
	
?>