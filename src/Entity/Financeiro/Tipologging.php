<?php

namespace App\Entity\Financeiro;

class Tipologging
{
    private $tipologgCodigoid;

    private $tipologgNome;

    public function getTipologgCodigoid(): ?int
    {
        return $this->tipologgCodigoid;
    }

    public function getTipologgNome(): ?string
    {
        return $this->tipologgNome;
    }

    public function setTipologgNome(string $tipologgNome): self
    {
        $this->tipologgNome = $tipologgNome;

        return $this;
    }
}
