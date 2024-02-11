<?php
// PlayersController.php

namespace App\Controller;

use App\Form\PlayerFormType;
use App\Entity\Players;
use App\Service\PlayerManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PlayersController extends AbstractController
{
private PlayerManager $playerManager;

public function __construct(PlayerManager $playerManager)
{
$this->playerManager = $playerManager;
}

#[Route('/players/new', name: 'players_new', methods: ['GET', 'POST'])]
public function new(Request $request): Response
{
$player = new Players();
$form = $this->createForm(PlayerFormType::class, $player);

$form->handleRequest($request);
if ($form->isSubmitted() && $form->isValid()) {
$this->playerManager->addPlayer($player);
return $this->redirectToRoute('players_success');
}

return $this->render('players/new.html.twig', [
'form' => $form->createView(),
]);
}

#[Route('/players/success', name: 'players_success')]
public function success(): Response
{
return $this->render('players/success.html.twig', [
'lista' => $this->playerManager->getPlayers()
]);
}
}
