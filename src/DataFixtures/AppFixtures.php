<?php

namespace App\DataFixtures;

use App\Entity\Gateau;
use App\Entity\Ingredient;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = \Faker\Factory::create();


            $gateau = new gateau();
            $gateau->setDescription($faker->realText($maxNbChars = 200, $indexSize = 2));
            $gateau->setName($faker->name());


                $ingredient = new Ingredient();
                $ingredient->setName($faker->name());
                $gateau->addIngredient($ingredient);
                $manager->persist($ingredient);


            $manager->persist($gateau);

        $manager->flush();
    }
}
