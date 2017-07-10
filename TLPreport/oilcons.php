<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Oil Consumption Calculation</title>
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
                        escape(document.frm1.f_end.value) + "&acreg=" + 
						escape(document.frm1.acreg.value) + "&timebasis=" + 
						escape(document.frm1.timebasis.value);
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
	$acreg = isset($_GET["acreg"]) ? $_GET["acreg"] : "PK-GPA";
	$f_start = isset($_GET["f_start"]) ? $_GET["f_start"] : date('Y-m-d',mktime(0, 0, 0, date("m")-1, date("d")+1,   date("Y")));
	$f_end = isset($_GET["f_end"]) ? $_GET["f_end"] : date('Y-m-d');
	$timebasis = isset($_GET["timebasis"]) ? $_GET["timebasis"] : "Daily";
	//die($f_start);
?>
<body>
<?
//$connectAMSdelay1 = connectimesysTE();
//$dateremove = dateremoval();

?>
<table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><div align="right"><em> </em></div></td>
  </tr>
</table>
<p align="center" class="style1">Oil Consumption </p>
<form name="frm1" method="get">
<table width="741" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="613"><span class="style2">Aircraft Reg &nbsp;&nbsp;&nbsp;
        <input name="acreg" type="text" value="<?= $acreg?>" size="20">
&nbsp;&nbsp;&nbsp;&nbsp;Date Start&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input name="f_start" type="text" id="sel1" value="<?= $f_start?>" size="10" readonly><button id="trigger">...</button>

&nbsp;&nbsp;&nbsp;&nbsp;Date End&nbsp;&nbsp;&nbsp;
<input name="f_end" type="text" id="sel2" value="<?= $f_end?>" size="10" readonly><button id="trigger2">...</button>
    </span></td>
    <td width="128" rowspan="2"><div align="center">
          <input name="Submit" type="submit" onClick="display_report()" value="Display Graph">            
      &nbsp;</div></td>
  </tr>
  <tr>
    <td><p class="style2">
      Time basis &nbsp;&nbsp;&nbsp;
      <select name="timebasis">
        <option value="Daily">Daily</option>
        <option value="Weekly">Weekly</option>
        <option value="Monthly">Monthly</option>
      </select>
      <br>
    </p>      </td>
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
$linkgrafik = "oilgrafik.php?startdate=".$f_start."&finishdate=".$f_end."&acreg=".$acreg."&timebasis=".$timebasis."";
//die($linkgrafik);
?>

</body>
</html>
<img src="oilgrafik.php?startdate=<?= $f_start?>&finishdate=<?= $f_end?>&acreg=<?= $acreg?>&timebasis=<?= $timebasis?>" border=0 align =center width=900 height=400>