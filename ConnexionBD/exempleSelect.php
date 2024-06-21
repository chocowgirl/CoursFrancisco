<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemple SELECT</title>
</head>
<body>
    <?php

    include ("./db/config.php");
// 1 - create a connection object (pdo or PHP data object)
    // const DSN = "mysql:host=localhost;port=3306;dbname=bd1wad24;charset=utf8";
    // const USERNAME = "root";
    // const PASSWORD = "";
////*******//THE ABOVE WAS MOVED TO ITS OWN PAGE, config.php
    $cnx = new PDO(DSN, USERNAME, PASSWORD);
    // var_dump($cnx);


//2 - create a string containing the request
    $sql = "SELECT prenom, hobby FROM stagiaire"; //variable string


//3 - Prepare the request
    $stmt = $cnx->prepare($sql);


//4- Launch the request on the MySQL server
    $stmt -> execute();


//5- Obtain the data in an array
    //the fetchALL sends an associtive array containing the results of the request
    $resultat = $stmt->fetchAll(PDO::FETCH_ASSOC);

    //$resultat = $stmt->fetch(PDO::FETCH_ASSOC);
    //var_dump ($resultat)
//the above can be repeated to fetch line by line in the larger array





//6- Display the obtained data
    var_dump($resultat);


//7 to affiche in a list
    print ("<ul>");
    foreach ($resultat as $key => $arrayStagiaire){
        foreach($arrayStagiaire as $clef => $value){
            print("<li>" . $clef . ":" . $value . "</li>");
        }
    }




    print("</ul>");


    ?>
</body>
</html>