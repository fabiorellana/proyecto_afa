
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
            <h1 class="text-center">Jugadores Sancionados</h1>
            <br>
            <br>
         
        <?php 
$id=$_GET['id'];

include "php/conexion.php";
$cnn=Conectar();
$sql="select jugadores.nombre, jugadores.rut, sancion.sancion from sancion inner join jugadores where jugadores.rut=sancion.id_jugador and id=".$id."";

$rs=mysql_query($sql,$cnn);
while($row=mysql_fetch_array($rs)){
	
	
	
	




?>
        <div class="row">
        <div class="col-md-4">
          <div class=" panel panel-primary">
            
            <div class="panel-heading">
            <h3 align="center" class="panel-title">Jugador sancionado</h3>
            </div>
            <div class="panel-body">
            
            <h4 align="center">
	<?php echo $row['nombre']; ?></h4>
    
    <div align="center"><img src="php/cargarimagen.php?id=<?php echo $row['rut'] ?>" class=" text-centerimg-rounded img-responsive" ></div>
    <h3 align="center">Causa</h3>
    <h5 align="center">	<?php echo $row['sancion']; ?></h5>
          </div>  
          <?php }?>      
          </div>
          </div>
        </div>
      </div>
    </div>
    </div>
    </div>


</body>
</html>
