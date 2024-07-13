<?php 

	// $fh = fopen("files/users.txt", 'r');

	// //echo fgets($fh);

	// while(!feof($fh)){
	// 	echo fgets($fh) . "<br>";
	// }

	// fclose($fh);


 ?>

 <?php  

	$fh = fopen("files/users.txt", 'a');

	fwrite($fh, "Hello Everybody");

	fclose($fh);

	$fh = fopen("files/users.txt", 'r');
	while(!feof($fh)){
		echo fgets($fh) . "<br>";
	}

	fclose($fh);

	unlink('files/users.txt');

	print_r($GLOBALS);



?>