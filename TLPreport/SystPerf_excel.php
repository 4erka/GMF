<?
header("Content-Type: application/x-excel\n");
header("Pragma: no-cache"); 
header("Expires: 0");
header("Cache-Control:must-revalidate, post-check=0, pre-check=0");
header("content-disposition: attachment; filename=systperf".$_REQUEST["actype"].".xls");
?>
<html xmlns:o="urn:schemas-microsoft-com:office:office"
xmlns:x="urn:schemas-microsoft-com:office:excel"
xmlns="http://www.w3.org/TR/REC-html40">

<head>
<meta http-equiv=Content-Type content="text/html; charset=windows-1252">
<meta name=ProgId content=Excel.Sheet>
<meta name=Generator content="Microsoft Excel 11">
<link rel=File-List href="SystPerf_files/filelist.xml">
<style id="Syst Perf Pirep &amp; Delay 0804_7458_Styles">
<!--table
	{mso-displayed-decimal-separator:"\.";
	mso-displayed-thousand-separator:"\,";}
.xl297458
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM;
	mso-generic-font-family:auto;
	mso-font-charset:1;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl307458
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM;
	mso-generic-font-family:auto;
	mso-font-charset:1;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl317458
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM;
	mso-generic-font-family:auto;
	mso-font-charset:1;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	background:silver;
	mso-pattern:auto none;
	white-space:nowrap;}
.xl327458
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM;
	mso-generic-font-family:auto;
	mso-font-charset:1;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	background:silver;
	mso-pattern:auto none;
	white-space:nowrap;}
.xl337458
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM;
	mso-generic-font-family:auto;
	mso-font-charset:1;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:1.0pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:1.0pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl347458
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM;
	mso-generic-font-family:auto;
	mso-font-charset:1;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	border-top:1.0pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:1.0pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl357458
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM;
	mso-generic-font-family:auto;
	mso-font-charset:1;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	border:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl367458
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM;
	mso-generic-font-family:auto;
	mso-font-charset:1;
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
.xl377458
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM;
	mso-generic-font-family:auto;
	mso-font-charset:1;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:1.0pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl387458
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM;
	mso-generic-font-family:auto;
	mso-font-charset:1;
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
.xl397458
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM;
	mso-generic-font-family:auto;
	mso-font-charset:1;
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
.xl407458
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM;
	mso-generic-font-family:auto;
	mso-font-charset:1;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:1.0pt solid windowtext;
	border-left:1.0pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl417458
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM;
	mso-generic-font-family:auto;
	mso-font-charset:1;
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
.xl427458
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM;
	mso-generic-font-family:auto;
	mso-font-charset:1;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl437458
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM;
	mso-generic-font-family:auto;
	mso-font-charset:1;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl447458
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM;
	mso-generic-font-family:auto;
	mso-font-charset:1;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl457458
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM;
	mso-generic-font-family:auto;
	mso-font-charset:1;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	border-top:1.0pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl467458
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM;
	mso-generic-font-family:auto;
	mso-font-charset:1;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl477458
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM;
	mso-generic-font-family:auto;
	mso-font-charset:1;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl487458
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM;
	mso-generic-font-family:auto;
	mso-font-charset:1;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:1.0pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:1.0pt solid windowtext;
	background:silver;
	mso-pattern:auto none;
	white-space:nowrap;}
.xl497458
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM;
	mso-generic-font-family:auto;
	mso-font-charset:1;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:1.0pt solid windowtext;
	background:silver;
	mso-pattern:auto none;
	white-space:nowrap;}
.xl507458
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM;
	mso-generic-font-family:auto;
	mso-font-charset:1;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:1.0pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	background:silver;
	mso-pattern:auto none;
	white-space:nowrap;}
.xl517458
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM;
	mso-generic-font-family:auto;
	mso-font-charset:1;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:1.0pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	background:silver;
	mso-pattern:auto none;
	white-space:nowrap;}
.xl527458
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM;
	mso-generic-font-family:auto;
	mso-font-charset:1;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:1.0pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	background:silver;
	mso-pattern:auto none;
	white-space:nowrap;}
-->
</style>
<?
  include("function.php");
  $periode = isset($_REQUEST["periode"]) ? $_REQUEST["periode"] : "";
  $actype = isset($_REQUEST["actype"]) ? $_REQUEST["actype"] : "";

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

<div id="Syst Perf Pirep &amp; Delay 0804_7458" align=center
x:publishsource="Excel">
<?
	$connectTE = connectimesysTE();
	//die(print_r(ATA("2008-01","2008-03","B737-500")));
	$tahun = substr($periode,0,4);
	$bulanalert = substr($periode,-2,2);
	if ($bulanalert <= 06){
		//$tahun = $tahun - 1;
		$timeawal = ($tahun-1)."-01";
		$timeakhir = ($tahun-1)."-12";
	} else {
		$timeawal = ($tahun - 1)."-07";
		$timeakhir = $tahun."-06";
	}
	
			if ($periode == "" OR $actype == ""){
			die("Please Select Aircraft Type And Periode");
			}
	
	$FH = cumulativeFH12($periode,$actype,12);
	$FC = cumulativeFC12($periode,$actype,12);
	$reg = reg($actype);
	$delay = ATAdelayperformance($periode,$actype);

	$pirep = ATApirepperformance($periode,$actype);//die(print_r($FC));
	//die(print_r($ATA));

	$connectAMS = connectimesys('imesys');

	$ATA = ATAdef();
	
	
?>

<table x:str border=0 cellpadding=0 cellspacing=0 width=1594 class=xl297458
 style='border-collapse:collapse;table-layout:fixed;width:1199pt'>
 <col class=xl297458 width=100 style='mso-width-source:userset;mso-width-alt:
 3657;width:75pt'>
 <col class=xl307458 width=61 span=14 style='mso-width-source:userset;
 mso-width-alt:2230;width:46pt'>
 <col class=xl297458 width=64 span=10 style='width:48pt'>
 <tr height=18 style='height:13.5pt'>
  <td height=18 class=xl297458 width=100 style='height:13.5pt;width:75pt'></td>
  <td class=xl307458 width=61 style='width:46pt'></td>
  <td class=xl307458 width=61 style='width:46pt'></td>
  <td class=xl307458 width=61 style='width:46pt'></td>
  <td class=xl307458 width=61 style='width:46pt'></td>
  <td class=xl307458 width=61 style='width:46pt'></td>
  <td class=xl307458 width=61 style='width:46pt'></td>
  <td class=xl307458 width=61 style='width:46pt'></td>
  <td class=xl307458 width=61 style='width:46pt'></td>
  <td class=xl307458 width=61 style='width:46pt'></td>
  <td class=xl307458 width=61 style='width:46pt'></td>
  <td class=xl307458 width=61 style='width:46pt'></td>
  <td class=xl307458 width=61 style='width:46pt'></td>
  <td class=xl307458 width=61 style='width:46pt'></td>
  <td class=xl307458 width=61 style='width:46pt'></td>
  <td class=xl297458 width=64 style='width:48pt'></td>
  <td class=xl297458 width=64 style='width:48pt'></td>
  <td class=xl297458 width=64 style='width:48pt'></td>
  <td class=xl297458 width=64 style='width:48pt'></td>
  <td class=xl297458 width=64 style='width:48pt'></td>
  <td class=xl297458 width=64 style='width:48pt'></td>
  <td class=xl297458 width=64 style='width:48pt'></td>
  <td class=xl297458 width=64 style='width:48pt'></td>
  <td class=xl297458 width=64 style='width:48pt'></td>
  <td class=xl297458 width=64 style='width:48pt'></td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td rowspan=2 height=35 class=xl487458 style='height:26.25pt'>ATA</td>
  <td colspan=2 class=xl507458 style='border-left:none'>Total</td>
<?
foreach ($reg as $key => $value){
?>
  <td colspan=2 class=xl517458 style='border-left:none'><?= $value?></td>
<?
 }
?>
  <td class=xl297458></td>
  <td class=xl307458></td>
  <td class=xl307458></td>
  <td class=xl307458></td>
  <td class=xl307458></td>
  <td class=xl307458></td>
  <td class=xl297458></td>
  <td class=xl297458></td>
  <td class=xl297458></td>
  <td class=xl297458></td>
 </tr>
 <tr height=18 style='height:13.5pt'>
  <td height=18 class=xl317458 style='height:13.5pt;border-top:none;border-left:none'>Pirep</td>
  <td class=xl317458 style='border-top:none;border-left:none'>Delay</td>
  <td class=xl317458 style='border-top:none;border-left:none'>Pirep</td>
  <td class=xl317458 style='border-top:none;border-left:none'>Delay</td>
  <td class=xl317458 style='border-top:none;border-left:none'>Pirep</td>
  <td class=xl317458 style='border-top:none;border-left:none'>Delay</td>
  <td class=xl317458 style='border-top:none;border-left:none'>Pirep</td>
  <td class=xl317458 style='border-top:none;border-left:none'>Delay</td>
  <td class=xl317458 style='border-top:none;border-left:none'>Pirep</td>
  <td class=xl317458 style='border-top:none;border-left:none'>Delay</td>
  <td class=xl317458 style='border-top:none;border-left:none'>Pirep</td>
  <td class=xl317458 style='border-top:none;border-left:none'>Delay</td>
  <td class=xl317458 style='border-top:none;border-left:none'>Pirep</td>
  <td class=xl327458 style='border-top:none;border-left:none'>Delay</td>
  <td class=xl297458></td>
  <td class=xl307458></td>
  <td class=xl307458></td>
  <td class=xl307458></td>
  <td class=xl307458></td>
  <td class=xl307458></td>
  <td class=xl297458></td>
  <td class=xl297458></td>
  <td class=xl297458></td>
  <td class=xl297458></td>
 </tr>
<?
foreach ($ATA as $k => $v){
	$jumlahpirep[$v] = isset($pirep[$v]) ? array_sum($pirep[$v]) : 0;
	$jumlahdelay[$v] = isset($delay[$v]) ? array_sum($delay[$v]) : 0;
	
?>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl337458 style='height:12.75pt'><?= $v?></td>
  <td class=xl347458 x:num><?= $jumlahpirep[$v]?></td>
  <td class=xl367458 style='border-left:none' x:num><?= $jumlahdelay[$v]?></td>
  <?
	foreach ($reg as $key => $value){
	$pirep[$v][$value] = isset($pirep[$v][$value]) ? $pirep[$v][$value] : 0;
	$delay[$v][$value] = isset($delay[$v][$value]) ? $delay[$v][$value] : 0;
  ?>
  <td class=xl367458 style='border-left:none' x:num><?= $pirep[$v][$value]?></td>
  <td class=xl367458 style='border-left:none' x:num><?= $delay[$v][$value]?></td>
  <?
	}
  ?>
  <td class=xl297458></td>
  <td class=xl307458></td>
  <td class=xl307458></td>
  <td class=xl307458></td>
  <td class=xl307458></td>
  <td class=xl307458></td>
  <td class=xl307458></td>
  <td class=xl307458></td>
  <td class=xl297458></td>
  <td class=xl297458></td>
 </tr>
 <?
  }
 ?>
 
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl377458 style='height:12.75pt;border-top:none'>OT</td>
  <td class=xl387458 style='border-top:none' x:num>0</td>
  <td class=xl357458 style='border-top:none;border-left:none' x:num>0</td>
  <?
	foreach ($reg as $key => $value){
	$pirep[$v][$value] = isset($pirep[$v][$value]) ? $pirep[$v][$value] : 0;
	$delay[$v][$value] = isset($delay[$v][$value]) ? $delay[$v][$value] : 0;
  ?>
  <td class=xl357458 style='border-top:none;border-left:none' x:num>0</td>
  <?
 }
  ?>
  <td class=xl297458></td>
  <td class=xl307458></td>
  <td class=xl307458></td>
  <td class=xl307458></td>
  <td class=xl307458></td>
  <td class=xl307458></td>
  <td class=xl297458></td>
  <td class=xl297458></td>
  <td class=xl297458></td>
  <td class=xl297458></td>
 </tr>
 <tr height=18 style='height:13.5pt'>
  <td height=18 class=xl407458 style='height:13.5pt;border-top:none'><span
  style='mso-spacerun:yes'> </span>Total</td>
  <td class=xl417458 style='border-top:none' x:num><?= array_sum($jumlahpirep)?></td>
  <td class=xl427458 style='border-top:none;border-left:none' x:num><?= array_sum($jumlahdelay)?></td>
  <?
	foreach ($reg as $key => $value){
		$jmlhpirep = 0;$jmlhdelay = 0;
		foreach ($ATA as $k => $v){
			$jmlhpirep += $pirep[$v][$value];
			$jmlhdelay += $delay[$v][$value];
		}
	?>
  <td class=xl427458 style='border-top:none;border-left:none' x:num><?= $jmlhpirep?></td>
  <td class=xl427458 style='border-top:none;border-left:none' x:num><?= $jmlhdelay?></td>
  <?
  }
  ?>
  <td class=xl297458></td>
  <td class=xl297458></td>
  <td class=xl297458></td>
  <td class=xl297458></td>
  <td class=xl297458></td>
  <td class=xl297458></td>
  <td class=xl297458></td>
  <td class=xl297458></td>
  <td class=xl297458></td>
  <td class=xl297458></td>
 </tr>
 <tr class=xl447458 height=18 style='mso-height-source:userset;height:13.5pt'>
  <td height=18 class=xl437458 style='height:13.5pt'>Total Fhrs/Cycles</td>
  <td colspan=2 class=xl447458><?= array_sum($FH)?>/<?= array_sum($FC)?></td>
  <?
	foreach ($reg as $key => $value){
	?>
  <td colspan=2 class=xl447458><?= $FH[$value]?>/<?= $FC[$value]?></td>
  <?
  }
	?>
  <td class=xl447458></td>
  <td class=xl447458></td>
  <td class=xl447458></td>
  <td class=xl447458></td>
  <td class=xl447458></td>
  <td class=xl447458></td>
  <td class=xl447458></td>
  <td class=xl447458></td>
  <td class=xl447458></td>
  <td class=xl447458></td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl297458 style='height:12.75pt'></td>
  <td class=xl307458></td>
  <td class=xl307458></td>
  <td class=xl307458></td>
  <td class=xl307458></td>
  <td class=xl307458></td>
  <td class=xl307458></td>
  <td class=xl307458></td>
  <td class=xl307458></td>
  <td class=xl307458></td>
  <td class=xl307458></td>
  <td class=xl307458></td>
  <td class=xl307458></td>
  <td class=xl307458></td>
  <td class=xl307458></td>
  <td class=xl297458></td>
  <td class=xl297458></td>
  <td class=xl297458></td>
  <td class=xl297458></td>
  <td class=xl297458></td>
  <td class=xl297458></td>
  <td class=xl297458></td>
  <td class=xl297458></td>
  <td class=xl297458></td>
  <td class=xl297458></td>
 </tr>
 <![if supportMisalignedColumns]>
 <tr height=0 style='display:none'>
  <td width=100 style='width:75pt'></td>
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
 </tr>
 <![endif]>
</table>

</div>


<!----------------------------->
<!--END OF OUTPUT FROM EXCEL PUBLISH AS WEB PAGE WIZARD-->
<!----------------------------->
</body>

</html>
