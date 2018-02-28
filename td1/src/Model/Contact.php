<?php
namespace App\Model;

class Contact {
    private $nom;
    private $prenom;
    private $email;
    private $tel;
    private $mobile;
    
    public function __construct(){
        $this->nom = "SMITH";
    }
    
    public function getNom(){
        return $this->nom;
    }
}