<?php
require_once "../../clases/Conexion.php";
require_once "../../clases/Usuarios.php";

	$obj= new usuarios;

	$datos=array(
			$_POST['idUsuario'],
		    $_POST['NombreU'] ,
		    $_POST['ApellidoU'],
		    $_POST['UsuarioU']
				);
	echo $obj->actualizaUsuario($datos);;

?>
