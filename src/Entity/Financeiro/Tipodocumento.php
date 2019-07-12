<?php

namespace App\Entity\Financeiro;

class Tipodocumento
{
    private $tipodocuCodigoid;

    private $tipodocuNome;

    public function getTipodocuCodigoid(): ?int
    {
        return $this->tipodocuCodigoid;
    }

    public function getTipodocuNome(): ?string
    {
        return $this->tipodocuNome;
    }

    public function setTipodocuNome(string $tipodocuNome): self
    {
        $this->tipodocuNome = $tipodocuNome;

        return $this;
    }
}
