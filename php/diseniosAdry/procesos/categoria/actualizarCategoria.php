<?php
	require_once "../../clases/Conexion.php";
	require_once "../../clases/Categoria.php";

   $datos = array(
		$_POST['idCategoria'],
		$_POST['CategoriaUpdate']

	);

	$obj = new categoria();
	echo $obj->actualizaCategoria($datos);
 ?>
