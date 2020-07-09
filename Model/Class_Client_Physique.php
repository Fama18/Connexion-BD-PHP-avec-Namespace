<?php
namespace Model;
error_reporting(E_ALL);
ini_set('display_errors', 1);

class Class_Client_Physique {
    private $numCni;
    private $nom;
    private $prenom;
    private $civilite;
    private $DateDeNaissance;
    private $adresse;
    private $email;
    private $telephone;

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
    public function getNumCni() {
        return $this->numCni;
    }
    public function getNom() {
        return $this->nom;
    }
    public function getPrenom() {
        return $this->prenom;
    }
    public function getCivilite() {
        return $this->civilite;
    }
    public function getDateDeNaissance() {
        return $this->DateDeNaissance;
    }
    public function getAdresse() {
        return $this->adresse;
    }
    public function getEmail() {
        return $this->email;
    }
    public function getTelephone() {
        return $this->telephone;
    }

    //setteurs
    public function setNumCni($numCni) {
        $this->numCni = $numCni;
    }
    public function setNom($nom) {
        $this->nom = $nom;
    }
    public function setPrenom($prenom) {
        $this->prenom = $prenom;
    }
    public function setCivilite($civilite) {
        $this->civilite = $civilite;
    }
    public function setDateDeNaissance($DateDeNaissance) {
        $this->DateDeNaissance = $DateDeNaissance;
    }
    public function setAdresse($adresse) {
        $this->adresse = $adresse;
    }
    public function setEmail($email) {
        $this->email = $email;
    }
    public function setTelephone($telephone) {
        $this->telephone = $telephone;
    }


}