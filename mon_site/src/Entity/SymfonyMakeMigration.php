<?php

namespace App\Entity;

use App\Repository\SymfonyMakeMigrationRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SymfonyMakeMigrationRepository::class)]
class SymfonyMakeMigration
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    public function getId(): ?int
    {
        return $this->id;
    }
}
