<?php

require_once 'Modele/Voiture.php';
require_once 'Vue/Vue.php';

class ControleurAccueil {

  private $voiture;

  public function __construct() {
    $this->voiture = new Voiture();
  }

  // Affiche la liste de tout les voitures

  public function accueil() {
    //$voitures = $this->voiture->getVoitures();
    $vue = new Vue("Accueil");
    $vue->generer(array('voitures' => null));
  }

  
}
