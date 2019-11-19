<?php
$query_nombre_sistema = "
							SELECT value, link_value
							FROM system_titles
							WHERE description = 'system_name'
						";
$ejecutar_query = mysqli_query($conn,$query_nombre_sistema);
$resultado_query = mysqli_fetch_array($ejecutar_query);
$nombre_sistema = $resultado_query['value'];
$nombre_sistema_link = $resultado_query['link_value'];
echo "
<header class=\"header\">
    <div class=\"navigation-trigger hidden-xl-up\" data-sa-action=\"aside-open\" data-sa-target=\".sidebar\">
        <i class=\"zmdi zmdi-menu\"></i>
    </div>

    <div class=\"logo hidden-sm-down\">
        <h1><a href=\"$nombre_sistema_link\">$nombre_sistema</a></h1>
    </div>

    <div class=\"top-nav\">
    		<li >
				<a href=\"\">
					<i class=\"zmdi zmdi-assignment\">&nbsp;TEST</i>
				</a>
    		</li>
    		<li >
				<a href=\"\">
					<i class=\"zmdi zmdi-assignment-check\">&nbsp;TEST</i>
				</a>
    		</li>
    </div> 
    
    <div class=\"nav justify-content-end\">
	    <div class=\" clock hidden-md-down\">
	        <div class=\"time\">
	            <span class=\"hours\"></span>
	            <span class=\"min\"></span>
	            <span class=\"sec\"></span>
	        </div>
	    </div>
	</div>
</header>
	 ";
?>