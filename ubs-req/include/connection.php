<?php

	$servername = "utztek.com";
	$username = "utztekco_dev";
	$password = "UtzDev2019@";
	$db 	  = "utztekco_ubs_req";

/*
	$servername = "localhost";
	$username = "root";
	$password = "";
	$db 	  = "new_system";
*/
/*
	$servername = "25.61.55.238";
	$username = "remote_root";
	$password = "12345";
	$db 	  = "ubs_req";
*/

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $db);

	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}else{
		//echo "Connected successfully";
		//error_log('TESTING');
	}
	
?> 