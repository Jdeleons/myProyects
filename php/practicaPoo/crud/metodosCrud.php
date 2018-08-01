<?php
    class metodos{
          public function insertarUsuario($datos){
            $c = new conectar();
            $conexion = $c->conexion();

            $sql = "INSERT INTO Persona
                    VALUES (NULL,
                            '$datos[0]',
                            '$datos[1]',
                            '$datos[2]'
            )";
            return $result = mysqli_query($conexion,$sql);
          }

          public function mostrarDatos(){
            $c = new conectar();
            $conexion = $c->conexion();

            $sql = "SELECT id,nombre,apellido,telefono
                    FROM Persona";
            $result = mysqli_query($conexion,$sql);
            return mysqli_fetch_all($result,MYSQLI_ASSOC);
          }

          public function actualizarDatosUsuario($datos){
            $c = new conectar();
            $conexion = $c->conexion();

            $sql = "UPDATE Persona
                    SET nombre = '$datos[1]', apellido = '$datos[2]', telefono = '$datos[3]'
                    WHERE id = '$datos[0]'";
            $result = mysqli_query($conexion,$sql);
            return $result;
          }

          public function EliminarDatosUsuario($id){
            $c = new conectar();
            $conexion = $c->conexion();

            $sql ="DELETE FROM Persona WHERE id = '$id'";
            $result = mysqli_query($conexion, $sql);
            return $result;
          }
    }
 ?>
