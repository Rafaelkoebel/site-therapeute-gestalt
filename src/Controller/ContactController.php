<?php

namespace App\Controller;

use App\Form\ContactType;
use App\Entity\Therapeute;
use App\Entity\MessageContact;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ContactController extends AbstractController
{
    #[Route('/contact', name: 'contact')]
    public function index(Request $request, EntityManagerInterface $em): Response
    {
        $message = new MessageContact();
        $form = $this->createForm(ContactType::class, $message);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // 1️⃣ Enregistrer la date d’envoi automatiquement
            $message->setDateEnvoi(new \DateTime());

            // 2️⃣ Assigner automatiquement le thérapeute (id = 1 si tu n'as qu'un seul thérapeute)
            $therapeute = $em->getRepository(Therapeute::class)->find(1);
            $message->setTherapeute($therapeute);

            // 3️⃣ Enregistrer en base
            $em->persist($message);
            $em->flush();

            // 4️⃣ Message flash
            $this->addFlash('success', 'Votre message a été envoyé avec succès !');

            // 5️⃣ Redirection
            return $this->redirectToRoute('contact');
        }
        return $this->render('contact/index.html.twig', [
            'contactForm' => $form->createView(),
        ]);
    }
}
