<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include"./ImageClass.php";
        // $image1 = new Image ("chat1.jpg");
        // $image1->afficher();
        //nous ne voulons pas faire au-dessus pour creer et afficher, alors on fait...

        $liens = ['chat1.jpg', 'chien.jpg', 'poisson.jpg'];
        foreach ($liens as $lien){
            // $objImage = new Image ($lien);
            // $objImage->afficher();

            (new Image($lien))->afficher();//ici c'est plus court et fait la même chose que les deux lignes au-dessus
        }


    ?>
</body>
</html>