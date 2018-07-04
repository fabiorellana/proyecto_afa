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
          <a class="navbar-brand" href="index.php"><span>Proyecto &nbsp;A.F.A &nbsp; Disciplina</span></a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-ex-collapse">
          <ul class="nav navbar-nav navbar-right">
           
              <li class="">
              <a href="historial.php"><div class=" fa fa-history">&nbsp;</div>Historial de sanciones</a>
            </li>
            <li class="">
              <a href="informes.php"><div class="fa fa-file-o">&nbsp;</div>Informes</a>
            </li>
            <li class="">
              <a href="bandejanotificaciones.php">Notificaciones<span class="badge  alert-danger" id="resultado"></span></a>
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
       <table  border="0" class=" table table-responsive table-hover table-bordered" >
    <tr class="success">
    <td>Jugador</td>
     <td>Club</td>
    <td>Motivo sanción</td>
    <td>Cantidad de fechas</td>
    <td>&nbsp;</td>
  </tr>
      <?php $sql="select sancion.sancion, jugadores.club, sancion.cantidad_de_fechas, jugadores.nombre from sancion INNER JOIN jugadores where sancion.id_jugador=jugadores.rut";
	  $rs=mysql_query($sql,$cnn);
	  while($row=mysql_fetch_array($rs)){
		  //nombre del club para tabla
			$club=$row['club'];
		  $sqlclub="select nombre as club from club where id=".$club."";
		$rsclub=mysql_query($sqlclub,$cnn);
		while($rowclub=mysql_fetch_array($rsclub)){
			
			
			
	  
	  ?>
      		 
       
  <tr>
    <td><?php echo $row['nombre']?></td>
    <td><?php echo $rowclub['club']?></td>
    <td><?php echo $row['sancion']?></td>
    <td><?php echo $row['cantidad_de_fechas']?></td>
    <td><button class="btn btn-default">Ver</button></td>
  </tr>

<?php }}?>
 </table> 
      
      
</div>
</div>
  

</body>
<script>
$(document).ready(function(){

	var id = 1;
	
	
                
              //obtenemos el texto introducido en el campo de búsqueda
			
              consulta = id;
		console.log(consulta);
			   consulta1 = "select * from fechas where id_club_local or id_club_visita = id'";
	
                                                                           
            
                                                                                  
              $.ajax({
                    type: "POST",
                    url: "php/notificar.php",
                    data: { c : consulta, c2 : consulta1 },
                    beforeSend: function(){
                          //imagen de carga
                          $("#aa").html("<p align='center'><img src='../Archivos/Imagenes/logo afa/ball.gif' /></p>");
                   },
                    error: function(){
                          alert("error peticion ajax");
                    },
                    success: function(data){                                                    
                          $("#resultado").empty();
                          $("#resultado").append(data);
						  console.log(data);
                    }
              });
                                                                                  
				            
                                               
	
});



    </script>

</html>