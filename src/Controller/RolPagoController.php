<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RolPagoController extends AbstractController
{
    #[Route('/rol/pago', name: 'rol_pago')]
    public function index(): Response
    {
        return $this->render('rol_pago/index.html.twig', [
            'controller_name' => 'RolPagoController',
        ]);
    }
}
