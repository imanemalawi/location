<?php

require 'Controleur/Routeur.php';
require_once 'Controleur/ControleurReservation.php';

$controleur = new ControleurReservation();

$controleur->confirmer_reservation();

