<!DOCTYPE html>
<html>
<head>
	<title>0308 Assigning Variables</title>
</head>
<body style="background-color: crimson;">
	<h3>Assigning Variables</h3>	
	<?php 
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$fullname = "$firstname $lastname";
		$age = $_POST['age'];

		$factor = 5;
		$ageplus = $age + $factor;

		$current_year = date('Y');
		$birth_year = $current_year - $ageplus;

		print "<p>You are $fullname ";
		print "and you say your age is $age ";
		print "but I bet you are really $ageplus ";
		print "and were born in $birth_year </p>";


	 ?>

</body>
</html>