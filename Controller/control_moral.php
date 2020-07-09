<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once '../Config/autoload.php';

//use InsertMoral\principal_Moral;
//use clientMoral\Client_Moral;

//require_once '../Model/Insert_Client_Moral.php';
//require_once '../Model/Class_Client_Moral.php';
use Model\Class_Client_Moral;
use Model\Insert_Client_Moral;
use Model\Principal;
//use Model\config;

$princ = new Insert_Client_Moral();


if(isset($_POST['btn22'])) {

   $client_moral = new Class_Client_Moral(array(
       'nomEmployeur'=>trim($_POST['nomEmployeur'], ' '),
       'AdresseEmployeur'=>trim($_POST['AdresseEmployeur'], ' '),
       'raisonSocial'=> trim($_POST['raisonSocial'], ' '),
       'numIdent'=> trim($_POST['numIdent'], ' ')
   ));

   $princ->Ajout_client_Moral($client_moral);

 }
