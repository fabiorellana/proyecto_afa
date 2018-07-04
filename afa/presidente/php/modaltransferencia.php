




<?php 
session_start();

include "conexion.php";
$cnn=Conectar();
//id de club envia id de login
$clubsolicitante=$_SESSION['idusuario'];
//consigue id de club
$sqql="select id from club where idlogin = $clubsolicitante";

		
		$ls=mysql_query($sqql,$cnn);
		
		while($roow=mysql_fetch_array($ls)){
			
			$idclubs=$roow['id'];
			
			}

$id=$_POST['b'];

$sql="SELECT jugadores.nombre, club.nombre as club from jugadores INNER JOIN club where jugadores.club=club.id and rut=".$id."";

$rs=mysql_query($sql, $cnn);

while($row=mysql_fetch_array($rs)){

?>

 
  
   <div align="center"> <?php echo "<h3>".$row['nombre']."</h3>";?></div>
   
    <div align="center"> <img src="php/cargarimagen.php?id=<?php echo $id;?>"  class="img img-circle img-responsive" ></div>
   
     <div align="center"><?php echo "<h3>".$row['club']."</h3>";?></div>
     <br />
    

 


<?php $sqlsanciones="select * from sancion where id_jugador=".$id."";

$rssanciones=mysql_query($sqlsanciones, $cnn) or die (mysql_error);
$cont=mysql_num_rows($rssanciones);

if($cont>=1)
{echo '<div class="alert alert-warning">El jugador actualmente presenta sanciones</div>';}
?>

<div class="col-md-offset-5"><a href="enviar_solicitud.php?rut=<?php echo $id?>&club=<?php echo $idclubs ?>" class="btn btn-default btn-lg"> Solicitar</a></div>








<?php }?>