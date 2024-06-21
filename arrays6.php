<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- 6)  Créez un tableau qui contient les valeurs du 1 à 200. Affichez son contenu (boucles) -->
    <?php
    $values = [];
    // $chiffre = 1;
    // while($values[count($values)-1]!=200){
    //     $values[] = $chiffre;
    //     // print($values);
    //     $chiffre++;
    // }
    // print_r($values); #CETTE SOLUTION BOUFFE PROCESSOR, ALORS UN FOR EST +EFFICACE
    for ($i = 1; $i <= 200; $i++) {
        $values[] = $i;
    }
    print_r($values);
    ?>
</body>

</html>