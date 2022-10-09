<!DOCTYPE html>
<html>
<head>
	<title>0304 Using Select</title>
</head>
<body style="background-color: salmon;">
	<h3>College Report</h3>
	<?php 
		$firstname = $_POST['firstname'];
		$position = $_POST['position'];
		print "<p>You are <span style='color: blue;'> $firstname </span> and ";
		print "your position at the college is: <span style='color: blue;'> $position </span> </p>";	
	 ?>
</body>
</html>