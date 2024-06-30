<?php 
	// Array

	$fruits = array("Mango", "Orange", "Apple", "Jackfruit");

	foreach ($fruits as $x) {
		echo $x . "<br>";
	}

	echo "<hr>";
	// Associative array
	$students = array("Tanim"=>20, "Saif"=>19, "Abdullah"=>22);

	foreach ($students as $name=>$age) {
		echo "{$name} : {$age} <br>";
	}

 ?>