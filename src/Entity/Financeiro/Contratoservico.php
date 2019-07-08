<?php

namespace App\Entity\Financeiro;

class Contratoservico
{
    private $contservCodigoid;

    private $contservCircuito;

    private $contCodigoid;

    private $servcapaCodigoid;

    public function getContservCodigoid(): ?int
    {
        return $this->contservCodigoid;
    }

    public function getContservCircuito(): ?string
    {
        return $this->contservCircuito;
    }

    public function setContservCircuito(?string $contservCircuito): self
    {
        $this->contservCircuito = $contservCircuito;

        return $this;
    }

    public function getContCodigoid(): ?Contrato
    {
        return $this->contCodigoid;
    }

    public function setContCodigoid(?Contrato $contCodigoid): self
    {
        $this->contCodigoid = $contCodigoid;

        return $this;
    }

    public function getServcapaCodigoid(): ?Servicocapacidade
    {
        return $this->servcapaCodigoid;
    }

    public function setServcapaCodigoid(?Servicocapacidade $servcapaCodigoid): self
    {
        $this->servcapaCodigoid = $servcapaCodigoid;

        return $this;
    }
}
