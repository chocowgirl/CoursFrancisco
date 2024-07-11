<?php

Class Societe {
    
    public string $nom;
    public string $adresse;

// liens (association)
    public array $employes;



    public function __construct(string $nom, string $adresse){
        $this->nom = $nom;
        $this->adresse = $adresse;
        $this->employes= []; // [] is same as array();
    }

    // méthode de l'association
    public function addEmploye(Personne $p){
        //rajouter l'objet dans l'array $employes
        $this->employes[] = $p;
        //liens Societe-employe: fixer l'employeur pour l'employe courant
        $p->setEmployeur($this);
    }

    public function removeEmploye (Personne $p){
    //     if (in_array($p, $this->employes)){
    //         $pos = array_search($p, $this->employes);
    //         unset($this->employes[$pos]);
    //         print("trouvé et effacé!");
    //     }
    //     else{
    //         print("pas trouvé");
    //     }
    // }
         
// $pos sera false ou une position (0,1,2...)
    $pos = array_search($p, $this->employes);
    if ($pos !== false){
        unset ($this->employes[$pos]);
        print("trouvé et EFFACEEEE!");
    }
    }
}