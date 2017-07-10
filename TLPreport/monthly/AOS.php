<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
.style1 {
	font-size: 30px;
	font-weight: bold;
}
-->
</style>
<?
  include("function.php");
  $periode = isset($_REQUEST["periode"]) ? $_REQUEST["periode"] : "";
  $actype = isset($_REQUEST["actype"]) ? $_REQUEST["actype"] : "";

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
        if (document.frm1.weeknum.value == 0) {
                alert('Please Select Peroode');
        } else if (document.frm1.year.value == 0) {
                alert('Please Select "Periode"');
        } else {
				
        	   var str = "excel.php?actype=" + escape(document.frm1.actype.value) + "&weeknum=" + escape(document.frm1.weeknum.value)+ "&year=" + escape(document.frm1.year.value);
                window.open(str);
        }
  }
</script>
<p align="center" class="style1">Aircraft Operation Summary</p>
<p><form name="frm1" method="get">
Periode <input type="text" name="periode" value="<?= $periode?>"> 
  Aircraft Type <input type="text" name="actype" value="<?= $actype?>">


  <input type="submit" value="Display Report" onClick="display_report()">
  <input type="submit" name="Submit2" value="Excel">
</form></p>
<?php 

	$connectAMS = connectimesys('imesys');
	$FH = queryFH12($periode,$actype);
	$bulan = array_reverse(array_keys($FH));
	$FC = queryFC12($periode,$actype);
	$fleet = fleet($periode,$actype);
	$available = available($bulan[0],$bulan[11],$actype);
	

	//last year
	$periodelastyear = (substr($periode,0,4) - 1)."-12";
	$FHlastyear = queryFH12($periodelastyear,$actype);
	$FClastyear = queryFC12($periodelastyear,$actype);
	$fleetlastyear = fleet($periodelastyear,$actype);
	$availablelastyear = available((substr($periode,0,4) - 1)."-01",(substr($periode,0,4) - 1)."-12",$actype);
	$connectnih = connectimesys('rmd');
	$incidentlastyear = incident($periodelastyear,$actype);
	$incident = incident($periode,$actype);

	$TE = connectimesysTE();
	$delay = ATAdelay($bulan[0],$bulan[11],$actype);//die(print_r($delay));
	foreach($delay as $k => $v){
		foreach($v as $key => $value){
			$ATA[$key] = $value;
		}
		$jumlah = array_sum($ATA);
		$techdelay[$k] = $jumlah;
	}
	$delaydurationmenit = delayduration($bulan[0],$bulan[11],$actype);
	foreach ($delaydurationmenit as $key => $value){
		$delayduration[$key] = round($value/60,0)." : ".($value % 60);
	}
	$cancel = querycancel($bulan[0],$bulan[11],$actype);
	
	//last year
	$delaylastyear = ATAdelay((substr($periode,0,4) - 1)."-01",(substr($periode,0,4) - 1)."-12",$actype);
	foreach($delaylastyear as $k => $v){
		foreach($v as $key => $value){
			$ATA[$key] = $value;
		}
		$jumlah = array_sum($ATA);
		$techdelaylastyear[$k] = $jumlah;
	}
	$delaydurationmenitlastyear = delayduration((substr($periode,0,4) - 1)."-01",(substr($periode,0,4) - 1)."-12",$actype);
	foreach ($delaydurationmenitlastyear as $key => $value){
		$delaydurationlastyear[$key] = round($value/60,0)." : ".($value % 60);
	}
	$cancellastyear = querycancel((substr($periode,0,4) - 1)."-01",(substr($periode,0,4) - 1)."-12",$actype);

	//die(print_r($techdelay));
?>
<table width="100%"  border="1">
  <tr>
    <th scope="col">&nbsp;</th>
    <th scope="col"><?= (substr($periode,0,4) - 1)?></th>
	<?
	foreach ($bulan as $key => $value){
		$techdelay[$value] = isset($techdelay[$value]) ? $techdelay[$value] : 0;
		$delayduration[$value] = isset($delayduration[$value]) ? $delayduration[$value] : 0;
		$avgduration[$value] = round($delaydurationmenit[$value] / $techdelay[$value],0);
		$avgduration[$value] = round($avgduration[$value]/60,0)." : ".($avgduration[$value] % 60);
		$avgduration[$value] = isset($avgduration[$value]) ? $avgduration[$value] : 0;
		$delayrate[$value] = $techdelay[$value] / (100 * $FC[$value]);
		$delayratelastyear[$value] = isset($FClastyear[$value]) ? ($techdelaylastyear[$value] / (100 * $FClastyear[$value])) : 0;
		$cancel[$value] = isset($cancel[$value]) ? $cancel[$value] : 0;
		$incident[$value] = isset($incident[$value]) ? $incident[$value] : 0;
	?>
    <th scope="col"><?= bulan($value)?></th>
	<?
		}
	?>
    <th scope="col">Last 12 Month </th>
  </tr>
  <tr>
    <th scope="row">A/C In Fleet </th>
    <td><div align="center"><?= round(array_sum($fleetlastyear)/12,0)?></div></td>
    <?
		foreach ($bulan as $key => $value){
	?>
	<td><div align="center"><?= $fleet[$value]?></div></td>
	<?
		}
	?>
    <td><div align="center"><?= round(array_sum($fleet)/12,0)?></div></td>
  </tr>
  <tr>
    <th scope="row">A/C In Service (Revenue) </th>
    <td><div align="center"><?= round(array_sum($availablelastyear)/365,2)?></div></td>
    <?
		foreach ($bulan as $key => $value){
	?>
	<td><div align="center"><?= round($available[$value]/jumlahbulan($value),2)?></div></td>
	<?
		}
	?>
    <td><div align="center"><?= round(array_sum($available)/365,2)?></div</td>
  </tr>
  <tr>
    <th scope="row">A/C Days In Service (Revenue) </th>
    <td><div align="center"><?= array_sum($availablelastyear)?></div></td>
    <?
		foreach ($bulan as $key => $value){
	?>
    <td><div align="center"><?= $available[$value]?></div></td>
	<?
		}
	?>
    <td><div align="center"><?= array_sum($available)?></div></td>
  </tr>
  <tr>
    <th scope="row">Flying Hours - Total </th>
	<td><div align="center"><?= array_sum($FHlastyear)?></div></td>
	<?
		foreach ($bulan as $key => $value){
	?>
    <td><div align="center"><?= $FH[$value]?></div></td>
	<?
		}
	?>
	<td><div align="center"><?= array_sum($FH)?></div></td>
  </tr>
  <tr>
    <th scope="row">- Revenue</th>
    <td><div align="center"><?= array_sum($FHlastyear)?></div></td>
    <?
		foreach ($bulan as $key => $value){
	?>
    <td><div align="center"><?= $FH[$value]?></div></td>
	<?
		}
	?>
	<td><div align="center"><?= array_sum($FH)?></div></td>
  </tr>
  <tr>
    <th scope="row">Take Off - Total </th>
	<td><div align="center"><?= array_sum($FClastyear)?></div></td>
	<?
		foreach ($bulan as $key => $value){
	?>
    <td><div align="center"><?= $FC[$value]?></div></td>
	<?
		}
	?>
	<td><div align="center"><?= array_sum($FC)?></div></td>
  </tr>
  <tr>
    <th scope="row">- Revenue </th>
    <td><div align="center"><?= array_sum($FClastyear)?></div></td>
    <?
		foreach ($bulan as $key => $value){
	?>
    <td><div align="center"><?= $FC[$value]?></div></td>
	<?
		}
	?>
	<td><div align="center"><?= array_sum($FC)?></div></td>
  </tr>
  <tr>
    <th scope="row">Flight Hour Per Take Off - Total </th>
    <td><div align="center"><?= (round(array_sum($FHlastyear)/array_sum($FClastyear),0))." : ".(round(((array_sum($FHlastyear)/array_sum($FClastyear))-round(array_sum($FHlastyear)/array_sum($FClastyear),0))*60,0))?></div></td>
	<?
		foreach ($bulan as $key => $value){
	?>
    <td><div align="center"><?= (round($FH[$value]/$FC[$value],0))." : ".abs(round((($FH[$value]/$FC[$value])-round($FH[$value]/$FC[$value],0))*60,0))?></div></td>
    <?
		}
	?>
    <td><div align="center"><?= (round(array_sum($FH)/array_sum($FC),0))." : ".(round(((array_sum($FH)/array_sum($FC))-round(array_sum($FH)/array_sum($FC),0))*60,0))?></div></td>
  </tr>
  <tr>
    <th scope="row">- Revenue </th>
    <td><div align="center"><?= (round(array_sum($FHlastyear)/array_sum($FClastyear),0))." : ".(round(((array_sum($FHlastyear)/array_sum($FClastyear))-round(array_sum($FHlastyear)/array_sum($FClastyear),0))*60,0))?></div></td>
    <?
		foreach ($bulan as $key => $value){
	?>
    <td><div align="center"><?= (round($FH[$value]/$FC[$value],0))." : ".abs(round((($FH[$value]/$FC[$value])-round($FH[$value]/$FC[$value],0))*60,0))?></div></td>
    <?
		}
	?>
    <td><div align="center"><?= (round(array_sum($FH)/array_sum($FC),0))." : ".(round(((array_sum($FH)/array_sum($FC))-round(array_sum($FH)/array_sum($FC),0))*60,0))?></div></td>
  </tr>
  <tr>
    <th scope="row">Daily Utiliz - Total FH </th>
    <td><div align="center"><?= round(array_sum($FHlastyear)/array_sum($availablelastyear),0)." : ". round(abs(round(array_sum($FHlastyear)/array_sum($availablelastyear),2) - round(array_sum($FHlastyear)/array_sum($availablelastyear),0))*60,0)?></div></td>
    <?
		foreach ($bulan as $key => $value){
	?>
    <td><div align="center"><?= round($FH[$value]/$available[$value],0)." : ". round(abs(round($FH[$value]/$available[$value],2) - round($FH[$value]/$available[$value],0))*60,0)?></div></td>
	<?
		}
	?>
    <td><div align="center"><?= round(array_sum($FH)/array_sum($available),0)." : ". round(abs(round(array_sum($FH)/array_sum($available),2) - round(array_sum($FH)/array_sum($available),0))*60,0)?></div></td>
  </tr>
  <tr>
    <th scope="row">- Revenue FH </th>
    <td><div align="center"><?= (round(array_sum($FHlastyear)/array_sum($availablelastyear),0))." : ".abs(round(((array_sum($FHlastyear)/array_sum($availablelastyear))-round(array_sum($FHlastyear)/array_sum($availablelastyear),0))*60,0))?></div></td>
    <?
		foreach ($bulan as $key => $value){
	?>
    <td><div align="center"><?= (round($FH[$value]/$available[$value],0))." : ".abs(round((($FH[$value]/$available[$value])-round($FH[$value]/$available[$value],0))*60,0))?></div></td>
	<?
		}
	?>
    <td><div align="center"><?= (round(array_sum($FH)/array_sum($available),0))." : ".abs(round(((array_sum($FH)/array_sum($available))-round(array_sum($FH)/array_sum($available),0))*60,0))?></div></td>
  </tr>
  <tr>
    <th scope="row">- Total FC </th>
    <td><div align="center"><?= round(array_sum($FClastyear)/array_sum($availablelastyear),2)?></div></td>
    <?
		foreach ($bulan as $key => $value){
	?>
    <td><div align="center"><?= round($FC[$value]/$available[$value],2)?></div></td>
	<?
		}
	?>
    <td><div align="center"><?= round(array_sum($FC)/array_sum($available),2)?></div></td>
  </tr>
  <tr>
    <th scope="row">- Revenue FC </th>
    <td><div align="center"><?= round(array_sum($FClastyear)/array_sum($availablelastyear),2)?></div></td>
    <?
		foreach ($bulan as $key => $value){
	?>
    <td><div align="center"><?= round($FC[$value]/$available[$value],2)?></div></td>
	<?
		}
	?>
    <td><div align="center"><?= round(array_sum($FC)/array_sum($available),2)?></div></td>
  </tr>
  <tr>
    <th scope="row">Tech Delay - Total</th>
    <td><div align="center"><?= array_sum($techdelaylastyear)?></div></td>
	<?
		foreach ($bulan as $key => $value){
	?>
    <td><div align="center"><?= $techdelay[$value]?></div></td>
	<?
		}
	?>
    <td><div align="center"><?= array_sum($techdelay)?></div></td>
  </tr>
  <tr>
    <th scope="row">- Tot Duration </th>
    <td><div align="center"><?= round(array_sum($delaydurationmenitlastyear)/60,0)." : ".(array_sum($delaydurationmenitlastyear) % 60)?></div></td>
	<?
		foreach ($bulan as $key => $value){
	?>
    <td><div align="center"><?= $delayduration[$value]?></div></td>
	<?
		}
	?>
    <td><div align="center"><?= round(array_sum($delaydurationmenit)/60,0)." : ".(array_sum($delaydurationmenit) % 60)?></div></td>
  </tr>
  <tr>
    <th scope="row">- Avg Duration</th>
    <td><div align="center"><?= round(array_sum($delaydurationmenitlastyear)/array_sum($techdelaylastyear)/60,0)." : ".((array_sum($delaydurationmenitlastyear)/array_sum($techdelaylastyear)) % 60)?></div></td>
    <?
		foreach ($bulan as $key => $value){
	?>
	<td><div align="center"><?= $avgduration[$value]?></div></td>
	<?
		}
	?>
    <td><div align="center"><?= round(array_sum($delaydurationmenit)/array_sum($techdelay)/60,0)." : ".((array_sum($delaydurationmenit)/array_sum($techdelay)) % 60)?></div></td>
  </tr>
  <tr>
    <th scope="row">- Rate/100 Take-Off</th>
    <td><div align="center"><?= round(array_sum($delayratelastyear),3)?></div></td>
    <?
		foreach ($bulan as $key => $value){
	?>
	<td><div align="center"><?= round($delayrate[$value],3)?></div></td>
    <?
		}
	?>
    <td><div align="center"><?= round(array_sum($delayrate),3)?></div></td>
  </tr>
  <tr>
    <th scope="row">Technical Incident - Total </th>
    <td><div align="center"><?= array_sum($incidentlastyear)?></div></td>
	 <?
		foreach ($bulan as $key => $value){
	?>
    <td><div align="center"><?= $incident[$value]?></div></td>
    <?
		}
	?>
    <td><div align="center"><?= array_sum($incident)?></div></td>
  </tr>
  <tr>
    <th scope="row">- Rate /1000 FH </th>
    <td><div align="center"><?= round(array_sum($incidentlastyear)/1000*array_sum($FHlastyear),2)?></div></td>
	<?
		foreach ($bulan as $key => $value){
	?>
    <td><div align="center"><?= round($incident[$value]/1000*$FH[$value],3)?></div></td>
    <?
		}
	?>
    <td><div align="center"><?= round(array_sum($incident)/1000*array_sum($FH),3)?></div></td>
  </tr>
  <tr>
    <th scope="row">Technical Cancellation </th>
    <td><div align="center"><?= array_sum($cancellastyear)?></div></td>
    <?
		foreach ($bulan as $key => $value){
	?>
    <td><div align="center"><?= $cancel[$value]?></div></td>
	<?
		}
	?>
    <td><div align="center"><?= array_sum($cancel)?></div></td>
  </tr>
  <tr>
    <th scope="row">Dispatch Reliability (%) </th>
    <td><div align="center"><?= round((array_sum($FClastyear) - array_sum($techdelaylastyear) - array_sum($cancellastyear))/array_sum($FC) * 100,2) ?></div></td>
    <?
		foreach ($bulan as $key => $value){
	?>
    <td><div align="center"><?= round(($FC[$value] - $techdelay[$value] - $cancel[$value])/$FC[$value] * 100,2) ?></div></td>
	<?
		}
	?>
    <td><div align="center"><?= round((array_sum($FC) - array_sum($techdelay) - array_sum($cancel))/array_sum($FC) * 100,2) ?></div></td>
  </tr>
</table>
</body>
</html>
