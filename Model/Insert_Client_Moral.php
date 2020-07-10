<?php
namespace Model;

error_reporting(E_ALL);
ini_set('display_errors', 1);


class Insert_Client_Moral extends Principal {

    public function Ajout_client_Moral(Class_Client_Moral $client_moral){
        $req = self::Insert("INSERT INTO client_moral(nomEmployeur, AdresseEmployeur, raisonSocial, numIdent) VALUES (?, ?, ?, ?)",
       array(
        $client_moral->getnomEmployeur(),
        $client_moral->getAdresseEmployeur(),
        $client_moral->getraisonSocial(),
        $client_moral->getnumIdent()

        ));

        if($req){
            echo "<div class='alert alert-success'>Client moral enregistré avec succés </div>";
        }else{
            echo "<div class='alert alert-danger'>Echec d'enregistrement du client moral</div>";
        }
    }


    //function de liste de tabeau des clients physiques
    public function List_client_Moral(){
    $req = self::list("SELECT * FROM client_moral");
    return $req;
     }

}