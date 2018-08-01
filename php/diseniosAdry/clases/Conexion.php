<?php
    class conectar{
        private $servidor = 'localhost';
        private $usuario = 'root';
        private $password = '*Deleonsocgio10';
        private $bd = 'diseniosadry';

        public function conexion(){
            $conexion = mysqli_connect($this->servidor,
                                       $this->usuario,
                                       $this->password,
                                       $this->bd);
            return $conexion;
        }
    }

// probando la conexion
/*    $obj = new conectar();
    if ($obj->conexion()) {
      echo "Conexion";
    } else {
      echo "Error";
    }
*/
 ?>
