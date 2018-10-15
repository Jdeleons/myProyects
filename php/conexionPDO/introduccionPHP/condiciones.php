<?php

#Condiciones 
$a = 5;
$b = 10;

if($a > $b){
	echo "a es mayor que b";
}

else if($a == $b){
	echo "a es igual que b";
}

else{
	echo "a es menor que b";
}

echo "<br><br>";

#swuiches
$dia = "sabado";

switch($dia){
	case 'sabado':
		echo "voy a estudiar php";
		break;

	case 'viernes':
		echo "voy a la fiesta";
		break;

	case 'domingo':
		echo "voy a descansar";
		break;

	default: echo "voy a la universidad";	
}

echo "<br><br>";
#ciclos WHILE // para incrementar un valor una serie de veces
$n = 1;

while($n < 5){
	$n ++;
	echo $n."<br>";
}

echo "<br><br>";
#cilco DO WHILE
$p = 1;

do{
	echo $p."<br>";
	$p++;	

}while($p <= 5);

echo "<br><br>";
#cilco for

for($i = 0; $i <= 5; $i++){
	
	echo $i."<br>";
}

?>



