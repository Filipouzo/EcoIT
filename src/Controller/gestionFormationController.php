<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class gestionFormationController extends AbstractController
{
    /**
     * @Route("/gestionFormations", name="app_gestionformation")
     */
    public function index(): Response
    {
        return $this->render('gestionFormations/index.html.twig',[
        'nomPage' => "Gestion-Formations"
        ]);
    }
}
