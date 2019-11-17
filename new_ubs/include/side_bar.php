<?php

echo '
<aside class="sidebar">
    <div class="scrollbar-inner">
    	<!-----------------------INFORMACION DEL USUARIO, TAMBIEN DEBEMOS DE OBTENERLA DE LA BASE DE DATOS--------------->
        <div class="user">
            <div class="user__info" data-toggle="dropdown">
                <img class="user__img" src="demo/img/profile-pics/8.jpg" alt="">
                <div>
                    <div class="user__name">Usuario Prueba</div>
                    <div class="user__email">prueba@utz.gt</div>
                </div>
            </div>

            <div class="dropdown-menu">
                <a class="dropdown-item" href="">View Profile</a>
                <a class="dropdown-item" href="">Settings</a>
                <a class="dropdown-item" href="include/logout.php">Logout</a>
            </div>
        </div>
        <!-----------------------INFORMACION DEL USUARIO, TAMBIEN DEBEMOS DE OBTENERLA DE LA BASE DE DATOS--------------->

        <!-----------TODO LO QUE ESTE EN LA BARRA DE AL LADO DEBE VENIR DE LA DB---------------->
        <ul class="navigation" id="barra_menu">
            <li class="navigation__active"><a href="main.php"><i class="zmdi zmdi-home"></i> Home</a></li>

            <li class="navigation__sub">
                <a href=""><i class="zmdi zmdi-view-week"></i> Variants</a>

                <ul>
                    <li><a href="hidden-sidebar.html">Hidden Sidebar</a></li>
                    <li><a href="boxed-layout.html">Boxed Layout</a></li>
                    <li><a href="hidden-sidebar-boxed-layout.html">Boxed Layout with Hidden Sidebar</a></li>
                </ul>
            </li>

            <li><a href="typography.html"><i class="zmdi zmdi-format-underlined"></i> Typography</a></li>
        </ul>
        <!-----------TODO LO QUE ESTE EN LA BARRA DE AL LADO DEBE VENIR DE LA DB---------------->
    </div>
</aside>
	 ';
?>