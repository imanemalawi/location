<?php

require_once 'Modele/User.php';
require_once 'Vue/Vue.php';

class ControleurUser {

  private $voiture;

  public function __construct() {
    $this->user = new User();
  }

  // Page d'Inscription
  public function Inscription() {
    $vue = new Vue("Inscription");
    $vue->generer(array('nulle' => null));
  }

  // s'inscrire
  public function Register(){

    $this->user->create($_POST['nom'],$_POST['prenom'],$_POST['email'],$_POST['tel'],"normal",$_POST['password']);
    $vue = new Vue("Accueil");
    $vue->generer(array('voitures' => null));
  }





}
