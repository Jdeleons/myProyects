<?php
   require_once "../../clases/Conexion.php";
	require_once "../../clases/Categoria.php";

	$idCategoria = $_POST['idCategoria'];

	$obj = new categoria();
	echo $obj->eliminarCategoria($idCategoria);
 ?>
