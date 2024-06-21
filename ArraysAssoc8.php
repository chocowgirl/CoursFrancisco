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

    // foreach($repertoire as $listing){
    //     print("<br>");
    //     foreach($listing as $key => $value){
    //         print($key . " : " . $value . "<br>");
    //     }
    // }
##### 8)  (Web) À partir de l\'exercice précédent Affichez le\'repertoire dans un tableau HTML, choisissez vous-même un
    //     format qui vous plaise. - Rajoutez au repertoire le contact de votre meilleur ami
    // $namebornnumber4 = ["nom" => "Rachel", "naissance" => "02/03/1960", "telnum" => "905-999-3565"];
    $repertoire[] = ["nom" => "Rachel", "naissance" => "02/03/1960", "telnum" => "905-999-3565"];
    // ^^ pas besoin de créer le nouveau array comme une variable avant ^^
    
    print("<table><thead><tr>");
    // print("<thead>");
    // print("<tr>");
    foreach($repertoire[0] as $key => $value){ // or $keys = array_keys($repertoire[0]);
        print("<th>" . $key . "</th>"); //foreach($keys as $key){
    }                                       //print("<th>" . $key . "</th>");
    print("</tr>");                        //}
    print("</thead>");
    print("<tbody>");

    foreach($repertoire as $listing){
        print("<tr>");
        foreach($listing as $value){
            print("<td>" . $value . "</td");
        print("</tr>");
        }
    }
    print("</tbody></table>");
    // print("</table>");
    print("<style> table, td {border: 1px solid blue;} </style>");
    print("<style> table, td {background: lightgray;} </style>");
    print("<style> td {background: white;} </style>");




    ?>
</body>
</html>