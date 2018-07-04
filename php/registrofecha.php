<?php
include("conexion.php");
$cnn = Conectar();

//Declarando variables
$nro = $_POST['nro'];
$calendario = $_POST['calendario'];
$clubl = $_POST['clubl'];
$clubv = $_POST['clubv'];
$turno = $_POST['turno'];
$maquina = $_POST['maquina'];

//Insertar los datos en SQL
$sql = "insert into fechas value('$nro','$calendario','$clubl','$clubv','$turno','$maquina')";
mysql_query($sql, $cnn);

if ($sql == true) {
	echo "Datos correctos";
} else {
	echo "Datos incorrectos";
}
?>