<?php

include "conexion.php";
$cnn=Conectar();
//recupera ajax
 $tipo=$_POST['tipo'];
$busq=$_POST['buscar'];

//tabla en caso de busqueda por rut o nombre 
if ($tipo=="rut" or $tipo=="nombre"){
	
	//busca con rut
if($tipo=="rut"){$sql="SELECT jugadores.rut, jugadores.nombre, jugadores.direccion, jugadores.fono, jugadores.fecha_nacimiento, club.nombre as club from jugadores INNER JOIN club where jugadores.club = club.id and rut like '%$busq%' limit 10";}
//busca con nombre
if($tipo=="nombre"){$sql="SELECT jugadores.rut, jugadores.nombre, jugadores.direccion, jugadores.fono, jugadores.fecha_nacimiento, club.nombre as club from jugadores INNER JOIN club where jugadores.club = club.id and jugadores.nombre like '%$busq%' limit 10";

}





$rs=mysql_query($sql,$cnn);
?>
		<table class='table table-responsive table-bordered' align='center'>
				<tr>
				
				<th> <b> Rut </b> </th>
				<th> <b> Nombres </b> </th>
				<th> <b> Direccion </b> </th>
				<th> <b> telefono </b> </th>
				<th> <b> fecha de nacimiento</b> </th>
				<th> <b> Club </b> </th>
                <th> <b> Solicitar </b> </th>
				</tr>
	<?php			
while ($roow=mysql_fetch_array($rs)){
	?>
	
 				<tr>
			
				<td> <?php echo $roow['rut']; ?></td>
				<td> <?php echo $roow['nombre']?></td>
				<td> <?php echo $roow['direccion'] ?></td>
				<td> <?php echo $roow['fono'] ?></td>
			<td> <?php echo $roow['fecha_nacimiento'] ?></td>
				<td><?php echo $roow['club']?></td>
				<th> <button type="button" class="btn btn-info" data-toggle="modal" data-target="#dataUpdate"   id="target" data-id="<?php echo $roow['rut']?>" ><i class='fa fa-eye'></i> Solicitar</button></th>
				</tr>
  				
  <?php
	}echo "</table>";
	
	}
	
	
	//tabla en caso de club
	if ($tipo=="club"){
		
$sql="select jugadores.rut, jugadores.nombre, jugadores.direccion, jugadores.fono, jugadores.club, jugadores.fecha_nacimiento, club.nombre as clubnombre, club.nombre_presidente from jugadores INNER JOIN club WHERE club.id = jugadores.club and club.nombre like '%$busq%' order by club limit 10";


$rs=mysql_query($sql,$cnn);

?>
		<table class='table table-responsive table-bordered' align='center'>
				<tr>
				
				<th> <b> Rut </b> </th>
				<th> <b> Nombres </b> </th>
				<th> <b> Direccion </b> </th>
				<th> <b> telefono </b> </th>
				<th> <b> fecha de nacimiento</b> </th>
				<th> <b> Club </b> </th>
                <th> <b> Solicitar </b> </th>
				</tr>
                <?php 
while ($row=mysql_fetch_array($rs)){
	?>
<tr>
			
				<td> <?php echo $row['rut']; ?></td>
				<td> <?php echo $row['nombre']?></td>
				<td> <?php echo $row['direccion'] ?></td>
				<td> <?php echo $row['fono'] ?></td>
			<td> <?php echo $row['fecha_nacimiento'] ?></td>
				<td><?php echo $row['clubnombre']?></td>
				<th> <button type="button" class="btn btn-info" data-toggle="modal" data-target="#dataUpdate"   id="target" data-id="<?php echo $row['rut']?>" ><i class='fa fa-eye'></i> Solicitar</button></th>
				</tr>
  				
	<?php 
	}
	echo "</table>";
	
	}
	?>
	
	
	





 <div class="modal fade"  id="dataUpdate" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
       
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
            <h2 class="modal-title" align="center">Jugador</h2>
          
          
          <div class="modal-body">
            <p id="modals"></p>
          </div>
         
       
        </div>
      </div>
    </div>
    
     <script>

$('#dataUpdate').on('show.bs.modal', function (event) {
	
  var button = $(event.relatedTarget) // Botón que activó el modal
	
	 var codigo = button.data('id')
	 
	
	 var consulta = codigo;
	 
	  $.ajax({
                    type: "POST",
                    url: "php/modaltransferencia.php",
                    data: "b="+consulta,
                    beforeSend: function(){
                          //imagen de carga
						
                          $("#modals").html("<p align='center'><img src='Archivos/Imagenes/logo afa/ball.gif' /></p>");
                    },
                    error: function(){
                          alert("error petición ajax");
                    },
                    success: function(data){
						                                                     
                          $("#modals").empty();
                          $("#modals").append(data);
						  
                                                             
                    }
              });
                     
  
  
  
});



               
           

           
 
                
            



	
	

                                
</script>