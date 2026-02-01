<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Entity\MessageContact;
use App\Form\ContactType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

class ContactController extends AbstractController
{
    #[Route('/contact', name: 'contact')]
    public function index(
        Request $request,
        EntityManagerInterface $entityManager,
        MailerInterface $mailer
    ): Response {
        $contact = new MessageContact();

        $form = $this->createForm(ContactType::class, $contact);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            // 1️⃣ Sauvegarde en base (back-office)
            $contact->setDateEnvoi(new \DateTime());
            $entityManager->persist($contact);
            $entityManager->flush();

            // 2️⃣ Envoi de l’email
            $email = (new Email())
                ->from('gestalt@tonsite.fr')
                ->to('rafael.koebel@gmail.com')
                ->replyTo($contact->getEmail())
                ->subject('Nouveau message depuis le site')
                ->text(
                    "Nom : {$contact->getNom()}\n" .
                        "Email : {$contact->getEmail()}\n\n" .
                        "Message :\n{$contact->getMessage()}"
                );

            $mailer->send($email);

            // 3️⃣ Message de confirmation
            $this->addFlash('success', 'Votre message a bien été envoyé.');

            return $this->redirectToRoute('contact');
        }

        return $this->render('contact/index.html.twig', [
            'contactForm' => $form->createView(),
        ]);
    }
}
