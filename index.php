<?php
// Paramètres de connexion à la base de données
$host = "localhost";
$dbname = "ma_base";
$username = "root";
$password = "";
$charset = "utf8mb4";

// DSN (Data Source Name)
$dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";

// Options pour PDO
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,          
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,     
    PDO::ATTR_EMULATE_PREPARES => false                   
];

try {
    // Création de l'instance PDO
    $pdo = new PDO($dsn, $username, $password, $options);
    echo "Connexion à la base de données réussie !<br><br>";

    
    // Exercice 1 : Insertion de données

    $sql = "INSERT INTO utilisateurs (nom, age) VALUES (?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(["Dupont", 35]);

    echo "Nouvel utilisateur inséré avec l'ID: " . $pdo->lastInsertId() . "<br><br>";


    // Exercice 2 : Sélection de données
  
    $sql = "SELECT * FROM utilisateurs WHERE age > 30";
    $stmt = $pdo->query($sql);

    echo "Utilisateurs de plus de 30 ans:<br>";
    foreach ($stmt as $row) {
        echo "Nom: " . $row['nom'] . " | Âge: " . $row['age'] . "<br>";
    }

    echo "<br>";

    
    // Exercice 3 : Mise à jour de données

    $sql = "UPDATE utilisateurs SET age = ? WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([40, 1]); 

    echo "Nombre d'utilisateurs mis à jour: " . $stmt->rowCount() . "<br><br>";

  
    // Exercice 4 : Suppression de données
    
    $sql = "DELETE FROM utilisateurs WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([2]); // exemple : suppression de l'utilisateur avec l'id 2

    echo "Nombre d'utilisateurs supprimés: " . $stmt->rowCount() . "<br><br>";

} catch (PDOException $e) {
    echo "Erreur de connexion à la base de données: " . $e->getMessage();
}
?>
