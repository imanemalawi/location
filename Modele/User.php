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

    // Créer un nouvel utilisateur :
    public function create($nom,$prenom,$email,$tel,$rank,$password){
      $sql = 'insert into users(nom,prenom,email,tel,password,rank)
      values ("'.$nom.'",
      "'.$prenom.'",
      "'.$email.'",
      "'.$tel.'",
      "'.$password.'",
      "'.$rank.'")';
      $this->executerRequete($sql);
    }

    // Chercher un utilisateur par mail et mot de passe (pour l'authentification)
    public function userLogin($mail,$mdp){
      $sql = 'select * from users'
        . ' where email=? and password=?';
      $user = $this->executerRequete($sql, array($mail,mdp));
      if ($user->rowCount() == 1)
        return $user->fetch();  // Accès à la première ligne de résultat
      else
        throw new Exception("Email ou password incorrect");

    }
}
