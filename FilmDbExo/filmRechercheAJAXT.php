<?php
//obtenir les données du form(dans ce cas le terme de recherche)
// print ($_POST['termRecherche']);
// var_dump($_POST);
//connecter à la BD et obetnir tous les films qui correspondent

//1. obtenir le terme de recherche (du form)
$termRecherche = $_POST['termRecherche'];

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
    $sql = "SELECT * FROM film WHERE titre LIKE :termRecherche";


//4. Preparer la requete
    $stmt = $cnx->prepare ($sql);

//5. Donner des valeurs aux paramètres (placeholders)
    $stmt->bindValue(":termRecherche", "%" . $termRecherche . "%", PDO::PARAM_STR);

//6. Executer la requête
    $stmt->execute();

//7. Obtenir les données
    $arrayFilms = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // var_dump ($arrayFilms);


//Encoder le tableau contenant les fims en JSON
$tableauJSON = json_encode($arrayFilms);
print($tableauJSON);


?>