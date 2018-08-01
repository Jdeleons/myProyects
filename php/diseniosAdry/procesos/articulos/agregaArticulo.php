<?php
session_start();
$idUser = $_SESSION['iduser'];
require_once '../../clases/Conexion.php';
require_once '../../clases/Articulos.php';

$datos = array(


);
$datos = array();

	$nombreImg = $_FILES['Imagen']['name'];
	$rutaAlmacenamiento = $_FILES['Imagen']['tmp_name'];
	$carpeta = '../../archivos/';
	$rutaFinal = $carpeta.$nombreImg;

	$obj = new articulos();

	$datosImg = array(
			$_POST['CategoriaSelect'],
			$nombreImg,
			$rutaFinal
	);

		if (move_uploaded_file($rutaAlmacenamiento,$rutaFinal)) {
				$idImagen = $obj->agregaImagen($datosImg);
				if ($idImagen > 0) {

					$datos[0]=$_POST['CategoriaSelect'];
					$datos[1]=$idImagen;
					$datos[2]=$idUser;
					$datos[3]=$_POST['Nombre'];
					$datos[4]=$_POST['Descripcion'];
					$datos[5]=$_POST['Cantidad'];
					$datos[6]=$_POST['Precio'];
					echo $obj->insertaArticulos($datos);
				}else {
					 echo 0;
				}
		}
 ?>
