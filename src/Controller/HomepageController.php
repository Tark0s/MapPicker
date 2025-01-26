<?php

namespace App\Controller;

use App\Entity\Map;
use App\Repository\MapRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Attribute\Route;

class HomepageController extends AbstractController
{
    #[Route('/', name: 'homepage')]
    public function index(MapRepository $mapRepository){

        $maps = $mapRepository->findAll();

        $mapNames = array_map(function (Map $map) {
            return $map->getName();
        }, $maps);


        return $this->render('Homepage/index.html.twig', [
            'maps' => $mapNames,
        ]);
    }

    private function pickMap(array $maps): string
    {
        return $maps[array_rand($maps)]->getName();
    }
}