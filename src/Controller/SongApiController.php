<?php

namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SongApiController extends AbstractController
{
    /**
     * @Route ("/api/songs/{id<\d+>}", name="app_songapi_getsong", methods={"GET"} )
     */
    public function getSongAction(int $id, LoggerInterface $logger): Response
    {
        //TODO query the database
        $song = [
            'id' => $id,
            'name' => 'Zombie',
            'url' => ' https://www.youtube.com/watch?v=6Ejga4kJUts'
        ];
        $logger->info('Returning API response for song {song}',[
            'song' => $id,
        ]);
        return new JsonResponse($song);
    }

}