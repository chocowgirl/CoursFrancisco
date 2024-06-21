<?php
    declare (strict_types=1);
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
// Nous voulons générer de noms complets de personnages pour un jeu de vidéo. Créez une fonction 
// capable de générer un array de noms complets à partir d'un array de noms et un autre de prénoms.  
// Note: Pour éviter de générer à chaque fois les mêmes couples, utilisez la fonction shuffle, 
// capable de mélanger au hasard les éléments d'un array
    $prenoms = ["Jenny", "Julio", "Javier", "Juan"];
    $ndfamille = ["Gonsalvez", "Bardem", "ElNunca", "Rodriguez"];

    function nameGenerator (int $number, array $array1, array $array2):array{
        $newarray = [];
        for($i= 0; $i<$number; $i++){
            shuffle($array1);
            shuffle($array2);
            $newname = ($array1[0] . " " . $array2[0]);
            // print($newname);
            $newarray[] = $newname;
        }
        return $newarray;
    }
    
    $answer = nameGenerator(8, $prenoms, $ndfamille);
    var_dump($answer); // or foreach($answer as $value){print($value)}


    ?>
</body>
</html>



