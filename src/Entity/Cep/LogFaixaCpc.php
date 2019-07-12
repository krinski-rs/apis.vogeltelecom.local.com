<?php

namespace App\Entity\Cep;

class LogFaixaCpc
{
    private $cpcNuInicial;

    private $cpcNuFinal;

    private $cpcNuSequencial;

    public function getCpcNuInicial(): ?int
    {
        return $this->cpcNuInicial;
    }

    public function getCpcNuFinal(): ?int
    {
        return $this->cpcNuFinal;
    }

    public function setCpcNuFinal(int $cpcNuFinal): self
    {
        $this->cpcNuFinal = $cpcNuFinal;

        return $this;
    }

    public function getCpcNuSequencial(): ?LogCpc
    {
        return $this->cpcNuSequencial;
    }

    public function setCpcNuSequencial(?LogCpc $cpcNuSequencial): self
    {
        $this->cpcNuSequencial = $cpcNuSequencial;

        return $this;
    }
}
