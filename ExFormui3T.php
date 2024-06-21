<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- Créez un site où l'utilisateur doit deviner un chiffre au hasard entre 0 e 10 
(ce chiffre est créé par l'ordinateur en utilisant la fonction mt_rand()). 
Si la personne gagne, affichez une photo comme prix. Conseil : Apprenez à utiliser 
la fonction avant d'essayer de créer le site -->

    <?php
        var_dump($_POST);
        $num = mt_rand(0,10);
        print("Mon chiffre était: " . $num);
        if($num == $_POST["guess"]){
            print("Voilà votre prix: " . "<br>" . "<img src='https://i.gifer.com/UJr.gif'");
        }
        else{
            print("<a href = './ExFormui3.php'>Re-jouer?</a>");
        }

    ?>
</body>
</html>