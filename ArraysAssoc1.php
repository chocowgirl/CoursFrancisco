<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // 1)  Créez un array associatif contenant de couples film-réalisateur. 
    // Affichez le contenu en utilisant une boucle foreach
    $films = ["Titanic" => "James Cameron", "Jaws" => "Stephen Speilberg", "Aliens" => "Ridley Scott"];
    foreach($films as $key => $value){
        print("<br>" . $key . " : " . $value);
    }





    ?>



</body>
</html>