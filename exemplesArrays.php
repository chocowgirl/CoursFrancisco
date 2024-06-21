<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //arrays indexé
    $tab = ["Jessica", "Amalia", "Kenza"];
    $tab[1] = "Charifa";
    unset ($tab[2]);
    $tab[] = "Lola";  ####These are for an indexed tableau.  Index = clef numérique.

    //array associatif
    $personne = ["prenom" => "Melusine", "hobby" => "natation", "nationalité" => "belge"];
    $personne2 = ["prenom" => "Kenza", "hobby" => "chanter", "nationalité" => "belge"];
    $personne3 = ["prenom" => "Alessandra", "hobby" => "piano", "nationalité" => "italienne"];



    // CRUD (create, read, update, delete)

    //read:
    print("Le hobby de " . $personne["prenom"] . " est " . $personne["hobby"]);

    //update
    $personne["hobby"] = "escalade";
    print("<br>Le hobby de " . $personne["prenom"] . " est " . $personne["hobby"]);

    //create
    $personne["age"] = 27;
    print("<br>" . $personne["prenom"] . " a " . $personne["age"]);

    //delete
    unset ($personne["age"]);
    // print("<br>" . $personne["prenom"] . " a " . $personne["age"] . "\n"); //this will show an error as age has been removed.

    ### ITERER SUR UN ARRAY ASSOCIATIF (car pas indexes numerotés ####
    foreach ($personne as $value){
        print($value . "\n");
    }

    ### TO ITERER AVEC LES INFOS CLEFS AUSSI PRESENTES (ceci peut se faire aussi pour les arrays indexés)
    foreach ($personne as $key => $value){ ## you can use the words you like for key and value
        print("<br>" . $key . ":" . $value . "\n"); 
    }// to show only keys use this syntax but leave out $value in the print statement.

    ### TO EXTRACT ONLY KEYS
        $clefs = array_keys($personne);
        print("<br>" . "Les clefs de personne: ");
        foreach ($clefs as $clef){
            print("<br>" . $clef);
        }

    print("<br>");
    print(var_dump($personne));

    $eleves = [$personne, $personne2, $personne3];
    //changer hobby de kenza:
    $eleves[1]["hobby"] = "lire";

//parcourir l'array global ($eleves)
    $eleves[1]["nationalité"] = ["marocaine", "belge"];
    var_dump($eleves); // must put this after everything else
//chaque element de l'array global est un array ($eleve)
    foreach ($eleves as $eleve){ ## you can use the words you like for key and value
        foreach($eleve as $key => $value){
            print("<br>" . $key . " : ");
//si la valeur est un array, parcourir l'array pour afficher chaque valeur
            if(is_array($value)){
                foreach ($value as $val){
                    print($val . ",");
                }
            }
//si la valeur est un string, afficher le string
            else{
                print($value);
            }

        }
        

    }// to show only keys use this syntax but leave out $value in the print statement.


    ?>
</body>
</html>