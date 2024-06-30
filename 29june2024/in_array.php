<?php 
	$state = "New Jursey";
	$states = ["California", "Hawaii", "Ohio", "New York"];
	if(in_array($state, $states)) {

		echo "Not to worry, $state is smoke-free!";
	}
	else { 
		echo "Not found";
	}

 ?>