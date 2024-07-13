<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Country Sorting</title>
</head>
<body>
	<h1>Country and Capital where country wise sorting</h1>
	<?php  
		$countries = [
			"Bangaldesh"=>"Dhaka",
			"Srilanka"=>"Colombo",
			"Uganda"=>"Kampala",
			"China"=>"Beijing",
			"Hungery"=>"Budapest",
			"Japan"=>"Tokoyo"
		];
		 
		foreach($countries as $country=>$capital){
		 	echo "$country -> $capital <br>";
		 }
		 echo "<hr>";
		 ksort($countries);

		 foreach($countries as $country=>$capital){
		 	echo "$country -> $capital <br>";
		 }

		// echo "<pre>";
		// print_r($countries);

	?>
</body>
</html>