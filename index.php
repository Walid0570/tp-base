<?php

# ex1 Afficher les nombres de 1 à 10

for ($i = 1; $i <= 10; $i++) {
    echo $i . "<br>";
}

#---------------------------------------------------------------------------------------------------------------------

# ex 2 Calculer la somme des nombres de 1 à 100


$sum = 0;

for ($i = 1; $i <= 100; $i++) {
    $sum += $i;
}

echo "La somme des nombres de 1 à 100 est : " . $sum;

#---------------------------------------------------------------------------------------------------------------------

#ex 3 Afficher une table de multiplication

$nombre = 7;

for ($i = 1; $i <= 10; $i++) {
    echo "$nombre x $i = " . ($nombre * $i) . "<br>";
}

?>