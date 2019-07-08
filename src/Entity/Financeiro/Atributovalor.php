<?php

namespace App\Entity\Financeiro;

class Atributovalor
{
    private $atrivaloCodigoid;

    private $atrivaloValor;

    private $mask;

    private $atriCodigoid;

    public function getAtrivaloCodigoid(): ?int
    {
        return $this->atrivaloCodigoid;
    }

    public function getAtrivaloValor(): ?string
    {
        return $this->atrivaloValor;
    }

    public function setAtrivaloValor(string $atrivaloValor): self
    {
        $this->atrivaloValor = $atrivaloValor;

        return $this;
    }

    public function getMask(): ?string
    {
        return $this->mask;
    }

    public function setMask(?string $mask): self
    {
        $this->mask = $mask;

        return $this;
    }

    public function getAtriCodigoid(): ?Atributo
    {
        return $this->atriCodigoid;
    }

    public function setAtriCodigoid(?Atributo $atriCodigoid): self
    {
        $this->atriCodigoid = $atriCodigoid;

        return $this;
    }
}
