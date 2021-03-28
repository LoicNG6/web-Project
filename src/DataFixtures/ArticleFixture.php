<?php

namespace App\DataFixtures;

use App\Entity\Article;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ArticleFixture extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for ($i = 1; $i <= 10; $i++){
            $articles = new Article();
            $articles->setTitle("Titre_Article");
            $articles->setContent("<p>bleblebelbelbe$i</p>");
            $articles->setPicture("photoNIKE");
            $articles->setPublicationDate(new \DateTime());
            $articles->setEmergency(1);

            $manager->persist($articles);
        }
        $manager->flush();
    }

}
