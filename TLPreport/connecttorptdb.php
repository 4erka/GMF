<?
include("function.php");
$TE = connectimesysRPTDB();

$qry = "SELECT * FROM dbo.aircraftflightlog WHERE blockOnDate between '2010-01-03' AND '2010-03-20'";
$resultFH = mssql_query($qry);$k = 0;$qryget = "";
while ($hasilFH = mssql_fetch_array($resultFH))
	{
		if ($k <> 0) {
			$qryget .= ",";
		}
		$afl = $hasilFH["aflNumber"];
		$reg = $hasilFH["acReg"];
		$FN = $hasilFH["fltNumber"];
		$stadep = $hasilFH["staDep"];
		$staarr = $hasilFH["staArr"];
		$blockon = substr($hasilFH["blockOnDate"],0,10);$blockondate[$hasilFH["aflNumber"]] = substr($hasilFH["airTime"],-8,8)." ".$hasilFH["acReg"]." ".$hasilFH["staDep"]." ".$hasilFH["staArr"]." ".$hasilFH["airTime"];
		$blockoff = substr($hasilFH["blockOffDate"],0,10);
		$airtime = substr($hasilFH["airTime"],-8,8);
		$revenue = $hasilFH["revenue"];
		$qryget .= "('".$afl."','".$reg."','".$FN."','".$stadep."','".$staarr."','".$blockon."','".$blockoff."','".$airtime."','".$revenue."')";
		$k++;
	}
$qryinsert = "INSERT INTO aircraftflightlog (aflNumber,acReg,fltNumber,staDep,staArr,blockOnDate,blockOffDate,airTime,revenue) VALUES ".$qryget; 

$TE = connectimesysTE();
$resultinsert = mysql_query($qryinsert);
print_r($blockondate);
die ($qryinsert);
?>