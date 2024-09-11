<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\Livre;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class LivreFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create("fr_FR");

        for ($i = 0; $i<100; $i++)
        {
            $livre = new Livre(
                ['titre' => $faker->sentence(3),
                'prix' => $faker->randomFloat(2,10,100),
                //ou on peut utiliser simplement mt_rand(20,100)
                'description' => $faker->text(),
                'datePublication' => $faker->DateTime(),
                'isbn'=> $faker->isbn13(),
                //en utilisant l'hydrate, on envoie ce qu'on veut
                ]
            );
            $manager->persist($livre);
        }
        // $product = new Product();
        // $manager->persist($product);

        $manager->flush();
    }
}
