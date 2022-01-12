<?php

namespace App\Entity;

use App\Repository\HorasRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: HorasRepository::class)]
class Horas
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'datetime')]
    private $marcado;

    #[ORM\Column(type: 'string', length: 255)]
    private $estado;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMarcado(): ?\DateTimeInterface
    {
        return $this->marcado;
    }

    public function setMarcado(\DateTimeInterface $marcado): self
    {
        $this->marcado = $marcado;

        return $this;
    }

    public function getEstado(): ?string
    {
        return $this->estado;
    }

    public function setEstado(string $estado): self
    {
        $this->estado = $estado;

        return $this;
    }
}
