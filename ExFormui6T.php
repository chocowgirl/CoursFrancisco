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
    <?php
    var_dump ($_POST);

    $prixHTVA = $_POST['prixHTVA'];
    $prixTVAC = $prixHTVA * 1.21;
    print("prix avec TVA" . $prixTVAC);

    print("Le prix TVAC est: " . $_POST["prixHTVA"] * 1.21);

    ?>
</body>
</html>