<!DOCTYPE html>
<html>
<head>
	<title>0303 HTML Forms</title>
</head>
<body>
	<h3>Success!</h3>

	<?php
		$firstname = $_POST['firstname'];
		print "<p>Congratulations ! $firstname</p>";
	?>

	<p>You've just written your first PHP program !</p>
</body>
</html>