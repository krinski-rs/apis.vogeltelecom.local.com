<?php

namespace App\Entity\Financeiro;

class Nivel
{
    private $niveCodigoid;

    private $niveNome;

    public function getNiveCodigoid(): ?int
    {
        return $this->niveCodigoid;
    }

    public function getNiveNome(): ?string
    {
        return $this->niveNome;
    }

    public function setNiveNome(string $niveNome): self
    {
        $this->niveNome = $niveNome;

        return $this;
    }
}
