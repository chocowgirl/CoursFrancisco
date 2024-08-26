<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include_once "./classes/utilisateur.php";
    $utilisateur1 = new Utilisateur(
        ['id'=>012345,
        'nom'=>'Jessica',
        'login'=>'Coucou',
        'password'=>'Hello',
        'role'=>'Critic'
        ]
    );

    //update
    $utilisateur1->hydrate([
        'nom'=>'Jennifer'
    ]);

    var_dump($utilisateur1);



    ?>
</body>
</html>