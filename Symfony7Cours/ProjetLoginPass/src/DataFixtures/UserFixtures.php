<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserFixtures extends Fixture
{

    private $passwordHasher;

    public function __construct(UserPasswordHasherInterface $passwordHasher)
    {
        $this->passwordHasher = $passwordHasher;
    }


    public function load(ObjectManager $manager): void
    {
        for ($i = 0; $i < 5; $i++) {
            $user = new User();
            $user->setEmail("user" . $i . "@gmail.com");
            // $user->setRoles(['ROLE_USER']);

            $hashedPassword = $this->passwordHasher->hashPassword($user, 'lepassword');
            // dd($hashedPassword);

            $user->setPassword($hashedPassword);
            $user->setNom("nom" . $i);
            $user->setDateNaissance(new \DateTime());
            $manager->persist($user);
        }


        for ($i = 0; $i < 5; $i++) {
            $user = new User();
            $user->setEmail("admin" . $i . "@gmail.com");
            $user->setRoles(['ROLE_ADMIN']);
            
            $hashedPassword = $this->passwordHasher->hashPassword($user, 'lepassword');

            $user->setPassword($hashedPassword);

            $user->setNom("nom" . ($i + 6));
            $user->setDateNaissance(new \DateTime());
            $manager->persist($user);
        }

        $manager->flush();
    }
}
