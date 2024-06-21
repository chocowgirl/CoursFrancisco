<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<!-- 7)  Créez une boucle qui multiplie par deux chaque valeur du tableau précédant. 
Le tableau doit être modifié, ce n'est pas juste un affichage -->
    <?php
    $values = [];
    // $chiffre = 1;
    // while($values[count($values)-1]!=200){
    //     $values[] = $chiffre;
    //     // print($values);
    //     $chiffre++;
    // }
    // print_r($values); #CETTE SOLUTION BOUFFE PROCESSOR, (doit checker chaque tour qu'il n'est pas à 200) ALORS UN FOR EST +EFFICACE
    for ($i = 1; $i <= 200; $i++) {
        $values[] = $i;
    }
    print_r($values);

    for ($i = 0; $i <= 199; $i++){
        $values[$i] = $values[$i]*2;
    }
    print_r($values);
    ?>
</body>

</html>