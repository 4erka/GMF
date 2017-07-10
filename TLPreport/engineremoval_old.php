<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
.style1 {
	font-size: 24px;
	font-weight: bold;
}
.style2 {font-size: 12px}
.style3 {font-family: Verdana, Arial, Helvetica, sans-serif}
-->
</style>
</head>
<?
  include("function.php");
  $periode = isset($_REQUEST["periode"]) ? $_REQUEST["periode"] : "";
  $actype = isset($_REQUEST["actype"]) ? $_REQUEST["actype"] : "";
  $group = isset($_REQUEST["groupby"]) ? $_REQUEST["groupby"] : "";

  $TE = connectimesysTE();
  $arractype = selectactype();
  $arrengine = selectengine();
  $arrperiode = selectperiode();
  $arrgroup = array("Aircraft" => "Aircraft","Engine" => "Engine");
  $arrcombo = (isset($_REQUEST["groupby"]) && ($_REQUEST["groupby"] == "Aircraft")) ? $arractype : $arrengine;
?>

<body>
<script language="javascript">

function group_change() {
	location.href = "<?=$_SERVER['PHP_SELF']?>?groupby=" + document.frm1.groupby.value + "&periode=" + document.frm1.periode.value;
}

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

function export_excel()
  {
        if (document.frm1.periode.value == 0) {
                alert('Please Select week');
        } else if (document.frm1.actype.value == 0) {
                alert('Please Select "Periode"');
        } else {
				
        	   var str = "engineremoval_excel.php?actype=" + escape(document.frm1.actype.value) + "&periode=" + escape(document.frm1.periode.value) + "&groupby=" + escape(document.frm1.groupby.value);
                window.open(str);
        }
  }

function export_pdf()
  {
        if (document.frm1.periode.value == 0) {
                alert('Please Select Peroode');
        } else if (document.frm1.actype.value == 0) {
                alert('Please Select "Periode"');
        } else {
				
        	   //var str = "excel.php?actype=" + escape(document.frm1.actype.value) + "&weeknum=" + escape(document.frm1.weeknum.value)+ "&year=" + escape(document.frm1.year.value);
                window.open("engrem_pdf.php?actype=" + escape(document.frm1.actype.value) + "&periode=" + escape(document.frm1.periode.value) + "&groupby=" + escape(document.frm1.groupby.value));
        }
  }
</script>

<p align="center" class="style1 style3">ENGINE REMOVAL &amp; SHUTDOWN</p>
<p align="center" class="style1"><?= $actype?></p>
<form name="frm1" method="GET">
<p>
Periode (yyyy-mm)&nbsp&nbsp&nbsp<?
cmbbox("periode",$arrperiode,$periode,'',1);
?>  &nbsp&nbsp&nbsp Group By &nbsp&nbsp&nbsp
<?
	cmbbox("groupby",$arrgroup,$group,'group_change()',1);
?>
&nbsp&nbsp&nbsp
<?  
	cmbbox("actype",$arrcombo,$actype,'',1);
?>

    <input type="submit" name="Submit" value="Submit">
    <input type="submit" name="Submit2" value="Excel" onClick="export_excel()">
	<input type="submit" value="PDF" onClick="export_pdf()">
</p>
</form>
<? 
$year = substr($periode,0,4);$bulan = substr($periode,5,2);
if ($bulan == 12){
	$lastyear = $year;$lastbulan = "01";
} else {
	$lastyear = $year - 1;$lastbulan = substr("0".($bulan + 1),-2,2);
}
$lastperiode = $lastyear."-".$lastbulan;
if ($_REQUEST["groupby"] == "Engine") {
		$actype = engineaircraft($actype);
	}

//$engine = engineremoval($periode,$actype)
$qryFH = "SELECT `tbl_removaldesc`.`Reason`, `tbl_engineremove`.`DateRemove`, `tbl_engineremove`.`Station`, `tbl_engineremove`.`AircraftReg`, `tbl_engineremove`.`Pos`, `tbl_engineremove`.`SNOff`, `tbl_engineremove`.`TSI`,`tbl_engineremove`.`CSI`, `tbl_engineremove`.`TSN`, `tbl_engineremove`.`CSN`, `tbl_engineremove`.`Remark` FROM `tbl_engineremove` Inner Join `tbl_removaldesc` ON `tbl_engineremove`.`ReasonRemoval` = `tbl_removaldesc`.`ID` WHERE `tbl_engineremove`.`AircraftType` IN ('".$actype."') AND (DATE_FORMAT(`tbl_engineremove`.`DateRemove`,'%Y-%m') BETWEEN '".$lastperiode."' AND '".$periode."') ORDER BY `tbl_engineremove`.`DateRemove` DESC";//die($qryFH);
	$resultFH = mysql_query($qryFH);
//die($qryFH);


?>
<table width="100%"  border="2" cellpadding="5" cellspacing="0">
  <tr>
    <th width="0" rowspan="6" scope="col"><span class="style2">DATE</span><span class="style2"></span><span class="style2"></span><span class="style2"></span><span class="style2"></span><span class="style2"></span></th>
    <th width="0" rowspan="6" scope="col"><span class="style2">STATION</span><span class="style2"></span><span class="style2"></span><span class="style2"></span><span class="style2"></span><span class="style2"></span></th>
    <th width="0" rowspan="6" scope="col"><span class="style2">AIRCRAFT</span><span class="style2"></span><span class="style2"></span><span class="style2"></span><span class="style2"></span><span class="style2"></span></th>
    <th width="0" rowspan="6" scope="col"><span class="style2">POSITION</span><span class="style2"></span><span class="style2"></span><span class="style2"></span><span class="style2"></span><span class="style2"></span></th>
    <th colspan="10" scope="col"><span class="style2"></span><span class="style2"></span><span class="style2"></span><span class="style2"></span><span class="style2"></span><span class="style2"></span><span class="style2"></span><span class="style2"></span><span class="style2"></span><span class="style2">ENGINE SERIAL NUMBER </span></th>
    <th width="0" rowspan="6" scope="col"><span class="style2">TSI</span><span class="style2"></span><span class="style2"></span><span class="style2"></span><span class="style2"></span><span class="style2"></span></th>
    <th width="0" rowspan="6" scope="col"><span class="style2">CSI</span><span class="style2"></span><span class="style2"></span><span class="style2"></span><span class="style2"></span><span class="style2"></span></th>
    <th width="0" rowspan="6" scope="col"><span class="style2">TSN</span><span class="style2"></span><span class="style2"></span><span class="style2"></span><span class="style2"></span><span class="style2"></span></th>
    <th width="0" rowspan="6" scope="col"><span class="style2">CSN</span><span class="style2"></span><span class="style2"></span><span class="style2"></span><span class="style2"></span><span class="style2"></span></th>
    <th width="100%" rowspan="6" scope="col"><span class="style2">REMARK</span><span class="style2"></span><span class="style2"></span><span class="style2"></span><span class="style2"></span><span class="style2"></span></th>
  </tr>
  <tr>
    <th scope="row" rowspan="5"><span class="style2">CONVINIENCE</span><span class="style2"></span><span class="style2"></span><span class="style2"></span><span class="style2"></span></td>
    <th scope="row" colspan="9"><div align="center"><span class="style2"></span><span class="style2"></span><span class="style2"></span><span class="style2"></span><span class="style2"></span><span class="style2"></span><span class="style2"></span><span class="style2"></span><span class="style2">SHOP VISIT </span></div></td>
  </tr>
  <tr>
    <th scope="row" rowspan="4"><span class="style2">CAMPAIGN</span><span class="style2"></span><span class="style2"></span><span class="style2"></span></td>
    <th scope="row" colspan="8"><div align="center"><span class="style2"></span><span class="style2"></span><span class="style2"></span><span class="style2"></span><span class="style2"></span><span class="style2"></span><span class="style2"></span><span class="style2">REFURBISHMENT</span></div></td>
  </tr>
  <tr>
    <th scope="row" colspan="4"><div align="center"><span class="style2"></span><span class="style2"></span><span class="style2"></span><span class="style2">PREDEFINED</span></div></td>
    <th scope="row" colspan="4"><div align="center"><span class="style2"></span><span class="style2"></span><span class="style2"></span><span class="style2">PREMATURE</span></div></td>
  </tr>
  <tr>
    <th scope="row" colspan="2"><div align="center"><span class="style2"></span><span class="style2">BASIC</span></div></td>
    <th scope="row" colspan="2"><div align="center"><span class="style2"></span><span class="style2">NON BASIC </span></div></td>
    <th scope="row" colspan="2"><div align="center"><span class="style2"></span><span class="style2">BASIC</span></div></td>
    <th scope="row" colspan="2"><div align="center"><span class="style2"></span><span class="style2">NON BASIC </span></div></td>
  </tr>
  <tr>
    <th scope="row"><div align="center"><span class="style2">PLANNED</span></div></td>
    <th scope="row"><div align="center"><span class="style2">UNPLANNED</span></div></td>
    <th scope="row"><div align="center"><span class="style2">PLANNED</span></div></td>
    <th scope="row"><div align="center"><span class="style2">UNPLANNED</span></div></td>
    <th scope="row"><div align="center"><span class="style2">PLANNED</span></div></td>
    <th scope="row"><div align="center"><span class="style2">UNPLANNED</span></div></td>
    <th scope="row"><div align="center"><span class="style2">PLANNED</span></div></td>
    <th scope="row"><div align="center"><span class="style2">UNPLANNED</span></div></td>
  </tr>
  <? 
  while ($hasil = mysql_fetch_array($resultFH))
  { 
  ?>
  <tr>
    <th scope="row"><div align="center"><span class="style2">
      <?= $hasil["DateRemove"]?>
    </span></div></th>
    <td><div align="center"><span class="style2">
      <?= $hasil["Station"]?>
    </span></div></td>
    <td><div align="center"><span class="style2">
      <?= $hasil["AircraftReg"]?>
    </span></div></td>
    <td><div align="center"><span class="style2">
      <?= $hasil["Pos"]?>
    </span></div></td>
    <td><div align="center"><span class="style2">
      <?= convinience($hasil["Reason"],$hasil["SNOff"])?>
    </span></div></td>
    <td><div align="center"><span class="style2">
      <?= campaign($hasil["Reason"],$hasil["SNOff"])?>
    </span></div></td>
    <td><div align="center"><span class="style2">
      <?= predbasicplan($hasil["Reason"],$hasil["SNOff"])?>
    </span></div></td>
    <td><div align="center"><span class="style2">
      <?= predbasicunplan($hasil["Reason"],$hasil["SNOff"])?>
    </span></div></td>
    <td><div align="center"><span class="style2">
      <?= prednonbasicplan($hasil["Reason"],$hasil["SNOff"])?>
    </span></div></td>
    <td><div align="center"><span class="style2">
      <?= prednonbasicunplan($hasil["Reason"],$hasil["SNOff"])?>
    </span></div></td>
    <td><div align="center"><span class="style2">
      <?= prembasicplan($hasil["Reason"],$hasil["SNOff"])?>
    </span></div></td>
    <td><div align="center"><span class="style2">
      <?= prembasicunplan($hasil["Reason"],$hasil["SNOff"])?>
    </span></div></td>
    <td><div align="center"><span class="style2">
      <?= premnonbasicplan($hasil["Reason"],$hasil["SNOff"])?>
    </span></div></td>
    <td><div align="center"><span class="style2">
      <?= premnonbasicunplan($hasil["Reason"],$hasil["SNOff"])?>
    </span></div></td>
    <td><div align="center"><span class="style2">
      <?= $hasil["TSI"]?>
    </span></div></td>
    <td><div align="center"><span class="style2">
      <?= $hasil["CSI"]?>
    </span></div></td>
    <td><div align="center"><span class="style2">
      <?= $hasil["TSN"]?>
    </span></div></td>
    <td><div align="center"><span class="style2">
      <?= $hasil["CSN"]?>
    </span></div></td>
    <td width="200" nowrap><span class="style2"><?= $hasil["Remark"]?></span></td>
  </tr>
  <? 
  } 
  ?>
</table>
<p>&nbsp;</p>
</body>
</html>
