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
	  <h3 align="center">Datos del club</h3>
        <div class="row">
          <div class="col-md-12">
            <form class="form-group" action="" method="post" role="form">
			
              <div class="form-group">
                <div class="col-sm-8">
                  <label for="inputEmail3" class="control-label">Nombre &nbsp;Del Club</label>
               
                  <input name="txtnombre" type="text" required class="form-control" id="inputEmail3" placeholder="Nombre del Club">
                </div>    
                          
                <div class="col-sm-4">
             
                  <label for="inputPassword3" class="control-label">Series</label>
                
                  <select name="listseries" class="form-control" id="inputPassword3" type="select" placeholder="Cantidad de series" required>
         <option value=""> </option>             
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
  </select>
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-6">
				<br>
                  <label for="inputPassword3" class="control-label" required>Dirección</label>
               
                  <input name="txtdireccion" type="text" required class="form-control" id="inputPassword3" placeholder="Direccion del Club">
                </div>
                </div>
        
                
             <div class="form-group">   
                 <br>
                   <div class=" col-md-12">
                    <h4 align="center">Datos del Presidente</h4>
                <div class="col-sm-5">
                  <label for="inputPassword3" class="control-label">Rut Presidente</label>
                 <input name="txtrut" type="text" required class="form-control" maxlength="8"  id="inputPassword3" placeholder="Rut Presidente del Club">
                </div>
                          
                
                  <div class="col-sm-1">
			
                <label for="inputPassword3" class="control-label">&nbsp;</label>
                  <input name="txtrut" type="text" maxlength="1" required class="form-control" id="inputPassword3" placeholder="verificador">
                </div>
              </div>
              </div>
              
              
              <div class="form-group">
                <div class="col-sm-7">
				<br>
                  <label for="inputPassword3" class="control-label">Nombre completo presidente</label>
               
                  <input name="txtnompres" type="text" required class="form-control" id="inputPassword3" placeholder="Nombre Presidente de club">
                </div>
             
                <div class="col-sm-5">
				<br>
                  <label for="inputPassword3" class="control-label">Direccion presidente de Club</label>
               
                  <input name="txtdireccionpresidente" type="text" required class="form-control" id="inputPassword3" placeholder="Direccion presidente de club">
                </div>
              </div>
			  
              <div class="form-group">
                <div class="col-sm-5">
				<br>
                  <label for="inputPassword3" class="control-label">Correo Presidente de Club</label>
                
                  <input name="txtcorreo" type="email" required class="form-control" id="inputPassword3" placeholder="Correo presidente de Club">
                </div>
             
                <div class="col-sm-5">
				<br>
                  <label for="inputPassword3" class="control-label">Telefono Presidente de Club</label>
              
                  <input name="txttel" type="tel" required class="form-control" id="inputPassword3" placeholder="Telefono presidente">
                </div>
              </div>
			  <br>
              <div class="form-group">
                <div class=" col-sm-4" align="center">
				<br>
                  <input  type="submit" name="btnRegistrar" class="btn btn-success btn-lg" value="Guardar" >
                </div>
				
				<div class="col-sm-8" >
				<br>
				<div class="alert alert-info alert-dismissable ">
				
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>¡Cuidado!</strong> Es muy importante que leas este mensaje de alerta.
</div>
</div>
              </div>
                   
                   
                    </form>
                    
                    
                    
              <?php 
			  if ($_POST['btnRegistrar']=="Guardar"){
				  include ("php/conexion.php");  
				$cnn=conectar();
				  

				
				
		$nomb =$_POST['txtnombre'];
	$series =$_POST['listseries'];
	$Direccion =$_POST['txtdireccion'];
	$Rut_presidente =$_POST['txtrut'];
	$nombre_pres =$_POST['txtnompres'];
	$dir_pres =$_POST['txtdireccionpresidente'];
	$correo_pres =$_POST['txtcorreo'];
	$fono_press =$_POST['txttel'];
	
					  //verificar existencia de registro
				  $sql_confirmar="select id from club where nombre='".$nomb."' or rut_presidente='".$Rut_presidente."'";
				  echo $sql_confirmar;
				
				  $res=mysql_query($sql_confirmar, $cnn);
				 $fila=mysql_num_rows($res);
				 if($fila != 0){echo '<script language="javascript">alert("Club Ya existe dentro de la base de datos");</script>';
				echo " <script>  window.location ='registroclub.php';  </script>";
				 }else{
				
	//VERIFICAR ULTIMO REGISTRO
	
	$rs = mysql_query("SELECT MAX(id) AS id FROM reg_login", $cnn);
if ($row = mysql_fetch_row($rs)) {
$idlogin = trim($row[0]);
$idlogin=$idlogin+1;
}
	
	$sqllogin="insert into reg_login values('$idlogin','$correo_pres', '$correo_pres', 2);";
	
	mysql_query($sqllogin, $cnn);
	
	
	echo '<script language="javascript">alert("Nuevo Club Guardado exitosamente!");</script>'; 
	
	$sql="insert into club values('','$idlogin', '$nomb', '$series', '$Direccion', '$Rut_presidente', '$nombre_pres', '$dir_pres', '$correo_pres', '$fono_press', 1)";
	mysql_query($sql, $cnn);
	


$destinatario = $correo_pres; 
$asunto = "Datos de sesion club ".$nomb.""; 
$cuerpo = "              Nuevo club registrado

    Hola ".$nombre_pres."! 

 Bienvenido a la aplicacion de gestion para el futból amateur.
 
 El usuario Presidente de la asociacion: ".$_SESSION['nombreasociacion'].", te a registrado como presidente del club: ".$nomb."
 
 Acontinuacion se detallan las instrucciones para iniciar sesión en la aplicacion
 
 1. Ingresa a  http://localhost/afaactualizado/afa
 2. En la esquina superior derecha click sobre iniciar sesion
 
 tus datos para iniciar sesion son:
 							Correo electronico: ".$correo_pres."
 							Contraseña: ".$correo_pres."
   
   			Te recordamos que la contraseña es temporal, el sistema al primer inicio te solicitara una nueva contraseña, ademas de unas preguntas para 
			recuperar la contraseña en caso de olvido.
   
   
   														Atte. Webmaster - Proyecto AFA

"; 


require '../PHPMailer-master/PHPMailerAutoload.php';

$mail = new PHPMailer;
$mail->isSMTP();
$mail->SMTPSecure = 'ssl';
$mail->SMTPAuth = true;
$mail->Host = 'smtp.gmail.com';
$mail->Port = 465;
$mail->Username = 'proyectoafaregistro@gmail.com';
$mail->Password = 'xxed9210';
$mail->setFrom('proyectoafaregistro@gmail.com');
$mail->addAddress($destinatario);
$mail->Subject = $asunto;
$mail->Body = $cuerpo;
//send the message, check for errors
if (!$mail->send()) {
    echo "ERROR: " . $mail->ErrorInfo;
} else {
    echo "SUCCESS";
}




				
				
			  }}
			   ?>
      
          </div>
        </div>
      </div>
    </div>
    <!--Fin section-->
    <div class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title">Modificar Datos</h4>
          </div>
          <div class="modal-body"></div>
          <div class="modal-footer">
            <a class="btn btn-default" data-dismiss="modal">Cancelar</a>
            <a class="btn btn-primary">Modificar</a>
          </div>
        </div>
      </div>
    </div>
  

</body></html>