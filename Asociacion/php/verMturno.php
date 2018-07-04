<?php 
$cons=$_POST['b'];
include_once "conexion.php";
$cnn=Conectar();
$sql="select * from turno where rut=".$cons."";

$rs=mysql_query($sql, $cnn);

while($row=mysql_fetch_array($rs)){


?>
<form method="post" action="php/updateturno.php">
  <div class="form-group">
    <div class="col-md-12">
      <label for="txtRutT" class="control-label">Rut </label>
      <input type="text" class="form-control " id="txtRutT" name="txtRutT"  disabled value="<?php echo $cons;?>" required maxlength="20">
    </div>
  </div>

  <div class="form-group">
    <div class="col-md-12">
        <label for="txtNombresT" class="control-label">Nombres </label>
        <input type="text" class="form-control " id="txtNombresT" name="txtNombresT"   value="<?php echo $row['nombre'];?>" required maxlength="20">
    </div>
  </div>
  <div class="form-group">
    <div class="col-md-12">
      <label for="txtApellidosT" class="control-label">Apellidos</label>
      <input type="text" class="form-control" id="txtApellidosT" name="txtApellidosT" value="<?php echo $row['apellidos'];?>" required maxlength="20">
    </div>
  </div>
  <div class="form-group">
    <div class="col-md-12">
        <label for="txtDireccionT" class="control-label">Dirección</label>
        <input type="text" class="form-control" id="txtDireccionT" name="txtDireccionT" value="<?php echo $row['direccion'];?>"  required maxlength="45">
    </div>
  </div>        
          
           
	<div class="form-group">
    <div class="col-md-12">
        <label for="txtTelefonoT" class="control-label">Telefono</label>
        <input type="text" class="form-control" id="txtTelefonoT" name="txtTelefonoT" value="<?php echo $row['fono'];?>" required maxlength="90">
    </div>
  </div>
      
		
  <div class="form-group">
    <div class="col-md-12">
        <label for="txtCorreoT" class="control-label">Correo</label>
        <input type="email" class="form-control" id="txtCorreoT" name="txtCorreoT" value="<?php echo $row['correo'];?>" required maxlength="10">
		</div>
  </div>
          
  <div class="modal-footer">
    <div class="form-group">
      <?php }?>
      <p>&nbsp;</p>
      
      <p><a class="btn btn-default" data-dismiss="modal">Cancelar</a>
        <input type="submit" value="Guardar" class="btn btn-primary">
      </p>
    </div>
  </div>
</form>