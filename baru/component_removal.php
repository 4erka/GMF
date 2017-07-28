<!DOCTYPE html>

<?php

//Mendapatkan Value yang di passing
if(empty($_POST["actype"])){
  $ACType = "";
}
else{
//  $data = implode("','",$_POST["actype"]);
//  $where_actype = "Aircraft IN ('$data')";
  $ACType = "'".$_POST['actype']."%'";
  $where_actype = "Aircraft LIKE ".$ACType;
}
if(empty($_POST["acreg"])){
  $ACReg = "";
}
else{
  $ACReg = $_POST['acreg'];
}
if(empty($_POST["part_no"])){
  $PartNum = "";
}
else{
  $PartNum = "".$_POST['part_no']."";
}
if(!empty($_POST["datefrom"])){
  $DateStart = "".$_POST['datefrom']."";
}
else{
  $DateStart = "";
}
if(!empty($_POST["dateto"])){
  $DateEnd = "".$_POST['dateto']."";
}
else
  $DateEnd = "";

if(!empty($_POST["remcode"])){
//  $i = 0;
  $data = implode("','",$_POST["remcode"]);
  $where_remcode = "AND RemCode IN ('$data')";
}
else {
  $where_remcode = "";
}

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

    <title>Aircraft Reliability - Component Removal</title>

    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.css">
    <link rel-"stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.3.1/css/buttons.dataTables.min.css">

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
        $page_now = "component";
        include 'header.php';
       ?>

      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->

      <?php
        include 'navbar.php';

        $sql_rem = "SELECT ID, ATA, AIN, PartNo, SerialNo, PartName, Reg, Aircraft, RemCode, `Real Reason`, DateRem, TSN, TSI, CSN, CSI
                FROM tblcompremoval
                WHERE ".$where_actype." AND PartNo LIKE '%".$PartNum."%' AND Reg LIKE '%".$ACReg.
                "%' AND DateRem BETWEEN '".$DateStart."' AND '".$DateEnd."' ".$where_remcode;

      $res_rem = mysqli_query($link, $sql_rem);

      $row_cnt = mysqli_num_rows($res_rem);
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
                <h4><i class="fa fa-angle-right"></i> Filter Component Removal Criteria</h4>
              </div>
              <div class="panel-body">
                <?php
                  include 'form_component.php';
                ?>
              </div>
            </div>
          </div>


          <div class="col-md-12 mt">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4><i class="fa fa-angle-right"></i> Tabel Component Removal</h4>
              </div>
              <div class="panel-body">
                  <section id="unseen" style="padding: 10px">
                  <table id="comp_table" class="table table-bordered table-striped table-condensed">
                    <button id="exportButton" onclick="generate()" type="button" class="btn btn-default pull-left"><i class="fa fa-print"></i> Export as PDF</button>
                    <br>
                    <br>
                    <br>
                        <thead>
                        <tr>
                          <?php
                            if($row_cnt>0){
                              echo "<th>Notification</th>";
                              echo "<th>ATA</th>";
                              echo "<th>Equipment</th>";
                              echo "<th>Part Number</th>";
                              echo "<th>Serial Number</th>";
                              echo "<th>Part Name</th>";
                              echo "<th>Register</th>";
                              echo "<th>A/C Type</th>";
                              echo "<th>Rem Code</th>";
                              echo "<th>Real Reason</th>";
                              echo "<th>Date Removal</th>";
                              echo "<th>TSN</th>";
                              echo "<th>TSI</th>";
                              echo "<th>CSN</th>";
                              echo "<th>CSI</th>";
                            }
                           ?>
                        </tr>
                        </thead>
                        <tbody>

                        <?php

                          //print_r($sql_rem);
                        if($row_cnt>0){
                          while ($rowes = $res_rem->fetch_array(MYSQLI_NUM)) {
                            echo "<tr>";
                              echo "<td>".$rowes[0]."</td>"; //ID
                              echo "<td>".$rowes[1]."</td>"; //ATA
                              echo "<td>".$rowes[2]."</td>"; //AIN
                              echo "<td>".$rowes[3]."</td>"; //Part No
                              echo "<td>".$rowes[4]."</td>"; //Serial No
                              echo "<td>".$rowes[5]."</td>"; //Part Name
                              echo "<td>".$rowes[6]."</td>"; //Reg
                              echo "<td>".$rowes[7]."</td>"; //Aircraft
                              echo "<td>".$rowes[8]."</td>"; //Reason
                              echo "<td>".$rowes[9]."</td>"; //Real Reason
                              echo "<td>".$rowes[10]."</td>"; //Date Rem
                              echo "<td>".$rowes[11]."</td>"; //TSN
                              echo "<td>".$rowes[12]."</td>"; //TSI
                              echo "<td>".$rowes[13]."</td>"; //CSN
                              echo "<td>".$rowes[14]."</td>"; //CSI/
                            echo "</tr>";
                          }
                        }
                        else {
                          echo "<h2>Tidak ada data</h2>";
                        }

                         ?>
                        </tbody>
                    </table>
                  </section>
                </div> <!--Panel body-->
              </div> <!--/content-panel -->
          </div><!-- /col-md-12 -->

    	<?php
      // SQL untuk grafik component rempval
      if(isset($where_remcode)){
        $sql_comp = "SELECT DATE_FORMAT(DateRem, '%Y-%m') AS dates, COUNT(DATE_FORMAT(DateRem, '%Y-%m')) AS number_of_rem FROM tblcompremoval
        WHERE ".$where_actype." AND PartNo LIKE '%".$PartNum."%' AND Reg LIKE '%".$ACReg."%' AND DateRem BETWEEN '".$DateStart."' AND '".$DateEnd."' GROUP BY dates;";
      }
      else {
        #$sql_comp = "SELECT DateRem, COUNT(DateRem) AS number_of_rem FROM tblcompremoval
        $sql_comp = "SELECT DATE_FORMAT(DateRem, '%Y-%m') AS dates, COUNT(DATE_FORMAT(DateRem, '%Y-%m')) AS number_of_rem FROM tblcompremoval
        WHERE ".$where_actype." AND ".$where_remcode." AND PartNo LIKE '%".$PartNum."%' AND Reg LIKE '%".$ACReg."%' AND DateRem BETWEEN '".$DateStart."' AND '".$DateEnd."' GROUP BY dates;";
      }

        $res_comp = mysqli_query($link, $sql_comp);

//        print_r($sql_comp);

        $temp_total = 0;
        $before_temp = Array();

        $i=0;
        while ($rowes = $res_comp->fetch_array(MYSQLI_NUM)) {
          if($i == 0){
            $arr_comp[$i][0] = $rowes[0];
            $arr_comp[$i][1] = $rowes[1];
            $i++;
          }
          else {
            $now = strtotime("+1 Month", strtotime($before_temp[0]));

            if($rowes[0] == date("Y-m", $now)){
              $arr_comp[$i][0] = $rowes[0];
              $arr_comp[$i][1] = $rowes[1];
              $i++;
            }
            else {
              $now = strtotime($before_temp[0]);
              $now = strtotime("+1 Month", $now);

              while($rowes[0] != date("Y-m", $now)){

                  $arr_comp[$i][0] = date("Y-m", $now);
                  $arr_comp[$i][1] = 0;
                  $i++;

                  $now = strtotime("+1 Month", $now);
              }

              $arr_comp[$i][0] = $rowes[0];
              $arr_comp[$i][1] = $rowes[1];
              $i++;
            }
          }
          $before_temp[0] = $rowes[0];
          $before_temp[1] = $rowes[1];
        }

    	 ?>

       <div class="col-md-12 mt">
         <div class="panel panel-default">
           <div class="panel-heading">
             <h4><i class="fa fa-angle-right"></i>Grafik Component Removal</h4>
           </div>
           <div class="panel-body">
             <?php
              if($row_cnt>0){
                echo "<canvas id='grafik_comp' style='height: 250px; margin-top: 50px'></canvas>";
              }
              else {
                echo "<h2>Tidak ada data</h2>";
              }
              ?>

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

  <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.3.1/js/dataTables.buttons.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  <script src="//cdn.rawgit.com/bpampuch/pdfmake/0.1.27/build/pdfmake.min.js"></script>
  <script src="//cdn.rawgit.com/bpampuch/pdfmake/0.1.27/build/vfs_fonts.js"></script>
  <script src="//cdn.datatables.net/buttons/1.3.1/js/buttons.html5.min.js"></script>

  <script type="text/javascript">
    $(document).ready(function() {
      $('#comp_table').DataTable({
        dom: 'Bfrtip',
        buttons: [
          {
            extend : 'excelHtml5', text: 'Export As Excel', className: 'btn btn-default'
          }
        ],
        responsive: true
      });
  });
  </script>

  <script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
  <script type="text/javascript" src="js/Chart.min.js"></script>

  <script type="text/javascript">
      var label_data = [];
      var jumlah_pirep = [];
      var z=0;

      var arr_pirep = <?php echo json_encode($arr_comp); ?>;

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

      var ctx = document.getElementById("grafik_comp").getContext("2d");

      var data = {
        labels: label_data,
        datasets: [{
          label: "Number of Component Removal In A Month",
          fill: 'false',
          backgroundColor: 'rgba(200, 200, 200, 0)',
          borderColor: 'rgba(0, 0, 255, 1)',
          pointBackgroundColor: 'rgba(255, 0, 0, 1)',
          pointBorderColor: 'rgba(255, 0, 0, 1)',
          lineTension: '0',
          data: jumlah_pirep
        }]
      };

      var options = {
        title : {
          display : true,
          position : "top",
          text : "Component Removal",
          fontSize : 18,
          fontColor : "#111"
        },
        legend : {
          display : true,
          position : "bottom"
        },
        scales: {
              yAxes: [{
                scaleLabel: {
                    display: true,
                    labelString: 'Number'
                  },
                  ticks: {
                      beginAtZero: true
                  }
              }]
          }
      };

      var myBarChart = new Chart(ctx, {
          type: 'line',
          data: data,
          options: options
      });
  </script>
  <script src="js/jspdf.min.js"></script>
  <script src="js/jspdf.plugin.autotable.js"></script>
  <script type="text/javascript">
    // this function generates the pdf using the table
    function generate() {
      var pdfsize = 'a4';
      var columns = ["Notification", "ATA", "Equipment", "Part Number", "Serial Number", "Part Name", "Register", "A/C Type", "Rem Code", "Real Reason", "Date Removal", "TSN", "TSI", "CSN", "CSI"];
      var data = tableToJson($("#comp_table").get(0), columns);
      console.log(data);
      var canvas = document.querySelector('#grafik_comp');
      var canvasImg = canvas.toDataURL("image/jpeg", 1.0);
      var doc = new jsPDF('l', 'pt', pdfsize);
      var width = doc.internal.pageSize.width;
      doc.autoTable(columns, data, {
        theme: 'grid',
        styles: {
          overflow: 'linebreak'
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

    </div>
  </body>
</html>
