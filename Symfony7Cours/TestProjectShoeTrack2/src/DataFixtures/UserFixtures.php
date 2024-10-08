<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
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
        for ($i = 0; $i < 10 ; $i++){
            $user = new User();
            $user->setEmail ("user".$i."@lala.com");
            $user->setPassword($this->passwordHasher->hashPassword($user,'lePassword'.$i));
            $user->setName("jojo" . $i);
            $user->setBirthdate(new \DateTime());
            $this->addReference("user{$i}", $user);
            $manager->persist ($user);
        }
        // $product = new Product();
        // $manager->persist($product);

        $manager->flush();
    }
}
