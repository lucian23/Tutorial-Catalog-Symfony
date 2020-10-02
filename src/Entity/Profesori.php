<?php

namespace App\Entity;

use App\Repository\ProfesoriRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProfesoriRepository::class)
 */
class Profesori
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Nume;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Materie;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNume(): ?string
    {
        return $this->Nume;
    }

    public function setNume(string $Nume): self
    {
        $this->Nume = $Nume;

        return $this;
    }

    public function getMaterie(): ?string
    {
        return $this->Materie;
    }

    public function setMaterie(string $Materie): self
    {
        $this->Materie = $Materie;

        return $this;
    }
}
