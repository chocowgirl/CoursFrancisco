<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
// 3)  Créez un tableau contenant des pays. Pour chaque pays on doit stocker son nom et sa capitale. 
// Créez une boucle foreach pour afficher son contenu dans la forme \"La capital de xxxx est xxxx\"
    $paysetcapitales = ["Canada" => "Ottawa", "Belgium" => "Brussels", "Spain" => "Madrid"];
    foreach($paysetcapitales as $key => $value){
        print("The capital of " . $key . " is " . $value . ".<br>");
    }


    ?>
</body>
</html>