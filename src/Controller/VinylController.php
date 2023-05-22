<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use function Symfony\Component\String\u;

class VinylController extends AbstractController
{
    /**
     * @Route ("/", name="app_vinyl_index")
     */
    public function indexAction(): Response
    {
        $tracks = [
            ['song' => 'Gangsta\' Paradise', 'artist' => 'Coolio'],
            ['song' => 'In the end', 'artist' => 'Linkin Park'],
            ['song' => 'Losing my Religion', 'artist' => 'REM'],
            ['song' => 'Like a stone', 'artist' => 'Audioslave'],
            ['song' => 'Did my time', 'artist' => 'Korn'],
            ['song' => 'Feel', 'artist' => 'Robbie Williams']
        ];

        return $this->render('vinyl/index.html.twig', [
            'title' => 'PB & Jams',
            'tracks' => $tracks
        ]);
    }

    /**
     * @Route ("/browse/{slug}", name="app_vinyl_browse")
     */
    public function browseAction($slug = null): Response
    {
        $genre = $slug ? u(str_replace('-', ' ', $slug))->title(true) : null;
        return $this->render('vinyl/browse.html.twig', [
            'genre' => $genre
        ]);
    }

}