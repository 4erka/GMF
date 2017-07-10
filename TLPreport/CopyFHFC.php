<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Pilot And Delay Report</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
.style1 {font-size: 20px}
.style2 {font-size: 24px}
.style3 {font-size: 12px}
-->
</style>
<?
  include("ConnIMESys.php");
  $periode = isset($_REQUEST["periode"]) ? $_REQUEST["periode"] : "";
  //$year = isset($_REQUEST["year"]) ? $_REQUEST["year"] : "";
  $actype = isset($_REQUEST["actype"]) ? $_REQUEST["actype"] : "";
  //$actype = ($_REQUEST["actype"] == "B737-CL") ? "B737-300C','B737-400C" : $_REQUEST["actype"];

?>

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
                        escape(document.frm1.periode.value) + "&data=ad";
        }
  }

function insert_data() {

        if (document.frm1.actype.value == "") {
                alert('Please Insert ACType');
        } else if (document.frm1.periode.value == "") {
                alert('Please Select Periode');
        } else {
                location.href = "<?=$_SERVER['PHP_SELF']?>?actype=" + escape(document.frm1.actype.value) + "&periode=" + escape(document.frm1.periode.value) + "&input=FHFC";
        }
  }

</script>
<table width="100%"  border="0">
  <tr>
    <td>&nbsp;</td>
    <td><div align="center" class="style1">Reliability Report </div></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><div align="center">Pilot Report </div></td>
    <td>&nbsp;</td>
  </tr>
</table>
<form name="frm1" method="GET">
<p>Periode (yyyy-mm) &nbsp&nbsp&nbsp
  <input name="periode" type="text" size="20" value="<?= $periode?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
Aircraft &nbsp&nbsp&nbsp
<input name="actype" type="text" size="15" value="<?= $actype?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
 <input type="submit" name="Submit" value="Display Report" onClick="display_report()">&nbsp;&nbsp;
 <input type="submit" name="btn2" value="CopyData" onClick="insert_data()">
</p>

<div align="center" class="style2">
  <div align="left">Portal</div>
</div>
<?
	if ($periode == "" OR $actype == ""){
			die("Please Select Aircraft Type And Periode");
			}
	$conn = connectimesysTE();
	if ($actype == "A330") {
		$qryline = "`tbl_masterac`.`ACType` IN ('A330-200','A330-300')";
	} else {
		//$qryline = "`tbl_masterac`.`ACType` IN ('$actype')";
		$qryline = $actype;
	}
	$qryFHrev = "SELECT aircraftflightlog.acReg AS acReg,SEC_TO_TIME(SUM(TIME_TO_SEC(aircraftflightlog.flightTime))) AS BlockHours, SEC_TO_TIME(SUM(TIME_TO_SEC(aircraftflightlog.airTime))) AS FlightHours, Sum(`aircraftflightlog`.`landing`) AS cycle, tbl_masterac.ACType FROM aircraftflightlog Inner Join tbl_masterac ON tbl_masterac.ACReg = aircraftflightlog.acReg WHERE DATE_FORMAT(aircraftflightlog.blockOffDate,'%Y-%m') =  '".$periode."' AND aircraftflightlog.voidStatus =  'false' AND aircraftflightlog.revenue =  'Revenue' AND aircraftflightlog.landingType <> 'TF' AND aircraftflightlog.acReg <>  'PK-TES' AND tbl_masterac.ACType IN ('".$qryline."') GROUP BY `aircraftflightlog`.`acReg`";
	//die($qryFHrev);
	$resultFHrev = mysql_query($qryFHrev);//die($qryFHrev);
	while ($hasilFHrev = mysql_fetch_array($resultFHrev))
	{
		$hourrev[$hasilFHrev["acReg"]] = $hasilFHrev["FlightHours"];
		$cyclerev[$hasilFHrev["acReg"]] = $hasilFHrev["cycle"];
		$blockrev[$hasilFHrev["acReg"]] = $hasilFHrev["BlockHours"];
	}
	//die(print_r($hourrev));
	$qryFHnorev = "SELECT aircraftflightlog.acReg AS acReg,SEC_TO_TIME(SUM(TIME_TO_SEC(aircraftflightlog.flightTime))) AS BlockHours, SEC_TO_TIME(SUM(TIME_TO_SEC(aircraftflightlog.airTime))) AS FlightHours, Sum(`aircraftflightlog`.`landing`) AS cycle, tbl_masterac.ACType FROM aircraftflightlog Inner Join tbl_masterac ON tbl_masterac.ACReg = aircraftflightlog.acReg WHERE DATE_FORMAT(aircraftflightlog.blockOffDate,'%Y-%m') =  '".$periode."' AND aircraftflightlog.voidStatus =  'false' AND aircraftflightlog.revenue <>  'Revenue' AND aircraftflightlog.landingType <>  'TF' AND aircraftflightlog.acReg <>  'PK-TES' AND tbl_masterac.ACType IN  ('".$qryline."') GROUP BY `aircraftflightlog`.`acReg`";
	$resultFHnorev = mysql_query($qryFHnorev);//die($qryFHnorev);
	while ($hasilFHnorev = mysql_fetch_array($resultFHnorev))
	{
		$hournorev[$hasilFHnorev["acReg"]] = $hasilFHnorev["FlightHours"];
		$cyclenorev[$hasilFHnorev["acReg"]] = $hasilFHnorev["cycle"];
		$blocknorev[$hasilFHnorev["acReg"]] = $hasilFHnorev["BlockHours"];
	}
	//die(print_r($hournorev));
	$qryavail = "SELECT Count(distinct `aircraftflightlog`.`airborneDate`) AS Jumlah, aircraftflightlog.acReg AS acReg FROM aircraftflightlog Inner Join tbl_masterac ON aircraftflightlog.acReg = tbl_masterac.ACReg where (`aircraftflightlog`.`voidStatus` = _latin1'false') AND DATE_FORMAT(`aircraftflightlog`.airborneDate,'%Y-%m') = '".$periode."' AND `tbl_masterac`.`ACType` IN ('".$qryline."') AND `aircraftflightlog`.`acReg` <> 'PK-TES' GROUP BY aircraftflightlog.acReg";
	//"AND `aircraftflightlog`.`landingType` <> 'TF'";
	//die(print_r($qryavail));
	$resultavail = mysql_query($qryavail);
	while ($hasilavail = mysql_fetch_array($resultavail))
	{
		$avail[$hasilavail["acReg"]] = $hasilavail["Jumlah"];
		//$reg[] = $hasilavail["acReg"];
	}
	//die(print_r($avail));
	$qryTSN = "SELECT SUM( TIME_TO_SEC(`aircraftflightlog`.`airTime`)) AS `Jumlah`, Sum(`aircraftflightlog`.`landing`) AS `Cycle`, DATE_FORMAT(airborneDate,'%Y-%m') AS `periode`, `aircraftflightlog`.`acReg` FROM aircraftflightlog Inner Join tbl_masterac ON aircraftflightlog.acReg = tbl_masterac.ACReg WHERE (aircraftflightlog.blockOffDate BETWEEN  '2008-01-01' AND '".$periode."-30') AND tbl_masterac.ACType IN  ('".$qryline."') AND aircraftflightlog.voidStatus =  'false' AND aircraftflightlog.acReg <>  'PK-TES' GROUP BY `aircraftflightlog`.`acReg` ORDER BY `aircraftflightlog`.`acReg` ASC";//die($qryTSN);
	$resultTSN = mysql_query($qryTSN);//die($qryTSN);
	while ($hasilTSN = mysql_fetch_array($resultTSN))
	{
		$hourtsn[strtoupper($hasilTSN["acReg"])] = ($hasilTSN["Jumlah"] - ($hasilTSN["Jumlah"] % 3600))/3600;
		$minutetsn[strtoupper($hasilTSN["acReg"])] = (($hasilTSN["Jumlah"] % 3600) - (($hasilTSN["Jumlah"] % 3600) % 60))/60;
		//unset($hourtsn[$hasilTSN["acReg"]][2]);
		$cyclecsn[strtoupper($hasilTSN["acReg"])] = $hasilTSN["Cycle"];
	}
	//die(print_r($hourtsn));
	$qryinitTSN = "SELECT `tbl_init_fhours_and_fcycles`.`acreg`, `tbl_init_fhours_and_fcycles`.`fhours`, `tbl_init_fhours_and_fcycles`.`fcycles` FROM `tbl_init_fhours_and_fcycles`";
	$resultinittsn = mysql_query($qryinitTSN);//die($qryinitTSN);
	while ($hasilinitTSN = mysql_fetch_array($resultinittsn))
	{
		$hourinittsn[$hasilinitTSN["acreg"]] = explode(":",$hasilinitTSN["fhours"]);
		//unset($hourtsn[$hasilinitTSN["acreg"]][2]);
		$cycleinitcsn[$hasilinitTSN["acreg"]] = $hasilinitTSN["fcycles"];
	}
	//die(print_r($hourinittsn));
	mysql_close($conn);
	$conte = connectimesysTE();
	$i = 0;
	$qryacreg = "SELECT tbl_masterac.ACType, tbl_masterac.ACReg FROM tbl_masterac WHERE tbl_masterac.ACType =  '".$qryline."' AND Active = 1";
	$resultacreg = mysql_query($qryacreg);//die($qryacreg);
	while ($hasilreg = mysql_fetch_array($resultacreg))
	{
		$reg[] = strtoupper($hasilreg["ACReg"]);
		//echo $hasilreg[0];
	}
	//die(print_r($reg));
	mysql_close();
	sort($reg);
	//die(print_r($reg));
	//sort($reg);
	foreach ($reg as $k => $v){
		/*$jamrev[$v] = explode(":",$hourrev[$v]);$jamnorev[$v] = explode(":",$hournorev[$v]);
		if(($jamrev[$v][1] + $jamnorev[$v][1]) >= 60){
			$totaljam[$v] = $jamrev[$v][0] + $jamnorev[$v][0] + 1;
			$totalmenit[$v] = ($jamrev[$v][1] + $jamnorev[$v][1]) - 60;
		} else {
			$totaljam[$v] = $jamrev[$v][0] + $jamnorev[$v][0];
			$totalmenit[$v] = $jamrev[$v][1] + $jamnorev[$v][1];
		}

		if (($totalmenit[$v] + $hourinittsn[$v][1]) >= 60){
		$menitfinal[$v] = ($totalmenit[$v] + $hourinittsn[$v][1]) - 60;
		$hourfinal[$v] = $totaljam[$v] + $hourinittsn[$v][0] + 1;
		} else {
		$menitfinal[$v] = ($totalmenit[$v] + $hourinittsn[$v][1]);
		$hourfinal[$v] = $totaljam[$v] + $hourinittsn[$v][0];
		}*/
	}
	//die(print_r($hourtsn));
?>
<table width="100%"  border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td rowspan="2" align=center>AC Reg</td>
    <td colspan="3" align=center>Revenue</td>
    <td colspan="3" align=center>Non Revenue </td>
    <td rowspan="2" align=center>Available Days </td>
    <td rowspan="2" align=center>TSN</td>
    <td rowspan="2" align=center>CSN</td>
    <td rowspan="2"><p>Cek</p>
    <p>&nbsp;</p></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align=center>Block Hour </td>
    <td align=center>Flight Hour </td>
    <td align=center>Landing</td>
    <td align=center>Block Hour</td>
    <td align=center>Flight Hour </td>
    <td align=center>Landing</td>
    <td align=center>&nbsp;</td>
  </tr>
  <?

  foreach ($reg as $key => $value){
  $blockrev[$value] = isset($blockrev[$value]) ? $blockrev[$value] : 0;
  $hourrev[$value] = isset($hourrev[$value]) ? $hourrev[$value] : 0;
  $cyclerev[$value] = isset($cyclerev[$value]) ? $cyclerev[$value] : 0;
  $blocknorev[$value] = isset($blocknorev[$value]) ? $blocknorev[$value] : 0;
  $hournorev[$value] = isset($hournorev[$value]) ? $hournorev[$value] : 0;
	$cyclenorev[$value] = isset($cyclenorev[$value]) ? $cyclenorev[$value] : 0;
	$avail[$value] = isset($avail[$value]) ? $avail[$value] : 0;
	$hourinittsn[$value] = isset($hourinittsn[$value]) ? $hourinittsn[$value] : 0;
	$cycleinitcsn[$value] = isset($cycleinitcsn[$value]) ? $cycleinitcsn[$value] : 0;
	$hourtsn[$value] = isset($hourtsn[$value]) ? $hourtsn[$value] : 0;
	$cyclecsn[$value] = isset($cyclecsn[$value]) ? $cyclecsn[$value] : 0;

		$jamrev[$value] = explode(":",$hourrev[$value]);$jamnorev[$value] = explode(":",$hournorev[$value]);
		$jamrev[$value][1] = isset($jamrev[$value][1]) ? $jamrev[$value][1] : 0;
		$jamnorev[$value][1] = isset($jamnorev[$value][1]) ? $jamnorev[$value][1] : 0;
		if(($jamrev[$value][1] + $jamnorev[$value][1]) >= 60){
			$totaljam[$value] = $jamrev[$value][0] + $jamnorev[$value][0] + 1;
			$totalmenit[$value] = ($jamrev[$value][1] + $jamnorev[$value][1]) - 60;
		} else {
			$totaljam[$value] = $jamrev[$value][0] + $jamnorev[$value][0];
			$totalmenit[$value] = $jamrev[$value][1] + $jamnorev[$value][1];
		}

		if (($minutetsn[$value] + $hourinittsn[$value][1]) >= 60){
		$menitfinal[$value] = ($minutetsn[$value] + $hourinittsn[$value][1]) - 60;
		$hourfinal[$value] = $hourtsn[$value] + $hourinittsn[$value][0] + 1;
		} else {
		$menitfinal[$value] = ($minutetsn[$value] + $hourinittsn[$value][1]);
		$hourfinal[$value] = $hourtsn[$value] + $hourinittsn[$value][0];
		}
  ?>

  <tr>
    <td align=center><?= $value?></td>
    <td align=center><?= $blockrev[$value]?></td>
    <td align=center><?= $hourrev[$value]?></td>
    <td align=center><?= $cyclerev[$value]?></td>
    <td align=center><?= $blocknorev[$value]?></td>
    <td align=center><?= $hournorev[$value]?></td>
    <td align=center><?= $cyclenorev[$value]?></td>
    <td align=center><?= $avail[$value]?></td>
    <td align=center><?= $hourfinal[$value]?> : <?= $menitfinal[$value]?></td>
    <td align=center><?= ($cyclecsn[$value] + $cycleinitcsn[$value])?></td>
    <td><input type=checkbox name=<?= $value?> value=<?= $value?>></td>
    <td>&nbsp;</td>
  </tr>
  <?
  }
 //print_r($hourinittsn);
  ?>
</table>
</form>
<p>&nbsp;  </p>
<?

$conTE = connectimesysTE();
$actype = ($actype == "'B737-300C','B737-400C'") ? $actype = "'B737-CL'" : $actype;
$actype = $_REQUEST["actype"];
if ($actype == "A330") {
	$qryline = "`tbl_masterac`.`ACType` IN ('A330-200','A330-300')";
} else {
	//$qryline = "`tbl_masterac`.`ACType` IN ('$actype')";
	$qryline = $actype;
}
$qryreg = "SELECT * FROM `tbl_masterac` WHERE ACType IN ('".$qryline."')";
$resultregTE = mysql_query($qryreg);//die($qryreg);
while ($hasilregbaru = mysql_fetch_array($resultregTE))
	{
		$regID[$hasilregbaru["ACReg"]] = $hasilregbaru["IDreg"];
		$actypecol[$hasilregbaru["ACReg"]] = $hasilregbaru["ACType"];
	}
//die(print_r($regID));
$val = "";
$qryinsert = "INSERT INTO tbl_monthlyfhfc (IDReg,Reg,Actype,RevBHHours,RevBHMin,RevFHHours,RevFHMin,RevFC,NORevBHHours,NoRevBHMin,NoRevFHHours,NoRevFHMin,NoRevFC,MonthEval,AvaiDays,TSN,TSNMin,CSN) VALUES ";
//die(print_r($reg));
foreach ($reg as $key => $value){
	$val .= ($key == 0) ? "" : ",";
	$val .= "('".$regID[$value]."','";//idreg
	$val .= $value."','";
	$val .= $actypecol[$value]."','";
	$blockrevutuh[$value] = explode(":",$blockrev[$value]);
	$val .= $blockrevutuh[$value][0]."','";//revbhhour
	$val .= isset($blockrevutuh[$value][1]) ? $blockrevutuh[$value][1]."','" : "0','";//revbhmin
	$hourrevutuh[$value] = explode(":",$hourrev[$value]);
	$val .= $hourrevutuh[$value][0]."','";//revfhhour
	$val .= isset($hourrevutuh[$value][1]) ? $hourrevutuh[$value][1]."','" : "0','";//revfhmin
	$val .= $cyclerev[$value]."','";//revcycle
	$blocknorevutuh[$value] = explode(":",$blocknorev[$value]);
	$val .= $blocknorevutuh[$value][0]."','";//blocknorevfh
	$val .= isset($blocknorevutuh[$value][1]) ? ($blocknorevutuh[$value][1]."','") : "0','";///blocknorevmin
	$hournorevutuh[$value] = explode(":",$hournorev[$value]);
	$val .= $hournorevutuh[$value][0]."','";//hour no rev
	$val .= isset($hournorevutuh[$value][1]) ? $hournorevutuh[$value][1]."','" : "0','";//min no rev
	$val .= $cyclenorev[$value]."','";//norev FC
	$val .= $periode."-01','";
	$val .= $avail[$value]."','";//availabae daya
	$val .= $hourfinal[$value]."','";//TSN
	$val .= $menitfinal[$value]."','";//TSN min
	$val .= ($cycleinitcsn[$value] + $cyclecsn[$value])."')";//CSN

	

	
}

$qryfinal = $qryinsert.$val;//die($qryfinal);
//$masukkeTE = mysql_query($qryfinal);
mysql_close();
print_r($qryfinal);
?>
</body>
</html>
