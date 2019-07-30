<?php

namespace App\Entity\Gcdb;

use App\Entity\Luma\Pop;

class CircuitoPop
{
    private $idCircuitoPop;

    private $idPop;

    private $registrante;

    private $dataInc;

    private $endeentratrivaloCodigoid;

    private $ativo;

    private $circuito;

    private $pop;

    public function getIdCircuitoPop(): ?int
    {
        return $this->idCircuitoPop;
    }

    public function getIdPop(): ?int
    {
        return $this->idPop;
    }

    public function setIdPop(int $idPop): self
    {
        $this->idPop = $idPop;

        return $this;
    }

    public function getRegistrante(): ?int
    {
        return $this->registrante;
    }

    public function setRegistrante(?int $registrante): self
    {
        $this->registrante = $registrante;

        return $this;
    }

    public function getDataInc(): ?\DateTimeInterface
    {
        return $this->dataInc;
    }

    public function setDataInc(?\DateTimeInterface $dataInc): self
    {
        $this->dataInc = $dataInc;

        return $this;
    }

    public function getEndeentratrivaloCodigoid(): ?int
    {
        return $this->endeentratrivaloCodigoid;
    }

    public function setEndeentratrivaloCodigoid(?int $endeentratrivaloCodigoid): self
    {
        $this->endeentratrivaloCodigoid = $endeentratrivaloCodigoid;

        return $this;
    }

    public function getAtivo(): ?bool
    {
        return $this->ativo;
    }

    public function setAtivo(?bool $ativo): self
    {
        $this->ativo = $ativo;

        return $this;
    }

    public function getCircuito(): ?Circuito
    {
        return $this->circuito;
    }

    public function setCircuito(?Circuito $circuito): self
    {
        $this->circuito = $circuito;

        return $this;
    }

    public function getPop(): ?Pop
    {
        return $this->pop;
    }

    public function setPop(?Pop $pop): self
    {
        $this->pop = $pop;

        return $this;
    }
}
