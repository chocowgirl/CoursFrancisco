<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\Livre;
use App\Entity\Exemplaire;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class ExemplaireFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {

        //obtenir tous les elements de l'entité de c^té 1 (dans ce cas, livre)
        $rep = $manager->getRepository(Livre::class);
        $tousLesLivres = $rep->findAll();

        $faker = Factory::create("fr_BE");

        for ($i = 0; $i<100; $i++)
        {
            $exemplaire = new Exemplaire(
                ['etat'=> $faker->randomElement(['bon','perdu','mauvais']),
                //en utilisant l'hydrate, on envoie ce qu'on veut
                ]
            );

            //fixer lelement obligatoir du cote 1 (livre)
            $exemplaire->setLivre($tousLesLivres[rand(0, count($tousLesLivres)-1 )]);


            $manager->persist($exemplaire);
        }
        // $product = new Product();
        // $manager->persist($product);

        $manager->flush();
    }

    public function getDependencies()
    {
        return ([LivreFixtures::class]);
    }
}
