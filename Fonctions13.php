<?php
declare(strict_types = 1);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php    
//Créez une fonction qui génère un array contenant un nombre aléatoire de prix (max 20) dont la valeur
// est aussi aléatoire (entre 100 et 800 euros)
    function creerArrayDePrix(){
        $array = [];
        $qte = mt_rand(1,20);
        print("quantité des prix à générer au hazard: " . $qte . "<br>");
        for($i=1; $i<=$qte; $i++){
            $info = mt_rand(100, 800);
        $array[] = $info;
        print_r($array);
        }
    return($array);
    }
    creerArrayDePrix(); ### CURRENTLY GENERATES QTE OF ARRAYS WITH QTE ALEATOIRE DES PRIX ALEATOIRES!!!



    ?>
</body>
</html>