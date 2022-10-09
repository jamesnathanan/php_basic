<!DOCTYPE html>
<html>
<head>
	<title>0305 Using Textarea</title>
	<link rel="stylesheet" type="text/css" href="basic.css">
</head>
<body style="background-color: salmon;">
	<h3>Using Textarea</h3>	
	<?php 
		$firstname = $_POST['firstname'];
		$comments = $_POST['comments'];

		print "<p>You are <span style='color: blue;'>$firstname</span></p>";
		// print "<p> and your comment is <span style='color:blue;'>$comments</span> !</p>";

		print "<p>your comments about the college are: </p>";
		print "<textarea rows='7' cols='30' disabled='disabled' class='textdisabled' >";
		print $comments;
		print "</textarea>";
			

	 ?>
</body>
</html>