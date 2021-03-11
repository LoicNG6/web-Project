<?php

namespace App\Controller;

use App\Entity\Article;
use App\Entity\Message;
use App\Repository\ArticleRepository;
use App\Repository\EvenentRepository;
use App\Repository\MessageRepository;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


use function Sodium\add;

class AccueilController extends AbstractController
{

    private $articleRepository;
    private $events;
    private $msg;

    public function __construct(ArticleRepository $articleRepository, EvenentRepository $events, MessageRepository $msg)
    {
        $this->articleRepository = $articleRepository;
        $this->events = $events;
        $this->msg = $msg;

    }

    /**
     * @Route("/index", name="index")
     */
    public function index(): Response
    {
        return $this->render('accueil/index.html.twig', [
            'controller_name' => 'AccueilController',
        ]);
    }

    /**
     * @Route("/", name="choose")
     */
    public function choose()
    {
        return $this->render('accueil/choose.html.twig');
    }

    /**
     * @Route("/home", name="home")
     */
    public function home( Request $request,ObjectManager $manager):Response
    {
        $emergency = $this->articleRepository->findAll();
        $article = $this->articleRepository->findBy(array('emergency' => true));
        $Events = $this->events->findall();

            $message = new Message();
            $form = $this->createFormBuilder($message)
                ->add('name',TextType::class )
                ->add('fist_name',TextType::class)
                ->add('email',EmailType::class)
                ->add('date',DateType::class)
                ->add('content',TextareaType::class)
                ->getform();

            $form->handleRequest($request);

            if($form->isSubmitted() && $form->isValid()){

                $manager->persist($message);
                $manager->flush();
                return $this->redirectToRoute('msgSend',['id' =>$message->getId()]);
            }

        return $this->render('accueil/home.html.twig', [
            'emergency' => $emergency,
            'article' => $article,
            'Events' => $Events,
            'formMessage' => $form->createView()

        ]);
    }

    /**
     * @Route("showArticle", name="showArticle")
     */
    public  function showArticle(): Response
    {

        return $this->render('accueil/showArticle.html.twig');
    }
    /**
     * @Route("msgSend", name="msgSend")
     */
    public  function msgSend(): Response
    {

        return $this->render('accueil/msgSend.html.twig');
    }
}
