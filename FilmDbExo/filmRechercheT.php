<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<?php
        include"./nav.php";
        include"./checkSession.php";

    ?>
    <?php
    // var_dump ($_POST);

//1. obtenir le terme de recherche (du form)
    $termeRecherche = $_POST['termeRecherche'];

//2. connecter à la base de données
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


//3. Créer une requête
    $sql = "SELECT * FROM film WHERE titre LIKE :termeRecherche";


//4. Preparer la requete
    $stmt = $cnx->prepare ($sql);

//5. Donner des valeurs aux paramètres (placeholders)
    $stmt->bindValue(":termeRecherche", "%" . $termeRecherche . "%", PDO::PARAM_STR);

//6. Executer la requête
    $stmt->execute();

//7. Obtenir les données
    $arrayFilms = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // var_dump ($arrayFilms);

//8. Afficher les données
    print("<ul>");
    foreach ($arrayFilms as $film){
        print("<hr>");
        print("<li>Titre: " . $film['titre'] . "</li>");
        print("<li>Description: " . $film['description'] . "</li>");
        print("<li>Duree: " . $film['duree'] . "</li>");

    }
    print ("</ul>");

    ?>
</body>
</html>