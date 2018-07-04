<?php 
$rut = $_POST['txtRutT'];
$nombre = $_POST['txtNombresT'];
$apellidos = $_POST['txtApellidosT'];
$dire = $_POST['txtDireccionT'];
$tel = $_POST['txtTelefonoT'];
$co = $_POST['txtCorreoT'];

include "conexion.php";
$cnn=Conectar();
$sql="UPDATE `turno` SET `nombre`='$nombre',`apellidos` = '$apellidos',`direccion`='$dire',`fono`='$tel',`correo`='$co' Where rut='$rut'";
echo $sql;
mysql_query($sql,$cnn);

?>