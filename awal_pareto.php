<!DOCTYPE html>

<?php
	include "config/connect.php";

	?>

<html>
<head>
	<script src="jquery.js" type="text/javascript"></script>
</head>
<body>

	<?php echo $_GET['actype'] ?>
	<?php
		include 'form_pareto.php';
	 ?>

</body>
</html>
