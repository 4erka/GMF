<?php
	include'config/connect.php';

	$sql_actype = "SELECT DISTINCT ACtype FROM tbl_master_actype";
	$res_actype = mysqli_query($link, $sql_actype);
?>

<form action="graph.php" method="post" class="form-horizontal style-form" style="margin-bottom: 50px" id="form_graph">

	<div class="form-group">
	  	<label class="col-sm-2 col-sm-2 control-label">A/C Type</label>
	    <div class="col-sm-10">
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
	</div>

	<div class="form-group">
	    <label class="col-sm-2 col-sm-2 control-label">A/C Reg</label>
	    <div class="col-sm-10">
	    	<?php
				echo '<input type="text" name="acreg" class="form-control" value="'.$_POST["acreg"].'">';
			?>
	    </div>
	</div>
			
	<div class="form-group">
	    <label class="col-sm-2 col-sm-2 control-label">Date from</label>
	    <div class="col-sm-10">
	    	<?php
				echo '<input type="date" name="datefrom" class="form-control" id="id_datefrom" value="'.$_POST["datefrom"].'">';
			?>
	    </div>
	</div>

	<div class="form-group">
	    <label class="col-sm-2 col-sm-2 control-label">Date to</label>
	    <div class="col-sm-10">
	    	<?php
				echo '<input type="date" name="dateto" class="form-control" id="id_dateto" value="'.$_POST["dateto"].'">';
			?>
	    </div>
	</div>

	<div class="form-group">
	    <label class="col-sm-2 col-sm-2 control-label">ATA</label>
	    <div class="col-sm-10">
	    	<?php
				echo '<input type="text" name="ata" class="form-control" value="'.$_POST["ata"].'">';
			?>
	    </div>
	</div>

	<div class="form-group">
	    <label class="col-sm-2 col-sm-2 control-label">SUBATA</label>
	    <div class="col-sm-10">
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
								?><input type="radio" name="depir" value="delay" id="radio_delay" onclick="check(this.value)" checked> Delay<?php
							}
							else{
								?>
								<input type="radio" name="depir" value="delay" id="radio_delay" onclick="check(this.value)"> Delay <?php
							}  
						?>
					</label>
				</div>
				<div class="radio">
					<label>
						<?php  
							if($_POST["depir"]=="pirep"){?>
								<input type="radio" name="depir" value="pirep" id="radio_pirep" onclick="check(this.value)" checked> Pirep<?php
							}
							else{?>
								<input type="radio" name="depir" value="pirep" id="radio_pirep" onclick="check(this.value)"> Pirep <?php
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

	<div class="form-group">
	    <label class="col-sm-2 col-sm-2 control-label">DCP</label>
		<div class="col-sm-10">
					<?php
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
									<input type="checkbox" name="dcp[]" value="d"> D 
								</label><?php

							}
							else if($i == 1 and $DCP[$i] != "c"  and $flag_c == 0){?>
								<label class="checkbox-inline">
									<input type="checkbox" name="dcp[]" value="c"> C 
								</label><?php
							}
							else if($i == 2 and $DCP[$i] != "x"  and $flag_x == 0){?>
								<label class="checkbox-inline">
									<input type="checkbox" name="dcp[]" value="x"> X 
								</label><?php
							}
							if($DCP[$i] == "d"){?>
								<label class="checkbox-inline">
									<input type="checkbox" name="dcp[]" value="d" checked> D 
								</label><?php
								$flag_d = 1;
							}else if($DCP[$i] == "c"){?>
								<label class="checkbox-inline">
									<input type="checkbox" name="dcp[]" value="c" checked> C
								</label><?php
								$flag_c = 1;
							}else if($DCP[$i] == "x"){?>
								<label class="checkbox-inline">
									<input type="checkbox" name="dcp[]" value="x" checked> X 
								</label><?php
								$flag_x = 1;
							}
						}
						//print_r($DCP);
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
		depir = "graph_" + depir + ".php";
	    document.getElementById("form_graph").action=depir;
	}
</script>
