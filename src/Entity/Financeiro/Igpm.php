<?php

namespace App\Entity\Financeiro;

class Igpm
{
    private $igpmCodigoid;

    private $igpmDatainc;

    private $igpmPercentual;

    private $igpmAcumuladonoano;

    private $igpmAcumulado12meses;

    private $igpmPrazo;

    public function getIgpmCodigoid(): ?int
    {
        return $this->igpmCodigoid;
    }

    public function getIgpmDatainc(): ?\DateTimeInterface
    {
        return $this->igpmDatainc;
    }

    public function setIgpmDatainc(\DateTimeInterface $igpmDatainc): self
    {
        $this->igpmDatainc = $igpmDatainc;

        return $this;
    }

    public function getIgpmPercentual()
    {
        return $this->igpmPercentual;
    }

    public function setIgpmPercentual($igpmPercentual): self
    {
        $this->igpmPercentual = $igpmPercentual;

        return $this;
    }

    public function getIgpmAcumuladonoano()
    {
        return $this->igpmAcumuladonoano;
    }

    public function setIgpmAcumuladonoano($igpmAcumuladonoano): self
    {
        $this->igpmAcumuladonoano = $igpmAcumuladonoano;

        return $this;
    }

    public function getIgpmAcumulado12meses()
    {
        return $this->igpmAcumulado12meses;
    }

    public function setIgpmAcumulado12meses($igpmAcumulado12meses): self
    {
        $this->igpmAcumulado12meses = $igpmAcumulado12meses;

        return $this;
    }

    public function getIgpmPrazo(): ?\DateTimeInterface
    {
        return $this->igpmPrazo;
    }

    public function setIgpmPrazo(\DateTimeInterface $igpmPrazo): self
    {
        $this->igpmPrazo = $igpmPrazo;

        return $this;
    }
}
