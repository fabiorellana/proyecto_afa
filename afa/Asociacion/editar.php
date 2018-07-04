<?php
error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Editar</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="Archivos\Framework\css\style1.css" rel="stylesheet" type="text/css">
</head>
   <body>
	<div class="section">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<?php
					include("php/conexion.php");
					$cnn = Conectar();
					$rut = $_GET["rut"];
					$sql = "select * from turno where rut = ".$rut."";
					$rs = mysql_query($sql, $cnn);
					
					while($row = mysql_fetch_array($rs))
					{	  
					?>
					<form role="form" method="post">
						<input type="text" name="txtRut" value="<?php echo $row[rut]; ?>" class="hidden disabled">
						<div class="form-group">
							<label class="control-label" for="txtNombreT">Nombres</label>
							<input class="form-control" id="txtNombreT" value="<?php echo $row["nombre"]; ?>" type="text" name="txtNombreT">
						</div>
						<div class="form-group">
							<label class="control-label" for="txtApellidosT">Apellidos</label>
							<input class="form-control" id="txtApellidosT" value="<?php echo $row["apellidos"]; ?>" name="txtApellidosT" type="text">
						</div>
						<div class="form-group">
							<label class="control-label" for="txtDireccionT">Direccion</label>
							<input class="form-control" id="txtDireccionT" value="<?php echo $row["direccion"]; ?>" name="txtDireccionT" type="text">
						</div>
						<div class="form-group">
							<label class="control-label" for="txtFonoT">Fono</label>
							<input class="form-control" id="txtFonoT" value="<?php echo $row["fono"]; ?>" name="txtFonoT" type="text">
						</div>
						<div class="form-group">
							<label class="control-label" for="txtCorreoT">Correo</label>
							<input class="form-control" id="txtCorreoT" value="<?php echo $row["correo"]; ?>" name="txtCorreoT" type="text">
						</div>
						<input type="submit" name="btnModificar" value="Modificar" class="btn btn-success">
					</form>
				</div>
				<?php } ?>
				<?php
				if($_POST['btnModificar'] == "Modificar")
				{
					$rutt = $_POST['txtRut'];
					$nombre = $_POST['txtNombreT'];
					$apellido = $_POST['txtApellidosT'];
					$direccion = $_POST['txtDireccionT'];
					$fono = $_POST['txtFonoT'];
					$correo = $_POST['txtCorreoT'];

					$sql = "update turno set nombre = '$nombre', apellidos = '$apellido', direccion = '$direccion', fono = '$fono', correo = '$correo' where rut = '$rutt'";
					echo $sql;
					mysql_query($sql, $cnn);

					echo "<script type='text/javascript'> alert('Datos modificados')</script>";
					echo "<script type='text/javascript'> window.location='../asociacion/administrarturno.php'</script>";
				}  
				?>
			</div>
		</div>
	</div>
</body>
</html>