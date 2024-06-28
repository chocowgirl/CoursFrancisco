<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <!-- afficher les details du film et permettre de mettre -->
    
    <?php


    include"./checkSession.php";
    include"./nav.php";


//obtenir les donnees du formulaire, dans ce cas, l'id du film
    $idFilm = $_GET['idFilm'];


    //2. connecter a la base de données (avec PDO)
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

    $sql = "SELECT * FROM film WHERE id=:id";

    $stmt = $cnx->prepare($sql);
    $stmt->bindValue(":id", $idFilm);

    $stmt->execute();

    $film = $stmt->fetch(PDO::FETCH_ASSOC); //le premier(unique)resultat de la requete

    // var_dump($film);
    print("<h1>" . $film['titre'] . "</h1>");
    print("<p>" . $film['description'] . "</p>");
    print("<p>Durée: " . $film['duree'] . "</p>");
    print("<img class='affiche' src = './uploads/" .$film['image'] . "'>");


    ?>
    
</body>
</html>