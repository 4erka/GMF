<?
	//include("adodb/adodb.inc.php");
	//$imesys = NewADOConnection('mysql');
	//$imesys->Connect("192.168.40.118", "develop", "aeroasia", "imesys");

	function connectimesys($database)
	{
		$server = 'gmfaa-te-01';
		$username = 'ter1';
		$password = 'reliability';
		$password2 = '';

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
		$server = 'localhost';
		$username = 'root';
		$password = '';

		$database = 'mcdr';

		$sqlconnect = mysql_connect($server, $username, $password);
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
	function connectimesysRPTDB()
	{
		$server = 'RPT-DB-01';
		$username = 'usr-te-imesys';
		$password = 'gmfmr0';

		$database = 'db_Imesys';

		$sqlconnect = mssql_pconnect($server, $username, $password);
		if ($sqlconnect)
		{
			mssql_select_db($database, $sqlconnect);
			return $sqlconnect;
		}
		else
		{
			$sqlconnect = mssql_pconnect($server, $username, $password2);
			if ($sqlconnect)
			{
				mssql_select_db($database, $sqlconnect);
				echo "Gagal";
			}
			else
			return false;
		}
	}
?>
