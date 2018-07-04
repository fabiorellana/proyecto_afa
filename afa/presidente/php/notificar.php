<?php

$id=$_POST['c'];
$sql="select * from sancion where estado='1' AND club =''";
include "conexion.php";
$cnn=Conectar();

$rs=mysql_query($sql, $cnn);


$cant=mysql_num_rows($rs); 


if($cant>=1){echo "<font color='white'>$cant</font>";}


?>