<?php

namespace App\Entity\Financeiro;

class Status
{
    private $statCodigoid;

    private $statNome;

    public function getStatCodigoid(): ?int
    {
        return $this->statCodigoid;
    }

    public function getStatNome(): ?string
    {
        return $this->statNome;
    }

    public function setStatNome(string $statNome): self
    {
        $this->statNome = $statNome;

        return $this;
    }
}
