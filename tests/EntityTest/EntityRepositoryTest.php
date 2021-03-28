<?php


namespace App\Tests\EntityTest;
use App\Entity\Article;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class EntityRepositoryTest extends KernelTestCase
{

    /** @test */
    public function testValidEntity(){

        $code = (new Article())
            ->setTitle('je teste le titre de mon article')
            ->setContent('je teste le contenu de mon article')
            ->setPublicationDate(new \DateTime())
            ->setEmergency(1);

        self::bootKernel();
        $error = self::$container->get('validator')->validate($code);
        $this->assertCount(0,$error);

    }
}