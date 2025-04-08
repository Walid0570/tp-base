foreach


<?php
#ex1
$fruits = ["pomme", "banane", "orange", "fraise", "kiwi"];

foreach ($fruits as $fruit) {
    echo $fruit . "<br>";
}

#----------------------------------------------------------------------------------------------------------------

#ex2
$personne = [
    "nom" => "Dupont",
    "prenom" => "Jean",
    "age" => 30,
    "ville" => "Paris"
];

foreach ($personne as $cle => $valeur) {
    echo ucfirst($cle) . " : " . $valeur . "<br>";
}

#----------------------------------------------------------------------------------------------------------------

#ex 3
$etudiants = [
    ["nom" => "Martin", "note" => 15],
    ["nom" => "Durand", "note" => 12],
    ["nom" => "Petit", "note" => 18]
];

foreach ($etudiants as $etudiant) {
    echo "Nom : " . $etudiant["nom"] . " - Note : " . $etudiant["note"] . "<br>";
}
?>
