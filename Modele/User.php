<?php

require_once 'Modele/Modele.php';

class User extends Modele {

  // Renvoie la liste des utilisateurs
  public function getUsers() {
    $sql = 'select * from users';
    $users = $this->executerRequete($sql);
    return $users;
  }

  // Renvoie les informations sur un utilisateur
  public function getUser($id) {
    $sql = 'select * from users'
      . ' where id=?';
    $user = $this->executerRequete($sql, array($id));
    if ($user->rowCount() == 1)
      return $user->fetch();  // Accès à la première ligne de résultat
    else
      throw new Exception("Aucun user ne correspond à l'identifiant '$id'");
    }
}
