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
<link rel=File-List href="AOS_files/filelist.xml">
<style id="AOS_1976_Styles">
<!--table
	{mso-displayed-decimal-separator:"\.";
	mso-displayed-thousand-separator:"\,";}
.xl321976
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:14.0pt;
	font-weight:700;
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
	background:white;
	mso-pattern:auto none;
	white-space:nowrap;}
.xl331976
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:14.0pt;
	font-weight:700;
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
	border-left:none;
	background:white;
	mso-pattern:auto none;
	white-space:nowrap;}
.xl341976
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:14.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:1.0pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:none;
	border-left:none;
	background:white;
	mso-pattern:auto none;
	white-space:nowrap;}
.xl351976
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl361976
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:14.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:1.0pt solid windowtext;
	border-left:1.0pt solid windowtext;
	background:white;
	mso-pattern:auto none;
	white-space:nowrap;}
.xl371976
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:14.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:1.0pt solid windowtext;
	border-left:none;
	background:white;
	mso-pattern:auto none;
	white-space:nowrap;}
.xl381976
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:14.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:1.0pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:none;
	background:white;
	mso-pattern:auto none;
	white-space:nowrap;}
.xl391976
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:14.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border-top:1.0pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:1.0pt solid windowtext;
	background:white;
	mso-pattern:auto none;
	white-space:nowrap;}
.xl401976
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
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border-top:1.0pt solid windowtext;
	border-right:none;
	border-bottom:1.0pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl411976
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:10.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:1.0pt solid windowtext;
	border-right:none;
	border-bottom:1.0pt solid windowtext;
	border-left:.5pt solid windowtext;
	background:white;
	mso-pattern:auto none;
	white-space:nowrap;}
.xl421976
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:10.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:1.0pt solid windowtext;
	border-right:none;
	border-bottom:1.0pt solid windowtext;
	border-left:none;
	background:white;
	mso-pattern:auto none;
	white-space:nowrap;}
.xl431976
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:14.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border-top:1.0pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	background:white;
	mso-pattern:auto none;
	white-space:nowrap;}
.xl441976
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border-top:1.0pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:1.0pt solid windowtext;
	background:white;
	mso-pattern:auto none;
	white-space:nowrap;}
.xl451976
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:10.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:1.0pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	background:white;
	mso-pattern:auto none;
	white-space:nowrap;}
.xl461976
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:10.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:0;
	text-align:center;
	vertical-align:middle;
	border-top:1.0pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	background:white;
	mso-pattern:auto none;
	white-space:nowrap;}
.xl471976
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:10.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:0;
	text-align:center;
	vertical-align:middle;
	border-top:1.0pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	background:white;
	mso-pattern:auto none;
	white-space:nowrap;}
.xl481976
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
	mso-font-charset:0;
	mso-number-format:0;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl491976
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
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl501976
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
	mso-font-charset:0;
	mso-number-format:0;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:1.0pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto none;
	white-space:nowrap;}
.xl511976
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
	mso-font-charset:0;
	mso-number-format:Fixed;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl521976
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
	mso-font-charset:0;
	mso-number-format:Fixed;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:1.0pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl531976
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
	mso-font-charset:0;
	mso-number-format:Fixed;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:1.0pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto none;
	white-space:nowrap;}
.xl541976
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:Fixed;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:1.0pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl551976
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border-top:none;
	border-right:1.0pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:1.0pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl561976
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl571976
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl581976
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:0;
	text-align:general;
	vertical-align:bottom;
	border-top:none;
	border-right:1.0pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl591976
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:0;
	text-align:general;
	vertical-align:bottom;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl601976
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl611976
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border-top:none;
	border-right:1.0pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:1.0pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl621976
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
	mso-font-charset:0;
	mso-number-format:Fixed;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl631976
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
	mso-font-charset:0;
	mso-number-format:Fixed;
	text-align:center;
	vertical-align:middle;
	border:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl641976
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
	mso-font-charset:0;
	mso-number-format:Fixed;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl651976
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
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl661976
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
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl671976
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
	mso-font-charset:0;
	mso-number-format:Fixed;
	text-align:center;
	vertical-align:middle;
	border:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto none;
	white-space:nowrap;}
.xl681976
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
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl691976
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:0;
	text-align:left;
	vertical-align:middle;
	border-top:none;
	border-right:1.0pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:1.0pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl701976
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
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
-->

</style>
<?
  include("function.php");
  $periode = isset($_REQUEST["periode"]) ? $_REQUEST["periode"] : "";
  $actype = isset($_REQUEST["actype"]) ? $_REQUEST["actype"] : "";

	$TE = connectimesysTE();
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
	//$bulan = array_reverse(array_keys($FH));
	$FHrev = queryFH12rev($periode,$actype);
	$FC = queryFC12($periode,$actype,12);
	$FCrev = queryFC12rev($periode,$actype);
	$fleet = fleet($periode,$actype);
	$available = available($bulan[0],$bulan[11],$actype);
	

	//last year
	$periodelastyear = (substr($periode,0,4) - 1)."-12";
	$FHlastyear = queryFH12($periodelastyear,$actype,12);
	$FHrevlastyear = queryFH12rev($periodelastyear,$actype);
	$FClastyear = queryFC12($periodelastyear,$actype,12);
	$FCrevlastyear = queryFC12rev($periodelastyear,$actype);
	$fleetlastyear = fleet($periodelastyear,$actype);
	$availablelastyear = available((substr($periode,0,4) - 1)."-01",(substr($periode,0,4) - 1)."-12",$actype);

	$delay = ATAdelay($bulan[0],$bulan[11],$actype);//die(print_r($delay));
	foreach($delay as $k => $v){
		foreach($v as $key => $value){
			$ATA[$key] = $value;
		}
		$jumlah = array_sum($v);
		$techdelay[$k] = $jumlah;
	}
	//die(print_r($techdelay));
	$delaydurationmenit = delayduration($bulan[0],$bulan[11],$actype);
	foreach ($delaydurationmenit as $key => $value){
		$delayduration[$key] = (($value - ($value % 60))/60)." : ".($value % 60);
	}
	//die(print_r($delayduration));
	$cancel = querycancel($bulan[0],$bulan[11],$actype);
	
	//last year
	$delaylastyear = ATAdelay((substr($periode,0,4) - 1)."-01",(substr($periode,0,4) - 1)."-12",$actype);
	foreach($delaylastyear as $k => $v){
		foreach($v as $key => $value){
			$ATA[$key] = $value;
		}
		$jumlah = array_sum($v);
		$techdelaylastyear[$k] = $jumlah;
	}
	$delaydurationmenitlastyear = delayduration((substr($periode,0,4) - 1)."-01",(substr($periode,0,4) - 1)."-12",$actype);
	foreach ($delaydurationmenitlastyear as $key => $value){
		$delaydurationlastyear[$key] = (($value - ($value % 60))/60)." : ".($value % 60);
	}
	$cancellastyeardata = querycancel((substr($periode,0,4) - 1)."-01",(substr($periode,0,4) - 1)."-12",$actype);
	$cancellastyear = ($cancellastyeardata <> "") ? array_sum($cancellastyeardata) : 0;

	$qryincident = "SELECT Count(`tbl_sdr`.`ACTYPE`) AS `jumlah`, DATE_FORMAT(`tbl_sdr`.`DateOccur`,'%Y-%m') AS `bulan` FROM `tbl_sdr` WHERE `tbl_sdr`.`ACTYPE` = '".$actype."' AND (DATE_FORMAT(`tbl_sdr`.`DateOccur`,'%Y-%m') BETWEEN '".$bulan[0]."' AND '".$bulan[11]."') GROUP BY DATE_FORMAT(`tbl_sdr`.`DateOccur`,'%Y-%m')";
	$resultincident = mysql_query($qryincident);
	//die($qryFH);
	while ($hasilincident = mysql_fetch_array($resultincident))
	{
		$incident[$hasilincident["bulan"]] = $hasilincident["jumlah"];
	}

	$qryincidentlastyear = "SELECT Count(`tbl_sdr`.`ACTYPE`) AS `jumlah`, DATE_FORMAT(`tbl_sdr`.`DateOccur`,'%Y-%m') AS `bulan` FROM `tbl_sdr` WHERE `tbl_sdr`.`ACTYPE` = '".$actype."' AND (DATE_FORMAT(`tbl_sdr`.`DateOccur`,'%Y-%m') BETWEEN '".(substr($periode,0,4) - 1)."-01' AND '".(substr($periode,0,4) - 1)."-12') GROUP BY DATE_FORMAT(`tbl_sdr`.`DateOccur`,'%Y-%m')";
	$resultincident = mysql_query($qryincidentlastyear);
	//die($qryFH);
	while ($hasilincident = mysql_fetch_array($resultincident))
	{
		$incidentlastyear[$hasilincident["bulan"]] = $hasilincident["jumlah"];
	}

	/*$connectnih = connectimesys('rmd');

	//$connectAMS = connectimesys('imesys');
	
	$qryincident = "SELECT Count(`relsummary`.`ACType`) AS `Jumlah`, DATE_FORMAT(`relsummary`.`DateIssued`,'%Y-%m') AS `periode` FROM `relsummary` WHERE (DATE_FORMAT(relsummary.DateIssued,'%Y-%m') BETWEEN '".$bulan[0]."' AND '".$bulan[11]."') AND `relsummary`.`ACType` = '".$actype."' AND `relsummary`.`Reference` = 'SDR' GROUP BY DATE_FORMAT(`relsummary`.`DateIssued`,'%Y-%m') ORDER BY DATE_FORMAT(`relsummary`.`DateIssued`,'%Y-%m') DESC LIMIT 12";
	$resultincident = mysql_query($qryincident);
	//die($qryFH);
	while ($hasilincident = mysql_fetch_array($resultincident))
	{
		$incident[$hasilincident["periode"]] = $hasilincident["Jumlah"];
	}

	$qryincidentlastyear = "SELECT Count(`relsummary`.`ACType`) AS `Jumlah`, DATE_FORMAT(`relsummary`.`DateIssued`,'%Y-%m') AS `periode` FROM `relsummary` WHERE (DATE_FORMAT(relsummary.DateIssued,'%y-%m') BETWEEN '".(substr($periode,0,4) - 1)."-01' AND '".(substr($periode,0,4) - 1)."-12') AND `relsummary`.`ACType` = '".$actype."' AND `relsummary`.`Reference` = 'SDR' GROUP BY DATE_FORMAT(`relsummary`.`DateIssued`,'%Y-%m') ORDER BY DATE_FORMAT(`relsummary`.`DateIssued`,'%Y-%m') DESC LIMIT 12";
	$resultincident = mysql_query($qryincidentlastyear);
	//die($qryFH);
	while ($hasilincident = mysql_fetch_array($resultincident))
	{
		$incidentlastyear[$hasilincident["periode"]] = $hasilincident["Jumlah"];
	}*/
	
	foreach ($bulan as $k => $v){
		$incident[$v] = isset($incident[$v]) ? $incident[$v] : 0;
		$incidentlastyear[$v] = isset($incidentlastyear[$v]) ? $incidentlastyear[$v] : 0;
	}
	$jumlahincident = array_sum($incident);
	$jumlahincidentlastyear = array_sum($incidentlastyear);

	//buat halaman
	if ($actype == "A330-300"){
		$page = "A";
	} else if ($actype == "B737-300"){
		$page = "B";
	} else if ($actype == "B737-400"){
		$page = "C";
	} else if ($actype == "B737-500"){
		$page = "D";
	} else if ($actype == "B747-400"){
		$page = "E";
	} else {
		$page = "F";
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

<div id="AOS_1976" align=center x:publishsource="Excel">

<table x:str border=0 cellpadding=0 cellspacing=0 width=969 class=xl351976
 style='border-collapse:collapse;table-layout:fixed;width:724pt'>
 <col class=xl351976 width=193 style='mso-width-source:userset;mso-width-alt:
 7058;width:145pt'>
 <col class=xl351976 width=57 style='mso-width-source:userset;mso-width-alt:
 2084;width:43pt'>
 <col class=xl351976 width=51 span=12 style='mso-width-source:userset;
 mso-width-alt:1865;width:38pt'>
 <col class=xl351976 width=107 style='mso-width-source:userset;mso-width-alt:
 3913;width:80pt'>
 <tr height=22 style='mso-height-source:userset;height:16.5pt'>
  <td colspan=15 height=22 class=xl321976 width=969 style='border-right:1.0pt solid black;
  height:16.5pt;width:724pt'><a name="RANGE!A1:O28">AIRCRAFT OPERATION SUMMARY
  <?= (substr($periode,0,4) - 1)?>/<?= substr($periode,0,4)?></a></td>
 </tr>
 <tr height=22 style='mso-height-source:userset;height:16.5pt'>
  <td colspan=15 height=22 class=xl361976 style='border-right:1.0pt solid black;
  height:16.5pt'><?= (($actype == "A330-300") ? "AIRBUS" : "BOEING")?> <?= $actype?><span
  style='mso-spacerun:yes'> </span></td>
 </tr>
 <tr height=23 style='mso-height-source:userset;height:17.45pt'>
  <td height=23 class=xl391976 style='height:17.45pt;border-top:none'>&nbsp;</td>
  <td class=xl401976 style='border-top:none'>&nbsp;</td>
  <td colspan=12 class=xl411976><?= (substr($periode,0,4) - 1)?> - <?= substr($periode,0,4)?></td>
  <td class=xl431976 style='border-top:none'>&nbsp;</td>
 </tr>
 <tr height=23 style='mso-height-source:userset;height:17.45pt'>
  <td height=23 class=xl441976 style='height:17.45pt'>&nbsp;</td>
  <td class=xl451976 style='border-top:none' x:num><?= (substr($periode,0,4) - 1)?></td>
  <?
	foreach ($bulan as $key => $value){
		$techdelay[$value] = isset($techdelay[$value]) ? $techdelay[$value] : 0;
		$delayduration[$value] = isset($delayduration[$value]) ? $delayduration[$value] : 0;
		$avgduration[$value] = isset($delaydurationmenit[$value]) ? round($delaydurationmenit[$value] / $techdelay[$value],0) : 0;
		$avgduration[$value] = round(($avgduration[$value] - ($avgduration[$value] % 60))/60)." : ".($avgduration[$value] % 60);
		$avgduration[$value] = isset($avgduration[$value]) ? $avgduration[$value] : 0;
		$delayrate[$value] = (isset($FCrev[$value]) && ($FCrev{$value} <> 0)) ? $techdelay[$value] / $FCrev[$value] * 100 : 0;
		$delayratelastyear = isset($FCrevlastyear) ? (array_sum($techdelaylastyear) / array_sum($FCrevlastyear) * 100) : 0;
		$cancel[$value] = isset($cancel[$value]) ? $cancel[$value] : 0;
	?>
  <td class=xl461976 style='border-top:none'><?= bulan($value)?></td>
  <?
		}
   ?>
  <td class=xl471976>LAST 12 MTHS</td>
 </tr>
 <tr height=23 style='mso-height-source:userset;height:17.45pt'>
  <td height=23 class=xl611976 style='height:17.45pt'>A/C In Fleet</td>
  <td class=xl481976 x:num><?= round(array_sum($fleetlastyear)/12,0)?></td>
  <?
		foreach ($bulan as $key => $value){
	?>
  <td class=xl491976 x:num><?= isset($fleet[$value]) ? $fleet[$value] : 0?></td>
  <?
		}
   ?>
  <td class=xl501976 x:num x:fmla="=SUM(C5:N5)/12"></td>
 </tr>
 <tr height=23 style='mso-height-source:userset;height:17.45pt'>
  <td height=23 class=xl611976 style='height:17.45pt'>A/C In Service ( Revenue
  )</td>
  <td class=xl511976 x:num><?= round(array_sum($availablelastyear)/365,2)?></td>
  <?
		foreach ($bulan as $key => $value){
  ?>
  <td class=xl511976 x:num><?= round($available[$value]/jumlahbulan($value),2)?></td>
   <?
		}
   ?>
  <td class=xl521976><?= round(array_sum($available)/365,2)?></td>
 </tr>
 <tr height=23 style='mso-height-source:userset;height:17.45pt'>
  <td height=23 class=xl611976 style='height:17.45pt'>A/C Days In Service
  (Revenue)</td>
  <td class=xl491976 x:num><?= array_sum($availablelastyear)?></td>
  <?
		foreach ($bulan as $key => $value){
  ?>
  <td class=xl491976 x:num><?= isset($available[$value]) ? $available[$value] : 0?></td>
   <?
		}
   ?>
  <td class=xl501976 x:num x:fmla="=SUM(C7:N7)"></td>
 </tr>
 <tr height=23 style='mso-height-source:userset;height:17.45pt'>
  <td height=23 class=xl611976 style='height:17.45pt'>Flying
  Hours(Airbone)-Total</td>
  <td class=xl491976 x:num><?= array_sum($FHlastyear)?></td>
  <?
		foreach ($bulan as $key => $value){
  ?>
  <td class=xl491976 x:num><?= isset($FH[$value]) ? $FH[$value] : 0?></td>
  <?
		}
   ?>
  <td class=xl501976 x:num x:fmla="=SUM(C8:N8)"></td>
 </tr>
 <tr height=23 style='mso-height-source:userset;height:17.45pt'>
  <td height=23 class=xl611976 style='height:17.45pt'><span
  style='mso-spacerun:yes'>                     </span>-Revenue</td>
  <td class=xl491976 x:num><?= array_sum($FHrevlastyear)?></td>
  <?
		foreach ($bulan as $key => $value){
  ?>
  <td class=xl491976 x:num><?= isset($FHrev[$value]) ? $FHrev[$value] : 0?></td>
  <?
		}
   ?>  
  <td class=xl501976 x:num x:fmla="=SUM(C9:N9)"></td>
 </tr>
 <tr height=23 style='mso-height-source:userset;height:17.45pt'>
  <td height=23 class=xl611976 style='height:17.45pt'>Take-Offs - Total</td>
  <td class=xl491976 x:num><?= array_sum($FClastyear)?></td>
<?
		foreach ($bulan as $key => $value){
  ?>
  <td class=xl491976 x:num><?= isset($FC[$value]) ? $FC[$value] : 0?></td>
  <?
		}
   ?> 
  <td class=xl501976 x:num x:fmla="=SUM(C10:N10)"></td>
 </tr>
 <tr height=23 style='mso-height-source:userset;height:17.45pt'>
  <td height=23 class=xl611976 style='height:17.45pt'><span
  style='mso-spacerun:yes'>                </span>- Revenue</td>
  <td class=xl491976 x:num><?= array_sum($FCrevlastyear)?></td>
<?
		foreach ($bulan as $key => $value){
  ?>
  <td class=xl491976 x:num><?= isset($FCrev[$value]) ? $FCrev[$value] : 0?></td>
  <?
		}
   ?> 
  <td class=xl501976 x:num x:fmla="=SUM(C11:N11)"></td>
 </tr>
 <tr height=23 style='mso-height-source:userset;height:17.45pt'>
  <td height=23 class=xl611976 style='height:17.45pt'>Fly.Hours Per Take
  Offs-Total(*)</td>
  <td class=xl621976><?= ((array_sum($FHlastyear) - (array_sum($FHlastyear) % array_sum($FClastyear)))/array_sum($FClastyear))." : ".round(((array_sum($FHlastyear) % array_sum($FClastyear))/array_sum($FClastyear)*60),0)?></td>
  <?
		foreach ($bulan as $key => $value){
  ?>
  <td class=xl631976 style='border-top:none' x:str><?= ((isset($FH[$value]) && ($FH[$value] <> 0)) ? (($FH[$value] - ($FH[$value] % $FC[$value]))/$FC[$value]) : 0)." : ".((isset($FH[$value]) && ($FH[$value] <> 0)) ? round((($FH[$value] % $FC[$value])/$FC[$value]*60),0) : 0)?></td>
  <?
		}
   ?>   
  <td class=xl521976><?= (array_sum($FH) - (array_sum($FH) % array_sum($FC)))/array_sum($FC)." : ".round(((array_sum($FH) % array_sum($FC))/array_sum($FC)*60),0)?></td>
 </tr>
 <tr height=23 style='mso-height-source:userset;height:17.45pt'>
  <td height=23 class=xl611976 style='height:17.45pt'><span
  style='mso-spacerun:yes'>                </span>- Revenue (*)</td>
  <td class=xl621976 x:str><?= ((array_sum($FHrevlastyear) - (array_sum($FHrevlastyear) % array_sum($FCrevlastyear)))/array_sum($FCrevlastyear))." : ".round(((array_sum($FHrevlastyear) % array_sum($FCrevlastyear))/array_sum($FCrevlastyear)*60),0)?></td>
	  <?
		foreach ($bulan as $key => $value){
  ?>
  <td class=xl631976 style='border-top:none' x:str><?= ((isset($FHrev[$value]) && ($FHrev[$value] <> 0)) ? (($FHrev[$value] - ($FHrev[$value] % $FCrev[$value]))/$FCrev[$value]) : 0)." : ".((isset($FHrev[$value]) && ($FHrev[$value] <> 0)) ? round((($FHrev[$value] % $FCrev[$value])/$FCrev[$value]*60),0) : 0)?></td>
<?
		}
   ?> 
  <td class=xl521976><?= (array_sum($FHrev) - (array_sum($FHrev) % array_sum($FCrev)))/array_sum($FCrev)." : ".round(((array_sum($FHrev) % array_sum($FCrev))/array_sum($FCrev)*60),0)?></td>
 </tr>
 <tr height=23 style='mso-height-source:userset;height:17.45pt'>
  <td height=23 class=xl611976 style='height:17.45pt'>Daily
  Utiliz.-Tot.Fly.Hours(*)</td>
  <td class=xl621976 x:str><?= ((array_sum($FHlastyear)-(array_sum($FHlastyear)%array_sum($availablelastyear)))/array_sum($availablelastyear))." : ".round(((array_sum($FHlastyear)%array_sum($availablelastyear))/array_sum($availablelastyear)*60),0)?></div></td></td>
	  <?
		foreach ($bulan as $key => $value){
  ?>
  <td class=xl631976 style='border-top:none' x:str><?= ((isset($FH[$value]) && ($FH[$value] <> 0)) ? (($FH[$value]-($FH[$value]%$available[$value]))/$available[$value]) : 0)." : ".((isset($FH[$value]) && ($FH[$value] <> 0)) ? round((($FH[$value]%$available[$value])/$available[$value]*60),0) : 0)?></td>
<?
		}
   ?>   
  <td class=xl521976><?= ((array_sum($FH)-(array_sum($FH)%array_sum($available)))/array_sum($available))." : ".round(((array_sum($FH)%array_sum($available))/array_sum($available)*60),0)?></td>
 </tr>
 <tr height=23 style='mso-height-source:userset;height:17.45pt'>
  <td height=23 class=xl611976 style='height:17.45pt'>
  
  <span
  style='mso-spacerun:yes'>             </span>-Rev.Fly.Hours(*)</td>
  <td class=xl621976><?= ((array_sum($FHrevlastyear)-(array_sum($FHrevlastyear)%array_sum($availablelastyear)))/array_sum($availablelastyear))." : ".round(((array_sum($FHrevlastyear)%array_sum($availablelastyear))/array_sum($availablelastyear)*60),0)?></td>
	  <?
		foreach ($bulan as $key => $value){
  ?>
  <td class=xl631976 style='border-top:none' x:str><?= ((isset($FHrev[$value]) && ($FHrev[$value] <> 0)) ? (($FHrev[$value]-($FHrev[$value]%$available[$value]))/$available[$value]) : 0)." : ".((isset($FHrev[$value]) && ($FHrev[$value] <> 0)) ? round((($FHrev[$value]%$available[$value])/$available[$value]*60),0) : 0)?></td>
 <?
		}
   ?> 
  <td class=xl521976><?= ((array_sum($FHrev)-(array_sum($FHrev)%array_sum($available)))/array_sum($available))." : ".round(((array_sum($FHrev)%array_sum($available))/array_sum($available)*60),0)?></td>
 </tr>
 <tr height=23 style='mso-height-source:userset;height:17.45pt'>
  <td height=23 class=xl611976 style='height:17.45pt'><span
  style='mso-spacerun:yes'>             </span>-Tot.Take Offs</td>
  <td class=xl511976 x:num><?= round(array_sum($FClastyear)/array_sum($availablelastyear),2)?></td>
	  <?
		foreach ($bulan as $key => $value){
  ?>
  <td class=xl511976 x:num><?= (isset($FC[$value]) && ($FC[$value] <> 0)) ? round($FC[$value]/$available[$value],2) : 0?></td>
  <?
		}
   ?> 
  <td class=xl521976><?= round(array_sum($FC)/array_sum($available),2)?></td>
 </tr>
 <tr height=23 style='mso-height-source:userset;height:17.45pt'>
  <td height=23 class=xl611976 style='height:17.45pt'><span
  style='mso-spacerun:yes'>             </span>-Rev.Take Offs</td>
  <td class=xl631976 style='border-top:none' x:num><?= round(array_sum($FCrevlastyear)/array_sum($availablelastyear),2)?></td>
	  <?
		foreach ($bulan as $key => $value){
  ?>
  <td class=xl631976 style='border-top:none;border-left:none' x:num><?= (isset($FC[$value]) && ($FC[$value] <> 0)) ? round($FCrev[$value]/$available[$value],2) : 0?></td>
  <?
		}
   ?>   
  <td class=xl641976 style='border-top:none;border-left:none'><?= round(array_sum($FCrev)/array_sum($available),2)?></td>
 </tr>
 <tr height=23 style='mso-height-source:userset;height:17.45pt'>
  <td height=23 class=xl611976 style='height:17.45pt'>Tech.Delay -Tot Over 15
  Min</td>
  <td class=xl651976 x:num><?= array_sum($techdelaylastyear)?></td>
	  <?
		foreach ($bulan as $key => $value){
  ?>
  <td class=xl661976 style='border-top:none' x:num><?= $techdelay[$value]?></td>
  <?
		}
   ?>   
  <td class=xl501976 x:num x:fmla="=SUM(C18:N18)"></td>
 </tr>
 <tr height=23 style='mso-height-source:userset;height:17.45pt'>
  <td height=23 class=xl611976 style='height:17.45pt'><span
  style='mso-spacerun:yes'>    </span>- Tot.Duration(*)</td>
  <td class=xl671976 style='border-top:none' x:str><?= round(array_sum($delaydurationmenitlastyear)/60,0)." : ".(array_sum($delaydurationmenitlastyear) % 60)?></td>
	  <?
		foreach ($bulan as $key => $value){
  ?>
  <td class=xl681976 style='border-top:none;border-left:none'><?= $delayduration[$value]?></td>
  <?
		}
   ?>   
  <td class=xl531976><?= round(array_sum($delaydurationmenit)/60,0)." : ".(array_sum($delaydurationmenit) % 60)?></td>
 </tr>
 <tr height=23 style='mso-height-source:userset;height:17.45pt'>
  <td height=23 class=xl611976 style='height:17.45pt'><span
  style='mso-spacerun:yes'>    </span>- Avg.Duration(*)</td>
  <td class=xl621976 x:str><?= round(array_sum($delaydurationmenitlastyear)/array_sum($techdelaylastyear)/60,0)." : ".((array_sum($delaydurationmenitlastyear)/array_sum($techdelaylastyear)) % 60)?></td>
	  <?
		foreach ($bulan as $key => $value){
  ?>
  <td class=xl631976 style='border-top:none' x:str><?= $avgduration[$value]?></td>
  <?
		}
   ?>   
  <td class=xl521976><?= round(array_sum($delaydurationmenit)/array_sum($techdelay)/60,0)." : ".((array_sum($delaydurationmenit)/array_sum($techdelay)) % 60)?></td>
 </tr>
 <tr height=23 style='mso-height-source:userset;height:17.45pt'>
  <td height=23 class=xl611976 style='height:17.45pt'><span
  style='mso-spacerun:yes'>    </span>- Rate/100 Rev.Take Offs</td>
  <td class=xl511976 x:num><?= round($delayratelastyear,2)?></td>
	  <?
		foreach ($bulan as $key => $value){
  ?>
  <td class=xl511976 x:num><?= round($delayrate[$value],2)?></td>
  <?
		}
   ?>   
  <td class=xl521976 x:num x:fmla="=O18/O11*100"></td>
 </tr>
 <tr height=23 style='mso-height-source:userset;height:17.45pt'>
  <td height=23 class=xl611976 style='height:17.45pt'>Technical Incident-Total</td>
  <td class=xl491976 x:num><?= $jumlahincidentlastyear?></td>
	  <?
		foreach ($bulan as $key => $value){
  ?>
  <td class=xl491976 x:num><?= $incident[$value]?></td>
  <?
		}
   ?>   
  <td class=xl501976 x:num x:fmla="=SUM(C22:N22)"></td>
 </tr>
 <tr height=23 style='mso-height-source:userset;height:17.45pt'>
  <td height=23 class=xl611976 style='height:17.45pt'><span
  style='mso-spacerun:yes'>   </span>- Rate/1000 Tot.Fly Hours</td>
  <td class=xl511976><?= round(($jumlahincidentlastyear)/array_sum($FHlastyear)*1000,2)?></td>
	  <?
		foreach ($bulan as $key => $value){
  ?>
  <td class=xl511976><?= (isset($FC[$value]) && ($FC[$value] <> 0)) ? round($incident[$value]/$FH[$value]*1000,3) : 0?></td>
  <?
		}
   ?>   
  <td class=xl521976 x:fmla="=O22/O8*1000"></td>
 </tr>
 <tr height=23 style='mso-height-source:userset;height:17.45pt'>
  <td height=23 class=xl611976 style='height:17.45pt'>Technical Cancellations</td>
  <td class=xl491976 x:num><?= $cancellastyear?></td>
	  <?
		foreach ($bulan as $key => $value){
  ?>
  <td class=xl491976 x:num><?= $cancel[$value]?></td>
  <?
		}
   ?>   
  <td class=xl501976 x:num x:fmla="=SUM(C24:N24)"></td>
 </tr>
 <tr height=23 style='mso-height-source:userset;height:17.45pt'>
  <td height=23 class=xl611976 style='height:17.45pt'>Dispatch Reliability ( %
  )</td>
  <td class=xl511976 x:num><?= round((array_sum($FCrevlastyear) - array_sum($techdelaylastyear) - $cancellastyear)/array_sum($FCrevlastyear) * 100,2) ?></td>
	  <?
		foreach ($bulan as $key => $value){
  ?>
  <td class=xl511976 x:num><?= (isset($FC[$value]) && ($FC[$value] <> 0)) ? round(($FCrev[$value] - $techdelay[$value] - $cancel[$value])/$FCrev[$value] * 100,2) : 0?></td>
    <?
		}
   ?>  
  <td class=xl521976 x:num><?= round((array_sum($FCrev) - array_sum($techdelay) - array_sum($cancel))/array_sum($FCrev) * 100,2) ?></td>
 </tr>
 <tr height=23 style='mso-height-source:userset;height:17.45pt'>
  <td height=23 class=xl691976 style='height:17.45pt'><span
  style='mso-spacerun:yes'>       </span>(*) = (Hours : Minutes)</td>
  <td class=xl511976>&nbsp;</td>
  <td class=xl511976>&nbsp;</td>
  <td class=xl511976>&nbsp;</td>
  <td class=xl511976>&nbsp;</td>
  <td class=xl511976>&nbsp;</td>
  <td class=xl511976>&nbsp;</td>
  <td class=xl511976>&nbsp;</td>
  <td class=xl511976>&nbsp;</td>
  <td class=xl511976>&nbsp;</td>
  <td class=xl511976>&nbsp;</td>
  <td class=xl511976>&nbsp;</td>
  <td class=xl511976>&nbsp;</td>
  <td class=xl511976>&nbsp;</td>
  <td class=xl541976>&nbsp;</td>
 </tr>
 <tr height=23 style='mso-height-source:userset;height:17.45pt'>
  <td height=23 class=xl551976 style='height:17.45pt'>&nbsp;</td>
  <td class=xl561976>&nbsp;</td>
  <td class=xl571976 style='border-left:none'>&nbsp;</td>
  <td class=xl571976 style='border-left:none'>&nbsp;</td>
  <td class=xl571976 style='border-left:none'>&nbsp;</td>
  <td class=xl571976 style='border-left:none'>&nbsp;</td>
  <td class=xl571976 style='border-left:none'>&nbsp;</td>
  <td class=xl571976 style='border-left:none'>&nbsp;</td>
  <td class=xl571976 style='border-left:none'>&nbsp;</td>
  <td class=xl571976 style='border-left:none'>&nbsp;</td>
  <td class=xl571976 style='border-left:none'>&nbsp;</td>
  <td class=xl571976 style='border-left:none'>&nbsp;</td>
  <td class=xl571976 style='border-left:none'>&nbsp;</td>
  <td class=xl571976 style='border-left:none'>&nbsp;</td>
  <td class=xl581976>&nbsp;</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl351976 style='height:12.75pt'></td>
  <td class=xl351976></td>
  <td class=xl351976></td>
  <td class=xl351976></td>
  <td class=xl351976></td>
  <td class=xl351976></td>
  <td class=xl351976></td>
  <td class=xl351976></td>
  <td class=xl351976></td>
  <td class=xl351976></td>
  <td class=xl351976></td>
  <td class=xl351976></td>
  <td class=xl351976></td>
  <td class=xl351976></td>
  <td class=xl701976 x:str>Page : <?=$page?>2</td>
 </tr>
 <tr height=15 style='height:11.25pt'>
  <td height=15 class=xl351976 style='height:11.25pt'></td>
  <td class=xl351976></td>
  <td class=xl351976></td>
  <td class=xl351976></td>
  <td class=xl351976></td>
  <td class=xl351976></td>
  <td class=xl351976></td>
  <td class=xl351976></td>
  <td class=xl351976></td>
  <td class=xl351976></td>
  <td class=xl351976></td>
  <td class=xl351976></td>
  <td class=xl351976></td>
  <td class=xl351976></td>
  <td class=xl591976></td>
 </tr>
 <tr height=15 style='height:11.25pt'>
  <td height=15 class=xl351976 style='height:11.25pt'></td>
  <td class=xl351976></td>
  <td class=xl351976></td>
  <td class=xl351976></td>
  <td class=xl351976></td>
  <td class=xl351976></td>
  <td class=xl351976></td>
  <td class=xl351976></td>
  <td class=xl351976></td>
  <td class=xl351976></td>
  <td class=xl351976></td>
  <td class=xl351976></td>
  <td class=xl351976></td>
  <td class=xl351976></td>
  <td class=xl351976></td>
 </tr>
 <tr height=15 style='height:11.25pt'>
  <td height=15 class=xl351976 style='height:11.25pt'></td>
  <td class=xl351976></td>
  <td class=xl351976></td>
  <td class=xl351976></td>
  <td class=xl351976></td>
  <td class=xl351976></td>
  <td class=xl351976></td>
  <td class=xl351976></td>
  <td class=xl351976></td>
  <td class=xl351976></td>
  <td class=xl351976></td>
  <td class=xl351976></td>
  <td class=xl351976></td>
  <td class=xl351976></td>
  <td class=xl351976></td>
 </tr>
 <tr height=15 style='height:11.25pt'>
  <td height=15 class=xl351976 style='height:11.25pt'></td>
  <td class=xl351976></td>
  <td class=xl351976></td>
  <td class=xl351976></td>
  <td class=xl351976></td>
  <td class=xl351976></td>
  <td class=xl351976></td>
  <td class=xl351976></td>
  <td class=xl351976></td>
  <td class=xl351976></td>
  <td class=xl351976></td>
  <td class=xl351976></td>
  <td class=xl351976></td>
  <td class=xl351976></td>
  <td class=xl351976></td>
 </tr>
 <tr height=15 style='height:11.25pt'>
  <td height=15 class=xl351976 style='height:11.25pt'></td>
  <td class=xl351976></td>
  <td class=xl601976></td>
  <td class=xl601976></td>
  <td class=xl601976></td>
  <td class=xl601976></td>
  <td class=xl601976></td>
  <td class=xl601976></td>
  <td class=xl601976></td>
  <td class=xl601976></td>
  <td class=xl601976></td>
  <td class=xl601976></td>
  <td class=xl601976></td>
  <td class=xl601976></td>
  <td class=xl601976></td>
 </tr>
 <![if supportMisalignedColumns]>
 <tr height=0 style='display:none'>
  <td width=193 style='width:145pt'></td>
  <td width=57 style='width:43pt'></td>
  <td width=51 style='width:38pt'></td>
  <td width=51 style='width:38pt'></td>
  <td width=51 style='width:38pt'></td>
  <td width=51 style='width:38pt'></td>
  <td width=51 style='width:38pt'></td>
  <td width=51 style='width:38pt'></td>
  <td width=51 style='width:38pt'></td>
  <td width=51 style='width:38pt'></td>
  <td width=51 style='width:38pt'></td>
  <td width=51 style='width:38pt'></td>
  <td width=51 style='width:38pt'></td>
  <td width=51 style='width:38pt'></td>
  <td width=107 style='width:80pt'></td>
 </tr>
 <![endif]>
</table>

</div>


<!----------------------------->
<!--END OF OUTPUT FROM EXCEL PUBLISH AS WEB PAGE WIZARD-->
<!----------------------------->
</body>

</html>
