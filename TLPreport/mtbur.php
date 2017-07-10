<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
.style1 {font-size: 18px}
.style2 {font-size: 12px}
-->
</style>
<?
 include("function.php");

 function dateremoval()//query untuk last Update
{
	$qryFH = "SELECT `tblcompremoval`.`DateRem` FROM `tblcompremoval` ORDER BY `tblcompremoval`.`DateRem` DESC LIMIT 1";
	$resultFH = mysql_query($qryFH);
	//die($qryFH);
	while ($hasilFH = mysql_fetch_array($resultFH))
	{
		$hour[] = date('d-F-Y',strtotime($hasilFH["DateRem"]));
	}
	//$ATA = array_count_values($hour);
	return $hour;
}
?>
<style type="text/css">@import url(calendar-blue2.css);</style>
<script type="text/javascript" src="calendar.js"></script>
<script type="text/javascript" src="calendar-en.js"></script>
<script type="text/javascript" src="calendar-setup.js"></script>
<script language="text/javascript">

function display_report() {

        if (document.frm1.f_start.value == "") {
                alert('Please Insert ACType');
        } else if (document.frm1.f_end.value == "") {
                alert('Please Select Periode');
        } else {
                location.href = "<?=$_SERVER['PHP_SELF']?>?f_start=" +
                        escape(document.frm1.f_start.value) + "&f_end=" +
                        escape(document.frm1.f_end.value) + "&pil1=" + 
						escape(document.frm1.pil1.value) +  + "&pil2=" + 
						escape(document.frm1.pil2.value)  + "&pil3=" + 
						escape(document.frm1.pil3.value) + "&pn=" + 
						escape(document.frm1.PN.value);
        }
  }

function export_excel()
  {
        if (document.frm1.periode.value == 0) {
                alert('Please Select Peroode');
        } else if (document.frm1.actype.value == 0) {
                alert('Please Select "Periode"');
        } else {
				
        	   //var str = "excel.php?actype=" + escape(document.frm1.actype.value) + "&weeknum=" + escape(document.frm1.weeknum.value)+ "&year=" + escape(document.frm1.year.value);
                window.open("AOS_excel.php?actype=" + escape(document.frm1.actype.value) + "&periode=" + escape(document.frm1.periode.value));
        }
  }

</script>
</head>

<?
	$pn = isset($_GET["pn"]) ? $_GET["pn"] : "";
	$f_start = isset($_GET["f_start"]) ? $_GET["f_start"] : "";
	$f_end = isset($_GET["f_end"]) ? $_GET["f_end"] : "";
	$pil1 = isset($_GET['pil1']) ? " checked" : "";
	$pil2 = isset($_GET['pil2']) ? " checked" : "";
	$pil3 = isset($_GET['pil3']) ? " checked" : "";
	$pil4 = isset($_GET['pil4']) ? " checked" : "";
	$pil5 = isset($_GET['pil5']) ? " checked" : "";
	$pil6 = isset($_GET['pil6']) ? " checked" : "";
?>
<body>
<?
$connectAMSdelay1 = connectimesysTE();
$dateremove = dateremoval();

?>
<table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><div align="right"><em>Last Updated <?= $dateremove[0]?> </em></div></td>
  </tr>
</table>
<p align="center" class="style1">MTBUR (Mean Time Between UnScheduled Removal) </p>
<form name="frm1" method="get">
<table width="741" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="613"><span class="style2">Part Number&nbsp;&nbsp;&nbsp;
        <input name="pn" type="text" value="<?= $pn?>" size="20">
&nbsp;&nbsp;&nbsp;&nbsp;Date Start&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input name="f_start" type="text" id="sel1" value="<?= $f_start?>" size="10" readonly><button id="trigger">...</button>

&nbsp;&nbsp;&nbsp;&nbsp;Date End&nbsp;&nbsp;&nbsp;
<input name="f_end" type="text" id="sel2" value="<?= $f_end?>" size="10" readonly><button id="trigger2">...</button>
    </span></td>
    <td width="128" rowspan="2"><div align="center">
          <input name="Submit" type="submit" onClick="display_report()" value="Calculate">            
      &nbsp;</div></td>
  </tr>
  <tr>
    <td><p class="style2">
      <br><input type="checkbox" name="pil1" value="A330-300"<?= $pil1?>>
      A330-300
      
      <input type="checkbox" name="pil2" value="B737-300"<?= $pil2?>>
      B737-300 
      
      <input type="checkbox" name="pil3" value="B737-400"<?= $pil3?>>
      B737-400 
      
      <input type="checkbox" name="pil4" value="B737-400"<?= $pil4?>>
      B737-500
      
      <input type="checkbox" name="pil5" value="B737-400"<?= $pil5?>>
      B737-800
      
      <input type="checkbox" name="pil6" value="B737-400"<?= $pil6?>>
      B747-400&nbsp;</p>      </td>
    </tr>
</table>
</form>
<script type="text/javascript">
  Calendar.setup(
    {
      inputField  : "sel1",         // ID of the input field
      ifFormat    : "%Y-%m-%d",    // the date format
      button      : "trigger"       // ID of the button
    }
  );
  Calendar.setup(
    {
      inputField  : "sel2",         // ID of the input field
      ifFormat    : "%Y-%m-%d",    // the date format
      button      : "trigger2"       // ID of the button
    }
  );
</script>


<?
if ($pn == ""){
  die("Please Insert Part Number");
  }
$actype = "";
if ($pil1 == " checked") $actype = $actype."'A330-300',";
if ($pil2 == " checked") $actype = $actype."'B737-300',";
if ($pil3 == " checked") $actype = $actype."'B737-400',";
if ($pil4 == " checked") $actype = $actype."'B737-500',";
if ($pil5 == " checked") $actype = $actype."'B737-800',";
if ($pil6 == " checked") $actype = $actype."'B747-400',";
$actypedata = substr($actype,0,(strlen($actype)-1));

//$connectAMSdelay = connectimesysTE();
$removal =	compremoval($f_start,$f_end,$actypedata,$pn);
$qty = compremovalqty($f_start,$f_end,$actypedata,$pn);
//$dateremove = dateremoval();

$connectAMS = connectimesys('imesys');
$hour = FHremoval($f_start,$f_end,$actypedata);
$type = array_keys($hour);

?>
<p>&nbsp;</p>
<table width="461"  border="1" cellspacing="0" cellpadding="0">
  <tr>
    <th width="142" scope="col">AC Type </th>
    <th width="103" scope="col"># Removal </th>
	<th width="100" scope="col">Qty/AC </th>
    <th width="95" scope="col">FH</th>
    <th width="111" scope="col">MTBUR</th>
  </tr>
<?
$qtytotal = 0;
foreach ($type as $key => $value){
	$removal[$value] = isset($removal[$value]) ? $removal[$value] : 0;
	$qty[$value] = isset($qty[$value]) ? $qty[$value] : 0;
	if ($qty[$value] <> 0) {
	$mtbur[$value] = round(($hour[$value] * $qty[$value]/$removal[$value]),3);
	} else {
	$mtbur[$value] = 0;
	}
	$qtytotal = isset($qty[$value]) ? $qty[$value] : $qtytotal;
?>
  <tr>
    <th scope="row"><?= $value?></th>
    <td><div align="center"><?= $removal[$value]?></div></td>
	<td><div align="center"><?= $qty[$value]?></div></td>
    <td><div align="center"><?= $hour[$value]?></div></td>
    <td><div align="center"><?= $mtbur[$value]?></div></td>
  </tr>
<?
}
?>
  <tr>
    <th scope="row">Total</th>
    <td><div align="center"><?= array_sum($removal)?></div></td>
	<td><div align="center"><?= $qtytotal?></div></td>
    <td><div align="center"><?= array_sum($hour)?></div></td>
    <td><div align="center"><?= round((array_sum($hour) * $qtytotal/array_sum($removal)),3)?></div></td>
  </tr>
</table>
<p>&nbsp;</p>
</body>
</html>
