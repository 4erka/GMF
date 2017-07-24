<?php
	$sql_actype = "SELECT DISTINCT ACtype FROM tbl_master_actype";
	$res_actype = mysqli_query($link, $sql_actype);

?>

<form action="graph.php" method="post" class="form-horizontal style-form" style="margin-bottom: 50px" id="form_graph">

	<div class="form-group">
  <label class="col-sm-2 col-sm-2 control-label">A/C Type</label>
    <div class="col-sm-10">
      <select name="actype" class="form-control">
          <?php
            while($row = $res_actype->fetch_array(MYSQLI_NUM))
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
    <label class="col-xs-6 col-sm-2 control-label">Date from</label>
      <div class="col-sm-3">
        <input type="date" class="form-control" name="datefrom" id="id_datefrom">
      </div>
    <label class="col-xs-6 col-sm-2 control-label">Date to</label>
      <div class="col-sm-3">
        <input type="date" class="form-control" name="dateto" id="id_dateto">
      </div>
  </div>

	<div class="form-group">
    <label class="col-xs-6 col-sm-2 control-label">ATA</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" name="ata">
      </div>
    <label class="col-xs-6 col-sm-2 control-label">SUBATA</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" name="subata">
      </div>
  </div>

	<div class="form-group">
    <label class="col-sm-2 col-sm-2 control-label">Delay / Pirep</label>
      <div class="col-sm-10">
				<div class="radio">
          <label>
  					<input type="radio" name="depir" value="delay" id="radio_delay" onclick="check(this.value)"> Delay <br>
            <label class="checkbox-inline">
              <input type="checkbox" name="dcp[]" value="d" id="cl_delay"> Delay
            </label>
            <label class="checkbox-inline">
              <input type="checkbox" name="dcp[]" value="c" id="cl_cancel"> Cancel
            </label>
            <label class="checkbox-inline">
              <input type="checkbox" name="dcp[]" value="x" id="cl_x"> All
            </label><br>
            <label class="checkbox-inline">
              <input type="checkbox" name="rtabo[]" value="rta" id="cl_rta"> RTA
            </label>
            <label class="checkbox-inline">
              <input type="checkbox" name="rtabo[]" value="rtb" id="cl_rtb"> RTB
            </label>
            <label class="checkbox-inline">
              <input type="checkbox" name="rtabo[]" value="rto" id="cl_rto"> RTO
            </label>
            <label class="checkbox-inline">
              <input type="checkbox" name="rtabo[]" value="rtg" id="cl_rtg"> RTG
            </label>
          </label>
				</div>
				<div class="radio">
          <label>
  					<input type="radio" name="depir" value="pirep" id="radio_pirep" onclick="check(this.value)"> Pirep<br>
            <label class="checkbox-inline">
              <input type="checkbox" name="pima[]" value="pirep" id="cl_pirep"> Pirep
            </label>
            <label class="checkbox-inline">
              <input type="checkbox" name="pima[]" value="marep" id="cl_marep"> Marep
            </label>
          </label>
				</div>
      </div>
  </div>

	<div class="form-group">
    <label class="col-sm-2 col-sm-2 control-label">Keyword</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="keyword">
      </div>
  </div>

	<input type="submit" value="Display Report" class="btn btn-default">

</form>

<script type="text/javascript">
	document.getElementById("radio_delay").checked = true;
	check(document.getElementById("radio_delay").value);
	function check(depir) {
    if(depir == "pirep"){
      document.getElementById("cl_delay").disabled = true;
      document.getElementById("cl_cancel").disabled = true;
      document.getElementById("cl_x").disabled = true;
      document.getElementById("cl_rta").disabled = true;
      document.getElementById("cl_rtb").disabled = true;
      document.getElementById("cl_rto").disabled = true;
      document.getElementById("cl_rtg").disabled = true;

      document.getElementById("cl_pirep").disabled = false;
      document.getElementById("cl_marep").disabled = false;
    }
    else{
      document.getElementById("cl_pirep").disabled = true;
      document.getElementById("cl_marep").disabled = true;

      document.getElementById("cl_delay").disabled = false;
      document.getElementById("cl_cancel").disabled = false;
      document.getElementById("cl_x").disabled = false;
      document.getElementById("cl_rta").disabled = false;
      document.getElementById("cl_rtb").disabled = false;
      document.getElementById("cl_rto").disabled = false;
      document.getElementById("cl_rtg").disabled = false;
    }
		depir = "graph_" + depir + ".php";
	    document.getElementById("form_graph").action=depir;
	}
</script>
