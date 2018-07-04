<?php
if ($_POST['guardar']=="enviar"){
$rut=$_POST['txt_rut'];
$nombre=$_POST['txt_nombre'];
$direccion=$_POST['txt_direccion'];
$fono=$_POST['txt_fono'];
$fecha_nacimiento=$_POST['txt_fecha_nacimiento'];


$SQL="insert into jugadores values ('$rut','$nombre','$direccion','$fono','$fecha_nacimiento','$idclub','')";


mysql_query($SQL,$cnn);
    shell_exec("java -jar dist/LectorHuellaAfa.jar");
    echo "<script> alert('guardado'); </script>";
header("location:index.php");
                            
}
?>
            