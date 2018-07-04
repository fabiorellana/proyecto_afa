<?php
error_reporting(0);

include "conexion.php";
$cnn=Conectar();
//recupera ajax

$busq=$_POST['c'];



	
	
//busca con nombre
$sql="SELECT * FROM comite WHERE email LIKE '%".$busq."%'";







$rs=mysql_query($sql,$cnn);
?>
		<table class='table table-responsive table-bordered' align='center' align='center'>
				<tr>
				<th> <b> Fono </b> </th>
				<th> <b> Correo </b> </th>
				<th> <b> Rut del Representante </b> </th>
				<th> <b> Modificar </b> </th>
				<th> <b> Desactivar </b> </th>
				</tr>
	<?php			
while ($row=mysql_fetch_array($rs)){
	?>
	
 				 <tr>
				<td><?php echo $row['fono'] ;?></td>
			    <td> <?php echo $row['email'];?></td>
				<td> <?php echo  $row['representante_rut']; $estado=$row['estado'];?></td>
				<th> <button type="button" class="btn btn-info" data-toggle="modal" data-target="#dataUpdate"   id="target" data-id="<?php echo $row['id']?>" ><i class='glyphicon glyphicon-edit'></i> Editar</button></th>
				<th> <?php if($estado=='1'){
					echo "<a href='php/desactivarcomite.php?es=0&id=".$row['id']."' type='button' class='btn btn-success' ><i class='glyphicon glyphicon-check'></i> Activado</a>";
					}else{
						echo  "<a href='php/desactivarcomite.php?es=1&id=".$row['id']."' type='button' class='btn btn-danger' ><i class='glyphicon glyphicon-remove'></i> Desactivado</a>";}?> </th>
				</tr>
  				
 <?php }?>
 
  <div class="modal fade"  id="dataUpdate" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
       
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
            <h4 class="modal-title">Modificar datos comite</h4>
          
          
          <div class="modal-body">
            <p id="tabla2"></p>
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
                    url: "php/verMcomite.php",
                    data: "b="+consulta,
                    beforeSend: function(){
                          //imagen de carga
						
                          $("#tabla2").html("<p align='center'><img src='Archivos/Imagenes/logo afa/ball.gif' /></p>");
                    },
                    error: function(){
                          alert("error petición ajax");
                    },
                    success: function(data){
						                                                     
                          $("#tabla2").empty();
                          $("#tabla2").append(data);
						  
                                                             
                    }
              });
                     
  
  
  
});
