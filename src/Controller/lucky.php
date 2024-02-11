<?php
// src/Controller/LuckyController.php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class lucky extends AbstractController
{
    private $strings = [
        'Prima stringa',
        'Seconda stringa',
        'Terza stringa',
        'Quarta stringa',
        'Quinta stringa',
        'Sesta stringa',
        'Settima stringa',
        'Ottava stringa',
        'Nona stringa',
        'Decima stringa',
    ];

    #[Route('/lucky/number/{index}', name: 'app_lucky_number')]
    public function luckyNumber($index): Response
    {
        // Verifica se l'indice è valido e se esiste nell'array
        if ($index >= 0 && $index < count($this->strings)) {
            // Restituisce la stringa corrispondente all'indice specificato
            $luckyString = $this->strings[$index];
        } else {
            // Restituisce un messaggio di errore se l'indice non è valido
            $luckyString = "Indice non valido";
        }

        // Restituisci la stringa come semplice testo senza utilizzare un template
        return new Response($luckyString);
    }

    #[Route('/lucky', name: 'lucky')]
    public function lucky(): Response
    {

        $luckyString = "prova";


        // Restituisci la stringa come semplice testo senza utilizzare un template
        return $this->render('calcio.html.twig', ['luckystring' => $luckyString]);
    }


}