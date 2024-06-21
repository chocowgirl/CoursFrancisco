<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php    
// 7)  Créez trois arrays contenant le nom, date de naissance et le numéro de téléphone de 3 personnes. 
// Créez un array \"repertoire\" contenant ces trois arrays. Affichez le contenu complet du repertoire.
    $namebornnumber1 = ["nom" => "George", "naissance" => "02/03/1965", "telnum" => "905-835-4567"];
    $namebornnumber2 = ["nom" => "Lynne", "naissance" => "05/06/1978", "telnum" => "416-658-4924"];
    $namebornnumber3 = ["nom" => "Bob", "naissance" => "25/02/2001", "telnum" => "905-846-4836"];
    $repertoire = [$namebornnumber1, $namebornnumber2, $namebornnumber3];

    foreach($repertoire as $listing){
        print("<br>");
        foreach($listing as $key => $value){
            print($key . " : " . $value . "<br>");
        }
    }


    ?>
</body>
</html>