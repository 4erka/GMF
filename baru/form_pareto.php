<?php

  //Memilih Ac Type
  $sql0 = "SELECT DISTINCT ACtype FROM tbl_master_actype";
  $res0 = mysqli_query($link, $sql0);

?>

<form action="pareto.php" method="post" class="form-horizontal style-form" style="margin-bottom: 50px">

<br>

<table style="width: 95%; margin: 10px">
  <tbody>
    <tr>
      <td style="width:50%">
        <div class="form-group">
          <label class="control-label">A/C Type</label>
            <select name="actype" class="form-control">
                <?php
                  if(isset($ACType)){
                    while($row = $res0->fetch_array(MYSQLI_NUM)){
                      if($row[0]==$_POST['actype']){
                        $isSelect="selected";
                        echo "<option value=".$row[0]." ".$isSelect.">".$row[0]."</option>";
                      }
                      else{
                        echo "<option value=".$row[0].">".$row[0]."</option>";
                      }
                    }
                  }
                  else{
                    while($row = $res0->fetch_array(MYSQLI_NUM))
                      echo "<option value=".$row[0].">".$row[0]."</option>";
                  }
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
          <label class="control-label">Date from</label>
            <input type="date" class="form-control" name="datefrom" value="<?php if(isset($DateStart))echo $_POST['datefrom'] ?>" required>
            <p>Format: yyyy-mm-dd || Chrome: mm/dd/yyyy</p>
        </div>
      </td>
      <td style="padding-left:50px; width:50%">
        <div class="form-group">
          <label class="control-label">Date To</label>
            <input type="date" class="form-control" name="dateto" value="<?php if(isset($DateEnd))echo $_POST['dateto'] ?>" required>
            <p>Format: yyyy-mm-dd || Chrome: mm/dd/yyyy</p>
        </div>
      </td>
    </tr>

    <tr>
      <td style="width:50%">
        <div class="form-group">
          <label class="control-label">Graph settings for X-axis</label>
          <div class="radio">
              <label>
              <?php
              if(isset($Graph_type)){
                if($Graph_type == 'ata'){
                  echo '<input type="radio" name="graph" id="radio_graph" value="ata" checked required>';
                }
                else {
                  echo '<input type="radio" name="graph" id="radio_graph" value="ata" required>';
                }
              }
              else {
                echo '<input type="radio" name="graph" id="radio_graph" value="ata" required>';
              }
              ?>
                       ATA
              </label>
          </div>

          <div class="radio">
              <label>
                <?php
                if(isset($Graph_type)){
                  if($Graph_type == 'ac_reg'){
                    echo '<input type="radio" name="graph" id="radio_graph" value="ac_reg" checked required>';
                  }
                  else {
                    echo '<input type="radio" name="graph" id="radio_graph" value="ac_reg" required>';
                  }
                }
                else {
                    echo '<input type="radio" name="graph" id="radio_graph" value="ac_reg" required>';
                }
                ?>
                       A/C REG
              </label>
          </div>

          <div class="radio">
              <label>
                <?php
                if(isset($Graph_type)){
                  if($Graph_type == 'sub_ata'){
                    echo '<input type="radio" name="graph" id="radio_graph" value="sub_ata" checked required>';
                  }
                  else {
                    echo '<input type="radio" name="graph" id="radio_graph" value="sub_ata" required>';
                  }
                }
                else {
                    echo '<input type="radio" name="graph" id="radio_graph" value="sub_ata" required>';
                }
                ?>
                         Sub ATA
              </label>
          </div>
        </div>
      </td>
    </tr>
    <tr>
      <td>
        <input type="submit" value="Display Report" class="btn btn-default">
      </td>
    </tr>

</tbody>
</table>
</form>
