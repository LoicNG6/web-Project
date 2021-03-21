<?php

namespace App\Controller;

use App\Form\EditPasswordType;
use App\Form\EditInformationType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProfileController extends AbstractController
{
    /**
     * @Route("/profile", name="profile")
     */
    public function index(): Response
    {
        return $this->render('Profile/profile.html.twig');
    }

    /**
     * @Route("/editInformation", name="edit_information")
     */
    public function editInformation(Request $request): Response
    {
        $user= $this->getUser();
        $form = $this->createForm(EditInformationType::class, $user);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();
            $this->addFlash('message', 'done');
            return $this->redirectToRoute('profile');
        }
        return $this->render('Profile/edit_profile.html.twig', [
            'editInformation' => $form->createView(),
        ]);
    }

    /**
     * @Route("/editPassword", name="edit_password")
     */
    public function editPassword(Request $request): Response
    {
        $user= $this->getUser();
        $form = $this->createForm(EditPasswordType::class, $user);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();
            $this->addFlash('message', 'done');
            return $this->redirectToRoute('profile');
        }
        return $this->render('EditPassword/edit_password.html.twig', [
            'pass' => $form->createView(),
        ]);
    }
}
