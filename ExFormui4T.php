<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- Créez un script contenant un formulaire où on saisit deux valeurs entières. Un autre script 
traitera les données envoyées et affichera toutes les valeurs entières qui existent entre les 
deux dans un tableau HTML -->
    <?php
        var_dump($_GET);
        $num1 = (int)$_GET["num1"];
        $num2 = (int)$_GET["num2"];
        $lowestnum = min($num1, $num2);
        $highnum = max($num1, $num2);

        print($num1 . "<br>");
        print($num2 . "<br>");
        print("<br>lower number is: " . $lowestnum);
        print("<br>higher number is: " . $highnum);

        $qte = ($highnum - $lowestnum);
        print("<br>qte = " . $qte);
        print("<table>");
        for($i=$lowestnum; $i<=$highnum; $i++){
            print("<tr><td>" . $i . "</td></tr>");
        }
        print("</table>");




    ?>
    
</body>
</html>