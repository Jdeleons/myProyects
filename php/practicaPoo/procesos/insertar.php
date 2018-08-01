<?php
      require_once '../Conexion/conexion.php';
      require_once '../crud/metodosCrud.php';

      $nombre = $_POST['Nombre'];
      $apellido = $_POST['Apellido'];
      $telefono = $_POST['Telefono'];

      $datos = array(
                     $nombre,
                     $apellido,
                     $telefono
      );

      $obj = new metodos();
      if ($obj->insertarUsuario($datos) == 1) {
        header('location:../index.php');
      } else {
        echo "Error al insertar";
      }


 ?>
