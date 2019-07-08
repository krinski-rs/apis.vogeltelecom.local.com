<?php

namespace App\Entity\Gcdb;

class CadUsersTelefone
{
    private $id;

    private $ddi;

    private $ddd;

    private $telefone;

    private $ramal;

    private $principal;

    private $emergencia;

    private $admTiposTelefone;

    private $cadUser;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDdi(): ?int
    {
        return $this->ddi;
    }

    public function setDdi(?int $ddi): self
    {
        $this->ddi = $ddi;

        return $this;
    }

    public function getDdd(): ?string
    {
        return $this->ddd;
    }

    public function setDdd(?string $ddd): self
    {
        $this->ddd = $ddd;

        return $this;
    }

    public function getTelefone(): ?string
    {
        return $this->telefone;
    }

    public function setTelefone(?string $telefone): self
    {
        $this->telefone = $telefone;

        return $this;
    }

    public function getRamal(): ?int
    {
        return $this->ramal;
    }

    public function setRamal(?int $ramal): self
    {
        $this->ramal = $ramal;

        return $this;
    }

    public function getPrincipal(): ?bool
    {
        return $this->principal;
    }

    public function setPrincipal(?bool $principal): self
    {
        $this->principal = $principal;

        return $this;
    }

    public function getEmergencia(): ?bool
    {
        return $this->emergencia;
    }

    public function setEmergencia(?bool $emergencia): self
    {
        $this->emergencia = $emergencia;

        return $this;
    }

    public function getAdmTiposTelefone(): ?AdmTipoTelefone
    {
        return $this->admTiposTelefone;
    }

    public function setAdmTiposTelefone(?AdmTipoTelefone $admTiposTelefone): self
    {
        $this->admTiposTelefone = $admTiposTelefone;

        return $this;
    }

    public function getCadUser(): ?CadUsers
    {
        return $this->cadUser;
    }

    public function setCadUser(?CadUsers $cadUser): self
    {
        $this->cadUser = $cadUser;

        return $this;
    }
}
