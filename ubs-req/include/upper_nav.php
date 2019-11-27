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

$nav_bar = "
<header class=\"header\">
    <div class=\"navigation-trigger hidden-xl-up\" data-sa-action=\"aside-open\" data-sa-target=\".sidebar\">
        <i class=\"zmdi zmdi-menu\"></i>
    </div>

    <div class=\"logo hidden-sm-down\">
        <h1><a href=\"$nombre_sistema_link\">$nombre_sistema</a></h1>
    </div>

    <div class=\"top-nav\">
    ";
    
$query_nav_bar =  "
					SELECT `value`,link_value,icon_value
					FROM system_titles
					WHERE description LIKE 'upper_nav_%'
					ORDER BY description ASC;
				  ";
$ejecutar_query_nav_bar = mysqli_query($conn,$query_nav_bar);

while ($row_nav_bar = mysqli_fetch_array($ejecutar_query_nav_bar)){
	$item_name  = $row_nav_bar['value'];
	$link   	= $row_nav_bar['link_value'];
	$icon 		= $row_nav_bar['icon_value']; 

	$nav_bar.= "
				<li>
						<a href=\"$link\">
							<i class=\"$icon\">&nbsp;$item_name</i>
						</a>
    		  	</li>";

}
    	
$nav_bar .=  "
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
//error_log($nav_bar);


echo $nav_bar;
?>