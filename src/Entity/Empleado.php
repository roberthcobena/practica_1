<?php

namespace App\Entity;

use App\Repository\EmpleadoRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EmpleadoRepository::class)]
class Empleado
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\ManyToOne(targetEntity:"App\Entity\User", inversedBy:"id")]        
    private $usuario;

    #[ORM\Column(type: 'string', length: 255)]
    private $nombres;

    #[ORM\Column(type: 'string', length: 255)]
    private $apellidos;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUsuario() 
    {
		return $this->usuario;
	}
	public function setUsuario($usuario):void
    {
		$this->usuario = $usuario;
	}

    public function getNombres(): ?string
    {
        return $this->nombres;
    }

    public function setNombres(string $nombres): self
    {
        $this->nombres = $nombres;

        return $this;
    }

    public function getApellidos(): ?string
    {
        return $this->apellidos;
    }

    public function setApellidos(string $apellidos): self
    {
        $this->apellidos = $apellidos;

        return $this;
    }    
}
