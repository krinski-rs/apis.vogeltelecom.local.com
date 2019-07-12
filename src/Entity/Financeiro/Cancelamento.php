<?php

namespace App\Entity\Financeiro;

class Cancelamento
{
    private $cancCodigoid;

    private $usrCodigoid;

    private $cancDatasolicitacao;

    private $cancDatacancelado;

    private $cancCumpriraviso;

    private $cancDatainc;

    private $contCodigoid;

    public function getCancCodigoid(): ?int
    {
        return $this->cancCodigoid;
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

    public function getCancDatasolicitacao(): ?\DateTimeInterface
    {
        return $this->cancDatasolicitacao;
    }

    public function setCancDatasolicitacao(\DateTimeInterface $cancDatasolicitacao): self
    {
        $this->cancDatasolicitacao = $cancDatasolicitacao;

        return $this;
    }

    public function getCancDatacancelado(): ?\DateTimeInterface
    {
        return $this->cancDatacancelado;
    }

    public function setCancDatacancelado(?\DateTimeInterface $cancDatacancelado): self
    {
        $this->cancDatacancelado = $cancDatacancelado;

        return $this;
    }

    public function getCancCumpriraviso(): ?bool
    {
        return $this->cancCumpriraviso;
    }

    public function setCancCumpriraviso(bool $cancCumpriraviso): self
    {
        $this->cancCumpriraviso = $cancCumpriraviso;

        return $this;
    }

    public function getCancDatainc(): ?\DateTimeInterface
    {
        return $this->cancDatainc;
    }

    public function setCancDatainc(?\DateTimeInterface $cancDatainc): self
    {
        $this->cancDatainc = $cancDatainc;

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
