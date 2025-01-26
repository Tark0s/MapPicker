<?php

namespace App\DataFixtures;

use App\Entity\Map;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $mapsData = [
            ['name' => 'Dust 2'],
            ['name' => 'Mirage'],
            ['name' => 'Inferno'],
            ['name' => 'Cobblestone'],
            ['name' => 'Overpass'],
            ['name' => 'Nuke'],
            ['name' => 'Train'],
            ['name' => 'Vertigo'],
        ];

        foreach ($mapsData as $data) {
            $map = new Map();
            $map->setName($data['name']);

            $manager->persist($map);
        }

        $manager->flush();
    }
}
