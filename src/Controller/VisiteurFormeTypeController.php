<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VisiteurFormeTypeController extends AbstractController
{
    /**
     * @Route("/visiteur/forme/type", name="visiteur_forme_type")
     */
    public function index(): Response
    {
        return $this->render('visiteur_forme_type/index.html.twig', [
            'controller_name' => 'VisiteurFormeTypeController',
        ]);
    }
}
