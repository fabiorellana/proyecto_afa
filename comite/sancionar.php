<?php
session_start();

if(!$_SESSION['idusuario']){
	
	
	header("location: ../index.php");
	
	
	}else{
		include "php/conexion.php";
		$cnn=Conectar();
		
		$id=$_SESSION['idusuario'];
		
		
		
		}
	
	
?>
<html><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/d0c885a572.js"></script>
    <script src="js/js.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="index.css" rel="stylesheet" type="text/css">
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
          <a class="navbar-brand" href="#"><span>Proyecto &nbsp;A.F.A</span></a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-ex-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="">
              <a href="Sancionar.php"><div class="fa fa-exclamation-triangle">&nbsp;</div>Sancionar jugadores</a>
            </li>
              <li class="">
              <a href="#"><div class=" fa fa-history">&nbsp;</div>Historial de sanciones</a>
            </li>
            <li class="">
              <a href="#"><div class="fa fa-file-o">&nbsp;</div>Informes</a>
            </li>
            <li class="">
              <a href="#">Notificaciones<span class="badge">42</span></a>
            </li>
            <li class="dropdown active">
              <a href="#" class="btn btn-block 

 dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><div class="fa fa-user-circle">&nbsp;</div>Sesión <i class="fa fa-caret-down"></i></a>
              <ul class="dropdown-menu" role="menu">
                <li>
                  <a href="#"><div class="fa fa-cog">&nbsp;</div>Modificar Datos</a>
                </li>
                <li class="divider"></li>
                <li>
                  <a href="php/cerrarsesion.php"><div class="fa fa-sign-out">&nbsp;</div>Cerrar Sesión</a>
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
          <h1>Informes</h1>
          <br>
                      <span class="help-block">Seleccione un club, para ver sus jugadores</span>

          <div class="form-group">
          <div class="col-sm-10">
          
          <select  class="form-control"  name="sel" id="sel">
		  <?php $sql="select id, nombre from club"; $rs=mysql_query($sql, $cnn); while($rrow=mysql_fetch_array($rs)){?>
            <option value="<?php echo $rrow['id'];?>"><?php echo $rrow['nombre'];?></option>
          <?php }?>          
          </select>
          </div>
          <div class="col-sm-2">
         <button id="verclub" class="btn btn-success glyphicon glyphicon-search">&nbsp; Buscar</button>
          </div>
          
          </div>
          
          
          <br>
          
            <br>
              <br>
          <div class="col-md-12 container container-fluid table-responsive" id="verlistasanciones">
          
          
          
           
          </div>
        </div>
      </div>
    </div>
  

</body></html>