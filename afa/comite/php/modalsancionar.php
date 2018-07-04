<?php 
$rut=$_POST['b'];



include "conexion.php";
$cnn=Conectar();

$sqlnombre="Select nombre, club, rut from jugadores where rut=".$rut."";

$rsnombre=mysql_query($sqlnombre, $cnn);
while($rownombre=mysql_fetch_array($rsnombre)){
	
	
	


?>
<form method="post" action="php/aplicarsancion.php">
<div class="form-group">

<div class="col-xs-12 col-md-12">
       <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
            <h4 class="modal-title"><font color="#330066">Sanciona Jugador</font> &nbsp; 	<?php echo $rownombre['nombre'];
		
		?>
            </div>
          
           
             <div class="modal-body" >
              
                     <div class="form-group">
                    
                     <div class="col-sm-4">
                  Cantidad de fechas <input name="fechas" class="form-control" type="text" required  maxlength="2"/>
                  <input name="rut"  class="hidden" type="text"  value="<?php echo $rut;?>"/>
                   <input name="club"  class="hidden" type="text"  value="<?php echo $rownombre['club'];}?>"/>
                  </div>
                  </div>
                      <div class="form-group" >
                      <div class="col-sm-12">
                  Causa: <textarea name="causa"  required cols="" class="form-control" rows="" ></textarea>
                  </div>
                    </div>
          </div>
         

			</div>
               </div>
            
               <div class="form-group">  
            
            <div class="modal-footer">
              
               <div class="form-group" >
                      <div class="col-sm-12">
                        <p>&nbsp;</p>
                        <p><input type="submit" value="Aplicar sanción" class="btn btn-danger"/ ></p>
                 </div>
              </div>
            </div>
 
            </div>
         </form>