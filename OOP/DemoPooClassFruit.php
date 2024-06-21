<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include ("./Fruit.php");

    $orange = new Fruit();
    $orange->name = "orange";
    $orange->colour = "orange";
    $orange->juicy = true;

    $orange->describe();


    ?>
</body>
</html>