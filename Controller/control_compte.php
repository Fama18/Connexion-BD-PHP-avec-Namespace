<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once '../Model/Insert_info_Compte.php';
require_once '../Model/Class_Compte.php';

$p = new principal_compte();


if(isset($_POST['btn'])) {

   $compte = new Compte(array(
       'numagence'=>trim($_POST['numagence']),
       'cleRib'=>trim($_POST['cleRib'], ' '),
       'NumCompte'=>trim($_POST['NumCompte'], ' ')
   ));

      $p->Ajout_compte($compte);


 }
