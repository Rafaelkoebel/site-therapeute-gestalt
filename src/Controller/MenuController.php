<?php

namespace App\Controller;

use App\Repository\PageRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class MenuController extends AbstractController
{
    public function header(PageRepository $pageRepository): Response
    {
        $pages = $pageRepository->createQueryBuilder('p')
            ->where('p.slug != :home')
            ->setParameter('home', 'accueil')
            ->orderBy('p.ordre', 'ASC')
            ->addOrderBy('p.id', 'ASC')
            ->getQuery()
            ->getResult();

        return $this->render('partials/_header.html.twig', [
            'pages' => $pages,
        ]);
    }
}
