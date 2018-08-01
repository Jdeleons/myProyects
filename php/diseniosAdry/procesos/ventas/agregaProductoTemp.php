<?php
	session_start();
	require_once '../../clases/Conexion.php';
	$c = new conectar();
	$conexion = $c->conexion();

$idC =	$_POST['SelectCliente'];
$idP =	$_POST['SelectProducto'];
$des =	$_POST['Descripcion'];
$can =   $_POST['Cantidad'];
$pre =	$_POST['Precio'];

$sql = "SELECT nombre, apellido FROM clientes WHERE id_cliente = '$idC'" ;
$result = mysqli_query($conexion,$sql);
$c = mysqli_fetch_row($result);
$nomCliente = $c[1]." ".$c[0];

$sql = "SELECT nombre FROM productos WHERE id_producto = '$idP'";
$result = mysqli_query($conexion,$sql);
$nomProducto = mysqli_fetch_row($result)[0];


$producto = $idP."||".
				$nomProducto."||".
				$des."||".
				$pre."||".
				$nomCliente."||".
				$idC;
$_SESSION['tablaComprasTemp'][]=$producto;

 ?>
