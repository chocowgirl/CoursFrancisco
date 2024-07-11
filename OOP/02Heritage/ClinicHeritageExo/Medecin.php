<?php

include_once"./Personne.php";

class Medecin extends Personne{

//new way of notation below:

    // public function __construct(string $nom,
    //                             string $email,
    //                             string $adresse,
    //                             public string $INAMI,
    //                             public string $specialite){
    //     parent::__construct($nom, $email, $adresse);
    //     $this->INAMI = $INAMI;
    //     $this->specialite = $specialite;
    // }


    //oldschool way of coding this below:
    public string $INAMI;
    public string $specialite;

    public function __construct (string $nom,
                                string $email, 
                                string $adresse,
                                string $INAMI,
                                string $specialite){
        parent::__construct($nom, $email, $adresse);
        $this->INAMI = $INAMI;
        $this->specialite = $specialite;
    }


    public function consulter():void{
        print("<br> Le medecin consulte");
    }

    public function afficher():void{
        parent::afficher();
        print("<br> INAMI: " . $this->INAMI);
        print("<br> Specialité: " . $this->specialite);
    }
}