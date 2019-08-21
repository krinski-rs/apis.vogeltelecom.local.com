<?php

namespace App\Entity\Cobranca;

class InvoiceContract
{
    private $dateRecord;

    private $billed;

    private $idContract;

    private $pendency;

    public function getDateRecord(): ?\DateTimeInterface
    {
        return $this->dateRecord;
    }

    public function getBilled(): ?bool
    {
        return $this->billed;
    }

    public function setBilled(?bool $billed): self
    {
        $this->billed = $billed;

        return $this;
    }

    public function getIdContract(): ?int
    {
        return $this->idContract;
    }

    public function setIdContract(int $idContract): self
    {
        $this->idContract = $idContract;

        return $this;
    }

    public function getPendency(): ?bool
    {
        return $this->pendency;
    }

    public function setPendency(?bool $pendency): self
    {
        $this->pendency = $pendency;

        return $this;
    }
}
