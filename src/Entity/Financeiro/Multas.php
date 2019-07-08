<?php

namespace App\Entity\Financeiro;

class Multas
{
    private $multCodigoid;

    private $multAtraso;

    private $multJuro;

    private $multMora;

    private $multDowngrade;

    private $multRecisao;

    private $multCobrardesconto;

    private $multCobrardescontofuturo;

    public function getMultCodigoid(): ?int
    {
        return $this->multCodigoid;
    }

    public function getMultAtraso()
    {
        return $this->multAtraso;
    }

    public function setMultAtraso($multAtraso): self
    {
        $this->multAtraso = $multAtraso;

        return $this;
    }

    public function getMultJuro()
    {
        return $this->multJuro;
    }

    public function setMultJuro($multJuro): self
    {
        $this->multJuro = $multJuro;

        return $this;
    }

    public function getMultMora()
    {
        return $this->multMora;
    }

    public function setMultMora($multMora): self
    {
        $this->multMora = $multMora;

        return $this;
    }

    public function getMultDowngrade()
    {
        return $this->multDowngrade;
    }

    public function setMultDowngrade($multDowngrade): self
    {
        $this->multDowngrade = $multDowngrade;

        return $this;
    }

    public function getMultRecisao()
    {
        return $this->multRecisao;
    }

    public function setMultRecisao($multRecisao): self
    {
        $this->multRecisao = $multRecisao;

        return $this;
    }

    public function getMultCobrardesconto(): ?bool
    {
        return $this->multCobrardesconto;
    }

    public function setMultCobrardesconto(bool $multCobrardesconto): self
    {
        $this->multCobrardesconto = $multCobrardesconto;

        return $this;
    }

    public function getMultCobrardescontofuturo(): ?bool
    {
        return $this->multCobrardescontofuturo;
    }

    public function setMultCobrardescontofuturo(bool $multCobrardescontofuturo): self
    {
        $this->multCobrardescontofuturo = $multCobrardescontofuturo;

        return $this;
    }
}
