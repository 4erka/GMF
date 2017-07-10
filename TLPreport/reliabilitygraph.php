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
.style3 {font-size: 12px}
.style5 {font-size: 12px; font-family: Arial, Helvetica, sans-serif; }
.style6 {font-family: Arial, Helvetica, sans-serif}
-->
</style>
<?
  include("function.php");
  $periode = isset($_REQUEST["periode"]) ? $_REQUEST["periode"] : "";
  $actype = isset($_REQUEST["actype"]) ? $_REQUEST["actype"] : "";

  $TE = connectimesysTE();
  $arractype = selectactype();
  $arrperiode = selectperiode();
  //die(print_r($arractype));
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
				
        	   //var str = "excel.php?actype=" + escape(document.frm1.actype.value) + "&weeknum=" + escape(document.frm1.weeknum.value)+ "&year=" + escape(document.frm1.year.value);
                window.open("AOS_excel.php?actype=" + escape(document.frm1.actype.value) + "&periode=" + escape(document.frm1.periode.value));
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
                window.open("graphpdf.php?actype=" + escape(document.frm1.actype.value) + "&periode=" + escape(document.frm1.periode.value) + "&page=" + escape(document.frm1.page.value));
        }
  }
</script>
<p align="center" class="style1">Reliability Graph</p>
<p><form name="frm1" method="get">
Periode (yyyy-mm)&nbsp&nbsp&nbsp
<?
cmbbox("periode",$arrperiode,$periode,'',1);
?>&nbsp&nbsp&nbsp
  Aircraft Type &nbsp&nbsp&nbsp
<?  
cmbbox("actype",$arractype,$actype,'',1);
?>&nbsp&nbsp&nbsp
Page &nbsp&nbsp&nbsp
<input name="page" type="text" size="5" maxlength="10" value="<?= $page?>">
  <input type="submit" value="Display Report" onClick="display_report()">
  <!--<input type="submit" value="Excel" onClick="export_excel()">-->
  <input type="submit" value="PDF" onClick="export_pdf()">

</form></p>
<?php 
	if (($periode == "") OR ($actype == "")){
		echo "<p>";
		die("Please Insert Periode & AC Type");
		echo "</p>";
  }
?>
</body>
</html>
 <!--<img src="imagefile2.png" border=0 align =center width=600 height=300>-->

