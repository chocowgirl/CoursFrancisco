<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<!-- 4)  Rajoutez deux villes au tableau précédant et affichez le tableau -->
    <?php
    $villes = ["Montreal", "Barcelona", "Brussels", "Toronto", "Buffalo"];
    $villes[] = "Paris";
    $villes[] = "Milan";
    $villes[0] = "Quito";
    foreach($villes as $value){
        print($value . "<br>");
    }


    ?>
</body>

</html>