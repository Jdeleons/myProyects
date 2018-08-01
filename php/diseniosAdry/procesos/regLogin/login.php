<?php
	session_start(); 
	require_once '../../clases/Conexion.php';
	require_once '../../clases/Usuarios.php';

	$usuario = $_POST['Usuario'];
	$pass    = $_POST['Password'];

	$datos = array(
				   $usuario,
				   $pass);

	$obj = new usuarios();

	echo $obj->loginUser($datos);
 ?>