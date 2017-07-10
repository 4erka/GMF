<?
header("Content-Type: application/x-excel\n");
header("Pragma: no-cache"); 
header("Expires: 0");
header("Cache-Control:must-revalidate, post-check=0, pre-check=0");
header("content-disposition: attachment; filename=EOS-".$_REQUEST["actype"].".xls");
?>
<html xmlns:v="urn:schemas-microsoft-com:vml"
xmlns:o="urn:schemas-microsoft-com:office:office"
xmlns:x="urn:schemas-microsoft-com:office:excel"
xmlns="http://www.w3.org/TR/REC-html40">

<head>
<meta http-equiv=Content-Type content="text/html; charset=windows-1252">
<meta name=ProgId content=Excel.Sheet>
<meta name=Generator content="Microsoft Excel 11">
<link rel=File-List href="EOS_excel_files/filelist.xml">
<!--[if !mso]>
<style>
v\:* {behavior:url(#default#VML);}
o\:* {behavior:url(#default#VML);}
x\:* {behavior:url(#default#VML);}
.shape {behavior:url(#default#VML);}
</style>
<![endif]-->
<style id="Engine Operation Summary0408_4208_Styles">
<!--table
	{mso-displayed-decimal-separator:"\.";
	mso-displayed-thousand-separator:"\,";}
.xl244208
	{padding:0px;
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
.xl254208
	{padding:0px;
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
	border-top:1.0pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	background:white;
	mso-pattern:auto none;
	white-space:nowrap;}
.xl264208
	{padding:0px;
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
	border-top:1.0pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	background:white;
	mso-pattern:auto none;
	white-space:nowrap;}
.xl274208
	{padding:0px;
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
	border:.5pt solid windowtext;
	background:white;
	mso-pattern:auto none;
	white-space:nowrap;}
.xl284208
	{padding:0px;
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
	border-top:.5pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	background:white;
	mso-pattern:auto none;
	white-space:nowrap;}
.xl294208
	{padding:0px;
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
	border:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl304208
	{padding:0px;
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
	border-top:.5pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl314208
	{padding:0px;
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
	border:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl324208
	{padding:0px;
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
	border-top:.5pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl334208
	{padding:0px;
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
	border-top:.5pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:1.0pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl344208
	{padding:0px;
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
	border:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl354208
	{padding:0px;
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
	border:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl364208
	{padding:0px;
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
	border-top:.5pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl374208
	{padding:0px;
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
	border-top:.5pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:1.0pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl384208
	{padding:0px;
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
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl394208
	{padding:0px;
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
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl404208
	{padding:0px;
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
	border-top:1.0pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:1.0pt solid windowtext;
	background:white;
	mso-pattern:auto none;
	white-space:nowrap;}
.xl414208
	{padding:0px;
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
	border-top:.5pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:1.0pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl424208
	{padding:0px;
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
	border-top:.5pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:1.0pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl434208
	{padding:0px;
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
	border:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl444208
	{padding:0px;
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
	border-top:.5pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl454208
	{padding:0px;
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
	border:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl464208
	{padding:0px;
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
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl474208
	{padding:0px;
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
	border-right:.5pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl484208
	{padding:0px;
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
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl494208
	{padding:0px;
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
	border-bottom:.5pt solid windowtext;
	border-left:1.0pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl504208
	{padding:0px;
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
	border-top:.5pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl514208
	{padding:0px;
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
	border-top:.5pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:1.0pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl524208
	{padding:0px;
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
	border-left:1.0pt solid windowtext;
	background:white;
	mso-pattern:auto none;
	white-space:nowrap;}
.xl534208
	{padding:0px;
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
	border-left:1.0pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl544208
	{padding:0px;
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
	border-left:1.0pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl554208
	{padding:0px;
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
	border-left:1.0pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl564208
	{padding:0px;
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
	border-bottom:none;
	border-left:1.0pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl574208
	{padding:0px;
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
.xl584208
	{padding:0px;
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
	border-left:1.0pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl594208
	{padding:0px;
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
	border-top:.5pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl604208
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
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:1.0pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl614208
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
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl624208
	{padding:0px;
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
	border-bottom:.5pt solid windowtext;
	border-left:1.0pt solid windowtext;
	background:white;
	mso-pattern:auto none;
	white-space:nowrap;}
.xl634208
	{padding:0px;
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
	border-left:none;
	background:white;
	mso-pattern:auto none;
	white-space:nowrap;}
.xl644208
	{padding:0px;
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
	mso-pattern:auto none;
	white-space:nowrap;}
.xl654208
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
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:1.0pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl664208
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
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl674208
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
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:1.0pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl684208
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
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl694208
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
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:1.0pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl704208
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
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:1.0pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl714208
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
	text-align:left;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:1.0pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl724208
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
	text-align:left;
	vertical-align:bottom;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:1.0pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl734208
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
	text-align:center;
	vertical-align:bottom;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl744208
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
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl754208
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
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl764208
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
	text-align:center;
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:1.0pt solid windowtext;
	border-left:1.0pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl774208
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
	text-align:left;
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:1.0pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl784208
	{padding:0px;
	mso-ignore:padding;
	color:#FF6600;
	font-size:8.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:bottom;
	border:.5pt solid windowtext;
	background:yellow;
	mso-pattern:auto none;
	white-space:nowrap;}
.xl794208
	{padding:0px;
	mso-ignore:padding;
	color:#FF6600;
	font-size:8.0pt;
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
.xl804208
	{padding:0px;
	mso-ignore:padding;
	color:#FF6600;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border:.5pt solid windowtext;
	background:silver;
	mso-pattern:auto none;
	white-space:nowrap;}
.xl814208
	{padding:0px;
	mso-ignore:padding;
	color:#FF6600;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:bottom;
	border:.5pt solid windowtext;
	background:yellow;
	mso-pattern:auto none;
	white-space:nowrap;}
.xl824208
	{padding:0px;
	mso-ignore:padding;
	color:#FF6600;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border:.5pt solid windowtext;
	background:yellow;
	mso-pattern:auto none;
	white-space:nowrap;}
.xl834208
	{padding:0px;
	mso-ignore:padding;
	color:#FF6600;
	font-size:8.0pt;
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
.xl844208
	{padding:0px;
	mso-ignore:padding;
	color:#FF6600;
	font-size:8.0pt;
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
.xl854208
	{padding:0px;
	mso-ignore:padding;
	color:#FF6600;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM, sans-serif;
	mso-font-charset:0;
	mso-number-format:"0\.000";
	text-align:center;
	vertical-align:bottom;
	border:.5pt solid windowtext;
	background:yellow;
	mso-pattern:auto none;
	white-space:nowrap;}
.xl864208
	{padding:0px;
	mso-ignore:padding;
	color:#FF6600;
	font-size:8.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border:.5pt solid windowtext;
	background:yellow;
	mso-pattern:auto none;
	white-space:nowrap;}
.xl874208
	{padding:0px;
	mso-ignore:padding;
	color:#FF6600;
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
	background:yellow;
	mso-pattern:auto none;
	white-space:nowrap;}
.xl884208
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border:.5pt solid windowtext;
	background:silver;
	mso-pattern:auto none;
	white-space:nowrap;}
.xl894208
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:bottom;
	border:.5pt solid windowtext;
	background:silver;
	mso-pattern:auto none;
	white-space:nowrap;}
.xl904208
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:700;
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
.xl914208
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:"0\.000";
	text-align:center;
	vertical-align:bottom;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl924208
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:700;
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
	background:silver;
	mso-pattern:auto none;
	white-space:nowrap;}
.xl934208
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:1.0pt solid windowtext;
	background:silver;
	mso-pattern:auto none;
	white-space:nowrap;}
.xl944208
	{padding:0px;
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
	vertical-align:bottom;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl954208
	{padding:0px;
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
	border:1.0pt solid windowtext;
	background:white;
	mso-pattern:auto none;
	white-space:nowrap;}
.xl964208
	{padding:0px;
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
	mso-pattern:auto none;
	white-space:nowrap;}
.xl974208
	{padding:0px;
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
	mso-pattern:auto none;
	white-space:nowrap;}
.xl984208
	{padding:0px;
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
	mso-pattern:auto none;
	white-space:nowrap;}
.xl994208
	{padding:0px;
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
	mso-pattern:auto none;
	white-space:nowrap;}
.xl1004208
	{padding:0px;
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
	border-right:1.0pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:none;
	background:white;
	mso-pattern:auto none;
	white-space:nowrap;}
.xl1014208
	{padding:0px;
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
	mso-pattern:auto none;
	white-space:nowrap;}
.xl1024208
	{padding:0px;
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
	mso-pattern:auto none;
	white-space:nowrap;}
.xl1034208
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
	text-align:center;
	vertical-align:middle;
	border-top:1.0pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:none;
	border-left:1.0pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;
	mso-rotate:90;}
.xl1044208
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
	border-right:1.0pt solid windowtext;
	border-bottom:none;
	border-left:1.0pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;
	mso-rotate:90;}
.xl1054208
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
	border-right:1.0pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:1.0pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;
	mso-rotate:90;}
.xl1064208
	{padding:0px;
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
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:1.0pt solid windowtext;
	background:white;
	mso-pattern:auto none;
	white-space:nowrap;}
.xl1074208
	{padding:0px;
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
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	background:white;
	mso-pattern:auto none;
	white-space:nowrap;}
.xl1084208
	{padding:0px;
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
	border-right:1.0pt solid windowtext;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	background:white;
	mso-pattern:auto none;
	white-space:nowrap;}
.xl1094208
	{padding:0px;
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
	mso-pattern:auto none;
	white-space:nowrap;}
.xl1104208
	{padding:0px;
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
.xl1114208
	{padding:0px;
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

<div id="Engine Operation Summary0408_4208" align=center x:publishsource="Excel">
<?
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
	$TSN = FHengineinitial($actype);$CSN = FCengineinitial($actype);
	$ifsddata = ifsd($periode,$actype);
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

	while ($ifsddata1 = mysql_fetch_array($ifsddata)){
		$ifsd[$ifsddata1["periode"]] = $ifsddata1["jumlah"];
	}

	while ($ifsdlastyeardata1 = mysql_fetch_array($ifsdlastyeardata)){
		$ifsdlastyear[$ifsdlastyeardata1["periode"]] = $ifsdlastyeardata1["jumlah"];
	}
	//die(print_r($ifsdlastyear));
	while ($rtoly = mysql_fetch_array($rtolastyear)){
		$rtolastyeardata[$rtoly["periode"]] = $rtoly["jumlah"];
	}

	while ($rtodata = mysql_fetch_array($rto)){
		$rto[$rtodata["periode"]] = $rto["jumlah"];
	}
	//die(print_r($rtodata));

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
		$ifsdlastyear = isset($ifsdlastyear) ? array_sum($ifsdlastyear) : 0;
		$rtolastyeardata = isset($rtolastyeardata) ? array_sum($rtolastyeardata) : 0;

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

<table x:str border=0 cellpadding=0 cellspacing=0 width=3196 class=xl244208
 style='border-collapse:collapse;table-layout:fixed;width:2401pt'>
 <col class=xl244208 width=48 style='mso-width-source:userset;mso-width-alt:
 1755;width:36pt'>
 <col class=xl244208 width=234 style='mso-width-source:userset;mso-width-alt:
 8557;width:176pt'>
 <col class=xl244208 width=57 style='mso-width-source:userset;mso-width-alt:
 2084;width:43pt'>
 <col class=xl244208 width=61 span=12 style='mso-width-source:userset;
 mso-width-alt:2230;width:46pt'>
 <col class=xl244208 width=64 span=2 style='width:48pt'>
 <col class=xl244208 width=77 style='mso-width-source:userset;mso-width-alt:
 2816;width:58pt'>
 <col class=xl244208 width=64 span=30 style='width:48pt'>
 <tr height=21 style='height:15.75pt'>
  <td colspan=15 height=21 class=xl1064208 width=1071 style='border-right:1.0pt solid black;
  height:15.75pt;width:807pt'>ENGINE OPERATION SUMMARY 2007 - 2008</td>
  <td class=xl244208 width=64 style='width:48pt'></td>
  <td class=xl244208 width=64 style='width:48pt'></td>
  <td class=xl244208 width=77 style='width:58pt'></td>
  <td class=xl244208 width=64 style='width:48pt'></td>
  <td class=xl244208 width=64 style='width:48pt'></td>
  <td class=xl244208 width=64 style='width:48pt'></td>
  <td class=xl244208 width=64 style='width:48pt'></td>
  <td class=xl244208 width=64 style='width:48pt'></td>
  <td class=xl244208 width=64 style='width:48pt'></td>
  <td class=xl244208 width=64 style='width:48pt'></td>
  <td class=xl244208 width=64 style='width:48pt'></td>
  <td class=xl244208 width=64 style='width:48pt'></td>
  <td class=xl244208 width=64 style='width:48pt'></td>
  <td class=xl244208 width=64 style='width:48pt'></td>
  <td class=xl244208 width=64 style='width:48pt'></td>
  <td class=xl244208 width=64 style='width:48pt'></td>
  <td class=xl244208 width=64 style='width:48pt'></td>
  <td class=xl244208 width=64 style='width:48pt'></td>
  <td class=xl244208 width=64 style='width:48pt'></td>
  <td class=xl244208 width=64 style='width:48pt'></td>
  <td class=xl244208 width=64 style='width:48pt'></td>
  <td class=xl244208 width=64 style='width:48pt'></td>
  <td class=xl244208 width=64 style='width:48pt'></td>
  <td class=xl244208 width=64 style='width:48pt'></td>
  <td class=xl244208 width=64 style='width:48pt'></td>
  <td class=xl244208 width=64 style='width:48pt'></td>
  <td class=xl244208 width=64 style='width:48pt'></td>
  <td class=xl244208 width=64 style='width:48pt'></td>
  <td class=xl244208 width=64 style='width:48pt'></td>
  <td class=xl244208 width=64 style='width:48pt'></td>
  <td class=xl244208 width=64 style='width:48pt'></td>
  <td class=xl244208 width=64 style='width:48pt'></td>
  <td class=xl244208 width=64 style='width:48pt'></td>
 </tr>
 <tr height=18 style='height:13.5pt'>
  <td colspan=15 height=18 class=xl984208 style='border-right:1.0pt solid black;
  height:13.5pt'>CFM56-3C-1</td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
 </tr>
 <tr height=18 style='height:13.5pt'>
  <td colspan=2 height=18 class=xl1014208 style='border-right:1.0pt solid black;
  height:13.5pt'>BOEING <?= $actype?></td>
  <td class=xl954208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td colspan=12 class=xl1094208 style='border-right:1.0pt solid black;
  border-left:none'>2007 - 2008</td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl624208 style='height:12.75pt;border-top:none'>&nbsp;</td>
  <td class=xl634208>&nbsp;</td>
  <td class=xl404208 style='border-top:none' x:num>2007</td>
<?
	foreach ($bulan as $key => $value){		
?>
  <td class=xl254208 style='border-top:none;border-left:none'><?= bulan($value)?></td>
<?
	}
?>
  <!--<td class=xl254208 style='border-top:none;border-left:none'>JUN</td>
  <td class=xl254208 style='border-top:none;border-left:none'>JUL</td>
  <td class=xl254208 style='border-top:none;border-left:none'>AUG</td>
  <td class=xl254208 style='border-top:none;border-left:none'>SEP</td>
  <td class=xl254208 style='border-top:none;border-left:none'>OCT</td>
  <td class=xl254208 style='border-top:none;border-left:none'>NOV</td>
  <td class=xl254208 style='border-top:none;border-left:none'>DEC</td>
  <td class=xl254208 style='border-top:none;border-left:none'>JAN</td>
  <td class=xl254208 style='border-top:none;border-left:none'>FEB</td>
  <td class=xl254208 style='border-top:none;border-left:none'>MAR</td>
  <td class=xl264208 style='border-top:none;border-left:none'>APR</td>-->
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td colspan=2 height=17 class=xl964208 style='border-right:1.0pt solid black;
  height:12.75pt'>NUMBER OF ENGINES IN FLEET</td>
  <td class=xl524208 style='border-left:none'><?= round(array_sum($fleetlastyear)/12*$numberofengine,0)?></td>
<?
	foreach ($bulan as $key => $value){
?>
  <td class=xl274208 style='border-top:none;border-left:none' x:num><?= ($fleet[$value] * $numberofengine)?></td>
<?
	}
?>
  <!--<td class=xl274208 style='border-top:none;border-left:none' x:num>38</td>
  <td class=xl274208 style='border-top:none;border-left:none' x:num>38</td>
  <td class=xl274208 style='border-top:none;border-left:none' x:num>38</td>
  <td class=xl274208 style='border-top:none;border-left:none' x:num>38</td>
  <td class=xl274208 style='border-top:none;border-left:none' x:num>38</td>
  <td class=xl274208 style='border-top:none;border-left:none' x:num>38</td>
  <td class=xl274208 style='border-top:none;border-left:none' x:num>38</td>
  <td class=xl274208 style='border-top:none;border-left:none' x:num>38</td>
  <td class=xl274208 style='border-top:none;border-left:none' x:num>38</td>
  <td class=xl274208 style='border-top:none;border-left:none' x:num>38</td>
  <td class=xl284208 style='border-top:none;border-left:none' x:num>38</td>-->
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl644208 style='height:12.75pt'>&nbsp;</td>
  <td class=xl634208>&nbsp;</td>
  <td class=xl524208>&nbsp;</td>
  <td class=xl274208 style='border-top:none'>&nbsp;</td>
  <td class=xl274208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl274208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl274208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl274208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl274208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl274208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl274208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl274208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl274208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl274208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl284208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td colspan=2 height=17 class=xl604208 style='border-right:1.0pt solid black;
  height:12.75pt'>HOURS-CUMMULATIVE</td>
  <td class=xl534208 style='border-left:none'>&nbsp;</td>
<?
	foreach ($bulan as $key => $value){
?>
  <td class=xl294208 style='border-top:none;border-left:none' x:num><?= $TSNengine[$value]?></td>
<?
	}
?>
  <!--<td class=xl294208 style='border-top:none;border-left:none' x:num>764912</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>776222</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>787124</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>796738</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>806956</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>816446</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>826926</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>837508</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>847080</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>857210</td>
  <td class=xl304208 style='border-top:none;border-left:none' x:num
  x:fmla="=N7+O8"></td>-->
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
 </tr>
 <tr height=15 style='mso-height-source:userset;height:11.25pt'>
  <td colspan=2 height=15 class=xl604208 style='border-right:1.0pt solid black;
  height:11.25pt'>HOURS-OPERATED</td>
  <td class=xl534208 style='border-left:none' x:num><?= (array_sum($FHlastyear) * $numberofengine)?>0</td>
<?
	foreach ($bulan as $key => $value){
?>
  <td class=xl294208 style='border-top:none;border-left:none' x:num><?= ($FH[$value] * $numberofengine)?></td>
<?
	}
?>
  <!--<td class=xl294208 style='border-top:none;border-left:none' x:num>9770</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>11310</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>10902</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>9614</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>10218</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>9490</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>10480</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>10582</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>9572</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>10130</td>
  <td class=xl304208 style='border-top:none;border-left:none' x:num
  x:fmla="=5065*2">10130</td>-->
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl654208 style='height:12.75pt'><span
  style='mso-spacerun:yes'> </span></td>
  <td class=xl664208>&nbsp;</td>
  <td class=xl534208>&nbsp;</td>
  <td class=xl294208 style='border-top:none'>&nbsp;</td>
  <td class=xl294208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl294208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl294208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl294208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl294208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl294208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl294208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl294208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl294208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl294208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl304208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td colspan=2 height=17 class=xl604208 style='border-right:1.0pt solid black;
  height:12.75pt'>CYCLES-CUMMULATIVE</td>
  <td class=xl534208 style='border-left:none'>&nbsp;</td>
<?
	foreach ($bulan as $key => $value){
?>
  <td class=xl294208 style='border-top:none;border-left:none' x:num><?= $CSNengine[$value]?></td>
<?
	}
?>
  <!--<td class=xl294208 style='border-top:none;border-left:none' x:num>1082374</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>1090558</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>1098634</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>1105902</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>1113558</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>1120988</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>1128914</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>1136814</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>1144216</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>1151876</td>
  <td class=xl304208 style='border-top:none;border-left:none' x:num
  x:fmla="=N10+O11">1159536</td>-->
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td colspan=2 height=17 class=xl604208 style='border-right:1.0pt solid black;
  height:12.75pt'>CYCLES-OPERATED</td>
  <td class=xl534208 style='border-left:none' x:num><?= (array_sum($FClastyear) * $numberofengine)?></td>
<?
	foreach ($bulan as $key => $value){
?>
  <td class=xl294208 style='border-top:none;border-left:none' x:num><?= ($FC[$value] * $numberofengine)?></td>
<?
  }
?>
  <!--<td class=xl294208 style='border-top:none;border-left:none' x:num>7230</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>8184</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>8076</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>7268</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>7656</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>7430</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>7926</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>7900</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>7402</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>7660</td>
  <td class=xl304208 style='border-top:none;border-left:none' x:num
  x:fmla="=3830*2">7660</td>-->
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl654208 style='height:12.75pt'>&nbsp;</td>
  <td class=xl664208>&nbsp;</td>
  <td class=xl534208>&nbsp;</td>
  <td class=xl294208 style='border-top:none'>&nbsp;</td>
  <td class=xl294208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl294208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl294208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl294208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl294208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl294208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl294208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl294208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl294208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl294208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl304208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td colspan=2 height=17 class=xl674208 style='border-right:1.0pt solid black;
  height:12.75pt'>IN-FLIGHT SHUTDOWN</td>
  <td class=xl534208 style='border-left:none' x:num><?= $ifsdlastyear?></td>
<?
	foreach ($bulan as $key => $value){
?>
  <td class=xl294208 style='border-top:none;border-left:none' x:num><?= $ifsd[$value]?></td>
<?
  }
?>
  <!--<td class=xl294208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>1</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl304208 style='border-top:none;border-left:none' x:num>0</td>-->
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl674208 style='height:12.75pt;border-top:none'
  x:str="               "><span style='mso-spacerun:yes'>               </span></td>
  <td class=xl684208 style='border-top:none' x:str="'- RATE ">- RATE<span
  style='mso-spacerun:yes'> </span></td>
  <td class=xl414208 style='border-top:none;border-left:none'
  x:num="9.5419847328244281E-2"><?= round(($ifsdlastyear/(array_sum($FHlastyear)*$numberofengine)*1000),3)?></td>
<?
	foreach ($bulan as $key => $value){
?>
  <td class=xl434208 style='border-top:none;border-left:none' x:num><?= round(($ifsd[$value]/($FH[$value]*$numberofengine)*1000),3)?></td>
<?
	}
?>
  <!--<td class=xl434208 style='border-top:none;border-left:none' x:num>0.000</td>
  <td class=xl434208 style='border-top:none;border-left:none' x:num>0.000</td>
  <td class=xl434208 style='border-top:none;border-left:none' x:num>0.000</td>
  <td class=xl434208 style='border-top:none;border-left:none' x:num>0.000</td>
  <td class=xl434208 style='border-top:none;border-left:none' x:num>0.000</td>
  <td class=xl434208 style='border-top:none;border-left:none' x:num>0.000</td>
  <td class=xl434208 style='border-top:none;border-left:none'
  x:num="8.4709868699703508E-3">0.008</td>
  <td class=xl434208 style='border-top:none;border-left:none'
  x:num="8.4348324842268632E-3">0.008</td>
  <td class=xl434208 style='border-top:none;border-left:none'
  x:num="8.334444592612348E-3">0.008</td>
  <td class=xl434208 style='border-top:none;border-left:none'
  x:num="8.2466065214164379E-3">0.008</td>
  <td class=xl464208 style='border-top:none;border-left:none'
  x:num="8.1759463657918412E-3" x:fmla="=SUM(D13:O13)*1000/(SUM(D8:O8))">0.008</td>-->
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl604208 style='height:12.75pt;border-top:none'
  x:str="           "><span style='mso-spacerun:yes'>           </span></td>
  <td class=xl614208 style='border-top:none' x:str="'- 3 MO. RATE">- 3 MO. RATE</td>
  <td class=xl424208 style='border-top:none;border-left:none'>&nbsp;</td>
<?
	foreach ($bulan as $key => $value){
?>
  <td class=xl434208 style='border-top:none;border-left:none' x:num><?= round((($ifsd[$bulan12[$key+10]] + $ifsd[$bulan12[$key+11]] + $ifsd[$bulan12[$key+12]])/($FH24[$bulan12[$key+10]] + $FH24[$bulan12[$key+11]] + $FH24[$bulan12[$key+12]]) * 1000),3)?></td>
<?
	}
?>
  <!--<td class=xl434208 style='border-top:none;border-left:none' x:num>0.000</td>
  <td class=xl434208 style='border-top:none;border-left:none' x:num>0.000</td>
  <td class=xl434208 style='border-top:none;border-left:none' x:num>0.000</td>
  <td class=xl434208 style='border-top:none;border-left:none' x:num>0.000</td>
  <td class=xl434208 style='border-top:none;border-left:none' x:num>0.000</td>
  <td class=xl434208 style='border-top:none;border-left:none' x:num>0.000</td>
  <td class=xl434208 style='border-top:none;border-left:none'
  x:num="2.8236622899901168E-3">0.003</td>
  <td class=xl434208 style='border-top:none;border-left:none'
  x:num="5.6352731180657383E-3">0.006</td>
  <td class=xl434208 style='border-top:none;border-left:none'
  x:num="8.4134213156031885E-3">0.008</td>
  <td class=xl434208 style='border-top:none;border-left:none'
  x:num="8.3386278660852169E-3">0.008</td>
  <td class=xl594208 style='border-top:none' x:num="8.2523324932735429E-3"
  x:fmla="=(M14+N14+O14)/3">0.008</td>-->
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl654208 style='height:12.75pt'><span
  style='mso-spacerun:yes'> </span></td>
  <td class=xl664208>&nbsp;</td>
  <td class=xl534208>&nbsp;</td>
  <td class=xl294208 style='border-top:none'>&nbsp;</td>
  <td class=xl294208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl294208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl294208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl294208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl294208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl294208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl294208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl294208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl294208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl294208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl304208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td colspan=2 height=17 class=xl604208 style='border-right:1.0pt solid black;
  height:12.75pt'>ABORTED TAKE-OFF</td>
  <td class=xl534208 style='border-left:none' x:num><?= $rtolastyeardata?></td>
<?
	foreach ($bulan as $key => $value){
?>
  <td class=xl294208 style='border-top:none;border-left:none' x:num><?= $rtodat[$value]?></td>
<?
	}
?>
  <!--<td class=xl294208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl304208 style='border-top:none;border-left:none' x:num>0</td>-->
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl694208 style='height:12.75pt;border-top:none'
  x:str="              "><span style='mso-spacerun:yes'>              </span></td>
  <td class=xl614208 style='border-top:none'><span
  style='mso-spacerun:yes'> </span>- RATE</td>
  <td class=xl534208 style='border-left:none' x:num><?= round(($rtolastyeardata/(array_sum($FHlastyear)*$numberofengine)*1000),3)?></td>
<?
	foreach ($bulan as $key => $value){
?>
  <td class=xl314208 style='border-top:none;border-left:none' x:num><?= round(($rtodat[$value]/($FH[$value]*$numberofengine)*1000),3)?></td>
<?
  }
?>
  <!--<td class=xl314208 style='border-top:none;border-left:none' x:num>0.00</td>
  <td class=xl314208 style='border-top:none;border-left:none' x:num>0.00</td>
  <td class=xl314208 style='border-top:none;border-left:none' x:num>0.00</td>
  <td class=xl314208 style='border-top:none;border-left:none' x:num>0.00</td>
  <td class=xl314208 style='border-top:none;border-left:none' x:num>0.00</td>
  <td class=xl314208 style='border-top:none;border-left:none' x:num>0.00</td>
  <td class=xl314208 style='border-top:none;border-left:none' x:num>0.00</td>
  <td class=xl314208 style='border-top:none;border-left:none' x:num>0.00</td>
  <td class=xl314208 style='border-top:none;border-left:none' x:num>0.00</td>
  <td class=xl314208 style='border-top:none;border-left:none' x:num>0.00</td>
  <td class=xl324208 style='border-top:none;border-left:none' x:num
  x:fmla="=(O17*100)/(O11)">0.00</td>-->
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl604208 style='height:12.75pt;border-top:none'
  x:str="           "><span style='mso-spacerun:yes'>           </span></td>
  <td class=xl614208 style='border-top:none' x:str="'- 3 MO. RATE">- 3 MO. RATE</td>
  <td class=xl534208 style='border-left:none'>&nbsp;</td>
<?
	foreach ($bulan as $key => $value){
?>
  <td class=xl314208 style='border-top:none;border-left:none' x:num><?= round((($rtodat[$bulan12[$key+10]] + $rtodat[$bulan12[$key+11]] + $rtodat[$bulan12[$key+12]])/($FH24[$bulan12[$key+10]] + $FH24[$bulan12[$key+11]] + $FH24[$bulan12[$key+12]]) * 1000),3)?></td>
<?
  }
?>
  <!---<td class=xl314208 style='border-top:none;border-left:none' x:num>0.00</td>
  <td class=xl314208 style='border-top:none;border-left:none' x:num>0.00</td>
  <td class=xl314208 style='border-top:none;border-left:none' x:num>0.00</td>
  <td class=xl314208 style='border-top:none;border-left:none' x:num>0.00</td>
  <td class=xl314208 style='border-top:none;border-left:none' x:num>0.00</td>
  <td class=xl314208 style='border-top:none;border-left:none' x:num>0.00</td>
  <td class=xl314208 style='border-top:none;border-left:none' x:num>0.00</td>
  <td class=xl314208 style='border-top:none;border-left:none' x:num>0.00</td>
  <td class=xl314208 style='border-top:none;border-left:none' x:num>0.00</td>
  <td class=xl314208 style='border-top:none;border-left:none' x:num>0.00</td>
  <td class=xl324208 style='border-top:none;border-left:none' x:num
  x:fmla="=(M18+N18+O18)/3">0.00</td>-->
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl654208 style='height:12.75pt'>&nbsp;</td>
  <td class=xl664208>&nbsp;</td>
  <td class=xl534208>&nbsp;</td>
  <td class=xl294208 style='border-top:none'>&nbsp;</td>
  <td class=xl294208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl294208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl294208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl294208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl294208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl294208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl294208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl294208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl294208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl294208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl304208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td colspan=2 height=17 class=xl604208 style='border-right:1.0pt solid black;
  height:12.75pt'>CONVENIENCE</td>
  <td class=xl534208 style='border-left:none;border-left:none' x:num><?= $engineremovallastyear["Convenience"]?></td>
<?
	foreach ($bulan as $key => $value){
?>
  <td class=xl294208 style='border-top:none;border-left:none' x:num><?= $engineremoval["Convenience"][$value]?></td>
<?
  }
?>
  <!--<td class=xl294208 style='border-top:none;border-left:none' x:num>2</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>1</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>1</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>1</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>1</td>
  <td class=xl304208 style='border-top:none;border-left:none' x:num>1</td>-->
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
 </tr>
 <tr height=18 style='height:13.5pt'>
  <td colspan=2 height=18 class=xl704208 style='border-right:1.0pt solid black;
  border-bottom:.5pt solid black;height:13.5pt'>CAMPAIGN</td>
  <td class=xl534208 style='border-left:none' x:num><?= $engineremovallastyear["Campaign"]?></td>
<?
	foreach ($bulan as $key => $value){
?>
  <td class=xl294208 style='border-top:none;border-left:none' x:num><?= $engineremoval["Campaign"][$value]?></td>
<?
  }
?>
  <!--<td class=xl294208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl304208 style='border-top:none;border-left:none' x:num>0</td>-->
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td rowspan=10 height=171 class=xl1034208 width=48 style='border-bottom:1.0pt solid black;
  height:128.25pt;width:36pt'>REFURBISHMENT</td>
  <td class=xl714208 style='border-left:none'>PREDIFINE REMOVAL</td>
  <td class=xl534208>&nbsp;</td>
  <td class=xl294208 style='border-top:none'>&nbsp;</td>
  <td class=xl294208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl294208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl294208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl294208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl294208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl294208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl294208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl294208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl294208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl294208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl304208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl714208 style='height:12.75pt;border-left:none'><span
  style='mso-spacerun:yes'>          </span>* BASIC - PLANNED</td>
  <td class=xl534208 x:num><?= $engineremovallastyear["Predefined Basic Planned"]?></td>
<?
	foreach ($bulan as $key => $value){
?>
  <td class=xl294208 style='border-top:none;border-left:none' x:num><?= $engineremoval["Predefined Basic Planned"][$value]?></td>
<?
  }
?>
  <!--<td class=xl294208 style='border-top:none;border-left:none' x:num>3</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>1</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>1</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>1</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>1</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>2</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>1</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>1</td>
  <td class=xl304208 style='border-top:none;border-left:none' x:num>1</td>-->
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl714208 style='height:12.75pt;border-left:none'><span
  style='mso-spacerun:yes'>                             </span>- UNPLANNED</td>
  <td class=xl534208 x:num><?= $engineremovallastyear["Predefined Basic UnPlanned"]?></td>
<?
	foreach ($bulan as $key => $value){
?>
  <td class=xl294208 style='border-top:none;border-left:none' x:num><?= $engineremoval["Predefined Basic UnPlanned"][$value]?></td>
<?
  }
?>
  <!--<td class=xl294208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl304208 style='border-top:none;border-left:none' x:num>0</td>-->
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl714208 style='height:12.75pt;border-left:none'><span
  style='mso-spacerun:yes'>          </span>* NON BASIC - PLANNED</td>
  <td class=xl534208 x:num><?= $engineremovallastyear["Predefined NonBasic Planned"]?></td>
<?
	foreach ($bulan as $key => $value){
?>
  <td class=xl294208 style='border-top:none;border-left:none' x:num><?= $engineremoval["Predefined NonBasic Planned"][$value]?></td>
<?
  }
?>
  <!--<td class=xl294208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl304208 style='border-top:none;border-left:none' x:num>0</td>-->
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl714208 style='height:12.75pt;border-left:none'><span
  style='mso-spacerun:yes'>                             </span>- UNPLANNED</td>
  <td class=xl534208 x:num><?= $engineremovallastyear["Predefined NonBasic UnPlanned"]?></td>
<?
	foreach ($bulan as $key => $value){
?>
  <td class=xl294208 style='border-top:none;border-left:non' x:num><?= $engineremoval["Predefined NonBasic UnPlanned"][$value]?></td>
<?
	}
?>
  <!--<td class=xl294208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl304208 style='border-top:none;border-left:none' x:num>0</td>-->
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl714208 style='height:12.75pt;border-left:none'>PREMATURE
  REMOVAL</td>
  <td class=xl534208>&nbsp;</td>
  <td class=xl294208 style='border-top:none'>&nbsp;</td>
  <td class=xl294208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl294208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl294208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl294208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl294208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl294208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl294208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl294208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl294208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl294208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl304208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl714208 style='height:12.75pt;border-left:none'><span
  style='mso-spacerun:yes'>          </span>* BASIC - PLANNED</td>
  <td class=xl534208 x:num><?= $engineremovallastyear["Premature Basic Planned"]?></td>
<?
	foreach ($bulan as $key => $value){
?>
  <td class=xl294208 style='border-top:none' x:num><?= $engineremoval["Premature Basic Planned"][$value]?></td>
<?
  }
?>
  <!--<td class=xl294208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>1</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>1</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl304208 style='border-top:none;border-left:none' x:num>0</td>-->
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl714208 style='height:12.75pt;border-left:none'><span
  style='mso-spacerun:yes'>                             </span>- UNPLANNED</td>
  <td class=xl534208 x:num><?= $engineremovallastyear["Premature Basic UnPlanned"]?></td>
<?
	foreach ($bulan as $key => $value){
?>
  <td class=xl294208 style='border-top:none;border-left:none' x:num><?= $engineremoval["Premature Basic UnPlanned"][$value]?></td>
<?
  }
?>
  <!--<td class=xl294208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>1</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl304208 style='border-top:none;border-left:none' x:num>0</td>-->
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl714208 style='height:12.75pt;border-left:none'><span
  style='mso-spacerun:yes'>          </span>* NON BASIC - PLANNED</td>
  <td class=xl534208 x:num><?= $engineremovallastyear["Premature NonBasic Planned"]?></td>
<?
	foreach ($bulan as $key => $value){
?>
  <td class=xl294208 style='border-top:none;border-left:none' x:num><?= $engineremoval["Premature NonBasic Planned"][$value]?></td>
<?
  }
?>
  <!--<td class=xl294208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl304208 style='border-top:none;border-left:none' x:num>0</td>-->
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
 </tr>
 <tr height=18 style='height:13.5pt'>
  <td height=18 class=xl714208 style='height:13.5pt;border-left:none'><span
  style='mso-spacerun:yes'>                             </span>- UNPLANNED</td>
  <td class=xl534208 x:num><?= $engineremovallastyear["Premature NonBasic UnPlanned"]?></td>
<?
	foreach ($bulan as $key => $value){
?>
  <td class=xl294208 style='border-top:none;border-left:none' x:num><?= $engineremoval["Premature NonBasic UnPlanned"][$value]?></td>
<?
  }
?>
  <!--<td class=xl294208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl294208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl304208 style='border-top:none;border-left:none' x:num>0</td>-->
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl654208 style='height:12.75pt'>&nbsp;</td>
  <td class=xl664208>&nbsp;</td>
  <td class=xl534208>&nbsp;</td>
  <td class=xl294208 style='border-top:none'>&nbsp;</td>
  <td class=xl294208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl294208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl294208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl294208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl294208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl294208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl294208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl294208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl294208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl294208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl304208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td colspan=2 height=17 class=xl604208 style='border-right:1.0pt solid black;
  height:12.75pt'>TOTAL UNPLANNED ENGINE REMOVALS</td>
  <td class=xl334208 style='border-top:none;border-left:none' x:num><?= ($engineremovallastyear["Premature NonBasic UnPlanned"] + $engineremovallastyear["Premature Basic UnPlanned"] + $engineremovallastyear["Predefined Basic UnPlanned"] + $engineremovallastyear["Predefined NonBasic UnPlanned"])?></td>

<?
	foreach ($bulan as $key => $value){
?>
  <td class=xl344208 style='border-top:none;border-left:none' x:num><?= ($engineremoval["Predefined Basic UnPlanned"][$value] + $engineremoval["Predefined NonBasic UnPlanned"][$value] + $engineremoval["Premature Basic UnPlanned"][$value] + $engineremoval["Premature NonBasic UnPlanned"][$value])?></td>
<?
}
?>
  <!--<td class=xl344208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl344208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl344208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl344208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl344208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl344208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl344208 style='border-top:none;border-left:none' x:num>1</td>
  <td class=xl344208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl344208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl344208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl504208 style='border-top:none;border-left:none' x:num
  x:fmla="=O25+O27+O30+O32">0</td>-->
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl604208 style='height:12.75pt;border-top:none'
  x:str="          "><span style='mso-spacerun:yes'>          </span></td>
  <td class=xl614208 style='border-top:none' x:str="'- UER RATE">- UER RATE</td>
  <td class=xl414208 style='border-top:none;border-left:none'
  x:num="9.5419847328244281E-2"><?= round(($engineremovallastyear["Premature NonBasic UnPlanned"] + $engineremovallastyear["Premature Basic UnPlanned"] + $engineremovallastyear["Predefined Basic UnPlanned"] + $engineremovallastyear["Predefined NonBasic UnPlanned"])/(array_sum($FHlastyear) * $numberofengine)*1000,3)?></td>
<?
	foreach ($bulan as $key => $value){
?>
  <td class=xl434208 style='border-top:none;border-left:none' x:num><?= round((($engineremoval["Predefined Basic UnPlanned"][$value] + $engineremoval["Predefined NonBasic UnPlanned"][$value] + $engineremoval["Premature Basic UnPlanned"][$value] + $engineremoval["Premature NonBasic UnPlanned"][$value])/($FH[$value] * $numberofengine)*1000),3)?></td>
<?
  }
?>
  <!--<td class=xl434208 style='border-top:none;border-left:none' x:num>0.000</td>
  <td class=xl434208 style='border-top:none;border-left:none' x:num>0.000</td>
  <td class=xl434208 style='border-top:none;border-left:none' x:num>0.000</td>
  <td class=xl434208 style='border-top:none;border-left:none' x:num>0.000</td>
  <td class=xl434208 style='border-top:none;border-left:none' x:num>0.000</td>
  <td class=xl434208 style='border-top:none;border-left:none' x:num>0.000</td>
  <td class=xl434208 style='border-top:none;border-left:none'
  x:num="9.5419847328244281E-2">0.095</td>
  <td class=xl434208 style='border-top:none;border-left:none' x:num>0.000</td>
  <td class=xl434208 style='border-top:none;border-left:none' x:num>0.000</td>
  <td class=xl434208 style='border-top:none;border-left:none' x:num>0.000</td>
  <td class=xl444208 style='border-top:none;border-left:none' x:num
  x:fmla="=(O34*1000)/(O8)">0.000</td>-->
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl604208 style='height:12.75pt;border-top:none'
  x:str="         "><span style='mso-spacerun:yes'>         </span></td>
  <td class=xl614208 style='border-top:none' x:str="' - 3 MO. RATE"><span
  style='mso-spacerun:yes'> </span>- 3 MO. RATE</td>
  <td class=xl544208 style='border-left:none'>&nbsp;</td>
<?
	foreach ($bulan as $key => $value){
?>
  <td class=xl454208 style='border-top:none;border-left:none' x:num><?= round((($engineremoval["Predefined Basic UnPlanned"][$bulan12[$key+10]] + $engineremoval["Predefined NonBasic UnPlanned"][$bulan12[$key+10]] + $engineremoval["Premature Basic UnPlanned"][$bulan12[$key+10]] + $engineremoval["Premature NonBasic UnPlanned"][$bulan12[$key+10]] + $engineremoval["Predefined Basic UnPlanned"][$bulan12[$key+11]] + $engineremoval["Predefined NonBasic UnPlanned"][$bulan12[$key+11]] + $engineremoval["Premature Basic UnPlanned"][$bulan12[$key+11]] + $engineremoval["Premature NonBasic UnPlanned"][$bulan12[$key+11]] + $engineremoval["Predefined Basic UnPlanned"][$bulan12[$key+12]] + $engineremoval["Predefined NonBasic UnPlanned"][$bulan12[$key+12]] + $engineremoval["Premature Basic UnPlanned"][$bulan12[$key+12]] + $engineremoval["Premature NonBasic UnPlanned"][$bulan12[$key+12]])/(($FH24[$bulan12[$key+10]] + $FH24[$bulan12[$key+11]] + $FH24[$bulan12[$key+12]]) * $numberofengine)*1000),3)?></td>
<?
  }
?>
  <!--<td class=xl454208 style='border-top:none;border-left:none' x:num>0.000</td>
  <td class=xl454208 style='border-top:none;border-left:none' x:num>0.000</td>
  <td class=xl454208 style='border-top:none;border-left:none' x:num>0.000</td>
  <td class=xl454208 style='border-top:none;border-left:none' x:num>0.000</td>
  <td class=xl454208 style='border-top:none;border-left:none' x:num>0.000</td>
  <td class=xl454208 style='border-top:none;border-left:none' x:num>0.000</td>
  <td class=xl454208 style='border-top:none;border-left:none'
  x:num="3.1806615776081425E-2">0.032</td>
  <td class=xl454208 style='border-top:none;border-left:none'
  x:num="3.1806615776081425E-2">0.032</td>
  <td class=xl454208 style='border-top:none;border-left:none'
  x:num="3.1806615776081425E-2">0.032</td>
  <td class=xl454208 style='border-top:none;border-left:none' x:num>0.000</td>
  <td class=xl464208 style='border-top:none;border-left:none' x:num
  x:fmla="=(M35+N35+O35)/3">0.000</td>-->
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl724208 style='height:12.75pt'>&nbsp;</td>
  <td class=xl734208>&nbsp;</td>
  <td class=xl544208>&nbsp;</td>
  <td class=xl314208 style='border-top:none'>&nbsp;</td>
  <td class=xl314208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl314208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl314208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl314208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl314208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl314208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl314208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl314208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl314208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl314208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl324208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td colspan=2 height=17 class=xl604208 style='border-right:1.0pt solid black;
  height:12.75pt'>TOTAL PREMATURE REMOVALS</td>
  <td class=xl554208 style='border-left:none' x:num><?= $engineremovallastyear["Premature Basic Planned"] + $engineremovallastyear["Premature Basic UnPlanned"] + $engineremovallastyear["Premature NonBasic Planned"] + $engineremovallastyear["Premature NonBasic UnPlanned"]?></td>
<?
	foreach ($bulan as $key => $value){
?>
  <td class=xl354208 style='border-top:none;border-left:none' x:num><?= ($engineremoval["Premature Basic Planned"][$value] + $engineremoval["Premature Basic UnPlanned"][$value] + $engineremoval["Premature NonBasic Planned"][$value] + $engineremoval["Premature NonBasic UnPlanned"][$value])?></td>
<?
  }
?>
  <!--<td class=xl354208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl354208 style='border-top:none;border-left:none' x:num>1</td>
  <td class=xl354208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl354208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl354208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl354208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl354208 style='border-top:none;border-left:none' x:num>1</td>
  <td class=xl354208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl354208 style='border-top:none;border-left:none' x:num>1</td>
  <td class=xl354208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl364208 style='border-top:none;border-left:none' x:num
  x:fmla="=SUM(O29:O32)">0</td>-->
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl604208 style='height:12.75pt;border-top:none'>&nbsp;</td>
  <td class=xl614208 style='border-top:none' x:str="'- RATE">- RATE</td>
  <td class=xl494208 style='border-top:none;border-left:none'
  x:num="0.28308290955838977"><?= round((($engineremovallastyear["Premature Basic Planned"] + $engineremovallastyear["Premature Basic UnPlanned"] + $engineremovallastyear["Premature NonBasic Planned"] + $engineremovallastyear["Premature NonBasic UnPlanned"])/(array_sum($FHlastyear)*$numberofengine)*1000),3)?></td>
<?
	foreach ($bulan as $key => $value){
?>
  <td class=xl454208 style='border-top:none;border-left:none' x:num><?= round((($engineremoval["Premature Basic Planned"][$value] + $engineremoval["Premature Basic UnPlanned"][$value] + $engineremoval["Premature NonBasic Planned"][$value] + $engineremoval["Premature NonBasic UnPlanned"][$value])/($FH[$value] * $numberofengine)*1000),3)?></td>
<?
  }
?>
  <!--<td class=xl454208 style='border-top:none;border-left:none' x:num>0.000</td>
  <td class=xl454208 style='border-top:none;border-left:none'
  x:num="8.8417329796640146E-2">0.088</td>
  <td class=xl454208 style='border-top:none;border-left:none' x:num>0.000</td>
  <td class=xl454208 style='border-top:none;border-left:none' x:num>0.000</td>
  <td class=xl454208 style='border-top:none;border-left:none' x:num>0.000</td>
  <td class=xl454208 style='border-top:none;border-left:none' x:num>0.000</td>
  <td class=xl454208 style='border-top:none;border-left:none'
  x:num="9.5419847328244281E-2">0.095</td>
  <td class=xl454208 style='border-top:none;border-left:none' x:num>0.000</td>
  <td class=xl454208 style='border-top:none;border-left:none'
  x:num="0.10447137484329294">0.104</td>
  <td class=xl454208 style='border-top:none;border-left:none' x:num>0.000</td>
  <td class=xl464208 style='border-top:none;border-left:none' x:num
  x:fmla="=(O38*1000)/(O8)">0.000</td>-->
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl604208 style='height:12.75pt;border-top:none'>&nbsp;</td>
  <td class=xl614208 style='border-top:none' x:str="' - 3 MO. RATE"><span
  style='mso-spacerun:yes'> </span>- 3 MO. RATE</td>
  <td class=xl514208 style='border-top:none;border-left:none'>&nbsp;</td>
<?
	foreach ($bulan as $key => $value){
?>
  <td class=xl434208 style='border-top:none;border-left:none' x:num><?= round((($engineremoval["Premature Basic Planned"][$bulan12[$key+10]] + $engineremoval["Premature Basic UnPlanned"][$bulan12[$key+10]] + $engineremoval["Premature NonBasic Planned"][$bulan12[$key+10]] + $engineremoval["Premature NonBasic UnPlanned"][$bulan12[$key+10]] + $engineremoval["Premature Basic Planned"][$bulan12[$key+11]] + $engineremoval["Premature Basic UnPlanned"][$bulan12[$key+11]] + $engineremoval["Premature NonBasic Planned"][$bulan12[$key+11]] + $engineremoval["Premature NonBasic UnPlanned"][$bulan12[$key+11]] + $engineremoval["Premature Basic Planned"][$value] + $engineremoval["Premature Basic UnPlanned"][$value] + $engineremoval["Premature NonBasic Planned"][$value] + $engineremoval["Premature NonBasic UnPlanned"][$value])/(($FH24[$bulan12[$key+10]] + $FH24[$bulan12[$key+11]] + $FH24[$bulan12[$key+12]]) * $numberofengine)*1000),3)?></td>
<?
  }
?>
  <!--<td class=xl434208 style='border-top:none;border-left:none' x:num>0.000</td>
  <td class=xl434208 style='border-top:none;border-left:none'
  x:num="2.9472443265546714E-2">0.029</td>
  <td class=xl434208 style='border-top:none;border-left:none'
  x:num="2.9472443265546714E-2">0.029</td>
  <td class=xl434208 style='border-top:none;border-left:none'
  x:num="2.9472443265546714E-2">0.029</td>
  <td class=xl434208 style='border-top:none;border-left:none' x:num>0.000</td>
  <td class=xl434208 style='border-top:none;border-left:none' x:num>0.000</td>
  <td class=xl434208 style='border-top:none;border-left:none'
  x:num="3.1806615776081425E-2">0.032</td>
  <td class=xl434208 style='border-top:none;border-left:none'
  x:num="3.1806615776081425E-2">0.032</td>
  <td class=xl434208 style='border-top:none;border-left:none'
  x:num="6.6630407390512403E-2">0.067</td>
  <td class=xl434208 style='border-top:none;border-left:none'
  x:num="3.4823791614430978E-2">0.035</td>
  <td class=xl444208 style='border-top:none;border-left:none'
  x:num="3.4823791614430978E-2" x:fmla="=(M39+N39+O39)/3">0.035</td>-->
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl604208 style='height:12.75pt;border-top:none'>&nbsp;</td>
  <td class=xl744208 style='border-top:none'>&nbsp;</td>
  <td class=xl514208 style='border-top:none'>&nbsp;</td>
  <td class=xl314208 style='border-top:none'>&nbsp;</td>
  <td class=xl314208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl314208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl314208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl314208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl314208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl314208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl314208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl314208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl314208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl314208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl324208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl604208 colspan=2 style='height:12.75pt'>TOTAL SHOP
  VISITS</td>
  <td class=xl374208 style='border-top:none' x:num><?= ($engineremovallastyear["Premature Basic Planned"] + $engineremovallastyear["Premature Basic UnPlanned"] + $engineremovallastyear["Premature NonBasic Planned"] + $engineremovallastyear["Premature NonBasic UnPlanned"] + $engineremovallastyear["Predefined Basic Planned"] + $engineremovallastyear["Predefined Basic UnPlanned"] + $engineremovallastyear["Predefined NonBasic Planned"] + $engineremovallastyear["Predefined NonBasic UnPlanned"])?></td>
<?
	foreach ($bulan as $key => $value){
?>
  <td class=xl354208 style='border-top:none;border-left:none' x:num><?= ($engineremoval["Premature Basic Planned"][$value] + $engineremoval["Premature Basic UnPlanned"][$value] + $engineremoval["Premature NonBasic Planned"][$value] + $engineremoval["Premature NonBasic UnPlanned"][$value] + $engineremoval["Predefined Basic Planned"][$value] + $engineremoval["Predefined Basic UnPlanned"][$value] + $engineremoval["Predefined NonBasic Planned"][$value] + $engineremoval["Predefined NonBasic UnPlanned"][$value] + $engineremoval["Campaign"][$value])?></td>
<?
  }
?>
  <!--<td class=xl354208 style='border-top:none;border-left:none' x:num>3</td>
  <td class=xl354208 style='border-top:none;border-left:none' x:num>2</td>
  <td class=xl354208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl354208 style='border-top:none;border-left:none' x:num>1</td>
  <td class=xl354208 style='border-top:none;border-left:none' x:num>1</td>
  <td class=xl354208 style='border-top:none;border-left:none' x:num>1</td>
  <td class=xl354208 style='border-top:none;border-left:none' x:num>3</td>
  <td class=xl354208 style='border-top:none;border-left:none' x:num>1</td>
  <td class=xl354208 style='border-top:none;border-left:none' x:num>1</td>
  <td class=xl354208 style='border-top:none;border-left:none' x:num>1</td>
  <td class=xl364208 style='border-top:none;border-left:none' x:num
  x:fmla="=SUM(O22:O32)">1</td>-->
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
 </tr>
 <tr height=15 style='mso-height-source:userset;height:11.25pt'>
  <td height=15 class=xl604208 style='height:11.25pt;border-top:none'>&nbsp;</td>
  <td class=xl614208 style='border-top:none' x:str="'- RATE">- RATE</td>
  <td class=xl494208 style='border-top:none;border-left:none'
  x:num="1.935384724520707"><?= round((($engineremovallastyear["Premature Basic Planned"] + $engineremovallastyear["Premature Basic UnPlanned"] + $engineremovallastyear["Premature NonBasic Planned"] + $engineremovallastyear["Premature NonBasic UnPlanned"] + $engineremovallastyear["Predefined Basic Planned"] + $engineremovallastyear["Predefined Basic UnPlanned"] + $engineremovallastyear["Predefined NonBasic Planned"] + $engineremovallastyear["Predefined NonBasic UnPlanned"])/(array_sum($FHlastyear)*$numberofengine)*1000),3)?></td>
<?
	foreach ($bulan as $key => $value){
?>
  <td class=xl454208 style='border-top:none;border-left:none' x:num><?= round((($engineremoval["Premature Basic Planned"][$value] + $engineremoval["Premature Basic UnPlanned"][$value] + $engineremoval["Premature NonBasic Planned"][$value] + $engineremoval["Premature NonBasic UnPlanned"][$value] + $engineremoval["Predefined Basic Planned"][$value] + $engineremoval["Predefined Basic UnPlanned"][$value] + $engineremoval["Predefined NonBasic Planned"][$value] + $engineremoval["Predefined NonBasic UnPlanned"][$value] + $engineremoval["Campaign"][$value])/($FH[$value] * $numberofengine)*1000),3)?></td>
<?
  }
?>
  <!--<td class=xl454208 style='border-top:none;border-left:none'
  x:num="0.30706243602865918">0.307</td>
  <td class=xl454208 style='border-top:none;border-left:none'
  x:num="0.17683465959328029">0.177</td>
  <td class=xl454208 style='border-top:none;border-left:none' x:num>0.000</td>
  <td class=xl454208 style='border-top:none;border-left:none'
  x:num="0.10401497815685459">0.104</td>
  <td class=xl454208 style='border-top:none;border-left:none'
  x:num="9.7866510080250532E-2">0.098</td>
  <td class=xl454208 style='border-top:none;border-left:none'
  x:num="0.10537407797681771">0.105</td>
  <td class=xl454208 style='border-top:none;border-left:none'
  x:num="0.2862595419847328">0.286</td>
  <td class=xl454208 style='border-top:none;border-left:none'
  x:num="9.45000945000945E-2">0.095</td>
  <td class=xl454208 style='border-top:none;border-left:none'
  x:num="0.10447137484329294">0.104</td>
  <td class=xl454208 style='border-top:none;border-left:none'
  x:num="9.8716683119447188E-2">0.099</td>
  <td class=xl464208 style='border-top:none;border-left:none'
  x:num="9.8716683119447188E-2" x:fmla="=(O42*1000)/(O8)">0.099</td>-->
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl604208 style='height:12.75pt;border-top:none'>&nbsp;</td>
  <td class=xl614208 style='border-top:none' x:str="' - 3 MO. RATE"><span
  style='mso-spacerun:yes'> </span>- 3 MO. RATE</td>
  <td class=xl514208 style='border-top:none;border-left:none'>&nbsp;</td>
<?
	foreach ($bulan as $key => $value){
?>
  <td class=xl434208 style='border-top:none;border-left:none' x:num><?= round((($engineremoval["Premature Basic Planned"][$bulan12[$key+10]] + $engineremoval["Premature Basic UnPlanned"][$bulan12[$key+10]] + $engineremoval["Premature NonBasic Planned"][$bulan12[$key+10]] + $engineremoval["Premature NonBasic UnPlanned"][$bulan12[$key+10]] + $engineremoval["Predefined Basic Planned"][$bulan12[$key+10]] + $engineremoval["Predefined Basic UnPlanned"][$bulan12[$key+10]] + $engineremoval["Predefined NonBasic Planned"][$bulan12[$key+10]] + $engineremoval["Predefined NonBasic UnPlanned"][$bulan12[$key+10]] + $engineremoval["Campaign"][$bulan12[$key+10]] + $engineremoval["Premature Basic Planned"][$bulan12[$key+11]] + $engineremoval["Premature Basic UnPlanned"][$bulan12[$key+11]] + $engineremoval["Premature NonBasic Planned"][$bulan12[$key+11]] + $engineremoval["Premature NonBasic UnPlanned"][$bulan12[$key+11]] + $engineremoval["Predefined Basic Planned"][$bulan12[$key+11]] + $engineremoval["Predefined Basic UnPlanned"][$bulan12[$key+11]] + $engineremoval["Predefined NonBasic Planned"][$bulan12[$key+11]] + $engineremoval["Predefined NonBasic UnPlanned"][$bulan12[$key+11]] + $engineremoval["Campaign"][$bulan12[$key+11]] + $engineremoval["Premature Basic Planned"][$bulan12[$key+12]] + $engineremoval["Premature Basic UnPlanned"][$bulan12[$key+12]] + $engineremoval["Premature NonBasic Planned"][$bulan12[$key+12]] + $engineremoval["Premature NonBasic UnPlanned"][$bulan12[$key+12]] + $engineremoval["Predefined Basic Planned"][$bulan12[$key+12]] + $engineremoval["Predefined Basic UnPlanned"][$bulan12[$key+12]] + $engineremoval["Predefined NonBasic Planned"][$bulan12[$key+12]] + $engineremoval["Predefined NonBasic UnPlanned"][$bulan12[$key+12]] + $engineremoval["Campaign"][$bulan12[$key+12]])/(($FH24[$bulan12[$key+10]] + $FH24[$bulan12[$key+11]] + $FH24[$bulan12[$key+12]]) * $numberofengine)*1000),3)?></td>
<?
  }
?>
  <!--<td class=xl434208 style='border-top:none;border-left:none'
  x:num="0.16828241538508049">0.168</td>
  <td class=xl434208 style='border-top:none;border-left:none'
  x:num="0.22722730191617391">0.227</td>
  <td class=xl434208 style='border-top:none;border-left:none'
  x:num="0.16129903187397984">0.161</td>
  <td class=xl434208 style='border-top:none;border-left:none'
  x:num="9.3616545916711633E-2">0.094</td>
  <td class=xl434208 style='border-top:none;border-left:none'
  x:num="6.7293829412368375E-2">0.067</td>
  <td class=xl434208 style='border-top:none;border-left:none'
  x:num="0.1024185220713076">0.102</td>
  <td class=xl434208 style='border-top:none;border-left:none'
  x:num="0.16316671001393368">0.163</td>
  <td class=xl434208 style='border-top:none;border-left:none'
  x:num="0.16204457148721499">0.162</td>
  <td class=xl434208 style='border-top:none;border-left:none'
  x:num="0.16174367044270674">0.162</td>
  <td class=xl434208 style='border-top:none;border-left:none'
  x:num="9.9229384154278219E-2">0.099</td>
  <td class=xl444208 style='border-top:none;border-left:none'
  x:num="0.10063491369406245" x:fmla="=(M43+N43+O43)/3">0.101</td>-->
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl604208 style='height:12.75pt;border-top:none'>&nbsp;</td>
  <td class=xl744208 style='border-top:none'>&nbsp;</td>
  <td class=xl514208 style='border-top:none'>&nbsp;</td>
  <td class=xl314208 style='border-top:none'>&nbsp;</td>
  <td class=xl314208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl314208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl314208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl314208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl314208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl314208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl314208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl314208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl314208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl314208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl324208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl894208>2006 s/d 2007</td>
  <td class=xl884208 style='border-left:none'>JAN</td>
  <td class=xl884208 style='border-left:none'>FEB</td>
  <td class=xl884208 style='border-left:none'>MAR</td>
  <td class=xl884208 style='border-left:none'>APR</td>
  <td class=xl884208 style='border-left:none'>MAY</td>
  <td class=xl884208 style='border-left:none'>JUN</td>
  <td class=xl884208 style='border-left:none'>JUL</td>
  <td class=xl884208 style='border-left:none'>AUG</td>
  <td class=xl884208 style='border-left:none'>SEP</td>
  <td class=xl884208 style='border-left:none'>OCT</td>
  <td class=xl884208 style='border-left:none'>NOV</td>
  <td class=xl884208 style='border-left:none'>DEC</td>
  <td class=xl884208 style='border-left:none'>JAN</td>
  <td class=xl884208 style='border-left:none'>FEB</td>
  <td class=xl884208 style='border-left:none'>MAR</td>
  <td class=xl884208 style='border-left:none'>APR</td>
  <td class=xl884208 style='border-left:none'>MAY</td>
  <td class=xl884208 style='border-left:none'>JUN</td>
  <td class=xl884208 style='border-left:none'>JUL</td>
  <td class=xl884208 style='border-left:none'>AUG</td>
  <td class=xl884208 style='border-left:none'>SEP</td>
  <td class=xl884208 style='border-left:none'>OCT</td>
  <td class=xl884208 style='border-left:none'>NOV</td>
  <td class=xl884208 style='border-left:none'>DEC</td>
  <td class=xl884208 style='border-left:none'>JAN</td>
  <td class=xl884208 style='border-left:none'>FEB</td>
  <td class=xl904208 style='border-left:none'>MAR</td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td colspan=2 height=17 class=xl604208 style='border-right:1.0pt solid black;
  height:12.75pt'>TOTAL ENGINE REMOVALS</td>
  <td class=xl374208 style='border-top:none;border-left:none' x:num><?= ($engineremovallastyear["Premature Basic Planned"] + $engineremovallastyear["Premature Basic UnPlanned"] + $engineremovallastyear["Premature NonBasic Planned"] + $engineremovallastyear["Premature NonBasic UnPlanned"] + $engineremovallastyear["Predefined Basic Planned"] + $engineremovallastyear["Predefined Basic UnPlanned"] + $engineremovallastyear["Predefined NonBasic Planned"] + $engineremovallastyear["Predefined NonBasic UnPlanned"] + $engineremovallastyear["Convenience"] + $engineremovallastyear["Campaign"])?></td>
<?
	foreach ($bulan as $key => $value){
?>
  <td class=xl354208 style='border-top:none;border-left:none' x:num><?= ($engineremoval["Premature Basic Planned"][$value] + $engineremoval["Premature Basic UnPlanned"][$value] + $engineremoval["Premature NonBasic Planned"][$value] + $engineremoval["Premature NonBasic UnPlanned"][$value] + $engineremoval["Predefined Basic Planned"][$value] + $engineremoval["Predefined Basic UnPlanned"][$value] + $engineremoval["Predefined NonBasic Planned"][$value] + $engineremoval["Predefined NonBasic UnPlanned"][$value] + $engineremoval["Campaign"][$value] + $engineremoval["Convenience"][$value])?></td>
<?
  }
?>
  <!--<td class=xl354208 style='border-top:none;border-left:none' x:num>5</td>
  <td class=xl354208 style='border-top:none;border-left:none' x:num>2</td>
  <td class=xl354208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl354208 style='border-top:none;border-left:none' x:num>1</td>
  <td class=xl354208 style='border-top:none;border-left:none' x:num>2</td>
  <td class=xl354208 style='border-top:none;border-left:none' x:num>2</td>
  <td class=xl354208 style='border-top:none;border-left:none' x:num>3</td>
  <td class=xl354208 style='border-top:none;border-left:none' x:num>1</td>
  <td class=xl354208 style='border-top:none;border-left:none' x:num>2</td>
  <td class=xl354208 style='border-top:none;border-left:none' x:num>2</td>
  <td class=xl364208 style='border-top:none;border-left:none' x:num
  x:fmla="=SUM(O21:O32)">2</td>-->
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl814208 style='border-top:none'>Operate</td>
  <td class=xl824208 style='border-top:none;border-left:none' x:num>10430</td>
  <td class=xl824208 style='border-top:none;border-left:none' x:num>7788</td>
  <td class=xl824208 style='border-top:none;border-left:none' x:num>8736</td>
  <td class=xl824208 style='border-top:none;border-left:none' x:num>8444</td>
  <td class=xl824208 style='border-top:none;border-left:none' x:num>8168</td>
  <td class=xl824208 style='border-top:none;border-left:none' x:num>7784</td>
  <td class=xl824208 style='border-top:none;border-left:none' x:num>8958</td>
  <td class=xl824208 style='border-top:none;border-left:none' x:num>9230</td>
  <td class=xl824208 style='border-top:none;border-left:none' x:num>9034</td>
  <td class=xl824208 style='border-top:none;border-left:none' x:num>8658</td>
  <td class=xl824208 style='border-top:none;border-left:none' x:num>8796</td>
  <td class=xl824208 style='border-top:none;border-left:none' x:num>9940</td>
  <td class=xl824208 style='border-top:none;border-left:none' x:num>10076</td>
  <td class=xl824208 style='border-top:none;border-left:none' x:num>8144</td>
  <td class=xl824208 style='border-top:none;border-left:none' x:num>8852</td>
  <td class=xl824208 style='border-top:none;border-left:none' x:num>9082</td>
  <td class=xl824208 style='border-top:none;border-left:none' x:num>10112</td>
  <td class=xl824208 style='border-top:none;border-left:none' x:num>9770</td>
  <td class=xl824208 style='border-top:none;border-left:none' x:num>11310</td>
  <td class=xl824208 style='border-top:none;border-left:none' x:num>10902</td>
  <td class=xl824208 style='border-top:none;border-left:none' x:num>9614</td>
  <td class=xl824208 style='border-top:none;border-left:none' x:num>10218</td>
  <td class=xl824208 style='border-top:none;border-left:none' x:num>9490</td>
  <td class=xl824208 style='border-top:none;border-left:none' x:num>10480</td>
  <td class=xl824208 style='border-top:none;border-left:none' x:num>10582</td>
  <td class=xl824208 style='border-top:none;border-left:none' x:num>9572</td>
  <td class=xl824208 style='border-top:none;border-left:none' x:num
  x:fmla="=5065*2">10130</td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl704208 style='height:12.75pt;border-top:none'>&nbsp;</td>
  <td class=xl754208 style='border-top:none' x:str>-
  RATE/1000 ENG.HOURS</td>
  <td class=xl564208 style='border-top:none;border-left:none' x:num><?= round((($engineremovallastyear["Premature Basic Planned"] + $engineremovallastyear["Premature Basic UnPlanned"] + $engineremovallastyear["Premature NonBasic Planned"] + $engineremovallastyear["Premature NonBasic UnPlanned"] + $engineremovallastyear["Predefined Basic Planned"] + $engineremovallastyear["Predefined Basic UnPlanned"] + $engineremovallastyear["Predefined NonBasic Planned"] + $engineremovallastyear["Predefined NonBasic UnPlanned"] + $engineremovallastyear["Convenience"] + $engineremovallastyear["Campaign"])/(array_sum($FHlastyear)*$numberofengine)*1000),3)?></td>
<?
	foreach ($bulan as $key => $value){
?>
  <td class=xl454208 style='border-top:none;border-left:none' x:num><?= round((($engineremoval["Premature Basic Planned"][$value] + $engineremoval["Premature Basic UnPlanned"][$value] + $engineremoval["Premature NonBasic Planned"][$value] + $engineremoval["Premature NonBasic UnPlanned"][$value] + $engineremoval["Predefined Basic Planned"][$value] + $engineremoval["Predefined Basic UnPlanned"][$value] + $engineremoval["Predefined NonBasic Planned"][$value] + $engineremoval["Predefined NonBasic UnPlanned"][$value] + $engineremoval["Campaign"][$value] + $engineremoval["Convenience"][$value])/($FH[$value] * $numberofengine)*1000),3)?></td>
<?
  }
?>
  <!--<td class=xl454208 style='border-top:none;border-left:none'
  x:num="0.51177072671443191">0.512</td>
  <td class=xl454208 style='border-top:none;border-left:none'
  x:num="0.17683465959328029">0.177</td>
  <td class=xl454208 style='border-top:none;border-left:none' x:num>0.000</td>
  <td class=xl454208 style='border-top:none;border-left:none'
  x:num="0.10401497815685459">0.104</td>
  <td class=xl454208 style='border-top:none;border-left:none'
  x:num="0.19573302016050106">0.196</td>
  <td class=xl454208 style='border-top:none;border-left:none'
  x:num="0.21074815595363541">0.211</td>
  <td class=xl454208 style='border-top:none;border-left:none'
  x:num="0.2862595419847328">0.286</td>
  <td class=xl454208 style='border-top:none;border-left:none'
  x:num="9.45000945000945E-2">0.095</td>
  <td class=xl454208 style='border-top:none;border-left:none'
  x:num="0.20894274968658588">0.209</td>
  <td class=xl454208 style='border-top:none;border-left:none'
  x:num="0.19743336623889438">0.197</td>
  <td class=xl464208 style='border-top:none;border-left:none'
  x:num="0.19743336623889438" x:fmla="=(O46*1000)/(O8)">0.197</td>-->
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl784208 style='border-top:none' x:str="Total IFSD ">Total
  IFSD<span style='mso-spacerun:yes'> </span></td>
  <td class=xl824208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl824208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl824208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl824208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl824208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl824208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl824208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl824208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl824208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl824208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl824208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl824208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl824208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl824208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl824208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl824208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl824208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl824208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl824208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl824208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl824208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl824208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl824208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl824208 style='border-top:none;border-left:none' x:num>1</td>
  <td class=xl834208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl844208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl844208 style='border-top:none;border-left:none' x:num>0</td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
 </tr>
 <tr height=18 style='height:13.5pt'>
  <td height=18 class=xl764208 style='height:13.5pt'><span
  style='mso-spacerun:yes'> </span></td>
  <td class=xl774208 x:str="'- 12 MO. RATE">- 12 MO. RATE</td>
  <td class=xl584208>&nbsp;</td>
<?
	foreach ($bulan as $key => $value){
?>
  <td class=xl474208 style='border-top:none;border-left:none' x:num><?
	$convenience = 0;$campaign = 0;$predbasplan = 0;$predbasunplan = 0;$prednonbasplan = 0;$prednonbaseunplan = 0;$prembasplan = 0;$prembasunplan = 0;$premnonbasplan = 0;$premnonbasunplan = 0;$FHengremove = 0;
	for($i=1;$i<13;$i++)
	{
		$convenience += $engineremoval["Convenience"][$bulan12[$key+$i]];
		$campaign += $engineremoval["Campaign"][$bulan12[$key+$i]];
		$predbasplan += $engineremoval["Predefined Basic Planned"][$bulan12[$key+$i]];
		$predbasunplan += $engineremoval["Predefined Basic UnPlanned"][$bulan12[$key+$i]];
		$prednonbasplan += $engineremoval["Predefined NonBasic Planned"][$bulan12[$key+$i]];
		$prednonbaseunplan += $engineremoval["Predefined NonBasic UnPlanned"][$bulan12[$key+$i]];
		$prembasplan += $engineremoval["Premature Basic Planned"][$bulan12[$key+$i]];
		$prembasunplan += $engineremoval["Premature Basic UnPlanned"][$bulan12[$key+$i]];
		$premnonbasplan += $engineremoval["Premature NonBasic Planned"][$bulan12[$key+$i]];
		$premnonbasunplan += $engineremoval["Premature NonBasic UnPlanned"][$bulan12[$key+$i]];
		$FHengremove += $FH24[$bulan12[$key+$i]];
	}
	$rate = round(($convenience + $campaign + $predbasplan + $predbasunplan + $prednonbasplan + $prednonbaseunplan + $prembasplan + $prembasunplan + $premnonbasplan + $premnonbasunplan)/$FHengremove*1000,3);
	?><?= $rate?></td>
<?
  }
?>
  <!--<td class=xl474208 style='border-top:none;border-left:none'
  x:num="0.13584059278301433">0.136</td>
  <td class=xl474208 style='border-top:none;border-left:none'
  x:num="0.15057681441578771">0.151</td>
  <td class=xl474208 style='border-top:none;border-left:none'
  x:num="0.15057681441578771">0.151</td>
  <td class=xl474208 style='border-top:none;border-left:none'
  x:num="0.15924472926219227">0.159</td>
  <td class=xl474208 style='border-top:none;border-left:none'
  x:num="0.17555581427556735">0.176</td>
  <td class=xl474208 style='border-top:none;border-left:none'
  x:num="0.19311816060503698">0.193</td>
  <td class=xl474208 style='border-top:none;border-left:none'
  x:num="0.21697312243709807">0.217</td>
  <td class=xl474208 style='border-top:none;border-left:none'
  x:num="0.22484813031210593">0.225</td>
  <td class=xl474208 style='border-top:none;border-left:none'
  x:num="0.22179506213765796">0.222</td>
  <td class=xl474208 style='border-top:none;border-left:none'
  x:num="0.19117750073860215">0.191</td>
  <td class=xl484208 style='border-top:none;border-left:none'
  x:num="0.19845462244620729"
  x:fmla="=(D47+E47+F47+G47+H47+I47+J47+K47+L47+M47+N47+O47)/12">0.198</td>-->
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl784208 style='border-top:none'>Rate</td>
  <td class=xl794208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl794208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl794208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl794208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl794208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl794208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl794208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl794208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl794208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl794208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl794208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl794208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl794208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl854208 style='border-top:none;border-left:none' x:num
  x:fmla="=(SUM(U47:AF47)*1000/(SUM(U46:AF46)))">0.000</td>
  <td class=xl854208 style='border-top:none;border-left:none' x:num
  x:fmla="=(SUM(V47:AG47)*1000/(SUM(V46:AG46)))">0.000</td>
  <td class=xl854208 style='border-top:none;border-left:none' x:num
  x:fmla="=(SUM(W47:AH47)*1000/(SUM(W46:AH46)))">0.000</td>
  <td class=xl854208 style='border-top:none;border-left:none' x:num
  x:fmla="=(SUM(X47:AI47)*1000/(SUM(X46:AI46)))">0.000</td>
  <td class=xl854208 style='border-top:none;border-left:none' x:num
  x:fmla="=(SUM(Y47:AJ47)*1000/(SUM(Y46:AJ46)))">0.000</td>
  <td class=xl854208 style='border-top:none;border-left:none' x:num
  x:fmla="=(SUM(Z47:AK47)*1000/(SUM(Z46:AK46)))">0.000</td>
  <td class=xl854208 style='border-top:none;border-left:none' x:num
  x:fmla="=(SUM(AA47:AL47)*1000/(SUM(AA46:AL46)))">0.000</td>
  <td class=xl854208 style='border-top:none;border-left:none' x:num
  x:fmla="=(SUM(AB47:AM47)*1000/(SUM(AB46:AM46)))">0.000</td>
  <td class=xl854208 style='border-top:none;border-left:none' x:num
  x:fmla="=(SUM(AC47:AN47)*1000/(SUM(AC46:AN46)))">0.000</td>
  <td class=xl854208 style='border-top:none;border-left:none' x:num
  x:fmla="=(SUM(AD47:AO47)*1000/(SUM(AD46:AO46)))">0.000</td>
  <td class=xl854208 style='border-top:none;border-left:none'
  x:num="8.4709868699703508E-3" x:fmla="=(SUM(AE47:AP47)*1000/(SUM(AE46:AP46)))">0.008</td>
  <td class=xl854208 style='border-top:none;border-left:none'
  x:num="8.4348324842268632E-3" x:fmla="=(SUM(AF47:AQ47)*1000/(SUM(AF46:AQ46)))">0.008</td>
  <td class=xl854208 style='border-top:none;border-left:none'
  x:num="8.334444592612348E-3" x:fmla="=(SUM(AG47:AR47)*1000/(SUM(AG46:AR46)))">0.008</td>
  <td class=xl854208 style='border-top:none;border-left:none'
  x:num="8.2466065214164379E-3" x:fmla="=(SUM(AH47:AS47)*1000/(SUM(AH46:AS46)))">0.008</td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl244208 style='height:12.75pt'></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl574208 x:str>Page : <?=$page?>7</td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl864208 style='border-top:none'>Rate 3 Month</td>
  <td class=xl804208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl804208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl804208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl804208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl804208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl804208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl804208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl804208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl804208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl804208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl804208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl794208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl794208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl854208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl854208 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl874208 style='border-top:none;border-left:none' x:num
  x:fmla="=(AF48+AG48+AH48)/3">0.000</td>
  <td class=xl874208 style='border-top:none;border-left:none' x:num
  x:fmla="=(AG48+AH48+AI48)/3">0.000</td>
  <td class=xl874208 style='border-top:none;border-left:none' x:num
  x:fmla="=(AH48+AI48+AJ48)/3">0.000</td>
  <td class=xl874208 style='border-top:none;border-left:none' x:num
  x:fmla="=(AI48+AJ48+AK48)/3">0.000</td>
  <td class=xl874208 style='border-top:none;border-left:none' x:num
  x:fmla="=(AJ48+AK48+AL48)/3">0.000</td>
  <td class=xl874208 style='border-top:none;border-left:none' x:num
  x:fmla="=(AK48+AL48+AM48)/3">0.000</td>
  <td class=xl874208 style='border-top:none;border-left:none' x:num
  x:fmla="=(AL48+AM48+AN48)/3">0.000</td>
  <td class=xl874208 style='border-top:none;border-left:none' x:num
  x:fmla="=(AM48+AN48+AO48)/3">0.000</td>
  <td class=xl874208 style='border-top:none;border-left:none'
  x:num="2.8236622899901168E-3" x:fmla="=(AN48+AO48+AP48)/3">0.003</td>
  <td class=xl874208 style='border-top:none;border-left:none'
  x:num="5.6352731180657383E-3" x:fmla="=(AO48+AP48+AQ48)/3">0.006</td>
  <td class=xl874208 style='border-top:none;border-left:none'
  x:num="8.4134213156031885E-3" x:fmla="=(AP48+AQ48+AR48)/3">0.008</td>
  <td class=xl874208 style='border-top:none;border-left:none'
  x:num="8.3386278660852169E-3" x:fmla="=(AQ48+AR48+AS48)/3">0.008</td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
 </tr>
 <tr height=15 style='mso-height-source:userset;height:11.25pt'>
  <td height=15 class=xl244208 style='height:11.25pt'></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl924208 style='border-top:none'>Total Removal</td>
  <td class=xl944208 x:num>2</td>
  <td class=xl944208 x:num>9</td>
  <td class=xl944208 x:num>2</td>
  <td class=xl944208 x:num>0</td>
  <td class=xl944208 x:num>1</td>
  <td class=xl944208 x:num>1</td>
  <td class=xl944208 x:num>2</td>
  <td class=xl944208 x:num>2</td>
  <td class=xl944208 x:num>7</td>
  <td class=xl944208 x:num>3</td>
  <td class=xl944208 x:num>8</td>
  <td class=xl944208 x:num>3</td>
  <td class=xl944208 x:num>2</td>
  <td class=xl944208 x:num>2</td>
  <td class=xl944208 x:num>5</td>
  <td class=xl944208 x:num>1</td>
  <td class=xl944208 x:num>2</td>
  <td class=xl944208 x:num>5</td>
  <td class=xl944208 x:num>2</td>
  <td class=xl944208 x:num>0</td>
  <td class=xl944208 x:num>1</td>
  <td class=xl944208 x:num>2</td>
  <td class=xl944208 x:num>2</td>
  <td class=xl944208 x:num>3</td>
  <td class=xl244208 align=right x:num>1</td>
  <td class=xl244208 align=right x:num>2</td>
  <td class=xl944208 x:num>2</td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
 </tr>
 <tr height=15 style='height:11.25pt'>
  <td height=15 class=xl244208 style='height:11.25pt'></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl924208 style='border-top:none'>Rate</td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl914208 x:num="0.24557956777996071" x:fmla="=(AF50*1000)/(AF46)">0.246</td>
  <td class=xl914208 x:num="0.56484410302756438" x:fmla="=(AG50*1000)/(AG46)">0.565</td>
  <td class=xl914208 x:num="0.11010790574763268" x:fmla="=(AH50*1000)/(AH46)">0.110</td>
  <td class=xl914208 x:num="0.19778481012658228" x:fmla="=(AI50*1000)/(AI46)">0.198</td>
  <td class=xl914208 x:num="0.51177072671443191" x:fmla="=(AJ50*1000)/(AJ46)">0.512</td>
  <td class=xl914208 x:num="0.17683465959328029" x:fmla="=(AK50*1000)/(AK46)">0.177</td>
  <td class=xl914208 x:num x:fmla="=(AL50*1000)/(AL46)">0.000</td>
  <td class=xl914208 x:num="0.10401497815685459" x:fmla="=(AM50*1000)/(AM46)">0.104</td>
  <td class=xl914208 x:num="0.19573302016050106" x:fmla="=(AN50*1000)/(AN46)">0.196</td>
  <td class=xl914208 x:num="0.21074815595363541" x:fmla="=(AO50*1000)/(AO46)">0.211</td>
  <td class=xl914208 x:num="0.2862595419847328" x:fmla="=(AP50*1000)/(AP46)">0.286</td>
  <td class=xl914208 x:num="9.45000945000945E-2" x:fmla="=(AQ50*1000)/(AQ46)">0.095</td>
  <td class=xl914208 x:num="0.20894274968658588" x:fmla="=(AR50*1000)/(AR46)">0.209</td>
  <td class=xl914208 x:num="0.19743336623889438" x:fmla="=(AS50*1000)/(AS46)">0.197</td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
 </tr>
 <tr height=16 style='height:12.0pt'>
  <td height=16 class=xl244208 style='height:12.0pt'></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl934208 style='border-top:none'>Rate 12 Month</td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl914208></td>
  <td class=xl914208></td>
  <td class=xl914208 x:num="7.6710964712929819E-2"
  x:fmla="=(W51+X51+Y51+Z51+AA51+AB51+AC51+AD51+AE51+AF51+AG51+AH51)/12">0.077</td>
  <td class=xl914208 x:num="9.3193032223478342E-2"
  x:fmla="=(X51+Y51+Z51+AA51+AB51+AC51+AD51+AE51+AF51+AG51+AH51+AI51)/12">0.093</td>
  <td class=xl914208 x:num="0.13584059278301433"
  x:fmla="=(Y51+Z51+AA51+AB51+AC51+AD51+AE51+AF51+AG51+AH51+AI51+AJ51)/12">0.136</td>
  <td class=xl914208 x:num="0.15057681441578771"
  x:fmla="=(Z51+AA51+AB51+AC51+AD51+AE51+AF51+AG51+AH51+AI51+AJ51+AK51)/12">0.151</td>
  <td class=xl914208 x:num="0.15057681441578771"
  x:fmla="=(AA51+AB51+AC51+AD51+AE51+AF51+AG51+AH51+AI51+AJ51+AK51+AL51)/12">0.151</td>
  <td class=xl914208 x:num="0.15924472926219227"
  x:fmla="=(AB51+AC51+AD51+AE51+AF51+AG51+AH51+AI51+AJ51+AK51+AL51+AM51)/12">0.159</td>
  <td class=xl914208 x:num="0.17555581427556735"
  x:fmla="=(AC51+AD51+AE51+AF51+AG51+AH51+AI51+AJ51+AK51+AL51+AM51+AN51)/12">0.176</td>
  <td class=xl914208 x:num="0.19311816060503698"
  x:fmla="=(AD51+AE51+AF51+AG51+AH51+AI51+AJ51+AK51+AL51+AM51+AN51+AO51)/12">0.193</td>
  <td class=xl914208 x:num="0.21697312243709807"
  x:fmla="=(AE51+AF51+AG51+AH51+AI51+AJ51+AK51+AL51+AM51+AN51+AO51+AP51)/12">0.217</td>
  <td class=xl914208 x:num="0.22484813031210593"
  x:fmla="=(AF51+AG51+AH51+AI51+AJ51+AK51+AL51+AM51+AN51+AO51+AP51+AQ51)/12">0.225</td>
  <td class=xl914208 x:num="0.22179506213765796"
  x:fmla="=(AG51+AH51+AI51+AJ51+AK51+AL51+AM51+AN51+AO51+AP51+AQ51+AR51)/12">0.222</td>
  <td class=xl914208 x:num="0.19117750073860215"
  x:fmla="=(AH51+AI51+AJ51+AK51+AL51+AM51+AN51+AO51+AP51+AQ51+AR51+AS51)/12">0.191</td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
 </tr>
 <tr height=15 style='height:11.25pt'>
  <td height=15 class=xl244208 style='height:11.25pt'></td>
  <td align=left valign=top><!--[if gte vml 1]><v:shapetype id="_x0000_t201"
   coordsize="21600,21600" o:spt="201" path="m,l,21600r21600,l21600,xe">
   <v:stroke joinstyle="miter"/>
   <v:path shadowok="f" o:extrusionok="f" strokeok="f" fillok="f"
    o:connecttype="rect"/>
   <o:lock v:ext="edit" shapetype="t"/>
  </v:shapetype><v:shape id="_x0000_s29697" type="#_x0000_t201" style='position:absolute;
   margin-left:29.25pt;margin-top:.75pt;width:658.5pt;height:287.25pt;
   z-index:1' fillcolor="window [78]" strokecolor="windowText [77]"
   strokeweight="3e-5mm" o:insetmode="auto">
   <v:fill color2="windowText [77]"/>
   <o:lock v:ext="edit" rotation="t" text="t"/>
  </v:shape><![endif]--><![if !vml]><span style='mso-ignore:vglayout;
  position:absolute;z-index:1;margin-left:39px;margin-top:1px;width:879px;
  height:384px'><![endif]><img width=879 height=384
  src="EOS_excel_files/Engine%20Operation%20Summary0408_4208_image001.gif"
  v:shapes="_x0000_s29697" class=shape v:dpi="96"><![if !vml]></span><![endif]><span
  style='mso-ignore:vglayout2'>
  <table cellpadding=0 cellspacing=0>
   <tr>
    <td height=15 class=xl244208 width=234 style='height:11.25pt;width:176pt'></td>
   </tr>
  </table>
  </span></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
 </tr>
 <tr height=15 style='height:11.25pt'>
  <td height=15 class=xl244208 style='height:11.25pt'></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
 </tr>
 <tr height=15 style='height:11.25pt'>
  <td height=15 class=xl384208 style='height:11.25pt'></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
 </tr>
 <tr height=15 style='height:11.25pt'>
  <td height=15 class=xl384208 style='height:11.25pt'></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
 </tr>
 <tr height=15 style='height:11.25pt'>
  <td height=15 class=xl384208 style='height:11.25pt'></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
 </tr>
 <tr height=15 style='height:11.25pt'>
  <td height=15 class=xl394208 style='height:11.25pt'></td>
  <td class=xl394208></td>
  <td class=xl394208></td>
  <td class=xl394208></td>
  <td class=xl394208></td>
  <td class=xl394208></td>
  <td class=xl394208></td>
  <td class=xl394208></td>
  <td class=xl394208></td>
  <td class=xl394208></td>
  <td class=xl394208></td>
  <td class=xl394208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
 </tr>
 <tr height=15 style='height:11.25pt'>
  <td height=15 class=xl394208 style='height:11.25pt'></td>
  <td class=xl394208></td>
  <td class=xl394208></td>
  <td class=xl394208></td>
  <td class=xl394208></td>
  <td class=xl394208></td>
  <td class=xl394208></td>
  <td class=xl394208></td>
  <td class=xl394208></td>
  <td class=xl394208></td>
  <td class=xl394208></td>
  <td class=xl394208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
 </tr>
 <tr height=15 style='height:11.25pt'>
  <td height=15 class=xl384208 style='height:11.25pt'></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
 </tr>
 <tr height=15 style='height:11.25pt'>
  <td height=15 class=xl384208 style='height:11.25pt'></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
 </tr>
 <tr height=15 style='height:11.25pt'>
  <td height=15 class=xl384208 style='height:11.25pt'></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
 </tr>
 <tr height=15 style='height:11.25pt'>
  <td height=15 class=xl384208 style='height:11.25pt'></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
 </tr>
 <tr height=15 style='height:11.25pt'>
  <td height=15 class=xl384208 style='height:11.25pt'></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
 </tr>
 <tr height=15 style='height:11.25pt'>
  <td height=15 class=xl384208 style='height:11.25pt'></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
 </tr>
 <tr height=15 style='height:11.25pt'>
  <td height=15 class=xl384208 style='height:11.25pt'></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
 </tr>
 <tr height=15 style='height:11.25pt'>
  <td height=15 class=xl384208 style='height:11.25pt'></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
 </tr>
 <tr height=15 style='height:11.25pt'>
  <td height=15 class=xl384208 style='height:11.25pt'></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
 </tr>
 <tr height=15 style='height:11.25pt'>
  <td height=15 class=xl384208 style='height:11.25pt'></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
 </tr>
 <tr height=15 style='height:11.25pt'>
  <td height=15 class=xl384208 style='height:11.25pt'></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
 </tr>
 <tr height=15 style='height:11.25pt'>
  <td height=15 class=xl384208 style='height:11.25pt'></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
 </tr>
 <tr height=15 style='height:11.25pt'>
  <td height=15 class=xl384208 style='height:11.25pt'></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
 </tr>
 <tr height=15 style='height:11.25pt'>
  <td height=15 class=xl384208 style='height:11.25pt'></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
 </tr>
 <tr height=15 style='height:11.25pt'>
  <td height=15 class=xl384208 style='height:11.25pt'></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
 </tr>
 <tr height=15 style='height:11.25pt'>
  <td height=15 class=xl384208 style='height:11.25pt'></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
 </tr>
 <tr height=15 style='height:11.25pt'>
  <td height=15 class=xl384208 style='height:11.25pt'></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
 </tr>
 <tr height=15 style='height:11.25pt'>
  <td height=15 class=xl384208 style='height:11.25pt'></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl384208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
 </tr>
 <tr height=15 style='height:11.25pt'>
  <td height=15 class=xl394208 style='height:11.25pt'></td>
  <td class=xl394208></td>
  <td class=xl394208></td>
  <td class=xl394208></td>
  <td class=xl394208></td>
  <td class=xl394208></td>
  <td class=xl394208></td>
  <td class=xl394208></td>
  <td class=xl394208></td>
  <td class=xl394208></td>
  <td class=xl394208></td>
  <td class=xl394208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
 </tr>
 <tr height=15 style='height:11.25pt'>
  <td height=15 class=xl244208 style='height:11.25pt'></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
 </tr>
 <tr height=15 style='height:11.25pt'>
  <td height=15 class=xl244208 style='height:11.25pt'></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
 </tr>
 <tr height=15 style='height:11.25pt'>
  <td height=15 class=xl244208 style='height:11.25pt'></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
 </tr>
 <tr height=15 style='height:11.25pt'>
  <td height=15 class=xl244208 style='height:11.25pt'></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
 </tr>
 <tr height=15 style='height:11.25pt'>
  <td height=15 class=xl244208 style='height:11.25pt'></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
 </tr>
 <tr height=15 style='height:11.25pt'>
  <td height=15 class=xl244208 style='height:11.25pt'></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
 </tr>
 <tr height=15 style='height:11.25pt'>
  <td height=15 class=xl244208 style='height:11.25pt'></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
 </tr>
 <tr height=15 style='height:11.25pt'>
  <td height=15 class=xl244208 style='height:11.25pt'></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
 </tr>
 <tr height=15 style='height:11.25pt'>
  <td height=15 class=xl244208 style='height:11.25pt'></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
 </tr>
 <tr height=15 style='height:11.25pt'>
  <td height=15 class=xl244208 style='height:11.25pt'></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
 </tr>
 <tr height=15 style='height:11.25pt'>
  <td height=15 class=xl244208 style='height:11.25pt'></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
 </tr>
 <tr height=15 style='height:11.25pt'>
  <td height=15 class=xl244208 style='height:11.25pt'></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
 </tr>
 <tr height=15 style='height:11.25pt'>
  <td height=15 class=xl244208 style='height:11.25pt'></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
 </tr>
 <tr height=15 style='height:11.25pt'>
  <td height=15 class=xl244208 style='height:11.25pt'></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
 </tr>
 <tr height=15 style='height:11.25pt'>
  <td height=15 class=xl244208 style='height:11.25pt'></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
 </tr>
 <tr height=15 style='height:11.25pt'>
  <td height=15 class=xl244208 style='height:11.25pt'></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
 </tr>
 <tr height=15 style='height:11.25pt'>
  <td height=15 class=xl244208 style='height:11.25pt'></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
 </tr>
 <tr height=15 style='height:11.25pt'>
  <td height=15 class=xl244208 style='height:11.25pt'></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
 </tr>
 <tr height=15 style='height:11.25pt'>
  <td height=15 class=xl244208 style='height:11.25pt'></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
 </tr>
 <tr height=16 style='height:12.0pt'>
  <td height=16 class=xl244208 style='height:12.0pt'></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl574208 x:str="'Page : C8">Page : C8</td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
  <td class=xl244208></td>
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
  <td width=64 style='width:48pt'></td>
  <td width=64 style='width:48pt'></td>
  <td width=77 style='width:58pt'></td>
  <td width=64 style='width:48pt'></td>
  <td width=64 style='width:48pt'></td>
  <td width=64 style='width:48pt'></td>
  <td width=64 style='width:48pt'></td>
  <td width=64 style='width:48pt'></td>
  <td width=64 style='width:48pt'></td>
  <td width=64 style='width:48pt'></td>
  <td width=64 style='width:48pt'></td>
  <td width=64 style='width:48pt'></td>
  <td width=64 style='width:48pt'></td>
  <td width=64 style='width:48pt'></td>
  <td width=64 style='width:48pt'></td>
  <td width=64 style='width:48pt'></td>
  <td width=64 style='width:48pt'></td>
  <td width=64 style='width:48pt'></td>
  <td width=64 style='width:48pt'></td>
  <td width=64 style='width:48pt'></td>
  <td width=64 style='width:48pt'></td>
  <td width=64 style='width:48pt'></td>
  <td width=64 style='width:48pt'></td>
  <td width=64 style='width:48pt'></td>
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
