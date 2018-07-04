<?php

include "conexion.php";
$cnn=Conectar();
 $equipos=$_POST['valorcombo'];
 $sql="SELECT club.nombre FROM club INNER JOIN fechas WHERE fechas.id_club_local=club.id  and fechas.id=".$equipos."";

 mysql_query($sql,$cnn);
 echo $sql;



?>