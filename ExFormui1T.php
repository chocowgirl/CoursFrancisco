<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Créez un site contenant un formulaire
où l'utilisateur saisira son prénom, nom et âge. Le site doit afficher 
"Bienvenu XXXX XXXX, vous avez XXXX ans!" -->
    <?php
        var_dump($_POST);
        print("Bienvenue " . $_POST["prenom"] . " " . $_POST["nomdfamille"] . ", " . "vous avez " . $_POST["age"] . "!")


    ?>
</body>
</html>