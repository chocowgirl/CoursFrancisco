<?php

class Animal {
    public string $nom;
    public string $race;


    public function __construct (string $nom, string $race){
        $this->nom = $nom;
        $this->race = $race;
    }
    public function afficher(){
        print("<br>Je suis le " .$this->race . " ");
    }

}



