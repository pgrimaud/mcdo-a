<?php

namespace App\Controller;

use App\Repository\DistrictRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AppController extends AbstractController
{
    #[Route('/', name: 'app_index')]
    public function index(DistrictRepository $districtRepository): Response
    {
        return $this->render('app/index.html.twig', [
            'districts' => $districtRepository->findAll(),
        ]);
    }
}
