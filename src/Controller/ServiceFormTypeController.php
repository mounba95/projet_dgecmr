<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ServiceFormTypeController extends AbstractController
{
    /**
     * @Route("/service/form/type", name="service_form_type")
     */
    public function index(): Response
    {
        return $this->render('service_form_type/index.html.twig', [
            'controller_name' => 'ServiceFormTypeController',
        ]);
    }
}
