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
<link rel=File-List href="reportbulanan_files/filelist.xml">
<style id="Report Bulanan 2008 (12)_28817_Styles">
<!--table
	{mso-displayed-decimal-separator:"\.";
	mso-displayed-thousand-separator:"\,";}
.xl3228817
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
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl3328817
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
.xl3428817
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
.xl3528817
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
	mso-number-format:0;
	text-align:center;
	vertical-align:bottom;
	border:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl3628817
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
	border-right:1.0pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl3728817
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
	text-align:left;
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:1.0pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl3828817
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
.xl3928817
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
	border-top:.5pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl4028817
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
.xl4128817
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
	mso-number-format:0;
	text-align:left;
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:1.0pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl4228817
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
	mso-number-format:0;
	text-align:center;
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl4328817
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
	mso-number-format:0;
	text-align:center;
	vertical-align:bottom;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl4428817
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
	mso-number-format:0;
	text-align:left;
	vertical-align:bottom;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl4528817
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
	border-left:1.0pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl4628817
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
	mso-number-format:0;
	text-align:center;
	vertical-align:bottom;
	border:.5pt solid windowtext;
	background:yellow;
	mso-pattern:auto none;
	white-space:nowrap;}
.xl4728817
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
	background:yellow;
	mso-pattern:auto none;
	white-space:nowrap;}
.xl4828817
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
	border-right:1.0pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	background:yellow;
	mso-pattern:auto none;
	white-space:nowrap;}
.xl4928817
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
	border-bottom:1.0pt solid windowtext;
	border-left:1.0pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl5028817
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
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:.5pt solid windowtext;
	background:yellow;
	mso-pattern:auto none;
	white-space:nowrap;}
.xl5128817
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
	border-top:.5pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:.5pt solid windowtext;
	background:yellow;
	mso-pattern:auto none;
	white-space:nowrap;}
.xl5228817
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
	border-right:1.0pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl5328817
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
	mso-number-format:0;
	text-align:center;
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl5428817
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
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl5528817
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
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:1.0pt solid windowtext;
	border-left:.5pt solid windowtext;
	background:yellow;
	mso-pattern:auto none;
	white-space:nowrap;}
.xl5628817
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
	border-right:1.0pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	background:silver;
	mso-pattern:auto none;
	white-space:nowrap;}
.xl5728817
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
	border-top:.5pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	background:silver;
	mso-pattern:auto none;
	white-space:nowrap;}
.xl5828817
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
	background:silver;
	mso-pattern:auto none;
	white-space:nowrap;}
.xl5928817
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
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	background:silver;
	mso-pattern:auto none;
	white-space:nowrap;}
.xl6028817
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
	background:silver;
	mso-pattern:auto none;
	white-space:nowrap;}
.xl6128817
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
	background:silver;
	mso-pattern:auto none;
	white-space:nowrap;}
.xl6228817
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
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:1.0pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl6328817
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
	border-top:1.0pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:1.0pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl6428817
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
	border-top:1.0pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl6528817
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
	border-top:1.0pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
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
	$aircrafttype = array("A330","A330-200","A330-300","B737-300","B737-400","B737-500","B737-800-E","B737-800-M","B747-400","CRJ-1000","A320-200","B737-CL","B777-300","ATR72-600");
	$acclassic = array("B737-300","B737-400","B737-500");
	
	foreach($aircrafttype as $k => $v){
		$FH[$v] = queryFH12($periode,$v,24);
		$FHrev[$v] = queryFH12rev($periode,$v,12);
		$FCrev[$v] = queryFC12rev($periode,$v,12);
		$delayall = ATAdelay($bulan[0],$bulan[11],$v);
		if (is_array($delayall)) {
		foreach($delayall as $key => $value){
			$techdelay[$key] = array_sum($value);
		}
		$delay[$v] = $techdelay;
		unset($techdelay);
		}
		$cancel[$v] = querycancel($bulan[0],$bulan[11],$v);
		$ifsddata = ifsd($periode,$v);
		
		/*while ($ifsddata1 = mysql_fetch_array($ifsddata)){
		$ifsddata2[$ifsddata1["periode"]] = $ifsddata1["jumlah"];
		}
		$ifsd[$v] = $ifsddata2;*/

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

foreach ($aircrafttype as $k => $v){
	foreach ($bulan12 as $key => $value){
		$ifsd[$v][$value] = isset($ifsd[$v][$value]) ? $ifsd[$v][$value] : 0;
	}
}
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

<div id="Report Bulanan 2008 (12)_28817" align=center x:publishsource="Excel">

<table x:str border=0 cellpadding=0 cellspacing=0 width=16051 class=xl3228817
 style='border-collapse:collapse;table-layout:fixed;width:12041pt'>
 <col class=xl3228817 width=84 style='mso-width-source:userset;mso-width-alt:
 3072;width:63pt'>
 <col class=xl3228817 width=61 span=11 style='mso-width-source:userset;
 mso-width-alt:2230;width:46pt'>
 <col class=xl3228817 width=64 span=239 style='width:48pt'>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl3228817 width=84 style='height:12.75pt;width:63pt'></td>
  <td class=xl3228817 width=61 style='width:46pt'></td>
  <td class=xl3228817 width=61 style='width:46pt'></td>
  <td class=xl3228817 width=61 style='width:46pt'></td>
  <td class=xl3228817 width=61 style='width:46pt'></td>
  <td class=xl3228817 width=61 style='width:46pt'></td>
  <td class=xl3228817 width=61 style='width:46pt'></td>
  <td class=xl3228817 width=61 style='width:46pt'></td>
  <td class=xl3228817 width=61 style='width:46pt'></td>
  <td class=xl3228817 width=61 style='width:46pt'></td>
  <td class=xl3228817 width=61 style='width:46pt'></td>
  <td class=xl3228817 width=61 style='width:46pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
  <td class=xl3228817 width=64 style='width:48pt'></td>
 </tr>
 <tr height=18 style='height:13.5pt'>
  <td height=18 class=xl3228817 style='height:13.5pt'></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td rowspan=2 height=34 class=xl6328817 style='height:25.5pt'>A/C TYPE</td>
  <td colspan=12 class=xl6428817 style='border-right:1.0pt solid black;
  border-left:none'>Delay</td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
 </tr>
 <tr height=17 style='height:12.75pt'>
	<?	
	foreach($bulan as $key => $value){
	?>
  <td height=17 class=xl3328817 style='height:12.75pt;border-top:none;border-left:none'><?= bulan($value)?></td>
  <?
  }
	?>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
 </tr>
 <?
foreach ($aircrafttype as $k => $v){
?>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl3728817 style='height:12.75pt;border-top:none'><?= $v?></td>
  <?
		foreach ($bulan as $key => $value){
			$delay[$v][$value] = isset($delay[$v][$value]) ? $delay[$v][$value] : 0;
  ?>
  <td class=xl3328817 style='border-top:none;border-left:none' x:num><?= $delay[$v][$value]?></td>
  <?
		}
  ?>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
 </tr>
<?
	}
?>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl3728817 style='height:12.75pt;border-top:none'>B737-Classic</td>
    <?
		foreach ($bulan as $key => $value){
			$totaldelayclassic = 0;
			foreach ($acclassic as $k => $v){
				$totaldelayclassic += $delay[$v][$value];
			}
  ?>
  <td class=xl3328817 style='border-top:none;border-left:none' x:num><?= $totaldelayclassic?></td>
  <?
		}
  ?>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl4528817 style='height:12.75pt;border-top:none'
  x:str="Total ">Total<span style='mso-spacerun:yes'> </span></td>
  <?
		foreach ($bulan as $key => $value){
			$totaldelay = 0;
			foreach ($aircrafttype as $k => $v){
				$totaldelay += $delay[$v][$value];
			}
  ?>
  <td class=xl4628817 style='border-top:none;border-left:none' x:num><?= $totaldelay?></td>
  <?
		}
  ?>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td rowspan=2 height=34 class=xl6228817 style='height:25.5pt;border-top:none'>A/C
  TYPE</td>
  <td colspan=12 class=xl3328817 style='border-right:1.0pt solid black;
  border-left:none'>Cancel</td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
 </tr>
 <tr height=17 style='height:12.75pt'>
 <?	
   foreach($bulan as $key => $value){
 ?>
  <td height=17 class=xl3328817 style='height:12.75pt;border-top:none;border-left:none'><?= bulan($value)?></td>
  <?
	}
  ?>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
 </tr>
 <?
foreach ($aircrafttype as $k => $v){
?>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl3728817 style='height:12.75pt;border-top:none'><?= $v?></td>
  <?
	foreach ($bulan as $key => $value){
		 $cancel[$v][$value] = isset( $cancel[$v][$value]) ?  $cancel[$v][$value] : 0;
  ?>
  <td class=xl3328817 style='border-top:none;border-left:none' x:num><?= $cancel[$v][$value]?></td>
  <?
	}
  ?>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
 </tr>
 <?
}
?>
  <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl3728817 style='height:12.75pt;border-top:none'>B737-Classic</td>
    <?
		foreach ($bulan as $key => $value){
			$totalcancelclassic = 0;
			foreach ($acclassic as $k => $v){
				$totalcancelclassic += $cancel[$v][$value];
			}
  ?>
  <td class=xl3328817 style='border-top:none;border-left:none' x:num><?= $totalcancelclassic?></td>
  <?
		}
  ?>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl4528817 style='height:12.75pt;border-top:none'
  x:str="Total ">Total<span style='mso-spacerun:yes'> </span></td>
	<?
		foreach ($bulan as $key => $value){
			$totalcancel = 0;
			foreach ($aircrafttype as $k => $v){
				$totalcancel += $cancel[$v][$value];
			}
	?>
  <td class=xl4628817 style='border-top:none;border-left:none' x:num><?= $totalcancel?></td>
	<?
	}
	?>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td rowspan=2 height=34 class=xl6228817 style='height:25.5pt;border-top:none'>A/C
  TYPE</td>
  <td colspan=12 class=xl3328817 style='border-right:1.0pt solid black;
  border-left:none'>Rev Take - Off</td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <?
		foreach ($bulan as $key => $value){
  ?>
  <td height=17 class=xl3328817 style='height:12.75pt;border-top:none;border-left:none'><?= bulan($value)?></td>
  <?
  }
  ?>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
 </tr>
 <?
   foreach ($aircrafttype as $k => $v){
 ?>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl3728817 style='height:12.75pt;border-top:none'><?= $v?></td>
	<?
	  foreach ($bulan as $key => $value){
	?>	
  <td class=xl3328817 style='border-top:none;border-left:none' x:num><?= $FCrev[$v][$value]?></td>
	<?
	  }
	 ?>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
 </tr>
 <?
  }
 ?>
  <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl3728817 style='height:12.75pt;border-top:none'>B737-Classic</td>
    <?
		foreach ($bulan as $key => $value){
			$totalFCrevclassic = 0;
			foreach ($acclassic as $k => $v){
				$totalFCrevclassic += $FCrev[$v][$value];
			}
  ?>
  <td class=xl3328817 style='border-top:none;border-left:none' x:num><?= $totalFCrevclassic?></td>
  <?
		}
  ?>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl4528817 style='height:12.75pt;border-top:none'
  x:str="Total ">Total<span style='mso-spacerun:yes'> </span></td>
  <?
		foreach ($bulan as $key => $value){
			$totalFCrev = 0;
			foreach ($aircrafttype as $k => $v){
				$totalFCrev += $FCrev[$v][$value];
			}
	?>
  <td class=xl4628817 style='border-top:none;border-left:none' x:num><?= $totalFCrev?></td>
  <?
  }
  ?>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
 </tr>
  <tr height=17 style='height:12.75pt'>
  <td rowspan=2 height=34 class=xl6228817 style='height:25.5pt;border-top:none'>A/C
  TYPE</td>
  <td colspan=12 class=xl3328817 style='border-right:1.0pt solid black;
  border-left:none'>Rev FH</td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <?
		foreach ($bulan as $key => $value){
  ?>
  <td height=17 class=xl3328817 style='height:12.75pt;border-top:none;border-left:none'><?= bulan($value)?></td>
  <?
  }
  ?>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
 </tr>
 <?
   foreach ($aircrafttype as $k => $v){
 ?>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl3728817 style='height:12.75pt;border-top:none'><?= $v?></td>
	<?
	  foreach ($bulan as $key => $value){
	?>	
  <td class=xl3328817 style='border-top:none;border-left:none' x:num><?= $FHrev[$v][$value]?></td>
	<?
	  }
	 ?>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
 </tr>
 <?
  }
 ?>
  <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl3728817 style='height:12.75pt;border-top:none'>B737-Classic</td>
    <?
		foreach ($bulan as $key => $value){
			$totalFHrevclassic = 0;
			foreach ($acclassic as $k => $v){
				$totalFHrevclassic += $FHrev[$v][$value];
			}
  ?>
  <td class=xl3328817 style='border-top:none;border-left:none' x:num><?= $totalFHrevclassic?></td>
  <?
		}
  ?>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl4528817 style='height:12.75pt;border-top:none'
  x:str="Total ">Total<span style='mso-spacerun:yes'> </span></td>
  <?
		foreach ($bulan as $key => $value){
			$totalFHrev = 0;
			foreach ($aircrafttype as $k => $v){
				$totalFHrev += $FHrev[$v][$value];
			}
	?>
  <td class=xl4628817 style='border-top:none;border-left:none' x:num><?= $totalFHrev?></td>
  <?
  }
  ?>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td rowspan=2 height=34 class=xl6228817 style='height:25.5pt;border-top:none'>A/C
  TYPE</td>
  <td colspan=12 class=xl3328817 style='border-right:1.0pt solid black;
  border-left:none' x:str="Dispatch ">Dispatch<span
  style='mso-spacerun:yes'> </span></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
 </tr>
 <tr height=17 style='height:12.75pt'>
 <?
   foreach ($bulan as $key => $value){
 ?>
  <td height=17 class=xl3328817 style='height:12.75pt;border-top:none;border-left:none'><?= bulan($value)?></td>
  <?
	}
  ?>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
 </tr>
<?
foreach ($aircrafttype as $k => $v){
?>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl3728817 style='height:12.75pt;border-top:none'><?= $v?></td>
  <?
	foreach ($bulan as $key => $value){
	$DR = ($FCrev[$v][$value] <> 0) ? round((($FCrev[$v][$value] - $delay[$v][$value] - $cancel[$v][$value])/$FCrev[$v][$value] * 100),2) : 0;
  ?>
  <td class=xl3428817 style='border-top:none;border-left:none' x:num><?= $DR?></td>
  <?
	}
  ?>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
 </tr>
<?
}
?>
  <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl3728817 style='height:12.75pt;border-top:none'>B737-Classic</td>
    <?
		foreach ($bulan as $key => $value){
		 $totalFCrevclassic = 0;$totaldelayclassic = 0;$totalcancelclassic = 0;$totalDRclassic = 0;
			foreach ($acclassic as $k => $v){
				$totalFCrevclassic += $FCrev[$v][$value];
				$totaldelayclassic += $delay[$v][$value];
				$totalcancelclassic += $cancel[$v][$value];
			}
		$totalDRclassic = ($totalFCrevclassic <> 0) ? round((($totalFCrevclassic - $totaldelayclassic - $totalcancelclassic)/$totalFCrevclassic * 100),2) : 0;
  ?>
  <td class=xl3428817 style='border-top:none;border-left:none' x:num><?= $totalDRclassic?></td>
  <?
		}
  ?>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
 </tr>
 <tr height=18 style='height:13.5pt'>
  <td height=18 class=xl4928817 style='height:13.5pt;border-top:none'
  x:str="Total ">Total<span style='mso-spacerun:yes'> </span></td>
   <?
	 foreach ($bulan as $key => $value){
		 $totalFCrev = 0;$totaldelay = 0;$totalcancel = 0;$totalDR = 0;
			foreach ($aircrafttype as $k => $v){
				$totalFCrev += $FCrev[$v][$value];
				$totaldelay += $delay[$v][$value];
				$totalcancel += $cancel[$v][$value];
			}
		$totalDR = round(($totalFCrev - $totaldelay - $totalcancel)/$totalFCrev * 100,2);
	 ?>
  <td class=xl5028817 style='border-top:none;border-left:none' x:num><?= $totalDR?></td>
  <?
	}
  ?>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
  <td class=xl3228817></td>
 </tr>
 <![if supportMisalignedColumns]>
 <tr height=0 style='display:none'>
  <td width=84 style='width:63pt'></td>
  <td width=61 style='width:46pt'></td>
  <td width=61 style='width:46pt'></td>
  <td width=61 style='width:46pt'></td>
  <td width=61 style='width:46pt'></td>
  <td width=61 style='width:46pt'></td>
  <td width=61 style='width:46pt'></td>
  <td width=61 style='width:46pt'></td>
  <td width=61 style='width:46pt'></td>
  <td width=61 style='width:46pt'></td>
  <td width=61 style='width:46pt'></td>
  <td width=61 style='width:46pt'></td>
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
  <td width=64 style='width:48pt'></td>
  <td width=64 style='width:48pt'></td>
  <td width=64 style='width:48pt'></td>
  <td width=64 style='width:48pt'></td>
  <td width=64 style='width:48pt'></td>
  <td width=64 style='width:48pt'></td>
  <td width=64 style='width:48pt'></td>
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
