<?php

namespace App\Entity\Financeiro;

class Envio
{
    private $enviCodigoid;

    private $enviNome;

    public function getEnviCodigoid(): ?int
    {
        return $this->enviCodigoid;
    }

    public function getEnviNome(): ?string
    {
        return $this->enviNome;
    }

    public function setEnviNome(?string $enviNome): self
    {
        $this->enviNome = $enviNome;

        return $this;
    }
}
