<?php
    session_start();
    //error_reporting(E_ERROR | E_WARNING);
    $u = $_SESSION['usuario'];
    //echo "EL usuario es: $u";
    //error_log($u);
    if($u == 'no' || $u == ''){ 
        header("location: index.php");
    }

echo "
<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <title>UTZ System</title>

        <!-- Vendor styles -->
        <link rel=\"stylesheet\" href=\"vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css\">
        <link rel=\"stylesheet\" href=\"vendors/bower_components/animate.css/animate.min.css\">
        <link rel=\"stylesheet\" href=\"vendors/bower_components/jquery.scrollbar/jquery.scrollbar.css\">
        <link rel=\"stylesheet\" href=\"vendors/bower_components/fullcalendar/dist/fullcalendar.min.css\">
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
        
        <!-- App styles -->
        <link rel=\"stylesheet\" href=\"css/app.min.css\">
    </head>

    <body data-sa-theme=\"1\">

    	<main class=\"main\">
            <div class=\"page-loader\">
                <div class=\"page-loader__spinner\">
                    <svg viewBox=\"25 25 50 50\">
                        <circle cx=\"50\" cy=\"50\" r=\"20\" fill=\"none\" stroke-width=\"2\" stroke-miterlimit=\"10\" />
                    </svg>
                </div>
            </div>
	 ";
/*************BARRA DE NAVEGACION DE ARRIBA***********/
require 'upper_nav.php';
/*************BARRA DE NAVEGACION DE ARRIBA***********/
?>