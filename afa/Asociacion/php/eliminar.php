<?php include "conexion.php";
$cnn=Conectar();

$id=$_GET['idborrar'];

$sql="delete from fechas where id=".$id."";
mysql_query($sql,$cnn);

header("location: ../ingresofechas.php")

?>