<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<!-- 3)  Créez un tableau contenant les noms de 5 villes. Affichez le contenu du tableau en utilisant une boucle-->
    <?php
    $villes = ["Montreal", "Barcelona", "Brussels", "Toronto", "Buffalo"];

    foreach($villes as $value){
        print($value . "<br>");
    }


    ?>
</body>

</html>