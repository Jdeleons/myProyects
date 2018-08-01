<?php
require_once "../../clases/Conexion.php";
require_once "../../clases/Usuarios.php";

    $idUsu = $_POST['idUsuario'];

	$obj = new usuarios();

	echo $obj->eliminarUsuario($idUsu);

 ?>
