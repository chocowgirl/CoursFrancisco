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

        include"./nav.php";
        include"./checkSession.php";

    ?>
    <h3>Tapez les données du film</h3>
    <form action="./filmInsererT.php" method="POST" enctype="multipart/form-data">
        <div>
        <label for="titre">Titre</label>
        <input type="text" name="titre" id="titre">
        </div>
        <div>
        <label for="description">Description</label>
        <input type="text" name="description" id="description">
        </div>
        <div>
        <label for="image">Duree</label>
        <input type="number" name="duree" id="duree">
        </div>
        <div>
        <label for="image">Image</label>
        <input type="file" name="image" id="image">
        </div>
        <div>
        <input type="submit" value="envoyer" id="envoyer">
        </div>
    </form>
</body>
</html>