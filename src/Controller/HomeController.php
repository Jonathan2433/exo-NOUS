<?php

namespace App\Controller;

use App\Repository\HeroRepository;
use App\Repository\TeamRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(HeroRepository $heroRepository, TeamRepository $teamRepository): Response
    {
        $teams = $teamRepository->findAll();

//        $teams = $teamRepository->findAll();
//        $hero = $heroRepository->find(1);
//        dd($hero->getTeam());
        return $this->render('home/index.html.twig', [
            'teams' => $teams,
        ]);
    }
}
