<?php

#funciones sin parametros
function saludo(){
	echo "hola mundo <br>";
}

#para ejecutar la funcion la llamamos
saludo();

#funciones con parametros
function despedida($adios){
#concatenamos una variable y un string	
	echo $adios."<br>";
}

#llamamos a la funcion y enviamos el parametro
despedida("adios");

#funciones con retorno
function retorno($retornar){
	return $retornar;
}

#para ejecutar una funcion con retorno lo hacemos 
#con un echo
echo retorno("retornar");



?>
