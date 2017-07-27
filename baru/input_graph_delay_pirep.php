<?php
	include'config/connect.php';

	$sql_actype = "SELECT DISTINCT ACtype FROM tbl_master_actype";
	$res_actype = mysqli_query($link, $sql_actype);
?>

<form action="graph.php" method="post" class="form-horizontal style-form" style="margin-bottom: 50px" id="form_graph" name="form_graph" onsubmit="return validateForm()">

	<div class="form-group">
	  	<label class="col-xs-6 col-sm-2 control-label">A/C Type</label>
	    <div class="col-sm-3">
	      <select name="actype" class="form-control">
	          <?php
				$isSelect = "";
				while($row = $res_actype->fetch_array(MYSQLI_NUM)){
					if($row[0]==$_POST["actype"]){
						$isSelect="selected";
						echo "<option value=".$row[0]." ".$isSelect.">".$row[0]."</option>";
					}
					else{
						echo "<option value=".$row[0].">".$row[0]."</option>";
					}
				}
			 ?>
	      </select>
	    </div>
	    <label class="col-xs-6 col-sm-2 control-label">A/C Reg</label>
	    <div class="col-sm-3">
	    	<?php
				echo '<input type="text" name="acreg" class="form-control" value="'.$_POST["acreg"].'">';
			?>
	    </div>
	</div>

	<div class="form-group">
	    <label class="col-xs-6 col-sm-2 control-label">Date from</label>
	    <div class="col-sm-3">
	    	<?php
				echo '<input type="date" name="datefrom" class="form-control" id="id_datefrom" value="'.$_POST["datefrom"].'">';
			?>
			Format: yyyy-mm-dd || Chrome: mm/dd/yyyy
	    </div>
	    <label class="col-sm-3 col-sm-2 control-label">Date to</label>
	    <div class="col-sm-3">
	    	<?php
				echo '<input type="date" name="dateto" class="form-control" id="id_dateto" value="'.$_POST["dateto"].'">';
			?>
			Format: yyyy-mm-dd || Chrome: mm/dd/yyyy
	    </div>
	</div>

	<div class="form-group">
	    <label class="col-xs-6 col-sm-2 control-label">ATA</label>
	    <div class="col-sm-3">
	    	<?php
				echo '<input type="text" name="ata" class="form-control" value="'.$_POST["ata"].'">';
			?>
	    </div>
	    <label class="col-xs-6 col-sm-2 control-label">SUBATA</label>
	    <div class="col-sm-3">
	    	<?php
				echo '<input type="text" name="subata" class="form-control" value="'.$_POST["subata"].'">';
			?>
	    </div>
	</div>

	<div class="form-group">
    <label class="col-sm-2 col-sm-2 control-label">Delay / Pirep</label>
		<div class="col-sm-10">
				<div class="radio">
					<label>
						<?php
							if($_POST["depir"]=="delay"){
								?><input type="radio" name="depir" value="delay" id="radio_delay" onclick="check(this.value)" checked> Delay <br><?php
							}
							else{
								?>
								<input type="radio" name="depir" value="delay" id="radio_delay" onclick="check(this.value)"> Delay <br><?php
							}
							if(empty($_POST['dcp'])){
								$DCP = "";
							}
							else{
								$DCP = $_POST['dcp'];
							}
							$flag_d = 0;
							$flag_c = 0;
							$flag_x = 0;
							for($i = 0; $i < 3; $i++){
								if (empty($DCP[$i])) {
									$DCP[$i] = "";
								}
								if($i == 0 and $DCP[$i] != "d"  and $flag_d == 0){?>
									<label class="checkbox-inline">
										<input type="checkbox" name="dcp[]" value="d" id="cl_delay"> D
									</label><?php
									if($DCP[$i]=="x"){?>
										<label class="checkbox-inline">
											<input type="checkbox" name="dcp[]" value="c" id="cl_cancel"> C
										</label><?php
									}
								}
								else if($i == 1 and $DCP[$i] != "c"  and $flag_c == 0){?>
									<label class="checkbox-inline">
										<input type="checkbox" name="dcp[]" value="c" id="cl_cancel"> C
									</label><?php
								}
								else if($i == 2 and $DCP[$i] != "x"  and $flag_x == 0){?>
									<label class="checkbox-inline">
										<input type="checkbox" name="dcp[]" value="x" id="cl_x"> All
									</label><br><?php
								}
								if($DCP[$i] == "d"){?>
									<label class="checkbox-inline">
										<input type="checkbox" name="dcp[]" value="d" id="cl_delay" checked> D
									</label><?php
									$flag_d = 1;
								}else if($DCP[$i] == "c"){?>
									<label class="checkbox-inline">
										<input type="checkbox" name="dcp[]" value="c" id="cl_cancel" checked> C
									</label><?php
									$flag_c = 1;
								}else if($DCP[$i] == "x"){?>
									<label class="checkbox-inline">
										<input type="checkbox" name="dcp[]" value="x" id="cl_x" checked> All
									</label><br><?php
									$flag_x = 1;
								}
							}
							if(empty($_POST['rtabo'])){
								$RTABO = "";
							}
							else{
								$RTABO= $_POST['rtabo'];
							}
							$flag_a = 0;
							$flag_b = 0;
							$flag_o = 0;
							$flag_g = 0;
							for($i = 0; $i < 4; $i++){
								if (empty($RTABO[$i])) {
									$RTABO[$i] = "";
								}
								if($i == 0 and $RTABO[$i] != "rta"  and $flag_a == 0){?>
									<label class="checkbox-inline">
										<input type="checkbox" name="rtabo[]" value="rta" id="cl_rta"> RTA
									</label><?php

								}else if($i == 1 and $RTABO[$i] != "rtb"  and $flag_b == 0){?>
									<label class="checkbox-inline">
										<input type="checkbox" name="rtabo[]" value="rtb" id="cl_rtb"> RTB
									</label><?php
								}else if($i == 2 and $RTABO[$i] != "rto"  and $flag_o == 0){?>
									<label class="checkbox-inline">
										<input type="checkbox" name="rtabo[]" value="rto" id="cl_rto"> RTO
									</label><?php
								}else if($i == 3 and $RTABO[$i] != "rtg"  and $flag_g == 0){?>
									<label class="checkbox-inline">
										<input type="checkbox" name="rtabo[]" value="rtg" id="cl_rtg"> RTG
									</label><?php
								}
								if($RTABO[$i] == "rta"){?>
									<label class="checkbox-inline">
										<input type="checkbox" name="rtabo[]" value="rta" id="cl_rta" checked> RTA
									</label><?php
									$flag_a = 1;
								}else if($RTABO[$i] == "rtb"){?>
									<label class="checkbox-inline">
										<input type="checkbox" name="rtabo[]" value="rtb" id="cl_rtb" checked> RTB
									</label><?php
									$flag_b = 1;
								}else if($RTABO[$i] == "rto"){?>
									<label class="checkbox-inline">
										<input type="checkbox" name="rtabo[]" value="rto" id="cl_rto" checked> RTO
									</label><?php
									$flag_o = 1;
								}else if($RTABO[$i] == "rtg"){?>
									<label class="checkbox-inline">
										<input type="checkbox" name="rtabo[]" value="rtg" id="cl_rtg" checked> RTG
									</label><?php
									$flag_g = 1;
								}
							}
						?>
					</label>
				</div>
				<div class="radio">
					<label>
						<?php
							if($_POST["depir"]=="pirep"){?>
								<input type="radio" name="depir" value="pirep" id="radio_pirep" onclick="check(this.value)" checked> Techlog <br><?php
							}
							else{?>
								<input type="radio" name="depir" value="pirep" id="radio_pirep" onclick="check(this.value)"> Techlog <br><?php
							}
							if(empty($_POST['pima'])){
								$Pima = "";
							}
							else{
								$Pima= $_POST['pima'];
							}
							$flag_p = 0;
							$flag_m = 0;
							for($i = 0; $i < 3; $i++){
								if (empty($Pima[$i])) {
									$Pima[$i] = "";
								}
								if($i == 0 and $Pima[$i] != "pirep"  and $flag_p == 0){?>
									<label class="checkbox-inline">
										<input type="checkbox" name="pima[]" value="pirep" id="cl_pirep"> Pirep
									</label><?php

								}
								else if($i == 1 and $Pima[$i] != "marep"  and $flag_m == 0){?>
									<label class="checkbox-inline">
										<input type="checkbox" name="pima[]" value="marep" id="cl_marep"> Marep
									</label><?php
								}
								if($Pima[$i] == "pirep"){?>
									<label class="checkbox-inline">
										<input type="checkbox" name="pima[]" value="pirep" id="cl_pirep" checked> Pirep
									</label><?php
									$flag_p = 1;
								}else if($Pima[$i] == "marep"){?>
									<label class="checkbox-inline">
										<input type="checkbox" name="pima[]" value="marep" id="cl_marep" checked> Marep
									</label><?php
									$flag_m = 1;
								}
							}
						?>
					</label>
				</div>
		</div>
  	</div>

	<div class="form-group">
	<label class="col-sm-2 col-sm-2 control-label">Keyword</label>
		<div class="col-sm-10">
			<?php
				echo '<input type="text" name="keyword" class="form-control" value="'.$_POST["keyword"].'">';
			?>
		</div>
	</div>

	<input type="submit" value="Display Report" class="btn btn-default">

</form>

<script type="text/javascript">
	if(document.getElementById("radio_delay").checked)
		check(document.getElementById("radio_delay").value);
	else
		check(document.getElementById("radio_pirep").value);
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
	//confirm input form, if there is null in subject which must not null
	function validateForm(){
	    var cl_dcp = document.form_graph.cl_delay.checked || document.form_graph.cl_cancel.checked||  document.form_graph.cl_x.checked;
	    var datefrom = document.forms["form_graph"]["datefrom"].value;
	    var dateto = document.forms["form_graph"]["dateto"].value;
	      if(document.getElementById("radio_delay").checked){
	      if(datefrom == "" || dateto == ""){
	        alert("Field Datefrom and Dateto must not empty");
	        return false;
	      }
	      else if(cl_dcp == false){
	        alert("Checklist Delay, Cancel or All must not empty");
	        return false;
	      }
	    }
  	}
</script>
