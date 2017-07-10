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
<link rel=File-List href="systperf_excel_files/filelist.xml">
<style id="systperfB737-300-1_323_Styles">
<!--table
	{mso-displayed-decimal-separator:"\.";
	mso-displayed-thousand-separator:"\,";}
.xl15323
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
	text-align:general;
	vertical-align:bottom;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl22323
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
.xl23323
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
.xl24323
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
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl25323
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
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:none;
	background:silver;
	mso-pattern:auto none;
	white-space:nowrap;}
.xl26323
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
.xl27323
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
.xl28323
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
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:1.0pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl29323
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
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:1.0pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl30323
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
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl31323
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
	border-top:none;
	border-right:none;
	border-bottom:1.0pt solid windowtext;
	border-left:1.0pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl32323
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
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:1.0pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl33323
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
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl34323
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
.xl35323
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
	border-bottom:none;
	border-left:1.0pt solid windowtext;
	background:silver;
	mso-pattern:auto none;
	white-space:nowrap;}
.xl36323
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
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:1.0pt solid windowtext;
	background:silver;
	mso-pattern:auto none;
	white-space:nowrap;}
.xl37323
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
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	background:silver;
	mso-pattern:auto none;
	white-space:nowrap;}
.xl38323
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
	border-left:none;
	background:silver;
	mso-pattern:auto none;
	white-space:nowrap;}
.xl39323
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
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
-->
</style>
<?
  include("function.php");
  $periode = isset($_REQUEST["periode"]) ? $_REQUEST["periode"] : "";
  $actype = isset($_REQUEST["actype"]) ? $_REQUEST["actype"] : "";

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

<div id="systperfB737-300-1_323" align=center x:publishsource="Excel"><!--The following information was generated by Microsoft Office Excel's Publish
as Web Page wizard.--><!--If the same item is republished from Excel, all information between the DIV
tags will be replaced.--><!-----------------------------><!--START OF OUTPUT FROM EXCEL PUBLISH AS WEB PAGE WIZARD --><!----------------------------->

<table x:str border=0 cellpadding=0 cellspacing=0 width=1164 style='border-collapse:
 collapse;table-layout:fixed;width:875pt'>
 <col class=xl22323 width=100 style='mso-width-source:userset;mso-width-alt:
 3657;width:75pt'>
 <col class=xl23323 width=61 span=8 style='mso-width-source:userset;mso-width-alt:
 2230;width:46pt'>
 <col width=64 span=9 style='width:48pt'>
 <tr class=xl22323 height=18 style='mso-height-source:userset;height:13.5pt'>
  <td height=18 class=xl22323 width=100 style='height:13.5pt;width:75pt'></td>
  <td class=xl23323 width=61 style='width:46pt'></td>
  <td class=xl23323 width=61 style='width:46pt'></td>
<?
$jumlahloop = 2 * count($reg);
for ($i=0;$i<$jumlahloop;$i++){
?>
  <td class=xl23323 width=61 style='width:46pt'></td>
<?
}
?>
 </tr>
 <tr class=xl22323 height=17 style='mso-height-source:userset;height:12.75pt'>
  <td rowspan=2 height=35 class=xl35323 style='border-bottom:1.0pt solid black;
  height:26.25pt'>ATA</td>
  <td colspan=2 class=xl37323 style='border-right:.5pt solid black;border-left:
  none'>Total</td>
<?
foreach ($reg as $key => $value){
?>
  <td colspan=2 class=xl37323 style='border-right:.5pt solid black;border-left:
  none'><?= $value?></td>
<?
}
?>
 </tr>
 <tr class=xl22323 height=18 style='mso-height-source:userset;height:13.5pt'>
<?
foreach ($reg as $key => $value){
?>
  <td height=18 class=xl25323 style='height:13.5pt'>Pirep</td>
  <td class=xl25323>Delay</td>
<?
}
?>
 </tr>
	<?
	foreach ($ATA as $k => $v){
		$jumlahpirep[$v] = isset($pirep[$v]) ? array_sum($pirep[$v]) : 0;
		$jumlahdelay[$v] = isset($delay[$v]) ? array_sum($delay[$v]) : 0;	
	?>
 <tr class=xl22323 height=17 style='mso-height-source:userset;height:12.75pt'>
  <td height=17 class=xl26323 style='height:12.75pt;border-top:none'><?= $v?></td>
  <td class=xl27323 x:num><?= $jumlahpirep[$v]?></td>
  <td class=xl24323 x:num><?= $jumlahdelay[$v]?></td>
  <?
	foreach ($reg as $key => $value){
	$pirep[$v][$value] = isset($pirep[$v][$value]) ? $pirep[$v][$value] : 0;
	$delay[$v][$value] = isset($delay[$v][$value]) ? $delay[$v][$value] : 0;
  ?>
  <td class=xl24323 x:num><?= $pirep[$v][$value]?></td>
  <td class=xl24323 x:num><?= $delay[$v][$value]?></td>
  <?
	}
  ?>
 </tr>
<?
  }
?>
<!-- <tr class=xl22323 height=17 style='mso-height-source:userset;height:12.75pt'>
  <td height=17 class=xl28323 style='height:12.75pt'>OT</td>
  <td class=xl29323 x:num>0</td>
  <td class=xl30323 x:num>0</td>
  <td class=xl30323 x:num>0</td>
  <td class=xl30323 x:num>0</td>
  <td class=xl30323 x:num>0</td>
  <td class=xl30323 x:num>0</td>
  <td class=xl30323 x:num>0</td>
  <td class=xl30323 x:num>0</td>
  <td class=xl22323></td>
  <td class=xl22323></td>
  <td class=xl22323></td>
  <td class=xl22323></td>
  <td class=xl22323></td>
  <td class=xl22323></td>
  <td class=xl22323></td>
  <td class=xl22323></td>
  <td class=xl22323></td>
 </tr>-->
 <tr class=xl22323 height=18 style='mso-height-source:userset;height:13.5pt'>
  <td height=18 class=xl31323 style='height:13.5pt'><span
  style='mso-spacerun:yes'> </span>Total</td>
  <td class=xl32323 x:num><?= array_sum($jumlahpirep)?></td>
  <td class=xl33323 x:num><?= array_sum($jumlahdelay)?></td>
  <?
	foreach ($reg as $key => $value){
		$jmlhpirep = 0;$jmlhdelay = 0;
		foreach ($ATA as $k => $v){
			$jmlhpirep += $pirep[$v][$value];
			$jmlhdelay += $delay[$v][$value];
		}
	?>
  <td class=xl33323 x:num><?= $jmlhpirep?></td>
  <td class=xl33323 x:num><?= $jmlhdelay?></td>
  <?
  }
  ?>
 </tr>
 <tr class=xl34323 height=17 style='mso-height-source:userset;height:12.75pt'>
  <td height=68 class=xl39323 style='height:51.0pt;border-top:none'>Total
  Fhrs/Cycles</td>
  <td colspan=2 class=xl39323><?= array_sum($FH)?>/<?= array_sum($FC)?></td>
	<?
	foreach ($reg as $key => $value){
	$FH[$value] = isset($FH[$value]) ? $FH[$value] : 0;
	$FC[$value] = isset($FC[$value]) ? $FC[$value] : 0;
	?>
  <td colspan=2 class=xl39323><?= $FH[$value]?>/<?= $FC[$value]?></td>
	<?
	}
	?>
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
