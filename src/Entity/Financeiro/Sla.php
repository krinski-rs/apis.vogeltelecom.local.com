<?php

namespace App\Entity\Financeiro;

class Sla
{
    private $slaCodigoid;

    private $slaNome;

    private $slaDatainc;

    private $slaDatafim;

    private $slaDisponibilidade;

    private $slaProximocodigoid;

    public function getSlaCodigoid(): ?int
    {
        return $this->slaCodigoid;
    }

    public function getSlaNome(): ?string
    {
        return $this->slaNome;
    }

    public function setSlaNome(string $slaNome): self
    {
        $this->slaNome = $slaNome;

        return $this;
    }

    public function getSlaDatainc(): ?\DateTimeInterface
    {
        return $this->slaDatainc;
    }

    public function setSlaDatainc(\DateTimeInterface $slaDatainc): self
    {
        $this->slaDatainc = $slaDatainc;

        return $this;
    }

    public function getSlaDatafim(): ?\DateTimeInterface
    {
        return $this->slaDatafim;
    }

    public function setSlaDatafim(?\DateTimeInterface $slaDatafim): self
    {
        $this->slaDatafim = $slaDatafim;

        return $this;
    }

    public function getSlaDisponibilidade()
    {
        return $this->slaDisponibilidade;
    }

    public function setSlaDisponibilidade($slaDisponibilidade): self
    {
        $this->slaDisponibilidade = $slaDisponibilidade;

        return $this;
    }

    public function getSlaProximocodigoid(): ?self
    {
        return $this->slaProximocodigoid;
    }

    public function setSlaProximocodigoid(?self $slaProximocodigoid): self
    {
        $this->slaProximocodigoid = $slaProximocodigoid;

        return $this;
    }
}
