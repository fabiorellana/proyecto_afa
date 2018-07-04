<?php 
$id=$_POST['id'];
$series=$_POST['series'];
$dire=$_POST['Dirección'];
$rut=$_POST['rut'];
$pres=$_POST['Presidente'];
$co=$_POST['Correo'];
$tel=$_POST['Telefono'];

include "conexion.php";
$cnn=Conectar();
$sql="UPDATE `club` SET `cant_series`='$series',`direccion`='$dire',`rut_presidente`='$rut',`nombre_presidente`='$pres',`direccion_presidente`='$dire',`correo_presidente`='$co',`fono_presidente`='$tel' Where id='$id'";
echo $sql;
mysql_query($sql,$cnn);
header("location: ../administrarclub.php");

?>