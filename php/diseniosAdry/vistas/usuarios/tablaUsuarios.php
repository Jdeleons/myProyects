<?php
	require_once '../../clases/Conexion.php';
	$obj = new conectar();
	$conexion = $obj->conexion();

	$sql = "SELECT id_usuario,nombre,apellido,email FROM usuarios";
	$result = mysqli_query($conexion,$sql);
 ?>
<div class="table-responsive">

<table class="table table-hover table-condensed table-bordered" style="text-align: center;">
      <caption><label for="">Usuarios</label></caption>

      <tr>
          <td>Nombre</td>
          <td>Apellido</td>
          <td>Usuario</td>
          <td>Editar</td>
          <td>Eliminar</td>
      </tr>
<?php while($ver = mysqli_fetch_row($result)): ?>
      <tr>
          <td><?php echo $ver[1]; ?></td>
          <td><?php echo $ver[2]; ?></td>
          <td><?php echo $ver[3]; ?></td>

          <td>
            <span class="btn btn-warning btn-xs" data-toggle="modal" data-target="#actualizaUsuario" onclick="agregaDatosUsuario(<?php echo $ver[0]; ?>)">
              <span class="glyphicon glyphicon-pencil"></span></span>
          </td>
          <td>
            <span class="btn btn-danger btn-xs" onclick="eliminarUsuario('<?php echo $ver[0]; ?>')">
            <span class="glyphicon glyphicon-remove"></span></span>
          </td>
      </tr>
<?php endwhile; ?>
</table>
</div>
