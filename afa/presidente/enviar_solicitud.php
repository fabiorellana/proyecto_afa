<?php $rut=$_GET['rut'];?>
<?php $clubsolicitante=$_GET['club'];
include "php/conexion.php";
$cnn=Conectar();

?>
<html>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<div class="section">
<div class="container">
<?php $sql="select club from jugadores where rut=".$rut."";
$rs=mysql_query($sql, $cnn);
while($row=mysql_fetch_array($rs)){
	

	
	$idtraspaso =rand(1000000,9999999);
	//verifica numero id unico
	$verificar="select id from traspaso where id=".$idtraspaso."";
	$rsver=mysql_query($verificar, $cnn);
	while($rr=mysql_fetch_array($rsver)){ 
	
	if($rr['id']===$idtraspaso){
		$idtraspaso =rand(1000000,9999999);
		}
		
		
	}
	$sqltraspaso="insert into traspaso values('".$idtraspaso."','".$clubsolicitante."','1','".$rut."','".$row['club']."')";
	mysql_query($sqltraspaso, $cnn) or die (mysql_error);

	

?> 
        
        
        <div class="col-md-offset-1"> <p align="center"><h3>Solicitud de Negociación de traspaso de jugador enviado exitosamente al club <?php $consultaclub="select nombre from club where id=".$row['club'].""; $resu=mysql_query($consultaclub, $cnn);
		while($fila=mysql_fetch_array($resu)){
			
			
		$nombreclub=$fila['nombre'];
		echo $fila['nombre'];} }?></h3></p></div>
        
		<?php $sqljugador="select * from jugadores where rut =".$rut." ";

		$jugador=mysql_query($sqljugador, $cnn);
		while($rows=mysql_fetch_array($jugador)){
			
			
			
		?>  
        <div class="col-sm-4"></div>
        <div class="panel panel-primary  col-sm-4">
  <div class="panel-body">
   <div class="" align="center"><?php echo "<h4> ".$rows['nombre']."</h4>";?></div>
        <div class="" align="center"> <img src="archivos/imagen/aranguiz.png" class="img img-circle img-responsive">      </div>
   <div class="" align="center"> <?php echo "<h4> ".$nombreclub."</h4>";?>     </div>    
   
         <div class="alert alert-info">Se realizo la solicitud del jugador</div>
        
        <?php }?>
        </div>
  		</div>
        <div class="col-sm-4"><div id="contador">Le redireccionaremos automáticamente en 60 segundos</div></div>
</div>
       
        
        
</div>


</html>

<script>
var segundos = 5;
function contar(){
	if(segundos <= 0){
		document.getElementById("contador").innerHTML = "cerrando...";
		window.location="index.php";
	
	} else {
		segundos--;
		document.getElementById("contador").innerHTML = "Esta notificacion se cerrara en " + segundos + " segundos.";
		
	}
}
setInterval("contar()",1000);
</script>
