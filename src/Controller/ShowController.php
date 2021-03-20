<?php

namespace App\Controller;

use App\Entity\Article;
use App\Entity\Comment;
use App\Form\CommentType;
use App\Repository\ArticleRepository;
use DateTime;
use Doctrine\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
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
     * @Route("/{id}", name="article_show", methods={"GET","POST"})
     */
    public function show(Article $article, Request $request,ObjectManager $manager): Response
    {
        $comments = new Comment();
        $commentForm = $this->createForm(CommentType::class,$comments);

        $commentForm->handleRequest($request);

        if($commentForm->isSubmitted() && $commentForm->isValid()){
            $comments->setCreatedAt(new DateTime());
            $comments->setArticle($article);

            $parentid = $commentForm->get("parent")->getData();
            $eManager= $this->getDoctrine()->getManager();

            if($parentid !=null){
                $parent = $eManager->getRepository(Comment::class)->find($parentid);
            }
            $comments->setParent($parent ?? null);
            $manager=$this->getDoctrine()->getManager();
            $manager->persist($comments);
            $manager->flush();

        }
        return $this->render('accueil/showArticle.html.twig', [
            'article' => $article,
            'commentForm' => $commentForm->createView()
        ]);
    }
}
