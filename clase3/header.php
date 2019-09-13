<?php
	session_start();
	//error_reporting(E_ERROR | E_WARNING);
	$u = $_SESSION['usuario'];
	//echo "EL usuario es: $u";
	
	if($u == 'no' || $u == ''){ 
		header("location: index.php");
	}

	echo '
	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html"; charset="utf-8" />
		<title>LOG IN UTZ</title>
		<link type="text/css" href="css/bootstrap.min.css" rel="stylesheet">
		<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
	</head>
	<body>
		<div class="container">
		';

?>