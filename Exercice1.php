<?php
function somCarre($a,$b){
	return ($a * $a) + ($b * $b);
}
$a = readline("Entrer la valeur de A : ");
$b = readline("Entrer la valeur de B : ");
$sommeC = somCarre($a , $b);
echo "Résultat :\n";
echo "$a ² + $b ² = ";
echo "$sommeC";
?>