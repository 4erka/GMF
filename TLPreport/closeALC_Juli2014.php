<?php

function connectmysql() {
	$dbname = "mcdr";
	$user = "ter1";
	$password = "reliability";
	$host = "gmfaa-te-01";
	$dbconnection=mysql_connect($host,$user,$password) or die("Gagal melakukan koneksi ke database");
	mysql_select_db($dbname);
	return $dbconnection;
}

function connectportalrmd() {
	$dbname = "rmd";
	$user = "develop";
	$password = "aeroasia";
	$host = "192.168.40.118";
	$dbconnection=mysql_connect($host,$user,$password) or die("Gagal melakukan koneksi ke database");
	mysql_select_db($dbname);
	return $dbconnection;
}
/*
$masuk = connectmysql();
$qrybaru = "SELECT Max(`mcdrnew`.`EventId`) AS `Max` FROM `mcdrnew`";
$hasilid = mysql_query($qrybaru);
while ($hasillagi = mysql_fetch_array($hasilid)){
	$hasilbaru = $hasillagi["Max"];
}
mysql_free_result($hasilid);

print_r($hasilbaru);
*/

$masuk = connectportalrmd();

$qryslct = "SELECT RSSeq FROM `relsummary` WHERE `DateIssued` BETWEEN '2014-07-01' AND '2014-07-31' AND `Status` = '1' AND `Deskripsi` LIKE '%1 removal%'";

$result = mysql_query($qryslct) or die("No New Data");
if (mysql_num_rows($result) == 0){
	die("No New Data");
}

//die(print_r($result));

while ($hasil = mysql_fetch_array($result)){
	$event[] = $hasil["RSSeq"];
}

//print_r($event);

$qryinsert = "INSERT INTO rsfollowon (RSSeqFO,Follow,DateFO,NextFO,InsertFO,NextDate,Status,NextFOEN) VALUES ";

$insertvalue = "";
foreach ($event as $key => $value){
	if($insertvalue <> "") {
		$qryinsert .= ",";
		}
	$qryinsert .= "('$value',";
	$qryinsert .= "'Only 1 removal in the last 3 months. No need engineering evaluation',";
	$qryinsert .= "'2014-08-20',";
	$qryinsert .= "'TER-1',";
	$qryinsert .= "'aryan/',";
	$qryinsert .= "'2014-08-20',";
	$qryinsert .= "'3',";
	$qryinsert .= "'ARYAN SETIAWAN')";
	
	$insertvalue = "ts";
}
mysql_query($qryinsert);
mysql_close($masuk);
die(print_r($qryinsert));
//mssql_close($conn);


die();


?>

