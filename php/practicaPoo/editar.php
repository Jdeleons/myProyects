<?php
    require_once 'Conexion/conexion.php';

    $c = new conectar();
    $conexion = $c->conexion();

    $id = $_GET['id'];
    $sql = "SELECT nombre,apellido,telefono
            FROM Persona WHERE id = '$id'";
    $result = mysqli_query($conexion,$sql);
    $ver = mysqli_fetch_row($result);
 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Editar JD</title>
   </head>
   <body>
     <form action="procesos/actualizar.php" method="post">
       <input type="text" hidden="" name="Id" value="<?php echo $id ?>">
       <label for="">Nombre</label><p></p>
       <input type="text" name="Nombre" value="<?php echo $ver[0] ?>"><p></p>
       <label for="">Apellido</label><p></p>
       <input type="text" name="Apellido" value="<?php echo $ver[1] ?>"><p></p>
       <label for="">Telefono</label><p></p>
       <input type="text" name="Telefono" value="<?php echo $ver[2] ?>"><p></p>
       <button>Modificar</button>

     </form>
   </body>
 </html>
