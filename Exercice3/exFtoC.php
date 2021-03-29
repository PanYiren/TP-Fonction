<?php
$f = readline("Entrer une valeur Farenheit : ");
include("FtoC.php");
$result = ftoc("$f");
echo "Conversion Farenheit To Celsius: \n";
echo "$f ° = ";
echo "$result °";
?>