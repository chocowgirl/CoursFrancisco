<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <!-- plugin étoiles -->
    <script src="https://jsuites.net/v4/jsuites.js"></script>
    <link rel="stylesheet" href="https://jsuites.net/v4/jsuites.css" type="text/css" />

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
//requete pour botenir la moyenne (de tous les utilisateurs)
    $sql = "SELECT *, AVG(valeur) AS moyenne FROM film LEFT JOIN note ON film.id = note.idFilm WHERE film.id= :id"; 

    // SELECT AVG(valeur) AS moyenne FROM note WHERE idFilm=3; 

    $stmt = $cnx->prepare($sql);
    $stmt->bindValue(":id", $idFilm);

    $stmt->execute();

    $filmMoyenne = $stmt->fetch(PDO::FETCH_ASSOC);// le premier(unique)resultat de la requete

// request pour obtain la note du film pour l'utlisateur connecté
// obtenir l'utilisateur de la session
    $idUtilsateur = $_SESSION['idUtilisateur'];

    $sql = "SELECT * FROM note WHERE note.idUtilisateur=:idUtilisateur AND note.idFilm = :idFilm";
    $stmt = $cnx->prepare($sql);
    $stmt->bindValue(":idUtilisateur", $idUtilsateur);
    $stmt->bindValue(":idFilm", $idFilm);

    $stmt->execute();
    //filmUtilisateur contiendra l'array d'un film ou false
    $filmUtilisateur = $stmt->fetch(PDO::FETCH_ASSOC);
    
    var_dump($filmUtilisateur);
    var_dump($filmMoyenne);



    print("<h1>" . $filmMoyenne['titre'] . "</h1>");
    print("<p>" . $filmMoyenne['description'] . "</p>");
    print("<p>Durée: " . $filmMoyenne['duree'] . "</p>");
    print("<img class='affiche' src = './uploads/" .$filmMoyenne['image'] . "'>");
    

    
    print("moyenne: " . $filmMoyenne['moyenne']);
// print("<div id='divNote'>blalb</div>");
    print("<div>Valoration Utilisateurs<div data-moyenne='" . $filmMoyenne['moyenne'] .  "' id='divNote'></div></div>");

    print("<div>Votre note: 
    <div data-idfilm=". $idFilm . " data-valeur='" . ($filmUtilisateur ? $filmUtilisateur['valeur'] : "") . "' id='divNoteUtilisateur'></div>
    <div>" . ($filmUtilisateur ? "" : "Pas de note") . "</div>");

//controles pour le panier
    print("<br><button id='btnRajouterPanier'>Rajouter</button>");
    print("<select data-idfilm=" . $idFilm . " id='quantite'>");
    for ($i = 1; $i <= 50; $i++){
        print("<option value=" . $i . ">" . $i . "</option>");
    }
    print("</select>");


    ?>

    <!-- <script src="notes.js"></script>
    <script src="./panier.js"></script> -->
    <script src="./js/notes.js"></script>
    <script src="./js/panier.js"></script>
</body>
</html>