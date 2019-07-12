<?php

namespace App\Entity\Financeiro;

class ServicoDiscriminacao
{
    private $servdiscCodigoid;

    private $servdiscValorpadrao;

    private $servCodigoid;

    private $idDiscriminacao;

    public function getServdiscCodigoid(): ?int
    {
        return $this->servdiscCodigoid;
    }

    public function getServdiscValorpadrao()
    {
        return $this->servdiscValorpadrao;
    }

    public function setServdiscValorpadrao($servdiscValorpadrao): self
    {
        $this->servdiscValorpadrao = $servdiscValorpadrao;

        return $this;
    }

    public function getServCodigoid(): ?Servico
    {
        return $this->servCodigoid;
    }

    public function setServCodigoid(?Servico $servCodigoid): self
    {
        $this->servCodigoid = $servCodigoid;

        return $this;
    }

    public function getIdDiscriminacao(): ?Discriminacao
    {
        return $this->idDiscriminacao;
    }

    public function setIdDiscriminacao(?Discriminacao $idDiscriminacao): self
    {
        $this->idDiscriminacao = $idDiscriminacao;

        return $this;
    }
}
