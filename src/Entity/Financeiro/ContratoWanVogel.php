<?php

namespace App\Entity\Financeiro;

class ContratoWanVogel
{
    private $id;

    private $ctrCodigo;

    private $dataInc;

    private $contCodigoid;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCtrCodigo(): ?int
    {
        return $this->ctrCodigo;
    }

    public function setCtrCodigo(int $ctrCodigo): self
    {
        $this->ctrCodigo = $ctrCodigo;

        return $this;
    }

    public function getDataInc(): ?\DateTimeInterface
    {
        return $this->dataInc;
    }

    public function setDataInc(?\DateTimeInterface $dataInc): self
    {
        $this->dataInc = $dataInc;

        return $this;
    }

    public function getContCodigoid(): ?Contrato
    {
        return $this->contCodigoid;
    }

    public function setContCodigoid(?Contrato $contCodigoid): self
    {
        $this->contCodigoid = $contCodigoid;

        return $this;
    }
}
