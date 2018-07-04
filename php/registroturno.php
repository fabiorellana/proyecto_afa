<?php
include("conexion.php");
$cnn = Conectar();

$rut = $_POST['rut'];
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];

//Realizar el registro
$sql = "insert into turno values('$rut','$nombres','$apellidos','$direccion','$telefono','$email','')";
mysql_query($sql,$cnn);

if($sql == true)
{
	echo "Datos Correctos";
}
else
{
	echo "Datos Incorrectos";
}
?>