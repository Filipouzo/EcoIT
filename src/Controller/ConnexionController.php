<?php

namespace App\Controller;

use App\Form\ConnexionType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;

class ConnexionController extends AbstractController
{
    /**
     * @Route("/connexion", name="app_connexion")
     */
    public function index(): Response
    {

        $user = new User();
        $form = $this->createForm(ConnexionType::class, $user);
        return $this->render('connexion/index.html.twig',[
            'nomPage' => "Connexion",
            'form' => $form->createView()
        ]);
    }
}
