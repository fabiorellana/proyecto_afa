<?php
// Desactivar toda notificación de error
error_reporting(0);?>
<!DOCTYPE html>
<html>
<head>
  <!-- Site made with Mobirise Website Builder v2.2, http://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v2.2, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:700,400&amp;subset=cyrillic,latin,greek,vietnamese">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/animate.css/animate.min.css">
  <link rel="stylesheet" href="assets/mobirise/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
   <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js?ver=3.1.2'></script>
	<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?&sensor=true"></script>
	<style type="text/css">
		html, body {
		height: 100%;
		margin: 100;
		padding: 0;
		}
		#mapa_content {
			height: 50%;
		}
		@media print {
			html, body {
			height: auto;
		}
		#mapa_content {
			height: 50%;
		}
	</style>
	
	<script type="text/javascript"> 

		$(document).ready(function() {
    load_map();
});
 
var map;
 
function load_map() {
    var myLatlng = new google.maps.LatLng(20.68009, -101.35403);
    var myOptions = {
        zoom: 7,
        center: myLatlng,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    map = new google.maps.Map($("#map_canvas").get(0), myOptions);
}
 
$('#search').live('click', function() {
    // Obtenemos la dirección y la asignamos a una variable
    var address = $('#address').val();
	
	
    // Creamos el Objeto Geocoder
    var geocoder = new google.maps.Geocoder();
    // Hacemos la petición indicando la dirección e invocamos la función
    // geocodeResult enviando todo el resultado obtenido
    geocoder.geocode({ 'address': address}, geocodeResult);
});
 
function geocodeResult(results, status) {
    // Verificamos el estatus
    if (status == 'OK') {
        // Si hay resultados encontrados, centramos y repintamos el mapa
        // esto para eliminar cualquier pin antes puesto
		 $('#textfield5').val(results[0].geometry.location.lat());
		 $('#textfield4').val(results[0].geometry.location.lng());
        var mapOptions = {
            center: results[0].geometry.location,
			
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        map = new google.maps.Map($("#map_canvas").get(0), mapOptions);
        // fitBounds acercará el mapa con el zoom adecuado de acuerdo a lo buscado
        map.fitBounds(results[0].geometry.viewport);
        // Dibujamos un marcador con la ubicación del primer resultado obtenido
        var markerOptions = { position: results[0].geometry.location }
        var marker = new google.maps.Marker(markerOptions);
        marker.setMap(map);
    } else {
        // En caso de no haber resultados o que haya ocurrido un error
        // lanzamos un mensaje con el error
        alert("Geocoding no tuvo éxito debido a: " + status);
    }
}
    </script>
  
</head>
<body>
<section class="engine"><a rel="nofollow" href="http://mobirise.com">Mobirise responsive web design software</a></section>
<section class="mbr-navbar mbr-navbar--freeze mbr-navbar--absolute mbr-navbar--auto-collapse" id="ext_menu-0">
    <div class="mbr-navbar__section mbr-section">
        <div class="mbr-section__container container">
            <div class="mbr-navbar__container">
                <div class="mbr-navbar__column mbr-navbar__column--s mbr-navbar__brand">
                    <span class="mbr-navbar__brand-link mbr-brand mbr-brand--inline">
                        <a class="mbr-brand__logo" href="http://mobirise.com"><img class="mbr-navbar__brand-img mbr-brand__img" alt="" src="assets/images/logo291x217-168.png"></a>
                        <span class="mbr-brand__name"><a class="mbr-brand__name text-white" href="http://mobirise.com">Travel O'higgins</a></span>
                    </span>
                </div>
                <div class="mbr-navbar__hamburger mbr-hamburger text-white"><span class="mbr-hamburger__line"></span></div>
                <div class="mbr-navbar__column mbr-navbar__menu">
                    <nav class="mbr-navbar__menu-box mbr-navbar__menu-box--inline-right">
                        <div class="mbr-navbar__column"><ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-decorator mbr-buttons--active"><li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-white" href="#"  >Agregar</a></li>
<li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-white" href="lugares.php">Editar</a></li>                        
                        <li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-white" href="http://mobirise.com">Opciones</a></li> <li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-white" href="http://mobirise.com">Estadisticas</a></li><li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-white" href="http://mobirise.com"></a></li></ul></div>
                        <div class="mbr-navbar__column"><ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-inverse mbr-buttons--active"><li class="mbr-navbar__item"><a class="mbr-buttons__btn btn btn-primary" href="Funciones/logout.php">Salir</a></li></ul></div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mbr-box mbr-section mbr-section--relative mbr-section--fixed-size mbr-section--full-height mbr-section--bg-adapted" id="header2-13" style="background-color: rgb(204, 204, 204);">
  <div class="mbr-box__magnet mbr-box__magnet--sm-padding mbr-box__magnet--center-left">    
        
    <div class="mbr-box__container mbr-section__container container">
      <div align="right">  <form action="" method="post" enctype="multipart/form-data">
	  
     
	  

	  </div>
	  <table width="1192">
	   <br>
	   <br>
	    <br>
	   <br>
        <br>
	   <br>
        <br>
	   
	  <tr>
	    <td width="529">
        <div><input type="text" maxlength="100" id="address" placeholder="Dirección" name="txtdire"/> <input type="button" id="search" value="Buscar" /></div><br/>
<div id='map_canvas' style="width:500px; height:400px;"></div>
<p> 
<div id="latitude"></div>
</p>
<p>
<div id="longitude"></div>
</p>

</td>
	    <td width="4"></td>
	    <td width="75"> </td>
	  <td width="564"><table width="566" align="right">
  <tr>
    <td width="78" >Nombre</td>
    <td width="0" >&nbsp;</td>
    <td width="141" ><label for="textfield"></label>
      <input type="text" name="txtnomb" maxlength="40" id="textfield" required autofocus/></td>
    <td width="112">&nbsp;</td>
    <td width="112">Latitud</td>
    <td width="9">&nbsp;</td>
    <td width="198"><label for="textfield5">
      <input type="text" name="textfield5" maxlength="30" id="textfield5"
      required />
    </label></td>
  </tr>
  <tr>
    <td >&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td >&nbsp;</td>
    <td >&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td >Longitud</td>
    <td>&nbsp;</td>
    <td><label for="textfield4"></label>
      <input type="text" name="textfield4" maxlength="30" id="textfield4" required /></td>
    <td >&nbsp;</td>
    <td >Imagen</td>
    <td>&nbsp;</td>
    <td><label for="textfield3">
      <input name="uploadedfile" type="file">
    </label></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Descripción</td>
    <td>&nbsp;</td>
    <td><label for="textfield2"></label>
      <textarea name="txtdesc" id="textfield2" required></textarea></td>
    <td>&nbsp;</td>
    <td>Telefono</td>
    <td>&nbsp;</td>
    <td><label for="txtimag">
      <input type="number" maxlength="11" name="txtfono" required/>
    </label></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td >&nbsp;</td>
    <td >&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Clasificación</td>
    <td>&nbsp;</td>
    <td><select name="txtclas" maxlength="11" required="required">
      <option value="1">Hotel</option>
      <option value="2">Restaurante</option>
      <option value="3">Casino</option>
         <option value="4">balneario</option>
            <option value="5">camping</option>
               <option value="6">farmacia</option>
    </select></td>
    <td >&nbsp;</td>
    <td >Sitio web</td>
    <td>&nbsp;</td>
    <td><input type="text" maxlength="20" name="txtsiti"/></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td >&nbsp;</td>
    <td >&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Email</td>
    <td>&nbsp;</td>
    <td><input type="email" maxlength="25" name="txtemai" required/></td>
    <td >&nbsp;</td>
    <td >&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="7" align="center">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="7" align="left"><input type="reset" value="Limpiar" class=" btn btn-success"/>
      <input type="submit" name="btnaceptar" value="Aceptar"  class=" btn btn-info"/></td>
  </tr>
</table>
</td>
	  </table>


</form>
<?php
#subir archivo

$uploadedfileload="true";
$uploadedfile_size=$_FILES['uploadedfile'][size];
echo $_FILES[uploadedfile][name];
if ($_FILES[uploadedfile][size]>20000000)
{$msg=$msg."El archivo es mayor que 200KB, debes reduzcirlo antes de subirlo<BR>";
$uploadedfileload="false";}

if (!($_FILES[uploadedfile][type] =="image/pjpeg" OR $_FILES[uploadedfile][type] =="image/gif" OR $_FILES[uploadedfile][type] =="image/png"))
{$msg=$msg." Tu archivo tiene que ser JPG o GIF. Otros archivos no son permitidos<BR>";
$uploadedfileload="true";}

$file_name=$_FILES[uploadedfile][name];
$img="uploads/$file_name";
if($uploadedfileload=="true"){

if(move_uploaded_file ($_FILES[uploadedfile][tmp_name], $img)){

}else{}

}else{}
?>





</div>
<?php
if($_POST['btnaceptar']=="Aceptar"){
	include("funciones/conx.php");
	$cnn = Conectar();
	
	$nomb =$_POST['txtnomb'];
	$lati =$_POST['textfield5'];
	$long =$_POST['textfield4'];
	$dire =$_POST['txtdire'];
	$desc =$_POST['txtdesc'];
	$imag =$_POST['txtimag'];
	$clas =$_POST['txtclas'];
	$fono =$_POST['txtfono'];
	$emai =$_POST['txtemai'];
	$siti =$_POST['txtsiti'];
	
	
	
	$sql = "insert into lugar values('','$nomb','$lati','$long','$dire','$desc','$img','$clas','','$fono','$emai','$siti')";
	echo $sql; // Muestra los datos ingresados
	mysql_query($sql,$cnn);
}
?>
    
    
    
<div class="mbr-box mbr-box--stretched"><div class="mbr-box__magnet mbr-box__magnet--center-left">
                <div class="row"><div class=" col-sm-6 col-sm-offset-6">
                    <div class="mbr-hero animated fadeInUp"></div>
                    
                </div></div>
            </div></div>
      </div>
    </div>
</section>
  <script src="assets/jquery/jquery.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smooth-scroll/SmoothScroll.js"></script>
  <script src="assets/mobirise/js/script.js"></script>
  
  
</body>
</html>