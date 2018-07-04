	 <?php
session_start();
error_reporting(0);
?>
	<!DOCTYPE html>
    <html><head>
    <title>Proyecto A.F.A</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="index.css" rel="stylesheet" type="text/css">
  </head><body>
    <div class="cover">
      <div class="navbar navbar-inverse">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><span><h2 class="text-justify text-default">
              Proyecto A.F.A
              </h2></span></a>
          </div>
          <div class="collapse navbar-collapse" id="navbar-ex-collapse">
            <ul class="nav navbar-nav navbar-right">
              <li class="active">
                <a href="asociaciones.php" ><h3>
                  Asociaciones</h3></a>
              </li>
              <li class="active">
                <a data-toggle="modal" data-target="#myModal" class="btn"><h3>Iniciar sesión                
                  </h3></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="cover-image" style="background-image: url(http://wallpapercave.com/wp/C7xwziS.jpg);"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <h1 class="text-inverse">Proyecto A.F.A</h1>
            <p class="lead text-center text-inverse">Administración, &nbsp;Gestion y Autentificación en el campo de juego</p>
            <br>
            <br>
            <a  data-toggle="modal" data-target="#myModal"  class="active btn btn-danger btn-lg">Iniciar sesión</a>
          </div>
        </div>
      </div>
    </div>
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <img src="Archivos/logo.png" class="center-block img-responsive">
          </div>
          <div class="col-md-6">
            <h1 class="text-primary">Proyecto A.F.A</h1>
            <h3>A subtitle</h3>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo
              ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis
              dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies
              nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
              Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In
              enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum
              felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus
              elementum semper nisi.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h1 class="text-primary">Quienes somos</h1>
            <h3>A subtitle</h3>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo
              ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis
              dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies
              nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
              Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In
              enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum
              felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus
              elementum semper nisi.</p>
          </div>
          <div class="col-md-6">
            <img src="Archivos/aiep-sobre-fondo-claro.png" class="center-block img-responsive img-thumbnail">
          </div>
        </div>
      </div>
    </div>
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1 class="text-center text-primary">Team</h1>
            <p class="text-center">We are a group of skilled individuals.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <img src="http://pingendo.github.io/pingendo-bootstrap/assets/user_placeholder.png" class="center-block img-circle img-responsive">
            <h3 class="text-center">John Doe</h3>
            <p class="text-center">Developer</p>
          </div>
          <div class="col-md-4">
            <img src="http://pingendo.github.io/pingendo-bootstrap/assets/user_placeholder.png" class="center-block img-circle img-responsive">
            <h3 class="text-center">John Doe</h3>
            <p class="text-center">Developer</p>
          </div>
          <div class="col-md-4">
            <img src="http://pingendo.github.io/pingendo-bootstrap/assets/user_placeholder.png" class="center-block img-circle img-responsive">
            <h3 class="text-center">John Doe</h3>
            <p class="text-center">Developer</p>
          </div>
        </div>
      </div>
    </div>
  

</body>


  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title">Iniciar Sesión</h4>
          </div>
          <div class="modal-body">
            <form method="post" action="">
              <div class="form-group">
                <label class="control-label" for="exampleInputEmail1">Correo Electronico</label>
                <input class="form-control" id="user" name="user" placeholder="Email" type="email" required>
              </div>
              <div class="form-group">
                <label class="control-label" for="exampleInputPassword1">Contraseña</label>
                <input class="form-control" id="pass" name="pass" placeholder="Contraseña" type="password" required>
              </div>
            
          </div>
          <div class="modal-footer">
            <input class="btn btn-default" data-dismiss="modal" type="button" value="Cancelar">
            
            <input type="submit" class="btn btn-primary" name="btnEntrar" id="btnEntrar" value="Entrar" />
              </form>
              <?php
              if($_POST['btnEntrar'] == "Entrar")
              {
                include("php/conexion.php");
                $cnn = Conectar();
                $user = $_POST["user"];
                $pass = $_POST["pass"];
                $sql = "select * from reg_login where correo = '$user' and contrasena = '$pass'";
                $rs = mysql_query ($sql,$cnn);
  
                if(mysql_num_rows($rs)!= 0)
                  {
                  
                    while ($row =mysql_fetch_array ($rs))
                  {
                    $_SESSION['idusuario'] = $row["id"];
                    $_SESSION['correo'] = $row["correo"];
             
                    $_SESSION['tipo_usr'] = $row["tipo_usr"];
                    $tipo_usr = $_SESSION['tipo_usr'];
                    
                    $sql2 = "select * from tipo_usr where id = '$tipo_usr'";
                    $rs1 = mysql_query ($sql2,$cnn);
                      if(mysql_num_rows($rs1)!= 0)
                      {
                        if ($row1 =mysql_fetch_array ($rs1))
                        {
                          $_SESSION['tipousuario']= $row1["id"];
                          $_SESSION['descripcion']= $row1["descripcion"];      
                        }//fin if 2
                        
                      }//fin if 3

                    $idtipousr = $_SESSION['tipo_usr'];
                    
                    switch($idtipousr)
                    {
                    case 1:
                      echo "<script type='text/javascript'> window.location='asociacion/inicioasociacion.php'</script>";
					  $qsl="select nombre from asociacion where id_login=".$row['id']."";
					  $ssr=mysql_query($qsl,$cnn);
					  while($rows=mysql_fetch_array($ssr)){
						  
						   $_SESSION['nombreasociacion']= $rows['nombre'];
						  }
                    break;
                    
                    case 2:
                    echo "<script type='text/javascript'> window.location='presidente/index.php'</script>";
					header ("location:presidente/index.php");
                    break;
                     
                    case 3:
                    echo "<script type='text/javascript'> window.location='comite/index.php'</script>";
					header ("location:comite/index.php");
                    break;
        
                    default:
                    echo "<script>alert ('Error usuario no valido') </script>";
                    break;
                    }//fin switch
        
    
                    }//fin if 5
      
                    }else{
    
                    echo "<script>alert ('Usuario o clave INCORRECTA') </script>";
                    }//fin if 1
                  }
                  ?>
          </div>
        </div>
      </div>
    </div>
</html>