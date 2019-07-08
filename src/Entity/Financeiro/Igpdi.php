<?php

namespace App\Entity\Financeiro;

class Igpdi
{
    private $igpdiCodigoid;

    private $igpdiDatainc;

    private $igpdiPercentual;

    private $igpdiAcumuladonoano;

    private $igpdiAcumulado12meses;

    private $igpdiPrazo;

    public function getIgpdiCodigoid(): ?int
    {
        return $this->igpdiCodigoid;
    }

    public function getIgpdiDatainc(): ?\DateTimeInterface
    {
        return $this->igpdiDatainc;
    }

    public function setIgpdiDatainc(\DateTimeInterface $igpdiDatainc): self
    {
        $this->igpdiDatainc = $igpdiDatainc;

        return $this;
    }

    public function getIgpdiPercentual()
    {
        return $this->igpdiPercentual;
    }

    public function setIgpdiPercentual($igpdiPercentual): self
    {
        $this->igpdiPercentual = $igpdiPercentual;

        return $this;
    }

    public function getIgpdiAcumuladonoano()
    {
        return $this->igpdiAcumuladonoano;
    }

    public function setIgpdiAcumuladonoano($igpdiAcumuladonoano): self
    {
        $this->igpdiAcumuladonoano = $igpdiAcumuladonoano;

        return $this;
    }

    public function getIgpdiAcumulado12meses()
    {
        return $this->igpdiAcumulado12meses;
    }

    public function setIgpdiAcumulado12meses($igpdiAcumulado12meses): self
    {
        $this->igpdiAcumulado12meses = $igpdiAcumulado12meses;

        return $this;
    }

    public function getIgpdiPrazo(): ?\DateTimeInterface
    {
        return $this->igpdiPrazo;
    }

    public function setIgpdiPrazo(\DateTimeInterface $igpdiPrazo): self
    {
        $this->igpdiPrazo = $igpdiPrazo;

        return $this;
    }
}
