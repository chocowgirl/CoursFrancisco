<?php

class Personne {

    // public string $nom;
    // public string $email;
    // public string $addresse;

    // public function __construct (string $nom, string $email, string $addresse){
    //     $this->$nom = $nom;
    //     $this->$email = $email;
    //     $this->$addresse = $addresse;
    public function __construct(public string $nom, public string $email, public string $adresse)
    {
        $this->$nom = $nom;
        $this->$email = $email;
        $this->$adresse = $adresse;
    }
    

    public function afficher():void{
        print("<br><br>" . $this->nom . "<br>Adresse: " . $this->adresse . "<br>Mail: " . $this->email);
    }

}