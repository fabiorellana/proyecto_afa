<?php 
$cons=$_POST['b'];


include "conexion.php";
$cnn=Conectar();
$des=$_POST['desactivar'];
$sqldesactivar="UPDATE `informe` SET `estado` = ".$des." WHERE `informe`.`id` = ".$cons.";";

mysql_query($sqldesactivar, $cnn);


$sql="select * from informe where id=".$cons."";


$rs=mysql_query($sql, $cnn);

while($row=mysql_fetch_array($rs)){


?>
<form method="post" action="php/updateclub.php">
<div class="form-group">

<div class="col-xs-12 col-md-12">
       <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
            <h4 class="modal-title"><font color="#330066">Informe</font> &nbsp; fecha N° 
			<?php echo $row['fecha'];
		
		$sqlclubes="select id_club_local, id_club_visita from  fechas where id=".$row['fecha']."";
		$rsidclubes=mysql_query($sqlclubes, $cnn);
		//id de clubes local y visita
			 while($rowidclubes=mysql_fetch_array($rsidclubes)){
		
		
			$sqllocal="select nombre from club where id=".$rowidclubes['id_club_local']."";
			 $rslocal=mysql_query($sqllocal); 
			 while($rowlocal=mysql_fetch_array($rslocal)){
				  $echolocal=$rowlocal['nombre'];
				  }
				  $sqlvisita="select nombre from club where id=".$rowidclubes['id_club_visita']."";
			 $rsvisita=mysql_query($sqlvisita); 
			 while($rowvisita=mysql_fetch_array($rsvisita)){
				  $echovisita=$rowvisita['nombre'];
				  }
				  echo "  ".$echolocal ."&nbsp;-&nbsp;". $echovisita;
			 }
				  ?></h4>
            </div>
          
           
             <div class="modal-body" >
                      <?php echo $row['informe']; 
					  //id get sancionar.php
					  $nrofecha=$row['fecha'];}?>
          </div>
         

			</div>
               </div>
               
               <div class="form-group">  
            
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary">
              <i class="fa fa-file-pdf-o" aria-hidden="true"></i>&nbsp; Descargar como pdf </button>
              
              <a href="sancionar.php?id=<?php echo $nrofecha; ?>&local=<?php echo $echolocal;?>&visita=<?php echo $echovisita;?>" class="btn btn-danger"> Sancionar</a>
            </div>
 
            </div>
         </form>