<?php

Class Personne{
    public string $nom;
    public string $email;

// liens (association)
    public Societe $employeur;

    public function __construct(string $nom, string $email){
        $this->nom = $nom;
        $this->email = $email;

    }
        
    // méthode de l'association
    public function setEmployeur(Societe $s){

        //rajouter l'objet dans l'array
        $this->employeur = $s;
    }


}