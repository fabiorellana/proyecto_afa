<?php 
include"conexion.php";
$cnn=Conectar();


$es=$_GET['es'];
$id=$_GET['id'];

$sql="update turno set estado = '$es' where rut = $id";
echo $sql;
mysql_query($sql, $cnn);
header("location: ../administrarturno.php");
?>