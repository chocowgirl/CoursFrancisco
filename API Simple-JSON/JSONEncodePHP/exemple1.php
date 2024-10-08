<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    // encoder un array
    $tab = ['Jenny', 'Leslie','Dorothée'];
    // var_dump($tab);
    $tabJson = json_encode($tab);
    echo "<br>" . $tabJson;
    echo"<br>";

// ********************************************

    //encoder un array associatif
    $tabAssoc = ['nom'=>'Pepe', 'nationalite'=>'Belgique'];
    // var_dump($tabAssoc);
    $tabAssocJson = json_encode($tabAssoc);
    // var_dump($tabAssocJson);
    echo "<br>" . $tabAssocJson;
    echo"<br>";

// ************************************************    

//encoder un array d'arrays simples (indexés)
$tabArrays = [['Jean','Debbie','Jessica'], ['Leslie','Khaoula','Charifa']];
$tabArraysJson = json_encode($tabArrays);
echo "<br>" . $tabArraysJson;
echo"<br>";

// ************************************************    

//encoder un array d'arrays associatifs
$tabArraysAssoc= [
    ['nom'=>'pommes', 'prix'=>3],
    ['nom'=>'oranges', 'prix'=>2],
    ['nom'=>'poires', 'prix'=>2.5],
];
// var_dump($tabArraysAssoc);
$tabArraysAssocJson = json_encode($tabArraysAssoc);
echo "<br><br>" . $tabArraysAssocJson;
echo"<br>";

// ************************************************    

//encoder un objet d'une classe
class Personne{
    public string $nom;
    public string $hobby;
}

$p = new Personne();
$p->nom = "Louise";
$p->hobby = "natation";

$objJson = json_encode($p);
echo "<br><br>" . $objJson;

$p2 = new Personne;
$p->nom = "Martha";
$p->hobby = "lire";

$arrayObjets = [$p,$p2];
$arrayObjetsJson = json_encode($arrayObjets);
echo "<br><br>" . $arrayObjetsJson;
// ************************************************    



?>
</body>
</html>