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
   
    <br>
    <br>
     <div class="well well-lg success" class="col-lg-5"><h5 align="center">Tabla de posiciones</h5></div>
      
 
    
    <table class="table table-hover table-bordered" border="1">
  <tr style="background-color:#006">
   <th width="6%" scope="col" whidht="5%" style="background-color:#060"><font color="#FFFFFF"> Pos</font></th>
    <th width="29%" scope="col"><font color="#FFFFFF">Club</font></th>
    <th scope="col" style="background-color:#F11" width="5%" ><font color="#FFFFFF">PTS</font></th>
    <th width="7%" scope="col"><font color="#FFFFFF">PJ</font></th>
    <th width="6%" scope="col"><font color="#FFFFFF">PG</font></th>
    <th width="11%" scope="col"><font color="#FFFFFF">PE</font></th>
    <th width="21%" scope="col"><font color="#FFFFFF">PP</font></th>
    <th width="5%" scope="col">&nbsp;</th>
    <th width="10%" scope="col">&nbsp;</th>
    
  </tr>
  
  <?php $sql="SELECT sum(puntos.puntos) as puntos, club.nombre, club.id as idclub from puntos inner join club where puntos.club=club.id GROUP by puntos.club ORDER BY puntos DESC";
  $pos=1;
   		include "php/conexion.php";
		$cnn=Conectar();
		$rs=mysql_query($sql, $cnn);
		while($row=mysql_fetch_array($rs)){  
		
		$paj=$row['idclub'];
		$sqlPj="select count(id) as cantidad from puntos where club=".$paj."";
		echo $sqlPj;
		
		//partidos jugados
		$rspj=mysql_query($sqlPj,$cnn);
		while($pj=mysql_fetch_array($rspj)){
			
			//partidos ganados
			$sqlclubes="SELECT fechas.id, fechas.id_club_local as local, fechas.id_club_visita as visita from fechas where id_club_local=$paj or id_club_visita=$paj";
			echo $sqlclubes;
			
$rsclubes=mysql_query($sqlclubes, $cnn);
while($rowclubes=mysql_fetch_array($rsclubes)){
	
	
	
}
			
  ?>
  <tr>
   <th width="6%" scope="col" whidht="5%" ><?php echo $pos++; ?></th>
    <th width="29%" scope="col"><?php echo $row['nombre']; ?></th>
    <th scope="col" style="background-color:#F11" width="5%" ><font color="#FFFFFF"><?php echo $row['puntos']; ?></font></th>
    <th width="7%" scope="col"><?php echo $pj['cantidad']; }?></th>
    <th width="6%" scope="col">&nbsp;</th>
    
  </tr>
  <?php } ?>
</table>

    </div>
  

</body></html>