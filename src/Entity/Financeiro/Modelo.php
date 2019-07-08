<?php

namespace App\Entity\Financeiro;

class Modelo
{
    private $modeCodigoid;

    private $modeNome;

    private $modeAtivo;

    private $modeDatainc;

    private $modeDatafim;

    private $contCodigoid;

    public function getModeCodigoid(): ?int
    {
        return $this->modeCodigoid;
    }

    public function getModeNome(): ?string
    {
        return $this->modeNome;
    }

    public function setModeNome(string $modeNome): self
    {
        $this->modeNome = $modeNome;

        return $this;
    }

    public function getModeAtivo(): ?bool
    {
        return $this->modeAtivo;
    }

    public function setModeAtivo(bool $modeAtivo): self
    {
        $this->modeAtivo = $modeAtivo;

        return $this;
    }

    public function getModeDatainc(): ?\DateTimeInterface
    {
        return $this->modeDatainc;
    }

    public function setModeDatainc(\DateTimeInterface $modeDatainc): self
    {
        $this->modeDatainc = $modeDatainc;

        return $this;
    }

    public function getModeDatafim(): ?\DateTimeInterface
    {
        return $this->modeDatafim;
    }

    public function setModeDatafim(?\DateTimeInterface $modeDatafim): self
    {
        $this->modeDatafim = $modeDatafim;

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
