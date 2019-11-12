<?php
$query_nombre_sistema = "
							SELECT descripcion
							FROM system_titles
							WHERE razon = 'nombre_sistema'
						";
$ejecutar_query = mysqli_query($conn,$query_nombre_sistema);
$resultado_query = mysqli_fetch_array($ejecutar_query);
$nombre_sistema = $resultado_query['descripcion'];
echo '
<header class="header">
    <div class="navigation-trigger hidden-xl-up" data-sa-action="aside-open" data-sa-target=".sidebar">
        <i class="zmdi zmdi-menu"></i>
    </div>

    <div class="logo hidden-sm-down">
    	<!------------- ESTO TIENE QUE SALIR DE LA BASE DE DATOS DIRECTAMENTE ---------------->
        <h1><a href="main.php">'.$nombre_sistema.'</a></h1>
        <!------------- ESTO TIENE QUE SALIR DE LA BASE DE DATOS DIRECTAMENTE ---------------->
    </div>
    
    <div class="nav col-sm-10 justify-content-end">
	    <div class=" clock hidden-md-down">
	        <div class="time">
	            <span class="hours"></span>
	            <span class="min"></span>
	            <span class="sec"></span>
	        </div>
	    </div>
	</div>
</header>
	 ';
?>