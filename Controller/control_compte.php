<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once '../Config/autoload.php';

use Model\Class_Compte;
use Model\Insert_info_Compte;
use Model\Principal;

$p = new Insert_info_Compte();


if(isset($_POST['btn'])) {

   $compte = new Class_Compte(array(
       'numagence'=>trim($_POST['numagence']),
       'cleRib'=>trim($_POST['cleRib'], ' '),
       'NumCompte'=>trim($_POST['NumCompte'], ' ')
   ));

      $p->Ajout_compte($compte);


 }