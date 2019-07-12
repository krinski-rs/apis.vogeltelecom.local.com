<?php

namespace App\Entity\Gcdb;

class AutUsuarios
{
    private $id;

    private $username;

    private $pass;

    private $nome;

    private $ativo;

    private $canal;

    private $passwordVersion;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getPass(): ?string
    {
        return $this->pass;
    }

    public function setPass(string $pass): self
    {
        $this->pass = $pass;

        return $this;
    }

    public function getNome(): ?string
    {
        return $this->nome;
    }

    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    public function getAtivo(): ?int
    {
        return $this->ativo;
    }

    public function setAtivo(int $ativo): self
    {
        $this->ativo = $ativo;

        return $this;
    }

    public function getCanal(): ?bool
    {
        return $this->canal;
    }

    public function setCanal(bool $canal): self
    {
        $this->canal = $canal;

        return $this;
    }

    public function getPasswordVersion(): ?bool
    {
        return $this->passwordVersion;
    }

    public function setPasswordVersion(bool $passwordVersion): self
    {
        $this->passwordVersion = $passwordVersion;

        return $this;
    }
}
