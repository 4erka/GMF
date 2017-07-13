<form method="post" style="margin-bottom: 50px" id="form_graph">
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
						A/C Reg
					</th>
					<th>
						<?php
							echo '<input type="text" name="acreg" value="'.$_POST["acreg"].'">';
						?>
					</th>
				</tr>
				<tr>
					<th>
						Date from
					</th>
					<th>
						<?php
							echo '<input type="date" name="datefrom" id="id_datefrom" value="'.$_POST["datefrom"].'">';	 
						?>
					</th>
					<th>
						Date to
					</th>
					<th>
						<?php
							echo '<input type="date" name="dateto" id="id_dateto" value="'.$_POST["dateto"].'">'; 
						?>
					</th>
				</tr>
				<tr>
					<th>
						ATA
					</th>
					<th>
						<?php
							echo '<input type="text" name="ata" value="'.$_POST["ata"].'">'; 
						?>
					</th>
				</tr>
				<tr>
					<th>
						SUBATA
					</th>
					<th>
						<?php
							echo '<input type="text" name="subata" value="'.$_POST["subata"].'">'; 
						?>
					</th>
				</tr>
				<tr>
				<tr>
					<th>
						Delay / Pirep
					</th>
					<th>
						<?php
							if($_POST["depir"]=="delay"){
								?><input type="radio" name="depir" value="delay" id="radio_delay" onclick="check(this.value)" checked> Delay<?php
							}
							else{
								?>
								<input type="radio" name="depir" value="delay" id="radio_delay" onclick="check(this.value)"> Delay <?php
							}
							if($_POST["depir"]=="pirep"){?>
								<input type="radio" name="depir" value="pirep" id="radio_pirep" onclick="check(this.value)" checked> Pirep<?php
							}
							else{?>
								<input type="radio" name="depir" value="pirep" id="radio_pirep" onclick="check(this.value)"> Pirep <?php
							}
						?>
					</th>
				</tr>
				</tr>
					<th>
						Keyword
					</th>
					<th>
						<?php
							echo '<input type="text" name="keyword" value="'.$_POST["keyword"].'">'; 
						?>
					</th>
				</tr>
				<tr>
					<th>
						DCP
					</th>
					<th>
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
									<input type="checkbox" name="dcp[]" value="d"> D <?php
								}
								else if($i == 1 and $DCP[$i] != "c"  and $flag_c == 0){?>
									<input type="checkbox" name="dcp[]" value="c"> C <?php
								}
								else if($i == 2 and $DCP[$i] != "x"  and $flag_x == 0){?>
									<input type="checkbox" name="dcp[]" value="x"> X <?php
								}
								if($DCP[$i] == "d"){?>
									<input type="checkbox" name="dcp[]" value="d" checked> D <?php
									$flag_d = 1;
								}else if($DCP[$i] == "c"){?>
									<input type="checkbox" name="dcp[]" value="c" checked> C<?php
									$flag_c = 1;
								}else if($DCP[$i] == "x"){?>
									<input type="checkbox" name="dcp[]" value="x" checked> X <?php
									$flag_x = 1;
								}
							}
							//print_r($DCP);
						?>
					</th>
				</tr>
			</tbody>
		</table>
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