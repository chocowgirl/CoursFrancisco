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

    $sql = "SELECT *, AVG(valeur) AS moyenne FROM film INNER JOIN note ON film.id = note.idFilm WHERE film.id= :id"; 

    // SELECT AVG(valeur) AS moyenne FROM note WHERE idFilm=3; 

    $stmt = $cnx->prepare($sql);
    $stmt->bindValue(":id", $idFilm);

    $stmt->execute();

    $film = $stmt->fetch(PDO::FETCH_ASSOC); //le premier(unique)resultat de la requete

    // var_dump($film);
    print("<h1>" . $film['titre'] . "</h1>");
    print("<p>" . $film['description'] . "</p>");
    print("<p>Durée: " . $film['duree'] . "</p>");
    print("<img class='affiche' src = './uploads/" .$film['image'] . "'>");
    
    
    print("moyenne: " . $film['moyenne']);
// print("<div id='divNote'>blalb</div>");
    print("<div>Valoration Utilisateurs<div data-moyenne='" . $film['moyenne'] .  "' id='divNote'></div></div>");
    print("<div>Votre note: <div data-valeur='" . $film['valeur'] . "' id='divNoteUtilisateur'></div></div>");


    ?>

    <script>
    //creation des étoiles dans le div
    let divNote =document.getElementById("divNote");


    let menuEtoiles = jSuites.rating(divNote, {
        value: divNote.dataset.moyenne ,
        tooltip:['Horrible', 'Moyen', 'Plutôt bien', 'Bon', 'Sublime']

    });


//detecter le click dans divNote et obtenir le nombre d'"etoiles puis mettre a jour la note pour ce film de cet utilisateur
    let divNoteUtilisateur =document.getElementById("divNoteUtilisateur");



    let menuEtoilesUtilisateur = jSuites.rating(divNoteUtilisateur, {
        value: divNoteUtilisateur.dataset.valeur,
        tooltip:['Horrible', 'Moyen', 'Plutôt bien', 'Bon', 'Sublime'],
        onchange: stockerNote
        });

//faire appel AJAX pour inserer/mettre a jour la note de cet utilisateur pour ce film
        function stockerNote(){
            // console.log("appel"); used to check that console shows responsiveness until here
            //verifier s'il s'agit d'une nouvelle note
            let nouvelleNote = true;
            if(divNoteUtilisateur.data.valeur !== ""){
                nouvelleNote = false; //ce film est déjà noté par l'utilisateur
            }


            let xhr = new XMLHttpRequest();

            xhr.onreadystatechange = function(){
                if(xhr.readyState == 4){
                    
                    console.log("fini");
                }
            }

            // on doit envoyer: s'il s'agit d'une nouvelle note: la note

            xhr.open("GET", "./noteUpdate.php");
            xhr.send();

        }






    </script>
</body>
</html>