<?php

session_start();
error_reporting(0);
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
	
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  
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
                              
                                 <a href="reg_jug.php">Registro de Jugadores</a>
                            </li>
                            <li>
                              
                                 <a href="misjugadores.php">Mis Jugadores</a>
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
                                <a href="cerrarsesion.php">Salir</a>
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
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" maxlength="8" placeholder="Rut ej: 11111111" id="txt_rut" name="txt_rut" required>      
                                </div> 
                                <div class="col-sm-1">
                                    <input type="text" class="form-control" placeholder="Rut ej: 11111111" id="validador" name="validador" required>      
                                </div>
                                <div class="col-sm-3" id="destino">
                                     
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

               
                <?php
				if ($_POST['guardar']=="Enviar"){

                $rut=$_POST['txt_rut'];
				$validador=$_POST['validador'];
                $nombre=$_POST['txt_nombre'];
                $direccion=$_POST['txt_direccion'];
                $fono=$_POST['txt_fono'];
                $fecha_nacimiento=$_POST['txt_fecha_nacimiento'];
				$SQL="INSERT INTO jugadores VALUES('$rut$validador','$nombre','$direccion','$fono','$fecha_nacimiento','$idclub','','1')";
				echo $SQL;
				mysql_query($SQL,$cnn);
				 shell_exec("java -jar dist/LectorHuellaAfa.jar");
				 
                  echo "<script> alert('guardado'); </script>";
						
					
                //comprobamos si ha ocurrido un error.
				
                if ( ! isset($_FILES["imagen"]) || $_FILES["imagen"]["error"] > 0){
                    echo "ha ocurrido un error";
                } else {
                    //ahora vamos a verificar si el tipo de archivo es un tipo de imagen permitido.
                    //y que el tamano del archivo no exceda los 16mb
                    $permitidos = array("image/jpg", "image/jpeg", "image/gif", "image/png");
                    $limite_kb = 10000; //16mb es el limite de medium blob
     
                    if (in_array($_FILES['imagen']['type'], $permitidos) && $_FILES['imagen']['size'] <= $limite_kb * 1024){
                     
                        //este es el archivo temporal
                        $imagen_temporal  = $_FILES['imagen']['tmp_name'];  
                        //este es el tipo de archivo
                        $tipo = $_FILES['imagen']['type'];
                        //leer el archivo temporal en binario
                        $data = file_get_contents($imagen_temporal);
                        //escapar los caracteres
                        $data = mysql_escape_string($data);

                        $sqlimagen="insert into imagenes values ('".$rut.$validador."','".$data."','".$tipo."')";
						
						mysql_query($sqlimagen, $cnn);
                       

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
   
   <script>
$(document).ready(function(){
    
	setInterval("notificacionarriba()", 1000);
 solicitudtraspaso();
 notisancion();
 notiaceptada();
      	                                            

});


	//solicitud de traspaso notificacion
	function solicitudtraspaso(){
    
        var parametros = {
                "idclub" : <?php echo $idclub?>
				
        };
		
		
        $.ajax({
                data:  parametros,
                url:   'php/notifica-solicitud-traspaso.php',
                type:  'post',
                beforeSend: function () {
                        $("#contenedortraspaso").html("Procesando, espere por favor...");
                },
                success:  function (response) {
                        $("#contenedortraspaso").html(response);
						
                }
        });
		
		
	}
	
	
	//notificaciones arriba
	function notificacionarriba(){
    
        var parametros = {
                "idclub" : <?php echo $idclub?>
				
        };
		
		
        $.ajax({
                data:  parametros,
                url:   'php/notificaciones-arriba.php',
                type:  'post',
              
                success:  function (response) {
                        $("#resultado").html(response);
                }
        });
		
		
	}
	
	function notisancion(){
    
        var parametros = {
                "idclub" : <?php echo $idclub?>
				
        };
		
		
        $.ajax({
                data:  parametros,
                url:   'php/notificar-sancion.php',
                type:  'post',
                beforeSend: function () {
                        $("#contenedor").html("Procesando, espere por favor...");
                },
                success:  function (response) {
                        $("#contenedor").html(response);
                }
        });
		
		
	}
	
	function notiaceptada(){
    
        var parametros = {
                "idclub" : <?php echo $idclub?>
				
        };
		
		
        $.ajax({
                data:  parametros,
                url:   'php/solicitudaceptada.php',
                type:  'post',
                beforeSend: function () {
                        $("#solicitudaceptada").html("Procesando, espere por favor...");
                },
                success:  function (response) {
                        $("#solicitudaceptada").html(response);
                }
        });
		
		
	}
	


   

	
    </script>
    
    <script>	$(document).ready(function(){
   $("#txt_nombre").focus(function(evento){
      evento.preventDefault();
	  $('#destino').html('<div><img src="Archivos/ajax-loader.gif"/></div>');
	  
	  var rut = $("#txt_rut").val();
	  	  var validador = $("#validador").val();
      $("#destino").load("php/verificarrut.php", {Rut: rut, Verf: validador}, function(){

      });
	         


   });

})</script>

</body></html>