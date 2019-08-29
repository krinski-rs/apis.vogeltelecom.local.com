<?php

namespace App\Entity\Cobranca;

class MotivoOcorrencia
{
    private $codMotivo;

    private $motivo;

    private $motiCodigoid;

    public function getCodMotivo(): ?string
    {
        return $this->codMotivo;
    }

    public function getMotivo(): ?string
    {
        return $this->motivo;
    }

    public function setMotivo(string $motivo): self
    {
        $this->motivo = $motivo;

        return $this;
    }

    public function getMotiCodigoid(): ?int
    {
        return $this->motiCodigoid;
    }

    public function setMotiCodigoid(int $motiCodigoid): self
    {
        $this->motiCodigoid = $motiCodigoid;

        return $this;
    }
}
