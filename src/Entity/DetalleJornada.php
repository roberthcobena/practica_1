<?php

namespace App\Entity;

use App\Repository\DetalleJornadaRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DetalleJornadaRepository::class)]
class DetalleJornada
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\ManyToOne(targetEntity:"App\Entity\Empleado", inversedBy:"id")]        
    private $empleado;

    #[ORM\ManyToOne(targetEntity:"App\Entity\Jornada", inversedBy:"id")]        
    private $jornada;

    #[ORM\Column(type: 'string', length: 255)]
    private $estado;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmpleado() 
    {
		return $this->empleado;
	}
	public function setEmpleado($empleado):void
    {
		$this->empleado = $empleado;
	}

    public function getJornada() 
    {
		return $this->jornada;
	}
	public function setJornada($jornada):void
    {
		$this->jornada = $jornada;
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
