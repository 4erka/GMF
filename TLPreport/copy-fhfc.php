<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
.style1 {font-size: 24px}
-->
</style>
</head>

<body>
<p align="center" class="style1">FH &amp; FC </p>
<p>Periode (yyyy-mm)&nbsp&nbsp&nbsp
  <?
cmbbox("periode",$arrperiode,$periode,'',1);
?>
&nbsp&nbsp&nbsp Aircraft Type &nbsp&nbsp&nbsp
<?  
cmbbox("actype",$arractype,$actype,'',1);
?>
  >
  <input name="submit" type="submit" onClick="display_report()" value="Display Report">
  <input name="submit2" type="submit" onClick="export_excel()" value="Excel">
</p>
<?php 
	if (($periode == "") OR ($actype == "")){
		echo "<p>";
		die("Please Insert Periode & AC Type");
		echo "</p>";
  }


	$TE = connectimesysTE();
	
?>
<table width="700" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <th rowspan="2" scope="col">Reg</th>
    <th colspan="3" scope="col">Revenue</th>
    <th colspan="3" scope="col">Non Revenue </th>
    <th rowspan="2" scope="col">Days</th>
    <th rowspan="2" scope="col">TSN</th>
    <th rowspan="2" scope="col">CSN</th>
  </tr>
  <tr>
    <td><div align="center">Block Hour </div></td>
    <td><div align="center">Flight Hours </div></td>
    <td><div align="center">Cycles</div></td>
    <td><div align="center">Block Hours </div></td>
    <td><div align="center">Flight Hours </div></td>
    <td><div align="center">Cycles</div></td>
  </tr>
  <tr>
    <td><div align="center">PK-GWK</div></td>
    <td><div align="center">223 : 23 </div></td>
    <td><div align="center">276 : 32 </div></td>
    <td><div align="center">12</div></td>
    <td><div align="center">00 : 00 </div></td>
    <td><div align="center">00 : 00 </div></td>
    <td><div align="center">0</div></td>
    <td><div align="center">23</div></td>
    <td><div align="center">23189 : 21 </div></td>
    <td><div align="center">21111</div></td>
  </tr>
</table>
<p></p>

</body>
</html>
