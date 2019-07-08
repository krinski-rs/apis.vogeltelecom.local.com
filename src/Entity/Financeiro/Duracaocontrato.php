<?php

namespace App\Entity\Financeiro;

class Duracaocontrato
{
    private $duracontCodigoid;

    private $duracontMeses;

    private $duracontPeriodo;

    private $duracontInicio;

    private $duracontFim;

    private $duracontRenovado;

    private $duracontProximocodigoid;

    private $contCodigoid;

    public function getDuracontCodigoid(): ?int
    {
        return $this->duracontCodigoid;
    }

    public function getDuracontMeses(): ?bool
    {
        return $this->duracontMeses;
    }

    public function setDuracontMeses(bool $duracontMeses): self
    {
        $this->duracontMeses = $duracontMeses;

        return $this;
    }

    public function getDuracontPeriodo(): ?int
    {
        return $this->duracontPeriodo;
    }

    public function setDuracontPeriodo(int $duracontPeriodo): self
    {
        $this->duracontPeriodo = $duracontPeriodo;

        return $this;
    }

    public function getDuracontInicio(): ?\DateTimeInterface
    {
        return $this->duracontInicio;
    }

    public function setDuracontInicio(?\DateTimeInterface $duracontInicio): self
    {
        $this->duracontInicio = $duracontInicio;

        return $this;
    }

    public function getDuracontFim(): ?\DateTimeInterface
    {
        return $this->duracontFim;
    }

    public function setDuracontFim(?\DateTimeInterface $duracontFim): self
    {
        $this->duracontFim = $duracontFim;

        return $this;
    }

    public function getDuracontRenovado(): ?bool
    {
        return $this->duracontRenovado;
    }

    public function setDuracontRenovado(?bool $duracontRenovado): self
    {
        $this->duracontRenovado = $duracontRenovado;

        return $this;
    }

    public function getDuracontProximocodigoid(): ?self
    {
        return $this->duracontProximocodigoid;
    }

    public function setDuracontProximocodigoid(?self $duracontProximocodigoid): self
    {
        $this->duracontProximocodigoid = $duracontProximocodigoid;

        return $this;
    }

    public function getContCodigoid(): ?Contrato
    {
        return $this->contCodigoid;
    }

    public function setContCodigoid(?Contrato $contCodigoid): self
    {
        $this->contCodigoid = $contCodigoid;

        return $this;
    }
}
