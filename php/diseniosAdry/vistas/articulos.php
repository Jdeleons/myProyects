<?php
      session_start();
      if (isset($_SESSION['usuario'])) {

 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Prendas</title>
    <?php
         require_once 'menu.php';
     ?>
	  <?php require_once '../clases/Conexion.php';
	  		$c = new conectar();
			$conexion = $c->conexion();

			$sql = "SELECT id_categoria,nombreCategoria
								FROM categorias";
			$result = mysqli_query($conexion,$sql);
	  ?>
  </head>
  <body>
      <div class="container">
        <h1>Prenda de Vestir</h1>
          <div class="row">
             <div class="col-sm-3">
                <form id="frmArticulos" enctype="multipart/form-data">

                 <label for="">Categoria</label>
                 <select class="form-control input-sm " id="CategoriaSelect" name="CategoriaSelect">
                     <option value="A">Selecciona una Categoria</option>
<?php while($ver=mysqli_fetch_row($result)): ?>
							<option value="<?php echo $ver[0] ?>"><?php echo $ver[1] ?></option>
<?php endwhile; ?>
                 </select>

                 <label for="">Nombre</label>
                 <input type="text" class="form-control input-sm " id="Nombre" name="Nombre" >

                 <label for="">Descripcion</label>
                 <input type="text" class="form-control input-sm " id="Descripcion" name="Descripcion" >

                 <label for="">Cantidad</label>
                 <input type="text" class="form-control input-sm " id="Cantidad" name="Cantidad" >

                 <label for="">Precio</label>
                 <input type="text" class="form-control input-sm " id="Precio" name="Precio" >

                 <label for="">Imagen</label>
                 <input type="file" class="form-control input-sm " id="Imagen" name="Imagen" ><p></p>

                 <span id="btnAgregaArticulo" class="btn btn-primary">Agregar</span>
                </form>
             </div>

             <div class="col-sm-8">
                  <div id="tablaArticulosLoad">

                  </div>
             </div>
          </div>
      </div>

		<!-- Modal -->
		<div class="modal fade" id="abremodalUpdateArticulo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog modal-sm" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">Actualiza Articulo</h4>
					</div>
					<div class="modal-body">
						<form id="frmArticulosU" enctype="multipart/form-data">
							<input type="text" id="idArticulo" hidden="" name="idArticulo">
							<label>Categoria</label>
							<select class="form-control input-sm" id="categoriaSelectU" name="categoriaSelectU">
								<option value="A">Selecciona Categoria</option>
								<?php
								$sql="SELECT id_categoria,nombreCategoria
								from categorias";
								$result=mysqli_query($conexion,$sql);
								?>
								<?php while($ver=mysqli_fetch_row($result)): ?>
									<option value="<?php echo $ver[0] ?>"><?php echo $ver[1]; ?></option>
								<?php endwhile; ?>
							</select>
							<label>Nombre</label>
							<input type="text" class="form-control input-sm" id="nombreU" name="nombreU">
							<label>Descripcion</label>
							<input type="text" class="form-control input-sm" id="descripcionU" name="descripcionU">
							<label>Cantidad</label>
							<input type="text" class="form-control input-sm" id="cantidadU" name="cantidadU">
							<label>Precio</label>
							<input type="text" class="form-control input-sm" id="precioU" name="precioU">

						</form>
					</div>
					<div class="modal-footer">
						<button id="btnActualizaarticulo" type="button" class="btn btn-warning" data-dismiss="modal">Actualizar</button>

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
