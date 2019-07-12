<?php

namespace App\Entity\Financeiro;

class Capacidade
{
    private $capaCodigoid;

    private $capaCapacidade;

    public function getCapaCodigoid(): ?int
    {
        return $this->capaCodigoid;
    }

    public function getCapaCapacidade(): ?int
    {
        return $this->capaCapacidade;
    }

    public function setCapaCapacidade(int $capaCapacidade): self
    {
        $this->capaCapacidade = $capaCapacidade;

        return $this;
    }
}
