<?php

namespace App\Entity\Financeiro;

class Ipciepe
{
    private $ipciepeCodigoid;

    private $ipciepeDatainc;

    private $ipciepePercentual;

    private $ipciepeAcumuladonoano;

    private $ipciepeAcumulado12meses;

    private $ipciepePrazo;

    public function getIpciepeCodigoid(): ?int
    {
        return $this->ipciepeCodigoid;
    }

    public function getIpciepeDatainc(): ?\DateTimeInterface
    {
        return $this->ipciepeDatainc;
    }

    public function setIpciepeDatainc(\DateTimeInterface $ipciepeDatainc): self
    {
        $this->ipciepeDatainc = $ipciepeDatainc;

        return $this;
    }

    public function getIpciepePercentual()
    {
        return $this->ipciepePercentual;
    }

    public function setIpciepePercentual($ipciepePercentual): self
    {
        $this->ipciepePercentual = $ipciepePercentual;

        return $this;
    }

    public function getIpciepeAcumuladonoano()
    {
        return $this->ipciepeAcumuladonoano;
    }

    public function setIpciepeAcumuladonoano($ipciepeAcumuladonoano): self
    {
        $this->ipciepeAcumuladonoano = $ipciepeAcumuladonoano;

        return $this;
    }

    public function getIpciepeAcumulado12meses()
    {
        return $this->ipciepeAcumulado12meses;
    }

    public function setIpciepeAcumulado12meses($ipciepeAcumulado12meses): self
    {
        $this->ipciepeAcumulado12meses = $ipciepeAcumulado12meses;

        return $this;
    }

    public function getIpciepePrazo(): ?\DateTimeInterface
    {
        return $this->ipciepePrazo;
    }

    public function setIpciepePrazo(\DateTimeInterface $ipciepePrazo): self
    {
        $this->ipciepePrazo = $ipciepePrazo;

        return $this;
    }
}
