<?php

echo $_POST['rut'];

?>
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
				   <script type="text/javascript" src="../js.js"></script>
        <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="../reg_jug.css" rel="stylesheet" type="text/css">
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
      <div class="container container-fluid">
        <div class="">
          <div class="">
		  
		<div class="col-md-12">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title">Buscar Jugador</h3>
              </div>
              <div class="panel-body">
                
                <form name="form" method="post">
                  <div class="form-group">
                    <div>Buscar por:</div>
                    <div>
                    <br>
                    <input name="rbuscar" type="radio" value="rut" checked="CHECKED">Rut&nbsp;
                    <input type="radio" name="rbuscar" value="nombre">
                    
                    Nombre
                   &nbsp;
                    <input type="radio" name="rbuscar" value="club">Club
                   </div>
                    <br>
                     <input class="form-control" name="txtbuscar" id="busqueda" placeholder="Busqueda" type="text">
                     <span class="help-block">Para buscar jugadores seleccione un filtro</span>
             
                   
                  </div>
                 
                            
                  <input type="submit" name="buscar" id="bb" class="btn btn-primary" value="Buscar">
                </form>
             
              </div>
            </div>
          </div>
        </div>
		  
<div id="tabla"><table class="table table-responsive table-bordered" border="0" >
  <tr>
    <td>Rut</td>
    <td>Nombre</td>
    <td>Direccion;</td>
    <td>Telefono</td>
    <td>Fecha de nacimiento</td>
    <td>Club</td>
  </tr>
</table>
</div>
		  

 
		  </div>
		  
        
             </div>
			 </div>
			 </div>
			 </div>
			 
			 
                <script>
					//busqueda al escribir en textbox
					$(document).ready(function(){
					 $("#busqueda").keyup(function(e){
						 //imagen de carga					
		$('#tabla').html('<div class="container" align="center"><img src="archivos/ajax-loader.gif"/></div>');

	  //valores de radio & txt
	 var buscarpor = $('input:radio[name=rbuscar]:checked').val();
	  var busqueda = $("#busqueda").val();
	  

	  
	    $("#tabla").load("php/buscar_jugador_transferencia.php", {tipo: buscarpor, buscar: busqueda}, function(){

      });
	  

	         


   });

					
					
					
					 });
   $("#busqueda").click(function(evento){
      evento.preventDefault();
	
					  $('#destino').html('<div><img src="../Archivos/Imagenes/ajax-loader.gif"/></div>');
	  
	 var buscarpor = $('input:radio[name=rbuscar]:checked').val();
	  var busqueda = $("#busqueda").val();
	  

	  
	    $("#tabla").load("php/buscar_jugador_transferencia.php", {tipo: buscarpor, buscar: busqueda}, function(){

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

   
	
	
  $(document).ready(function(){
	  
   $("#txt_nombre").focus(function(evento){
      evento.preventDefault();
	  
	  $('#destino').html('<div><img src="../Archivos/Imagenes/ajax-loader.gif"/></div>');
	  
	  var rut = $(txt_rut).val();
	  
	  var validador = $(txtvalidador).val();
	  
      $("#destino").load("../php/verificarrut.php", {Rut: rut, Verf: validador}, function(){

      });
	         


   });

})</script>
   
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">

            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title">Iniciar Sesión</h4>
          </div>
          <div class="modal-body">
            <form method="post" action="">
              <div class="form-group">
                <label class="control-label" for="exampleInputEmail1">Correo Electronico</label>
                <input class="form-control" id="user" name="user" placeholder="Email" type="email" required>
              </div>
              dsfsdfsfsf
              <div class="form-group">
               <?php   if($_POST['btn']=="ver"){
				   
				   echo $_POST['rut'];
				   echo "hola";
				   
				   }?> 
              </div>
            
          </div>
          <div class="modal-footer">
            <input class="btn btn-default" data-dismiss="modal" type="button" value="Cancelar">
            
            <input type="submit" class="btn btn-primary" name="btnEntrar" id="btnEntrar" value="Entrar" />
              </form>
              
          </div>
        </div>
      </div>
    </div>
</body></html>