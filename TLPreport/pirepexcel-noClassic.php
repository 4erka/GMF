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
<link rel=File-List href="pirep_files/filelist.xml">
<style id="Report Bulanan 2008 (13)_4199_Styles">
<!--table
	{mso-displayed-decimal-separator:"\.";
	mso-displayed-thousand-separator:"\,";}
.xl324199
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
.xl334199
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
.xl344199
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
.xl354199
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
.xl364199
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
.xl374199
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
.xl384199
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
.xl394199
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
.xl404199
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
	border-bottom:1.0pt solid windowtext;
	border-left:1.0pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl414199
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
	vertical-align:middle;
	border:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl424199
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
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl434199
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:0;
	text-align:center;
	vertical-align:bottom;
	border:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl444199
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
.xl454199
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
.xl464199
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
.xl474199
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
.xl484199
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
	background:#969696;
	mso-pattern:auto none;
	white-space:nowrap;}
.xl494199
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
	background:#969696;
	mso-pattern:auto none;
	white-space:nowrap;}
.xl504199
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
	background:#969696;
	mso-pattern:auto none;
	white-space:nowrap;}
.xl514199
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
.xl524199
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
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl534199
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
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl544199
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
.xl554199
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
.xl564199
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
.xl574199
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
.xl584199
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
	border-left:none;
	background:silver;
	mso-pattern:auto none;
	white-space:nowrap;}
.xl594199
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
.xl604199
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
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl614199
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
.xl624199
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
.xl634199
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
.xl644199
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
.xl654199
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
	$aircrafttype = array("A330-200","A330-300","B737-300","B737-400","B737-500","B737-800-E","B737-800-M","B747-400","CRJ-1000","A320-200","B737-CL","B777-300","ATR72-600");
	
	foreach($aircrafttype as $k => $v){
		$FH[$v] = queryFH12($periode,$v,24);
		$FCrev[$v] = queryFC12rev($periode,$v,12);
		$delayall = ATAdelay($bulan[0],$bulan[11],$v);
		IF (is_array($delayall)) {
		foreach($delayall as $key => $value){
			$techdelay[$key] = array_sum($value);
		}
		}
		$delay[$v] = $techdelay;
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
		unset($jumlahATA);
	}
	//die(print_r($ATA));

foreach ($aircrafttype as $k => $v){
	foreach ($bulan12 as $key => $value){
		$ifsd[$v][$value] = isset($ifsd[$v][$value]) ? $ifsd[$v][$value] : 0;
	}
}
	//die(print_r($FCrev));
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

<div id="Report Bulanan 2008 (13)_4199" align=center x:publishsource="Excel">

<table x:str border=0 cellpadding=0 cellspacing=0 width=16051 class=xl324199
 style='border-collapse:collapse;table-layout:fixed;width:12041pt'>
 <col class=xl324199 width=84 style='mso-width-source:userset;mso-width-alt:
 3072;width:63pt'>
 <col class=xl324199 width=61 span=11 style='mso-width-source:userset;
 mso-width-alt:2230;width:46pt'>
 <col class=xl324199 width=64 span=239 style='width:48pt'>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl324199 width=84 style='height:12.75pt;width:63pt'></td>
  <td class=xl324199 width=61 style='width:46pt'></td>
  <td class=xl324199 width=61 style='width:46pt'></td>
  <td class=xl324199 width=61 style='width:46pt'></td>
  <td class=xl324199 width=61 style='width:46pt'></td>
  <td class=xl324199 width=61 style='width:46pt'></td>
  <td class=xl324199 width=61 style='width:46pt'></td>
  <td class=xl324199 width=61 style='width:46pt'></td>
  <td class=xl324199 width=61 style='width:46pt'></td>
  <td class=xl324199 width=61 style='width:46pt'></td>
  <td class=xl324199 width=61 style='width:46pt'></td>
  <td class=xl324199 width=61 style='width:46pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
  <td class=xl324199 width=64 style='width:48pt'></td>
 </tr>
 <tr height=18 style='height:13.5pt'>
  <td height=18 class=xl324199 style='height:13.5pt'></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td rowspan=2 height=34 class=xl634199 style='height:25.5pt'>A/C TYPE</td>
  <td colspan=12 class=xl644199 style='border-right:1.0pt solid black;
  border-left:none'>Pirep</td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
 </tr>
 <tr height=17 style='height:12.75pt'>
<?
foreach ($bulan as $key => $value){
?>
  <td height=17 class=xl334199 style='height:12.75pt;border-top:none;border-left:none'><?= bulan($value)?></td>
<?
}
?>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
 </tr>
<?
foreach ($aircrafttype as $k => $v){
?>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl374199 style='height:12.75pt;border-top:none'><?= $v?></td>
	<?
	foreach ($bulan as $key => $value){
		$ATA[$v][$value] = isset($ATA[$v][$value]) ? $ATA[$v][$value] : 0;
	?>
  <td class=xl354199 style='border-top:none;border-left:none' x:num><?= $ATA[$v][$value]?></td>
	<?
	}
	?>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
 </tr>
<?
}
?>
 <tr height=3 style='mso-height-source:userset;height:2.25pt'>
  <td height=3 class=xl484199 style='height:2.25pt;border-top:none'>Totall</td>
   <?
		foreach ($bulan as $key => $value){
			$totalpirep = 0;
			foreach ($aircrafttype as $k => $v){
				$totalpirep += $ATA[$v][$value];
			}
  ?>
  <td class=xl494199 style='border-top:none;border-left:none'><?= $totalpirep?></td>
	<?
		}
  ?>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td rowspan=2 height=34 class=xl624199 style='height:25.5pt;border-top:none'>A/C
  TYPE</td>
  <td colspan=12 class=xl334199 style='border-right:1.0pt solid black;
  border-left:none'>A/C in Service Revenue</td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
 </tr>
 <tr height=17 style='height:12.75pt'>
<?
foreach ($bulan as $key => $value){
?>
  <td height=17 class=xl334199 style='height:12.75pt;border-top:none;border-left:none'><?= bulan($value)?></td>
<?
}
?>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
 </tr>
<?
foreach ($aircrafttype as $k => $v){
?>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl374199 style='height:12.75pt;border-top:none'><?= $v?></td>
	<?
	foreach ($bulan as $key => $value){
	$acinservice[$v][$value] = round($available[$v][$value]/jumlahbulan($value),2)
	?>
  <td class=xl344199 style='border-top:none;border-left:none' x:num><?= $acinservice[$v][$value]?></td>
	<?
	}
	?>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
 </tr>
<?
}	
?>
 <tr height=2 style='mso-height-source:userset;height:1.5pt'>
  <td height=2 class=xl484199 style='height:1.5pt;border-top:none'>&nbsp;</td>
  <?
		foreach ($bulan as $key => $value){
			$availableall = 0;
			foreach ($aircrafttype as $k => $v){
				$availableall += $available[$v][$value];
			}
  ?>
  <td class=xl494199 style='border-top:none;border-left:none'><?= round($availableall/jumlahbulan($value),2)?></td>
	<?
		}
  ?>
   <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td rowspan=2 height=34 class=xl624199 style='height:25.5pt;border-top:none'>A/C
  TYPE</td>
  <td colspan=12 class=xl334199 style='border-right:1.0pt solid black;border-left:none'>Pirep / A/C In Service Revenue</td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
 </tr>
 <tr height=17 style='height:12.75pt'>
<?
foreach ($bulan as $key => $value){
?>
  <td height=17 class=xl334199 style='height:12.75pt;border-top:none;'><?= bulan($value)?></td>
<?
}
?>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
 </tr>
<?
$j = 0;
foreach ($aircrafttype as $k => $v){
$j++;
?>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl374199 style='height:12.75pt;border-top:none'><?= $v?></td>
	<?
	$i = 0;
	foreach ($bulan as $key => $value){
	$i++;$formula = ($acinservice[$v][$value] <> 0) ? "=ROUND((".chr(65 + $i).($j + 4)."/".chr(65 + $i).($j + 20)."),2)" : 0;
	?>
  <td class=xl334199 style='border-top:none' x:num x:fmla=<?= $formula?>></td>
	<?
	}
	?>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
 </tr>
<?
}
?>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl324199 style='height:12.75pt'></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl564199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
  <td class=xl324199></td>
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
