<?php
$c = readline("Enter une valeur Celsius : ");
include("CtoF.php");
$result = ctof("$c");
echo "Conversion Celsius To Farenheit: \n";
echo "$c ° = ";
echo "$result °";
?>