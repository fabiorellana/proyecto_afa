<?php
error_reporting(0);
include "conexion.php";
$cnn = Conectar();

 $buscar = $_POST['c'];
       
      if(!empty($buscar)) {
            buscar($buscar);
      }else{
		  
		  $sql ="select * from club";


$rs = mysql_query($sql, $cnn);


				echo "<table class='table-bordered table-striped table-hover table-condensed' align='center'>";
				echo "<tr>";
				echo "<th> <b> Nombre del Club </b> </th>";
				echo "<th> <b> Cantidad de series </b> </th>";
				echo "<th> <b> Nombre presidente </b> </th>";
				echo "<th> <b> Direccion </b> </th>";
				
				echo "</tr>\n";

while($row = mysql_fetch_array($rs))
{


				
				echo "<tr>";
				echo "<td> $row[nombre] </td>";
			    echo "<td> $row[cant_series]</td>";
				echo "<td> $row[nombre_presidente]</td>";
		echo "<td> $row[direccion]</td>";
				echo "</tr>\n";
				}//fin while
				
				echo "</table>";
		  
		  
		  
		  }
       
      function buscar($c) {
		 
$cnn = Conectar();
           $sqll="SELECT * FROM club WHERE nombre LIKE '%".$c."%'";
       
            $sqlins = mysql_query($sqll, $cnn);
             
            $contar = mysql_num_rows($sqlins);
             
            if($contar == 0){
                  echo "No se han encontrado resultados para <b>".$c."</b>";
            }else{
				
				echo "<table class='table-bordered table-striped table-hover table-condensed' align='center'>";
				echo "<tr>";
				echo "<th> <b> Nombre del Club </b> </th>";
				echo "<th> <b> Cantidad de series </b> </th>";
				echo "<th> <b> Nombre presidente </b> </th>";
				echo "<th> <b> Direccion </b> </th>";
				
				echo "</tr>\n";
                  while($roww=mysql_fetch_array($sqlins)){
								echo "<tr>";
				echo "<td> $roww[nombre] </td>";
			    echo "<td> $roww[cant_series]</td>";
				echo "<td> $roww[nombre_presidente]</td>";
		echo "<td> $roww[direccion]</td>";
					
				
                  }
            }
      }
















?>