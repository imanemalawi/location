<?php

require_once 'Modele/Voiture.php';
require_once 'Vue/Vue.php';

class ControleurAdmin {

  /*
  public function __construct() {
    $this->voiture = new Voiture();
  }
  */

  // Affiche les détails sur un voiture
  public function auth() {
    $vue = new Vue("AuthAdmin");
    $vue->generer(array('title' => null ));
  }

  public function AdminAuth($ndc,$mdp){
    if($ndc=='admin' && $mdp == 'admin'){
      $vue = new Vue("Dashboard");
      $vue->generer(array('title' => 'Dashboard' ));
    }
    $vue = new Vue("AuthAdmin");
    $vue->generer(array('title' => null ));
  }
}
