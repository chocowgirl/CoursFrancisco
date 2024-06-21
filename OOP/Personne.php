<?php
// in a php fichier we don't have to close the opening balise
declare (strict_types = 1);

class Personne {
    //properties
    public string $prenom;
    public string $hobby;


    //methods (functionality)
    function affiche ():void{
        print("Hello " . $this->prenom ." tout va bien!");
    }

    function chanter(): void{
        print ("<br>LALALA!!");
    }

}
