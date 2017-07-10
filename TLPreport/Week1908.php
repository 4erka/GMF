<?
header("Content-Type: application/x-excel\n");
header("Pragma: no-cache"); 
header("Expires: 0");
header("Cache-Control:must-revalidate, post-check=0, pre-check=0");
header("content-disposition: attachment; filename=excel.xls");
?>
<html xmlns:v="urn:schemas-microsoft-com:vml"
xmlns:o="urn:schemas-microsoft-com:office:office"
xmlns:x="urn:schemas-microsoft-com:office:excel"
xmlns="http://www.w3.org/TR/REC-html40">
<?
  $periode = isset($_REQUEST["periode"]) ? $_REQUEST["periode"] : "";
  $actype = isset($_REQUEST["actype"]) ? $_REQUEST["actype"] : "";
?>
<head>
<meta http-equiv=Content-Type content="text/html; charset=windows-1252">
<meta name=ProgId content=Excel.Sheet>
<meta name=Generator content="Microsoft Excel 11">
<link rel=File-List href="Week1908_files/filelist.xml">
<!--[if !mso]>
<style>
v\:* {behavior:url(#default#VML);}
o\:* {behavior:url(#default#VML);}
x\:* {behavior:url(#default#VML);}
.shape {behavior:url(#default#VML);}
</style>
<![endif]-->
<style id="Week1908_18604_Styles">
<!--table
	{mso-displayed-decimal-separator:"\.";
	mso-displayed-thousand-separator:"\,";}
.font518604
	{color:windowtext;
	font-size:16.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;}
.xl2418604
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:12.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border-top:1.0pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:1.0pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl2518604
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:12.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border-top:1.0pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl2618604
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:12.0pt;
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
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl2718604
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:12.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border-top:1.0pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl2818604
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:12.0pt;
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
.xl2918604
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:12.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center-across;
	vertical-align:bottom;
	border-top:none;
	border-right:none;
	border-bottom:none;
	border-left:1.0pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl3018604
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:12.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center-across;
	vertical-align:bottom;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl3118604
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:12.0pt;
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
.xl3218604
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:12.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border-top:none;
	border-right:1.0pt solid windowtext;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl3318604
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:12.0pt;
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
	border-bottom:none;
	border-left:1.0pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl3418604
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:12.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border-top:none;
	border-right:none;
	border-bottom:none;
	border-left:1.0pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl3518604
	{padding:0px;
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
.xl3618604
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:12.0pt;
	font-weight:700;
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
.xl3718604
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:12.0pt;
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
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl3818604
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:12.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center-across;
	vertical-align:bottom;
	border-top:none;
	border-right:none;
	border-bottom:none;
	border-left:1.0pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl3918604
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:12.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center-across;
	vertical-align:bottom;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl4018604
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:12.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center-across;
	vertical-align:bottom;
	border-top:none;
	border-right:1.0pt solid windowtext;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl4118604
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
	text-align:general;
	vertical-align:bottom;
	border-top:none;
	border-right:none;
	border-bottom:none;
	border-left:1.0pt solid windowtext;
	background:white;
	mso-pattern:auto none;
	white-space:nowrap;}
.xl4218604
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
	text-align:general;
	vertical-align:bottom;
	background:white;
	mso-pattern:auto none;
	white-space:nowrap;}
.xl4318604
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
	text-align:general;
	vertical-align:bottom;
	border-top:none;
	border-right:1.0pt solid windowtext;
	border-bottom:none;
	border-left:none;
	background:white;
	mso-pattern:auto none;
	white-space:nowrap;}
.xl4418604
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:12.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:bottom;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl4518604
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:12.0pt;
	font-weight:700;
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
	border-left:1.0pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl4618604
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:12.0pt;
	font-weight:700;
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
.xl4718604
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:12.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM, sans-serif;
	mso-font-charset:0;
	mso-number-format:Fixed;
	text-align:center;
	vertical-align:bottom;
	border-top:none;
	border-right:none;
	border-bottom:1.0pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl4818604
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:12.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM, sans-serif;
	mso-font-charset:0;
	mso-number-format:Fixed;
	text-align:center;
	vertical-align:bottom;
	border-top:none;
	border-right:1.0pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl4918604
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:14.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center-across;
	vertical-align:bottom;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl5018604
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:12.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM, sans-serif;
	mso-font-charset:0;
	mso-number-format:Fixed;
	text-align:center;
	vertical-align:bottom;
	background:yellow;
	mso-pattern:auto none;
	white-space:nowrap;}
.xl5118604
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:12.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM, sans-serif;
	mso-font-charset:0;
	mso-number-format:0%;
	text-align:general;
	vertical-align:bottom;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl5218604
	{padding:0px;
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
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl5318604
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:12.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM, sans-serif;
	mso-font-charset:0;
	mso-number-format:0;
	text-align:center;
	vertical-align:bottom;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl5418604
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:12.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM, sans-serif;
	mso-font-charset:0;
	mso-number-format:0;
	text-align:center;
	vertical-align:bottom;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
-->
</style>
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

<div id="Week1908_18604" align=center x:publishsource="Excel">

<table x:str border=0 cellpadding=0 cellspacing=0 width=1055 class=xl2818604
 style='border-collapse:collapse;table-layout:fixed;width:795pt'>
 <col class=xl2818604 width=50 style='mso-width-source:userset;mso-width-alt:
 1828;width:38pt'>
 <col class=xl2818604 width=113 style='mso-width-source:userset;mso-width-alt:
 4132;width:85pt'>
 <col class=xl2818604 width=74 style='mso-width-source:userset;mso-width-alt:
 2706;width:56pt'>
 <col class=xl2818604 width=50 span=2 style='mso-width-source:userset;
 mso-width-alt:1828;width:38pt'>
 <col class=xl2818604 width=69 style='mso-width-source:userset;mso-width-alt:
 2523;width:52pt'>
 <col class=xl2818604 width=50 style='mso-width-source:userset;mso-width-alt:
 1828;width:38pt'>
 <col class=xl2818604 width=63 style='mso-width-source:userset;mso-width-alt:
 2304;width:47pt'>
 <col class=xl2818604 width=66 style='mso-width-source:userset;mso-width-alt:
 2413;width:50pt'>
 <col class=xl2818604 width=50 span=2 style='mso-width-source:userset;
 mso-width-alt:1828;width:38pt'>
 <col class=xl2818604 width=63 style='mso-width-source:userset;mso-width-alt:
 2304;width:47pt'>
 <col class=xl2818604 width=57 style='mso-width-source:userset;mso-width-alt:
 2084;width:43pt'>
 <col class=xl2818604 width=62 style='mso-width-source:userset;mso-width-alt:
 2267;width:47pt'>
 <col class=xl2818604 width=47 span=4 style='mso-width-source:userset;
 mso-width-alt:1718;width:35pt'>
 <tr height=20 style='mso-height-source:userset;height:15.0pt'>
  <td height=20 width=50 style='height:15.0pt;width:38pt' align=left
  valign=top><!--[if gte vml 1]><v:roundrect id="Text_x0020_2" o:spid="_x0000_s3075"
   style='position:absolute;margin-left:5.25pt;margin-top:8.25pt;width:216.75pt;
   height:49.5pt;z-index:3;mso-wrap-style:tight' arcsize="10923f" fillcolor="window [65]"
   strokecolor="black [8]" o:insetmode="auto">
   <v:fill color2="window [65]"/>
   <v:shadow on="t" color="black" obscured="t"/>
   <v:textbox>
    <div style='text-align:center'><font class="font518604">GA-OPERATION<br>
        B737-300</font></div>
   </v:textbox>
   <x:ClientData ObjectType="Text">
    <x:AutoFill>False</x:AutoFill>
    <x:AutoLine>False</x:AutoLine>
    <x:TextHAlign>Center</x:TextHAlign>
   </x:ClientData>
  </v:roundrect><![endif]--><![if !vml]><span style='mso-ignore:vglayout;
  position:absolute;z-index:3;margin-left:6px;margin-top:10px;width:293px;
  height:70px'><img width=293 height=70
  src="Week1908_files/Week1908_18604_image001.gif"
  alt="Rounded Rectangle: GA-OPERATION&#10;B737-300" v:shapes="Text_x0020_2"></span><![endif]><span
  style='mso-ignore:vglayout2'>
  <table cellpadding=0 cellspacing=0>
   <tr>
    <td height=20 class=xl2418604 width=50 style='height:15.0pt;width:38pt'><a
    name="RANGE!A1:N47">&nbsp;</a></td>
   </tr>
  </table>
  </span></td>
  <td class=xl2518604 width=113 style='width:85pt'>&nbsp;</td>
  <td class=xl2518604 width=74 style='width:56pt'>&nbsp;</td>
  <td class=xl2518604 width=50 style='width:38pt'>&nbsp;</td>
  <td class=xl2518604 width=50 style='width:38pt'>&nbsp;</td>
  <td width=69 style='width:52pt' align=left valign=top><!--[if gte vml 1]><v:shapetype
   id="_x0000_t75" coordsize="21600,21600" o:spt="75" o:preferrelative="t"
   path="m@4@5l@4@11@9@11@9@5xe" filled="f" stroked="f">
   <v:stroke joinstyle="miter"/>
   <v:formulas>
    <v:f eqn="if lineDrawn pixelLineWidth 0"/>
    <v:f eqn="sum @0 1 0"/>
    <v:f eqn="sum 0 0 @1"/>
    <v:f eqn="prod @2 1 2"/>
    <v:f eqn="prod @3 21600 pixelWidth"/>
    <v:f eqn="prod @3 21600 pixelHeight"/>
    <v:f eqn="sum @0 0 1"/>
    <v:f eqn="prod @6 1 2"/>
    <v:f eqn="prod @7 21600 pixelWidth"/>
    <v:f eqn="sum @8 21600 0"/>
    <v:f eqn="prod @7 21600 pixelHeight"/>
    <v:f eqn="sum @10 21600 0"/>
   </v:formulas>
   <v:path o:extrusionok="f" gradientshapeok="t" o:connecttype="rect"/>
   <o:lock v:ext="edit" aspectratio="t"/>
  </v:shapetype><v:shape id="Picture_x0020_4" o:spid="_x0000_s3076" type="#_x0000_t75"
   style='position:absolute;margin-left:11.25pt;margin-top:10.5pt;width:100.5pt;
   height:54.75pt;z-index:4' filled="t" fillcolor="window [65]" strokecolor="windowText [64]"
   strokeweight="3e-5mm" o:insetmode="auto">
   <v:imagedata src="Week1908_files/Week1908_18604_image002.emz" o:title=""/>
   <x:ClientData ObjectType="Pict">
    <x:SizeWithCells/>
    <x:AutoLine>False</x:AutoLine>
    <x:CF>Pict</x:CF>
    <x:AutoPict/>
   </x:ClientData>
  </v:shape><![endif]--><![if !vml]><span style='mso-ignore:vglayout;
  position:absolute;z-index:4;margin-left:15px;margin-top:14px;width:134px;
  height:73px'><img width=134 height=73
  src="Week1908_files/Week1908_18604_image003.gif" v:shapes="Picture_x0020_4"></span><![endif]><span
  style='mso-ignore:vglayout2'>
  <table cellpadding=0 cellspacing=0>
   <tr>
    <td height=20 class=xl2518604 width=69 style='height:15.0pt;width:52pt'>&nbsp;</td>
   </tr>
  </table>
  </span></td>
  <td class=xl2518604 width=50 style='width:38pt'>&nbsp;</td>
  <td class=xl2518604 width=63 style='width:47pt'>&nbsp;</td>
  <td class=xl2618604 colspan=4 width=229 style='width:173pt'>Week 19 / 5<span
  style='mso-spacerun:yes'>  </span>May<span style='mso-spacerun:yes'> 
  </span>- 11 May 2008</td>
  <td class=xl2518604 width=57 style='width:43pt'>&nbsp;</td>
  <td class=xl2718604 width=62 style='width:47pt'>&nbsp;</td>
  <td class=xl2818604 width=47 style='width:35pt'></td>
  <td class=xl2818604 width=47 style='width:35pt'></td>
  <td class=xl2818604 width=47 style='width:35pt'></td>
  <td class=xl2818604 width=47 style='width:35pt'></td>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td height=21 class=xl2918604 style='height:15.75pt'>&nbsp;</td>
  <td class=xl3018604></td>
  <td class=xl3018604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl3118604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl3218604>&nbsp;</td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td height=21 class=xl2918604 style='height:15.75pt'>&nbsp;</td>
  <td class=xl3018604></td>
  <td class=xl3018604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl3218604>&nbsp;</td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td height=21 class=xl3318604 style='height:15.75pt'>&nbsp;</td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl3218604>&nbsp;</td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td height=21 class=xl3318604 style='height:15.75pt'>&nbsp;</td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl3218604>&nbsp;</td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td height=21 class=xl3318604 style='height:15.75pt'>&nbsp;</td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604><span style='mso-spacerun:yes'> </span></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl3218604>&nbsp;</td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td height=21 class=xl3418604 colspan=3 style='height:15.75pt'
  x:str="Technical delays&gt; 15 Min. ">Technical delays&gt; 15 Min.<span
  style='mso-spacerun:yes'> </span></td>
  <td class=xl3118604></td>
  <td class=xl3118604 x:fmla="=&quot;:&quot; &amp; &quot;  &quot;&amp;RIGHT(&quot;0&quot;&amp;N41,2)">:<span
  style='mso-spacerun:yes'>  </span>04</td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604 colspan=3 x:str="Dispatch reliability ">Dispatch
  reliability<span style='mso-spacerun:yes'> </span></td>
  <td class=xl3518604>:</td>
  <td class=xl3618604 align=right x:num="99.307958477508649" x:fmla="=N51">99.31</td>
  <td class=xl3718604>%</td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td height=21 class=xl3418604 colspan=2 style='height:15.75pt'
  x:str="Technical cancellation ">Technical cancellation<span
  style='mso-spacerun:yes'> </span></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604 x:fmla="=&quot;:&quot; &amp; &quot;  &quot;&amp;RIGHT(&quot;0&quot;&amp;N42,2)">:<span
  style='mso-spacerun:yes'>  </span>00</td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604 x:str="Target ">Target<span
  style='mso-spacerun:yes'> </span></td>
  <td class=xl2818604></td>
  <td class=xl3118604></td>
  <td class=xl3518604>:</td>
  <td class=xl3618604 align=right x:num x:fmla="=N52">99.10</td>
  <td class=xl3718604>%</td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td height=21 class=xl3418604 colspan=2 style='height:15.75pt'
  x:str="Technical incident ">Technical incident<span
  style='mso-spacerun:yes'> </span></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604>:<span style='mso-spacerun:yes'>  </span>00</td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl2818604></td>
  <td class=xl3118604></td>
  <td class=xl3518604></td>
  <td class=xl3618604></td>
  <td class=xl3718604>&nbsp;</td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td height=21 class=xl3418604 style='height:15.75pt'>&nbsp;</td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3718604>&nbsp;</td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td height=21 class=xl3418604 style='height:15.75pt'>&nbsp;</td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl5118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3718604>&nbsp;</td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
 </tr>
 <tr height=27 style='height:20.25pt'>
  <td height=27 colspan=14 class=xl3818604 align=center style='height:20.25pt;
  border-right:1.0pt solid black'>Technical Delay Analysis</td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
 </tr>
 <tr height=27 style='height:20.25pt'>
  <td height=27 colspan=14 class=xl3818604 align=center style='height:20.25pt;
  border-right:1.0pt solid black'>Significant Event</td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td height=21 class=xl3418604 style='height:15.75pt'>&nbsp;</td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3718604>&nbsp;</td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
 </tr>
 <tr height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 style='height:18.0pt' align=left valign=top><!--[if gte vml 1]><v:roundrect
   id="Text_x0020_5" o:spid="_x0000_s3074" style='position:absolute;
   margin-left:3pt;margin-top:4.5pt;width:646.5pt;height:17.25pt;z-index:2;
   mso-wrap-style:tight' arcsize="10923f" fillcolor="window [65]"
   strokecolor="windowText [64]" o:insetmode="auto">
   <v:fill color2="window [65]"/>
   <v:shadow on="t" color="black" obscured="t"/>
   <v:textbox>
    <div style='text-align:left'></div>
   </v:textbox>
   <x:ClientData ObjectType="Text">
    <x:AutoFill>False</x:AutoFill>
   </x:ClientData>
  </v:roundrect><![endif]--><![if !vml]><span style='mso-ignore:vglayout;
  position:absolute;z-index:2;margin-left:3px;margin-top:5px;width:866px;
  height:27px'><img width=866 height=27
  src="Week1908_files/Week1908_18604_image004.gif" v:shapes="Text_x0020_5"></span><![endif]><span
  style='mso-ignore:vglayout2'>
  <table cellpadding=0 cellspacing=0>
   <tr>
    <td height=24 class=xl4118604 width=50 style='height:18.0pt;width:38pt'>Reg</td>
   </tr>
  </table>
  </span></td>
  <td class=xl4218604>Event</td>
  <td class=xl4218604>Problem</td>
  <td class=xl4218604>&nbsp;</td>
  <td class=xl4218604>&nbsp;</td>
  <td class=xl4218604>Cause</td>
  <td class=xl4218604>&nbsp;</td>
  <td class=xl4218604>&nbsp;</td>
  <td class=xl4218604 colspan=3>Corrective Action</td>
  <td class=xl4218604>&nbsp;</td>
  <td class=xl4218604>&nbsp;</td>
  <td class=xl4318604>&nbsp;</td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td height=21 class=xl3418604 style='height:15.75pt'>&nbsp;</td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3718604>&nbsp;</td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td height=21 class=xl3418604 style='height:15.75pt'>&nbsp;</td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3718604>&nbsp;</td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td height=21 style='height:15.75pt' align=left valign=top><!--[if gte vml 1]><v:shapetype
   id="_x0000_t201" coordsize="21600,21600" o:spt="201" path="m,l,21600r21600,l21600,xe">
   <v:stroke joinstyle="miter"/>
   <v:path shadowok="f" o:extrusionok="f" strokeok="f" fillok="f"
    o:connecttype="rect"/>
   <o:lock v:ext="edit" shapetype="t"/>
  </v:shapetype><v:shape id="_x0000_s3073" type="#_x0000_t201" style='position:absolute;
   margin-left:11.25pt;margin-top:8.25pt;width:627pt;height:322.5pt;z-index:1'
   fillcolor="window [78]" strokecolor="windowText [77]" o:insetmode="auto">
   <v:fill color2="windowText [77]"/>
   <o:lock v:ext="edit" rotation="t" text="t"/>
  </v:shape><![endif]--><![if !vml]><span style='mso-ignore:vglayout;
  position:absolute;z-index:1;margin-left:15px;margin-top:11px;width:837px;
  height:431px'><![endif]><img width=837 height=431
  src="tesgrafik.php?actype=<?= $actype?>&periode=<?= $periode?>" v:shapes="_x0000_s3073"
  class=shape v:dpi="96"><![if !vml]></span><![endif]><span style='mso-ignore:
  vglayout2'>
  <table cellpadding=0 cellspacing=0>
   <tr>
    <td height=21 class=xl3418604 width=50 style='height:15.75pt;width:38pt'>&nbsp;</td>
   </tr>
  </table>
  </span></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3718604>&nbsp;</td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td height=21 class=xl3418604 style='height:15.75pt'>&nbsp;</td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3718604>&nbsp;</td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td height=21 class=xl3418604 style='height:15.75pt'>&nbsp;</td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3718604>&nbsp;</td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td height=21 class=xl3418604 style='height:15.75pt'>&nbsp;</td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3718604>&nbsp;</td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td height=21 class=xl3418604 style='height:15.75pt'>&nbsp;</td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3718604>&nbsp;</td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td height=21 class=xl3418604 style='height:15.75pt'>&nbsp;</td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3718604>&nbsp;</td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td height=21 class=xl3418604 style='height:15.75pt'>&nbsp;</td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3718604>&nbsp;</td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td height=21 class=xl3418604 style='height:15.75pt'>&nbsp;</td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3718604>&nbsp;</td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td height=21 class=xl3418604 style='height:15.75pt'>&nbsp;</td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3718604>&nbsp;</td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td height=21 class=xl3418604 style='height:15.75pt'>&nbsp;</td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3718604>&nbsp;</td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td height=21 class=xl3418604 style='height:15.75pt'>&nbsp;</td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3718604>&nbsp;</td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td height=21 class=xl3418604 style='height:15.75pt'>&nbsp;</td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3718604>&nbsp;</td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td height=21 class=xl3418604 style='height:15.75pt'>&nbsp;</td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3718604>&nbsp;</td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td height=21 class=xl3418604 style='height:15.75pt'>&nbsp;</td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3718604>&nbsp;</td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td height=21 class=xl3418604 style='height:15.75pt'>&nbsp;</td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3718604>&nbsp;</td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td height=21 class=xl3418604 style='height:15.75pt'>&nbsp;</td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3718604>&nbsp;</td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td height=21 class=xl3418604 style='height:15.75pt'>&nbsp;</td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3718604>&nbsp;</td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td height=21 class=xl3418604 style='height:15.75pt'>&nbsp;</td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3718604>&nbsp;</td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td height=21 class=xl3418604 style='height:15.75pt'>&nbsp;</td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3718604>&nbsp;</td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td height=21 class=xl3418604 style='height:15.75pt'>&nbsp;</td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3718604>&nbsp;</td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td height=21 class=xl3418604 style='height:15.75pt'>&nbsp;</td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3718604>&nbsp;</td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td height=21 class=xl3418604 style='height:15.75pt'>&nbsp;</td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3718604>&nbsp;</td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td height=21 class=xl3418604 colspan=2 style='height:15.75pt'>Weeks</td>
  <td class=xl3518604 x:num>8</td>
  <td class=xl3518604 x:num>9</td>
  <td class=xl3518604 x:num>10</td>
  <td class=xl3518604 x:num>11</td>
  <td class=xl3518604 x:num>12</td>
  <td class=xl3518604 x:num>13</td>
  <td class=xl3518604 x:num>14</td>
  <td class=xl3518604 x:num>15</td>
  <td class=xl3518604 x:num>16</td>
  <td class=xl3518604 x:num>17</td>
  <td class=xl3518604 x:num>18</td>
  <td class=xl5218604 x:num>19</td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td height=21 class=xl3418604 style='height:15.75pt'>D</td>
  <td class=xl3118604></td>
  <td class=xl3518604 x:num>0</td>
  <td class=xl3518604 x:num>1</td>
  <td class=xl3518604 x:num>1</td>
  <td class=xl3518604 x:num>3</td>
  <td class=xl3518604 x:num>5</td>
  <td class=xl3518604 x:num>2</td>
  <td class=xl3518604 x:num>3</td>
  <td class=xl3518604 x:num>4</td>
  <td class=xl3518604 x:num>11</td>
  <td class=xl3518604 x:num>7</td>
  <td class=xl3518604 x:num>4</td>
  <td class=xl5218604 x:num>4</td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td height=21 class=xl3418604 style='height:15.75pt'>C</td>
  <td class=xl3118604></td>
  <td class=xl3518604 x:num>0</td>
  <td class=xl3518604 x:num>0</td>
  <td class=xl3518604 x:num>0</td>
  <td class=xl3518604 x:num>0</td>
  <td class=xl3518604 x:num>0</td>
  <td class=xl3518604 x:num>0</td>
  <td class=xl3518604 x:num>0</td>
  <td class=xl3518604 x:num>0</td>
  <td class=xl3518604 x:num>0</td>
  <td class=xl3518604 x:num>0</td>
  <td class=xl3518604 x:num>0</td>
  <td class=xl5218604 x:num>0</td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td height=21 class=xl3418604 style='height:15.75pt' x:str="D &amp; C  ">D
  &amp; C<span style='mso-spacerun:yes'>  </span></td>
  <td class=xl3118604>Total</td>
  <td class=xl3518604 x:num>0</td>
  <td class=xl3518604 x:num>1</td>
  <td class=xl3518604 x:num>1</td>
  <td class=xl3518604 x:num>3</td>
  <td class=xl3518604 x:num>5</td>
  <td class=xl3518604 x:num>2</td>
  <td class=xl3518604 x:num>3</td>
  <td class=xl3518604 x:num>4</td>
  <td class=xl3518604 x:num>11</td>
  <td class=xl3518604 x:num>7</td>
  <td class=xl3518604 x:num>4</td>
  <td class=xl5218604 x:num>4</td>
  <td class=xl4418604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td height=21 class=xl3418604 style='height:15.75pt' x:str="D &amp; C ">D
  &amp; C<span style='mso-spacerun:yes'> </span></td>
  <td class=xl3118604 x:str="Cgk ">Cgk<span style='mso-spacerun:yes'> </span></td>
  <td class=xl3518604 x:num>0</td>
  <td class=xl3518604 x:num>1</td>
  <td class=xl3518604 x:num>0</td>
  <td class=xl3518604 x:num>2</td>
  <td class=xl3518604 x:num>5</td>
  <td class=xl3518604 x:num>2</td>
  <td class=xl3518604 x:num>3</td>
  <td class=xl3518604 x:num>3</td>
  <td class=xl3518604 x:num>9</td>
  <td class=xl3518604 x:num>6</td>
  <td class=xl3518604 x:num>3</td>
  <td class=xl5218604 x:num>2</td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td height=21 class=xl3418604 colspan=2 style='height:15.75pt'>Revenue T/O</td>
  <td class=xl5418604 x:num>449</td>
  <td class=xl5418604 x:num>426</td>
  <td class=xl5418604 x:num>450</td>
  <td class=xl5418604 x:num>447</td>
  <td class=xl5418604 x:num>517</td>
  <td class=xl5418604 x:num>548</td>
  <td class=xl5418604 x:num>563</td>
  <td class=xl5418604 x:num>603</td>
  <td class=xl5418604 x:num>572</td>
  <td class=xl5418604 x:num>574</td>
  <td class=xl5418604 x:num>562</td>
  <td class=xl5318604 x:num>578</td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td height=21 class=xl3418604 colspan=2 style='height:15.75pt'>Revenue F/H</td>
  <td class=xl5418604 x:num>641</td>
  <td class=xl5418604 x:num>602</td>
  <td class=xl5418604 x:num>622</td>
  <td class=xl5418604 x:num>629</td>
  <td class=xl5418604 x:num>716</td>
  <td class=xl5418604 x:num>756</td>
  <td class=xl5418604 x:num>704</td>
  <td class=xl5418604 x:num>773</td>
  <td class=xl5418604 x:num>742</td>
  <td class=xl5418604 x:num>737</td>
  <td class=xl5418604 x:num>731</td>
  <td class=xl5318604 x:num>746</td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
 </tr>
 <tr height=22 style='height:16.5pt'>
  <td height=22 class=xl4518604 colspan=2 style='height:16.5pt'>Dispatch Rel.</td>
  <td class=xl4718604 x:num x:fmla="=(C45-C43)/C45*100">100.00</td>
  <td class=xl4718604 x:num="99.765258215962433" x:fmla="=(D45-D43)/D45*100">99.77</td>
  <td class=xl4718604 x:num="99.777777777777771" x:fmla="=(E45-E43)/E45*100">99.78</td>
  <td class=xl4718604 x:num="99.328859060402692" x:fmla="=(F45-F43)/F45*100">99.33</td>
  <td class=xl4718604 x:num="99.032882011605423" x:fmla="=(G45-G43)/G45*100">99.03</td>
  <td class=xl4718604 x:num="99.635036496350367" x:fmla="=(H45-H43)/H45*100">99.64</td>
  <td class=xl4718604 x:num="99.46714031971581" x:fmla="=(I45-I43)/I45*100">99.47</td>
  <td class=xl4718604 x:num="99.336650082918737" x:fmla="=(J45-J43)/J45*100">99.34</td>
  <td class=xl4718604 x:num="98.076923076923066" x:fmla="=(K45-K43)/K45*100">98.08</td>
  <td class=xl4718604 x:num="98.780487804878049" x:fmla="=(L45-L43)/L45*100">98.78</td>
  <td class=xl4718604 x:num="99.288256227758012" x:fmla="=(M45-M43)/M45*100">99.29</td>
  <td class=xl4818604 x:num="99.307958477508649" x:fmla="=(N45-N43)/N45*100">99.31</td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td height=21 class=xl3118604 style='height:15.75pt'></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td height=21 class=xl3118604 style='height:15.75pt'></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl3118604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td height=21 class=xl2818604 style='height:15.75pt'></td>
  <td class=xl2818604></td>
  <td class=xl3518604 x:num x:fmla="=C40">8</td>
  <td class=xl3518604 x:num x:fmla="=D40">9</td>
  <td class=xl3518604 x:num x:fmla="=E40">10</td>
  <td class=xl3518604 x:num x:fmla="=F40">11</td>
  <td class=xl3518604 x:num x:fmla="=G40">12</td>
  <td class=xl3518604 x:num x:fmla="=H40">13</td>
  <td class=xl3518604 x:num x:fmla="=I40">14</td>
  <td class=xl3518604 x:num x:fmla="=J40">15</td>
  <td class=xl3518604 x:num x:fmla="=K40">16</td>
  <td class=xl3518604 x:num x:fmla="=L40">17</td>
  <td class=xl3518604 x:num x:fmla="=M40">18</td>
  <td class=xl3518604 x:num x:fmla="=N40">19</td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
 </tr>
 <tr height=22 style='height:16.5pt'>
  <td height=22 class=xl2818604 style='height:16.5pt'></td>
  <td class=xl3118604>Dispatch Rel.</td>
  <td class=xl4718604 x:num x:fmla="=C47">100.00</td>
  <td class=xl4718604 x:num="99.765258215962433" x:fmla="=D47">99.77</td>
  <td class=xl4718604 x:num="99.777777777777771" x:fmla="=E47">99.78</td>
  <td class=xl4718604 x:num="99.328859060402692" x:fmla="=F47">99.33</td>
  <td class=xl4718604 x:num="99.032882011605423" x:fmla="=G47">99.03</td>
  <td class=xl4718604 x:num="99.635036496350367" x:fmla="=H47">99.64</td>
  <td class=xl4718604 x:num="99.46714031971581" x:fmla="=I47">99.47</td>
  <td class=xl4718604 x:num="99.336650082918737" x:fmla="=J47">99.34</td>
  <td class=xl4718604 x:num="98.076923076923066" x:fmla="=K47">98.08</td>
  <td class=xl4718604 x:num="98.780487804878049" x:fmla="=L47">98.78</td>
  <td class=xl4718604 x:num="99.288256227758012" x:fmla="=M47">99.29</td>
  <td class=xl4718604 x:num="99.307958477508649" x:fmla="=N47">99.31</td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td height=21 class=xl2818604 style='height:15.75pt'></td>
  <td class=xl3118604>Target</td>
  <td class=xl5018604 x:num>99.10</td>
  <td class=xl5018604 x:num>99.10</td>
  <td class=xl5018604 x:num>99.10</td>
  <td class=xl5018604 x:num>99.10</td>
  <td class=xl5018604 x:num>99.10</td>
  <td class=xl5018604 x:num>99.10</td>
  <td class=xl5018604 x:num>99.10</td>
  <td class=xl5018604 x:num>99.10</td>
  <td class=xl5018604 x:num>99.10</td>
  <td class=xl5018604 x:num>99.10</td>
  <td class=xl5018604 x:num>99.10</td>
  <td class=xl5018604 x:num>99.10</td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td height=21 class=xl2818604 style='height:15.75pt'></td>
  <td class=xl3118604>D &amp; C Rate</td>
  <td class=xl3618604 align=right x:num x:fmla="=(C43/C45)*100">0.00</td>
  <td class=xl3618604 align=right x:num="0.23474178403755869"
  x:fmla="=(D43/D45)*100">0.23</td>
  <td class=xl3618604 align=right x:num="0.22222222222222221"
  x:fmla="=(E43/E45)*100">0.22</td>
  <td class=xl3618604 align=right x:num="0.67114093959731547"
  x:fmla="=(F43/F45)*100">0.67</td>
  <td class=xl3618604 align=right x:num="0.96711798839458418"
  x:fmla="=(G43/G45)*100">0.97</td>
  <td class=xl3618604 align=right x:num="0.36496350364963503"
  x:fmla="=(H43/H45)*100">0.36</td>
  <td class=xl3618604 align=right x:num="0.53285968028419184"
  x:fmla="=(I43/I45)*100">0.53</td>
  <td class=xl3618604 align=right x:num="0.66334991708126034"
  x:fmla="=(J43/J45)*100">0.66</td>
  <td class=xl3618604 align=right x:num="1.9230769230769231"
  x:fmla="=(K43/K45)*100">1.92</td>
  <td class=xl3618604 align=right x:num="1.2195121951219512"
  x:fmla="=(L43/L45)*100">1.22</td>
  <td class=xl3618604 align=right x:num="0.71174377224199281"
  x:fmla="=(M43/M45)*100">0.71</td>
  <td class=xl3618604 align=right x:num="0.69204152249134954"
  x:fmla="=(N43/N45)*100">0.69</td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
  <td class=xl2818604></td>
 </tr>
 <![if supportMisalignedColumns]>
 <tr height=0 style='display:none'>
  <td width=50 style='width:38pt'></td>
  <td width=113 style='width:85pt'></td>
  <td width=74 style='width:56pt'></td>
  <td width=50 style='width:38pt'></td>
  <td width=50 style='width:38pt'></td>
  <td width=69 style='width:52pt'></td>
  <td width=50 style='width:38pt'></td>
  <td width=63 style='width:47pt'></td>
  <td width=66 style='width:50pt'></td>
  <td width=50 style='width:38pt'></td>
  <td width=50 style='width:38pt'></td>
  <td width=63 style='width:47pt'></td>
  <td width=57 style='width:43pt'></td>
  <td width=62 style='width:47pt'></td>
  <td width=47 style='width:35pt'></td>
  <td width=47 style='width:35pt'></td>
  <td width=47 style='width:35pt'></td>
  <td width=47 style='width:35pt'></td>
 </tr>
 <![endif]>
</table>

</div>


<!----------------------------->
<!--END OF OUTPUT FROM EXCEL PUBLISH AS WEB PAGE WIZARD-->
<!----------------------------->
</body>

</html>
