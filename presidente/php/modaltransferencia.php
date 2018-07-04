<?php
include "conexion.php";
$cnn = Conectar(); 
$rut = $_POST['rutjugador'];
$sql = "SELECT jugadores.nombre as nombrejugador, club.nombre as nombreclub FROM jugadores, club WHERE (jugadores.club = club.id) and (jugadores.rut=".$rut.")";
$rs=mysql_query($sql, $cnn);

while($row=mysql_fetch_array($rs)){

?>
<!--Rescatando los datos por metodo post para mostrarlo en las cajas de texto-->
<form action="enviarsolicitud.php" method="post">
	<div class="form-group">
		<div class="col-sm-4">
			<input type="text" name="rut"  class="hidden" value="<?php echo $rut;?>">
			<label for="imagen">Imagen</label>
			<input type="text" value="<?php echo 'asdsad'; ?>">
		</div>
	</div>

	<div class="form-group">
		<div class="col-sm-4">
			<label for="txtNombre">Nombre</label>
			<input type="text" name="txtNombre" id="txtNombre" value="<?php echo $row['nombrejugador']; ?>">
		</div>
	</div>

	<div class="form-group">
		<div class="col-sm-4">
			<label for="txtClubOrigen">Club Origen</label>
			<input type="text" name="txtClubOrigen" id="txtClubOrigen" value="<?php echo $row['nombreclub']; ?>">
		</div>
	</div>

	<!--Parte inferior de la ventana modal-->
	<div class="modal-footer">
		<div class="form-group">
			<?php }?>
			<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
			<input type="submit" value="Solicitar" class="btn btn-primary">
		</div>
	</div>
</form>


