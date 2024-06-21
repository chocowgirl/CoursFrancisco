<!-- Créez un formulaire qui nous permette de choisir le nom d'un animal d'une liste déroulante. 
Quand on envoie les données, une image de l'animal choisi sera affichée. Les images se trouvent dans le serveur -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./ExFormui7T.php" method="POST">

            <select name="animal">
            <option value= "0">Cat</option>
            <option value= "1">Shark</option>
            </select>

            <input type="submit">
    </form>
</body>
</html>