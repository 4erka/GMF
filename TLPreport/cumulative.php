<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Cumulative Flight Hours And Cycle</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
.style3 {font-size: 24px}
.style4 {font-size: 36px}
.style8 {font-size: 12px}
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
        if (document.frm1.periode.value == "") {
                alert('Please Select Periode');
        } else if (document.frm1.actype.value == "") {
                alert('Please Select ACTYpe');
        } else {
				
        	   window.open("Cumulative_excel.php?actype=" + escape(document.frm1.actype.value) + "&periode=" + escape(document.frm1.periode.value));
        }
  }
function export_pdf()
  {
        if (document.frm1.periode.value == "") {
                alert('Please Select Periode');
        } else if (document.frm1.actype.value == "") {
                alert('Please Select ACTYpe');
        } else {
				
        	   window.open("cumulativepdf.php?actype=" + escape(document.frm1.actype.value) + "&periode=" + escape(document.frm1.periode.value) + "&page=" + escape(document.frm1.page.value));
        }
  }
</script>

<div align="center">
  <p class="style4">Cumulative Flight Hour and Cycle </p>
  <p align="left" class="style3"><form name="frm1" method="get">
    <div align="left">Periode &nbsp&nbsp&nbsp
<?
cmbbox("periode",$arrperiode,$periode,'',1);
?>
      
  &nbsp&nbsp&nbsp Aircraft Type &nbsp&nbsp&nbsp
  <?  
cmbbox("actype",$arractype,$actype,'',1);
?>&nbsp&nbsp&nbsp
Page &nbsp&nbsp&nbsp
<input name="page" type="text" size="5" maxlength="10" value="<?= $page?>">&nbsp&nbsp&nbsp
  <input type="submit" value="Display Report" onClick="display_report()">
  <input type="submit" name="Submit2" value="Excel" onClick="export_excel()">
  <input type="submit" name="Submit2" value="PDF" onClick="export_pdf()">
    </div>
  </form>
</p>
<p align="left">
<?
	if (($periode == "") && ($actype == "")) die("Please Insert AC Type and Periode");

	
	$FH = queryFH12($periode,$actype,12);
	$bulan = array_reverse(array_keys($FH));
	$FC = queryFC12($periode,$actype,12);
	$fleet = fleet($periode,$actype);//die(print_r($fleet));
	$fleet = $fleet[$periode];
	$reg = reg($actype);//die(print_r($reg));
	$regkey = array_count_values($reg);
	//$FHlastyear = queryFH12((substr($periode,0,4)-1)."-12",$actype);die(print_r($FHlastyear));
	//$FClastyear = queryFC12((substr($periode,0,4)-1)."-12",$actype);
	
	//$connectAMS = connectimesys('mcdr');
	$cumulativeFH = cumulativeFH($periode,$actype);//die(print_r($bulan));
	$cumulativeFH12 = cumulativeFH12((substr($periode,0,4)-1)."-01",(substr($periode,0,4)-1)."-12",$actype);
	//die(print_r($cumulativeFH12));
	$cumulativeFC = cumulativeFC($periode,$actype);
	$cumulativeFC12 = cumulativeFC12((substr($periode,0,4)-1)."-01",(substr($periode,0,4)-1)."-12",$actype);
	//die(print_r($cumulativeFH));
?>
</p>
  <table width="100%"  border="1">
    <tr>
      <th scope="col"><span class="style8">Flight Hours </span></th>
      <th scope="col"><span class="style8"></span></th>
      <th scope="col"><span class="style8"></span></th>
      <th scope="col"><span class="style8"></span></th>
      <th scope="col"><span class="style8"></span></th>
      <th scope="col"><span class="style8"></span></th>
      <th scope="col"><span class="style8"></span></th>
      <th scope="col"><span class="style8"></span></th>
      <th scope="col"><span class="style8"></span></th>
      <th scope="col"><span class="style8"></span></th>
      <th scope="col"><span class="style8"></span></th>
      <th scope="col"><span class="style8"></span></th>
      <th scope="col"><span class="style8"></span></th>
      <th scope="col"><span class="style8"></span></th>
    </tr>
    <tr>
      <th scope="row"><span class="style8">AC Reg </span></th>
      <th><div align="center" class="style8">Year</div></th>
	  <?
		foreach ($bulan as $key => $value){
	  ?>
      <th><div align="center" class="style8"><?= bulan($value)?></div></th>
      <?
		}
	  ?>
    </tr>
    <tr>
      <th scope="row"><span class="style8"></span></th>
      <td><div align="center" class="style8"><?= (substr($periode,0,4) - 1)?></div></td>
      <td><div align="center"><span class="style8"></span></div></td>
      <td><div align="center"><span class="style8"></span></div></td>
      <td><div align="center"><span class="style8"></span></div></td>
      <td><div align="center"><span class="style8"></span></div></td>
      <td><div align="center"><span class="style8"></span></div></td>
      <td><div align="center"><span class="style8"></span></div></td>
      <td><div align="center"><span class="style8"></span></div></td>
      <td><div align="center"><span class="style8"></span></div></td>
      <td><div align="center"><span class="style8"></span></div></td>
      <td><div align="center"><span class="style8"></span></div></td>
      <td><div align="center"><span class="style8"></span></div></td>
      <td><div align="center"><span class="style8"></span></div></td>
    </tr>
	<?
		$j = 0;
		foreach ($reg as $k => $v){
		if ($j<>0){
				$regtampil[$k] = substr($v,3,3);
			} else {
				$regtampil[$k] = $v;
			}
			$j++;
	?>
    <tr>
      <th scope="row"><span class="style8">
        <?= $regtampil[$k]?>
      </span></th>
	  <?
			$cumulativeFH12[$v] = isset($cumulativeFH12[$v]) ? $cumulativeFH12[$v] : 0;
	?>
	  <td><div align="center" class="style8"><?= $cumulativeFH12[$v]?></div></td>
		<?
		foreach ($bulan as $key => $value){
		$cumulativeFH[$v][$value] = isset($cumulativeFH[$v][$value]) ? $cumulativeFH[$v][$value] : 0;
		?>
      <td><div align="center" class="style8"><?= $cumulativeFH[$v][$value]?></div></td>
		<?
		}
		?>
    </tr>
	<?
  }
	?>
    <tr>
      <th scope="row"><span class="style8"></span></th>
      <td><div align="center"><span class="style8"></span></div></td>
      <td><div align="center"><span class="style8"></span></div></td>
      <td><div align="center"><span class="style8"></span></div></td>
      <td><div align="center"><span class="style8"></span></div></td>
      <td><div align="center"><span class="style8"></span></div></td>
      <td><div align="center"><span class="style8"></span></div></td>
      <td><div align="center"><span class="style8"></span></div></td>
      <td><div align="center"><span class="style8"></span></div></td>
      <td><div align="center"><span class="style8"></span></div></td>
      <td><div align="center"><span class="style8"></span></div></td>
      <td><div align="center"><span class="style8"></span></div></td>
      <td><div align="center"><span class="style8"></span></div></td>
      <td><div align="center"><span class="style8"></span></div></td>
    </tr>
    <tr>
      <th scope="row"><span class="style8">Take Off </span></th>
      <td><div align="center"><span class="style8"></span></div></td>
      <td><div align="center"><span class="style8"></span></div></td>
      <td><div align="center"><span class="style8"></span></div></td>
      <td><div align="center"><span class="style8"></span></div></td>
      <td><div align="center"><span class="style8"></span></div></td>
      <td><div align="center"><span class="style8"></span></div></td>
      <td><div align="center"><span class="style8"></span></div></td>
      <td><div align="center"><span class="style8"></span></div></td>
      <td><div align="center"><span class="style8"></span></div></td>
      <td><div align="center"><span class="style8"></span></div></td>
      <td><div align="center"><span class="style8"></span></div></td>
      <td><div align="center"><span class="style8"></span></div></td>
      <td><div align="center"><span class="style8"></span></div></td>
    </tr>
	<?
		$j = 0;
		foreach ($reg as $k => $v){
			if ($j<>0){
				$regtampil[$k] = substr($v,3,3);
			} else {
				$regtampil[$k] = $v;
			}
			$j++;
	?>
    <tr>
      <th scope="row"><span class="style8">
        <?= $regtampil[$k]?>
      </span></th>
	  <?
			$cumulativeFC12[$v] = isset($cumulativeFC12[$v]) ? $cumulativeFC12[$v] : 0;
	?>
      <td><div align="center" class="style8"><?= $cumulativeFC12[$v]?></div></td>
		<?
		foreach ($bulan as $key => $value){
		$cumulativeFC[$v][$value] = isset($cumulativeFC[$v][$value]) ? $cumulativeFC[$v][$value] : 0;
		?>
      <td><div align="center" class="style8"><?= $cumulativeFC[$v][$value]?></div></td>
		<?
			}
		?>
    </tr>
	<?
	}
	?>
    <tr>
      <th scope="row"><span class="style8"></span></th>
      <td><div align="center"><span class="style8"></span></div></td>
      <td><div align="center"><span class="style8"></span></div></td>
      <td><div align="center"><span class="style8"></span></div></td>
      <td><div align="center"><span class="style8"></span></div></td>
      <td><div align="center"><span class="style8"></span></div></td>
      <td><div align="center"><span class="style8"></span></div></td>
      <td><div align="center"><span class="style8"></span></div></td>
      <td><div align="center"><span class="style8"></span></div></td>
      <td><div align="center"><span class="style8"></span></div></td>
      <td><div align="center"><span class="style8"></span></div></td>
      <td><div align="center"><span class="style8"></span></div></td>
      <td><div align="center"><span class="style8"></span></div></td>
      <td><div align="center"><span class="style8"></span></div></td>
    </tr>
  </table>
  <p align="left" class="style3">&nbsp;  </p>
  <p align="left" class="style3">&nbsp;  </p>
  <p align="left" class="style3">&nbsp; </p>
</div>
</body>
</html>
