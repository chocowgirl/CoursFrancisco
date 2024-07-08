<?php

declare(strict_types=1); //ceci force la vérification des types

class Eleve {
    //proprietes
    private int $id;
    private string $prenom;
    private int $anneeInscription;
    private DateTime $dateNaissance; //un objet de la classe DateTime (partie du SPL library) 
    private string $avatar; 


    //methodes
    public function __construct(
        string $prenom, 
        int $anneeInscription, 
        DateTime $dateNaissance, 
        string $avatar =""){
        // print('coucou');
        $this->prenom = $prenom;
        $this->anneeInscription = $anneeInscription;
        $this->dateNaissance =$dateNaissance;
        $this->avatar = $avatar;

        //generer id
        $this->id = rand(1,1000000);
    }


    public function getId() : int{
        return $this->id;
    }
    //usage interne de la classe
    private function setId(int $id){
    $this->id = $id;
    }
    


    public function getPrenom():string //car cette fonction return un string
    {
        return ($this->prenom);
    }
    public function setPrenom (string $prenom) : self {
        if(mb_strlen($prenom) >= 5){
            $this->prenom = $prenom;
        }
        return $this;
    }

    

    public function getAnneeInscription():int{
        return($this->anneeInscription);
    }
    public function setAnneeInscription (int $anneeInscription):self {
        $this ->anneeInscription = $anneeInscription;
        return $this;
    }


    public function getDateNaissance() :DateTime {
        return $this->dateNaissance;
    }
    public function setDateNaissance($dateNaissance){
        $this->dateNaissance = $dateNaissance;
        return $this;
    }



    public function getAvatar() : string {
        return $this->avatar;
    }
    public function setAvatar (string $avatar) :void {

    }

    
    ////
    public function afficher() : void
    {
        print("<h3>Je suis " . $this->prenom . ". Je me suis inscrite l'année " . $this->anneeInscription . "et je suis néé en " . $this->dateNaissance->format("Y"));
    }

}


