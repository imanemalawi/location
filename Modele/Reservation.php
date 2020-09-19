<?php

require_once 'Modele/Modele.php';

class Reservation extends Modele {

  // Renvoie la liste des reservations
  public function getReservations() {
    $sql = 'select * from reservations';
    $reservations = $this->executerRequete($sql);
    return $reservations;
  }

  // Renvoie les informations sur un utilisateur
  public function getReservation($id) {
    $sql = 'select * from reservations'
      . ' where id=?';
    $reservation = $this->executerRequete($sql, array($id));
    if ($reservation->rowCount() == 1)
      return $reservation->fetch();  // Accès à la première ligne de résultat
    else
      throw new Exception("Aucun reservation ne correspond à l'identifiant '$id'");
    }

    public function create($car_id,$date_debut,$date_fin,$ville_debut,$ville_fin,$nom,$prenom,$tel,$email,$statut,$age){
      $sql = 'insert into reservations(car_id,date_debut,date_fin,ville_debut,ville_fin,nom,prenom,tel,email,statut,age)
      values ("10","'.$date_debut.'","'.$date_fin.'","'.$ville_debut.'","'.$ville_fin.'","'.$nom.'","'.$prenom.'","'.$tel.'","'.$email.'","inactif","20") ';
      $this->executerRequete($sql);
    }
}
