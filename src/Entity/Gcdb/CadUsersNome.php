<?php

namespace App\Entity\Gcdb;

class CadUsersNome
{
    private $id;

    private $nome;

    private $cadUser;

    private $admTipoNome;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNome(): ?string
    {
        return $this->nome;
    }

    public function setNome(?string $nome): self
    {
        $this->nome = $nome;

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

    public function getAdmTipoNome(): ?AdmTipoNome
    {
        return $this->admTipoNome;
    }

    public function setAdmTipoNome(?AdmTipoNome $admTipoNome): self
    {
        $this->admTipoNome = $admTipoNome;

        return $this;
    }
}
