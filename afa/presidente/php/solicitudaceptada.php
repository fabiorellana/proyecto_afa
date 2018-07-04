 <?php  
 include "conexion.php";
$cnn=Conectar();
$idclub=$_POST['idclub'];

	//notificacion solicitud aceptada
	$sqlaceptado="select * from traspaso where estado = 0 and id_club_solicitante=$idclub";
	
	$rsnotiaceptado=mysql_query($sqlaceptado, $cnn);
	while($rowaceptado=mysql_fetch_array($rsnotiaceptado)){
		
		//nombre jugador solicitud aceptada
		$jugador="select nombre from jugadores where rut=".$rowaceptado['ID_jugador']."";
	$rsjugador=mysql_query($jugador, $cnn);
	while($rowjugadoraceptado=mysql_fetch_array($rsjugador)){
		
		//sqlnombreclubdeorigen
	$cluborigen="select nombre from club where id=".$rowaceptado['id_club_destino']."";
	$rsclub=mysql_query($cluborigen, $cnn);
	while($rowclub=mysql_fetch_array($rsclub)){
	?>  
    
     <div class="alert alert-success alert-dismissable">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <a href="versolicitudaceptada.php?id=<?php echo $rowaceptado['id']?>" style='text-decoration:none;color:black'><strong><i class="fa fa-check fa-2x" aria-hidden="true"></i></strong> &nbsp; &nbsp;&nbsp;El presidente del club: <?php echo $rowclub['nombre']?>  Acepto la solicitud de traspaso por el Jugador: <?php echo $rowjugadoraceptado['nombre']?>
  
</a></div><?php }}}?>