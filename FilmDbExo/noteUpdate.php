<?php

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

// $valeur = $_GET....
$sql = "UPDATE note SET valeur=:valeur WHERE note.id = :id";

$sql = "INSERT INTO note (id, valeur, idUtilisateur, idFilm) VALUES (null, :valeur, :idUtilisateur, :idFilm)";




?>