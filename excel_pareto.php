<?php
//Deklarasi host, user, password, dan nama database
define ("DB_HOST", "localhost");
define ("DB_USER", "root");
define ("DB_PASS", "");
define ("DB_NAME", "mcdr");

//Mendapatkan Value yang di passing
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

$link = mysql_connect(DB_HOST, DB_USER, DB_PASS) or die("Couldn't make connection.");
$db = mysql_select_db(DB_NAME, $link) or die("Couldn't select database");

$setCounter = 0;

//Nama excellnya
$setExcelName = "Pareto";

$setSql = "SELECT Notification AS 'Notification Number', ACTYPE AS 'A/C Type', REG AS 'A/C Reg', STADEP, FN AS 'Flight Number', NULL as 'Delay Lenght' ATA, SUBATA, PROBLEM, 4DigitCode AS 'Coding (D2 Only)'
FROM tblpirep_swift
WHERE ACTYPE = ".$ACType." AND REG LIKE '%".$ACReg."' AND DATE BETWEEN ".$DateStart." AND ".$DateEnd."";

//$setSql = "SELECT Notification, ACTYPE, REG, STADEP, FN, ATA, SUBATA, PROBLEM, 4DigitCode FROM tblpirep_swift
//WHERE ACTYPE = 'B737-300' AND REG LIKE '%' AND DATE BETWEEN '2007-01-01' AND '2007-01-06'";

$setRec = mysql_query($setSql);

$setCounter = mysql_num_fields($setRec);

for ($i = 0; $i < $setCounter; $i++) {
    $setMainHeader .= mysql_field_name($setRec, $i)."\t";
}

while($rec = mysql_fetch_row($setRec))  {
  $rowLine = '';
  foreach($rec as $value)       {
//    if(!isset($value) || $value == "")  {
//      $value = "\t";
//    }   else  {
//It escape all the special charactor, quotes from the data.
      $value = strip_tags(str_replace('"', '""', $value));
      $value = '"' . $value . '"' . "\t";
//    }
    $rowLine .= $value;
  }
  $setData .= trim($rowLine)."\n";
}
  $setData = str_replace("\r", "", $setData);

  $setSql = "SELECT ACTYPE, REG, DepSta, FlightNo, HoursTot, MinTot, ATAtdm, Iata, Problem FROM mcdrnew
  WHERE ACTYPE = ".$ACType." AND REG LIKE '%".$ACReg."' AND DateEvent BETWEEN ".$DateStart." AND ".$DateEnd."";

  $setRec = mysql_query($setSql);

  $setCounter = mysql_num_fields($setRec);

while($rec = mysql_fetch_row($setRec))  {
    $rowLine = '';
    foreach($rec as $value)       {
  //    if(!isset($value) || $value == "")  {
  //      $value = "\t";
  //    }   else  {
  //It escape all the special charactor, quotes from the data.
        $value = strip_tags(str_replace('"', '""', $value));
        $value = '"' . $value . '"' . "\t";
  //    }
      $rowLine .= $value;
    }
    $setData1 .= trim($rowLine)."\n";
  }
    $setData1 = str_replace("\r", "", $setData);


if ($setData == "") {
  $setData = "\nno matching records found\n";
}

$setCounter = mysql_num_fields($setRec);



//This Header is used to make data download instead of display the data
 header("Content-type: application/octet-stream");

header("Content-Disposition: attachment; filename=".$setExcelName."_Report.xls");

header("Pragma: no-cache");
header("Expires: 0");

//It will print all the Table row as Excel file row with selected column name as header.
echo ucwords($setMainHeader)."\n".$setData."\n";
?>
