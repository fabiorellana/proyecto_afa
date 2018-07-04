<?php 
$cons=$_POST['b'];
include "conexion.php";
$cnn=Conectar();
$sql="select * from comite where id=".$cons."";

$rs=mysql_query($sql, $cnn);

while($row=mysql_fetch_array($rs)){


?>
<form method="post" action="php/updatecomite.php">
  <div class="form-group">
    <input type="text" name="id"  class="hidden" value="<?php echo $cons;?>">
    <div class="col-md-12">
        <label for="txtRut" class="control-label">Rut del Representante</label>
        <input type="text" class="form-control " id="txtRut" name="txtRut"  disabled value="<?php echo $row['representante_rut'];?>">
			</div>
  </div>

  <div class="form-group">
    <div class="col-md-12">
      <label for="txtFono" class="control-label">Fono</label>
      <input type="text" class="form-control" id="txtFono" name="txtFono" value="<?php echo $row['fono'];?>">
    </div>
  </div>
		 
 	<div class="form-group">
    <div class="col-md-12">
      <label for="txtCorreo" class="control-label">Correo</label>
      <input type="mail" class="form-control" id="txtCorreo" name="txtCorreo" value="<?php echo $row['email'];?>">
    </div>
  </div>
          
  <div class="modal-footer">
    <div class="form-group">
      <?php }?>
        <p>&nbsp;</p>
        
        <p><a class="btn btn-default" data-dismiss="modal">Cancelar</a>
          <input type="submit" value="Modificar" class="btn btn-primary">
        </p>
    </div>
  </div>
</form>