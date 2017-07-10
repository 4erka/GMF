<?php
  include("function.php");
  $TE = connectimesysTE();


$qryFH = "SELECT `tblpirep_swift`.`ID_new` AS `ID`,`tblpirep_swift`.`DATE` AS `date`, `tblpirep_swift`.`REG` AS `reg`, `tblpirep_swift`.`STADEP` AS `Sta`, `tblpirep_swift`.`ATA` AS `ata`, `tblpirep_swift`.`SUBATA` AS `subata`, `tblpirep_swift`.`PROBLEM` AS `problem`, `tblpirep_swift`.`ACTION` AS `action` FROM `tblpirep_swift` WHERE `tblpirep_swift`.`ATA` = '78' AND `tblpirep_swift`.`REG` Like 'GE%' AND `tblpirep_swift`.`Month` = '2014-05' AND (`tblpirep_swift`.`PirepMarep` <> 'Marep' OR `tblpirep_swift`.`PirepMarep` IS NULL) ORDER BY `tblpirep_swift`.`REG`, `tblpirep_swift`.`DATE`  ASC";
	//print_r($qryFH);
	$resultFH = mysql_query($qryFH) or die("query gagal");
		echo "flag 1";
	$i = 0;
	while ($hasilFH = mysql_fetch_array($resultFH))
	{
		//$dateP[] = $hasilFH["date"];
		$testA[] = $hasilFH["date"];
		//$regP[] = $hasilFH["reg"];
		//$ataP[] = $hasilFH["ata"];
		//$subataP[] = $hasilFH["subata"];
		//$problemP[] = $hasilFH["problem"];
		//$actionP[] = $hasilFH["action"];
		//$subatareg[$hasilFH["reg"]] = $hasilFH["subata"];
		//echo $hasilFH["date"];
		//echo $testA[$i];
		$i = $i+1;
		echo "flag 2";
	}
	mysql_free_result($resultFH);
	//mysql_close($TE);

	print_r($testA[2]);
?>