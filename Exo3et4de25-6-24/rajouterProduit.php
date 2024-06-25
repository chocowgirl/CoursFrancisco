<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    session_start();
    
    //recuperer le produit choisi
    $produitChoisi = $_POST['produit'];
    print("Le produit choisi est : $produitChoisi ");
   
    
    //rajouter le produit dans la session
    $_SESSION['nomProduit'] = $produitChoisi;

    var_dump($_SESSION);
    // var_dump($_POST)

    ?>
</body>
</html>