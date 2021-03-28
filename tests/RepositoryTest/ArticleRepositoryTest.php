<?php
namespace App\Tests;


use App\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class ArticleRepositoryTest extends KernelTestCase
{
    /** @test */
    public function ArticleTest(){

        self::bootKernel();
        $article = self::$container->get(ArticleRepository::class)->count([]);
        $this->assertEquals(10,$article);
    }
}