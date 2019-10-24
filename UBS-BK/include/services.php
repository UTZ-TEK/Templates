<?php
	session_start();
	date_default_timezone_set('America/Guatemala');
	require_once('connection.php');

	if(isset($_POST['option'])){
		$option = $_POST['option'];
	
		switch ($option) {
			case 'datos_tabla_main':
				datos_tabla_main();
				break;			
			case 'verificar':
				get_credentials();
				break;			
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

	//Primera llamada a la base de datos para datos tabla main
	function datos_tabla_main(){
		global $conn;
		$jsondata = array();
		$regresar = '';

		$query = "
					SHOW COLUMNS 
					FROM datosTablaMain
					LIKE 'Field'
				 ";
		
		//error_log($query);
		$titulos 	 = mysqli_query($conn,$query);		
 		$regresar	 = '<thead>';

		while ($label    = mysqli_fetch_array($titulos)){		
			$titulos = $labels['Field'];

			$regresar .= '<th>'.$titulos.'</th>';
		}
		$regresar .='</thead>';

		$jsondata['tabla1'] = $regresar;
		echo json_encode($jsondata);
	}

	//Login
	function get_credentials(){
		global $conn;
		$jsondata = array();
		$usuario  = $_POST['u'];
		$password = $_POST['p'];

		//error_log($usuario);
		$query = "
					SELECT count(*) n
					FROM users
					WHERE user_id = '$usuario'
					AND user_password = md5('$password')
				 ";
		//error_log($query);
		$result = mysqli_query($conn,$query);		

		//error_log(print_r($result,true));
		$r      = mysqli_fetch_array($result);//fila de datos
		$n 		= $r['n'];
		//error_log("Numero: $n");

		if($n > 0){
			$query = "
						SELECT 
						user_id,
						user_name,
						user_position,
						user_photo,
						user_rol_id
						FROM users
						WHERE user_id = '$usuario'
					 ";

		$result = mysqli_query($conn,$query);		

		$r      = mysqli_fetch_array($result);
		$nombre = $r['user_name'];
		$position = $r['user_position'];
		$rol_id = $r['user_rol_id'];
		$photo = $r['user_photo'];

		//sessions
		$_SESSION['usuario'] 	= $usuario;
		$_SESSION['nombre']		= $nombre;
		$_SESSION['position'] 	= $position;
		$_SESSION['rol_id'] 	= $rol_id;
		$_SESSION['photo'] 		= $photo;

		//Query para saber rol del usuario
		$r = $_SESSION['rol_id'];

			$query = "
						SELECT rol_name
						FROM system_rol
		                WHERE rol_id = '$r'
					   ";

		$result = mysqli_query($conn,$query);		
		$r      = mysqli_fetch_array($result);

		$rol    = $r['rol_name'];
		$_SESSION['rol'] = $rol;

		}else{
			$_SESSION['usuario'] = 'no';
		}		

		$jsondata['credencial'] = $n;
		echo json_encode($jsondata);
	}


	//barra izquierda
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
					FROM 	menu
				 ";

		$menu .=	'<ul class="navigation">';
		$ejecutar = mysqli_query($conn, $query);
		
		while ($result = mysqli_fetch_array($ejecutar)) {
			$id 	= $result['menu_id'];
			$nombre = $result['menu_name'];
			$path 	= $result['menu_path'];
			$icon 	= $result['menu_icon'];
    
		if($path === "#"){
			$menu .='<li class="navigation__sub">
                <a href='.$path.'><i class="'.$icon.'"></i>'.$nombre.'</a> <ul>';
			
			//Consulta
			$query_submenu	= 	"
									SELECT * 
									FROM submenu
									WHERE menu_id = $id
								";				
			
			$ejecutar_submenus 	= mysqli_query($conn, $query_submenu);
			
				//Repetición
				while ($submenu = mysqli_fetch_array($ejecutar_submenus)){
					$submenu_name 		= $submenu['submenu_name'];
					$submenu_path 		= $submenu['submenu_path'];
					$submenu_icon 		= $submenu['submenu_icon'];
		

            		$menu.='<li><a href='.$submenu_path.' ><i class="'.$submenu_icon.'"></i> '.$submenu_name.'</a></li>';
				}

			$menu.=' </ul>';
		}   
			
		//error_log($icon);
		if($path !== "#") {
			$menu .=' <li class="navigation"><a href='.$path.'><i class="'.$icon.'"></i> '.$nombre.'</a></li>';
		} 
			$menu.='</li>';
		}

		$menu .='</ul>';

		$jsondata['menu'] = $menu;
		echo json_encode($jsondata);
	}

?>