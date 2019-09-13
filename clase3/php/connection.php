<?php
/*
	$host 	= 'localhost';
	$user 	= 'root';
	$pass	= '12345qwert@';

	$link = mysql_connect($host,$user,$pass);

	if(!$link OR !mysql_select_db('class1',$link)){
		echo("Error en con!!!");
		die('No se puede conectar a la DB!');
	}else{
		echo("CONECTADO!");
	}
	*/
	//phpinfo();

	$servername = "localhost";
	$username = "root";
	$password = "";
	$db 	  = "class1";

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