<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class MoviesController extends AbstractController
{
    #[Route('/movies', name:'movies')]
    public function index(): Response
    {
        $movies = [
            ['title' => 'Avengers: Endgame', 'year' => 2019],
            ['title' => 'Inception', 'year' => 2010],
            ['title' => 'The Dark Knight', 'year' => 2008],
        ];

        return $this->render('index.html.twig', array(
            'movies' => $movies,
        ));
    }
}
