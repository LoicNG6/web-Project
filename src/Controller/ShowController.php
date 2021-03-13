<?php

namespace App\Controller;

use App\Entity\Message;
use App\Repository\ArticleRepository;
use App\Repository\EvenentRepository;
use App\Repository\MessageRepository;
use Doctrine\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ShowController extends AbstractController
{
    private $articleRepository;


    public function __construct(ArticleRepository $articleRepository)
    {
        $this->articleRepository = $articleRepository;


    }
    /**
     * @Route("/show", name="show")
     */
    public function home( Request $request,ObjectManager $manager):Response
    {
        $article = $this->articleRepository->findAll();


        return $this->render('accueil/showArticle.html.twig.html.twig', [
            'article' => $article,

        ]);
    }
}
