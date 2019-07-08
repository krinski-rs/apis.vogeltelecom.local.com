<?php

namespace App\Entity\Financeiro;

class Pesquisa
{
    private $pesqCodigoid;

    private $pesqNome;

    private $pesqTipo;

    public function getPesqCodigoid(): ?int
    {
        return $this->pesqCodigoid;
    }

    public function getPesqNome(): ?string
    {
        return $this->pesqNome;
    }

    public function setPesqNome(string $pesqNome): self
    {
        $this->pesqNome = $pesqNome;

        return $this;
    }

    public function getPesqTipo(): ?string
    {
        return $this->pesqTipo;
    }

    public function setPesqTipo(string $pesqTipo): self
    {
        $this->pesqTipo = $pesqTipo;

        return $this;
    }
}
