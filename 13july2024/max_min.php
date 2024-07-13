<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php 
		if(isset($_POST['submit'])){
			 $numbers = $_POST["numbers"];
			 $numArray = explode(",", $numbers);
			 //print_r($numArray);
			 $max = $numArray[0];
			 $min = $numArray[0];
			 
			 for($i = 0; $i<count($numArray); $i++){
			 	if ($numArray[$i]>$max){
			 		 $max = $numArray[$i];
			 	}
			 	if ($numArray[$i]<$min){
			 		 $min = $numArray[$i];
			 	}
			 }
			 echo "Among these numers $numbers<br>";
			 echo "Maximum number: $max" . "<br>Minimum number: $min";
			
		}
	 ?>

	<form method="post">
		<input type="text" name="numbers"><br>
		<input type="submit" name="submit" value="SUBMIT">	
	</form>

</body>
</html>