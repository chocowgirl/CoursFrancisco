<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    include"./EleveClass.php";

    // $e1 = new Eleve();

    // $e1->prenom = "Jenny";
    // $e1->anneeInscription = 2024;
    // $e1->dateNaissance = new DateTime("1/1/2000");
    $e1 = new Eleve ("Jenny", 2024, new DateTime("1/1/2000"));
    print("<h2>" . $e1->getId() . "</h2>");

    $e1->setPrenom("Lilyput");
    $e1->setAnneeInscription(2090);
    $e1->setDateNaissance(new DateTime());
    $e1->setAvatar("chariffa.jpg");

 
    //pour utiliser la méthode en-dessous, on doit avoir un return de l'objet dans le statement SET de la ficher classe
    $e1->setPrenom("Lilyput")
        ->setAnneeInscription(3000)
        ->setDateNaissance(new DateTime());
        // ->setAvatar("lily.jpg");

    // var_dump($e1);
    // die();


    // print ($e1->getPrenom());
    // print ($e1->getAnneeInscription());
    // // --->print($e1->getDateNaissance());//---->on ne peut pas afficher un objet!! Erreur
    // print ($e1->getDateNaissance()->format("d-m-y h:i:s"));
    

    $e1->setPrenom("Lola");
    // print($e1->getPrenom());
    
    $e1->setPrenom("Marie");
    // print($e1->getPrenom());


    $e1->setAnneeInscription(2000);
    print($e1->getAnneeInscription());
    
    $e1->setAnneeInscription(2020);
    print($e1->getAnneeInscription());

    // var_dump($e1);
    print("<br>");

    $e1->setAnneeInscription(8000)
        ->setPrenom("Manuela")
        ->setDateNaissance(new DateTime());


    // $res = $e1->setAnneeInscription(8000);
    $e1->afficher();
    // print("Annee: " . $e1->getAnneeInscription());

    // print("<img src='./)


    ?>

</body>
</html>