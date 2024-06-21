<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<!-- 2)  Rajoutez les montants 8 et 70 au tableau précédant. Affichez les éléments 2éme et 5éme du tableau. -->
    <?php
    $tab = [10, 20, 50];

    $tab[] = 8;
    $tab[] = 70;

    print($tab[1] . "<br>");
    print($tab[4] . "<br>");


    ?>
</body>

</html>