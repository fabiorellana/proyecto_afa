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
     <script type="text/javascript" src="js/addinput.js"></script>
	<script src="https://use.fontawesome.com/d0c885a572.js"></script>
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="Archivos\Framework\css\style1.css" rel="stylesheet" type="text/css">
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
	
    <div class="section" >
      <div class="container" id="load">
        
       
           <div class="col-md-6">
          <div class="panel panel-success">
 
  <div class="panel-heading">Crear fechas</div>
  <div class="panel-body">
    
   
          
          
            <?php 
			//cuenta cantidad de clubes existentes para crear Fechas
            include("php/conexion.php"); 
            $cnn=Conectar();
			$sqlcondecha="select id from club where estado=1";
			$rscontador=mysql_query($sqlcondecha);
			$cantidad=mysql_num_rows($rscontador);
			$totalfechas=$cantidad-1;
			
       
            ?>
            <form class="form-horizontal" role="form" method="post">
              <div class="form-group">
              
                <div class="col-sm-4">              
                  <label for="txtFecha" class="control-label">Numero de fecha</label>
                
                
                  <select class="form-control" id="txtFecha" name="txtFecha">
				   <?php for($i=1; $i<=$totalfechas; $i++){?>
				 <option value="<?php echo $i; ?>"><?php echo $i; ?>  </option>  
                 <?php }?> </select>
                </div>
                 
                <div class="col-sm-8">
                <label for="txtCalendario" class="control-label">Calendario</label>
                  <span class="col-sm-4">
                 
                  </span>
                  <input type="date" class="form-control" id="txtCalendario" placeholder="Calendario" name="txtCalendario">
                </div>
             
              </div>
            
             
             


   
              <div class="form-group">              
             <div class="col-sm-6">
			 
              <label class="control-label" for="selClubL">Local</label>
              <?php 
                            $ssql="select id, nombre from club where estado = '1'"; 
                            $rs1=mysql_query($ssql);
                            ?>
                            <select class="form-control" id="selClubL" name="selClubL">
                              <option selected="selected">Seleccione un club</option>
                              <?php 
                              while($row=mysql_fetch_array($rs1))
                              { 
                                $id=$row['id']; 
                                $nombre=$row['nombre'];?>
                              <option value="<?php echo $id; ?>">
                                <?php echo $nombre; ?>
                              </option>
                              <?php } ?>
                            </select>
							
							
							
							
					
              
             </div>
             
              <div class="col-sm-6"> 
               <label class="control-label" for="selClubL">Visita</label>
               
                <?php 
                            $ssql = "select id, nombre from club  where estado = '1'"; 
                            $rs1 = mysql_query($ssql);
                            ?>
                           <select class="form-control" id="selClubV" name="selClubV">
                              <option selected="selected">Seleccione un club</option>
                              <?php 
                              while($row=mysql_fetch_array($rs1))
                              { 
                                $id = $row['id']; 
                                $nombre = $row['nombre'];?>
                              <option value="<?php echo $id; ?>">
                                <?php echo $nombre; ?>
                              </option>
                              <?php } ?>
                            </select>
               
			  
             </div>             
              
              </div>
              
              
              
             <hr>
                 
              <div class="form-group">
                <div class="col-sm-6">
                  <label class="control-label" for="selTurno">Asignar Turno</label>
               
                  <?php 
                  $rsql1 = "select rut, nombre, apellidos from turno where estado='1'"; 
                  $rs3 = mysql_query($rsql1);
                  ?>
                  <select class="form-control" id="selTurno" name="selTurno">
                    <option selected="selected">Seleccione un Turno</option>
                    <?php while($row=mysql_fetch_array($rs3))
                    { 
                      $rut = $row["rut"]; 
                      $nombres = $row["nombre"]; 
                      $apellidos = $row["apellidos"];?>
                    <option value="<?php echo $rut; ?>">
                      <?php echo $nombres. ' '.$apellidos; ?>
                    </option>
                    <?php } ?>
                  </select>
                </div>
              </div>
              <div class="form-group">
            
                <div class="col-sm-6">
                  <label class="control-label" for="selMaquina">Máquina</label>
               
                  <?php 
                  $rsql2 = "select * from maquina";
                  $rs4 = mysql_query($rsql2); 
                  ?>
                  <select class="form-control" id="selMaquina" name="selMaquina">
                    <option selected="selected">Seleccione la maquina</option>
                    <?php 
                    while($row = mysql_fetch_array($rs4))
                    { 
                      $idmaquina = $row["id"]; 
                      $des = $row["descripcion"];?>
                    <option value="<?php echo $id; ?>">
                      <?php echo $des; ?>
                    </option>
                    <?php } ?>
                  </select>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 text-center">
                  <input type="submit" name="btnGuardar" class="btn btn-default btn-lg" value="Guardar">
                  <a href="../" class="btn btn-danger btn-lg">Cancelar</a>
                </div>
              </div>
            </form>
            <?php
            if($_POST['btnGuardar'] == "Guardar")
            {
				
              $nfecha = $_POST['txtFecha'];
              $fecha = $_POST['txtCalendario'];
              $local1 = $_POST['selClubL'];
              
              $visita1 = $_POST['selClubV'];
			  if($local1===$visita1){
				   echo "<br><div class='alert alert-danger'><font color='white'>El Equipo de Local y el de visita no deben ser el mismo </font></div>";
				  
			  }else{
              
              $turno = $_POST['selTurno'];              
              $maquina = $_POST['selMaquina'];


              $sql1 = "insert into fechas values(NULL,'$fecha','$nfecha','$local1','$visita1','$turno','$maquina')";
			  
              mysql_query($sql1, $cnn);
              echo "<script>$(document).ready(function() {      

        //Añadimos la imagen de carga en el contenedor
        $('#load').html('<div class='fa fa-refresh fa-spin fa-3x fa-fw'></div>');

});   
 </script>";
			

            

              echo "<script> alert('Se ingresaron las fechas de partidos')</script>";
            } 
			} ?>
          </div>
    
    
  </div>
 
 
</div>
       
      
       
          
          
          
          
          
          <div class="col-md-6">
          <div class="panel panel-default">
 
  <div class="panel-heading">Listado de fechas</div>
  <div class="panel-body">
  
  <?php for($a=1; $a<=$totalfechas; $a++){?><div class="list-group">
  <a   class="list-group-item active" data-toggle="collapse" data-target="#demo<?php echo $a; ?>"><h4>Ver fecha &nbsp;<?php echo $a; ?></h4></a>
</div>


  <div id="demo<?php echo $a; ?>" class="collapse">
    
    
     <table class="table table-responsive table-bordered table-striped">
     <td>Fecha</td>
     <td>Local</td>
     <td>Visita</td>
     <td>Turno</td>
     <td>Eliminar</td>
    <tr>
    <?php $sqlfechas="select * from fechas where nrofecha=".$a."";
	$rs=mysql_query($sqlfechas, $cnn);
	while($rowfechas=mysql_fetch_array($rs)){
	
	?>
   
   
     <td><?php echo $rowfechas['fecha'];  ?></td>
     <td><?php //consulta nombre del club local por id de consulta anterior
	 $local=$rowfechas['id_club_local']; 
	 $sqllo="select nombre from club where id=".$local."";
	
	  $rslocal=mysql_query($sqllo,$cnn);
	  while($rl=mysql_fetch_array($rslocal)){echo $rl['nombre'];}
	 	?></td>
     <td><?php //consulta nombre del club visita por id de consulta anterior
	 $visita=$rowfechas['id_club_visita']; 
	 $sqlvi="select nombre from club where id=".$visita."";
	
	  $rsvisita=mysql_query($sqlvi,$cnn);
	  while($rv=mysql_fetch_array($rsvisita)){echo $rv['nombre'];}
	 	?></td>
     <td><?php //consulta nombre del turno por id de consulta anterior 
	 $turno=$rowfechas['rut_turno']; 
	 $sqltu="select nombre from turno where rut=".$turno."";
	
	  $rsturno=mysql_query($sqltu,$cnn);
	  while($rt=mysql_fetch_array($rsturno)){echo $rt['nombre'];}
	 	?></td>
        <form method="GET" action="php/eliminar.php">
        <td class="hidden"><?php echo "<input type='text' value=".$rowfechas['id']." name='idborrar'>"; ?></td>
        <td><input type="submit" class="btn btn-danger " value="Eliminar" aria-label="Delete"> 
  
</a></td></form>

     <tr>
    <?php }?>
    
    </table>
    </div>
  <?php }?>
    
  </div>
</div>
          
          
          </div>
        </div>
      </div>
   
  

</body></html>