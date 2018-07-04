<?php 
$cons=$_POST['b'];
include "conexion.php";
$cnn=Conectar();
$sql="select * from club where id=".$cons."";

$rs=mysql_query($sql, $cnn);

while($row=mysql_fetch_array($rs)){


?>
<form method="post" action="php/updateclub.php">
<div class="form-group">
<input type="text" name="id"  class="hidden" value="<?php echo $cons;?>">
<div class="col-xs-12 col-md-8">
            <label for="codigo" class="control-label">Nombre del club</label>
            <input type="text" class="form-control " id="club" name="club"  disabled value="<?php echo $row['nombre'];?>" required maxlength="20">
			</div>
          <div class="col-xs-12 col-md-4">
		 
            <label for="nombre" class="control-label">Series</label>
            <input type="text" class="form-control" id="series" name="series" value="<?php echo $row['cant_series'];?>"  required maxlength="45">
          </div>
          
           <div class="col-xs-12 col-md-12">
		  <div class="form-group">
            <label for="continente" class="control-label">Dirección</label>
            <input type="text" class="form-control" id="Dirección" name="Dirección" value="<?php echo $row['direccion_presidente'];?>" required maxlength="90">
  		</div>
        </div>
      
		
        <div class="form-group">
<div class="col-xs-12 col-md-8">
            <label for="codigo" class="control-label">Rut</label>
            <input type="text" class="form-control" id="rut" name="rut" value="<?php echo $row['rut_presidente'];?>" required maxlength="10">
			</div>
          <div class="col-xs-12 col-md-4">
		 
            <label for="nombre" class="control-label">Digito verificador</label>
            <input type="text" class="form-control" id="df" name="df"  maxlength="1">
          </div>
        
        
        
          
		  <div class="form-group">
          <div class="col-xs-12 col-md-12">
            <label for="capital" class="control-label">Nombre Presidente</label>
            <input type="text" class="form-control" id="Presidente" name="Presidente" value="<?php echo $row['nombre_presidente'];?>" required maxlength="50">
           </div>
          </div>
		 
 		  <div class="form-group">
            <div class="col-xs-12 col-md-6">
            <label for="continente" class="control-label">Correo</label>
            <input type="mail" class="form-control" id="Correo" name="Correo" value="<?php echo $row['correo_presidente'];?>"required maxlength="90">
            </div>
			</div>
            
            <div class="form-group">
              <div class="col-xs-12 col-md-6">
            <label for="continente" class="control-label">Telefono</label>
            <input type="phone" class="form-control" id="Telefono" name="Telefono" value="<?php echo $row['fono_presidente'];?>" required maxlength="15">
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