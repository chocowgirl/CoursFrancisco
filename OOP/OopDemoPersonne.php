<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //SANS OOP
    print ("hello");
    $s1 = [
        'prenom' => 'mariam',
        'hobby' => 'lire'
    ];

    $s2 = [
        'prenom' => 'Marwa',
        'hobby' => 'danser'
    ];

    function affichePersonne (array $personne): void{
        print("<h4>Je suis " . $personne['prenom'] . " et j'aime ". $personne['hobby'] . "</h4>");
    }

    affichePersonne($s1);
    affichePersonne($s2);


    //AVEC OOP
    include ("./Personne.php");
    $p1 = new Personne(); //on creer l'objet en referençant la classe Personne (other file linked by include statement that links the other php file just above here)

    $p1->prenom = "Juana";//on défine ce qui était undefined
    $p1->hobby = "nager";//on défine ce qui était undefined

    $p1->affiche();//après on peut appeler les fonctions qui sont associées aux objets
    $p1->chanter();


    $p2 = new Personne();
    $p2->prenom = "Margaret";
    $p2->hobby = "musique";

    $p2->affiche();

    $n1 = "coucou";

    var_dump($p1);
    var_dump($p2);




    
    ?>


</body>
</html>