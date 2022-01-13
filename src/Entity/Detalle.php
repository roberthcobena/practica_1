<?php

namespace App\Entity;

use App\Repository\DetalleRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DetalleRepository::class)]
class Detalle
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\ManyToOne(targetEntity:"App\Entity\CabeceraDetalle", inversedBy:"id")]        
    private $idCabecera;

    #[ORM\ManyToOne(targetEntity:"App\Entity\Conceptos", inversedBy:"id")]        
    private $concepto;

    /**
     * @ORM\Column(type="float")
     */
    private $valorConcepto;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdCabecera() 
    {
		return $this->idCabecera;
	}
	public function setIdCabecera($idCabecera):void
    {
		$this->idCabecera = $idCabecera;
	}

    public function getConcepto() 
    {
		return $this->concepto;
	}
	public function setConcepto($concepto):void
    {
		$this->concepto = $concepto;
	}

    public function getValorConcepto(): ?float
    {
        return $this->valorConcepto;
    }

    public function setValorConcepto(float $valorConcepto): self
    {
        $this->valorConcepto = $valorConcepto;

        return $this;
    }
}
