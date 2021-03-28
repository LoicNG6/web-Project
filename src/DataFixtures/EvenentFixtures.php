<?php

namespace App\DataFixtures;

use App\Entity\Event;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class EvenentFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $events = new Event();
        $events->setName("formation symfony");
        $events->setLocation("Université Paris Sorbonne");
        $events->setDate(new \DateTime());
        $events->setSpaceAvailable("50 places disponibles");

        $manager->persist($events);

        $manager->flush();

        $events2 = new Event();
        $events2->setName("Ateliers informatique");
        $events2->setLocation("Université Paris Sorbonne");
        $events2->setDate(new \DateTime());
        $events2->setSpaceAvailable("100 places disponibles");

        $manager->persist($events2);

        $manager->flush();
    }
}
