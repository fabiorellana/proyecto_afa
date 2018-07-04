// JavaScript Document
$(document).ready(function() {
	
			$("#aqui").load('php/informes.php');
		
	});
	
	

	
	
	
	$(document).ready(function(){
                                
        var consulta;
                                                                          
        
                                                                                                    
        //comprobamos si se pulsa una tecla
        $("#verclub").click(function(e){
			
         $('select#sel').on('change',function(){
    var consulta = $(this).val();
 

              //obtenemos el texto introducido en el campo de búsqueda
               
                                                                           
              //hace la búsqueda
                                                                                  
              $.ajax({
                    type: "POST",
                    url: "php/listajugadores.php",
                    data: "b="+consulta,
                    beforeSend: function(){
                          //imagen de carga
						
                          $("#verlistasanciones").html("<p align='center'><img src='Archivos/Imagenes/logo afa/ball.gif' /></p>");
                    },
                    error: function(){
                          alert("error petición ajax");
                    },
                    success: function(data){
						                                                     
                          $("#verlistasanciones").empty();
                          $("#verlistasanciones").append(data);
						  
                                                             
                    }
              });
                                                                                  
                                                                           
        });
                                                                   
});
});
	
	
	
	
	
	//notificaciones
	
	
   
	
	
	
	
	
	
	
	
	
	
	