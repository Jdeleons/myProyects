<?php
    class usuarios{
      public function registroUsuario($datos){
        $c = new conectar();
        $conexion= $c->conexion();
        $fecha = date('Y-m-d');

        $sql = "INSERT INTO usuarios
                VALUES (NULL,
                        '$datos[0]',
                        '$datos[1]',
                        '$datos[2]',
                        '$datos[3]',
                        '$fecha')";
         return mysqli_query($conexion,$sql);
      }

      public function loginUser($datos){
        $c = new conectar();
        $conexion= $c->conexion();
        $pass = sha1($datos[1]);

		  $sql ="SELECT nombre, apellido FROM  usuarios
		  WHERE email = '$datos[0]'
		  AND pass = '$pass'";

		  $result = mysqli_query($conexion,$sql);
		  $row = mysqli_fetch_row($result);
		  $_SESSION['nomb'] = $row[0];
		  $_SESSION['ape'] = $row[1];

		  $_SESSION['usuario']= $datos[0];
		  $idusuario = self::traeId($datos);
		  $_SESSION['iduser'] = $idusuario;



		  if ($row > 0) {
                   return 1;
               } else {
                   return 0;
              }
      }

      public function traeId($datos){
        $c = new conectar();
        $conexion = $c->conexion();
        $pass = sha1($datos[1]);

        $sql = "SELECT id_usuario
                FROM usuarios
                WHERE email = '$datos[0]'
                AND pass = '$pass'";
        $result = mysqli_query($conexion, $sql);
        return mysqli_fetch_row($result)[0];

      }

		public function obtenDatosUsuario($idusuario){
		  $c = new conectar();
		  $conexion = $c->conexion();

		  $sql="SELECT id_usuario,
		  nombre,
		  apellido,
		  email
		  from usuarios
		  where id_usuario='$idusuario'";
		  $result=mysqli_query($conexion,$sql);

		  $ver=mysqli_fetch_row($result);

		  $datos=array(
			 'id_usuario' => $ver[0],
			 'nombre' => $ver[1],
			 'apellido' => $ver[2],
			 'email' => $ver[3]
			 );

		  return $datos;
		}
		public function eliminarUsuario($idUsu){
		  $c=new conectar();
		  $conexion=$c->conexion();

		  $sql = "DELETE FROM usuarios WHERE id_usuario = '$idUsu'";

		  return mysqli_query($conexion,$sql);
		}

		public function actualizaUsuario($datos){
			$c=new conectar();
			$conexion=$c->conexion();

			$sql="UPDATE usuarios set nombre='$datos[1]',
			apellido='$datos[2]',
			email='$datos[3]'
			where id_usuario='$datos[0]'";
			return mysqli_query($conexion,$sql);
		 }
    }
 ?>
