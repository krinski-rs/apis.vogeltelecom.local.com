<?php

namespace App\Entity\Financeiro;

class Ativacaopagamento
{
    private $ativpagCodigoid;

    private $ativpagCobrado;

    private $contCodigoid;

    public function getAtivpagCodigoid(): ?int
    {
        return $this->ativpagCodigoid;
    }

    public function getAtivpagCobrado(): ?bool
    {
        return $this->ativpagCobrado;
    }

    public function setAtivpagCobrado(?bool $ativpagCobrado): self
    {
        $this->ativpagCobrado = $ativpagCobrado;

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
