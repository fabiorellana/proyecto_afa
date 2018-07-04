<?php include "conexion.php";
$cnn=Conectar;
 
$query="SELECT id,nombre FROM club ORDER BY nombre";
$result = mysql_query($query, $cnn)
        or die("Ocurrio un error en la consulta SQL");
mysql_close();
echo '<option value="0">Seleccionar</option>';
while (($fila = mysql_fetch_array($result)) != NULL) {
    echo '<option value="'.$fila["id"].'">'.$fila["nombre"].'</option>';
}
// Liberar resultados
mysql_free_result($result);
 
// Cerrar la conexión
mysql_close($cnn);

?>