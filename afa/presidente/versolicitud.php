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
        <div class="row">
		
		
		<div class="section">
<div class="container">

        
        

		<?php 
		$idtraspaso=$_GET['idsolicitud'];
		
		$sqltraspaso="select * from traspaso where id =".$idtraspaso." ";

		$rstraspaso=mysql_query($sqltraspaso, $cnn);
		while($rowtraspaso=mysql_fetch_array($rstraspaso)){
			
			//sql nombre del jugador
			$jugador="select nombre from jugadores where rut=".$rowtraspaso['ID_jugador']."";
	$rsjugador=mysql_query($jugador, $cnn);
	while($rowjugador=mysql_fetch_array($rsjugador)){
	
	
	
	//sqlclubsolicitud
	$cluborigen="select nombre from club where id=".$rowtraspaso['id_club_solicitante']."";
	
	$rsclub=mysql_query($cluborigen, $cnn);
	while($rowclub=mysql_fetch_array($rsclub)){
		$clubsolicitante=$rowjugador['nombre'];
?>

			
		
      
        <div class="panel panel-primary  col-sm-12" align="center">
<div class="panel-body">
<label>Nombre del jugador</label>
<div class="" align="center"><?php echo "<h2> ".$rowjugador['nombre']."</h2>";?></div>
<div class="" align="center"> <img src="php/cargarimagen.php?id=<?php echo $rowtraspaso['ID_jugador'];?>" class="img img-circle img-responsive">
</div>
<label>Club solicitante</label>
<div class="" align="center"> <?php echo "<h4> ".$rowclub['nombre']."</h4>";}}//fin sql club solicitante?>     </div>    
<div class="" align="center"> <form method="post"><input type="submit" class="btn btn-lg btn-info"  name="aceptar" value="Aceptar" > </form>  </div>  
<br>
<br>
<br>
<div align="center" ">
<div class="form-group col-sm-12" align="center">   
<div class="alert alert-info col-sm-12" >

<p>Al presionar el boton aceptar, se entiende que se ha aceptado la negociación de traspaso</p>
<p>Por lo tanto, para esto se genera un codigo de transferencia, el cual es enviado al correo &nbsp;<?php //obtiene correo del presidente 
$rscorreo=mysql_query("Select correo_presidente as correo from club where id=$idclub",$cnn);
while($rowcorreo=mysql_fetch_array($rscorreo)){ echo $correo=$rowcorreo['correo'];}?></p>
 
 <p>Este codigo es el que permite la transferencia del jugador en el sistema.</p>
 <p>Una vez que la negociación del jugador se haya efectuado, presentar dicho codigo en su asociación</p>
 <p><?php 	if($_POST['aceptar']=="Aceptar"){?>Codigo de traspaso:<h4><?php echo $idtraspaso;}?> </h4></p>
 </div>

</div>



 
</div>       
        <?php }
		
		
		if($_POST['aceptar']=="Aceptar"){
			
			
			
			
			//estado en 0 traspaso aceptado
			$update="UPDATE `traspaso` SET `estado` = '0' WHERE `traspaso`.`id` = $idtraspaso";
			
			mysql_query($update, $cnn) or die (mysql_error());
			
			//enviar correo con codigo de transferencia
			$destinatario = $correo; 
$asunto = "codigo de transferencia "; 
$cuerpo = "Recientemente aceptaste la solicitud de transferencia realizada por el club: " .$clubsolicitante."

   

 Acontinuacion encontraras el codigo de tranferencia
 
 ".$idtraspaso."
 
 Este codigo te permitira realizar la transferencia de tu jugador al club: " .$clubsolicitante." 
 
 
 Acontinuacion se detallan las instrucciones para realizar el traspaso
 
1. Una vez que hayas aceptado la negociación por tu jugador Dirigete al presidente de tu asociación correspondiente en conjunto con el presidente   del club solicitante.

2. Entrega el Codigo de transferencia.

3. El presidente de la asociacion en su sistema ingresara el codigo.

4. listo la transferencia fue realizada!
 

   	Te recordamos Hacer entrega de este codigo solo cuando hayas aceptado la transferencia y se hayan realizado todas las negociaciones.
   
   
   
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
    echo "<script>alert('Solicitud de negociación aceptada')</script>";
}
			
			}
		
		
		
		?>
        </div>
  		</div>
       
</div>
       
        
        
</div>
		
		
		
		
		
		
		
		
		<?php 
		$idsancion=$_GET['id'];
	
$sql="select * from sancion where estado='1' and id =".$idsancion."";

$select=mysql_query($sql, $cnn);

while($row=mysql_fetch_array($select)){
	
	
	}
		
		
	
		?>
         
               
             
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