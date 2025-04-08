<?php
// Classe parente
class Vehicule {
    protected $marque;
    protected $modele;
    protected $annee;
    
    public function __construct($marque, $modele, $annee) {
        $this->marque = $marque;
        $this->modele = $modele;
        $this->annee = $annee;
    }

    public function getInfos() {
        return "Marque: $this->marque | Modèle: $this->modele | Année: $this->annee";
    }

    public function demarrer() {
        return "Le véhicule démarre.<br>";
    }
}

// Classe enfant qui hérite de Vehicule
class Voiture extends Vehicule {
    private $nombrePortes;
    private $typeCarburant;

    public function __construct($marque, $modele, $annee, $nombrePortes, $typeCarburant) {
        parent::__construct($marque, $modele, $annee);
        $this->nombrePortes = $nombrePortes;
        $this->typeCarburant = $typeCarburant;
    }

    // Surcharge de la méthode getInfos()
    public function getInfos() {
        return parent::getInfos() . " | Portes: $this->nombrePortes | Carburant: $this->typeCarburant";
    }

    // Méthode spécifique
    public function klaxonner() {
        return "La voiture klaxonne : Bip Bip !<br>";
    }
}

// Classe enfant qui hérite de Vehicule
class Moto extends Vehicule {
    private $cylindree;

    public function __construct($marque, $modele, $annee, $cylindree) {
        parent::__construct($marque, $modele, $annee);
        $this->cylindree = $cylindree;
    }

    public function getInfos() {
        return parent::getInfos() . " | Cylindrée: $this->cylindree cc";
    }

    public function faireRugir() {
        return "La moto rugit : Vroooom !<br>";
    }
}

// Utilisation des classes
$voiture = new Voiture("Renault", "Clio", 2020, 5, "Essence");
echo $voiture->demarrer();
echo $voiture->getInfos() . "<br>";
echo $voiture->klaxonner();

echo "<br>";

$moto = new Moto("Yamaha", "MT-07", 2021, 689);
echo $moto->demarrer();
echo $moto->getInfos() . "<br>";
echo $moto->faireRugir();
?>
