<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Faker\Factory;

class UsersFixtures extends Fixture
{

    public function load(ObjectManager $manager): void
    {
        $admin = new User();
        $admin
            ->setUsername("admin")
            ->setRoles(["ROLE_ADMIN"])
            ->setPassword("admin")
            ->setPrenom("admin")
            ->setNom("admin");

        $manager->persist($admin);
        $manager->flush();



        $this->faker = Factory::create();
        $faker =$this->faker;

        for($i=0 ; $i < 100 ; $i++) {
            $employe = new User();
            $employe
                ->setUsername($faker->userName)
                ->setRoles(["ROLE_USER"])
                ->setPassword($faker->password)
                ->setPrenom($faker->firstName)
                ->setNom($faker->name);

            $manager->persist($employe);
            $manager->flush();
        }

    }
}
