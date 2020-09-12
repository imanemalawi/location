<?php

require_once 'Controleur/ControleurAccueil.php';
require_once 'Controleur/ControleurVoiture.php';
require_once 'Vue/Vue.php';

class Routeur {

  private $ctrlAccueil;
  private $ctrlVoiture;

  public function __construct() {
    $this->ctrlAccueil = new ControleurAccueil();
    $this->ctrlVoiture = new ControleurVoiture();
  }

  // Traite une requête entrante.
  public function routerRequete() {
    try {
      if (isset($_GET['action'])) {
        if ($_GET['action'] == 'voiture') {
          if (isset($_GET['id'])) {
            $id = intval($_GET['id']);
            if ($id != 0) {
              $this->ctrlVoiture->voiture($id);
            }
            else
              throw new Exception("Identifiant de voiture non valide");
          }
          else
            throw new Exception("Identifiant de voiture non défini");
        }
        else
          throw new Exception("Action non valide");
      }
      else {  // aucune action définie : affichage de l'accueil
        $this->ctrlAccueil->accueil();
      }
    }
    catch (Exception $e) {
      $this->erreur($e->getMessage());
    }
  }

  // Affiche une erreur
  private function erreur($msgErreur) {
    $vue = new Vue("Erreur");
    $vue->generer(array('msgErreur' => $msgErreur));
  }
}
