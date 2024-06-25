<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
//1- recuperer les données de formulaire d'inscription
    $nom = $_POST["nom"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    //$image = $_FILES["image"];


//2- connecter à la DB
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

//***EXERCICE:
    //verifier si l'utilisateur existe dans la BD
//2.1 - creer la requete pour cherche un utilisateur ayant l'email recu du formulaire
    //recu du formulaire
    $sql = "SELECT * FROM utilisateur WHERE email=:email";
//2.2-preparer la requete et l'executer
    $stmt = $cnx->prepare($sql);
    $stmt->bindValue(":email", $email);
    //obtenir l'array avec fetchAll
    //verifier la taille de l'array avec count()
    //si l'array n'est pas vide, afficher une erreur
    //autrement continuer l'execution pour stocker l'utilisateur
//2.3- executer la reauete
    $stmt->execute();
//2.4 - obtenir l'array resultat avec fetchAll
    $arrayUtilisateurs = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // var_dump($arrayUtilisateurs);

// if the mail est dejà pris:
    if (!empty($arrayUtilisateurs)){
        print("L'address mail est déjà prise");
        print("<a href='./acceuil.php'>Retourner à l'inscription</a>");
        die();
    }


//3- Créer la requet d'insertion (string)
    $sql = "INSERT INTO utilisateur (id, nom, email, password) VALUES (null, :nom, :email, :password)";

//3.1- preparer la requete
    $stmt = $cnx->prepare ($sql);    
    $stmt->bindValue(":nom", $nom);
    $stmt->bindValue(":email", $email);

    $passwordHash = password_hash($password, PASSWORD_DEFAULT, ["cost" => 12]);
    // print($passwordHash);//ici on test pour voir si ça genere un hash
    // die();
    $stmt->bindValue(":password", $passwordHash);

//3.2 - Lancer (execute) la requete
    $stmt->execute();
    header ("location: ./login.php");

//3.3 - Verifier si l'inscription a ete faite correctement


    ?>
</body>
</html>