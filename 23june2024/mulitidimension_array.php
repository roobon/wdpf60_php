<?php 

	$divisions = [
		"Dhaka" => array(
			"Population"=>"10K", 
			"Spot"=>"Buriganga",
			"Food"=>"Singara"
		),
		"Rajshahi" => array(
			"Population"=>"5K", 
			"Spot"=>"Ambagan",
			"Food"=>"Mango"
		),
		"Khulna" => array(
			"Population"=>"3K", 
			"Spot"=>"Sundarban",
			"Food"=>"Honey"
		)
	] ;

	echo $divisions["Khulna"]["Food"];
	echo "<pre>";
	print_r($divisions);
 ?>