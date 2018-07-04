<?php 
$rut=$_POST['rut'];
$causa=$_POST['causa'];
$fechas=$_POST['fechas'];
$club=$_POST['club'];


include "conexion.php";
$cnn=Conectar();
//Para descontar las fechas al momento de sancionar un jugador
//Primero buscaremos las fechas de los partidos que se jugaron
$consultafecha = "select count(id) as fecha from fechas where id_club_visita = ".$club." and id_club_local ".$club." ";
$rs = mysql_query($cnn, $consultafecha);
while($row = mysql_fetch_array($rs))
{
	$partidos = $row['fecha'];
}//fin while consulta fecha

//Buscaremos la cantidad de sanciones
$consultasancion = "select count(id) as sancion from sancion where ";

$sql="insert into sancion values('','$rut','$club','$causa','$fechas','1')";

mysql_query($sql, $cnn);
header("location: ../informes.php ");





?>