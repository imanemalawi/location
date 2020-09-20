<?php

require_once 'Modele/Reservation.php';
require_once 'Modele/Voiture.php';
require_once 'Vue/Vue.php';

// 
class ControleurReservation {

  private $reservation;
// contructeur qui crée l'objet avec ces attributs .
  public function __construct() {
    $this->reservation = new Reservation();
    $this->voiture = new Voiture();
  }

  // Affiche la liste de tous les Voiture.
  // 
  public function reservation() {
    $vue = new Vue("Reservation");
    $vue->generer(array('reservations' => null));
  }

  // Affiche la liste de tous les Voiture
  public function selection_car() {
    $voitures = $this->voiture->getVoitures();
    $vue = new Vue("SelectCar");
    $vue->generer(array('voitures' => $voitures));
  }

  // Affiche la liste de tous les Voitures
  public function informations_reservation() {
    $voiture = $this->voiture->getVoiture($_GET['voiture_id']);
    $vue = new Vue("InformationsReservation");
    $vue->generer(array('voiture' => $voiture));
  }

  // Confirmer Reservation
  public function confirmer_reservation(){
    $this->reservation->create($_POST['car_id'],
$_POST['date_debut'],$_POST['date_fin'],$_POST['ville_debut'],$_POST['ville_fin'],$_POST['nom'],
$_POST['prenom'],$_POST['tel'],$_POST['email'],$_POST['statut'],$_POST['age']);
    $vue = new Vue("Accueil");
    $vue->generer(array('voitures' => null));
  }


}
