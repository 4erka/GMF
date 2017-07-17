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
</head>

<body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->

      <?php
        $page_now = "mtbur";
        include 'header.php';
       ?>

      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->

      <?php
        include 'navbar.php';
       ?>

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content" style="min-height:94vh;">
        <section class="wrapper" style="text-align: centered">

          <?php
        		include "input_mtbur_n.php";
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

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/jquery-1.8.3.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="assets/js/jquery.sparkline.js"></script>

    <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.3.1/js/dataTables.buttons.min.js"></script>

    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>

    <script type="text/javascript" src="assets/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="assets/js/gritter-conf.js"></script>

    <!--script for this page-->
    <script src="assets/js/sparkline-chart.js"></script>
	<script src="assets/js/zabuto_calendar.js"></script>

  </body>
</html>