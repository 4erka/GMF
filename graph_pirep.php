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

	include "config/connect.php";

	$sql_actype = "SELECT DISTINCT ACtype FROM tbl_master_actype";
	$res_actype = mysqli_query($link, $sql_actype);

	$sql_pirep = "SELECT DATE, SEQ, Notification, ACTYPE, REG, STADEP, FN, ATA, SUBATA, PROBLEM, ACTION, PirepMarep FROM tblpirep_swift WHERE ACTYPE = ".$ACType."".$ACReg."".$ATA."".$Fault_code."".$Keyword."".$DateStart."".$DateEnd."";
		
	$res_pirep = mysqli_query($link, $sql_pirep);
?>

<html>
<head>
	<title>morris by kukuh</title>

	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
</head>
<body style="padding: 50px">

	<!-- filter form -->
	<body style="padding: 50px">
	<!-- filter form -->
	<form action="graph.php" method="post" style="margin-bottom: 50px" id="form_graph">
		<table>
			<tbody>
				<tr>
					<th>
						A/C Type
					</th>
					<th>
						<select name="actype" style="">
								<?php
									$isSelect = "";
									while($row = $res_actype->fetch_array(MYSQLI_NUM)){
										if($row[0]==$_POST["actype"]){
											$isSelect="selected";
											echo "<option value=".$row[0]." ".$isSelect.">".$row[0]."</option>";
										}
										else{
											echo "<option value=".$row[0].">".$row[0]."</option>";
										}
									}
								 ?>
					  		<!--
								<option value="volvo" style="">A330-200</option>
							-->
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
						<!-- <a href="index.php"><input type="button" value="Export PDF" /></a> -->
						<input type="button" value="Export PDF" onclick="window.print()">
					</th>
				</tr>
				<tr>
					<th>
						A/C Reg
					</th>
					<th>
						<?php
							echo '<input type="text" name="acreg" value="'.$_POST["acreg"].'">';
						?>
					</th>
				</tr>
				<tr>
					<th>
						Date from
					</th>
					<th>
						<?php
							echo '<input type="date" name="datefrom" id="id_datefrom" value="'.$_POST["datefrom"].'">';	 
						?>
					</th>
					<th>
						Date to
					</th>
					<th>
						<?php
							echo '<input type="date" name="dateto" id="id_dateto" value="'.$_POST["dateto"].'">'; 
						?>
					</th>
				</tr>
				<tr>
					<th>
						ATA
					</th>
					<th>
						<?php
							echo '<input type="text" name="ata" value="'.$_POST["ata"].'">'; 
						?>
					</th>
				</tr>
				<tr>
					<th>
						SUBATA
					</th>
					<th>
						<?php
							echo '<input type="text" name="subata" value="'.$_POST["subata"].'">'; 
						?>
					</th>
				</tr>
				<tr>
				<tr>
					<th>
						Delay / Pirep
					</th>
					<th>
						<?php
							if($_POST["depir"]=="delay"){
								?><input type="radio" name="depir" value="delay" onclick="check(this.value)" checked> Delay<?php
							}
							else{
								?>
								<input type="radio" name="depir" value="delay" onclick="check(this.value)"> Delay <?php
							}
							if($_POST["depir"]=="pirep"){?>
								<input type="radio" name="depir" value="pirep" onclick="check(this.value)" checked> Pirep<?php
							}
							else{?>
								<input type="radio" name="depir" value="pirep" onclick="check(this.value)"> Pirep <?php
							}
						?>
					</th>
				</tr>
				</tr>
					<th>
						Keyword
					</th>
					<th>
						<?php
							echo '<input type="text" name="keyword" value="'.$_POST["keyword"].'">'; 
						?>
					</th>
				</tr>
				<tr>
					<th>
						DCP
					</th>
					<th>
						<?php
							$DCP = $_POST['dcp'];
							$flag_d = 0;
							$flag_c = 0;
							$flag_x = 0;
							for($i = 0; $i < 3; $i++){
								if (empty($DCP[$i])) {
									$DCP[$i] = "";
								}
								if($i == 0 and $DCP[$i] != "d"  and $flag_d == 0){?>
									<input type="checkbox" name="dcp[]" value="d"> D <?php
								}
								else if($i == 1 and $DCP[$i] != "c"  and $flag_c == 0){?>
									<input type="checkbox" name="dcp[]" value="c"> C <?php
								}
								else if($i == 2 and $DCP[$i] != "x"  and $flag_x == 0){?>
									<input type="checkbox" name="dcp[]" value="x"> X <?php
								}
								if($DCP[$i] == "d"){?>
									<input type="checkbox" name="dcp[]" value="d" checked> D <?php
									$flag_d = 1;
								}else if($DCP[$i] == "c"){?>
									<input type="checkbox" name="dcp[]" value="c" checked> C<?php
									$flag_c = 1;
								}else if($DCP[$i] == "x"){?>
									<input type="checkbox" name="dcp[]" value="x" checked> X <?php
									$flag_x = 1;
								}
							}
							//print_r($DCP);
						?>
					</th>
				</tr>
			</tbody>
		</table>
	</form>
	<script type="text/javascript">
		function check(depir) {
			depir = "graph_" + depir + ".php";
		    document.getElementById("form_graph").action=depir;
		}
	</script>

	<h1 style="text-align: center;">Table Pirep</h1>
	<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.css">
	<script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.15/js/jquery.dataTables.js"></script>
	<div style="margin-bottom: 50px"></div>
	<table id="table_pirep" class="display cell-border" cellspacing="0" width="100%">
	    <thead>
	        <tr>
	        	<th>Date</th>
	        	<th>Sequence</th>
	            <th>Notification Number</th>
	            <th>A/C Type</th>
	            <th>A/C Reg</th>
	            <th>Sta Dep</th>
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
					echo "</tr>";
				}
			 ?>
	    </tbody>
	</table>
	<script type="text/javascript">
			$(document).ready(function() {
		$('#table_pirep').DataTable({
		});
		} );
	</script>
	<script type="text/javascript" src="js/Chart.min.js"></script>
	<script type="text/javascript">
		var actype1 = <?php echo(json_encode($ACType)); ?>;
		var acreg1 = <?php echo(json_encode($ACReg)); ?>;
		var datestart1 = <?php echo(json_encode($DateStart)); ?>;
		var dateend1 = <?php echo(json_encode($DateEnd)); ?>;
		var ata1 = <?php echo(json_encode($ATA)); ?>;
		var fault_code1 = <?php echo(json_encode($Fault_code)); ?>;
		var keyword1 = <?php echo(json_encode($Keyword)); ?>;
		$(document).ready(function(){
			$.ajax({
				url: "http://localhost/GMF/data_grafik_pirep.php",
				method: "POST",
				data: {actype: actype1, acreg: acreg1, datestart: datestart1, dateend: dateend1, ata: ata1, fault_code: fault_code1, keyword: keyword1},
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
	<div id="chart-container">
		<canvas id="graf_data_pirep"></canvas>
	</div>
</body>
</html>