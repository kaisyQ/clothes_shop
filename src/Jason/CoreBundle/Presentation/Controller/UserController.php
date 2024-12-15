<?php

declare(strict_types=1);

namespace Jason\CoreBundle\Presentation\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('users', name: 'users_')]
final class UserController extends AbstractController
{
    #[Route('', name: 'all', methods: ['GET'])]
    public function showProducts(): Response
    {
        return $this->render('base.html.twig');
    }
}
