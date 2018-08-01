<?php
      session_start();
      if (isset($_SESSION['usuario'])) {


 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Usuarios</title>
    <?php
          require_once 'menu.php';
     ?>

  </head>
  <body>
     <div class="container">
        <h1>Usuarios</h1>
        <div class="row">
           <div class="col-sm-4">
              <form id="frmUsuarios">

                 <label for="">Nombre</label>
                 <input type="text" class="form-control input-sm" name="Nombre" id="Nombre">

                 <label for="">Apellido</label>
                 <input type="text" class="form-control input-sm" name="Apellido" id="Apellido">

                 <label for="">Usuario</label>
                 <input type="text" class="form-control input-sm" name="Usuario" id="Usuario">

                 <label for="">Password</label>
                 <input type="password" class="form-control input-sm" name="Password" id="Password">
                 <p></p>
                 <span class="btn btn-primary" id="btnAgregaUsuario">Agregar</span>
              </form>
           </div>

           <div class="col-sm-6">
              <div id="tablaUsuarioLoad">

              </div>
           </div>

        </div>
     </div>
<!-- Modal -->
	  <div class="modal fade" id="actualizaUsuario" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	    <div class="modal-dialog" role="document">
	      <div class="modal-content">
	        <div class="modal-header">
	          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	          <h4 class="modal-title" id="myModalLabel">Actualiza Usuario</h4>
	        </div>
	        <div class="modal-body">
	          <form id="frmUsuarioU">
	            <input type="text" hidden id="idUsuario" name="idUsuario">

	            <label for="">Nombre</label>
	            <input type="text" name="NombreU" id="NombreU" class="form-control input-sm">

	            <label for="">Apellido</label>
	            <input type="text" name="ApellidoU" id="ApellidoU" class="form-control input-sm">

	            <label for="">Usuario</label>
	            <input type="text" name="UsuarioU" id="UsuarioU" class="form-control input-sm">

	            <p></p>
	          </form>
	        </div>
	        <div class="modal-footer">
	          <button type="button" id="btnGuardarU" class="btn btn-warning" data-dismiss="modal">Guardar</button>

	        </div>
	      </div>
	    </div>
	  </div>

  </body>
</html>

<?php
}else {
  header('location:../index.php');
}
 ?>
