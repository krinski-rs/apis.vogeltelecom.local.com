<?php

namespace App\Entity\Financeiro;

class Atributo
{
    private $atriCodigoid;

    private $atriNome;

    private $atribTipohtml;

    private $atribMask;

    public function getAtriCodigoid(): ?int
    {
        return $this->atriCodigoid;
    }

    public function getAtriNome(): ?string
    {
        return $this->atriNome;
    }

    public function setAtriNome(string $atriNome): self
    {
        $this->atriNome = $atriNome;

        return $this;
    }

    public function getAtribTipohtml(): ?string
    {
        return $this->atribTipohtml;
    }

    public function setAtribTipohtml(string $atribTipohtml): self
    {
        $this->atribTipohtml = $atribTipohtml;

        return $this;
    }

    public function getAtribMask(): ?string
    {
        return $this->atribMask;
    }

    public function setAtribMask(?string $atribMask): self
    {
        $this->atribMask = $atribMask;

        return $this;
    }
}
