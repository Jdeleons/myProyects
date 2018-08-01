<?php
	session_start();
	require_once '../../clases/Conexion.php';
	require_once '../../clases/Categoria.php';

	$obj = new categoria();

	$categoria = $_POST['Categoria'];
	echo $obj->agregarCategoria($categoria);
 ?>
