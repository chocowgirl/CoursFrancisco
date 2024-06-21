<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<!-- 8)  (Web) Créez un tableau contenant les notes de 5 élèves et une boucle qui affiche son contenu.
 Les notes inférieures à 10 seront affichées en rouge. En plus, la boucle calcule et affiche la moyenne
  des notes. Faites-le avec for et while. -->
    <?php
    $total = 0;
    $noteseleves = [6,7,8,9,10];

    for($i=0; $i <= count($noteseleves)-1; $i++){
    // foreach($noteseleves as $value){
        if($noteseleves[$i] <10){
            print("<em>" . $noteseleves[$i] . "</em>" . " - ");}
        else{print($noteseleves[$i] . " - ");
        }
        $total = $total + $noteseleves[$i];
        // print($total . " - ");
    }
    $moyenne = $total/count($noteseleves); #############TURN INTO A WHILE
    print($moyenne);

    // for ($i = 0; $i <= count($tableau1)-1; $i++) {
    //     $tableau3[$i] = ($tableau1[$i]+$tableau2[$i]);
    // }
    // print_r($tableau3);

    ?>
</body>

</html>