<?php

namespace App\Controller;

use App\Entity\Map;
use App\Repository\MapRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomepageController extends AbstractController
{
    private MapRepository $mapRepository;

    public function __construct(MapRepository $mapRepository)
    {
        $this->mapRepository = $mapRepository;
    }

    #[Route('/', name: 'homepage')]
    public function index(): Response
    {

        $maps = $this->mapRepository->findAll();

        $mapNames = array_map(function (Map $map) {
            return $map->getName();
        }, $maps);


        return $this->render('Homepage/index.html.twig', [
            'maps' => $mapNames,
        ]);
    }
}