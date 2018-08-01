<?php
      require_once 'Conexion/conexion.php';
      require_once 'crud/metodosCrud.php';
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Practica Poo</title>
  </head>
  <body>
      <form class="" action="procesos/insertar.php" method="post">
          <label for="">Nombre</label>
          <p></p>
          <input type="text" name="Nombre" value="">
          <p></p>
          <label for="">Apellido</label>
          <p></p>
          <input type="text" name="Apellido" value="">
          <p></p>
          <label for="">Telefono</label>
          <p></p>
          <input type="text" name="Telefono" value="">
          <p></p>
          <button>Agregar</button>
      </form>

      <br><br>
      <table style="border-collapse: collapse;" border="1">
          <tr>
              <td>Nombre</td>
              <td>Apellido</td>
              <td>Telefono</td>
              <td>Editar</td>
              <td>Eliminar</td>
          </tr>
<?php
    $obj = new metodos();
    $datos = $obj->mostrarDatos();
    foreach ($datos as $key) {

 ?>
          <tr>
              <td><?php echo $key['nombre'] ?></td>
              <td><?php echo $key['apellido'] ?></td>
              <td><?php echo $key['telefono'] ?></td>
              <td>
                 <a href="editar.php?id=<?php echo $key['id'] ?>">Editar</a>
              </td>
              <td>
                 <a href="procesos/eliminar.php?id=<?php echo $key['id'] ?> ">Eliminar</a>
              </td>
          </tr>
<?php
}
 ?>
      </table>

  </body>
</html>
