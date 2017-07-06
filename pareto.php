<!DOCTYPE html>

<?php
/*
	echo $_POST["actype"];
	echo $_POST["acreg"];
	echo $_POST["datefrom"];
	echo $_POST["dateto"];
	echo $_POST["graph"];
	*/
	?>

<?php
	if(empty($_POST["actype"])){
		$ACType = "";
	}
	else{
		$ACType = "'".$_POST['actype']."'";
	}
	if(empty($_POST["actreg"])){
		$ACReg = "";
	}
	else{
		$ACReg = $_POST['acreg'];
	}
	if(!empty($_POST["datefrom"])){
		$DateStart = "'".$_POST['datefrom']."'";
	}
	else{
		$DateStart = "";
	}
	if(!empty($_POST["dateto"])){
		$DateEnd = "'".$_POST['dateto']."'";
	}
	else
		$DateEnd = "";

	$Graph = "'".$_POST['graph']."'";

	include "config/connect.php";
?>

<html>
<head>
	<title>morris by Habib</title>

	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
</head>
<body>
	<?php
		include 'form_pareto.php';
	 ?>

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
                <th>Notification Number</th>
                <th>A/C Type</th>
                <th>A/C Reg</th>
                <th>Sta Dep</th>
                <th>Flight No</th>
                <th>Delay Length (D4 Only)</th>
                <th>ATA</th>
                <th>Sub ATA</th>
                <th>Problem</th>
                <th>Coding (D2 Only)</th>
            </tr>
        </thead>

        <tbody>
			<?php
				//	Notif_Number, A/CType, ACREg, StaDep, Flight_Number, delay_lenght (D4), ATA, SubAta, problem, Code(D2)
				//	Query untuk Tabel D2 / tblpirep_swift
				$sql_delay = "SELECT Notification, ACTYPE, REG, STADEP, FN, ATA, SUBATA, PROBLEM, 4DigitCode FROM tblpirep_swift
				WHERE ACTYPE = ".$ACType." AND REG LIKE '%".$ACReg."' AND DATE BETWEEN ".$DateStart." AND ".$DateEnd."";

				$res_delay = mysqli_query($link, $sql_delay);

				//Query untuk tabel D4 / mcdrnew
				//tidak ada Notification dan 4digitcode
				$sql_mcdrnew = "SELECT ACTYPE, REG, DepSta, FlightNo, HoursTot, MinTot, ATAtdm, Iata, Problem FROM mcdrnew
				WHERE ACTYPE = ".$ACType." AND REG LIKE '%".$ACReg."' AND DateEvent BETWEEN ".$DateStart." AND ".$DateEnd."";

				$res_mcdrnew = mysqli_query($link, $sql_mcdrnew);

				//print_r($sql_delay);

				while ($rowes = $res_delay->fetch_array(MYSQLI_NUM)) {
					echo "<tr>";
						echo "<td>".$rowes[0]."</td>"; //Notification
						echo "<td>".$rowes[1]."</td>"; //AcType
						echo "<td>".$rowes[2]."</td>"; //REG
						echo "<td>".$rowes[3]."</td>"; //STADEP
						echo "<td>".$rowes[4]."</td>"; //FN
						echo "<td></td>";
						echo "<td>".$rowes[5]."</td>"; //ATA
						echo "<td>".$rowes[6]."</td>"; //SUBATA
						echo "<td>".$rowes[7]."</td>"; //Problem
						echo "<td>".$rowes[5].$rowes[6]."</td>"; //4DigitCode
					echo "</tr>";
				}


				while ($rowes = $res_mcdrnew->fetch_array(MYSQLI_NUM)) {
					echo "<tr>";
						echo "<td></td>";
						echo "<td>".$rowes[0]."</td>"; //ACtype
						echo "<td>".$rowes[1]."</td>"; //REG
						echo "<td>".$rowes[2]."</td>"; //DepSta
						echo "<td>".$rowes[3]."</td>"; //FlightNo

						$delay_lenght = ($rowes[4]*60) + $rowes[5];
						echo "<td>".$delay_lenght."</td>"; //delay_lenght
						echo "<td>".$rowes[6]."</td>"; //ATAtdm
						echo "<td>".$rowes[7]."</td>"; //Iata
						echo "<td>".$rowes[8]."</td>"; //Problem
						echo "<td></td>"; //Coding
					echo "</tr>";
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
   	<script type="text/javascript">
   		$(document).ready(function() {
    	$('#table_delay').DataTable({
    	});
		} );
   	</script>

	<?php
//		print_r($sql_mcdrnew);
	 ?>

	<h1 style="text-align:center;">Top 10 Delay</h1>
	<div id="grafik_delay" style="height: 250px; margin-top: 50px"></div>

	<h1 style="text-align:center;">Top 10 Pirep</h1>
	<div id="grafik_pirep" style="height: 250px; margin-top: 50px"></div>
	<script type="text/javascript">
		new Morris.Bar({
		// ID of the element in which to draw the chart.
		element: 'grafik_delay',
		// Chart data records -- each entry in this array corresponds to a point on
		// the chart.
		data: [
		  { year: '2010', value: 20 },
		  { year: '2012', value: 18 },
		  { year: '2002', value: 15 },
		  { year: '2000', value: 14 },
		  { year: '2003', value: 11 }
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
		new Morris.Bar({
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
