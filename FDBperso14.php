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
//Créer une fonction qui génére un tableau de chiffres aléatoires entre 0 et 100 et le renvoie

    function tableauCreate(float $size):array {
        $tab = [];
        for($i=1; $i<=$size; $i++){
        $num = mt_rand(1,100);
        $tab[] = $num; //or can just: $tab[] = mt_rand(1,100);
        }
        // print_r($tab);
        return $tab;
    }

    $monarray = tableauCreate(10);
    var_dump($monarray)
// or foreach ($monarray as $val){
        // print("<br>" . $val);
    // }


    ?>
</body>
</html>


