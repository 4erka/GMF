<?php
  //include("function.php");
  function connectimesys($database)
	{
		$server = '192.168.40.118';
		$username = 'develop';
		$password = 'aeroasia';
	
		//$database = 'imesys';

		$sqlconnect = mysql_pconnect($server, $username, $password);
		if ($sqlconnect)
		{
			mysql_select_db($database, $sqlconnect);
			return $sqlconnect;
		}
		else
		{
			$sqlconnect = mysql_pconnect($server, $username, $password2);
			if ($sqlconnect)
			{
				mysql_select_db($database, $sqlconnect);
				echo "Gagal";
			}
			else
			return false;
		}
	}
	
	function connectimesysTE()
	{
		$server = 'GMFAA-TE';
		$username = 'reliability';
		$password = 'ter1';
	
		$database = 'mcdr';

		$sqlconnect = mysql_pconnect($server, $username, $password);
		if ($sqlconnect)
		{
			mysql_select_db($database, $sqlconnect);
			return $sqlconnect;
		}
		else
		{
			$sqlconnect = mysql_pconnect($server, $username, $password2);
			if ($sqlconnect)
			{
				mysql_select_db($database, $sqlconnect);
				echo "Gagal";
			}
			else
			return false;
		}
	}

  $connectAMS = connectimesys('imesys');
	
  $qryFH = "SELECT `aircraftflightlog`.`acReg`, SEC_TO_TIME( SUM( TIME_TO_SEC(`aircraftflightlog`.`airTime`))) AS `FH`, Count(`aircraftflightlog`.`landing`) AS `FC` FROM `aircraftflightlog` WHERE `aircraftflightlog`.`airborneDate` BETWEEN '2008-01-01' AND '".date("Y-m-d")."' AND `aircraftflightlog`.`voidStatus` = 'false' GROUP BY `aircraftflightlog`.`acReg`";
	$resultFH = mysql_query($qryFH);
	//die($qryFH);
	while ($hasilFH = mysql_fetch_array($resultFH))
	{
		$hour[strtoupper($hasilFH["acReg"])] = $hasilFH["FH"];
		$cycle[strtoupper($hasilFH["acReg"])] = $hasilFH["FC"];
	}
	mysql_free_result($resultFH);

	//die(print_r($hour));
	$qryinitFH = "SELECT `tbl_init_fhours_and_fcycles`.`acreg`, `tbl_init_fhours_and_fcycles`.`fhours`, `tbl_init_fhours_and_fcycles`.`fcycles` FROM `tbl_init_fhours_and_fcycles`";
	$resultinitFH = mysql_query($qryinitFH);
	//die($qryFH);
	while ($hasilinitFH = mysql_fetch_array($resultinitFH))
	{
		$reg[] = $hasilinitFH["acreg"];
		$inithour[strtoupper($hasilinitFH["acreg"])] = $hasilinitFH["fhours"];
		$initcycle[strtoupper($hasilinitFH["acreg"])] = $hasilinitFH["fcycles"];
	}
	mysql_free_result($resultinitFH);

	//die();
	$connectAMSdelay = connectimesysTE();

	foreach ($reg as $key => $value)
	{
		$menitinit = substr($inithour[$value],strpos($inithour[$value],':'),2);
		$menithour = substr($hour[$value],strpos($hour[$value],':'),2);
		$addhour = $menitinit + $menithour;
		if ($addhour >= 60)
		{
			$add = 1;
		} else {
			$add = 0;
		}

		$tsn[$value] = $inithour[$value] + $hour[$value] + $add;
		$csn[$value] = $initcycle[$value] + $cycle[$value];

		$qryupdate = "UPDATE tbl_TSN SET TSN=".$tsn[$value].", CSN=".$csn[$value].", dateUpdate='".date("Y-m-d")."' WHERE Reg ='".$value."'";//die($qryupdate);
		$resultupdate = mysql_query($qryupdate);
	}
	//mysql_free_result($resultupdate);
	echo "sukses!!";
?>