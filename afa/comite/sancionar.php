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
<!DOCTYPE html>
<html><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
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
        <div class="row">
          <h1>Sancionar Jugadores</h1>
          <br>
                    
          
          
           <div class="col-md-12 container container-fluid table-responsive">
          
<?php $nrofecha=$_GET['id']; 
$local=$_GET['local'];
$visita=$_GET['visita'];

$sqljugadores="select id_club_local, id_club_visita from fechas where  id=".$nrofecha."";

$rs= mysql_query($sqljugadores,$cnn);
while($rowjugadores=mysql_fetch_array($rs)){


	
	


?>          
       <div class="col-sm-5">
       <div class="panel panel-primary">
       
       <div class="panel panel-heading"><?php echo $local;?></div>
	
  <table width="200" border="0" class="table table-condensed table-responsive">
  <tr>
    <th scope="col">Nombre</th>
    <th scope="col">Sancionar</th
  ></tr>
  <tr>
   <?php
	   
	   $sql_clubLocal="select * from jugadores where club=".$rowjugadores['id_club_local']."";
	    
		$rsclublocal=mysql_query($sql_clubLocal, $cnn);
	   while($rowclublocal=mysql_fetch_array($rsclublocal)){
	   ?>
       
    <td><?php echo $rowclublocal['nombre'];?></td>
    <td><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#dataUpdate"   id="target" data-id="<?php echo $rowclublocal['rut']?>" >Sancionar</button></td>
  </tr>


    <?php }?>

	  </table>
        
		</div>
       </div>  
      
  	   <div class="col-sm-1">&nbsp;</div>
       <div class="col-sm-5 ">
         <div class="panel panel-primary">
         <div class="panel-heading"><?php echo $visita;?></div>
       
        <table width="200" border="0" class="table table-condensed table-responsive">
  		<tr>
    	<th scope="col">Nombre</th>
    	<th scope="col">Sancionar</th
  		></tr>
  		<tr>
   
       <?php	   
	   $sql_clubLocal="select * from jugadores where club=".$rowjugadores['id_club_visita']."";
	   $rsclublocal=mysql_query($sql_clubLocal, $cnn);
	   while($rowclublocal=mysql_fetch_array($rsclublocal)){
	   ?>
       

   
    
  <td> <?php echo $rowclublocal['nombre'];?></td>
    <td><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#dataUpdate"   id="target" data-id="<?php echo $rowclublocal['rut']?>" >Sancionar</button></td>
  </tr>


      
       
       <?php }}?>
       </table>
       
       
       </div>
</div>
       
       
       </div>              
          </div>
        </div>
      </div>
    </div>
    
   <div class="modal fade"  id="dataUpdate" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content" id="tabla">
       
   
          
         
       
        </div>
      </div>
    </div>

</body></html>
    <script>

$('#dataUpdate').on('show.bs.modal', function (event) {
	
  var button = $(event.relatedTarget) // Botón que activó el modal
	
	 var codigo = button.data('id')
	 
	
	 
	  $.ajax({
                    type: "POST",
                    url: "php/modalsancionar.php",
                    data: {b: codigo},
                    beforeSend: function(){
                          //imagen de carga
						
                          $("#tabla").html("<p align='center'><img src='Archivos/Imagenes/logo afa/ball.gif' /></p>");
                    },
                    error: function(){
                          alert("error petición ajax");
                    },
                    success: function(data){
						                                                     
                          $("#tabla").empty();
                          $("#tabla").append(data);
						  
                                                             
                    }
              });
                     
  
  
  
});
                    
</script>