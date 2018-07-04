<?php 
include "conexion.php";
$cnn=Conectar();
$idclub=$_POST['idclub'];
//contador de notificacion de sanciones
$sql="SELECT count(id) as sancion from sancion where sancion.club=$idclub AND sancion.estado=1";
$rssancion=mysql_query($sql,$cnn);
while($rowsancion=mysql_fetch_array($rssancion)){
	
	$cantidadsancion=$rowsancion['sancion'];
	}
//contador de solicitud de traspaso
$sqltraspaso="select count(traspaso.id) as traspaso from traspaso where traspaso.id_club_destino=$idclub and traspaso.estado=1";
$rstraspaso=mysql_query($sqltraspaso,$cnn);
while($rowtraspaso=mysql_fetch_array($rstraspaso)){
	
	$cantidadsolicitudtraspaso=$rowtraspaso['traspaso'];
	}


//contador solicitud aceptada
	$sqlaceptado="select count(id) as aceptado from traspaso where estado = 0 and id_club_solicitante=$idclub";
	
	$rsnotiaceptado=mysql_query($sqlaceptado, $cnn);
	while($rowaceptado=mysql_fetch_array($rsnotiaceptado)){
		
		$cantidadaceptado=$rowaceptado['aceptado'];
	}


$sumatotal=$cantidadsancion+$cantidadsolicitudtraspaso+$cantidadaceptado;

echo $sumatotal;

?>