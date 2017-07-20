<?php

  //Memilih Ac Type
  $sql0 = "SELECT DISTINCT ACtype FROM tbl_master_actype";
  $res0 = mysqli_query($link, $sql0);

?>

<form action="component_removal.php" method="post" class="form-horizontal style-form" style="margin-bottom: 50px">

<br>

<table style="width: 95%; margin: 10px">
  <tbody>
    <tr>
      <td style="width:50%">
        <div class="form-group">
          <label class="control-label">A/C Type</label>
            <select name="actype" class="form-control">
                <?php
                  while($row = $res0->fetch_array(MYSQLI_NUM))
                    echo "<option value=".$row[0].">".$row[0]."</option>";
                 ?>
            </select>
        </div>
      </td>
      <td style="padding-left:50px; width:50%">
        <div class="form-group">
          <label class="control-label">A/C Registration</label>
            <input type="text" class="form-control" name="acreg" value="<?php if(isset($ACReg))echo $_POST["acreg"] ?>">
        </div>
      </td>
    </tr>
    <tr>
      <td style="width:50%">
        <div class="form-group">
          <label class="control-label">Part Number</label>
              <input type="text" class="form-control" name="part_no" value="<?php if(isset($PartNum))echo $_POST["part_no"] ?>">
        </div>
      </td>
      <td style="width:50%; padding-left:50px">
        <div class="form-group">
          <label class="control-label">Removal Code</label>
            <div style="padding-left:50px">
              <label class="checkbox-inline">
                <?php
                  if(isset($RemCode)){
                    $sign = false;
                    $unsign = false;
                    foreach ($RemCode as $key) {
                      if($key == "u") $unsign = true;
                      if($key == "s") $sign = true;
                    }
                    if($unsign){
                      echo "<input type='checkbox' name='remcode[]' value='u' checked>";
                    }
                    else {
                      echo "<input type='checkbox' name='remcode[]' value='u'>";
                    }
                  }
                  else {
                    echo "<input type='checkbox' name='remcode[]' value='u'>";
                  }
                 ?>
      					 Unscheduled
      				</label>
      				<label class="checkbox-inline">
                <?php
                if(isset($RemCode)){
                    if($sign){
                        echo "<input type='checkbox' name='remcode[]' value='s' checked>";
                    }
                    else {
                      echo "<input type='checkbox' name='remcode[]' value='s'>";
                    }

                  }
                else {
                  echo "<input type='checkbox' name='remcode[]' value='s'>";
                }
                 ?>
      					Scheduled
      				</label>
            </div>
        </div>
      </td>
    </tr>
    <tr>
      <td style="width:50%">
        <div class="form-group">
          <label class="control-label">Date from</label>
            <input type="date" class="form-control" name="datefrom" value="<?php if(isset($DateStart))echo $_POST['datefrom'] ?>" required>
        </div>
      </td>
      <td style="padding-left:50px; width:50%">
        <div class="form-group">
          <label class="control-label">Date To</label>
            <input type="date" class="form-control" name="dateto" value="<?php if(isset($DateEnd))echo $_POST['dateto'] ?>" required>
        </div>
      </td>
    </tr>
    <tr>
      <td style="width:50%">
        <input type="submit" value="Display Report" class="btn btn-default">
      </td>
    </tr>

  </tbody>
</table>

</form>
