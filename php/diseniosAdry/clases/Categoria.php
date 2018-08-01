<?php
		class categoria{
			public function agregarCategoria($datos){
				$c = new conectar();
				$conexion = $c->conexion();
				$idUs = $_SESSION['iduser'];
				$fecha = date('Y-m-d');

				$sql="INSERT INTO categorias(
					 							id_usuario, nombreCategoria,
												fechaCaptura )
									 VALUES (
										 		'$idUs',
												'$datos',
												'$fecha'
									 )";
				return mysqli_query($conexion, $sql);

			}

			public function actualizaCategoria($datos){
				$c = new conectar();
				$conexion = $c->conexion();

				$sql = "UPDATE categorias
							  SET nombreCategoria= '$datos[1]'
							WHERE id_categoria='$datos[0]'";
				$result = mysqli_query($conexion,$sql);
				return $result;
			}

			public function eliminarCategoria($idCategoria){
				$c = new conectar();
				$conexion = $c->conexion();

				$sql = "DELETE FROM categorias
									WHERE id_categoria = '$idCategoria'";
				return mysqli_query($conexion,$sql);					
			}

		}
 ?>
