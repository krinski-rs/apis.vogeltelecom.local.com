<?php

namespace App\Entity\Financeiro;

class ServicoAtributo
{
    private $idServicoAtributo;

    private $registrante;

    private $ativo;

    private $atriCodigoid;

    private $servCodigoid;

    public function getIdServicoAtributo(): ?int
    {
        return $this->idServicoAtributo;
    }

    public function getRegistrante(): ?int
    {
        return $this->registrante;
    }

    public function setRegistrante(?int $registrante): self
    {
        $this->registrante = $registrante;

        return $this;
    }

    public function getAtivo(): ?bool
    {
        return $this->ativo;
    }

    public function setAtivo(?bool $ativo): self
    {
        $this->ativo = $ativo;

        return $this;
    }

    public function getAtriCodigoid(): ?Atributo
    {
        return $this->atriCodigoid;
    }

    public function setAtriCodigoid(?Atributo $atriCodigoid): self
    {
        $this->atriCodigoid = $atriCodigoid;

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
}
