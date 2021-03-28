<?php

namespace App\Controller;

use App\Repository\MessageRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MessageController extends AbstractController
{
    /**
     * @Route("/message", name="message", methods={"GET"})
     */
    public function msg(MessageRepository $messageRepository):Response
    {

        return $this->render('accueil/msgReçu.html.twig', [
            'messages' =>$messageRepository->findAll()

        ]);
    }

}