<?php
namespace App\Controller;
use App\Form\EditPasswordType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
class EditPasswordController extends AbstractController
{
    /**
     * @Route("/editPassword", name="edit_password")
     */
    public function index(Request $request): Response
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