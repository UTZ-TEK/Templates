<?php
    //session_start();
    $nombre     = $_SESSION['nombre'];
    $usuario    = $_SESSION['usuario'];
    $photo      = $_SESSION['photo'];

echo '
<aside class="sidebar">
    <div class="scrollbar-inner">
        <!-----------Esto viene de la DB---------------->
        
        <div class="user" id="datos_user">
            <div class="user__info" data-toggle="dropdown">
                <img class="user__img" src="'.$photo.'" alt="">
                <div>
                    <div class="user__name">'.$nombre.'</div>
                    <div class="user__email">'.$usuario.'</div>
                </div>
            </div>

            <div class="dropdown-menu">
                <a class="dropdown-item" href="">View Profile</a>
                <a class="dropdown-item" href="">Settings</a>
                <a class="dropdown-item" href="logout.php">Logout</a>
            </div>
        </div>

        <ul class="navigation " id="barra_menu"></ul>
        
        <!-----------Esto viene de la DB---------------->

    </div>
</aside>
	 ';
?>