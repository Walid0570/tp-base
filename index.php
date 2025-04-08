<?php
// Définition d'une classe Personne
class Personne {
    // Propriétés (attributs)
    private $nom;
    private $prenom;
    private $age;

    // Constructeur
    public function __construct($nom, $prenom, $age) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->age = $age;
    }

    // Getters (accesseurs)
    public function getNom() {
        return $this->nom;
    }

    public function getPrenom() {
        return $this->prenom;
    }

    public function getAge() {
        return $this->age;
    }

    // Setters (mutateurs)
    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    public function setAge($age) {
        $this->age = $age;
    }

    // Méthodes
    public function sePresenter() {
        echo "Bonjour, je m'appelle " . $this->prenom . " " . $this->nom . " et j'ai " . $this->age . " ans.<br>";
    }

    public function estMajeur() {
        return $this->age >= 18 ? "Je suis majeur.<br>" : "Je suis mineur.<br>";
    }
}

// Utilisation de la classe
$personne1 = new Personne("Dupont", "Marie", 22);
$personne1->sePresenter();
echo $personne1->estMajeur();

// Modification des propriétés
$personne1->setAge(17);
echo "Nouvel âge : " . $personne1->getAge() . "<br>";
echo $personne1->estMajeur();
?>
