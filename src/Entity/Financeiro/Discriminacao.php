<?php

namespace App\Entity\Financeiro;

class Discriminacao
{
    private $idDiscriminacao;

    private $descricao;

    public function getIdDiscriminacao(): ?int
    {
        return $this->idDiscriminacao;
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
