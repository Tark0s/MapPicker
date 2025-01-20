<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Attribute\Route;

class HomepageController extends AbstractController
{
    #[Route('/', name: 'homepage')]
    public function index(){

        $randInt = random_int(1, 100);

        return $this->render('homepage/index.html.twig', [
            'number' => $randInt
        ]);
    }
}