<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once '../Config/autoload.php';

use Model\Class_Client_Physique;
use Model\Insert_client_physique;
//use Model\Principal;

$principal = new Insert_client_physique();


if(isset($_POST['btn2'])) {

   $client_physique = new Class_Client_Physique(array(
       'numCni'=>trim($_POST['numCni'], ' '),
       'nom'=>trim($_POST['nom'], ' '),
       'prenom'=> trim($_POST['prenom'], ' '),
       'civilite'=> trim($_POST['civilite'], ' '),
       'DateDeNaissance'=>trim($_POST['DateDeNaissance'], ' '),
       'adresse'=>trim($_POST['adresse'], ' '),
       'email'=>trim($_POST['email'], ' '),
       'telephone'=> trim($_POST['telephone'], ' ')
   ));

   $principal->Ajout_client_Physique($client_physique);

 }
