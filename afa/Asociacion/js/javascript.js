
//carga datos desde bd turno
	$(document).ready(function() {
	
			$("#tabla").load('php/adminturno.php');
		
	});
	//busqueda turno
$(document).ready(function(){
                                
        var consulta;
                                                                          
         //hacemos focus al campo de búsqueda
        $("#buscar").focus();
                                                                                                    
        //comprobamos si se pulsa una tecla
        $("#buscar").keyup(function(e){
                                     
              //obtenemos el texto introducido en el campo de búsqueda
              consulta = $("#buscar").val();
                                                                           
              //hace la búsqueda
                                                                                  
              $.ajax({
                    type: "POST",
                    url: "php/adminturno.php",
                    data: "b="+consulta,
                    beforeSend: function(){
                          //imagen de carga
						
                          $("#tabla").html("<p align='center'><img src='Archivos/Imagenes/logo afa/ball.gif' /></p>");
                    },
                    error: function(){
                          alert("error petición ajax");
                    },
                    success: function(data){
						                                                     
                          $("#tabla").empty();
                          $("#tabla").append(data);
						  
                                                             
                    }
              });
                                                                                  
                                                                           
        });
                                                                   
});//Fin documento para buscar Turno
	
	//carga datos desde bd club
	
		$(document).ready(function() {
	
			$("#tablaclub").load('php/adminclub.php');
		
	});

	//busqueda club
$(document).ready(function(){
                                
        var consultaclub;
                                                                          
         //hacemos focus al campo de búsqueda
        $("#buscarclub").focus();
                                                                                                    
        //comprobamos si se pulsa una tecla
        $("#buscarclub").keyup(function(e){
                                     
              //obtenemos el texto introducido en el campo de búsqueda
              consulta = $("#buscarclub").val();
                                                                           
              //hace la búsqueda
                                                                                  
              $.ajax({
                    type: "POST",
                    url: "php/adminclub.php",
                    data: "c="+consulta,
                    beforeSend: function(){
                          //imagen de carga
                          $("#tablaclub").html("<p align='center'><img src='Archivos/Imagenes/logo afa/ball.gif' /></p>");
                    },
                    error: function(){
                          alert("error petición ajax");
                    },
                    success: function(data){                                                    
                          $("#tablaclub").empty();
                          $("#tablaclub").append(data);
                                                             
                    }
              });
                                                                                  
                                                                           
        });
                                                                   
});//Fin documento para buscar Club

  //carga datos desde bd comite
  
    $(document).ready(function() {
  
      $("#tablacomite").load('php/admincomite.php');
    
  });

  //busqueda comite
$(document).ready(function(){
                                
        var consultaclub;
                                                                          
         //hacemos focus al campo de búsqueda
        $("#buscarcomite").focus();
                                                                                                    
        //comprobamos si se pulsa una tecla
        $("#buscarcomite").keyup(function(e){
                                     
              //obtenemos el texto introducido en el campo de búsqueda
              consulta = $("#buscarcomite").val();
			  
			  console.log(consulta);
                                                                           
              //hace la búsqueda
                                                                                  
              $.ajax({
                    type: "POST",
                    url: "php/admincomite.php",
                    data: "c="+consulta,
                    beforeSend: function(){
                          //imagen de carga
                          $("#tablacomite").html("<p align='center'><img src='Archivos/Imagenes/logo afa/ball.gif' /></p>");
                    },
                    error: function(){
                          alert("error petición ajax");
                    },
                    success: function(data){                                                    
                          $("#tablacomite").empty();
                          $("#tablacomite").append(data);
                                                             
                    }
              });
                                                                                  
                                                                           
        });
                                                                   
});//Fin documento para buscar Comite




$("p").click(function(){
    alert("The paragraph was clicked.");
});