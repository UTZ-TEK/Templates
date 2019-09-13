/*Iniciar sesión*/
    $("#btn_log").click(function(){
    	//alert('boton');
        verify_credentials();
    });


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

/*Verifica credenciales*/
function verify_credentials() {   
    var user = $("#usr").val();    
    var pass = $("#pass").val();
    $.ajax({ //Inicio del Ajax
        contentType: "application/x-www-form-urlencoded",
        type: "POST",
        url: "php/services.php",
        data: ({
            u: user,
            p: pass, 
            option: 'verificar'                   
        }),
        dataType: "json",        
        success: function(r) {                                                       
            /*Mostramos el main*/
            if(r.credencial == 1){
            	alert('Ingreso!');
            	//$('#mostrar').html(r.usuarios);
                window.location.replace("main.php");
            }else{
            	alert('No se puede accesar!!!');
            }
        }    
    });//Fin del Ajax
}  
 
