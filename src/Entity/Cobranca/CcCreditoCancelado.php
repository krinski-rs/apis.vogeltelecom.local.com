<?php

namespace App\Entity\Cobranca;

class CcCreditoCancelado
{
    private $idUser;

    private $dataInc;

    private $valorAnterior;

    private $motivo;

    private $cc;

    public function getIdUser(): ?int
    {
        return $this->idUser;
    }

    public function setIdUser(int $idUser): self
    {
        $this->idUser = $idUser;

        return $this;
    }

    public function getDataInc(): ?\DateTimeInterface
    {
        return $this->dataInc;
    }

    public function setDataInc(\DateTimeInterface $dataInc): self
    {
        $this->dataInc = $dataInc;

        return $this;
    }

    public function getValorAnterior()
    {
        return $this->valorAnterior;
    }

    public function setValorAnterior($valorAnterior): self
    {
        $this->valorAnterior = $valorAnterior;

        return $this;
    }

    public function getMotivo(): ?string
    {
        return $this->motivo;
    }

    public function setMotivo(?string $motivo): self
    {
        $this->motivo = $motivo;

        return $this;
    }

    public function getCc(): ?Cc
    {
        return $this->cc;
    }

    public function setCc(?Cc $cc): self
    {
        $this->cc = $cc;

        return $this;
    }
}
