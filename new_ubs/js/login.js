/*Iniciar sesión*/
    $("#btn_log").click(function(){
    	//alert('boton');
        verify_credentials();
    });


    /*Verifica credenciales*/
function verify_credentials() {   
    var user = $("#user").val();    
    var pass = $("#pass").val();
    //alert(user + pass);
   $.ajax({ //Inicio del Ajax
        contentType: "application/x-www-form-urlencoded",
        type: "POST",
        url: "include/services.php",
        data: ({
            u: user,
            p: pass, 
            option: 'verificar'                   
        }),
        dataType: "json",        
        success: function(r) {  
       // alert(r.credencial);                                                     
           // Mostramos el main
            if(r.credencial == 1){
            	//alert('Ingreso!');
            	

               window.location.replace("dashboard.php");
            }else{
            	alert('No se puede accesar!!!');
            }
        }    
    });//Fin del Ajax
}  