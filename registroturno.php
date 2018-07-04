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
<html><head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Registro Turno</title>
        <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
        <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
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
          <a class="navbar-brand"><span>Proyecto A.F.A</span></a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-ex-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li>
              <a href="inicioasociacion.php">Home</a>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Nuevos Registros <i class="fa fa-caret-down"></i></a>
              <ul class="dropdown-menu" role="menu">
                <li>
                  <a href="registroinformeturno.php">Registrar Informe de Turno</a>
                </li>
                <li>
                  <a href="ingresofechas.php">Registrar Fechas</a>
                </li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Crear Nuevo <i class="fa fa-caret-down"></i></a>
              <ul class="dropdown-menu" role="menu">
                <li>
                  <a href="registroturno.php">Crear Nuevo Turno</a>
                </li>
                <li>
                  <a href="registroclub.php">Crear Nuevo Club</a>
                </li>
                  <li>
                  <a href="registrocomite.php">Crear Nuevo comite de disciplina</a>
                </li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Notificaciones <i class="fa fa-caret-down"></i></a>
              <ul class="dropdown-menu" role="menu">
                <li>
                  <a href="#">Notificaciones de solicitud de Traspasos</a>
                </li>
                <li>
                  <a href="#">Another Recepcion de Turno</a>
                </li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Traspasos <i class="fa fa-caret-down"></i></a>
              <ul class="dropdown-menu" role="menu">
                <li>
                  <a href="#">Gestion de Traspasos</a>
                </li>
                <li>
                  <a href="#">Historial de Traspasos</a>
                </li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Administrar <i class="fa fa-caret-down"></i></a>
              <ul class="dropdown-menu" role="menu">
                <li>
                  <a href="administrarturno.php">Administrar turno</a>
                </li>
                <li>
                  <a href="administrarclub.php">Admnistrar Club </a>
                </li>
              </ul>
            </li>
            <li>
              <a href="ingresarresultados.html">Resultados</a>
            </li>
            <li>
              <a href="#">Informes</a>
            </li>
            <li class="dropdown">
              <a href="#" class="btn btn-block btn-danger 
 dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Sesión <i class="fa fa-caret-down"></i></a>
              <ul class="dropdown-menu" role="menu">
                <li>
                  <a href="#">Modificar Datos</a>
                </li>
                <li class="divider"></li>
                <li>
                  <a href="cerrarsesion.php">Cerrar Sesión</a>
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
                        <form class="form-horizontal" action="" method="post" role="form">
                            <div class="form-group">
                                <div class="col-sm-2">
                                    <label for="txtRutT" class="control-label">Rut :</label>
                                </div>
                                <div class="col-sm-5">
 <input type="text" class="form-control" placeholder="Rut a validar, ej: 11111111"  id="txtrutT"   name="txtrutT" required>      
    </div>     
      <div class="col-xs-1"> <input type="text" class="form-control "  id="txtvalidador"   name="txtvalidador"  placeholder="1"required></div>
       <div id="destino"> </div>
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
					<script>	$(document).ready(function(){
   $("#txtNombresT").focus(function(evento){
      evento.preventDefault();
	  $('#destino').html('<div><img src="Archivos/Imagenes/ajax-loader.gif"/></div>');
	  
	  var rut = $(txtrutT).val();
	  	  var validador = $(txtvalidador).val();
      $("#destino").load("php/verificarrut.php", {Rut: rut, Verf: validador}, function(){

      });
	         


   });

})</script>

						<?php
						
						
                          if ($_POST['btnGuardar']=="Guardar"){
							  echo 
							  "sd";
				  include ("php/conexion.php");  
				$cnn=conectar();
				  

	$validador=$_POST['txtvalidador'];
				
		$rut =$_POST['txtrutT'];
		$dado_vuelta= strrev($rut);
		$array1 = str_split($dado_vuelta);
		
	$s1=$array1[0] * 2;
	$s2=$array1[1] * 3;
	$s3=$array1[2] * 4;
	$s4=$array1[3] * 5;
	$s5=$array1[4] * 6;
	$s6=$array1[5] * 7;
	$s7=$array1[6] * 2;
	$s8=$array1[7] * 3;
	
	$suma=$s1+$s2+$s3+$s4+$s5+$s6+$s7+$s8;
	$ayayai =$suma%11;
	
	$uyui=11- $ayayai;
	
	if($validador!=$uyui){
		echo "<h5 > <font color='red'>Rut incorrecto</h5>";
	
		
		}else{echo "<h5 > <font color='green'>Rut correcto</h5>";
		$nombres = $_POST['txtNombresT'];
$apellidos = $_POST['txtApellidosT'];
$direccion = $_POST['txtDireccionT'];
$telefono = $_POST['txtTelefonoT'];
$email = $_POST['txtEmailT'];
$rutc=$rut.$validador;
	
$sql = "insert into turno values('$rutc','$nombres','$apellidos','$direccion','$telefono','$email','null')";
		echo $sql;
mysql_query($sql,$cnn)or die (mysql_error());

					

	echo '<script language="javascript">alert("Nuevo Club Guardado exitosamente!");</script>'; 
				
		}

	
	

		
						  }
			   ?>
                        
                        
                        
                 </div>
                </div>
            </div>
        </div>


</body></html>