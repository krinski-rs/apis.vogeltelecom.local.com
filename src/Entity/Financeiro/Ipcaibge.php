<?php

namespace App\Entity\Financeiro;

class Ipcaibge
{
    private $ipcaibgeCodigoid;

    private $ipcaibgeDatainc;

    private $ipcaibgePercentual;

    private $ipcaibgeAcumuladonoano;

    private $ipcaibgeAcumulado12meses;

    private $ipcaibgePrazo;

    public function getIpcaibgeCodigoid(): ?int
    {
        return $this->ipcaibgeCodigoid;
    }

    public function getIpcaibgeDatainc(): ?\DateTimeInterface
    {
        return $this->ipcaibgeDatainc;
    }

    public function setIpcaibgeDatainc(\DateTimeInterface $ipcaibgeDatainc): self
    {
        $this->ipcaibgeDatainc = $ipcaibgeDatainc;

        return $this;
    }

    public function getIpcaibgePercentual()
    {
        return $this->ipcaibgePercentual;
    }

    public function setIpcaibgePercentual($ipcaibgePercentual): self
    {
        $this->ipcaibgePercentual = $ipcaibgePercentual;

        return $this;
    }

    public function getIpcaibgeAcumuladonoano()
    {
        return $this->ipcaibgeAcumuladonoano;
    }

    public function setIpcaibgeAcumuladonoano($ipcaibgeAcumuladonoano): self
    {
        $this->ipcaibgeAcumuladonoano = $ipcaibgeAcumuladonoano;

        return $this;
    }

    public function getIpcaibgeAcumulado12meses()
    {
        return $this->ipcaibgeAcumulado12meses;
    }

    public function setIpcaibgeAcumulado12meses($ipcaibgeAcumulado12meses): self
    {
        $this->ipcaibgeAcumulado12meses = $ipcaibgeAcumulado12meses;

        return $this;
    }

    public function getIpcaibgePrazo(): ?\DateTimeInterface
    {
        return $this->ipcaibgePrazo;
    }

    public function setIpcaibgePrazo(\DateTimeInterface $ipcaibgePrazo): self
    {
        $this->ipcaibgePrazo = $ipcaibgePrazo;

        return $this;
    }
}
