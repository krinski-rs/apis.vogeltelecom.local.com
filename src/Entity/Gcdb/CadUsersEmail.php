<?php

namespace App\Entity\Gcdb;

class CadUsersEmail
{
    private $id;

    private $email;

    private $mailing;

    private $principal;

    private $idAdmTipoLigacao;

    private $cadUser;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getMailing(): ?bool
    {
        return $this->mailing;
    }

    public function setMailing(?bool $mailing): self
    {
        $this->mailing = $mailing;

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

    public function getIdAdmTipoLigacao(): ?int
    {
        return $this->idAdmTipoLigacao;
    }

    public function setIdAdmTipoLigacao(?int $idAdmTipoLigacao): self
    {
        $this->idAdmTipoLigacao = $idAdmTipoLigacao;

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
