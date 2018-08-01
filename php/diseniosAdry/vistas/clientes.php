<?php
      session_start();
      if (isset($_SESSION['usuario'])) {

 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Clientes</title>
	 <?php
	 require_once 'menu.php';
	 ?>
  </head>

  <body>
	  	<div class="container">
			<h1>Clientes</h1>
	  		<div class="row">
	  			<div class="col-sm-4">
					<form id="frmClientes">
						<label for="">Nombre</label>
						<input type="text" class="form-control input-sm" name="Nombre" id="Nombre">

						<label for="">Apellido</label>
						<input type="text" class="form-control input-sm" name="Apellido" id="Apellido">

						<label for="">Direccion</label>
						<input type="text" class="form-control input-sm" name="Direccion" id="Direccion">

						<label for="">Email</label>
						<input type="text" class="form-control input-sm" name="Email" id="Email">

						<label for="">Telefono</label>
						<input type="text" class="form-control input-sm" name="Telefono" id="Telefono">

						<label for="">Nit</label>
						<input type="text" class="form-control input-sm" name="Nit" id="Nit">

						<p></p>
						<span class="btn btn-primary" id="btnAgregaCliente">Agrega</span>
					</form>
	  			</div>
				<div class="col-sm-6">
					<div id="tablaClienteLoad">

					</div>
				</div>
	  		</div>
	  	</div>

		<!-- Modal -->
		<div class="modal fade" id="abremodalClientesUpdate" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog modal-sm" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">Actualizar cliente</h4>
					</div>
					<div class="modal-body">
						<form id="frmClientesU">
							<input type="text" hidden="" id="idclienteU" name="idclienteU">
							<label>Nombre</label>
							<input type="text" class="form-control input-sm" id="nombreU" name="nombreU">
							<label>Apellido</label>
							<input type="text" class="form-control input-sm" id="apellidosU" name="apellidosU">
							<label>Direccion</label>
							<input type="text" class="form-control input-sm" id="direccionU" name="direccionU">
							<label>Email</label>
							<input type="text" class="form-control input-sm" id="emailU" name="emailU">
							<label>Telefono</label>
							<input type="text" class="form-control input-sm" id="telefonoU" name="telefonoU">
							<label>NIT</label>
							<input type="text" class="form-control input-sm" id="rfcU" name="rfcU">
						</form>
					</div>
					<div class="modal-footer">
						<button id="btnAgregarClienteU" type="button" class="btn btn-primary" data-dismiss="modal">Actualizar</button>

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
