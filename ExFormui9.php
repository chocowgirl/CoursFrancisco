<!-- Pour une application web de réservations de chambres dans un hôtel nous avons besoin d'un formulaire permettant 
de choisir le nombre de chambres de chaque type (simples, doubles, suites) souhaitées par un client. Fixez le prix 
de chaque type de chambre dans une variable. Une fois les données seront envoyées, on calculera le prix total de la réservation. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action = "./ExFormui9T.php" method = "POST">
        Indiquez combien de chambres de chaque type il va vous falloir:<br>
        <br>Chambre simple: <input type ="number" min = "0" name = "simple">
        <br>Chambre double: <input type = "number" min = "0" name = "double">
        <br>Suite: <input type = "number" min = "0" name = "suite">
        <br><input type="submit">
    </form>
</body>
</html>
