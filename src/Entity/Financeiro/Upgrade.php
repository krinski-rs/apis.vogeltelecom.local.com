<?php

namespace App\Entity\Financeiro;

class Upgrade
{
    private $upgrCodigoid;

    private $endeentrCodigoid;

    private $upgrAposativacao;

    private $upgrDatafixa;

    private $upgrDataupgrade;

    private $upgrDatainc;

    private $upgrUsuario;

    private $proposalId;

    private $contCodigoid;

    private $servcapaCodigoid;

    private $upgrProximocodigoid;

    public function getUpgrCodigoid(): ?int
    {
        return $this->upgrCodigoid;
    }

    public function getEndeentrCodigoid(): ?int
    {
        return $this->endeentrCodigoid;
    }

    public function setEndeentrCodigoid(int $endeentrCodigoid): self
    {
        $this->endeentrCodigoid = $endeentrCodigoid;

        return $this;
    }

    public function getUpgrAposativacao(): ?int
    {
        return $this->upgrAposativacao;
    }

    public function setUpgrAposativacao(?int $upgrAposativacao): self
    {
        $this->upgrAposativacao = $upgrAposativacao;

        return $this;
    }

    public function getUpgrDatafixa(): ?\DateTimeInterface
    {
        return $this->upgrDatafixa;
    }

    public function setUpgrDatafixa(?\DateTimeInterface $upgrDatafixa): self
    {
        $this->upgrDatafixa = $upgrDatafixa;

        return $this;
    }

    public function getUpgrDataupgrade(): ?\DateTimeInterface
    {
        return $this->upgrDataupgrade;
    }

    public function setUpgrDataupgrade(?\DateTimeInterface $upgrDataupgrade): self
    {
        $this->upgrDataupgrade = $upgrDataupgrade;

        return $this;
    }

    public function getUpgrDatainc(): ?\DateTimeInterface
    {
        return $this->upgrDatainc;
    }

    public function setUpgrDatainc(\DateTimeInterface $upgrDatainc): self
    {
        $this->upgrDatainc = $upgrDatainc;

        return $this;
    }

    public function getUpgrUsuario(): ?int
    {
        return $this->upgrUsuario;
    }

    public function setUpgrUsuario(?int $upgrUsuario): self
    {
        $this->upgrUsuario = $upgrUsuario;

        return $this;
    }

    public function getProposalId(): ?int
    {
        return $this->proposalId;
    }

    public function setProposalId(?int $proposalId): self
    {
        $this->proposalId = $proposalId;

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

    public function getServcapaCodigoid(): ?Servicocapacidade
    {
        return $this->servcapaCodigoid;
    }

    public function setServcapaCodigoid(?Servicocapacidade $servcapaCodigoid): self
    {
        $this->servcapaCodigoid = $servcapaCodigoid;

        return $this;
    }

    public function getUpgrProximocodigoid(): ?self
    {
        return $this->upgrProximocodigoid;
    }

    public function setUpgrProximocodigoid(?self $upgrProximocodigoid): self
    {
        $this->upgrProximocodigoid = $upgrProximocodigoid;

        return $this;
    }
}
