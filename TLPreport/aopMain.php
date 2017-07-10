<? 
include "koneksi/conn.php";
//include "koneksi/ConnIMESys.php";

$qacReg = "SELECT
`tbl_master_actype`.`ACTypeID`,
`tbl_master_actype`.`ACType`
FROM
`tbl_master_actype`";
//$connect = connectimesys('imesys');
$Eacreg = $db->Execute($qacReg);
//$Eacreg = mysql_query($qacReg);


while(!$Eacreg->EOF)
{

$dtActype[] = $Eacreg->fields[1];	
$dt_noActype[] = $Eacreg->fields[0];
$Eacreg->MoveNext();
}
$NoActype = $Eacreg->RecordCount();

$bln = array("Desember","Januari","Febuari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
$idbln = array("12","01","02","03","04","05","06","07","08","09","10","11","12");


?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link href="includes/css/stylesheet.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
body,td,th {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
	
	
    
	background-color:ghostwhite;
}

-->
</style>
<script>
function reportx()
{
 // if(this.form1.acreg.value !="--CHOOSE--" && this.form1.thn.value !="--CHOOSE--" )
//{
//	
	//parent.balanceList.location.href="newAop_pdf.php?thnAkhir="+this.form1.thn.value+"&bln="+this.form1.bln.value+"&AcType="+this.form1.acreg.value;
 // this.balanceList.location.href="kape3.php";	
   // this.form1.action ="kape3.php";	
  // document.getElementById('balanceList').src = "kape3.php";
   //}
//   else
//   {
//   alert('Sorry');
//   }
if(this.form1.acreg.value !="" && this.form1.thn.value !="" && this.form1.bln.value !="")
{
window.frames['balanceList'].location = "newAop_pdf.php?acType="+this.form1.acreg.value+"&thnAkhir="+this.form1.thn.value+"&bln="+this.form1.bln.value+"&IDType="+this.form1.acreg.value;
}
else
{
	alert('Sorry, Please Your fields choose');
}
}

function aop_pdf()
{

this.form1.action="newAop_pdf.php?acType="+this.form1.acreg.value+"&thnAkhir="+this.form1.thn.value+"&bln="+this.form1.bln.value+"&IDType="+this.form1.acreg.value;
  //alert('hi');
 
}

</script>

</head>

<body leftmargin="0">
<form id="form1" name="form1" method="post" action="aopMain.php">
<table width="745" border="0" cellpadding="0" cellspacing="0" cel>
  <!--DWLayoutTable-->
  <tr>
    <td width="745" height="51" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0" >
          <!--DWLayoutTable-->
          <tr>
            <td width="9" height="22">&nbsp;</td>
            <td width="86" valign="top" class="text7">Ac Type : </td>
            <td width="106" rowspan="3" valign="top"><select name="acreg">
            <option value="">--CHOOSE--</option>
			<? for($i=0;$i<$NoActype;$i++)
			{?>
			 <option value="<? echo $dtActype[$i]?>" > <? echo $dtActype[$i]?></option>
			<? } ?></select>                  &nbsp;</td>
                <td width="26">&nbsp;</td>
                <td width="89" valign="top" class="text7">Month : </td>
                <td width="126" valign="top"><select name="bln">
                <option value="">--CHOOSE--</option> 
				<? for($i=1;$i<=12;$i++)
			   { ?>
				  <option value="<? echo $idbln[$i] ?>"><? echo $bln[$i] ?> </option> 
				  <? }?>
                </select>            </td>
                <td width="30">&nbsp;</td>
                <td width="59" valign="top" class="text7">Year : </td>
                <td width="109" valign="top"><select name="thn">
                  <option value="1">--CHOOSE--</option>
				  <? for($i=2007;$i<=date("Y");$i++){
				  ?>
                  <option value="<? echo $i ?>"><? echo $i ?></option>
				  <? } ?>
                </select>            </td>
                <td width="36">&nbsp;</td>
                <td width="69" rowspan="2" valign="top"><input type="button" name="Submit" value="Submit" onclick="reportx()" /></td>
        </tr>
          <tr>
            <td height="2"></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td height="11"></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          
          <tr>
            <td height="16"></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          
          
          
          
    </table></td>
  </tr>
  <tr>
    <td height="430" align="left" valign="top"><iframe name="balanceList" width="760" height="430" frameborder="0" id="balanceList" style="border:1px solid steelblue; background-color:steelblue" ></iframe></td>
  </tr>
  <tr>
    <td height="31" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
      <!--DWLayoutTable-->
      <tr>
        <td width="498" height="7"></td>
          <td width="86"></td>
          <td width="101"></td>
          <td width="81"></td>
        </tr>
      <tr>
        <td height="24"></td>
          <td valign="top"><input type="submit" name="Submit2" value="PDF" onclick="aop_pdf()" /></td>
          <td valign="top"><input type="submit" name="Submit3" value="Excel" /></td>
          <td valign="top"><input type="submit" name="Submit4" value="Close" /></td>
        </tr>
    </table></td>
  </tr>
</table>
</form>
</body>
</html>
