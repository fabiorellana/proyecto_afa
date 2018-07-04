<?php
error_reporting(0);
session_start();
if(!$_SESSION['idusuario']){
	
	
	header("location: ../index.php");
	
	
	}else{
		include "php/conexion.php";
		$cnn=Conectar();
		
		$id=$_SESSION['idusuario'];
		$sqql="select id from club where idlogin=$id";
		
		$ls=mysql_query($sqql,$cnn);
		
		while($roow=mysql_fetch_array($ls)){
			
			$idclub=$roow['id'];
			
			}
		
		
		}
?>
<!DOCTYPE html>
<html><head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registrar Jugadores</title>
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
	<script type="text/javascript" src="js/js.js"></script>
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.rut.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="reg_jug.css" rel="stylesheet" type="text/css">
  </head><body>
    <div class="navbar navbar-default navbar-static-top">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand"><span>Proyecto A.F.A</span></a>
                    </div>
                    <div class="collapse navbar-collapse" id="navbar-ex-collapse">
                          <ul class="nav navbar-nav navbar-right">
						 <li>
                                <a href="index.php">Inicio</a>
                            </li>
                            <li>
                                <a href="reg_jug.php" class="hidden-xs">Registro de Jugadores</a>
                            </li>
                            <li>
                                <a href="notificaciones.php" > <span class="badge pull-right alert-danger" id="resultado"></span>&nbsp;
      Notificaciones &nbsp;</a>
                                
                                
                            </li>
                            <li>
                                <a href="Solicitud_trasnsferencia.php">Solicitar Transferencia</a>
                            </li>
                            <li>
                                <a href="#">Generar Informes</a>
                            </li>
                             <li>
                                <a href="../">Salir</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
        
                
              </div>
              <br>
              
                 <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <form class="form-horizontal" action="" method="post" role="form" enctype="multipart/form-data">
                            <div class="form-group">
                                <div class="col-sm-2">
                                    <label for="txt_rut" class="control-label">Rut :</label>
                                </div>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="Rut ej: 11111111" id="txt_rut" name="txt_rut" required>      
                                </div>     
                            </div>
                            <div class="form-group">
                                <div class="col-sm-2">
                                    <label for="txtNombresT" class="control-label">Nombres y apellidos:</label>
                                </div>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="txt_nombre" id="txt_nombre" required>
                                </div>
                            </div>
                     
                            <div class="form-group">
                                <div class="col-sm-2">
                                    <label for="txtDireccionT" class="control-label">Dirección :</label>
                                </div>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="txt_direccion" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-2">
                                    <label for="txtTelefonoT" class="control-label">Teléfono :</label>
                                </div>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="txt_fono" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-2">
                                    <label for="txtEmailT" class="control-label">Fecha de nacimiento :</label>
                                </div>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" name="txt_fecha_nacimiento"  required>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-2">
                                    <label for="imagen" class="control-label">Subir Imagen</label>
                                </div>
                                <div class="col-sm-10">
                                    <input type="file" name="imagen" id="imagen">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12 text-center">
                                 <input type="submit" name="guardar" class="btn btn-primary btn-lg" value="Enviar"> 
                                  <a href="../" class="btn btn-default btn-lg">Cancelar</a>
                                </div>
                            </div>
                        </form><!--/form-->

                <script type="text/javascript">    
                    $(document).ready(function(){
                        $("#txt_rut")
                          .rut({formatOn: 'keyup', validateOn: 'keyup'})
                          .on('rutInvalido', function(){ 
                            $(this).parents(".form-group").addClass("error")
                          })
                          .on('rutValido', function(){ 
                            $(this).parents(".form-group").removeClass("error")
                          });
                      });
                </script><!--/script-->
				  
                <?php
				if ($_POST['guardar']=="Enviar"){

                $rut=$_POST['txt_rut'];
                $nombre=$_POST['txt_nombre'];
                $direccion=$_POST['txt_direccion'];
                $fono=$_POST['txt_fono'];
                $fecha_nacimiento=$_POST['txt_fecha_nacimiento'];

                //comprobamos si ha ocurrido un error.
                if ( ! isset($_FILES["imagen"]) || $_FILES["imagen"]["error"] > 0){
                    echo "ha ocurrido un error";
                } else {
                    //ahora vamos a verificar si el tipo de archivo es un tipo de imagen permitido.
                    //y que el tamano del archivo no exceda los 16mb
                    $permitidos = array("image/jpg", "image/jpeg", "image/gif", "image/png");
                    $limite_kb = 16384; //16mb es el limite de medium blob
     
                    if (in_array($_FILES['imagen']['type'], $permitidos) && $_FILES['imagen']['size'] <= $limite_kb * 1024){
                     
                        //este es el archivo temporal
                        $imagen_temporal  = $_FILES['imagen']['tmp_name'];  
                        //este es el tipo de archivo
                        $tipo = $_FILES['imagen']['type'];
                        //leer el archivo temporal en binario
                        $data = file_get_contents($imagen_temporal);
                        //escapar los caracteres
                        $data = mysql_escape_string($data);

                        $SQL="INSERT INTO jugadores VALUES('$rut','$nombre','$direccion','$fono','$fecha_nacimiento','$idclub','','$data','$tipo')";
                        mysql_query($SQL,$cnn);
                        // shell_exec("java -jar dist/LectorHuellaAfa.jar");
                        echo "<script> alert('guardado'); </script>";

                    } else {
                        echo "archivo no permitido, es tipo de archivo prohibido o excede el tamano de $limite_kb Kilobytes";
                    }//fin if array
                }//fin if error

            }//fin enviar
			?>
               
              </div>
            </div>
          </div><!--/div container-->
      
      
    </div>
    </form>
	   <script>
$(document).ready(function(){
    
	//setInterval(" ajaxnotificacion();", 1000);
 
                                                      

});

   
	
	
    </script>
   

</body></html>