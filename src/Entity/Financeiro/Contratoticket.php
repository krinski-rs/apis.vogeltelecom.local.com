<?php

namespace App\Entity\Financeiro;

class Contratoticket
{
    private $conttickCodigoid;

    private $tickCodigoid;

    private $contCodigoid;

    public function getConttickCodigoid(): ?int
    {
        return $this->conttickCodigoid;
    }

    public function getTickCodigoid(): ?int
    {
        return $this->tickCodigoid;
    }

    public function setTickCodigoid(int $tickCodigoid): self
    {
        $this->tickCodigoid = $tickCodigoid;

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
