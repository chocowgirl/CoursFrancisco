<?php

declare(strict_types = 1);

class Chat{
    public string $nom;
    public string $race;
    public string $lienImage;


    //les constructeurs assistent à initialiser les donnés pour des itérations
    function __construct (string $nom, string $race, string $lienImage){
        $this->nom = $nom;
        $this->race = $race;
        $this->lienImage = $lienImage;
    }
    /// after having put a constructor function the option to construct an entity the other way won't work

    public function affiche ():void{
        print("<br>Je suis " . $this->nom . " de la race " . $this->race);
        print("<img src='" . $this->lienImage . "'>");
    }

}