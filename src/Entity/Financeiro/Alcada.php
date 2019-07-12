<?php

namespace App\Entity\Financeiro;

class Alcada
{
    private $alcaCodigoid;

    private $alcaPercentual;

    private $alcaDatainc;

    public function getAlcaCodigoid(): ?int
    {
        return $this->alcaCodigoid;
    }

    public function getAlcaPercentual()
    {
        return $this->alcaPercentual;
    }

    public function setAlcaPercentual($alcaPercentual): self
    {
        $this->alcaPercentual = $alcaPercentual;

        return $this;
    }

    public function getAlcaDatainc(): ?\DateTimeInterface
    {
        return $this->alcaDatainc;
    }

    public function setAlcaDatainc(\DateTimeInterface $alcaDatainc): self
    {
        $this->alcaDatainc = $alcaDatainc;

        return $this;
    }
}
