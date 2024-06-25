<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<?php
        include"./checkSession.php";
        include"./nav.php";

    ?>
    Voici la page d'insertion
    <?php
    var_dump ($_POST);
    var_dump ($_FILES);

//upload fichier
//1. creer un nom uniquer pour le fichier
    $dossier = "./uploads";

    $nomFichier = (uniqid() . date("h-i-s") . $_FILES['image']['name']);

    $cheminComplet = $dossier . "/" . $nomFichier;

//2. deplacer le fichier temporaire et le donner le nom choisi
    move_uploaded_file($_FILES['image']['tmp_name'],$cheminComplet);

    print ($cheminComplet);




//fin upload fichier

//1. obtenir les données du formulaire 
    $titre = $_POST['titre'];
    $description = $_POST['description'];
    $duree = $_POST['duree'];
    $image = $_FILES['image'];

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


//3. Créer une requête du type INSERT
    $sql = "INSERT INTO film (id, titre, description, duree, image) VALUES (null, :titre, :description, :duree, :image)";

//4. Préparer la requête
    $stmt = $cnx->prepare ($sql); //on obtient un objet PDOStatement

    $stmt->bindValue(":titre", $titre);
    $stmt->bindValue(":description", $description);
    $stmt->bindValue(":duree", $duree);
// not this b/c it will put the original name: $stmt->bindValue(":image", $image);
    $stmt->bindValue(":image", $nomFichier);//on stocke le nom qu'on vient de donner au fichier uploadé

//5. Lancer la requête
    $stmt->execute();

    var_dump ($stmt->errorInfo());
    var_dump ($cnx )

    ?>
</body>
</html>