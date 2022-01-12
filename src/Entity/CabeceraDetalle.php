<?php

namespace App\Entity;

use App\Repository\CabeceraDetalleRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CabeceraDetalleRepository::class)]
class CabeceraDetalle
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'datetime')]
    private $fecha_generado;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Empleado", mappedBy="cabeceradetalle")
     */    
    private $empleado;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFechaGenerado(): ?\DateTimeInterface
    {
        return $this->fecha_generado;
    }

    public function setFechaGenerado(\DateTimeInterface $fecha_generado): self
    {
        $this->fecha_generado = $fecha_generado;

        return $this;
    }

    public function getEmpleado() 
    {
		return $this->empleado;
	}
	public function setEmpleado($empleado):void
    {
		$this->empleado = $empleado;
	}
}
