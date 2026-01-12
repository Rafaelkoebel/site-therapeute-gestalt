<?php

namespace App\Controller;

use App\Repository\InfoPratiqueRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class InfoPratiqueController extends AbstractController
{
    #[Route('/infos-pratiques', name: 'info_pratique')]
    public function index(InfoPratiqueRepository $repo): Response
    {
        $info = $repo->findOneBy([]);

        if (!$info) {
            throw $this->createNotFoundException('Infos pratiques non configurées');
        }

        return $this->render('info_pratique/index.html.twig', [
            'info' => $info,
        ]);
    }
}
