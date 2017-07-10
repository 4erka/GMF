<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Pilot And Delay Report</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
.style1 {font-size: 20px}
-->
</style>
<?
  include("function.php");
  $periode = isset($_REQUEST["periode"]) ? $_REQUEST["periode"] : "";
  //$year = isset($_REQUEST["year"]) ? $_REQUEST["year"] : "";
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
                alert('Please Select week');
        } else if (document.frm1.year.value == 0) {
                alert('Please Select "Periode"');
        } else {
				
        	   var str = "excel.php?actype=" + escape(document.frm1.actype.value) + "&weeknum=" + escape(document.frm1.weeknum.value)+ "&year=" + escape(document.frm1.year.value);
                window.open(str);
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
<p>Periode (yyyy-mm) 
  <input name="periode" type="text" size="20" value="<?= $periode?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
Aircraft Type 
<input name="actype" type="text" size="15" value="<?= $actype?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
 <input type="submit" name="Submit" value="Display Report" onClick="display_report()">&nbsp;&nbsp;
 <input type="submit" name="Submit2" value="Export Excel">
</p>
</form>
<?php 
	$connectAMS = connectimesys('imesys');
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
	$ATA = ATAdef();
	$ATAdesc = ATAdesc();

	$FH = queryFH($periode,$actype);
	$bulan = array_keys($FH);
	
	$FH12bulan = queryFH12($periode,$actype);
	$FH12 = array_sum($FH12bulan);
	$keys12bulan = array_keys($FH12bulan);
	$ATA12bulan = ATA12($keys12bulan[11],$keys12bulan[0],$actype);
	
	$ATApirep = ATA($bulan[2],$bulan[0],$actype);
		
	
	//$alertlevel = alert($timeawal,$timeakhir,$actype);
	
	///bagiannya pembuatan delay
	$FC = queryFC($periode,$actype);
	$FC12 = array_sum(queryFC12($periode,$actype));
	
	$TE = connectimesysTE();

	$ATAdelay = ATAdelay($bulan[2],$bulan[0],$actype);
	$ATAdelay12bulan = ATAdelay12($keys12bulan[11],$keys12bulan[0],$actype);
	$alertleveldelay = alertdelay($timeawal,$timeakhir,$actype);
	//die(print_r($alertleveldelay));	
			//die(print_r(ATAdelay($periode2,$actype)));
?> Pilot Report
<table width="100%"  border="0">
  <tr>
    <th colspan="2" scope="col">Total Flight Hours  </th>
    <th scope="col"><div align="center"><?= $FH[$bulan[2]]?></div></th>
    <th scope="col"><div align="center"><?= $FH[$bulan[1]]?></div></th>
    <th scope="col"><div align="center"><?= $FH[$bulan[0]]?></div></th>
    <th scope="col"><div align="center"><?= $FH[$bulan[2]] + $FH[$bulan[1]] + $FH[$bulan[0]]?></div></th>
    <th scope="col"><div align="center"><?= $FH12?></div></th>
    <th scope="col">&nbsp;</th>
    <th scope="col">&nbsp;</th>
    <th scope="col">&nbsp;</th>
    <th scope="col">&nbsp;</th>
    <th scope="col">&nbsp;</th>
    <th scope="col">&nbsp;</th>
    <th scope="col">&nbsp;</th>
    <th scope="col">&nbsp;</th>
  </tr>
  <tr>
    <th colspan="2" scope="row">ATA Chapter</th>
    <td><div align="center"><?= $bulan[2]?></div></td>
    <td><div align="center"><?= $bulan[1]?></div></td>
    <td><div align="center"><?= $bulan[0]?></div></td>
    <td><div align="center">Last 3 Mo </div></td>
    <td><div align="center">Last 12 Mo</div></td>
    <td><div align="center">Aug</div></td>
    <td><div align="center">Sep</div></td>
    <td><div align="center">Oct</div></td>
    <td><div align="center">3 Month </div></td>
    <td><div align="center">12 Month </div></td>
    <td rowspan="2"><div align="center">Alert Level </div></td>
    <td rowspan="2"><div align="center">Alert Status </div></td>
    <td rowspan="2"><div align="center">Trend</div></td>
  </tr>
  <tr>
    <th scope="row">&nbsp;</th>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><div align="center">2006</div></td>
    <td><div align="center">Rate</div></td>
    <td><div align="center">Rate</div></td>
    <td><div align="center">Rate</div></td>
    <td><div align="center">Rate</div></td>
    <td><div align="center">Rate</div></td>
  </tr>
  <?
  

  for ($i=0;$i<37;$i++)
  {
	  $ATApirep[$bulan[2]][$ATA[$i]] = isset($ATApirep[$bulan[2]][$ATA[$i]]) ? $ATApirep[$bulan[2]][$ATA[$i]] : 0;
	  $ATApirep[$bulan[1]][$ATA[$i]] = isset($ATApirep[$bulan[1]][$ATA[$i]]) ? $ATApirep[$bulan[1]][$ATA[$i]] : 0;
	  $ATApirep[$bulan[0]][$ATA[$i]] = isset($ATApirep[$bulan[0]][$ATA[$i]]) ? $ATApirep[$bulan[0]][$ATA[$i]] : 0;
	  $ATA12bulan[$ATA[$i]] = isset($ATA12bulan[$ATA[$i]]) ? $ATA12bulan[$ATA[$i]] : 0;
  ?>
  <tr>
    <th scope="row"><div align="center"><?= $ATA[$i]?></div></th>
    <td><div align="center"><?= $ATAdesc[$i]?> </div></td>
    <td><div align="center"><?= $ATApirep[$bulan[2]][$ATA[$i]]?></div></td>
    <td><div align="center"><?= $ATApirep[$bulan[1]][$ATA[$i]]?></div></td>
    <td><div align="center"><?= $ATApirep[$bulan[0]][$ATA[$i]]?></div></td>
    <td><div align="center"><?= $ATApirep[$bulan[0]][$ATA[$i]] + $ATApirep[$bulan[1]][$ATA[$i]] + $ATApirep[$bulan[3]][$ATA[$i]]?></div></td>
    <td><div align="center"><?= $ATA12bulan[$ATA[$i]]?></div></td>
    <td><div align="center"><?= round($ATApirep[$bulan[2]][$ATA[$i]]/$FH[$bulan[2]]*1000,2)?></div></td>
    <td><div align="center"><?= round($ATApirep[$bulan[1]][$ATA[$i]]/$FH[$bulan[1]]*1000,2)?></div></td>
    <td><div align="center"><?= round($ATApirep[$bulan[0]][$ATA[$i]]/$FH[$bulan[0]]*1000,2)?></div></td>
    <td><div align="center"><?= round(($ATApirep[$bulan[2]][$ATA[$i]] + $ATApirep[$bulan[1]][$ATA[$i]] + $ATApirep[$bulan[0]][$ATA[$i]])/($FH[$bulan[2]] + $FH[$bulan[1]] + $FH[$bulan[0]])*1000,2)?></div></td>
    <td><div align="center"><?= round($ATA12bulan[$ATA[$i]]/$FH12*1000,2)?></div></td>
    <td><div align="center"><?= $alerlevel[$ATA[$i]]?></div></td>
    <td><div align="center">RED-1</div></td>
    <td><div align="center">DOWN</div></td>
  </tr>
  <?
  }
	  ?>
</table>
<p>Delay Report</p>
<table width="100%" border="0">
  <tr>
    <th colspan="2" scope="col">Total Flight Cycle </th>
    <th scope="col"><?= $FC[$bulan[2]]?></th>
    <th scope="col"><?= $FC[$bulan[1]]?></th>
    <th scope="col"><?= $FC[$bulan[0]]?></th>
    <th scope="col"><?= $FC[$bulan[2]] + $FC[$bulan[1]] + $FC[$bulan[0]]?> </th>
    <th scope="col"><?= $FC12?></th>
    <th scope="col">&nbsp;</th>
    <th scope="col">&nbsp;</th>
    <th scope="col">&nbsp;</th>
    <th scope="col">&nbsp;</th>
    <th scope="col">&nbsp;</th>
    <th scope="col">&nbsp;</th>
    <th scope="col">&nbsp;</th>
    <th scope="col">&nbsp;</th>
  </tr>
  <tr>
    <th colspan="2" scope="row">ATA Chapter </th>
    <td>bulan1</td>
    <td>bulan2</td>
    <td>bulan3</td>
    <td>Last 3 Month </td>
    <td>Last 12 Month </td>
    <td>bulan1</td>
    <td>bulan2</td>
    <td>bulan3</td>
    <td>3Month</td>
    <td>12Month</td>
    <td rowspan="2">Alert Level </td>
    <td rowspan="2">Alert Status </td>
    <td rowspan="2">Trend</td>
  </tr>
  <tr>
    <th scope="row">&nbsp;</th>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>2006</td>
    <td>Rate</td>
    <td>Rate</td>
    <td>Rate</td>
    <td>Rate</td>
    <td>Rate</td>
  </tr>
  <?
  //$rel = connectimesys('reliability');
  //$ATA = ATAdef();
  //$ATAdesc = ATAdesc();

  for ($i=0;$i<37;$i++)
  {
	  $ATAdelay[$bulan[2]][$ATA[$i]] = isset($ATAdelay[$bulan[2]][$ATA[$i]]) ? $ATAdelay[$bulan[2]][$ATA[$i]] : 0;
	  $ATAdelay[$bulan[1]][$ATA[$i]] = isset($ATAdelay[$bulan[1]][$ATA[$i]]) ? $ATAdelay[$bulan[1]][$ATA[$i]] : 0;
	  $ATAdelay[$bulan[0]][$ATA[$i]] = isset($ATAdelay[$bulan[0]][$ATA[$i]]) ? $ATAdelay[$bulan[0]][$ATA[$i]] : 0;
	  $ATAdelay12bulan[$ATA[$i]] = isset($ATAdelay12bulan[$ATA[$i]]) ? $ATAdelay12bulan[$ATA[$i]] : 0;
  ?>
  <tr>
    <th scope="row"><div align="center"><?= $ATA[$i]?></div></th>
    <td><div align="center"><?= $ATAdesc[$i]?></div></td>
    <td><div align="center"><?= $ATAdelay[$bulan[2]][$ATA[$i]]?></div></td>
    <td><div align="center"><?= $ATAdelay[$bulan[1]][$ATA[$i]]?></div></td>
    <td><div align="center"><?= $ATAdelay[$bulan[0]][$ATA[$i]]?></div></td>
    <td><div align="center"><?= $ATAdelay[$bulan[2]][$ATA[$i]] + $ATAdelay[$bulan[1]][$ATA[$i]] + $ATAdelay[$bulan[0]][$ATA[$i]]?></div></td>
    <td><div align="center"><?= $ATAdelay12bulan[$ATA[$i]]?></div></td>
    <td><div align="center"><?= round($ATAdelay[$bulan[2]][$ATA[$i]]/$FC[$bulan[2]]*100,2)?></div></td>
    <td><div align="center"><?= round($ATAdelay[$bulan[1]][$ATA[$i]]/$FC[$bulan[1]]*100,2)?></div></td>
    <td><div align="center"><?= round($ATAdelay[$bulan[0]][$ATA[$i]]/$FC[$bulan[0]]*100,2)?></div></td>
    <td><div align="center"><?= round(($ATAdelay[$bulan[2]][$ATA[$i]] + $ATAdelay[$bulan[1]][$ATA[$i]] + $ATAdelay[$bulan[0]][$ATA[$i]])/($FC[$bulan[2]] + $FC[$bulan[1]] + $FC[$bulan[0]])*100,2)?></div></td>
    <td><?= round($ATAdelay12bulan[$ATA[$i]]/$FC12*100,2)?></div></td>
    <td><?= $alertleveldelay[$ATA[$i]]?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <?
	}
 ?>
</table>
<p>&nbsp;  </p>
</body>
</html>
