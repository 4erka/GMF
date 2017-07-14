<!DOCTYPE html>

<?php
	include "config/connect.php";

	$sql_fh = "SELECT RevFHHours, RevFHMin FROM tbl_monthlyfhfc WHERE Actype = 'A330-200' AND MonthEval = '2017-05-01'";

	$sql_rm = "SELECT COUNT(Aircraft) AS rem FROM tblcompremoval WHERE Aircraft = 'A330-200' AND MONTH = '201705'";

	$sql_qty = "SELECT DateRem, PartNo, QTY FROM tblcompremoval WHERE Aircraft = 'A330-200' AND MONTH = '201705' ORDER BY DateRem DESC LIMIT 1";

	$res_fh = mysqli_query($link, $sql_fh);
	$res_rm = mysqli_query($link, $sql_rm);
	$res_qty = mysqli_query($link, $sql_qty);
	$fhours = 0;
	while ($rowes = $res_fh->fetch_array(MYSQLI_NUM)) {
		$rowes[1] = $rowes[1]/60;
		$fhours = $fhours+$rowes[0]+$rowes[1];
	}
?>

<html>
<head>
	<title>
		<title>MTBUR</title>
	</title>
</head>
<body>
	<?php
		include 'input_mtbur_n.php';
	 ?>

	 <table>
	 	<tr>
	 		<th>
	 			FH
	 		</th>
	 		<th>
	 			<?php  
	 				echo "$fhours";
	 			?>
	 		</th>
	 	</tr>
	 	<tr>
	 		<th>
	 			Removal
	 		</th>
	 		<th>
	 			<?php
	 				$rm = $res_rm->fetch_array(MYSQLI_NUM)[0];
	 				echo "$rm";
	 			?>
	 		</th>
	 	</tr>
	 	<tr>
	 		<th>
	 			MTBUR
	 		</th>
	 		<th>
	 			<?php
	 				$qty = $res_qty->fetch_array(MYSQLI_NUM)[0];
	 				$mtbur = $fhours*$qty/$rm;
	 				echo "$mtbur";
	 			?>
	 		</th>
	 	</tr>
	 </table>
</body>
</html>
