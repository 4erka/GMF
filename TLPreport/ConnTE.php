<?
	//include("adodb/adodb.inc.php");
	//$imesys = NewADOConnection('mysql');
	//$imesys->Connect("192.168.40.118", "develop", "aeroasia", "imesys");
	
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
?>
