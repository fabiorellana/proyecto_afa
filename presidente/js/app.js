$(document).ready(function(){
	 function load(page){
    var parametros = {"action":"ajax","page":page};
    $("#loader").fadeIn('slow');
    $.ajax({
      url:'php/buscar_jugador_transferencia.php',
      data: parametros,
       beforeSend: function(objeto){
      $("#loader").html("<img src='loader.gif'>");
      },
      success:function(data){
        $(".outer_div").html(data).fadeIn('slow');
        $("#loader").html("");
      }
    })
  }

  //Extrayendo el id de la ventana modal
 $('#dataJugador').on('show.bs.modal', function (event) {
  		  var button = $(event.relatedTarget) // Botón que activó el modal
  		  var codigo = button.data('id')

		  var consulta = codigo;
		  	  $.ajax({
                    type: "POST",
                    url: "php/verDatos.php",
                    data: "b="+consulta,
                    beforeSend: function(){
                          //imagen de carga
						
                          $("#datos_ajax").html("<p align='center'><img src='archivos/imagen/logo afa/ball.gif' /></p>");
                    },
                    error: function(){
                          alert("error petición ajax");
                    },
                    success: function(data){
						                                                     
                          $("#datos_ajax").empty();
                          $("#datos_ajax").append(data);
						  
                                                             
                    }
              });
	 
});
});
