<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AgentFormTypeController extends AbstractController
{
    /**
     * @Route("/agent/form/type", name="agent_form_type")
     */
    public function index(): Response
    {
        return $this->render('agent_form_type/index.html.twig', [
            'controller_name' => 'AgentFormTypeController',
        ]);
    }
}
