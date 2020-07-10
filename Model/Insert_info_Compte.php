<?php
namespace Model;
error_reporting(E_ALL);
ini_set('display_errors', 1);


class Insert_info_Compte extends Principal{


 public function Ajout_compte(Class_Compte $Compte){
        $req = self::Insert("INSERT INTO comptes(numagence, cleRib, NumCompte) VALUES (?,?,?)",
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
    $req = self::list("SELECT * FROM comptes");
    return $req;
     }
    }
