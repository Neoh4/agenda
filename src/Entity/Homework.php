<?php

namespace App\Entity;

use App\Repository\HomeworkRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: HomeworkRepository::class)]
class Homework
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?string $id_prof = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $datelimite = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $name = null;

    #[ORM\Column(length: 255)]
    private ?string $description = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdProf(): ?string
    {
        return $this->id_prof;
    }

    public function setIdProf(string $id_prof): static
    {
        $this->id_prof = $id_prof;

        return $this;
    }

    public function getDatelimite(): ?\DateTimeInterface
    {
        return $this->datelimite;
    }

    public function setDatelimite(\DateTimeInterface $datelimite): static
    {
        $this->datelimite = $datelimite;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }
}
