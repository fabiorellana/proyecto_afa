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

<html><head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
				   <script type="text/javascript" src="js.js"></script>
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
		  
		  <h1>Notificaciones</h1>
		  <br>
		  
		  <div>
		  <table class='table table-striped' align='center'>
		  
		  <tr>
		  <th>N°</th>
		  <th>Tipo</th>
		  <th>Remitente</th>
		    <th>Asunto</th>
		  
		  
		  </tr>
		  
		  
		  
		  </table>
		  </div>
		  
        
             </div>
			 </div>
			 </div>
			 </div>
			 
			 
                <script>	$(document).ready(function(){
   $("#txt_nombre").focus(function(evento){
      evento.preventDefault();
	  $('#destino').html('<div><img src="../Archivos/Imagenes/ajax-loader.gif"/></div>');
	  
	  var rut = $(txt_rut).val();
	  	  var validador = $(txtvalidador).val();
      $("#destino").load("../php/verificarrut.php", {Rut: rut, Verf: validador}, function(){

      });
	         


   });

})</script>
                 
				  
                <?php
				if ($_POST['guardar']=="enviar"){
				$rut=$_POST['txt_rut'];
				$nombre=$_POST['txt_nombre'];
				$direccion=$_POST['txt_direccion'];
				$fono=$_POST['txt_fono'];
				$fecha_nacimiento=$_POST['txt_fecha_nacimiento'];
				
				
				$SQL="insert into jugadores values ('$rut','$nombre','$direccion','$fono','$fecha_nacimiento','$idclub','')";
				
				
				mysql_query($SQL,$cnn);
                                shell_exec("java -jar dist/LectorHuellaAfa.jar");
                                echo "<script> alert('guardado'); </script>";
header("location:index.php");
                                
				}
				?>
               
              </div>
            </div>
          </div>
      
      
    </div>
    </form>
	   <script>
$(document).ready(function(){
    
	setInterval(" ajaxnotificacion();", 1000);
 
                                                      

});

   
	
	
    </script>
   

</body></html>