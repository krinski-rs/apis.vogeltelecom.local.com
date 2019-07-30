<?php

namespace App\Entity\Financeiro;

class Contratoservico
{
    private $contservCodigoid;

    private $contservCircuito;

    private $contrato;

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

    public function getContrato(): ?Contrato
    {
        return $this->contrato;
    }

    public function setContrato(?Contrato $contrato): self
    {
        $this->contrato = $contrato;

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
