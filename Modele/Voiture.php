<?php

require_once 'Modele/Modele.php';

class Voiture extends Modele {

  // Renvoie la liste des voitures du blog
  public function getVoitures() {
    $sql = 'select * from vehicules';
    $voitures = $this->executerRequete($sql);
    return $voitures;
  }

  // Renvoie les informations sur un vehicule
  public function getVoiture($id) {
    $sql = 'select * from vehicules'
      . ' where id=?';
    $voiture = $this->executerRequete($sql, array($id));
    if ($voiture->rowCount() == 1)
      return $voiture->fetch();  // Accès à la première ligne de résultat
    else
      throw new Exception("Aucun voiture ne correspond à l'identifiant '$id'");
    }
}
