<!DOCTYPE html>

<?php
	$ACType = $_GET[''];
	$ACReg = $_GET[''];
	$DateStart = $_GET[''];
	$DateEnd = $_GET[''];
	$ATA = $_GET[''];
	$Fault_code = $_GET[''];
	$Keyword = $_GET[''];

	include "config/connect.php";

//	Notif_Number, A/CType, ACREg, StaDep, Flight_Number, delay_lenght (D4), ATA, SubAta, problem, Code(D2)
	$sql = "SELECT Notification, ACTYPE, REG, STADEP, FN, ATA, SUBATA, PROBLEM, 4DigitCode FROM t tblpirep_swift
	WHERE ACTYPE = '.$ACType.' OR REG = '.$ACReg.' OR ATA = '.$ATA.' OR SUBATA = '.$Fault_code.'";

	//$sql = "SELECT Notification, ACTYPE, REG, STADEP, FN, ATA, SUBATA, PROBLEM, 4DigitCode FROM t tblpirep_swift
	//WHERE ACTYPE = '.$ACType.' OR REG = '.$ACReg.' OR ATA = '.$ATA.' OR SUBATA = '.$Fault_code.'";

	$res = mysqli_query($link, $sql);

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
	<form style="margin-bottom: 50px">
		<table>
			<tbody>
				<tr>
					<th>
						A/C Type
					</th>
					<th>
						<select name="cars" style="">
					  		<option value="volvo" style="">A330-200</option>
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
						<?php
							echo "<input type='text' name='ACReg_Input' value = '.$ACReg.'>";
						 ?>
<!--						<input type="text" name="firstname">
-->
					</th>
				</tr>
				<tr>
					<th>
						Date from
					</th>
					<th>
						<?php
						echo "<input type='date' name='DateStart_Input' value = '.$DateStart.'>";
						 ?>
<!--						<input type="date" name="firstname">
-->
					</th>
					<th>
						Date to
					</th>
					<th>
						<?php
							echo "<input type='date' name='DateEnd_Input' value = '.$DateEnd.'>";
						 ?>
<!--						<input type="date" name="firstname">
-->
					</th>
				</tr>
				<tr>
					<th>
						ATA
					</th>
					<th>
						<?php
							echo "<input type='text' name='ATA_Input' value = '.$ATA.'>";
						 ?>
<!--						<input type="text" name="firstname">
-->
					</th>
				</tr>
				<tr>
					<th>
						Fault Code
					</th>
					<th>
						<?php
							echo "<input type='text' name='Fault_code_Input' value = '.$Fault_code.'>";
						 ?>
<!--						<input type="text" name="firstname">
-->
					</th>
				</tr>
				<tr>
				</tr>
					<th>
						Keyword
					</th>
					<th>
						<?php
							echo "<input type='text' name='Keyword_Input' value = '.$Keyword.'>";
						 ?>
<!--						<input type="text" name="firstname">
-->
					</th>
				</tr>
			</tbody>
		</table>
	</form>

<?php
	$row_cnt = $res->num_rows;
	//$row = $res->fetch_array(MYSQLI_NUM);
 ?>

	<!-- Table delay and pirep -->
	<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.css">
	<script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.15/js/jquery.dataTables.js"></script>
	<table id="table_delay" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Notification Number</th>
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
                <th>Notification Number</th>
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
						if($row_cnt != 0){
							$i=0;
							while ($rowes = $res->fetch_array(MYSQLI_NUM)) {
								if($i > 10 ) break;
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
								$i++;
							}
						}
					 ?>
					<!--
				 </tr>
            <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>2011/04/25</td>
                <td>$320,800</td>
                <td>$320,800</td>
                <td>$320,800</td>
                <td>$320,800</td>
                <td>$320,800</td>
            </tr>
            <tr>
                <td>Garrett Winters</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>63</td>
                <td>2011/07/25</td>
                <td>$170,750</td>
                <td>$320,800</td>
                <td>$320,800</td>
                <td>$320,800</td>
                <td>$320,800</td>
            </tr>
					-->
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
            <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>2011/04/25</td>
                <td>$320,800</td>
                <td>$320,800</td>
                <td>$320,800</td>
                <td>$320,800</td>
                <td>$320,800</td>
            </tr>
            <tr>
                <td>Garrett Winters</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>63</td>
                <td>2011/07/25</td>
                <td>$170,750</td>
                <td>$320,800</td>
                <td>$320,800</td>
                <td>$320,800</td>
                <td>$320,800</td>
            </tr>
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

	<div id="grafik_delay" style="height: 250px; margin-top: 50px"></div>
	<div id="grafik_pirep" style="height: 250px; margin-top: 50px"></div>
	<script type="text/javascript">
		new Morris.Line({
		// ID of the element in which to draw the chart.
		element: 'grafik_delay',
		// Chart data records -- each entry in this array corresponds to a point on
		// the chart.
		data: [
		  { year: '2008', value: 20 },
		  { year: '2009', value: 10 },
		  { year: '2010', value: 5 },
		  { year: '2011', value: 5 },
		  { year: '2012', value: 20 }
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
	<script type="text/javascript">
		new Morris.Line({
		// ID of the element in which to draw the chart.
		element: 'grafik_pirep',
		// Chart data records -- each entry in this array corresponds to a point on
		// the chart.
		data: [
		  { year: '2008', value: 20 },
		  { year: '2009', value: 10 },
		  { year: '2010', value: 5 },
		  { year: '2011', value: 5 },
		  { year: '2012', value: 20 }
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
