/*Iniciar sesión*/
        $("#login").click(function(){
            //alert("BUMM!");
            verify_credentials();
        });


//Verifica credenciales
function verify_credentials() {   
    var user = $("#usr").val();    
    var pass = $("#pass").val();

    //alert(user);
    $.ajax({
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
            if(r.credencial == 1){
                //alert('Ingreso!');
                window.location.replace("dashboard.php");
            }else{
                alert('No se puede accesar!!!');
            }
        }    
    });
}
