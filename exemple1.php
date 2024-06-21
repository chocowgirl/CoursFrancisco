<?php

print("Hello World! \n");
print("Hello Again!\n");

$nom = readline("Tapez votre nom: ");
$age = 46;
print("\nJ'ai " . $age . " ans");
print("\nJ'ai $age ans");
print('\nJ\'ai $age ans');// if you need to except a character from being thought of as code

print("\nJe suis " . $nom . " et j'ai " . $age . " ans");

$age = (int)readline("Tapez votre age");
$interdit = true;
print ("\n" . $interdit);

if($interdit == true){
    print("\nc'est vrai!"); //this is a comment
}

if (true){ // in this case we are using the if like a manual switch.
    print("\n c'est aussi vrai");
}


if ($age < 18){
    print ("vous êtes trop jeune");
}
elseif ($age > 100){
    print("\nvous êtes trop vieux!");
}
else {
    print ("\nBienvenue!");
}



