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
        include"./checkSession.php";
        include"./nav.php";

    ?>

    <h1>Bienvenue
        <?php
        print($_SESSION['nomUtilisateur']);
        ?>
    !</h1>
    <!-- Afficher la list de films -->


     <?php
//1. Connecter a la base de données
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

//2. Créer la requête
$sql = "SELECT * FROM film ORDER BY id DESC LIMIT 3";

//3. Preparer la requête
$stmt = $cnx->prepare ($sql);

//4. Lancer la requête
$stmt->execute();

//5. Obtenir le résultat (les films dans ce cas et les mettre dans un array)
$arrayFilms = $stmt->fetchAll(PDO::FETCH_ASSOC);

//6. Afficher les données de la manière choisi
// var_dump($arrayFilms); on utilise ça d'abord pour verifier la transmission des infos

print("<ul>");
foreach ($arrayFilms as $film){
    print("<hr>");
    print("<li>Titre: " . $film['titre'] . "</li>");
    print("<li>Description: " . $film['description'] . "</li>");
    print("<li>Duree: " . $film['duree'] . "</li>");
    print("<img class='affiche' src='./uploads/" . $film['image'] . "'>");
    print("<br>");
    //form pour noter le film ... à la fin nous avons décidé d'effacer la formulaire en dessous
    // print("<input type='number' class='note'>");
}
print ("</ul>");

    ?>
</body>
</html>