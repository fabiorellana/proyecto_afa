<html><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="asociaciones.css" rel="stylesheet" type="text/css">
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
          <a class="navbar-brand" href="#"><span>Asociaciones</span></a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-ex-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li>
              <a href="index.php">Inicio</a>
            </li>
            <li>
              <a href="#">Iniciar sesión</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    
    
    <div class="container">
    
    <?php $sql="select * from asociacion";
		  include "php/conexion.php";
		  $cnn=Conectar();
		  
		 $rs= mysql_query($sql, $cnn);
		 
		 while($row=mysql_fetch_array($rs)){
			 
			 $asociacion=$row['nombre'];
			  $region=$row['region'];
			   $ciudad=$row['ciudad'];
			   $comuna=$row['comuna'];
			   $rut=$row['rut'];
			   
			 }
	
	
	?>
    
    <h3 align="center">Asociaciones</h3>
    <br>
    <br>
    
    <a href="posiciones.php"><?php echo "Nombre:&nbsp;&nbsp;",$asociacion, "&nbsp;<br>Comuna:&nbsp;", $comuna?></a>
    
    
    
    </div>
  

</body></html>