<?php 
	session_start();

	if(!isset($_SESSION['email'])){
		header("Location:login.php");
	}
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<h1>This is home page</h1>
<br>
<a href="logout.php">Logout</a>
</body>
</html>