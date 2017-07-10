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
<meta name=Generator content="Microsoft Excel 10">
<link rel=File-List href="excel_files/filelist.xml">
<style id="Book1_2569_Styles">
<!--table
	{mso-displayed-decimal-separator:"\.";
	mso-displayed-thousand-separator:"\,";}
.xl152569
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
.xl222569
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
	text-align:general;
	vertical-align:bottom;
	border-top:none;
	border-right:none;
	border-bottom:none;
	border-left:1.0pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl232569
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
	text-align:general;
	vertical-align:bottom;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl242569
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
.xl252569
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
	border-top:none;
	border-right:1.0pt solid windowtext;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl262569
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
	mso-number-format:0;
	text-align:center;
	vertical-align:bottom;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl272569
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
	mso-number-format:0;
	text-align:center;
	vertical-align:bottom;
	border-top:none;
	border-right:1.0pt solid windowtext;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl282569
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
	text-align:general;
	vertical-align:bottom;
	border-top:none;
	border-right:none;
	border-bottom:1.0pt solid windowtext;
	border-left:1.0pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl292569
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
	text-align:general;
	vertical-align:bottom;
	border-top:none;
	border-right:none;
	border-bottom:1.0pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl302569
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
.xl312569
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
.xl322569
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
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
.xl332569
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:12.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:MyriaMM, sans-serif;
	mso-font-charset:0;
	mso-number-format:Fixed;
	text-align:general;
	vertical-align:bottom;
	background:yellow;
	mso-pattern:auto none;
	white-space:nowrap;}
.xl342569
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
	mso-number-format:Fixed;
	text-align:general;
	vertical-align:bottom;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
-->
</style>
<?
  include("time.php");
  $TE = connectimesysTE();
  
  //$weeknum = isset($_REQUEST["weeknum"]) ? $_REQUEST["weeknum"] : "";
  //$year = isset($_REQUEST["year"]) ? $_REQUEST["year"] : "";
  $periode = isset($_REQUEST["periode"]) ? $_REQUEST["periode"] : "";
  $actype = $_REQUEST["actype"];

function weeks_in_year($year) {
 return date("W",mktime(23,00,00,12,31,$year));
}

?>
</head>

<body>
<!--[if !excel]>&nbsp;&nbsp;<![endif]-->
<!--The following information was generated by Microsoft Excel's Publish as Web
Page wizard.-->
<!--If the same item is republished from Excel, all information between the DIV
tags will be replaced.-->
<!----------------------------->
<!--START OF OUTPUT FROM EXCEL PUBLISH AS WEB PAGE WIZARD -->
<!----------------------------->

<div id="Book1_2569" align=center x:publishsource="Excel">

<table x:str border=0 cellpadding=0 cellspacing=0 width=896 style='border-collapse:
 collapse;table-layout:fixed;width:672pt'>
 <col width=64 span=14 style='width:48pt'>
 <tr height=21 style='height:15.75pt'>
  <td height=21 class=xl222569 width=64 style='height:15.75pt;width:48pt'>Weeks</td>
  <td class=xl232569 width=64 style='width:48pt'></td>
  <?
  	$weeknih = "20".substr($periode,3,2)."-".substr($periode,0,2);
	//$connectAMS = connectimesys('imesys');
	$arrFH = queryFH($weeknih,$actype);
	$arrFC = queryFC($weeknih,$actype);//die(print_r($arrFH));
	$connectAMSdelay = connectimesysTE();
	//$actype = ($_REQUEST["actype"] == "B737-300C','B737-400C") ? "B737-CL" : $_REQUEST["actype"];//die($actype);
	$arrdelay = querydelay($weeknih,$actype);
	$arrcancel = querycancel($weeknih,$actype);
	$arrstation = querystation($weeknih,$actype);
	$year = substr($periode,3,2);$week = substr($periode,0,2);
	
	$weekkey = array_keys($arrFH);

	if (substr($periode,0,2) < 12){
		$numberofweeklastyear = weeks_in_year(substr("20".$year-1,-2,2));//substr("20".$year-1,-4,4)
		$selisih = 12 - substr($periode,0,2);
		$minggu[$i] = $numberofweeklastyear - $selisih;

		for($i=0;$i<12;$i++){
			$minggu[$i] = substr("20".$year-1,-4,4)."-".substr("0".($numberofweeklastyear - ($selisih - $i) + 1),-2,2);
				if($selisih == $i){
					$minggu[$i] = substr("20".$year,-4,4)."-01";
				} else if ($i > $selisih){
					$minggu[$i] = substr("20".$year,-4,4)."-".substr("0".($i - $selisih + 1),-2,2);
				}
			//$minggu[$i] = substr("0".$weeky,-2,2);
	  		echo "<td class=xl242569 width=64 style='width:48pt' x:num>".substr($minggu[$i],-2,2)."</td>";
		}
	} else {

		for($i=0;$i<12;$i++)
		{	
			$minggu[$i] = substr("20".$year,-4,4)."-".substr("0".(substr($periode,0,2)-(11-$i)),-2,2);
			echo "<td class=xl242569 width=64 style='width:48pt' x:num>".substr($minggu[$i],-2,2)."</td>";
		}
	}
  ?>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td height=21 class=xl222569 style='height:15.75pt'>D</td>
  <td class=xl242569 x:num></td>
  <? 
	  //$connectAMSdelay = connectimesysTE();
	  for($i=0;$i<12;$i++)
		{
			$delay[$i] = isset($arrdelay[$minggu[$i]]) ? $arrdelay[$minggu[$i]] : "0";
			echo "<td class=xl242569 x:num>".$delay[$i]."</td>";
		}
	  ?>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td height=21 class=xl222569 style='height:15.75pt'>C</td>
  <td class=xl242569 x:num></td>
  <? 
	  //$connectAMSdelay = connectimesysTE();
	  for($i=0;$i<12;$i++)
		{
			$cancel[$i] = isset($arrcancel[$minggu[$i]]) ? $arrcancel[$minggu[$i]] : "0";
			echo "<td class=xl242569 x:num>".$cancel[$i]."</td>";
		}
	  ?>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td height=21 class=xl222569 style='height:15.75pt' x:str="D &amp; C  ">D
  &amp; C<span style='mso-spacerun:yes'>  </span></td>
  <td class=xl232569>Total</td>
  <? 
	  //$connectAMSdelay = connectimesysTE();
	  for($i=0;$i<12;$i++)
		{
			$dc[$i] = $cancel[$i] + $delay[$i];
			echo "<td class=xl242569 x:num>".$dc[$i]."</td>";
		}
	  ?>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td height=21 class=xl222569 style='height:15.75pt' x:str="D &amp; C ">D
  &amp; C<span style='mso-spacerun:yes'> </span></td>
  <td class=xl232569 x:str="Cgk ">Cgk<span style='mso-spacerun:yes'> </span></td>
  <? 
	  //$connectAMSdelay = connectimesysTE();
	  for($i=0;$i<12;$i++)
		{
			$station[$i] = isset($arrstation[$minggu[$i]]) ? $arrstation[$minggu[$i]] : "0";
			echo "<td class=xl242569 x:num>".$station[$i]."</td>";
		}
	  ?>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td height=21 class=xl222569 colspan=2 style='height:15.75pt'>Revenue T/O</td>
  <? 
		// $connectAMSbaru = connectimesys('imesys');
	  for($i=0;$i<11;$i++)
		{
			$TORev[$i] = isset($arrFC[$minggu[$i]]) ? $arrFC[$minggu[$i]] : 0;
			echo "<td class=xl262569 x:num>".$TORev[$i]."</td>";
		}
		$TORevweek = round(($TORev[10] + $TORev[9] + $TORev[8] + $TORev[7])/4,0);
	  ?>
		<td class=xl262569 x:num><?= round(($TORev[10] + $TORev[9] + $TORev[8] + $TORev[7])/4,0)?></td>
  </tr>
 <tr height=21 style='height:15.75pt'>
  <td height=21 class=xl222569 colspan=2 style='height:15.75pt'>Revenue F/H</td>
  <? 
	  for($i=0;$i<11;$i++)
		{
			$FhRev[$i] = isset($arrFH[$minggu[$i]]) ? $arrFH[$minggu[$i]] : 0;
			echo "<td class=xl262569 x:num>".$FhRev[$i]."</td>";
		}
	  ?>
	  <td class=xl262569 x:num><?= round(($FhRev[10] + $FhRev[9] + $FhRev[8] + $FhRev[7])/4,0)?></td>
 </tr>
 <tr height=22 style='height:16.5pt'>
  <td height=22 class=xl282569 colspan=2 style='height:16.5pt'>Dispatch Rel.</td>
  <? 
	  //$connectAMSdelay = connectimesysTE();
	  for($i=0;$i<11;$i++)
		{
			$DR[$i] = ($TORev[$i] <> 0) ? round(($TORev[$i] - $dc[$i])/$TORev[$i] * 100,2) : 0;
			echo "<td class=xl302569 x:num>".$DR[$i]."</td>";
		}
	?>
	<td class=xl302569 x:num><?= ($TORevweek <> 0) ? round(($TORevweek - $dc[11])/$TORevweek * 100,2) : 0?></td> 
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td height=21 class=xl232569 style='height:15.75pt'></td>
  <td class=xl232569></td>
  <td class=xl232569></td>
  <td class=xl232569></td>
  <td class=xl232569></td>
  <td class=xl232569></td>
  <td class=xl232569></td>
  <td class=xl232569></td>
  <td class=xl232569></td>
  <td class=xl232569></td>
  <td class=xl232569></td>
  <td class=xl232569></td>
  <td class=xl232569></td>
  <td class=xl232569></td>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td height=21 class=xl232569 style='height:15.75pt'></td>
  <td class=xl232569></td>
  <td class=xl232569></td>
  <td class=xl232569></td>
  <td class=xl232569></td>
  <td class=xl232569></td>
  <td class=xl232569></td>
  <td class=xl232569></td>
  <td class=xl232569></td>
  <td class=xl232569></td>
  <td class=xl232569></td>
  <td class=xl232569></td>
  <td class=xl232569></td>
  <td class=xl232569></td>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td height=21 class=xl322569 style='height:15.75pt'></td>
  <td class=xl322569></td>
  <td class=xl242569 x:num x:fmla="=C1">52</td>
  <td class=xl242569 x:num x:fmla="=D1">1</td>
  <td class=xl242569 x:num x:fmla="=E1">2</td>
  <td class=xl242569 x:num x:fmla="=F1">3</td>
  <td class=xl242569 x:num x:fmla="=G1">4</td>
  <td class=xl242569 x:num x:fmla="=H1">5</td>
  <td class=xl242569 x:num x:fmla="=I1">6</td>
  <td class=xl242569 x:num x:fmla="=J1">7</td>
  <td class=xl242569 x:num x:fmla="=K1">8</td>
  <td class=xl242569 x:num x:fmla="=L1">9</td>
  <td class=xl242569 x:num x:fmla="=M1">10</td>
  <td class=xl242569 x:num x:fmla="=N1">11</td>
 </tr>
 <tr height=22 style='height:16.5pt'>
  <td height=22 class=xl322569 style='height:16.5pt'></td>
  <td class=xl232569>Dispatc<span style='display:none'>h Rel.</span></td>
  <td class=xl302569 x:num="96.566523605150209" x:fmla="=C8">96.57</td>
  <td class=xl302569 x:num x:fmla="=D8">100.00</td>
  <td class=xl302569 x:num x:fmla="=E8">100.00</td>
  <td class=xl302569 x:num x:fmla="=F8">100.00</td>
  <td class=xl302569 x:num x:fmla="=G8">100.00</td>
  <td class=xl302569 x:num x:fmla="=H8">100.00</td>
  <td class=xl302569 x:num x:fmla="=I8">100.00</td>
  <td class=xl302569 x:num x:fmla="=J8">100.00</td>
  <td class=xl302569 x:num="98.275126144363043" x:fmla="=K8">98.28</td>
  <td class=xl302569 x:num x:fmla="=L8">100.00</td>
  <td class=xl302569 x:num="98.276465140584293" x:fmla="=M8">98.28</td>
  <td class=xl302569 x:num="98.275795624235698" x:fmla="=N8">98.28</td>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td height=21 class=xl322569 style='height:15.75pt'></td>
  <td class=xl232569>Target</td>
  <td class=xl332569 align=right x:num>99.10</td>
  <td class=xl332569 align=right x:num>99.10</td>
  <td class=xl332569 align=right x:num>99.10</td>
  <td class=xl332569 align=right x:num>99.10</td>
  <td class=xl332569 align=right x:num>99.10</td>
  <td class=xl332569 align=right x:num>99.10</td>
  <td class=xl332569 align=right x:num>99.10</td>
  <td class=xl332569 align=right x:num>99.10</td>
  <td class=xl332569 align=right x:num>99.10</td>
  <td class=xl332569 align=right x:num>99.10</td>
  <td class=xl332569 align=right x:num>99.10</td>
  <td class=xl332569 align=right x:num>99.10</td>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td height=21 class=xl322569 style='height:15.75pt'></td>
  <td class=xl232569>D &amp; C R<span style='display:none'>ate</span></td>
  <td class=xl342569 align=right x:num="3.4334763948497855"
  x:fmla="=(C4/C6)*100">3.43</td>
  <td class=xl342569 align=right x:num x:fmla="=(D4/D6)*100">0.00</td>
  <td class=xl342569 align=right x:num x:fmla="=(E4/E6)*100">0.00</td>
  <td class=xl342569 align=right x:num x:fmla="=(F4/F6)*100">0.00</td>
  <td class=xl342569 align=right x:num x:fmla="=(G4/G6)*100">0.00</td>
  <td class=xl342569 align=right x:num x:fmla="=(H4/H6)*100">0.00</td>
  <td class=xl342569 align=right x:num x:fmla="=(I4/I6)*100">0.00</td>
  <td class=xl342569 align=right x:num x:fmla="=(J4/J6)*100">0.00</td>
  <td class=xl342569 align=right x:num="1.7248738556369596"
  x:fmla="=(K4/K6)*100">1.72</td>
  <td class=xl342569 align=right x:num x:fmla="=(L4/L6)*100">0.00</td>
  <td class=xl342569 align=right x:num="1.7235348594157107"
  x:fmla="=(M4/M6)*100">1.72</td>
  <td class=xl342569 align=right x:num="1.7242043757643031"
  x:fmla="=(N4/N6)*100">1.72</td>
 </tr>
 <![if supportMisalignedColumns]>
 <tr height=0 style='display:none'>
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
