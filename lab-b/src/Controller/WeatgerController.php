<?php

namespace App\Controller;

use App\Entity\Location;
use App\Repository\ForecastRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WeatgerController extends AbstractController
{
    #[Route('/weatger/{id}', name: 'app_weather', requirements: ['id' => '\d+'])]
    public function city(Location $location, ForecastRepository $repository): Response
    {
        $measurements = $repository->findByLocation($location);

        return $this->render('weatger/city.html.twig', [
            'location' => $location,
            'measurements' => $measurements,
        ]);
    }
}
#php -S localhost:48938
