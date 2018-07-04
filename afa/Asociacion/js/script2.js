$(document).ready(function(){
	$("#btnGuardar").click(function(){
		//Variables sobre los datos del club
		var nombreclub = $('#txtNombreC').val();
		var series = $('#selSeries').val();
		var direccionclub = $('#txtDireccionT').val();
		//Variables sobre los datos de presidente
		var rutpresidente = $('#txtRutP').val();
		var nombrepresidente = $('#txtNombresP').val();
		var direccionpresidente = $('#txtDireccionP').val();
		//correo presidente usado para registrar primer usuario y contraseña
		var correopresidente = $('#txtCorreoP').val();
		var fonopresidente = $('#txtFonoP').val();
		

		$.ajax({
			url: 'php/registroclub.php',
			method: 'POST',
			data: {nombreclub: nombreclub, series: series, direccionclub: direccionclub,  rutpresidente: rutpresidente, nombrepresidente: nombrepresidente, direccionpresidente: direccionpresidente, correopresidente: correopresidente, fonopresidente: fonopresidente},
			
			beforeSend: function(){
				$('#btnGuardar').val("Enviando informacion hacia a la DB");
			},
			success: function(data){
				alert("guardado");				
				$('#btnGuardar').val("Registrar");
			$('#txtNombreC').val("");
				
		$('#selSeries').val("");
		 $('#txtDireccionT').val("");
		
		//Variables sobre los datos de cuenta
		$('#txtUsuario').val("");
		$('#txtContraseña').val("");
		
		//Variables sobre los datos de presidente
		$('#txtRutP').val("");
		$('#txtNombresP').val("");
		$('#txtDireccionP').val("");
		$('#txtCorreoP').val("");
		$('#txtFonoP').val("");
				
				if(data){
					$("#result").html(data);
				};
			}
		});
    
		
	});
});