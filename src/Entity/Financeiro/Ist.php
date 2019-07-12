<?php

namespace App\Entity\Financeiro;

class Ist
{
    private $istCodigoid;

    private $istDatainc;

    private $istPercentual;

    private $istAcumuladonoano;

    private $istAcumulado12meses;

    private $istPrazo;

    public function getIstCodigoid(): ?int
    {
        return $this->istCodigoid;
    }

    public function getIstDatainc(): ?\DateTimeInterface
    {
        return $this->istDatainc;
    }

    public function setIstDatainc(\DateTimeInterface $istDatainc): self
    {
        $this->istDatainc = $istDatainc;

        return $this;
    }

    public function getIstPercentual()
    {
        return $this->istPercentual;
    }

    public function setIstPercentual($istPercentual): self
    {
        $this->istPercentual = $istPercentual;

        return $this;
    }

    public function getIstAcumuladonoano()
    {
        return $this->istAcumuladonoano;
    }

    public function setIstAcumuladonoano($istAcumuladonoano): self
    {
        $this->istAcumuladonoano = $istAcumuladonoano;

        return $this;
    }

    public function getIstAcumulado12meses()
    {
        return $this->istAcumulado12meses;
    }

    public function setIstAcumulado12meses($istAcumulado12meses): self
    {
        $this->istAcumulado12meses = $istAcumulado12meses;

        return $this;
    }

    public function getIstPrazo(): ?\DateTimeInterface
    {
        return $this->istPrazo;
    }

    public function setIstPrazo(\DateTimeInterface $istPrazo): self
    {
        $this->istPrazo = $istPrazo;

        return $this;
    }
}
