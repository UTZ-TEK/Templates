<?php
//eliminar
require 'include/connection.php';
$nombre_sistema = '';
$nombre_login   = '';

$query_titles = "
              SELECT *
              FROM system_titles
            ";

$ejecutar_query = mysqli_query($conn,$query_titles);

    while ($resultado_query = mysqli_fetch_array($ejecutar_query)) {
      $razon    = $resultado_query['razon'];
      $titulos  = $resultado_query['descripcion'];
       
        if ($razon==='nombre_login') {
          $nombre_login  = $titulos;
        } if ($razon==='nombre_sistema') {
          $nombre_sistema = $titulos;
        }
    }
  //error_log($nombre_sistema);



echo '
  <!DOCTYPE html>
  <html lang="en">
      <head>
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

          <!-- Vendor styles -->
          <link rel="stylesheet" href="vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css">
          <link rel="stylesheet" href="vendors/bower_components/animate.css/animate.min.css">
          <link rel="stylesheet" href="vendors/bower_components/jquery.scrollbar/jquery.scrollbar.css">

          <!-- App styles -->
          <link rel="stylesheet" href="css/app.min.css">
      </head>

      <body data-sa-theme="1">
          <main class="Login">
            <header class="header">
              <div class="logo hidden-sm-down">
      			  <!------------- ESTO TIENE QUE SALIR DE LA BASE DE DATOS DIRECTAMENTE ---------------->
         			<h1><a href="#">'.$nombre_sistema.'</a></h1>
         			<!------------- ESTO TIENE QUE SALIR DE LA BASE DE DATOS DIRECTAMENTE ---------------->
        		  </div>
              <div class="col-lg-8 nav justify-content-center d-flex-column">
                <h1>'.$nombre_login.'</h1>
              </div>
            </header>
          	<br><br>
          	<br><br>
          	<br><br>
          	<br><br>
          	<br>
              <div class="col-lg-12">
              <!-- Targeta transparente 1-->
              <div class="row justify-content-center">
               <div class="col-lg-5 col-md-10">
                <div class="card">
                 <div class="card-body">
                   <h3 class="card-title">MEMBER LOGIN</h3>
                    <div class="row">
                      <div class="col-lg-9 mx-auto">
                        <div class="auto-form-wrapper">
                          <form method="post" action="upper_nav.php">
                            <br>
                            <div class="form-group">
                              <label class="label">Username</label>
                              <div class="input-group">
                                <input type="text" class="form-control" placeholder="Username" id="usr">
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="label">Password</label>
                              <div class="input-group">
                                <input type="password" class="form-control" placeholder="*********"
                                id="pass">
                              </div>
                            </div>
                            <div class="row-100">
                            	<div class="col-lg-10">
                            		<input class="form-check-input" type="checkbox" value="" id="rememberMe">
  							  	<label class="form-check-label" for="rememberMe">
  							    Remember Me
  							  	</label>
                            	</div>
                            </div>
                            <br>
                            <div class="form-group">
                                <button type="button" id="login" class="btn btn-primary btn-block">Login</button>
                            </div>
                        	  	<br>
                        		<br>
                            <div class="form-group d-flex justify-content-center">
                              <a href="#" class="text-small forgot-password text-blue"><u> Forgot your password?</u></a>
                            </div>              
                          </form>
                        </div>
                      </div>
                    </div>
                  <!--Fin de la tarjeta-->
                  </div>
                 </div>
                </div>
               </div>
              </div>
          </main>

          <!-- App functions and actions -->
          <script src="vendors/bower_components/jquery/dist/jquery.min.js"></script>
          <script src="js/app.min.js"></script>

          <script type="text/javascript" src="js/login.js"></script>

      </body>
  </html>
';
?>