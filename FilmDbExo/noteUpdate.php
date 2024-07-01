<?php


// var_dump($_POST);//ceci peut être vu dans le network réponse
// die();
//The above we did to make sure the information passes correctly to this page

session_start();

$idFilm = $_POST['idFilm'];
$valeur = $_POST['valeur'];
$idUtilisateur = $_SESSION['idUtilisateur'];
$nouvelleNote = $_POST['nouvelleNote'];

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

if($nouvelleNote ==="true"){
    $sql = "INSERT INTO note (id, valeur, idUtilisateur, idFilm) VALUES (null, :valeur, :idUtilisateur, :idFilm)";
}
else{
    $sql = "UPDATE note SET valeur = :valeur WHERE idUtilisateur = :idUtilisateur AND idFilm = :idFilm";
}
$stmt = $cnx->prepare($sql);
$stmt->bindValue(":idUtilisateur", $idUtilisateur);
$stmt->bindValue(":idFilm", $idFilm);
$stmt->bindValue(":valeur", $valeur);

$stmt->execute();



?>