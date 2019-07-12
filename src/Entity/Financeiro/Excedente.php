<?php

namespace App\Entity\Financeiro;

class Excedente
{
    private $exceCodigoid;

    private $exceValor;

    private $contCodigoid;

    public function getExceCodigoid(): ?int
    {
        return $this->exceCodigoid;
    }

    public function getExceValor()
    {
        return $this->exceValor;
    }

    public function setExceValor($exceValor): self
    {
        $this->exceValor = $exceValor;

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
}
