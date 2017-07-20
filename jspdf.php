<!DOCTYPE html>
<?php
	include "config/connect.php";

	$sql_delay = "SELECT ACtype, Reg, DepSta, FlightNo, HoursTot, ATAtdm, SubATAtdm, Problem, Rectification, MinTot FROM mcdrnew WHERE ACTYPE = 'B737-800' AND DateEvent BETWEEN '2017-01-01' AND '2017-02-01'";
	$res_delay = mysqli_query($link, $sql_delay);
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Hello world</title>
</head>
<body>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"> </script>
	<script src="https://rawgit.com/MrRio/jsPDF/master/dist/jspdf.debug.js"> </script>
	<script src="https://rawgit.com/simonbengtsson/jsPDF-AutoTable/master/dist/jspdf.plugin.autotable.src.js"> </script>
	<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.css">
	<script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.15/js/jquery.dataTables.js"></script>
	<script type="text/javascript" src="http://canvasjs.com/assets/script/canvasjs.min.js"></script>
	<table id="table_delay" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>A/C Type</th>
                <th>A/C Reg</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>A/C Type</th>
                <th>A/C Reg</th>
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
	<a href="#" id="generate-report-button" class="btn">Run Code</a>
	<button id="exportButton" type="button">Export as PDF</button>
	<div id="chartContainer" style="height: 360px; width: 100%;"></div>
    <script type="text/javascript">
		// this function generates the pdf using the table
		function generate() {
		  var columns = ["actype", "acreg"];
		  var data = tableToJson($("#table_delay").get(0), columns);
		  var canvas = document.querySelector('#graf_data_delay');
		  var canvasImg = canvas.toDataURL("image/jpeg", 1.0);
		  var doc = new jsPDF('p', 'pt');
		  doc.autoTable(columns, data);
		  let finalY = doc.autoTable.previous.finalY; // The y position on the page
		  doc.addImage(canvasImg, 'JPEG', 0, finalY+50, 400, 200);
		  doc.save("table.pdf");
		}
		$('#generate-report-button').on('click', function(){
			generate() ;
		})
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

		var chart = new CanvasJS.Chart("chartContainer",
		{
				title: {
					text: "Exporting chart using jsPDF & toDataurl"
				},
				data: [
				{
					type: "spline",
					dataPoints: [ 
						{ x: 10, y: 4 }, 
						{ x: 20, y: 7 },
						{ x: 30, y: 2 },
						{ x: 40, y: 3 },
						{ x: 50, y: 5 }
					]
				}
				]
		});
		chart.render();
		var canvas = $("#chartContainer .canvasjs-chart-canvas").get(0);
		var dataURL = canvas.toDataURL();
		//console.log(dataURL);
		$("#exportButton").click(function(){
		    var pdf = new jsPDF();
		    pdf.addImage(dataURL, 'JPEG', 0, 0);
		    pdf.save("download.pdf");
		});
    </script>
    <script type="text/javascript" src="js/Chart.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$.ajax({
				url: "data_grafik_delay.php",
				method: "GET",
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
	<div id="chart-container">
		<canvas id="graf_data_delay"></canvas>
	</div>
</body>
</html>