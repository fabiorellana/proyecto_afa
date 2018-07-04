<?php


$sql="select * from informe where estado=1";
include "conexion.php";
$cnn=Conectar();

$rs=mysql_query($sql, $cnn);


$cant=mysql_num_rows($rs); 


if($cant>=1){echo "<font color='white'>$cant</font>";}




?>