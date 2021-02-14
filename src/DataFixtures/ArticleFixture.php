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
        $articles->setTitle("Titre de mon atricle");
        $articles->setContent("<p>Contenu de l'article n°$i</p>");
        $articles->setPicture("http://placehold.it/350x150");
        $articles->setPublicationDate(new \DateTime());
        $articles->setEmergency(1);

        $manager->persist($articles);

    }

    $manager->flush();
}

}
