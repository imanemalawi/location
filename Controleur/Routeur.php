<?php

require_once 'Controleur/ControleurAccueil.php';
require_once 'Controleur/ControleurVoiture.php';
require_once 'Controleur/ControleurAdmin.php';
require_once 'Controleur/ControleurUser.php';
require_once 'Controleur/ControleurReservation.php';
require_once 'Vue/Vue.php';

class Routeur {

  private $ctrlAccueil;
  private $ctrlVoiture;
  private $ctrlAdmin;
  private $ctrlUser;

  public function __construct() {
    $this->ctrlAccueil = new ControleurAccueil();
    $this->ctrlVoiture = new ControleurVoiture();
    $this->ctrlAdmin = new ControleurAdmin();
    $this->ctrlUser = new ControleurUser();
    $this->ctrlReservation = new ControleurReservation();
  }

  // Traite une requête entrante
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
        elseif($_GET['action'] == 'authAdmin'){
          $this->ctrlAdmin->auth();
        }
        elseif($_GET['action'] == 'inscription'){
          $this->ctrlUser->Inscription();
        }
        elseif($_GET['action'] == 'voitures'){
          $this->ctrlVoiture->voitures();
        }
        elseif($_GET['action'] == 'reservation'){
          $this->ctrlReservation->reservation();
        }
        elseif($_GET['action'] == 'reservation_selectcar'){
          $this->ctrlReservation->selection_car();
        }
        elseif($_GET['action'] == 'reservation_infos'){
          $this->ctrlReservation->informations_reservation();
        }
        else
          throw new Exception("Action non valide");
      }
      else {  
        // aucune action définie : affichage de l'accueil


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
