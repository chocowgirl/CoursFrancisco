<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // include_once "./classes/film.php";
    // include_once "./classes/FilmManager.php";

    require "./vendor/autoload.php";

    $film1 = new Film(
        ['titre'=> 'Coco',
        'description'=> 'film sur le Mexique',
        'duree'=> 100,
        'dateSortie'=> new DateTime(),
        'image'=> ""
        ]
    );


    //update 
    $film1->hydrate([
        'titre'=> 'test',
        'description'=>'test'
    ]);

    $filmManager = new FilmManager();


    var_dump($film1);
    // die();

    $filmManager->insert ($film1);

    var_dump($film1);

    //effacer le film de la BD
    $filmManager->delete ($film1);

    //on botient tous les films
    $arrayObjetsFilm = $filmManager->findAll();
    var_dump($arrayObjetsFilm);

    //on prends un film pour le modifier, puis l'updater dans la BD
    $unFilm = $arrayObjetsFilm[1];
    $unFilm->setDuree(3);
    $unFilm->setTitre("Bonjour!");
    $filmManager->update ($unFilm);

    var_dump($unFilm);

    // $filmManager->update ($film);


    ?>
</body>
</html>