<h1> Hello there</h1>
<?php
if(empty($_GET["actype"])){
  $ACType = "";
}
else{
  $ACType = "'".$_GET['actype']."'";
}
if(empty($_GET["acreg"])){
  $ACReg = "";
}
else{
  $ACReg = $_GET['acreg'];
}
if(!empty($_GET["datefrom"])){
  $DateStart = "'".$_GET['datefrom']."'";
}
else{
  $DateStart = "";
}
if(!empty($_GET["dateto"])){
  $DateEnd = "'".$_GET['dateto']."'";
}
else
  $DateEnd = "";

  $setSql = "SELECT Notification, ACTYPE, REG, STADEP, FN, ATA, SUBATA, PROBLEM, 4DigitCode FROM tblpirep_swift
  WHERE ACTYPE = ".$ACType." AND REG LIKE '%".$ACReg."' AND DATE BETWEEN ".$DateStart." AND ".$DateEnd."";

print_r($setSql);

 ?>
