<?php

namespace App\Entity;

use App\Repository\CabeceraDetalleRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CabeceraDetalleRepository::class)]
/**
 * @ORM\Entity(repositoryClass=UserRepository::class)
 */

class CabeceraDetalle
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'datetime')]
    private $fechaGenerado;

    #[ORM\ManyToOne(targetEntity:"App\Entity\Empleado", inversedBy:"id")]        
    private $empleado;

    #[ORM\ManyToOne(targetEntity:"App\Entity\User", inversedBy:"id")]        
    private $usuario;

    #[ORM\ManyToOne(targetEntity:"App\Entity\Sueldo", inversedBy:"id")]        
    private $sueldo;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFechaGenerado(): ?\DateTimeInterface
    {
        return $this->fechaGenerado;
    }

    public function setFechaGenerado(\DateTimeInterface $fechaGenerado): self
    {
        $this->fechaGenerado = $fechaGenerado;

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

    public function getUsuario() 
    {
		return $this->usuario;
	}
	public function setUsuario($usuario):void
    {
		$this->usuario = $usuario;
	}

    public function getSueldo() 
    {
		return $this->sueldo;
	}
	public function setSueldo($sueldo):void
    {
		$this->sueldo = $sueldo;
	}
}
