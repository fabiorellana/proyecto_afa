$(document).ready(function(){
	$('#btnGuardar').click(function(){
		//Variables sobre los datos del ingreso de fechas de partidos
		var nro = $('#nfecha').val();
		var calendario = $('#calendario').val();
		var clubl = $('#selClubL').val();
		var clubv = $('#selClubV').val();
		var turno = $('#selTurno').val();
		var maquina = $('#selMaquina').val();

		$.ajax({
			url: 'php/registrofecha.php',
			method: 'POST',
			data: {nro: nro, calendario: calendario, clubl: clubl, clubv: clubv, turno: turno, maquina: maquina},

			beforeSend: function(){
				$('#btnGuardar').val("Enviando informacion hacia a la DB");
			},
			success: function(data){
				$('#btnGuardar').val("Registrar");
				if(data){
					$("#result").html(data);
				};
			}
		});
	});
});