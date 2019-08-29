<?php

namespace App\Entity\Cobranca;

class CobrancaAcao
{
    private $id;

    private $acao;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAcao(): ?string
    {
        return $this->acao;
    }

    public function setAcao(?string $acao): self
    {
        $this->acao = $acao;

        return $this;
    }
}
