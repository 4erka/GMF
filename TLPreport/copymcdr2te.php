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

function connectportal() {
	$dbname = "mcdr";
	$user = "develop";
	$password = "aeroasia";
	$host = "192.168.40.118";
	$dbconnection=mysql_connect($host,$user,$password) or die("Gagal melakukan koneksi ke database");
	mysql_select_db($dbname);
	return $dbconnection;
}
$masuk = connectmysql();
$qrybaru = "SELECT Max(`mcdrnew`.`EventId`) AS `Max` FROM `mcdrnew`";
$hasilid = mysql_query($qrybaru);
while ($hasillagi = mysql_fetch_array($hasilid)){
	$hasilbaru = $hasillagi["Max"];
}
mysql_free_result($hasilid);
$conn = connectportal();
$i = 0;
//$hasilbaru = 44337;
$query = "SELECT tblevent.EventID,tblevent.DateEvent,tblevent.ACTypeOrig,tblevent.ACRegOrig,tblevent.FltNo,tblevent.StaDep,tblevent.StaArr,tblevent.IATACode,TIME_TO_SEC(tblevent.tech_delay) AS `tech_delay`, timediff(concat(`tblevent`.`DateCompleted`,_utf8' ',`tblevent`.`ATD`),concat(`tblevent`.`DateEvent`,_utf8' ',`tblevent`.`ETD`)) AS delay, tblevent.iata2, TIME_TO_SEC(tblevent.tech_delay2) AS `tech_delay2`, tblevent.iata3, TIME_TO_SEC(tblevent.tech_delay3) AS `tech_delay3` FROM `tblevent` WHERE `tblevent`.`EventID` > '$hasilbaru'";
//die($query);
$result = mysql_query($query) or die("No New Data");
if (mysql_num_rows($result) == 0){
	die("No New Data");
}

while ($hasil = mysql_fetch_array($result)){
	$event[] = $hasil["EventID"];
	$date[$hasil["EventID"]] = $hasil["DateEvent"];
	$actype[$hasil["EventID"]] = $hasil["ACTypeOrig"];
	$acreg[$hasil["EventID"]] = $hasil["ACRegOrig"];
	$flightno[$hasil["EventID"]] = $hasil["FltNo"];
	$stadep[$hasil["EventID"]] = $hasil["StaDep"];
	$staarr[$hasil["EventID"]] = $hasil["StaArr"];
	$iata1[$hasil["EventID"]] = $hasil["IATACode"];
	$techdelay1[$hasil["EventID"]] = ($hasil["tech_delay"]/1);
	$iata2[$hasil["EventID"]] = $hasil["iata2"];
	$techdelay2[$hasil["EventID"]] = isset($hasil["tech_delay2"]) ? ($hasil["tech_delay2"]/1) : 0;
	$iata3[$hasil["EventID"]] = $hasil["iata3"];
	$techdelay3[$hasil["EventID"]] = isset($hasil["tech_delay3"]) ? ($hasil["tech_delay3"]/1) : 0;
	if (substr($iata1[$hasil["EventID"]],0,1) == 4){
		$iata[$hasil["EventID"]] = $hasil["IATACode"];
		$techdelay[$hasil["EventID"]] = $hasil["tech_delay"];
	} else {
		$iata[$hasil["EventID"]] = "";
		$techdelay[$hasil["EventID"]] = "";
	}
	$delaytotal[$hasil["EventID"]] = $hasil["delay"];
}
//die(print_r($techdelay2));
$queryprob = "SELECT `tblmcprobdata`.`TimeProb`, `tblmcprobdata`.`DescriptionProb`, `tblmcprobdata`.`ATAProb`, `tblmcprobdata`.`SubATA`, `tblmcprobdata`.`EventID` FROM `tblmcprobdata` WHERE `tblmcprobdata`.`EventID` > '$hasilbaru' ORDER BY `tblmcprobdata`.`EventID` ASC";
//die($query);
$resultprob = mysql_query($queryprob) or die("data Problem gagal");

while ($hasilprob = mysql_fetch_array($resultprob)){
	$eventprob[] = $hasilprob["EventID"];
	$prob[] = $hasilprob["DescriptionProb"];
	$ataprob[] = $hasilprob["ATAProb"];
}
$arrjmlheventid = array_count_values($eventprob);
	
	$start = 0;
	foreach ($arrjmlheventid as $k => $v)
	{
		$arrchunk[] = array_slice($prob,$start,$v);
		$start = $start + $v;
	}
	$arrprob = array_combine(array_keys($arrjmlheventid),$arrchunk);

$queryrec = "SELECT `tblmcrectdata`.`EventID`, `tblmcrectdata`.`TimeRect`, `tblmcrectdata`.`DescriptionRect` FROM `tblmcrectdata` WHERE `tblmcrectdata`.`EventID` > '$hasilbaru' ORDER BY `tblmcrectdata`.`EventID` ASC";
//die($queryrec);
$resultrec = mysql_query($queryrec) or die("data REct gagal");

while ($hasilrec = mysql_fetch_array($resultrec)){
	$eventrect[] = $hasilrec["EventID"];
	$rect[] = $hasilrec["DescriptionRect"];
}
unset($arrjmlheventid);unset($arrchunk);
$arrjmlheventid = array_count_values($eventrect);
	
	$start = 0;
	foreach ($arrjmlheventid as $k => $v)
	{
		$arrchunk[] = array_slice($rect,$start,$v);
		$start = $start + $v;
	}
	$arrrect = array_combine(array_keys($arrjmlheventid),$arrchunk);
//die(print_r(implode(",",$arrprob[44337])));
mysql_close($conn);
$connte = connectmysql();
$qryactype = mysql_query("SELECT ACReg, ACType FROM tbl_masterac");
while ($rowactype = mysql_fetch_array($qryactype))
{
	$typemaster[$rowactype["ACReg"]] = $rowactype["ACType"];
}

$qryinsert = "INSERT INTO mcdrnew (DateEvent,ACtype,Reg,FlightNo,DepSta,ArivSta,DCP,HoursTot,MinTot,Iata,ATAdelay,ATAtdm,SubATAtdm,HoursTek,MinTek,Problem,Rectification,EventID) VALUES ";

$nilai = "";$j = 0;$insertvalue = "";
foreach ($event as $key => $value){
	
	$total = explode(":",$delaytotal[$value]);
	$techdel = isset($techdelay1[$value]) ? $techdelay1[$value] : 0 ;
	if (substr($iata2[$value],0,1) == "4"){
		$techdel = $techdelay1[$value] + $techdelay2[$value];
		//echo "iata2= ".$techdelay2[$value],"  ".($techdelay2[$value]+$techdelay1[$value])."/r";
	} 
	if (substr($iata3[$value],0,1) == "4"){
		$techdel = $techdel + $techdelay3[$value];
		//echo "samamaa".$iata3[$value];
	}
	//echo $value."    ".$techdel."/n";

	if($insertvalue <> "") {
		$qryinsert .= ",";
		}
	$qryinsert .= "('$date[$value]',";
	$qryinsert .= "'".$typemaster[$acreg[$value]]."',";
	$qryinsert .= "'$acreg[$value]',";
	$qryinsert .= "'".substr($flightno[$value],3,10)."',";
	$qryinsert .= "'$stadep[$value]',";
	$qryinsert .= "'$staarr[$value]',";
	$qryinsert .= "'".(($techdel > 900) ? "D" : "X")."',";
	$qryinsert .= "'$total[0]',";
	$qryinsert .= "'$total[1]',";
	$qryinsert .= "'$iata[$value]',";
	$qryinsert .= "'$ataprob[$value]',";
	$qryinsert .= "'$ataprob[$value]',";
	$qryinsert .= "'',";
	$qryinsert .= "'".(($techdel - ($techdel % 3600))/3600)."',";
	$qryinsert .= "'".(($techdel > 3600) ? (($techdel % 3600)/60) : ($techdel/60))."',";
	$qryinsert .= "'".(isset($arrprob[$value]) ? implode(". ",$arrprob[$value]) : "")."',";
	$qryinsert .= "'".(isset($arrrect[$value]) ? implode(". ",$arrrect[$value]) : "")."',";
	$qryinsert .= "'$value')";

	$insertvalue = "ts";
}
mysql_query($qryinsert);
mysql_close($connte);
die(print_r($qryinsert));
//mssql_close($conn);


die();


?>

