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
        <input type="text" class="form-control" name="acreg">
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