<?
//define('REPORT_TYPE','pirep'); 

include("function.php");

$ATA = $_REQUEST['ATA'];
$periode = $_REQUEST['periode'];
$kriteria = $_REQUEST['kriteria'];
$type = $_REQUEST['type'];

$TE = connectimesysTE();

if ($kriteria == "pirep")
{
	$qryFH = "SELECT `tblpirep`.`DATE` AS `date`, `tblpirep`.`REG` AS `reg`, `tblpirep`.`STADEP` AS `Sta`, `tblpirep`.`ATA` AS `ata`, `tblpirep`.`SUBATA` AS `subata`, `tblpirep`.`PROBLEM` AS `problem`, `tblpirep`.`ACTION` AS `action` FROM `tblpirep` WHERE `tblpirep`.`ATA` = '".$ATA."' AND `tblpirep`.`ACTYPE` = '".$type."' AND DATE_FORMAT(`tblpirep`.`DATE`,'%Y-%m') = '".$periode."'";
	$resultFH = mysql_query($qryFH);
	//die($qryFH);
} else {
	$qryFH = "SELECT `mcdrnew`.`DateEvent` AS `date`, `mcdrnew`.`Reg` AS `reg`, `mcdrnew`.`DepSta` AS `Sta`, `mcdrnew`.`ATAtdm` AS `ata`, `mcdrnew`.`SubATAtdm` AS `subata`, `mcdrnew`.`Problem` AS `problem`, `mcdrnew`.`Rectification` AS `action` FROM `mcdrnew` WHERE `mcdrnew`.`DCP` = 'D' AND `mcdrnew`.`ATAtdm` = '".$ATA."' AND DATE_FORMAT(mcdrnew.DateEvent,'%Y-%m') = '".$periode."' AND `mcdrnew`.`ACtype` = '".$type."'";
	$resultFH = mysql_query($qryFH);
	//die($qryFH);
}
	//die($qryFH);
	while ($hasilFH = mysql_fetch_array($resultFH))
	{
		$date[] = $hasilFH["date"];
		$sta[] = $hasilFH["Sta"];
		$reg[] = $hasilFH["reg"];
		$ata[] = $hasilFH["ata"];
		$subata[] = $hasilFH["subata"];
		$problem[] = $hasilFH["problem"];
		$action[] = $hasilFH["action"];
		//$subatareg[$hasilFH["reg"]] = $hasilFH["subata"];
	}
	//die(print_r($date));
	$regnew = array_count_values($reg);
	$mulai = 0;
	foreach ($regnew as $key => $value)
	{
		$arrchunkreg[$key] = array_slice($subata,$mulai,$value);
		$arrreg[$key] = array_count_values($arrchunkreg[$key]);
	}
	$subatanew = array_count_values($subata);
	die(print_r($arrreg));
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
<meta name="generator" content="HTML Tidy for Linux/x86 (vers 1st November 2003), see www.w3.org">
<title>PILOT REPORT DETAIL</title>
<script language="javascript">
// distribution graph
var kriteria;

function dis_graph(filter, periode,from, to, ata,kriteria,SUB_ATA) {
	if(filter != "" && from == "" && to == "") { 	
		window.open("graph_distribution.php?filter="+filter+"&periode="+periode+"&ata="+ata+"&kriteria="+escape(kriteria)+"&SUB_ATA="+escape(SUB_ATA),"sub","status,resizable=0,scrollbars,width=660,height=360,left=50,top=100");
	}
	else {
		window.open("graph_distribution.php?filter="+filter+"&periode="+periode+"&from="+from+"&to="+to+"&ata="+ata+"&kriteria="+escape(kriteria)+"&SUB_ATA="+escape(SUB_ATA),"sub","status,resizable=0,scrollbars,width=660,height=360,left=50,top=100");
	}
}

// actype graph
function actype_graph(filter, periode,from, to, ata,kriteria,SUB_ATA) {
	if(filter != '' && from == '' && to == '') {
		window.open("graph_actype.php?filter="+filter+"&periode="+periode+"&ata="+ata+"&kriteria="+escape(kriteria)+"&SUB_ATA="+escape(SUB_ATA),"sub","status,resizable,scrollbars,width=660,height=360,left=50,top=100");
	}
	else {
		window.open("graph_actype.php?filter="+filter+"&periode="+periode+"&from="+from+"&to="+to+"&ata="+ata+"&kriteria="+escape(kriteria)+"&SUB_ATA="+escape(SUB_ATA),"sub","status,resizable,scrollbars,width=660,height=360,left=50,top=100");
	}
}

// acreg graph
function acreg_graph(filter, periode,from, to, ata,kriteria,SUB_ATA) {
	if(filter != "" && from == "" && to == "") {
		window.open("graph_acreg.php?filter="+filter+"&periode="+periode+"&ata="+ata+"&kriteria="+escape(kriteria)+"&SUB_ATA="+escape(SUB_ATA),"sub","status,resizable,scrollbars,width=660,height=360,left=50,top=100");
	}
	else {
		window.open("graph_acreg.php?filter="+filter+"&periode="+periode+"&from="+from+"&to="+to+"&ata="+ata+"&kriteria="+escape(kriteria)+"&SUB_ATA="+escape(SUB_ATA),"sub","status,resizable,scrollbars,width=660,height=360,left=50,top=100");
	}
}

function excel(filter, periode,from, to, ata,kriteria,SUB_ATA) {
	if(filter != "" && from == "" && to == "") {
		window.open("pilot_report_detail_excel.php?filter="+escape(filter)+"&periode="+periode+"&ata="+ata+"&kriteria="+escape(kriteria)+"&SUB_ATA="+escape(SUB_ATA),"sub","status,resizable,scrollbars,width=660,height=360,left=50,top=100");
	}
	else {
		window.open("pilot_report_detail_excel.php?filter="+escape(filter)+"&periode="+periode+"&from="+from+"&to="+to+"&ata="+ata+"&kriteria="+escape(kriteria)+"&SUB_ATA="+escape(SUB_ATA),"sub","status,resizable,scrollbars,width=660,height=360,left=50,top=100");
	}
}

// compare graph
function compare_graph(filter, periode,from, to, ata,kriteria,SUB_ATA) {
	if(filter != "" && from == "" && to == "") {
		window.open("graph_compare.php?filter="+filter+"&periode="+periode+"&ata="+ata+"&kriteria="+escape(kriteria)+"&SUB_ATA="+escape(SUB_ATA),"sub","status,resizable,scrollbars,width=1000,height=450,left=50,top=100");
	}
	else {
		window.open("graph_compare.php?filter="+filter+"&periode="+periode+"&from="+from+"&to="+to+"&ata="+ata+"&kriteria="+escape(kriteria)+"&SUB_ATA="+escape(SUB_ATA),"sub","status,resizable,scrollbars,width=1000,height=450,left=50,top=100");
	}
}
</script>

</head>
<body style="padding:10px">
<p align="center"><strong>Detail Problem (ATA 26) </strong></p>
<div align="center">
  <table width="300" border="1" cellspacing="0" cellpadding="0">
  
    <tr>
      <th scope="col">&nbsp;</th>
		<? foreach ($subatanew as $k => $v){?>
      <th scope="col"><?= $k?></th>
	  <? } ?>
    </tr>
	<? foreach ($regnew as $key => $value){  ?>
    <tr>
      <th scope="row"><?= $key?></th>
	  <? foreach ($subatanew as $k => $v){ 
		  $arrreg[$key][$k] = isset($arrreg[$key][$k]) ? $arrreg[$key][$k] : 0;?>
      <td><div align="center"><?= $arrreg[$key][$k]?></div></td>
	  <? } ?>
    </tr>
	<? } ?>
  </table>
  <p align="left">Order By &nbsp;&nbsp;&nbsp;<select name="select">
    </select>
  </p>
  <p align="left"><strong>Detail Problem</strong></p>
  <table width="700" border="1" cellspacing="0" cellpadding="0">
    <tr>
      <th scope="col">Date</th>
      <th scope="col">Sta</th>
      <th scope="col">Reg</th>
      <th scope="col">Problem</th>
      <th scope="col">Action</th>
      <th scope="col"><p>Faultcode</p>      </th>
    </tr>
    <tr>
      <td>23 Apr 2008 </td>
      <td>JKT</td>
      <td>PK - GWD </td>
      <td>prolmenmnya ghgj </td>
      <td>hkh hjhjkh kjl hjk </td>
      <td>452a</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
  <p align="left">&nbsp; </p>
</div>
</body>
</html>