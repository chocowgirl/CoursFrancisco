<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include"./RunClass.php";

    $run1 = new Run(10.0, new DateTime("08/07/2024"), "Saucony Kinvara 14");

    var_dump($run1);


    ?>
</body>
</html>