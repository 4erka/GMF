<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
.style1 {font-size: 24px}
-->
</style>
<?
  include("function.php");
  $periode = isset($_REQUEST["periode"]) ? $_REQUEST["periode"] : "";
  $actype = isset($_REQUEST["actype"]) ? $_REQUEST["actype"] : "";
  $group = isset($_REQUEST["groupby"]) ? $_REQUEST["groupby"] : "";

  $TE = connectimesysTE();
  $arractype = selectactype();
  $arrengine = selectengine();
  $arrperiode = selectperiode();
  $arrgroup = array("Aircraft" => "Aircraft","Engine" => "Engine");
  $arrcombo = (isset($_REQUEST["groupby"]) && ($_REQUEST["groupby"] == "Aircraft")) ? $arractype : $arrengine;
	//die(print_r($arrgroup));
?>
<link href="miring.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
.style2 {font-size: 12px}
-->
</style>
</head>

<body>
<script language="javascript">

function group_change() {
	location.href = "<?=$_SERVER['PHP_SELF']?>?groupby=" + document.frm1.groupby.value + "&periode=" + document.frm1.periode.value;
}
function display_report() {

        if (document.frm1.actype.value == "") {
                alert('Please Insert ACType');
        } else if (document.frm1.periode.value == "") {
                alert('Please Select Periode');
        } else {
                location.href = "<?=$_SERVER['PHP_SELF']?>?actype=" +
                        escape(document.frm1.actype.value) + "&periode=" +
                        escape(document.frm1.periode.value);
        }
  }

function export_excel()
  {
        if (document.frm1.periode.value == 0) {
                alert('Please Select Peroode');
        } else if (document.frm1.actype.value == 0) {
                alert('Please Select "Periode"');
        } else {
				
        	   //var str = "excel.php?actype=" + escape(document.frm1.actype.value) + "&weeknum=" + escape(document.frm1.weeknum.value)+ "&year=" + escape(document.frm1.year.value);
                window.open("EOS_excel.php?actype=" + escape(document.frm1.actype.value) + "&periode=" + escape(document.frm1.periode.value) + "&groupby=" + escape(document.frm1.groupby.value));
        }
  }
function export_pdf()
  {
        if (document.frm1.periode.value == 0) {
                alert('Please Select Peroode');
        } else if (document.frm1.actype.value == 0) {
                alert('Please Select "Periode"');
        } else {
				
        	   //var str = "excel.php?actype=" + escape(document.frm1.actype.value) + "&weeknum=" + escape(document.frm1.weeknum.value)+ "&year=" + escape(document.frm1.year.value);
                window.open("eos_pdf.php?actype=" + escape(document.frm1.actype.value) + "&periode=" + escape(document.frm1.periode.value) + "&groupby=" + escape(document.frm1.groupby.value));
        }
  }

</script>
<p align="center" class="style1">ENGINE OPERATION SUMMARY</p>
<p>&nbsp;</p>
<p><form name="frm1" method="get">
Periode (yyyy-mm)&nbsp&nbsp&nbsp<?
cmbbox("periode",$arrperiode,$periode,'',1);
?>  &nbsp&nbsp&nbsp Group By &nbsp&nbsp&nbsp
<?
	cmbbox("groupby",$arrgroup,$group,'group_change()',1);
?>
&nbsp&nbsp&nbsp
<?  
	cmbbox("actype",$arrcombo,$actype,'',1);
?>


  <input type="submit" value="Display Report" onClick="display_report()">
  <input type="submit" value="Excel" onClick="export_excel()">
  <input type="submit" value="PDF" onClick="export_pdf()">
</form>
<?php 
	if (($periode == "") OR ($actype == "")){
		echo "<p>";
		die("Please Insert Periode & AC Type");
		echo "</p>";
  }
	if ($_REQUEST["groupby"] == "Engine") {
		$actype = engineaircraft($actype);
	}

	//die(print_r($actype));
	$numberofengine = ($actype == "B747-400") ? 4 : 2;
	$TE = connectimesysTE();
	$FH = queryFH12($periode,$actype,12);//die(print_r($FH));
	$bulan = array_reverse(array_keys($FH));
	$FHrev = queryFH12rev($periode,$actype);
	$FC = queryFC12($periode,$actype,12);
	$FCrev = queryFC12rev($periode,$actype);
	$fleet = fleet($periode,$actype);
	$available = available($bulan[0],$bulan[11],$actype);
	$FH24 = queryFH12($periode,$actype,24);
	$FC24 = queryFC12($periode,$actype,24);
	$bulan12 = array_reverse(array_keys($FH24));
	$umurengine = queryFHengine($periode,$actype);

	$periodelastyear = (substr($periode,0,4) - 1)."-12";
	$FHlastyear = queryFH12($periodelastyear,$actype,12);
	$FClastyear = queryFC12($periodelastyear,$actype,12);
	$fleetlastyear = fleet($periodelastyear,$actype);
	//die(print_r($bulan12));

	//last year
	
	$engineremovaldata = engineremoval($periode,$actype);
	$engineremovallastyeardata = engineremoval12((substr($periode,0,4) - 1)."-01",$periodelastyear,$actype);
	$TSN = FHengineinitial($actype);$CSN = FCengineinitial($actype);
	$ifsd = ifsd($periode,$actype);//die(print_r($ifsddata));
	$ifsdlastyeardata = ifsdlastyear((substr($periode,0,4) - 1)."-01",$periodelastyear,$actype);
	$rto = rto($periode,$actype);//die(print_r($rto));
	$rtolastyear = rtolastyear((substr($periode,0,4) - 1)."-01",$periodelastyear,$actype);
	//die(print_r($rto));
	while ($Fengine = mysql_fetch_array($umurengine)){
		$FHengine[$Fengine["periode"]] = $Fengine["RevFH"] + $Fengine["NoRevFH"] + round(($Fengine["RevFHMin"] + $Fengine["NoRevFHMin"])/60,0);
		$TSN += ($FHengine[$Fengine["periode"]] * $numberofengine);
		$TSNengine[$Fengine["periode"]] = $TSN;
		$FCengine[$Fengine["periode"]] = $Fengine["RevFC"] + $Fengine["NoRevFC"];
		$CSN += ($FCengine[$Fengine["periode"]] * $numberofengine);
		$CSNengine[$Fengine["periode"]] = $CSN;
	}

	while ($engineremovaldata1 = mysql_fetch_array($engineremovaldata)){
		$engineremoval[$engineremovaldata1["Reason"]][$engineremovaldata1["periode"]] = $engineremovaldata1["jumlah"];
	}

	while ($engineremovallastyeardata1 = mysql_fetch_array($engineremovallastyeardata)){
		$engineremovallastyear[$engineremovallastyeardata1["Reason"]][$engineremovallastyeardata1["periode"]] = $engineremovallastyeardata1["jumlah"];
	}

	/*while ($ifsddata1 = mysql_fetch_array($ifsddata)){
		$ifsd[$ifsddata1["periode"]] = $ifsddata1["jumlah"];
	}*/

	while ($ifsdlastyeardata1 = mysql_fetch_array($ifsdlastyeardata)){
		$ifsdlastyear[$ifsdlastyeardata1["periode"]] = $ifsdlastyeardata1["jumlah"];
	}
	//die(print_r($ifsdlastyear));
	/*while ($rtoly = mysql_fetch_array($rtolastyear)){
		$rtolastyeardata[$rtoly["periode"]] = $rtoly["jumlah"];
	}*/

	/*while ($rtodata = mysql_fetch_array($rto)){
		$rto[$rtodata["periode"]] = $rto["jumlah"];
	}*/
	//die(print_r($rto));

	foreach ($bulan12 as $k => $v){
		$engineremoval["Convenience"][$v] = isset($engineremoval["Convenience"][$v]) ? $engineremoval["Convenience"][$v] : 0;
		$engineremoval["Campaign"][$v] = isset($engineremoval["Campaign"][$v]) ? $engineremoval["Campaign"][$v] : 0;
		$engineremoval["Predefined Basic Planned"][$v] = isset($engineremoval["Predefined Basic Planned"][$v]) ? $engineremoval["Predefined Basic Planned"][$v] : 0;
		$engineremoval["Predefined Basic UnPlanned"][$v] = isset($engineremoval["Predefined Basic UnPlanned"][$v]) ? $engineremoval["Predefined Basic UnPlanned"][$v] : 0;
		$engineremoval["Predefined NonBasic Planned"][$v] = isset($engineremoval["Predefined NonBasic Planned"][$v]) ? $engineremoval["Predefined NonBasic Planned"][$v] : 0;
		$engineremoval["Predefined NonBasic UnPlanned"][$v] = isset($engineremoval["Predefined NonBasic UnPlanned"][$v]) ? $engineremoval["Predefined NonBasic UnPlanned"][$v] : 0;
		$engineremoval["Premature Basic Planned"][$v] = isset($engineremoval["Premature Basic Planned"][$v]) ? $engineremoval["Premature Basic Planned"][$v] : 0;
		$engineremoval["Premature Basic UnPlanned"][$v] = isset($engineremoval["Premature Basic UnPlanned"][$v]) ? $engineremoval["Premature Basic UnPlanned"][$v] : 0;
		$engineremoval["Premature NonBasic Planned"][$v] = isset($engineremoval["Premature NonBasic Planned"][$v]) ? $engineremoval["Premature NonBasic Planned"][$v] : 0;
		$engineremoval["Premature NonBasic UnPlanned"][$v] = isset($engineremoval["Premature NonBasic UnPlanned"][$v]) ? $engineremoval["Premature NonBasic UnPlanned"][$v] : 0;
		$bulansebelumnya[$k] = isset($bulan[$k-1]) ? $bulan[$k-1] : 0;
		$ifsd[$v] = isset($ifsd[$v]) ? $ifsd[$v] : 0;
		$rtodat[$v] = isset($rto[$v]) ? $rto[$v] : 0;
	}

		$engineremovallastyear["Convenience"] = isset($engineremovallastyear["Convenience"]) ? array_sum($engineremovallastyear["Convenience"]) : 0;
		$engineremovallastyear["Campaign"] = isset($engineremovallastyear["Campaign"]) ? array_sum($engineremovallastyear["Campaign"]) : 0;
		$engineremovallastyear["Predefined Basic Planned"] = isset($engineremovallastyear["Predefined Basic Planned"]) ? array_sum($engineremovallastyear["Predefined Basic Planned"]) : 0;
		$engineremovallastyear["Predefined Basic UnPlanned"] = isset($engineremovallastyear["Predefined Basic UnPlanned"]) ? array_sum($engineremovallastyear["Predefined Basic UnPlanned"]) : 0;
		$engineremovallastyear["Predefined NonBasic Planned"] = isset($engineremovallastyear["Predefined NonBasic Planned"]) ? array_sum($engineremovallastyear["Predefined NonBasic Planned"]) : 0;
		$engineremovallastyear["Predefined NonBasic UnPlanned"] = isset($engineremovallastyear["Predefined NonBasic UnPlanned"]) ? array_sum($engineremovallastyear["Predefined NonBasic UnPlanned"]) : 0;
		$engineremovallastyear["Premature Basic Planned"] = isset($engineremovallastyear["Premature Basic Planned"]) ? array_sum($engineremovallastyear["Premature Basic Planned"]) : 0;
		$engineremovallastyear["Premature Basic UnPlanned"] = isset($engineremovallastyear["Premature Basic UnPlanned"]) ? array_sum($engineremovallastyear["Premature Basic UnPlanned"]) : 0;
		$engineremovallastyear["Premature NonBasic Planned"] = isset($engineremovallastyear["Premature NonBasic Planned"]) ? array_sum($engineremovallastyear["Premature NonBasic Planned"]) : 0;
		$engineremovallastyear["Premature NonBasic UnPlanned"] = isset($engineremovallastyear["Premature NonBasic UnPlanned"]) ? array_sum($engineremovallastyear["Premature NonBasic UnPlanned"]) : 0;
		$ifsdlastyear = isset($ifsdlastyear) ? array_sum($ifsdlastyear) : 0;
		$rtolastyeardata = isset($rtolastyeara) ? array_sum($rtolastyear) : 0;
?>
</p>
<p>&nbsp;</p>
<table width="100%"  border="1" cellspacing="0" cellpadding="0">
  <tr>
    <th colspan="2" scope="col"><span class="style2"><?= $actype?></span></th>
    <th width="18%" scope="col"><div align="center"><span class="style2"></span></div></th>
    <th width="5%" scope="col"><div align="center"><span class="style2"></span></div></th>
    <th width="4%" scope="col"><div align="center"><span class="style2"></span></div></th>
    <th width="5%" scope="col"><div align="center"><span class="style2"></span></div></th>
    <th width="4%" scope="col"><div align="center"><span class="style2"></span></div></th>
    <th width="5%" scope="col"><div align="center"><span class="style2"></span></div></th>
    <th width="4%" scope="col"><div align="center"><span class="style2"></span></div></th>
    <th width="4%" scope="col"><div align="center"><span class="style2"></span></div></th>
    <th width="5%" scope="col"><div align="center"><span class="style2"></span></div></th>
    <th width="4%" scope="col"><div align="center"><span class="style2"></span></div></th>
    <th width="5%" scope="col"><div align="center"><span class="style2"></span></div></th>
    <th width="5%" scope="col"><div align="center"><span class="style2"></span></div></th>
    <th width="5%" scope="col"><div align="center"><span class="style2"></span></div></th>
  </tr>
  <tr>
    <th width="6%" scope="row"><span class="style2"></span></th>
    <td width="21%"><span class="style2"></span></td>
    <th><div align="center"><span class="style2">2007</span></div></th>
<?
	foreach ($bulan as $key => $value){		
?>
    <th><div align="center"><span class="style2">
        <?= bulan($value)?>
    </span></div></th>
<?
	}
?>
  </tr>
  <tr>
    <th colspan="2" scope="row"><p align="left" class="style2">NUMBER OF ENGINE IN FLEET</p>    </th>
    <td><div align="center"><span class="style2"><?= round(array_sum($fleetlastyear)/12*$numberofengine,0)?></span></div></td>
<?
	foreach ($bulan as $key => $value){
?>
    <td><div align="center"><span class="style2">
        <?= ($fleet[$value] * $numberofengine)?>
    </span></div></td>
<?
	}
?>
  </tr>
  <tr>
    <th scope="row"><div align="left"><span class="style2"></span></div></th>
    <td><div align="left"><span class="style2"></span></div></td>
    <td><div align="center"><span class="style2"></span></div></td>
    <td><div align="center"><span class="style2"></span></div></td>
    <td><div align="center"><span class="style2"></span></div></td>
    <td><div align="center"><span class="style2"></span></div></td>
    <td><div align="center"><span class="style2"></span></div></td>
    <td><div align="center"><span class="style2"></span></div></td>
    <td><div align="center"><span class="style2"></span></div></td>
    <td><div align="center"><span class="style2"></span></div></td>
    <td><div align="center"><span class="style2"></span></div></td>
    <td><div align="center"><span class="style2"></span></div></td>
    <td><div align="center"><span class="style2"></span></div></td>
    <td><div align="center"><span class="style2"></span></div></td>
    <td><div align="center"><span class="style2"></span></div></td>
  </tr>
  <tr>
    <th colspan="2" scope="row"><div align="left" class="style2">HOURS-CUMULATIVE </div></th>
    <td><div align="center"><span class="style2"></span></div></td>
<?
	foreach ($bulan as $key => $value){
?>
    <td><div align="center"><span class="style2"><?= $TSNengine[$value]?></span></div></td>
<?
	}
?>
  </tr>
  <tr>
    <th colspan="2" scope="row"><div align="left" class="style2">HOURS-OPERATED</div></th>
    <td><div align="center"><span class="style2"><?= (array_sum($FHlastyear) * $numberofengine)?></span></div></td>
<?
	foreach ($bulan as $key => $value){
?>
    <td><div align="center"><span class="style2">
        <?= ($FH[$value] * $numberofengine)?>
    </span></div></td>
<?
	}
?>
  </tr>
  <tr>
    <th scope="row"><div align="left"><span class="style2"></span></div></th>
    <td><div align="left"><span class="style2"></span></div></td>
    <td><div align="center"><span class="style2"></span></div></td>
    <td><div align="center"><span class="style2"></span></div></td>
    <td><div align="center"><span class="style2"></span></div></td>
    <td><div align="center"><span class="style2"></span></div></td>
    <td><div align="center"><span class="style2"></span></div></td>
    <td><div align="center"><span class="style2"></span></div></td>
    <td><div align="center"><span class="style2"></span></div></td>
    <td><div align="center"><span class="style2"></span></div></td>
    <td><div align="center"><span class="style2"></span></div></td>
    <td><div align="center"><span class="style2"></span></div></td>
    <td><div align="center"><span class="style2"></span></div></td>
    <td><div align="center"><span class="style2"></span></div></td>
    <td><div align="center"><span class="style2"></span></div></td>
  </tr>
  <tr>
    <th colspan="2" scope="row"><div align="left" class="style2">CYCLE-CUMULATIVE</div></th>
    <td><div align="center"><span class="style2"></span></div></td>
<?
	foreach ($bulan as $key => $value){
?>
    <td><div align="center"><span class="style2"><?= $CSNengine[$value]?></span></div></td>
<?
	}
?>
  </tr>
  <tr>
    <th colspan="2" scope="row"><div align="left" class="style2">CYCLE-OPERATED</div></th>
    <td><div align="center"><span class="style2"><?= (array_sum($FClastyear) * $numberofengine)?></span></div></td>
<?
	foreach ($bulan as $key => $value){
?>
    <td><div align="center"><span class="style2">
        <?= ($FC[$value] * $numberofengine)?>
    </span></div></td>
<?
	}
?>
  </tr>
  <tr>
    <th scope="row"><div align="left"><span class="style2"></span></div></th>
    <td><div align="left"><span class="style2"></span></div></td>
    <td><div align="center"><span class="style2"></span></div></td>
    <td><div align="center"><span class="style2"></span></div></td>
    <td><div align="center"><span class="style2"></span></div></td>
    <td><div align="center"><span class="style2"></span></div></td>
    <td><div align="center"><span class="style2"></span></div></td>
    <td><div align="center"><span class="style2"></span></div></td>
    <td><div align="center"><span class="style2"></span></div></td>
    <td><div align="center"><span class="style2"></span></div></td>
    <td><div align="center"><span class="style2"></span></div></td>
    <td><div align="center"><span class="style2"></span></div></td>
    <td><div align="center"><span class="style2"></span></div></td>
    <td><div align="center"><span class="style2"></span></div></td>
    <td><div align="center"><span class="style2"></span></div></td>
  </tr>
  <tr>
    <th colspan="2" scope="row"><div align="left" class="style2">IN FLIGHT SHUT DOWN </div></th>
    <td><div align="center"><span class="style2"><?= $ifsdlastyear?></span></div></td>
<?
	foreach ($bulan as $key => $value){
?>
    <td><div align="center"><span class="style2"><?= $ifsd[$value]?></span></div></td>
<?
	}
?>
  </tr>
  <tr>
    <th scope="row"><div align="left"><span class="style2"></span></div></th>
    <th scope="row"><div align="left" class="style2">- RATE </div></th>
    <td><div align="center"><span class="style2"><?= round(($ifsdlastyear/(array_sum($FHlastyear)*$numberofengine)*1000),3)?></span></div></td>
<?
	foreach ($bulan as $key => $value){
?>
    <td><div align="center"><span class="style2"><?= (!empty($FH[$value]) ? round(($ifsd[$value]/($FH[$value]*$numberofengine)*1000),3) : 0)?></span></div></td>
<?
	}
?>
  </tr>
  <tr>
    <th scope="row"><div align="left"><span class="style2"></span></div></th>
    <th scope="row"><div align="left" class="style2">- 3 MO. RATE </div></th>
    <td><div align="center"><span class="style2"></span></div></td>
<?
	foreach ($bulan as $key => $value){
?>
    <td><div align="center"><span class="style2"><?= (!empty($FH24[$bulan12[$key+10]]) ? round((($ifsd[$bulan12[$key+10]] + $ifsd[$bulan12[$key+11]] + $ifsd[$bulan12[$key+12]])/($FH24[$bulan12[$key+10]] + $FH24[$bulan12[$key+11]] + $FH24[$bulan12[$key+12]]) * 1000),3) : 0)?></span></div></td>
<?
	}
?>
  </tr>
  <tr>
    <th scope="row"><div align="left"><span class="style2"></span></div></th>
    <td><div align="left"><span class="style2"></span></div></td>
    <td><div align="center"><span class="style2"></span></div></td>
    <td><div align="center"><span class="style2"></span></div></td>
    <td><div align="center"><span class="style2"></span></div></td>
    <td><div align="center"><span class="style2"></span></div></td>
    <td><div align="center"><span class="style2"></span></div></td>
    <td><div align="center"><span class="style2"></span></div></td>
    <td><div align="center"><span class="style2"></span></div></td>
    <td><div align="center"><span class="style2"></span></div></td>
    <td><div align="center"><span class="style2"></span></div></td>
    <td><div align="center"><span class="style2"></span></div></td>
    <td><div align="center"><span class="style2"></span></div></td>
    <td><div align="center"><span class="style2"></span></div></td>
    <td><div align="center"><span class="style2"></span></div></td>
  </tr>
  <tr>
    <th colspan="2" scope="row"><div align="left" class="style2">ABORTED TAKE OFF </div>      </th>
    <td><div align="center"><span class="style2"><?= $rtolastyeardata?></span></div></td>
<?
	foreach ($bulan as $key => $value){
?>
    <td><div align="center"><span class="style2"><?= $rtodat[$value]?></span></div></td>
<?
	}
?>
  </tr>
  <tr>
    <th scope="row"><span class="style2"></span></th>
    <th scope="row"><div align="left" class="style2">- RATE </div></th>
    <td><div align="center"><span class="style2"><?= round(($rtolastyeardata/(array_sum($FHlastyear)*$numberofengine)*1000),3)?></span></div></td>
<?
	foreach ($bulan as $key => $value){
?>
    <td><div align="center"><span class="style2"><?= (!empty($FH[$value]) ? round(($rtodat[$value]/($FH[$value]*$numberofengine)*1000),3) : 0)?></span></div></td>
<?
	}
?>
  </tr>
  <tr>
    <th scope="row"><span class="style2"></span></th>
    <th scope="row"><div align="left" class="style2">- 3 MO. RATE</div></th>
    <td><div align="center"><span class="style2"></span></div></td>
<?
	foreach ($bulan as $key => $value){
?>
    <td><div align="center"><span class="style2"><?= (!empty($FH24[$bulan12[$key+10]]) ? round((($rtodat[$bulan12[$key+10]] + $rtodat[$bulan12[$key+11]] + $rtodat[$bulan12[$key+12]])/($FH24[$bulan12[$key+10]] + $FH24[$bulan12[$key+11]] + $FH24[$bulan12[$key+12]]) * 1000),3) : 0)?></span></div></td>
<?
	}
?>
  </tr>
  <tr>
    <th scope="row"><div align="left"><span class="style2"></span></div></th>
    <td><div align="left"><span class="style2"></span></div></td>
    <td><div align="center"><span class="style2"></span></div></td>
    <td><div align="center"><span class="style2"></span></div></td>
    <td><div align="center"><span class="style2"></span></div></td>
    <td><div align="center"><span class="style2"></span></div></td>
    <td><div align="center"><span class="style2"></span></div></td>
    <td><div align="center"><span class="style2"></span></div></td>
    <td><div align="center"><span class="style2"></span></div></td>
    <td><div align="center"><span class="style2"></span></div></td>
    <td><div align="center"><span class="style2"></span></div></td>
    <td><div align="center"><span class="style2"></span></div></td>
    <td><div align="center"><span class="style2"></span></div></td>
    <td><div align="center"><span class="style2"></span></div></td>
    <td><div align="center"><span class="style2"></span></div></td>
  </tr>
  <tr>
    <th colspan="2" scope="row"><div align="left" class="style2">CONVENIENCE</div>      </th>
    <td><div align="center"><span class="style2"><?= $engineremovallastyear["Convenience"]?></span></div></td>
<?
	foreach ($bulan as $key => $value){
?>
    <td><div align="center"><span class="style2">
        <?= $engineremoval["Convenience"][$value]?>
    </span></div></td>
<?
	}
?>
  </tr>
  <tr>
    <th colspan="2" scope="row"><div align="left" class="style2">CAMPAIGN</div>      </th>
    <td><div align="center"><span class="style2"><?= $engineremovallastyear["Campaign"]?></span></div></td>
<?
	foreach ($bulan as $key => $value){
?>
    <td><div align="center"><span class="style2">
        <?= $engineremoval["Campaign"][$value]?>
    </span></div></td>
<?
	}
?>
  </tr>
  <tr>
    <th rowspan="10" scope="row"><div align="left" class="style2">REF</div>      <div align="left" class="style2"></div>      <div align="left" class="style2"></div>      <div align="left" class="style2"></div>      <div align="left" class="style2"></div>      <div align="left" class="style2"></div>      <div align="left" class="style2"></div>      <div align="left" class="style2"></div>      <div align="left" class="style2"></div>      <div align="left" class="style2"></div></th>
    <th><div align="left" class="style2">PREDEFINED REMOVAL </div></th>
    <td><div align="center"><span class="style2"></span></div></td>
    <td><div align="center"><span class="style2"></span></div></td>
    <td><div align="center"><span class="style2"></span></div></td>
    <td><div align="center"><span class="style2"></span></div></td>
    <td><div align="center"><span class="style2"></span></div></td>
    <td><div align="center"><span class="style2"></span></div></td>
    <td><div align="center"><span class="style2"></span></div></td>
    <td><div align="center"><span class="style2"></span></div></td>
    <td><div align="center"><span class="style2"></span></div></td>
    <td><div align="center"><span class="style2"></span></div></td>
    <td><div align="center"><span class="style2"></span></div></td>
    <td><div align="center"><span class="style2"></span></div></td>
    <td><div align="center"><span class="style2"></span></div></td>
  </tr>
  <tr>
    <th><div align="left" class="style2">* BASIC - PLANNED </div></th>
    <td><div align="center"><span class="style2"><?= $engineremovallastyear["Predefined Basic Planned"]?></span></div></td>
<?
	foreach ($bulan as $key => $value){
?>
    <td><div align="center"><span class="style2">
        <?= $engineremoval["Predefined Basic Planned"][$value]?>
    </span></div></td>
<?
	}
?>
  </tr>
  <tr>
    <th><div align="left" class="style2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - UNPLANNED </div></th>
    <td><div align="center"><span class="style2"><?= $engineremovallastyear["Predefined Basic UnPlanned"]?></span></div></td>
<?
	foreach ($bulan as $key => $value){
?>
    <td><div align="center"><span class="style2">
        <?= $engineremoval["Predefined Basic UnPlanned"][$value]?>
    </span></div></td>
<?
	}
?>
  </tr>
  <tr>
    <th><div align="left" class="style2">* NON BASIC - PLANNED </div></th>
    <td><div align="center"><span class="style2"><?= $engineremovallastyear["Predefined NonBasic Planned"]?></span></div></td>
<?
	foreach ($bulan as $key => $value){
?>
    <td><div align="center"><span class="style2">
        <?= $engineremoval["Predefined NonBasic Planned"][$value]?>
    </span></div></td>
<?
	}
?>
  </tr>
  <tr>
    <th><div align="left" class="style2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - UNPLANNED </div></th>
    <td><div align="center"><span class="style2"><?= $engineremovallastyear["Predefined NonBasic UnPlanned"]?></span></div></td>
<?
	foreach ($bulan as $key => $value){
?>
    <td><div align="center"><span class="style2">
        <?= $engineremoval["Predefined NonBasic UnPlanned"][$value]?>
    </span></div></td>
<?
	}
?>  </tr>
  <tr>
    <th><div align="left" class="style2">PREMATURE REMOVAL </div></th>
    <td><div align="center"><span class="style2"></span></div></td>
    <td><div align="center"><span class="style2"></span></div></td>
    <td><div align="center"><span class="style2"></span></div></td>
    <td><div align="center"><span class="style2"></span></div></td>
    <td><div align="center"><span class="style2"></span></div></td>
    <td><div align="center"><span class="style2"></span></div></td>
    <td><div align="center"><span class="style2"></span></div></td>
    <td><div align="center"><span class="style2"></span></div></td>
    <td><div align="center"><span class="style2"></span></div></td>
    <td><div align="center"><span class="style2"></span></div></td>
    <td><div align="center"><span class="style2"></span></div></td>
    <td><div align="center"><span class="style2"></span></div></td>
    <td><div align="center"><span class="style2"></span></div></td>
  </tr>
  <tr>
    <th><div align="left" class="style2">* BASIC - PLANNED </div></th>
    <td><div align="center"><span class="style2"><?= $engineremovallastyear["Premature Basic Planned"]?></span></div></td>
<?
	foreach ($bulan as $key => $value){
?>
    <td><div align="center"><span class="style2">
        <?= $engineremoval["Premature Basic Planned"][$value]?>
    </span></div></td>
<?
	}
?>
  </tr>
  <tr>
    <th><div align="left" class="style2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - UNPLANNED </div></th>
    <td><div align="center"><span class="style2"><?= $engineremovallastyear["Premature Basic UnPlanned"]?></span></div></td>
<?
	foreach ($bulan as $key => $value){
?>
    <td><div align="center"><span class="style2">
        <?= $engineremoval["Premature Basic UnPlanned"][$value]?>
    </span></div></td>
<?
	}
?>  </tr>
  <tr>
    <th><div align="left" class="style2">* NON BASIC - PLANNED </div></th>
    <td><div align="center"><span class="style2"><?= $engineremovallastyear["Premature NonBasic Planned"]?></span></div></td>
<?
	foreach ($bulan as $key => $value){
?>
    <td><div align="center"><span class="style2">
        <?= $engineremoval["Premature NonBasic Planned"][$value]?>
    </span></div></td>
<?
	}
?>  </tr>
  <tr>
    <th><div align="left" class="style2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - UNPLANNED </div></th>
    <td><div align="center"><span class="style2"><?= $engineremovallastyear["Premature NonBasic UnPlanned"]?></span></div></td>
<?
	foreach ($bulan as $key => $value){
?>
    <td><div align="center"><span class="style2">
        <?= $engineremoval["Premature NonBasic UnPlanned"][$value]?>
    </span></div></td>
<?
	}
?>  </tr>
  <tr>
    <th scope="row"><div align="left"><span class="style2"></span></div></th>
    <td><div align="left"><span class="style2"></span></div></td>
    <td><div align="center"><span class="style2"></span></div></td>
    <td><div align="center"><span class="style2"></span></div></td>
    <td><div align="center"><span class="style2"></span></div></td>
    <td><div align="center"><span class="style2"></span></div></td>
    <td><div align="center"><span class="style2"></span></div></td>
    <td><div align="center"><span class="style2"></span></div></td>
    <td><div align="center"><span class="style2"></span></div></td>
    <td><div align="center"><span class="style2"></span></div></td>
    <td><div align="center"><span class="style2"></span></div></td>
    <td><div align="center"><span class="style2"></span></div></td>
    <td><div align="center"><span class="style2"></span></div></td>
    <td><div align="center"><span class="style2"></span></div></td>
    <td><div align="center"><span class="style2"></span></div></td>
  </tr>
  <tr>
    <th colspan="2" scope="row"><div align="left" class="style2">TOTAL UNPLANNED ENGINE REMOVAL </div>      </th>
    <td><div align="center"><span class="style2"><?= ($engineremovallastyear["Premature NonBasic UnPlanned"] + $engineremovallastyear["Premature Basic UnPlanned"] + $engineremovallastyear["Predefined Basic UnPlanned"] + $engineremovallastyear["Predefined NonBasic UnPlanned"])?></span></div></td>
<?
	foreach ($bulan as $key => $value){
?>
    <td><div align="center"><span class="style2">
        <?= ($engineremoval["Predefined Basic UnPlanned"][$value] + $engineremoval["Predefined NonBasic UnPlanned"][$value] + $engineremoval["Premature Basic UnPlanned"][$value] + $engineremoval["Premature NonBasic UnPlanned"][$value])?>
    </span></div></td>
<?
	}
?> 
  </tr>
  <tr>
    <th scope="row"><div align="left"><span class="style2"></span></div></th>
    <th><div align="left" class="style2">- UER RATE </div></th>
    <td><div align="center"><span class="style2"><?= round(($engineremovallastyear["Premature NonBasic UnPlanned"] + $engineremovallastyear["Premature Basic UnPlanned"] + $engineremovallastyear["Predefined Basic UnPlanned"] + $engineremovallastyear["Predefined NonBasic UnPlanned"])/(array_sum($FHlastyear) * $numberofengine)*1000,3)?></span></div></td>
<?
	foreach ($bulan as $key => $value){
?>
    <td><div align="center"><span class="style2">
        <?= (!empty($FH[$value]) ? round((($engineremoval["Predefined Basic UnPlanned"][$value] + $engineremoval["Predefined NonBasic UnPlanned"][$value] + $engineremoval["Premature Basic UnPlanned"][$value] + $engineremoval["Premature NonBasic UnPlanned"][$value])/($FH[$value] * $numberofengine)*1000),3) : 0)?>
    </span></div></td>
<?
	}
?> 
  </tr>
  <tr>
    <th scope="row"><div align="left"><span class="style2"></span></div></th>
    <th><div align="left" class="style2">- 3 MO. UER RATE </div></th>
    <td><div align="center"><span class="style2"></span></div></td>
<?
	
	foreach ($bulan as $key => $value){
?>
    <td><div align="center"><span class="style2"><?= (!empty($FH24[$bulan12[$key+10]]) ? round((($engineremoval["Predefined Basic UnPlanned"][$bulan12[$key+10]] + $engineremoval["Predefined NonBasic UnPlanned"][$bulan12[$key+10]] + $engineremoval["Premature Basic UnPlanned"][$bulan12[$key+10]] + $engineremoval["Premature NonBasic UnPlanned"][$bulan12[$key+10]] + $engineremoval["Predefined Basic UnPlanned"][$bulan12[$key+11]] + $engineremoval["Predefined NonBasic UnPlanned"][$bulan12[$key+11]] + $engineremoval["Premature Basic UnPlanned"][$bulan12[$key+11]] + $engineremoval["Premature NonBasic UnPlanned"][$bulan12[$key+11]] + $engineremoval["Predefined Basic UnPlanned"][$bulan12[$key+12]] + $engineremoval["Predefined NonBasic UnPlanned"][$bulan12[$key+12]] + $engineremoval["Premature Basic UnPlanned"][$bulan12[$key+12]] + $engineremoval["Premature NonBasic UnPlanned"][$bulan12[$key+12]])/(($FH24[$bulan12[$key+10]] + $FH24[$bulan12[$key+11]] + $FH24[$bulan12[$key+12]]) * $numberofengine)*1000),3) : 0)?></span></div></td>
<?
	}
?>
  </tr>
   <tr>
    <th scope="row"><div align="left"><span class="style2"></span></div></th>
    <th><div align="left" class="style2">- 12 MO. RATE </div></th>
    <td><div align="center"><span class="style2"></span></div></td>
<?
	foreach ($bulan as $key => $value){
		$predbasunplan = 0;$prednonbaseunplan = 0;$prembasunplan = 0;$premnonbasunplan = 0;$FHengremove = 0;
	for($i=1;$i<13;$i++)
	{
		$predbasunplan += $engineremoval["Predefined Basic UnPlanned"][$bulan12[$key+$i]];
		$prednonbaseunplan += $engineremoval["Predefined NonBasic UnPlanned"][$bulan12[$key+$i]];
		$prembasunplan += $engineremoval["Premature Basic UnPlanned"][$bulan12[$key+$i]];
		$premnonbasunplan += $engineremoval["Premature NonBasic UnPlanned"][$bulan12[$key+$i]];
		$FHengremove += $FH24[$bulan12[$key+$i]] * $numberofengine;
	}
	$uer12rate = !empty($FHengremove) ? round(($predbasunplan + $prednonbaseunplan + $prembasunplan + $premnonbasunplan)/$FHengremove*1000,3) : 0;
?>
    <td><div align="center"><span class="style2"><?= $uer12rate?></span></div></td>
<?
	}
?>  
  </tr>
  <tr>
    <th scope="row"><div align="left"><span class="style2"></span></div></th>
    <td><div align="left"><span class="style2"></span></div></td>
    <td><div align="center"><span class="style2"></span></div></td>
    <td><div align="center"><span class="style2"></span></div></td>
    <td><div align="center"><span class="style2"></span></div></td>
    <td><div align="center"><span class="style2"></span></div></td>
    <td><div align="center"><span class="style2"></span></div></td>
    <td><div align="center"><span class="style2"></span></div></td>
    <td><div align="center"><span class="style2"></span></div></td>
    <td><div align="center"><span class="style2"></span></div></td>
    <td><div align="center"><span class="style2"></span></div></td>
    <td><div align="center"><span class="style2"></span></div></td>
    <td><div align="center"><span class="style2"></span></div></td>
    <td><div align="center"><span class="style2"></span></div></td>
    <td><div align="center"><span class="style2"></span></div></td>
  </tr>
  <tr>
    <th colspan="2" scope="row"><div align="left" class="style2">TOTAL PREMATURE REMOVAL </div>      </th>
    <td><div align="center"><span class="style2"><?= $engineremovallastyear["Premature Basic Planned"] + $engineremovallastyear["Premature Basic UnPlanned"] + $engineremovallastyear["Premature NonBasic Planned"] + $engineremovallastyear["Premature NonBasic UnPlanned"]?></span></div></td>
<?
	foreach ($bulan as $key => $value){
?>
    <td><div align="center"><span class="style2">
        <?= ($engineremoval["Premature Basic Planned"][$value] + $engineremoval["Premature Basic UnPlanned"][$value] + $engineremoval["Premature NonBasic Planned"][$value] + $engineremoval["Premature NonBasic UnPlanned"][$value])?>
    </span></div></td>
<?
	}
?>   </tr>
  <tr>
    <th scope="row"><div align="left"><span class="style2"></span></div></th>
    <th><div align="left" class="style2">- RATE </div></th>
    <td><div align="center"><span class="style2"><?= round((($engineremovallastyear["Premature Basic Planned"] + $engineremovallastyear["Premature Basic UnPlanned"] + $engineremovallastyear["Premature NonBasic Planned"] + $engineremovallastyear["Premature NonBasic UnPlanned"])/(array_sum($FHlastyear)*$numberofengine)*1000),3)?></span></div></td>
<?
	foreach ($bulan as $key => $value){
?>
    <td><div align="center"><span class="style2">
        <?= (!empty($FH[$value]) ?round((($engineremoval["Premature Basic Planned"][$value] + $engineremoval["Premature Basic UnPlanned"][$value] + $engineremoval["Premature NonBasic Planned"][$value] + $engineremoval["Premature NonBasic UnPlanned"][$value])/($FH[$value] * $numberofengine)*1000),3) : 0)?>
    </span></div></td>
<?
	}
?>  </tr>
  <tr>
    <th scope="row"><div align="left"><span class="style2"></span></div></th>
    <th><div align="left" class="style2">- 3 MO. RATE </div></th>
    <td><div align="center"><span class="style2"></span></div></td>
<?
	foreach ($bulan as $key => $value){
?>
    <td><div align="center"><span class="style2"><?= (!empty($FH24[$bulan12[$key+10]]) ? round((($engineremoval["Premature Basic Planned"][$bulan12[$key+10]] + $engineremoval["Premature Basic UnPlanned"][$bulan12[$key+10]] + $engineremoval["Premature NonBasic Planned"][$bulan12[$key+10]] + $engineremoval["Premature NonBasic UnPlanned"][$bulan12[$key+10]] + $engineremoval["Premature Basic Planned"][$bulan12[$key+11]] + $engineremoval["Premature Basic UnPlanned"][$bulan12[$key+11]] + $engineremoval["Premature NonBasic Planned"][$bulan12[$key+11]] + $engineremoval["Premature NonBasic UnPlanned"][$bulan12[$key+11]] + $engineremoval["Premature Basic Planned"][$value] + $engineremoval["Premature Basic UnPlanned"][$value] + $engineremoval["Premature NonBasic Planned"][$value] + $engineremoval["Premature NonBasic UnPlanned"][$value])/(($FH24[$bulan12[$key+10]] + $FH24[$bulan12[$key+11]] + $FH24[$bulan12[$key+12]]) * $numberofengine)*1000),3) : 0)?></span></div></td>
<?
	}
?>  
  </tr>
  <tr>
    <th scope="row"><div align="left"><span class="style2"></span></div></th>
    <th><div align="left" class="style2">- 12 MO. RATE </div></th>
    <td><div align="center"><span class="style2"></span></div></td>
<?
	foreach ($bulan as $key => $value){
		$prembasplan = 0;$prembasunplan = 0;$premnonbasplan = 0;$premnonbasunplan = 0;$FHengremove = 0;
	for($i=1;$i<13;$i++)
	{
		$prembasplan += $engineremoval["Premature Basic Planned"][$bulan12[$key+$i]];
		$prembasunplan += $engineremoval["Premature Basic UnPlanned"][$bulan12[$key+$i]];
		$premnonbasplan += $engineremoval["Premature NonBasic Planned"][$bulan12[$key+$i]];
		$premnonbasunplan += $engineremoval["Premature NonBasic UnPlanned"][$bulan12[$key+$i]];
		$FHengremove += $FH24[$bulan12[$key+$i]] * $numberofengine;
	}
	$premrate = !empty($FHengremove) ? round(($prembasplan + $prembasunplan + $premnonbasplan + $premnonbasunplan)/$FHengremove*1000,3) : 0;
?>
    <td><div align="center"><span class="style2"><?= $premrate?></span></div></td>
<?
	}
?>  
  </tr>
  <tr>
    <th scope="row"><div align="left"><span class="style2"></span></div></th>
    <th><div align="left"><span class="style2"></span></div></th>
    <td><div align="center"><span class="style2"></span></div></td>
    <td><div align="center"><span class="style2"></span></div></td>
    <td><div align="center"><span class="style2"></span></div></td>
    <td><div align="center"><span class="style2"></span></div></td>
    <td><div align="center"><span class="style2"></span></div></td>
    <td><div align="center"><span class="style2"></span></div></td>
    <td><div align="center"><span class="style2"></span></div></td>
    <td><div align="center"><span class="style2"></span></div></td>
    <td><div align="center"><span class="style2"></span></div></td>
    <td><div align="center"><span class="style2"></span></div></td>
    <td><div align="center"><span class="style2"></span></div></td>
    <td><div align="center"><span class="style2"></span></div></td>
    <td><div align="center"><span class="style2"></span></div></td>
  </tr>
  <tr>
    <th colspan="2" scope="row"><div align="left" class="style2">TOTAL SHOP VISIT </div>      </th>
    <td><div align="center"><span class="style2"><?= ($engineremovallastyear["Premature Basic Planned"] + $engineremovallastyear["Premature Basic UnPlanned"] + $engineremovallastyear["Premature NonBasic Planned"] + $engineremovallastyear["Premature NonBasic UnPlanned"] + $engineremovallastyear["Predefined Basic Planned"] + $engineremovallastyear["Predefined Basic UnPlanned"] + $engineremovallastyear["Predefined NonBasic Planned"] + $engineremovallastyear["Predefined NonBasic UnPlanned"])?></span></div></td>
<?
	foreach ($bulan as $key => $value){
?>
    <td><div align="center"><span class="style2">
        <?= ($engineremoval["Premature Basic Planned"][$value] + $engineremoval["Premature Basic UnPlanned"][$value] + $engineremoval["Premature NonBasic Planned"][$value] + $engineremoval["Premature NonBasic UnPlanned"][$value] + $engineremoval["Predefined Basic Planned"][$value] + $engineremoval["Predefined Basic UnPlanned"][$value] + $engineremoval["Predefined NonBasic Planned"][$value] + $engineremoval["Predefined NonBasic UnPlanned"][$value] + $engineremoval["Campaign"][$value])?>
    </span></div></td>
<?
	}
?> 
</tr>
  <tr>
    <th scope="row"><div align="left"><span class="style2"></span></div></th>
    <th><div align="left" class="style2">- RATE </div></th>
    <td><div align="center"><span class="style2"><?= round((($engineremovallastyear["Premature Basic Planned"] + $engineremovallastyear["Premature Basic UnPlanned"] + $engineremovallastyear["Premature NonBasic Planned"] + $engineremovallastyear["Premature NonBasic UnPlanned"] + $engineremovallastyear["Predefined Basic Planned"] + $engineremovallastyear["Predefined Basic UnPlanned"] + $engineremovallastyear["Predefined NonBasic Planned"] + $engineremovallastyear["Predefined NonBasic UnPlanned"])/(array_sum($FHlastyear)*$numberofengine)*1000),3)?></span></div></td>
<?
	foreach ($bulan as $key => $value){
?>
    <td><div align="center"><span class="style2">
        <?= (!empty($FH[$value]) ? round((($engineremoval["Premature Basic Planned"][$value] + $engineremoval["Premature Basic UnPlanned"][$value] + $engineremoval["Premature NonBasic Planned"][$value] + $engineremoval["Premature NonBasic UnPlanned"][$value] + $engineremoval["Predefined Basic Planned"][$value] + $engineremoval["Predefined Basic UnPlanned"][$value] + $engineremoval["Predefined NonBasic Planned"][$value] + $engineremoval["Predefined NonBasic UnPlanned"][$value] + $engineremoval["Campaign"][$value])/($FH[$value] * $numberofengine)*1000),3) : 0)?>
    </span></div></td>
<?
	}
?> 
</tr>
  <tr>
    <th scope="row"><div align="left"><span class="style2"></span></div></th>
    <th><div align="left" class="style2">- 3 MO. RATE </div></th>
    <td><div align="center"><span class="style2"></span></div></td>
<?
	foreach ($bulan as $key => $value){
?>
    <td><div align="center"><span class="style2"><?= (!empty($FH24[$bulan12[$key+10]]) ? round((($engineremoval["Premature Basic Planned"][$bulan12[$key+10]] + $engineremoval["Premature Basic UnPlanned"][$bulan12[$key+10]] + $engineremoval["Premature NonBasic Planned"][$bulan12[$key+10]] + $engineremoval["Premature NonBasic UnPlanned"][$bulan12[$key+10]] + $engineremoval["Predefined Basic Planned"][$bulan12[$key+10]] + $engineremoval["Predefined Basic UnPlanned"][$bulan12[$key+10]] + $engineremoval["Predefined NonBasic Planned"][$bulan12[$key+10]] + $engineremoval["Predefined NonBasic UnPlanned"][$bulan12[$key+10]] + $engineremoval["Campaign"][$bulan12[$key+10]] + $engineremoval["Premature Basic Planned"][$bulan12[$key+11]] + $engineremoval["Premature Basic UnPlanned"][$bulan12[$key+11]] + $engineremoval["Premature NonBasic Planned"][$bulan12[$key+11]] + $engineremoval["Premature NonBasic UnPlanned"][$bulan12[$key+11]] + $engineremoval["Predefined Basic Planned"][$bulan12[$key+11]] + $engineremoval["Predefined Basic UnPlanned"][$bulan12[$key+11]] + $engineremoval["Predefined NonBasic Planned"][$bulan12[$key+11]] + $engineremoval["Predefined NonBasic UnPlanned"][$bulan12[$key+11]] + $engineremoval["Campaign"][$bulan12[$key+11]] + $engineremoval["Premature Basic Planned"][$bulan12[$key+12]] + $engineremoval["Premature Basic UnPlanned"][$bulan12[$key+12]] + $engineremoval["Premature NonBasic Planned"][$bulan12[$key+12]] + $engineremoval["Premature NonBasic UnPlanned"][$bulan12[$key+12]] + $engineremoval["Predefined Basic Planned"][$bulan12[$key+12]] + $engineremoval["Predefined Basic UnPlanned"][$bulan12[$key+12]] + $engineremoval["Predefined NonBasic Planned"][$bulan12[$key+12]] + $engineremoval["Predefined NonBasic UnPlanned"][$bulan12[$key+12]] + $engineremoval["Campaign"][$bulan12[$key+12]])/(($FH24[$bulan12[$key+10]] + $FH24[$bulan12[$key+11]] + $FH24[$bulan12[$key+12]]) * $numberofengine)*1000),3) : 0)?></span></div></td>
<?
	}
?>
  </tr>
  <tr>
    <th scope="row"><div align="left"><span class="style2"></span></div></th>
    <th><div align="left"><span class="style2"></span></div></th>
    <td><div align="center"><span class="style2"></span></div></td>
    <td><div align="center"><span class="style2"></span></div></td>
    <td><div align="center"><span class="style2"></span></div></td>
    <td><div align="center"><span class="style2"></span></div></td>
    <td><div align="center"><span class="style2"></span></div></td>
    <td><div align="center"><span class="style2"></span></div></td>
    <td><div align="center"><span class="style2"></span></div></td>
    <td><div align="center"><span class="style2"></span></div></td>
    <td><div align="center"><span class="style2"></span></div></td>
    <td><div align="center"><span class="style2"></span></div></td>
    <td><div align="center"><span class="style2"></span></div></td>
    <td><div align="center"><span class="style2"></span></div></td>
    <td><div align="center"><span class="style2"></span></div></td>
  </tr>
  <tr>
    <th colspan="2" scope="row"><div align="left" class="style2">TOTAL ENGINE REMOVAL </div>      </th>
    <td><div align="center"><span class="style2"><?= ($engineremovallastyear["Premature Basic Planned"] + $engineremovallastyear["Premature Basic UnPlanned"] + $engineremovallastyear["Premature NonBasic Planned"] + $engineremovallastyear["Premature NonBasic UnPlanned"] + $engineremovallastyear["Predefined Basic Planned"] + $engineremovallastyear["Predefined Basic UnPlanned"] + $engineremovallastyear["Predefined NonBasic Planned"] + $engineremovallastyear["Predefined NonBasic UnPlanned"] + $engineremovallastyear["Convenience"] + $engineremovallastyear["Campaign"])?></span></div></td>
<?
	foreach ($bulan as $key => $value){
?>
    <td><div align="center"><span class="style2">
        <?= ($engineremoval["Premature Basic Planned"][$value] + $engineremoval["Premature Basic UnPlanned"][$value] + $engineremoval["Premature NonBasic Planned"][$value] + $engineremoval["Premature NonBasic UnPlanned"][$value] + $engineremoval["Predefined Basic Planned"][$value] + $engineremoval["Predefined Basic UnPlanned"][$value] + $engineremoval["Predefined NonBasic Planned"][$value] + $engineremoval["Predefined NonBasic UnPlanned"][$value] + $engineremoval["Campaign"][$value] + $engineremoval["Convenience"][$value])?>
    </span></div></td>
<?
	}
?> 
</tr>
  <tr>
    <th scope="row"><div align="left"><span class="style2"></span></div></th>
    <th><p align="left" class="style2">- RATE</p>    </th>
    <td><div align="center"><span class="style2"><?= round((($engineremovallastyear["Premature Basic Planned"] + $engineremovallastyear["Premature Basic UnPlanned"] + $engineremovallastyear["Premature NonBasic Planned"] + $engineremovallastyear["Premature NonBasic UnPlanned"] + $engineremovallastyear["Predefined Basic Planned"] + $engineremovallastyear["Predefined Basic UnPlanned"] + $engineremovallastyear["Predefined NonBasic Planned"] + $engineremovallastyear["Predefined NonBasic UnPlanned"] + $engineremovallastyear["Convenience"] + $engineremovallastyear["Campaign"])/(array_sum($FHlastyear)*$numberofengine)*1000),3)?></span></div></td>
<?
	foreach ($bulan as $key => $value){
?>
    <td><div align="center"><span class="style2">
        <?= (!empty($FH[$value]) ? round((($engineremoval["Premature Basic Planned"][$value] + $engineremoval["Premature Basic UnPlanned"][$value] + $engineremoval["Premature NonBasic Planned"][$value] + $engineremoval["Premature NonBasic UnPlanned"][$value] + $engineremoval["Predefined Basic Planned"][$value] + $engineremoval["Predefined Basic UnPlanned"][$value] + $engineremoval["Predefined NonBasic Planned"][$value] + $engineremoval["Predefined NonBasic UnPlanned"][$value] + $engineremoval["Campaign"][$value] + $engineremoval["Convenience"][$value])/($FH[$value] * $numberofengine)*1000),3) : 0)?>
    </span></div></td>
<?
	}
?>
</tr>
  <tr>
    <th scope="row"><div align="left"><span class="style2"></span></div></th>
    <th><div align="left" class="style2">- 12 MO. RATE </div></th>
    <td><div align="center"><span class="style2"></span></div></td>
<?
	foreach ($bulan as $key => $value){
?>
    <td><div align="center"><span class="style2"><?
	$convenience = 0;$campaign = 0;$predbasplan = 0;$predbasunplan = 0;$prednonbasplan = 0;$prednonbaseunplan = 0;$prembasplan = 0;$prembasunplan = 0;$premnonbasplan = 0;$premnonbasunplan = 0;$FHengremove = 0;
	for($i=1;$i<13;$i++)
	{
		$convenience += $engineremoval["Convenience"][$bulan12[$key+$i]];
		$campaign += $engineremoval["Campaign"][$bulan12[$key+$i]];
		$predbasplan += $engineremoval["Predefined Basic Planned"][$bulan12[$key+$i]];
		$predbasunplan += $engineremoval["Predefined Basic UnPlanned"][$bulan12[$key+$i]];
		$prednonbasplan += $engineremoval["Predefined NonBasic Planned"][$bulan12[$key+$i]];
		$prednonbaseunplan += $engineremoval["Predefined NonBasic UnPlanned"][$bulan12[$key+$i]];
		$prembasplan += $engineremoval["Premature Basic Planned"][$bulan12[$key+$i]];
		$prembasunplan += $engineremoval["Premature Basic UnPlanned"][$bulan12[$key+$i]];
		$premnonbasplan += $engineremoval["Premature NonBasic Planned"][$bulan12[$key+$i]];
		$premnonbasunplan += $engineremoval["Premature NonBasic UnPlanned"][$bulan12[$key+$i]];
		$FHengremove += $FH24[$bulan12[$key+$i]] * $numberofengine;
	}
	$rate = !empty($FHengremove) ? round(($convenience + $campaign + $predbasplan + $predbasunplan + $prednonbasplan + $prednonbaseunplan + $prembasplan + $prembasunplan + $premnonbasplan + $premnonbasunplan)/$FHengremove*1000,3) : 0;
	?><?= $rate?></span></div></td>
<?
	}
?>
      </tr>
</table>
<p>&nbsp;</p>
<p>&nbsp; </p>
</body>
</html>
