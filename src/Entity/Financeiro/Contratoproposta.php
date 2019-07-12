<?php

namespace App\Entity\Financeiro;

class Contratoproposta
{
    private $id;

    private $idproposal;

    private $idcontrato;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdproposal(): ?int
    {
        return $this->idproposal;
    }

    public function setIdproposal(int $idproposal): self
    {
        $this->idproposal = $idproposal;

        return $this;
    }

    public function getIdcontrato(): ?int
    {
        return $this->idcontrato;
    }

    public function setIdcontrato(int $idcontrato): self
    {
        $this->idcontrato = $idcontrato;

        return $this;
    }
}
