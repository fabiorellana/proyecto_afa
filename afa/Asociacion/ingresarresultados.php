<?php
session_start();
error_reporting(0);
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
<html>
<head>
    <title>Asociacion</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
	<script src="https://use.fontawesome.com/d0c885a572.js"></script>
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="Archivos\Framework\css\style1.css" rel="stylesheet" type="text/css">
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
                  <a href="registroclub.php"><div class="fa fa-user-plus">&nbsp;</div>Crear Nuevo Comite</a>
                </li>
			
                  <li>
                  <a href="administrarclub.php"><div class="fa fa-user-secret">&nbsp;</div>Administrar Comite </a>
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
				 
                  <a href="#"><div class="fa fa-toggle-on">&nbsp;</div>Activar / Desactivar Traspasos</a>
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
      <div class="container container-fluid">
        <div class="row" >
          <div class="col-md-12">
          
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title">Ingresar Resultados</h3>
              </div>
              <div class="panel-body">
               <form method="post" action="" class="form-horizontal">
               
              <div class="form-group">
                <div class="col-sm-12">              
                  <label for="selFecha" class="control-label">Numero de fecha</label>
                   <?php 
				   include "php/conexion.php";
				   $cnn=Conectar();
                  $rsqlfechas = "Select * from fechas where fechas.id not in (select resultados.id_fecha from resultados)"; 
                  $rsfechas = mysql_query($rsqlfechas, $cnn);
                  ?>
                  <select required class="form-control" id="selfechas" name="selfechas">
                    <option selected="selected">Seleccione un encuentro</option>
                    <?php while($rowfechas=mysql_fetch_array($rsfechas))
                    { 
					 
					$id = $rowfechas["id"]; 
					$nrofecha = $rowfechas["nrofecha"]; 
                      $fecha = $rowfechas["fecha"]; 
                      $local = $rowfechas["id_club_local"]; 
                      $visita = $rowfechas["id_club_visita"];
					  
					  //nombre local
					  $sqllocal="select nombre from club where id ='$local'";
					  $rslocal= mysql_query($sqllocal, $cnn);
					  while($rowlocal=mysql_fetch_array($rslocal)){$nlocal=$rowlocal['nombre'];}
					  
					  $sqlvisita="select nombre from club where id ='$visita'";					
					  $rsvisita= mysql_query($sqlvisita, $cnn);
			  		  while($rowvisita=mysql_fetch_array($rsvisita)){$nvisita=$rowvisita['nombre'];}
					  
					  
					  
					  ?>
                    <option value="<?php echo $id; ?>">
                      <?php echo "Fecha N°".$nrofecha."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                  ".$fecha.'  &nbsp; &nbsp; &nbsp; '.$nlocal. '&nbsp; v/s &nbsp; '.$nvisita; ?>
                    </option>
                    <?php } ?>
                  </select>                
                  
                  </div>
                  </div>
<div  class="form-group col-sm-12" align="center" >
              <div  id="nombres"><h3>Ingresar Resultados</h3></div>
              <div  class="col-sm-5"><div id="local"></div><input name="local" id="local" type="Number" maxlength="2" required class="input-group-lg input-lg" type="text"></div>
              <div class="col-sm-2"><h2>V/S</h2></div>
              <div  class="col-sm-5"><div id="visita"></div><input name="visita" id="visita"  type="Number" maxlength="2" required class="input-group-lg input-lg" type="text"></div>
              
              </div>
             
              </div>
               <br>
              <br>
            <div align="center"> <a  data-toggle="modal" data-target="#myModal" id="btnaceptar" class="btn btn-success btn-lg">Guardar</a></div>
            <br>
         
            <br>
            </div>
          </div>
          
        </div>
      </div>
    </div>
    
  
  
  
  
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true" >×</button>
            <h4 class="modal-title"></h4>
          </div>
          
          
          <div class="modal-body">
          
       <h2>¿Desea guardar los resultados para esta fecha?</h2>
          
          </div>
          
          <div class="modal-footer">
            <input class="btn btn-danger" data-dismiss="modal" type="button" value="Cancelar">
            
            <input type="submit" class="btn btn-success" name="btnEntrar" id="btnEntrar" value="Aceptar" />
           
              <?php
			  
			  //Rescatando las variables
			  if($_POST['btnEntrar']=="Aceptar"){
$idfecha = $_POST['selfechas'];
$rlocal = $_POST['local'];
$rvisita = $_POST['visita'];


//comprueba qu no exista resuktados para fecha
$rscomprobar=mysql_query("select id from resultados where id_fecha=$idfecha",$cnn);
if(mysql_num_rows($rscomprobar)!=0){
	echo "<script>alert('Existen resultados para la fecha que intenta ingresar, porfavor seleccione otro encuentro');</script>";
	
	}else{
$sql = "insert into resultados values('','$idfecha','$rlocal','$rvisita')";
mysql_query($sql, $cnn);
//consulta id de clubes para tabla puntos
$sqlclubes="SELECT fechas.id_club_local as local, fechas.id_club_visita as visita from fechas where fechas.id=$idfecha";
$rsclubes=mysql_query($sqlclubes, $cnn);
while($rowclubes=mysql_fetch_array($rsclubes)){
	
	//desancionar
	$desancionar="select res_club_local as local, res_club_visita as visita from resultados where club=$idfecha";
	$rsdesancionar=mysql_query($desancionar, $cnn);
	while($rowdesancionar=mysql_fetch_array($rsdesancionar)){
		$desancionarlocal=$rowdesancionar['local'];
		$desancionarvista=$rowdesancionar['visita'];
		
		$sqldesancionar="select * from jugadores where club= $desancionarlocal or club = $desancionarvista";
		$rsdesacncionarselsancion=mysql_query($sqldesancionar,$cnn);
		while($rowdesancionarselect=mysql_fetch_array($rsdesacncionarselsancion)){
			
			$sqlselsancionado="select * sancion where id_jugador=".$rowdesancionarselect['rut']."";
			$rsselsancionado=mysql_query($sqlselsancionado,$cnn);
			while($rowsancionado=mysql_fetch_array($rsselsancionado)){
				
				$idparadesancionar=$rowsancionado['id'];
				
				$vercantidaddefechas="select cantidad_de_fechas as fechas from sancion where id=$idparadesancionar";
				$rscantidaddefechas=mysql_query($vercantidaddefechas,$cnn);
				while($rowcantfechas=mysql_fetch_array($rscantidaddefechas)){
				
				$confechas=$contadorfechas['fechas'];
				$confechas--;
				$updatedesancionar="UPDATE `sancion` SET `cantidad_de_fechas` = '$confechas' WHERE `sancion`.`id` = $idparadesancionar;";
				echo $updatedesancionar;
				echo "<script>alert(".$updatedesancionar.")</script>";
				mysql_query($updatedesancionar, $cnn);
				
				}
				
				}
			
			}
		
		}
	
	
	
	
	$puntoslocal=0;
	$puntosvisita=0;
	if ($rlocal>$rvisita){
		$puntoslocal=3;
		}else{
			$puntosvisita=3;}
			
	if($rlocal===$rvisita){
		$puntoslocal=1;
		$puntosvisita=1;
		}		
	
	
$sqlpuntos1="insert into puntos values('',".$rowclubes['local'].",'$puntoslocal')";
$sqlpuntos2="insert into puntos values('',".$rowclubes['visita'].",'$puntosvisita')";



}

mysql_query($sqlpuntos1, $cnn);
mysql_query($sqlpuntos2, $cnn);
echo "<script>alert('Se ingresaron los resultados')</script>";

echo "<script> window.location='ingresarresultados.php'</script>";
			  }}
             ?>
                
			   </form>
          </div>
        </div>
      </div>
    </div>
  
<script>
  
    
$(document).ready(function() {

  
  
  
  
$( "#selfechas" ).change(function() {
     var valor = $("#selfechas option:selected").html();
    $("#local").text("local")
	  $("#visita").text("Visita")
});

    // Así accedemos al Texto de la opción seleccionada

    // Si seleccionamos la opción "Texto 2"
    // nos mostrará por pantalla "Texto 2"

	
	
	})


  </script>
</body></html>