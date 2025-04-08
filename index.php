<?php

#ex 1

$jour = date('l'); 
$message = "";

switch ($jour) {
    case "Monday":
        $message = "Courage, c’est le début de la semaine !";
        break;
    case "Tuesday":
        $message = "Allez, on continue sur la lancée.";
        break;
    case "Wednesday":
        $message = "C’est le milieu de semaine.";
        break;
    case "Thursday":
        $message = "Presque la fin !";
        break;
    case "Friday":
        $message = "Dernière ligne droite !";
        break;
    case "Saturday":
    case "Sunday":
        $message = "Bon week-end !";
        break;
    default:
        $message = "Jour inconnu.";
}

echo "Aujourd'hui c'est " . $jour . " : " . $message . "<br><br>";



#------------------------------------------------------------------------------------------------------------------------


#ex 2

$note = 17; 
$palier = 0;

if ($note >= 18) {
    $palier = 5;
} elseif ($note >= 16) {
    $palier = 4;
} elseif ($note >= 14) {
    $palier = 3;
} elseif ($note >= 12) {
    $palier = 2;
} elseif ($note >= 10) {
    $palier = 1;
} else {
    $palier = 0;
}

switch ($palier) {
    case 5:
        $appreciation = "Excellent (A+)";
        break;
    case 4:
        $appreciation = "Très bien (A)";
        break;
    case 3:
        $appreciation = "Bien";
        break;
    case 2:
        $appreciation = "Assez bien";
        break;
    case 1:
        $appreciation = "Passable";
        break;
    default:
        $appreciation = "Insuffisant";
}

echo "Note : " . $note . "/20 - Appréciation : " . $appreciation;
?>


