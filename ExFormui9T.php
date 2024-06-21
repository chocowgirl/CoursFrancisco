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
    <?php
    // var_dump ($_POST);

    $prixSimple = 80;
    $prixDouble = 100;
    $prixSuite = 150;
    $qtySimple = $_POST['simple'];
    $qtyDouble = $_POST['double'];
    $qtySuite = $_POST['suite'];

    $prixTTL = ($qtySimple * $prixSimple) + ($qtyDouble * $prixDouble) + ($qtySuite * $prixSuite);
    print("Total price for your required rooms and suites: " . $prixTTL);
    ?>
</body>
</html>