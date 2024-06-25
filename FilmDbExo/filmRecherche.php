<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<?php
        include"./checkSession.php";
        include"./nav.php";

    ?>
    <form action="filmRechercheT.php" method="POST">
        <!-- <label for="termeRecherche">Recherche</label> -->
        <input type="text" name="termeRecherche" id="termeRecherche">
        <input type="submit" value="Rechercher">
    </form>
</body>
</html>