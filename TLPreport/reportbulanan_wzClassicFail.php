<?
  //$weeknum = isset($_REQUEST["weeknum"]) ? $_REQUEST["weeknum"] : "";
  include("function.php");
  $periode = isset($_REQUEST["periode"]) ? $_REQUEST["periode"] : "";
  $actype = isset($_REQUEST["actype"]) ? $_REQUEST["actype"] : "";

  $TE = connectimesysTE();
  $arractype = selectactype();
  $arrperiode = selectperiode();

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
.style2 {font-size: 12px}
.style3 {font-size: 12}
-->
</style>
<script language="javascript">
function display_report() {

        if (document.frm1.periode.value == "") {
                alert('Please Insert "Periode"');
		} else if (document.frm1.actype.selectedIndex == 0) {
                alert('Please Select Aircraft Type');
        } else {
                location.href = "<?=$_SERVER['PHP_SELF']?>?&periode=" +
                        escape(document.frm1.periode.value);
        }
  }

function export_excel()
  {
        if (document.frm1.periode.value == 0) {
                alert('Please Select Periode');
        } else {
				
        	   //var str = "excel.php?&periode=" + escape(document.frm1.periode.value);
                //window.open(str);
				window.open("reportbulananexcel.php?periode=" + escape(document.frm1.periode.value));
        }
  }

function export_excel_pirep()
  {
        if (document.frm1.periode.value == 0) {
                alert('Please Select Periode');
        } else {
				
        	   //var str = "excel.php?&periode=" + escape(document.frm1.periode.value);
                //window.open(str);
				window.open("pirepexcel.php?periode=" + escape(document.frm1.periode.value));
        }
  }

function export_excel_ifsd()
  {
        if (document.frm1.periode.value == 0) {
                alert('Please Select Periode');
        } else {
				
        	   //var str = "excel.php?&periode=" + escape(document.frm1.periode.value);
                //window.open(str);
				window.open("ifsd.php?periode=" + escape(document.frm1.periode.value));
        }
  }
</script>
</head>

<body>
 <p align="center" class="style1">Monthly Report</p>
 <form name="frm1">
 <p>Periode (yyyy-mm) &nbsp&nbsp&nbsp<?
cmbbox("periode",$arrperiode,$periode,'',1);
?>&nbsp;&nbsp;&nbsp;&nbsp;

   <input type="submit" name="Submit" value="Submit" onClick="display_report()">
   <input type="submit" name="Submit2" value="Dispatch Cumulative" onClick="export_excel()">
   <input type="submit" name="Submit3" value="Pirep Cumulative" onClick="export_excel_pirep()">
   <input type="submit" name="Submit4" value="IFSD" onClick="export_excel_ifsd()">
</p></form>
<?php 
	if (($periode == "")){
		echo "<p>";
		die("Please Insert Periode ");
		echo "</p>";
  }
	$connectAMS = connectimesysTE();

	$FH = queryFH12($periode,"A330-300",12);
	$bulan = array_reverse(array_keys($FH));
	$aircrafttype = array("A330-200","A330-300","B737-300","B737-400","B737-500","B737-Classic","B737-800-E","B737-800-M","B747-400","CRJ-1000","A320-200","B737-CL","B777-300","ATR72-600");
	$acclassic = array("B737-300","B737-400","B737-500");
	
	foreach($aircrafttype as $k => $v){
		
		if($v == "B737-Classic"){
		
		$ifsddata = "";$ifsddata2 = "";
		$FH[$v] = $FH["B737-300"]+$FH["B737-400"]+$FH["B737-500"];
		$FCrev[$v] = array_sum($acclassic);//$FCrev["B737-500"]+$FCrev["B737-400"]+$FCrev["B737-300"];
		//$delayall[$v] = 0;
		//$delayall[$v] = $delayall["B737-300"]+$delayall["B737-400"]+$delayall["B737-500"];
		foreach($delayall[$v] as $key => $value){
			$techdelay[$key] = array_sum($value);
		}
		$delay[$v] = $techdelay;
		unset($techdelay);
		$cancel[$v] = $cancel["B737-300"]+$cancel["B737-400"]+$cancel["B737-500"];
		//$ifsd[$v] = 0;
		//$ifsd[$v] = $ifsd["B737-300"]+$ifsd["B737-400"]+$ifsd["B737-500"];
		//$ifsddata[$v] = (ifsd($periode,$v) == "") ? 0 : ifsd($periode,$v);
		//die(print_r($ifsddata));
		
		//$available[$v] = 0;
		//$available[$v] = $available["B737-300"]+$available["B737-400"]+$available["B737-500"];
		
		}
		
		if($v != "B737-Classic"){
		
		$ifsddata = "";$ifsddata2 = "";
		$FH[$v] = queryFH12($periode,$v,24);
		$FCrev[$v] = queryFC12rev($periode,$v,12);
		$delayall[$v] = ATAdelay($bulan[0],$bulan[11],$v);
		foreach($delayall[$v] as $key => $value){
			$techdelay[$key] = array_sum($value);
		}
		$delay[$v] = $techdelay;
		unset($techdelay);
		$cancel[$v] = querycancel($bulan[0],$bulan[11],$v);
		$ifsd[$v] = ifsd($periode,$v);
		//$ifsddata[$v] = (ifsd($periode,$v) == "") ? 0 : ifsd($periode,$v);
		//die(print_r($ifsddata));

		$available[$v] = available($bulan[0],$bulan[11],$v);
		
		}
	}
	//die(print_r($delay));
	$bulan12 = array_keys($FH["B737-400"]);

	//$connectAMS = connectimesys('imesys');
	foreach($aircrafttype as $k => $v){
		
		if($v == "B737-Classic"){
		
		//$ATAdata[$v] = 0;
		//$ATAdata[$v] = $ATAdata["B737-300"]+$ATAdata["B737-400"]+$ATAdata["B737-500"];;
		foreach ($ATAdata[$v] as $key => $value){
			$jumlahATA[$key] = array_sum($value);
		}
		$ATA[$v] = $jumlahATA;
		unset($jumlahATA);
		
		}
		
		if($v != "B737-Classic"){
		
		$ATAdata[$v] = ATA($bulan[0],$bulan[11],$v);
		foreach ($ATAdata[$v] as $key => $value){
			$jumlahATA[$key] = array_sum($value);
		}
		$ATA[$v] = $jumlahATA;
		unset($jumlahATA);
		
		}
	}
	//die(print_r($ATA));
/*
foreach ($aircrafttype as $k => $v){
	foreach ($bulan12 as $key => $value){
		$ifsd[$v][$value] = isset($ifsd[$v][$value]) ? $ifsd[$v][$value] : 0;
	}
}*/
	//die(print_r($delayall));

?>
 <table width="100%"  border="1" cellspacing="0" cellpadding="0">
   <tr>
     <th rowspan="2" scope="col"><span class="style2">A/C TYPE </span></th>
     <th colspan="12" scope="col"><span class="style2">Delay</span></th>
   </tr>
   <tr>
   <?	
   foreach($bulan as $key => $value){
   ?>
     <td><div align="center" class="style2"><?= bulan($value)?></div></td>
    <?
	}
	?>
	<td><div align="center" class="style2">Last 12 Mo</div></td>
	<td><div align="center" class="style2"><?= substr($periode,0,4)?></div></td>
   </tr>
<?
foreach ($aircrafttype as $k => $v){
?>
   <tr>
     <th scope="row"><div align="left" class="style2"><?= $v?></div></th>
	 <?
		foreach ($bulan as $key => $value){
			$delay[$v][$value] = isset($delay[$v][$value]) ? $delay[$v][$value] : 0;
	 ?>
     <td><div align="center" class="style2"><?= $delay[$v][$value]?></div></td>
	 <?
		}
	 ?>
	 <td><div align="center" class="style2"><?= array_sum($delay[$v])?></div></td>
	 <td><div align="center" class="style2">2009</div></td>
   </tr>
<?
	}
?>
   <tr>
     <th scope="row"><span class="style2">Total</span></th>
	<?
		foreach ($bulan as $key => $value){
			$totaldelay = 0;
			foreach ($aircrafttype as $k => $v){
				$totaldelay += $delay[$v][$value];
			}
	?>
     <td><div align="center" class="style2"><?= $totaldelay?></div></td>
	<?
		}
	?>
   </tr>
   <tr>
     <th rowspan="2" scope="row"><span class="style2">A/C TYPE </span></th>
     <th colspan="12"><div align="center" class="style2">Cancel</div></th>
   </tr>
   <tr>
    <?	
   foreach($bulan as $key => $value){
   ?>
     <td><div align="center" class="style2"><?= bulan($value)?></div></td>
    <?
	}
	?>
   </tr>
<?
foreach ($aircrafttype as $k => $v){
?>
   <tr>
     <th scope="row"><div align="left" class="style2"><?= $v?></div></th>
	<?
	foreach ($bulan as $key => $value){
		 $cancel[$v][$value] = isset( $cancel[$v][$value]) ?  $cancel[$v][$value] : 0;
	?>
     <td><div align="center" class="style2"><?= $cancel[$v][$value]?></div></td>
    <?
	}
	?>
   </tr>
<?
}
?>
   <tr>
     <th scope="row"><span class="style2">Total</span></th>
	<?
		foreach ($bulan as $key => $value){
			$totalcancel = 0;
			foreach ($aircrafttype as $k => $v){
				$totalcancel += $cancel[$v][$value];
			}
	?>
     <td><div align="center" class="style2"><?= $totalcancel?></div></td>
	<?
	}
	?>
   </tr>
   <tr>
     <th rowspan="2" scope="row"><span class="style2">A/C TYPE </span></th>
     <th colspan="12"><div align="center" class="style2">Rev Take Off </div></th>
   </tr>
   <tr>
	<?
		foreach ($bulan as $key => $value){
	?>
     <td><div align="center" class="style2"><?= bulan($value)?></div></td>
	<?
		}
	?>
   </tr>
   <?
   foreach ($aircrafttype as $k => $v){
   ?>
   <tr>
     <th scope="row"><div align="left" class="style2"><?= $v?></div></th>
	 <?
	  foreach ($bulan as $key => $value){
	 ?>
     <td><div align="center" class="style2"><?= $FCrev[$v][$value]?></div></td>
	 <?
	  }
	 ?>
   </tr>
   <?
	}
   ?>
   <tr>
     <th scope="row"><span class="style2">Total</span></th>
	 <?
		foreach ($bulan as $key => $value){
			$totalFCrev = 0;
			foreach ($aircrafttype as $k => $v){
				$totalFCrev += $FCrev[$v][$value];
			}
	?>
     <td><div align="center" class="style2"><?= $totalFCrev?></div></td>
	<?
		}
	?>
   </tr>
   <tr>
     <th rowspan="2" scope="row"><span class="style2">A/C TYPE </span></th>
     <th colspan="12"><div align="center" class="style2">Dispatch</div></th>
   </tr>
   <tr>
   <?
   foreach ($bulan as $key => $value){
   ?>
     <td><div align="center" class="style2"><?= bulan($value)?></div></td>
	<?
	}
	?>
   </tr>
<?
foreach ($aircrafttype as $k => $v){
?>
   <tr>
     <th scope="row"><div align="left" class="style2"><?= $v?></div></th>
	<?
	foreach ($bulan as $key => $value){
	$DR = ($FCrev[$v][$value] <> 0) ? round((($FCrev[$v][$value] - $delay[$v][$value] - $cancel[$v][$value])/$FCrev[$v][$value] * 100),2) : 0;
	?>
     <td><div align="center" class="style2"><?= $DR?></div></td>
	<?
	}
	?>
   </tr>
<?
}
?>
   <tr>
     <th scope="row"><span class="style2">Total</span></th>
	 <?
	 foreach ($bulan as $key => $value){
		 $totalFCrev = 0;$totaldelay = 0;$totalcancel = 0;$totalDR = 0;
			foreach ($aircrafttype as $k => $v){
				$totalFCrev += $FCrev[$v][$value];
				$totaldelay += $delay[$v][$value];
				$totalcancel += $cancel[$v][$value];
			}
		$totalDR = round(($totalFCrev - $totaldelay - $totalcancel)/$totalFCrev * 100,2);
	 ?>
     <td><div align="center" class="style2"><?= $totalDR?></div></td>
    <?
	}
	?>
   </tr>
 </table>
 <p align="center"><strong>IN FLIGHT SHUT DOWN </strong></p>
<?
foreach ($aircrafttype as $k => $v){
?>
 <table width="100%"  border="1" cellspacing="0" cellpadding="0">
   <tr>
     <th scope="col"><div align="center" class="style2"><?= $v?></div></th>
	<?
	foreach ($bulan as $key => $value){
	?>
     <th scope="col"><div align="center" class="style2"><?= bulan($value)?></div></th>
	<?
	}
	?>
     <th scope="col"><div align="center" class="style2">TOTAL</div></th>
   </tr>
   <tr>
     <th scope="row"><div align="center"><span class="style3"><span class="style2"></span></span></div></th>
	<?
	foreach ($bulan as $key => $value){
		$FHdata[$value] = $FH[$v][$value];
	?>
     <td><div align="center" class="style2"><?= $FHdata[$value]?></div></td>
	<?
	}
	?>
     <td><div align="center"><span class="style3"><span class="style2"><?= array_sum($FHdata)?></span></span></div></td>
   </tr>
   <tr>
     <th scope="row"><div align="center" class="style2">IN-FLIGHT SHUTDOWN </div></th>
	<?
	foreach ($bulan as $key => $value){
		$dataifsd[$value] = isset($ifsd[$v][$value]) ? $ifsd[$v][$value] : 0;
	?>
     <td><div align="center" class="style2"><?= $dataifsd[$value]?></div></td>
	<?
	}
	?>
     <td><div align="center"><span class="style3"><span class="style2"><?= array_sum($dataifsd)?></span></span></div></td>
   </tr>
   <tr>
     <th scope="row"><div align="center" class="style2">-RATE</div></th>
	<?
	foreach ($bulan as $key => $value){
		$totalifsd = 0;$totalFH = 0;
		for($i=0;$i<13;$i++){
			$totalifsd += isset($ifsd[$v][$bulan12[$key+$i]]) ? $ifsd[$v][$bulan12[$key+$i]] : 0;
			$totalFH += $FH[$v][$bulan12[$key+$i]];
		}
		$rate[$value] = ($totalFH <> 0) ? round(($totalifsd/$totalFH*1000),3) : 0;
	?>
     <td><div align="center"><span class="style3"><span class="style2"><?= $rate[$value]?></span></span></div></td>
	<?
	}
	?>
     <td><div align="center"><span class="style3"><span class="style2"></span></span></div></td>
   </tr>
   <tr>
     <th scope="row"><div align="center" class="style2">AVERAGE</div></th>
     <td><div align="center"><span class="style3"><span class="style2"></span></span></div></td>
     <td><div align="center"><span class="style3"><span class="style2"></span></span></div></td>
     <td><div align="center"><span class="style3"><span class="style2"></span></span></div></td>
     <td><div align="center"><span class="style3"><span class="style2"></span></span></div></td>
     <td><div align="center"><span class="style3"><span class="style2"></span></span></div></td>
     <td><div align="center"><span class="style3"><span class="style2"></span></span></div></td>
     <td><div align="center"><span class="style3"><span class="style2"></span></span></div></td>
     <td><div align="center"><span class="style3"><span class="style2"></span></span></div></td>
     <td><div align="center"><span class="style3"><span class="style2"></span></span></div></td>
     <td><div align="center"><span class="style3"><span class="style2"></span></span></div></td>
     <td><div align="center"><span class="style3"><span class="style2"></span></span></div></td>
     <td><div align="center"><span class="style3"><span class="style2"><?= round((array_sum($rate)/12),3)?></span></span></div></td>
     <td><div align="center"><span class="style3"><span class="style2"></span></span></div></td>
   </tr>
 </table>
 <p align="center"></p>
<?
}
?>
 <p align="center"><strong>PILOT REPORT </strong></p>
 <table width="100%"  border="1" cellspacing="0" cellpadding="0">
   <tr>
     <th rowspan="2" scope="col"><div align="center" class="style2">A/C TYPE </div></th>
     <th colspan="12" scope="col"><div align="center" class="style2">PIREP</div></th>
   </tr>
   <tr>
<?
foreach ($bulan as $key => $value){
?>
     <td><div align="center" class="style2"><?= bulan($value)?></div></td>
<?
}
?>
   </tr>
<?
foreach ($aircrafttype as $k => $v){
?>
   <tr>
     <th scope="row"><div align="center" class="style2"><?= $v?></div></th>
	<?
	foreach ($bulan as $key => $value){
		$ATA[$v][$value] = isset($ATA[$v][$value]) ? $ATA[$v][$value] : 0;
	?>
     <td><div align="center" class="style2"><?= $ATA[$v][$value]?></div></td>
	<?
	}
	?>
   </tr>
<?
}
?>
   <tr>
     <th rowspan="2" scope="row"><div align="center" class="style2">A/C TYPE </div></th>
     <td colspan="12"><div align="center" class="style2">A/C IN SERVICE REVENUE</div></td>
   </tr>
   <tr>
<?
foreach ($bulan as $key => $value){
?>
     <td><div align="center" class="style2"><?= bulan($value)?></div></td>
<?
}
?>
   </tr>
   <tr>
<?
foreach ($aircrafttype as $k => $v){
?>
     <th scope="row"><div align="center" class="style2"><?= $v?></div></th>
	<?
	foreach ($bulan as $key => $value){
	$acinservice[$v][$value] = round($available[$v][$value]/jumlahbulan($value),2)
	?>
     <td><div align="center"><span class="style2"><?= $acinservice[$v][$value]?></span></div></td>
	<?
	}
	?>
   </tr>
<?
}	
?>
   <tr>
     <th rowspan="2" scope="row"><div align="center" class="style2">A/C TYPE </div></th>
     <td colspan="12"><div align="center"><span class="style2"></span></div></td>
   </tr>
   <tr>
<?
foreach ($bulan as $key => $value){
?>
     <td><div align="center" class="style2"><?= bulan($value)?></div></td>
<?
}
?>
   </tr>
<?
foreach ($aircrafttype as $k => $v){
?>
   <tr>
     <th scope="row"><div align="center" class="style2"><?= $v?></div></th>
	 <?
	foreach ($bulan as $key => $value){
	$pirep = ($acinservice[$v][$value] <> 0) ? round(($ATA[$v][$value]/$acinservice[$v][$value]),2) : 0;
	?>
     <td><div align="center"><span class="style2"><?= $pirep?></span></div></td>
	 <?
	}
	?>
   </tr>
<?
}
?>
 </table>
 <p align="left"><strong></strong></p>
 <p>&nbsp; </p>
</body>
</html>
