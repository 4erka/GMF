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
  $page = isset($_REQUEST["page"]) ? $_REQUEST["page"] : "";

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
                window.open("eos_pdf_new.php?actype=" + escape(document.frm1.actype.value) + "&periode=" + escape(document.frm1.periode.value) + "&groupby=" + escape(document.frm1.groupby.value) + "&page=" + escape(document.frm1.page.value));
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
&nbsp&nbsp&nbsp
Page &nbsp&nbsp&nbsp
<input name="page" type="text" size="5" maxlength="10" value="<?= $page?>">

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
	$numberofengine = (($actype == "B747-400") || ($actype == "CF6-80C2")) ? 4 : 2;
	$TE = connectimesysTE();
	$FH = queryFH12($periode,$actype,12);//die(print_r($FH));
	//$bulan = array_reverse(array_keys($FH));
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
	$FHlastyear = queryFH12($periodelastyear,$actype,12);//die(print_r($FHlastyear));
	$FClastyear = queryFC12($periodelastyear,$actype,12);
	$fleetlastyear = fleet($periodelastyear,$actype);
	//die(print_r($bulan12));

	//last year
	
	$engineremovaldata = engineremoval($periode,$actype);//die(print_r($engineremovaldata));
	$engineremovallastyeardata = engineremoval12((substr($periode,0,4) - 1)."-01",$periodelastyear,$actype);
	$shopvisit = shopvisit($periode,$actype);
	$shopvisitlast = shopvisit12((substr($periode,0,4) - 1)."-01",$periodelastyear,$actype);
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
	}//die(print_r($engineremoval));

	while ($engineremovallastyeardata1 = mysql_fetch_array($engineremovallastyeardata)){
		$engineremovallastyear[$engineremovallastyeardata1["Reason"]][$engineremovallastyeardata1["periode"]] = $engineremovallastyeardata1["jumlah"];
	}

	/*while ($ifsddata1 = mysql_fetch_array($ifsddata)){
		$ifsd[$ifsddata1["periode"]] = $ifsddata1["jumlah"];
	}*/

	while ($ifsdlastyeardata1 = mysql_fetch_array($ifsdlastyeardata)){
		$ifsdlastyear[$ifsdlastyeardata1["periode"]] = $ifsdlastyeardata1["jumlah"];
	}

	while ($svdata = mysql_fetch_array($shopvisit))
	{
		$SV[$svdata['periode']] = $svdata['jumlah'];
	}

	while ($svlastdata = mysql_fetch_array($shopvisitlast))
	{
		$SVlast[$svlastdata['periode']] = $svlastdata['jumlah'];
	}//die(print_r($SVlast));
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
		$engineremoval["Basic Planned"][$v] = isset($engineremoval["Basic Planned"][$v]) ? $engineremoval["Basic Planned"][$v] : 0;
		$engineremoval["Basic UnPlanned"][$v] = isset($engineremoval["Basic UnPlanned"][$v]) ? $engineremoval["Basic UnPlanned"][$v] : 0;
		$engineremoval["Non Basic Planned"][$v] = isset($engineremoval["Non Basic Planned"][$v]) ? $engineremoval["Non Basic Planned"][$v] : 0;
		$engineremoval["Non Basic UnPlanned"][$v] = isset($engineremoval["Non Basic UnPlanned"][$v]) ? $engineremoval["Non Basic UnPlanned"][$v] : 0;
		$SV[$v] = isset($SV[$v]) ? $SV[$v] : 0;
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
		$engineremovallastyear["Basic Planned"] = isset($engineremovallastyear["Basic Planned"]) ? array_sum($engineremovallastyear["Basic Planned"]) : 0;
		$engineremovallastyear["Basic UnPlanned"] = isset($engineremovallastyear["Basic UnPlanned"]) ? array_sum($engineremovallastyear["Basic UnPlanned"]) : 0;
		$engineremovallastyear["Non Basic Planned"] = isset($engineremovallastyear["Non Basic Planned"]) ? array_sum($engineremovallastyear["Non Basic Planned"]) : 0;
		$engineremovallastyear["Non Basic UnPlanned"] = isset($engineremovallastyear["Non Basic UnPlanned"]) ? array_sum($engineremovallastyear["Non Basic UnPlanned"]) : 0;
		$SVlastdata = isset($SVlast) ? array_sum($SVlast) : 0;
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
    <th><div align="center"><span class="style2"><?= (substr($periode,0,4)-1) ?></span></div></th>
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
    <td><div align="center"><span class="style2"><?= is_array($fleetlastyear) ? round(array_sum($fleetlastyear)/12*$numberofengine,0) : 0?></span></div></td>
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
    <td><div align="center"><span class="style2"><?= is_array($FHlastyear) ? (array_sum($FHlastyear) * $numberofengine) : 0?></span></div></td>
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
    <td><div align="center"><span class="style2"><?= is_array($FClastyear) ? (array_sum($FClastyear) * $numberofengine) : 0?></span></div></td>
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
    <td><div align="center"><span class="style2"><?= is_array($FHlastyear) ? round(($ifsdlastyear/(array_sum($FHlastyear)*$numberofengine)*1000),3) : 0?></span></div></td>
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
    <td><div align="center"><span class="style2"><?= (!empty($FH24[$bulan12[$key+10]]) ? round((($ifsd[$bulan12[$key+10]] + $ifsd[$bulan12[$key+11]] + $ifsd[$bulan12[$key+12]])/(($FH24[$bulan12[$key+10]] + $FH24[$bulan12[$key+11]] + $FH24[$bulan12[$key+12]])*$numberofengine) * 1000),3) : 0)?></span></div></td>
<?
	}
?>
  </tr>
  <tr>
    <th scope="row"><div align="left"><span class="style2"></span></div></th>
    <th scope="row"><div align="left" class="style2">- 12 MO. RATE </div></th>
    <td><div align="center"><span class="style2"></span></div></td>
<?
	foreach ($bulan as $key => $value){
	
	$ifsd12 = 0; $FHeng12 = 0;
	for($i=1;$i<13;$i++)
	{
		$ifsd12 += $ifsd[$bulan12[$key+$i]];
		$FHeng12 += $FH24[$bulan12[$key+$i]];
	}
	$ifsd12rate = !empty($FHeng12) ? round($ifsd12/($FHeng12*$numberofengine)*1000,3) : 0;
?>
    <td><div align="center"><span class="style2"><?= $ifsd12rate?></span></div></td>
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
    <td><div align="center"><span class="style2"><?= is_array($FHlastyear) ? round(($rtolastyeardata/(array_sum($FHlastyear)*$numberofengine)*1000),3) : 0?></span></div></td>
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
    <th scope="row"><div align="left" class="style2">- 12 MO. RATE </div></th>
    <td><div align="center"><span class="style2"></span></div></td>
<?
	foreach ($bulan as $key => $value){
	
	$rtodat12 = 0; $FHeng12 = 0;
	for($i=1;$i<13;$i++)
	{
		$rtodat12 += $rtodat[$bulan12[$key+$i]];
		$FHeng12 += $FH24[$bulan12[$key+$i]];
	}
	$rtodat12rate = !empty($FHeng12) ? round($rtodat12/$FHeng12*1000,3) : 0;
?>
    <td><div align="center"><span class="style2"><?= $rtodat12rate?></span></div></td>
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
    <th colspan="2" scope="row"><div align="left" class="style2">BASIC PLANNED ENGINE REMOVAL</div>      </th>
    <td><div align="center"><span class="style2"><?= $engineremovallastyear["Basic Planned"]?></span></div></td>
<?
	foreach ($bulan as $key => $value){
?>
    <td><div align="center"><span class="style2">
        <?= $engineremoval["Basic Planned"][$value]?>
    </span></div></td>
<?
	}
?>
  </tr>
  <tr>
    <th colspan="2" scope="row"><div align="left" class="style2">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp UNPLANNED ENGINE REMOVAL</div>      </th>
    <td><div align="center"><span class="style2"><?= $engineremovallastyear["Basic UnPlanned"]?></span></div></td>
<?
	foreach ($bulan as $key => $value){
?>
    <td><div align="center"><span class="style2">
        <?= $engineremoval["Basic UnPlanned"][$value]?>
    </span></div></td>
<?
	}
?>
  </tr>
  <tr>
    <th colspan="2" scope="row"><div align="left" class="style2">NONBASIC PLANNED ENGINE REMOVAL</div>      </th>
    <td><div align="center"><span class="style2"><?= $engineremovallastyear["Non Basic Planned"]?></span></div></td>
<?
	foreach ($bulan as $key => $value){
?>
    <td><div align="center"><span class="style2">
        <?= $engineremoval["Non Basic Planned"][$value]?>
    </span></div></td>
<?
	}
?>
  </tr>
  <tr>
    <th colspan="2" scope="row"><div align="left" class="style2">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspPLANNED ENGINE REMOVAL</div>      </th>
    <td><div align="center"><span class="style2"><?= $engineremovallastyear["Non Basic UnPlanned"]?></span></div></td>
<?
	foreach ($bulan as $key => $value){
?>
    <td><div align="center"><span class="style2">
        <?= $engineremoval["Non Basic UnPlanned"][$value]?>
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
    <th colspan="2" scope="row"><div align="left" class="style2">TOTAL UNPLANNED ENGINE REMOVAL </div>      </th>
    <td><div align="center"><span class="style2"><?= ($engineremovallastyear["Non Basic UnPlanned"] + $engineremovallastyear["Basic UnPlanned"])?></span></div></td>
<?
	foreach ($bulan as $key => $value){
?>
    <td><div align="center"><span class="style2">
        <?= ($engineremoval["Basic UnPlanned"][$value] + $engineremoval["Non Basic UnPlanned"][$value])?>
    </span></div></td>
<?
	}
?> 
  </tr>
  <tr>
    <th scope="row"><div align="left"><span class="style2"></span></div></th>
    <th><div align="left" class="style2">- UER RATE </div></th>
    <td><div align="center"><span class="style2"><?= (is_array($FHlastyear)) ? round(($engineremovallastyear["Non Basic UnPlanned"] + $engineremovallastyear["Basic UnPlanned"])/(array_sum($FHlastyear) * $numberofengine)*1000,3) : ""?></span></div></td>
<?
	foreach ($bulan as $key => $value){
?>
    <td><div align="center"><span class="style2">
        <?= (!empty($FH[$value]) ? round((($engineremoval["Basic UnPlanned"][$value] + $engineremoval["NonBasic UnPlanned"][$value])/($FH[$value] * $numberofengine)*1000),3) : 0)?>
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
    <td><div align="center"><span class="style2"><?= (!empty($FH24[$bulan12[$key+10]]) ? round((($engineremoval["Basic UnPlanned"][$bulan12[$key+10]] + $engineremoval["Non Basic UnPlanned"][$bulan12[$key+10]] + $engineremoval["Basic UnPlanned"][$bulan12[$key+11]] + $engineremoval["Non Basic UnPlanned"][$bulan12[$key+11]] + $engineremoval["Basic UnPlanned"][$bulan12[$key+12]] + $engineremoval["Non Basic UnPlanned"][$bulan12[$key+12]])/(($FH24[$bulan12[$key+10]] + $FH24[$bulan12[$key+11]] + $FH24[$bulan12[$key+12]]) * $numberofengine)*1000),3) : 0)?></span></div></td>
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
		$predbasunplan += $engineremoval["Basic UnPlanned"][$bulan12[$key+$i]];
		$prednonbaseunplan += $engineremoval["Non Basic UnPlanned"][$bulan12[$key+$i]];
		//$prembasunplan += $engineremoval["Premature Basic UnPlanned"][$bulan12[$key+$i]];
		//$premnonbasunplan += $engineremoval["Premature NonBasic UnPlanned"][$bulan12[$key+$i]];
		$FHengremove += $FH24[$bulan12[$key+$i]] * $numberofengine;
	}
	$uer12rate = !empty($FHengremove) ? round(($predbasunplan + $prednonbaseunplan)/$FHengremove*1000,3) : 0;
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
    <th colspan="2" scope="row"><div align="left" class="style2">TOTAL SHOP VISIT </div>      </th>
    <td><div align="center"><span class="style2"><?= $SVlastdata?></span></div></td>
<?
	foreach ($bulan as $key => $value){
?>
    <td><div align="center"><span class="style2">
        <?= $SV[$value]?>
    </span></div></td>
<?
	}
?>   </tr>
  <tr>
    <th scope="row"><div align="left"><span class="style2"></span></div></th>
    <th><div align="left" class="style2">- RATE </div></th>
    <td><div align="center"><span class="style2"><?= (is_array($FHlastyear) <> 0) ? round((($SVlastdata)/(array_sum($FHlastyear)*$numberofengine)*1000),3) : ""?></span></div></td>
<?
	foreach ($bulan as $key => $value){
?>
    <td><div align="center"><span class="style2">
        <?= (!empty($FH[$value]) ? round((($SV[$value])/($FH[$value] * $numberofengine)*1000),3) : 0)?>
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
    <td><div align="center"><span class="style2"><?= (!empty($FH24[$bulan12[$key+10]]) ? round((($SV[$bulan12[$key+10]] + $SV[$bulan12[$key+11]] +  $SV[$bulan12[$key+12]])/(($FH24[$bulan12[$key+10]] + $FH24[$bulan12[$key+11]] + $FH24[$bulan12[$key+12]]) * $numberofengine)*1000),3) : 0)?></span></div></td>
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
    <th colspan="2" scope="row"><div align="left" class="style2">TOTAL ENGINE REMOVAL </div>      </th>
    <td><div align="center"><span class="style2"><?= ($engineremovallastyear["Basic Planned"] + $engineremovallastyear["Basic UnPlanned"] + $engineremovallastyear["Non Basic Planned"] + $engineremovallastyear["Non Basic UnPlanned"])?></span></div></td>
<?
	foreach ($bulan as $key => $value){
?>
    <td><div align="center"><span class="style2">
        <?= ($engineremoval["Basic Planned"][$value] + $engineremoval["Basic UnPlanned"][$value] + $engineremoval["Non Basic Planned"][$value] + $engineremoval["Non Basic UnPlanned"][$value])?>
    </span></div></td>
<?
	}
?> 
</tr>
  <tr>
    <th scope="row"><div align="left"><span class="style2"></span></div></th>
    <th><p align="left" class="style2">- RATE</p>    </th>
    <td><div align="center"><span class="style2"><?= (is_array($FHlastyear) <> 0) ? round((($engineremovallastyear["Basic Planned"] + $engineremovallastyear["Basic UnPlanned"] + $engineremovallastyear["Non Basic Planned"] + $engineremovallastyear["Non Basic UnPlanned"])/(array_sum($FHlastyear)*$numberofengine)*1000),3) : ""?></span></div></td>
<?
	foreach ($bulan as $key => $value){
?>
    <td><div align="center"><span class="style2">
        <?= (!empty($FH[$value]) ? round((($engineremoval["Basic Planned"][$value] + $engineremoval["Basic UnPlanned"][$value] + $engineremoval["Non Basic Planned"][$value] + $engineremoval["Non Basic UnPlanned"][$value])/($FH[$value] * $numberofengine)*1000),3) : 0)?>
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
		$predbasplan += $engineremoval["Basic Planned"][$bulan12[$key+$i]];
		$predbasunplan += $engineremoval["Basic UnPlanned"][$bulan12[$key+$i]];
		$prednonbasplan += $engineremoval["Non Basic Planned"][$bulan12[$key+$i]];
		$prednonbaseunplan += $engineremoval["Non Basic UnPlanned"][$bulan12[$key+$i]];
		$FHengremove += $FH24[$bulan12[$key+$i]];
	}
	$rate = !empty($FHengremove) ? round(($predbasplan + $predbasunplan + $prednonbasplan + $prednonbaseunplan)/($FHengremove * $numberofengine)*1000,3) : 0;
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
