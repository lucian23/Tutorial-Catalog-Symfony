<?php

namespace App\Entity;

use App\Repository\NoteRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=NoteRepository::class)
 */
class Note
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
    private $Materie;

    /**
     * @ORM\Column(type="integer")
     */
    private $Nota;

    /**
     * @ORM\ManyToOne(targetEntity=Elevi::class, inversedBy="Materie")
     */
    private $elevi;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getNota(): ?int
    {
        return $this->Nota;
    }

    public function setNota(int $Nota): self
    {
        $this->Nota = $Nota;

        return $this;
    }

    public function getElevi(): ?Elevi
    {
        return $this->elevi;
    }

    public function setElevi(?Elevi $elevi): self
    {
        $this->elevi = $elevi;

        return $this;
    }
}
