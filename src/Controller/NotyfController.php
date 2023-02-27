<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class NotyfController
 * @author Tresor-ilunga <19im065@esisalama.org>
 */
class NotyfController extends AbstractController
{
    #[Route('/{notyf}', name: 'app_notyf', methods: ['GET'])]
    public function index(?string $notyf = null): Response
    {
        return $this->render('notyf/index.html.twig', [
            'notyf' => $notyf,
        ]);
    }
}
