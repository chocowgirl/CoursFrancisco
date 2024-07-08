<?php
declare(strict_types=1); //ceci force la vérification des types

class Image {
    public string $lien;

    public function __construct(string $lien){
        $this->lien = $lien;
        } 



    public function getLien():string //car cette fonction return un string
    {
        return $this->lien;
    }
    public function setLien (string $lien) : self 
    {
        $this->lien = $lien;
    
        return $this;
    }

    public function afficher ():void{
        print ("<img src='./" . $this->lien . "' width=150px>");
    }

}