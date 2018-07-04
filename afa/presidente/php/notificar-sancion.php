<?php 
	include "conexion.php";
$cnn=Conectar();
$idclub=$_POST['idclub'];
	
	//notificacion sanciones
$contarsancion="SELECT count(id)as cantidad, sancion.id from sancion where estado='1' and club =".$idclub."";
$rs=mysql_query($contarsancion, $cnn);
while($row=mysql_fetch_array($rs)){
	$cantidadSancion=$row['cantidad'];
	$id=$row['id'];
	
	
	}
		
	
		?>
         
              
		  <?php if($cantidadSancion>=1){?>
		 <div class="alert alert-danger alert-dismissable">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <a href="versancionados.php?id=<?php echo $id;?>" style='text-decoration:none;color:black'><strong><i class="fa fa-exclamation-circle fa-2x" aria-hidden="true"></i></strong> &nbsp; &nbsp;&nbsp;El comite de disciplina notifico que Tienes Jugadores Sancionados.
  
</a></div>
<?php }?>