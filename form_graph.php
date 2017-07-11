<!DOCTYPE html>

<?php
	include "config/connect.php";

	$sql = "SELECT DISTINCT ACtype FROM tbl_master_actype";
	$res = mysqli_query($link, $sql);

	?>

<html>
<head>
	<title>
		<title>morris by kukuh</title>
	</title>
	<script src="jquery.js" type="text/javascript"></script>
</head>
<body>
	<form action="graph_pirep.php" method="post" style="margin-bottom: 50px">
		<table>
			<tbody>
				<tr>
					<th>
						A/C Type
					</th>
					<th>
						<select name="actype" style="">
								<?php
									while($row = $res->fetch_array(MYSQLI_NUM))
								 		echo "<option value=".$row[0].">".$row[0]."</option>";
								 ?>
						</select>
					</th>
					<th></th>
					<th></th>
					<th>
						<input type="submit" value="Display Report">
					</th>
					<th>
						<input type="submit" value="Export Excel">
					</th>
					<th>
						<input type="submit" value="Export PDF">
					</th>
				</tr>
				<tr>
					<th>
						A/C Reg
					</th>
					<th>
						<input type="text" name="acreg">
					</th>
				</tr>
				<tr>
					<th>
						Date from
					</th>
					<th>
						<input type="date" name="datefrom" id="id_datefrom">
					</th>
					<th>
						Date to
					</th>
					<th>
						<input type="date" name="dateto" id="id_dateto">
					</th>
				</tr>
				<tr>
					<th>
						ATA
					</th>
					<th>
						<input type="text" name="ata">
					</th>
				</tr>
				<tr>
					<th>
						SUBATA
					</th>
					<th>
						<input type="text" name="subata">
					</th>
				</tr>
				<tr>
				<tr>
					<th>
						Delay / Pirep
					</th>
					<th>
						<input type="radio" name="depir" value="delay"> Delay
						<input type="radio" name="depir" value="pirep"> Pirep
					</th>
				</tr>
				</tr>
					<th>
						Keyword
					</th>
					<th>
						<input type="text" name="keyword">
					</th>
				</tr>
			</tbody>
		</table>
	</form>
</body>
</html>
