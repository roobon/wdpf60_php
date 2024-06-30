<?php 
	$country = array(
		"Bangladesh"=>"Dhaka",
		"Srilanka"=>"Colombo",
		"Uganda"=>"Kampala",
		"Nepal"=>"Kathmondo",
		"Maldives"=>"Maley"
	);

	while($key = key($country)){
		echo $key . "<br>";
		next($country);
	}


 ?>