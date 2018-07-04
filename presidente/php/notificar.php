<?php

$id=$_POST['c'];
$sql="select * from traspaso where id_club_destino=".$id." AND `activo/inactivo`=0";
include "conexion.php";
$cnn=Conectar();

$rs=mysql_query($sql, $cnn);


$cant=mysql_num_rows($rs); 


if($cant>=1){echo "<font color='white'>$cant</font>";}


?>