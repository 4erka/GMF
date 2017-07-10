<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
 <HEAD>
  <TITLE> New Document </TITLE>
  <META NAME="Generator" CONTENT="EditPlus">
  <META NAME="Author" CONTENT="">
  <META NAME="Keywords" CONTENT="">
  <META NAME="Description" CONTENT="">
 </HEAD>

 <BODY>
  
<?php
include("function.php");
$TE = connectimesysTE();
$qryFH = "SELECT `mcdrnew`.`ID` AS `ID`,`mcdrnew`.`DateEvent` AS `date`, `mcdrnew`.`Reg` AS `reg`, `mcdrnew`.`DepSta` AS `Sta`, `mcdrnew`.`ATAtdm` AS `ata`, `mcdrnew`.`SubATAtdm` AS `subata`, `mcdrnew`.`Problem` AS `problem`, `mcdrnew`.`Rectification` AS `action` FROM `mcdrnew` WHERE `mcdrnew`.`DCP` = 'D' AND `mcdrnew`.`ATAtdm` = '27' AND DATE_FORMAT(mcdrnew.DateEvent,'%Y-%m') = '2008-01' AND `mcdrnew`.`ACtype` = 'B737-400'";
	$resultFH = mysql_query($qryFH);
	while ($hasilFH = mysql_fetch_array($resultFH))
	{
		$date[] = $hasilFH["date"];
		$dateid[$hasilFH["ID"]] = array('date' => $hasilFH["date"],'reg' => $hasilFH["reg"],'sta' => $hasilFH["Sta"], 'ata' => $hasilFH["ata"],'subata' => $hasilFH["subata"],'problem' => $hasilFH["problem"],'action' => $hasilFH["action"]);
		//$sta[] = $hasilFH["Sta"];
		$staid[$hasilFH["ID"]] = $hasilFH["Sta"];
		//$reg[] = $hasilFH["reg"];
		$regid[$hasilFH["ID"]] = $hasilFH["reg"];
		//$ata[] = $hasilFH["ata"];
		$ataid[$hasilFH["ID"]] = $hasilFH["ata"];
		//$subata[] = $hasilFH["subata"];
		$subataid[$hasilFH["ID"]] = $hasilFH["subata"];
		//$problem[] = $hasilFH["problem"];
		$problemid[$hasilFH["ID"]] = $hasilFH["problem"];
		//$action[] = $hasilFH["action"];
		$actionid[$hasilFH["ID"]] = $hasilFH["action"];
		//$subatareg[$hasilFH["reg"]] = $hasilFH["subata"];
	}
$regnih = array_count_values($regid);
foreach ($dateid as $key => $value){
	$date[$key] = $value['date'];
	$sta[$key] = $value['sta'];
	$reg[$key] = $value['reg'];
	$subata[$key] = $value['subata'];
	$problem[$key] = $value['problem'];
	$action[$key] = $value['action'];
	$ata[$key] = $value['ata'];
	$k[$key] = $key;
}
//$final = array_multisort($reg, SORT_ASC, $subata, SORT_DESC,$date, SORT_ASC,$sta,SORT_ASC,$problem,SORT_ASC,$action,SORT_ASC, $dateid);
$final = array_multisort($reg, SORT_ASC, $k,SORT_ASC, $dateid);

print_r($reg);
print_r($k);
?> 
 </BODY>
</HTML>
