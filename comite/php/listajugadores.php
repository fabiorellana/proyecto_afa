
<?php
error_reporting(0);

include "conexion.php";
$cnn=Conectar();
//recupera ajax

$busq=$_POST['con'];
$filtro=$_POST['b'];
echo $filtro;



	
	
//busca con nombre
$sql="SELECT * FROM jugadores WHERE club = ".$filtro."";







$rs=mysql_query($sql,$cnn);
?>
		<table class='table table-responsive table-bordered' align='center' >
				<tr>
				<th> <b> Nombre  </b> </th>
				<th> <b>Fecha de nacimiento</b> </th>
				<th> <b> Club  </b> </th>
				<th> <b> Sancionar </b> </th>
			
            				</tr>
	<?php			
while ($row=mysql_fetch_array($rs)){
	?>
	
 				 <tr>
				<td><?php echo $row['nombre'] ;?></td>
			    <td> <?php echo $row['Fecha_nacimiento'];?></td>
                <td> <?php echo $row['nombre_presidente'];?></td>
				<td> <?php echo $row['direccion']; $estado=$row['estado'];?></td>
				<th> <button type="button" class="btn btn-info" data-toggle="modal" data-target="#dataUpdate"   id="target" data-id="<?php echo $row['id']?>" ><i class='glyphicon glyphicon-edit'></i> Editar</button></th>
				<th> <?php if($estado=='1'){
					echo "<a href='php/desactivarclub.php?es=0&id=".$row['id']."' type='button' class='btn btn-success' ><i class='glyphicon glyphicon-check'></i> Activado</a>";
					}else{
						echo  "<a href='php/desactivarclub.php?es=1&id=".$row['id']."' type='button' class='btn btn-danger' ><i class='glyphicon glyphicon-remove'></i> Desactivado</a>";}?> </th>
				</tr>
  				
 <?php }?>
 
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
                    url: "php/verMclub.php",
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