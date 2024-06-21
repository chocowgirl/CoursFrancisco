<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "Bonjour!";
    ?>

    Encore du html
    
    <?php
        print "Encore du PHP!";

        $nom = "Khaoula";
        print("<h3>" . $nom . "</h3>");

        if($nom =="Khaoula"){
            print("Interface 3!");
        }

        print("<ul>");
        for ($i = 0; $i <= 20; $i = $i +2){
            print("<li>" . $i . "</li>");
        }
        print("</ul>");

        print("<img width = 300px alt = 'a grey kitten' src='./chat.jpg'>");

        //tableaux

        $noms = ["Leslie", "Jessica", "Kenza"];

        //CRUD Create, read, update and delete
        $noms[]= "Mariam"; //Create

        //Read
        print($noms[2]);
        print(" " . $noms[3]);

        //Update
        $noms[2] = "Fatima";
        print(" " . $noms[2]);

        //Delete
        unset($noms[2]);
        print("<br>");
        print_r($noms); // ATTENTION que ça ne regenere les indexes!  Ca va foirer un boucle for normal
        //solution: use a foreach
        print("<br>");
        foreach($noms as $cle => $valeur){
            print(" " . $valeur);
        }

        foreach ($noms as $valeur){
            print(" " . $valeur);
        }

        //Arrays associatifs
        $ville = ["nom" => "Bruxelles", "population" => 1500000];
        print("<br>");

        //CRUD
        //CREATE
        $ville["pays"] = "Belgique";
        print_r($ville);
        print("<br>");

        //READ
        print($ville["nom"]);

        print("<ul>");
        foreach ($ville as $key => $value){
            print("<li>" . $key . ":" . $value . "</li>");
        }
        print("</ul>");

        //UPDATE
        $ville['population'] = $ville['population'] + 100000;
        print("<br> Encore des gens!  Nouvelle population : " . $ville['population']);
        print("<br>");
        print("<br>");

        //DELETE
        unset($ville['population']);
        print_r($ville);

    ?>
</body>
</html>