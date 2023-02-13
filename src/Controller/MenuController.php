<?php

namespace App\Controller;

use App\Repository\DistrictRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class MenuController extends AbstractController
{
    public function nav(DistrictRepository $districtRepository): Response
    {
        $districts = $districtRepository->findBy([], [], 5);

        return $this->render('menu/nav.html.twig', [
            'districts' => $districts,
        ]);
    }
}
