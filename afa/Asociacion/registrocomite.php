<?php
error_reporting(0); 
session_start();
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
        <title>Registro de Comite</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
        <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="Archivos/Framework/css/style1.css" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="js/script2.js"></script>
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
                  <a href="registrocomite.php"><div class="fa fa-user-plus">&nbsp;</div>Crear Nuevo Comite</a>
                </li>
      
                  <li>
                  <a href="administrarcomite.php"><div class="fa fa-user-secret">&nbsp;</div>Administrar Comite </a>
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
         
                  <a href="activar_desactivar.php"><div class="fa fa-toggle-on">&nbsp;</div>Activar / Desactivar Traspasos</a>
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
                        <h1 class="text-left">Registro Comite de disciplina</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12"><form role="form" method="post">
                    <div class="form-group">
                    <label class="control-label" for="exampleInputEmail1">Email</label>
                    <input class="form-control" id="exampleInputEmail1" placeholder="E-mail Representante" type="email" name="email"></div>
                    <div class="form-group">
                    <label class="control-label" for="exampleInputPassword1">Rut</label>
                    <input class="form-control" id="exampleInputPassword1" placeholder="Rut Representante" type="text" name="rut"></div>
                    <div class="form-group"><label class="control-label" for="exampleInputPassword1">Telefono</label>
                    <input class="form-control" id="exampleInputPassword1" placeholder="Telefono  Representante" type="text" name="telefono"></div>
                    <input type="submit" class="btn btn-lg btn-success" value="Guardar" name="guardar">
                    
                    <?php 
			  if ($_POST['guardar']=="Guardar"){
				  include ("php/conexion.php");  
				$cnn=conectar();
				  

				
				
		$emaIL =$_POST['email'];
	$rut =$_POST['rut'];
	$fono =$_POST['telefono'];

	
					  //verificar existencia de registro
				  $sql_confirmar="select representante_rut from comite where representante_rut='".$rut."'";
				  
				  $res=mysql_query($sql_confirmar, $cnn);
				 $fila=mysql_num_rows($res);
				 if($fila > 1){echo '<script language="javascript">alert("Rut Ya existe dentro de la base de datos");</script>';
				echo " <script>  window.location ='asociacion.html';  </script>";
				 }else{
				
	//VERIFICAR ULTIMO REGISTRO
	
	$rs = mysql_query("SELECT MAX(id) AS id FROM reg_login", $cnn);
if ($row = mysql_fetch_row($rs)) {
$idlogin = trim($row[0]);
$idlogin=$idlogin+1;
}
	
	$sqllogin="insert into reg_login values('$idlogin','$emaIL', '$emaIL', 3);";
	
	mysql_query($sqllogin, $cnn);
	
	
	
	$sql="insert into comite values('','$idlogin', '$fono', '$emaIL', '$rut', 1)";
	mysql_query($sql, $cnn);
	
  echo $sql;

	echo '<script language="javascript">alert("Guardado exitosamente!");</script>'; 
				
				
			  }}
			   ?>
                    
                    </form></div>
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
    

</div>
<footer class="section section-danger"> 
  <div class="container"> 
    <div class="row"> 
      <div class="col-sm-6"> 
        <h1>Footer header</h1> 
        <p>Lorem ipsum dolor sit amet, consectetur adipisici elit, 
          <br>sed eiusmod tempor incidunt ut labore et dolore magna aliqua. 
          <br>Ut enim ad minim veniam, quis nostrud
        </p>
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
  </div>
</footer>
</body>
</html>