<?php
	$sql_actype = "SELECT DISTINCT ACtype FROM tbl_master_actype";
	$res_actype = mysqli_query($link, $sql_actype);
?>

<form action="mtbur.php" method="post" class="form-horizontal style-form" style="margin-bottom: 50px" id="form_mtbur" name="form_mtbur" onsubmit="return validateForm()">
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
			<input type="text" name="partnumber" class="form-control">
		</div>
	</div>

	<div class="form-group">
  		<label class="col-xs-6 col-sm-2 control-label">Month from</label>
		<div class="col-sm-3">
			<input type="date" name="monthfrom" id="id_monthfrom" class="form-control">
			Format: yyyy-mm-dd || Chrome: mm/dd/yyyy
		</div>
		<label class="col-xs-6 col-sm-2 control-label">Month to</label>
		<div class="col-sm-3">
			<input type="date" name="monthto" id="id_monthto" class="form-control">
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