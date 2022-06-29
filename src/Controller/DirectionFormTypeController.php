<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DirectionFormTypeController extends AbstractController
{
    /**
     * @Route("/direction/form/type", name="direction_form_type")
     */
    public function index(): Response
    {
        return $this->render('direction_form_type/index.html.twig', [
            'controller_name' => 'DirectionFormTypeController',
        ]);
    }
}
