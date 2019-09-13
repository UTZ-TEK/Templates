<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html"; charset="utf-8" />
	<title>LOG IN UTZ</title>
	<link type="text/css" href="css/bootstrap.min.css" rel="stylesheet">
	<script type="text/javascript" src='js/jquery-3.4.1.min.js'></script>
</head>
<body>
	<div class="container">
		LOG IN 

		<div class="form-group row">
			<div class="col-xs-4">
				<label for="usr">Name:</label>
		  		<input type="text" class="form-control" id="usr">
			</div>
		</div>
		<div class="form-group row">
			<div class="col-xs-4">
				<label for="pass">Password:</label>
		  		<input type="text" class="form-control" id="pass">
			</div>
		</div>
		<div id='mostrar'>
			
		</div>
		<button type="button" class="btn btn-primary"
		id="btn_log">Log IN</button>
	</div>
	<script type="text/javascript" src='scripts/login.js'></script>
</body>