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

	// $data_pdf = array();
	// $i = 0;
	// while ($rowes = $res_delay->fetch_array(MYSQLI_NUM)) {
	// 	$data_pdf[$i][0] = $rowes[0];
	// 	$data_pdf[$i][1] = $rowes[1];
	// 	$data_pdf[$i][2] = $rowes[2];
	// 	$data_pdf[$i][3] = $rowes[3];
	// 	$data_pdf[$i][4] = $rowes[4];
	// 	$data_pdf[$i][5] = $rowes[5];
	// 	$data_pdf[$i][6] = $rowes[6];
	// 	$data_pdf[$i][7] = $rowes[7];
	// 	$data_pdf[$i][8] = $rowes[8];
	// 	$data_pdf[$i][9] = $rowes[9];
	// 	$i++;
	// }
?>

<html>
<head>
	<title>morris by kukuh</title>

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
</head>
<body style="padding: 50px">
	<!-- filter form -->
	<?php 
		include "input_graph_delay_pirep.php"; 
	?>
	<a href="#" onclick="generate()" id="generate-report-button" class="btn">Run Code</a>

	<!-- Table delay and pirep -->
    <h1 style="text-align: center;">Table Delay</h1>
	<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.css">
	<script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.15/js/jquery.dataTables.js"></script>
	<table id="table_delay" cellspacing="0" width="100%">
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
				url: "data_grafik_delay.php",
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
	<div id="chart-container">
		<canvas id="graf_data_delay"></canvas>
	</div>
	<script src="https://rawgit.com/MrRio/jsPDF/master/dist/jspdf.debug.js"> </script>
	<script src="https://rawgit.com/simonbengtsson/jsPDF-AutoTable/master/dist/jspdf.plugin.autotable.src.js"> </script>
	<script type="text/javascript">
		// this function generates the pdf using the table
		function generate() {
		  var columns = ["A/C Type", "A/C Reg"];
		  var data = tableToJson($("#table-delay").get(0), columns);
		  var doc = new jsPDF('p', 'pt');
		  doc.autoTable(columns, data);
		  doc.save("table.pdf");
		}
		function tableToJson(table, columns) {
		  var data = [];
		  // go through cells
		  for (var i = 1; i < table.rows.length; i++) {
		    var tableRow = table.rows[i];

		    // create an array rather than an object
		    var rowData = [];
		    for (var j = 0; j < tableRow.cells.length; j++) {
		        rowData.push(tableRow.cells[j].innerHTML)
		    }
		    data.push(rowData);
		  }

		  return data;
		}
	</script>
</body>
</html>