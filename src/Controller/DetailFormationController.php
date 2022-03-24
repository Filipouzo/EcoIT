<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DetailFormationController extends AbstractController
{
    /**
     * @Route("/detail", name="app_detail_formation")
     */
    public function index(): Response
    {
        return $this->render('detail_formation/index.html.twig', [
            'pageName' => 'Formation',
        ]);
    }
}
