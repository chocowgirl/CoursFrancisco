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
//Créez un array de prix de vols. Créez une fonction qui reçoit un array et crée un tableau HTML contenant
// tous les prix. Les prix qui dépassent 300 euros seront affichés en rouge
    $prixDeVols = ["Paris" => 478.00, "Madrid" => 120.00, "Riga" => 49.99, "Londres" => 89.99, "Japon" => 788.00];
    
    function afficheTableauPrix($array): void {
        print("<table><thead><tr>");
        foreach($array as $key => $value){
            print("<th>" . $key . "</th>");
        }
        print("</tr></thead><tbody><tr>");
        foreach($array as $value){
            if($value > 300.00){
                print("<td style = 'color:red'>" . $value . "</td>");
            }
            else{
                print("<td>" . $value . "</td>");
            }

        }
    }
    afficheTableauPrix($prixDeVols);
//For later: CSS in html to add lines/colour to tableau.

    ?>
</body>
</html>