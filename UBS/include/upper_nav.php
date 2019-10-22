<?php
$nombre     = $_SESSION['nombre'];
$position   = $_SESSION['position'];
$usuario    = $_SESSION['usuario'];
$photo      = $_SESSION['photo'];

//Query nombres del sistema
require 'include/connection.php';
$nombre_sistema       = '';
$name_windows_general = '';


$query_titles = "
                  SELECT *
                  FROM system_titles
                ";

$ejecutar_query = mysqli_query($conn,$query_titles);

    while ($resultado_query = mysqli_fetch_array($ejecutar_query)) {
      $razon    = $resultado_query['razon'];
      $titulos  = $resultado_query['descripcion'];
       
        if ($razon==='name_windows_general') {
          $name_windows_general  = $titulos;
        } if ($razon==='nombre_sistema') {
          $nombre_sistema = $titulos;
        }
    }


echo '
<header class="header">
    <div class="navigation-trigger hidden-xl-up" data-sa-action="aside-open" data-sa-target=".sidebar">
        <i class="zmdi zmdi-menu"></i>
    </div>

    <div class="logo hidden-sm-down">
    	<!------------- ESTO TIENE QUE SALIR DE LA BASE DE DATOS DIRECTAMENTE ---------------->
        <h1><a href="dashboard.php">'.$nombre_sistema.'</a></h1>
        
        <!------------- ESTO TIENE QUE SALIR DE LA BASE DE DATOS DIRECTAMENTE ---------------->
    </div>
    
    <!--Deje esto asi, porque es lo que quiero que realice el sistema, solo que no se bien como y donde cambiarlo-->
    <form class="search">
      <div class="nav justify-content-center"
        <div class="search__inner">
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            &nbsp; &nbsp; &nbsp; 
            <h4>'.$nombre.' / '.$position.'</h4>     
        </div>
      </div> 
    </form>

    <ul class="top-nav">

        <li class="dropdown">
            <a href="" data-toggle="dropdown" class="top-nav__notify"><i class="zmdi zmdi-email"></i></a>
            <div class="dropdown-menu dropdown-menu-right dropdown-menu--block">
                <div class="dropdown-header">
                     Messages

                <div class="actions">
                    <a href="messages.html" class="actions__item zmdi zmdi-plus"></a>
                </div>
            </div>

            <div class="listview listview--hover">
                <a href="" class="listview__item">
                    <img src="'.$photo.'" class="listview__img" alt="">

                    <div class="listview__content">
                        <div class="listview__heading">
                            '.$usuario.' <small>12:01 PM</small>
                        </div>
                        <p>Cum sociis natoque penatibus et magnis dis parturient montes</p>
                    </div>
                </a>
            </div> 
        </li>

        <li class="dropdown top-nav__notifications">
            <a href="" data-toggle="dropdown" class="top-nav__notify">
                <i class="zmdi zmdi-notifications"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-menu--block">
                <div class="dropdown-header">
                    Notifications

                    <div class="actions">
                        <a href="" class="actions__item zmdi zmdi-check-all" data-sa-action="notifications-clear"></a>
                    </div>
                </div>

                <div class="listview listview--hover">
                    <div class="listview__scroll scrollbar-inner">
                        <a href="" class="listview__item">
                            <img src="'.$photo.'" class="listview__img" alt="">

                            <div class="listview__content">
                                <div class="listview__heading">'.$usuario.'</div>
                                <p>Cum sociis natoque penatibus et magnis dis parturient montes</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </li>

        <li class="dropdown">
            <a href="" data-toggle="dropdown" class="top-nav__notify"><i class="zmdi zmdi-settings"></i></a>
            <div class="dropdown-menu dropdown-menu-right dropdown-menu--block">
                <div class="dropdown-header">
                     Settings

            </div>

            <div class="listview listview--hover">
                <a href="" class="listview__item">
                    <img src="'.$photo.'" class="listview__img" alt="">

                    <div class="listview__content">
                        <div class="listview__heading">
                            '.$usuario.' <p>My Profile Info</p>
                        </div>
                    </div>
                </a>
            </div> 
        </li>

        <li class="dropdown hidden-xs-down">
            <a href="" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>

            <div class="dropdown-menu dropdown-menu-right">
                <div class="dropdown-item theme-switch">
                    Theme Switch

                    <div class="btn-group btn-group--colors mt-2 d-block" data-toggle="buttons">
                        <label class="btn active border-0" style="background-color: #273C5B"><input type="radio" value="1" autocomplete="off" checked></label>
                        <label class="btn border-0" style="background-color: #772036"><input type="radio" value="2" autocomplete="off"></label>
                        <label class="btn border-0" style="background-color: #174042"><input type="radio" value="3" autocomplete="off"></label>
                        <label class="btn border-0" style="background-color: #383844"><input type="radio" value="4" autocomplete="off"></label>
                        <label class="btn border-0" style="background-color: #49423F"><input type="radio" value="5" autocomplete="off"></label>

                        <br>

                        <label class="btn border-0" style="background-color: #5e3d22"><input type="radio" value="6" autocomplete="off"></label>
                        <label class="btn border-0" style="background-color: #234d6d"><input type="radio" value="7" autocomplete="off"></label>
                        <label class="btn border-0" style="background-color: #3b5e5e"><input type="radio" value="8" autocomplete="off"></label>
                        <label class="btn border-0" style="background-color: #0a4c3e"><input type="radio" value="9" autocomplete="off"></label>
                        <label class="btn border-0" style="background-color: #7b3d54"><input type="radio" value="10" autocomplete="off"></label>
                    </div>
                </div>
                <a href="" class="dropdown-item" data-sa-action="fullscreen">Fullscreen</a>
                <a href="" class="dropdown-item">Clear Local Storage</a>
            </div>
        </li>
    </ul>

    <div class="clock hidden-md-down">
        <div class="time">
            <span class="hours"></span>
            <span class="min"></span>
            <span class="sec"></span>
        </div>
    </div>
</header>
	 ';
?>