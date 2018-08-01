<?php
    class conectar{
      private $servidor = 'localhost';
      private $usuario = 'root';
      private $pass = 'root';
      private $bd = 'bdPractica';

      public function conexion(){
        $conexion = mysqli_connect($this->servidor,
                                   $this->usuario,
                                   $this->pass,
                                    $this->bd);
        return $conexion;
      }
    }
// prueba para ver si hay conexion
  /*  $obj = new conectar();
    if ($obj->conexion()== true ) {
      echo "conexion";
    } else {
      echo "no hay conexion";
    }
*/
 ?>
