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
</head>
<body>
	<form method="post" style="margin-bottom: 50px" id="form_graph">
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
						<input type="radio" name="depir" value="delay" onclick="check(this.value)" checked> Delay
						<input type="radio" name="depir" value="pirep" onclick="check(this.value)"> Pirep
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
				<tr>
					<th>
						DCP
					</th>
					<th>
						<input type="checkbox" name="dcp[]" value="d" checked> D
						<input type="checkbox" name="dcp[]" value="c"> C
						<input type="checkbox" name="dcp[]" value="x"> X
					</th>
				</tr>
			</tbody>
		</table>
	</form>
	<script type="text/javascript">
		function check(depir) {
			depir = "graph_" + depir + ".php";
		    document.getElementById("form_graph").action=depir;
		    alert(depir);
		}
	</script>
</body>
</html>
