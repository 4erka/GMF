<!DOCTYPE html>
<?php
	$ACType = "'".$_POST["actype"]."'";
	if(empty($_POST["acreg"])){
		$ACReg = "";
	}
	else{
		$ACReg = " AND REG = '".$_POST['acreg']."'";
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
	if(empty($_POST["faultcode"])){
		$Fault_code = "";
			$Fault_code2 = "";
	}
	else{
		$Fault_code = " AND SUBATA = '".$_POST['faultcode']."'";
			$Fault_code2 = " AND SUBATATDM = '".$_POST['faultcode']."'";
	}
	if(empty($_POST["keyword"])){
		$Keyword = "";
	}
	else{
		$Keyword = "'".$_POST['keyword']."'";
	}

	include "config/connect.php";

	$sql_actype = "SELECT DISTINCT ACtype FROM mcdrnew";
	$res_actype = mysqli_query($link, $sql_actype);

	$sql_delay = "SELECT ACtype, Reg, DepSta, FlightNo, MinTot, ATAtdm, SubATAtdm, Problem, Rectification FROM mcdrnew WHERE ACTYPE = ".$ACType."".$ACReg."".$ATA2."".$Fault_code2."".$DateStart2."".$DateEnd."";

	// $que_data_delay = sprintf("SELECT COUNT(DateEvent) as delay, DateEvent FROM mcdrnew WHERE ACTYPE = ".$ACType."".$ACReg."".$ATA2."".$Fault_code2."".$DateStart2."".$DateEnd." GROUP BY DateEvent");
	// $res_data_delay = $link->query($que_data_delay);
	// $data_delay = array();
	// foreach ($res_data_delay as $row) {
	// 	$data_delay[] = $row;
	// }
	// $res_data_delay->close();
	// print json_encode($data_delay);

	$sql_pirep = "SELECT Notification, ACTYPE, REG, STADEP, FN, ATA, SUBATA, PROBLEM, ACTION, PirepMarep FROM tblpirep_swift WHERE ACTYPE = ".$ACType."".$ACReg."".$ATA."".$Fault_code."".$DateStart."".$DateEnd."";

	//$sql = "SELECT Notification, ACTYPE, REG, STADEP, FN, ATA, SUBATA, PROBLEM, 4DigitCode FROM t tblpirep_swift
	//WHERE ACTYPE = '.$ACType.' OR REG = '.$ACReg.' OR ATA = '.$ATA.' OR SUBATA = '.$Fault_code.'";

	$res_delay = mysqli_query($link, $sql_delay);
	$res_pirep = mysqli_query($link, $sql_pirep);
	print_r($sql_delay);
	echo "<br>";
	print_r($sql_pirep);
?>

<html>
<head>
	<title>morris by kukuh</title>

	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
</head>
<body>
	<!-- filter form -->
	<form action="coba.php" method="post" style="margin-bottom: 50px">
		<table>
			<tbody>
				<tr>
					<th>
						A/C Type
					</th>
					<th>
						<select name="actype" style="">
								<?php
									while($row = $res_actype->fetch_array(MYSQLI_NUM))
								 		echo "<option value=".$row[0].">".$row[0]."</option>";
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
						<input type="date" name="datefrom">
					</th>
					<th>
						Date to
					</th>
					<th>
						<input type="date" name="dateto">
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
						Fault Code
					</th>
					<th>
						<input type="text" name="faultcode">
					</th>
				</tr>
				<tr>
				</tr>
					<th>
						Keyword
					</th>
					<th>
						<input type="text" name="keyword">
					</th>
				</tr>
			</tbody>
		</table>
	</form>

<!-- <?php
	$row_cnt = $res_delay->num_rows;
	//$row = $res->fetch_array(MYSQLI_NUM);
 ?> -->

	<!-- Table delay and pirep -->
	<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.css">
	<script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.15/js/jquery.dataTables.js"></script>
	<table id="table_delay" class="display" cellspacing="0" width="100%">
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
    <div style="margin-bottom: 50px"></div>
    <table id="table_pirep" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
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
   	<script type="text/javascript">
   		$(document).ready(function() {
    	$('#table_pirep').DataTable({
    	});
		} );
   	</script>

   	<script type="text/javascript" src="js/Chart.min.js"></script>
	<script type="text/javascript" src="js/js_data_delay.js"></script>
	<div id="chart-container">
		<canvas id="graf_data_delay"></canvas>
	</div>
	<div id="grafik_pirep"></div>
	<script type="text/javascript">
		new Morris.Line({
		// ID of the element in which to draw the chart.
		element: 'grafik_pirep',
		// Chart data records -- each entry in this array corresponds to a point on
		// the chart.
		data: [
		  // { year: '2008', value: 20 },
		  // { year: '2009', value: 10 },
		  // { year: '2010', value: 5 },
		  // { year: '2011', value: 5 },
		  // { year: '2012', value: 20 }
		  <php
		],
		// The name of the data record attribute that contains x-values.
		xkey: 'year',
		// A list of names of data record attributes that contain y-values.
		ykeys: ['value'],
		// Labels for the ykeys -- will be displayed when you hover over the
		// chart.
		labels: ['Value']
		});
	</script>
</body>
</html>
