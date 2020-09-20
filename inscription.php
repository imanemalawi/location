<?php

require 'Controleur/Routeur.php';
require_once 'Controleur/ControleurUser.php';

$controleur = new ControleurUser();

$controleur->Register();

