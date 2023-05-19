<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use function Symfony\Component\String\u;

class VinylController
{
    /**
     * @Route ("/")
     */
    public function indexAction(): Response
    {
        die('vinylController');
    }

    /**
     * @Route ("/browse/{slug}")
     */
    public function browseAction($slug = null): Response
    {
        $title = $slug ? 'Genre: ' . u(str_replace('-', ' ', $slug))->title(true) : 'All Genre';
        return new Response($title);
    }

}