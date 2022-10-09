<!DOCTYPE html>
<html>
<head>
	<title>0306 Using RadioButtons</title>
</head>
<body style="background-color: salmon;">
	<h3>Using RadioButtons</h3>
	<?php 
		$firstname = $_POST['firstname'];
		$etype = $_POST['etype'];
		print "<p>You are <span style='color: blue;'>$firstname</span> and ";
		print "your employment type is ";
		print "<span style='color: red;'>$etype</span></p>";

	 ?>
</body>
</html>