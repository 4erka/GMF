<?
header("Content-Type: application/x-excel\n");
header("Pragma: no-cache"); 
header("Expires: 0");
header("Cache-Control:must-revalidate, post-check=0, pre-check=0");
header("content-disposition: attachment; filename=EOS-".$_REQUEST["actype"].".xls");
?>

<html xmlns:o="urn:schemas-microsoft-com:office:office"
xmlns:x="urn:schemas-microsoft-com:office:excel"
xmlns="http://www.w3.org/TR/REC-html40">

<head>
<meta http-equiv=Content-Type content="text/html; charset=windows-1252">
<meta name=ProgId content=Excel.Sheet>
<meta name=Generator content="Microsoft Excel 12">
<link rel=File-List
href="Draft%20Engine%20Opertaion%20Summary_files/filelist.xml">
<style id="Draft Engine Opertaion Summary_2862_Styles">
<!--table
	{mso-displayed-decimal-separator:"\.";
	mso-displayed-thousand-separator:"\,";}
.xl632862
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
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
.xl642862
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
	text-align:general;
	vertical-align:bottom;
	border-top:none;
	border-right:1.0pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:none;
	background:white;
	mso-pattern:black none;
	white-space:nowrap;}
.xl652862
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
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:1.0pt solid windowtext;
	background:white;
	mso-pattern:black none;
	white-space:nowrap;}
.xl662862
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:8.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	background:white;
	mso-pattern:black none;
	white-space:nowrap;}
.xl672862
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:8.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:1.0pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	background:white;
	mso-pattern:black none;
	white-space:nowrap;}
.xl682862
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:1.0pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl692862
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
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
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl702862
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
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:1.0pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl712862
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
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
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl722862
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
	text-align:general;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:1.0pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl732862
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
	text-align:general;
	vertical-align:middle;
	border-top:none;
	border-right:1.0pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl742862
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM, sans-serif;
	mso-font-charset:0;
	mso-number-format:"0\.000";
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:1.0pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl752862
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM, sans-serif;
	mso-font-charset:0;
	mso-number-format:"0\.000";
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl762862
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
	text-align:left;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:1.0pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl772862
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
	text-align:left;
	vertical-align:middle;
	border-top:none;
	border-right:1.0pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl782862
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM, sans-serif;
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
.xl792862
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
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
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl802862
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM, sans-serif;
	mso-font-charset:0;
	mso-number-format:0;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:1.0pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl812862
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM, sans-serif;
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
.xl822862
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM, sans-serif;
	mso-font-charset:0;
	mso-number-format:0;
	text-align:general;
	vertical-align:bottom;
	border-top:none;
	border-right:1.0pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl832862
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM, sans-serif;
	mso-font-charset:0;
	mso-number-format:"0\.000";
	text-align:center;
	vertical-align:bottom;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl842862
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
	text-align:left;
	vertical-align:bottom;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:1.0pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl852862
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM, sans-serif;
	mso-font-charset:0;
	mso-number-format:0;
	text-align:center;
	vertical-align:bottom;
	border-top:none;
	border-right:1.0pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl862862
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM, sans-serif;
	mso-font-charset:0;
	mso-number-format:0;
	text-align:center;
	vertical-align:bottom;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl872862
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM, sans-serif;
	mso-font-charset:0;
	mso-number-format:"0\.000";
	text-align:center;
	vertical-align:bottom;
	border-top:none;
	border-right:1.0pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl882862
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
	text-align:left;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:none;
	border-left:1.0pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl892862
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM, sans-serif;
	mso-font-charset:0;
	mso-number-format:"0\.000";
	text-align:center;
	vertical-align:bottom;
	border-top:none;
	border-right:1.0pt solid windowtext;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl902862
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
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:1.0pt solid windowtext;
	border-left:1.0pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl912862
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM, sans-serif;
	mso-font-charset:0;
	mso-number-format:"0\.000";
	text-align:center;
	vertical-align:bottom;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl922862
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:9.0pt;
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
.xl932862
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM, sans-serif;
	mso-font-charset:0;
	mso-number-format:"0\.000";
	text-align:center;
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl942862
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
	border-top:none;
	border-right:1.0pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	background:white;
	mso-pattern:black none;
	white-space:nowrap;}
.xl952862
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
	border-top:none;
	border-right:1.0pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl962862
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
	vertical-align:bottom;
	border-top:none;
	border-right:1.0pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl972862
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
	text-align:left;
	vertical-align:middle;
	border-top:none;
	border-right:1.0pt solid windowtext;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl982862
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
	text-align:left;
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl992862
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
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:1.0pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl1002862
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl1012862
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
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:1.0pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl1022862
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
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl1032862
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
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:1.0pt solid windowtext;
	background:white;
	mso-pattern:black none;
	white-space:nowrap;}
.xl1042862
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
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	background:white;
	mso-pattern:black none;
	white-space:nowrap;}
.xl1052862
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
	border-left:1.0pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl1062862
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
	border-right:1.0pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl1072862
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
	text-align:general;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:1.0pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl1082862
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
	text-align:general;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl1092862
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:12.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	border-top:1.0pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:1.0pt solid windowtext;
	background:white;
	mso-pattern:black none;
	white-space:nowrap;}
.xl1102862
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:12.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	border-top:1.0pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:none;
	background:white;
	mso-pattern:black none;
	white-space:nowrap;}
.xl1112862
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:12.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	border-top:1.0pt solid windowtext;
	border-right:1.0pt solid black;
	border-bottom:none;
	border-left:none;
	background:white;
	mso-pattern:black none;
	white-space:nowrap;}
.xl1122862
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
	vertical-align:bottom;
	border-top:none;
	border-right:none;
	border-bottom:1.0pt solid windowtext;
	border-left:1.0pt solid windowtext;
	background:white;
	mso-pattern:black none;
	white-space:nowrap;}
.xl1132862
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
	vertical-align:bottom;
	border-top:none;
	border-right:none;
	border-bottom:1.0pt solid windowtext;
	border-left:none;
	background:white;
	mso-pattern:black none;
	white-space:nowrap;}
.xl1142862
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
	vertical-align:bottom;
	border-top:none;
	border-right:1.0pt solid black;
	border-bottom:1.0pt solid windowtext;
	border-left:none;
	background:white;
	mso-pattern:black none;
	white-space:nowrap;}
.xl1152862
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
	vertical-align:bottom;
	border-top:1.0pt solid windowtext;
	border-right:none;
	border-bottom:1.0pt solid windowtext;
	border-left:1.0pt solid windowtext;
	background:white;
	mso-pattern:black none;
	white-space:nowrap;}
.xl1162862
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
	vertical-align:bottom;
	border-top:1.0pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:none;
	background:white;
	mso-pattern:black none;
	white-space:nowrap;}
.xl1172862
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
	border-left:1.0pt solid windowtext;
	background:white;
	mso-pattern:black none;
	white-space:nowrap;}
.xl1182862
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
	mso-pattern:black none;
	white-space:nowrap;}
.xl1192862
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
	border-right:1.0pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:none;
	background:white;
	mso-pattern:black none;
	white-space:nowrap;}
.xl1202862
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:8.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:1.0pt solid windowtext;
	background:white;
	mso-pattern:black none;
	white-space:nowrap;}
.xl1212862
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
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
	border-bottom:.5pt solid windowtext;
	border-left:1.0pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl1222862
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM, sans-serif;
	mso-font-charset:0;
	mso-number-format:"0\.000";
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:1.0pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl1232862
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
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
	border-left:1.0pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl1242862
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:1.0pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl1252862
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM, sans-serif;
	mso-font-charset:0;
	mso-number-format:0;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:1.0pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl1262862
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM, sans-serif;
	mso-font-charset:0;
	mso-number-format:"0\.000";
	text-align:center;
	vertical-align:bottom;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:1.0pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl1272862
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM, sans-serif;
	mso-font-charset:0;
	mso-number-format:0;
	text-align:center;
	vertical-align:bottom;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:1.0pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl1282862
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM, sans-serif;
	mso-font-charset:0;
	mso-number-format:"0\.000";
	text-align:center;
	vertical-align:bottom;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:1.0pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl1292862
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM, sans-serif;
	mso-font-charset:0;
	mso-number-format:"0\.000";
	text-align:center;
	vertical-align:bottom;
	border-top:none;
	border-right:1.0pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
-->
</style>
</head>
<?
  include("function.php");
  $periode = isset($_REQUEST["periode"]) ? $_REQUEST["periode"] : "";
  $actype = isset($_REQUEST["actype"]) ? $_REQUEST["actype"] : "";
  $group = isset($_REQUEST["groupby"]) ? $_REQUEST["groupby"] : "";
?>
<body>
<!--[if !excel]>&nbsp;&nbsp;<![endif]-->
<!--The following information was generated by Microsoft Office Excel's Publish
as Web Page wizard.-->
<!--If the same item is republished from Excel, all information between the DIV
tags will be replaced.-->
<!----------------------------->
<!--START OF OUTPUT FROM EXCEL PUBLISH AS WEB PAGE WIZARD -->
<!----------------------------->

<div id="Draft Engine Opertaion Summary_2862" align=center
x:publishsource="Excel">
<?

	if ($_REQUEST["groupby"] == "Engine") {
		$actype = engineaircraft($actype);
	}
	$year = substr($periode,0,4);
	$numberofengine = ($actype == "B747-400") ? 4 : 2;
	$TE = connectimesysTE();
	$FH = queryFH12($periode,$actype,12);
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
	$shopvisit = shopvisit($periode,$actype);
	$shopvisitlast = shopvisit12((substr($periode,0,4) - 1)."-01",$periodelastyear,$actype);
	$TSN = FHengineinitial($actype);$CSN = FCengineinitial($actype);
	$ifsd = ifsd($periode,$actype);
	$ifsdlastyeardata = ifsdlastyear((substr($periode,0,4) - 1)."-01",$periodelastyear,$actype);
	$rto = rto($periode,$actype);
	$rtolastyear = rtolastyear((substr($periode,0,4) - 1)."-01",$periodelastyear,$actype);

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
	}

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
		$rtolastyeardata = is_array($rtolastyear) ? array_sum($rtolastyear) : 0;

	if ($actype == "A330-300"){
		$enginetype = "TRENT - 768";
	} else if ($actype == "A330-200"){
		$enginetype = "TRENT - 772";
	} else if ($actype == "B737-800"){
		$enginetype = "CFM56-7B-26";
	} else if ($actype == "B747-400"){
		$enginetype = "CF6-80C2B1F";
	} else if ($actype == "B737-CL"){
		$enginetype = "CFM56-3B2";
	} else {
		$enginetype = "CFM56-3C1";
	}

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

	$manufacture = (($actype == "A330-300") || ($actype == "A330-200") ? "AIRBUS" : "BOEING")." ".((strpos($actype,",")) ? "B737-Classic" : $actype);
?>
<table border=0 cellpadding=0 cellspacing=0 width=1071 style='border-collapse:
 collapse;table-layout:fixed;width:807pt'>
 <col class=xl632862 width=48 style='mso-width-source:userset;mso-width-alt:
 1755;width:36pt'>
 <col class=xl632862 width=234 style='mso-width-source:userset;mso-width-alt:
 8557;width:176pt'>
 <col class=xl632862 width=57 style='mso-width-source:userset;mso-width-alt:
 2084;width:43pt'>
 <col class=xl632862 width=61 span=12 style='mso-width-source:userset;
 mso-width-alt:2230;width:46pt'>
 <tr class=xl632862 height=21 style='mso-height-source:userset;height:15.75pt'>
  <td colspan=15 height=21 class=xl1092862 width=1071 style='border-right:1.0pt solid black;
  height:15.75pt;width:807pt'><a name="RANGE!A1:O40">ENGINE OPERATION SUMMARY
  <?= ($year-1)?> - <?= $year?></a></td>
 </tr>
 <tr class=xl632862 height=18 style='mso-height-source:userset;height:13.5pt'>
  <td colspan=15 height=18 class=xl1122862 style='border-right:1.0pt solid black;
  height:13.5pt'><?= $enginetype?></td>
 </tr>
 <tr class=xl632862 height=18 style='mso-height-source:userset;height:13.5pt'>
  <td colspan=2 height=18 class=xl1152862 style='border-right:1.0pt solid black;
  height:13.5pt'><?= $manufacture?></td>
  <td class=xl642862>&nbsp;</td>
  <td colspan=12 class=xl1172862 style='border-right:1.0pt solid black;
  border-left:none'>2010 - 2011</td>
 </tr>
 <tr class=xl632862 height=17 style='mso-height-source:userset;height:12.75pt'>
  <td height=17 class=xl652862 style='height:12.75pt'>&nbsp;</td>
  <td class=xl942862>&nbsp;</td>
  <td class=xl672862><?= ($year-1)?></td>
<?
	foreach ($bulan as $key => $value){		
?>
  <td class=xl1202862 style='border-left:none'><?= bulan($value)?></td>
<?
	}
?>

 </tr>
 <tr class=xl632862 height=17 style='mso-height-source:userset;height:12.75pt'>
  <td colspan=2 height=17 class=xl1032862 style='border-right:1.0pt solid black;
  height:12.75pt'>NUMBER OF ENGINES IN FLEET</td>
  <td class=xl672862><?= round(array_sum($fleetlastyear)/12*$numberofengine,0)?></td>
<?
	foreach ($bulan as $key => $value){
?>
  <td class=xl1202862 style='border-left:none'><?= ($fleet[$value] * $numberofengine)?></td>
<?
	}
?>
  
 </tr>
 <tr class=xl632862 height=17 style='mso-height-source:userset;height:12.75pt'>
  <td height=17 class=xl652862 style='height:12.75pt'>&nbsp;</td>
  <td class=xl942862>&nbsp;</td>
  <td class=xl672862>&nbsp;</td>
  <td class=xl1202862 style='border-left:none'>&nbsp;</td>
  <td class=xl662862>&nbsp;</td>
  <td class=xl662862>&nbsp;</td>
  <td class=xl662862>&nbsp;</td>
  <td class=xl662862>&nbsp;</td>
  <td class=xl662862>&nbsp;</td>
  <td class=xl662862>&nbsp;</td>
  <td class=xl662862>&nbsp;</td>
  <td class=xl662862>&nbsp;</td>
  <td class=xl662862>&nbsp;</td>
  <td class=xl662862>&nbsp;</td>
  <td class=xl672862>&nbsp;</td>
 </tr>
 <tr class=xl632862 height=17 style='mso-height-source:userset;height:12.75pt'>
  <td colspan=2 height=17 class=xl1012862 style='border-right:1.0pt solid black;
  height:12.75pt'>HOURS-CUMMULATIVE</td>
  <td class=xl682862>&nbsp;</td>
<?
	foreach ($bulan as $key => $value){
?>
  <td class=xl1212862 style='border-left:none'><?= $TSNengine[$value]?></td>
<?
	}
?>
 </tr>
 <tr class=xl632862 height=15 style='mso-height-source:userset;height:11.25pt'>
  <td colspan=2 height=15 class=xl1012862 style='border-right:1.0pt solid black;
  height:11.25pt'>HOURS-OPERATED</td>
  <td class=xl682862><?= (array_sum($FHlastyear) * $numberofengine)?></td>
<?
	foreach ($bulan as $key => $value){
?>
  <td class=xl1212862 style='border-left:none'><?= ($FH[$value] * $numberofengine)?></td>
<?
	}
?>

 </tr>
 <tr class=xl632862 height=17 style='mso-height-source:userset;height:12.75pt'>
  <td height=17 class=xl702862 style='height:12.75pt'><span
  style='mso-spacerun:yes'> </span></td>
  <td class=xl952862>&nbsp;</td>
  <td class=xl682862>&nbsp;</td>
  <td class=xl1212862 style='border-left:none'>&nbsp;</td>
  <td class=xl692862>&nbsp;</td>
  <td class=xl692862>&nbsp;</td>
  <td class=xl692862>&nbsp;</td>
  <td class=xl692862>&nbsp;</td>
  <td class=xl692862>&nbsp;</td>
  <td class=xl692862>&nbsp;</td>
  <td class=xl692862>&nbsp;</td>
  <td class=xl692862>&nbsp;</td>
  <td class=xl692862>&nbsp;</td>
  <td class=xl692862>&nbsp;</td>
  <td class=xl682862>&nbsp;</td>
 </tr>
 <tr class=xl632862 height=17 style='mso-height-source:userset;height:12.75pt'>
  <td colspan=2 height=17 class=xl1012862 style='border-right:1.0pt solid black;
  height:12.75pt'>CYCLES-CUMMULATIVE</td>
  <td class=xl682862>&nbsp;</td>
<?
	foreach ($bulan as $key => $value){
?>
  <td class=xl1212862 style='border-left:none'><?= $CSNengine[$value]?></td>
<?
	}
?>
 </tr>
 <tr class=xl632862 height=17 style='mso-height-source:userset;height:12.75pt'>
  <td colspan=2 height=17 class=xl1012862 style='border-right:1.0pt solid black;
  height:12.75pt'>CYCLES-OPERATED</td>
  <td class=xl682862<?= (array_sum($FClastyear) * $numberofengine)?></td>
<?
	foreach ($bulan as $key => $value){
?>
  <td class=xl1212862 style='border-left:none'><?= ($FC[$value] * $numberofengine)?></td>
<?
  }
?>
 </tr>
 <tr class=xl632862 height=17 style='mso-height-source:userset;height:12.75pt'>
  <td height=17 class=xl702862 style='height:12.75pt'>&nbsp;</td>
  <td class=xl952862>&nbsp;</td>
  <td class=xl682862>&nbsp;</td>
  <td class=xl1212862 style='border-left:none'>&nbsp;</td>
  <td class=xl692862>&nbsp;</td>
  <td class=xl692862>&nbsp;</td>
  <td class=xl692862>&nbsp;</td>
  <td class=xl692862>&nbsp;</td>
  <td class=xl692862>&nbsp;</td>
  <td class=xl692862>&nbsp;</td>
  <td class=xl692862>&nbsp;</td>
  <td class=xl692862>&nbsp;</td>
  <td class=xl692862>&nbsp;</td>
  <td class=xl692862>&nbsp;</td>
  <td class=xl682862>&nbsp;</td>
 </tr>
 <tr class=xl632862 height=17 style='mso-height-source:userset;height:12.75pt'>
  <td colspan=2 height=17 class=xl1072862 style='border-right:1.0pt solid black;
  height:12.75pt'>IN-FLIGHT SHUTDOWN</td>
  <td class=xl682862><?= $ifsdlastyear?></td>
<?
	foreach ($bulan as $key => $value){
?>
  <td class=xl1212862 style='border-left:none'><?= $ifsd[$value]?></td>
<?
  }
?>
 </tr>
 <tr class=xl632862 height=17 style='mso-height-source:userset;height:12.75pt'>
  <td height=17 class=xl722862 style='height:12.75pt'><span
  style='mso-spacerun:yes'>               </span></td>
  <td class=xl732862>- RATE<span style='mso-spacerun:yes'> </span></td>
  <td class=xl742862><?= round(($ifsdlastyear/(array_sum($FHlastyear)*$numberofengine)*1000),3)?></td>
<?
	foreach ($bulan as $key => $value){
?>
  <td class=xl1222862 style='border-left:none'><?= round(($ifsd[$value]/($FH[$value]*$numberofengine)*1000),3)?></td>
<?
	}
?>
 </tr>
 <tr class=xl632862 height=17 style='mso-height-source:userset;height:12.75pt'>
  <td height=17 class=xl762862 style='height:12.75pt'><span
  style='mso-spacerun:yes'>           </span></td>
  <td class=xl772862>- 3 MO. RATE</td>
  <td class=xl782862>&nbsp;</td>
<?
	foreach ($bulan as $key => $value){
?>
  <td class=xl1222862 style='border-left:none'><?= round((($ifsd[$bulan12[$key+10]] + $ifsd[$bulan12[$key+11]] + $ifsd[$bulan12[$key+12]])/($FH24[$bulan12[$key+10]] + $FH24[$bulan12[$key+11]] + $FH24[$bulan12[$key+12]]) * 1000),3)?></td>
<?
	}
?>
 </tr>
 <tr class=xl632862 height=17 style='mso-height-source:userset;height:12.75pt'>
  <td height=17 class=xl702862 style='height:12.75pt'><span
  style='mso-spacerun:yes'> </span></td>
  <td class=xl952862>&nbsp;</td>
  <td class=xl682862>&nbsp;</td>
  <td class=xl1212862 style='border-left:none'>&nbsp;</td>
  <td class=xl692862>&nbsp;</td>
  <td class=xl692862>&nbsp;</td>
  <td class=xl692862>&nbsp;</td>
  <td class=xl692862>&nbsp;</td>
  <td class=xl692862>&nbsp;</td>
  <td class=xl692862>&nbsp;</td>
  <td class=xl692862>&nbsp;</td>
  <td class=xl692862>&nbsp;</td>
  <td class=xl692862>&nbsp;</td>
  <td class=xl692862>&nbsp;</td>
  <td class=xl682862>&nbsp;</td>
 </tr>
 <tr class=xl632862 height=17 style='mso-height-source:userset;height:12.75pt'>
  <td colspan=2 height=17 class=xl1012862 style='border-right:1.0pt solid black;
  height:12.75pt'>ABORTED TAKE-OFF</td>
  <td class=xl682862><?= $rtolastyeardata?></td>
<?
	foreach ($bulan as $key => $value){
?>
  <td class=xl1212862 style='border-left:none'><?= $rtodat[$value]?></td>
<?
	}
?>
 </tr>
 <tr class=xl632862 height=17 style='mso-height-source:userset;height:12.75pt'>
  <td height=17 class=xl702862 style='height:12.75pt'><span
  style='mso-spacerun:yes'>              </span></td>
  <td class=xl772862><span style='mso-spacerun:yes'> </span>- RATE</td>
  <td class=xl682862><?= round(($rtolastyeardata/(array_sum($FHlastyear)*$numberofengine)*1000),3)?></td>
<?
	foreach ($bulan as $key => $value){
?>
  <td class=xl1232862 style='border-left:none'><?= round(($rtodat[$value]/($FH[$value]*$numberofengine)*1000),3)?></td>
<?
  }
?>
 </tr>
 <tr class=xl632862 height=17 style='mso-height-source:userset;height:12.75pt'>
  <td height=17 class=xl762862 style='height:12.75pt'><span
  style='mso-spacerun:yes'>           </span></td>
  <td class=xl772862>- 3 MO. RATE</td>
  <td class=xl682862>&nbsp;</td>
<?
	foreach ($bulan as $key => $value){
?>
  <td class=xl1232862 style='border-left:none'><?= round((($rtodat[$bulan12[$key+10]] + $rtodat[$bulan12[$key+11]] + $rtodat[$bulan12[$key+12]])/($FH24[$bulan12[$key+10]] + $FH24[$bulan12[$key+11]] + $FH24[$bulan12[$key+12]]) * 1000),3)?></td>
<?
  }
?>
 </tr>
 <tr class=xl632862 height=17 style='mso-height-source:userset;height:12.75pt'>
  <td colspan=2 height=17 class=xl1052862 style='border-right:1.0pt solid black;
  height:12.75pt'>&nbsp;</td>
  <td class=xl682862>&nbsp;</td>
  <td class=xl1212862 style='border-left:none'>&nbsp;</td>
  <td class=xl692862>&nbsp;</td>
  <td class=xl692862>&nbsp;</td>
  <td class=xl692862>&nbsp;</td>
  <td class=xl692862>&nbsp;</td>
  <td class=xl692862>&nbsp;</td>
  <td class=xl692862>&nbsp;</td>
  <td class=xl692862>&nbsp;</td>
  <td class=xl692862>&nbsp;</td>
  <td class=xl692862>&nbsp;</td>
  <td class=xl692862>&nbsp;</td>
  <td class=xl682862>&nbsp;</td>
 </tr>
 <tr class=xl632862 height=17 style='mso-height-source:userset;height:12.75pt'>
  <td height=17 class=xl992862 style='height:12.75pt;border-top:none'>* BASIC<span
  style='display:none'> - PLANNED</span></td>
  <td class=xl1002862 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl682862><?= $engineremovallastyear["Basic Planned"]?></td>
<?
	foreach ($bulan as $key => $value){
?>
  <td class=xl1212862 style='border-left:none'><?= $engineremoval["Basic Planned"][$value]?></td>
<?
	}
?>
 </tr>
 <tr class=xl632862 height=17 style='mso-height-source:userset;height:12.75pt'>
  <td height=17 class=xl992862 style='height:12.75pt;border-top:none'><span
  style='mso-spacerun:yes'>               </span><span style='display:none'><span
  style='mso-spacerun:yes'>              </span>- UNPLANNED</span></td>
  <td class=xl1002862 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl682862><?= $engineremovallastyear["Basic UnPlanned"]?></td>
<?
	foreach ($bulan as $key => $value){
?>
  <td class=xl1212862 style='border-left:none'><?= $engineremoval["Basic UnPlanned"][$value]?></td>
<?
	}
?>
 </tr>
 <tr class=xl632862 height=17 style='mso-height-source:userset;height:12.75pt'>
  <td height=17 class=xl992862 style='height:12.75pt;border-top:none'>* NON B<span
  style='display:none'>ASIC - PLANNED</span></td>
  <td class=xl1002862 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl682862><?= $engineremovallastyear["Non Basic Planned"]?></td>
<?
	foreach ($bulan as $key => $value){
?>
  <td class=xl1212862 style='border-left:none'><?= $engineremoval["Non Basic Planned"][$value]?></td>
<?
	}
?>
 </tr>
 <tr class=xl632862 height=17 style='mso-height-source:userset;height:12.75pt'>
  <td height=17 class=xl992862 style='height:12.75pt;border-top:none'><span
  style='mso-spacerun:yes'>               </span><span style='display:none'><span
  style='mso-spacerun:yes'>              </span>- UNPLANNED</span></td>
  <td class=xl1002862 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl682862><?= $engineremovallastyear["Non Basic UnPlanned"]?></td>
<?
	foreach ($bulan as $key => $value){
?>
  <td class=xl1212862 style='border-left:none'><?= $engineremoval["Non Basic UnPlanned"][$value]?></td>
<?
	}
?>
 </tr>
 <tr class=xl632862 height=17 style='mso-height-source:userset;height:12.75pt'>
  <td height=17 class=xl702862 style='height:12.75pt'>&nbsp;</td>
  <td class=xl952862>&nbsp;</td>
  <td class=xl682862>&nbsp;</td>
  <td class=xl1212862 style='border-left:none'>&nbsp;</td>
  <td class=xl692862>&nbsp;</td>
  <td class=xl692862>&nbsp;</td>
  <td class=xl692862>&nbsp;</td>
  <td class=xl692862>&nbsp;</td>
  <td class=xl692862>&nbsp;</td>
  <td class=xl692862>&nbsp;</td>
  <td class=xl692862>&nbsp;</td>
  <td class=xl692862>&nbsp;</td>
  <td class=xl692862>&nbsp;</td>
  <td class=xl692862>&nbsp;</td>
  <td class=xl682862>&nbsp;</td>
 </tr>
 <tr class=xl632862 height=17 style='mso-height-source:userset;height:12.75pt'>
  <td colspan=2 height=17 class=xl1012862 style='border-right:1.0pt solid black;
  height:12.75pt'>TOTAL UNPLANNED ENGINE REMOVALS</td>
  <td class=xl802862><?= ($engineremovallastyear["Basic UnPlanned"] + $engineremovallastyear["Non Basic UnPlanned"])?></td>
<?
	foreach ($bulan as $key => $value){
?>
  <td class=xl1252862 style='border-left:none'><?= ($engineremoval["Basic UnPlanned"][$value] + $engineremoval["Non Basic UnPlanned"][$value])?></td>
<?
	}
?> 
 </tr>
 <tr class=xl632862 height=17 style='mso-height-source:userset;height:12.75pt'>
  <td height=17 class=xl762862 style='height:12.75pt'><span
  style='mso-spacerun:yes'>          </span></td>
  <td class=xl772862>- UER RATE</td>
  <td class=xl742862><?= round(($engineremovallastyear["Non Basic UnPlanned"] + $engineremovallastyear["Basic UnPlanned"])/(array_sum($FHlastyear) * $numberofengine)*1000,3)?></td>
<?
	foreach ($bulan as $key => $value){
?>
  <td class=xl1222862 style='border-left:none'><?= (!empty($FH[$value]) ? round((($engineremoval["Basic UnPlanned"][$value] + $engineremoval["Non Basic UnPlanned"][$value])/($FH[$value] * $numberofengine)*1000),3) : 0)?></td>
<?
	}
?> 
 </tr>
 <tr class=xl632862 height=17 style='mso-height-source:userset;height:12.75pt'>
  <td height=17 class=xl762862 style='height:12.75pt'><span
  style='mso-spacerun:yes'>         </span></td>
  <td class=xl772862><span style='mso-spacerun:yes'> </span>- 3 MO. RATE</td>
  <td class=xl822862>&nbsp;</td>
<?	
	foreach ($bulan as $key => $value){
?>
  <td class=xl1262862 style='border-left:none'><?= (!empty($FH24[$bulan12[$key+10]]) ? round((($engineremoval["Basic UnPlanned"][$bulan12[$key+10]] + $engineremoval["Non Basic UnPlanned"][$bulan12[$key+10]] + $engineremoval["Basic UnPlanned"][$bulan12[$key+11]] + $engineremoval["Non Basic UnPlanned"][$bulan12[$key+11]] + $engineremoval["Basic UnPlanned"][$bulan12[$key+12]] + $engineremoval["Non Basic UnPlanned"][$bulan12[$key+12]])/(($FH24[$bulan12[$key+10]] + $FH24[$bulan12[$key+11]] + $FH24[$bulan12[$key+12]]) * $numberofengine)*1000),3) : 0)?></td>
<?
	}
?>
 </tr>
 <tr class=xl632862 height=17 style='mso-height-source:userset;height:12.75pt'>
  <td height=17 class=xl762862 style='height:12.75pt'><span
  style='mso-spacerun:yes'>         </span></td>
  <td class=xl772862><span style='mso-spacerun:yes'> </span>- 12 MO. RATE</td>
  <td class=xl822862>&nbsp;</td>
<?
	foreach ($bulan as $key => $value){
		$predbasunplan = 0;$prednonbaseunplan = 0;$prembasunplan = 0;$premnonbasunplan = 0;$FHengremove = 0;
	for($i=1;$i<13;$i++)
	{
		$predbasunplan += $engineremoval["Basic UnPlanned"][$bulan12[$key+$i]];
		$prednonbaseunplan += $engineremoval["Non Basic UnPlanned"][$bulan12[$key+$i]];
		$FHengremove += $FH24[$bulan12[$key+$i]] * $numberofengine;
	}
	$uer12rate = !empty($FHengremove) ? round(($predbasunplan + $prednonbaseunplan)/$FHengremove*1000,3) : 0;
?>
  <td class=xl1262862 style='border-left:none'><?= $uer12rate?></td>
<?
	}
?> 
 </tr>
 <tr class=xl632862 height=17 style='mso-height-source:userset;height:12.75pt'>
  <td height=17 class=xl842862 style='height:12.75pt'>&nbsp;</td>
  <td class=xl962862>&nbsp;</td>
  <td class=xl822862>&nbsp;</td>
  <td class=xl1232862 style='border-left:none'>&nbsp;</td>
  <td class=xl792862>&nbsp;</td>
  <td class=xl792862>&nbsp;</td>
  <td class=xl792862>&nbsp;</td>
  <td class=xl792862>&nbsp;</td>
  <td class=xl792862>&nbsp;</td>
  <td class=xl792862>&nbsp;</td>
  <td class=xl792862>&nbsp;</td>
  <td class=xl792862>&nbsp;</td>
  <td class=xl792862>&nbsp;</td>
  <td class=xl792862>&nbsp;</td>
  <td class=xl782862>&nbsp;</td>
 </tr>
 <tr class=xl632862 height=17 style='mso-height-source:userset;height:12.75pt'>
  <td colspan=2 height=17 class=xl1012862 style='border-right:1.0pt solid black;
  height:12.75pt'>TOTAL SHOP VISITS</td>
  <td class=xl852862><?= $SVlastdata?></td>
<?
	foreach ($bulan as $key => $value){
?>
  <td class=xl1272862 style='border-left:none'><?= $SV[$value]?></td>
<?
	}
?> 
 </tr>
 <tr class=xl632862 height=15 style='mso-height-source:userset;height:11.25pt'>
  <td height=15 class=xl762862 style='height:11.25pt'>&nbsp;</td>
  <td class=xl772862>- RATE</td>
  <td class=xl872862><?= round((($SVlastdata)/(array_sum($FHlastyear)*$numberofengine)*1000),3)?></td>
<?
	foreach ($bulan as $key => $value){
?>
  <td class=xl1262862 style='border-left:none'><?= (!empty($FH[$value]) ? round((($SV[$value])/($FH[$value] * $numberofengine)*1000),3) : 0)?></td>
<?
	}
?>
 </tr>
 <tr class=xl632862 height=17 style='mso-height-source:userset;height:12.75pt'>
  <td height=17 class=xl762862 style='height:12.75pt'>&nbsp;</td>
  <td class=xl772862><span style='mso-spacerun:yes'> </span>- 3 MO. RATE</td>
  <td class=xl822862>&nbsp;</td>
<?
	foreach ($bulan as $key => $value){
?>
  <td class=xl1222862 style='border-left:none'><?= (!empty($FH24[$bulan12[$key+10]]) ? round((($SV[$bulan12[$key+10]] + $SV[$bulan12[$key+11]] +  $SV[$bulan12[$key+12]])/(($FH24[$bulan12[$key+10]] + $FH24[$bulan12[$key+11]] + $FH24[$bulan12[$key+12]]) * $numberofengine)*1000),3) : 0)?></td>
<?
	}
?>
 </tr>
 <tr class=xl632862 height=17 style='mso-height-source:userset;height:12.75pt'>
  <td height=17 class=xl762862 style='height:12.75pt'>&nbsp;</td>
  <td class=xl772862>&nbsp;</td>
  <td class=xl822862>&nbsp;</td>
  <td class=xl1232862 style='border-left:none'>&nbsp;</td>
  <td class=xl792862>&nbsp;</td>
  <td class=xl792862>&nbsp;</td>
  <td class=xl792862>&nbsp;</td>
  <td class=xl792862>&nbsp;</td>
  <td class=xl792862>&nbsp;</td>
  <td class=xl792862>&nbsp;</td>
  <td class=xl792862>&nbsp;</td>
  <td class=xl792862>&nbsp;</td>
  <td class=xl792862>&nbsp;</td>
  <td class=xl792862>&nbsp;</td>
  <td class=xl782862>&nbsp;</td>
 </tr>
 <tr class=xl632862 height=17 style='mso-height-source:userset;height:12.75pt'>
  <td colspan=2 height=17 class=xl1012862 style='border-right:1.0pt solid black;
  height:12.75pt'>TOTAL ENGINE REMOVALS</td>
  <td class=xl852862><?= ($engineremovallastyear["Basic Planned"] + $engineremovallastyear["Basic UnPlanned"] + $engineremovallastyear["Non Basic Planned"] + $engineremovallastyear["Non Basic UnPlanned"])?></td>
<?
	foreach ($bulan as $key => $value){
?>
  <td class=xl1272862 style='border-left:none'><?= ($engineremoval["Basic Planned"][$value] + $engineremoval["Basic UnPlanned"][$value] + $engineremoval["Non Basic Planned"][$value] + $engineremoval["Non Basic UnPlanned"][$value])?></td>
<?
	}
?> 
 </tr>
 <tr class=xl632862 height=17 style='mso-height-source:userset;height:12.75pt'>
  <td height=17 class=xl882862 style='height:12.75pt'>&nbsp;</td>
  <td class=xl972862>- RATE/1000 ENG.HOURS</td>
  <td class=xl892862><?= round((($engineremovallastyear["Basic Planned"] + $engineremovallastyear["Basic UnPlanned"] + $engineremovallastyear["Non Basic Planned"] + $engineremovallastyear["Non Basic UnPlanned"])/(array_sum($FHlastyear)*$numberofengine)*1000),3)?></td>
<?
	foreach ($bulan as $key => $value){
?>
  <td class=xl1262862 style='border-left:none'><?= (!empty($FH[$value]) ? round((($engineremoval["Basic Planned"][$value] + $engineremoval["Basic UnPlanned"][$value] + $engineremoval["Non Basic Planned"][$value] + $engineremoval["Non Basic UnPlanned"][$value])/($FH[$value] * $numberofengine)*1000),3) : 0)?></td>
<?
	}
?>
 </tr>
 <tr class=xl632862 height=18 style='mso-height-source:userset;height:13.5pt'>
  <td height=18 class=xl902862 style='height:13.5pt'><span
  style='mso-spacerun:yes'> </span></td>
  <td class=xl982862>- 12 MO. RATE</td>
  <td class=xl932862>&nbsp;</td>
<?
	foreach ($bulan as $key => $value){
?>
  <td class=xl1282862 style='border-left:none'><?
	$convenience = 0;$campaign = 0;$predbasplan = 0;$predbasunplan = 0;$prednonbasplan = 0;$prednonbaseunplan = 0;$prembasplan = 0;$prembasunplan = 0;$premnonbasplan = 0;$premnonbasunplan = 0;$FHengremove = 0;
	for($i=1;$i<13;$i++)
	{
		$predbasplan += $engineremoval["Basic Planned"][$bulan12[$key+$i]];
		$predbasunplan += $engineremoval["Basic UnPlanned"][$bulan12[$key+$i]];
		$prednonbasplan += $engineremoval["Non Basic Planned"][$bulan12[$key+$i]];
		$prednonbaseunplan += $engineremoval["Non Basic UnPlanned"][$bulan12[$key+$i]];
		$FHengremove += $FH24[$bulan12[$key+$i]] * $numberofengine;
	}
	$rate = !empty($FHengremove) ? round(($predbasplan + $predbasunplan + $prednonbasplan + $prednonbaseunplan)/$FHengremove*1000,3) : 0;
	?><?= $rate?></td>
<?
	}
?>
 </tr>
 <tr class=xl632862 height=17 style='mso-height-source:userset;height:12.75pt'>
  <td height=17 class=xl632862 style='height:12.75pt'></td>
  <td class=xl632862></td>
  <td class=xl632862></td>
  <td class=xl632862></td>
  <td class=xl632862></td>
  <td class=xl632862></td>
  <td class=xl632862></td>
  <td class=xl632862></td>
  <td class=xl632862></td>
  <td class=xl632862></td>
  <td class=xl632862></td>
  <td class=xl632862></td>
  <td class=xl632862></td>
  <td class=xl632862></td>
  <td class=xl922862>Page : B7</td>
 </tr>
 <tr class=xl632862 height=15 style='mso-height-source:userset;height:11.25pt'>
  <td height=15 class=xl632862 style='height:11.25pt'></td>
  <td class=xl632862></td>
  <td class=xl632862></td>
  <td class=xl632862></td>
  <td class=xl632862></td>
  <td class=xl632862></td>
  <td class=xl632862></td>
  <td class=xl632862></td>
  <td class=xl632862></td>
  <td class=xl632862></td>
  <td class=xl632862></td>
  <td class=xl632862></td>
  <td class=xl632862></td>
  <td class=xl632862></td>
  <td class=xl632862></td>
 </tr>
 <tr class=xl632862 height=15 style='mso-height-source:userset;height:11.25pt'>
  <td height=15 class=xl632862 style='height:11.25pt'></td>
  <td class=xl632862></td>
  <td class=xl632862></td>
  <td class=xl632862></td>
  <td class=xl632862></td>
  <td class=xl632862></td>
  <td class=xl632862></td>
  <td class=xl632862></td>
  <td class=xl632862></td>
  <td class=xl632862></td>
  <td class=xl632862></td>
  <td class=xl632862></td>
  <td class=xl632862></td>
  <td class=xl632862></td>
  <td class=xl632862></td>
 </tr>
 <![if supportMisalignedColumns]>
 <tr height=0 style='display:none'>
  <td width=48 style='width:36pt'></td>
  <td width=234 style='width:176pt'></td>
  <td width=57 style='width:43pt'></td>
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
 </tr>
 <![endif]>
</table>

</div>


<!----------------------------->
<!--END OF OUTPUT FROM EXCEL PUBLISH AS WEB PAGE WIZARD-->
<!----------------------------->
</body>

</html>
