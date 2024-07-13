<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Email Validation</title>
</head>
<body>
	<h1>Email Validation</h1>
	<?php 
		if(isset($_POST['submit'])){
			$email = $_POST["email"];
			if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
				echo "Not a valid Email";
			} else {
				echo "Email is validated";
			}
		}
	 ?>

	<form method="post">
		<input type="text" name="email" placeholder="Enter email"><br>
		<input type="submit" name="submit" value="submit">
	</form>

</body>
</html>