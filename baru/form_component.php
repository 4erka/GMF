<?php

  //Memilih Ac Type
  $sql0 = "SELECT DISTINCT ACtype FROM tbl_master_actype";
  $res0 = mysqli_query($link, $sql0);

?>

<h2> COMPONENT REMOVAL TREND </h2>

<form action="component_removal.php" method="post" class="form-horizontal style-form" style="margin-bottom: 50px">

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
    <label class="col-sm-2 col-sm-2 control-label">A/C Registration</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="acreg">
      </div>
  </div>

  <div class="form-group">
    <label class="col-sm-2 col-sm-2 control-label">Part Number</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="part_no">
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

  <input type="submit" value="Display Report" class="btn btn-default">

</form>
