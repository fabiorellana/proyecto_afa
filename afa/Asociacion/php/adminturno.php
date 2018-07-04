
<?php
error_reporting(0);

include "conexion.php";
$cnn=Conectar();
//recupera ajax

$busq=$_POST['b'];



	
	
//busca con nombre
$sql="SELECT * FROM turno WHERE nombre LIKE '%".$busq."%'";







$rs=mysql_query($sql,$cnn);
?>
		<table class='table table-responsive table-bordered' align='center' align='center'>
				<tr>
				<th> <b> Nombre  </b> </th>
				<th> <b> Direccion </b> </th>
                <th> <b> Telefono </b> </th>
                <th> <b> Email </b> </th>
				<th> <b> Modificar </b> </th>
				<th> <b> Desactivar </b> </th>
				</tr>
	<?php			
while ($row=mysql_fetch_array($rs)){
	?>
	
 				 <tr>
				<td><?php echo $row['nombre'] ;?></td>
			    <td> <?php echo $row['direccion'];?></td>
                <td> <?php echo $row['fono'];?></td>
				<td> <?php echo $row['correo']; $estado=$row['estado'];?></td>
				<th> <button type="button" class="btn btn-info" data-toggle="modal" data-target="#dataUpdate"   id="target" data-id="<?php echo $row['rut']?>" ><i class='glyphicon glyphicon-edit'></i> Editar</button></th>
				<th> <?php if($estado=='1'){
					echo "<a href='php/desactivarturno.php?es=0&id=".$row['rut']."' type='button' class='btn btn-success' ><i class='glyphicon glyphicon-check'></i> Activado</a>";
					}else{
						echo  "<a href='php/desactivarturno.php?es=1&id=".$row['rut']."' type='button' class='btn btn-danger' ><i class='glyphicon glyphicon-remove'></i> Desactivado</a>";}?> </th>
				</tr>
  				
 <?php }?>
 
  <div class="modal fade"  id="dataUpdate" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
       
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
            <h4 class="modal-title">Modificar datos Turno</h4>
          
          
          <div class="modal-body">
            <div id="tabla1"></div>
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
                    url: "php/verMturno.php",
                    data: "b="+consulta,
                    beforeSend: function(){
                          //imagen de carga
						
                          $("#tabla1").html("<p align='center'><img src='Archivos/Imagenes/logo afa/ball.gif' /></p>");
                    },
                    error: function(){
                          alert("error petición ajax");
                    },
                    success: function(data){
						                                                     
                          $("#tabla1").empty();
                          $("#tabla1").append(data);
						  
                                                             
                    }
              });
                     
  
  
  
});



               
           

           
 
                
            



	
	

                                
</script>