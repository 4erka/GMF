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
    <label class="col-sm-2 col-sm-2 control-label">Date from</label>
      <div class="col-sm-10">
        <input type="date" class="form-control" name="datefrom" id="id_datefrom">
      </div>
  </div>

  <div class="form-group">
    <label class="col-sm-2 col-sm-2 control-label">Date to</label>
      <div class="col-sm-10">
        <input type="date"class="form-control"  name="dateto" id="id_dateto">
      </div>
  </div>

	<div class="form-group">
    <label class="col-sm-2 col-sm-2 control-label">ATA</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="ata">
      </div>
  </div>

	<div class="form-group">
    <label class="col-sm-2 col-sm-2 control-label">SUBATA</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="subata">
      </div>
  </div>

	<div class="form-group">
    <label class="col-sm-2 col-sm-2 control-label">Delay / Pirep</label>
      <div class="col-sm-10">
				<div class="radio">
					<label>
						<input type="radio" name="depir" value="delay" id="radio_delay" onclick="check(this.value)">
						Delay
					</label>
				</div>
				<div class="radio">
					<label>
						<input type="radio" name="depir" value="pirep" id="radio_pirep" onclick="check(this.value)">
						Pirep
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

	<div class="form-group">
    <label class="col-sm-2 col-sm-2 control-label">DCP</label>
      <div class="col-sm-10">
				<label class="checkbox-inline">
					<input type="checkbox" name="dcp[]" value="d"> D
				</label>
				<label class="checkbox-inline">
					<input type="checkbox" name="dcp[]" value="c"> C
				</label>
				<label class="checkbox-inline">
					<input type="checkbox" name="dcp[]" value="x"> X
				</label>
      </div>
  </div>

	<input type="submit" value="Display Report" class="btn btn-default">

</form>

<script type="text/javascript">
	document.getElementById("radio_delay").checked = true;
	check(document.getElementById("radio_delay").value);
	function check(depir) {
		depir = "graph_" + depir + ".php";
	    document.getElementById("form_graph").action=depir;
	}
</script>
