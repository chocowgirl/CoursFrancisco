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
// Nous avons un array contenant de prix. Utilisez la fonction qui calcule la TVA pour afficher tous ces prix avec la TVA
    $prix = [14.99, 20.00, 5.49, 99.99];

    function showPricesTvaInclus ($price) : void {
        foreach($price as $value){
            print("prix TVA inclus = " . ($value*1.21) . " euros <br>");
        }
    }
        
    showPricesTvaInclus($prix);

    ?>
</body>
</html>