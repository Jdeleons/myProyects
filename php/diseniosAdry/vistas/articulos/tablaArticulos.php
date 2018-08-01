<?php
	require_once '../../clases/Conexion.php';
	$c = new conectar();
	$conexion = $c->conexion();

	$sql = "SELECT pro.nombre,
	 					pro.descripcion,
						pro.cantidad,
						pro.precio,
						img.ruta,
						cat.nombreCategoria,
						pro.id_producto
				FROM productos AS pro
				INNER JOIN imagenes AS img
				ON pro.id_imagen = img.id_imagen
				INNER JOIN categorias AS cat
				ON pro.id_categoria = cat.id_categoria;";
	$result = mysqli_query($conexion,$sql);
 ?>
<div class="table-responsive">
	<table class="tabla table-hover table-condensed table-bordered" style="text-align: center;">
    <caption><label for="">Prendas de Vestir</label></caption>

    <tr>
        <td>Nombre</td>
        <td>Descripcion</td>
        <td>Cantidad</td>
        <td>Precio</td>
        <td>Imagen</td>
        <td>Categoria</td>
        <td>Editar</td>
        <td>Eliminar</td>
    </tr>
<?php while($ver=mysqli_fetch_row($result)): ?>
    <tr>
      <td><?php echo $ver[0] ?></td>
      <td><?php echo $ver[1] ?></td>
      <td><?php echo $ver[2] ?></td>
      <td><?php echo $ver[3] ?></td>

      <td>
			<?php
				$imgVer=explode("/", $ver[4]);
				$imgRuta=$imgVer[1]."/".$imgVer[2]."/".$imgVer[3];
			?>
			<img width="80" height="80" src="<?php echo $imgRuta ?>" alt="">
		</td>

		<td><?php echo $ver[5] ?></td>

      <td>
        <span class="btn btn-warning btn-xs" data-toggle="modal" data-target="#abremodalUpdateArticulo" onclick="agregaDatosArticulo('<?php echo $ver[6] ?>')">
        <span class="glyphicon glyphicon-pencil"></span></span>
      </td>

      <td>
        <span class="btn btn-danger btn-xs" onclick="eliminaArticulo('<?php echo $ver[6] ?>')">
        <span class="glyphicon glyphicon-remove"></span></span>
      </td>
    </tr>
<?php endwhile; ?>
</table>
</div>
