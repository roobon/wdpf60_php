<?php  
	function userProfile(){
		$user = ["Jasim", "jasim@gmail.com", "017452369"];
		return $user;
	}

	list($name, $email, $phone)= userProfile();
	echo $name;

?>