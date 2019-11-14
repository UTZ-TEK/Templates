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

			case 'verificar':
				get_verificar();
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

			//error_log("MENU ID: $id");

			if($path != '#'){
				$menu .= "<li class=\"navigation\"><a href=\"$path\"><i class=\"$icon\"></i> $nombre</a></li>";
			}else{
				$menu .= "<li class=\"navigation__sub\">
                			<a href=\"\">
                				<i class=\"zmdi zmdi-view-week\"></i> 
                				$nombre
                			</a>
          						<ul>";
          		$query = "
          					SELECT submenu_name, submenu_path
							FROM submenu
							WHERE menu_id = $id
          				 ";
          		$ejecutar_query = mysqli_query($conn, $query);
          		while($fila = mysqli_fetch_array($ejecutar_query)){

          			$p = $fila['submenu_path'];
          			$n = $fila['submenu_name'];
          			//error_log("SUB: $n");
          			$menu .= "<li><a href=\"$p\">$n</a></li>";
          		}
          		$menu .= "		</ul>
            			   </li>";
			}
			

		}

		$jsondata['menu'] = $menu;
		echo json_encode($jsondata);
	}

	function get_verificar(){
		global $conn;
		$jsondata = array();
		//Prueba
		$n = 1;

		


		$jsondata['credencial'] = $n;
		echo json_encode($jsondata);
	}
?>