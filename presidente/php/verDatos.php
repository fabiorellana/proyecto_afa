<?php
$cons = $_POST['b'];
require_once("conexion.php");
$cnn = Conectar();
$sql = "SELECT jugadores.imagen as fotojugador, jugadores.nombre as nomjug, club.nombre as nomclub FROM jugadores, club WHERE (jugadores.club = club.id) and (jugadores.rut = ".$cons.")";
echo $sql;
$rs = mysql_query($sql, $cnn);

while($row = mysql_fetch_array($rs)){

?>
<form method="post" action="">
  <div class="form-group">
    <img src="http://pingendo.github.io/pingendo-bootstrap/assets/placeholder.png" class="img-responsive" width="200" height="100">
    <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $cons; ?>">
  </div>

  <div class="form-group">
    <label for="nombre" class="control-label">Nombres:</label>
    <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $row['nomjug']; ?>" readonly>
  </div>
  <div class="form-group">
    <label for="club" class="control-label">Club:</label>
    <input type="text" class="form-control" id="club" name="club" value="<?php echo $row['nomclub']; ?>" readonly>
  </div>

  <div class="modal-footer">
    <?php } ?>
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <input type="submit" class="btn btn-primary" name="btnEnviar" value="Enviar">
  </div>
</form>