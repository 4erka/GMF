<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
.style1 {font-size: 12px}
.style2 {
	font-size: 24px;
	font-weight: bold;
}
-->
</style>
<?
  include("function.php");
  $periode = isset($_REQUEST["periode"]) ? $_REQUEST["periode"] : "";
  //$year = isset($_REQUEST["year"]) ? $_REQUEST["year"] : "";
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
                alert('Please Select Periode');
        } else if (document.frm1.actype.value == 0) {
                alert('Please Select AC Type');
        } else {
				
        	   var str = "GrafikAtaDelay.php?actype=" + escape(document.frm1.actype.value) + "&periode=" + escape(document.frm1.periode.value);
                window.open(str);
        }
  }
</script>
<p align="center" class="style2">Graph ATA Delay</p>
<p><form name="frm1" method="GET">
<p>Periode (yyyy-mm) &nbsp&nbsp&nbsp

  <?
cmbbox("periode",$arrperiode,$periode,'',1);
?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
Aircraft Type &nbsp&nbsp&nbsp
<?  
cmbbox("actype",$arractype,$actype,'',1);
?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
 <input type="submit" name="Submit" value="Display Report" onClick="display_report()">&nbsp;&nbsp;
 <input type="submit" name="Submit2" value="Export Excel" onClick="export_excel()">
</p>
</form>&nbsp;</p>
<?
	//$connectTE = connectimesysTE();
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
	
	$FC = queryFC12rev($periode,$actype,24);
	$bulan24 = array_keys($FC);//die(print_r($bulan24));
	$bulan = array_reverse(array_slice($bulan24,0,12));
	$ATAdata = ATAdelay($bulan24[23],$bulan24[0],$actype);//die(print_r($ATAdata));

	
	//$connectAMS = connectimesys('imesys');

	$ATA = ATAdef();
	$ATAdesc = ATAdesc();

	foreach ($ATAdata as $k => $v){
		$newATAdelay[$k]['OT'] = 0;
		foreach ($v as $key => $value){
			if ($key < '21'){
				$newATAdelay[$k]['OT'] += $value;
			} else {
				$newATAdelay[$k][$key] = $value;
			}
		}
	}
	//$newATAdelay12bulan['OT'] = 0;
	//foreach ($ATAdelay12bulan as $k => $v){
	//	if ($k < '21'){
	//		$newATAdelay12bulan['OT'] += $v;
	//	} else {
	//		$newATAdelay12bulan[$k] = $v;
	//	}
	//}
	

	foreach ($ATAdata as $key => $value){
		foreach ($value as $k => $v){
			$jumlahrate[$k] = $v/$FC[$key] * 1000;
		}
		$ATArate[$key] = $jumlahrate;
	}

		if (substr($periode,-2,2) <= 06){
			$timestart = ((substr($periode,0,4))-1)."-12";
		} else {
			$timestart = ((substr($periode,0,4)))."-06";
		}
		$ataalert = array_slice($ATArate,array_search($timestart,$bulan24),12);
		//die($ataalert[21]);
		//die(print_r($ataalert));
	foreach ($ATA as $key => $value){
		$sigma_temp = 0;$jumlah = 0;
		foreach ($ataalert as $k => $v){
			$v[$value] = isset($v[$value]) ? $v[$value] : 0;
			$jumlah += $v[$value];
		}
		$mean = $jumlah/12;
		foreach ($ataalert as $k => $v){
			$v[$value] = isset($v[$value]) ? $v[$value] : 0;
			$sigma_temp += ($v[$value] - $mean) * ($v[$value] - $mean);
		}
		$standard_deviation = sqrt($sigma_temp / 12);
		$alertlevel[$value] = $mean + (2.5 * $standard_deviation);
	}
	mysql_close($TE);	
	//die(print_r($alertlevel));
?>
<table width="100%"  border="1" cellspacing="0" cellpadding="0">
  <tr>
    <th colspan="2" scope="col"><div align="center" class="style1">REVENUE FLIGHT CYCLE </div></th>
<?
foreach ($bulan as $key => $value){
?>
    <th scope="col"><div align="center" class="style1"><?= $FC[$value]?></div></th>
<?
}
?>
    <th scope="col"><div align="center"><span class="style1"></span></div></th>
  </tr>
  <tr>
    <th colspan="2" rowspan="2" scope="row"><div align="center"><span class="style1"></span></div></th>
<?
foreach ($bulan as $key => $value){
?>
    <td><div align="center" class="style1"><?= bulan($value)?></div></td>
<?
}
?>
   <td><div align="center" class="style1">ALERT</div></td>
  </tr>
  <tr>
    <td><div align="center"><span class="style1"></span></div></td>
    <td><div align="center"><span class="style1"></span></div></td>
    <td><div align="center"><span class="style1"></span></div></td>
    <td><div align="center"><span class="style1"></span></div></td>
    <td><div align="center"><span class="style1"></span></div></td>
    <td><div align="center"><span class="style1"></span></div></td>
    <td><div align="center"><span class="style1"></span></div></td>
    <td><div align="center"><span class="style1"></span></div></td>
    <td><div align="center"><span class="style1"></span></div></td>
    <td><div align="center"><span class="style1"></span></div></td>
    <td><div align="center"><span class="style1"></span></div></td>
    <td><div align="center"><span class="style1"></span></div></td>
    <td><div align="center" class="style1">LEVEL</div></td>
  </tr>
 <?
 foreach ($ATA as $k => $v){
	 $alertlevel[$v] = isset($alertlevel[$v]) ? $alertlevel[$v] : 0;
 ?>
  <tr>
    <th scope="row"><div align="center" class="style1"><?= $v?></div></th>
    <td><div align="center" class="style1"><?= $ATAdesc[$k]?></div></td>
	<?
	 foreach ($bulan as $key => $value){
	 $newATAdelay[$value][$v] = isset($newATAdelay[$value][$v]) ? $newATAdelay[$value][$v] : 0;
	?>
    <td><div align="center"><span class="style1"><?= $newATAdelay[$value][$v]?></span></div></td>
	<?
	}
	?>
    <td><div align="center"><span class="style1"><?= round($alertlevel[$v],2)?></span></div></td>
  </tr>

  <tr>
    <th scope="row"><div align="center"><span class="style1"></span></div></th>
    <td><div align="center" class="style1">
      <div align="right">ALERT</div>
    </div></td>
    <td><div align="center"><span class="style1"></span></div></td>
    <td><div align="center"><span class="style1"></span></div></td>
    <td><div align="center"><span class="style1"></span></div></td>
    <td><div align="center"><span class="style1"></span></div></td>
    <td><div align="center"><span class="style1"></span></div></td>
    <td><div align="center"><span class="style1"></span></div></td>
    <td><div align="center"><span class="style1"></span></div></td>
    <td><div align="center"><span class="style1"></span></div></td>
    <td><div align="center"><span class="style1"></span></div></td>
    <td><div align="center"><span class="style1"></span></div></td>
    <td><div align="center"><span class="style1"></span></div></td>
    <td><div align="center"><span class="style1"></span></div></td>
    <td><div align="center"><span class="style1"></span></div></td>
  </tr>
  <tr>
    <th scope="row"><div align="center"><span class="style1"></span></div></th>
    <td><div align="center" class="style1">
      <div align="right">RATE</div>
    </div></td>
	<?
	  foreach ($bulan as $key => $value){
	?>
    <td><div align="center"><span class="style1"><?= round(($newATAdelay[$value][$v]/$FC[$value] * 1000),2)?></span></div></td>
	<?
	}
	?>
    <td><div align="center"><span class="style1"></span></div></td>
  </tr>
<?
}	 
?>

  <tr>
    <th scope="row"><div align="center" class="style1">OT</div></th>
    <td><div align="center" class="style1">OTHER</div></td>
	<?
	 foreach ($bulan as $key => $value){
	 $newATAdelay[$value]['OT'] = isset($newATAdelay[$value]['OT']) ? $newATAdelay[$value]['OT'] : 0;
	?>
    <td><div align="center"><span class="style1"><?= $newATAdelay[$value]['OT']?></span></div></td>
	<?
	}
	$alertlevel['5'] = isset($alertlevel['5']) ? $alertlevel['5'] : 0;
	?>
    <td><div align="center"><span class="style1"><?= round($alertlevel['5'],2)?></span></div></td>
  </tr>

  <tr>
    <th scope="row"><div align="center"><span class="style1"></span></div></th>
    <td><div align="center" class="style1">
      <div align="right">ALERT</div>
    </div></td>
    <td><div align="center"><span class="style1"></span></div></td>
    <td><div align="center"><span class="style1"></span></div></td>
    <td><div align="center"><span class="style1"></span></div></td>
    <td><div align="center"><span class="style1"></span></div></td>
    <td><div align="center"><span class="style1"></span></div></td>
    <td><div align="center"><span class="style1"></span></div></td>
    <td><div align="center"><span class="style1"></span></div></td>
    <td><div align="center"><span class="style1"></span></div></td>
    <td><div align="center"><span class="style1"></span></div></td>
    <td><div align="center"><span class="style1"></span></div></td>
    <td><div align="center"><span class="style1"></span></div></td>
    <td><div align="center"><span class="style1"></span></div></td>
    <td><div align="center"><span class="style1"></span></div></td>
  </tr>
  <tr>
    <th scope="row"><div align="center"><span class="style1"></span></div></th>
    <td><div align="center" class="style1">
      <div align="right">RATE</div>
    </div></td>
	<?
	  foreach ($bulan as $key => $value){
	?>
    <td><div align="center"><span class="style1"><?= round(($newATAdelay[$value]['OT']/$FC[$value] * 1000),2)?></span></div></td>
	<?
	}
	?>
    <td><div align="center"><span class="style1"></span></div></td>
  </tr>


</table>
</body>
</html>
