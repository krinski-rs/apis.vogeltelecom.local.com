<?php

namespace App\Entity\Financeiro;

use App\Entity\Gcdb\AutUsuarios;

class InformacaoAdicionalCircuito
{
    private $infoadiccircCodigoid;

    private $infoadiccircDatainc;

    private $infoadiccircDescricao;

    private $infoadiccircTipo;

    private $contCodigoid;

    private $usuaCodigoid;

    private $usuaCodigoidRemovido;

    public function getInfoadiccircCodigoid(): ?int
    {
        return $this->infoadiccircCodigoid;
    }

    public function getInfoadiccircDatainc(): ?\DateTimeInterface
    {
        return $this->infoadiccircDatainc;
    }

    public function setInfoadiccircDatainc(\DateTimeInterface $infoadiccircDatainc): self
    {
        $this->infoadiccircDatainc = $infoadiccircDatainc;

        return $this;
    }

    public function getInfoadiccircDescricao(): ?string
    {
        return $this->infoadiccircDescricao;
    }

    public function setInfoadiccircDescricao(string $infoadiccircDescricao): self
    {
        $this->infoadiccircDescricao = $infoadiccircDescricao;

        return $this;
    }

    public function getInfoadiccircTipo(): ?string
    {
        return $this->infoadiccircTipo;
    }

    public function setInfoadiccircTipo(string $infoadiccircTipo): self
    {
        $this->infoadiccircTipo = $infoadiccircTipo;

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

    public function getUsuaCodigoid(): ?AutUsuarios
    {
        return $this->usuaCodigoid;
    }

    public function setUsuaCodigoid(?AutUsuarios $usuaCodigoid): self
    {
        $this->usuaCodigoid = $usuaCodigoid;

        return $this;
    }

    public function getUsuaCodigoidRemovido(): ?AutUsuarios
    {
        return $this->usuaCodigoidRemovido;
    }

    public function setUsuaCodigoidRemovido(?AutUsuarios $usuaCodigoidRemovido): self
    {
        $this->usuaCodigoidRemovido = $usuaCodigoidRemovido;

        return $this;
    }
}
