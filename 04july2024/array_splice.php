<?php 
	 $states = array("Alabama", "Alaska", "Arizona", "Arkansas",
 "California", "Connecticut");
	 echo "<pre>";
	 print_r($states);

	 $subset = array_splice($states, 2, 2, array("New York", "Florida"));
	 //$subset = array_splice($states, 1, -1, array("New York", "Florida"));
 
 	echo "<hr>";
 	print_r($states);

 	 echo "<hr>";
	 print_r($subset);


 ?>