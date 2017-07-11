<!DOCTYPE html>

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

  include 'config/connect.php';
 ?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>TLP Report - Pareto</title>

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
      <section id="main-content" style="min-height:100%;">
        <section class="wrapper" style="text-align: centered">
          <?php

            //Memilih Ac Type
            $sql0 = "SELECT DISTINCT ACtype FROM tbl_master_actype";
            $res0 = mysqli_query($link, $sql0);

          ?>

          <form action="pareto.php" method="post" class="form-horizontal style-form" style="margin-bottom: 50px">

          <br>

            <div class="form-group">
            <label class="col-sm-2 col-sm-2 control-label">A/C Type</label>
              <div class="col-sm-10">
                <select name="actype" class="form-control">
                    <?php
                      while($row = $res0->fetch_array(MYSQLI_NUM))
                          echo "<option value=".$row[0].">".$row[0]."</option>";
                     ?>
                </select>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 col-sm-2 control-label">A/C Reg</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="acreg" placeholder=<?php echo $ACReg; ?>>
                </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 col-sm-2 control-label">Date from</label>
                <div class="col-sm-10">
                  <input type="date" class="form-control" name="datefrom" required>
                </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 col-sm-2 control-label">Date to</label>
                <div class="col-sm-10">
                  <input type="date" class="form-control" name="dateto" required>
                </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 col-sm-2 control-label">Graph settings for X-axis</label>
                <div class="col-sm-10">
                  <div class="radio">
                      <label>
                            <input type="radio" name="graph" id="optionsRadios1" value="ata" required>
                               ATA
                      </label>
                  </div>

                  <div class="radio">
                      <label>
                            <input type="radio" name="graph" id="optionsRadios1" value="ac_reg" required>
                               A/C REG
                      </label>
                  </div>

                  <div class="radio">
                      <label>
                            <input type="radio" name="graph" id="optionsRadios1" value="sub_ata" required>
                               Sub ATA
                      </label>
                  </div>

                </div>
            </div>

            <input type="submit" value="Display Report" class="btn btn-default">

          </form>

          <h3>Menampilkan Data dari</h3>
          <br>
          <h4>A/C Type : <?php echo $ACType; ?></h4>
          <h4>A/C Reg : <?php echo $ACReg; ?></h4>
          <h4>Tanggal mulai : <?php echo $DateStart; ?></h4>
          <h4>Tanggal Berakhir : <?php echo $DateEnd; ?></h4>
          <h4>Setting untuk X-Axis : <?php echo $Graph_type; ?></h4>

      <!-- Ini isi tabel -->
      <!-- Table delay and pirep -->
      <!--
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
            -->
    			<?php
    				//	Notif_Number, A/CType, ACREg, StaDep, Flight_Number, delay_lenght (D4), ATA, SubAta, problem, Code(D2)
    				//	Query untuk Tabel D2 / tblpirep_swift

/*    				$sql_delay = "SELECT Notification, ACTYPE, REG, STADEP, FN, ATA, SUBATA, PROBLEM, 4DigitCode FROM tblpirep_swift
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
*/
    			 ?>

<!--
            </tbody>
    			</table>


          <!--End of table-->
          <!--
    			<script src="//code.jquery.com/jquery-1.12.4.js"></script>
    			<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
    			<script src="https://cdn.datatables.net/buttons/1.3.1/js/dataTables.buttons.min.js"></script>
    			<script src="//cdn.datatables.net/buttons/1.3.1/js/buttons.flash.min.js"></script>
    			<script src="//cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    			<script src="//cdn.rawgit.com/bpampuch/pdfmake/0.1.27/build/pdfmake.min.js"></script>
    			<script src="//cdn.rawgit.com/bpampuch/pdfmake/0.1.27/build/vfs_fonts.js"></script>
    			<script src="//cdn.datatables.net/buttons/1.3.1/js/buttons.html5.min.js"></script>
    			<script src="//cdn.datatables.net/buttons/1.3.1/js/buttons.print.min.js"></script>

        -->


                  <!-- Grafik-->


       	<script type="text/javascript">
       		$(document).ready(function() {
        	$('#table_delay').DataTable({
    				dom: 'Bfrtip',
            buttons: [
                'copyHtml5',
                'excelHtml5',
                'pdfHtml5'
            ]
        	});

    		} );
       	</script>

    	<?php

    		if($Graph_type == 'ata'){
    			$sql_graph_pirep = "SELECT ata, COUNT(ata) AS number_of_ata FROM tblpirep_swift WHERE DATE BETWEEN ".$DateStart." AND ".$DateEnd." AND ACTYPE = ".$ACType." AND REG LIKE '%".$ACReg."%' AND PirepMarep = 'pirep' GROUP BY ata ORDER BY number_of_ata DESC";
    			$sql_graph_delay = "SELECT ATAtdm, COUNT(Atatdm) AS number_of_ata1 FROM mcdrnew WHERE DCP = 'D' OR DCP = 'C' AND ACTYPE = ".$ACType." AND REG LIKE '%".$ACReg."' AND DateEvent BETWEEN ".$DateStart." AND ".$DateEnd." GROUP BY ATAtdm ORDER BY number_of_ata1 DESC";
          //print_r($sql_graph_delay);
    		}
    		else if($Graph_type == 'ac_reg'){
    			$sql_graph_pirep = "SELECT REG, COUNT(REG) AS number_of_reg FROM tblpirep_swift WHERE DATE BETWEEN ".$DateStart." AND ".$DateEnd." AND ACTYPE = ".$ACType." AND REG LIKE '%".$ACReg."%' AND PirepMarep = 'pirep' GROUP BY REG ORDER BY number_of_reg DESC";
    			$sql_graph_delay = "SELECT Reg, COUNT(Reg) AS number_of_reg FROM mcdrnew WHERE DCP = 'D' OR DCP = 'C' AND ACTYPE = ".$ACType." AND REG LIKE '%".$ACReg."' AND DateEvent BETWEEN ".$DateStart." AND ".$DateEnd." GROUP BY REG ORDER BY number_of_reg DESC";
    		}
    		else if($Graph_type == 'sub_ata'){
          $sql_graph_pirep = "SELECT SUBATA, COUNT(SUBATA) AS number_of_subata FROM tblpirep_swift WHERE DATE BETWEEN ".$DateStart." AND ".$DateEnd." AND ACTYPE = ".$ACType." AND REG LIKE '%".$ACReg."%' AND PirepMarep = 'pirep' GROUP BY SUBATA ORDER BY number_of_subata DESC";
          $sql_graph_delay = "SELECT Subatatdm, COUNT(Subatatdm) AS number_of_subata FROM mcdrnew WHERE DCP = 'D' OR DCP = 'C' AND ACTYPE = ".$ACType." AND REG LIKE '%".$ACReg."' AND DateEvent BETWEEN ".$DateStart." AND ".$DateEnd." GROUP BY Subatatdm ORDER BY number_of_subata DESC";
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
    	 ?>

    	<h1 style="text-align:center;">Top 10 Delay</h1>
    	<div id="grafik_delay" style="height: 250px; margin-top: 50px"></div>

    	<h1 style="text-align:center;">Top 10 Pirep</h1>
    	<div id="grafik_pirep" style="height: 250px; margin-top: 50px"></div>
    	<script type="text/javascript">
      var Morris_data = [];
      var z=0;

    	arr_delay = <?php echo json_encode($arr_delay); ?>;

      for ( tot=arr_delay.length; z < tot; z++) {
         Morris_data.push({option: arr_delay[z][0], value: arr_delay[z][1]});
      }

/*
        for(var i=0; i<arr_delay.lenght; i++0{
          Morris_data[i][0].push(arr_delay[i][0]);
          Morris_data[i][1].push(arr_delay[i][1]);
        })
        /*
        $.each(arr_delay, function(index, obj){
          $.each(obj, function(key, val){
            Morris_data.push({'option': key, 'value': val});
            console.log(val);
            console.log(key);
          })
        });
        */

    		new Morris.Bar({

    		// ID of the element in which to draw the chart.
    		element: 'grafik_delay',
    		// Chart data records -- each entry in this array corresponds to a point on
    		// the chart.
        data: Morris_data,
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

        var Morris_data = [];
        var z=0;

        var arr_pirep = <?php echo json_encode($arr_pirep); ?>;

        for ( tot=arr_pirep.length; z < tot; z++) {
           Morris_data.push({option: arr_pirep[z][0], value: arr_pirep[z][1]});
        }

    		new Morris.Bar({
    		// ID of the element in which to draw the chart.
    		element: 'grafik_pirep',
    		// Chart data records -- each entry in this array corresponds to a point on
    		// the chart.
    		data: Morris_data,
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


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>

    <script type="text/javascript" src="assets/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="assets/js/gritter-conf.js"></script>

    <!--script for this page-->
    <script src="assets/js/sparkline-chart.js"></script>
	<script src="assets/js/zabuto_calendar.js"></script>

  </body>
</html>