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
                  <a href="historial-traspaso.php"><div class="fa fa-history">&nbsp;</div>Historial de Traspasos</a>
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
                        <h1>Gestion de Traspasos</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <form role="form" method="post">
                            <div class="form-group">
                                <label class="control-label" for="exampleInputEmail1">Ingrese el codigo de solicitud</label>
                                <input class="form-control" id="codigo" name="codigo"  type="text">
                            </div>
                            <input type="submit" class="btn btn-default" name="traspaso" value="Generar Traspaso">
                            <?php if($_POST['traspaso']=="Generar Traspaso"){
								include"php/conexion.php";
								$cnn=Conectar();
								$codigo=$_POST['codigo'];
								$select="select * from traspaso where id =$codigo and estado= 0";
								$rs=mysql_query($select, $cnn);
								while($row=mysql_fetch_array($rs)){
									//club al q se traspasara el jugador
									$clubnuevo=$row['id_club_solicitante'];
									$jugador=$row['ID_jugador'];
									if(!$row || !$jugador){echo "<script>alert('codigo incorrecto')</script>";}
									}
								
								
								$update="UPDATE `jugadores` SET `club` = '$clubnuevo' WHERE `jugadores`.`rut` = '$jugador'";
								mysql_query($update, $cnn);
								
								//borra traspaso de notificaciones
								$borrar="UPDATE `traspaso` SET `estado` = '3' WHERE `traspaso`.`id` = $codigo";
								mysql_query($borrar, $cnn);
								
								echo "<script>alert('Traspaso realizado exitosamente')</script>";
								}
							
							
							
							
							?>
                        </form>
                    </div>
                </div>
                <br>
                <br>
                <div class="alert alert-info">El codigo de solicitud es el codigo que se envio al correo del club solicitante una vez que se acepta la solicitud por el club de origen</div>
            </div>
            
        </div>
    

</body></html>