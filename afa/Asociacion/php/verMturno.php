<?php 
$cons=$_POST['b'];
include "conexion.php";
$cnn=Conectar();
$sql="select * from turno where rut=".$cons."";

$rs=mysql_query($sql, $cnn);

while($row=mysql_fetch_array($rs)){


?>
<form method="post" action="php/updateclub.php">
<div class="form-group">
<input type="text" name=""  class="hidden" value="<?php echo $cons;?>">

<div class="col-xs-12 col-md-12">
            <label for="codigo" class="control-label">Rut </label>
            <input type="text" class="form-control " id="club" name="club"  disabled value="<?php echo $row['rut'];?>" required maxlength="20">
            </div>
             <div class="col-xs-12 col-md-12">
              <label for="codigo" class="control-label">Nombre </label>
            <input type="text" class="form-control " id="club" name="club"   value="<?php echo $row['nombre'];?>" required maxlength="20">
			</div>
          <div class="col-xs-12 col-md-12">
		 
            <label for="nombre" class="control-label">Dirección</label>
            <input type="text" class="form-control" id="series" name="series" value="<?php echo $row['direccion'];?>"  required maxlength="45">
          </div>
          
           <div class="col-xs-12 col-md-12">
		  <div class="form-group">
            <label for="continente" class="control-label">Telefono</label>
            <input type="text" class="form-control" id="Dirección" name="Dirección" value="<?php echo $row['fono'];?>" required maxlength="90">
  		</div>
        </div>
      
		
        <div class="form-group">
<div class="col-xs-12 col-md-8">
            <label for="codigo" class="control-label">Correo</label>
            <input type="text" class="form-control" id="rut" name="rut" value="<?php echo $row['correo'];?>" required maxlength="10">
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