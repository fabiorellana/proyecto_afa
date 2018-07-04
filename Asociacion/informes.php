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
include "php/conexion.php";
$cnn=Conectar();
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
        <div class="row">
		<h2>Registrar informe de turno</h2>
          <div class="col-md-10">
            <form role="form"  method="POST" >
              <div class="form-group">
              
                <?php 
                  $rsql1 = "select rut, nombre, apellidos from turno"; 
                  $rs3 = mysql_query($rsql1, $cnn);
                  ?>
                  <select required class="form-control" id="selTurno" name="selTurno">
                    <option selected="selected">Seleccione un Turno</option>
                    <?php while($row=mysql_fetch_array($rs3))
                    { 
                      $rut = $row["rut"]; 
                      $nombres = $row["nombre"]; 
                      $apellidos = $row["apellidos"];?>
                    <option value="<?php echo $rut; ?>">
                      <?php echo $nombres. ' '.$apellidos; ?>
                    </option>
                    <?php } ?>
                  </select>
				<span class="help-block">Seleccionar Nombre del turno en el informe</span>
				<br>
                
                 <?php 
                  $rsqlfechas = "select * from fechas"; 
                  $rsfechas = mysql_query($rsqlfechas, $cnn);
                  ?>
                  <select required class="form-control" id="selfechas" name="selfechas">
                    <option selected="selected">Seleccione un encuentro</option>
                    <?php while($rowfechas=mysql_fetch_array($rsfechas))
                    { 
					$id = $rowfechas["id"]; 
                      $fecha = $rowfechas["fecha"]; 
                      $local = $rowfechas["id_club_local"]; 
                      $visita = $rowfechas["id_club_visita"];
					  
					  //nombre local
					  $sqllocal="select nombre from club where id ='$local'";
					  $rslocal= mysql_query($sqllocal, $cnn);
					  while($rowlocal=mysql_fetch_array($rslocal)){$nlocal=$rowlocal['nombre'];}
					  
					  $sqlvisita="select nombre from club where id ='$visita'";					
					  $rsvisita= mysql_query($sqlvisita, $cnn);
			  		  while($rowvisita=mysql_fetch_array($rsvisita)){$nvisita=$rowvisita['nombre'];}
					  
					  
					  
					  ?>
                    <option value="<?php echo $id; ?>">
                      <?php echo $fecha.'  &nbsp; &nbsp; &nbsp; '.$nlocal. '&nbsp; v/s &nbsp; '.$nvisita; ?>
                    </option>
                    <?php } ?>
                  </select>
				<span class="help-block">Seleccionar fecha del encuetro en el informe</span>
				
				
                <textarea required class="form-control" id="exampleInputPassword1" placeholder="" name="txtinforme" >
				</textarea>
				
				<span class="help-block">Ingresar informe del turno maximo 150 lineas</span>
              </div></input></input>
              <table width="268" border="0" align="center">
                <tr>
                  <td width="258"><input type="submit" class="btn btn-primary btn-lg" name="send" value="Enviar">
                  <a href="inicioasociacion.php" class="btn btn-danger btn-lg" >Cancelar</a></td>
                </tr>
              </table>
            </form>
			<?php if($_POST['send']=="Enviar"){
				
				$turno=$_POST['selTurno'];
				$fechas=$_POST['selfechas'];
				$informe=$_POST['txtinforme'];
				
				
				$sql="insert into informe values ('','$turno', '$fechas', '$informe')";
				
				
				mysql_query($sql,$cnn) or die (mysql_error);
				
				
			}?>
			
			<br>
			<br>
          </div>
           <div class="col-md-2">
		<div class="alert alert-info alert-dismissable">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
 <font color="blue"> <strong>¡Cuidado!</strong> El informe del turno, incluye informe general 
			de lo acontecido dentro del juego para posteriormente, hacer uso de este por parte del comite de
			disciplina designado, se solicita informacion fidedigna y correcta</font>
            </div>
        </div>
       
</div>
      </div>
    </div>
	
  

</body></html>