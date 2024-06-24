<?php

print("Hello World! \n");
print("Hello Again!\n");

$nom = readline("Tapez votre nom: ");
$age = 46;
print("\nJ'ai " . $age . " ans.");//we can concatenate with points
print("\nJ'ai $age ans.\n");// or php can do implicit concatenation with variables in the phrase

print('\nJ\'ai $age ans.');//we can see simple quotes aren't great in php...

print("\nJe suis " . $nom . " et j'ai " . $age . " ans");

$age = (int)readline("\nTapez votre age: ");//the (int) here converts the input to an integer

$agePlusOne = $age + 1;

$interdit = true;
print("\n" . $interdit);//a variable that is true when asked to print will print as 1

print("\n $interdit again!  In one year you will be $agePlusOne!");

if($interdit == true){
    print("\nc'est vrai!");
}

if (true){ // in this case we are using the if like a manual switch.
    print("\n c'est aussi vrai");
}


if ($age < 18){
    print ("\nVous êtes trop jeune");
}
elseif ($age > 100){
    print("\nVous êtes trop vieux!");
}
else {
    print ("\nBienvenue!");
}



