<?php

namespace App\Entity\Cobranca;

class Lote
{
    private $loteCodigoid;

    private $datageracao;

    private $idUser;

    private $dataEnvio;

    private $codigoEnvio;

    private $banco;

    public function getLoteCodigoid(): ?int
    {
        return $this->loteCodigoid;
    }

    public function getDatageracao(): ?\DateTimeInterface
    {
        return $this->datageracao;
    }

    public function setDatageracao(\DateTimeInterface $datageracao): self
    {
        $this->datageracao = $datageracao;

        return $this;
    }

    public function getIdUser(): ?int
    {
        return $this->idUser;
    }

    public function setIdUser(int $idUser): self
    {
        $this->idUser = $idUser;

        return $this;
    }

    public function getDataEnvio(): ?\DateTimeInterface
    {
        return $this->dataEnvio;
    }

    public function setDataEnvio(?\DateTimeInterface $dataEnvio): self
    {
        $this->dataEnvio = $dataEnvio;

        return $this;
    }

    public function getCodigoEnvio(): ?string
    {
        return $this->codigoEnvio;
    }

    public function setCodigoEnvio(?string $codigoEnvio): self
    {
        $this->codigoEnvio = $codigoEnvio;

        return $this;
    }

    public function getBanco(): ?Banco
    {
        return $this->banco;
    }

    public function setBanco(?Banco $banco): self
    {
        $this->banco = $banco;

        return $this;
    }
}
