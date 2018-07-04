$(document).ready(function(){
	$('#btnGuardar').click(function(){
		//Declarando las variables
		var rut = $('#txtRutT').val();
		var nombres = $('#txtNombresT').val();
		var apellidos = $('#txtApellidosT').val();
		var direccion = $('#txtDireccionT').val();
		var telefono = $('#txtTelefonoT').val();
		var email = $('#txtEmailT').val();
		
		$.ajax({
			url: 'php/registroturno.php',
			   async:true,
            method: "POST",
            dataType: "html" ,
            data: {rut: rut, nombres: nombres, apellidos: apellidos, direccion: direccion, telefono: telefono, email: email},
			beforeSend: function(){
				$('#btnGuardar').val("Enviando informacion hacia a la DB");
			},
			success: function(data){
				$('#btnGuardar').val("Registrar");
				if(data){
					$("#result").html(data);
                    
                    alert("se guardaron los datos");
            $('#txtRutT').val('');
              $('#txtNombresT').val('');
		      $('#txtApellidosT').val('');
              $('#txtDireccionT').val('');
		      $('#txtTelefonoT').val('');
		      $('#txtEmailT').val('');
 $('#txtRutT').focus('');
				};
			}
		});
	});
});