<?php 
include "conexion.php";

$cnn=Conectar();
$valor=$_GET['es'];
	

		
		$sql="update estado_traspaso set estado = ".$valor."";


		
	mysql_query($sql, $cnn);
	
	header("location: ../activar_desactivar.php");

	


?>