obtener_datos_barra_lateral();

function nueva() {   
   
    $.ajax({ //Inicio del Ajax
        contentType: "application/x-www-form-urlencoded",
        type: "POST",
        url: "php/services.php",
        data: ({
            option: 'verificar'                   
        }),
        dataType: "json",        
        success: function(r) {                                                       
            
     
        }    
    });//Fin del Ajax
}  

function obtener_datos_barra_lateral() {  
//alert('Funciona la barra!');

    //$('#barra_menu').html('<li class="navigation__active"><a href="main.php"><i class="zmdi zmdi-home"></i> Home</a></li>'); 
   
    $.ajax({ //Inicio del Ajax
        contentType: "application/x-www-form-urlencoded",
        type: "POST",
        url: "include/services.php",
        data: ({
            option: 'obtener_barra_izquierda'                   
        }),
        dataType: "json",        
        success: function(r) {                                                       
            $('#barra_menu').html(r.menu);
     
        }    
    });//Fin del Ajax
} 