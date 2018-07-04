<?php 
include"conexion.php";
$cnn=Conectar();


$es=$_GET['es'];
$id=$_GET['id'];

$sql="update comite set estado = '$es' where id = $id";
echo $sql;
mysql_query($sql, $cnn);
header("location: ../administrarcomite.php");
?>