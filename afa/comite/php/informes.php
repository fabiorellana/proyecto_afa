<?php
error_reporting(0);

include "conexion.php";
$cnn=Conectar();
//recupera ajax





	
	
//busca con nombre
$sql="SELECT informe.id, fechas.nrofecha, turno.nombre, turno.apellidos, informe.informe, informe.estado, informe.fecha FROM informe INNER JOIN turno inner join fechas where informe.rut_turno= turno.rut and informe.fecha=fechas.id";







$rs=mysql_query($sql,$cnn);
?>
		<table class='table table-responsive table-striped table-bordered'>
				<tr>
                 <th>Visto</th>				 
                  <th>Fecha</th>
                  <th>Turno</th>                  
                   <th>Informe</th>
                  
				</tr>
	<?php			
while ($row=mysql_fetch_array($rs)){
	?>
	
 				 <tr class=" <?php $es=$row['estado']; if($es==1){echo "alert-success";}?>">
                
                 <td><input name="" class="checkbox" type="checkbox" value=""  <?php if($es==0){echo "checked";}else{echo "  ";}?>></td>
				
                <td> <?php echo  $row['nrofecha']; ?></td>
			    <td> <?php echo $row['nombre'] ." ". $row['apellidos'];?></td>
              
				
				<th> <button type="button" class="btn btn-info" data-toggle="modal" data-target="#dataUpdate"   id="target" data-id="<?php echo $row['id']?>" ><i class='fa fa-external-link'></i> &nbsp; Ver</button></th>
				
				</tr>
  				
 <?php }?>
 
  <div class="modal fade"  id="dataUpdate" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content" id="tabla">
       
   
          
         
       
        </div>
      </div>
    </div>
    
    <script>

$('#dataUpdate').on('show.bs.modal', function (event) {
	
  var button = $(event.relatedTarget) // Botón que activó el modal
	
	 var codigo = button.data('id')
	 
	
	 
	  $.ajax({
                    type: "POST",
                    url: "php/informesmodal.php",
                    data: {b: codigo, desactivar: 0},
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