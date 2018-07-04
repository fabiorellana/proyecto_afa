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
<html><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ingreso de Fechas</title>
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="Archivos\Framework\css\style1.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="js/script3.js"></script>
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
          <a class="navbar-brand"><span>Proyecto A.F.A</span></a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-ex-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li>
              <a href="inicioasociacion.php">Home</a>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Nuevos Registros <i class="fa fa-caret-down"></i></a>
              <ul class="dropdown-menu" role="menu">
                <li>
                  <a href="registroinformeturno.php">Registrar Informe de Turno</a>
                </li>
                <li>
                  <a href="ingresofechas.php">Registrar Fechas</a>
                </li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Crear Nuevo <i class="fa fa-caret-down"></i></a>
              <ul class="dropdown-menu" role="menu">
                <li>
                  <a href="registroturno.php">Crear Nuevo Turno</a>
                </li>
                <li>
                  <a href="registroclub.php">Crear Nuevo Club</a>
                </li>
                  <li>
                  <a href="registrocomite.php">Crear Nuevo comite de disciplina</a>
                </li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Notificaciones <i class="fa fa-caret-down"></i></a>
              <ul class="dropdown-menu" role="menu">
                <li>
                  <a href="#">Notificaciones de solicitud de Traspasos</a>
                </li>
                <li>
                  <a href="#">Another Recepcion de Turno</a>
                </li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Traspasos <i class="fa fa-caret-down"></i></a>
              <ul class="dropdown-menu" role="menu">
                <li>
                  <a href="#">Gestion de Traspasos</a>
                </li>
                <li>
                  <a href="#">Historial de Traspasos</a>
                </li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Administrar <i class="fa fa-caret-down"></i></a>
              <ul class="dropdown-menu" role="menu">
                <li>
                  <a href="administrarturno.php">Administrar turno</a>
                </li>
                <li>
                  <a href="administrarclub.php">Admnistrar Club </a>
                </li>
              </ul>
            </li>
            <li>
              <a href="ingresarresultados.html">Resultados</a>
            </li>
            <li>
              <a href="#">Informes</a>
            </li>
            <li class="dropdown">
              <a href="#" class="btn btn-block btn-danger 
 dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Sesión <i class="fa fa-caret-down"></i></a>
              <ul class="dropdown-menu" role="menu">
                <li>
                  <a href="#">Modificar Datos</a>
                </li>
                <li class="divider"></li>
                <li>
                  <a href="cerrarsesion.php">Cerrar Sesión</a>
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
          <div class="col-md-12">
            <h1 class="text-center">REGISTRO DE FECHAS</h1>
          </div>
        </div>
      </div>
    </div>
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <?php
            include("php/conexion.php");
            $cnn = Conectar(); 
            ?>
            <form class="form-horizontal" role="form" method="post">
              <div class="form-group">
                <div class="col-sm-2">
                  <label for="nfecha" class="control-label">N° Fecha</label>
                </div>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="nfecha" placeholder="Fecha" size="10">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-2">
                  <label for="calendario" class="control-label">Calendario</label>
                </div>
                <div class="col-sm-10">
                  <input type="date" class="form-control" id="calendario" placeholder="Calendario">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-2">
                  <label for="selClubL" class="control-label">Club Local</label>
                </div>
                <div class="col-sm-10">
                  <?php
                  $ssql = "select id, nombre from club";
                  $rs1 = mysql_query($ssql);  
                  ?>
                  <select id="selClubL" class="form-control">
                    <option selected="selected">Seleccione un club</option>
                    <?php
                    while($row=mysql_fetch_array($rs1))
                    {
                      $id = $row['id'];
                      $nombre = $row['nombre'];?>
                    <option value="<?php echo $id; ?>"><?php echo $nombre; ?></option>
                  <?php } 
                  ?>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-2">
                  <label class="control-label" for="selClubV">Club Visita</label>
                </div>
                <div class="col-sm-10">
                  <?php
                  $ssql2 = "select id, nombre from club";
                  $rs2 = mysql_query($ssql2); 
                   ?>
                  <select class="form-control" id="selClubV">
                    <option selected="selected">Seleccione un club</option>
                    <?php
                    while($row=mysql_fetch_array($rs2))
                    {
                      $id = $row['id'];
                      $nombre = $row['nombre'];?>  
                    <option value="<?php echo $id; ?>"><?php echo $nombre; ?></option>
                    <?php } 
                    ?>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-2">
                  <label class="control-label" for="selTurno">Asignar Turno</label>
                </div>
                <div class="col-sm-10">
                  <?php
                  $rsql1 = "select rut, nombre, apellidos from turno";
                  $rs3 = mysql_query($rsql1);  
                  ?>
                  <select class="form-control" id="selTurno">
                    <option selected="selected">Seleccione un Turno</option>
                    <?php
                    while($row=mysql_fetch_array($rs3)) 
                    {
                      $rut = $row["rut"];
                      $nombres = $row["nombre"];
                      $apellidos = $row["apellidos"];?>
                      <option value="<?php echo $rut; ?>"><?php echo $nombres.' '.$apellidos; ?></option>
                    <?php  }
                    ?>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-2">
                  <label class="control-label" for="selMaquina">Máquina</label>
                </div>
                <div class="col-sm-10">
                  <?php
                  $rsql2 = "select * from maquina";
                  $rs4 = mysql_query($rsql2);  
                  ?>
                  <select class="form-control" id="selMaquina">
                    <option selected="selected">Seleccione la maquina</option>
                    <?php
                    while($row=mysql_fetch_array($rs4))
                    {
                      $idmaquina = $row["id"];
                      $des = $row["descripcion"];?>
                    <option value="<?php echo $id; ?>"><?php echo $des; ?></option>
                    <?php  }
                    ?>
                  </select>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 text-center">
                  <a href="#" id="btnGuardar"><i class="fa fa-5x fa-fw fa-save"></i></a>
                  <a href="#"><i class="fa fa-5x fa-fw fa-gear text-muted"></i></a>
                  <a href="#"><i class="fa fa-5x fa-ban fa-fw text-danger"></i></a>
                </div>
              </div>
              <div id="result"></div>
            </form>
          </div>
        </div>
      </div>
    </div>
  

</body></html>