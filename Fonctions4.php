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

    $chars = "multiplicity";
    function displayStringInItalics (string $chars) : void {
        print("<h1><i>" . $chars . "</i></h1>");
        print("<style> h1 {color : blue;} </style>"); //ceci peut être mis hors de php pour faciliter codage (voir en-dessous)
// (putting style into php is only useful if the style aspect will be dynamic)
    }
    displayStringInItalics($chars);


    ?>
    <!-- <style>
        h1 {
            color : blue;
        }
    </style> -->
</body>
</html>