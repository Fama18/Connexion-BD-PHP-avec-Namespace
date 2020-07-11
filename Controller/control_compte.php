<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once '../Config/autoload.php';

use Model\Class_Compte;
use Model\Insert_info_Compte;
use Model\Principal;

$p = new Insert_info_Compte();


if(isset($_POST['btn'])) {

    //var_dump($_POST['numagence']);
    //die();
   $compte = new Class_Compte();

   $compte->setNumAgence($_POST['numagence']);
   $compte->setCleRib($_POST['cleRib']);
   $compte->setNumCompte($_POST['NumCompte']);
   $compte->setIdclientphysique($_POST['id_client_physique']);
   $compte->setIdCompte($_POST['id_Compte']);

      $p->Ajout_compte($compte);


 }
