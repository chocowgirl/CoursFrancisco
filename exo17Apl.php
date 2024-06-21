<?php
###1.  Faites une boucle while pour afficher les valeurs entre 0 et 10. Utilisez **while** et **for** (deux versions différentes)
// $num = 0;

// while($num != 11){
//     print($num . "\n");
//     $num ++;
// }

## v2

// for ($num = 0; $num <=10; $num++){
//     print($num . "\n");
// }

###2.  Faites une boucle while et une boucle for pour afficher les valeurs entre 50 et 70

// $num = 50;
// while($num <= 70){
//     print($num . "\n");
//     $num++;
// }

## v2

// for ($num =50; $num <=70; $num++){
//     print($num . "\n");
// }

###3.  Faites un logiciel qui demande son âge à l'utilisateur. Le logiciel continue à demander jusqu'à ce qu'il
// introduise une valeur entre 0 et 130. Utilisez une boucle **while**. Si l'utilisateur est une personne majeure
// on lui donne la bienvenue. Dans le cas contraire, on affiche le message « Vous êtes encore très jeune»

// $age = (int)readline("Please enter your age: ");
// while($age < 0 OR $age > 130){
//     $age=(int)readline("Please enter your age: ");
// }
// if ($age >=18 AND $age <=129){
//     print("Welcome\n");
// }
// if ($age < 18){
//     print("You are still too young\n");
// }

###4.  Modifiez l'exercice précedant pour que l'utilisateur puisse se tromper 3 fois ... mais pas plus!
// $compteur = 0;
// $age=(int)readline("Please enter your age: ");
// $compteur = 1;

// while(($age < 0 OR $age > 130) AND $compteur <3){
//     $age=(int)readline("Please enter your age: ");
//     $compteur++;
// }
// if ($age >=18 AND $age <=130 AND $compteur <=3){
//     print("Welcome\n");
// }
// if ($age < 18 AND $compteur <=3){
//     print("You are still too young\n");
// }
// if ($compteur == 3){
//     print("Too many wrong attempts.");
// }

###5.  Faites une boucle pour afficher les valeurs impaires entre 50 et 100
// $num=51;
// while($num < 100){
//     print($num . "\n");
//     $num += 2;
// }

###6.  Faites une boucle qui, à partir d\'une valeur de départ stockée dans
    // une variable, affiche les dix nombres suivants. Par exemple, si la
    // valeur stockée est 17, le programme affichera les nombres de 18
    // à 27. Faites deux versions de l\'algorithme : while et for.

// $givennumber = (int)readline("Give me a number: ");
// $stopnumber = $givennumber+10;

// for($givennumber; $givennumber < $stopnumber; $givennumber++){
//     print($givennumber+1 . "\n");
// }

###7.  Créez un logiciel qui calcule la multiplication d'une suite de
// valeurs saisies par l'utilisateur. Le logiciel doit demander à
// l'utilisateur le nombre de valeurs qu'il souhaite saisir

// $nombredentrees = (int)readline("Combien des chiffres aimerais-vous multiplier ensemble?");
// $total = 1;
// while($nombredentrees !=0){
//     $num = (int)readline("Donnez-moi un nombre: ");
//     $total = $total * $num;
//     // print("Votre total est: " . $total . "\n");
//     $nombredentrees -=1;
// }
// print("Votre total est: " . $total);

###or we can: for($i =1; $i<=length; $i++){
###             $result = $result * (int)readline("Valeur $i");
###             }

###8.  Créez un logiciel qui calcule la multiplication d'une suite de
// valeurs saisis par l'utilisateur. L'entrée de données doit
// s'arrêter quand l'utilisateur saisit la valeur -1.
$total = 0;
$entries = 0;
while($num != -1){
    //print("Votre total est: " . $total . "\n");
    $num= (int)readline("Donnez-moi un nombre: ");
    $entries++;
    if($num != -1){
        $total = $total * $num;
    }
}
print("Votre total est: " . $total);