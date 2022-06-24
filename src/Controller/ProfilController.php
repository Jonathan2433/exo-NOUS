<?php

namespace App\Controller;

use App\Repository\HeroRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProfilController extends AbstractController
{
    #[Route('/hero/{identity}', name: 'app_profil')]
    public function index($identity, HeroRepository $heroRepository): Response
    {
        $hero = $heroRepository->findOneBy(['identity' => $identity]);

        return $this->render('profil/index.html.twig', [
            'hero' => $hero,
        ]);
    }
}
