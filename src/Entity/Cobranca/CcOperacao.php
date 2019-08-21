<?php

namespace App\Entity\Cobranca;

class CcOperacao
{
    private $operCodigoid;

    private $operacao;

    private $tipo;

    public function getOperCodigoid(): ?int
    {
        return $this->operCodigoid;
    }

    public function getOperacao(): ?string
    {
        return $this->operacao;
    }

    public function setOperacao(string $operacao): self
    {
        $this->operacao = $operacao;

        return $this;
    }

    public function getTipo(): ?string
    {
        return $this->tipo;
    }

    public function setTipo(string $tipo): self
    {
        $this->tipo = $tipo;

        return $this;
    }
}
