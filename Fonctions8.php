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
// Créez une nouvelle version de la fonction précédente pour qu'elle renvoie 
// la valeur TVAc calculée (cette fonction n'affiche rien).
    $prix = 24.99;

    function PriceTvaInclus ($prixAvantTva) : float {
        // print("prix TVA inclus = " . ($prixAvantTva*1.21) . "euros");
        return ($prixAvantTva*1.21);
    }

    // PriceTvaInclus($prix);
    print("The price including TVA is " . PriceTvaInclus($prix));

    ?>
</body>
</html>