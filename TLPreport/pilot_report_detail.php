<?
//define('REPORT_TYPE','pirep'); 

include("function.php");

/*$kriteria = isset($_GET['kriteria']) ? move_slash($_GET['kriteria']) : "";
$groupby = $kriteria!="" ? ", f_source" : "";
$subata = isset($_GET['SUB_ATA']) ? $_GET['SUB_ATA'] : "";

$sql = "SELECT * FROM v_pilot_report WHERE ".FILTER_TYPE."='{$_GET['filter']}'";

if (isset($_GET['periode']) && !isset($_GET['from']) && !isset($_GET['to'])) {
	$pr = $_GET['periode'];
	$sql .= " AND f_periode= '{$pr}'";
	$titleperiode = get_text_periode($_GET['periode']);
}

if (isset($_GET['from']) && isset($_GET['to'])) {
	$from = $_GET['from'];
	$to = $_GET['to'];
	$sql .= " AND f_periode Between '$from' and '$to'";
	$titleperiode = get_text_periode($_GET['from'])." - ".get_text_periode($_GET['to']);
}

if(isset($_GET['SUB_ATA']) && isset($_GET['ATA']))
{ 	
	$get   = $_GET['SUB_ATA'];
	$mode  = "sub_ata";
	$sql  .= "  AND f_subata ='{$get}' AND f_ata ='{$_GET['ATA']}'";
	$title = $_GET["title"];
}
else {
	$get  = $_GET['ATA'];
	$mode = "ata";
	$sql .= "  AND f_ata ='{$get}'";
}
//tambahan buat pilot and teknik
	$sql .= $kriteria." order by f_date";
//echo($sql);
//print_r($_GET);
//die($sql);
//echo($sql);
$arr = $db->getAll($sql);
//var_dump($arr);
//print_r($arr);*/
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
<link id='main_link' href='yahoo.css' type='text/css' rel='stylesheet'>
<style type="text/css">

body{
margin: 0;
padding: 0;
border: 0;
overflow: hidden;
height: 100%; 
max-height: 100%; 
}

#framecontent{
position: absolute;  
width: 100%; 
height: 30px; /*Height of frame div*/
overflow: auto; /*Disable scrollbars. Set to "scroll" to enable*/
background-color: navy;
color: #000000;
margin:0 0 0 0px; 
background-color:#FFFFCC; 
padding:5px;
border-width:1px; 
border-style: solid;
border-color:#FFFFFF #FFFFCC #E7E7E7 #FFFFCC;
}


#maincontent{
position: fixed; 
top: 100px; /*Set top value to HeightOfFrameDiv*/
left: 0;
right: 0;
bottom: 0;
overflow: auto; 
background: #fff;
}

.innertube{
margin: 30px 0 0 10px; /*Margins for inner DIV inside each DIV (to provide padding)*/
}

.innertubeframe{
margin: 0px; /*Margins for inner DIV inside each DIV (to provide padding)*/
}


* html body{ /*IE6 hack*/
padding: 30px 0 0 0; /*Set value to (HeightOfFrameDiv 0 0 0)*/
}

* html #maincontent{ /*IE6 hack*/
height: 100%; 
width: 100%; 
}

</style>
</head>
<body style="padding:10px">
  <div id="framecontent" style="width:100%">
    <p>testes
    klajdad
    ;lak;dla
    adk;</p>
    <p>aldks
      l;lakd;a
      klda jlakjdla </p>
    <div class="innertubeframe">
    <b>blabalaba :</b>
    <?=$_GET['filter']?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <b>
	<?=str_replace("_"," ",strtoupper($mode))?> :</b>
    <?=$get.' - ';
    if(isset($_GET['SUB_ATA']) && isset($_GET['ATA']))  
    	echo $title;
    else 
	    //echo get_ATA($get,$mode);
     ?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <b>Periode :</b> <?=$titleperiode?>
	<?php
	$kriteria = addslashes($kriteria);
	
	$sql = urlencode($sql);
	if (isset($_GET['periode']) && !isset($_GET['from']) && !isset($_GET['to'])) {
		
		echo "&nbsp;&nbsp;<input type=\"button\" name=\"distri\" id=\"distri\" value=\"Distribution\" onClick=\"javascript:dis_graph('{$_GET['filter']}','{$_GET['periode']}','','','{$_GET['ATA']}','$kriteria','$subata');\">&nbsp;&nbsp;
	<input type=\"button\" name=\"actype\" id=\"actype\" value=\"A/C Type\" onClick=\"Javascript:actype_graph('{$_GET['filter']}','{$_GET['periode']}','','','{$_GET['ATA']}','$kriteria','$subata');\">&nbsp;&nbsp;
	<input type=\"button\" name=\"acreg\" id=\"acreg\" value=\"A/C Reg\" onClick=\"Javascript:acreg_graph('{$_GET['filter']}','{$_GET['periode']}','','','{$_GET['ATA']}','$kriteria','$subata');\">&nbsp;&nbsp;
	<input type=\"button\" name=\"compare\" id=\"compare\" value=\"Compare\" onClick=\"Javascript:compare_graph('{$_GET['filter']}','{$_GET['periode']}','','','{$_GET['ATA']}','$kriteria','$subata');\">&nbsp;&nbsp;
	<input type=\"button\" name=\"excel\" id=\"excel\" value=\"Excel\" onClick=\"Javascript:excel('{$sql}','{$_GET['periode']}','','','{$_GET['ATA']}','$kriteria','$subata');\">&nbsp;&nbsp;
	";
	}

	if (isset($_GET['from']) && isset($_GET['to'])) {
		echo "&nbsp;&nbsp;<input type=\"button\" name=\"distri\" id=\"distri\" value=\"Distribution\" onClick=\"Javascript:dis_graph('{$_GET['filter']}','{$_GET['periode']}','{$_GET['from']}','{$_GET['to']}','{$_GET['ATA']}','$kriteria','$subata}');\">&nbsp;&nbsp;
	<input type=\"button\" name=\"actype\" id=\"actype\" value=\"A/C Type\" onClick=\"Javascript:actype_graph('{$_GET['filter']}','{$_GET['periode']}','{$_GET['from']}','{$_GET['to']}','{$_GET['ATA']}','$kriteria','$subata');\">&nbsp;&nbsp;
	<input type=\"button\" name=\"acreg\" id=\"acreg\" value=\"A/C Reg\" onClick=\"Javascript:acreg_graph('{$_GET['filter']}','{$_GET['periode']}','{$_GET['from']}','{$_GET['to']}','{$_GET['ATA']}','$kriteria','$subata');\">&nbsp;&nbsp;
	<input type=\"button\" name=\"compare\" id=\"compare\" value=\"Compare\" onClick=\"Javascript:compare_graph('{$_GET['filter']}','{$_GET['periode']}','{$_GET['from']}','{$_GET['to']}','{$_GET['ATA']}','$kriteria','$subata');\">&nbsp;&nbsp;
	<input type=\"button\" name=\"excel\" id=\"excel\" value=\"Excel\" onClick=\"Javascript:excel('{$sql}','{$_GET['periode']}','{$_GET['from']}','{$_GET['to']}','{$_GET['ATA']}','$kriteria','$subata');\">&nbsp;&nbsp;
	";
	}


	
	?>
	</div>
</div>
   <br>
<div id="maincontent">
<div class="innertube">
  <table>
  <?php 
/* if (FILTER_TYPE=="f_actype")
	{
	$sqlgraph = "SELECT distinct (f_acreg) as acreg, count (f_acreg) as jumlah FROM v_pilot_report WHERE f_actype='{$_GET['filter']}' AND f_periode='{$_GET['periode']}' AND f_ata ='{$_GET['ATA']}' group by f_acreg";
	$arr_graph = $db->getAll($sqlgraph);
	//$pesawat = $arr_graph['acreg'];
	foreach($arr_graph as $kg=>$vg) 
	{*/
		?><tr>
		<td><?//= $vg['acreg']?></td>
		<td><?//= $vg['jumlah']?></td>
		</tr
		
		><?	

	//}
//}
  ?>
  </table>
  <?// foreach ($arr as $k=>$data) { ?>


  <table width="23%"  border="1" cellspacing="0" cellpadding="0">
    <tr>
      <th width="36%" scope="col">&nbsp;</th>
      <th width="14%" scope="col">2A</th>
      <th width="50%" scope="col">2B</th>
    </tr>
    <tr>
      <th scope="row">PK-GGA</th>
      <td><div align="center">23</div></td>
      <td><div align="center">38</div></td>
    </tr>
    <tr>
      <th scope="row">PK-GGP</th>
      <td><div align="center">10</div></td>
      <td><div align="center">20</div></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <table class="tbl_note" cellspacing="0" width="100%">
    <tr>
      <td class="head" width="150px">No</td>

      <td><?=($k+1)?><?// print_r($data);?></td>
    </tr>

    <tr>
      <td class="head">Page No</td>

      <td><?=isset($data['f_pageno'])?$data['f_pageno'] : "" ?></td>
    </tr>

    <tr>
      <td class="head">Aircraft Type</td>

      <td><?=isset($data['f_actype']) ? $data['f_actype'] : ""?></td>
    </tr>

    <tr>
      <td class="head">Aircraft Registration</td>

      <td><?=isset($data['f_acreg']) ? $data['f_acreg'] : ""?></td>
    </tr>

    <tr>
      <td class="head">ATA</td>

      <td><?=isset($data['f_ata']) ? $data['f_ata'] : ""?></td>
     </tr>
     
    <? if($mode=='sub_ata') {?>
    <tr>
      <td class="head">SUB ATA</td>

      <td><?=isset($data['f_subata']) ? $data['f_subata'] : ""?></td>
    </tr>
    <? } ?>
    

    <tr>
      <td class="head">Flight No</td>

      <td><?=isset($data['f_flightno']) ? $data['f_flightno'] : ""?></td>
    </tr>

    <tr>
      <td class="head">Date</td>

      <td><?=isset($data['f_date']) ? date(FORMAT_DATE,strtotime($data['f_date'])) : ""?></td>
    </tr>

    <tr>
      <td class="head">Station</td>

      <td><?=isset($data['f_station']) ? $data['f_station'] : ""?></td>
    </tr>

    <tr>
      <td class="head">Problem</td>

      <td><?=isset($data['f_problem']) ? $data['f_problem'] : ""?></td>
    </tr>

    <tr>
      <td class="head">Action</td>

      <td><?=isset($data['f_action']) ? $data['f_action'] : ""?></td>
    </tr>

    <tr>
      <td class="head">Entry Date</td>

      <td><?=empty($data['f_entrydate']) ?  "-" :  date(FORMAT_DATE ,strtotime($data['f_entrydate']))?></td>
    </tr>

    <tr>
      <td class="head">Input by</td>

      <td><?=is_null($data['f_inputby']) ? $data['f_inputby'] : "-"?></td>
    </tr>
  </table><br>
  <? //} ?>
  <form>
    <input class="button" type="button" value="Close" style=
    "width:80px" onClick="window.close()">
  </form><br>
 </div>
</div>
</body>
</html>