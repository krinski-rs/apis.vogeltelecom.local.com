<?php

namespace App\Entity\Cobranca;

class BoletoCancelado
{
    private $bocaCodigoid;

    private $dataInc;

    private $idUser;

    private $boleto;

    public function getBocaCodigoid(): ?int
    {
        return $this->bocaCodigoid;
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

    public function getIdUser(): ?int
    {
        return $this->idUser;
    }

    public function setIdUser(int $idUser): self
    {
        $this->idUser = $idUser;

        return $this;
    }

    public function getBoleto(): ?Boleto
    {
        return $this->boleto;
    }

    public function setBoleto(?Boleto $boleto): self
    {
        $this->boleto = $boleto;

        return $this;
    }
}
