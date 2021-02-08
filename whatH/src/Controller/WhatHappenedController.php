<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WhatHappenedController extends AbstractController
{
    /**
     * @Route("/what/happened", name="what_happened")
     */
    public function index(): Response
    {
        return $this->render('what_happened/index.html.twig', [
            'controller_name' => 'WhatHappenedController',
        ]);
    }

    /**
     * @Route("/", name="home")
     */
    public function home(): Response
    {
        return $this->render('what_happened/home.html.twig');
    }

    /**
     * @Route("/choose", name="choose")
     */
    public function choose(): Response
    {
        return $this->render('what_happened/choose.html.twig');
    }


}