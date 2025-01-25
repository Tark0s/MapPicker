<?php

namespace App\Controller;

use App\Repository\MapRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class HomepageController extends AbstractController
{
    #[Route('/', name: 'homepage')]
    public function index(){

        return $this->render('Homepage/index.html.twig');
    }

    #[Route('/picking', name: 'pickMap')]
    public function picking(MapRepository $mapRepository): JsonResponse
    {
        $maps = $mapRepository->findAll();
        $map = $this->pickMap($maps);

        return new JsonResponse(['map' => $map]);
    }

    private function pickMap(array $maps): string
    {
        return $maps[array_rand($maps)]->getName();
    }
}