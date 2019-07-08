<?php

namespace App\Entity\Financeiro;

class Gruposervico
{
    private $grupservCodigoid;

    private $grupservNome;

    private $grupservDescricao;

    private $grupservDatainc;

    public function getGrupservCodigoid(): ?int
    {
        return $this->grupservCodigoid;
    }

    public function getGrupservNome(): ?string
    {
        return $this->grupservNome;
    }

    public function setGrupservNome(string $grupservNome): self
    {
        $this->grupservNome = $grupservNome;

        return $this;
    }

    public function getGrupservDescricao(): ?string
    {
        return $this->grupservDescricao;
    }

    public function setGrupservDescricao(string $grupservDescricao): self
    {
        $this->grupservDescricao = $grupservDescricao;

        return $this;
    }

    public function getGrupservDatainc(): ?\DateTimeInterface
    {
        return $this->grupservDatainc;
    }

    public function setGrupservDatainc(\DateTimeInterface $grupservDatainc): self
    {
        $this->grupservDatainc = $grupservDatainc;

        return $this;
    }
}
