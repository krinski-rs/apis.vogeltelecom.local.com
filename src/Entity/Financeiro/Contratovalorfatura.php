<?php

namespace App\Entity\Financeiro;

class Contratovalorfatura
{
    private $contvalofatuCodigoid;

    private $contvaloCodigoid;

    private $fatuCodigoid;

    public function getContvalofatuCodigoid(): ?int
    {
        return $this->contvalofatuCodigoid;
    }

    public function getContvaloCodigoid(): ?Contratovalor
    {
        return $this->contvaloCodigoid;
    }

    public function setContvaloCodigoid(?Contratovalor $contvaloCodigoid): self
    {
        $this->contvaloCodigoid = $contvaloCodigoid;

        return $this;
    }

    public function getFatuCodigoid(): ?Fatura
    {
        return $this->fatuCodigoid;
    }

    public function setFatuCodigoid(?Fatura $fatuCodigoid): self
    {
        $this->fatuCodigoid = $fatuCodigoid;

        return $this;
    }
}
