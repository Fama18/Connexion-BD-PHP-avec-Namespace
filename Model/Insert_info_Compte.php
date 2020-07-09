<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once 'principal.php';
require_once 'Config.php';
require_once 'Class_Compte.php';

class principal_compte extends Principal{


 public function Ajout_compte(Compte $Compte){
        $req = self::Insert("INSERT INTO compte(numagence, cleRib, NumCompte) VALUES (?, ?, ?)",
       array(
        $Compte->getnumagence(),
        $Compte->getCleRib(),
        $Compte->getNumCompte()

        ));

        if($req){
            echo "<div class='alert alert-success'>Informatioons compte enregistré avec succés </div>";
        }else{
            echo "<div class='alert alert-danger'>Echec d'enregistrement du compte</div>";
        }
    }


    //function de liste de tabeau des clients physiques
    public function List_Compte(){
    $req = self::list("SELECT * FROM compte");
    return $req;
     }
    }