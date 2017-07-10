<?php
$unitselect = isset($_REQUEST["unitselect"]) ? $_REQUEST["unitselect"] : "";
//$IDnilai = 
if (isset($_REQUEST['ID'])){
	deletedatabase($_REQUEST['ID']);
	unset($_REQUEST);
}

if (is_array($_REQUEST)){
	insertdatabase();
}

function insertdatabase(){

$get = array_chunk($_REQUEST,3,true);
$coninsert = CONNECT_TDAM();
foreach ($get as $a => $b){
	foreach ($b as $k => $v){
		$newget[substr($k,-5)][] = $v;
	}
	if (($newget[substr($k,-5)][0] <> "") && ($newget[substr($k,-5)][1] <> "") && ($newget[substr($k,-5)][2] <> ""))
	{	
		mysql_query("INSERT INTO tblflweng (Eventid, nopeg, Status, unit) VALUES ('".substr($k,-5)."', '".$newget[substr($k,-5)][2]."', 'Open', '".$newget[substr($k,-5)][0]."')");
		
		$resultinsert = mysql_query("SELECT TDAMNo FROM tdamx WHERE ID = '".substr($k,-5)."'");
		while ($hsl = mysql_fetch_array($resultinsert)){
			$tdamnno = $hsl["TDAMNo"];
		}
		mysql_query("INSERT INTO tbltdameng (Eventid, tdamno, Nopeg, unit, Date) VALUES ('".substr($k,-5)."', '".$tdamnno."', '".$newget[substr($k,-5)][1]."', '".$newget[substr($k,-5)][0]."', '".date('Y-m-d')."')");
	}
}
mysql_close($coninsert);unset($_REQUEST);
}

function deletedatabase($ID){
	$condelete = CONNECT_TDAM();
	mysql_query("DELETE FROM tblflweng WHERE Eventid = '".$ID."'");
	mysql_query("DELETE FROM tbltdameng WHERE Eventid = '".$ID."'");
	mysql_close($condelete);
}
//print_r($newget);
function CONNECT_TDAM()
{
	$server = '192.168.40.118';
	$username = 'develop';
	$password = 'aeroasia';
	$password2 = 'PASSWORD';
	$database = 'mcdr';

	$sqlconnect = mysql_pconnect($server, $username, $password);
	if ($sqlconnect)
	{
		mysql_select_db($database, $sqlconnect);
		return $sqlconnect;
	}
	else
	{
		$sqlconnect = mysql_pconnect($server, $username, $password2);
		if ($sqlconnect)
		{
			mysql_select_db($database, $sqlconnect);
			return $sqlconnect;
		}
		else
			return false;
	}
}

function CONNECT_Employee()
{
	$server = '192.168.40.118';
	$username = 'develop';
	$password = 'aeroasia';
	$password2 = 'PASSWORD';
	$database = 'employee';

	$sqlconnect = mysql_pconnect($server, $username, $password);
	if ($sqlconnect)
	{
		mysql_select_db($database, $sqlconnect);
		return $sqlconnect;
	}
	else
	{
		$sqlconnect = mysql_pconnect($server, $username, $password2);
		if ($sqlconnect)
		{
			mysql_select_db($database, $sqlconnect);
			return $sqlconnect;
		}
		else
			return false;
	}
}

function Unit($string){
	if ($string == "JKTTEA-1") $text = "AVIONICS";
	if ($string == "JKTTEA-2") $text = "SYSTEMS";
	if ($string == "JKTTEA-3") $text = "POWERPLANT";
	if ($string == "JKTTEA-4") $text = "STUCTURE";
	if ($string == "JKTTEA-5") $text = "CABIN";
	if ($string == "JKTTEA-6") $text = "MATERIAL PROCESS";
	if ($string == "JKTTER-1") $text = "RELIABILITY MANAGEMENT";
	if ($string == "JKTTER-2") $text = "MAINTENANCE PROGRAM";
	if ($string == "JKTTER-3") $text = "FLIGHT DATA SERVICE";
	if ($string == "JKTTER-4") $text = "TECNICAL PUBLICATION";
	if ($string == "JKTTER-5") $text = "CONFIGURATION MANAGEMENT";
	if ($string == "JKTTER-6") $text = "JOB CARD MANAGEMENT";

	return $text;
}

function cmbbox($name, $arr_item, $value='', $onchange='', $add_opt=1) {
	$html = "<select name='$name' id='$name' onchange=\"$onchange\">result</select>";
	$opt = ($add_opt == 1) ? "<option value=''>-- Please Select --</option>" : "" ;
	foreach ($arr_item as $k => $data) {
		$selected = $data == $value ? " selected" : "";
		$text = isset($data['text']) ? $data['text'] : $data['value'] ;
		$opt .= "<option value='{$k}'$selected>{$data}</option>";
	}
	echo str_replace('result', $opt, $html);
}

function UnitSelect(){
	$string = array("JKTTEA-1" => "AVIONICS","JKTTEA-2" => "SYSTEMS","JKTTEA-3" => "POWERPLANT","JKTTEA-4" => "STUCTURE","JKTTEA-5" => "CABIN","JKTTEA-6" => "MATERIAL PROCESS","JKTTER-1" => "RELIABILITY MANAGEMENT","JKTTER-2" => "MAINTENANCE PROGRAM","JKTTER-3" => "FLIGHT DATA SERVICE","JKTTER-4" => "TECNICAL PUBLICATION","JKTTER-5" => "CONFIGURATION MANAGEMENT","JKTTER-6" => "JOB CARD MANAGEMENT" );
	//echo $string;
	return $string;
}
//$unitname = array("JKTTEA-1" => "AVIONICS","JKTTEA-2" => "SYSTEMS","JKTTEA-3" => "POWERPLANT",
//			"JKTTEA-4" => "STRUCTURE", "JKTTEA-5" => "CABIN");
//die(print_r($unitname));

function CONVERT_DATE($string)
{
	$year = substr($string, 2, 2);
	$month = substr($string, 5, 2);
	switch ($month)
	{
		case '01':
			$month = 'Jan';
			break;
		case '02':
			$month = 'Feb';
			break;
		case '03':
			$month = 'Mar';
			break;
		case '04':
			$month = 'Apr';
			break;
		case '05':
			$month = 'May';
			break;
		case '06':
			$month = 'Jun';
			break;
		case '07':
			$month = 'Jul';
			break;
		case '08':
			$month = 'Aug';
			break;
		case '09':
			$month = 'Sep';
			break;
		case '10':
			$month = 'Oct';
			break;
		case '11':
			$month = 'Nov';
			break;
		case '12':
			$month = 'Dec';
			break;
	}
	$day = substr($string, 8, 2);

	return "$day-$month-$year";
}

function Employee()
{
	$connectemployee = CONNECT_Employee();
	$resultemployee = mysql_query("SELECT nama, nopeg FROM `tabpersonel` WHERE `unit` LIKE '%JKTTE%' ORDER BY `nama`");
	while($hasil = mysql_fetch_array($resultemployee)){
		$nama[$hasil['nopeg']] = $hasil['nama'];
	}
	mysql_close($connectemployee);
	return $nama;
}

function TDAM_WARNING_MANAGER()
{
	$namaemployee = Employee();
	$connect = CONNECT_TDAM();

	if (!$connect)
	{
		echo "CONNECTION TO TDAM DATABASE FAILED!!";
		return false;
	}
	
	$query = "SELECT * FROM `v_quantity_comparison_te-te` WHERE `DateEvent` > '2012-01-01'";
	$result = mysql_query($query);
	
	if (mysql_num_rows($result) > 0)
	{
		?>
			<div style="font-size:18px;font-weight:bold">TDAM ENGINEERING EVALUATION - SENDTO ITEM</div>
			<table bgcolor=#FF9933 border=0 cellpadding=2 cellspacing=1>
				<tr>
				<!--<td align=center bgcolor=#FF9933 width=50 nowrap><b></b></td>-->
				<td align=center bgcolor=#FF9933 width=30 nowrap><b>NO</b></td>
				<td align=center bgcolor=#FF9933 nowrap><b>Reg</b></br><b>Date</b></br><b>Flight No</b></td>
				<td align=center bgcolor=#FF9933 nowrap><b>TDAM NO.</b></td>
				<td align=center bgcolor=#FF9933 nowrap><b>Problem</b></td>
				<td align=center bgcolor=#FF9933 nowrap><b>Action</b></td>
				<td align=center bgcolor=#FF9933 nowrap><b>Prev Action</b></br><b>UIC</b></td>
				<td align=center bgcolor=#FF9933 nowrap><b>Corr Action</b></br><b>UIC</b></td>
				<td align=center bgcolor=#FF9933 nowrap><b>Unit</b></br><b>Leader</></td>
				<td align=center bgcolor=#FF9933 nowrap><b>Engineer</b></td>
				<td align=center bgcolor=#FF9933 nowrap><b>Target Prev</b></br><b>Target Corr</b></td>
				<td align=center bgcolor=#FF9933 nowrap><b>SEND</b></td>
				<!--<td align=center bgcolor=#FF9933 nowrap><b>T A T</b></td>-->
				</tr>
		<?
			//$unit = 'APA YAA??';
			$i = 1;
			while ($row = mysql_fetch_array($result))
			{
				//if ($row['unit'] != $unit)
				//{
					$queryprob = "SELECT `tblmcprobdata`.`TimeProb`, `tblmcprobdata`.`DescriptionProb`, `tblmcprobdata`.`ATAProb`, `tblmcprobdata`.`SubATA`, `tblmcprobdata`.`EventID` FROM `tblmcprobdata` WHERE `tblmcprobdata`.`EventID` = '".$row['ID']."' ORDER BY `tblmcprobdata`.`EventID` ASC";
					unset($prob);
					$resultprob = mysql_query($queryprob) or die("data Problem gagal");
					while ($hasilprob = mysql_fetch_array($resultprob)){
						$prob[] = $hasilprob["DescriptionProb"];
					}

					$queryrec = "SELECT `tblmcrectdata`.`EventID`, `tblmcrectdata`.`TimeRect`, `tblmcrectdata`.`DescriptionRect` FROM `tblmcrectdata` WHERE `tblmcrectdata`.`EventID` = '".$row['ID']."' ORDER BY `tblmcrectdata`.`EventID` ASC";
					unset($rect);
					$resultrec = mysql_query($queryrec);
					while ($hasilrec = mysql_fetch_array($resultrec)){
						$rect[] = $hasilrec["DescriptionRect"];
					}

					$qrytdamx = "SELECT Corraction, Prevaction, FlightNo, Resp1, Resp2, DelayFactor, Targetdate1, Targetdate2 FROM `tdamx` WHERE ID = '".$row['ID']."'";
					unset($prevaction);unset($uicprev);unset($corraction);unset($uiccorr);unset($target1);unset($target2);
					$resulttdamx = mysql_query($qrytdamx);
					while ($hasiltdamx = mysql_fetch_array($resulttdamx)){
						$prevaction = $hasiltdamx["Prevaction"];
						$uicprev = $hasiltdamx["Resp2"];
						$corraction = $hasiltdamx["Corraction"];
						$uiccorr = $hasiltdamx["Resp1"];
						$target1 = $hasiltdamx["Targetdate1"];
						$target2 = $hasiltdamx["Targetdate2"];$flightno = $hasiltdamx["FlightNo"];
					}

					
					echo "<tr>";
					echo "<td colspan=13 bgcolor=#FFFF99 nowrap><div style='font-size:15px;font-weight:bold'>".Unit($row['unit'])."</div></td>";
					echo "</tr>";
					echo "<tr>";
					//echo "<td bgcolor=#FFFFFF nowrap>&nbsp;</td>";					
					echo "<td bgcolor=#FFFFFF width=30 align=center nowrap>".$i."</td>";
					echo "<td bgcolor=#FFFFFF nowrap>".$row['Reg']."</br>".$row['DateEvent']."</br>".$flightno."</td>";
					echo "<td align=center bgcolor=#FFFFFF nowrap>".$row['TDAMNo']."</td>";
					echo "<td align=left bgcolor=#FFFFFF wrap>".implode(" ",$prob)."</td>";
					echo "<td align=left bgcolor=#FFFFFF wrap>".implode(" ",$rect)."</td>";
					echo "<td align=left bgcolor=#FFFFFF wrap><b><u>".$uicprev."</u></b></br>".$prevaction."</td>";
					echo "<td align=left bgcolor=#FFFFFF wrap>".$uiccorr."</br>".$corraction."</td>";
					//echo "<td> kudunya select nih ".cmbbox("Unit",UnitSelect(),$unitselect,'',1)." </td>";
					?>
						<td bgcolor=#FFFFFF wrap>
						<? cmbbox("Unit".$row['ID'],UnitSelect(),$unitselect,'',1) ?> </br> 
						<? cmbbox("Leader".$row['ID'],$namaemployee,$unitselect,'',1) ?>
						</td>
						<td align=center bgcolor=#FFFFFF nowrap> <? cmbbox("Engineer".$row['ID'],$namaemployee,$unitselect,'',1) ?> </td>
					<?
					echo "<td bgcolor=#FFFFFF wrap>".$target2."</br>".$target1."</td>";
					//echo "<td align=center bgcolor=#FFFFFF nowrap>".$row['Targetdate2']."</td>";
					?>
						<td>
						<input type="submit" value="Send <?=$row['ID']?>" onClick="display_report()">
						</td>
					<?
					echo "</tr>";
				//}
				//else
				//{
				/*	echo "<tr>";
					echo "<td bgcolor=#FFFFFF nowrap>&nbsp;</td>";					
					echo "<td bgcolor=#FFFFFF width=30 align=center nowrap>".$i."</td>";
					echo "<td bgcolor=#FFFFFF nowrap>".$row['EngName']."</td>";
					echo "<td align=center bgcolor=#FFFFFF nowrap>".$row['tdamno']."</td>";
					echo "<td align=center bgcolor=#FFFFFF nowrap>".$row['DateEvent']."</td>";
					echo "<td align=center bgcolor=#FFFFFF nowrap>".$row['Reg']."</td>";
					echo "<td align=center bgcolor=#FFFFFF nowrap>".$row['Fault']."</td>";
					echo "<td align=center bgcolor=#FFFFFF nowrap>".$row['Resp1']."</td>";
					echo "<td bgcolor=#FFFFFF wrap>".$row['Corraction']."</td>";
					echo "<td align=center bgcolor=#FFFFFF nowrap>".$row['Targetdate1']."</td>";
					echo "<td align=center bgcolor=#FFFFFF nowrap>".$row['Resp2']."</td>";
					echo "<td bgcolor=#FFFFFF wrap>".$row['Prevaction']."</td>";
					echo "<td align=center bgcolor=#FFFFFF nowrap>".$row['Targetdate2']."</td>";
					//echo "<td align=center bgcolor=#FFFFFF nowrap>".(date("Y-m-d")-$row['Date'])."</td>";
					echo "</tr>";*/
				//}
				$i++;
				//$unit = $row['unit'];
			}
		?>
			</table>
		<?
	}
	else
	{
		?>
			<div style="font-size:18px;font-weight:bold">TDAM ENGINEERING EVALUATION - SENDTO ITEM</div>
				<table bgcolor=#FF9933 border=0 cellpadding=2 cellspacing=1>
				<tr>
				<td align=center bgcolor=#FF9933 width=50 nowrap><b></b></td>				
				<td align=center bgcolor=#FF9933 width=30 nowrap><b>NO.</b></td>
				<td align=center bgcolor=#FF9933 nowrap><b>MANAGER NAME</b></td>
				<td align=center bgcolor=#FF9933 nowrap><b>TDAM NO</b></td>
				<td align=center bgcolor=#FF9933 nowrap><b>EVENT</b></td>
				<td align=center bgcolor=#FF9933 nowrap><b>A/C REG</b></td>
				<td align=center bgcolor=#FF9933 nowrap><b>ATA</b></td>
				<td align=center bgcolor=#FF9933 nowrap><b>UIC-1</b></td>
				<td align=center bgcolor=#FF9933 nowrap><b>RECOMMEND-1</b></td>
				<td align=center bgcolor=#FF9933 nowrap><b>TARGET</b></td>
				<td align=center bgcolor=#FF9933 nowrap><b>UIC-2</b></td>
				<td align=center bgcolor=#FF9933 nowrap><b>RECOMMEND-2</b></td>
				<td align=center bgcolor=#FF9933 nowrap><b>TARGET</b></td>
				</tr>
				<tr>
				<td colspan=13 bgcolor=#FFFFFF align=center nowrap><br><br><i><b>-- NO SENDTO ITEM UNTIL THIS TIME --</b></i><br><br><br></td>
				</tr>
			</table>
		<?
		return false;
	}
	mysql_close($connect);
}
?>
<? function TDAM_WARNING_ENGINEER()
{
	$connect = CONNECT_TDAM();

	if (!$connect)
	{
		echo "CONNECTION TO TDAM DATABASE FAILED!!";
		return false;
	}
	
	$query = "SELECT `mcdr`.`tbltdameng`.`tdamno`, `mcdr`.`tbltdameng`.`Date`, `mcdr`.`tdamx`.`Reg`, `mcdr`.`tbltdameng`.`Fault`, `mcdr`.`tblflweng`.`Status`, `mcdr`.`tblflweng`.`unit`, `mcdr`.`tdamx`.`DateEvent`, `mcdr`.`tdamx`.`Resp1`, `mcdr`.`tdamx`.`Resp2`, `mcdr`.`tdamx`.`Targetdate1`, `mcdr`.`tdamx`.`Targetdate2`, `mcdr`.`tdamx`.`Corraction`, `mcdr`.`tdamx`.`Prevaction`, `employee`.`tabpersonel`.`nama`,`mcdr`.`tdamx`.`DelayFactor`, `mcdr`.`tdamx`.`ID` FROM `mcdr`.`tblflweng` Inner Join `mcdr`.`tbltdameng` ON `mcdr`.`tblflweng`.`Eventid` = `mcdr`.`tbltdameng`.`Eventid` Inner Join `mcdr`.`tdamx` ON `mcdr`.`tbltdameng`.`Eventid` = `mcdr`.`tdamx`.`ID` Inner Join `employee`.`tabpersonel` ON `mcdr`.`tblflweng`.`nopeg` = `employee`.`tabpersonel`.`nopeg` WHERE `mcdr`.`tblflweng`.`Status` = 'Open' ORDER BY `mcdr`.`tblflweng`.`unit` ASC";
	$result = mysql_query($query);
	
	if (mysql_num_rows($result) > 0)
	{
		?>
			<div style="font-size:18px;font-weight:bold">TDAM ENGINEERING EVALUATION - OPEN ITEM</div>
			<table bgcolor=#FF9933 border=0 cellpadding=2 cellspacing=1>
				<tr>
				<td align=center bgcolor=#FF9933 width=50 nowrap><b></b></td>				
				<td align=center bgcolor=#FF9933 width=30 nowrap><b>NO.</b></td>
				<td align=center bgcolor=#FF9933 nowrap><b>ENGINEER IN CHARGE</b></td>
				<td align=center bgcolor=#FF9933 nowrap><b>TDAM NO.</b></td>
				<td align=center bgcolor=#FF9933 nowrap><b>EVENT</b></td>
				<td align=center bgcolor=#FF9933 nowrap><b>A/C REG</b></td>
				<td align=center bgcolor=#FF9933 nowrap><b>ATA</b></td>
				<td align=center bgcolor=#FF9933 nowrap><b>Delay Factor</b></td>
				<td align=center bgcolor=#FF9933 nowrap><b>UIC-1</b></td>
				<td align=center bgcolor=#FF9933 nowrap><b>RECOMMEND-1</b></td>
				<td align=center bgcolor=#FF9933 nowrap><b>TARGET</b></td>
				<td align=center bgcolor=#FF9933 nowrap><b>UIC-2</b></td>
				<td align=center bgcolor=#FF9933 nowrap><b>RECOMMEND-2</b></td>
				<td align=center bgcolor=#FF9933 nowrap><b>TARGET</b></td>
				</tr>
		<?
			$unit = 'APA YAA??';
			while ($row = mysql_fetch_array($result))
			{
				if ($row['unit'] != $unit)
				{
					$i = 1;
					echo "<tr>";
					echo "<td colspan=13 bgcolor=#FFFF99 nowrap><div style='font-size:15px;font-weight:bold'>".Unit($row['unit'])."</div></td>";
					echo "</tr>";
					echo "<tr>";
					echo "<td bgcolor=#FFFFFF nowrap>&nbsp;</td>";					
					echo "<td bgcolor=#FFFFFF width=30 align=center nowrap>".$i."</td>";
					echo "<td bgcolor=#FFFFFF nowrap>".$row['nama']." <a href=\"tdamsendtor1.php?ID=".$row['ID']."\">Edit</a></td>";
					echo "<td align=center bgcolor=#FFFFFF nowrap>".$row['tdamno']."</td>";
					echo "<td align=center bgcolor=#FFFFFF nowrap>".$row['DateEvent']."</td>";
					echo "<td align=center bgcolor=#FFFFFF nowrap>".$row['Reg']."</td>";
					echo "<td align=center bgcolor=#FFFFFF nowrap>".$row['Fault']."</td>";
					echo "<td align=center bgcolor=#FFFFFF nowrap>".$row['DelayFactor']."</td>";
					echo "<td align=center bgcolor=#FFFFFF nowrap>".$row['Resp1']."</td>";
					echo "<td bgcolor=#FFFFFF wrap>".$row['Corraction']."</td>";
					if ($row['Resp1'] == "TEA"){
						echo "<td align=center bgcolor=#FFFFFF nowrap>".date('Y-m-d',(strtotime($row['Date']) + 1209600))."</td>";
					} else {
						echo "<td align=center bgcolor=#FFFFFF nowrap>".$row['Targetdate1']."</td>";
					}
					echo "<td align=center bgcolor=#FFFFFF nowrap>".$row['Resp2']."</td>";
					echo "<td bgcolor=#FFFFFF wrap>".$row['Prevaction']."</td>";
					if ($row['Resp2'] == "TEA"){
						echo "<td align=center bgcolor=#FFFFFF nowrap>".date('Y-m-d',(strtotime($row['Date']) + 1209600))."</td>";
					} else {
						echo "<td align=center bgcolor=#FFFFFF nowrap>".$row['Targetdate2']."</td>";
					}
					echo "</tr>";
				}
				else
				{
					echo "<tr>";
					echo "<td bgcolor=#FFFFFF nowrap>&nbsp;</td>";					
					echo "<td bgcolor=#FFFFFF width=30 align=center nowrap>".$i."</td>";
					echo "<td bgcolor=#FFFFFF nowrap>".$row['nama']." <a href=\"tdamsendtor1.php?ID=".$row['ID']."\">Edit</a></td>";
					echo "<td align=center bgcolor=#FFFFFF nowrap>".$row['tdamno']."</td>";
					echo "<td align=center bgcolor=#FFFFFF nowrap>".$row['DateEvent']."</td>";
					echo "<td align=center bgcolor=#FFFFFF nowrap>".$row['Reg']."</td>";
					echo "<td align=center bgcolor=#FFFFFF nowrap>".$row['Fault']."</td>";
					echo "<td align=center bgcolor=#FFFFFF nowrap>".$row['DelayFactor']."</td>";
					echo "<td align=center bgcolor=#FFFFFF nowrap>".$row['Resp1']."</td>";
					echo "<td bgcolor=#FFFFFF wrap>".$row['Corraction']."</td>";
					if ($row['Resp1'] == "TEA"){
						echo "<td align=center bgcolor=#FFFFFF nowrap>".date('Y-m-d',(strtotime($row['Date']) + 1209600))."</td>";
					} else {
						echo "<td align=center bgcolor=#FFFFFF nowrap>".$row['Targetdate1']."</td>";
					}
					echo "<td align=center bgcolor=#FFFFFF nowrap>".$row['Resp2']."</td>";
					echo "<td bgcolor=#FFFFFF wrap>".$row['Prevaction']."</td>";
					if ($row['Resp2'] == "TEA"){
						echo "<td align=center bgcolor=#FFFFFF nowrap>".date('Y-m-d',(strtotime($row['Date']) + 1209600))."</td>";
					} else {
						echo "<td align=center bgcolor=#FFFFFF nowrap>".$row['Targetdate2']."</td>";
					}
					echo "</tr>";
				}
				$i++;
				$unit = $row['unit'];
			}
		?>
			</table>
		<?
	}
	else
	{
		?>
			<div style="font-size:18px;font-weight:bold">TDAM ENGINEERING EVALUATION - OPEN ITEM</div>
			<table bgcolor=#FF9933 border=0 cellpadding=2 cellspacing=1>
				<tr>
				<td align=center bgcolor=#FF9933 width=50 nowrap><b></b></td>				
				<td align=center bgcolor=#FF9933 width=30 nowrap><b>NO.</b></td>
				<td align=center bgcolor=#FF9933 nowrap><b>ENGINEER IN CHARGE</b></td>
				<td align=center bgcolor=#FF9933 nowrap><b>TDAM NO</b></td>
				<td align=center bgcolor=#FF9933 nowrap><b>EVENT</b></td>
				<td align=center bgcolor=#FF9933 nowrap><b>A/C REG</b></td>
				<td align=center bgcolor=#FF9933 nowrap><b>ATA</b></td>
				<td align=center bgcolor=#FF9933 nowrap><b>UIC-1</b></td>
				<td align=center bgcolor=#FF9933 nowrap><b>RECOMMEND-1</b></td>
				<td align=center bgcolor=#FF9933 nowrap><b>TARGET</b></td>
				<td align=center bgcolor=#FF9933 nowrap><b>UIC-2</b></td>
				<td align=center bgcolor=#FF9933 nowrap><b>RECOMMEND-2</b></td>
				<td align=center bgcolor=#FF9933 nowrap><b>TARGET</b></td>
				</tr>
				<tr>
				<td colspan=13 bgcolor=#FFFFFF align=center nowrap><br><br><i><b>-- NO OPEN ITEM UNTIL THIS TIME --</b></i><br><br><br></td>
				</tr>
			</table>
		<?
		return false;
	}
	mysql_close($connect);
}
?>

<html>
<head>
<style>
body {
	font-family: verdana, arial;
	font-size: 10px;
}
td {
	font-family: verdana, arial;
	font-size: 10px;
}
.white {
	font-family: verdana, arial;
	font-size: 10px;
	color: #FFFFFF;
}
.style1 {color: #FF0000}
</style>
</head>
<body>
<script language="javascript">
function display_report() {

        if (document.frm1.actype.value == "") {
                alert('Please Insert ACType');
        } else if (document.frm1.periode.value == "") {
                alert('Please Select Periode');
        } else {
                location.href = "<?=$_SERVER['PHP_SELF']?>?actype=" +
                        escape(document.frm1.actype.value) + "&periode=" +
                        escape(document.frm1.periode.value);
        }
  }
</script>
<table bgcolor=#000099 border=0 width=100% cellpadding=5 cellspacing=1>
  <tr>
    <td class=white align=center><b>THIS IS AN AUTOMATED NOTIFICATION - ANY COMMENT PLEASE SEND TO <a href="mailto:firman.a@gmf-aeroasia.co.id" class="style1">ADMIN</a></b></td>
  </tr>
</table>
<br>
<br>
<form name="frm1" method="get">
<div><b>UPDATE: &nbsp; </b><? echo date('d-M-y'); ?> &nbsp; <? echo date('H:i:s'); ?> WIB</div>
<br>
<br>
<?
TDAM_WARNING_MANAGER();
?>
<br>
<br>
<?
TDAM_WARNING_ENGINEER();
?>
<br>
<br>
</form>
<table bgcolor=#000099 border=0 width=100% cellpadding=5 cellspacing=1>
  <tr>
    <td class=white align=center><b>THIS IS AN AUTOMATED NOTIFICATION - ANY COMMENT PLEASE SEND TO <a href="mailto:nazarullah.ibny@gmf-aeroasia.co.id" class="style1">ADMIN</a></b></td>
  </tr>
</table>
<br>
<br>
</body>
</html>
