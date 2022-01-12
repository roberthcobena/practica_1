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

    #[ORM\Column(type: 'float')]
    private $valor;

    
    #[ORM\Column(type: 'datetime')]
    private $fecha_registro;
    
    #[ORM\Column(type: 'datetime')]
    private $ultima_modificacion;
    
    #[ORM\Column(type: 'string', length: 255)]
    private $estado;

    public function getId(): ?int
    {
        return $this->id;
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
        return $this->fecha_registro;
    }
    
    public function setFechaRegistro(\DateTimeInterface $fecha_registro): self
    {
        $this->fecha_registro = $fecha_registro;
        
        return $this;
    }
    
    public function getUltimaModificacion(): ?\DateTimeInterface
    {
        return $this->ultima_modificacion;
    }
    
    public function setUltimaModificacion(\DateTimeInterface $ultima_modificacion): self
    {
        $this->ultima_modificacion = $ultima_modificacion;
        
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
