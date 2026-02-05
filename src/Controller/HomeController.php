<?php

namespace App\Controller;

use App\Repository\PageRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(PageRepository $pageRepository): Response
    {
        $page = $pageRepository->findOneBy(['slug' => 'accueil']);

        if (!$page) {
            throw $this->createNotFoundException('Page d’accueil non définie');
        }

        return $this->render('home/index.html.twig', [
            'page' => $page,
        ]);
    }
}
