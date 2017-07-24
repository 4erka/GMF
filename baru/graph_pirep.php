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
		$Keyword = " AND (PROBLEM LIKE '%".$_POST['keyword']."%' OR ACTION LIKE '%".$_POST['keyword']."%')";
	}
	if(empty($_POST["pima"])){
    	$Pimas="";
	}
	else{
		$Pima = $_POST['pima'];
		$i = 0;
		foreach ($Pima as &$value) {
		  if($i == 0){
		    $Pima[$i] = " AND PirepMarep IN ('".$Pima[$i]."'";
		  }
		  else{
		    $Pima[$i] = ",'".$Pima[$i]."'";
		  }
		  $i++;
		}
		$Pima[$i-1]=$Pima[$i-1].")";
		$i = 0;
		$Pimas="";
		foreach ($Pima as &$value) {
		  $Pimas = $Pimas.$Pima[$i];
		  $i++;
		}
	}

	include "config/connect.php";

	$sql_pirep = "SELECT DATE, SEQ, Notification, ACTYPE, REG, STADEP, STAARR, FN, ATA, SUBATA, PROBLEM, ACTION, PirepMarep FROM tblpirep_swift WHERE ACTYPE = ".$ACType."".$ACReg."".$ATA."".$Fault_code."".$Keyword."".$Pimas."".$DateStart."".$DateEnd."";
		
	$res_pirep = mysqli_query($link, $sql_pirep);
?>

<html>
<head>
	<meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	  <meta name="description" content="">
	  <meta name="author" content="Dashboard">
	  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

	  <title>TLP Report - Graph</title>

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

	  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>

	  <?php  
	    include 'loader_style.php';
	  ?>
</head>
<body style="padding: 50px">
	
</body>
<body onload="myFunction()" style="margin:0;">

  <?php  
    include 'loader.php';
  ?>

  
  <div style="display:none;" id="myDiv" class="animate-bottom">

    <section id="container">
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

          <!-- filter form -->
			<div class="col-md-12 mt">
	            <div class="panel panel-default">
	              <div class="panel-heading">
	                <h4><i class="fa fa-angle-right"></i> Filter Graph Delay / Pirep</h4>
	              </div>
	              <div class="panel-body">
	                <?php 
	                  include "input_graph_delay_pirep.php"; 
	                ?>
	              </div>
	            </div>
	        </div>

			<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.css">
			<script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.15/js/jquery.dataTables.js"></script>
			<div class="col-md-12 mt">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4><i class="fa fa-angle-right"></i> Table Pirep</h4>
					</div>
					<div class="panel-body">
						<button id="exportButton" onclick="generate()" type="button" class="btn btn-default pull-left"><i class="fa fa-print"></i> Export as PDF</button>
						<table id="table_pirep" class="display cell-border" cellspacing="0" width="100%">
						    <thead>
						        <tr>
						        	<th>Date</th>
						        	<th>Sequence</th>
						            <th>Notification Number</th>
						            <th>A/C Type</th>
						            <th>A/C Reg</th>
						            <th>Sta Dep</th>
						            <th>Sta Arr</th>
						            <th>Flight No</th>
						            <th>ATA</th>
						            <th>Sub ATA</th>
						            <th>Problem</th>
						            <th>Rectification</th>
						            <th>Coding</th>
						        </tr>
						    </thead>
						    <tfoot>
						        <tr>
						        	<th>Date</th>
						        	<th>Sequence</th>
						            <th>Notification Number</th>
						            <th>A/C Type</th>
						            <th>A/C Reg</th>
						            <th>Sta Dep</th>
						            <th>Sta Arr</th>
						            <th>Flight No</th>
						            <th>ATA</th>
						            <th>Sub ATA</th>
						            <th>Problem</th>
						            <th>Rectification</th>
						            <th>Coding</th>
						        </tr>
						    </tfoot>
						    <tbody>
						    	<?php
									while ($rowes = $res_pirep->fetch_array(MYSQLI_NUM)) {
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
											echo "<td>".$rowes[9]."</td>";
											echo "<td>".$rowes[10]."</td>";
											echo "<td>".$rowes[11]."</td>";
											echo "<td>".$rowes[12]."</td>";
										echo "</tr>";
									}
								 ?>
						    </tbody>
						</table>
					</div>
				</div>
            </div>
			<script type="text/javascript">
					$(document).ready(function() {
				$('#table_pirep').DataTable({
				});
				} );
			</script>
			<script type="text/javascript" src="js/Chart.min.js"></script>
			<script type="text/javascript">
				Chart.plugins.register({
	              beforeDraw: function(chartInstance) {
	                var ctx = chartInstance.chart.ctx;
	                ctx.fillStyle = "white";
	                ctx.fillRect(0, 0, chartInstance.chart.width, chartInstance.chart.height);
	              }
	            });
				var actype1 = <?php echo(json_encode($ACType)); ?>;
				var acreg1 = <?php echo(json_encode($ACReg)); ?>;
				var datestart1 = <?php echo(json_encode($DateStart)); ?>;
				var dateend1 = <?php echo(json_encode($DateEnd)); ?>;
				var ata1 = <?php echo(json_encode($ATA)); ?>;
				var fault_code1 = <?php echo(json_encode($Fault_code)); ?>;
				var keyword1 = <?php echo(json_encode($Keyword)); ?>;
				var pima = <?php echo(json_encode($Pimas)); ?>;
				$(document).ready(function(){
					$.ajax({
						url: "data_grafik_pirep.php",
						method: "POST",
						data: {actype: actype1, acreg: acreg1, datestart: datestart1, dateend: dateend1, ata: ata1, fault_code: fault_code1, keyword: keyword1, pima: pima},
						success: function(data) {
							console.log(data);
							var date = {
								date : [],
								pirep : []
							};
							// var date = [];
							// var delay = [];

							for(var i in data) {
								date.date.push(data[i].DATE);
								date.pirep.push(data[i].pirep);
								//delay.push(data[i].delay);
							}

							var chartdata = {
								labels: date.date,
								datasets : [
									{
										label: 'Pirep',
										fill: 'false',
										backgroundColor: 'rgba(200, 200, 200, 0.75)',
										borderColor: 'rgba(255, 0, 0, 1)',
										pointBackgroundColor: 'rgba(0, 0, 255, 1)',
										pointBorderColor: 'rgba(0, 0, 255, 1)',
										lineTension: '0',
										data: date.pirep
									}
								]
							};

							var options = {
								title : {
									display : true,
									position : "top",
									text : "Pirep (D2)",
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

							var ctx = $("#graf_data_pirep");

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

			<div class="col-md-12 mt">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4><i class="fa fa-angle-right"></i> Grafik</h4>
					</div>
					<div class="panel-body">
						<div id="chart-container">
							<canvas id="graf_data_pirep"></canvas>
						</div>
					</div>
				</div>
			</div>

			<script src="js/jspdf.min.js"></script>
	          <script src="js/jspdf.plugin.autotable.js"></script>
	          <script type="text/javascript">
	            // this function generates the pdf using the table
	            function generate() {
	              var pdfsize = 'a4';
	              var columns = ["Date", "Sequence", "Notification Number", "A/C Type", "A/C Reg", "Sta Dep", "Sta Arr", "Flight No", "ATA", "SUB ATA", "Problem", "Rectification", "Coding"];
	              var data = tableToJson($("#table_pirep").get(0), columns);
	              console.log(data);
	              var canvas = document.querySelector('#graf_data_pirep');
	              var canvasImg = canvas.toDataURL("image/jpeg", 1.0);
	              var doc = new jsPDF('l', 'pt', pdfsize);
	              var width = doc.internal.pageSize.width;
	              doc.autoTable(columns, data, {
	                theme: 'grid',
	                styles: {
	                  overflow: 'linebreak'
	                },
	                pageBreak: 'always',
	                tableWidth: 'auto'
	              });
	              let finalY = doc.autoTable.previous.finalY;
	              doc.addPage();
	              doc.addImage(canvasImg, 'JPEG', 40, 40, width-80, 400);
	              doc.save("table.pdf");
	            }
	            // This function will return table data in an Array format
	            function tableToJson(table, columns) {
	              var data = [];
	              // go through cells
	              for (var i = 1; i < table.rows.length; i++) {
	                var tableRow = table.rows[i];
	                var rowData = [];
	                for (var j = 0; j < tableRow.cells.length; j++) {
	                  rowData.push(tableRow.cells[j].innerHTML)
	                }
	                data.push(rowData);
	              }
	                
	              return data;
	            }
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