<!-- Créez un formulaire qui nous permette d'introduire un prix et de calculer le prix TVAC. 
La TVA est choisie par l'utilisateur parmi les valeurs d'une liste déroulante. 
Forcez (HTML) à l'utilisateur à saisir une valeur numérique. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action = "./ExFormui8T.php" method="POST">
        Prix HTVA: <input type="number" name = "prixHTVA"><br>
        %TVA : <select name = "TVA">
                <option value ="1.06">6</option>
                <option value = "1.12">12</option>
                <option value = "1.21">21</option>
            </select>

            <input type = "submit">
    </form>
</body>
</html>