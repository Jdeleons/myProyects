<?php
	session_start();
	require_once '../../clases/Conexion.php';
	require_once '../../clases/Clientes.php';

$idUser = $_SESSION['iduser'];
	$datos = array(
						$idUser,
						$_POST['Nombre'],
						$_POST['Apellido'],
						$_POST['Direccion'],
						$_POST['Email'],
						$_POST['Telefono'],
						$_POST['Nit']
	);
	$obj = new clientes();
	echo $obj->agregaCliente($datos);

 ?>
