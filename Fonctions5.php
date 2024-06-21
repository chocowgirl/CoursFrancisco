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

    $chars = "This is a bit of text.";
    $couleur = "";
    function displayStringInColour (string $string, string $color) : void {
        print("<h1>" . $string . "</h1>");
        print("<style> h1 {color: $color} </style>");
// or print("<h1 style='color:$color'>)" . $string . "</h1>");

    }
//soit on défine $couleur in a var, ou on peut le taper dans l'appel à la fonction comme en-dessous
    displayStringInColour($chars, "red");


    ?>
</body>
</html>