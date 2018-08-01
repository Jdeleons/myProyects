<?php
	require_once '../../clases/Conexion.php';
	$c = new conectar();
	$conexion = $c->conexion();

 ?>
<h4>Vender un producto</h4>
<div class="container">
	<div class="row">
		<div class="col-sm-4">
			<form id="frmVentas">
				<label for="">Clientes</label>
				<select class="form-control input-sm" id="SelectCliente" name="SelectCliente">
					<option value="A">Seleccionar</option>
					<option value="0">Sin Clientes</option>
<?php
	$sql = "SELECT id_cliente,nombre,apellido
				FROM clientes";
	$result = mysqli_query($conexion,$sql);
      while($cliente = mysqli_fetch_row($result)):
 ?>
					<option value="<?php echo $cliente[0] ?>"><?php echo $cliente[1]." ".$cliente[2] ?></option>
<?php endwhile; ?>
				</select>

				<label for="">Producto</label>
				<select class="form-control input-sm" id="SelectProducto" name="SelectProducto">
					<option value="A">Seleccionar</option>
					<option value="0">Sin Productos</option>
<?php
	$sql = " SELECT id_producto,nombre FROM productos";
	$result = mysqli_query($conexion,$sql);
	while($producto = mysqli_fetch_row($result)):
 ?>
 					<option value="<?php echo $producto[0] ?>"><?php echo $producto[1] ?></option>
<?php endwhile; ?>
				</select>

				<label for="">Descripcion</label>
				<textarea readonly class="form-control input-sm" name="Descripcion" id="Descripcion"></textarea>

				<label for="">Cantidad</label>
				<input type="text" class="form-control input-sm" name="Cantidad" id="Cantidad">

				<label readonly for="">Precio</label>
				<input type="text" class="form-control input-sm" name="Precio" id="Precio">
				<p></p>
				<span class="btn btn-primary" id="btnAgregarVenta">Agregar</span>
				<span class="btn btn-danger" id="btnVaciarVenta">Vaciar Ventas</span>
			</form>
		</div>
		<div class="col-sm-3">
			<div id="imgProducto">

			</div>
		</div>
		<div class="col-sm-4">
			<div id="tablaVentasTempLoad">

			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function(){
		$('#tablaVentasTempLoad').load("Ventas/tableVentasTemp.php");
		$('#SelectProducto').change(function(){
			$.ajax({
				type: "POST",
				data: "idproducto=" + $('#SelectProducto').val(),
				url: "../procesos/ventas/llenarFormProductos.php",
				success:function(r){

					dato = jQuery.parseJSON(r);
					$('#Descripcion').val(dato['descripcion']);
					$('#Cantidad').val(dato['cantidad']);
					$('#Precio').val(dato['precio']);

					$('#imgProducto').prepend('<img class="img-thumbnail" id="imgP" src="' + dato['ruta'] + '" >');

				}
			});
		});
	});

	$('#btnAgregarVenta').click(function(){
		vacios=validarFormVacio('frmVentas');

		if(vacios > 0){
			alertify.alert("Debes llenar todos los campos!!");
			return false;
		}

		datos=$('#frmVentas').serialize();
		$.ajax({
			type:"POST",
			data:datos,
			url:"../procesos/ventas/agregaProductoTemp.php",
			success:function(r){
		$('#tablaVentasTempLoad').load("Ventas/tableVentasTemp.php");

			}
		});

	$('#btnVaciarVenta').click(function(){
		$.ajax({
			url: "../procesos/ventas/vaciarTemp.php",
			success:function(r){
		$('#tablaVentasTempLoad').load("Ventas/tableVentasTemp.php");
			}
		});
	});
});
</script>
<script type="text/javascript">
	function quitarProducto(index){
		$.ajax({
			type: "POST",
			data: "ind=" + index,
			url: "../procesos/ventas/quitarProducto.php",
			success:function(r){
		$('#tablaVentasTempLoad').load("Ventas/tableVentasTemp.php");
		alertify.success("Se quito el producto");
			}
		});
	}


	function crearVenta(){
		$.ajax({
			url: "../procesos/ventas/crearVenta.php",
			success:function(r){
				
				if(r > 0){
					alertify.alert("Venta Creada con exito, consulte la informacion de esta en ventas hechas");
				}else if(r == 0){
					alertify.alert("no hay lista de venta");
				}else{
					alertify.error("No se pudo crear la venta");
				}
			}
		});
	}

</script>
