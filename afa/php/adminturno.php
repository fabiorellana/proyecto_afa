
<?php
error_reporting(0);
sleep(0,5);
include "conexion.php";
$cnn = Conectar();

 $buscar = $_POST['b'];
       
      if(!empty($buscar)) {
            buscar($buscar);
      }else{
		  
		  $sql ="select * from turno";


$rs = mysql_query($sql, $cnn);


				echo "<table class='table-bordered table-striped table-hover table-condensed' align='center'>";
				echo "<tr>";
				echo "<th> <b> Rut </b> </th>";
				echo "<th> <b> Nombres </b> </th>";
				echo "<th> <b> Apellidos </b> </th>";
				echo "<th> <b> Direccion </b> </th>";
				echo "<th> <b> telefono</b> </th>";
				echo "<th> <b> correo </b> </th>";
			    echo "<th> <b id='editar'> Editar </b> </th>";
				echo "</tr>\n";

while($row = mysql_fetch_array($rs))
{


				$rut = $row["rut"];
				echo "<tr>";
				echo "<td> $row[rut] </td>";
				echo "<td> $row[nombre]</td>";
				echo "<td> $row[apellidos] </td>";
				echo "<td> $row[direccion] </td>";
				echo "<td> $row[fono] </td>";
				echo "<td> $row[correo] </td>";
				echo "<td> <a href='#myModal' data-toggle='modal' id='".$rut."'><img src='Archivos/Imagenes/logo afa/writing.png' width='30' height='30' /> </a>";
				echo "</tr>\n";
				}//fin while
				
				echo "</table>";
		  
		  
		  
		  }
       
      function buscar($b) {
		 
$cnn = Conectar();
           $sqll="SELECT * FROM turno WHERE nombre LIKE '%".$b."%'";
       
            $sqlins = mysql_query($sqll, $cnn);
             
            $contar = mysql_num_rows($sqlins);
             
            if($contar == 0){
                  echo "No se han encontrado resultados para <b>".$b."</b>";
            }else{
				
				    echo "<table class='table-bordered table-striped table-hover table-condensed' align='center'>";
						echo "<tr>";
						echo "<th> <b> Rut </b> </th>";
						echo "<th> <b> Nombre</b> </th>";
						echo "<th> <b> Apellidos </b> </th>";
						echo "<th> <b> Direccion </b> </th>";
						echo "<th> <b> telefono</b> </th>";
						echo "<th> <b> correo </b> </th>";
							echo "<th> <b> Editar</b> </th>";
						echo "</tr>\n";
                  while($roww=mysql_fetch_array($sqlins)){
					  
					  	$rut = $roww["rut"];
						echo "<tr>";
						echo "<td> $roww[rut] </td>";
						echo "<td> $roww[nombre]</td>";
						echo "<td> $roww[apellidos] </td>";
						echo "<td> $roww[direccion] </td>";
						echo "<td> $roww[fono] </td>";
						echo "<td> $roww[correo] </td>";
						echo "<td > <a href='#myModal' data-toggle='modal' id='".$rut."'><img src='Archivos/Imagenes/logo afa/writing.png' width='30' height='30' /> </a></td>";
						echo "</tr>\n";
					
				
                  }
            }
      }
















?>