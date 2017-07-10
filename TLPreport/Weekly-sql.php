<?
  //$weeknum = isset($_REQUEST["weeknum"]) ? $_REQUEST["weeknum"] : "";
  //$year = isset($_REQUEST["periode"]) ? $_REQUEST["periode"] : "";
  $periode = isset($_REQUEST["periode"]) ? $_REQUEST["periode"] : "";
  //$actype = isset($_REQUEST["actype"]) ? (($_REQUEST["actype"] == "B737-CL") ? "B737-300C','B737-400C" : $_REQUEST["actype"]) : "";
  $actype = isset($_REQUEST["actype"]) ? $_REQUEST["actype"] : "";

function selectactype() {
	$actypequery = "SELECT `tbl_masterac`.`ACType` AS `value` FROM `tbl_masterac` WHERE `tbl_masterac`.`ACType` <> '' GROUP BY `tbl_masterac`.`ACType`";
	$resultactyep = mysql_query($actypequery);
	//die($actypequery);
	while ($hasilactype = mysql_fetch_array($resultactyep))
	{
		$arractype[] = $hasilactype[0];
	}//die(print_r($arractype));
	array_push($arractype,"B737-800-E","B737-800-M","ALL FLEET");
	return $arractype;
}

function cmbbox($name, $arr_item, $value='', $onchange='', $add_opt=1) {
	$html = "<select name='$name' id='$name' onchange=\"$onchange\">result</select>";
	$opt = ($add_opt == 1) ? "<option value=''>-- Please Select --</option>" : "" ;
	foreach ($arr_item as $data) {
		$selected = $data == $value ? " selected" : "";
		$text = isset($data['text']) ? $data['text'] : $data['value'] ;
		$opt .= "<option value='{$data}'$selected>{$data}</option>";
	}
	echo str_replace('result', $opt, $html);
}

function weeks_in_year($year) {
 return date("W",mktime(23,00,00,12,31,$year));
}

function getFirstDayOfWeek($year, $weeknr)
{
	$offset = date('w', mktime(0,0,0,1,1,$year));
	$offset = ($offset < 5) ? 1-$offset : 8-$offset;
	$monday = mktime(0,0,0,1,1+$offset,$year);
	$date = strtotime('+' . ($weeknr) . ' weeks', $monday);
	return date('m/d/Y',$date);
}
  

  //  $periode = isset($_REQUEST["periode"]) ? $_REQUEST["periode"] : "";

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Weekly Reliability Report</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
.style1 {font-size: 23px}
-->
</style>
</head>
<script language="javascript">
function display_report() {

        if (document.frm1.periode.value == "") {
                alert('Please Insert "Periode"');
		} else if (document.frm1.actype.selectedIndex == 0) {
                alert('Please Select Aircraft Type');
        } else {
                location.href = "<?=$_SERVER['PHP_SELF']?>?&periode=" +
                        escape(document.frm1.periode.value) + "&actype=" +
						escape(document.frm1.actype.value);
        }
  }

function export_excel()
  {
        if (document.frm1.periode.value == 0) {
                alert('Please Select Periode');
        } else {
				
        	   var str = "excel.php?actype=" + escape(document.frm1.actype.value) + "&periode=" + escape(document.frm1.periode.value);
                window.open(str);
        }
  }


</script>
<body>
<?php 
	//include("ConnIMESys.php");
	include("time-sql.php");

  $TE = connectimesysTE('mcdr');
  $arractype = selectactype();
  //die(print_r($arractype));
	
?>
<div align="center"><span class="style1">Weekly Reliability Report</span></div>
<form name="frm1" method="get">
  <p>
Periode (ww-yy)
   
  <input name="periode" type="text" size="15" maxlength="10" value="<?= $periode?>"> &nbsp;&nbsp;&nbsp;&nbsp;
  Aircraft Type 
<?  
cmbbox("actype",$arractype,$actype,'',1);
?>
&nbsp;&nbsp;&nbsp;
  <input type="submit" name="Submit" value="Submit" onClick="display_report()">
  <!--<input type="submit" name="Submit2" value="Excel" onClick="export_excel()">-->
  <!--<input type="submit" name="export" value="Export" onClick="export_excel()">--><a href="excel-sql.php?actype=<?= $actype?>&periode=<?= $periode?>" target="_blank">Export to Excel</a> 
  </p>
  <?php 
	if ($periode == "" && $actype == "") die("Please input AC Type, Week and Year");
	/*if ($actype == "B737-CL"){
		$actype = "B737-300C','B737-400C";
	}*/
	//die($actype);
	$year = substr($periode,3,2);$week = substr($periode,0,2);
	$weeknih = "20".$year."-".$week;//echo($actype);
	//$connectAMS = connectimesys('imesys');
	$actype = $_REQUEST["actype"];//die($actype);
	$arrdelay = querydelay($weeknih,$actype);//die(print_r($arrdelay));
	$arrcancel = querycancel($weeknih,$actype);
	$arrstation = querystation($weeknih,$actype);
	$tes = getFirstDayOfWeek("20".$year, $week);//die($tes);
	$reg = reg($actype);//print_r($reg);

	mysql_close($TE);

	$connectAMSdelay = connectimesysRPTDB();

	$arrFH = queryFH($weeknih,$reg);//die(print_r($arrFH));
	$arrFC = queryFC($weeknih,$reg);//die(print_r($arrFC));
	$avail = queryavail($weeknih,$reg);
	
	$weekkey = weekkey($weeknih);
	//die(print_r($weekkey));

	mssql_close($connectAMSdelay);
 if ($week == "") {
 	die("Please Select Aircraft Type");
 	}
  
  for($i=0;$i<12;$i++)
  {
  	$week = $week - $i;
  }
  
  //die(print_r($weekkey));
  
  ?>
  <p>&nbsp;</p>
  <table width="558" border="1">
    <tr>
      <th scope="col"><div align="left">Week</div></th>
	  <?
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
	  		echo "<th scope=\"col\" width=\"20\">".substr($minggu[$i],-2,2)."</th>";
		}
	} else {

		for($i=0;$i<12;$i++)
		{	
		$minggu[$i] = substr("20".$year,-4,4)."-".substr("0".(substr($periode,0,2)-(11-$i)),-2,2);
  		echo "<th scope=\"col\" width=\"20\">".substr($minggu[$i],-2,2)."</th>";
		//echo "<th scope=\"col\" width=\"20\">harusnya masuk nih</th>";
		}
	}
	  ?>
     
    </tr>
	
    <tr>
      <th scope="row"><div align="left">D</div></th>
      <? 
	  
	  for($i=0;$i<12;$i++)
		{
			$delay[$i] = isset($arrdelay[$minggu[$i]]) ? $arrdelay[$minggu[$i]] : "0";
			echo "<td align=\"center\" width=\"20\">".$delay[$i]."</td>";
		}
	  ?>
    </tr>
    <tr>
      <th scope="row"><div align="left">C</div></th>
      <? 
	  //$connectAMSdelay = connectimesysTE();
	  for($i=0;$i<12;$i++)
		{
			$cancel[$i] = isset($arrcancel[$minggu[$i]]) ? $arrcancel[$minggu[$i]] : "0";
			echo "<td align=\"center\">".$cancel[$i]."</td>";
		}
	  ?>
    </tr>
    <tr>
      <th scope="row"><div align="left">D &amp; C Total </div></th>
      <? 
	  //$connectAMSdelay = connectimesysTE();
	  for($i=0;$i<12;$i++)
		{
			$dc[$i] = $cancel[$i] + $delay[$i];
			echo "<td align=\"center\">".$dc[$i]."</td>";
		}
	  ?>
    </tr>
    <tr>
      <th scope="row"><div align="left">D &amp; C CGK </div></th>
      <? 
	  //$connectAMSdelay = connectimesysTE();
	  for($i=0;$i<12;$i++)
		{
			$station[$i] = isset($arrstation[$minggu[$i]]) ? $arrstation[$minggu[$i]] : "0";
			echo "<td align=\"center\">".$station[$i]."</td>";
		}
	  ?>
    </tr>
    <tr>
      <th scope="row"><div align="left">Revenue T/O </div></th>
	  <? 
	  //$connectAMSbaru = connectimesys('imesys');
	  for($i=0;$i<11;$i++)
		{
			$TORev[$i] = isset($arrFC[$minggu[$i]]) ? $arrFC[$minggu[$i]] : 0;
			echo "<td align=\"center\">".$TORev[$i]."</td>";
		}
		$TORevweek = round(($TORev[10] + $TORev[9] + $TORev[8] + $TORev[7])/4,0);
	  ?>
	  <td><?= $TORevweek?></td>
    </tr>
    <tr>
      <th scope="row"><div align="left">Revenue F/H </div></th>
      <? 
	  for($i=0;$i<11;$i++)
		{
			$FhRev[$i] = isset($arrFH[$minggu[$i]]) ? $arrFH[$minggu[$i]] : 0;
			echo "<td align=\"center\">".$FhRev[$i]."</td>";
		}
	  ?>
	  <td><?= round(($FhRev[10] + $FhRev[9] + $FhRev[8] + $FhRev[7])/4,0)?></td>
    </tr>
    <tr>
      <th scope="row"><div align="left">Dispatch Reliability (%) </div></th>
      <? 
	  //$connectAMSdelay = connectimesysTE();
	  for($i=0;$i<11;$i++)
		{
			//$TORev[$i] = ($TORev[$i] != 0) ? $TORev[$i] : "";
			$DR[$i] = ($TORev[$i] <> 0) ? round(($TORev[$i] - $dc[$i])/$TORev[$i] * 100,2) : 0;
			echo "<td align=\"center\">".$DR[$i]."</td>";
		}
	  ?>
      <td align="center"><?= round(($TORevweek - $dc[11])/$TORevweek * 100,2)?></td>
    </tr>
	<tr>
      <th scope="row"><div align="left">AC In Service </div></th>
      <? 
	  for($i=0;$i<11;$i++)
		{
			$availdat[$i] = isset($avail[$minggu[$i]]) ? $avail[$minggu[$i]] : 0;
			echo "<td align=\"center\">".$availdat[$i]."</td>";
		}
	  ?>
	  <td><?= round(($availdat[10] + $availdat[9] + $availdat[8] + $availdat[7])/4,0)?></td>
    </tr>
	<tr>
      <th scope="row"><div align="left"># Pirep </div></th>
      <? 
	  for($i=0;$i<11;$i++)
		{
			$availdat[$i] = isset($avail[$minggu[$i]]) ? $avail[$minggu[$i]] : 0;
			echo "<td align=\"center\">".$availdat[$i]."</td>";
		}
	  ?>
	  <td><?= round(($availdat[10] + $availdat[9] + $availdat[8] + $availdat[7])/4,0)?></td>
    </tr>
  </table>
  <p>&nbsp;</p>
</form>
</body>
</html>
