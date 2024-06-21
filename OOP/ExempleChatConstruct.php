<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include("./Chat.php");

// !! note that b/c constructor function exists in Chat.php you MUST use the constructor-style declaration in order to initialise the object.
    $chat1 = new Chat("Felix", "angora", "./images/felix.png");
    
    $chat1->affiche();


///appel à la constructeur function to instantiate another cat
    $chat2 = new Chat("Azreal", "mixte", "./images/azreal.png");
   
    $chat2->affiche();


//// This is another way of automating the affichage of the objets:
    $tableauChats = [$chat1, $chat2];
    foreach ($tableauChats as $unChat){
        $unChat->affiche();
    }




    ?>
</body>
</html>