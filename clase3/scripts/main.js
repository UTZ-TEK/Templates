/*Iniciar sesión*/
initial();



/*Funcion GLOBAL*/
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

/*Funcion GLOBAL*/
function initial() {  
//alert('sirve'); 
   
    $.ajax({ //Inicio del Ajax
        contentType: "application/x-www-form-urlencoded",
        type: "POST",
        url: "php/services.php",
        data: ({
            option: 'traer_menu'                   
        }),
        dataType: "json",        
        success: function(r) {                                                       
            if(r.verificar == 1){
                $("#menu").html(r.botones_menu);
            }else{
                alert('No hay menus!');
            }
     
        }    
    });//Fin del Ajax
} 

function buscar_producto() {   

    var s = $('#sku').val();
   
    $.ajax({ //Inicio del Ajax
        contentType: "application/x-www-form-urlencoded",
        type: "POST",
        url: "php/services.php",
        data: ({
            option: 'buscar_producto',
            sku:    s                   
        }),
        dataType: "json",        
        success: function(datos) {                                                       
            
            if(datos.validation==0){
                alert(datos.error);
            }else{
                $("#nombre_producto").html(datos.mensaje);
            }
     
        }    
    });//Fin del Ajax
}  

 
