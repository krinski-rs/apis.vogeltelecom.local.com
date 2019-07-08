<?php

namespace App\Entity\Financeiro;

class Confirmacao
{
    private $confCodigoid;

    private $confTipo;

    private $confDatainc;

    private $confDataconfi;

    private $usuaCodigoid;

    private $confCiente;

    private $confJustificativa;

    private $confContato;

    private $ativCodigoid;

    public function getConfCodigoid(): ?int
    {
        return $this->confCodigoid;
    }

    public function getConfTipo(): ?string
    {
        return $this->confTipo;
    }

    public function setConfTipo(string $confTipo): self
    {
        $this->confTipo = $confTipo;

        return $this;
    }

    public function getConfDatainc(): ?\DateTimeInterface
    {
        return $this->confDatainc;
    }

    public function setConfDatainc(\DateTimeInterface $confDatainc): self
    {
        $this->confDatainc = $confDatainc;

        return $this;
    }

    public function getConfDataconfi(): ?\DateTimeInterface
    {
        return $this->confDataconfi;
    }

    public function setConfDataconfi(\DateTimeInterface $confDataconfi): self
    {
        $this->confDataconfi = $confDataconfi;

        return $this;
    }

    public function getUsuaCodigoid(): ?int
    {
        return $this->usuaCodigoid;
    }

    public function setUsuaCodigoid(int $usuaCodigoid): self
    {
        $this->usuaCodigoid = $usuaCodigoid;

        return $this;
    }

    public function getConfCiente(): ?bool
    {
        return $this->confCiente;
    }

    public function setConfCiente(bool $confCiente): self
    {
        $this->confCiente = $confCiente;

        return $this;
    }

    public function getConfJustificativa(): ?string
    {
        return $this->confJustificativa;
    }

    public function setConfJustificativa(?string $confJustificativa): self
    {
        $this->confJustificativa = $confJustificativa;

        return $this;
    }

    public function getConfContato(): ?string
    {
        return $this->confContato;
    }

    public function setConfContato(?string $confContato): self
    {
        $this->confContato = $confContato;

        return $this;
    }

    public function getAtivCodigoid(): ?Ativacao
    {
        return $this->ativCodigoid;
    }

    public function setAtivCodigoid(?Ativacao $ativCodigoid): self
    {
        $this->ativCodigoid = $ativCodigoid;

        return $this;
    }
}
