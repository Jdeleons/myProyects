<?php
    require_once '../Conexion/conexion.php';
    require_once '../crud/metodosCrud.php';

    $id = $_POST['Id'];
    $nombre= $_POST['Nombre'];
    $apellido= $_POST['Apellido'];
    $telefono= $_POST['Telefono'];

    $datos = array( $id,
                    $nombre,
                    $apellido,
                    $telefono
    );

    $obj = new metodos();
    if ($obj->actualizarDatosUsuario($datos)==1) {
      header('location:../index.php');
    }else{
      echo "No se pudo modificar";
    }

 ?>
