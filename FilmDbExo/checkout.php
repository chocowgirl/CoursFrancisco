<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css" type="text/css">
    <title>Document</title>
</head>
<body>
    <?php
    include "./nav.php";
    include "./checkSession.php";

    var_dump($_SESSION['panier']);



//connecter à la BD
    include "./db/config.php";

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

    print("IDS FILMS BELOW:");
    $ids = array_keys($_SESSION['panier']);


    var_dump($ids);


//on crée un string de la forme: 3,4,2,...
    $stringIds = implode(",", $ids);

    print ("<strong>string ids:</strong> " . $stringIds);
    $sql = "SELECT * FROM film WHERE film.id IN ("  . $stringIds .  ")";

    $stmt = $cnx->prepare($sql);
    $stmt->execute();

    $tabFilms = $stmt->fetchAll(PDO::FETCH_ASSOC);
    var_dump($tabFilms);

//recuperer le panier de la session (to make things easier for us)
    $panier = $_SESSION['panier'];
    foreach ($tabFilms as $film) {
        print("<div>");
        print("<h3>" . $film['titre'] . "</h3>");
        print("<img width='150px' src='./uploads/" . $film['image'] . "'>");
        print("</div>");
    //afficher la quantite qui correspond a ce film dans le panier
        print("Qte: " . $panier[$film['id']]);

        print("<select data-idfilm=" . $film['id'] . " id='selectQuantite'>");

        print("<option select value=" . $panier[$film['id']] . ">" . $panier[$film['id']] . "</option>");
        for ($i = 1; $i<=500; $i++){
            print("<option value=" . $i . ">" . $i . "</option>");
        }
        print("</select>");
    }


    ?>
</body>
</html>