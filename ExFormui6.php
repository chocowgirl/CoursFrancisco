<!-- Créez un formulaire qui permette de saisir un prix et le rajoute une TVA du 12%. 
L'utilisateur cliquera sur un bouton et le résultat du calcul sera affiché dans une autre page. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action = "./ExFormui6T.php" method = "POST">
        Entrez le prix pour savoir le prix TVA compris : <input type = "number" name="prixHTVA"><br>
        <input type = "submit">
    </form>
</body>
</html>