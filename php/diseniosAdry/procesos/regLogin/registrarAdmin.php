<?php
    require_once '../../clases/Conexion.php';
    require_once '../../clases/Usuarios.php';

    $nombre =$_POST['Nombre'];
    $apellido =$_POST['Apellido'];
    $usuario =$_POST['Usuario'];
    $password =sha1($_POST['Password']);

    $datos = array(
                   $nombre,
                   $apellido,
                   $usuario,
                   $password );

    $obj = new usuarios();
    echo $obj->registroUsuario($datos);

 ?>
