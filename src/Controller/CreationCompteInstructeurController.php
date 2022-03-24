<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CreationCompteInstructeurController extends AbstractController
{
    /**
     * @Route("/instructeur", name="app_instructeur")
     */
    public function index(): Response
    {
        return $this->render('instructeur/creationCompte.html.twig' ,[
            'nomPage' => "Compte Instructeur"
        ]);
    }
}
