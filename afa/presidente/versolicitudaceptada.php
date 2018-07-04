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

<html><head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
				   <script type="text/javascript" src="js.js"></script>
        <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="reg_jug.css" rel="stylesheet" type="text/css">
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
      <?php
	   $rut=$_GET['id'];
	   $sql="select jugadores.nombre from jugadores INNER JOIN traspaso where traspaso.ID_jugador=jugadores.rut and traspaso.id=$rut";
	   $rs=mysql_query($sql,$cnn);
	   while($row=mysql_fetch_array($rs)){
		   
		   
		
	   ?>
        
        <h3>Instrucciones a seguir para realizar el traspaso</h3>
        
        <p>El presidente del club, dueño del jugador que solicitaste acepto tu solicitud por el jugador:&nbsp;<?php echo $row['nombre']; }?></p>
        <p>Por lo tanto, al presidente dueño del jugador se le notifico en la intranet y se le envio un codigo de traspaso al correo electronico que registro.</p>
        <p>Por razones de seguridad este codigo no es notificado a ti.</p>
        <p>Este codigo debe ser presentado en la asociacion correspondiente para realizar el traspaso del jugador, desde el club de origen a tu club.</p>
      
        
        
        
        
        
        
        
			 </div>
			 </div>
			 
			 
              
                 
				  
               
               
              </div>
            </div>
          </div>
      
      
    </div>
    </form>
	   <script>
$(document).ready(function(){
    
	setInterval(" ajaxnotificacion();", 1000);
 
                                                      

});

   
	
	
    </script>
    <script>
$(document).ready(function(){
    
	setInterval("notificacionarriba()", 1000);
 solicitudtraspaso();
 notisancion();
 notiaceptada();
      	                                            

});


	//solicitud de traspaso notificacion
	function solicitudtraspaso(){
    
        var parametros = {
                "idclub" : <?php echo $idclub?>
				
        };
		
		
        $.ajax({
                data:  parametros,
                url:   'php/notifica-solicitud-traspaso.php',
                type:  'post',
                beforeSend: function () {
                        $("#contenedortraspaso").html("Procesando, espere por favor...");
                },
                success:  function (response) {
                        $("#contenedortraspaso").html(response);
						
                }
        });
		
		
	}
	
	
	//notificaciones arriba
	function notificacionarriba(){
    
        var parametros = {
                "idclub" : <?php echo $idclub?>
				
        };
		
		
        $.ajax({
                data:  parametros,
                url:   'php/notificaciones-arriba.php',
                type:  'post',
              
                success:  function (response) {
                        $("#resultado").html(response);
                }
        });
		
		
	}
	
	function notisancion(){
    
        var parametros = {
                "idclub" : <?php echo $idclub?>
				
        };
		
		
        $.ajax({
                data:  parametros,
                url:   'php/notificar-sancion.php',
                type:  'post',
                beforeSend: function () {
                        $("#contenedor").html("Procesando, espere por favor...");
                },
                success:  function (response) {
                        $("#contenedor").html(response);
                }
        });
		
		
	}
	
	function notiaceptada(){
    
        var parametros = {
                "idclub" : <?php echo $idclub?>
				
        };
		
		
        $.ajax({
                data:  parametros,
                url:   'php/solicitudaceptada.php',
                type:  'post',
                beforeSend: function () {
                        $("#solicitudaceptada").html("Procesando, espere por favor...");
                },
                success:  function (response) {
                        $("#solicitudaceptada").html(response);
                }
        });
		
		
	}
	


   

	
    </script>
   

</body></html>