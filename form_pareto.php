<?php

  //Memilih Ac Type
  $sql0 = "SELECT DISTINCT ACtype FROM tbl_master_actype";
  $res0 = mysqli_query($link, $sql0);

 ?>

<form action="pareto.php" method="post" class="form-horizontal style-form" style="margin-bottom: 50px">
  <div class="form-group">
    <label class="col-sm-2 col-sm-2 control-label">Default</label>
      <div class="col-sm-10">
        <input type="text" class="form-control">
      </div>
  </div>
  <table>
    <tbody>
      <tr>
        <th>
          A/C Type
        </th>
        <th>
          <select name="actype" class="form-control">
              <?php
                while($row = $res0->fetch_array(MYSQLI_NUM))
                  echo "<option value=".$row[0].">".$row[0]."</option>";
               ?>
          </select>
        </th>
        <th></th>
        <th></th>
        <th>
          <input type="submit" value="Display Report" class="form-control">
        </th>
        <th>
          <?php
            //echo "<a href='excel_pareto.php?act='.$_POST['actype'].'&acr='$_POST['acreg'] class='btn btn-default'>Excell Report</a>";
           ?>

<!--          <input type="submit" value="Export Excel">
-->
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
          <input type="date" name="datefrom" id="id_datefrom" required>
        </th>
        <th>
          Date to
        </th>
        <th>
          <input type="date" name="dateto" id="id_dateto" required>
        </th>
      </tr>
    </tbody>
  </table>

        <th>
          Graph settings for X-axis
        </th>
        <th>
          <input type="radio" name="graph" value="ata" required> ATA
          <input type="radio" name="graph" value="ac_reg"required> A/C REG
          <input type="radio" name="graph" value="fault_c"required> Fault Code
        </th>

</form>
