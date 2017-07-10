<?
//define('REPORT_TYPE','pirep'); 

include("function.php");

$ATA = $_REQUEST['ATA'];
$periode = $_REQUEST['periode'];
$kriteria = $_REQUEST['kriteria'];
$type = $_REQUEST['type'];
$change = isset($_REQUEST['group']) ? $_REQUEST['group'] : 1;

$TE = connectimesysTE();
if ($change == 1){
		$selected1 = "selected";
		$selected2 = "";
	} else {
		$selected2 = "selected";
		$selected1 ="";
	}

if ($ATA == "OT"){
	$ATA = "05";
}
	if ($type == "B737-Classic") {
		$type = "B737-300','B737-400','B737-500','B737-CL";
	} else if ($type == "B737-Classic GA") {
		$type = "B737-300','B737-400','B737-500";
	}

if ($kriteria == "pirep")
{
	if ($_REQUEST['type'] == "B737-Classic") {
		$qryline = "`tblpirep_swift`.`ACTYPE` IN ('B737-300','B737-400','B737-500','B737-CL')";
	} else if ($_REQUEST['type'] == "B737-Classic GA") {
		$qryline = "`tblpirep_swift`.`ACTYPE` IN ('B737-300','B737-400','B737-500')";
	} else if ($_REQUEST['type'] == "A330") {
		$qryline = "`tblpirep_swift`.`ACTYPE` IN ('A330-200','A330-300')";		
	} else if ($_REQUEST['type'] == "B737-800-E") {
		$qryline = "`tblpirep_swift`.`REG` Like 'GE%'";
	} else if ($_REQUEST['type'] == "B737-800-M") {
		$qryline = "(`tblpirep_swift`.`REG` Like 'GM%' or `tblpirep_swift`.`REG` Like 'GF%' or `tblpirep_swift`.`REG` Like 'GN%')";
	} else {
		$qryline = "`tblpirep_swift`.`ACTYPE` IN ('$type')";
	}
	$qryFH = "SELECT `tblpirep_swift`.`ID_new` AS `ID`,`tblpirep_swift`.`DATE` AS `date`, `tblpirep_swift`.`REG` AS `reg`, `tblpirep_swift`.`STADEP` AS `Sta`, `tblpirep_swift`.`ATA` AS `ata`, `tblpirep_swift`.`SUBATA` AS `subata`, `tblpirep_swift`.`PROBLEM` AS `problem`, `tblpirep_swift`.`ACTION` AS `action` FROM `tblpirep_swift` WHERE `tblpirep_swift`.`ATA` = '".$ATA."' AND ".$qryline." AND DATE_FORMAT(`tblpirep_swift`.`DATE`,'%Y-%m') = '".$periode."' AND (`tblpirep_swift`.`PirepMarep` = 'Pirep' OR `tblpirep_swift`.`PirepMarep` IS NULL) ORDER BY `tblpirep_swift`.`REG`, `tblpirep_swift`.`DATE`  ASC";
	$resultFH = mysql_query($qryFH);
	//die($qryFH);
}
else if ($kriteria == "marep")
{
	if ($_REQUEST['type'] == "B737-Classic") {
		$qryline = "`tblpirep_swift`.`ACTYPE` IN ('B737-300','B737-400','B737-500','B737-CL')";
	} else if ($_REQUEST['type'] == "B737-Classic GA") {
		$qryline = "`tblpirep_swift`.`ACTYPE` IN ('B737-300','B737-400','B737-500')";
	} else if ($_REQUEST['type'] == "A330") {
		$qryline = "`tblpirep_swift`.`ACTYPE` IN ('A330-200','A330-300')";		
	} else if ($_REQUEST['type'] == "B737-800-E") {
		$qryline = "`tblpirep_swift`.`REG` Like 'GE%'";
	} else if ($_REQUEST['type'] == "B737-800-M") {
		$qryline = "(`tblpirep_swift`.`REG` Like 'GM%' or `tblpirep_swift`.`REG` Like 'GF%' or `tblpirep_swift`.`REG` Like 'GN%')";
	} else {
		$qryline = "`tblpirep_swift`.`ACTYPE` IN ('$type')";
	}
	$qryFH = "SELECT `tblpirep_swift`.`ID_new` AS `ID`,`tblpirep_swift`.`DATE` AS `date`, `tblpirep_swift`.`REG` AS `reg`, `tblpirep_swift`.`STADEP` AS `Sta`, `tblpirep_swift`.`ATA` AS `ata`, `tblpirep_swift`.`SUBATA` AS `subata`, `tblpirep_swift`.`PROBLEM` AS `problem`, `tblpirep_swift`.`ACTION` AS `action` FROM `tblpirep_swift` WHERE `tblpirep_swift`.`ATA` = '".$ATA."' AND ".$qryline." AND DATE_FORMAT(`tblpirep_swift`.`DATE`,'%Y-%m') = '".$periode."' AND (`tblpirep_swift`.`PirepMarep` = 'Marep' OR `tblpirep_swift`.`PirepMarep` IS NULL) ORDER BY `tblpirep_swift`.`REG`, `tblpirep_swift`.`DATE`  ASC";
	$resultFH = mysql_query($qryFH);	
} else {
	if ($_REQUEST['type'] == "B737-Classic") {
		$qryline = "`mcdrnew`.`Actype` IN ('B737-300','B737-400','B737-500','B737-CL')";
	} else if ($_REQUEST['type'] == "B737-Classic GA") {
		$qryline = "`mcdrnew`.`Actype` IN ('B737-300','B737-400','B737-500')";
	} else if ($_REQUEST['type'] == "A330") {
		$qryline = "`mcdrnew`.`ACTYPE` IN ('A330-200','A330-300')";			
	} else if ($_REQUEST['type'] == "B737-800-E") {
		$qryline = "`mcdrnew`.`Reg` Like 'PK-GE%'";
	} else if ($_REQUEST['type'] == "B737-800-M") {
		$qryline = "(`mcdrnew`.`Reg` Like 'PK-GM%' or `mcdrnew`.`Reg` Like 'PK-GF%' or `mcdrnew`.`Reg` Like 'PK-GN%')";
	} else {
		$qryline = "`mcdrnew`.`Actype` IN ('$type')";
	}
	$qryFH = "SELECT `mcdrnew`.`ID` AS `ID`,`mcdrnew`.`DateEvent` AS `date`, `mcdrnew`.`Reg` AS `reg`, `mcdrnew`.`DepSta` AS `Sta`, `mcdrnew`.`ATAtdm` AS `ata`, `mcdrnew`.`SubATAtdm` AS `subata`, `mcdrnew`.`Problem` AS `problem`, `mcdrnew`.`Rectification` AS `action` FROM `mcdrnew` WHERE `mcdrnew`.`DCP` = 'D' AND `mcdrnew`.`ATAtdm` = '".$ATA."' AND DATE_FORMAT(mcdrnew.DateEvent,'%Y-%m') = '".$periode."' AND ".$qryline." ORDER BY `mcdrnew`.`Reg`, `mcdrnew`.`DateEvent` ASC";
	$resultFH = mysql_query($qryFH);
	//die($qryFH);
}
	//die($qryFH);
	while ($hasilFH = mysql_fetch_array($resultFH))
	{
		$date[] = $hasilFH["date"];
		$dateid[$hasilFH["ID"]] = array('date' => $hasilFH["date"],'reg' => $hasilFH["reg"],'sta' => $hasilFH["Sta"], 'ata' => $hasilFH["ata"],'subata' => $hasilFH["subata"],'problem' => $hasilFH["problem"],'action' => $hasilFH["action"]);
		$sta[] = $hasilFH["Sta"];
		$staid[$hasilFH["ID"]] = $hasilFH["Sta"];
		$reg[] = $hasilFH["reg"];
		$regid[$hasilFH["ID"]] = $hasilFH["reg"];
		$ata[] = $hasilFH["ata"];
		$ataid[$hasilFH["ID"]] = $hasilFH["ata"];
		$subata[] = $hasilFH["subata"];
		$subataid[$hasilFH["ID"]] = $hasilFH["subata"];
		$problem[] = $hasilFH["problem"];
		$problemid[$hasilFH["ID"]] = $hasilFH["problem"];
		$action[] = $hasilFH["action"];
		$actionid[$hasilFH["ID"]] = $hasilFH["action"];
		//$subatareg[$hasilFH["reg"]] = $hasilFH["subata"];
	}
	mysql_free_result($resultFH);
	mysql_close($TE);
	//die(print_r($subata));
	//$subatanew = array_count_values($subata);
	$regnew = array_count_values($reg);
	$mulai = 0;
	foreach ($regnew as $key => $value)
	{
		$arrchunkreg[$key] = array_slice($subata,$mulai,$value);
		$mulai = $mulai + $value;
		$arrreg[$key] = array_count_values($arrchunkreg[$key]);
	}
	$subatanew = array_count_values($subata);
	//die(print_r($arrchunkreg));

	//print_r($arrreg);
	//print_r($subatanew);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
.style1 {
	font-size: 18px;
	font-weight: bold;
}
.style3 {font-size: 12px}
.style5 {font-size: 12px; font-weight: bold; }
-->
</style>
</head>
<body>
<script language="javascript">
function display_report() {
                location.href = "<?=$_SERVER['PHP_SELF']?>?type=<?= $type?>&periode=<?= $periode?>&ATA=<?= $ATA?>&kriteria=<?= $kriteria?>&group="+ escape(document.frm1.group.value);
  }
</script>
<div align="center" class="style1">
  <p>Pilot Report Detail <?= $change?></p>
  <table border="1" cellspacing="0" cellpadding="0">
    <tr>
      <th scope="col">&nbsp;</th>
<? 
	foreach ($regnew as $key => $value){ ?>
      <th scope="col"><span class="style3">
        <?= $key?>
      </span> </th>
<? } ?>
      <th scope="col"><span class="style3">Total</span></th>
    </tr>
<? foreach ($subatanew as $k => $v) { ?>
    <tr>
      <th scope="row"><span class="style3">
        <?= $k?>
      </span></th>
	  <? 
	  foreach ($regnew as $key => $value) { 
		$arrreg[$key][$k] = isset($arrreg[$key][$k]) ? $arrreg[$key][$k] : 0;
	  ?>
      <td width="80"><div align="center" class="style3"><?= $arrreg[$key][$k]?>
      </div></td>
	  <? } ?>
      <td><div align="center" class="style3"><?= $v?>
        </div></td>
    </tr>
<? } ?>
    <tr>
      <th scope="row"><span class="style3">Total</span></th>
	  <? foreach ($regnew as $key => $value) { ?>
      <td width="80"><div align="center" class="style3"><?= $value?>
      </div></td>
	  <? } ?>
      <td><div align="center" class="style3"><?= array_sum($regnew)?>
        </div></td>
    </tr>
  </table>
<?
	
	//print_r($arrreg);
?>
  <p align="left">Detail Pirep </p>
  <p align="left" class="style3">Group By &nbsp&nbsp&nbsp
  <p align="left"></p>
  <table width="700" border="1" cellspacing="1" cellpadding="5">
    <tr>
      <th scope="col">No</th>
      <th width="80" scope="col">Date</th>
      <th width="50" scope="col">Reg</th>
      <th width="50" scope="col">ATA</th>
      <th width="100" scope="col">SubATA</th>
      <th scope="col">Problem</th>
      <th scope="col">Action</th>
    </tr>
<? foreach ($date as $k => $v) {?>
    <tr>
      <th scope="row"><div align="center"><span class="style3">
          <?= $k+1?>
      </span></div></th>
      <td width="80"><div align="center"><span class="style3">
        <?= $v?>
      </span></div></td>
      <td width="50"><div align="center"><span class="style3">
          <?= $reg[$k]?>
      </span></div></td>
      <td width="50"><div align="center"><span class="style3">
          <?= $ata[$k]?>
      </span></div></td>
      <td width="100"><div align="center"><span class="style3">
          <?= $subata[$k]?>
      </span></div></td>
      <td><span class="style3">
        <?= $problem[$k]?>
      </span></td>
      <td><span class="style3">
        <?= $action[$k]?>
      </span></td>
    </tr>
<? } ?>
   <!-- <tr>
      <th scope="row">&nbsp;</th>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>-->
    </tr>
  </table>
  <p align="left" class="style3">    
  <form name="frm1" method="GET">
  <select name="group" onchange="display_report()">
	<option value="1" <?= $selected1?>>Aircraft Reg </option>
	<option value="2" <?= $selected2?>>SubATA</option>
	</p>
  </form>
  <p align="left">&nbsp;</p>
  <p align="left" class="style3">&nbsp;</p>
</div>
</body>
</html>
