<?php

namespace App\Entity;

use App\Repository\JornadaRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: JornadaRepository::class)]
class Jornada
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $detalle;

    #[ORM\Column(type: 'integer')]
    private $horasDia;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDetalle(): ?string
    {
        return $this->detalle;
    }

    public function setDetalle(string $detalle): self
    {
        $this->detalle = $detalle;

        return $this;
    }

    public function getHorasDia(): ?int
    {
        return $this->horasDia;
    }

    public function setHorasDia(int $horasDia): self
    {
        $this->horasDia = $horasDia;

        return $this;
    }
}
