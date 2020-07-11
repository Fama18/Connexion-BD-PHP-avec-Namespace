<?php
namespace Model;

error_reporting(E_ALL);
ini_set('display_errors', 1);

use PDO;
use PDOException;

class Principal {

    private $pdo;

    public function __construct()
    {
       $this->pdo = $this->Connect();
    }
    public function Connect(){
        try {
            $host = config::param()[0];
            $dbname = config::param()[1];
            $user = config::param()[2];
            $mdp = config::param()[3];

            $db="mysql:host=$host;dbname=$dbname";
            $this->pdo = new PDO($db, $user, $mdp, array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));


        } catch (PDOException $ex) {
            die('Connexion failed : '.$ex->getMessage());
        }
        return $this->pdo;

    }

    //insertion de données
    public function Insert($sql , $data=array()){
        $req= $this->pdo->prepare($sql);
        $req->execute($data);
        return $req;
    }

    //lister les donnees d'une table
    public function list($sql) {
        $req = $this->pdo->prepare($sql);
        $req->execute();
        $tab = $req->fetchAll(PDO::FETCH_OBJ);
        return $tab;
      }

    }
