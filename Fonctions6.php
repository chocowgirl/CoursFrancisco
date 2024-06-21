<?php
declare(strict_types = 1);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php    
//Créez une fonction qui reçoit un array et affiche ses éléments

    // $indexedarray = ["This", "is", "an", "indexed", "array"];
    // function displayArray (array $array) : void {
    //     foreach($array as $value){
    //         print($value . "<br>");
    //     }
    //     // print_r($array);
    // }
    
    $indexedarray = ["This", "is", "an", "indexed", "array"];
    function displayArray (array $array) : void {
        print("<ul>");
        foreach($array as $value){
            print("<li>". $value . "</li>");
        }
        print("</ul>");
        // print_r($array);
    }



    displayArray($indexedarray);

    ?>
</body>
</html>