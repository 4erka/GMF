<?php
//setting header to json
header('Content-Type: application/json');

//database
define('DB_HOST', '192.168.40.101');
define('DB_USERNAME', 'ter1');
define('DB_PASSWORD', 'reliability');
define('DB_NAME', 'mcdr');

//get connection
$mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

if(!$mysqli){
	die("Connection failed: " . $mysqli->error);
}

$ACType = $_POST["actype"];
$ACReg = $_POST["acreg"];
$DateStart = $_POST["datestart"];
$DateEnd = $_POST["dateend"];
$ATA = $_POST["ata"];
$Fault_code = $_POST["fault_code"];
$Keyword = $_POST["keyword"];

//query to get data from the table
// $query = sprintf("SELECT COUNT(DateEvent) as delay, DateEvent FROM mcdrnew WHERE ACTYPE = ".$ACType."".$ACReg."".$ATA."".$Fault_code."".$DateStart."".$DateEnd." GROUP BY DateEvent");

$query = sprintf("SELECT COUNT(DateEvent) as delay, DateEvent FROM mcdrnew WHERE ACTYPE = ".$ACType."".$ACReg."".$ATA."".$Fault_code."".$DateStart."".$DateEnd." GROUP BY DateEvent");

//execute query
$result = $mysqli->query($query);

//loop through the returned data
$data = array();
foreach ($result as $row) {
	$data[] = $row;
}

//free memory associated with result
$result->close();

//close connection
$mysqli->close();

//now print the data
print json_encode($data);