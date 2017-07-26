<!DOCTYPE html>

<?php

//Mendapatkan Value yang di passing
if(empty($_POST["actype"])){
  $ACType = "";
}
else{
//  $data = implode("','",$_POST["actype"]);
//  $where_actype = "ACType IN ('$data')";
  $ACType = "'".$_POST['actype']."%'";
  $where_actype = "ACType LIKE '".$_POST['actype']."%'";
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
  include 'jsonwrapper.php';
 ?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Aircraft Reliability - Pareto</title>

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

    <?php
      include 'loader_style.php';
    ?>
    </head>

    <body onload="myFunction()" style="margin:0;">

    <?php
      include 'loader.php';
    ?>


    <div style="display:none;" id="myDiv" class="animate-bottom">

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->

      <?php
        $page_now = "pareto";
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
          <div class="col-md-12 mt">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4><i class="fa fa-angle-right"></i> Filter Pareto Display</h4>
              </div>
              <div class="panel-body">
                <?php
                  include 'form_pareto.php';
                ?>
              </div>
            </div>
          </div>
    	<?php

      if($Graph_type == 'ata' || $Graph_type == 'ac_reg'){
        if($Graph_type == 'ata'){
    			$sql_graph_pirep = "SELECT ata, COUNT(ata) AS number_of_ata FROM tblpirep_swift WHERE ".$where_actype." AND ata >= 21 AND REG LIKE '%".$ACReg."%' AND PirepMarep = 'pirep' AND DATE BETWEEN ".$DateStart." AND ".$DateEnd." GROUP BY ata ORDER BY number_of_ata DESC";
    			$sql_graph_delay = "SELECT ATAtdm, COUNT(Atatdm) AS number_of_ata1 FROM mcdrnew WHERE ".$where_actype." AND DCP <> 'X' AND REG LIKE '%".$ACReg."' AND DateEvent BETWEEN ".$DateStart." AND ".$DateEnd." GROUP BY ATAtdm ORDER BY number_of_ata1 DESC";
    		}
    		else if($Graph_type == 'ac_reg'){
    			$sql_graph_pirep = "SELECT REG, COUNT(REG) AS number_of_reg FROM tblpirep_swift WHERE DATE BETWEEN ".$DateStart." AND ".$DateEnd." AND ata >= 21 AND ".$where_actype." AND REG LIKE '%".$ACReg."%' AND PirepMarep = 'pirep' GROUP BY REG ORDER BY number_of_reg DESC";
    			$sql_graph_delay = "SELECT Reg, COUNT(Reg) AS number_of_reg FROM mcdrnew WHERE ".$where_actype." AND DCP <> 'X' AND REG LIKE '%".$ACReg."' AND DateEvent BETWEEN ".$DateStart." AND ".$DateEnd." GROUP BY REG ORDER BY number_of_reg DESC";
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

      }

    	else{
#          $sql_graph_pirep = "SELECT concat_ws('-',ata, subata) as ata_subata, COUNT(concat(ata, subata)) AS number_of_subata FROM tblpirep_swift WHERE ata >= 21 AND DATE BETWEEN ".$DateStart." AND ".$DateEnd." AND ".$where_actype." AND REG LIKE '%".$ACReg."%' AND PirepMarep = 'pirep' GROUP BY ata_subata ORDER BY number_of_subata DESC";
          $sql_graph_pirep = "SELECT CASE
            WHEN subata = '0' THEN CONCAT_WS('-',ata, '00')
            WHEN subata = '' THEN CONCAT_WS('-', ata, '00')
            ELSE CONCAT_WS('-', ata, subata)
            END AS ata_subata
            FROM tblpirep_swift WHERE ata >= 21 AND DATE BETWEEN ".$DateStart." AND ".$DateEnd." AND ".$where_actype." AND REG LIKE '%".$ACReg."%' AND PirepMarep = 'pirep'";
          #$sql_graph_delay = "SELECT CONCAT(ATAtdm, COALESCE(NULLIF(SubATAtdm,''),'00')) AS ata_subata, COUNT(CONCAT(ATAtdm, COALESCE(NULLIF(SubATAtdm,''),'00'))) AS number_of_subata FROM mcdrnew WHERE DCP = 'D' OR DCP = 'C' AND ACTYPE = ".$ACType." AND REG LIKE '%".$ACReg."' AND DateEvent BETWEEN ".$DateStart." AND ".$DateEnd." GROUP BY ata_subata ORDER BY number_of_subata DESC";
          $sql_graph_delay = "SELECT CASE
          	WHEN ISNULL(SubATAtdm) THEN CONCAT_WS('-' ,ATAtdm, '00')
          	WHEN SubATAtdm = '' THEN CONCAT_WS('-' ,ATAtdm, '00')
          	WHEN SubATAtdm = '00' THEN CONCAT_WS('-' ,ATAtdm, '00')
          	WHEN SubATAtdm = '0' THEN CONCAT_WS('-' ,ATAtdm, '00')
          	ELSE CONCAT_WS('-' ,ATAtdm, SubATAtdm)
          	END AS new_ata
            FROM mcdrnew WHERE DCP <>'X' AND ".$where_actype." AND REG LIKE '%".$ACReg."' AND DateEvent BETWEEN ".$DateStart." AND ".$DateEnd."";

          $res_graph_pirep = mysqli_query($link, $sql_graph_pirep);
    		  $res_graph_delay = mysqli_query($link, $sql_graph_delay);

          //print_r($sql_graph_pirep);

          $i = 0;
      		while ($rowes = $res_graph_pirep->fetch_array(MYSQLI_NUM)) {
      			//if($i > 9) break;
            $temp_pirep[$i] = $rowes[0];
            $i++;

//            $arr_pirep[$i][0] = $rowes[0];
//      			$arr_pirep[$i][1] = $rowes[1];
  //    			$i++;
      		}

          for($i=0; $i<sizeof($temp_pirep); $i++){
            if($temp_pirep[$i] == NULL){
              $ar[$i] = '0000';
            }
            else {
              $ar[$i] = $temp_pirep[$i];
            }
          }

          $ar0 = array_count_values($ar);

          arsort($ar0);

          $keys=array_keys($ar0);//Split the array so we can find the most occuring key

          $arr_pirep = Array();
          for($i=0; $i<10; $i++){
            $arr_pirep[$i][0] = $keys[$i];
            $arr_pirep[$i][1] = $ar0[$keys[$i]];
          }

          //======================================================================Delay=======================================================

      		$i = 0;
      		while ($rowes = $res_graph_delay->fetch_array(MYSQLI_NUM)) {
      			$temp_delay[$i] = $rowes[0];
            $i++;
      		}

          for($i=0; $i<sizeof($temp_delay); $i++){
            if($temp_delay[$i] == NULL){
              $ar[$i] = '0000';
            }
            else {
              $ar[$i] = $temp_delay[$i];
            }
          }

//          $ar = array_replace($temp_delay,array_fill_keys(array_keys($temp_delay, NULL),'0000'));
          #$ar = array_slice($ar, 0, 20);

          $ar1 = array_count_values($ar);
          #print_r($ar1);

          arsort($ar1);

          $keys=array_keys($ar1);//Split the array so we can find the most occuring key

          $arr_delay = Array();
          for($i=0; $i<10; $i++){
            $arr_delay[$i][0] = $keys[$i];
            $arr_delay[$i][1] = $ar1[$keys[$i]];
          }
#          var_dump($arr_delay);

#          print_r($ar1);

#          echo "The most occuring value is ".$keys[0]." with ".$keys[]." occurences.<br>";
#          print_r($keys[0][0]);
#          $top10 = array_slice($keys, 0, 10);
#          print_r($top10[0]);

    		}

        #print_r($sql_graph_delay );

    	 ?>
       <script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

       <div class="col-md-12 mt">
         <div class="panel panel-default">
           <div class="panel-heading">
             <h4><i class="fa fa-angle-right"></i>Top 10 Delay</h4>
           </div>
           <div class="panel-body">
             <canvas id="grafik_delay" style="height: 250px; margin-top: 50px"></canvas>
           </div>
         </div>
       </div>

       <div class="col-md-12 mt">
         <div class="panel panel-default">
           <div class="panel-heading">
             <h4><i class="fa fa-angle-right"></i>Top 10 Pirep</h4>
           </div>
           <div class="panel-body">
             <canvas id="grafik_pirep" style="height: 250px; margin-top: 50px"></canvas>
           </div>
         </div>
       </div>

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

  <script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
  <script type="text/javascript" src="js/Chart.min.js"></script>
  <script>

  var label_data = [];
  var jumlah_pirep = [];
  var z=0;

  var arr_pirep = <?php echo json_encode($arr_delay); ?>;

  for ( tot=arr_pirep.length; z < tot; z++) {
     label_data.push(arr_pirep[z][0]);
     jumlah_pirep.push(arr_pirep[z][1]);
  };

  Chart.plugins.register({
    beforeDraw: function(chartInstance) {
      var ctx = chartInstance.chart.ctx;
      ctx.fillStyle = "white";
      ctx.fillRect(0, 0, chartInstance.chart.width, chartInstance.chart.height);
    }
  });

  var ctx = document.getElementById("grafik_delay").getContext("2d");

  var data = {
    labels: label_data,//["dD 1", "dD 2", "dD 3", "dD 4", "dD 5", "dD 6", "dD 7", "dD 8", "dD 9", "dD 10"],
    datasets: [{
      label: "Jumlah Delay",
//          fillColor: "rgba(0,60,100,1)",
      backgroundColor: "lightblue",
//          hoverBackgroundColor: ["#66A2EB", "#FCCE56"],
      strokeColor: "black",
      data: jumlah_pirep
    }]
  };

  var myBarChart = new Chart(ctx, {
      type: 'bar',
      data: data,
      options: {
          barValueSpacing: 20,
          scales: {
              yAxes: [{
                  ticks: {
                      min: 0,
                  }
              }]
          }
      }
  });
  </script>

  <script>

  var label_data = [];
  var jumlah_pirep = [];
  var z=0;

  var arr_pirep = <?php echo json_encode($arr_pirep); ?>;

  for ( tot=arr_pirep.length; z < tot; z++) {
     label_data.push(arr_pirep[z][0]);
     jumlah_pirep.push(arr_pirep[z][1]);
  };

  Chart.plugins.register({
    beforeDraw: function(chartInstance) {
      var ctx = chartInstance.chart.ctx;
      ctx.fillStyle = "white";
      ctx.fillRect(0, 0, chartInstance.chart.width, chartInstance.chart.height);
    }
  });

  var ctx = document.getElementById("grafik_pirep").getContext("2d");

  var data = {
    labels: label_data,//["dD 1", "dD 2", "dD 3", "dD 4", "dD 5", "dD 6", "dD 7", "dD 8", "dD 9", "dD 10"],
    datasets: [{
      label: "Jumlah Pirep",
//          fillColor: "rgba(0,60,100,1)",
      backgroundColor: "red",
//          hoverBackgroundColor: ["#66A2EB", "#FCCE56"],
      strokeColor: "black",
      data: jumlah_pirep
    }]
  };

  var myBarChart = new Chart(ctx, {
      type: 'bar',
      data: data,
      options: {
          barValueSpacing: 20,
          scales: {
              yAxes: [{
                  ticks: {
                      min: 0,
                  }
              }]
          }
      }
  });
  </script>


</div>
  </body>
</html>
