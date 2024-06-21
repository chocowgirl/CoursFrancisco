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
    <?php
    // var_dump ($_POST);

    $prixHTVA = $_POST['prixHTVA']; //filtrer pr protect
    $TVA = $_POST['TVA']; //filtrer pr protect
    if(
        filter_var($prixHTVA, FILTER_VALIDATE_FLOAT)==false 
        ||
        filter_var($TVA, FILTER_VALIDATE_FLOAT)==false){
            die ("Arreter de chipoter sur le frontend de mon site");
        };




    $prixTVAC = $prixHTVA * $TVA;
    print("<br>" . "prix TVA compris = " . $prixTVAC);

    ?>
</body>
</html>