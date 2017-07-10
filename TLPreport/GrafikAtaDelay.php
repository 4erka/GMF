<?
header("Content-Type: application/x-excel\n");
header("Pragma: no-cache"); 
header("Expires: 0");
header("Cache-Control:must-revalidate, post-check=0, pre-check=0");
header("content-disposition: attachment; filename=excel".$_REQUEST["actype"].".xls");
?>
<html xmlns:v="urn:schemas-microsoft-com:vml"
xmlns:o="urn:schemas-microsoft-com:office:office"
xmlns:x="urn:schemas-microsoft-com:office:excel"
xmlns="http://www.w3.org/TR/REC-html40">

<head>
<meta http-equiv=Content-Type content="text/html; charset=windows-1252">
<meta name=ProgId content=Excel.Sheet>
<meta name=Generator content="Microsoft Excel 11">
<link rel=File-List href="GrafikAtaPilot_files/filelist.xml">
<!--[if !mso]>
<style>
v\:* {behavior:url(#default#VML);}
o\:* {behavior:url(#default#VML);}
x\:* {behavior:url(#default#VML);}
.shape {behavior:url(#default#VML);}
</style>
<![endif]-->
<style id="Grafik Ata Pilot 0908_13144_Styles">
<!--table
	{mso-displayed-decimal-separator:"\.";
	mso-displayed-thousand-separator:"\,";}
.font513144
	{color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;}
.xl3013144
	{padding:0px;
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
.xl3113144
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:right;
	vertical-align:bottom;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl3213144
	{padding:0px;
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
.xl3313144
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM, sans-serif;
	mso-font-charset:0;
	mso-number-format:Fixed;
	text-align:general;
	vertical-align:bottom;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl3413144
	{padding:0px;
	mso-ignore:padding;
	color:black;
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
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl3513144
	{padding:0px;
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
	border-right:none;
	border-bottom:none;
	border-left:1.0pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl3613144
	{padding:0px;
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
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl3713144
	{padding:0px;
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
	border-top:none;
	border-right:none;
	border-bottom:none;
	border-left:1.0pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl3813144
	{padding:0px;
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
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl3913144
	{padding:0px;
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
	border-bottom:1.0pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl4013144
	{padding:0px;
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
	border-bottom:none;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl4113144
	{padding:0px;
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
	border:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl4213144
	{padding:0px;
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
	border-top:1.0pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl4313144
	{padding:0px;
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
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl4413144
	{padding:0px;
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
.xl4513144
	{padding:0px;
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
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:1.0pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl4613144
	{padding:0px;
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
.xl4713144
	{padding:0px;
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
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl4813144
	{padding:0px;
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
	border-right:none;
	border-bottom:none;
	border-left:1.0pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl4913144
	{padding:0px;
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
	border-bottom:none;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl5013144
	{padding:0px;
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
	border-right:none;
	border-bottom:1.0pt solid windowtext;
	border-left:1.0pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl5113144
	{padding:0px;
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
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl5213144
	{padding:0px;
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
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl5313144
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:700;
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
.xl5413144
	{padding:0px;
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
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl5513144
	{padding:0px;
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
	border:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl5613144
	{padding:0px;
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
.xl5713144
	{padding:0px;
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
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl5813144
	{padding:0px;
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
	border-top:none;
	border-right:none;
	border-bottom:1.0pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl5913144
	{padding:0px;
	mso-ignore:padding;
	color:black;
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
	border-right:none;
	border-bottom:1.0pt solid windowtext;
	border-left:1.0pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl6013144
	{padding:0px;
	mso-ignore:padding;
	color:black;
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
	border-bottom:1.0pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
-->

</style>
<?
  include("function.php");
  $periode = isset($_REQUEST["periode"]) ? $_REQUEST["periode"] : "";
  //$year = isset($_REQUEST["year"]) ? $_REQUEST["year"] : "";
  $actype = isset($_REQUEST["actype"]) ? $_REQUEST["actype"] : "";

  $TE = connectimesysTE();
  $arractype = selectactype();
  $arrperiode = selectperiode();

?>
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
	//die($timeakhir);
			if ($periode == "" OR $actype == ""){
			die("Please Select Aircraft Type And Periode");
			}
	
	$FC = queryFC12rev($periode,$actype,24);
	$bulan24 = array_keys($FC);//die(print_r($bulan24));
	$bulan = array_reverse(array_slice($bulan24,0,12));
	$ATAdata = ATAdelay($bulan24[23],$bulan24[0],$actype);//die(print_r($ATAdata));

	
	foreach ($bulan as $key => $value){
		if (substr($value,-2,2) <= 06){ // ambil kode bbulannya saja
			$timeatas[$value] = ((substr($value,0,4))-1)."-01";
			$timebawah[$value] = ((substr($value,0,4))-1)."-12";
		} else {
			$timeatas[$value] = ((substr($value,0,4))-1)."-07";
			$timebawah[$value] = (substr($value,0,4))."-06";
		}
		$alertlevel[$value] = alertdelay($timeatas[$value],$timebawah[$value],$actype);
	}
	//die(print_r($alertlevel));
	//$connectAMS = connectimesys('imesys');

	$ATA = ATAdef();
	$ATAdesc = ATAdesc();

	/*foreach ($ATAdata as $key => $value){
		foreach ($value as $k => $v){
			$jumlahrate[$k] = $v/$FH[$key] * 1000;
		}
		$ATArate[$key] = $jumlahrate;
	}

		if (substr($periode,-2,2) <= 06){
			$timestart = ((substr($periode,0,4))-1)."-12";
		} else {
			$timestart = ((substr($periode,0,4)))."-06";
		}
		$ataalert = array_slice($ATArate,array_search($timestart,$bulan24),12);
		//die(print_r($bulan));
		//die(print_r($ataalert));
	foreach ($ATA as $key => $value){
		$sigma_temp = 0;$jumlah = 0;
		foreach ($ataalert as $k => $v){
			$v[$value] = isset($v[$value]) ? $v[$value] : 0;
			$jumlah += $v[$value];
		}
		$mean = $jumlah/12;
		foreach ($ataalert as $k => $v){
			$v[$value] = isset($v[$value]) ? $v[$value] : 0;
			$sigma_temp += ($v[$value] - $mean) * ($v[$value] - $mean);
		}
		$standard_deviation = sqrt($sigma_temp / 12);
		$alertlevel[$value] = $mean + (2.5 * $standard_deviation);
	}*/
	mysql_close($connectTE);
	//die(print_r($alertlevel));
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

<div id="Grafik Ata Pilot 0908_13144" align=center x:publishsource="Excel">

<table x:str border=0 cellpadding=0 cellspacing=0 width=1819 class=xl3013144
 style='border-collapse:collapse;table-layout:fixed;width:1370pt'>
 <col class=xl3013144 width=28 style='mso-width-source:userset;mso-width-alt:
 1194;width:21pt'>
 <col class=xl3013144 width=180 style='mso-width-source:userset;mso-width-alt:
 7680;width:135pt'>
 <col class=xl3013144 width=58 style='mso-width-source:userset;mso-width-alt:
 2474;width:44pt'>
 <col class=xl3013144 width=55 style='mso-width-source:userset;mso-width-alt:
 2346;width:41pt'>
 <col class=xl3013144 width=53 span=6 style='mso-width-source:userset;
 mso-width-alt:2261;width:40pt'>
 <col class=xl3013144 width=55 style='mso-width-source:userset;mso-width-alt:
 2346;width:41pt'>
 <col class=xl3013144 width=53 span=17 style='mso-width-source:userset;
 mso-width-alt:2261;width:40pt'>
 <col class=xl3013144 width=56 span=4 style='width:42pt'>
 <tr height=18 style='height:13.5pt'>
  <td height=18 class=xl3013144 width=28 style='height:13.5pt;width:21pt'></td>
  <td class=xl3013144 width=180 style='width:135pt'></td>
  <td class=xl3013144 width=58 style='width:44pt'></td>
  <td class=xl3013144 width=55 style='width:41pt'></td>
  <td class=xl3013144 width=53 style='width:40pt'></td>
  <td class=xl3013144 width=53 style='width:40pt'></td>
  <td class=xl3013144 width=53 style='width:40pt'></td>
  <td class=xl3013144 width=53 style='width:40pt'></td>
  <td class=xl3013144 width=53 style='width:40pt'></td>
  <td class=xl3013144 width=53 style='width:40pt'></td>
  <td class=xl3013144 width=55 style='width:41pt'></td>
  <td class=xl3013144 width=53 style='width:40pt'></td>
  <td class=xl3013144 width=53 style='width:40pt'></td>
  <td class=xl3013144 width=53 style='width:40pt'></td>
  <td class=xl3013144 width=53 style='width:40pt'></td>
  <td class=xl3013144 width=53 style='width:40pt'></td>
  <td class=xl3013144 width=53 style='width:40pt'></td>
  <td class=xl3013144 width=53 style='width:40pt'></td>
  <td class=xl3013144 width=53 style='width:40pt'></td>
  <td class=xl3013144 width=53 style='width:40pt'></td>
  <td class=xl3013144 width=53 style='width:40pt'></td>
  <td class=xl3013144 width=53 style='width:40pt'></td>
  <td class=xl3013144 width=53 style='width:40pt'></td>
  <td class=xl3013144 width=53 style='width:40pt'></td>
  <td class=xl3013144 width=53 style='width:40pt'></td>
  <td class=xl3013144 width=53 style='width:40pt'></td>
  <td class=xl3013144 width=53 style='width:40pt'></td>
  <td class=xl3013144 width=53 style='width:40pt'></td>
  <td class=xl3013144 width=56 style='width:42pt'></td>
  <td class=xl3013144 width=56 style='width:42pt'></td>
  <td class=xl3013144 width=56 style='width:42pt'></td>
  <td class=xl3013144 width=56 style='width:42pt'></td>
 </tr>
 <tr height=18 style='height:13.5pt'>
  <td colspan=2 height=18 class=xl5913144 style='border-right:.5pt solid black;
  height:13.5pt'>REVENUE<span style='mso-spacerun:yes'>  </span>FLIGHT CYCLES</td>
<?
foreach ($bulan as $key => $value){
?>
  <td class=xl3413144 style='border-left:none' x:num><?= $FC[$value]?></td>
<?
}
?>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl3513144 style='height:12.75pt;border-top:none'>&nbsp;</td>
  <td align=left valign=top><!--[if gte vml 1]><v:shapetype id="_x0000_t202"
   coordsize="21600,21600" o:spt="202" path="m,l,21600r21600,l21600,xe">
   <v:stroke joinstyle="miter"/>
   <v:path gradientshapeok="t" o:connecttype="rect"/>
  </v:shapetype><v:shape id="Text_x0020_1" o:spid="_x0000_s5121" type="#_x0000_t202"
   style='position:absolute;margin-left:15pt;margin-top:6pt;width:97.5pt;
   height:14.25pt;z-index:1;mso-wrap-style:tight' filled="f" fillcolor="windowText [64]"
   stroked="f" strokecolor="windowText [64]" strokeweight="3e-5mm" o:insetmode="auto">
   <v:fill color2="window [65]"/>
   <x:ClientData ObjectType="Text">
    <x:AutoFill>False</x:AutoFill>
    <x:AutoLine>False</x:AutoLine>
    <x:TextHAlign>Center</x:TextHAlign>
    <x:TextVAlign>Center</x:TextVAlign>
   </x:ClientData>
  </v:shape><![endif]--><![if !vml]><span style='mso-ignore:vglayout;
  position:absolute;z-index:1;margin-left:20px;margin-top:8px;width:130px;
  height:19px'>
  <table cellpadding=0 cellspacing=0>
   <tr>
    <td width=130 height=19 align=center valign=middle style='vertical-align:
    top'><![endif]>
    <div v:shape="Text_x0020_1" style='padding:.75pt 0pt 0pt 0pt;text-align:
    center' class=shape><font class="font513144">ATA CHAPTER</font></div>
    <![if !vml]></td>
   </tr>
  </table>
  </span><![endif]><span style='mso-ignore:vglayout2'>
  <table cellpadding=0 cellspacing=0>
   <tr>
    <td height=17 class=xl3613144 width=180 style='height:12.75pt;border-top:
    none;width:135pt'>&nbsp;</td>
   </tr>
  </table>
  </span></td>
	<?
	foreach ($bulan as $key => $value){
	?>
  <td class=xl3613144><?= bulan($value)?></td>
	<?
	}
	?>
  <td class=xl3613144>ALERT</td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
 </tr>
 <tr height=18 style='height:13.5pt'>
  <td height=18 class=xl3713144 style='height:13.5pt'>&nbsp;</td>
  <td class=xl3813144>&nbsp;</td>
  <td class=xl3913144 style='border-left:none'>&nbsp;</td>
  <td class=xl3913144 style='border-left:none'>&nbsp;</td>
  <td class=xl3913144 style='border-left:none'>&nbsp;</td>
  <td class=xl3913144 style='border-left:none'>&nbsp;</td>
  <td class=xl3913144 style='border-left:none'>&nbsp;</td>
  <td class=xl3913144 style='border-left:none'>&nbsp;</td>
  <td class=xl3913144 style='border-left:none'>&nbsp;</td>
  <td class=xl3913144 style='border-left:none'>&nbsp;</td>
  <td class=xl3913144 style='border-left:none'>&nbsp;</td>
  <td class=xl3913144 style='border-left:none'>&nbsp;</td>
  <td class=xl3913144 style='border-left:none'>&nbsp;</td>
  <td class=xl3913144 style='border-left:none'>&nbsp;</td>
  <td class=xl3913144 style='border-left:none'>LEVEL</td>
  <td class=xl3113144></td>
<?
foreach ($bulan as $key => $value){
?>
  <td class=xl3213144><?= bulan($value)?></td>
<?
}
?>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
 </tr>
 <?
 foreach ($ATA as $k => $v){
	 $alertlevel[$periode][$v] = isset($alertlevel[$periode][$v]) ? $alertlevel[$periode][$v] : 0;
 ?>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl3513144 style='height:12.75pt' x:num><?= $v?></td>
  <td class=xl4013144><?= $ATAdesc[$k]?></td>
  <?
	 foreach ($bulan as $key => $value){
	 $ATAdata[$value][$v] = isset($ATAdata[$value][$v]) ? $ATAdata[$value][$v] : 0;
  ?>
  <td class=xl4213144 style='border-top:none;border-left:none' x:num><?= $ATAdata[$value][$v]?></td>
  <?
	}
  ?>
  <td class=xl4313144 style='border-left:none' x:num><?= round($alertlevel[$periode][$v],2)?></td>
  <td class=xl3113144>alert</td>
  <?
	 foreach ($bulan as $key => $value){
	  $alertlevel[$value][$v] = isset($alertlevel[$value][$v]) ? $alertlevel[$value][$v] : 0;
  ?>
  <td class=xl4413144 x:num><?= round($alertlevel[$value][$v],2)?></td>
  <?
  }
  ?>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl4513144 style='height:12.75pt'>&nbsp;</td>
  <td class=xl4613144>&nbsp;</td>
  <td class=xl4113144 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl4113144 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl4113144 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl4113144 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl5413144>&nbsp;</td>
  <td class=xl4113144 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl4113144 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl4113144 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl5513144 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl4113144 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl4113144 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl4113144 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl4413144 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl3113144>rate</td>
  <?
	  foreach ($bulan as $key => $value){
  ?>
  <td class=xl3313144 align=right x:num><?= round(($ATAdata[$value][$v]/$FC[$value] * 1000),2)?></td>
  <?
	}
  ?>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl3713144 style='height:12.75pt'>&nbsp;</td>
  <td class=xl4713144>&nbsp;</td>
  <td class=xl4113144 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl4113144 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl4113144 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl4113144 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl5413144>&nbsp;</td>
  <td class=xl4113144 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl4113144 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl4113144 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl5513144 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl4113144 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl4113144 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl4113144 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl4413144 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl3113144></td>
<?
	foreach ($bulan as $key => $value){
?>
  <td class=xl3213144><?= bulan($value)?></td>
<?
	}
?>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
 </tr>
<?
}	 
?>
  <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl3513144 style='height:12.75pt' x:num>OT</td>
  <td class=xl4013144>OTHER</td>
  <?
	 foreach ($bulan as $key => $value){
	 $ATAdata[$value]['OT'] = isset($ATAdata[$value]['OT']) ? $ATAdata[$value]['OT'] : 0;
  ?>
  <td class=xl4213144 style='border-top:none;border-left:none' x:num><?= $ATAdata[$value]['OT']?></td>
  <?
	}
	$alertlevel[$periode]['5'] = isset($alertlevel[$periode]['5']) ? $alertlevel[$periode]['5'] : 0;
  ?>
  <td class=xl4313144 style='border-left:none' x:num><?= round($alertlevel[$periode]['5'],2)?></td>
  <td class=xl3113144>alert</td>
  <?
	 foreach ($bulan as $key => $value){
	  $alertlevel[$value]['5'] = isset($alertlevel[$value]['5']) ? $alertlevel[$value]['5'] : 0;
  ?>
  <td class=xl4413144 x:num><?= round($alertlevel[$value]['5'],2)?></td>
  <?
  }
  ?>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl4513144 style='height:12.75pt'>&nbsp;</td>
  <td class=xl4613144>&nbsp;</td>
  <td class=xl4113144 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl4113144 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl4113144 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl4113144 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl5413144>&nbsp;</td>
  <td class=xl4113144 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl4113144 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl4113144 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl5513144 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl4113144 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl4113144 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl4113144 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl4413144 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl3113144>rate</td>
  <?
	  foreach ($bulan as $key => $value){
  ?>
  <td class=xl3313144 align=right x:num><?= round(($ATAdata[$value]['OT']/$FC[$value] * 1000),2)?></td>
  <?
	}
  ?>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl3713144 style='height:12.75pt'>&nbsp;</td>
  <td class=xl4713144>&nbsp;</td>
  <td class=xl4113144 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl4113144 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl4113144 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl4113144 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl5413144>&nbsp;</td>
  <td class=xl4113144 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl4113144 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl4113144 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl5513144 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl4113144 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl4113144 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl4113144 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl4413144 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl3113144></td>
<?
	foreach ($bulan as $key => $value){
?>
  <td class=xl3213144><?= bulan($value)?></td>
<?
	}
?>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl3013144 style='height:12.75pt'></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl3013144 style='height:12.75pt'></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl3013144 style='height:12.75pt'></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl3013144 style='height:12.75pt'></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
 </tr>
 <tr height=18 style='height:13.5pt'>
  <td height=18 class=xl3013144 style='height:13.5pt'></td>
  <td class=xl3013144></td>
  <td class=xl5813144>&nbsp;</td>
  <td class=xl5813144>&nbsp;</td>
  <td class=xl5813144>&nbsp;</td>
  <td class=xl5813144>&nbsp;</td>
  <td class=xl5813144>&nbsp;</td>
  <td class=xl5813144>&nbsp;</td>
  <td class=xl5813144>&nbsp;</td>
  <td class=xl5813144>&nbsp;</td>
  <td class=xl5813144>&nbsp;</td>
  <td class=xl5813144>&nbsp;</td>
  <td class=xl5813144>&nbsp;</td>
  <td class=xl5813144>&nbsp;</td>
  <td class=xl5813144>&nbsp;</td>
  <td class=xl5813144>&nbsp;</td>
  <td class=xl5813144>&nbsp;</td>
  <td class=xl5813144>&nbsp;</td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl3013144 style='height:12.75pt'></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl3013144 style='height:12.75pt'></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl3013144 style='height:12.75pt'></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl3013144 style='height:12.75pt'></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl5313144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
  <td class=xl3013144></td>
 </tr>
 <![if supportMisalignedColumns]>
 <tr height=0 style='display:none'>
  <td width=28 style='width:21pt'></td>
  <td width=180 style='width:135pt'></td>
  <td width=58 style='width:44pt'></td>
  <td width=55 style='width:41pt'></td>
  <td width=53 style='width:40pt'></td>
  <td width=53 style='width:40pt'></td>
  <td width=53 style='width:40pt'></td>
  <td width=53 style='width:40pt'></td>
  <td width=53 style='width:40pt'></td>
  <td width=53 style='width:40pt'></td>
  <td width=55 style='width:41pt'></td>
  <td width=53 style='width:40pt'></td>
  <td width=53 style='width:40pt'></td>
  <td width=53 style='width:40pt'></td>
  <td width=53 style='width:40pt'></td>
  <td width=53 style='width:40pt'></td>
  <td width=53 style='width:40pt'></td>
  <td width=53 style='width:40pt'></td>
  <td width=53 style='width:40pt'></td>
  <td width=53 style='width:40pt'></td>
  <td width=53 style='width:40pt'></td>
  <td width=53 style='width:40pt'></td>
  <td width=53 style='width:40pt'></td>
  <td width=53 style='width:40pt'></td>
  <td width=53 style='width:40pt'></td>
  <td width=53 style='width:40pt'></td>
  <td width=53 style='width:40pt'></td>
  <td width=53 style='width:40pt'></td>
  <td width=56 style='width:42pt'></td>
  <td width=56 style='width:42pt'></td>
  <td width=56 style='width:42pt'></td>
  <td width=56 style='width:42pt'></td>
 </tr>
 <![endif]>
</table>

</div>


<!----------------------------->
<!--END OF OUTPUT FROM EXCEL PUBLISH AS WEB PAGE WIZARD-->
<!----------------------------->
</body>

</html>
