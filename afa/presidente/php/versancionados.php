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

<!DOCTYPE html>
<html>
<head>

            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
            <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
			   <script type="text/javascript" src="js.js"></script>
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
                              
                                 <a href="reg_jug.php">Registro de Jugadores</a>
                            </li>
                            <li>
                              
                                 <a href="misjugadores.php">Mis Jugadores</a>
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
                                <a href="cerrarsesion.php">Salir</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            
            
 <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1 class="text-center">Gallery</h1>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <a><img src="http://pingendo.github.io/pingendo-bootstrap/assets/placeholder.png" class="img-responsive"></a>
            <h3>A title</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisici elit,&nbsp;</p>
          </div>
          <div class="col-md-4">
            <a><img src="http://pingendo.github.io/pingendo-bootstrap/assets/placeholder.png" class="img-responsive"></a>
            <h2>A title</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisici elit,&nbsp;</p>
          </div>
          <div class="col-md-4">
            <a><img src="http://pingendo.github.io/pingendo-bootstrap/assets/placeholder.png" class="img-responsive"></a>
            <h2>A ttile</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisici elit,&nbsp;</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <a><img src="http://pingendo.github.io/pingendo-bootstrap/assets/placeholder.png" class="img-responsive"></a>
            <h3>A title</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisici elit,&nbsp;</p>
          </div>
          <div class="col-md-4">
            <a><img src="http://pingendo.github.io/pingendo-bootstrap/assets/placeholder.png" class="img-responsive"></a>
            <h3>A title</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisici elit,&nbsp;</p>
          </div>
          <div class="col-md-4">
            <a><img src="http://pingendo.github.io/pingendo-bootstrap/assets/placeholder.png" class="img-responsive"></a>
            <h2>A title</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisici elit,&nbsp;</p>
          </div>
        </div>
      </div>
    </div>

<?php 
$id=$_GET['id'];
echo $id;
include "conexion.php";
$cnn=Conectar();
$sql="select * from sanciones where id=".$id."";
$rs=mysql_query($sql,$cnn);
while($row=mysql_fetch_array($rs)){
	
	echo $row['id'];
	
	
	}




?>
</body>
</html>
