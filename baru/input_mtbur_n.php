<?php
	$sql_actype = "SELECT DISTINCT ACtype FROM tbl_master_actype";
	$res_actype = mysqli_query($link, $sql_actype);
?>
<form method="post" style="margin-bottom: 50px" id="form_mtbur" class="form-horizontal style-form" name="form_mtbur" onsubmit="return validateForm()">
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
  		<label class="col-sm-2 col-sm-2 control-label">Part Number</label>
		<div class="col-sm-10">
			<?php
				echo '<input type="text" name="partnumber" class="form-control" value="'.$_POST["partnumber"].'">';
			?>
		</div>
	</div>

	<div class="form-group">
  		<label class="col-xs-6 col-sm-2 control-label">Month from</label>
		<div class="col-sm-3">
			<?php
				echo '<input type="date" name="monthfrom" class="form-control" id="id_monthfrom" value="'.$_POST["monthfrom"].'">';	 
			?>
			Format: yyyy-mm-dd || Chrome: mm/dd/yyyy
		</div>
		<label class="col-xs-6 col-sm-2 control-label">Month to</label>
		<div class="col-sm-3">
			<?php
				echo '<input type="date" name="monthto" class="form-control" id="id_monthto" value="'.$_POST["monthto"].'">'; 
			?>
			Format: yyyy-mm-dd || Chrome: mm/dd/yyyy
		</div>
	</div>

	<input type="submit" value="Display Report" class="btn btn-default">

	<script type="text/javascript">
		//confirm input form, if there is null in subject which must not null
		function validateForm(){
		    var datefrom = document.forms["form_mtbur"]["monthfrom"].value;
		    var dateto = document.forms["form_mtbur"]["monthto"].value;
			if(datefrom == "" || dateto == ""){
				alert("Field Monthfrom and Monthto must not empty");
				return false;
			}
		}
	</script>
</form>