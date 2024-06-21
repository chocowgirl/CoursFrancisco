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
//Nous avons un panier dans un tableau sous la forme **produits=>prix **:
//Calculer le total du panier avec une fonction.
    $panier = ["Socks" => 4.99, "Tshirts" => 19.99, "Pants" => 49.99, "Shorts" => 22.49];
    
    function CalculePrix($array): float{
        $total = 0;
        foreach($array as $value){
            $total = $total + $value;
        }
        return $total;
    }
    print(CalculePrix($panier));




    ?>
</body>
</html>