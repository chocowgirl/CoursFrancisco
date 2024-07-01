<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //demarrer la session
    session_start();

    //1. recuperer les donneées du form login (email et pass)
    $email = $_POST['email'];
    $password = $_POST['password'];
    //2. Connecter à la BD
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


    //3. Créer la requete(chercher un utilisateur qui a l'email qu'on a tapé dans le formulaire)
    $sql = "SELECT * FROM utilisateur WHERE email=:email";
//-preparer la requete et l'executer
    $stmt = $cnx->prepare($sql);
    $stmt->bindValue(":email", $email);
    //obtenir l'array avec fetchAll
    //verifier la taille de l'array avec count()
    //si l'array n'est pas vide, afficher une erreur
    //autrement continuer l'execution pour stocker l'utilisateur
//executer la reauete
    $stmt->execute();
//obtenir l'array resultat avec fetchAll
    $arrayUtilisateurs = $stmt->fetchAll(PDO::FETCH_ASSOC);


    //4. - Si l'utilisateur existe:
    //4.1 - obtenir le mot de passe (de la BD)
    //4.2 - verifier que le mot de pass du form == celui de la BD
    var_dump($arrayUtilisateurs);
//mais si il n'existe pas, on arrete le script:
    if (empty ($arrayUtilisateurs)){
        print("L'utilisateur n'existe pas<br>");
        print("<a href='./inscription.php'>S'enregistrer</a>");
        die();
    }


    $passwordHashBD = $arrayUtilisateurs[0]['password'];

    //obtenir le nom d'utilisateur (pour les acceuillir sur la page d'acceuil)
    $nomUtilisateur = $arrayUtilisateurs[0]['nom'];
    //obtenir l'id de l'utilisateur
    $idUtilisateur = $arrayUtilisateurs[0]['id'];
    
    if (password_verify($password, $passwordHashBD) ==false){
        //pw pas bon
        print("utilisateur ou mot de pass incorrecte");
        die();
    }
    else{
        //pw est ok!
        //on va ecrire le nom d'utilisateur et son id dans la session ($_SESSION)
        //*****N'oublier pas de démarrer la session! (tout en haut)******
        $_SESSION['nomUtilisateur'] = $nomUtilisateur;
        $_SESSION['idUtilisateur'] = $idUtilisateur;
        //Here we check that it's working: 
        // var_dump($_SESSION);
        // die();

        //we go to welcome page
        header ("location: ./accueil.php");
    }

    

    ?>
</body>
</html>