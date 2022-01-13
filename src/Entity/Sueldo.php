<?php

namespace App\Entity;

use App\Repository\SueldoRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SueldoRepository::class)]
class Sueldo
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\ManyToOne(targetEntity:"App\Entity\Empleado", inversedBy:"id")]        
    private $empleado;

    #[ORM\Column(type: 'float')]

    private $valor;

    #[ORM\Column(type: 'datetime')]

    private $FechaRegistro;
    
    #[ORM\Column(type: 'datetime')]

    private $UltimaModificacion;
    
    #[ORM\Column(type: 'integer')]
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

    public function getSueldo() 
    {
		return $this->sueldo;
	}
	public function setSueldo($sueldo):void
    {
		$this->sueldo = $sueldo;
	}

    public function getValor(): ?float
    {
        return $this->valor;
    }

    public function setValor(float $valor): self
    {
        $this->valor = $valor;

        return $this;
    }

    
    public function getFechaRegistro(): ?\DateTimeInterface
    {
        return $this->FechaRegistro;
    }
    
    public function setFechaRegistro(\DateTimeInterface $FechaRegistro): self
    {
        $this->FechaRegistro = $FechaRegistro;
        
        return $this;
    }
    
    public function getUltimaModificacion(): ?\DateTimeInterface
    {
        return $this->UltimaModificacion;
    }
    
    public function setUltimaModificacion(\DateTimeInterface $UltimaModificacion): self
    {
        $this->UltimaModificacion = $UltimaModificacion;
        
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
