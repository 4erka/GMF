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
<link rel=File-List href="Pilotdelay_excel_files/filelist.xml">
<!--[if !mso]>
<style>
v\:* {behavior:url(#default#VML);}
o\:* {behavior:url(#default#VML);}
x\:* {behavior:url(#default#VML);}
.shape {behavior:url(#default#VML);}
</style>
<![endif]-->
<style id="Pilot Delay0408_8756_Styles">
<!--table
	{mso-displayed-decimal-separator:"\.";
	mso-displayed-thousand-separator:"\,";}
.font58756
	{color:windowtext;
	font-size:10.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Tahoma, sans-serif;
	mso-font-charset:0;}
.xl328756
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:9.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center-across;
	vertical-align:middle;
	border-top:1.0pt solid windowtext;
	border-right:none;
	border-bottom:1.0pt solid windowtext;
	border-left:1.0pt solid windowtext;
	background:white;
	mso-pattern:auto none;
	white-space:nowrap;}
.xl338756
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:9.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:middle;
	border-top:1.0pt solid windowtext;
	border-right:none;
	border-bottom:1.0pt solid windowtext;
	border-left:none;
	background:white;
	mso-pattern:auto none;
	white-space:nowrap;}
.xl348756
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:9.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:middle;
	border-top:1.0pt solid windowtext;
	border-right:none;
	border-bottom:1.0pt solid windowtext;
	border-left:none;
	background:white;
	mso-pattern:auto none;
	white-space:nowrap;}
.xl358756
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:9.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM;
	mso-generic-font-family:auto;
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
.xl368756
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:9.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:1.0pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:none;
	background:white;
	mso-pattern:auto none;
	white-space:nowrap;}
.xl378756
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:9.0pt;
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
.xl388756
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:9.0pt;
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
	border-right:none;
	border-bottom:none;
	border-left:1.0pt solid windowtext;
	background:white;
	mso-pattern:auto none;
	white-space:nowrap;}
.xl398756
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:9.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	background:white;
	mso-pattern:auto none;
	white-space:nowrap;}
.xl408756
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:9.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	background:white;
	mso-pattern:auto none;
	white-space:nowrap;}
.xl418756
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:9.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	border-top:none;
	border-right:1.0pt solid windowtext;
	border-bottom:none;
	border-left:none;
	background:white;
	mso-pattern:auto none;
	white-space:nowrap;}
.xl428756
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:9.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center-across;
	vertical-align:middle;
	border-top:1.0pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:1.0pt solid windowtext;
	background:white;
	mso-pattern:auto none;
	white-space:nowrap;}
.xl438756
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:9.0pt;
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
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl448756
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:9.0pt;
	font-weight:400;
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
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl458756
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:9.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:1.0pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl468756
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:9.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:0;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl478756
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:9.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl488756
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:9.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl498756
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:9.0pt;
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
.xl508756
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:9.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl518756
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:9.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl528756
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:9.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl538756
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:9.0pt;
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
	border-right:none;
	border-bottom:none;
	border-left:1.0pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl548756
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:9.0pt;
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
	border-right:1.0pt solid windowtext;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl558756
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:9.0pt;
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
.xl568756
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:9.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:1.0pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl578756
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:9.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM;
	mso-generic-font-family:auto;
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
.xl588756
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:9.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl598756
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:9.0pt;
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
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl608756
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:9.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM;
	mso-generic-font-family:auto;
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
.xl618756
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:9.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl628756
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:9.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM;
	mso-generic-font-family:auto;
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
.xl638756
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:9.0pt;
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
	border-right:.5pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl648756
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:9.0pt;
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
	border-bottom:1.0pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl658756
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:9.0pt;
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
	border-right:.5pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:1.0pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl668756
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:9.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl678756
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:9.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:0;
	text-align:center;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl688756
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:9.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:Fixed;
	text-align:general;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl698756
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:9.0pt;
	font-weight:400;
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
.xl708756
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:9.0pt;
	font-weight:700;
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
.xl718756
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:9.0pt;
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
.xl728756
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:9.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:bottom;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl738756
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:9.0pt;
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
.xl748756
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:9.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center-across;
	vertical-align:middle;
	border-top:1.0pt solid windowtext;
	border-right:none;
	border-bottom:1.0pt solid windowtext;
	border-left:none;
	background:white;
	mso-pattern:auto none;
	white-space:nowrap;}
.xl758756
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:9.0pt;
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
.xl768756
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:9.0pt;
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
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl778756
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:9.0pt;
	font-weight:400;
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
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl788756
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:9.0pt;
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
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl798756
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:9.0pt;
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
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl808756
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:9.0pt;
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
.xl818756
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:9.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM;
	mso-generic-font-family:auto;
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
.xl828756
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:9.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:1.0pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl838756
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:9.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center-across;
	vertical-align:middle;
	border-top:1.0pt solid windowtext;
	border-right:none;
	border-bottom:1.0pt solid windowtext;
	border-left:none;
	background:white;
	mso-pattern:auto none;
	white-space:nowrap;}
.xl848756
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:9.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	background:white;
	mso-pattern:auto none;
	white-space:nowrap;}
.xl858756
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:9.0pt;
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
	border-bottom:none;
	border-left:1.0pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl868756
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:9.0pt;
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
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl878756
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:9.0pt;
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
	border-right:1.0pt solid windowtext;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl888756
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:9.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:1.0pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl898756
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:9.0pt;
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
	background:silver;
	mso-pattern:auto none;
	white-space:nowrap;}
.xl908756
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:9.0pt;
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
	background:silver;
	mso-pattern:auto none;
	white-space:nowrap;}
.xl918756
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:9.0pt;
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
	background:silver;
	mso-pattern:auto none;
	white-space:nowrap;}
.xl928756
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:9.0pt;
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
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	background:silver;
	mso-pattern:auto none;
	white-space:nowrap;}
.xl938756
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:9.0pt;
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
	border-right:.5pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl948756
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:9.0pt;
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
	border-left:.5pt solid windowtext;
	background:white;
	mso-pattern:auto none;
	white-space:nowrap;}
.xl958756
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:9.0pt;
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
	border-right:1.0pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	background:white;
	mso-pattern:auto none;
	white-space:nowrap;}
.xl968756
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:9.0pt;
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
.xl978756
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:9.0pt;
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
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl988756
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:9.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	background:silver;
	mso-pattern:auto none;
	white-space:nowrap;}
.xl998756
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:9.0pt;
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
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	background:silver;
	mso-pattern:auto none;
	white-space:nowrap;}
.xl1008756
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:9.0pt;
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
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:1.0pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl1018756
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:9.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:middle;
	border-top:1.0pt solid windowtext;
	border-right:none;
	border-bottom:1.0pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl1028756
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:9.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center-across;
	vertical-align:bottom;
	border-top:1.0pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	background:white;
	mso-pattern:auto none;
	white-space:nowrap;}
.xl1038756
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:9.0pt;
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
	border-right:1.0pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:none;
	background:white;
	mso-pattern:auto none;
	white-space:nowrap;}
.xl1048756
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:9.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM;
	mso-generic-font-family:auto;
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
.xl1058756
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:9.0pt;
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
	border-bottom:none;
	border-left:1.0pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl1068756
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:9.0pt;
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
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl1078756
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:9.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:1.0pt solid windowtext;
	background:silver;
	mso-pattern:auto none;
	white-space:nowrap;}
.xl1088756
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:9.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:Fixed;
	text-align:center;
	vertical-align:middle;
	border-top:1.0pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl1098756
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:9.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border-top:1.0pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:1.0pt solid windowtext;
	background:white;
	mso-pattern:auto none;
	white-space:nowrap;}
.xl1108756
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:9.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:bottom;
	border-top:1.0pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	background:white;
	mso-pattern:auto none;
	white-space:nowrap;}
.xl1118756
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:9.0pt;
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
	border-right:1.0pt solid windowtext;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl1128756
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:9.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl1138756
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:9.0pt;
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
	border-right:none;
	border-bottom:1.0pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl1148756
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:9.0pt;
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
	border-bottom:1.0pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl1158756
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:9.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:0;
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
  //$year = isset($_REQUEST["year"]) ? $_REQUEST["year"] : "";
  $actype = isset($_REQUEST["actype"]) ? $_REQUEST["actype"] : "";

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

  $TE = connectimesysTE();
	
	$FH = queryFH($periode,$actype);//
	$bulan = array_keys($FH);
	
	$FH12bulan = queryFH12(($tahun-1)."-12",$actype,12);
	$FH12 = array_sum($FH12bulan);
	$keys12bulan = array_keys($FH12bulan);

	$FC = queryFC($periode,$actype);
	$FC12 = array_sum(queryFC12(($tahun-1)."-12",$actype,12));//

	$ATAdelay = ATAdelay($bulan[2],$bulan[0],$actype);
	$ATAdelay12bulan = ATAdelay12($keys12bulan[11],$keys12bulan[0],$actype);
	$alertleveldelay = alertdelay($timeawal,$timeakhir,$actype);//die("oke");

	$ATA12bulan = ATA12($keys12bulan[11],$keys12bulan[0],$actype);//die(print_r($ATA12bulan));
	
	$ATApirep = ATA($bulan[2],$bulan[0],$actype);//
		
	
	$alertlevel = alert($timeawal,$timeakhir,$actype);//die(print_r($alertlevel));

	$connectAMS = connectimesys('imesys');
	$ATA = ATAdef();
	$ATAdesc = ATAdesc();
	//die(print_r($ATAdesc));

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

<div id="Pilot Delay0408_8756" align=center x:publishsource="Excel">

<table x:str border=0 cellpadding=0 cellspacing=0 width=1128 class=xl378756
 style='border-collapse:collapse;table-layout:fixed;width:846pt'>
 <col class=xl378756 width=35 style='mso-width-source:userset;mso-width-alt:
 1280;width:26pt'>
 <col class=xl378756 width=185 style='mso-width-source:userset;mso-width-alt:
 6765;width:139pt'>
 <col class=xl378756 width=40 span=3 style='mso-width-source:userset;
 mso-width-alt:1462;width:30pt'>
 <col class=xl378756 width=55 style='mso-width-source:userset;mso-width-alt:
 2011;width:41pt'>
 <col class=xl378756 width=67 style='mso-width-source:userset;mso-width-alt:
 2450;width:50pt'>
 <col class=xl378756 width=45 style='mso-width-source:userset;mso-width-alt:
 1645;width:34pt'>
 <col class=xl378756 width=47 style='mso-width-source:userset;mso-width-alt:
 1718;width:35pt'>
 <col class=xl378756 width=45 style='mso-width-source:userset;mso-width-alt:
 1645;width:34pt'>
 <col class=xl378756 width=57 style='mso-width-source:userset;mso-width-alt:
 2084;width:43pt'>
 <col class=xl378756 width=63 style='mso-width-source:userset;mso-width-alt:
 2304;width:47pt'>
 <col class=xl378756 width=45 style='mso-width-source:userset;mso-width-alt:
 1645;width:34pt'>
 <col class=xl698756 width=49 span=2 style='mso-width-source:userset;
 mso-width-alt:1792;width:37pt'>
 <col class=xl378756 width=64 style='width:48pt'>
 <col class=xl378756 width=87 style='mso-width-source:userset;mso-width-alt:
 3181;width:65pt'>
 <col class=xl378756 width=115 style='mso-width-source:userset;mso-width-alt:
 4205;width:86pt'>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl378756 width=35 style='height:12.75pt;width:26pt'></td>
  <td class=xl378756 width=185 style='width:139pt'></td>
  <td class=xl378756 width=40 style='width:30pt'></td>
  <td class=xl378756 width=40 style='width:30pt'></td>
  <td class=xl378756 width=40 style='width:30pt'></td>
  <td class=xl378756 width=55 style='width:41pt'></td>
  <td class=xl378756 width=67 style='width:50pt'></td>
  <td class=xl378756 width=45 style='width:34pt'></td>
  <td class=xl378756 width=47 style='width:35pt'></td>
  <td class=xl378756 width=45 style='width:34pt'></td>
  <td class=xl378756 width=57 style='width:43pt'></td>
  <td class=xl378756 width=63 style='width:47pt'></td>
  <td class=xl378756 width=45 style='width:34pt'></td>
  <td class=xl698756 width=49 style='width:37pt'></td>
  <td class=xl698756 width=49 style='width:37pt'></td>
  <td class=xl378756 width=64 style='width:48pt'></td>
  <td class=xl378756 width=87 style='width:65pt'></td>
  <td class=xl378756 width=115 style='width:86pt'></td>
 </tr>
 <tr height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 colspan=2 class=xl328756 align=center style='height:18.0pt'>GA
  <?= $actype?></td>
  <td class=xl338756>&nbsp;</td>
  <td class=xl338756>&nbsp;</td>
  <td class=xl348756>&nbsp;</td>
  <td class=xl348756 colspan=2>PILOT REPORT</td>
  <td class=xl338756>&nbsp;</td>
  <td class=xl1018756>&nbsp;</td>
  <td class=xl338756>&nbsp;</td>
  <td class=xl338756>&nbsp;</td>
  <td class=xl338756>&nbsp;</td>
  <td class=xl338756>&nbsp;</td>
  <td class=xl358756>&nbsp;</td>
  <td class=xl368756>&nbsp;</td>
  <td class=xl668756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.95pt'>
  <td height=21 class=xl388756 style='height:15.95pt'>&nbsp;</td>
  <td class=xl848756>&nbsp;</td>
  <td class=xl398756>&nbsp;</td>
  <td class=xl398756>&nbsp;</td>
  <td class=xl398756>&nbsp;</td>
  <td class=xl398756>&nbsp;</td>
  <td class=xl398756>&nbsp;</td>
  <td class=xl398756>&nbsp;</td>
  <td class=xl398756>&nbsp;</td>
  <td class=xl398756>&nbsp;</td>
  <td class=xl398756>&nbsp;</td>
  <td class=xl398756>&nbsp;</td>
  <td class=xl398756>&nbsp;</td>
  <td class=xl408756>&nbsp;</td>
  <td class=xl418756>&nbsp;</td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl718756></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.95pt'>
  <td height=21 class=xl428756 align=center style='height:15.95pt'>TOTAL<span
  style='mso-spacerun:yes'>  </span>FLIGHT HOURS</td>
  <td class=xl1028756>&nbsp;</td>
  <td class=xl948756 x:num><?= $FH[$bulan[2]]?></td>
  <td class=xl948756 style='border-left:none' x:num><?= $FH[$bulan[1]]?></td>
  <td class=xl948756 style='border-left:none' x:num><?= $FH[$bulan[0]]?></td>
  <td class=xl758756 x:num x:fmla="=SUM(C4:E4)"><?= $FH[$bulan[2]] + $FH[$bulan[1]] + $FH[$bulan[0]]?></td>
  <td class=xl1038756 x:num><?= $FH12?></td>
  <td class=xl408756>&nbsp;</td>
  <td class=xl408756>&nbsp;</td>
  <td class=xl408756>&nbsp;</td>
  <td class=xl408756>&nbsp;</td>
  <td class=xl408756>&nbsp;</td>
  <td class=xl408756>&nbsp;</td>
  <td class=xl408756>&nbsp;</td>
  <td class=xl418756>&nbsp;</td>
  <td class=xl698756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.95pt'>
  <td height=21 class=xl1048756 style='height:15.95pt'>&nbsp;</td>
  <td align=left valign=top><!--[if gte vml 1]><v:shapetype id="_x0000_t202"
   coordsize="21600,21600" o:spt="202" path="m,l,21600r21600,l21600,xe">
   <v:stroke joinstyle="miter"/>
   <v:path gradientshapeok="t" o:connecttype="rect"/>
  </v:shapetype><v:shape id="Text_x0020_1" o:spid="_x0000_s17409" type="#_x0000_t202"
   style='position:absolute;margin-left:15pt;margin-top:8.25pt;width:97.5pt;
   height:13.5pt;z-index:1' filled="f" fillcolor="windowText [64]" stroked="f"
   strokecolor="windowText [64]" strokeweight="3e-5mm" o:insetmode="auto">
   <v:fill color2="window [65]"/>
   <x:ClientData ObjectType="Text">
    <x:AutoFill>False</x:AutoFill>
    <x:AutoLine>False</x:AutoLine>
    <x:TextHAlign>Center</x:TextHAlign>
    <x:TextVAlign>Center</x:TextVAlign>
   </x:ClientData>
  </v:shape><![endif]--><![if !vml]><span style='mso-ignore:vglayout;
  position:absolute;z-index:1;margin-left:20px;margin-top:11px;width:130px;
  height:18px'>
  <table cellpadding=0 cellspacing=0>
   <tr>
    <td width=130 height=18 align=center valign=middle style='vertical-align:
    top'><![endif]>
    <div v:shape="Text_x0020_1" style='padding:.3749pt 0pt 0pt 0pt;text-align:
    center' class=shape><font class="font58756">ATA CHAPTER</font></div>
    <![if !vml]></td>
   </tr>
  </table>
  </span><![endif]><span style='mso-ignore:vglayout2'>
  <table cellpadding=0 cellspacing=0>
   <tr>
    <td height=21 class=xl458756 width=185 style='height:15.95pt;width:139pt'>&nbsp;</td>
   </tr>
  </table>
  </span></td>
  <td class=xl768756><?= bulan($bulan[2])?></td>
  <td class=xl768756><?= bulan($bulan[1])?></td>
  <td class=xl768756><?= bulan($bulan[0])?></td>
  <td class=xl778756>LAST 3</td>
  <td class=xl568756 style='border-top:none'>12 Months</td>
  <td class=xl438756 x:fmla="=C5"></td>
  <td class=xl438756 x:fmla="=D5"></td>
  <td class=xl438756 x:fmla="=E5"></td>
  <td class=xl778756>3 Months</td>
  <td class=xl568756>12 Months</td>
  <td class=xl448756>ALERT</td>
  <td class=xl448756>ALERT</td>
  <td class=xl458756>TREND</td>
  <td class=xl698756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.95pt'>
  <td height=21 class=xl1058756 style='height:15.95pt'>&nbsp;</td>
  <td class=xl1068756>&nbsp;</td>
  <td class=xl468756 style='border-top:none'>&nbsp;</td>
  <td class=xl468756 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl468756 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl518756 style='border-top:none'>Months</td>
  <td class=xl488756 style='border-top:none' x:num><?= $tahun-1?></td>
  <td class=xl518756>RATE</td>
  <td class=xl628756 style='border-left:none'>RATE</td>
  <td class=xl518756>RATE</td>
  <td class=xl518756 style='border-top:none'>RATE</td>
  <td class=xl508756 style='border-top:none;border-left:none'>RATE</td>
  <td class=xl518756>LEVEL</td>
  <td class=xl628756 style='border-left:none'>STATUS</td>
  <td class=xl508756 style='border-left:none'>&nbsp;</td>
  <td class=xl698756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
 </tr>
 <?
  for ($i=0;$i<35;$i++)
  {
	  $ATApirep[$bulan[2]][$ATA[$i]] = isset($ATApirep[$bulan[2]][$ATA[$i]]) ? $ATApirep[$bulan[2]][$ATA[$i]] : 0;
	  $ATApirep[$bulan[1]][$ATA[$i]] = isset($ATApirep[$bulan[1]][$ATA[$i]]) ? $ATApirep[$bulan[1]][$ATA[$i]] : 0;
	  $ATApirep[$bulan[0]][$ATA[$i]] = isset($ATApirep[$bulan[0]][$ATA[$i]]) ? $ATApirep[$bulan[0]][$ATA[$i]] : 0;
	  $ATA12bulan[$ATA[$i]] = isset($ATA12bulan[$ATA[$i]]) ? $ATA12bulan[$ATA[$i]] : 0;
	  $alertlevel[$ATA[$i]] = isset($alertlevel[$ATA[$i]]) ? $alertlevel[$ATA[$i]] : 0;
	  $alertleveldelay[$ATA[$i]] = isset($alertleveldelay[$ATA[$i]]) ? $alertleveldelay[$ATA[$i]] : 0;
  ?>
 <tr height=21 style='mso-height-source:userset;height:15.95pt'>
  <td height=21 class=xl538756 style='height:15.95pt' x:num><?= $ATA[$i]?></td>
  <td class=xl548756><?= $ATAdesc[$i]?></td>
  <td class=xl498756 x:num><?= $ATApirep[$bulan[2]][$ATA[$i]]?></td>
  <td class=xl498756 style='border-left:none' x:num><?= $ATApirep[$bulan[1]][$ATA[$i]]?></td>
  <td class=xl498756 style='border-left:none' x:num><?= $ATApirep[$bulan[0]][$ATA[$i]]?></td>
  <td class=xl868756 x:num x:fmla="=SUM(C<?= (7+$i)?>:E<?= (7+$i)?>)"><?= $ATApirep[$bulan[0]][$ATA[$i]] + $ATApirep[$bulan[1]][$ATA[$i]] + $ATApirep[$bulan[2]][$ATA[$i]]?></td>
  <td class=xl878756 x:num><?= $ATA12bulan[$ATA[$i]]?></td>
  <td class=xl798756 x:num x:fmla="=C<?= (7+$i)?>*1000/$C$4"></td>
  <td class=xl798756 style='border-left:none' x:num
  x:fmla="=D<?= (7+$i)?>*1000/$D$4"></td>
  <td class=xl798756 style='border-left:none' x:num
  x:fmla="=E<?= (7+$i)?>*1000/$E$4"></td>
  <td class=xl798756 style='border-left:none' x:num
  x:fmla="=F<?= (7+$i)?>*1000/$F$4"></td>
  <td class=xl788756 style='border-left:none' x:num
  x:fmla="=G<?= (7+$i)?>*1000/$G$4"></td>
  <td class=xl558756 x:num><?= round($alertlevel[$ATA[$i]],2)?></td>
  <td class=xl448756 style='border-top:none'
  x:fmla="=IF(J<?= (7+$i)?>&gt;M<?= (7+$i)?>,IF(I<?= (7+$i)?>&gt;M<?= (7+$i)?>,IF(H<?= (7+$i)?>&gt;M<?= (7+$i)?>,&quot;RED-3&quot;,&quot;RED-2&quot;),&quot;RED-1&quot;),&quot; &quot;)"><span
  style='mso-spacerun:yes'><?= alertstatus($ATApirep[$bulan[2]][$ATA[$i]]/$FH[$bulan[2]]*1000,$ATApirep[$bulan[1]][$ATA[$i]]/$FH[$bulan[1]]*1000,$ATApirep[$bulan[0]][$ATA[$i]]/$FH[$bulan[0]]*1000,$alertlevel[$ATA[$i]])?> </span></td>
  <td class=xl568756 style='border-top:none'
  x:fmla="=IF(I<?= (7+$i)?>&gt;H<?= (7+$i)?>,IF(J<?= (7+$i)?>&gt;I<?= (7+$i)?>,&quot;UP&quot;,&quot;&quot;),IF(I<?= (7+$i)?>=H<?= (7+$i)?>,&quot;&quot;,IF(J<?= (7+$i)?>&lt;I<?= (7+$i)?>,&quot;DOWN&quot;,&quot;&quot;)))"></td>
  <td class=xl698756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
 </tr>
<?
  }
?>
 
 <tr height=21 style='mso-height-source:userset;height:15.95pt'>
  <td height=21 class=xl708756 colspan=2 style='height:15.95pt'>NOTE :</td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl698756 x:str=""></td>
  <td class=xl698756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.95pt'>
  <td height=21 class=xl378756 colspan=9 style='height:15.95pt'>The Alert Level
  (AL)<span style='mso-spacerun:yes'>  </span>is based on monthly Pilot Report
  (PIREP) Rate of last Four Quarters (Average + 2 *STD).</td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl698756></td>
  <td class=xl698756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.95pt'>
  <td height=21 class=xl378756 colspan=13 style='height:15.95pt'>The ALERT
  Status column will show &quot;RED-1&quot; if the last month PIREP<span
  style='mso-spacerun:yes'>  </span>Rate exceed the AL,&quot;RED-2&quot; if
  this is true for the<span style='mso-spacerun:yes'>  </span>last two
  consecutive months,</td>
  <td class=xl698756></td>
  <td class=xl698756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.95pt'>
  <td height=21 class=xl378756 colspan=5 style='height:15.95pt'
  x:str="and &quot;RED-3&quot; if this is true for the last three consecutive months. ">and
  &quot;RED-3&quot; if this is true for the last three consecutive months.<span
  style='mso-spacerun:yes'> </span></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl698756></td>
  <td class=xl698756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.95pt'>
  <td height=21 class=xl378756 colspan=9 style='height:15.95pt'>The TREND
  column shows an &quot;UP&quot; or &quot;DOWN&quot; when the rate has
  increased or decreased for 3 months</td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl698756></td>
  <td class=xl698756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.95pt'>
  <td height=21 class=xl378756 style='height:15.95pt'></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl698756></td>
  <td class=xl698756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.95pt'>
  <td height=21 class=xl378756 style='height:15.95pt'></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl728756 colspan=6
  x:str="Compiled and Issued by GMF Reliability  Services ">Compiled and Issued
  by GMF Reliability<span style='mso-spacerun:yes'>  </span>Services<span
  style='mso-spacerun:yes'> </span></td>
  <td class=xl698756></td>
  <td class=xl698756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.95pt'>
  <td height=21 class=xl378756 style='height:15.95pt'></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl698756></td>
  <td class=xl698756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.95pt'>
  <td height=21 class=xl378756 style='height:15.95pt'></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl738756 x:str="'Page : C 3">Page : C 3</td>
  <td class=xl698756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.95pt'>
  <td height=21 class=xl378756 style='height:15.95pt'></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl738756></td>
  <td class=xl698756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.95pt'>
  <td height=21 class=xl378756 style='height:15.95pt'></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl738756></td>
  <td class=xl698756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.95pt'>
  <td height=21 class=xl378756 style='height:15.95pt'></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl738756></td>
  <td class=xl698756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.95pt'>
  <td height=21 class=xl378756 style='height:15.95pt'></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl738756></td>
  <td class=xl698756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.95pt'>
  <td height=21 class=xl378756 style='height:15.95pt'></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl738756></td>
  <td class=xl698756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.95pt'>
  <td height=21 class=xl378756 style='height:15.95pt'></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl738756></td>
  <td class=xl698756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.95pt'>
  <td height=21 class=xl378756 style='height:15.95pt'></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl698756></td>
  <td class=xl698756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
 </tr>
 <tr height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl328756 style='height:18.0pt'>&nbsp;</td>
  <td class=xl748756 align=center>GA <?= $actype?></td>
  <td class=xl338756>&nbsp;</td>
  <td class=xl338756>&nbsp;</td>
  <td class=xl348756 colspan=6
  x:str="TECHNICAL DELAY &gt; 15 MINUTES AND CANCELLATIONS ">TECHNICAL DELAY
  &gt; 15 MINUTES AND CANCELLATIONS<span style='mso-spacerun:yes'> </span></td>
  <td class=xl338756>&nbsp;</td>
  <td class=xl338756>&nbsp;</td>
  <td class=xl338756>&nbsp;</td>
  <td class=xl358756>&nbsp;</td>
  <td class=xl368756>&nbsp;</td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.95pt'>
  <td height=21 class=xl388756 style='height:15.95pt'>&nbsp;</td>
  <td class=xl848756>&nbsp;</td>
  <td class=xl398756>&nbsp;</td>
  <td class=xl398756>&nbsp;</td>
  <td class=xl398756>&nbsp;</td>
  <td class=xl398756>&nbsp;</td>
  <td class=xl398756>&nbsp;</td>
  <td class=xl398756>&nbsp;</td>
  <td class=xl398756>&nbsp;</td>
  <td class=xl398756>&nbsp;</td>
  <td class=xl408756>&nbsp;</td>
  <td class=xl398756>&nbsp;</td>
  <td class=xl398756>&nbsp;</td>
  <td class=xl408756>&nbsp;</td>
  <td class=xl418756>&nbsp;</td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.95pt'>
  <td height=21 class=xl1098756 style='height:15.95pt'><span
  style='mso-spacerun:yes'>        </span>RE<span style='display:none'>VENUE
  TAKE OFFS</span></td>
  <td class=xl1108756>&nbsp;</td>
  <td class=xl948756 x:num><?= $FC[$bulan[2]]?></td>
  <td class=xl948756 style='border-left:none' x:num><?= $FC[$bulan[1]]?></td>
  <td class=xl948756 style='border-left:none' x:num><?= $FC[$bulan[0]]?></td>
  <td class=xl758756 x:num x:fmla="=SUM(C62:E62)"><?= $FC[$bulan[2]] + $FC[$bulan[1]] + $FC[$bulan[0]]?></td>
  <td class=xl958756 style='border-left:none' x:num><?= $FC12?></td>
  <td class=xl408756>&nbsp;</td>
  <td class=xl408756>&nbsp;</td>
  <td class=xl408756>&nbsp;</td>
  <td class=xl408756>&nbsp;</td>
  <td class=xl408756>&nbsp;</td>
  <td class=xl408756>&nbsp;</td>
  <td class=xl408756>&nbsp;</td>
  <td class=xl418756>&nbsp;</td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.95pt'>
  <td height=21 class=xl1048756 style='height:15.95pt'>&nbsp;</td>
  <td align=left valign=top><!--[if gte vml 1]><v:shape id="Text_x0020_2"
   o:spid="_x0000_s17410" type="#_x0000_t202" style='position:absolute;
   margin-left:15.75pt;margin-top:9pt;width:97.5pt;height:13.5pt;z-index:2'
   filled="f" fillcolor="windowText [64]" stroked="f" strokecolor="windowText [64]"
   strokeweight="3e-5mm" o:insetmode="auto">
   <v:fill color2="window [65]"/>
   <x:ClientData ObjectType="Text">
    <x:AutoFill>False</x:AutoFill>
    <x:AutoLine>False</x:AutoLine>
    <x:TextHAlign>Center</x:TextHAlign>
    <x:TextVAlign>Center</x:TextVAlign>
   </x:ClientData>
  </v:shape><![endif]--><![if !vml]><span style='mso-ignore:vglayout;
  position:absolute;z-index:2;margin-left:21px;margin-top:12px;width:130px;
  height:18px'>
  <table cellpadding=0 cellspacing=0>
   <tr>
    <td width=130 height=18 align=center valign=middle style='vertical-align:
    top'><![endif]>
    <div v:shape="Text_x0020_2" style='padding:.3749pt 0pt 0pt 0pt;text-align:
    center' class=shape><font class="font58756">ATA CHAPTER</font></div>
    <![if !vml]></td>
   </tr>
  </table>
  </span><![endif]><span style='mso-ignore:vglayout2'>
  <table cellpadding=0 cellspacing=0>
   <tr>
    <td height=21 class=xl1118756 width=185 style='height:15.95pt;width:139pt'>&nbsp;</td>
   </tr>
  </table>
  </span></td>
  <td class=xl768756><?= bulan($bulan[2])?></td>
  <td class=xl768756><?= bulan($bulan[1])?></td>
  <td class=xl768756><?= bulan($bulan[0])?></td>
  <td class=xl778756>LAST 3</td>
  <td class=xl568756>12 Months</td>
  <td class=xl438756 x:fmla="=C63"></td>
  <td class=xl438756 x:fmla="=D63"></td>
  <td class=xl438756 x:fmla="=E63"></td>
  <td class=xl778756>3 Months</td>
  <td class=xl568756>12 Months</td>
  <td class=xl778756>ALERT</td>
  <td class=xl778756>ALERT</td>
  <td class=xl458756>TREND</td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.95pt'>
  <td height=21 class=xl1058756 style='height:15.95pt'>&nbsp;</td>
  <td class=xl1068756>&nbsp;</td>
  <td class=xl468756 style='border-top:none'>&nbsp;</td>
  <td class=xl468756 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl468756 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl518756 style='border-top:none'>Months</td>
  <td class=xl488756 style='border-top:none' x:num><?= ($tahun-1)?></td>
  <td class=xl518756>RATE</td>
  <td class=xl628756 style='border-left:none'>RATE</td>
  <td class=xl518756>RATE</td>
  <td class=xl518756 style='border-top:none'>RATE</td>
  <td class=xl508756 style='border-top:none;border-left:none'>RATE</td>
  <td class=xl628756 style='border-top:none'>LEVEL</td>
  <td class=xl628756 style='border-top:none;border-left:none'>STATUS</td>
  <td class=xl508756 style='border-left:none'>&nbsp;</td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
 </tr>
 <?
  for ($i=0;$i<35;$i++)
  {
	  $ATAdelay[$bulan[2]][$ATA[$i]] = isset($ATAdelay[$bulan[2]][$ATA[$i]]) ? $ATAdelay[$bulan[2]][$ATA[$i]] : 0;
	  $ATAdelay[$bulan[1]][$ATA[$i]] = isset($ATAdelay[$bulan[1]][$ATA[$i]]) ? $ATAdelay[$bulan[1]][$ATA[$i]] : 0;
	  $ATAdelay[$bulan[0]][$ATA[$i]] = isset($ATAdelay[$bulan[0]][$ATA[$i]]) ? $ATAdelay[$bulan[0]][$ATA[$i]] : 0;
	  $ATAdelay12bulan[$ATA[$i]] = isset($ATAdelay12bulan[$ATA[$i]]) ? $ATAdelay12bulan[$ATA[$i]] : 0;
  ?>
 <tr height=21 style='mso-height-source:userset;height:15.95pt'>
  <td height=21 class=xl858756 style='height:15.95pt' x:num><?= $ATA[$i]?></td>
  <td class=xl548756 style='border-left:none'><?= $ATAdesc[$i]?></td>
  <td class=xl498756 x:num><?= $ATAdelay[$bulan[2]][$ATA[$i]]?></td>
  <td class=xl498756 style='border-left:none' x:num><?= $ATAdelay[$bulan[1]][$ATA[$i]]?></td>
  <td class=xl498756 style='border-left:none' x:num><?= $ATAdelay[$bulan[0]][$ATA[$i]]?></td>
  <td class=xl868756 x:num x:fmla="=SUM(C<?= (65 + $i)?>:E<?= (65 + $i)?>)"></td>
  <td class=xl878756 x:num><?= $ATAdelay12bulan[$ATA[$i]]?></td>
  <td class=xl968756 x:num x:fmla="=C<?= (63 + $i)?>*100/$C$60"></td>
  <td class=xl968756 x:num x:fmla="=D<?= (63 + $i)?>*100/$D$60"></td>
  <td class=xl968756 x:num x:fmla="=E<?= (63 + $i)?>*100/$E$60"></td>
  <td class=xl968756 x:num x:fmla="=F<?= (63 + $i)?>*100/$F$60"></td>
  <td class=xl788756 style='border-left:none' x:num  x:fmla="=G<?= (65 + $i)?>*100/$G$62"></td>
  <td class=xl798756 x:num><?= round($alertleveldelay[$ATA[$i]],2)?></td>
  <td class=xl798756 style='border-left:none'
  x:fmla="=IF(J<?= (65 + $i)?>&gt;M<?= (65 + $i)?>,IF(I<?= (65 + $i)?>&gt;M<?= (65 + $i)?>,IF(H<?= (65 + $i)?>&gt;M<?= (65 + $i)?>,&quot;RED-3&quot;,&quot;RED-2&quot;),&quot;RED-1&quot;),&quot; &quot;)"><span
  style='mso-spacerun:yes'> </span></td>
  <td class=xl568756 style='border-top:none'
  x:fmla="=IF(I<?= (65 + $i)?>&gt;H<?= (65 + $i)?>,IF(J<?= (65 + $i)?>&gt;I<?= (65 + $i)?>,&quot;UP&quot;,&quot;&quot;),IF(I<?= (65 + $i)?>=H<?= (65 + $i)?>,&quot;&quot;,IF(J<?= (65 + $i)?>&lt;I<?= (65 + $i)?>,&quot;DOWN&quot;,&quot;&quot;)))"></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
 </tr>
 <?
	}
 ?>
 <tr height=21 style='mso-height-source:userset;height:15.95pt'>
  <td height=21 class=xl828756 style='height:15.95pt'>OT</td>
  <td class=xl618756 style='border-left:none'>OTHER</td>
  <td class=xl628756 style='border-top:none' x:num>0</td>
  <td class=xl628756 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl628756 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl628756 style='border-left:none' x:num x:fmla="=SUM(C99:E99)">0</td>
  <td class=xl508756 style='border-left:none' x:num>2</td>
  <td class=xl658756 style='border-left:none' x:num x:fmla="=C99*100/$C$61">0.00</td>
  <td class=xl638756 x:num x:fmla="=D99*100/$D$61">0.00</td>
  <td class=xl638756 x:num x:fmla="=E99*100/$E$61">0.00</td>
  <td class=xl638756 x:num x:fmla="=F99*100/$F$61">0.00</td>
  <td class=xl648756 style='border-top:none;border-left:none'
  x:num x:fmla="=G99*100/$G$61">0.00</td>
  <td class=xl1138756 x:num>0.03</td>
  <td class=xl1148756
  x:fmla="=IF(J99&gt;M99,IF(I99&gt;M99,IF(H99&gt;M99,&quot;RED-3&quot;,&quot;RED-2&quot;),&quot;RED-1&quot;),&quot; &quot;)"><span
  style='mso-spacerun:yes'> </span></td>
  <td class=xl508756 style='border-left:none'>&nbsp;</td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.95pt'>
  <td height=21 class=xl378756 style='height:15.95pt'></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl1158756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl698756></td>
  <td class=xl698756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.95pt'>
  <td height=21 class=xl708756 colspan=2 style='height:15.95pt'>NOTE :</td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl698756 x:str=""></td>
  <td class=xl698756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.95pt'>
  <td height=21 class=xl378756 colspan=9 style='height:15.95pt'>The Alert Level
  (AL)<span style='mso-spacerun:yes'>  </span>is based on monthly Technical
  Delay Rate of last Four<span style='mso-spacerun:yes'>  </span>Quarters
  (Average + 2 *STD)</td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl698756></td>
  <td class=xl698756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.95pt'>
  <td height=21 class=xl378756 colspan=13 style='height:15.95pt'>The ALERT
  Status column will show &quot;RED-1&quot; if the last month Delay<span
  style='mso-spacerun:yes'>  </span>Rate exceed the AL,&quot;RED-2&quot; if
  this is true for the<span style='mso-spacerun:yes'>  </span>last two
  consecutive months,</td>
  <td class=xl698756></td>
  <td class=xl698756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.95pt'>
  <td height=21 class=xl378756 colspan=5 style='height:15.95pt'
  x:str="and &quot;RED-3&quot; if this is true for the last three consecutive months. ">and
  &quot;RED-3&quot; if this is true for the last three consecutive months.<span
  style='mso-spacerun:yes'> </span></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl698756></td>
  <td class=xl698756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.95pt'>
  <td height=21 class=xl378756 colspan=9 style='height:15.95pt'>The TREND
  column shows an &quot;UP&quot; or &quot;DOWN&quot; when the rate has
  increased or decreased for 3 months</td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl698756></td>
  <td class=xl698756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.95pt'>
  <td height=21 class=xl378756 style='height:15.95pt'></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl698756></td>
  <td class=xl698756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.95pt'>
  <td height=21 class=xl378756 style='height:15.95pt'></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl728756 colspan=6
  x:str="Compiled and Issued by GMF Reliability  Services ">Compiled and Issued
  by GMF Reliability<span style='mso-spacerun:yes'>  </span>Services<span
  style='mso-spacerun:yes'> </span></td>
  <td class=xl698756></td>
  <td class=xl698756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.95pt'>
  <td height=21 class=xl378756 style='height:15.95pt'></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl698756></td>
  <td class=xl698756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.95pt'>
  <td height=21 class=xl378756 style='height:15.95pt'></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl738756 x:str="'Page : C 4">Page : C 4</td>
  <td class=xl698756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.95pt'>
  <td height=21 class=xl378756 style='height:15.95pt'></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl698756></td>
  <td class=xl698756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.95pt'>
  <td height=21 class=xl378756 style='height:15.95pt'></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl698756></td>
  <td class=xl698756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.95pt'>
  <td height=21 class=xl378756 style='height:15.95pt'></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl698756></td>
  <td class=xl698756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.95pt'>
  <td height=21 class=xl378756 style='height:15.95pt'></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl698756></td>
  <td class=xl698756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.95pt'>
  <td height=21 class=xl378756 style='height:15.95pt'></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl698756></td>
  <td class=xl698756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.95pt'>
  <td height=21 class=xl378756 style='height:15.95pt'></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl698756></td>
  <td class=xl698756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.95pt'>
  <td height=21 class=xl378756 style='height:15.95pt'></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl698756></td>
  <td class=xl698756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.95pt'>
  <td height=21 class=xl378756 style='height:15.95pt'></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl698756></td>
  <td class=xl698756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
  <td class=xl378756></td>
 </tr>
 <![if supportMisalignedColumns]>
 <tr height=0 style='display:none'>
  <td width=35 style='width:26pt'></td>
  <td width=185 style='width:139pt'></td>
  <td width=40 style='width:30pt'></td>
  <td width=40 style='width:30pt'></td>
  <td width=40 style='width:30pt'></td>
  <td width=55 style='width:41pt'></td>
  <td width=67 style='width:50pt'></td>
  <td width=45 style='width:34pt'></td>
  <td width=47 style='width:35pt'></td>
  <td width=45 style='width:34pt'></td>
  <td width=57 style='width:43pt'></td>
  <td width=63 style='width:47pt'></td>
  <td width=45 style='width:34pt'></td>
  <td width=49 style='width:37pt'></td>
  <td width=49 style='width:37pt'></td>
  <td width=64 style='width:48pt'></td>
  <td width=87 style='width:65pt'></td>
  <td width=115 style='width:86pt'></td>
 </tr>
 <![endif]>
</table>

</div>


<!----------------------------->
<!--END OF OUTPUT FROM EXCEL PUBLISH AS WEB PAGE WIZARD-->
<!----------------------------->
</body>

</html>
