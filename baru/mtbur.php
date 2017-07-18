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

<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>TLP Report - mtbur</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="assets/lineicons/style.css">

    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <script src="assets/js/chart-master/Chart.js"></script>

    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>

    <?php  
      include 'loader_style.php';
    ?>

</head>

<body onload="myFunction()">

	<?php  
      include 'loader.php';
    ?>

  	<div style="display:none;" id="myDiv" class="animate-bottom">

  		<section id="container" >

			<?php
				$page_now = "mtbur";
				include 'header.php';
			?>

			<?php
				include 'navbar.php';
			?>

			<section id="main-content" style="min-height:94vh;">
				<section class="wrapper" style="text-align: centered">

				  	<?php
						include "input_mtbur_n.php";
					?>

					<label class="col-sm-1 control-label">FH</label>
					<div class="col-sm-2">
						<?php  
								echo "$fhours";
							?>
					</div><br><br>
					<label class="col-sm-1 control-label">Removal</label>
					<div class="col-sm-2">
						<?php
								$rm = $res_rm->fetch_array(MYSQLI_NUM)[0];
								echo "$rm";
							?>
					</div><br><br>
					<label class="col-sm-1 control-label">MTBUR</label>
					<div class="col-sm-2">
						<?php
								$qty = $res_qty->fetch_array(MYSQLI_NUM)[2];
								$mtbur = $fhours*$qty/$rm;
								echo "$mtbur";
							?>
					</div><br><br>
					<label class="col-sm-1 control-label">Removal</label>
					<div class="col-sm-2">
						<?php  
								print_r($fhours); echo "*"; print_r($qty); echo "/"; print_r($rm);
							?>
					</div><br><br>


				  	<h1 style="text-align: center;">Table MTBUR</h1>
					<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.css">
					<script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.15/js/jquery.dataTables.js"></script>
					<table id="table_mtbur" class="table table-bordered table-striped table-condensed" cellspacing="0" width="100%">
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

				</section>
			</section>

			<?php
				include 'footer.php';
			?>

		</section>
	</div>
</body>
</html>