<!DOCTYPE html>
<html>
<head>
	<title>0307 Using Checkboxes</title>
</head>
<body style="background-color: teal;">
	<h3>Using Checkboxes</h3>	
	<?php 
		$firstname = $_POST['firstname'];

		if(isset($_POST['BA'])) {
			$BA = $_POST['BA'];
		} else {
			$BA = '';
		}

		if(isset($_POST['MA'])) {
			$MA = $_POST['MA'];
		} else {
			$MA = '';
		}

		if (isset($_POST['Phd'])) {
			$Phd = $_POST['Phd'];
		} else {
			$Phd = '';
		}

		print "<p>You are <span style='color: blue'>$firstname</span></p>";
		print "<p>And your degrees are: </p>";
		print "<p><span style='color: red;'>$BA</span></p>";
		print "<p><span style='color: red;'>$MA</span></p>";
		print "<p><span style='color: red;'>$Phd</span></p>";
	 ?>
</body>
</html>