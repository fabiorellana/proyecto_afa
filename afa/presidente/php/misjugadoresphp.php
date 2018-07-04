
<?php
session_start();
$id_club=$_SESSION['idclub'];
error_reporting(0);

include "conexion.php";
$cnn=Conectar();
//recupera ajax

$busq=$_POST['c'];



	
	
//busca con nombre
$sql="SELECT * FROM jugadores WHERE club = '".$id_club."'";








$rs=mysql_query($sql,$cnn);
?>
		<table class='table table-responsive table-bordered' align='center' align='center'>
				<tr>
				<th> <b> Rut </b> </th>
				<th> <b> Nombre</b> </th>
				<th> <b> Direccion </b> </th>
				<th> <b> Telefono </b> </th>
                <th> <b> Fecha de nacimiento </b> </th>
				<th> <b> Ver </b> </th>
				<th> <b> Estado </b> </th>
				</tr>
	<?php			
while ($row=mysql_fetch_array($rs)){
	?>
	
 				 <tr>
				<td><?php echo $row['rut'] ;?></td>
			    <td> <?php echo $row['nombre'];?></td>
                <td> <?php echo $row['direccion'];?></td>
                 <td> <?php echo $row['fono'];?></td>
				<td> <?php echo $row['fecha_nacimiento']; $row['estado'];?></td>
				<td> <button type="button" class="btn btn-info" data-toggle="modal" data-target="#dataUpdate"   id="target" data-id="<?php echo $row['rut']?>" ><i class="fa fa-paper-plane-o" aria-hidden="true"></i>&nbsp;Ver</button></th>
				<td> <?php
				
				//comprovar jugador activo
				$sqlestado="select estado from sancion where id_jugador=".$row['rut']."";
				$resultado=mysql_query($sqlestado, $cnn);
				while($rowresultado=mysql_fetch_array($resultado)){
				$estado=$rowresultado['estado'];
				
				 if($estado=='1'){
					echo "<button type='button' class='btn btn-success' ><i class='fa fa-check-square-o' aria-hidden='true'></i> Activado</button>";
					}else{
						echo  "<button type='button' class='btn btn-danger' ><i class='fa fa-times' aria-hidden='true'></i> Sancionado</button>";}?> 
                        
                         <?php }?></td>
				 </tr>
  			<?php	}?>


 
  <div class="modal fade"  id="dataUpdate" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
       
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
            <h4 class="modal-title">Modificar datos club</h4>
          
          
          <div class="modal-body">
            <p id="tabla"></p>
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
                    url: "php/verMjugador.php",
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



               
           

           
 
                
            



	
	

                                
</script>