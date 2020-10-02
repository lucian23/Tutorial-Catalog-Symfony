<?php

namespace App\Entity;

use App\Repository\EleviRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EleviRepository::class)
 */
class Elevi
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
     * @ORM\OneToMany(targetEntity=Note::class, mappedBy="elevi")
     */
    private $Materie;

    public function __construct()
    {
        $this->Materie = new ArrayCollection();
    }

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

    /**
     * @return Collection|Note[]
     */
    public function getMaterie(): Collection
    {
        return $this->Materie;
    }

    public function addMaterie(Note $materie): self
    {
        if (!$this->Materie->contains($materie)) {
            $this->Materie[] = $materie;
            $materie->setElevi($this);
        }

        return $this;
    }

    public function removeMaterie(Note $materie): self
    {
        if ($this->Materie->contains($materie)) {
            $this->Materie->removeElement($materie);
            // set the owning side to null (unless already changed)
            if ($materie->getElevi() === $this) {
                $materie->setElevi(null);
            }
        }

        return $this;
    }
}
