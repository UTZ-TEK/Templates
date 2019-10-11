<?php
	session_start();
	date_default_timezone_set('America/Guatemala');
	require_once('connection.php');

	if(isset($_POST['option'])){
		$option = $_POST['option'];
	
		switch ($option) {
			case 'verificar':
				get_credentials();
				break;
			case 'guardar_clientes':
				guardar_clientes();
				break;
			case 'buscar_producto':
				buscar_sku();
				break;
			case 'traer_menu':
				traer_menu();
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

	function traer_menu(){
		global $conn;
		$jsondata = array();
		$menu     = "";
		$flag     = 0;
		$r 		  = $_SESSION['rol'];

		//<button type="button" class="btn btn-primary" id="buscar">Dashboard</button>

		/*$query_menus = "
						SELECT idmenus,nombre_menu,path
						FROM menus
						";*/

		$query_menus = "
						SELECT m.menu_name nombre,m.menu_path path
						FROM permissions p
						INNER JOIN menu m
						ON p.menu_id = m.menu_id
						WHERE p.rol_id = $r
					   ";
		$correr_query = mysqli_query($conn,$query_menus);

		while ($r = mysqli_fetch_array($correr_query)){
			#aca va todo nuestro codigo
			//$idmenu = $r['idmenus'];
			$nombre = $r['nombre'];
			$path   = $r['path'];

			$menu .= "<button type=\"button\" class=\"btn btn-primary\" id=\"buscar\">$nombre</button>";
			//$menu .= "<div class='row' > <h4>$nombre</h4> - <h3>$path</h3> </div> ";

			$flag = 1;
		}

		if($flag == 1){
			$jsondata['botones_menu'] = $menu;
			$jsondata['verificar'] = 1;
		}else{
			$jsondata['verificar'] = 2;
		}

		echo json_encode($jsondata);
	}

	function buscar_sku(){
		global $conn;
		$jsondata = array();

		$sku = $_POST['sku'];

		if($sku == ""){
			$jsondata['error'] = "Por favor ingresar SKU a buscar!!!";
			$jsondata['validation'] = 0;
		}else{
			$query = "
						SELECT nombre
						FROM sku_table
						WHERE sku = '$sku'
					";
			$correr_query = mysqli_query($conn,$query);
			$numero_validador = mysqli_num_rows($correr_query);

			if($numero_validador>0){
				$result = mysqli_fetch_array($correr_query);
				$nombre_producto = $result['nombre'];
				$jsondata['validation'] = 1;
				$jsondata['mensaje'] = "El producto elegido es: $nombre_producto";
			}else{
				$jsondata['error'] = "Producto no encontrado";
				$jsondata['validation'] = 0;
			}
		}

		echo json_encode($jsondata);
	}

	function guardar_clientes(){
		global $conn;
		$jsondata 	= array();
		$nombre 	= $_POST['n'];
		$marca  	= $_POST['m'];
		$servicio 	= $_POST['s']; 

		if($nombre == ""){
			$jsondata['mensaje'] = 'El nombre esta vacio, no se guardo la data!!!';
		}else{
			$query = "
					INSERT INTO info_clientes (nombre_cliente,marca_cliente,servicio)
					VALUES ('$nombre','$marca','$servicio'); 
					";
			if(mysqli_query($conn,$query)){
			$jsondata['mensaje'] = 'Guardado';
			}else{
				$jsondata['mensaje'] = 'No se pudo guardar';
			}
		}

		

		echo json_encode($jsondata);
	}


	function get_credentials(){
		global $conn;
		$jsondata = array();
		$usuario  = $_POST['u'];
		$password = $_POST['p'];

		$query = "
					SELECT count(*) numero_usuarios
					FROM users
					WHERE user_id = '$usuario'
					AND user_password = md5('$password')
					";
		//error_log($query);
		$result = mysqli_query($conn,$query);
		//error_log(print_r($result,true));
		$r      = mysqli_fetch_array($result);
		//error_log(print_r($r,true));
		$n 		= $r['numero_usuarios'];
		//error_log("Numero: $n");
		/*
		$query2 = "
					SELECT user
					FROM users
					";

		$result2 = mysqli_query($conn,$query2);
		
		while($r2      = mysqli_fetch_array($result2)){
			$usuario .= $r2['user'] . ' - ';
		}
		*/

		if($n > 0){
			$query = "
						SELECT 
							user_name,
							user_position,
							user_rol_id
						FROM users
						WHERE user_id = '$usuario'
					 ";
			//error_log($query);
			$result = mysqli_query($conn,$query);
			//error_log(print_r($result,true));
			$r      = mysqli_fetch_array($result);
			$nombre   = $r['user_name'];
			$position = $r['user_position'];
			$rol 	  = $r['user_rol_id'];
			$_SESSION['usuario']  = $nombre;
			$_SESSION['position'] = $position;
			$_SESSION['rol'] = $rol;
		}else{
			$_SESSION['usuario'] = 'no';
		}

		//$jsondata['usuarios'] = $usuario;
		$jsondata['credencial'] = $n;
		echo json_encode($jsondata);
		
	}
?>