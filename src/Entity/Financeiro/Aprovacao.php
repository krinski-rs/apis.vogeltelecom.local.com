<?php

namespace App\Entity\Financeiro;

class Aprovacao
{
    private $aproCodigoid;

    private $aproNome;

    private $aproTipo;

    public function getAproCodigoid(): ?int
    {
        return $this->aproCodigoid;
    }

    public function getAproNome(): ?string
    {
        return $this->aproNome;
    }

    public function setAproNome(string $aproNome): self
    {
        $this->aproNome = $aproNome;

        return $this;
    }

    public function getAproTipo(): ?int
    {
        return $this->aproTipo;
    }

    public function setAproTipo(int $aproTipo): self
    {
        $this->aproTipo = $aproTipo;

        return $this;
    }
}
