<?php

namespace App\Controller;

use App\Repository\PageRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PageController extends AbstractController
{
    #[Route('/{slug}', name: 'page_show')]
    public function show(string $slug, PageRepository $pageRepository): Response
    {
        $page = $pageRepository->findOneBy(['slug' => $slug]);

        if (!$page) {
            throw $this->createNotFoundException('Page non trouvée');
        }

        return $this->render('page/show.html.twig', [
            'page' => $page,
        ]);
    }
}

/* class PageController extends AbstractController
{
    #[Route('/{slug}', name: 'page_show')]
    public function show(string $slug, PageRepository $pageRepository): Response
    {
        // Sécurité : ne jamais afficher la home ici
        if ($slug === 'accueil') {
            return $this->redirectToRoute('home');
        }

        $page = $pageRepository->findOneBy([
            'slug' => $slug,
            'visible' => true,
        ]);

        if (!$page) {
            throw $this->createNotFoundException('Page non trouvée');
        }

        return $this->render('page/show.html.twig', [
            'page' => $page,
        ]);
    }
}
 */