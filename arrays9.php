<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<!-- 9)  Ecrivez un algorithme constituant un tableau, à partir de deux tableaux de même 
longueur existants. Le nouveau tableau sera la somme des éléments des deux tableaux de départ. -->
    <?php
    $tableau1 = [4,8,7,9,1,5,4,6];
    $tableau2 = [7,6,5,2,1,3,7,4];
    $tableau3 = [];

    for ($i = 0; $i <= count($tableau1)-1; $i++) {
        $tableau3[$i] = ($tableau1[$i]+$tableau2[$i]);
    }
    print_r($tableau3);

    ?>
</body>

</html>