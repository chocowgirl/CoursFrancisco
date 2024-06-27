<?php

// print("Je suis généré en PHP");


//prend une structure de donnees et génère un string JSON
// $tab = ["Debbie", "Anais", "Mariam"];
// $resJSON = json_encode($tab);
// print ($resJSON);

// php: [4,5,7]
//JSON: "[4,5,7]"

//php: ['nom'=>'Dupont', 'prenom'=>'Lola']
//JSON: "{'nom':'Dupont', 'prenom':'Lola'}"

// $tab = [
//     'nom'=>'Dupont',
//     'prenom'=>'Lola'
// ];
// $resJSON = json_encode($tab);
// print($resJSON);



$p1 = [
    'nom'=>'Dupont',
    'prenom'=>'Loli'
];
$p2 = [
    'nom'=>'Dupont',
    'prenom'=>'Lola'
];
$p3 = [
    'nom'=>'Dupont',
    'prenom'=>'Lolo'
];

$tab = [$p1, $p2, $p3];

$resJSON = json_encode($tab);
print($resJSON);

?>