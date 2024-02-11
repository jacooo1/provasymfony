<?php
// src/Service/PlayerManager.php
namespace App\Service;


use Doctrine\ORM\EntityManagerInterface;

use App\Entity\Players;

class PlayerManager
{
    public ?array $players = [];

    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }
    public function addPlayer(Players $player)
    {
        // Persiste il nuovo giocatore
        $this->entityManager->persist($player);
        // Esegui il flush per eseguire l'operazione di persistenza nel database
        $this->entityManager->flush();
    }

    public function getPlayers(): array
    {
        // Recupera tutti i giocatori dal repository dell'entità Players
        return $this->entityManager->getRepository(Players::class)->findAll();
    }
}
