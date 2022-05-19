<?php
class categorie
{
    private $NomLivre=null;
    private $NomCategorie=null;
    private $IdCategorie=null;
    private $Prix=null;
    private $imageA=null;

   
    function __construct($NomLivre,$NomCategorie, $Prix, $imageA){
        $this->NomLivre=$NomLivre;
        $this->NomCategorie=$NomCategorie;
        $this->Prix=$Prix;
        $this->imageA=$imageA;
    }

    function getNomCategorie(){
        return $this->NomCategorie;
    }
    function getNomLivre(){
        return $this->NomLivre;
    }
    function getIdCategorie(){
        return $this->IdCategorie;
    }
    function getPrix(){
        return $this->Prix;
    }
    function getimage(){
        return $this->imageA;
    }
  
    function setNomCategorie(string $NomCategorie){
        $this->NomCategorie=$NomCategorie;
    }
    function setNomLivre(string $NomLivre){
        $this->NomLivre=$NomLivre;
    }
    function setPrix(string $Prix){
        $this->Prix=$Prix;
    }
    function setimage(string $imageA){
        $this->imageA=$imageA;
    }
  
}

?>