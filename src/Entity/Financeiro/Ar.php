<?php

namespace App\Entity\Financeiro;

class Ar
{
    private $arCodigoid;

    private $arNumero;

    private $rangarCodigoid;

    public function getArCodigoid(): ?int
    {
        return $this->arCodigoid;
    }

    public function getArNumero(): ?string
    {
        return $this->arNumero;
    }

    public function setArNumero(string $arNumero): self
    {
        $this->arNumero = $arNumero;

        return $this;
    }

    public function getRangarCodigoid(): ?Rangear
    {
        return $this->rangarCodigoid;
    }

    public function setRangarCodigoid(?Rangear $rangarCodigoid): self
    {
        $this->rangarCodigoid = $rangarCodigoid;

        return $this;
    }
}
