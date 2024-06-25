<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
        include("./db/config.php");

        try{
            $cnx= new PDO (DSN, USERNAME, PASSWORD);
        }
        catch (Exception $e){
            //instructions to follow in case of connection problem
            print("<h3>Un problème est survenu</h3>");
            print("<a href='./acceuil.php'>Acceuil</a>");
    // souvent on met ici une image decontractant et on met un lien pour rediriger l'user
            die("C'est la fin");
        }

        $sql = "SELECT * FROM produit";

        $stmt = $cnx->prepare($sql);
        $stmt->execute();
        $arrayProduits = $stmt->fetchAll(PDO::FETCH_ASSOC);
        // var_dump($arrayProduits);
        ?>

    <form action="./rajouterProduit.php" method="POST">
    <select name="produit">

        <?php
        foreach($arrayProduits as $produit){
            print ("<option value=" . $produit['id'] . ">" . $produit['nom'] ."</option>");
        }

        ?>

        </select>
        <input type="submit" value="Envoyer">
    </form>
</body>
</html>