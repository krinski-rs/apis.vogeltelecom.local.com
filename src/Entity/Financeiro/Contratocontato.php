<?php

namespace App\Entity\Financeiro;

class Contratocontato
{
    private $contcontCodigoid;

    private $usrCodigoid;

    private $contcontContato;

    private $contCodigoid;

    public function getContcontCodigoid(): ?int
    {
        return $this->contcontCodigoid;
    }

    public function getUsrCodigoid(): ?int
    {
        return $this->usrCodigoid;
    }

    public function setUsrCodigoid(int $usrCodigoid): self
    {
        $this->usrCodigoid = $usrCodigoid;

        return $this;
    }

    public function getContcontContato(): ?string
    {
        return $this->contcontContato;
    }

    public function setContcontContato(string $contcontContato): self
    {
        $this->contcontContato = $contcontContato;

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
