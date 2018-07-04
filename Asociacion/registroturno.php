<?php
session_start();
error_reporting(0);
if(! isset($_SESSION['tipo_usr']))
{
  session_destroy();
  header("Location: ../index.php");
}else{
  $idusuario = $_SESSION['idusuario'];
  $usuario = $_SESSION['correo'];
  $pass = $_SESSION['contraseña'];
  $tipousuario = $_SESSION['idtipousuario'];
  
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Asociacion</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
	  <script src="https://use.fontawesome.com/d0c885a572.js"></script>
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.rut.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="Archivos\Framework\css\style1.css" rel="stylesheet" type="text/css">
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
          <a href="inicioasociacion.php" class="navbar-brand"><span>Proyecto A.F.A</span></a>
		 
        </div>
        <div class="collapse navbar-collapse" id="navbar-ex-collapse">
          <ul class="nav navbar-nav navbar-right">
            
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> <div class="fa fa-file-word-o">&nbsp;</div> Informes <i class="fa fa-caret-down"></i></a>
              <ul class="dropdown-menu" role="menu">
                <li>
                  <a href="informes.php"><div class="fa fa-book">&nbsp;</div> Registrar Informe de Turno</a>
                </li>
				<li>
				
                  <a href="verinformes.php"><div class="fa fa-eercast">&nbsp;</div>Ver informes</a>
                </li>
               
              </ul>
            </li>
			
			
			
			
			
			  <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> <div class="fa fa-calendar-o">&nbsp;</div>Fechas &nbsp;<i class="fa fa-caret-down"></i></a>
              <ul class="dropdown-menu" role="menu">
                <li>
                  <a href="ingresofechas.php"><div class="fa fa-calendar-plus-o">&nbsp;</div>Crear fechas</a>
                </li>
                <li>
				
                  <a href="ingresarresultados.php"><div class="fa fa-plus-square-o">&nbsp;</div>Registrar Resultados</a>
                </li>
              </ul>
            </li>
			
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><div class="fa fa-futbol-o">&nbsp;</div>Club <i class="fa fa-caret-down"></i></a>
              <ul class="dropdown-menu" role="menu">
               <li>
                  <a href="registroclub.php"><div class="fa fa-star">&nbsp;</div>Crear Nuevo Club</a>
                </li>
                  <li>
                  <a href="administrarclub.php"><div class="fa fa-plus-square-o">&nbsp;</div>Administrar Club </a>
                </li>
              </ul>
            </li>
			
			 <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><div class="fa fa-fire">&nbsp;</div>Disciplina <i class="fa fa-caret-down"></i></a>
              <ul class="dropdown-menu" role="menu">
               <li>
                  <a href="registroclub.php"><div class="fa fa-user-plus">&nbsp;</div>Crear Nuevo Comite</a>
                </li>
			
                  <li>
                  <a href="administrarclub.php"><div class="fa fa-user-secret">&nbsp;</div>Administrar Comite </a>
                </li>
              </ul>
            </li>
			
			<li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><div class="fa fa-users">&nbsp;</div>Turno <i class="fa fa-caret-down"></i></a>
              <ul class="dropdown-menu" role="menu">
               <li>
                  <a href="registroturno.php"><div class="fa fa-id-badge">&nbsp;</div>Crear Nuevo Turno</a>
                </li>
                  <li>
                  <a href="administrarturno.php"><div class="fa fa-address-card">&nbsp;</div>Administrar turno </a>
                </li>
              </ul>
            </li>
			
			  <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><div class="fa fa-share">&nbsp;</div>Traspasos <i class="fa fa-caret-down"></i></a>
              <ul class="dropdown-menu" role="menu">
                <li>
                  <a href="ingresarcodigodesolicitud.php"><div class="fa fa-reply-all">&nbsp;</div>Gestion de Traspasos</a>
                </li>
				
                <li>
                  <a href="#"><div class="fa fa-history">&nbsp;</div>Historial de Traspasos</a>
                </li>
				 <li>
				 
                  <a href="#"><div class="fa fa-toggle-on">&nbsp;</div>Activar / Desactivar Traspasos</a>
                </li>
              </ul>
            </li>
			
            <li class="">
              <a href="#">Notificaciones </a>
             
            </li>
          
           
           
            <li class="dropdown">
              <a href="#" class="btn btn-block btn-danger 
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
                <div class="row">
                    <div class="col-md-12">
                        <h1>REGISTRO TURNO</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <form class="form-horizontal" action="" method="post" role="form" enctype="multipart/form-data">
                            <div class="form-group">
                                <div class="col-sm-2">
                                    <label for="txtRutT" class="control-label">Rut :</label>
                                </div>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" placeholder="Rut a validar, ej: 11111111" id="txtRutT" name="txtRutT" required>      
                                </div>     
                            </div>
                            <div class="form-group">
                                <div class="col-sm-2">
                                    <label for="txtNombresT" class="control-label">Nombres :</label>
                                </div>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="txtNombresT" id="txtNombresT" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-2">
                                    <label for="txtApellidosT" class="control-label">Apellidos :</label>
                                </div>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="txtApellidosT" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-2">
                                    <label for="txtDireccionT" class="control-label">Dirección :</label>
                                </div>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="txtDireccionT" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-2">
                                    <label for="txtTelefonoT" class="control-label">Teléfono :</label>
                                </div>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="txtTelefonoT" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-2">
                                    <label for="txtEmailT" class="control-label">Correo :</label>
                                </div>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" name="txtEmailT" placeholder="correo@example.cl" required>
                                </div>
                            </div>
                            <br>
                            <br>
                            <div class="row">
                                <div class="col-md-12 text-center">
                                 <input type="submit" name="btnGuardar" class="btn btn-default btn-lg" value="Guardar"> 
                                  
                                    <a href="../" class="btn btn-danger btn-lg">Cancelar</a>
                                </div>
                            </div>
                        </form>

                        <script type="text/javascript">
                        $(document).ready(function(){
                          $("#txtRutT")
                          .rut({formatOn: 'keyup', validateOn: 'keyup'})
                          .on('rutInvalido', function(){ 
                            $(this).parents(".form-group").addClass("error")
                          })
                          .on('rutValido', function(){ 
                            $(this).parents(".form-group").removeClass("error")
                          });
                        });
                        </script>

						              <?php
                          if ($_POST['btnGuardar']=="Guardar"){
				                    include ("php/conexion.php");  
				                    $cnn=conectar();
				  
				
		                        $rut =$_POST['txtRutT'];
		                        $nombres = $_POST['txtNombresT'];
                            $apellidos = $_POST['txtApellidosT'];
                            $direccion = $_POST['txtDireccionT'];
                            $telefono = $_POST['txtTelefonoT'];
                            $email = $_POST['txtEmailT'];
                            $rutc=$rut.$validador;
	
                            $sql = "insert into turno values('$rutc','$nombres','$apellidos','$direccion','$telefono','$email','null')";
		                        echo $sql;
                            mysql_query($sql,$cnn)or die (mysql_error());

					

	                          echo '<script language="javascript">alert("Guardado exitosamente!");</script>'; 
				
		                        }

	
	

		
						
			                       ?>
                        
                        
                        
                 </div>
                </div>
            </div>
        </div>


</body></html>