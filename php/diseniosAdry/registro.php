<?php 
      require_once "clases/Conexion.php";
      $obj = new conectar();
      $conexion = $obj->conexion();
      $validar = 0;
      $sql = "SELECT *FROM usuarios WHERE email = 'admin'";
      $result = mysqli_query($conexion, $sql);
      if (mysqli_num_rows($result) > 0) {
          header('location:index.php');
      }
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registrar Administrador</title>
    <link rel="stylesheet" href="librerias/bootstrap/css/bootstrap.css">

    <script src="librerias/jquery-3.2.1.min.js" charset="utf-8"></script>
    <script src="js/funciones.js" charset="utf-8"></script>
    <script src="js/registroAdmin.js" charset="utf-8"></script>
  </head>

  <body>
    <br><br><br>
    <div class="container">
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <div class="panel panel-danger">
                    <div class="panel panel-heading">Registrar Administrador</div>
                    <div class="panel panel-body">
                       <form id="fmrAdmin" name="fmrAdmin">
                         <label for="">Nombre</label>
                         <input type="text" class="form-control input-sm" name="Nombre" id="Nombre">
                         <label for="">Apellido</label>
                         <input type="text" class="form-control input-sm" name="Apellido" id="Apellido">
                         <label for="">Usuario(E-mail)</label>
                         <input type="text" class="form-control input-sm" name="Usuario" id="Usuario">
                         <label for="">Password</label>
                         <input type="text" class="form-control input-sm" name="Password" id="Password"><p></p>

                         <span class="btn btn-primary" name="Registro" id="Registro" >Registrar</span>
                         <a href="index.php" class="btn btn-default">Regresar Login</a>
                       </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-4"></div>
        </div>
    </div>
  </body>
</html>
