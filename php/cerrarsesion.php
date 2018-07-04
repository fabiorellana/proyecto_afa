<?php 
session_start();

function cerrar_sesion()
{
	session_destroy();
 	echo  "<script> window.location ='../';</script>";
}
?>