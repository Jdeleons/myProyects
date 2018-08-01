<?php
      require_once "clases/Conexion.php";
      $obj = new conectar();
      $conexion = $obj->conexion();
      $validar = 0;
      $sql = "SELECT *FROM usuarios WHERE email = 'admin'";
      $result = mysqli_query($conexion, $sql);
      if (mysqli_num_rows($result) > 0) {
          $validar = 1;
      }
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login DcA</title>
    <link rel="stylesheet" href="librerias/bootstrap/css/bootstrap.css">

    <script src="librerias/jquery-3.2.1.min.js" charset="utf-8"></script>
    <script src="js/funciones.js" ></script>
    <script src="js/validarLogin.js"></script>


  </head>
  <body style="background-color: black;">
    <br><br><br>


	 <div class="table-responsive">
    <div class="container" >
       <div class="row">
         <div class="col-sm-4"></div>
          <div class="col-sm-4">
              <div class="panel panel-primary">
                 <div class="panel panel-heading">Sistema Disenios y Confecciones Adry</div>
                 <div class="panel panel-body">
                     <p>
                        <img src="img/ventas.jpg" height="100">
                     </p>
                     <form id="fmrLogin">
                         <label for="">Usuario</label>
                         <input type="text" class="form-control input-sm" name="Usuario" id="Usuario">
                         <label for="">Password</label>
                         <input type="password" class="form-control input-sm" name="Password" id="Password">
                         <p></p>

                         <span class="btn btn-primary btn-sm" id="entrarSistema">Entrar</span>
                        <?php if (!$validar): ?>
                         <a href="registro.php" class="btn btn-danger btn-sm">Registrar</a>
                       <?php endif; ?>

                     </form>
                 </div>
              </div>
          </div>
          <div class="col-sm-4"></div>
       </div>
    </div>
</div>
  </body>
</html>
