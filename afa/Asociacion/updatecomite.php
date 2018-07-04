<?php 
$id=$_POST['id'];
$rut=$_POST['txtRut'];
$fono=$_POST['txtFono'];
$correo=$_POST['txtCorreo'];

include "conexion.php";
$cnn=Conectar();
$sql="UPDATE `comite` SET `representante_rut`='$rut',`fono`='$fono',`email`='$correo' Where id='$id'";
echo $sql;
mysql_query($sql,$cnn);
header("location: ../administrarcomite.php");

?>