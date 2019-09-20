<?php
	session_start();
	date_default_timezone_set('America/Guatemala');
	require_once('connection.php');

	if(isset($_POST['option'])){
		$option = $_POST['option'];
	
		switch ($option) {
			case 'obtener_barra_izquierda':
				obtener_barra_izquierda();
				break;
		}
	}

	function nueva(){
		global $conn;
		$jsondata = array();

		#tu codigo aca

		$jsondata['credencial'] = $n;
		echo json_encode($jsondata);
	}

	function obtener_barra_izquierda(){
		global $conn;
		$jsondata 	= array();
		$menu 		= "";

		$query = "
					SELECT 
						menu_id,
					    menu_name,
					    menu_path,
					    menu_icon
					FROM menu
				 ";

		$ejecutar = mysqli_query($conn, $query);
		while ($result = mysqli_fetch_array($ejecutar)) {
			$id 	= $result['menu_id'];
			$nombre = $result['menu_name'];
			$path 	= $result['menu_path'];
			$icon 	= $result['menu_icon'];

			$menu .= "<li class=\"navigation__active\"><a href=\"$path\"><i class=\"$icon\"></i> $nombre</a></li>";

		}

		$jsondata['menu'] = $menu;
		echo json_encode($jsondata);
	}
?>