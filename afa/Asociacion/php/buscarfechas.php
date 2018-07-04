<?php
include"conexion.php";
$cnn = Conectar();
$id = $_POST["id"];

$sql = "select * from fechas where nrofecha = ".$id."";
$rs = mysql_query($sql, $cnn);

while($row = mysql_fetch_array($rs)){
?>
<form method="post" action="php/registroresultados.php">
  <div class="panel panel-info">
    <div class="panel-heading">
      <h3 class="panel-title">Resultado</h3>
    </div><!--/div panel heading-->
    <div class="panel-body">
      <div class="form-group">
        <div class="col-sm-2">
          <input type="text" name="txtid"  class="hidden" value="<?php echo $id;?>">
          <?php
          $local = $row["id_club_local"];
  
          //consulta nombre del club local por id de consulta anterior
          $sqlo = "select nombre from club where id = ".$local."";
          $rslocal = mysql_query($sqlo, $cnn);

          while($rowlo = mysql_fetch_array($rslocal)){
          ?>
          <label for="txtLocal" class="control-label"> <?php echo $rl = $rowlo["nombre"]; ?></label>
          <?php } ?>
        </div>
        <div class="col-xs-1">
          <input type="text" class="form-control" name="txtLocal" id="txtLocal">
        </div>
        <div class="col-xs-1">
          <input type="text" class="form-control" name="txtVisita" id="txtVisita">
        </div>
        <div class="col-sm-2">
          <?php
          $visita = $row["id_club_visita"];

          //consulta nombre del club visita por id de consulta anterior
          $sqlv = "select nombre from club where id = ".$visita."";
          $rsvisita = mysql_query($sqlv, $cnn);

          while($rowv = mysql_fetch_array($rsvisita)){
          ?>
          <label for="txtVisita" class="control-label"> <?php echo $rv = $rowv["nombre"]; ?></label>
          <?php } ?>
        </div><!--/div col-sm-2-->
      </div><!--/div form-group-->
    </div><!--/div panel body-->
  </div><!--/div panel info-->
  <div class="row">
    <div class="col-md-12 text-center">
      <input type="submit" name="btnGuardar" class="btn btn-info btn-lg" value="Guardar">
    </div>
  </div>
</form>
<?php }//fin while ?>