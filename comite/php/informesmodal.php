<?php 
$cons=$_POST['b'];
include "conexion.php";
$cnn=Conectar();
$sql="select informe from informe where id=".$cons."";

$rs=mysql_query($sql, $cnn);

while($row=mysql_fetch_array($rs)){


?>
<form method="post" action="php/updateclub.php">
<div class="form-group">
<input type="text" name="id"  class="hidden" value="<?php echo $cons;?>">
<div class="col-xs-12 col-md-12">
            <label for="codigo" class="control-label">Informe</label>
            <br>
          <?php echo $row['informe'];}?>
			</div>
               </div>
               
               <div class="form-group">  
            
            <p>
              <button type="submit" class="btn btn-primary">
              <i class="fa fa-file-pdf-o" aria-hidden="true"></i>&nbsp; Descargar como pdf </button>
            </p>
 
            </div>
         </form>