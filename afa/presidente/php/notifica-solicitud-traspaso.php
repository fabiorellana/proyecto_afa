<?php 
include "conexion.php";
$cnn=Conectar();
$idclub=$_POST['idclub'];


//notificacion de traspaso
$sqlnotificatraspaso="SELECT traspaso.id, club.nombre as club, jugadores.nombre as jugadores from traspaso inner join club INNER join jugadores where traspaso.estado=1 and traspaso.id_club_destino=$idclub and traspaso.id_club_solicitante=club.id and traspaso.ID_jugador=jugadores.rut";


$resultado=mysql_query($sqlnotificatraspaso, $cnn);
//comprueba que haya registros
$totalFilas=mysql_num_rows($resultado);  

if($totalFilas>=0){

while($row=mysql_fetch_array($resultado)){
	
	
	
?>
 <a href="versolicitud.php?idsolicitud=<?php echo $row['id'];?>"> 
 <div class="alert alert-info alert-dismissable">
 
  <button type="button" class="close" data-dismiss="alert">&times;</button>
 <font color="black"><i class="fa fa-bell-o fa-2x" aria-hidden="true"></i> &nbsp;&nbsp;¡Nueva solicitud de traspaso de jugadores! El presidente del club <?php  echo $row['club'] ;?> quiere negociar el jugador <?php echo $row['jugadores'] ;?> de tu club. </font>
</div></a>
		
		  
	<?php }}else {echo "<h2> NO tienes notificaciones de traspasos</h2>";}
    