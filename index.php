<?php
session_start();
error_reporting(0);
?>
<!DOCTYPE html>
<html><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="css" rel="stylesheet" type="text/css">
    <title>Proyecto AFA</title>
  </head><body>
    <div class="navbar navbar-default navbar-static-top section-success">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><span>Proyecto A.F.A</span></a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-ex-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active">
              <a href="#">Home</a>
            </li>
            <li>
              <a data-toggle="modal" data-target="#myModal" class="btn">Iniciar Sesión</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <img src="http://pingendo.github.io/pingendo-bootstrap/assets/placeholder.png" class="img-responsive">
            <h1>A title</h1>
            <p></p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisici elit,
              <br>sed eiusmod tempor incidunt ut labore et dolore magna aliqua.
              <br>Ut enim ad minim veniam, quis nostrud</p>
            <p></p>
          </div>
          <div class="col-md-6">
            <img src="http://pingendo.github.io/pingendo-bootstrap/assets/placeholder.png" class="img-responsive">
            <h1>A title</h1>
            <p></p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisici elit,
              <br>sed eiusmod tempor incidunt ut labore et dolore magna aliqua.
              <br>Ut enim ad minim veniam, quis nostrud</p>
            <p></p>
          </div>
        </div>
      </div>
    </div>
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
                    break;
                    
                    case 2:
                    //echo "<script type='text/javascript'> window.location='presidente/index.php'</script;
					header ("location:presidente/index.php");
                    break;
                     
                    case 3:
                    echo "<script type='text/javascript'> window.location='comite/index.php'</script>";
					header ("location:comite/index.php");
                    break;
        
                    default:
                    echo "<script>alert ('asda') </script>";
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
    <footer class="section section-success">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <h1>Footer header</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisici elit,
              <br>sed eiusmod tempor incidunt ut labore et dolore magna aliqua.
              <br>Ut enim ad minim veniam, quis nostrud</p>
          </div>
          <div class="col-sm-6">
            <p class="text-info text-right">
              <br>
              <br>
            </p>
            <div class="row">
              <div class="col-md-12 hidden-lg hidden-md hidden-sm text-left">
                <a href="#"><i class="fa fa-3x fa-fw fa-instagram text-inverse"></i></a>
                <a href="#"><i class="fa fa-3x fa-fw fa-twitter text-inverse"></i></a>
                <a href="#"><i class="fa fa-3x fa-fw fa-facebook text-inverse"></i></a>
                <a href="#"><i class="fa fa-3x fa-fw fa-github text-inverse"></i></a>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 hidden-xs text-right">
                <a href="#"><i class="fa fa-3x fa-fw fa-instagram text-inverse"></i></a>
                <a href="#"><i class="fa fa-3x fa-fw fa-twitter text-inverse"></i></a>
                <a href="#"><i class="fa fa-3x fa-fw fa-facebook text-inverse"></i></a>
                <a href="#"><i class="fa fa-3x fa-fw fa-github text-inverse"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
  


  

</body></html>