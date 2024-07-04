<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Prime Number Check with PHP</title>
</head>
<body>
	<?php 
		if(isset($_POST['submit'])){
			//print_r($_POST);
		$number = $_POST['number'];	
		echo test_prime($number);
		}


	function test_prime($n) {

	  if ($n==1)
	  {
		return $n . " is not a prime number";
	  }
	  else if($n == 2)
	  {
		return $n . " is a prime number";
	  } else
	  {
		for($x = 2; $x < $n; $x++)
		{
		  if($n % $x === 0)
		  {
			return $n . " is not a prime number";
		  }
		}
		return $n . " is a prime number";  
	  }
	}
		
	 ?>

	<form action="" method="post">
		<input type="text" name="number">
		<input type="submit" name="submit" value="CHECK">
	</form>

</body>
</html>