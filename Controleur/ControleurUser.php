<?php

require_once 'Modele/User.php';
require_once 'Vue/Vue.php';

class ControleurUser {

  private $voiture;

  public function __construct() {
    $this->user = new User();
  }

  // Page Inscription
  public function Inscription() {
    $vue = new Vue("Inscription");
    $vue->generer(array('nulle' => null));
  }

  



}
