<?php

namespace App\Entity\Financeiro;

class Rangear
{
    private $rangarCodigoid;

    private $rangarDatainc;

    private $rangarInicio;

    private $rangarFim;

    private $rangarAtivo;

    private $rangearSerie;

    public function getRangarCodigoid(): ?int
    {
        return $this->rangarCodigoid;
    }

    public function getRangarDatainc(): ?\DateTimeInterface
    {
        return $this->rangarDatainc;
    }

    public function setRangarDatainc(\DateTimeInterface $rangarDatainc): self
    {
        $this->rangarDatainc = $rangarDatainc;

        return $this;
    }

    public function getRangarInicio(): ?string
    {
        return $this->rangarInicio;
    }

    public function setRangarInicio(string $rangarInicio): self
    {
        $this->rangarInicio = $rangarInicio;

        return $this;
    }

    public function getRangarFim(): ?string
    {
        return $this->rangarFim;
    }

    public function setRangarFim(string $rangarFim): self
    {
        $this->rangarFim = $rangarFim;

        return $this;
    }

    public function getRangarAtivo(): ?bool
    {
        return $this->rangarAtivo;
    }

    public function setRangarAtivo(bool $rangarAtivo): self
    {
        $this->rangarAtivo = $rangarAtivo;

        return $this;
    }

    public function getRangearSerie(): ?string
    {
        return $this->rangearSerie;
    }

    public function setRangearSerie(string $rangearSerie): self
    {
        $this->rangearSerie = $rangearSerie;

        return $this;
    }
}
