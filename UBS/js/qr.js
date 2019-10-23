        crear_qr();

		function crear_qr() {   
			var textqr= "U-192030PL-1523";
			var sizeqr= 90;
			parametros={"textqr":textqr,"sizeqr":sizeqr};

		$.ajax({
		    contentType: "application/x-www-form-urlencoded",
		    type: "POST",
		    url: "qr.php",
		    data: parametros,                  
		    success: function(datos) {                                                       
		        $(".result").html(datos);
		    	}    
			});
		event.preventDefault();
		}