<?php
	//include("adodb/adodb.inc.php");
	//$imesys = NewADOConnection('mysql');
	//$imesys->Connect("192.168.40.118", "develop", "aeroasia", "imesys");

	function connectimesys($database)
	{
		/*
		$server = '192.168.40.118';
		$username = 'develop';
		$password = 'aeroasia';

		$server = 'localhost';
		$username = 'root';
		$password = '';
		*/

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
		/*
		$server = 'GMFAA-TE';
		$username = 'reliability';
		$password = 'ter1';
		*/

		$server = 'localhost';
		$username = 'root';
		$password = '';

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
?>
