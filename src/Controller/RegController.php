<?php

namespace App\Controller;

use App\Entity\Evenent;
use Doctrine\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RegController extends AbstractController
{
    /**
     * @Route("/registration", name="registration")
     */
    public function index(Request $request,ObjectManager $manager): Response
    {

        $Events = new Evenent();
        $fomr=$this->createFormBuilder($Events)
             -> getForm();


        return $this->render('accueil/registration.html.twig', [
            'controller_name' => 'RegController',
        ]);
    }
}
