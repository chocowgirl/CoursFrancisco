<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php    

// 9)  (Web) Créez un array contenant de noms de sites web (ex: Startpage, Wikipedia), leur lien 
//d\'internet (ex: www.startpage.com) et une description de chacun (ex: moteur de recherche).
// Une fois crée, rajoutez encore deux sites.
// Affichez le contenu de l\'array dans un tableau HTML en utilisant une boucle

    $website1 = ["nom" => "Facebook", "lien" => "https://www.facebook.com", "description" => "Social Network", "image" => "https://img.freepik.com/premium-vector/blue-social-media-logo_197792-1759.jpg"];
    $website2 = ["nom" => "Wikipedia", "lien" => "https://www.wikipedia.org", "description" => "Online Encyclopedia", "image" => "https://upload.wikimedia.org/wikipedia/commons/thumb/b/b3/Wikipedia-logo-v2-en.svg/892px-Wikipedia-logo-v2-en.svg.png"];
    $website3 = ["nom" => "Google", "lien" => "https://www.google.be", "description" => "Motor de recherche", "image" => "https://upload.wikimedia.org/wikipedia/commons/8/8d/Google_logo_%282010-2013%29.svg"];
    $websites = [$website1, $website2, $website3];
    $websites[]= ["nom" => "Stack Overflow", "lien" => "https://stackoverflow.com", "description" => "Developper Forums", "image" => "https://www.zdnet.com/a/img/resize/fc7b8d4b1f4b34862881ebf41dec855600480098/2022/08/01/71433421-11f6-4ee9-97d5-3249e8457842/stack-overflow-logo-crop-for-twitter.jpg?auto=webp&width=1280"];
    $websites[]= ["nom" => "Zach Lieberman", "lien" => "http://zach.li", "description" => "Site d'artist / professeur", "image" => "https://cms.showstudio.com/images/Ft3UjXgHWr2M1Qm15Jmd8kuh--o=/553616/width-2880%7Cformat-jpeg/Zach_Lieberman__Blob_Extruded__2024__C-Type_on_Fuji_Metallic__75cm_x_75cm.png"];

    // foreach($repertoire as $listing){
    //     print("<br>");
    //     foreach($listing as $key => $value){
    //         print($key . " : " . $value . "<br>");
    //     }
    // }

    print("<table><thead><tr>");
    foreach($websites[0] as $key => $value){
        print("<th>" . $key . "</th>");
    }
    print("</tr>");
    print("</thead>");
    print("<tbody>");

    foreach($websites as $listing){
        print("<tr>");
        // foreach($listing as $value){
        //     print("<td>" . $value . "</td");
        print("<td>" . $listing["nom"] . "</td>");
        print("<td><a href=" . "'" . $listing["lien"] . "'>" . $listing["lien"] . "</a></td>");
        print("<td>" . $listing["description"] . "</td>");
        print("<td><img src=" . "'" . $listing["image"] . "'>" . "</td>");
        print("</tr>");   
    }
    print("</tbody></table>");


    print("<style> table, td {border: 1px solid blue;} </style>");
    print("<style> table, td {background: lightgray;} </style>");
    print("<style> td {background: white;} </style>");



    ?>
</body>
</html>