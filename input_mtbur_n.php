<?php
	$sql_actype = "SELECT DISTINCT ACtype FROM tbl_master_actype";
	$res_actype = mysqli_query($link, $sql_actype);
?>

<form method="post" style="margin-bottom: 50px" id="form_mtbur">
	<table>
		<tbody>
			<tr>
				<th>
					A/C Type
				</th>
				<th>
					<select name="actype" style="">
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
				  		<!--
							<option value="volvo" style="">A330-200</option>
						-->
					</select>
				</th>
				<th></th>
				<th></th>
				<th>
					<input type="submit" value="Display Report">
				</th>
				<th>
					<input type="submit" value="Export Excel">
				</th>
				<th>
					<!-- <a href="index.php"><input type="button" value="Export PDF" /></a> -->
					<input type="button" value="Export PDF" onclick="window.print()">
				</th>
			</tr>
			<tr>
				<th>
					Part Number
				</th>
				<th>
					<?php
						echo '<input type="text" name="partnumber" value="'.$_POST["partnumber"].'">';
					?>
				</th>
			</tr>
			<tr>
				<th>
					Month from
				</th>
				<th>
					<?php
						echo '<input type="date" name="monthfrom" id="id_monthfrom" value="'.$_POST["monthfrom"].'">';	 
					?>
				</th>
				<th>
					Month to
				</th>
				<th>
					<?php
						echo '<input type="date" name="monthto" id="id_monthto" value="'.$_POST["monthto"].'">'; 
					?>
				</th>
			</tr>
		</tbody>
	</table>
</form>