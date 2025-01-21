<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Attribute\Route;

class HomepageController extends AbstractController
{
    #[Route('/', name: 'homepage')]
    public function index(){

        $randInt = random_int(1,3);

        $map = $this->pickMap($randInt);

        return $this->render('Homepage/index.html.twig', [
            'number' => $randInt,
            'map' => $map
        ]);
    }

    private function pickMap(int $number): string
    {
        switch ($number) {
            case 1:
                return 'Mirage';
            case 2:
                return 'Nuke';
            case 3:
                return 'Ancient';
        }
    }
}