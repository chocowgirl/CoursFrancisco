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
// Nous voulons créer un jeu de lotto. Développez une fonction valeursLotto() qui affiche 6 valeurs entières 
// aléatoires (utilisez la fonction déjà existante mt_rand)

    function valeursLotto() : void {
        for($i=1; $i<=6; $i++){
            print(mt_rand(1, 99) . "<br>");
        }
    }
    valeursLotto();
    ?>
</body>
</html>