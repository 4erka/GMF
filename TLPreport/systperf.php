<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
.style2 {	font-size: 24px;
	font-weight: bold;
}
.style3 {font-size: 12px}
-->
</style>
<?
  include("function.php");
  $periode = isset($_REQUEST["periode"]) ? $_REQUEST["periode"] : "";
  $actype = isset($_REQUEST["actype"]) ? $_REQUEST["actype"] : "";

  $TE = connectimesysTE();
  $arractype = selectactype();
  $arrperiode = selectperiode();


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
                        escape(document.frm1.periode.value);
        }
  }

function export_excel()
  {
        if (document.frm1.periode.value == 0) {
                alert('Please Select Peroode');
        } else if (document.frm1.actype.value == 0) {
                alert('Please Select "Periode"');
        } else {
                window.open("SystPerf_excel_new.php?actype=" + escape(document.frm1.actype.value) + "&periode=" + escape(document.frm1.periode.value));
        }
  }
</script>
<p align="center" class="style2">SYSTEM PERFORMANCE PIREP &amp; DELAY </p>
<p>
<form name="frm1" method="GET">
  <p>Periode (yyyy-mm) &nbsp&nbsp&nbsp
      <?
cmbbox("periode",$arrperiode,$periode,'',1);
?>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Aircraft Type &nbsp&nbsp&nbsp
     <?  
cmbbox("actype",$arractype,$actype,'',1);
?>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="submit" name="Submit" value="Display Report" onClick="display_report()">
  &nbsp;&nbsp;
      <input type="submit" name="Submit2" value="Export Excel" onClick="export_excel()">
  </p>
</form>
 
<p></p>
<?
	$connectTE = connectimesysTE();
	//die(print_r(ATA("2008-01","2008-03","B737-500")));
	$tahun = substr($periode,0,4);
	$bulanalert = substr($periode,-2,2);
	if ($bulanalert <= 06){
		//$tahun = $tahun - 1;
		$timeawal = ($tahun-1)."-01";
		$timeakhir = ($tahun-1)."-12";
	} else {
		$timeawal = ($tahun - 1)."-07";
		$timeakhir = $tahun."-06";
	}
	
			if ($periode == "" OR $actype == ""){
			die("Please Select Aircraft Type And Periode");
			}
	
	$FH = cumulativeFH12($periode,$actype,12);
	$FC = cumulativeFC12($periode,$actype,12);
	$reg = reg($actype);
	$delay = ATAdelayperformance($periode,$actype);

	$pirep = ATApirepperformance($periode,$actype);//die(print_r($FC));
	//die(print_r($ATA));

	$connectAMS = connectimesys('imesys');

	$ATA = ATAdef();
	
	
?>

<table width="100%"  border="1" cellspacing="0" cellpadding="0">
  <tr>
    <th rowspan="2" scope="col"><div align="center" class="style3">ATA</div></th>
    <th colspan="2" scope="col"><div align="center" class="style3">Total</div></th>
<?
foreach ($reg as $key => $value){
?>
    <th colspan="2" scope="col"><div align="center" class="style3"><?= $value?></div></th>
<?
}
?>
  </tr>
  <tr>
    <td><div align="center" class="style3">Pirep</div></td>
    <td><div align="center" class="style3">Delay</div></td>
	<?
	foreach ($reg as $key => $value){
	?>
    <td><div align="center" class="style3">Pirep</div></td>
    <td><div align="center" class="style3">Delay</div></td>
	<?
	}
	?>
  </tr>
  <tr>
<?
foreach ($ATA as $k => $v){
	$jumlahpirep[$v] = isset($pirep[$v]) ? array_sum($pirep[$v]) : 0;
	$jumlahdelay[$v] = isset($delay[$v]) ? array_sum($delay[$v]) : 0;
	
?>
    <th scope="row"><div align="center" class="style3"><?= $v?></div></th>
    <td><div align="center" class="style3"><?= $jumlahpirep[$v]?></div></td>
    <td><div align="center" class="style3"><?= $jumlahdelay[$v]?></div></td>
	<?
	foreach ($reg as $key => $value){
	$pirep[$v][$value] = isset($pirep[$v][$value]) ? $pirep[$v][$value] : 0;
	$delay[$v][$value] = isset($delay[$v][$value]) ? $delay[$v][$value] : 0;
	?>
    <td><div align="center" class="style3"><?= $pirep[$v][$value]?></div></td>
    <td><div align="center" class="style3"><?= $delay[$v][$value]?></div></td>
	<?
	}
	?>
  </tr>
<?
}
?>
  <tr>
    <th scope="row"><div align="center" class="style3">OT</div></th>
    <td><div align="center"><span class="style3"></span></div></td>
    <td><div align="center"><span class="style3"></span></div></td>
    <td><div align="center"><span class="style3"></span></div></td>
    <td><div align="center"><span class="style3"></span></div></td>
    <td><div align="center"></div></td>
    <td><div align="center"></div></td>
  </tr>
  <tr>
    <th scope="row"><div align="center" class="style3">Total</div></th>
    <td><div align="center" class="style3"><?= array_sum($jumlahpirep)?></div></td>
    <td><div align="center" class="style3"><?= array_sum($jumlahdelay)?></div></td>
	<?
	foreach ($reg as $key => $value){
		$jmlhpirep = 0;$jmlhdelay = 0;
		foreach ($ATA as $k => $v){
			$jmlhpirep += $pirep[$v][$value];
			$jmlhdelay += $delay[$v][$value];
		}
	?>
    <td><div align="center" class="style3"><?= $jmlhpirep?></div></td>
    <td><div align="center" class="style3"><?= $jmlhdelay?></div></td>
	<?
	}
	?>
  </tr>
  <tr>
    <th scope="row"><div align="center" class="style3">Total Fhrs/Cycles </div></th>
    <td colspan="2"><div align="center" class="style3"><?= array_sum($FH)?>/<?= array_sum($FC)?></div></td>
	<?
	foreach ($reg as $key => $value){
	$FH[$value] = isset($FH[$value]) ? $FH[$value] : 0;
	$FC[$value] = isset($FC[$value]) ? $FC[$value] : 0;
	?>
    <td colspan="2"><div align="center" class="style3"><?= $FH[$value]?>/<?= $FC[$value]?></div></td>
	<?
	}
	?>
  </tr>
</table>
<p>&nbsp;</p>
</body>
</html>
