$(function(){
	$('#selFecha').on('change', function(){
		var id = $('#selFecha').val();
		var url = 'php/buscarfechas.php';
		$.ajax({
			type:'POST',
			url:url,
			data:'id='+id,
			success: function(data){
				$('#tabla option').remove();
				$('#tabla').append(data);
			}
		});
		return false;
	});
});