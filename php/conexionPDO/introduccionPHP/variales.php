<?php
#variables tipo texto 
$palabra = "palabra";
echo "Esto es una variable texto: $palabra <br>";
var_dump($palabra);
echo "<br><br>";


#variables tipo enteras;
$numero = 4;
echo "Esto es una variable tipo numero: $numero <br>";
var_dump($numero);
echo "<br><br>";

#variable boleana
$boleana = true;
echo "Esto es una variable boleana: $boleana <br>";
var_dump($boleana);
echo "<br><br>";
 
#variable arreglo
$colores = array("rojo","azul");
echo "Esto es una variable arreglo: $colores[0] <br>";
var_dump($colores);	
echo "<br><br>"; 

#varible arreglo con propiedades
$verduras = array("verdura1"=>"lechuga", "verdura2"=>"cebolla");
echo "Esto es una variable arreglo con proiedades: $verduras[verdua2] <br>";
var_dump($verduras);
echo "<br><br>";

#varibles objeto
$frutas = (object)["fruta1"=>"pera","fruta2"=>"manzana"];
echo "Esto es una variable objeto: $frutas->fruta1 <br>";
var_dump($frutas);
?>
