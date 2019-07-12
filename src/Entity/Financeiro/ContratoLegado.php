<?php

namespace App\Entity\Financeiro;

class ContratoLegado
{
    private $contCodigoid;

    private $propostaLegado;

    public function getContCodigoid(): ?int
    {
        return $this->contCodigoid;
    }

    public function getPropostaLegado(): ?string
    {
        return $this->propostaLegado;
    }

    public function setPropostaLegado(?string $propostaLegado): self
    {
        $this->propostaLegado = $propostaLegado;

        return $this;
    }
}
