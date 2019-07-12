<?php

namespace App\Entity\Financeiro;

class Inpc
{
    private $inpcCodigoid;

    private $inpcDatainc;

    private $inpcPercentual;

    private $inpcAcumuladonoano;

    private $inpcAcumulado12meses;

    private $inpcPrazo;

    public function getInpcCodigoid(): ?int
    {
        return $this->inpcCodigoid;
    }

    public function getInpcDatainc(): ?\DateTimeInterface
    {
        return $this->inpcDatainc;
    }

    public function setInpcDatainc(\DateTimeInterface $inpcDatainc): self
    {
        $this->inpcDatainc = $inpcDatainc;

        return $this;
    }

    public function getInpcPercentual()
    {
        return $this->inpcPercentual;
    }

    public function setInpcPercentual($inpcPercentual): self
    {
        $this->inpcPercentual = $inpcPercentual;

        return $this;
    }

    public function getInpcAcumuladonoano()
    {
        return $this->inpcAcumuladonoano;
    }

    public function setInpcAcumuladonoano($inpcAcumuladonoano): self
    {
        $this->inpcAcumuladonoano = $inpcAcumuladonoano;

        return $this;
    }

    public function getInpcAcumulado12meses()
    {
        return $this->inpcAcumulado12meses;
    }

    public function setInpcAcumulado12meses($inpcAcumulado12meses): self
    {
        $this->inpcAcumulado12meses = $inpcAcumulado12meses;

        return $this;
    }

    public function getInpcPrazo(): ?\DateTimeInterface
    {
        return $this->inpcPrazo;
    }

    public function setInpcPrazo(\DateTimeInterface $inpcPrazo): self
    {
        $this->inpcPrazo = $inpcPrazo;

        return $this;
    }
}
