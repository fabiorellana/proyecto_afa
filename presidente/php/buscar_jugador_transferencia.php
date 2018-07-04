<?php
include "conexion.php";
$cnn=Conectar();
//recupera ajax
$tipo=$_POST['tipo'];
$busq=$_POST['buscar'];

//tabla en caso de busqueda por rut o nombre 
if ($tipo=="rut" or $tipo=="nombre"){
	
	//busca con rut
if($tipo=="rut"){$sql="SELECT jugadores.rut as rutjugador, jugadores.nombre as nombrejugador, jugadores.direccion as direccionjugador, jugadores.fono as fonojugador, jugadores.fecha_nacimiento as fechadenacimientojugador, club.nombre as cluborigen from jugadores INNER JOIN club where jugadores.club = club.id and rut like '%$busq%' limit 10";}
//busca con nombre
if($tipo=="nombre"){$sql="SELECT jugadores.rut as rutjugador, jugadores.nombre as nombrejugador, jugadores.direccion as direccionjugador, jugadores.fono as fonojugador, jugadores.fecha_nacimiento as fechadenacimientojugador, club.nombre as cluborigen from jugadores INNER JOIN club where jugadores.club = club.id and jugadores.nombre like '%$busq%' limit 10";

}





$rs=mysql_query($sql,$cnn);
?>
		<table class='table table-responsive table-bordered' align='center'>
				<tr>
				
				<th> <b> Rut </b> </th>
				<th> <b> Nombres </b> </th>
				<th> <b> Direccion </b> </th>
				<th> <b> Telefono </b> </th>
				<th> <b> Fecha de nacimiento</b> </th>
				<th> <b> Club </b> </th>
                <th> <b> Ver Jugador </b> </th>
				</tr>
	<?php			
while ($row=mysql_fetch_array($rs)){
	?>
	
 				<tr>
			
				<td> <?php echo $row['rutjugador']; ?></td>
				<td> <?php echo $row['nombrejugador'];?></td>
				<td> <?php echo $row['direccionjugador']; ?></td>
				<td> <?php echo $row['fonojugador']; ?></td>
				<td> <?php echo $row['fechadenacimientojugador']; ?></td>
				<td><?php echo $row['cluborigen'];?></td>
				<td> <button type="button" class="btn btn-info" data-toggle="modal" data-target="#dataJugador"  id="target" data-id="<?php echo $row['rutjugador']; ?>"><i class="fa fa-eye"></i>Ver</button></td>
				</tr>
  				
  <?php
	}echo "</table>\n";
	
	}else{
	//tabla en caso de club
	}if ($tipo=="club"){
		
$sql="SELECT jugadores.rut as rutjug, jugadores.nombre as nombrejug, club.nombre as clubnombre, club.nombre_presidente as nombrepresidente FROM jugadores INNER JOIN club WHERE club.id = jugadores.club and club.nombre like '%$busq%' order by club limit 10";


$rs=mysql_query($sql,$cnn);
?>
				<table class='table table-responsive table-bordered' align='center'>
				<tr>
				<th> <b> Rut </b> </th>
				<th> <b> Nombre Jugador </b> </th>
				<th> <b> Club</b> </th>
				<th> <b> Nombre Presidente </b> </th>
				<th> <b> Ver Jugador</b> </th>
					
				</tr>;
	<?php  
	while ($row=mysql_fetch_array($rs)){
	?>

	
				<tr>
				<td> <?php echo $row['rutjug'];?> </td>
				<td> <?php echo $row['nombrejug']; ?></td>
				<td> <?php echo $row['clubnombre']; ?> </td>
				<td> <?php echo $row['nombrepresidente']; ?> </td>
				<td> <button type="button" class="btn btn-info" data-toggle="modal" data-target="#dataJugador" id="target" data-id="<?php echo $row['rutjug']; ?>"><i class="fa fa-eye" aria-hidden="true"></i>Ver</button></td>
				</tr>
  				
	<?php
	}
	echo "</table>\n";
	
	}
	
	
	
	


?> 
<div class="modal fade" id="dataJugador" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Datos Jugador</h4>
      </div>
      <div class="modal-body">
      <div id="datos_ajax"></div>
    </div>
  </div>
</div>
<script type="text/javascript">
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
</script> 