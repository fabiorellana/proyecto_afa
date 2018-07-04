<?php
error_reporting(0);

include "conexion.php";
$cnn=Conectar();
//recupera ajax

$busq=$_POST['c'];



	
	
//busca con nombre
$sql="SELECT informe.id, turno.nombre, informe.informe, informe.estado, informe.fecha FROM informe INNER JOIN turno where informe.rut_turno= turno.rut";







$rs=mysql_query($sql,$cnn);
?>
		<table class='table table-responsive '>
				<tr>
                 <th>Leido</th>
				  <th>#</th>
                  <th>Fecha</th>
                  <th>Turno</th>                  
                   <th>Informe</th>
                  
				</tr>
	<?php			
while ($row=mysql_fetch_array($rs)){
	?>
	
 				 <tr>
                 <?php $es=$row['estado'];?>
                 <td><input name="" type="checkbox" value="" c <?php if($es==1){echo "checked";}else{echo "  ";}?>></td>
				<td><?php echo $row['id'] ;?></td>
                <td> <?php echo $row['fecha'];?></td>
			    <td> <?php echo $row['nombre'];?></td>
              
				
				<th> <button type="button" class="btn btn-info" data-toggle="modal" data-target="#dataUpdate"   id="target" data-id="<?php echo $row['id']?>" ><i class='fa fa-external-link'></i> &nbsp; Ver</button></th>
				<th>  </th>
				</tr>
  				
 <?php }?>
 
  <div class="modal fade"  id="dataUpdate" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
       
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
            <h4 class="modal-title">Ver informe</h4>
          
          
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
                    url: "php/informesmodal.php",
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