<!DOCTYPE html>
<?php
  $graf_actype = $_POST["actype"];
  $ACType = "'%".$_POST["actype"]."%'";
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
  if(empty($_POST["dcp"]) or $_POST["dcp"] == "c"){
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
  if(empty($_POST["rtabo"])){
    $RTABOs="";
  }
  else{
    $RTABO = $_POST['rtabo'];
    $i = 0;
    foreach ($RTABO as &$value) {
      if($i == 0){
        $RTABO[$i] = " AND RtABO IN ('".$RTABO[$i]."'";
      }
      else if($i == 1){
        $RTABO[$i] = ",'".$RTABO[$i]."'";
      }
      else if($i == 2){
        $RTABO[$i] = ",'".$RTABO[$i]."'";
      }
      else{
        $RTABO[$i] = ",'".$RTABO[$i]."'";
      }
      $i++;
    }
    $RTABO[$i-1]=$RTABO[$i-1].")";
    $i = 0;
    $RTABOs="";
    foreach ($RTABO as &$value) {
      $RTABOs = $RTABOs.$RTABO[$i];
      $i++;
    }
  }

  include "config/connect.php";
  include 'jsonwrapper.php';

  $sql_delay = "SELECT ACtype, Reg, DepSta, ArivSta, FlightNo, HoursTot, ATAtdm, SubATAtdm, Problem, Rectification, DCP, RtABO, MinTot FROM mcdrnew WHERE ACTYPE LIKE ".$ACType."".$ACReg."".$ATA2."".$Fault_code2."".$DCPs."".$Keyword."".$RTABOs."".$DateStart2."".$DateEnd."";
  $sql_grafik = "SELECT COUNT(DateEvent) as delay, DATE_FORMAT(DateEvent, '%m-%Y') as DateEvent FROM mcdrnew WHERE ACTYPE LIKE ".$ACType."".$ACReg."".$ATA2."".$Fault_code2."".$DCPs."".$RTABOs."".$Keyword."".$DateStart2."".$DateEnd." GROUP BY MONTH(DateEvent)";

  mysqli_set_charset($link, "utf8");

  $res_delay = mysqli_query($link, $sql_delay);

  $res_grafik = mysqli_query($link, $sql_grafik);

  $arr_x = array();
  $arr_y = array();
  while ($rowes = $res_grafik->fetch_array(MYSQLI_NUM)){
    $arr_y[] = $rowes[0];
    $arr_x[] = $rowes[1];
  }
?>

<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

  <title>Reliability Dashboard - Graph</title>

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

<body onload="myFunction()" style="margin:0;">

  <?php
    include 'loader.php';
  ?>


  <div style="display:none;" id="myDiv" class="animate-bottom">

    <section id="container">
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <div class="row no-print">
        <?php
          $page_now = "graph";
          include 'header.php';
        ?>
      </div>

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

          <!-- Table delay and pirep -->
          <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.css">
          <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.15/js/jquery.dataTables.js"></script>
          <script src="https://cdn.datatables.net/buttons/1.3.1/js/dataTables.buttons.min.js"></script>
          <script src="//cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
          <script src="//cdn.rawgit.com/bpampuch/pdfmake/0.1.27/build/vfs_fonts.js"></script>
          <script src="//cdn.datatables.net/buttons/1.3.1/js/buttons.html5.min.js"></script>
          <div class="col-md-12 mt">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4><i class="fa fa-angle-right"></i> Table Delay</h4>
              </div>
              <div class="panel-body">
                <button onclick="generate()" type="button" class="btn btn-default pull-left"><i class="fa fa-print"></i> Export as PDF</button>
                <table id="table_delay" class="display cell-border" cellspacing="0" width="100%">
                  <thead>
                      <tr>
                          <th>A/C Type</th>
                          <th>A/C Reg</th>
                          <th>Sta Dep</th>
                          <th>Sta Arr</th>
                          <th>Flight No</th>
                          <th>Techical Delay Length</th>
                          <th>ATA</th>
                          <th>Sub ATA</th>
                          <th>Problem</th>
                          <th>Rectification</th>
                          <th>DCP</th>
                          <th>RTB/RTA/RTO</th>
                      </tr>
                  </thead>
                  <tbody>
                    <?php
                      $arr_delay = array();
                      while ($rowes = $res_delay->fetch_array(MYSQLI_NUM)) {
                        $rowes[5] = $rowes[5]*60;
                        $rowes[5] = $rowes[12]+$rowes[5];
                        $longtext = $rowes[9];
                        $rowes[9] = wordwrap($longtext, 50, "\n");
                        $longtext = $rowes[8];
                        $rowes[8] = wordwrap($longtext, 20, "\n");
                        $arr_delay[] = $rowes;
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
                        //$i++;
                      }
                      //print json_encode($arr_delay);
                   ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <script type="text/javascript">
            $(document).ready(function() {
            $('#table_delay').DataTable({
              "lengthMenu": [[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]],
              dom: 'Blfrtip',
              buttons: [
                {
                  extend : 'excelHtml5', text: 'Export As Excel', className: 'btn btn-default'
                }],
            });
            });
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
            var arr_x = <?php echo json_encode($arr_x); ?>;
            var arr_y = <?php echo json_encode($arr_y); ?>;
            var graf_actype = <?php echo json_encode($graf_actype); ?>;
            $(document).ready(function(){
              var chartdata = {
                labels: arr_x,
                datasets : [
                  {
                    label: 'Delay',
                    fill: 'false',
                    backgroundColor: 'rgba(200, 200, 200, 0)',
                    borderColor: 'rgba(0, 0, 255, 1)',
                    pointBackgroundColor: 'rgba(255, 0, 0, 1)',
                    pointBorderColor: 'rgba(255, 0, 0, 1)',
                    lineTension: '0',
                    data: arr_y
                  }
                ]
              };

              var options = {
                title : {
                  display : true,
                  position : "top",
                  text : "Delay (D4)" + " - " + graf_actype,
                  fontSize : 18,
                  fontColor : "#111"
                },
                legend : {
                  display : true,
                  position : "top"
                },
                scales: {
                    yAxes: [{
                      ticks: {
                          beginAtZero: true
                      },
                      scaleLabel: {
                          display: true,
                          labelString: 'Number'
                      }
                    }],
                    xAxes: [{
                      scaleLabel: {
                          display: true,
                          labelString: 'Month'
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
            });

          </script>
          <div class="col-md-12 mt">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4><i class="fa fa-angle-right"></i> Grafik</h4>
              </div>
              <div class="panel-body">
                <div id="chart-container">
                  <canvas id="graf_data_delay"></canvas>
                </div>
              </div>
            </div>
          </div>

          <script src="js/jspdf.min.js"></script>
          <script src="js/jspdf.plugin.autotable.js"></script>
          <script type="text/javascript">
            // this function generates the pdf using the table
            function generate() {
              var data = <?php echo json_encode($arr_delay); ?>;
              var pdfsize = 'a4';
              var columns = ["A/C Type", "A/C REG", "STA DEP", "STA ARR", "Flight No", "Technical Delay Length", "ATA", "SUB ATA", "Problem", "Rectification", "DCP", "RTB/RTA/RTO"];
              //var data = tableToJson($("#table_delay").get(0), columns);
              console.log(data);
              var canvas = document.querySelector('#graf_data_delay');
              var canvasImg = canvas.toDataURL("image/jpeg", 1.0);
              var doc = new jsPDF('l', 'pt', pdfsize);
              var width = doc.internal.pageSize.width;
              doc.autoTable(columns, data, {
                theme: 'grid',
                styles: {
                  overflow: 'linebreak',
                  fontSize: '6',
                  columnWidth: 'auto'
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
