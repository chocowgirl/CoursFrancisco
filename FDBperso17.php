<?php
declare (strict_types=1);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php    
// Créez une fonction qui reçoit un array de noms et modifie son contenu en mettant tous les noms en majuscule
//  (paramètre par référence). Affichez l'array original modifié dans le script principal
    
    $names = ["jessica", "julie", "jennifer", "john", "jan", "joel"];

    // function tableauCapitalise(array &$tab): void {
    //     foreach($tab as &$name){
    //         $name = ucfirst($name);
    //     }
    // }

    // tableauCapitalise($names);
    // var_dump($names)


// Créez une fonction qui reçoit un array de noms.  la fonction doit renvoyer un nouvel array où les
// noms commencent par majuscules
    $names = ["jessica", "julie", "jennifer", "john", "jan", "joel"];
    function tableauCapitalise(array $tab): array {
        $newtab = [];
        foreach($tab as $name){
            $newtab[] = ucfirst($name);
        }
    // print_r($newtab);
    return $newtab;
    }

// tableauCapitalise($names);
// var_dump($names)
    $result = tableauCapitalise($names);
    var_dump($result);
    var_dump($names);

 

    ?>
</body>
</html>
