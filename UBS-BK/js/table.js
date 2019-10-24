datos_tabla_main();

function nueva() {   
   
    $.ajax({
        contentType: "application/x-www-form-urlencoded",
        type: "POST",
        url: "include/services.php",
        data: ({
            option: 'verificar'                   
        }),
        dataType: "json",        
        success: function(r) {
        }    
    });
}  

function datos_tabla_main() {  

    $.ajax({
        contentType: "application/x-www-form-urlencoded",
        type: "POST",
        url: "include/services.php",
        data: ({
            option: 'datos_tabla_main'                   
        }),
        dataType: "json",        
        success: function(r) {      
            //alert('Funciona');                                           
            $('#tabla1').html(r.tabla1);
        }    
    });
} 