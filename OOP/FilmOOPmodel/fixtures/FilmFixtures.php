<?php
include "./classes/Film.php";
include "./classes/FilmManager.php";

use Faker\Factory;

class FilmFixtures{

    public function lancerFixtures (){
        //cette methode est censée de remplir le tableau des films
        $faker = Factory::create('fr_BE');

        $fm = new FilmManager();
        
        for ($i = 0; $i < 100; $i++) {
            $film = new Film ([
                'titre' => $faker->sentence(3),
                'duree' => rand (30,300),
                'description' => $faker->paragraph(),
                'dateSortie' => $faker->dateTime(),
                'image' => "",
            ]);
            $fm->insert($film);
        }



        // $film1 = new Film(
        //     [
        //         'titre' => 'Coco',
        //         'description' => 'film sur le Mexique',
        //         'duree' => 100,
        //         'dateSortie' => new DateTime(),
        //         'image' => ""
        //     ]
        // );

        // $fm = new FilmManager();
        // $fm->insert($film1);
    }


}