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

	//Mendapatkan Value yang di passing
	if(empty($_POST["actype"])){
		$ACType = "";
	}
	else{
		$ACType = "'".$_POST['actype']."'";
	}
	if(empty($_POST["acreg"])){
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

	$Graph_type = $_POST['graph'];

	include "config/connect.php";

?>

<html>
<head>
	<title>Pareto Display</title>

<?php
	include 'bootstrap_header.php';
 ?>

</head>
<body>
	<br>
	<?php
		include 'form_pareto.php';
	 ?>
	 <a href="excel_pareto.php?actype=<?php echo $_POST['actype'];?>&acreg=<?php echo $_POST['acreg'];?>&dateto=<?php echo $_POST['dateto'];?>&datefrom=<?php echo $_POST['datefrom'];?>" class="btn btn-default">Export Excel</a>

			 <div class="row" style="background-color:#DCDCDC; text-align:center">
				 <br>
				 <h1>
					 Tab Rank
				 </h1>
				 <br>
			 </div>
	 <br>

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
				WHERE ACTYPE = ".$ACType." AND REG LIKE '%".$ACReg."%' AND DATE BETWEEN ".$DateStart." AND ".$DateEnd."";

				$res_delay = mysqli_query($link, $sql_delay);

				//Query untuk tabel D4 / mcdrnew
				//tidak ada Notification dan 4digitcode
				$sql_mcdrnew = "SELECT ACTYPE, REG, DepSta, FlightNo, HoursTot, MinTot, ATAtdm, Iata, Problem, DateEvent FROM mcdrnew
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
						echo "<td>".$rowes[8]."</td>"; //4DigitCode
						//echo "<td>".$rowes[5].$rowes[6]."</td>"; //4DigitCode
					echo "</tr>";
				}

				$i = 0;
				while ($rowes = $res_mcdrnew->fetch_array(MYSQLI_NUM)) {
					echo "<tr>";
						echo "<td></td>";
						echo "<td>".$rowes[0]."</td>"; //ACtype
						echo "<td>".$rowes[1]."</td>"; //REG
						echo "<td>".$rowes[2]."</td>"; //DepSta
						echo "<td>".$rowes[3]."</td>"; //FlightNo

						$temp = ($rowes[4]*60) + $rowes[5];
						echo "<td>".$temp."</td>"; //delay_lenght
						echo "<td>".$rowes[6]."</td>"; //ATAtdm
						echo "<td>".$rowes[7]."</td>"; //Iata
						echo "<td>".$rowes[8]."</td>"; //Problem
						echo "<td></td>"; //Coding
					echo "</tr>";
					$delay_lenght[$i] = $temp;
					$saved_date[$i] = $rowes[9];
//					print_r($delay_lenght[$i]);
					$i++;
				}

			 ?>

        </tbody>
			</table>
   	<script type="text/javascript">
   		$(document).ready(function() {
    	$('#table_delay').DataTable({
    	});

			// $('#example').bind('sort', function (e, dt) {
			//     dir = dt.aaSorting[0][1];
			//     columnIndex = dt.aaSorting[0][0];
			//     columnName = dt.aoColumns[columnIndex].sTitle;
			//});
	//		document.write (dir);
		} );
   	</script>

	<?php

		if($Graph_type == 'ata'){
			$sql_graph_pirep = "SELECT ata, COUNT(ata) AS number_of_ata FROM tblpirep_swift GROUP BY ata ORDER BY number_of_ata DESC";
			$sql_graph_delay = "SELECT ATAtdm, COUNT(Atatdm) AS number_of_ata1 FROM mcdrnew GROUP BY ATAtdm ORDER BY number_of_ata1 DESC";
		}
		else if($Graph_type == 'ac_reg'){
			$sql_graph_pirep = "SELECT REG, COUNT(REG) AS number_of_reg FROM tblpirep_swift GROUP BY REG ORDER BY number_of_reg DESC";
			$sql_graph_delay = "SELECT Reg, COUNT(Reg) AS number_of_reg FROM mcdrnew GROUP BY Reg ORDER BY number_of_reg DESC;";
		}
		else if($Graph_type == 'fault_c'){

		}

		$res_graph_pirep = mysqli_query($link, $sql_graph_pirep);
		$res_graph_delay = mysqli_query($link, $sql_graph_delay);

		$i = 0;
		while ($rowes = $res_graph_pirep->fetch_array(MYSQLI_NUM)) {
			if($i > 9) break;
			$arr_pirep[$i][0] = $rowes[0];
			$arr_pirep[$i][1] = $rowes[1];
			$i++;
		}

		$i = 0;
		while ($rowes = $res_graph_delay->fetch_array(MYSQLI_NUM)) {
			if($i > 9) break;
			$arr_delay[$i][0] = $rowes[0];
			$arr_delay[$i][1] = $rowes[1];
			$i++;
		}

		//var_dump($arr_pirep);
		// $i = 0;
		// while ($rowes = $res_graph0->fetch_array(MYSQLI_NUM)){
		// 		$arr0[$i][0] = $rowes[0];
		// 		$arr0[$i][1] = $rowes[1];
		// 		$i++;
		// }
		//
		//
		//
		// $i = 0;
		// while ($rowes = $res_graph1->fetch_array(MYSQLI_NUM)){
		// 		$arr0[$i][0] = $rowes[0];
		// 		$arr0[$i][1] = $rowes[1];
		// 		$i++;
		// }

		//var_dump($saved_date);
		//array_multisort($delay_lenght, SORT_DESC, $saved_date);
		//rsort($delay_lenght);
		// for($x=0 ; $x<5; $x++){
		// 	echo "urutan delay: ".$delay_lenght[$x];
		// 	echo "| Tanggal: ".$saved_date[$x];
		// 	echo "<br>";
		// }
	 ?>

	<h1 style="text-align:center;">Top 10 Delay</h1>
	<div id="grafik_delay" style="height: 250px; margin-top: 50px"></div>

	<h1 style="text-align:center;">Top 10 Pirep</h1>
	<div id="grafik_pirep" style="height: 250px; margin-top: 50px"></div>
	<script type="text/javascript">
		var arr_delay = <?php echo json_encode($arr_delay); ?>;
		new Morris.Bar({

		// ID of the element in which to draw the chart.
		element: 'grafik_delay',
		// Chart data records -- each entry in this array corresponds to a point on
		// the chart.
		data:[
			{ option: arr_delay[0][0], value: arr_delay[0][1]},
		  { option: arr_delay[1][0], value: arr_delay[1][1]},
		  { option: arr_delay[2][0], value: arr_delay[2][1]},
		  { option: arr_delay[3][0], value: arr_delay[3][1]},
		  { option: arr_delay[4][0], value: arr_delay[4][1]},
			{ option: arr_delay[5][0], value: arr_delay[5][1]},
			{ option: arr_delay[6][0], value: arr_delay[6][1]},
			{ option: arr_delay[7][0], value: arr_delay[7][1]},
			{ option: arr_delay[8][0], value: arr_delay[8][1]},
			{ option: arr_delay[9][0], value: arr_delay[9][1]}
		],
		// The name of the data record attribute that contains x-values.
		xkey: 'option',
		// A list of names of data record attributes that contain y-values.
		ykeys: ['value'],
		// Labels for the ykeys -- will be displayed when you hover over the
		// chart.
		labels: ['Jumlah Delay'],

		hideHover: 'auto'
		});
	</script>
	<script type="text/javascript">

		var arr_pirep = <?php echo json_encode($arr_pirep); ?>;

		new Morris.Bar({
		// ID of the element in which to draw the chart.
		element: 'grafik_pirep',
		// Chart data records -- each entry in this array corresponds to a point on
		// the chart.
		data: [
			{ option: arr_pirep[0][0], value: arr_pirep[0][1]},
			{ option: arr_pirep[1][0], value: arr_pirep[1][1]},
			{ option: arr_pirep[2][0], value: arr_pirep[2][1]},
			{ option: arr_pirep[3][0], value: arr_pirep[3][1]},
			{ option: arr_pirep[4][0], value: arr_pirep[4][1]},
			{ option: arr_pirep[5][0], value: arr_pirep[5][1]},
			{ option: arr_pirep[6][0], value: arr_pirep[6][1]},
			{ option: arr_pirep[7][0], value: arr_pirep[7][1]},
			{ option: arr_pirep[8][0], value: arr_pirep[8][1]},
			{ option: arr_pirep[9][0], value: arr_pirep[9][1]}
		],
		// The name of the data record attribute that contains x-values.
		xkey: 'option',
		// A list of names of data record attributes that contain y-values.
		ykeys: ['value'],
		// Labels for the ykeys -- will be displayed when you hover over the
		// chart.
		labels: ['Jumlah Pirep'],

		hideHover:'auto',

		barColors: "blue"
		});
	</script>
</body>
</html>
