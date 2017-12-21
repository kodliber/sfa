<?php
namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;

class Starfighter{
    private $id;
    private $nom;
    private $prenom;

    public function getId(){
        return $this->id;
    }
    public function getNom(){
        return $this->nom;
    }
    public function getPrenom(){
        return $this->prenom;
    }
    public function setId($c){
        $this->id = $c;
    }
    public function setNom($c){
        $this->nom = $c;
    }
    public function setPrenom($c){
        $this->prenom = $c;
    }
}