<!DOCTYPE html>

<?php
	include "config/connect.php";

	$ACType = "'".$_POST["actype"]."'";
	if(empty($_POST["partnumber"])){
		$PartNo = "";
	}
	else{
		$PartNo = " AND PartNo LIKE '%".$_POST['partnumber']."%'";
	}
	if(empty($_POST["monthfrom"])){
		$MonthStart = "";
		$MonthStart2 = "";
	}
	else{
		$month = $_POST['monthfrom'];
		$months = explode("-", $month);
		$month = $months[0]."".$months[1];
		$MonthStart = " AND MonthEval BETWEEN '".$_POST['monthfrom']."'";
		$MonthStart2 = " AND Month BETWEEN '".$month."'";
	}
	if(empty($_POST["monthto"])){
		$MonthEnd = "";
		$MonthEnd2 = "";
	}
	else{
		$month = $_POST['monthto'];
		$months = explode("-", $month);
		$month = $months[0]."".$months[1];
		$MonthEnd = " AND '".$_POST['monthto']."'";
		$MonthEnd2 = " AND '".$month."'";
	}

	$sql_fh = "SELECT RevFHHours, RevFHMin FROM tbl_monthlyfhfc WHERE Actype = ".$ACType."".$MonthStart."".$MonthEnd;

	$sql_rm = "SELECT COUNT(Aircraft) AS rem FROM tblcompremoval WHERE Aircraft = ".$ACType."".$PartNo."".$MonthStart2."".$MonthEnd2;

	$sql_qty = "SELECT DateRem, PartNo, QTY FROM tblcompremoval WHERE Aircraft = ".$ACType."".$PartNo."".$MonthStart2."".$MonthEnd2." ORDER BY DateRem DESC LIMIT 1";

	$sql_tbl = "SELECT PartNo, SerialNo, PartName, Reg FROM tblcompremoval WHERE Aircraft = ".$ACType."".$PartNo."".$MonthStart2."".$MonthEnd2;

	print_r($sql_tbl);

	//print_r($sql_tbl);

	$res_fh = mysqli_query($link, $sql_fh);
	$res_rm = mysqli_query($link, $sql_rm);
	$res_qty = mysqli_query($link, $sql_qty);
	$res_tbl = mysqli_query($link, $sql_tbl);
	$fhours = 0;
	while ($rowes = $res_fh->fetch_array(MYSQLI_NUM)) {
		$rowes[1] = $rowes[1]/60;
		$fhours = $fhours+$rowes[0]+$rowes[1];
	}
?>

<html>
<head>
	<title>MTBUR</title>

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
</head>
<body>
	<?php
		include 'input_mtbur_n.php';
	 ?>

	 <table style="margin-bottom: 50px">
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
	 				$qty = $res_qty->fetch_array(MYSQLI_NUM)[2];
	 				$mtbur = $fhours*$qty/$rm;
	 				echo "$mtbur";
	 			?>
	 		</th>
	 	</tr>
	 	<tr>
	 		<th>
	 			Perhitungan MTBUR
	 		</th>
	 		<th>
	 			<?php  
	 				print_r($fhours); echo "*"; print_r($qty); echo "/"; print_r($rm);
	 			?>
	 		</th>
	 	</tr>
	 </table>

	<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.css">
	<script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.15/js/jquery.dataTables.js"></script>
	<table id="table_mtbur" class="display cell-border" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Part Number</th>
                <th>Serial Number</th>
                <th>Part Name</th>
                <th>Reg</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Part Number</th>
                <th>Serial Number</th>
                <th>Part Name</th>
                <th>Reg</th>
            </tr>
        </tfoot>
        <tbody>
			<?php
				while ($rowes = $res_tbl->fetch_array(MYSQLI_NUM)) {
					echo "<tr>";
						echo "<td>".$rowes[0]."</td>";
						echo "<td>".$rowes[1]."</td>";
						echo "<td>".$rowes[2]."</td>";
						echo "<td>".$rowes[3]."</td>";
					echo "</tr>";
				}
			 ?>
        </tbody>
    </table>
    <script type="text/javascript">
   		$(document).ready(function() {
    	$('#table_mtbur').DataTable({
    	});
		} );
	</script>
</body>
</html>