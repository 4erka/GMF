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
<link rel=File-List href="Cumulative_excel_files/filelist.xml">
<style id="Cumulative Flight Hours0408_29490_Styles">
<!--table
	{mso-displayed-decimal-separator:"\.";
	mso-displayed-thousand-separator:"\,";}
.xl1529490
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
	border-left:1.0pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl3229490
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
	text-align:center-across;
	vertical-align:middle;
	border-top:1.0pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:1.0pt solid windowtext;
	background:white;
	mso-pattern:auto none;
	white-space:nowrap;}
.xl3329490
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
	text-align:center-across;
	vertical-align:middle;
	border-top:1.0pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:none;
	background:white;
	mso-pattern:auto none;
	white-space:nowrap;}
.xl3429490
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
	text-align:center-across;
	vertical-align:middle;
	border-top:1.0pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:none;
	background:white;
	mso-pattern:auto none;
	white-space:nowrap;}
.xl3529490
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
	text-align:center-across;
	vertical-align:middle;
	border-top:1.0pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	background:white;
	mso-pattern:auto none;
	white-space:nowrap;}
.xl3629490
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
	text-align:center-across;
	vertical-align:middle;
	border-top:1.0pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:none;
	border-left:none;
	background:white;
	mso-pattern:auto none;
	white-space:nowrap;}
.xl3729490
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
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl3829490
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
.xl3929490
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
	text-align:center-across;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:none;
	border-left:1.0pt solid windowtext;
	background:white;
	mso-pattern:auto none;
	white-space:nowrap;}
.xl4029490
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
	text-align:center-across;
	vertical-align:middle;
	background:white;
	mso-pattern:auto none;
	white-space:nowrap;}
.xl4129490
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
	text-align:center-across;
	vertical-align:middle;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:none;
	background:white;
	mso-pattern:auto none;
	white-space:nowrap;}
.xl4229490
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
	text-align:center-across;
	vertical-align:middle;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	background:white;
	mso-pattern:auto none;
	white-space:nowrap;}
.xl4329490
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
	text-align:center-across;
	vertical-align:middle;
	border-top:none;
	border-right:1.0pt solid windowtext;
	border-bottom:none;
	border-left:none;
	background:white;
	mso-pattern:auto none;
	white-space:nowrap;}
.xl4429490
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
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl4529490
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
	vertical-align:middle;
	border:1.0pt solid windowtext;
	background:white;
	mso-pattern:auto none;
	white-space:nowrap;}
.xl4629490
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:middle;
	border-top:1.0pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:none;
	background:white;
	mso-pattern:auto none;
	white-space:nowrap;}
.xl4729490
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
	border-bottom:1.0pt solid windowtext;
	border-left:1.0pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl4829490
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
	border-bottom:1.0pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl4929490
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
	border-bottom:1.0pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl5029490
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
	border-left:1.0pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl5129490
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
	border-top:none;
	border-right:1.0pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl5229490
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
	border-top:none;
	border-right:1.0pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl5329490
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
	border-top:none;
	border-right:1.0pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl5429490
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
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl5529490
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
	border-top:none;
	border-right:1.0pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:1.0pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl5629490
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
	vertical-align:middle;
	border-top:1.0pt solid windowtext;
	border-right:none;
	border-bottom:1.0pt solid windowtext;
	border-left:1.0pt solid windowtext;
	background:white;
	mso-pattern:auto none;
	white-space:nowrap;}
.xl5729490
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
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
	border-right:1.0pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:none;
	background:white;
	mso-pattern:auto none;
	white-space:nowrap;}
.xl5829490
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
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
	border-right:none;
	border-bottom:1.0pt solid windowtext;
	border-left:none;
	background:white;
	mso-pattern:auto none;
	white-space:nowrap;}
.xl5929490
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
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
	background:white;
	mso-pattern:auto none;
	white-space:nowrap;}
.xl6029490
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
	border-right:1.0pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl6129490
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
	vertical-align:middle;
	border-top:none;
	border-right:1.0pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:1.0pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl6229490
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
	vertical-align:middle;
	border-top:none;
	border-right:1.0pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:1.0pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl6329490
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
	border-top:none;
	border-right:1.0pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl6429490
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
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl6529490
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
	border-right:none;
	border-bottom:1.0pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl6629490
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
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl6729490
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
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl6829490
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
	border-right:1.0pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl6929490
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
	border-top:none;
	border-right:1.0pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl7029490
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
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl7129490
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
	border-top:none;
	border-right:none;
	border-bottom:1.0pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl7229490
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
.xl7329490
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
	mso-number-format:"mmm\\-yy";
	text-align:general;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl7429490
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
	mso-number-format:"mmm\\-yy";
	text-align:general;
	vertical-align:bottom;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl7529490
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
	mso-pattern:auto none;
	white-space:nowrap;}
.xl7629490
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
.xl7729490
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
	mso-pattern:auto none;
	white-space:nowrap;}
-->
</style>
<?
	include("function.php");
	$periode = isset($_REQUEST["periode"]) ? $_REQUEST["periode"] : "";
	$actype = isset($_REQUEST["actype"]) ? $_REQUEST["actype"] : "";

	$TE = connectimesysTE();
	$FH = queryFH12($periode,$actype,12);
	$bulan = array_reverse(array_keys($FH));
	$FC = queryFC12($periode,$actype,12);
	$fleet = fleet($periode,$actype);
	$fleet = $fleet[$periode];
	$reg = reg($actype);//die(print_r($reg));
	//$FHlastyear = queryFH12((substr($periode,0,4)-1)."-12",$actype);die(print_r($FHlastyear));
	//$FClastyear = queryFC12((substr($periode,0,4)-1)."-12",$actype);
	
	//$connectAMS = connectimesys('mcdr');
	$cumulativeFH = cumulativeFH($periode,$actype);
	$cumulativeFH12 = cumulativeFH12((substr($periode,0,4)-1)."-01",(substr($periode,0,4)-1)."-12",$actype);
	//die(print_r($cumulativeFH12));
	$cumulativeFC = cumulativeFC($periode,$actype);
	$cumulativeFC12 = cumulativeFC12((substr($periode,0,4)-1)."-01",(substr($periode,0,4)-1)."-12",$actype);//die($cumulativeFC12);

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

<div id="Cumulative Flight Hours0408_29490" align=center x:publishsource="Excel">

<table x:str border=0 cellpadding=0 cellspacing=0 width=1072 class=xl3829490
 style='border-collapse:collapse;table-layout:fixed;width:810pt'>
 <col class=xl3829490 width=75 style='mso-width-source:userset;mso-width-alt:
 2742;width:56pt'>
 <col class=xl3829490 width=61 style='mso-width-source:userset;mso-width-alt:
 2230;width:46pt'>
 <col class=xl3829490 width=62 span=12 style='mso-width-source:userset;
 mso-width-alt:2267;width:47pt'>
 <col class=xl3829490 width=64 span=3 style='width:48pt'>
 <tr height=21 style='height:15.75pt'>
  <td height=21 colspan=14 class=xl3229490 align=center width=508
  style='height:15.75pt;border-right:.5pt solid black;width:384pt'>CUMULATIVE
  FLIGHT HOURS AND TAKE-OFF <?= substr($periode,0,4)?></td>
  <td class=xl3729490 width=64 style='width:48pt'></td>
  <td class=xl3829490 width=64 style='width:48pt'></td>
  <td class=xl3829490 width=64 style='width:48pt'></td>
 </tr>
 <tr height=22 style='height:16.5pt'>
  <td height=22 colspan=14 class=xl3929490 align=center style='height:16.5pt;
  border-right:.5pt solid black'><?= (($actype == "A330-300") ? "AIRBUS" : "BOEING")?> <?= $actype?></td>
  <td class=xl4429490></td>
  <td class=xl3829490></td>
  <td class=xl3829490></td>
 </tr>
 <tr height=18 style='height:13.5pt'>
  <td height=18 class=xl4529490 style='height:13.5pt'>FLIGHT HOU<span
  style='display:none'>RS</span></td>
  <td class=xl4629490>&nbsp;</td>
  <td colspan=12 class=xl7529490 style='border-right:1.0pt solid black;
  border-left:none'><?= (substr($periode,0,4) - 1)?> / <?= substr($periode,0,4)?></td>
  <td class=xl4429490></td>
  <td class=xl3829490></td>
  <td class=xl3829490></td>
 </tr>
 <tr height=18 style='height:13.5pt'>
  <td height=18 class=xl4729490 style='height:13.5pt'><span
  style='mso-spacerun:yes'> </span>A/C REG</td>
  <td class=xl4829490 style='border-top:none'>YEAR</td>
<?
		foreach ($bulan as $key => $value){
?>
  <td class=xl6529490 style='border-top:none'><?= bulan($value)?></td>
<?
		}
?>
  
  <td class=xl1529490></td>
  <td class=xl7429490></td>
  <td class=xl3829490></td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl5029490 style='height:12.75pt' x:str="">&nbsp;</td>
  <td class=xl5129490 x:num><?= (substr($periode,0,4) - 1)?></td>
  <td class=xl6629490>&nbsp;</td>
  <td class=xl6629490>&nbsp;</td>
  <td class=xl6629490>&nbsp;</td>
  <td class=xl6629490>&nbsp;</td>
  <td class=xl6629490>&nbsp;</td>
  <td class=xl6629490>&nbsp;</td>
  <td class=xl6629490>&nbsp;</td>
  <td class=xl6629490>&nbsp;</td>
  <td class=xl6629490>&nbsp;</td>
  <td class=xl6629490>&nbsp;</td>
  <td class=xl6629490>&nbsp;</td>
  <td class=xl5229490>&nbsp;</td>
  <td class=xl3729490></td>
  <td class=xl3829490></td>
  <td class=xl3829490></td>
 </tr>

<?
		for ($i=0;$i<count($reg);$i++){
			if ($i<>0){
				$regtampil[$i] = substr($reg[$i],3,3);
			} else {
				$regtampil[$i] = $reg[$i];
			}
?>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl5029490 style='height:12.75pt'><?= $regtampil[$i]?></td>

  <td class=xl5129490 x:num><?= (isset($cumulativeFH12[$reg[$i]]) ? $cumulativeFH12[$reg[$i]] : 0)?></td>
  <?
		foreach ($bulan as $key => $value){
		$cumulativeFH[$reg[$i]][$value] = isset($cumulativeFH[$reg[$i]][$value]) ? $cumulativeFH[$reg[$i]][$value] : 0;
  ?>
  <td class=xl6629490 x:num><?= $cumulativeFH[$reg[$i]][$value]?></td>
  <?
		}
  ?>
  <td class=xl1529490></td>
  <td class=xl5429490></td>
  <td class=xl3829490></td>
 </tr>
<?
  }
?>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl5529490 style='height:12.75pt'>&nbsp;</td>
  <td class=xl5329490>&nbsp;</td>
  <td class=xl6629490>&nbsp;</td>
  <td class=xl6629490>&nbsp;</td>
  <td class=xl6629490>&nbsp;</td>
  <td class=xl6629490>&nbsp;</td>
  <td class=xl6629490>&nbsp;</td>
  <td class=xl6629490>&nbsp;</td>
  <td class=xl6629490>&nbsp;</td>
  <td class=xl6629490>&nbsp;</td>
  <td class=xl6629490>&nbsp;</td>
  <td class=xl6629490>&nbsp;</td>
  <td class=xl6629490>&nbsp;</td>
  <td class=xl5229490>&nbsp;</td>
  <td class=xl5429490></td>
  <td class=xl5429490></td>
  <td class=xl3829490></td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl5529490 style='height:12.75pt'>&nbsp;</td>
  <td class=xl5329490>&nbsp;</td>
  <td class=xl6629490>&nbsp;</td>
  <td class=xl6629490>&nbsp;</td>
  <td class=xl6629490>&nbsp;</td>
  <td class=xl6629490>&nbsp;</td>
  <td class=xl6629490>&nbsp;</td>
  <td class=xl6629490>&nbsp;</td>
  <td class=xl6629490>&nbsp;</td>
  <td class=xl6629490>&nbsp;</td>
  <td class=xl6629490>&nbsp;</td>
  <td class=xl6629490>&nbsp;</td>
  <td class=xl6629490>&nbsp;</td>
  <td class=xl5229490>&nbsp;</td>
  <td class=xl5429490></td>
  <td class=xl5429490></td>
  <td class=xl3829490></td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl5529490 style='height:12.75pt'>&nbsp;</td>
  <td class=xl5329490>&nbsp;</td>
  <td class=xl6629490>&nbsp;</td>
  <td class=xl6629490>&nbsp;</td>
  <td class=xl6629490>&nbsp;</td>
  <td class=xl6629490>&nbsp;</td>
  <td class=xl6629490>&nbsp;</td>
  <td class=xl6629490>&nbsp;</td>
  <td class=xl6629490>&nbsp;</td>
  <td class=xl6629490>&nbsp;</td>
  <td class=xl6629490>&nbsp;</td>
  <td class=xl6629490>&nbsp;</td>
  <td class=xl6629490>&nbsp;</td>
  <td class=xl5229490>&nbsp;</td>
  <td class=xl5429490></td>
  <td class=xl5429490></td>
  <td class=xl3829490></td>
 </tr>
 <tr height=18 style='height:13.5pt'>
  <td height=18 class=xl5529490 style='height:13.5pt'>&nbsp;</td>
  <td class=xl5329490>&nbsp;</td>
  <td class=xl6629490>&nbsp;</td>
  <td class=xl6629490>&nbsp;</td>
  <td class=xl6629490>&nbsp;</td>
  <td class=xl6629490>&nbsp;</td>
  <td class=xl6629490>&nbsp;</td>
  <td class=xl6629490>&nbsp;</td>
  <td class=xl6629490>&nbsp;</td>
  <td class=xl6629490>&nbsp;</td>
  <td class=xl6629490>&nbsp;</td>
  <td class=xl6629490>&nbsp;</td>
  <td class=xl6629490>&nbsp;</td>
  <td class=xl5229490>&nbsp;</td>
  <td class=xl5429490></td>
  <td class=xl5429490></td>
  <td class=xl3829490></td>
 </tr>
 <tr height=18 style='height:13.5pt'>
  <td height=18 class=xl5629490 style='height:13.5pt'>TAKE- OFF</td>
  <td class=xl5729490>&nbsp;</td>
  <td class=xl5829490>&nbsp;</td>
  <td class=xl5829490>&nbsp;</td>
  <td class=xl5829490>&nbsp;</td>
  <td class=xl5829490>&nbsp;</td>
  <td class=xl5829490>&nbsp;</td>
  <td class=xl5829490>&nbsp;</td>
  <td class=xl5829490>&nbsp;</td>
  <td class=xl5829490>&nbsp;</td>
  <td class=xl5829490>&nbsp;</td>
  <td class=xl5829490>&nbsp;</td>
  <td class=xl5829490>&nbsp;</td>
  <td class=xl5729490>&nbsp;</td>
  <td class=xl5429490></td>
  <td class=xl5929490>&nbsp;</td>
  <td class=xl3829490></td>
 </tr>

 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl5029490 style='height:12.75pt'>&nbsp;</td>
  <td class=xl5329490>&nbsp;</td>
  <td class=xl7029490 style='border-top:none'>&nbsp;</td>
  <td class=xl7029490 style='border-top:none'>&nbsp;</td>
  <td class=xl7029490 style='border-top:none'>&nbsp;</td>
  <td class=xl7029490 style='border-top:none'>&nbsp;</td>
  <td class=xl7029490 style='border-top:none'>&nbsp;</td>
  <td class=xl7029490 style='border-top:none'>&nbsp;</td>
  <td class=xl7029490 style='border-top:none'>&nbsp;</td>
  <td class=xl7029490 style='border-top:none'>&nbsp;</td>
  <td class=xl7029490 style='border-top:none'>&nbsp;</td>
  <td class=xl7029490 style='border-top:none'>&nbsp;</td>
  <td class=xl7029490 style='border-top:none'>&nbsp;</td>
  <td class=xl6829490 style='border-top:none'>&nbsp;</td>
  <td class=xl5429490></td>
  <td class=xl5429490></td>
  <td class=xl3829490></td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl5529490 style='height:12.75pt'>&nbsp;</td>
  <td class=xl5329490>&nbsp;</td>
  <td class=xl6629490>&nbsp;</td>
  <td class=xl6629490>&nbsp;</td>
  <td class=xl6629490>&nbsp;</td>
  <td class=xl6629490>&nbsp;</td>
  <td class=xl6629490>&nbsp;</td>
  <td class=xl6629490>&nbsp;</td>
  <td class=xl6629490>&nbsp;</td>
  <td class=xl6629490>&nbsp;</td>
  <td class=xl6629490>&nbsp;</td>
  <td class=xl6629490>&nbsp;</td>
  <td class=xl6629490>&nbsp;</td>
  <td class=xl5229490>&nbsp;</td>
  <td class=xl5429490></td>
  <td class=xl5429490></td>
  <td class=xl3829490></td>
 </tr>
<?
	for ($i=0;$i<count($reg);$i++){
		if ($i<>0){
				$regtampil[$i] = substr($reg[$i],3,3);
			} else {
				$regtampil[$i] = $reg[$i];
			}
?>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl5029490 style='height:12.75pt'><?= $regtampil[$i]?></td>
  <td class=xl5329490 x:num><?= (isset($cumulativeFC12[$reg[$i]]) ? $cumulativeFC12[$reg[$i]] : 0)?></td>
<?
		foreach ($bulan as $key => $value){
		$cumulativeFC[$reg[$i]][$value] = isset($cumulativeFC[$reg[$i]][$value]) ? $cumulativeFC[$reg[$i]][$value] : 0;
?>
  <td class=xl6729490 style='border-top:none' x:num><?= $cumulativeFC[$reg[$i]][$value]?></td>
  
  <?
			}
  ?>
  <td class=xl1529490></td>
  <td class=xl5429490></td>
  <td class=xl3829490></td>
 </tr>
<?
	}
?>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl6129490 style='height:12.75pt'>&nbsp;</td>
  <td class=xl5329490>&nbsp;</td>
  <td class=xl6629490>&nbsp;</td>
  <td class=xl6629490>&nbsp;</td>
  <td class=xl6629490>&nbsp;</td>
  <td class=xl6629490>&nbsp;</td>
  <td class=xl6629490>&nbsp;</td>
  <td class=xl6629490>&nbsp;</td>
  <td class=xl6629490>&nbsp;</td>
  <td class=xl6629490>&nbsp;</td>
  <td class=xl6629490>&nbsp;</td>
  <td class=xl6629490>&nbsp;</td>
  <td class=xl6629490>&nbsp;</td>
  <td class=xl5229490>&nbsp;</td>
  <td class=xl5429490></td>
  <td class=xl5429490></td>
  <td class=xl3829490></td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl6129490 style='height:12.75pt'>&nbsp;</td>
  <td class=xl5329490>&nbsp;</td>
  <td class=xl6629490>&nbsp;</td>
  <td class=xl6629490>&nbsp;</td>
  <td class=xl6629490>&nbsp;</td>
  <td class=xl6629490>&nbsp;</td>
  <td class=xl6629490>&nbsp;</td>
  <td class=xl6629490>&nbsp;</td>
  <td class=xl6629490>&nbsp;</td>
  <td class=xl6629490>&nbsp;</td>
  <td class=xl6629490>&nbsp;</td>
  <td class=xl6629490>&nbsp;</td>
  <td class=xl6629490>&nbsp;</td>
  <td class=xl5229490>&nbsp;</td>
  <td class=xl5429490></td>
  <td class=xl3829490></td>
  <td class=xl3829490></td>
 </tr>
 <tr height=18 style='height:13.5pt'>
  <td height=18 class=xl6229490 style='height:13.5pt'>&nbsp;</td>
  <td class=xl6329490>&nbsp;</td>
  <td class=xl7129490>&nbsp;</td>
  <td class=xl7129490>&nbsp;</td>
  <td class=xl7129490>&nbsp;</td>
  <td class=xl7129490>&nbsp;</td>
  <td class=xl7129490>&nbsp;</td>
  <td class=xl7129490>&nbsp;</td>
  <td class=xl7129490>&nbsp;</td>
  <td class=xl7129490>&nbsp;</td>
  <td class=xl7129490>&nbsp;</td>
  <td class=xl7129490>&nbsp;</td>
  <td class=xl7129490>&nbsp;</td>
  <td class=xl6929490>&nbsp;</td>
  <td class=xl5429490></td>
  <td class=xl3829490></td>
  <td class=xl3829490></td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl3729490 style='height:12.75pt'></td>
  <td class=xl3729490></td>
  <td class=xl3729490></td>
  <td class=xl3729490></td>
  <td class=xl3729490></td>
  <td class=xl3729490></td>
  <td class=xl3729490></td>
  <td class=xl6429490></td>
  <td class=xl6429490></td>
  <td class=xl6429490></td>
  <td class=xl6429490></td>
  <td class=xl6429490></td>
  <td class=xl6429490></td>
  <td class=xl6429490 x:str>Page: <?=$page?>6</td>
  <td class=xl3829490></td>
  <td class=xl3829490></td>
  <td class=xl3829490></td>
 </tr>
 <![if supportMisalignedColumns]>
 <tr height=0 style='display:none'>
  <td width=75 style='width:56pt'></td>
  <td width=61 style='width:46pt'></td>
  <td width=62 style='width:47pt'></td>
  <td width=62 style='width:47pt'></td>
  <td width=62 style='width:47pt'></td>
  <td width=62 style='width:47pt'></td>
  <td width=62 style='width:47pt'></td>
  <td width=62 style='width:47pt'></td>
  <td width=62 style='width:47pt'></td>
  <td width=62 style='width:47pt'></td>
  <td width=62 style='width:47pt'></td>
  <td width=62 style='width:47pt'></td>
  <td width=62 style='width:47pt'></td>
  <td width=62 style='width:47pt'></td>
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
