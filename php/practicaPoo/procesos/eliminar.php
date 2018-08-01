<?php
require_once '../Conexion/conexion.php';
require_once '../crud/metodosCrud.php';

$id = $_GET['id'];

$obj = new metodos();
if ($obj->EliminarDatosUsuario($id)==1) {
  header('location:../index.php');
} else {
  echo "Error al elimianr";
}

 ?>
