<?php

namespace App\DataFixtures;

use App\Entity\Cat;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $cat = new Cat();
        $cat->setName('Ultra')
            ->setDescription('Siamois rouge') 
            ->setImage('http://placekitten.com/200/300');
        $manager->persist($cat);


        $cat = new Cat();
        $cat->setName('Ussia')
            ->setDescription('Siamois baby-point') 
            ->setImage('http://placekitten.com/200/300');
        $manager->persist($cat);


        $cat = new Cat();
        $cat->setName('Angel')
            ->setDescription('Siamois rouge') 
            ->setImage('http://placekitten.com/200/300');
        $manager->persist($cat);

        $manager->flush();
    }
}
