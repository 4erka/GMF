<?
header("Content-Type: application/x-excel\n");
header("Pragma: no-cache"); 
header("Expires: 0");
header("Cache-Control:must-revalidate, post-check=0, pre-check=0");
header("content-disposition: attachment; filename=excel".$_REQUEST["actype"].".xls");
?>
<html xmlns:o="urn:schemas-microsoft-com:office:office"
xmlns:x="urn:schemas-microsoft-com:office:excel"
xmlns="http://www.w3.org/TR/REC-html40">

<head>
<meta http-equiv=Content-Type content="text/html; charset=windows-1252">
<meta name=ProgId content=Excel.Sheet>
<meta name=Generator content="Microsoft Excel 11">
<link rel=File-List href="ifsd_files/filelist.xml">
<style id="Report Bulanan 2008 (13)_5041_Styles">
<!--table
	{mso-displayed-decimal-separator:"\.";
	mso-displayed-thousand-separator:"\,";}
.xl325041
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	border:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl335041
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM, sans-serif;
	mso-font-charset:0;
	mso-number-format:Fixed;
	text-align:center;
	vertical-align:bottom;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl345041
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl355041
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl365041
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM, sans-serif;
	mso-font-charset:0;
	mso-number-format:"0\.000";
	text-align:center;
	vertical-align:bottom;
	border:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl375041
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM, sans-serif;
	mso-font-charset:0;
	mso-number-format:"0\.000";
	text-align:center;
	vertical-align:bottom;
	border:.5pt solid windowtext;
	background:silver;
	mso-pattern:auto none;
	white-space:nowrap;}
.xl385041
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM, sans-serif;
	mso-font-charset:0;
	mso-number-format:"0\.000";
	text-align:center;
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl395041
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM, sans-serif;
	mso-font-charset:0;
	mso-number-format:"0\.000";
	text-align:center;
	vertical-align:bottom;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl405041
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM, sans-serif;
	mso-font-charset:0;
	mso-number-format:"0\.000";
	text-align:center;
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl415041
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl425041
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl435041
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM, sans-serif;
	mso-font-charset:0;
	mso-number-format:"0\.000";
	text-align:center;
	vertical-align:middle;
	border:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl445041
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM, sans-serif;
	mso-font-charset:0;
	mso-number-format:Fixed;
	text-align:center;
	vertical-align:bottom;
	border:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl455041
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl465041
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl475041
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl485041
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	border-top:none;
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl495041
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl505041
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl515041
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
-->
</style>
<?
	include("function.php");
	$periode = isset($_REQUEST["periode"]) ? $_REQUEST["periode"] : "";
	$actype = isset($_REQUEST["actype"]) ? $_REQUEST["actype"] : "";
	
	$connectAMS = connectimesysTE();

	$FH = queryFH12($periode,"A330-300",12);
	$bulan = array_reverse(array_keys($FH));
	$aircrafttype = array("A330-200","A330-300","B737-300","B737-400","B737-500","B737-800-E","B737-800-M","B747-400","CRJ-1000","A320-200","B737-CL");
	
	foreach($aircrafttype as $k => $v){
		$FH[$v] = queryFH12($periode,$v,24);
		$FCrev[$v] = queryFC12rev($periode,$v,12);
		$delayall = ATAdelay($bulan[0],$bulan[11],$v);
		foreach($delayall as $key => $value){
			$techdelay[$key] = array_sum($value);
		}
		$delay[$v] = $techdelay;
		$cancel[$v] = querycancel($bulan[0],$bulan[11],$v);
		$ifsd[$v] = ifsd($periode,$v);

		$available[$v] = available($bulan[0],$bulan[11],$v);
	}
	$bulan12 = array_keys($FH["B737-400"]);

	//$connectAMS = connectimesys('imesys');
	foreach($aircrafttype as $k => $v){
		$ATAdata[$v] = ATA($bulan[0],$bulan[11],$v);
		foreach ($ATAdata[$v] as $key => $value){
			$jumlahATA[$key] = array_sum($value);
		}
		$ATA[$v] = $jumlahATA;
	}
	//die(print_r($ATA));


?>
</head>

<body>
<!--[if !excel]>&nbsp;&nbsp;<![endif]-->
<!--The following information was generated by Microsoft Office Excel's Publish
as Web Page wizard.-->
<!--If the same item is republished from Excel, all information between the DIV
tags will be replaced.-->
<!----------------------------->
<!--START OF OUTPUT FROM EXCEL PUBLISH AS WEB PAGE WIZARD -->
<!----------------------------->

<div id="Report Bulanan 2008 (13)_5041" align=center x:publishsource="Excel">

<table x:str border=0 cellpadding=0 cellspacing=0 width=1121 class=xl05041
 style='border-collapse:collapse;table-layout:fixed;width:841pt'>
 <col class=xl05041 width=153 style='mso-width-source:userset;mso-width-alt:
 5595;width:115pt'>
 <col class=xl05041 width=64 style='width:48pt'>
 <col class=xl05041 width=49 style='mso-width-source:userset;mso-width-alt:
 1792;width:37pt'>
 <col class=xl05041 width=64 span=10 style='width:48pt'>
 <col class=xl05041 width=87 style='mso-width-source:userset;mso-width-alt:
 3181;width:65pt'>
 <col class=xl05041 width=64 span=2 style='width:48pt'>
<?
foreach ($aircrafttype as $k => $v){
?>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl05041 width=153 style='height:12.75pt;width:115pt'></td>
  <td class=xl05041 width=64 style='width:48pt'></td>
  <td class=xl05041 width=49 style='width:37pt'></td>
  <td class=xl05041 width=64 style='width:48pt'></td>
  <td class=xl05041 width=64 style='width:48pt'></td>
  <td class=xl05041 width=64 style='width:48pt'></td>
  <td class=xl05041 width=64 style='width:48pt'></td>
  <td class=xl05041 width=64 style='width:48pt'></td>
  <td class=xl05041 width=64 style='width:48pt'></td>
  <td class=xl05041 width=64 style='width:48pt'></td>
  <td class=xl05041 width=64 style='width:48pt'></td>
  <td class=xl05041 width=64 style='width:48pt'></td>
  <td class=xl05041 width=64 style='width:48pt'></td>
  <td class=xl05041 width=87 style='width:65pt'></td>
  <td class=xl05041 width=64 style='width:48pt'></td>
  <td class=xl05041 width=64 style='width:48pt'></td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl325041 style='height:12.75pt'><?= $v?></td>
  <?
	foreach ($bulan as $key => $value){
  ?>
  <td class=xl325041 style='border-left:none'><?= bulan($value)?></td>
  <?
	}
	?>
  <td class=xl325041 style='border-left:none'>TOTAL</td>
  <td class=xl05041></td>
  <td class=xl05041></td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl355041 style='height:12.75pt;border-top:none'>&nbsp;</td>
  <?
	foreach ($bulan as $key => $value){
		$FHdata[$value] = $FH[$v][$value];
	?>
  <td class=xl345041 style='border-top:none' x:num><?= $FHdata[$value]?></td>
  <?
	}
	?>
  <td class=xl325041 style='border-top:none;border-left:none' x:num><?= array_sum($FHdata)?></td>
  <td class=xl05041></td>
  <td class=xl05041></td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl455041 style='height:12.75pt;border-top:none'>IN-FLIGHT
  SHUTDOWN</td>
	<?
	$g = 0;
	foreach ($bulan as $key => $value){
		$dataifsd[$value] = isset($ifsd[$v][$value]) ? $ifsd[$v][$value] : 0;
		$g++;
		$formula = "SUM(B".(3 + 7*($g-1)).":M".(3 + 7*($g-1)).")";	
	?>
  <td class=xl345041 style='border-top:none' x:num><?= $dataifsd[$value]?></td>
	<?
	}
	?>
  <td class=xl325041 style='border-top:none;border-left:none' x:num x:fmla=<?= $formula?>></td>
  <td class=xl05041></td>
  <td class=xl05041></td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl465041 style='height:12.75pt;border-top:none'
  x:str="'- RATE      ">- RATE<span style='mso-spacerun:yes'>      </span></td>
  <?
	  foreach ($bulan as $key => $value){
		$totalifsd = 0;$totalFH = 0;
		for($i=0;$i<13;$i++){
			$totalifsd += isset($ifsd[$v][$bulan12[$key+$i]]) ? $ifsd[$v][$bulan12[$key+$i]] : 0;
			$totalFH += $FH[$v][$bulan12[$key+$i]];
		}
		$rate[$value] = ($totalFH <> 0) ? round(($totalifsd/$totalFH*1000),3) : 0;
	?>
  <td class=xl365041 style='border-top:none;border-left:none' x:num><?= $rate[$value]?></td>
  <?
	}
	?>
  <td class=xl365041 style='border-top:none;border-left:none' x:num x:fmla="=(N4*1000)/(N3)"></td>
  <td class=xl05041></td>
  <td class=xl05041></td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl465041 style='height:12.75pt;border-top:none'>AVERAGE</td>
  <td class=xl375041 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl375041 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl375041 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl375041 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl375041 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl375041 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl375041 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl375041 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl375041 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl375041 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl375041 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl375041 style='border-top:none;border-left:none' x:num></td>
  <td class=xl365041 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl05041></td>
  <td class=xl05041></td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl475041 style='height:12.75pt'></td>
  <td class=xl335041></td>
  <td class=xl335041></td>
  <td class=xl335041></td>
  <td class=xl335041></td>
  <td class=xl335041></td>
  <td class=xl335041></td>
  <td class=xl335041></td>
  <td class=xl335041></td>
  <td class=xl335041></td>
  <td class=xl335041></td>
  <td class=xl335041></td>
  <td class=xl335041></td>
  <td class=xl395041></td>
  <td class=xl05041></td>
  <td class=xl05041></td>
 </tr>
<?
}
?>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl415041 style='height:12.75pt'></td>
  <td class=xl415041></td>
  <td class=xl415041></td>
  <td class=xl415041></td>
  <td class=xl415041></td>
  <td class=xl415041></td>
  <td class=xl415041></td>
  <td class=xl415041></td>
  <td class=xl415041></td>
  <td class=xl415041></td>
  <td class=xl415041></td>
  <td class=xl415041></td>
  <td class=xl415041></td>
  <td class=xl425041 style='border-top:none'>&nbsp;</td>
  <td class=xl05041></td>
  <td class=xl05041></td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl475041 style='height:12.75pt'></td>
  <td class=xl515041></td>
  <td class=xl515041></td>
  <td class=xl515041></td>
  <td class=xl515041></td>
  <td class=xl515041></td>
  <td class=xl515041></td>
  <td class=xl515041></td>
  <td class=xl515041></td>
  <td class=xl515041></td>
  <td class=xl515041></td>
  <td class=xl515041></td>
  <td class=xl335041></td>
  <td class=xl395041></td>
  <td class=xl05041></td>
  <td class=xl05041></td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl415041 style='height:12.75pt'></td>
  <td class=xl415041></td>
  <td class=xl415041></td>
  <td class=xl415041></td>
  <td class=xl415041></td>
  <td class=xl415041></td>
  <td class=xl05041></td>
  <td class=xl415041></td>
  <td class=xl415041></td>
  <td class=xl415041></td>
  <td class=xl415041></td>
  <td class=xl415041></td>
  <td class=xl415041></td>
  <td class=xl415041></td>
  <td class=xl05041></td>
  <td class=xl415041></td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl415041 style='height:12.75pt'></td>
  <td class=xl415041></td>
  <td class=xl415041></td>
  <td class=xl415041></td>
  <td class=xl415041></td>
  <td class=xl415041></td>
  <td class=xl415041></td>
  <td class=xl415041></td>
  <td class=xl415041></td>
  <td class=xl415041></td>
  <td class=xl415041></td>
  <td class=xl415041></td>
  <td class=xl415041></td>
  <td class=xl415041></td>
  <td class=xl05041></td>
  <td class=xl05041></td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl325041 style='height:12.75pt'>ALL B737 SERIES</td>
  <td class=xl325041 style='border-left:none'>B33</td>
  <td class=xl325041 style='border-left:none'>B34</td>
  <td class=xl325041 style='border-left:none'>B35</td>
  <td class=xl325041 style='border-left:none'>TOTAL</td>
  <td class=xl325041 style='border-left:none'>RATE</td>
  <td class=xl05041></td>
  <td class=xl05041></td>
  <td class=xl415041></td>
  <td class=xl415041></td>
  <td class=xl415041></td>
  <td class=xl415041></td>
  <td class=xl415041></td>
  <td class=xl415041></td>
  <td class=xl05041></td>
  <td class=xl05041></td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl325041 style='height:12.75pt;border-top:none'
  x:str="2* TOTAL FLIGHT HOURS ">2* TOTAL FLIGHT HOURS<span
  style='mso-spacerun:yes'> </span></td>
  <td class=xl325041 style='border-top:none;border-left:none' x:num x:fmla="=N10"></td>
  <td class=xl325041 style='border-top:none;border-left:none' x:num x:fmla="=N17"></td>
  <td class=xl325041 style='border-top:none;border-left:none' x:num x:fmla="=N24"></td>
  <td class=xl325041 style='border-top:none;border-left:none' x:num x:fmla="=SUM(B48:D48)"></td>
  <td class=xl435041 style='border-top:none;border-left:none' x:num x:fmla="=(E49*1000)/(E48*2)"></td>
  <td class=xl05041></td>
  <td class=xl05041></td>
  <td class=xl415041></td>
  <td class=xl415041></td>
  <td class=xl415041></td>
  <td class=xl415041></td>
  <td class=xl415041></td>
  <td class=xl415041></td>
  <td class=xl05041></td>
  <td class=xl05041></td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl465041 style='height:12.75pt;border-top:none'>IN-FLIGHT
  SHUTDOWN</td>
  <td class=xl325041 style='border-top:none;border-left:none' x:num x:fmla="=N11"></td>
  <td class=xl325041 style='border-top:none;border-left:none' x:num x:fmla="=N18"></td>
  <td class=xl325041 style='border-top:none;border-left:none' x:num x:fmla="=N25"></td>
  <td class=xl325041 style='border-top:none;border-left:none' x:num x:fmla="=SUM(B49:D49)"></td>
  <td class=xl435041 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl05041></td>
  <td class=xl05041></td>
  <td class=xl415041></td>
  <td class=xl415041></td>
  <td class=xl415041></td>
  <td class=xl415041></td>
  <td class=xl415041></td>
  <td class=xl415041></td>
  <td class=xl05041></td>
  <td class=xl05041></td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl415041 style='height:12.75pt'></td>
  <td class=xl415041></td>
  <td class=xl415041></td>
  <td class=xl335041></td>
  <td class=xl415041></td>
  <td class=xl415041></td>
  <td class=xl415041></td>
  <td class=xl415041></td>
  <td class=xl415041></td>
  <td class=xl415041></td>
  <td class=xl415041></td>
  <td class=xl415041></td>
  <td class=xl415041></td>
  <td class=xl415041></td>
  <td class=xl05041></td>
  <td class=xl05041></td>
 </tr>
 <![if supportMisalignedColumns]>
 <tr height=0 style='display:none'>
  <td width=153 style='width:115pt'></td>
  <td width=64 style='width:48pt'></td>
  <td width=49 style='width:37pt'></td>
  <td width=64 style='width:48pt'></td>
  <td width=64 style='width:48pt'></td>
  <td width=64 style='width:48pt'></td>
  <td width=64 style='width:48pt'></td>
  <td width=64 style='width:48pt'></td>
  <td width=64 style='width:48pt'></td>
  <td width=64 style='width:48pt'></td>
  <td width=64 style='width:48pt'></td>
  <td width=64 style='width:48pt'></td>
  <td width=64 style='width:48pt'></td>
  <td width=87 style='width:65pt'></td>
  <td width=64 style='width:48pt'></td>
  <td width=64 style='width:48pt'></td>
 </tr>
 <![endif]>
</table>

</div>


<!----------------------------->
<!--END OF OUTPUT FROM EXCEL PUBLISH AS WEB PAGE WIZARD-->
<!----------------------------->
</body>

</html>
