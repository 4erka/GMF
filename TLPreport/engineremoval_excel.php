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
<link rel=File-List href="engineremoval_excel_files/filelist.xml">
<style id="Engine Removal0408_7287_Styles">
<!--table
	{mso-displayed-decimal-separator:"\.";
	mso-displayed-thousand-separator:"\,";}
.font57287
	{color:windowtext;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM, sans-serif;
	mso-font-charset:0;}
.font67287
	{color:windowtext;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM;
	mso-generic-font-family:auto;
	mso-font-charset:0;}
.xl247287
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
	text-align:general;
	vertical-align:bottom;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl257287
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
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
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl267287
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
	border-top:1.0pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:1.0pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;
	mso-rotate:90;}
.xl277287
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
	border-top:1.0pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;
	mso-rotate:90;}
.xl287287
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
	border-top:1.0pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl297287
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
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
	border-right:1.0pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl307287
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
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
	border-right:1.0pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl317287
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:700;
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
.xl327287
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
	mso-number-format:"Short Date";
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:1.0pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl337287
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
	border:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl347287
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
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl357287
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
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
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl367287
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
	vertical-align:bottom;
	border:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl377287
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
.xl387287
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	border:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl397287
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
	vertical-align:bottom;
	border:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl407287
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:700;
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
.xl417287
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
	border:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl427287
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
	vertical-align:bottom;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl437287
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
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl447287
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
.xl457287
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
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl467287
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
	border:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl477287
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
	border-top:.5pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl487287
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
	vertical-align:middle;
	border-top:1.0pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;
	mso-rotate:90;}
.xl497287
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM;
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
.xl507287
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM;
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
.xl517287
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
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:1.0pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl527287
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
.xl537287
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
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
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl547287
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
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
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl557287
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:0;
	text-align:center;
	vertical-align:bottom;
	border:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl567287
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
.xl577287
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
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
.xl587287
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
	mso-number-format:"Short Date";
	text-align:center;
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:1.0pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl597287
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
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:1.0pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl607287
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
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl617287
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
	border-bottom:1.0pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl627287
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
	border:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;
	mso-rotate:90;}
.xl637287
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
	border-right:.5pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;
	mso-rotate:90;}
.xl647287
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:12.0pt;
	font-weight:700;
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
.xl657287
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
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:1.0pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;
	mso-rotate:90;}
.xl667287
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
	border-right:.5pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:1.0pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;
	mso-rotate:90;}
.xl677287
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
	vertical-align:middle;
	border:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;
	mso-rotate:90;}
.xl687287
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
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;
	mso-rotate:90;}
.xl697287
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
	border-top:1.0pt solid windowtext;
	border-right:.5pt solid windowtext;
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
  $group = isset($_REQUEST["groupby"]) ? $_REQUEST["groupby"] : "";

  $year = substr($_REQUEST["periode"],0,4);$bulan = substr($_REQUEST["periode"],5,2);
if ($bulan == 12){
	$lastyear = $year;$lastbulan = "01";
} else {
	$lastyear = $year - 1;$lastbulan = substr("0".($bulan + 1),-2,2);
}
$lastperiode = $lastyear."-".$lastbulan;

	$TE = connectimesysTE();
	if ($_REQUEST["groupby"] == "Engine") {
		$actype = engineaircraft($actype);
	}
	//die(engineremoval($periode,$actype));
	$qryFH = "SELECT `tbl_removaldesc`.`Reason`, `tbl_engineremove`.`DateRemove`, `tbl_engineremove`.`Station`, `tbl_engineremove`.`AircraftReg`, `tbl_engineremove`.`Pos`, `tbl_engineremove`.`SNOff`, `tbl_engineremove`.`TSI`,`tbl_engineremove`.`CSI`, `tbl_engineremove`.`TSN`, `tbl_engineremove`.`CSN`, `tbl_engineremove`.`Remark` FROM `tbl_engineremove` Inner Join `tbl_removaldesc` ON `tbl_engineremove`.`ReasonRemoval` = `tbl_removaldesc`.`ID` WHERE `tbl_engineremove`.`AircraftType` IN ('".$actype."') AND (DATE_FORMAT(`tbl_engineremove`.`DateRemove`,'%Y-%m') BETWEEN '".$lastperiode."' AND '".$_REQUEST["periode"]."') ORDER BY `tbl_engineremove`.`DateRemove` DESC";//die($qryFH);
	$resultFH = mysql_query($qryFH);

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

<div id="Engine Removal0408_7287" align=center x:publishsource="Excel">

<table x:str border=0 cellpadding=0 cellspacing=0 width=1245 class=xl247287
 style='border-collapse:collapse;table-layout:fixed;width:934pt'>
 <col class=xl377287 width=64 style='width:48pt'>
 <col class=xl377287 width=29 style='mso-width-source:userset;mso-width-alt:
 1060;width:22pt'>
 <col class=xl377287 width=53 style='mso-width-source:userset;mso-width-alt:
 1938;width:40pt'>
 <col class=xl377287 width=26 style='mso-width-source:userset;mso-width-alt:
 950;width:20pt'>
 <col class=xl567287 width=60 style='mso-width-source:userset;mso-width-alt:
 2194;width:45pt'>
 <col class=xl567287 width=48 style='mso-width-source:userset;mso-width-alt:
 1755;width:36pt'>
 <col class=xl567287 width=60 style='mso-width-source:userset;mso-width-alt:
 2194;width:45pt'>
 <col class=xl567287 width=76 style='mso-width-source:userset;mso-width-alt:
 2779;width:57pt'>
 <col class=xl567287 width=59 style='mso-width-source:userset;mso-width-alt:
 2157;width:44pt'>
 <col class=xl567287 width=75 style='mso-width-source:userset;mso-width-alt:
 2742;width:56pt'>
 <col class=xl567287 width=59 style='mso-width-source:userset;mso-width-alt:
 2157;width:44pt'>
 <col class=xl567287 width=76 style='mso-width-source:userset;mso-width-alt:
 2779;width:57pt'>
 <col class=xl567287 width=59 style='mso-width-source:userset;mso-width-alt:
 2157;width:44pt'>
 <col class=xl567287 width=75 style='mso-width-source:userset;mso-width-alt:
 2742;width:56pt'>
 <col class=xl537287 width=40 span=4 style='mso-width-source:userset;
 mso-width-alt:1462;width:30pt'>
 <col class=xl257287 width=266 style='mso-width-source:userset;mso-width-alt:
 9728;width:200pt'>
 <tr height=21 style='height:15.75pt'>
  <td colspan=19 height=21 class=xl647287 width=1245 style='height:15.75pt;
  width:934pt'>ENGINE REMOVAL AND SHUTDOWN</td>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td colspan=19 height=21 class=xl647287 style='height:15.75pt'><?= $enginetype?></td>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td colspan=19 height=21 class=xl647287 style='height:15.75pt'><?= $manufacture?></td>
 </tr>
 <tr height=18 style='height:13.5pt'>
  <td height=18 class=xl377287 style='height:13.5pt'></td>
  <td class=xl377287></td>
  <td class=xl377287></td>
  <td class=xl377287></td>
  <td class=xl567287></td>
  <td class=xl567287></td>
  <td class=xl567287></td>
  <td class=xl567287></td>
  <td class=xl567287></td>
  <td class=xl567287></td>
  <td class=xl567287></td>
  <td class=xl567287></td>
  <td class=xl567287></td>
  <td class=xl567287></td>
  <td class=xl537287></td>
  <td class=xl537287></td>
  <td class=xl537287></td>
  <td class=xl537287></td>
  <td class=xl257287></td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td rowspan=6 height=128 class=xl267287 style='border-bottom:1.0pt solid black;
  height:96.0pt'>DATE</td>
  <td rowspan=6 class=xl277287 style='border-bottom:1.0pt solid black'>STATION</td>
  <td rowspan=6 class=xl277287 style='border-bottom:1.0pt solid black'
  x:str="AIRCRAFT ">AIRCRAFT<span style='mso-spacerun:yes'> </span></td>
  <td rowspan=6 class=xl277287 style='border-bottom:1.0pt solid black'>POSITION</td>
  <td colspan=10 class=xl697287 style='border-left:none'>ENGINE SERIAL NUMBER</td>
  <td rowspan=6 class=xl277287 style='border-bottom:1.0pt solid black'>TSI</td>
  <td rowspan=6 class=xl277287 style='border-bottom:1.0pt solid black'>CSI</td>
  <td rowspan=6 class=xl277287 style='border-bottom:1.0pt solid black'>TSN</td>
  <td rowspan=6 class=xl277287 style='border-bottom:1.0pt solid black'>CSN</td>
  <td rowspan=6 class=xl287287 style='border-bottom:1.0pt solid black'>REMARKS</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td rowspan=5 height=111 class=xl677287 style='border-bottom:1.0pt solid black;
  height:83.25pt;border-top:none'>CONVENIENCE</td>
  <td colspan=9 class=xl467287 style='border-left:none'>SHOP VISIT</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td rowspan=4 height=94 class=xl677287 style='border-bottom:1.0pt solid black;
  height:70.5pt;border-top:none'>CAMPAIGN</td>
  <td colspan=8 class=xl467287 style='border-left:none'>REFURBISHMENT</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td colspan=4 height=17 class=xl467287 style='height:12.75pt;border-left:
  none'>PREDEFINED</td>
  <td colspan=4 class=xl467287 style='border-left:none'>PREMATURE</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td colspan=2 height=17 class=xl467287 style='height:12.75pt;border-left:
  none'>BASIC</td>
  <td colspan=2 class=xl467287 style='border-left:none'>NON BASIC</td>
  <td colspan=2 class=xl467287 style='border-left:none'>BASIC</td>
  <td colspan=2 class=xl467287 style='border-left:none'>NON BASIC</td>
 </tr>
 <tr height=43 style='mso-height-source:userset;height:32.25pt'>
  <td height=43 class=xl497287 style='height:32.25pt;border-top:none;
  border-left:none'>PLANNED</td>
  <td class=xl497287 style='border-top:none;border-left:none'>UNPLANNED</td>
  <td class=xl497287 style='border-top:none;border-left:none'>PLANNED</td>
  <td class=xl497287 style='border-top:none;border-left:none'>UNPLANNED</td>
  <td class=xl497287 style='border-top:none;border-left:none'>PLANNED</td>
  <td class=xl497287 style='border-top:none;border-left:none'>UNPLANNED</td>
  <td class=xl497287 style='border-top:none;border-left:none'>PLANNED</td>
  <td class=xl497287 style='border-top:none;border-left:none'>UNPLANNED</td>
 </tr>
 <tr height=17 style='mso-height-source:userset;height:12.75pt'>
  <td height=17 class=xl267287 style='height:12.75pt;border-top:none'>&nbsp;</td>
  <td class=xl277287 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl277287 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl277287 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl487287 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl487287 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl507287 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl507287 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl507287 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl507287 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl507287 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl507287 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl507287 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl507287 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl277287 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl277287 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl277287 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl277287 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl287287 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <? 
  while ($hasil = mysql_fetch_array($resultFH))
  { 
  ?>
 <tr height=17 style='mso-height-source:userset;height:12.75pt'>
  <td height=17 class=xl327287 style='height:12.75pt;border-top:none'
  x:str><?= $hasil["DateRemove"]?></td>
  <td class=xl417287 style='border-top:none;border-left:none'><?= $hasil["Station"]?></td>
  <td class=xl417287 style='border-top:none;border-left:none'><?= $hasil["AircraftReg"]?></td>
  <td class=xl417287 style='border-top:none;border-left:none' x:num><?= $hasil["Pos"]?></td>
  <td class=xl387287 style='border-top:none;border-left:none' x:num><?= convinience($hasil["Reason"],$hasil["SNOff"])?></td>
  <td class=xl387287 style='border-top:none;border-left:none' x:num><?= campaign($hasil["Reason"],$hasil["SNOff"])?></td>
  <td class=xl407287 style='border-top:none;border-left:none' x:num><?= predbasicplan($hasil["Reason"],$hasil["SNOff"])?></td>
  <td class=xl407287 style='border-top:none;border-left:none' x:num> <?= predbasicunplan($hasil["Reason"],$hasil["SNOff"])?></td>
  <td class=xl407287 style='border-top:none;border-left:none' x:num><?= prednonbasicplan($hasil["Reason"],$hasil["SNOff"])?></td>
  <td class=xl407287 style='border-top:none;border-left:none' x:num><?= prednonbasicunplan($hasil["Reason"],$hasil["SNOff"])?></td>
  <td class=xl387287 style='border-top:none;border-left:none' x:num><?= prembasicplan($hasil["Reason"],$hasil["SNOff"])?></td>
  <td class=xl387287 style='border-top:none;border-left:none' x:num><?= prembasicunplan($hasil["Reason"],$hasil["SNOff"])?></td>
  <td class=xl387287 style='border-top:none;border-left:none' x:num><?= premnonbasicplan($hasil["Reason"],$hasil["SNOff"])?></td>
  <td class=xl387287 style='border-top:none;border-left:none' x:num><?= premnonbasicunplan($hasil["Reason"],$hasil["SNOff"])?></td>
  <td class=xl337287 style='border-top:none;border-left:none' x:num><?= $hasil["TSI"]?></td>
  <td class=xl337287 style='border-top:none;border-left:none' x:num><?= $hasil["CSI"]?></td>
  <td class=xl337287 style='border-top:none;border-left:none' x:num><?= $hasil["TSN"]?></td>
  <td class=xl337287 style='border-top:none;border-left:none' x:num><?= $hasil["CSN"]?></td>
  <td class=xl347287 style='border-top:none;border-left:none'><?= $hasil["Remark"]?></td>
 </tr>
 <tr height=17 style='mso-height-source:userset;height:12.75pt'>
  <td height=17 class=xl527287 style='height:12.75pt;border-top:none'>&nbsp;</td>
  <td class=xl447287 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl447287 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl447287 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl467287 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl467287 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl467287 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl467287 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl467287 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl467287 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl467287 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl467287 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl467287 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl467287 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl357287 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl357287 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl357287 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl357287 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl297287 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <? 
  } 
?>

 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl517287 style='height:12.75pt;border-top:none'>&nbsp;</td>
  <td class=xl367287 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl367287 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl367287 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl387287 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl387287 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl387287 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl387287 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl387287 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl387287 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl387287 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl387287 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl387287 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl387287 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl357287 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl357287 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl357287 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl357287 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl297287 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl517287 style='height:12.75pt;border-top:none'>&nbsp;</td>
  <td class=xl367287 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl367287 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl367287 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl387287 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl387287 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl387287 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl387287 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl387287 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl387287 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl387287 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl387287 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl387287 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl387287 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl357287 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl357287 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl357287 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl357287 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl297287 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=18 style='height:13.5pt'>
  <td height=18 class=xl597287 style='height:13.5pt;border-top:none'>&nbsp;</td>
  <td class=xl457287 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl457287 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl457287 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl497287 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl497287 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl497287 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl497287 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl497287 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl497287 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl497287 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl497287 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl497287 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl497287 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl547287 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl547287 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl547287 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl547287 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl307287 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl427287 style='height:12.75pt'></td>
  <td class=xl427287></td>
  <td class=xl427287></td>
  <td class=xl427287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl537287></td>
  <td class=xl537287></td>
  <td class=xl537287></td>
  <td class=xl537287></td>
  <td class=xl317287>Page : <?=$page?>9</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl427287 style='height:12.75pt'></td>
  <td class=xl427287></td>
  <td class=xl427287></td>
  <td class=xl427287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl537287></td>
  <td class=xl537287></td>
  <td class=xl537287></td>
  <td class=xl537287></td>
  <td class=xl257287></td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl427287 style='height:12.75pt'></td>
  <td class=xl427287></td>
  <td class=xl427287></td>
  <td class=xl427287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl537287></td>
  <td class=xl537287></td>
  <td class=xl537287></td>
  <td class=xl537287></td>
  <td class=xl257287></td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl427287 style='height:12.75pt'></td>
  <td class=xl427287></td>
  <td class=xl427287></td>
  <td class=xl427287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl537287></td>
  <td class=xl537287></td>
  <td class=xl537287></td>
  <td class=xl537287></td>
  <td class=xl257287></td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl427287 style='height:12.75pt'></td>
  <td class=xl427287></td>
  <td class=xl427287></td>
  <td class=xl427287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl537287></td>
  <td class=xl537287></td>
  <td class=xl537287></td>
  <td class=xl537287></td>
  <td class=xl257287></td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl427287 style='height:12.75pt'></td>
  <td class=xl427287></td>
  <td class=xl427287></td>
  <td class=xl427287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl537287></td>
  <td class=xl537287></td>
  <td class=xl537287></td>
  <td class=xl537287></td>
  <td class=xl257287></td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl427287 style='height:12.75pt'></td>
  <td class=xl427287></td>
  <td class=xl427287></td>
  <td class=xl427287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl537287></td>
  <td class=xl537287></td>
  <td class=xl537287></td>
  <td class=xl537287></td>
  <td class=xl257287></td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl427287 style='height:12.75pt'></td>
  <td class=xl427287></td>
  <td class=xl427287></td>
  <td class=xl427287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl537287></td>
  <td class=xl537287></td>
  <td class=xl537287></td>
  <td class=xl537287></td>
  <td class=xl257287></td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl427287 style='height:12.75pt'></td>
  <td class=xl427287></td>
  <td class=xl427287></td>
  <td class=xl427287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl537287></td>
  <td class=xl537287></td>
  <td class=xl537287></td>
  <td class=xl537287></td>
  <td class=xl257287></td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl427287 style='height:12.75pt'></td>
  <td class=xl427287></td>
  <td class=xl427287></td>
  <td class=xl427287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl537287></td>
  <td class=xl537287></td>
  <td class=xl537287></td>
  <td class=xl537287></td>
  <td class=xl257287></td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl427287 style='height:12.75pt'></td>
  <td class=xl427287></td>
  <td class=xl427287></td>
  <td class=xl427287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl537287></td>
  <td class=xl537287></td>
  <td class=xl537287></td>
  <td class=xl537287></td>
  <td class=xl257287></td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl427287 style='height:12.75pt'></td>
  <td class=xl427287></td>
  <td class=xl427287></td>
  <td class=xl427287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl537287></td>
  <td class=xl537287></td>
  <td class=xl537287></td>
  <td class=xl537287></td>
  <td class=xl257287></td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl427287 style='height:12.75pt'></td>
  <td class=xl427287></td>
  <td class=xl427287></td>
  <td class=xl427287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl537287></td>
  <td class=xl537287></td>
  <td class=xl537287></td>
  <td class=xl537287></td>
  <td class=xl257287></td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl427287 style='height:12.75pt'></td>
  <td class=xl427287></td>
  <td class=xl427287></td>
  <td class=xl427287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl537287></td>
  <td class=xl537287></td>
  <td class=xl537287></td>
  <td class=xl537287></td>
  <td class=xl257287></td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl427287 style='height:12.75pt'></td>
  <td class=xl427287></td>
  <td class=xl427287></td>
  <td class=xl427287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl537287></td>
  <td class=xl537287></td>
  <td class=xl537287></td>
  <td class=xl537287></td>
  <td class=xl257287></td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl427287 style='height:12.75pt'></td>
  <td class=xl427287></td>
  <td class=xl427287></td>
  <td class=xl427287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl537287></td>
  <td class=xl537287></td>
  <td class=xl537287></td>
  <td class=xl537287></td>
  <td class=xl257287></td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl427287 style='height:12.75pt'></td>
  <td class=xl427287></td>
  <td class=xl427287></td>
  <td class=xl427287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl537287></td>
  <td class=xl537287></td>
  <td class=xl537287></td>
  <td class=xl537287></td>
  <td class=xl257287></td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl427287 style='height:12.75pt'></td>
  <td class=xl427287></td>
  <td class=xl427287></td>
  <td class=xl427287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl537287></td>
  <td class=xl537287></td>
  <td class=xl537287></td>
  <td class=xl537287></td>
  <td class=xl257287></td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl427287 style='height:12.75pt'></td>
  <td class=xl427287></td>
  <td class=xl427287></td>
  <td class=xl427287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl537287></td>
  <td class=xl537287></td>
  <td class=xl537287></td>
  <td class=xl537287></td>
  <td class=xl257287></td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl427287 style='height:12.75pt'></td>
  <td class=xl427287></td>
  <td class=xl427287></td>
  <td class=xl427287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl537287></td>
  <td class=xl537287></td>
  <td class=xl537287></td>
  <td class=xl537287></td>
  <td class=xl257287></td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl427287 style='height:12.75pt'></td>
  <td class=xl427287></td>
  <td class=xl427287></td>
  <td class=xl427287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl537287></td>
  <td class=xl537287></td>
  <td class=xl537287></td>
  <td class=xl537287></td>
  <td class=xl257287></td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl427287 style='height:12.75pt'></td>
  <td class=xl427287></td>
  <td class=xl427287></td>
  <td class=xl427287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl537287></td>
  <td class=xl537287></td>
  <td class=xl537287></td>
  <td class=xl537287></td>
  <td class=xl257287></td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl427287 style='height:12.75pt'></td>
  <td class=xl427287></td>
  <td class=xl427287></td>
  <td class=xl427287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl537287></td>
  <td class=xl537287></td>
  <td class=xl537287></td>
  <td class=xl537287></td>
  <td class=xl257287></td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl427287 style='height:12.75pt'></td>
  <td class=xl427287></td>
  <td class=xl427287></td>
  <td class=xl427287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl537287></td>
  <td class=xl537287></td>
  <td class=xl537287></td>
  <td class=xl537287></td>
  <td class=xl257287></td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl427287 style='height:12.75pt'></td>
  <td class=xl427287></td>
  <td class=xl427287></td>
  <td class=xl427287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl537287></td>
  <td class=xl537287></td>
  <td class=xl537287></td>
  <td class=xl537287></td>
  <td class=xl257287></td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl427287 style='height:12.75pt'></td>
  <td class=xl427287></td>
  <td class=xl427287></td>
  <td class=xl427287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl537287></td>
  <td class=xl537287></td>
  <td class=xl537287></td>
  <td class=xl537287></td>
  <td class=xl257287></td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl427287 style='height:12.75pt'></td>
  <td class=xl427287></td>
  <td class=xl427287></td>
  <td class=xl427287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl537287></td>
  <td class=xl537287></td>
  <td class=xl537287></td>
  <td class=xl537287></td>
  <td class=xl257287></td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl427287 style='height:12.75pt'></td>
  <td class=xl427287></td>
  <td class=xl427287></td>
  <td class=xl427287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl537287></td>
  <td class=xl537287></td>
  <td class=xl537287></td>
  <td class=xl537287></td>
  <td class=xl257287></td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl427287 style='height:12.75pt'></td>
  <td class=xl427287></td>
  <td class=xl427287></td>
  <td class=xl427287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl537287></td>
  <td class=xl537287></td>
  <td class=xl537287></td>
  <td class=xl537287></td>
  <td class=xl257287></td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl427287 style='height:12.75pt'></td>
  <td class=xl427287></td>
  <td class=xl427287></td>
  <td class=xl427287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl537287></td>
  <td class=xl537287></td>
  <td class=xl537287></td>
  <td class=xl537287></td>
  <td class=xl257287></td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl427287 style='height:12.75pt'></td>
  <td class=xl427287></td>
  <td class=xl427287></td>
  <td class=xl427287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl537287></td>
  <td class=xl537287></td>
  <td class=xl537287></td>
  <td class=xl537287></td>
  <td class=xl257287></td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl427287 style='height:12.75pt'></td>
  <td class=xl427287></td>
  <td class=xl427287></td>
  <td class=xl427287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl577287></td>
  <td class=xl537287></td>
  <td class=xl537287></td>
  <td class=xl537287></td>
  <td class=xl537287></td>
  <td class=xl257287></td>
 </tr>
 <![if supportMisalignedColumns]>
 <tr height=0 style='display:none'>
  <td width=64 style='width:48pt'></td>
  <td width=29 style='width:22pt'></td>
  <td width=53 style='width:40pt'></td>
  <td width=26 style='width:20pt'></td>
  <td width=60 style='width:45pt'></td>
  <td width=48 style='width:36pt'></td>
  <td width=60 style='width:45pt'></td>
  <td width=76 style='width:57pt'></td>
  <td width=59 style='width:44pt'></td>
  <td width=75 style='width:56pt'></td>
  <td width=59 style='width:44pt'></td>
  <td width=76 style='width:57pt'></td>
  <td width=59 style='width:44pt'></td>
  <td width=75 style='width:56pt'></td>
  <td width=40 style='width:30pt'></td>
  <td width=40 style='width:30pt'></td>
  <td width=40 style='width:30pt'></td>
  <td width=40 style='width:30pt'></td>
  <td width=266 style='width:200pt'></td>
 </tr>
 <![endif]>
</table>

</div>


<!----------------------------->
<!--END OF OUTPUT FROM EXCEL PUBLISH AS WEB PAGE WIZARD-->
<!----------------------------->
</body>

</html>
