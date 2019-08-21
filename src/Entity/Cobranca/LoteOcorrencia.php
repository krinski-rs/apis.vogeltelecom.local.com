<?php

namespace App\Entity\Cobranca;

class LoteOcorrencia
{
    private $ocorCodigoid;

    private $codOcorrencia;

    private $ocorrencia;

    public function getOcorCodigoid(): ?int
    {
        return $this->ocorCodigoid;
    }

    public function getCodOcorrencia(): ?string
    {
        return $this->codOcorrencia;
    }

    public function setCodOcorrencia(string $codOcorrencia): self
    {
        $this->codOcorrencia = $codOcorrencia;

        return $this;
    }

    public function getOcorrencia(): ?string
    {
        return $this->ocorrencia;
    }

    public function setOcorrencia(string $ocorrencia): self
    {
        $this->ocorrencia = $ocorrencia;

        return $this;
    }
}
