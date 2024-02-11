<?php
// src/Controller/LuckyController.php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class risultati extends AbstractController
{
    #[Route('/risultati', name: 'risultati')]
    public function lucky(): Response
    {

        $luckyString = "provaafaf";


        // Restituisci la stringa come semplice testo senza utilizzare un template
        return $this->render('risultati.html.twig', ['luckystring' => $luckyString]);
    }


}