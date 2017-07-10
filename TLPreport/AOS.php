<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<style type="text/css">
.style1 {
	font-size: 30px;
	font-weight: bold;
}
.style3 {font-size: 12px}
.style5 {font-size: 12px; font-family: Arial, Helvetica, sans-serif; }
.style6 {font-family: Arial, Helvetica, sans-serif}
</style>

<?
  include("function.php");
  $periode = isset($_REQUEST["periode"]) ? $_REQUEST["periode"] : "";
  $actype = isset($_REQUEST["actype"]) ? $_REQUEST["actype"] : "";
  $page = isset($_REQUEST["page"]) ? $_REQUEST["page"] : "";

  $TE = connectimesysTE();
	echo "INI ISI TE: ";;
	print_r($TE);
  $arractype = selectactype();
  $arrperiode = selectperiode();
  //die(print_r($arractype));
?>
</head>

<body>
<script language="javascript">
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
                window.open("AOS_excel.php?actype=" + escape(document.frm1.actype.value) + "&periode=" + escape(document.frm1.periode.value));
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
                window.open("functionpdf.php?actype=" + escape(document.frm1.actype.value) + "&periode=" + escape(document.frm1.periode.value) + "&page=" + escape(document.frm1.page.value));
        }
  }
</script>
<p align="center" class="style1">Aircraft Operation Summary</p>
<p><form name="frm1" method="get">
Periode (yyyy-mm)&nbsp&nbsp&nbsp
<?//cara panggil dropdownlist
cmbbox("periode",$arrperiode,$periode,'',1);
?>&nbsp&nbsp&nbsp
  Aircraft Type &nbsp&nbsp&nbsp
<?
cmbbox("actype",$arractype,$actype,'',1);
?>&nbsp&nbsp&nbsp
Page &nbsp&nbsp&nbsp
<input name="page" type="text" size="5" maxlength="10" value="<?= $page?>">&nbsp&nbsp&nbsp
  <input type="submit" value="Display Report" onClick="display_report()">
  <input type="submit" value="Excel" onClick="export_excel()">
  <input type="submit" value="PDF" onClick="export_pdf()">

</form></p>
<?php
	if (($periode == "") OR ($actype == "")){
		echo "<p>";
		die("Please Insert Periode & AC Type");
		echo "</p>";
  }

	echo $periode."\n";echo $actype."\n";
	$FH = queryFH12($periode,$actype,12);
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
	//die(print_r($bulan));
	//$bulan = array_reverse(array_keys($FH));
	$FHrev = queryFH12rev($periode,$actype);
	$FC = queryFC12($periode,$actype,12);
	$FCrev = queryFC12rev($periode,$actype);
	$fleet = fleet($periode,$actype);
	$available = available($bulan[0],$bulan[11],$actype);
	//print_r($available);

	//last year
	$periodelastyear = (substr($periode,0,4) - 1)."-12";
	$FHlastyear = queryFH12($periodelastyear,$actype,12);
	$FHrevlastyear = queryFH12rev($periodelastyear,$actype);
	$FClastyear = queryFC12($periodelastyear,$actype,12);
	$FCrevlastyear = queryFC12rev($periodelastyear,$actype);//die(print_r(array_sum($FCrevlastyear)));
	$fleetlastyear = fleet($periodelastyear,$actype);
	$availablelastyear = available((substr($periode,0,4) - 1)."-01",(substr($periode,0,4) - 1)."-12",$actype);

	$delay = ATAdelay($bulan[0],$bulan[11],$actype);//die(print_r($delay));
	if (is_array($delay)) {
	foreach($delay as $k => $v){
		foreach($v as $key => $value){
			$ATA[$key] = $value;
		}
		$jumlah = array_sum($v);
		$techdelay[$k] = $jumlah;
	}
	}
	//die(print_r($techdelay));
	$delaydurationmenit = delayduration($bulan[0],$bulan[11],$actype);
	if (is_array($delaydurationmenit)) {
	foreach ($delaydurationmenit as $key => $value){
		$delayduration[$key] = (($value - ($value % 60))/60)." : ".substr("0".($value % 60),-2,2);
	}
	}

	$cancellastyeardata = querycancel((substr($periode,0,4) - 1)."-01",(substr($periode,0,4) - 1)."-12",$actype);
	$cancel = querycancel($bulan[0],$bulan[11],$actype);//die(print_r($cancel));
	$cancellastyear = ($cancellastyeardata <> "") ? array_sum($cancellastyeardata) : 0;


	//last year
	$delaylastyear = ATAdelay((substr($periode,0,4) - 1)."-01",(substr($periode,0,4) - 1)."-12",$actype);
	if (is_array($delaylastyear)) {
	foreach($delaylastyear as $k => $v){
		foreach($v as $key => $value){
			$ATA[$key] = $value;
		}
		$jumlah = array_sum($v);
		$techdelaylastyear[$k] = $jumlah;
	}
	} else {
		$techdelaylastyear[0] = 0;
	}
	$delaydurationmenitlastyear = delayduration((substr($periode,0,4) - 1)."-01",(substr($periode,0,4) - 1)."-12",$actype);
	if (is_array($delaydurationmenitlastyear)) {
	foreach ($delaydurationmenitlastyear as $key => $value){
		$delaydurationlastyear[$key] = (($value - ($value % 60))/60)." : ".($value % 60);
	}
	}

	if ($actype == "B737-Classic") {
		$qryline = "`tbl_sdr`.`ACTYPE` IN ('B737-300','B737-400','B737-500','B737-CL')";
	} else if ($actype == "B737-Classic GA") {
		$qryline = "`tbl_sdr`.`ACTYPE` IN ('B737-300','B737-400','B737-500')";
	} else if ($actype == "A330") {
		$qryline = "`tbl_sdr`.`ACTYPE` IN ('A330-200','A330-300')";
	} else if ($actype == "B737-800-E") {
		$qryline = "`tbl_sdr`.`Reg` Like 'PK-GE%'";
	} else if ($actype == "B737-800-M") {
		$qryline = "(`tbl_sdr`.`Reg` Like 'PK-GM%' or `tbl_sdr`.`Reg` Like 'PK-GF%')";
	} else {
		$qryline = "`tbl_sdr`.`ACTYPE` IN ('$actype')";
	}

	$qryincident = "SELECT Count(`tbl_sdr`.`ACTYPE`) AS `jumlah`, DATE_FORMAT(`tbl_sdr`.`DateOccur`,'%Y-%m') AS `bulan` FROM `tbl_sdr` WHERE ".$qryline." AND (DATE_FORMAT(`tbl_sdr`.`DateOccur`,'%Y-%m') BETWEEN '".$bulan[0]."' AND '".$bulan[11]."') GROUP BY DATE_FORMAT(`tbl_sdr`.`DateOccur`,'%Y-%m')";
	$resultincident = mysql_query($qryincident);
	//die($qryFH);
	while ($hasilincident = mysql_fetch_array($resultincident))
	{
		$incident[$hasilincident["bulan"]] = $hasilincident["jumlah"];
	}

	$qryincidentlastyear = "SELECT Count(`tbl_sdr`.`ACTYPE`) AS `jumlah`, DATE_FORMAT(`tbl_sdr`.`DateOccur`,'%Y-%m') AS `bulan` FROM `tbl_sdr` WHERE ".$qryline." AND (DATE_FORMAT(`tbl_sdr`.`DateOccur`,'%Y-%m') BETWEEN '".(substr($periode,0,4) - 1)."-01' AND '".(substr($periode,0,4) - 1)."-12') GROUP BY DATE_FORMAT(`tbl_sdr`.`DateOccur`,'%Y-%m')";
	$resultincident = mysql_query($qryincidentlastyear);
	//die($qryFH);
	while ($hasilincident = mysql_fetch_array($resultincident))
	{
		$incidentlastyear[$hasilincident["bulan"]] = $hasilincident["jumlah"];
	}


	foreach ($bulan as $k => $v){
		$incident[$v] = isset($incident[$v]) ? $incident[$v] : 0;
		$incidentlastyear[$v] = isset($incidentlastyear[$v]) ? $incidentlastyear[$v] : 0;
	}
	$jumlahincident = array_sum($incident);
	$jumlahincidentlastyear = array_sum($incidentlastyear);

	//perihal pembeda TIA rate, apakah untuk citilink / garuda
	if ($actype == "B737-Classic") {
		$textrate = "- Rate /1000 FH ";
	}
	else if ($actype == "A320-200") {
		$textrate = "- Rate /1000 FH ";
	}
	else if ($actype == "B737-CL") {
		$textrate = "- Rate /1000 FH ";
	}
	else if ($actype == "B737-500") {
		$textrate = "- Rate /1000 FH ";
	}
	else {
		$textrate = "- Rate /100 FC ";
	}


?>
<table width="100%"  border="1" bordercolor="#0033FF">
  <tr align="center" bordercolor="#CC0000" bgcolor="#00FFFF">
    <th scope="col">&nbsp;</th>
    <th scope="col"><span class="style5">
      <?= (substr($periode,0,4) - 1)?>
    </span></th>
	<?
	foreach ($bulan as $key => $value){
		$techdelay[$value] = isset($techdelay[$value]) ? $techdelay[$value] : 0;
		$delayduration[$value] = isset($delayduration[$value]) ? $delayduration[$value] : 0;
		$avgduration[$value] = isset($delaydurationmenit[$value]) ? round($delaydurationmenit[$value] / $techdelay[$value],0) : 0;
		$avgduration[$value] = round(($avgduration[$value] - ($avgduration[$value] % 60))/60)." : ".substr("0".($avgduration[$value] % 60),-2,2);
		$avgduration[$value] = isset($avgduration[$value]) ? $avgduration[$value] : 0;
		$delayrate[$value] = ($FCrev[$value] == 0) ? 0 : $techdelay[$value] / $FCrev[$value] * 100;
		$delayratelastyear = (isset($FCrevlastyear) <> 0) ? (array_sum($techdelaylastyear) / array_sum($FCrevlastyear) * 100) : 0;
		$tiarateFC[$value] = (isset($FCrev[$value]) == 0) ? 0 : $incident[$value]/$FCrev[$value]*100;
		$tiaratelastyearFC = (isset($FCrevlastyear) <> 0) ? (array_sum($incidentlastyear) / array_sum($FCrevlastyear) * 100) : 0;
		$tiarate12monthFC = (isset($FCrev[$value]) == 0) ? 0 : (array_sum($incident)/array_sum($FCrev)*100);
		$tiarateFH[$value] = (isset($FHrev[$value]) == 0) ? 0 : $incident[$value]/$FHrev[$value]*1000;
		$tiaratelastyearFH = (isset($FHrevlastyear) <> 0) ? (array_sum($incidentlastyear) / array_sum($FHrevlastyear) * 1000) : 0;
		$tiarate12monthFH = (isset($FHrev[$value]) == 0) ? 0 : (array_sum($incident)/array_sum($FHrev)*1000);
		$cancel[$value] = isset($cancel[$value]) ? $cancel[$value] : 0;
		//$incident[$value] = isset($incident[$value]) ? $incident[$value] : 0;
		//$incidentlastyear = array_sum($incidentlastyear);
		//$incidentlastyear = isset($incidentlastyear) ? $incidentlastyear : 0;
			//perihal pembeda TIA rate, apakah untuk citilink / garuda
	if ($actype == "B737-Classic") {
		$tiarate[$value] = $tiarateFH[$value];
	}
	else if ($actype == "A320-200") {
		$tiarate[$value] = $tiarateFH[$value];
	}
	else if ($actype == "B737-CL") {
		$tiarate[$value] = $tiarateFH[$value];
	}
	else if ($actype == "B737-500") {
		$tiarate[$value] = $tiarateFH[$value];
	}
	else {
		$tiarate[$value] = $tiarateFC[$value];
	}

	//perihal TIA Rate Last Year
	if ($actype == "B737-Classic") {
		$tiaratelastyear = $tiaratelastyearFH;
	}
	else if ($actype == "A320-200") {
		$tiaratelastyear = $tiaratelastyearFH;
	}
	else if ($actype == "B737-CL") {
		$tiaratelastyear = $tiaratelastyearFH;
	}
	else if ($actype == "B737-500") {
		$tiaratelastyear = $tiaratelastyearFH;
	}
	else {
		$tiaratelastyear = $tiaratelastyearFC;
	}

	//perihal TIA Rate 12 MONTH
	if ($actype == "B737-Classic") {
		$tiarate12month = $tiarate12monthFH;
	}
	else if ($actype == "A320-200") {
		$tiarate12month = $tiarate12monthFH;
	}
	else if ($actype == "B737-CL") {
		$tiarate12month = $tiarate12monthFH;
	}
	else if ($actype == "B737-500") {
		$tiarate12month = $tiarate12monthFH;
	}
	else {
		$tiarate12month = $tiarate12monthFC;
	}
	?>
    <th scope="col"><span class="style5">
      <?= bulan($value)?>
    </span></th>
	<?
		}
	?>
    <th scope="col"><span class="style5">Last 12 Month </span></th>
  </tr>
  <tr align="center" bordercolor="#CC0000">
    <th scope="row"><span class="style5">A/C In Fleet </span></th>
    <td><div align="center" class="style3 style6"><?= isset($fleetlastyear) ? round(array_sum($fleetlastyear)/12,0) : 0?></div></td>
    <?
		foreach ($bulan as $key => $value){
	?>
	<td><div align="center" class="style5"><?= isset($fleet[$value]) ? $fleet[$value] : 0?></div></td>
	<?
		}
	?>
    <td><div align="center" class="style5"><?= round(array_sum($fleet)/12,0)?></div></td>
  </tr>
  <tr align="center" bordercolor="#CC0000">
    <th scope="row"><span class="style5">A/C In Service (Revenue) </span></th>
    <td><div align="center" class="style5"><?= isset($availablelastyear) ? round(array_sum($availablelastyear)/365,2) : 0?></div></td>
    <?
		foreach ($bulan as $key => $value){
	?>
	<td><div align="center" class="style5"><?= round($available[$value]/jumlahbulan($value),2)?></div></td>
	<?
		}
	?>
    <td><div align="center" class="style5"><?= round(array_sum($available)/365,2)?></div></td>
  </tr>
  <tr align="center" bordercolor="#CC0000">
    <th scope="row"><span class="style5">A/C Days In Service (Revenue) </span></th>
    <td><div align="center" class="style5"><?= isset($availablelastyear) ? array_sum($availablelastyear) : 0?></div></td>
    <?
		foreach ($bulan as $key => $value){
	?>
    <td><div align="center" class="style5"><?= isset($available[$value]) ? $available[$value] : 0?></div></td>
	<?
		}
	?>
    <td><div align="center" class="style5"><?= array_sum($available)?></div></td>
  </tr>
  <tr align="center" bordercolor="#CC0000">
    <th scope="row"><span class="style5">Flying Hours - Total </span></th>
	<td><div align="center" class="style5"><?= isset($FHlastyear) ? array_sum($FHlastyear) : 0?></div></td>
	<?	$FHsum = 0;
		foreach ($bulan as $key => $value){
	?>
    <td><div align="center" class="style5"><?= isset($FH[$value]) ? $FH[$value] : 0?></div></td>
	<?
		$FHsum += $FH[$value];
		}
	?>
	<td><div align="center" class="style5"><?= $FHsum?></div></td>
  </tr>
  <tr align="center" bordercolor="#CC0000">
    <th scope="row"><span class="style5">- Revenue</span></th>
    <td><div align="center" class="style5"><?= isset($FHrevlastyear) ? array_sum($FHrevlastyear) : 0?></div></td>
    <?	$FHsumrev = 0;
		foreach ($bulan as $key => $value){
	?>
    <td><div align="center" class="style5"><?= isset($FHrev[$value]) ? $FHrev[$value] : 0?></div></td>
	<?
		$FHsumrev += $FHrev[$value];
		}
	?>
	<td><div align="center" class="style5"><?= $FHsumrev?></div></td>
  </tr>
  <tr align="center" bordercolor="#CC0000">
    <th scope="row"><span class="style5">Take Off - Total </span></th>
	<td><div align="center" class="style5"><?= isset($FClastyear) ? array_sum($FClastyear) : 0?></div></td>
	<?	$FCsum = 0;
		foreach ($bulan as $key => $value){
	?>
    <td><div align="center" class="style5"><?= isset($FC[$value]) ? $FC[$value] : 0?></div></td>
	<?
		$FCsum += $FC[$value];
		}
	?>
	<td><div align="center" class="style5"><?= $FCsum?></div></td>
  </tr>
  <tr align="center" bordercolor="#CC0000">
    <th scope="row"><span class="style5">- Revenue </span></th>
    <td><div align="center" class="style5"><?= isset($FCrevlastyear) ? array_sum($FCrevlastyear) : 0?></div></td>
    <?	$FCsumrev = 0;
		foreach ($bulan as $key => $value){
	?>
    <td><div align="center" class="style5"><?= isset($FCrev[$value]) ? $FCrev[$value] : 0?></div></td>
	<?
		$FCsumrev += $FCrev[$value];
		}
	?>
	<td><div align="center" class="style5"><?= $FCsumrev?></div></td>
  </tr>
  <tr align="center" bordercolor="#CC0000">
    <th scope="row"><span class="style5">Flight Hour Per Take Off - Total </span></th>
    <td><div align="center" class="style5"><?= isset($FClastyear) ? ((array_sum($FHlastyear) - (array_sum($FHlastyear) % array_sum($FClastyear)))/array_sum($FClastyear))." : ".substr("0".(round(((array_sum($FHlastyear) % array_sum($FClastyear))/array_sum($FClastyear)*60),0)),-2,2) : 0?></div></td>
	<?
		foreach ($bulan as $key => $value){
			$FHperFC[$value] = ($FC[$value] != 0) ? (($FH[$value] - ($FH[$value] % $FC[$value]))/$FC[$value])." : ".substr("0".round((($FH[$value] % $FC[$value])/$FC[$value]*60),0),-2,2) : 0;
	?>
    <td><div align="center" class="style5"><?= $FHperFC[$value]?></div></td>
    <?
		}
	?>
    <td><div align="center" class="style5"><?= (array_sum($FH) - (array_sum($FH) % array_sum($FC)))/array_sum($FC)." : ".substr("0".round(((array_sum($FH) % array_sum($FC))/array_sum($FC)*60),0),-2,2)?></div></td>
  </tr>
  <tr align="center" bordercolor="#CC0000">
    <th scope="row"><span class="style5">- Revenue </span></th>
    <td><div align="center" class="style5"><?= isset($FCrevlastyear) ? ((array_sum($FHrevlastyear) - (array_sum($FHrevlastyear) % array_sum($FCrevlastyear)))/array_sum($FCrevlastyear))." : ".substr("0".round(((array_sum($FHrevlastyear) % array_sum($FCrevlastyear))/array_sum($FCrevlastyear)*60),0),-2,2) : 0?></div></td>
    <?
		foreach ($bulan as $key => $value){
		$FHperFC[$value] = ($FCrev[$value] != 0) ? (($FHrev[$value] - ($FHrev[$value] % $FCrev[$value]))/$FCrev[$value])." : ".substr("0".round((($FHrev[$value] % $FCrev[$value])/$FCrev[$value]*60),0),-2,2) : 0;
	?>
    <td><div align="center" class="style5"><?= $FHperFC[$value]?></div></td>
    <?
		}
	?>
    <td><div align="center" class="style5"><?= (array_sum($FHrev) - (array_sum($FHrev) % array_sum($FCrev)))/array_sum($FCrev)." : ".substr("0".round(((array_sum($FHrev) % array_sum($FCrev))/array_sum($FCrev)*60),0),-2,2)?></div></td>
  </tr>
  <tr align="center" bordercolor="#CC0000">
    <th scope="row"><span class="style5">Daily Utiliz - Total FH </span></th>
    <td><div align="center" class="style5"><?= isset($availablelastyear) ? ((array_sum($FHlastyear)-(array_sum($FHlastyear)%array_sum($availablelastyear)))/array_sum($availablelastyear))." : ".substr("0".round(((array_sum($FHlastyear)%array_sum($availablelastyear))/array_sum($availablelastyear)*60),0),-2,2) : 0?></div></td>
    <?
		foreach ($bulan as $key => $value){
		$dailyutil[$value] = ($available[$value] != 0) ? (($FH[$value]-($FH[$value]%$available[$value]))/$available[$value])." : ".substr("0".round((($FH[$value]%$available[$value])/$available[$value]*60),0),-2,2) : 0;
	?>
    <td><div align="center" class="style5"><?= $dailyutil[$value]?></div></td>
	<?
		}
	?>
    <td><div align="center" class="style5"><?= ((array_sum($FH)-(array_sum($FH)%array_sum($available)))/array_sum($available))." : ".substr("0".round(((array_sum($FH)%array_sum($available))/array_sum($available)*60),0),-2,2)?></div></td>
  </tr>
  <tr align="center" bordercolor="#CC0000">
    <th scope="row"><span class="style5">- Revenue FH </span></th>
    <td><div align="center" class="style5"><?= isset($availablelastyear) ? ((array_sum($FHrevlastyear)-(array_sum($FHrevlastyear)%array_sum($availablelastyear)))/array_sum($availablelastyear))." : ".substr("0".round(((array_sum($FHrevlastyear)%array_sum($availablelastyear))/array_sum($availablelastyear)*60),0),-2,2) : 0?></div></td>
    <?
		foreach ($bulan as $key => $value){
			$dailyutilrev[$value] = ($available[$value] != 0) ? (($FHrev[$value]-($FHrev[$value]%$available[$value]))/$available[$value])." : ".substr("0".round((($FHrev[$value]%$available[$value])/$available[$value]*60),0),-2,2) : 0;
	?>
    <td><div align="center" class="style5"><?= $dailyutilrev[$value]?></div></td>
	<?
		}
	?>
    <td><div align="center" class="style5"><?= ((array_sum($FHrev)-(array_sum($FHrev)%array_sum($available)))/array_sum($available))." : ".substr("0".round(((array_sum($FHrev)%array_sum($available))/array_sum($available)*60),0),-2,2)?></div></td>
  </tr>
  <tr align="center" bordercolor="#CC0000">
    <th scope="row"><span class="style5">- Total FC </span></th>
    <td><div align="center" class="style5"><?= isset($availablelastyear) ? round(array_sum($FClastyear)/array_sum($availablelastyear),2) : 0?></div></td>
    <?
		foreach ($bulan as $key => $value){
			$totalfc[$value] = ($available[$value]) ? round($FC[$value]/$available[$value],2) : 0;
	?>
    <td><div align="center" class="style5"><?= $totalfc[$value]?></div></td>
	<?
		}
	?>
    <td><div align="center" class="style5"><?= round(array_sum($FC)/array_sum($available),2)?></div></td>
  </tr>
  <tr align="center" bordercolor="#CC0000">
    <th scope="row"><span class="style5">- Revenue FC </span></th>
    <td><div align="center" class="style5"><?= isset($availablelastyear) ? round(array_sum($FCrevlastyear)/array_sum($availablelastyear),2) : 0?></div></td>
    <?
		foreach ($bulan as $key => $value){
			$revfc[$value] = ($available[$value] != 0) ? round($FCrev[$value]/$available[$value],2) : 0;
	?>
    <td><div align="center" class="style5"><?= $revfc[$value]?></div></td>
	<?
		}
	?>
    <td><div align="center" class="style5"><?= round(array_sum($FCrev)/array_sum($available),2)?></div></td>
  </tr>
  <tr align="center" bordercolor="#CC0000">
    <th scope="row"><span class="style5">Tech Delay - Total</span></th>
    <td><div align="center" class="style5"><?= array_sum($techdelaylastyear)?></div></td>
	<?
		foreach ($bulan as $key => $value){
	?>
    <td><div align="center" class="style5"><?= $techdelay[$value]?></div></td>
	<?
		}
	?>
    <td><div align="center" class="style5"><?= array_sum($techdelay)?></div></td>
  </tr>
  <tr align="center" bordercolor="#CC0000">
    <th scope="row"><span class="style5">- Tot Duration </span></th>
    <td><div align="center" class="style5"><?= (count($delaydurationmenitlastyear) > 1) ? round(array_sum($delaydurationmenitlastyear)/60,0)." : ".substr("0".(array_sum($delaydurationmenitlastyear) % 60),-2,2) : 0?></div></td>
	<?
		foreach ($bulan as $key => $value){
	?>
    <td><div align="center" class="style5"><?= $delayduration[$value]?></div></td>
	<?
		}
	?>
    <td><div align="center" class="style5"><?= round(array_sum($delaydurationmenit)/60,0)." : ".substr("0".(array_sum($delaydurationmenit) % 60),-2,2)?></div></td>
  </tr>
  <tr align="center" bordercolor="#CC0000">
    <th scope="row"><span class="style5">- Avg Duration</span></th>
    <td><div align="center" class="style5"><?= (count($techdelaylastyear) > 1) ? round(array_sum($delaydurationmenitlastyear)/array_sum($techdelaylastyear)/60,0)." : ".substr("0".((array_sum($delaydurationmenitlastyear)/array_sum($techdelaylastyear)) % 60),-2,2) : 0?></div></td>
    <?
		foreach ($bulan as $key => $value){
	?>
	<td><div align="center" class="style5"><?= $avgduration[$value]?></div></td>
	<?
		}
	?>
    <td><div align="center" class="style5"><?= round(array_sum($delaydurationmenit)/array_sum($techdelay)/60,0)." : ".substr("0".((array_sum($delaydurationmenit)/array_sum($techdelay)) % 60),-2,2)?></div></td>
  </tr>
  <tr align="center" bordercolor="#CC0000">
    <th scope="row"><span class="style5">- Rate/100 Take-Off</span></th>
    <td><div align="center" class="style5"><?= round($delayratelastyear,2)?></div></td>
    <?
		foreach ($bulan as $key => $value){
	?>
	<td><div align="center" class="style5"><?= round($delayrate[$value],2)?></div></td>
    <?
		}
	?>
    <td><div align="center" class="style5"><?= round(array_sum($delayrate),2)?></div></td>
  </tr>
  <tr align="center" bordercolor="#CC0000">
    <th scope="row"><span class="style5">Technical Incident - Total </span></th>
    <td><div align="center" class="style5"><?= $jumlahincidentlastyear?></div></td>
	 <?
		foreach ($bulan as $key => $value){
	?>
    <td><div align="center" class="style5"><?= $incident[$value]?></div></td>
    <?
		}
	?>
    <td><div align="center" class="style5"><?= array_sum($incident)?></div></td>
  </tr>
  <tr align="center" bordercolor="#CC0000">

	<th scope="row"><span class="style5"><?= $textrate?></span></th>
    <td><div align="center" class="style5"><?= round($tiaratelastyear,2) ?></div></td>
	<?
		// sebenarnya ini ga kepake sih, karena yang di print toh kan yang tiarate
		// rumus dan logic nya tiarate ada di atas, hehe
		foreach ($bulan as $key => $value){
			$inci[$value] = ($FC[$value]) ? round($incident[$value]/$FC[$value]*100,2) : 0;
	?>
   <td><div align="center" class="style5"><?= round($tiarate[$value],2)?></div></td>
    <?
		}
	?>
    <td><div align="center" class="style5"><?= round($tiarate12month,2)?></div></td>
  </tr>
  <tr align="center" bordercolor="#CC0000">
    <th scope="row"><span class="style5">Technical Cancellation </span></th>
    <td><div align="center" class="style5"><?= $cancellastyear?></div></td>
    <?
		foreach ($bulan as $key => $value){
	?>
    <td><div align="center" class="style5"><?= $cancel[$value]?></div></td>
	<?
		}
	?>
    <td><div align="center" class="style5"><?= array_sum($cancel)?></div></td>
  </tr>
  <tr align="center" bordercolor="#CC0000">
    <th scope="row"><span class="style5">Dispatch Reliability (%) </span></th>
    <td><div align="center" class="style5"><?= isset($FCrevlastyear) ? round((array_sum($FCrevlastyear) - array_sum($techdelaylastyear) - $cancellastyear)/array_sum($FCrevlastyear) * 100,2) : 0 ?></div></td>
    <?
		foreach ($bulan as $key => $value){
			$dis[$value] = ($FCrev[$value]) ? round(($FCrev[$value] - $techdelay[$value] - $cancel[$value])/$FCrev[$value] * 100,2) : 0;
	?>
    <td><div align="center" class="style5"><?= $dis[$value]?></div></td>
	<?
		}
	?>
    <td><div align="center" class="style5"><?= round((array_sum($FCrev) - array_sum($techdelay) - array_sum($cancel))/array_sum($FCrev) * 100,2) ?></div></td>
  </tr>
</table>
</body>
</html>
 <img src="tesgrafik.php?actype=<?= $actype?>&periode=<?= $periode?>" border=0 align =center width=600 height=300>
