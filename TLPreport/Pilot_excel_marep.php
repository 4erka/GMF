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
<link rel=File-List href="Pilot_files/filelist.xml">
<!--[if !mso]>
<style>
v\:* {behavior:url(#default#VML);}
o\:* {behavior:url(#default#VML);}
x\:* {behavior:url(#default#VML);}
.shape {behavior:url(#default#VML);}
</style>
<![endif]-->
<style id="Pilot Delay0508_9746_Styles">
<!--table
	{mso-displayed-decimal-separator:"\.";
	mso-displayed-thousand-separator:"\,";}
.font59746
	{color:windowtext;
	font-size:10.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Tahoma, sans-serif;
	mso-font-charset:0;}
.xl329746
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
.xl339746
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
.xl349746
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
.xl359746
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
.xl369746
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
.xl379746
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
.xibny
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
	border-top:1.0pt  solid windowtext;
	text-align:general;
	vertical-align:bottom;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl389746
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
.xl399746
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
.xl409746
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
.xl419746
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
.xl429746
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
.xl439746
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
.xl449746
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
.xl459746
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
.xl469746
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
.xl479746
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
.xl489746
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
.xl499746
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
.xibny2
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
	border-left:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-right:1.0pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl509746
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
.xl519746
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
.xl529746
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
.xl539746
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
.xl549746
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
.xl559746
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
.xl569746
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
.xl579746
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
.xl589746
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
.xl599746
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
.xl609746
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
.xl619746
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
.xl629746
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
.xl639746
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
.xl649746
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
.xl659746
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
.xl669746
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
.xl679746
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
.xl689746
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
.xl699746
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
.xl709746
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
.xl719746
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
.xl729746
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
.xl739746
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
.xl749746
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
.xl759746
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
.xl769746
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
.xl779746
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
.xl789746
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
.xl799746
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
.xl809746
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
.xl819746
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
.xl829746
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
.xl839746
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
.xl849746
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
.xl859746
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
.xl869746
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
.xl879746
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
.xl889746
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
.xl899746
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
.xl909746
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
.xl919746
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
.xl929746
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
.xl939746
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
.xl949746
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
.xl959746
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
.xl969746
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
.xl979746
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
.xl989746
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
.xl999746
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
.xl1009746
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
.xl1019746
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
.xl1029746
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
.xl1039746
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
.xl1049746
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
.xl1059746
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
.xl1069746
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
.xl1079746
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
.xl1089746
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
.xl1099746
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
.xl1109746
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
.xl1119746
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
.xl1129746
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
.xl1139746
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
.xl1149746
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
.xl1159746
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
		$predetalerlevel = $tahun."-01";
	} else {
		$timeawal = ($tahun - 1)."-07";
		$timeakhir = $tahun."-06";
		$predetalerlevel = $tahun."-07";
	}

  $TE = connectimesysTE();
	
	$FH = queryFH($periode,$actype);//
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

	$bulan = array_reverse($bulan);
	
	$FH12bulan = queryFH12($periode,$actype,12);
	$FH12 = array_sum($FH12bulan);
	$keys12bulan = array_keys($FH12bulan);
	$jmlhblnyglalu = count($keys12bulan);
	$keys12bulan[11] = $keys12bulan[$jmlhblnyglalu-1];

	$FC = queryFC12rev($periode,$actype);
	$FC12 = array_sum(queryFC12rev(($tahun-1)."-12",$actype,12));//

	$ATAdelay = ATAdelay($bulan[2],$bulan[0],$actype);
	$ATAdelay12bulan = ATAdelay12($keys12bulan[11],$keys12bulan[0],$actype);
	$alertleveldelay = alertdelay($timeawal,$timeakhir,$actype);//die("oke");

	$preselectdelay = preselectalertlevel($predetalerlevel,$actype,"ALD");
	$preselectpirep = preselectalertlevel($predetalerlevel,$actype,"ALP");
	$preselectmarep = preselectalertlevel($predetalerlevel,$actype,"ALM");

	foreach ($ATAdelay as $k => $v){
		$newATAdelay[$k]['OT'] = 0;
		foreach ($v as $key => $value){
			if ($key < '21'){
				$newATAdelay[$k]['OT'] += $value;
			} else {
				$newATAdelay[$k][$key] = $value;
			}
		}
	}
	$newATAdelay12bulan['OT'] = 0;
	foreach ($ATAdelay12bulan as $k => $v){
		if ($k < '21'){
			$newATAdelay12bulan['OT'] += $v;
		} else {
			$newATAdelay12bulan[$k] = $v;
		}
	}

	$ATA12bulan = ATA12($keys12bulan[11],$keys12bulan[0],$actype);//die(print_r($ATA12bulan));
	$ATApirep = ATA($bulan[2],$bulan[0],$actype);//
	$alertlevel = alert($timeawal,$timeakhir,$actype);//die(print_r($alertlevel));

	$ATAmarep12bulan = ATA12mar($keys12bulan[11],$keys12bulan[0],$actype);//die(print_r($ATA12bulan));
	$ATAmarep = ATAmar($bulan[2],$bulan[0],$actype);//die(print_r($ATApirep));
	$alertlevelmarep = alertmar($timeawal,$timeakhir,$actype);//die(print_r($alertlevel));	
	
	//$connectAMS = connectimesys('imesys');
	$ATA = ATAdef();
	$ATAdesc = ATAdesc();
	//die(print_r($ATAdesc));

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

<div id="Pilot Delay0508_9746" align=center x:publishsource="Excel">

<table x:str border=0 cellpadding=0 cellspacing=0 width=1128 class=xl379746
 style='border-collapse:collapse;table-layout:fixed;width:846pt'>
 <col class=xl379746 width=35 style='mso-width-source:userset;mso-width-alt:
 1280;width:26pt'>
 <col class=xl379746 width=185 style='mso-width-source:userset;mso-width-alt:
 6765;width:139pt'>
 <col class=xl379746 width=40 span=3 style='mso-width-source:userset;
 mso-width-alt:1462;width:30pt'>
 <col class=xl379746 width=55 style='mso-width-source:userset;mso-width-alt:
 2011;width:41pt'>
 <col class=xl379746 width=67 style='mso-width-source:userset;mso-width-alt:
 2450;width:50pt'>
 <col class=xl379746 width=45 style='mso-width-source:userset;mso-width-alt:
 1645;width:34pt'>
 <col class=xl379746 width=47 style='mso-width-source:userset;mso-width-alt:
 1718;width:35pt'>
 <col class=xl379746 width=45 style='mso-width-source:userset;mso-width-alt:
 1645;width:34pt'>
 <col class=xl379746 width=57 style='mso-width-source:userset;mso-width-alt:
 2084;width:43pt'>
 <col class=xl379746 width=63 style='mso-width-source:userset;mso-width-alt:
 2304;width:47pt'>
 <col class=xl379746 width=45 style='mso-width-source:userset;mso-width-alt:
 1645;width:34pt'>
 <col class=xl699746 width=49 span=2 style='mso-width-source:userset;
 mso-width-alt:1792;width:37pt'>
 <col class=xl379746 width=64 style='width:48pt'>
 <col class=xl379746 width=87 style='mso-width-source:userset;mso-width-alt:
 3181;width:65pt'>
 <col class=xl379746 width=115 style='mso-width-source:userset;mso-width-alt:
 4205;width:86pt'>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl379746 width=35 style='height:12.75pt;width:26pt'></td>
  <td class=xl379746 width=185 style='width:139pt'></td>
  <td class=xl379746 width=40 style='width:30pt'></td>
  <td class=xl379746 width=40 style='width:30pt'></td>
  <td class=xl379746 width=40 style='width:30pt'></td>
  <td class=xl379746 width=55 style='width:41pt'></td>
  <td class=xl379746 width=67 style='width:50pt'></td>
  <td class=xl379746 width=45 style='width:34pt'></td>
  <td class=xl379746 width=47 style='width:35pt'></td>
  <td class=xl379746 width=45 style='width:34pt'></td>
  <td class=xl379746 width=57 style='width:43pt'></td>
  <td class=xl379746 width=63 style='width:47pt'></td>
  <td class=xl379746 width=45 style='width:34pt'></td>
  <td class=xl699746 width=49 style='width:37pt'></td>
  <td class=xl699746 width=49 style='width:37pt'></td>
  <td class=xl379746 width=64 style='width:48pt'></td>
  <td class=xl379746 width=87 style='width:65pt'></td>
  <td class=xl379746 width=115 style='width:86pt'></td>
 </tr>
 <tr height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 colspan=2 class=xl329746 align=center style='height:18.0pt'>GA
  <?=$actype?></td>
  <td class=xl339746>&nbsp;</td>
  <td class=xl339746>&nbsp;</td>
  <td class=xl349746>&nbsp;</td>
  <td class=xl349746 colspan=2>MAINTENANCE FINDING REPORT</td>
  <td class=xl339746></td>
  <td class=xl1019746></td>
  <td class=xl339746></td>
  <td class=xl339746></td>
  <td class=xl339746></td>
  <td class=xl339746></td>
  <td class=xl359746></td>
  <td class=xl369746></td>
  <td class=xl669746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.95pt'>
  <td height=21 class=xl389746 style='height:15.95pt'>&nbsp;</td>
  <td class=xl849746>&nbsp;</td>
  <td class=xl399746>&nbsp;</td>
  <td class=xl399746>&nbsp;</td>
  <td class=xl399746>&nbsp;</td>
  <td class=xl399746>&nbsp;</td>
  <td class=xl399746>&nbsp;</td>
  <td class=xl399746>&nbsp;</td>
  <td class=xl399746>&nbsp;</td>
  <td class=xl399746>&nbsp;</td>
  <td class=xl399746>&nbsp;</td>
  <td class=xl399746>&nbsp;</td>
  <td class=xl399746>&nbsp;</td>
  <td class=xl409746>&nbsp;</td>
  <td class=xl419746>&nbsp;</td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl719746></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.95pt'>
  <td height=21 class=xl429746 align=center style='height:15.95pt'>TOTAL<span
  style='mso-spacerun:yes'>  </span>FLIGHT HOURS</td>
  <td class=xl1029746>&nbsp;</td>
  <td class=xl949746 x:num><?= $FH[$bulan[2]]?></td>
  <td class=xl949746 style='border-left:none' x:num><?= $FH[$bulan[1]]?></td>
  <td class=xl949746 style='border-left:none' x:num><?= $FH[$bulan[0]]?></td>
  <td class=xl759746 x:num x:fmla="=SUM(C4:E4)"><?= $FH[$bulan[2]] + $FH[$bulan[1]] + $FH[$bulan[0]]?></td>
  <td class=xl1039746 x:num><?= $FH12?></td>
  <td class=xl409746>&nbsp;</td>
  <td class=xl409746>&nbsp;</td>
  <td class=xl409746>&nbsp;</td>
  <td class=xl409746>&nbsp;</td>
  <td class=xl409746>&nbsp;</td>
  <td class=xl409746>&nbsp;</td>
  <td class=xl409746>&nbsp;</td>
  <td class=xl419746>&nbsp;</td>
  <td class=xl699746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.95pt'>
  <td height=21 class=xl1049746 style='height:15.95pt'>&nbsp;</td>
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
    center' class=shape><font class="font59746">ATA CHAPTER</font></div>
    <![if !vml]></td>
   </tr>
  </table>
  </span><![endif]><span style='mso-ignore:vglayout2'>
  <table cellpadding=0 cellspacing=0>
   <tr>
    <td height=21 class=xl459746 width=185 style='height:15.95pt;width:139pt'>&nbsp;</td>
   </tr>
  </table>
  </span></td>
  <td class=xl769746><?= bulan($bulan[2])?></td>
  <td class=xl769746><?= bulan($bulan[1])?></td>
  <td class=xl769746><?= bulan($bulan[0])?></td>
  <td class=xl779746>LAST 3</td>
  <td class=xl569746 style='border-top:none'>Last 12 Mo</td>
  <td class=xl439746 x:fmla="=C5"></td>
  <td class=xl439746 x:fmla="=D5"></td>
  <td class=xl439746 x:fmla="=E5"></td>
  <td class=xl779746>3 Months</td>
  <td class=xl569746>Last 12 Mo</td>
  <td class=xl449746>ALERT</td>
  <td class=xl449746>ALERT</td>
  <td class=xl459746>TREND</td>
  <td class=xl699746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.95pt'>
  <td height=21 class=xl1059746 style='height:15.95pt'>&nbsp;</td>
  <td class=xl1069746>&nbsp;</td>
  <td class=xl469746 style='border-top:none'>&nbsp;</td>
  <td class=xl469746 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl469746 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl519746 style='border-top:none'>Months</td>
  <td class=xl489746 style='border-top:none' x:num></td>
  <td class=xl519746>RATE</td>
  <td class=xl629746 style='border-left:none'>RATE</td>
  <td class=xl519746>RATE</td>
  <td class=xl519746 style='border-top:none'>RATE</td>
  <td class=xl509746 style='border-top:none;border-left:none'>RATE</td>
  <td class=xl519746>LEVEL</td>
  <td class=xl629746 style='border-left:none'>STATUS</td>
  <td class=xl509746 style='border-left:none'>&nbsp;</td>
  <td class=xl699746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
 </tr>
 <?
  for ($i=0;$i<38;$i++)
  {
	  $ATAmarep[$bulan[2]][$ATA[$i]] = isset($ATAmarep[$bulan[2]][$ATA[$i]]) ? $ATAmarep[$bulan[2]][$ATA[$i]] : 0;
	  $ATAmarep[$bulan[1]][$ATA[$i]] = isset($ATAmarep[$bulan[1]][$ATA[$i]]) ? $ATAmarep[$bulan[1]][$ATA[$i]] : 0;
	  $ATAmarep[$bulan[0]][$ATA[$i]] = isset($ATAmarep[$bulan[0]][$ATA[$i]]) ? $ATAmarep[$bulan[0]][$ATA[$i]] : 0;
	  $ATAmarep12bulan[$ATA[$i]] = isset($ATAmarep12bulan[$ATA[$i]]) ? $ATAmarep12bulan[$ATA[$i]] : 0;

	  $alertlevelmarep[$ATA[$i]] = isset($alertlevelmarep[$ATA[$i]]) ? $alertlevelmarep[$ATA[$i]] : 0;
	  $alertlevelmarep[$ATA[$i]] = isset($preselectmarep[$ATA[$i]]) ? $preselectmarep[$ATA[$i]] : $alertlevelmarep[$ATA[$i]];

	  $alertleveldelay[$ATA[$i]] = isset($alertleveldelay[$ATA[$i]]) ? $alertleveldelay[$ATA[$i]] : 0;
	  $alertleveldelay[$ATA[$i]] = isset($preselectdelay[$ATA[$i]]) ? $preselectdelay[$ATA[$i]] : $alertleveldelay[$ATA[$i]];
  ?>
 <tr height=21 style='mso-height-source:userset;height:15.95pt'>
  <td height=21 class=xl539746 style='height:15.95pt' x:num><?= $ATA[$i]?></td>
  <td class=xl549746><?= $ATAdesc[$i]?></td>
  <td class=xl499746 x:num><?= $ATAmarep[$bulan[2]][$ATA[$i]]?></td>
  <td class=xl499746 style='border-left:none' x:num><?= $ATAmarep[$bulan[1]][$ATA[$i]]?></td>
  <td class=xl499746 style='border-left:none' x:num><?= $ATAmarep[$bulan[0]][$ATA[$i]]?></td>
  <td class=xl499746 x:num><?= $ATAmarep[$bulan[0]][$ATA[$i]] + $ATAmarep[$bulan[1]][$ATA[$i]] + $ATAmarep[$bulan[2]][$ATA[$i]]?></td>
  <td class=xibny2 x:num><?= $ATAmarep12bulan[$ATA[$i]]?></td>
  <td class=xl799746 x:num x:fmla="=IF($C$4<>0,C<?= (7+$i)?>*1000/$C$4,0)"></td>
  <td class=xl799746 style='border-left:none' x:num  x:fmla="=IF($D$4<>0,D<?= (7+$i)?>*1000/$D$4,0)"></td>
  <td class=xl799746 style='border-left:none' x:num  x:fmla="=IF($E$4<>0,E<?= (7+$i)?>*1000/$E$4,0)"></td>
  <td class=xl799746 style='border-left:none' x:num  x:fmla="=F<?= (7+$i)?>*1000/$F$4"></td>
  <td class=xl789746 style='border-left:none' x:num  x:fmla="=G<?= (7+$i)?>*1000/$G$4"></td>
  <td class=xl559746 x:num><?= round($alertlevelmarep[$ATA[$i]],2)?></td>
  <td class=xl559746 style='border-top:none' x:fmla="=IF(J<?= (7+$i)?>&gt;M<?= (7+$i)?>,IF(I<?= (7+$i)?>&gt;M<?= (7+$i)?>,IF(H<?= (7+$i)?>&gt;M<?= (7+$i)?>,&quot;RED-3&quot;,&quot;RED-2&quot;),&quot;RED-1&quot;),&quot; &quot;)"><span
  style='mso-spacerun:yes'> </span></td>
  <td class=xl569746 style='border-top:none' x:fmla="=IF(I<?= (7+$i)?>&gt;H<?= (7+$i)?>,IF(J<?= (7+$i)?>&gt;I<?= (7+$i)?>,&quot;UP&quot;,&quot;&quot;),IF(I<?= (7+$i)?>=H<?= (7+$i)?>,&quot;&quot;,IF(J<?= (7+$i)?>&lt;I<?= (7+$i)?>,&quot;DOWN&quot;,&quot;&quot;)))"></td>
  <td class=xl699746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
 </tr>
 <?
  }
?>
 <tr height=21 style='mso-height-source:userset;height:15.95pt'>
  <td height=21 class=xibny style='height:15.95pt'></td>
  <td class=xibny></td>
  <td class=xibny></td>
  <td class=xibny></td>
  <td class=xibny></td>
  <td class=xibny></td>
  <td class=xibny></td>
  <td class=xibny></td>
  <td class=xibny></td>
  <td class=xibny>&nbsp;</td>
  <td class=xibny></td>
  <td class=xibny></td>
  <td class=xibny></td>
  <td class=xibny x:str=""></td>
  <td class=xibny></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.95pt'>
  <td height=21 class=xl709746 colspan=2 style='height:15.95pt'>NOTE :</td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl699746 x:str=""></td>
  <td class=xl699746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.95pt'>
  <td height=21 class=xl379746 colspan=9 style='height:15.95pt'>The Alert Level
  (AL)<span style='mso-spacerun:yes'>  </span>is based on monthly Maintenance Finding Report
  (MAREP) Rate of last Four Quarters (Average + 2 *STD).</td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl699746></td>
  <td class=xl699746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.95pt'>
  <td height=21 class=xl379746 colspan=13 style='height:15.95pt'>The ALERT
  Status column will show &quot;RED-1&quot; if the last month MAREP<span
  style='mso-spacerun:yes'>  </span>Rate exceed the AL,&quot;RED-2&quot; if
  this is true for the<span style='mso-spacerun:yes'>  </span>last two
  consecutive months,</td>
  <td class=xl699746></td>
  <td class=xl699746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.95pt'>
  <td height=21 class=xl379746 colspan=5 style='height:15.95pt'
  x:str="and &quot;RED-3&quot; if this is true for the last three consecutive months. ">and
  &quot;RED-3&quot; if this is true for the last three consecutive months.<span
  style='mso-spacerun:yes'> </span></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl699746></td>
  <td class=xl699746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.95pt'>
  <td height=21 class=xl379746 colspan=9 style='height:15.95pt'>The TREND
  column shows an &quot;UP&quot; or &quot;DOWN&quot; when the rate has
  increased or decreased for 3 months</td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl699746></td>
  <td class=xl699746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.95pt'>
  <td height=21 class=xl379746 style='height:15.95pt'></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl699746></td>
  <td class=xl699746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.95pt'>
  <td height=21 class=xl379746 style='height:15.95pt'></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl729746 colspan=6
  x:str="Compiled and Issued by GMF Reliability  Services ">Compiled and Issued
  by GMF Reliability<span style='mso-spacerun:yes'>  </span>Services<span
  style='mso-spacerun:yes'> </span></td>
  <td class=xl699746></td>
  <td class=xl699746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.95pt'>
  <td height=21 class=xl379746 style='height:15.95pt'></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl699746></td>
  <td class=xl699746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.95pt'>
  <td height=21 class=xl379746 style='height:15.95pt'></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl739746 x:str>Page : <?=$page?> 3</td>
  <td class=xl699746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.95pt'>
  <td height=21 class=xl379746 style='height:15.95pt'></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl739746></td>
  <td class=xl699746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.95pt'>
  <td height=21 class=xl379746 style='height:15.95pt'></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl739746></td>
  <td class=xl699746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.95pt'>
  <td height=21 class=xl379746 style='height:15.95pt'></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl739746></td>
  <td class=xl699746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.95pt'>
  <td height=21 class=xl379746 style='height:15.95pt'></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl739746></td>
  <td class=xl699746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.95pt'>
  <td height=21 class=xl379746 style='height:15.95pt'></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl739746></td>
  <td class=xl699746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.95pt'>
  <td height=21 class=xl379746 style='height:15.95pt'></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl739746></td>
  <td class=xl699746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.95pt'>
  <td height=21 class=xl379746 style='height:15.95pt'></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl699746></td>
  <td class=xl699746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
 </tr>
 <tr height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl329746 style='height:18.0pt'>&nbsp;</td>
  <td class=xl749746 align=center>GA <?=$actype?></td>
  <td class=xl339746>&nbsp;</td>
  <td class=xl339746>&nbsp;</td>
  <td class=xl349746 colspan=6
  x:str="TECHNICAL DELAY &gt; 15 MINUTES AND CANCELLATIONS ">TECHNICAL DELAY
  &gt; 15 MINUTES AND CANCELLATIONS<span style='mso-spacerun:yes'> </span></td>
  <td class=xl339746>&nbsp;</td>
  <td class=xl339746>&nbsp;</td>
  <td class=xl339746>&nbsp;</td>
  <td class=xl359746>&nbsp;</td>
  <td class=xl369746>&nbsp;</td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.95pt'>
  <td height=21 class=xl389746 style='height:15.95pt'>&nbsp;</td>
  <td class=xl849746>&nbsp;</td>
  <td class=xl399746>&nbsp;</td>
  <td class=xl399746>&nbsp;</td>
  <td class=xl399746>&nbsp;</td>
  <td class=xl399746>&nbsp;</td>
  <td class=xl399746>&nbsp;</td>
  <td class=xl399746>&nbsp;</td>
  <td class=xl399746>&nbsp;</td>
  <td class=xl399746>&nbsp;</td>
  <td class=xl409746>&nbsp;</td>
  <td class=xl399746>&nbsp;</td>
  <td class=xl399746>&nbsp;</td>
  <td class=xl409746>&nbsp;</td>
  <td class=xl419746>&nbsp;</td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.95pt'>
  <td height=21 class=xl1099746 style='height:15.95pt'><span
  style='mso-spacerun:yes'>        </span>RE<span style='display:none'>VENUE
  TAKE OFFS</span></td>
  <td class=xl1109746>&nbsp;</td>
  <td class=xl949746 x:num><?= $FC[$bulan[2]]?></td>
  <td class=xl949746 style='border-left:none' x:num><?= $FC[$bulan[1]]?></td>
  <td class=xl949746 style='border-left:none' x:num><?= $FC[$bulan[0]]?></td>
  <td class=xl759746 x:num x:fmla="=SUM(C64:E64)"></td>
  <td class=xl959746 style='border-left:none' x:num><?= $FC12?></td>
  <td class=xl409746>&nbsp;</td>
  <td class=xl409746>&nbsp;</td>
  <td class=xl409746>&nbsp;</td>
  <td class=xl409746>&nbsp;</td>
  <td class=xl409746>&nbsp;</td>
  <td class=xl409746>&nbsp;</td>
  <td class=xl409746>&nbsp;</td>
  <td class=xl419746>&nbsp;</td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.95pt'>
  <td height=21 class=xl1049746 style='height:15.95pt'>&nbsp;</td>
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
    center' class=shape><font class="font59746">ATA CHAPTER</font></div>
    <![if !vml]></td>
   </tr>
  </table>
  </span><![endif]><span style='mso-ignore:vglayout2'>
  <table cellpadding=0 cellspacing=0>
   <tr>
    <td height=21 class=xl1119746 width=185 style='height:15.95pt;width:139pt'>&nbsp;</td>
   </tr>
  </table>
  </span></td>
  <td class=xl769746><?= bulan($bulan[2])?></td>
  <td class=xl769746><?= bulan($bulan[1])?></td>
  <td class=xl769746><?= bulan($bulan[0])?></td>
  <td class=xl779746>LAST 3</td>
  <td class=xl569746>Last 12 Mo</td>
  <td class=xl439746 x:fmla="=C62"></td>
  <td class=xl439746 x:fmla="=D62"></td>
  <td class=xl439746 x:fmla="=E62"></td>
  <td class=xl779746>3 Months</td>
  <td class=xl569746>Last 12 Mo</td>
  <td class=xl779746>ALERT</td>
  <td class=xl779746>ALERT</td>
  <td class=xl459746>TREND</td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.95pt'>
  <td height=21 class=xl1059746 style='height:15.95pt'>&nbsp;</td>
  <td class=xl1069746>&nbsp;</td>
  <td class=xl469746 style='border-top:none'>&nbsp;</td>
  <td class=xl469746 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl469746 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl519746 style='border-top:none'>Months</td>
  <td class=xl489746 style='border-top:none' x:num></td>
  <td class=xl519746>RATE</td>
  <td class=xl629746 style='border-left:none'>RATE</td>
  <td class=xl519746>RATE</td>
  <td class=xl519746 style='border-top:none'>RATE</td>
  <td class=xl509746 style='border-top:none;border-left:none'>RATE</td>
  <td class=xl629746 style='border-top:none'>LEVEL</td>
  <td class=xl629746 style='border-top:none;border-left:none'>STATUS</td>
  <td class=xl509746 style='border-left:none'>&nbsp;</td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
 </tr>
 <?
  for ($i=0;$i<38;$i++)
  {
	  $newATAdelay[$bulan[2]][$ATA[$i]] = isset($newATAdelay[$bulan[2]][$ATA[$i]]) ? $newATAdelay[$bulan[2]][$ATA[$i]] : 0;
	  $newATAdelay[$bulan[1]][$ATA[$i]] = isset($newATAdelay[$bulan[1]][$ATA[$i]]) ? $newATAdelay[$bulan[1]][$ATA[$i]] : 0;
	  $newATAdelay[$bulan[0]][$ATA[$i]] = isset($newATAdelay[$bulan[0]][$ATA[$i]]) ? $newATAdelay[$bulan[0]][$ATA[$i]] : 0;
	  $newATAdelay12bulan[$ATA[$i]] = isset($newATAdelay12bulan[$ATA[$i]]) ? $newATAdelay12bulan[$ATA[$i]] : 0;
  ?>
 <tr height=21 style='mso-height-source:userset;height:15.95pt'>
  <td height=21 class=xl859746 style='height:15.95pt' x:num><?= $ATA[$i]?></td>
  <td class=xl549746 style='border-left:none'><?= $ATAdesc[$i]?></td>
  <td class=xl499746 x:num><?= $newATAdelay[$bulan[2]][$ATA[$i]]?></td>
  <td class=xl499746 style='border-left:none' x:num><?= $newATAdelay[$bulan[1]][$ATA[$i]]?></td>
  <td class=xl499746 style='border-left:none' x:num><?= $newATAdelay[$bulan[0]][$ATA[$i]]?></td>
  <td class=xl499746 x:num x:fmla="=SUM(C<?= (67 + $i)?>:E<?= (67 + $i)?>)"></td>
  <td class=xibny2 x:num><?= $newATAdelay12bulan[$ATA[$i]]?></td>
  <td class=xl969746 x:num x:fmla="=IF($C$64,C<?= (67 + $i)?>*100/$C$64,0)"></td>
  <td class=xl969746 x:num x:fmla="=IF($D$64,D<?= (67 + $i)?>*100/$D$64,0)"></td>
  <td class=xl969746 x:num x:fmla="=IF($E$64,E<?= (67 + $i)?>*100/$E$64,0)"></td>
  <td class=xl969746 x:num x:fmla="=F<?= (67 + $i)?>*100/$F$64"></td>
  <td class=xl789746 style='border-left:none' x:num  x:fmla="=G<?= (67 + $i)?>*100/$G$64"></td>
  <td class=xl799746 x:num><?= round($alertleveldelay[$ATA[$i]],2)?></td>
  <td class=xl799746 style='border-left:none'
  x:fmla="=IF(J<?= (67 + $i)?>&gt;M<?= (67 + $i)?>,IF(I<?= (67 + $i)?>&gt;M<?= (67 + $i)?>,IF(H<?= (67 + $i)?>&gt;M<?= (67 + $i)?>,&quot;RED-3&quot;,&quot;RED-2&quot;),&quot;RED-1&quot;),&quot; &quot;)"><span
  style='mso-spacerun:yes'> </span></td>
  <td class=xl569746 style='border-top:none' x:str=""
  x:fmla="=IF(I<?= (67 + $i)?>&gt;H<?= (67 + $i)?>,IF(J<?= (67 + $i)?>&gt;I<?= (67 + $i)?>,&quot;UP&quot;,&quot;&quot;),IF(I<?= (67 + $i)?>=H<?= (67 + $i)?>,&quot;&quot;,IF(J<?= (67 + $i)?>&lt;I<?= (67 + $i)?>,&quot;DOWN&quot;,&quot;&quot;)))">&nbsp;</td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
 </tr>
 <?
	}
	$newATAdelay[$bulan[2]]['OT'] = isset($newATAdelay[$bulan[2]]['OT']) ? $newATAdelay[$bulan[2]]['OT'] : 0;
	$newATAdelay[$bulan[1]]['OT'] = isset($newATAdelay[$bulan[1]]['OT']) ? $newATAdelay[$bulan[1]]['OT'] : 0;
	$newATAdelay[$bulan[0]]['OT'] = isset($newATAdelay[$bulan[0]]['OT']) ? $newATAdelay[$bulan[0]]['OT'] : 0;
	$newATAdelay12bulan['OT'] = isset($newATAdelay12bulan['OT']) ? $newATAdelay12bulan['OT'] : 0;
 ?>
 <tr height=21 style='mso-height-source:userset;height:15.95pt'>
  <td height=21 class=xl829746 style='height:15.95pt'>OT</td>
  <td class=xl619746 style='border-left:none'>OTHER</td>
  <td class=xl629746 style='border-top:none' x:num><?= $newATAdelay[$bulan[2]]['OT']?></td>
  <td class=xl629746 style='border-top:none;border-left:none' x:num><?= $newATAdelay[$bulan[1]]['OT']?></td>
  <td class=xl629746 style='border-top:none;border-left:none' x:num><?= $newATAdelay[$bulan[0]]['OT']?></td>
  <td class=xl629746 style='border-left:none' x:num x:fmla="=SUM(C105:E105)"></td>
  <td class=xl509746 style='border-left:none' x:num><?= $newATAdelay12bulan['OT']?></td>
  <td class=xl659746 style='border-left:none' x:num x:fmla="=C105*100/$C$64"></td>
  <td class=xl639746 x:num x:fmla="=D105*100/$D$64"></td>
  <td class=xl639746 x:num x:fmla="=E105*100/$E$64"></td>
  <td class=xl639746 x:num x:fmla="=F105*100/$F$64"></td>
  <td class=xl649746 style='border-top:none;border-left:none' x:num x:fmla="=G105*100/$G$64"></td>
  <td class=xl1139746 x:num><?= round($alertleveldelay['5'],2)?></td>
  <td class=xl1149746 x:fmla="=IF(J105&gt;M105,IF(I105&gt;M105,IF(H105&gt;M105,&quot;RED-3&quot;,&quot;RED-2&quot;),&quot;RED-1&quot;),&quot; &quot;)"><span
  style='mso-spacerun:yes'> </span></td>
  <td class=xl509746 style='border-left:none'>&nbsp;</td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.95pt'>
  <td height=21 class=xl379746 style='height:15.95pt'></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl1159746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl699746></td>
  <td class=xl699746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.95pt'>
  <td height=21 class=xl709746 colspan=2 style='height:15.95pt'>NOTE :</td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl699746 x:str=""></td>
  <td class=xl699746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.95pt'>
  <td height=21 class=xl379746 colspan=9 style='height:15.95pt'>The Alert Level
  (AL)<span style='mso-spacerun:yes'>  </span>is based on monthly Technical
  Delay Rate of last Four<span style='mso-spacerun:yes'>  </span>Quarters
  (Average + 2 *STD)</td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl699746></td>
  <td class=xl699746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.95pt'>
  <td height=21 class=xl379746 colspan=13 style='height:15.95pt'>The ALERT
  Status column will show &quot;RED-1&quot; if the last month Delay<span
  style='mso-spacerun:yes'>  </span>Rate exceed the AL,&quot;RED-2&quot; if
  this is true for the<span style='mso-spacerun:yes'>  </span>last two
  consecutive months,</td>
  <td class=xl699746></td>
  <td class=xl699746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.95pt'>
  <td height=21 class=xl379746 colspan=5 style='height:15.95pt'
  x:str="and &quot;RED-3&quot; if this is true for the last three consecutive months. ">and
  &quot;RED-3&quot; if this is true for the last three consecutive months.<span
  style='mso-spacerun:yes'> </span></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl699746></td>
  <td class=xl699746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.95pt'>
  <td height=21 class=xl379746 colspan=9 style='height:15.95pt'>The TREND
  column shows an &quot;UP&quot; or &quot;DOWN&quot; when the rate has
  increased or decreased for 3 months</td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl699746></td>
  <td class=xl699746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.95pt'>
  <td height=21 class=xl379746 style='height:15.95pt'></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl699746></td>
  <td class=xl699746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.95pt'>
  <td height=21 class=xl379746 style='height:15.95pt'></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl729746 colspan=6
  x:str="Compiled and Issued by GMF Reliability  Services ">Compiled and Issued
  by GMF Reliability<span style='mso-spacerun:yes'>  </span>Services<span
  style='mso-spacerun:yes'> </span></td>
  <td class=xl699746></td>
  <td class=xl699746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.95pt'>
  <td height=21 class=xl379746 style='height:15.95pt'></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl699746></td>
  <td class=xl699746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.95pt'>
  <td height=21 class=xl379746 style='height:15.95pt'></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl739746 x:str>Page : <?=$page?> 4</td>
  <td class=xl699746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.95pt'>
  <td height=21 class=xl379746 style='height:15.95pt'></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl699746></td>
  <td class=xl699746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.95pt'>
  <td height=21 class=xl379746 style='height:15.95pt'></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl699746></td>
  <td class=xl699746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.95pt'>
  <td height=21 class=xl379746 style='height:15.95pt'></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl699746></td>
  <td class=xl699746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.95pt'>
  <td height=21 class=xl379746 style='height:15.95pt'></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl699746></td>
  <td class=xl699746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.95pt'>
  <td height=21 class=xl379746 style='height:15.95pt'></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl699746></td>
  <td class=xl699746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.95pt'>
  <td height=21 class=xl379746 style='height:15.95pt'></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl699746></td>
  <td class=xl699746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.95pt'>
  <td height=21 class=xl379746 style='height:15.95pt'></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl699746></td>
  <td class=xl699746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.95pt'>
  <td height=21 class=xl379746 style='height:15.95pt'></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl699746></td>
  <td class=xl699746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
  <td class=xl379746></td>
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
