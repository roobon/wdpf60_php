<?php 
	 $fruits = array("apple", "orange", "banana");
	
	echo count($fruits);


	$locations = array("Italy", "Amsterdam", array("Boston","Des Moines"), "Miami", array("Dhaka", "Rajshahi", "Sylhet", "Cumilla"));
	echo "<br>";
	echo count($locations,1);
	echo "<br>";
	echo sizeof($locations);


 ?>