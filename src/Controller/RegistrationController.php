<?php

namespace App\Controller;

use App\Form\RegistrationType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RegistrationController extends AbstractController
{
    #[Route('/account/register', name: 'app_account_register')]
    public function index(): Response
    {
        $form = $this->createForm(RegistrationType::class);


        return $this->render('account_register/index.html.twig', [
            'controller_name' => 'RegistrationController',
        ]);
    }
}
