<?php 
	session_start();
	
	if  (!isset($_SESSION['username'])) {
    	$_SESSION["logged_in"] = false;
    	$_SESSION["username"] = "";
    	$_SESSION["user_type"] = 99999999;
    	$_SESSION["user_id"] = "XXXXXXX";
    	$_SESSION["lang"] = "en";
	}
	# var_dump($_SESSION);
?>