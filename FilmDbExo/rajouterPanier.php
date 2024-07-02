<?php
session_start();

//if the panier doesn't exist we have to create it and store it in the session

if(empty($_SESSION['panier'])){
    $panier = [];
    $_SESSION['panier'] = $panier;
    // print("nouveau panier"); //voir note under re: JSON message
}
else{
    // print("le panier existe"); used to verify message passes, no longer needed
    //can't appear b/c will foirer the JSON message
}


//obtenir des données du formulaire (idfilm et qte)
//var_dump($_POST);
$idFilm = $_POST['idFilm'];
$quantite = $_POST['quantite'];

//stocker l'idfilm et la qte dans le panier
$panier = $_SESSION['panier'];//obtenir le panier de la session

if(isset ($panier[$idFilm])){
    //le film est déjà dans le session
    //rajouter la nouvelle qte
    $panier[$idFilm] += (int)$quantite;
    // print("lalala");//ici on verifie que le code va
}
else {
    //le film n'était pas dans le panier
    $panier[$idFilm] = (int)$quantite; //rejouter l'element
}


//stocker à nouveau le panier dans le session
$_SESSION['panier'] = $panier;


$quantiteTotale=0;
foreach($panier as $quantite){
    $quantiteTotale += $quantite;
}

$_SESSION['quantiteTotale'] = $quantiteTotale;
// print("panier: " . $quantiteTotale);

$response = ['message'=>'Produit mis dans le panier', 'quantiteTotale'=>$quantiteTotale];

print (json_encode($response));



// print("voici la variable panier");
// var_dump($panier);//ceci est la variable panier

// print("voici la session");
// var_dump($_SESSION);//voici la session


//ce page est pour stocker des elements ajoutés au panier
//idFilm => quantité


//




?>