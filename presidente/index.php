<?php
error_reporting(0);
session_start();
if(!$_SESSION['idusuario']){
	
	
	header("location: ../index.php");
	
	
	}else{
		include "php/conexion.php";
		$cnn=Conectar();
		
		$id=$_SESSION['idusuario'];
		
		
		
		}
	
	
?>

<!DOCTYPE html>
<html>
<head>

            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
            <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
			   <script type="text/javascript" src="js/js.js"></script>
            <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
            <link href="index.css" rel="stylesheet" type="text/css">
        </head>
        
     
        
        <body>
        
        
        
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
                                <a href="solicitud_trasnsferencia.php">Solicitar Transferencia</a>
                            </li>
                            <li>
                                <a href="#">Generar Informes</a>
                            </li>
                             <li class="dropdown">
              <a href="#" class="btn btn-block btn-primary 
 dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><div class="fa fa-user-circle">&nbsp;</div>Sesión <i class="fa fa-caret-down"></i></a>
              <ul class="dropdown-menu" role="menu">
                <li>
                  <a href="#"><div class="fa fa-cog">&nbsp;</div>Modificar Datos</a>
                </li>
                <li class="divider"></li>
                <li>
				
                  <a href="cerrarsesion.php"><div class="fa fa-sign-out">&nbsp;</div>Cerrar Sesión</a>
                </li>
              </ul>
            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="section">
                <div class="container">
                   <?php $sql="select * from reg_login where id='".$id."'";
//comprueba contraseña en primer inicio


$rs=mysql_query($sql, $cnn)or die (mysql_error());
while($row=mysql_fetch_array($rs)){
	
	 if ($row['correo'] === $row['contrasena']){echo "<script> alert('Debe cambiar Contraseña') ;</script>";
	echo "<script>$( document ).ready(function() {
    console.log( 'ready' );  $('#modal').trigger('click'); 
});
</script>";}
	
	
}?>
        <?php $sqlnombre="select * from club where idlogin ='".$id."'";
               $resul= mysql_query($sqlnombre,$cnn);
        while($rowss=mysql_fetch_array($resul)){
        
		$idDid=$rowss['id']; 
                $presidente=$rowss['nombre_presidente']; 
                $club=$rowss['nombre']; 
                
                ?>
                    <div class="row">
                        <div class="col-md-12">
      <h3 class="text-left">Bienvenido Sr. <font color='#009900'><?php echo $presidente  ; echo "</font>
	   <font color='#0000'><br> Club: </font>  <font color='#009900'>";echo $club; }?> </font></h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="archivos\imagen\logo afa\logo.png"  width="400" height="500" class="img-responsive img-rounded">
							<div id="resultad1o"></div>
                        </div>
                        <div class="col-md-6">
                            <h1>A title</h1>
                            <h3>A subtitle</h3>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo
                                ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis
                                dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies
                                nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
                                Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In
                                enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum
                                felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus
                                elementum semper nisi.</p>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="section section-primary">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <h1>Footer header</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisici elit,
                                <br>sed eiusmod tempor incidunt ut labore et dolore magna aliqua.
                                <br>Ut enim ad minim veniam, quis nostrud</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="text-info text-right">
                                <br>
                                <br>
                            </p>
                            <div class="row">
                                <div class="col-md-12 hidden-lg hidden-md hidden-sm text-left">
                                    <a href="#"><i class="fa fa-3x fa-fw fa-instagram text-inverse"></i></a>
                                    <a href="#"><i class="fa fa-3x fa-fw fa-twitter text-inverse"></i></a>
                                    <a href="#"><i class="fa fa-3x fa-fw fa-facebook text-inverse"></i></a>
                                    <a href="#"><i class="fa fa-3x fa-fw fa-github text-inverse"></i></a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 hidden-xs text-right">
                                    <a href="#"><i class="fa fa-3x fa-fw fa-instagram text-inverse"></i></a>
                                    <a href="#"><i class="fa fa-3x fa-fw fa-twitter text-inverse"></i></a>
                                    <a href="#"><i class="fa fa-3x fa-fw fa-facebook text-inverse"></i></a>
                                    <a href="#"><i class="fa fa-3x fa-fw fa-github text-inverse"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- link modal jquery-->
                    <a data-toggle="modal" id="modal" name="modal" data-target="#myModal" class="btn">Iniciar Sesión</a>
                </div>
            </footer><div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"><div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
            <form method="post">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title">Cambiar Contraseña</h4>
            </div>
            <div class="modal-body"><p>
              <div class="form-group">
                <label class="control-label" for="exampleInputEmail1">Nueva Contraseña</label>
                <input class="form-control" id="pass1" name="pass1" placeholder="Contraseña" type="Password"  min="8" max="30" required>
              </div>
              <div class="form-group">
                <label class="control-label" for="exampleInputPassword1">Confirmar Nueva Contraseña</label>
                <input class="form-control" id="pass2" name="pass2" placeholder="Contraseña" type="password" required>
              </div>
            
          </div>
          <div class="modal-footer">
            
            
            <input type="submit" class="btn btn-primary" name="btn" id="btn" value="Guardar" />
                 </form>
                  <?php 
				  if($_POST['btn']=="Guardar"){
					  
			$Contrasena1=$_POST["pass1"];
				$Contrasena2=$_POST["pass2"];
				
				if($Contrasena1===$Contrasena2){
					
					  $update="update reg_login set contrasena='".$Contrasena1."' where id = ".$id."";
				  
				
				  mysql_query($update, $cnn)or die (mysql_error());
				  echo "<script> alert('Se cerrara la Sesión') ;</script>";
				  session_destroy();
				  echo  "<script> window.location ='../';</script>";
				  }else{echo "<script> alert('Contraseñas no coinciden') ;</script>";}
					
					}
		
				 
				
				  ?>
                 
                 </p>
                  </div>
                  </div>
                  </div>
                  </div>
        
    
    </body>
    <script>
$(document).ready(function(){

	var id = <?php echo $idDid?>;
	
	
                
              //obtenemos el texto introducido en el campo de búsqueda
			
              consulta = id;
		console.log(consulta);
			   consulta1 = "select * from fechas where id_club_local or id_club_visita = id'";
	
                                                                           
            
                                                                                  
              $.ajax({
                    type: "POST",
                    url: "php/notificar.php",
                    data: { c : consulta, c2 : consulta1 },
                    beforeSend: function(){
                          //imagen de carga
                          $("#aa").html("<p align='center'><img src='../Archivos/Imagenes/logo afa/ball.gif' /></p>");
                   },
                    error: function(){
                          alert("error peticion ajax");
                    },
                    success: function(data){                                                    
                          $("#resultado").empty();
                          $("#resultado").append(data);
                    }
              });
                                                                                  
				            
                                               
	
});

   
	
	
    </script>
    
    </html>