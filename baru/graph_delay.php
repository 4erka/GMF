<!DOCTYPE html>

<?php

$ACType = "'".$_POST["actype"]."'";
if(empty($_POST["acreg"])){
  $ACReg = "";
}
else{
  $ACReg = " AND REG LIKE '%".$_POST['acreg']."%'";
}
if(empty($_POST["datefrom"])){
  $DateStart = "";
    $DateStart2 = "";
}
else{
  $DateStart = " AND DATE BETWEEN '".$_POST['datefrom']."'";
    $DateStart2 = " AND DATEEVENT BETWEEN '".$_POST['datefrom']."'";
}
if(empty($_POST["dateto"])){
  $DateEnd = "";
}
else{
  $DateEnd = " AND '".$_POST['dateto']."'";
}
if(empty($_POST["ata"])){
  $ATA = "";
    $ATA2 = "";
}
else{
  $ATA = " AND ATA = '".$_POST['ata']."'";
    $ATA2 = " AND ATATDM = '".$_POST['ata']."'";
}
if(empty($_POST["subata"])){
  $Fault_code = "";
    $Fault_code2 = "";
}
else{
  $Fault_code = " AND SUBATA = '".$_POST['subata']."'";
    $Fault_code2 = " AND SUBATATDM = '".$_POST['subata']."'";
}
if(empty($_POST["keyword"])){
  $Keyword = "";
}
else{
  $Keyword = " AND (PROBLEM LIKE '%".$_POST['keyword']."%' OR RECTIFICATION LIKE '%".$_POST['keyword']."%')";
}
if(empty($_POST["dcp"])){
  $DCP[4] = "";
  $DCPs="";
}
else{
  $DCP = $_POST['dcp'];
  $i = 0;
  foreach ($DCP as &$value) {
      if($i == 0){
      $DCP[$i] = " AND DCP IN ('".$DCP[$i]."'";
    }
    else if($i == 1){
      $DCP[$i] = ",'".$DCP[$i]."'";
    }
    else{
      $DCP[$i] = ",'".$DCP[$i]."'";
    }
    $i++;
  }
  $DCP[$i-1]=$DCP[$i-1].")";
  $i = 0;
  $DCPs="";
  foreach ($DCP as &$value) {
    $DCPs = $DCPs.$DCP[$i];
    $i++;
  }
}
//print_r($DCP);

include "config/connect.php";

$sql_delay = "SELECT ACtype, Reg, DepSta, FlightNo, HoursTot, ATAtdm, SubATAtdm, Problem, Rectification, MinTot FROM mcdrnew WHERE ACTYPE = ".$ACType."".$ACReg."".$ATA2."".$Fault_code2."".$DCPs."".$Keyword."".$DateStart2."".$DateEnd."";
$res_delay = mysqli_query($link, $sql_delay);

 ?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>TLP Report - Graph Delay</title>

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

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->

      <?php
        $page_now = "graph";
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
        		include "input_graph_delay_pirep.php";
        	?>

          <h1 style="text-align: center;">Table Delay</h1>
        	<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.css">
        	<script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.15/js/jquery.dataTables.js"></script>
        	<table id="table_delay" class="table table-bordered table-striped table-condensed" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>A/C Type</th>
                        <th>A/C Reg</th>
                        <th>Sta Dep</th>
                        <th>Flight No</th>
                        <th>Delay Length</th>
                        <th>ATA</th>
                        <th>Sub ATA</th>
                        <th>Problem</th>
                        <th>Rectification</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>A/C Type</th>
                        <th>A/C Reg</th>
                        <th>Sta Dep</th>
                        <th>Flight No</th>
                        <th>Delay Length</th>
                        <th>ATA</th>
                        <th>Sub ATA</th>
                        <th>Problem</th>
                        <th>Rectification</th>
                    </tr>
                </tfoot>
                <tbody>
        			<?php
        				while ($rowes = $res_delay->fetch_array(MYSQLI_NUM)) {
        					$rowes[4] = $rowes[4]*60;
        					$rowes[4] = $rowes[4]+$rowes[9];
        					//print_r($rowes[4]);echo "<br>";
        					echo "<tr>";
        						echo "<td>".$rowes[0]."</td>";
        						echo "<td>".$rowes[1]."</td>";
        						echo "<td>".$rowes[2]."</td>";
        						echo "<td>".$rowes[3]."</td>";
        						echo "<td>".$rowes[4]."</td>";
        						echo "<td>".$rowes[5]."</td>";
        						echo "<td>".$rowes[6]."</td>";
        						echo "<td>".$rowes[7]."</td>";
        						echo "<td>".$rowes[8]."</td>";
        					echo "</tr>";
        				}
        			 ?>
                </tbody>
            </table>
            <script type="text/javascript">
           		$(document).ready(function() {
            	$('#table_delay').DataTable({
            	});
        		} );
        	</script>

           	<script type="text/javascript" src="js/Chart.min.js"></script>
        	<script type="text/javascript">
        		var actype = <?php echo(json_encode($ACType)); ?>;
        		var acreg = <?php echo(json_encode($ACReg)); ?>;
        		var datestart = <?php echo(json_encode($DateStart2)); ?>;
        		var dateend = <?php echo(json_encode($DateEnd)); ?>;
        		var ata = <?php echo(json_encode($ATA2)); ?>;
        		var fault_code = <?php echo(json_encode($Fault_code2)); ?>;
        		var keyword = <?php echo(json_encode($Keyword)); ?>;
        		var dcp = <?php echo(json_encode($DCPs)); ?>;
        		$(document).ready(function(){
        			$.ajax({
        				url: "http://localhost/GMF/data_grafik_delay.php",
        				method: "POST",
        				data: {actype: actype, acreg: acreg, datestart: datestart, dateend: dateend, ata: ata, fault_code: fault_code, keyword: keyword, dcp: dcp},
        				success: function(data) {
        					console.log(data);
        					var date = {
        						date : [],
        						delay : []
        					};
        					// var date = [];
        					// var delay = [];

        					for(var i in data) {
        						date.date.push(data[i].DateEvent);
        						date.delay.push(data[i].delay);
        						//delay.push(data[i].delay);
        					}

        					var chartdata = {
        						labels: date.date,
        						datasets : [
        							{
        								label: 'Delay',
        								fill: 'false',
        								backgroundColor: 'rgba(200, 200, 200, 0.75)',
        								borderColor: 'rgba(0, 0, 255, 1)',
        								pointBackgroundColor: 'rgba(255, 0, 0, 1)',
        								pointBorderColor: 'rgba(255, 0, 0, 1)',
        								lineTension: '0',
        								data: date.delay
        							}
        						]
        					};

        					var options = {
        						title : {
        							display : true,
        							position : "top",
        							text : "Delay (D4)",
        							fontSize : 18,
        							fontColor : "#111"
        						},
        						legend : {
        							display : true,
        							position : "bottom"
        						},
        						scales: {
        					        yAxes: [{
        					            ticks: {
        					                beginAtZero: true
        					            }
        					        }]
        					    }
        					};

        					var ctx = $("#graf_data_delay");

        					var barGraph = new Chart(ctx, {
        						type: 'line',
        						data: chartdata,
        						options: options
        					});
        				},
        				error: function(data) {
        					console.log(data);
        				}
        			});
        		});
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
