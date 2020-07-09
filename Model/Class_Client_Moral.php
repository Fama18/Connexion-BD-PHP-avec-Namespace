<?php
namespace Model;
//namespace clientMoral;

error_reporting(E_ALL);
ini_set('display_errors', 1);

//require_once '../Config/autoload.php';

class Class_Client_Moral {
    private $nomEmployeur;
    private $AdresseEmployeur;
    private $raisonSocial;
    private $numIdent;


    public function __construct(array $data)
    {
        $this->hydrate($data);
    }

    public function hydrate(array $data){
        foreach ($data as $key => $value) {
        $method= 'set'.ucfirst($key);

        if(method_exists($this, $method)){
            $this->$method($value);
        }
     }
    }


    //fonctions de recupération des différents attributs
    public function getnomEmployeur() {
        return $this->nomEmployeur;
    }
    public function getAdresseEmployeur() {
        return $this->AdresseEmployeur;
    }
    public function getraisonSocial() {
        return $this->raisonSocial;
    }
    public function getnumIdent() {
        return $this->numIdent;
    }

    //setteurs
    public function setnomEmployeur($nomEmployeur) {
        $this->nomEmployeur = $nomEmployeur;
    }
    public function setAdresseEmployeur($AdresseEmployeur) {
        $this->AdresseEmployeur = $AdresseEmployeur;
    }
    public function setraisonSocial($raisonSocial) {
        $this->raisonSocial = $raisonSocial;
    }
    public function setnumIdent($numIdent) {
        $this->numIdent = $numIdent;
    }


}