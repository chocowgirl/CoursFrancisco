<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    var_dump($_GET);
    if($_GET["prenom"] == "Jessica" and $_GET["nomdfamille"] == "Conrad"){
        print("Que la force soi avec" . " " . "<a href = 'https://www.starwars.com/'>toi</a>");
    }

    ?>
</body>
</html>