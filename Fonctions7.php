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
//Créez une fonction qui reçoit un prix en paramètre et affiche le prix TVAc
    $prix = 24.99;

    function showPriceTvaInclus ($prixAvantTva) : void {
        print("prix TVA inclus = " . ($prixAvantTva*1.21) . "euros");
    }

    showPriceTvaInclus($prix);
    ?>
</body>
</html>