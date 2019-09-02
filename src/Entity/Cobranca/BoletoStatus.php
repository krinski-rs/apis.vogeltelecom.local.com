<?php

namespace App\Entity\Cobranca;

class BoletoStatus
{
    private $idBoletoStatus;

    private $descricao;

    public function getIdBoletoStatus(): ?int
    {
        return $this->idBoletoStatus;
    }

    public function getDescricao(): ?string
    {
        return $this->descricao;
    }

    public function setDescricao(?string $descricao): self
    {
        $this->descricao = $descricao;

        return $this;
    }
}
